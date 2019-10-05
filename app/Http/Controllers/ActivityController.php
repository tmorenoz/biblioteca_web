<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\OAIURL;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anios = DB::table('activities')
            ->select(DB::raw('year(fecha) as anio'))
            ->groupBy(DB::raw('year(fecha)'))
            ->orderBy(DB::raw('year(fecha)'), 'desc')
            ->where('estado', 1)
            ->get();

        $hoy = date('Y-m-d');
        $anioactual =  date('Y');
        $mesactual =  date('m');
        $meses = ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        foreach ($meses as $key => $value) {
          if($key+1 == $mesactual){
            $mesactual = $value;
          }
        }

        $actividades = DB::table('activities')
            ->select('activities.*')
            ->where(DB::raw('year(fecha)'), $anioactual)
            ->where('estado',1)
            ->get();
        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();

        $banners = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'actividades')->get();

        $repos = OAIURL::where('estado', 1)->get();


        return view('frontend.actividades.index', compact('anios', 'anioactual', 'mesactual', 'meses', 'actividades', 'headers', 'contacto', 'enlaces', 'redes', 'banners', 'repos'));
    }


    public function show(Activity $activity,$id)
    {
        $actividad = Activity::find($id);
        $numero =  date('d', strtotime($actividad->fecha));
        $mes =  date('m', strtotime($actividad->fecha));
        $meses = ['Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        foreach ($meses as $key => $value) {
          if($key+1 == $mes){
            $mes = $value;
          }
        }

        switch (date('w', strtotime($actividad->fecha))){
            case 1: $dia = "Domingo"; break;
            case 2: $dia = "Lunes"; break;
            case 3: $dia = "Martes"; break;
            case 4: $dia = "Miercoles"; break;
            case 5: $dia = "Jueves"; break;
            case 6: $dia = "Viernes"; break;
            case 7: $dia = "Sabado"; break;
        }
        $hoy = date('Y-m-d');
        $prox_event = DB::table('activities')
            ->where('fecha', '>=', $hoy)
            ->where('id', '!=', $id)
            ->select('activities.*')
            ->orderBy('fecha', 'ASC')
            ->limit(3)
            ->get();

        $headers = Header::where('estado', 1)->orderBy('orden')->get();
        $contacto = Contacto::first();
        $enlaces = Enlace::where('estado', 1)->orderBy('orden')->get();
        $redes = Rede::where('estado', 1)->orderBy('orden')->get();

        $resultado = str_replace("\\", "/", $actividad->banner);

        $repos = OAIURL::where('estado', 1)->get();

        if($actividad->banner){
          $imagen = getimagesize(public_path('storage/' . $resultado ));
          $ancho = $imagen[0];
          $alto = $imagen[1];
        }else{
          $ancho = null;
          $alto = null;
        }


        return view('frontend.actividades.show', compact('actividad', 'numero', 'mes', 'dia', 'prox_event', 'headers', 'contacto', 'enlaces', 'redes', 'ancho', 'alto', 'repos'));
    }

  public function cargar(Request $request){

      $mes = $request->mes + 1;
        $actividades = DB::table('activities')
            ->select('activities.*')
            ->where(DB::raw('year(fecha)'), $request->anio)
            ->where(DB::raw('month(fecha)'), $mes)
            ->where('estado',1)
            ->orderBy('fecha', 'asc')
            ->get();


      return response()->json(view('frontend.actividades.partials.pintar-actividades', compact('actividades'))->render());
  }



  public function fecha(Request $request){

    $mes = $request->mes + 1;
    $actividades = DB::table('activities')
        ->select('activities.*')
        // ->where(DB::raw('year(fecha)'), $request->anio)
        // ->where(DB::raw('month(fecha)'), $mes)
        ->where('estado',1)
        ->get();


    return response()->json(compact('actividades'));
}



}
