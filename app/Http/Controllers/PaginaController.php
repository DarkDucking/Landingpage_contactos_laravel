<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function contactos_form(Request $request)
    {
        //recibe info y valida
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'comentario' => 'required|min:5',
        ]);
        
        echo 'jala';

        //agrega info a la BD
        DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'comentario' => $request->comentario,

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect ('/contactos');

    }
}
