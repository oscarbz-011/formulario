<!-- Nombre Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_ciudad', 'Nombre Ciudad:') !!}
    {!! Form::text('nombre_ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ciudads.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
