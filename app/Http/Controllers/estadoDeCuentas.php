<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use DeviceDetector\DeviceDetector;
use UAParser\Parser;


use DeviceDetector\Parser\Client\Browser;


class estadoDeCuentas extends Controller
{
    
    

    public function inicio()
    {

        return view('pestanias.index');
    }
    public function historial_visitas()
    {

       $consulta=DB::select('SELECT * FROM dispositivos ');
        return view('pestanias.historial_visitas',compact('consulta'));
    }

    public function catalogo()
    {
        return view('pestanias.catalogo');
    }
    public function tarjeta_presentacion(Request $request)
    {

$direccion_ip = $request->ip();

    // Obtener el agente de usuario del cliente
    $agente_usuario = $request->header('User-Agent');
    

    // Detectar el dispositivo del cliente
    $deviceDetector = new DeviceDetector($agente_usuario);
    $deviceDetector->parse();
    $cliente = $deviceDetector->getClient();
    $dispositivo = $deviceDetector->getDeviceName() . '/'. $deviceDetector->getBrandName() . '/'. $deviceDetector->getModel().'/'. $deviceDetector->getOs('short_name') . ' ' . $deviceDetector->getOs('version');
;
    $marca = $deviceDetector->getBrandName();
$modelo = $deviceDetector->getModel();
//dd($modelo);

    // Insertar los datos en la tabla
    DB::table('dispositivos')->insert([
        'direccion_ip' => $direccion_ip,
        'agente_usuario' => $agente_usuario,
        'dispositivo' => $dispositivo,
        'navegador'=>$cliente['name'],
    ]);
    



        return view('pestanias.tarjeta_presentacion');
        
    }
    public function colaborador_presentacion($cadena)
    {
        $consulta=DB::select('SELECT * FROM t_colaboradores where cadena="'.$cadena.'"');
        return view('pestanias.colaborador_presentacion',compact('consulta'));
    }
}
