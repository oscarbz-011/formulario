<div class="table-responsive-sm">
    <table class="table table-striped" id="rubros-table">
        <thead>
            <tr>
                <th>Nombre Rubro</th>
        
            </tr>
        </thead>
        <tbody>
        @foreach($rubros as $rubro)
            <tr>
                <td>{{ $rubro->nombre_rubro }}</td>
                <td>
                    {!! Form::open(['route' => ['rubros.destroy', $rubro->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rubros.show', [$rubro->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('rubros.edit', [$rubro->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>