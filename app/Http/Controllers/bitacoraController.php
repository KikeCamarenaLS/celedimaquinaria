<?php

namespace App\Http\Controllers;


use Request;
use DB;
use Auth;

class bitacoraController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    public function bitacoraView(){

      $proyectos=DB::select('SELECT * FROM cat_proyectos ORDER BY PROYECTO ASC');
      $lotes=DB::select('SELECT * FROM proyectoLote where proyecto=1');
      $id_proy=1;
      return view('Terrenos.Bitacora.bitacoraView',compact('proyectos','lotes','id_proy'));
    }
}
