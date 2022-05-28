<div class="table-responsive-sm">
    <table class="table table-striped" id="ciudads-table">
        <thead>
            <tr>
                <th>Nombre Ciudad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ciudads as $ciudad)
            <tr>
                <td>{{ $ciudad->nombre_ciudad }}</td>
                <td>
                    {!! Form::open(['route' => ['ciudads.destroy', $ciudad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ciudads.show', [$ciudad->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ciudads.edit', [$ciudad->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>