<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoEnvioController extends Controller{
    public function infoenvio(){
        return view('DatosEnvios.Infoenvio');
    }

    public function infocobro(){
        return view('DatosEnvios.infocobro');
    }

    public function destinatario(){
        return view('DatosEnvios.destinatario');
    }
    public function nosotros()
    {
        return view('Ideales');
    }
    public function metodopago(){
        return view('DatosEnvios.metodopago');
    }
    public function pago(){
        return view('DatosEnvios.pago');
    }
}
