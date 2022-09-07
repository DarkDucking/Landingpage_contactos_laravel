<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }

    public function contactos($contacto_id = null)
    {
        if($contacto_id == '1234'){
            $nombre = "Oscar Leonardo Cárdenas Ulloa";
            $correo = "leo@test.com";
        } else {
            $nombre = null;
            $correo = null;
        }
    
    
        return view('contactos', compact('nombre', 'correo'));
    }
}
