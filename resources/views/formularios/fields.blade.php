<!-- Forma De Pago Field -->
<div class="form-group col-sm-6">
    {{ Form::label('forma_de_pago', 'Que formas de pago admitia?') }}
     <br>
    <label>
        {{ Form::radio('forma_de_pago', 'Transferencia bancaria') }} Transferencia bancaria
    </label>
    <label>
        {{ Form::radio('forma_de_pago', 'Billeteras electronicas') }} Billeteras electronicas
    </label>
    <label>
        {{ Form::radio('forma_de_pago', 'Billetera movil') }} Billetera movil
    </label>
    <label>
        {{ Form::radio('forma_de_pago', 'Otro') }} Otro
    </label>
</div>

<!-- Metodo Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('metodo_envio', 'Metodo Envio:') !!}
    {!! Form::text('metodo_envio', null, ['class' => 'form-control']) !!}
</div>

<!-- Tecnologia Venta Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tecnologia_venta_producto', 'Tecnologia Venta Producto:') !!}
    {!! Form::text('tecnologia_venta_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Publicidad De Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publicidad_de_producto', 'Publicidad De Producto:') !!}
    {!! Form::text('publicidad_de_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fue Util Para El Negocio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fue_util_para_el_negocio', 'Fue Util Para El Negocio:') !!}
    {!! Form::text('fue_util_para_el_negocio', null, ['class' => 'form-control']) !!}
</div>

<!-- Noto Aumento De Ventas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noto_aumento_de_ventas', 'Noto Aumento De Ventas:') !!}
    {!! Form::text('noto_aumento_de_ventas', null, ['class' => 'form-control']) !!}
</div>

<!-- Siguio Utlizando Field -->
<div class="form-group col-sm-6">
    {!! Form::label('siguio_utlizando', 'Siguio Utlizando:') !!}
    {!! Form::text('siguio_utlizando', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('formularios.index') }}" class="btn btn-secondary">Cancel</a>
</div>
