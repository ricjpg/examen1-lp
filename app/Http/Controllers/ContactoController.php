<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Directorio;

class ContactoController extends Controller
{
    //
    public function index(){
        return view('directorio.index');
    }

    public function crear(){
        
        return view('agregarContacto');
    }

    public function guardar(Request $request){
        $Contacto = new Contacto();
        $Contacto->codigoEntrada = $request->input('codigo');
        $Contacto->nombre = $request->input('nombre');
        $Contacto->apellido = $request->input('apellido');
        $Contacto->telefono = $request->input('telefono');

        $Contacto->save();
        return redirect()->route('directorio.index');
    }
}
