<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Biblioteca;
use App\Novedad;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\OAIURL;
use Illuminate\Support\Facades\DB;


class BibliotecaController extends Controller
{
    public function index(Request $request)
    {

        $libros = Biblioteca::where('estado', 1)->orderBy('orden')->paginate(12);
        $var = $libros->currentPage();
        $contador = $libros->lastPage();
        if($contador == 0)
         $var = $libros->lastPage();

        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $banner = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'biblioteca')->first();
        $repos = OAIURL::where('estado', 1)->get();

        $years =  DB::table('bibliotecas')
              ->select(DB::raw('YEAR(fecha) as anio'))
              ->groupBy(DB::raw('YEAR(fecha)'))
              ->orderBy(DB::raw('YEAR(fecha)'), 'desc')
              ->get();

        $mes = 0;
        $anio = 0;
        $meses = array('1', '2', '3','4', '5', '6', '7', '8', '9', '10', '11', '12');
        $meses2 = array('Enero', 'Febrero', 'Marzo','Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

        $mensaje = null;
        if(count($libros) == 0)
           $mensaje = 'Lo sentimos, no existen resultados bajo el criterio de búsqueda seleccionado';

        return view('frontend.biblioteca.index', compact('libros', 'headers', 'contacto', 'enlaces', 'redes', 'banner', 'years', 'var', 'contador', 'mes', 'anio', 'meses', 'meses2', 'mensaje', 'repos'));
    }

    public function show($id)
    {
        $biblioteca = Biblioteca::find($id);

        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $repos = OAIURL::where('estado', 1)->get();

        $fecha = $biblioteca->fecha;
        $anio = substr($fecha, -10, 4);
        $mes = substr($fecha, -5, 2);
        $dia = substr($fecha, -2, 2);

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
           $resultado = str_replace("\\", "/", $biblioteca->imagen);
          if($biblioteca->imagen){
            $imagen = getimagesize(public_path('storage/' .$resultado  ));
            $ancho = $imagen[0];
            $alto = $imagen[1];
          }else{
            $ancho = null;
            $alto = null;
          }


        return view('frontend.biblioteca.show', compact('biblioteca', 'headers', 'contacto', 'enlaces', 'redes', 'm', 'dia', 'mes', 'anio', 'ancho', 'alto', 'repos'));

    }

    public function filtro($anio, $mes){

        if($mes == 'hide' && $anio != '*'){
          $libros = DB::table('bibliotecas')
             ->select('bibliotecas.*')
             ->where(DB::raw('year(fecha)'), $anio)
             ->paginate(12);
        }else if($anio == '*'){
          $libros = DB::table('bibliotecas')
             ->select('bibliotecas.*')
             ->paginate(12);
        }else if($anio == 'hide' && $mes != 'hide'){
          $libros = DB::table('bibliotecas')
             ->select('bibliotecas.*')
             ->where(DB::raw('month(fecha)'), $mes)
             ->paginate(12);
        }else{
          $libros = DB::table('bibliotecas')
             ->select('bibliotecas.*')
             ->where(DB::raw('year(fecha)'), $anio)
             ->where(DB::raw('month(fecha)'), $mes)
             ->paginate(12);
        }

        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();
        $banner = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'biblioteca')->first();
        $repos = OAIURL::where('estado', 1)->get();

        $years =  DB::table('bibliotecas')
              ->select(DB::raw('YEAR(fecha) as anio'))
              ->groupBy(DB::raw('YEAR(fecha)'))
              ->orderBy(DB::raw('YEAR(fecha)'), 'desc')
              ->get();


        $var = $libros->currentPage();
        $contador = $libros->lastPage();

        if($contador == 0)
         $var = $libros->lastPage();

         $meses = array('1', '2', '3','4', '5', '6', '7', '8', '9', '10', '11', '12');
         $meses2 = array('Enero', 'Febrero', 'Marzo','Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

         $mensaje = null;
         if(count($libros) == 0)
            $mensaje = 'Lo sentimos, no existen resultados bajo el criterio de búsqueda seleccionado.';

      return view('frontend.biblioteca.index', compact('libros', 'headers', 'contacto', 'enlaces', 'redes', 'banner', 'years', 'var', 'contador', 'mes', 'anio', 'meses', 'meses2', 'mensaje', 'repos'));

    }



}
