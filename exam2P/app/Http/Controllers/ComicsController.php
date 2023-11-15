<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComicsRequest;


class ComicsController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoGuardar(ComicsRequest $req){
        
    return redirect('/guardarComic')->with('confirmacion','Tu registro se guardó');

    }
}
