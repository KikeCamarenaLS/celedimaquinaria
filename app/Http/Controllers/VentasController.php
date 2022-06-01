<?php

namespace App\Http\Controllers;

use Request;
use DB;

class VentasController extends Controller
{
    
     public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }


    public function ventalotesView()
    {
      $proyectos=DB::select('SELECT * FROM cat_proyectos');
      $lotes=DB::select('SELECT * FROM proyectolote');
      return view('Terrenos.Ventas.ventasLotes',compact('proyectos','lotes'));
    
    }
    
    public function capturaProyectos()
    {
        $proyectos=DB::select('SELECT * FROM cat_proyectos');
        return view('Terrenos.Ventas.capturaProyectos',compact('proyectos'));
    
    }
    
    public function capturaProyectosLotes(Request $request)
    {
      $Nombre= Request::input("Nombre");
      $Apellido_Paterno= Request::input("Apellido_Paterno");
      $Apellido_Materno= Request::input("Apellido_Materno");
      $Telefono1= Request::input("Telefono1");
      $Telefono2= Request::input("Telefono2");
      $Calle= Request::input("Calle");
      $Ninterior= Request::input("Ninterior");
      $NExterior= Request::input("NExterior");
      $Colonia= Request::input("Colonia");
      $Municipio= Request::input("Municipio");
      $Estado= Request::input("Estado");
      $Referencia= Request::input("Referencia");
      $rolesuser= Request::input("rolesuser");


      $proyectos=DB::select('SELECT * FROM cat_proyectos');
      $lotes=DB::select('SELECT * FROM proyectolote');
      return view('Terrenos.Ventas.ventasLotes',compact('proyectos','lotes'));
    
    }
}
