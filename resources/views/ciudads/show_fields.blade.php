<!-- Nombre Ciudad Field -->
<div class="form-group">
    {!! Form::label('nombre_ciudad', 'Nombre Ciudad:') !!}
    <p>{{ $ciudad->nombre_ciudad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ciudad->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ciudad->updated_at }}</p>
</div>

