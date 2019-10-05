<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SuscriptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function exportSuscriptor(Request $request)
    {
      $inicio= $request->fecha_inicio;
      $fin= $request->fecha_fin;

       Excel::create('Suscripciones', function($excel) use($inicio, $fin) {

             $excel->sheet('Suscripciones', function($sheet) use($inicio, $fin) {

            if($inicio == null && $fin == null){
             $subscribers = DB::table('subscribers')
                         ->select('subscribers.*', DB::raw('DATE_SUB(subscribers.created_at, INTERVAL 5 HOUR) as created_at'))
                         ->orderBy('subscribers.created_at','desc')
                         ->get();
            }elseif($fin == null){
              $subscribers = DB::table('subscribers')
                          ->select('subscribers.*', DB::raw('DATE_SUB(subscribers.created_at, INTERVAL 5 HOUR) as created_at'))
                          ->orderBy('subscribers.created_at','desc')
                          ->whereDate('subscribers.created_at', $inicio)
                          ->get();
            }else{
              $subscribers = DB::table('subscribers')
                          ->select('subscribers.*', DB::raw('DATE_SUB(subscribers.created_at, INTERVAL 5 HOUR) as created_at'))
                          ->orderBy('subscribers.created_at','desc')
                          ->whereBetween('subscribers.created_at',[$inicio , $fin])
                          ->get();
            }

            $exist= count($subscribers);
            if($exist == 0){
              $data[] = array(
                "Email" => '',
                "Fecha de registro" => '',
               );
            }else{
             foreach ($subscribers as $c)
              {
                 $data[] = array(
                     "Email" => $c->email,
                     "Fecha de registro" => $c->created_at,
                  );
              }
            }


            $sheet->fromArray($data);

             });
         })->export('xlsx');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
