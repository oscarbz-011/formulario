<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulario</title>
  </head>

      <body style="background-color:#BCDAF0;">
            <div class="container-fluid shadow-lg sticky-md-top" style="padding: 20px; background-color:#0083DE; color:white; ">
                  <div class="row">
                        <div class="col-md-2 col-xs-12" align="center" style="margin-bottom: 10px;">
                              <a href="/"><img src="./images/logo.png" alt="Logo" width="60px"></a>
                        </div>
                        <div class="col-md-10 col-xs-12" style="align-self: center;" >
                              <h4>Comercio electrónico en tiempos de cuarentena inteligente a causa del covid 19</h4>
                        </div>
                  </div>
            </div>

            <div class="container-md shadow" style="background-color:#F8F9F9; padding: 30px;">
                  <div class="row">
                        <center>
                              <p>Bienvenido, complete el formulario</p>

                              {!! Form::open(['route' => 'guardar']) !!}
                              {{ csrf_field() }}
                                    <!-- Datos del comercio -->
                                    <div class="mb-3">
                                          <label for="nombre_comercio" class="form-label">Nombre del Comercio:</label>
                                          <input type="text" class="form-control" name="nombre_comercio" id="nombre_comercio" >
                                    </div>

                                    <div class="mb-3">
                                          <label for="rubro" class="form-label">Rubro:</label>
                                          {!! Form::label('rubro_id', 'Rubro:') !!}
                                          {!! Form::select('rubro_id', $rubros,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
                                          <!-- DEBE SER MULTIPLE -->
                                    </div>

                                    <div class="mb-3">
                                          <label for="depar" class="form-label">Departamento:</label>
                                          {!! Form::label('ciudad_id', 'Ciudades:') !!}
                                          {!! Form::select('ciudad_id', $ciudades,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
                                    </div>

                                    <div class="mb-3">
                                          <label for="ciudad" class="form-label">Ciudad:</label>
                                          {!! Form::label('departamento_id', 'Departamento:') !!}
                                          {!! Form::select('departamento_id', $departamentos,null,['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
                                    </div>

                                    <div class="mb-3">
                                          <label for="direccion" class="form-label">Dirección:</label>
                                          <input type="text" class="form-control" name="direccion" id="direccion" >
                                    </div>
                                    <br>

                                    <!-- Preguntas -->
                                    <p>Seleccione una opción por cada pregunta</p>
                                      
                                    <!-- primera pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Qué formas de pago admitía? </label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="forma_de_pago" value="efectivo" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Efectivo</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="forma_de_pago" value="transferencia" id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">Transferencias Bancarias</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="forma_de_pago" value="billetera móvil" id="flexCheckChecked2" >
                                                <label class="form-check-label" for="flexCheckChecked2">Billetera Móvil (Tigo Money, Billetera Personal, Zimple)</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="forma_de_pago" value="otras billeteras" id="flexCheckChecked3" >
                                                <label class="form-check-label" for="flexCheckChecked3">Otras Billeteras Electrónicas</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="forma_de_pago" value="otro" id="flexCheckChecked4" >
                                                <label class="form-check-label" for="flexCheckChecked4">Otros</label>
                                          </div>
                                    </div>

                                      <!-- segunda pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Qué métodos de envío utilizaba?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="metodo_envio" value="envio propio" id="pregCheck2">
                                                <label class="form-check-label" for="pregCheck2">Envio Propio</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="metodo_envio" value="encomienda" id="pregCheck2-1" >
                                                <label class="form-check-label" for="pregCheck2-1">Envio por encomienda</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="metodo_envio" value="otro" id="pregCheck2-2" >
                                                <label class="form-check-label" for="pregCheck2-2">Otro</label>
                                          </div>
                                    </div>

                                      <!-- tercera pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Qué tecnologías utilizó para la venta de sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="tecnologia_venta_producto" value="whatsapp" id="pregCheck3">
                                                <label class="form-check-label" for="pregCheck3">Whatsapp</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="tecnologia_venta_producto" value="facebook" id="pregCheck3-" >
                                                <label class="form-check-label" for="pregCheck3-">Facebook Marketplace</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="tecnologia_venta_producto" value="instagram" id="pregCheck3-1" >
                                                <label class="form-check-label" for="pregCheck3-1">Instagram</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="tecnologia_venta_producto" value="otro" id="pregCheck3-2" >
                                                <label class="form-check-label" for="pregCheck3-2">Otro</label>
                                          </div>
                                    </div>

                                    <!-- cuarta pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Cómo publicitaron sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="publicidad_de_producto" value="facebook ads" id="pregCheck4">
                                                <label class="form-check-label" for="pregCheck4">Facebook AD's</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="publicidad_de_producto" value="whatsapp" id="pregCheck4-" >
                                                <label class="form-check-label" for="pregCheck4-">Estados de Whatsapp</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="publicidad_de_producto" value="instagram" id="pregCheck4-1" >
                                                <label class="form-check-label" for="pregCheck4-1">Historias de Instagram</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="checkbox" name="publicidad_de_producto" value="otro" id="pregCheck4-2" >
                                                <label class="form-check-label" for="pregCheck4-2">Otro</label>
                                          </div>
                                    </div>

                                    <!-- quinta pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Fue útil para tu negocio vender de forma electrónica?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="fue_util_para_el_negocio" value="si" id="pregCheck5">
                                                <label class="form-check-label" for="pregCheck5">Si</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="fue_util_para_el_negocio" value="no" id="pregCheck5-" >
                                                <label class="form-check-label" for="pregCheck5-">No</label>
                                          </div>
                                    </div>

                                    <!-- sexta pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Notó un aumento en las ventas de sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="noto_aumento_de_ventas" value="si" id="pregCheck6">
                                                <label class="form-check-label" for="pregCheck6">Si</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="noto_aumento_de_ventas" value="no" id="pregCheck6-" >
                                                <label class="form-check-label" for="pregCheck6-">No</label>
                                          </div>
                                    </div>

                                    <!-- septima pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Notó un aumento en las ventas de sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="siguio_utlizando" value="si" id="pregCheck7">
                                                <label class="form-check-label" for="pregCheck7">Si</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="siguio_utlizando" value="no" id="pregCheck7-" >
                                                <label class="form-check-label" for="pregCheck7-">No</label>
                                          </div>
                                    </div>

                                    <br>

                                    <input type="submit" class="btn btn-primary col-12" value="Enviar Respuesta" name="enviar">

                              {!! Form::close() !!}
                        </center>

                  </div>
            </div>

      </body>
</html>
