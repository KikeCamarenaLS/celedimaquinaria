<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class controllerQR extends Controller
{
    
    public function vistaqr()
    {
        $qrCode = QrCode::format('png')->size(300)->merge(public_path('celedi.jpeg'), 0.35, true)->generate('https://celedimaquinaria.com/public/colaborador_123456');
    $qrCodeDataUri = 'data:image/png;base64,' . base64_encode($qrCode);
    return view('vista-qrcode', ['qrCodeDataUri' => $qrCodeDataUri]);
    }
}
