<?php

namespace App\Http\Controllers\TerrenoController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;



class PersonalController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


public function viewCaptura(){
    $proyectos=DB::select('SELECT * FROM cat_proyectos');
  return view('Terrenos.capturadePago',compact('proyectos'));
}

    public function registrarPago(Request $request){
        $proyecto= $request->input("proyecto");
        $Mz= $request->input("Mz");
        $Lote= $request->input("Lote");
        $Cliente= $request->input("Cliente");
        $Fecha_pagare= $request->input("Fecha_pagare");
        $Pagare= $request->input("Pagare");
        $Concepto= $request->input("Concepto");
        $Total= $request->input("Total");
        $Intereses= $request->input("Intereses");
        $id = Auth::user()->id;
        return DB::select('insert into pagos values (null,"'.$Cliente.'",'.$proyecto.',"'.$Mz.'","'.$Lote.'","'.$Fecha_pagare.'","'.$Pagare.'","'.$Concepto.'","'.$Total.'","'.$Intereses.'",'.$id.')');
    }

    public function viewReportes(){
    $proyectos=DB::select('SELECT * FROM cat_proyectos');
  return view('Terrenos.reportePagos',compact('proyectos'));
}
 public function reportepago(){
    $id = Auth::user()->id;
    return DB::select('SELECT * FROM pagos where id_personal='.$id);
 
}

 public function pdfPagos(Request $request){
    $id = Auth::user()->id;
    $datos= DB::select('SELECT * FROM pagos where id_personal='.$id);
    $pdf = PDF::loadView('inventario.Resguardos.pdfArea', compact('datos'));
$pdf->setPaper('A4');
return $pdf->stream('reporte');




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