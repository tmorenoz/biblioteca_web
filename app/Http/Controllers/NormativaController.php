<?php

namespace App\Http\Controllers;

use App\Normativa;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\OAIURL;

use Illuminate\Http\Request;

class NormativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $normativas = Normativa::all();
      $headers = Header::where('estado', 1)->orderBy('orden')->get();
      $contacto = Contacto::first();
      $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
      $redes = Rede::where('estado', 1)->orderBy('orden')->get();
      $banners = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'normativa')->get();
      $repos = OAIURL::where('estado', 1)->get();

      return view('frontend.normativa.index', compact('normativas', 'headers', 'contacto', 'enlaces', 'redes', 'banners', 'repos'));
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
     * @param  \App\Normativa  $normativa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $normativa = Normativa::find($id);
        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $banner = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'interna-normativa')->first();
        $repos = OAIURL::where('estado', 1)->get();



      // if($id == 1)
        return view('frontend.normativa.show', compact('normativa', 'headers', 'contacto', 'enlaces', 'redes', 'banner', 'repos'));
      // else if($id == 2)
      //   return view('frontend.normativa.show2', compact('normativa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Normativa  $normativa
     * @return \Illuminate\Http\Response
     */
    public function edit(Normativa $normativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Normativa  $normativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Normativa $normativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Normativa  $normativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Normativa $normativa)
    {
        //
    }
}
