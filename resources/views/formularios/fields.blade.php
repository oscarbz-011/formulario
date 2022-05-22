<!-- Forma De Pago Field -->
<div class="form-group col-sm-6">
    {{ Form::label('forma_de_pago', '¿Qué formas de pago admitía?') }}
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
<br>
<div class="form-group col-sm-6">
    {{ Form::label('metodo_envio', '¿Qué métodos de envío utilizaban?') }}
     <br>
    <label>
        {{ Form::radio('metodo_envio', 'Envío propio ') }} Envío propio 
    </label>
    <label>
        {{ Form::radio('metodo_envio', 'Envío por encomienda') }} Envío por encomienda
    </label>
    <label>
        {{ Form::radio('metodo_envio', 'Otro ') }} Otro
    </label>

<!-- Tecnologia Venta Producto Field -->
<div class="form-group col-sm-6">
    {{ Form::label('tecnologia_venta_producto', '¿Qué tecnologías utilizó para la venta de sus productos?') }}
     <br>
    <label>
        {{ Form::radio('tecnologia_venta_producto', 'WhatsApp ') }} WhatsApp
    </label>
    <label>
        {{ Form::radio('tecnologia_venta_producto', 'Facebook Marketplace ') }} Facebook Marketplace
    </label>
    <label>
        {{ Form::radio('tecnologia_venta_producto', 'Instagram ') }} Instagram
    </label>
    <label>
        {{ Form::radio('tecnologia_venta_producto', 'Otro ') }} Otro
    </label>


<!-- Publicidad De Producto Field -->
<div class="form-group col-sm-6">
    {{ Form::label('publicidad_de_producto', '¿Cómo publicitaron sus productos?') }}
     <br>
    <label>
        {{ Form::radio('publicidad_de_producto', 'Facebook ADS ') }} Facebook ADS
    </label>
    <label>
        {{ Form::radio('publicidad_de_producto', 'Estados de WhatsApp ') }} Estados de WhatsApp
    </label>
    <label>
        {{ Form::radio('publicidad_de_producto', 'Historias de Instagram ') }} Historias de Instagram
    </label>
    <label>
        {{ Form::radio('publicidad_de_producto', 'Otro ') }} Otro
    </label>

<!-- Fue Util Para El Negocio Field -->
<div class="form-group col-sm-6">
    {{ Form::label('fue_util_para_el_negocio', '¿Fue útil para tu negocio vender de forma electrónica?') }}
     <br>
    <label>
        {{ Form::radio('fue_util_para_el_negocio', 'Si') }} Si
    </label>
     <label>
        {{ Form::radio('fue_util_para_el_negocio', 'No') }} No
    </label>

<!-- Noto Aumento De Ventas Field -->
<div class="form-group col-sm-6">
    {{ Form::label('noto_aumento_de_ventas', '¿Notó un aumento en las ventas de sus productos?') }}
     <br>
    <label>
        {{ Form::radio('noto_aumento_de_ventas', 'Si') }} Si
    </label>
     <label>
        {{ Form::radio('noto_aumento_de_ventas', 'No') }} No
    </label>

<!-- Siguio Utlizando Field -->
<div class="form-group col-sm-6">
    {{ Form::label('siguio_utlizando', '¿Siguió utilizando las ventas electrónicas en su negocio?') }}
     <br>
    <label>
        {{ Form::radio('siguio_utlizando', 'Si') }} Si
    </label>
     <label>
        {{ Form::radio('siguio_utlizando', 'No') }} No
    </label>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('formularios.index') }}" class="btn btn-secondary">Cancel</a>
</div>
