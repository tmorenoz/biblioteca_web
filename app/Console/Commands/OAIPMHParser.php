<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use Phpoaipmh\Client,
    Phpoaipmh\Endpoint,
    Phpoaipmh\Granularity;

use App\Recurso;
use App\Equivalent;

use Carbon\Carbon;

class OAIPMHParser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oai:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parser para xml archivos ESSALUD';

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
        libxml_use_internal_errors(true);
        $cwd = 'storage/app/public/';
        $dir = new \DirectoryIterator(dirname($cwd.'.'));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot() && $fileinfo->isDir())
            {
                $url = $cwd . $fileinfo->getBasename() . '/' . 'ESSALUD_complete.xml';
                $xmlObj = simplexml_load_file($url);
                if ($xmlObj!=false){
                    $this->processFile($xmlObj);
                }
            }
        }
    
    }
    
    protected function processFile($xmlObj)
    {
            $xmlNode = $xmlObj->record;
    
            foreach ($xmlNode as $rNode)
            {
                $sys_identifier = $rNode->header->identifier;
                $exist= DB::table('recursos')
                            ->select('sys_identifier')
                            ->where('sys_identifier', $sys_identifier)
                            ->first();
                
                if(is_null($exist))
                {
                    $DC = $rNode->metadata->children('oai_dc', 1)->dc->children('dc', 1);
                    $sys_datestamp = $rNode->header->datestamp;
                    $sys_repository = $rNode->header->repository;
                    $sys_fetchURL = $rNode->header->fetchURL;
    
                    $title = $this->sanitizar('title', $DC->title);
                    $subject = $this->sanitizar('subject',$DC->subject);
                    $description = $this->sanitizar('description',$DC->description);
                    $source = $this->sanitizar('source',$DC->source);
                    $languaje = $this->sanitizar('languaje',$DC->language);
                    $relation = $this->sanitizar('relation',$DC->relation);
                    $coverage = $this->sanitizar('coverage',$DC->coverage);
                    $creator = $this->sanitizar('creator',$DC->creator);
                    $publisher = $this->sanitizar('publisher',$DC->publisher);
                    $contributor = $this->sanitizar('contributor',$DC->contributor);
                    $_right = $this->sanitizar('_right',$DC->rights);
                    $date = $this->sanitizar('date',$DC->date);
                    $type = $this->sanitizar('type',$DC->type);
                    $format = $this->sanitizar('format',$DC->format);
                    $identifier = $this->sanitizar('identifier',$DC->identifier);
                    $icon = $this->icon($DC->type);
                    
                    $url_recurso = null;
                    if(filter_var($DC->identifier, FILTER_VALIDATE_URL))
                    {
                        $url_recurso = $identifier;
                    }else{
                        if(preg_match('/URN:ISBN:[0-9-]+/', $DC->identifier)){
                            $identifier = str_replace('-', '', substr($DC->identifier, 9));
                        }
                    }

                    // ------------------------
                    try 
                    {
                        $ins = DB::table('recursos')
                               ->insert(['sys_identifier'=> $sys_identifier, 
                                         'sys_datestamp' => $sys_datestamp,
                                         'sys_repository' => $sys_repository,
                                         'sys_fetchURL' => $sys_fetchURL, 
                                         'title' => $title,
                                         'subject' => $subject,
                                         'description' => $description,
                                         'source' => $source,
                                         'languaje' => $languaje,
                                         'relation' => $relation,
                                         'coverage' => $coverage,
                                         'creator' => $creator,
                                         'publisher' => $publisher,
                                         'contributor' => $contributor,
                                         '_right' => $_right,
                                         'date' => $date,
                                         'type' => $type,
                                         'format' => $format,
                                         'identifier' => $identifier,
                                         'url_recurso' => $url_recurso,
                                         'icon' => $icon,
                                         'estado' => 1, 
                                         'created_at' => Carbon::now()
                                        ]);
        
                        if($ins){
                            echo "Registro $sys_identifier agregado... \n";
                        };
                    }
                    catch (\Exception $e) 
                    {
                        dd($e);
                    }
                }else{
                    echo "\033[100D";
                    echo $sys_identifier;
                }
    
            }
    
    }

    protected function sanitizar($meta, $valor)
    {
        $return = $valor;
        $i = 0;
        if($meta == 'creator'){
            $return = preg_split("/\n+/", $valor);
            foreach ($return as $key => $value) {
                if(!empty(trim($value))){
                    $i=$key;
                    break;
                }
            }
            $return = trim(preg_replace("/[\r\n|\n|\r]+/", "", $return[$i]));
        }

        if($meta == 'date'){
            $return = trim(substr($valor, 0, 4));
        }

        $val_equi = Equivalent::where('meta', $meta)
                                ->where('termino', $return)
                                ->where('estado', 1)
                                ->first();
        
        if($val_equi){
            $return = $val_equi->equivalencia;
        }

        return $return;

    }

    protected function icon($type){
        $ret = 'default.png';

        $icon = Equivalent::select('icon')->where('meta', 'type')->where('termino', $type)->first();
        if(!is_null($icon) && $icon!=''){
            $ret = $icon->icon;
        }

        return $ret;
    }
}

