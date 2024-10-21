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
    
}
