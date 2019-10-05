<?php

namespace App\Console\Commands;

use \App\OAIURL;
use Illuminate\Console\Command;

class MARCHarvester extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oai:marcharvest {cantidad?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cosechador de MARC endpoint ESSALUD';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $oaiurls = OAIURL::where('harvest', 1)->get();
        } catch (\Exception $e) {
            echo end($e->errorInfo);
            exit(1);
        }
        
        //Setup error and warning preferences
        error_reporting(E_ALL ^ E_WARNING); 
        $use_errors = libxml_use_internal_errors(true);

        //Setup Source Information
        $sourceName = 'ESSALUD';
        
        //To be nice to OAI-PMH sites set a wait time for each request (e.g. arXiv suggests 20 seconds)
        $sleepTime = 20;
        
        //Set date to to allow updates
        $dateTag = date("Y-m-d");
        
        //Setup archive directory
        // $cwd = getcwd();
        $cwd = 'storage/app/public';

        // Schema
        $metaFormat = 'marc21';

        foreach ($oaiurls as $oaiURL) {
            $url = $oaiURL->url;
            $xmlObj = $this->identifyTarget($url);
        
            //If no response from OAI-PMH server then exit
            if (!$xmlObj) {
                echo "\e[1;37;41m[ERROR]\e[0m No se puede conectar al servidor OAI-PMH en $url \n";
                if($masterFile)
                {
                    //Finalize master XML file
                    file_put_contents($masterFile, "</ListRecords>\n", FILE_APPEND | LOCK_EX);
                }
                exit(1);
            }

            //Collect repository information from returned XML
            $repoName = $xmlObj->Identify->repositoryName;
            echo "\e[1;37;46m[ESTADO]\e[0m Conectado al archivo: $repoName \n";
    
            // Directory name
            $dirname = $this->directory($repoName, $cwd);
            
            //Check that oai_dc is supported by the OAI-PMH services at target site
            $formatOK = $this->checkSchemaSupport($metaFormat, $url);

            //If oai_dc is not supported then exit
            if ($formatOK) {    
                echo "\e[1;37;46m[ESTADO]\e[0m $repoName archivo soporta $metaFormat \n";
            } else {
                echo "\e[1;37;41m[ERROR]\e[0m $repoName archivo no soporta $metaFormat Finalizando.\n";
                echo "\e[1;37;41m[ERROR]\e[0m Finalizando.\n";
                exit (0);
            }

            //Get a full list of available record sets from the target server to loop through
            $sets = $this->listSets($url);

            //Create Master file
            $masterFile = $this->createFile($sourceName, $dirname);

            if (!$masterFile){
                echo "\e[1;37;41m[ERROR]\e[0m No se ha podido crear el archivo";
                exit(1);
            }

            $params = [
                    'url' => $url, 
                    'dirname'=>$dirname, 
                    'masterFile'=>$masterFile, 
                    'sourceName'=>$sourceName, 
                    'dateTag'=>$dateTag, 
                    'use_errors'=>$use_errors, 
                    'sleepTime'=>$sleepTime, 
                    'repoName'=>$repoName
                    ];

            $this->processData($sets, $params);

            //Finalize master XML file
            file_put_contents($masterFile, "</collection>\n", FILE_APPEND | LOCK_EX);
            $xmlObj = '';
        }

        $this->call('oai:marcparse');

        exit (0);
    }

    protected function identifyTarget($url)
    {
        //Check on and identify of OAI-PMH services at target site
        $url = $url . "?verb=Identify";
        $sleepTime = 20;
        $xmlObj = '';
        
        $urlTry = 1;
        while ($urlTry > 0) {
            $xmlObj = simplexml_load_file($url);
            
            //If there is a problem with retrieving the data then wait (with an increasing wait period) and retry 5 times
            if (!$xmlObj) {
                if ($urlTry < 5) {
                    $errorWait = $sleepTime * $urlTry; //Increase wait time based on number of retries
                    echo "\t\e[1;37;43m[ADVERTENCIA]\e[0m Falló la carga ($urlTry) del XML desde la URL.  Reintentando en $errorWait segundos. \n";
                    sleep ($errorWait);
                    $urlTry = $urlTry + 1;
                } else { //Could not get records after 5 tries so exit
                    echo "\t\e[1;37;41m[ERROR]\e[0m Ha fallado la carga del XML desde el URL $urlTry veces. Saliendo... \n";
                    
                    foreach(libxml_get_errors() as $error) {
                        echo "\t\t\e[1;37;41m[ERROR]\e[0m", $error->message;
                    }
                    echo "\n";
                    
                    // unlink($masterFile);
                    exit(1);
                }
            } else {
                $urlTry = 0;

                return $xmlObj;
            }
        }
    }

    protected function directory($repoName, $cwd)
    {
        $directory = $cwd . '/' . preg_replace('/\s+/', '', $repoName).'_MARC';
        if (!mkdir($directory, 0755, true)) {
            echo "\e[1;37;43m[ADVERTENCIA]\e[0m El directorio $directory ya existe. Continuando... \n";
        }
        echo "\e[1;37;46m[ESTADO]\e[0m El directorio $directory fue creado. \n";

        return $directory;
    }
    
    protected function checkSchemaSupport($metaFormat, $oaiURL)
    {
        $formatOK = 0;

        $url = $oaiURL . "?verb=ListMetadataFormats";
        $xmlObj = simplexml_load_file($url);
            
        //If no response from OAI-PMH server then exit			
        if (!$xmlObj) {
            echo "\e[1;37;41m[ERROR]\e[0m No se puede conectar al servidor OAI-PMH en $url \n";
            exit(1);
        }

        //Loop through the returned metadata formats to verify that oai_dc is supported
        $xmlNode = $xmlObj->ListMetadataFormats;

        foreach ($xmlNode->metadataFormat as $metaNode) {
            if ($metaNode->metadataPrefix == $metaFormat) {
                $formatOK = 1;
            }
        }

        return $formatOK;
    }
    
    protected function listSets($url)
    {
        // ************************************************************
        // Loop Through the various sets and collect their information
        // ************************************************************
        $sets = array();
        $url = $url . "?verb=ListSets";
        $xmlObj = simplexml_load_file($url);

        $xmlNode = $xmlObj->ListSets;

        //Write information about each set to information file
        foreach ($xmlNode->set as $setNode) {

            array_push($sets, array( (string) $setNode->setSpec, (string) $setNode->setName));
                
        }

        return $sets;
    }
    
    protected function createFile($sourceName, $dirname)
    {
        //Setup master file (i.e. file to hold records from all sets) for writing
        $file = $dirname . '/' . preg_replace('/\s+/', '', $sourceName) . '_' . 'complete' . '.xml';
        
        // Create or revert (empty) file for new process
        $fp = fopen($file, 'w+');

        if($fp){
            fclose($fp);
        }

        return $file;
    }

    protected function processData($sets, $params)
    {
        $url4base = $params['url']; 
        $dirname = $params['dirname'];
        $masterFile = $params['masterFile'];
        $sourceName = $params['sourceName'];
        $dateTag = $params['dateTag'];
        $use_errors = $params['use_errors'];
        $sleepTime = $params['sleepTime'];
        $repoName = $params['repoName'];

        // **********************************************************
        // Loop Through the various sets and collect their records
        // **********************************************************
        $initial = true;
        $setCounter = 1;
        
        if(empty($sets)){
            $sets = [
                ['', 'Sin nombre']
            ];
        }

        $setCount = count($sets);

        foreach ($sets as $currentSet) {
            $setTag = $currentSet[0];
            $setName = $currentSet[1];
            echo "\n***************************************************************** \n";
            echo "\e[1;33;40m\e[1;37;46m[ESTADO]\e[0m\e[0m Set siendo procesado [$setCounter de $setCount]: $setName ($setTag) \n";
            sleep (30);
            
            //Setup record counters to verify ingestion as it progresses
            $totalRecords = 0;
            $currentRecords = 0;

            //Construct base URL for fetching records
            $baseURL = $url4base . '?verb=ListRecords';

            //Setup appropriate parameters for the target server and current record set
            $initialParams = ($setTag=='')? '&metadataPrefix=marc21' : '&metadataPrefix=marc21&set='.$setTag;

            //Setup appropirate parameters for the target server in case a resumption token is provided
            $resumptionBase = '&resumptionToken=';
            $resumptionToken = 'initial';

            //Setup record set specific data file 
            $xmlFile = $dirname . '/' . preg_replace('/\s+/', '', $sourceName) . '_' . $setTag . '_' . $dateTag . '.xml';
            
            // Create or revert (empty) file for new process
            $fp = fopen($xmlFile, 'w+');
            fclose($fp);
            
            //Setup counter to track number of requests to download complete record set
            $fetchCounter = 1;

            //Write data to both the record set specific data file as well as the master file
            file_put_contents($xmlFile, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n", FILE_APPEND | LOCK_EX);
            file_put_contents($xmlFile, "<collection xmlns=\"http://www.loc.gov/MARC21/slim\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.loc.gov/MARC21/slim http://www.loc.gov/standards/marcxml/schema/MARC21slim.xsd\">\n", FILE_APPEND | LOCK_EX);

            if ($initial)
            {
                file_put_contents($masterFile, "<?xml version=\"1.0\"?>\n", FILE_APPEND | LOCK_EX);
                file_put_contents($masterFile, "<collection xmlns=\"http://www.loc.gov/MARC21/slim\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.loc.gov/MARC21/slim http://www.loc.gov/standards/marcxml/schema/MARC21slim.xsd\">\n", FILE_APPEND | LOCK_EX);
                $initial = false;
            }

            // Construct proper URL based on existence of a resumption token
            while ($resumptionToken != '') {
                
                if ($fetchCounter == 1) {
                    //First call to fetch records will never have a resumption token as a parameter
                    $url = $baseURL . $initialParams;
                    $resumptionToken = ''; //Clear resumption token on first pass
                } else {
                    $url = $baseURL . $resumptionBase . $resumptionToken;
                }

                //Now fetch records from OAI-PMH server
                echo "\e[1;37;46m[ESTADO]\e[0m URL $fetchCounter está siendo procesado: $url \n";
            
                $urlTry = 1;
            
                while ($urlTry > 0) {
                    $xmlObj = simplexml_load_file($url);

                    //If there is a problem with retrieving the data then wait (with an increasing wait period) and retry 5 times
                    if (!$xmlObj) {
                        if ($urlTry < 5) {
                            $errorWait = $sleepTime * $urlTry; //Increase wait time based on number of retries
                            echo "\t\e[1;37;43m[ADVERTENCIA]\e[0m Falló la carga ($urlTry) del XML desde la URL.  Reintentando en $errorWait segundos. \n";
                        
                            foreach(libxml_get_errors() as $error) {
                                echo "\t\t\e[1;37;43m[ADVERTENCIA]\e[0m ", $error->message;
                            }
                        
                            sleep ($errorWait);
                            $urlTry = $urlTry + 1;
                        } else { //Could not get records after 5 tries so exit
                            echo "\t\e[1;37;41m[ERROR]\e[0m Ha fallado la carga del XML desde el URL $urlTry veces. Saliendo... \n";
                        
                            foreach(libxml_get_errors() as $error) {
                                echo "\t\t\e[1;37;41m[ERROR]\e[0m", $error->message;
                            }
                            echo "\n";
                        
                            unlink($masterFile);
                            exit(1);
                        }
                    } else {
                        $urlTry = 0;
                    }
                }
            
                //Clean up any errors from trying to fetch the current URL
                libxml_clear_errors();
                libxml_use_internal_errors($use_errors);

                //Run through the result and write records to local file validating record count
                $xmlNode = $xmlObj->ListRecords;
                $currentRecords = count($xmlNode->children());
            
                $recordValidator = 0;
                foreach ($xmlNode->record as $recordNode) {
                    if(!isset($recordNode->header['status'])){
                        //Add repository, setName, URL to header of OAI-PMH XML so that output XML has all information about request and results
                        // $recordNode->header->addChild('repository', $repoName);
                        // $recordNode->header->addChild('setName', $setName);
                        // $recordNode->header->addChild('fetchURL', urlencode($url));
                        // $recordNode->header->addChild('recNum', $recordValidator);
                        
                        //Generate record set file content
                        file_put_contents($xmlFile, $recordNode->asXML(), FILE_APPEND | LOCK_EX);
                        file_put_contents($xmlFile, "\n", FILE_APPEND | LOCK_EX);
                        
                        //Generate master file content
                        file_put_contents($masterFile, $recordNode->asXML(), FILE_APPEND | LOCK_EX);
                        file_put_contents($masterFile, "\n", FILE_APPEND | LOCK_EX);
                    };
                    $recordValidator = $recordValidator + 1;
                        
                        
                }
            
                if (!$xmlNode->resumptionToken) { //No more results - continue to next set
                    $totalRecords = $totalRecords + $currentRecords;
                    echo "\t[INFO] Registros Agregados: $currentRecords \t\t Total Registros: $totalRecords \n";
                
                    echo "\t\e[1;37;46m[ESTADO]\e[0m Todos los registros recuperados ($totalRecords) - no hay token de reanudación. \n";
                    
                    echo "\t\e[1;37;46m[ESTADO]\e[0m ---------- Todos los registros recuperados ($totalRecords) - Finalizado. ----------\n";

                    break;
                
                } else { //Resumption token is present - so loop back and fetch more records
                    $resumptionToken = '';
                    $resumptionToken = $xmlNode->resumptionToken;
                    
                    // echo "\t[INFO] Token de Reanudación: $resumptionToken \n";
                
                    $currentRecords = $currentRecords - 1;
                    $totalRecords = $totalRecords + $currentRecords;
                    echo "\t[INFO] Registros agregados: $currentRecords \t\t Total Registros: $totalRecords \n";
                    
                    if ($currentRecords == 0) { //If there is an error in fetching records then exit
                        echo "\t\e[1;37;41m[ERROR]\e[0m No hay datos cargados desde la última URL.  Finalizando... \n";
                        exit (1);
                    }
                }

                if($this->argument('cantidad')){
                    if($totalRecords == $this->argument('cantidad')){
                        break;
                    }
                }

                if ($recordValidator != $currentRecords) { //If there is an error in fetching records then exit
                    echo "\t\e[1;37;41m[ERROR]\e[0m No coincide el número de elementos importados. Finalizando... \n";
                    
                    unlink($masterFile);
                    exit (1);
                }
            
                $fetchCounter = $fetchCounter + 1; //Increment record request for complete record set

                //Play nice with OAI-PMH servers
                sleep($sleepTime);
                
            } // Work on next record request within record set

            //Finalize record set XML file
            file_put_contents($xmlFile, "</Collection>\n", FILE_APPEND | LOCK_EX);

            $setCounter = $setCounter + 1; 
            
        } // Work on next set
    }
}
