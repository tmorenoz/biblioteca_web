<?php

namespace App\Http\Controllers;

use App\Search;
use App\Novedad;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\Recurso;
use App\OAIURL;
use App\Mail\RecursoBuscador;
use \Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->get('idrecurso');
        try {
            $recurso = Recurso::where('id', $id)->where('estado', 1)->first();
        } catch (\Exeption $e) {
            $recurso = '';
        }

        return response($recurso);
    }

    /**
     * Store a newly created resource in storage.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        
        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $banner = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'biblioteca')->first();
        $repos = OAIURL::where('estado', 1)->get();
        
        //dd($repos);
        // Término de búsqueda
        $term = $request->input('searchterm');
        $repository = $request->input('repo');
       
        // Query

        $query   = Recurso::search($term);
        
        $filt = '';
        if ($request->has('filters')){
            $filt = $request->input('filters');
            $filtros = json_decode($request->input('filters'), true);
           
            // Filtro Autor
            if (isset($filtros['autores']) && count($filtros['autores']) != 0){
                $query->whereIn('creator', $filtros['autores']);
            }
            // Filtro Editorial
            if (isset($filtros['editoriales']) && count($filtros['editoriales']) != 0){
                $query->whereIn('publisher', $filtros['editoriales']);
            }
            // Filtro Origen
            if (isset($filtros['origenes']) && count($filtros['origenes']) != 0){
                $query->whereIn('source', $filtros['origenes']);
            }
            // Filtro Tipo de Material
            if (isset($filtros['tipos']) && count($filtros['tipos']) != 0){
                $query->whereIn('type', $filtros['tipos']);
            }
            // Filtro Temas 
            if (isset($filtros['temas']) && count($filtros['temas']) != 0){
                $query->whereIn('subject', $filtros['temas']);
            }
            // Filtro Año
            if (isset($filtros['anios']) && count($filtros['anios']) != 0){
                $query->whereIn('date', $filtros['anios']);
            }
            // Filtro Idioma
            if (isset($filtros['idiomas']) && count($filtros['idiomas']) != 0){
                $query->whereIn('languaje', $filtros['idiomas']);
            }
            // Filtro País
            if (isset($filtros['paises']) && count($filtros['paises']) != 0){
                $query->whereIn('country', $filtros['paises']);
            }
        }
        
        if ($repository != 'Todos'){
            $query->where('sys_repository', $repository);
        }
        
        // Registros Activos
        $query->where('estado', '=', 1);
        $res = $query->get();
        $results = $this->paginate($res)->withPath(($filt)? 'buscador?searchterm='.$term.'&repo='.$repository.'&filters='.urlencode($filt) : 'buscador?searchterm='.$term.'&repo='.$repository);
        
        //dd($res);
        
        $cant_result = $results->total();
        $nro_pagina = $results->currentPage();

        // Datos Filtros
        if ($cant_result > 0){
            $f_autores = $res->groupBy(function($item, $key){
                return $item['creator'];
            })->toArray();

            $f_editoriales = $res->groupBy(function($item, $key){
                return $item['publisher'];
            })->toArray();

            $f_origenes = $res->groupBy(function($item, $key){
                return $item['source'];
            })->toArray();

            $f_tipos = $res->groupBy(function($item, $key){
                return $item['type'];
            })->toArray();

            $f_temas = $res->groupBy(function($item, $key){
                return $item['subject'];
            })->toArray();

            $f_anios = $res->groupBy(function($item, $key){
                return $item['date'];
            })->toArray();

            $f_idiomas = $res->groupBy(function($item, $key){
                return $item['languaje'];
            })->toArray();
            
            $f_paises = $res->groupBy(function($item, $key){
                return $item['country'];
            })->toArray();

        }else{
            $f_autores = [];
            $f_editoriales = [];
            $f_origenes = [];
            $f_tipos = [];
            $f_temas = [];
            $f_idiomas = [];
            $f_anios = [];
            $f_paises = [];
        }
        
        return view('frontend.buscador.index', 
               compact('results', 'cant_result', 'nro_pagina', 'filt', 'f_autores',  'f_editoriales', 'f_origenes', 
                       'f_tipos', 'f_temas', 'f_anios', 'f_idiomas', 'f_paises', 'term', 'libros', 'headers',
                       'contacto', 'enlaces', 'redes', 'banner', 'years', 'var', 'contador',
                       'mes', 'anio', 'meses', 'meses2', 'mensaje', 'repos'
                    ));
    }

    /**
     * Create a length aware custom paginator instance.
     *
     * @param  Collection  $items
     * @param  int  $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    protected function paginate($items, $perPage = 10)
    {
        //Get current page form url e.g. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Slice the collection to get the items to display in current page
        $currentPageItems = $items->slice(($currentPage - 1) * $perPage, $perPage);

        //Create our paginator and pass it to the view
        return new LengthAwarePaginator($currentPageItems, count($items), $perPage);
    }

    public function enviarEmail(Request $request){

        $this->validate($request, [
            'emailto' => 'required|email',
        ], [
            'emailto.required' => 'Debe colocar una dirección de email',
            'emailto.email' => 'Debe colocar una dirección de email válida'
        ]);

        $id = $request->get('idrecurso');
        $email = $request->get('emailto');

        try {
            $recurso = Recurso::where('id', $id)->where('estado', 1)->first();
            
            $objDemo = new \stdClass();
            $objDemo->title = $recurso->title;
            $objDemo->subject = $recurso->subject;
            $objDemo->relation = $recurso->relation;
            $objDemo->publisher = $recurso->publisher;
            $objDemo->date = $recurso->date;
            $objDemo->languaje = $recurso->languaje;
            $objDemo->identifier = $recurso->identifier;
            $objDemo->source = $recurso->source;

            $resp = Mail::to("receiver@example.com")->send(new RecursoBuscador($objDemo));
            return response('sent', 200);
        } catch (\Exeption $e) {
            $recurso = '';
            return response('Ha ocurrido un error. Vualva a intentar.', 503);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function recurso($idrecurso)
    {
        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $banner = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'biblioteca')->first();
        $repos = OAIURL::where('estado', 1)->get();

        // $id = $request->get('idrecurso');
        try {
            $recurso = Recurso::where('id', $idrecurso)->where('estado', 1)->first();
        } catch (\Exeption $e) {
            $recurso = '';
        }

        return view('frontend.buscador.permalink', 
               compact('results', 'cant_result', 'nro_pagina', 'term', 'libros', 'headers', 'contacto', 'enlaces', 'redes', 'banner', 'years', 'var', 'contador',
                       'mes', 'anio', 'meses', 'meses2', 'mensaje', 'repos', 'recurso', 'idrecurso'
                    ));
    }

    public function paises(Request $request){
        $term = $request->input('searchterm');
        dd($term);
       /* $query   = Recurso::search($term);

        

        if($term!=''){
            return 1;
        }*/
        
    }
}
