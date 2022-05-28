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
                              <a href="/completar-formulario"><img src="/images/logo.png" alt="Logo" width="60px"></a>
                        </div>
                        <div class="col-md-10 col-xs-12" style="align-self: center;" >
                              <h4>Comercio electrónico en tiempos de cuarentena inteligente a causa del covid 19</h4>
                        </div>
                  </div>
            </div>

            <div class="container-md shadow" style="background-color:#F8F9F9; padding: 30px;">
                  <div class="row">
                        <center>
                              <p>{ MENSAJE DE BIENVENIDA Y BREVE EXPLICACIÓN DE LO QUE DEBE COMPLETAR }</p>

                              <form action="/enviar-formulario" method="post" class="col-md-6 col-xs-12" style="text-align: left;">
                             {{ csrf_field() }}
                                    <!-- Datos del comercio -->
                                    <div class="mb-3">
                                          <label for="nombre-comercio" class="form-label">Nombre del Comercio:</label>
                                          <input type="text" class="form-control" name="comercio" id="nombre-comercio" >
                                    </div>

                                    <div class="mb-3">
                                          <label for="rubro" class="form-label">Rubro:</label>
                                          <select class="form-select" id="rubro" name="rubro" >
                                                <option selected>Seleccione un rubro</option>
                                                <option value="1">Venta de Electrodomésticos</option>
                                                <option value="2">Servicios de Marketign</option>
                                                <!-- ESTIRAR DE LA BASE DE DATOS LAS CIUDADES -->
                                          </select>
                                          <!-- DEBE SER MULTIPLE -->
                                    </div>

                                    <div class="mb-3">
                                          <label for="depar" class="form-label">Departamento:</label>
                                          <select class="form-select" id="depar" name="departamento">
                                                <option selected>Seleccione un departamento</option>
                                                <option value="1">Itapúa</option>
                                                <!-- ESTIRAR DE LA BASE DE DATOS LOS DEPARTAMENTOS -->
                                          </select>
                                    </div>

                                    <div class="mb-3">
                                          <label for="ciudad" class="form-label">Ciudad:</label>
                                          <select class="form-select" id="ciudad" name="ciudad">
                                                <option selected>Seleccione una ciudad</option>
                                                <option value="1">Encarnación</option>
                                                <!-- ESTIRAR DE LA BASE DE DATOS LAS CIUDADES -->
                                          </select>
                                    </div>

                                    <div class="mb-3">
                                          <label for="direccion" class="form-label">Dirección:</label>
                                          <input type="text" class="form-control" name="direccion" id="direccion" >
                                    </div>
                                    <br>

                                    <!-- Preguntas -->
                                    <p>{ AVISAR QUE ES LA SECCION DE LAS PREGUNTAS }</p>
                                      
                                    <!-- primera pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Qué formas de pago admitía? </label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg1" value="efectivo" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Efectivo</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg1" value="transferencia" id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">Transferencias Bancarias</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg1" value="billetera móvil" id="flexCheckChecked2" >
                                                <label class="form-check-label" for="flexCheckChecked2">Billetera Móvil (Tigo Money, Billetera Personal, Zimple)</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg1" value="otras billeteras" id="flexCheckChecked3" >
                                                <label class="form-check-label" for="flexCheckChecked3">Otras Billeteras Electrónicas</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg1" value="otro" id="flexCheckChecked4" >
                                                <label class="form-check-label" for="flexCheckChecked4">Otros</label>
                                          </div>
                                    </div>

                                      <!-- segunda pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Qué métodos de envío utilizaba?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg2" value="envio propio" id="pregCheck2">
                                                <label class="form-check-label" for="pregCheck2">Envio Propio</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg2" value="encomienda" id="pregCheck2-1" >
                                                <label class="form-check-label" for="pregCheck2-1">Envio por encomienda</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg2" value="otro" id="pregCheck2-2" >
                                                <label class="form-check-label" for="pregCheck2-2">Otro</label>
                                          </div>
                                    </div>

                                      <!-- tercera pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Qué tecnologías utilizó para la venta de sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg3" value="whatsapp" id="pregCheck3">
                                                <label class="form-check-label" for="pregCheck3">Whatsapp</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg3" value="facebook" id="pregCheck3-" >
                                                <label class="form-check-label" for="pregCheck3-">Facebook Marketplace</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg3" value="instagram" id="pregCheck3-1" >
                                                <label class="form-check-label" for="pregCheck3-1">Instagram</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg3" value="otro" id="pregCheck3-2" >
                                                <label class="form-check-label" for="pregCheck3-2">Otro</label>
                                          </div>
                                    </div>

                                    <!-- cuarta pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Cómo publicitaron sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg4" value="facebook ads" id="pregCheck4">
                                                <label class="form-check-label" for="pregCheck4">Facebook AD's</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg4" value="whatsapp" id="pregCheck4-" >
                                                <label class="form-check-label" for="pregCheck4-">Estados de Whatsapp</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg4" value="instagram" id="pregCheck4-1" >
                                                <label class="form-check-label" for="pregCheck4-1">Historias de Instagram</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg4" value="otro" id="pregCheck4-2" >
                                                <label class="form-check-label" for="pregCheck4-2">Otro</label>
                                          </div>
                                    </div>

                                    <!-- quinta pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Fue útil para tu negocio vender de forma electrónica?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg5" value="si" id="pregCheck5">
                                                <label class="form-check-label" for="pregCheck5">Si</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg5" value="no" id="pregCheck5-" >
                                                <label class="form-check-label" for="pregCheck5-">No</label>
                                          </div>
                                    </div>

                                    <!-- sexta pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Notó un aumento en las ventas de sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg6" value="si" id="pregCheck6">
                                                <label class="form-check-label" for="pregCheck6">Si</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg6" value="no" id="pregCheck6-" >
                                                <label class="form-check-label" for="pregCheck6-">No</label>
                                          </div>
                                    </div>

                                    <!-- septima pregunta -->
                                    <div class="mb-3">
                                          <label for="phone" class="form-label">¿Notó un aumento en las ventas de sus productos?</label>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg7" value="si" id="pregCheck7">
                                                <label class="form-check-label" for="pregCheck7">Si</label>
                                          </div>
                                          <div class="form-check" style="margin-bottom: 15px">
                                                <input class="form-check-input" type="radio" name="preg7" value="no" id="pregCheck7-" >
                                                <label class="form-check-label" for="pregCheck7-">No</label>
                                          </div>
                                    </div>

                                    <br>

                                    <input type="submit" class="btn btn-primary col-12" value="Enviar Respuesta" name="enviar">

                              </form>
                        </center>

                  </div>
            </div>

      </body>
</html>
