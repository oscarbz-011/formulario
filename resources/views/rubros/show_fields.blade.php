<!-- Nombre Rubro Field -->
<div class="form-group">
    {!! Form::label('nombre_rubro', 'Nombre Rubro:') !!}
    <p>{{ $rubro->nombre_rubro }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $rubro->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $rubro->updated_at }}</p>
</div>

