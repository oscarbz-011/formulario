<!-- Nombre Rubro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_rubro', 'Nombre Rubro:') !!}
    {!! Form::text('nombre_rubro', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rubros.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
