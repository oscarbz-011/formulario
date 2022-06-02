<div class="table-responsive-sm">
    <table class="table table-striped" id="formularios-table">
        <thead>
            <tr>
        <th>Nombre de comercio</th>
        <th>Rubro</th>
        <th>Departamento</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>¿Que formas de pago admitía?</th>
        <th>¿Que metodos de envio utlizaban?</th>
        <th>¿Que tecnologias utilizo para la venta de sus productos?</th>
        <th>¿Como publicitaron sus productos?</th>
        <th>¿Fue util para tu negocio vender de forma electronica?</th>
        <th>¿Noto un aumento en las ventas de sus productos?</th>
        <th>¿Siguio utilizando las ventas electronicas en su negocio?</th>
            
            </tr>
        </thead>
        <tbody>
        @foreach($formularios as $formulario)
            <tr>
                 <td>{{ $formulario->nombre_comercio }}</td>
                  <td>{{ $formulario->rubro->nombre_rubro }}</td>
                   <td>{{ $formulario->departamento->nombre_departamento }}</td>
                    <td>{{ $formulario->ciudad->nombre_ciudad }}</td>
                <td>{{ $formulario->forma_de_pago }}</td>
            <td>{{ $formulario->metodo_envio }}</td>
            <td>{{ $formulario->tecnologia_venta_producto }}</td>
            <td>{{ $formulario->publicidad_de_producto }}</td>
            <td>{{ $formulario->fue_util_para_el_negocio }}</td>
            <td>{{ $formulario->noto_aumento_de_ventas }}</td>
            <td>{{ $formulario->siguio_utlizando }}</td>
                <td>
                    {!! Form::open(['route' => ['formularios.destroy', $formulario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('formularios.show', [$formulario->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('formularios.edit', [$formulario->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>