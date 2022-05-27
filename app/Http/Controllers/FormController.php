<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function verForm()
    {
        return view('form_view.formulario');
    }

    public function guardarForm(Request $request)
    {
        $comercio=$request->input('comercio');
        $rubro=$request->input('rubro');
        $departamento=$request->input('departamento');
        $ciudad=$request->input('ciudad');
        $direccion=$request->input('direccion');

        //preguntas
        $preg1=$request->input('preg1');
        $preg2=$request->input('preg2');


        dd($comercio, $rubro, $departamento, $ciudad, $direccion, $preg1, $preg2);
    }
}
