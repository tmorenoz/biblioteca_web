<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Scriptotek\Marc\Record;

use Phpoaipmh\Client,
    Phpoaipmh\Endpoint,
    Phpoaipmh\Granularity;

use App\Recurso;
use App\Equivalent;

use Carbon\Carbon;

class MARCParser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oai:marcparse';

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
                $url = $cwd . $fileinfo->getBasename() . '/' . 'ESSALUD_MARC_complete.xml';
                $xmlObj = simplexml_load_file($url);
                if ($xmlObj!=false){
                    $this->processFile($xmlObj);
                }
            }
        }
    
    }
    
    protected function processFile($xmlObj){
            $xmlNode = $xmlObj->record;
            
            foreach ($xmlNode as $rNode) {
                $sys_identifier = $rNode->header->identifier;
                $sys_datestamp = $rNode->header->datestamp;
                $sys_identifier = $rNode->header->identifier;
                $sys_identifier = $rNode->header->identifier;
                $exist= Recurso::where('sys_identifier', $sys_identifier)
                ->first();
                
                $record = Record::fromString($rNode->metadata->asXML());
                if(!is_null($exist)){

                    $update=false;

                    
                    if(!is_null($record->getField('020'))){
                        if(!is_null($record->getField('020')->getSubfield('a')) && $record->getField('020')->getSubfield('a')!=false){
                            $exist->identifier = $record->getField('020')->getSubfield('a')->getData();
                            $update=true;
                        };
                    };

                    if(empty($exist->source)){
                        if(!is_null($record->getField('040'))){
                            if(!is_null($record->getField('040')->getSubfield('a')) && $record->getField('040')->getSubfield('a')!=false){
                                $exist->source = $this->sanitizar('source', $record->getField('040')->getSubfield('a')->getData());
                                $update=true;
                            };
                        };
                    }
                    if(empty($exist->cat_source)){
                        if(!is_null($record->getField('040'))){
                            if(!is_null($record->getField('040')->getSubfield('a')) && $record->getField('040')->getSubfield('a')!=false){
                                $exist->cat_source = $this->sanitizar('cat_source', $record->getField('040')->getSubfield('a')->getData());
                                $update=true;
                            };
                        };
                    }
                    if(empty($exist->series)){
                        if(!is_null($record->getField('490'))){
                            if(!is_null($record->getField('490')->getSubfield('a')) && $record->getField('490')->getSubfield('a')!=false){
                                // $valor = $record->getField('490')->getSubfield('a')->getData() . ',' . $record->getField('040')->getSubfield('v')->getData();
                                $valor = $record->getField('490')->getSubfield('a')->getData();
                                $exist->series = $this->sanitizar('series', $valor);
                                $update=true;
                            };
                        };
                    }
                    if(empty($exist->edition)){
                        if(!is_null($record->getField('250'))){
                            if(!is_null($record->getField('250')->getSubfield('a')) && $record->getField('250')->getSubfield('a')!=false){
                                $exist->edition = $this->sanitizar('edition', $record->getField('250')->getSubfield('a')->getData());
                                $update=true;
                            };
                        };
                    }
                    if(empty($exist->dcn_dewey)){
                        if(!is_null($record->getField('082'))){
                            if(!is_null($record->getField('082')->getSubfield('a')) && $record->getField('082')->getSubfield('a')!=false){
                                $exist->dcn_dewey = $this->sanitizar('dcn_dewey', $record->getField('082')->getSubfield('a')->getData());
                                $update=true;
                            };
                        };
                    }

                    if(!is_null($record->getField('260'))){
                        if(!is_null($record->getField('260')->getSubfield('a')) && $record->getField('260')->getSubfield('a')!=false){
                            $exist->country = $this->sanitizar('country', $record->getField('260')->getSubfield('a')->getData());
                            $update=true;
                        };
                        if(!is_null($record->getField('260')->getSubfield('b')) && $record->getField('260')->getSubfield('b')!=false){
                            $exist->publisher = $this->sanitizar('publisher', $record->getField('260')->getSubfield('b')->getData());
                            $update=true;
                        };
                    };

                    if($update){
                        if($exist->save()){
                            echo "\e[0;32;40m$sys_identifier\e[0m\n";
                        }else{
                            echo "\e[0;31;40mError al actualizar $sys_identifier\e[0m\n";
                        };
                    }
                    
                    $update=false;
                }
    
            }
    
    }

    protected function sanitizar($meta, $valor)
    {
        $return = $valor;
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
}

