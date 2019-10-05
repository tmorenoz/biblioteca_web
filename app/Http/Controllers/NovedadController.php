<?php

namespace App\Http\Controllers;

use App\Novedad;
use App\Detalle;
use App\Biblioteca;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\OAIURL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NovedadController extends Controller
{

    public function index()
    {
        $news = Novedad::where('estado', 1)->orderBy('created_at', 'desc')->get();
        $biblioteca = Novedad::where('estado', 1)->where('tipo', 'otro')->orderBy('orden')->get();

        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $banners = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'novedades')->get();
        $repos = OAIURL::where('estado', 1)->get();

        return view('frontend.novedades.index', compact('news', 'headers', 'contacto', 'enlaces', 'redes', 'banners', 'biblioteca', 'repos'));
    }

    public function show(Novedad $novedad,$id)
    {
       $novedad = Novedad::find($id);
       $novedades = Novedad::where('id', '!=', $id)->where('relacion', $novedad->relacion)->where('estado', 1)->orderBy('created_at', 'desc')->take(4)->get();
       $headers = Header::where('estado', 1)->orderBy('orden')->get();
       $contacto = Contacto::first();
       $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
       $redes = Rede::where('estado', 1)->orderBy('orden')->get();
       $repos = OAIURL::where('estado', 1)->get();

       if($novedad->tipo == 'noticias'){
         $detalles = Detalle::where('novedad_id', $id)->get();
       }
       else{
         $detalles = Biblioteca::where('novedad_id', $id)->where('estado', 1)->paginate(12);
         $var = $detalles->currentPage();
         $contador = $detalles->lastPage();
         if($contador == 0)
          $var = $detalles->lastPage();
       }
       // dd($detalles);
       $years =  DB::table('bibliotecas')
             ->select(DB::raw('YEAR(fecha) as anio'))
             ->groupBy(DB::raw('YEAR(fecha)'))
             ->orderBy(DB::raw('YEAR(fecha)'), 'desc')
             ->get();


        $fecha = $novedad->fecha;
        $anio = substr($fecha, -10, 4);
        $mes = substr($fecha, -5, 2);
        $dia = substr($fecha, -2, 2);
        // dd($mes);

         $m = null;
          switch ($mes){
              case 01: $m = "Enero"; break;
              case 02: $m = "Febrero"; break;
              case 03: $m = "Marzo"; break;
              case 04: $m = "Abril"; break;
              case 05: $m = "Mayo"; break;
              case 06: $m = "Junio"; break;
              case 07: $m = "Julio"; break;
              case '08': $m = "Agosto"; break;
              case '09': $m = "Septiembre"; break;
              case 10: $m = "Octubre"; break;
              case 11: $m = "Noviembre"; break;
              case 12: $m = "Diciembre"; break;
          }

          $resultado = str_replace("\\", "/", $novedad->imagen);

          if($novedad->imagen){
            $imagen = getimagesize(public_path('storage/' . $resultado ));
            $ancho = $imagen[0];
            $alto = $imagen[1];
          }else{
            $ancho = null;
            $alto = null;
          }


        if($novedad->tipo == 'noticias')
          return view('frontend.novedades.show', compact('novedad', 'novedades', 'anio', 'm', 'dia', 'detalles', 'headers', 'contacto', 'enlaces', 'redes', 'ancho', 'alto', 'repos'));
        else
          return view('frontend.biblioteca.index', compact('novedad', 'novedades', 'anio', 'm', 'dia', 'detalles', 'headers', 'contacto', 'enlaces', 'redes', 'var', 'contador', 'years', 'repos'));

    }

}
