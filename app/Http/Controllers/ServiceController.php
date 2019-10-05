<?php

namespace App\Http\Controllers;

use App\Service;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\Informacion;
use App\OAIURL;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();

        $banners = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'servicios')->get();
        $servicios = Informacion::where('seccion', 'servicios')->where('estado', 1)->orderBy('orden')->get();
        $repos = OAIURL::where('estado', 1)->get();

        return view('frontend.servicios.index', compact('headers', 'contacto', 'enlaces', 'redes', 'banners', 'servicios', 'repos'));
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
