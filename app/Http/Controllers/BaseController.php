<?php

namespace App\Http\Controllers;

use App\Base;
use App\Datos;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\OAIURL;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Datos::paginate(9);

        $datos2 = Datos::all();
        $contador = $datos->lastPage();
        // if($contador > 5){$var = true;}else{$var = false;}
        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $repos = OAIURL::where('estado', 1)->get();

        $var = $datos->currentPage();

        return view('frontend.BD.index', compact('datos', 'var', 'contador', 'headers', 'contacto', 'enlaces', 'redes', 'repos'));

    }

    public function cargar(Request $request){
      if($request->ajax()){

      $datos =  Datos::all();
      $contador=count($datos);
      
      if($contador > $request->get('num')){
        $var = true;
      }else{
        $var = false;
      }

      $datos =  Datos::take($request->get('num'))->get();

      dd($datos);

      return response()->json(view('frontend.BD.partials.base', compact('datos', 'var'))->render());
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function show(Base $base)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function edit(Base $base)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Base $base)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function destroy(Base $base)
    {
        //
    }
}
