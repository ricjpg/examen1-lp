<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Contacto;


class DirectorioController extends Controller
{
    //
    public function index(){
        $Directorios = Directorio::all();
        return view('directorio', compact('Directorios'));
    }

    public function crear(){
        return view('crearEntrada');
    }

    public function guardar(Request $request){
        $Directorio = new Directorio();
        $Directorio->codigoEntrada = $request->input('codigo');
        $Directorio->nombre = $request->input('nombre');
        $Directorio->apellido = $request->input('apellido');
        $Directorio->telefono = $request->input('telefono');
        $Directorio->correo = $request->input('correo');

        $Directorio->save();
        return redirect()->route('directorio.index');
    }

    public function buscar(){
        return view('buscar');
    }

    public function vercontacto($codigoEntrada){
        $Directorio = Directorio::find($codigoEntrada);
        $Contactos = Contacto::where('codigoEntrada', $Directorio->codigoEntrada)->get();
        return view('verContactos', compact('Directorio', 'Contactos'));
    }
    
    public function eliminar(){
        return view('eliminar');
    }

    public function resultado(Request $request){
        
        // $DatosDirectorio = Directorio::where('correo', $request->input('correo'))->get();
        $Directorio = Directorio::where('correo', $request->input('correo'))->get();
        
        return view('verContactos', compact('Directorio'));
        
    }
}
