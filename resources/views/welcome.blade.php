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
        <p class=".d-none .d-md-block .d-lg-block">Elaborar extraordinarias recetas con el TM6 ahora es más fácil y rápido que nunca.
          Thermomix ® TM6 es un verdadero ayudante de cocina gracias a sus funcionalidades como la cocina a Alta Temperatura, Al Vacío, Cocción Lenta y Fermentación.
          Con el acceso a Cookidoo ® desde la pantalla del Thermomix ® podrás disfrutar de más de 40.000 recetas internacionales que te permitirán crear increíbles platos caseros con el mínimo esfuerzo.
          No pierdas más tiempo y cocina las más exquisitas recetas con el Thermomix ® TM6.
          Agenda tu cita de demostración con un profesional.
        </p>
        <a href="#demostracion" class="btn btn-success">Agendar demostración!</a>
      </div>
    </div>
    <br>
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
        <div class="imageseccion1" style="background-image:url('/img/banner1.png');"></div>
        <h3>Tiempo</h3>
        <span class="b">Cocinar con Thermomix ® TM6  te dejará más tiempo para que disfrutes de lo que más te gusta.</span>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
        <div class="imageseccion1" style="background-image:url('/img/banner1.png');"></div>
        <h3>Innovación</h3>
        <span class="b">Thermomix ® TM6 cuenta con las mejores funciones y técnicas para hacer de tus recetas una gran experiencia culinaria.</span>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
        <div class="imageseccion1" style="background-image:url('/img/banner1.png');"></div>
        <h3>Creatividad</h3>
        <span class="b">Echa a volar tu imaginación con las más de 30 funciones de Thermomix ®, como al vacío, cocción lenta o alta temperatura y más.</span>
      </div>
    </div>

    <!-- tercer apartado -->
    <div class="row justify-content-center">
      <div class="col-12" style="padding:0 !important;">
        <img src="{{asset('img/compra.png')}}" style="width:100%;" alt="">
      </div>
      <div class="col-12 text-center" style="padding:15px;">
        <a href="#demostracion" class="btn btn-success">Compra ahora!</a>
      </div>
    </div>

    <!-- cuarto apartado -->
    <div class="row justify-content-center">
      <div class="col-12" style="padding:0 !important;">
        <img src="{{asset('img/demostracion.png')}}" style="width:100%;" alt="">
      </div>
      <br>
      <div class="col-6 text-center" id="demostracion" style="padding:15px;">
        <h1 class="demotitle b">¡Conoce la Thermomix ® TM6!</h1>
        <h3>AGENDA TU CITA DE DEMOSTRACIÓN</h3>
          <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre" required>
          <br>
          <input type="email" class="form-control" name="correo" value="" placeholder="Correo" required>
          <br>
          <input type="text" class="form-control" name="telefono" value="" placeholder="Teléfono" required>
      </div>
      <div class="col-6">

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
      <div class="col-6"style="padding:0 !important;">

      </div>
    </div>
</div>
@endsection
