@extends('layouts.app')

@section('content')
<div class="container" style="max-width:100% !important;">


  <!-- INICIO -->
  <div id="inicio" class="row" style="padding-bottom:130px;">
    <div  id="carrousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carrousel" data-slide-to="0" class="active"></li>
        <li data-target="#carrousel" data-slide-to="1"></li>
        <li data-target="#carrousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('img/carousel1.png')}}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('img/carousel2.png')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('img/carousel3.png')}}" alt="Third slide">
        </div>
      </div>
    </div>
  </div>


  <!-- smartkitchen -->
  <h1 id="smartkitchen" class="greencolor text-center" style="padding-bottom:20px;padding-top:15px;"><b>SMART KITCHEN</b></h1>
  <div class="row"  style="min-height:600px;">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <iframe width="100%" height="70%" src="https://www.youtube.com/embed/cRPROBaew70" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
      <h3 style="padding-top:20%;" class="graycolor">Conoce en la comodidad de tu hogar la cocina más pequeña e inteligente del mundo. Reserva tu experiencia culinaria.</h3>
    </div>
  </div>


  <!-- thermomix -->
  <div class="row justify-content-center" id="thermomix" style="height:650px;background-image:URL('/img/banner3.png');background-size:contain;background-position:center;background-repeat:no-repeat;">
  </div>

  <!-- EXP -->
  <div class="row justify-content-center" id="demostracion" onclick="openmodal();" style="cursor:pointer;height:650px;background-image:URL('/img/banner4.png');background-size:contain;background-position:center;background-repeat:no-repeat;">
  </div>

  <div href="#demostracion" class="row justify-content-center" id="compra" style="height:650px;background-image:URL('/img/banner5.png');background-size:contain;background-position:left;background-repeat:no-repeat;">
  </div>

  <div class="row" id="promociones">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-top:10px;">
      <h1 class="greencolor">NUESTRAS PROMOCIONES</h1>
      <h5 class="graycolor">CONSULTA TODOS LOS MÉTODOS DE PAGO</h5>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-4 col-xl-4" style="height:400px;">
      <div  id="promos" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#promos" data-slide-to="0" class="active"></li>
          <li data-target="#promos" data-slide-to="1" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/promo.jpg')}}" alt="First slide" style="height:100%;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/promo2.png')}}" alt="Third slide" style="height:100%;">
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
      <br>
      <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success" id="openmodal">AGENDA TU DEMOSTRACIÓN</button>
    </div>
  </div>



  <div href="#demostracion" class="row justify-content-center" onclick="openmodal();" id="testimonios" style="cursor:pointer;height:650px;background-image:URL('/img/banner6.png');background-size:contain;;background-position:right;background-repeat:no-repeat;">
  </div>

  <div id="contactanos">

    <div class="d-none d-lg-block d-xl-block">
      <div class="row justify-content-center" style="height:650px;background-image:URL('/img/banner8.png');background-size:contain;background-position:center;background-repeat:no-repeat;">
        <div class="col-6">
          <div class="col-12">
            <h3 class="graycolor"><b>CONTÁCTANOS</b></h3>
            <p><i class="fa fa-envelope greencolor"></i> <span class="graycolor">demo@cocinainteligente.com.mx</span></p>
            <p><i class="fa fa-phone greencolor"></i> <span class="graycolor">Tel. 55 32 80 11 19</span></p>
            <p class="graycolor">Suscríbete a nuestro Newsletter para conocer nuestras próximas promociones.</p>
            <input type="email" class="form-control" name="correo" id="correo-newsletter" value="" placeholder="Correo" required>
            <br>
            <center>
              <button type="button" name="button" class="btn btn-success btn-block" onclick="newsletter();">SUSCRÍBETE</button>
            </center>
            <br>
            <div class="d-none d-lg-block d-xl-block">
              <a href="https://www.facebook.com/cucharadasdesabor/" target="_blank"><i class="fab fa-facebook-square greencolor" style="font-size:3em;padding:15px;"></i></a>
              <a href="https://www.instagram.com/cucharadas_de_sabor/?hl=es-la" target="_blank"><i class="fab fa-instagram greencolor" style="font-size:3em;padding:15px;"></i></a>
            </div>
            <div class="row">
              <div class="col-6 d-none d-lg-block d-xl-block">
                <p class="graycolor"><b>ACERCA DE</b></p>
                <ul style="list-style:none;" class="graycolor">
                  <li>Smart Kitchen</li>
                  <li>TM6</li>
                  <li>Demostración</li>
                  <li>Compra</li>
                  <li>Promociones</li>
                  <li>Testimonios</li>
                  <li>Contáctanos</li>
                </ul>
              </div>
              <div class="col-6 d-none d-lg-block d-xl-block">
                <p class="graycolor"><b>POLÍTICAS</b></p>
                <ul style="list-style:none;">
                  <li><a href="/politicas" class="graycolor">Políticas de Privacidad</a></li>
                  <li><a href="/terminos" class="graycolor">Términos y Condiciones</a></li>
                  <li><a href="/mapa" class="graycolor">Mapa de sitio</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 text-center">
        </div>
      </div>
    </div>

    <div class="d-sm-none d-sm-block d-md-block d-lg-none d-xl-none">
      <div class="row justify-content-center" style="height:650px;background-image:URL('/img/banner8.png');background-size:cover;background-position:center;background-repeat:no-repeat;">
        <div class="col-6">
          <div class="col-12">
            <h3 class="graycolor"><b>CONTÁCTANOS</b></h3>
            <p><i class="fa fa-envelope greencolor"></i> <span class="graycolor">demo@cocinainteligente.com.mx</span></p>
            <p><i class="fa fa-phone greencolor"></i> <span class="graycolor">Tel. 55 32 80 11 19</span></p>
            <p class="graycolor">Suscríbete a nuestro Newsletter para conocer nuestras próximas promociones.</p>
            <input type="email" class="form-control" name="correo" id="correo-newsletter" value="" placeholder="Correo" required>
            <br>
            <center>
              <button type="button" name="button" class="btn btn-success btn-block" onclick="newsletter();">SUSCRÍBETE</button>
            </center>
            <br>
            <div class="d-none">
              <a href="https://www.facebook.com/cucharadasdesabor/" target="_blank"><i class="fab fa-facebook-square greencolor" style="font-size:3em;padding:15px;"></i></a>
              <a href="https://www.instagram.com/cucharadas_de_sabor/?hl=es-la" target="_blank"><i class="fab fa-instagram greencolor" style="font-size:3em;padding:15px;"></i></a>
            </div>
            <div class="row">
              <div class="col-12 d-sm-none">
                <p class="graycolor"><b>POLÍTICAS</b></p>
                <ul style="list-style:none;">
                  <li><a href="/politicas" class="graycolor">Políticas de Privacidad</a></li>
                  <li><a href="/terminos" class="graycolor">Términos y Condiciones</a></li>
                  <li><a href="/mapa" class="graycolor">Mapa de sitio</a></li>
                </ul>
              </div>
              <div class="col-6 d-none d-sm-block">
                <p class="graycolor"><b>ACERCA DE</b></p>
                <ul style="list-style:none;" class="graycolor">
                  <li>Smart Kitchen</li>
                  <li>TM6</li>
                  <li>Demostración</li>
                  <li>Compra</li>
                  <li>Promociones</li>
                  <li>Testimonios</li>
                  <li>Contáctanos</li>
                </ul>
              </div>
              <div class="col-6 d-none d-sm-block">
                <p class="graycolor"><b>POLÍTICAS</b></p>
                <ul style="list-style:none;">
                  <li><a href="/politicas" class="graycolor">Políticas de Privacidad</a></li>
                  <li><a href="/terminos" class="graycolor">Términos y Condiciones</a></li>
                  <li><a href="/mapa" class="graycolor">Mapa de sitio</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 text-center">
        </div>
      </div>
    </div>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGENDA TU DEMOSTRACIÓN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre" required>
          <br>
          <input type="email" class="form-control" name="correo" id="correo" value="" placeholder="Correo" required>
          <br>
          <input type="text" class="form-control" name="telefono" id="telefono" value="" placeholder="Teléfono" required>
          <br>
          He leído y acepto los <a href="/terminos" target="_blank" class="greencolor">términos y condiciones</a> <input type="checkbox" name="term" id="term" value="">
          <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Cerrar</button>
          <button type="button" class="btn btn-success" onclick="enviardemo();">Envíar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- foter -->
  <div class="row justify-content-center greenbar">
    <div class="col-12 text-center">
      <h4 class="whitecolor">Copyright © 2020 Todos los derechos reservados por Orbital Digital</h4>
    </div>
  </div>
  <a href="https://api.whatsapp.com/send?phone=525532801119&text=Quisiera más información sobre el TM6" class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
  </a>
</div>
@endsection

<script type="text/javascript">
function enviardemo(){
  var nombre = $('#nombre').val();
  var correo = $('#correo').val();
  var telefono = $('#telefono').val();
  if ($('#term').is(':checked')) {
    $.ajax({
      url: "enviardemo/",
      method: "get",
      dataType: "JSON",
      data: { nombre:nombre,correo:correo,telefono:telefono},
      success: function (response) {
        swal(response.estatus,response.mensaje,response.icon);
      },error: function (jqXHR, textStatus, errorThrown){
        alert('Algo salio mal, volver a intetar.');
      },complete: function(){
      }
    });
  }else {
    swal('Términos y condiciones','Para poder continuar por favor acepta los términos y condiciones.','error')
  }

}


function newsletter(){
  var correo = $('#correo-newsletter').val();
  $.ajax({
    url: "newsletter/",
    method: "get",
    dataType: "JSON",
    data: { correo:correo},
    success: function (response) {
      swal(response.estatus,response.mensaje,response.icon)
    },error: function (jqXHR, textStatus, errorThrown){
      alert('Algo salio mal, volver a intetar.');
    }
  });
}

function openmodal(){
  $('#openmodal').click();
}
</script>
