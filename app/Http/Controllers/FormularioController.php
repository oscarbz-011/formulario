<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormularioRequest;
use App\Http\Requests\UpdateFormularioRequest;
use App\Repositories\FormularioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Rubro;
use App\Models\Ciudad;
use App\Models\Departamento;
use Flash;
use Response;

class FormularioController extends AppBaseController
{
    /** @var  FormularioRepository */
    private $formularioRepository;

    public function __construct(FormularioRepository $formularioRepo)
    {
        $this->formularioRepository = $formularioRepo;
    }

    /**
     * Display a listing of the Formulario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $formularios = $this->formularioRepository->all();

        return view('formularios.index')
            ->with('formularios', $formularios);
    }

    /**
     * Show the form for creating a new Formulario.
     *
     * @return Response
     */
    public function create()
    {
         $rubros = Rubro::pluck('nombre_rubro','id');
         $departamentos = Departamento::pluck('nombre_departamento','id');
         $ciudades = Ciudad::pluck('nombre_ciudad','id');

        return view('formularios.create',compact(
            'rubros','departamentos','ciudades')); 
    }

    /**
     * Store a newly created Formulario in storage.
     *
     * @param CreateFormularioRequest $request
     *
     * @return Response 
     */
    public function store(CreateFormularioRequest $request)
    {   
        $input = $request->all();

        $formulario = $this->formularioRepository->create($input);

        Flash::success('Formulario guardado con éxito.');

        return redirect(route('formularios.index'));
    }


    //funcion que guarda la encuesta del usuario
    public function form(CreateFormularioRequest $request)
    {   
        $input = $request->all();
        $formulario = $this->formularioRepository->create($input);

        /* Form::create([
            'nombre_comercio'=>$request->nombre_comercio,
            'rubro_id'=>$request->rubro_id,
            'departamento_id'=>$request->departamento_id,
            'ciudad_id'=>$request->ciudad_id,
            'direccion'=>$request->direccion,
            'metodo_envio'=>implode(',',$request->metodo_envio),
            'tecnologia_venta_producto'=>implode(',',$request->tecnologia_venta_producto),
            'publicidad_de_producto'=>implode(',',$request->publicidad_de_producto),
            'fue_util_para_el_negocio'=>$request->fue_util_para_el_negocio,
            'noto_aumento_de_ventas'=>$request->noto_aumento_de_ventas,
            'siguio_utlizando'=>implode(',',$request->siguio_utlizando),
            'forma_de_pago' =>implode(',',$request->forma_de_pago,)
        ]); */

        return redirect('/')->with('guardado', 'si');
    }


    /**
     * Display the specified Formulario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario no encontrado');

            return redirect(route('formularios.index'));
        }

        return view('formularios.show')->with('formulario', $formulario);
    }

    /**
     * Show the form for editing the specified Formulario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formulario = $this->formularioRepository->find($id);
        $rubros = Rubro::pluck('nombre_rubro','id');
         $departamentos = Departamento::pluck('nombre_departamento','id');
         $ciudades = Ciudad::pluck('nombre_ciudad','id');

        if (empty($formulario)) {
            Flash::error('Formulario no encontrado');

            return redirect(route('formularios.index'));
        }

       return view('formularios.edit',compact(
            'rubros','departamentos','ciudades','formulario'));
    }

    /**
     * Update the specified Formulario in storage.
     *
     * @param int $id
     * @param UpdateFormularioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormularioRequest $request)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario no encontrado');

            return redirect(route('formularios.index'));
        }

        $formulario = $this->formularioRepository->update($request->all(), $id);

        Flash::success('Formulario actualizado con éxito.');

        return redirect(route('formularios.index'));
    }

    /**
     * Remove the specified Formulario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formulario = $this->formularioRepository->find($id);

        if (empty($formulario)) {
            Flash::error('Formulario no encontrado');

            return redirect(route('formularios.index'));
        }

        $this->formularioRepository->delete($id);

        Flash::success('Formulario borrado con éxito.');

        return redirect(route('formularios.index'));
    }
}
