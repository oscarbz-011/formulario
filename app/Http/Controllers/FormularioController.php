<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormularioRequest;
use App\Http\Requests\UpdateFormularioRequest;
use App\Repositories\FormularioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
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
        return view('formularios.create');
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

        Flash::success('Formulario guardado correctamente.');

        return redirect(route('formularios.index'));
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

        if (empty($formulario)) {
            Flash::error('Formulario no encontrado');

            return redirect(route('formularios.index'));
        }

        return view('formularios.edit')->with('formulario', $formulario);
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
            Flash::error('Formulario  no encontrado');

            return redirect(route('formularios.index'));
        }

        $formulario = $this->formularioRepository->update($request->all(), $id);

        Flash::success('Formulario actualizado correctamente.');

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
            Flash::error('Formulario  no encontrado');

            return redirect(route('formularios.index'));
        }

        $this->formularioRepository->delete($id);

        Flash::success('Formulario eliminado correctamente.');

        return redirect(route('formularios.index'));
    }
}
