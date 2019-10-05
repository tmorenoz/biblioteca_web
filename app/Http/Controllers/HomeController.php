<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Mail;
use App\Helpers\Frontend\EnviosCorreo as HelperCorreo;

use App\Novedad;
use App\Header;
use App\Contacto;
use App\Enlace;
use App\Rede;
use App\Banner;
use App\Informacion;
use App\Popup;
use App\Biblioteca;
use App\Boletin;
use App\OAIURL;

class HomeController extends Controller
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
        $news = Novedad::where('estado', 1)->where('tipo', 'noticias')->orderBy('created_at', 'desc')->take(10)->get();

        $banners = Banner::where('estado', 1)->orderBy('orden')->where('seccion', 'home')->get();
        $recursos = Informacion::where('seccion', 'recursos')->where('estado', 1)->orderBy('orden')->get();
        $popup = Popup::where('estado', 1)->first();
        $repos = OAIURL::where('estado', 1)->get();

        return view('frontend.home.index', compact('news', 'headers', 'contacto', 'enlaces', 'redes', 'banners', 'recursos', 'popup', 'repos'));
    }

    public function suscripcion(Request $request){

        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',

          ]);
          if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
          }

          $s= new \App\Subscriber;
          $s->email = $request->input('email');

          $s->save();

         /*
          $emails = $correo;
          $subject = 'Nueva suscripcion desde la web EsSalud: ' ;
          HelperCorreo::sendMailContacto('Emails.suscripcion', $s, $emails, $subject);
         */

        return response()->json(array('msg' => "creado"), 201);
    }

}
