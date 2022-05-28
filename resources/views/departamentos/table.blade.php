<div class="table-responsive-sm">
    <table class="table table-striped" id="departamentos-table">
        <thead>
            <tr>
                <th>Nombre Departamento</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->nombre_departamento }}</td>
                <td>
                    {!! Form::open(['route' => ['departamentos.destroy', $departamento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departamentos.show', [$departamento->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('departamentos.edit', [$departamento->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>