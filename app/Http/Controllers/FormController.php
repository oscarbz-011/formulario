<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubro;
use App\Models\Ciudad;
use App\Models\Departamento;
class FormController extends Controller
{
    public function verForm()
    {
        $rubros = Rubro::pluck('nombre_rubro','id');
         $departamentos = Departamento::pluck('nombre_departamento','id');
         $ciudades = Ciudad::pluck('nombre_ciudad','id');

        return view('form_view.formulario',compact(
            'rubros','departamentos','ciudades'));
    }

}
