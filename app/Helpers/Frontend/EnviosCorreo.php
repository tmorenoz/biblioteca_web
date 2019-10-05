<?php

namespace App\Helpers\Frontend;
use Mail;
use View;

class EnviosCorreo {

 public static function sendMailContacto($template, $params_template,  $to_emails, $subject){

    //desarrollo

       Mail::send($template, ['data' => $params_template],  function($message) use ($to_emails, $subject)
      {
          $message->from('info@essalud.com', 'EsSalud');
          $message->to($to_emails)->subject($subject);
      });


    //produccion
     // try {
     //
     //   $view = View::make($template, [
     //         'data' => $params_template
     //   ]);
     //
     //   $html = $view->render();
     //   $to=$to_emails;
     //
     //   $headers = "From: info@odyssey.com" . "\r\n";
     //   $headers .= "MIME-Version: 1.0\r\n";
     //   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
     //
     //   mail($to, "=?UTF-8?B?".base64_encode($subject)."?=", $html, $headers);
     //
     //   } catch (Exception $e) {
     //       dd($e);
     // }

 }

 public static function sendMailGrupal($template, $params_template, $params_template2, $to_emails, $subject){

   Mail::send($template, ['data' => $params_template], ['data2' => $params_template2], function($message) use ($to_emails, $subject)
   {
      $message->from('info@oydssey.com', 'Odyssey');
      $message->to($to_emails)->subject($subject)->cc('sspallina@infosis.com.ar')->cc('alejandro@infosis.com.ar');
      // $message->bcc('sspallina@infosis.com.ar', 'alejandro@infosis.com.ar', 'gustavo@infosis.com.ar', 'sebastian@infosis.com.ar' );
   });

     // try {
     //   $view = View::make($template, [
     //         'data' => $params_template
     //   ]);
     //
     //   $html = $view->render();
     //   $to=$to_emails;
     //
     //   $headers = "From: info@odyssey.com" . "\r\n";
     //   $headers .= "MIME-Version: 1.0\r\n";
     //   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
     //   $headers .= "Cc: sspallina@infosis.com.ar\r\n";
     //   $headers .= "Cc: alejandro@infosis.com.ar\r\n";
     //   $headers .= "Cc: gustavo@infosis.com.ar\r\n";
     //   $headers .= "Cc: sebastian@infosis.com.ar\r\n";
     //   $headers .= "Cc: gsaperi@infosis.com.ar\r\n";
     //
     //   mail($to, "=?UTF-8?B?".base64_encode($subject)."?=", $html, $headers);
     //
     //   } catch (Exception $e) {
     //       dd($e);
     // }
 }
}
