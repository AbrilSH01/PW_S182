<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormularios(){
        return view('formularios');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function metodoGuardar(validadorFormDiario $req){
        
        /* $validated = $req->validate([
            'txtTitulo' => 'required|max:255',
            'txtRecuerdo' => 'required|max:25',
        ]); */

        return redirect('/formularios')->with('confirmacion','Tu recuerdo llego al controlador');
    }
}
