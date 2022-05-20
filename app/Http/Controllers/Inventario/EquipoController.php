<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\catEquipos;
use Schema;
use App\catCaracteristicas;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{    

    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function nuevo_equipo()
    {

       // $caracteristicas = Schema::getColumnListing('cat_equipos');
        //dd($caracteristicas);
        //return view('inventario.Equipos.NuevoEquipo', compact('caracteristicas') );
        return view('inventario.Equipos.NuevoEquipo');

    }
    public function listado_equipo(){
        $caracteriticasNombre[0][0]="";
        return view('inventario.Equipos.BuscarEquipo',compact('caracteriticasNombre'));
    }

    public function getColumnas(){
        //$caracteristicas = Schema::getColumnListing('cat_equipos');
        return catCaracteristicas::orderBy('idCaracteristica', 'ASC')->get();
    }

    public function getDuplicate(){

        return catEquipos::orderBy('nombre_equipo', 'ASC')->get();
        //return DB::select('select nombre_equipo from cat_equipos where nombre_equipo');
    }

    public function getEquipoName(){
        return catEquipos::select("nombre_equipo")->get();
    }

    public function getCarcateristicasUnserialize($id){
        $caracteristica = DB::select('select caracteristicas from cat_equipos where ID_Equipo ="'.$id.'" ');
        $otro = unserialize($caracteristica[0]->caracteristicas);
        return $otro;
    }

    public function getObligatoriasUnserialize($id){
        $obligatoria = DB::select('select obligatorios from cat_equipos where ID_Equipo ="'.$id.'" ');
        $obligatoriaEquipo = unserialize($obligatoria[0]->obligatorios);
        return $obligatoriaEquipo ;
    }
    public function ComboEquipos(){
        $equipos=catEquipos::all();
        return $equipos;

    }
    public function RegistrosEquipos(Request $request){
        $equipo= $request->input('equipo');
       
        $equipos=catEquipos::all();
         //dd($equipos);
        $caracteristicas=[];
        for ($i=0; $i < count($equipos); $i++) { 

           array_push($caracteristicas, unserialize($equipos[$i]->caracteristicas));
        }


        $caracteriticasNombre;
        for ($i=0; $i < count($caracteristicas) ; $i++) { 
            for ($e=0; $e < count($caracteristicas[$i]); $e++) { 
                $nombre=DB::select('select caracteristica from cat_caracteristicas where idCaracteristica ="'.$caracteristicas[$i][$e].'" ');
            $caracteriticasNombre[$i][$e]= $nombre[0]->caracteristica;
            }

        }
//dd($caracteriticasNombre);
       return view('inventario.Equipos.BuscarEquipo',compact('caracteriticasNombre','equipos'));
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

        $caracteristicas = $request->caracteristicasEquipo;
        $Obligatorias = $request->obligacionesEquipo;

        $equipo = new catEquipos();
        $equipo->nombre_equipo = strtoupper($request->equipoName);
        $equipo->caracteristicas = serialize($caracteristicas);
        $equipo->Obligatorios = serialize($Obligatorias);
        $equipo->save();


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
