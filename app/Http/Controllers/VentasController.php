<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VentasController extends Controller
{
    
     public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    public function ventalotesView(){
      $proyectos=DB::select('SELECT * FROM cat_proyectos');
      return view('Terrenos.Ventas.ventasLotes',compact('proyectos'));
    }
}
