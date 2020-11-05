@extends('layouts.app')

@section('content')
<div class="container" style="max-width:100% !important;">
    <div class="row justify-content-center">
        <div class="col-12" style="padding:0 !important;">
          <img src="{{asset('img/banner1.png')}}" style="width:100%;" alt="">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <p>¡Conviértete en un chef profesional!</p>
        <p class=".d-none .d-md-block .d-lg-block justify-content-center">Elaborar extraordinarias recetas con la TM6 ahora es más fácil y rápido que nunca. TM6 es un verdadero ayudante de cocina gracias a sus funcionalidades como la cocina a Alta Temperatura, Al Vacío, Cocción Lenta y Fermentación. Con el acceso a Cookidoo ® desde la pantalla de la TM6 podrás disfrutar de más de 40.000 recetas internacionales que te permitirán crear increíbles platos caseros con el mínimo esfuerzo. No pierdas más tiempo y cocina las más exquisitas recetas con el TM6 ®. Agenda tu cita de demostración con un profesional.
        </p>
        <a href="#demostracion" class="btn btn-success">Agendar demostración!</a>
      </div>
    </div>
    <br>
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
        <div><i class="far fa-clock" style="font-size:8em;color:#7DC623;"></i></div>
        <h3>Tiempo</h3>
        <span class="b">Cocinar con TM6 ®  te dejará más tiempo para que disfrutes de lo que más te gusta.</span>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
        <div><i class="fas fa-cog" style="font-size:8em;color:#7DC623;"></i></div>
        <h3>Innovación</h3>
        <span class="b">TM6 ® cuenta con las mejores funciones y técnicas para hacer de tus recetas una gran experiencia culinaria.</span>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
        <div><i class="far fa-lightbulb" style="font-size:8em;color:#7DC623;"></i></div>
        <h3>Creatividad</h3>
        <span class="b">Echa a volar tu imaginación con las más de 30 funciones de TM6 ®, como al vacío, cocción lenta o alta temperatura y más.</span>
      </div>
    </div>

    <!-- facilidades de pago -->
    <div class="row justify-content-center banner text-center" style="background-image:URL('img/facilidades_de_pago.png');">
      <div class="col-12" style="padding:0 !important;">
        <div class="row" style="max-width:100%">
          <div class="col-8 justify-content-center white">
            <div class="" style="max-width:50%;padding-left:10%;">
              <span class="graytitle font-weight-bold" style="font-size:1em;">FACILIDADES DE PAGO</span><br>
              <span class="demotitle font-weight-bold" style="font-size:.7em;">CONTADO TRANSFERENCIA BANCARIA, TARJETA DE DEBITO O CRÉDITO EN UN SOLO PAGO</span><br>
              <span class="graytitle font-weight-bold" style="font-size:.7em;">CONTADO UTILIZANDO VARIAS FORMAS DE PAGO HASTA CUBIRI EL MONTO TOTAL</span><br>
              <span class="demotitle font-weight-bold" style="font-size:.7em;">FINANCIADO CON TASA DE INTERÉS PREFERENCIAL UTILIZANDO UNA O VARIAS TARJETAS DE CRÉDITO</span><br>
              <span class="graytitle font-weight-bold" style="font-size:.7em;">NO TIENES TARJETA BANCARIA NOSOTROS TRAMITAMOS TU DIGITAL CREDIT</span><br>
              <span class="demotitle font-weight-bold" style="font-size:.7em;">PROGRAMA GANA TU TM6 ®</span><br>
              <a href="#demostracion" class="btn btn-success">Compra ahora!</a>
            </div>
          </div>
          <div class="col-4">
          </div>
        </div>
      </div>
    </div>

    <!-- meses sin intereses -->
    <div class="row justify-content-center" style="padding-top: 15px;">
      <div class="col-12" style="padding:0 !important;">
        <img src="{{asset('img/meses_sin_intereses.png')}}" style="width:100%;" alt="">
      </div>
    </div>


    <!-- meses sin intereses -->

    <div class="row" style="height:588px;padding-top:15px;">
      <div class="col-12 banner" style="padding:0 !important;background-image:URL('img/demostracion.png');">
        <div class="row" style="max-width:100%">
          <div class="col-8"></div>
            <div class="col-4">
              <div class="justify-content-center text-center" style="padding-top:45%;">
                <h1 class="whitecolor font-weight-bold">¡AGENDA TU DEMO!</h1>
                <h3 class="whitecolor font-weight-bold" style="font-size:1em;">Y VIVE UNA EXPERIENCIA CULINARIA ÚNICA</h3>
                <a href="#demostracion" class="btn btn-light">AGENDAR DEMOSTRACIÓN!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6 text-center" id="demostracion" style="padding:15px;">
          <h1 class="demotitle b"><b>¡Conoce la TM6!</b></h1>
          <h3><b>AGENDA TU CITA DE DEMOSTRACIÓN</b></h3>
            <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre" required>
            <br>
            <input type="email" class="form-control" name="correo" id="correo" value="" placeholder="Correo" required>
            <br>
            <input type="text" class="form-control" name="telefono" id="telefono" value="" placeholder="Teléfono" required>
            <br>
            <center>
              <button type="button" name="button" class="btn btn-success" onclick="enviardemo();">Enviar</button>
            </center>
        </div>
        <div class="col-6 circles" style="background-image:url('img/circles.png');">
        </div>
      </div>

    <!-- quinto apartado -->
    <div class="row justify-content-center">
      <div class="col-12" style="padding:0 !important;">
        <img src="{{asset('img/contacto.png')}}" style="width:100%;" alt="">
      </div>
    </div>

    <!-- foter -->
    <div class="row justify-content-center greenbar">
      <div class="col-6"style="padding:15px !important;">
        <a href="#" class="whitecolor">Políticas de privacidad</a>
        <br>
        <a href="#" class="whitecolor">Términos y condiciones</a>
        <br>
        <a href="#" class="whitecolor">Ayuda</a>
        <br>
        <a href="#" class="whitecolor">Mapa de sitio</a>
      </div>
      <div class="col-6 text-right"style="padding:0 !important;">
        <a href="https://www.facebook.com/cucharadasdesabor/" target="_blank"><i class="fab fa-facebook-square" style="color:#ffff;font-size:3em;padding:15px;"></i></a>
        <a href="https://www.instagram.com/cucharadas_de_sabor/?hl=es-la" target="_blank"><i class="fab fa-instagram" style="color:#ffff;font-size:3em;padding:15px;"></i></a>
      </div>
    </div>
</div>
@endsection

<script type="text/javascript">
function enviardemo(){
  var nombre = $('#nombre').val();
  var correo = $('#correo').val();
  var telefono = $('#telefono').val();
  $.ajax({
    url: "enviardemo/",
    method: "get",
    dataType: "JSON",
    data: { nombre:nombre,correo:correo,telefono:telefono},
    success: function (response) {
      swal(response.estatus,response.mensaje,response.icon)
    },error: function (jqXHR, textStatus, errorThrown){
      alert('Algo salio mal, volver a intetar.');
    }
  });
}
</script>
