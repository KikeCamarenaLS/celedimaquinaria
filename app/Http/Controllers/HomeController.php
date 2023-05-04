<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','checkstatus']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $consulta=DB::select("SELECT DATE(fecha_hora) as fecha, COUNT(*) as cantidad,
            CASE 
               WHEN DAYNAME(fecha_hora) = 'Monday' THEN 'Lunes'
               WHEN DAYNAME(fecha_hora) = 'Tuesday' THEN 'Martes'
               WHEN DAYNAME(fecha_hora) = 'Wednesday' THEN 'Miércoles'
               WHEN DAYNAME(fecha_hora) = 'Thursday' THEN 'Jueves'
               WHEN DAYNAME(fecha_hora) = 'Friday' THEN 'Viernes'
               WHEN DAYNAME(fecha_hora) = 'Saturday' THEN 'Sábado'
               WHEN DAYNAME(fecha_hora) = 'Sunday' THEN 'Domingo'
            END as dia
            FROM dispositivos
            WHERE fecha_hora BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()
            GROUP BY DATE(fecha_hora)
            ORDER BY fecha_hora asc;
            ");
        
        return view('home',compact('consulta'));
    }
     public function inicio()
    {
        
        return view('pestanias.indexasa');
    }

}
