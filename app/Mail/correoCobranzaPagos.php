<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class correoCobranzaPagos extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje_corrreo;

    public function __construct($mensaje_corrreos)
    {
        $this->mensaje_corrreo = $mensaje_corrreos;
    }

    public function build()
    {
        return $this->view('mails.correoModuloCobranza');
    }

}
