@extends('front.layouts.plantilla', ['titulo' => 'Bienvenido'])
@section('estilos')

@endsection
@section('container')
<section class="banner-area">
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-left">
        <h6>Bienvenidos</h6>
        <h1>Reto Región Casas Grandes, A.C</h1>
        <p>
          Fundación para mujeres con Cáncer de mama y/o Cérvico uterino
        </p>
        <a href="https://paypal.me/retoregioncg?locale.x=es_XC" class="primary-btn text-uppercase">Donaciones</a>
      </div>
      <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
        <img src="{{ asset('img/corazon.png') }}" width="550px" height="650px">
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area pt-120">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/mesaD.jpg')}}" width="500px">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
         <h1 class="text-uppercase">¿Qué es reto?</h1>
<div class="center">
  <p class="text-justify">
  Somos una asociación civil formada por un grupo de mujeres sobrevivientes de cáncer,
  debidamente constituida con la finalidad de ayudar a mujeres diagnosticadas con cáncer de mama y/o
  cáncer cérvido uterino, de igual modo de concientizar
  sobre la importancia de la prevención para una detección oportuna y en una etapa inicial.
  </p>
</div>

        <a href="conocenos" class="primary-btn text-uppercase">Conócenos más</a>
      </div>
    </div>
  </div>
</section>
<!-- End home-about Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
  <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content  col-lg-7">

              </div>
          </div>

      <section id="val" class="text-center">
      <button class="tablink" onclick="openPage('Mis', this, '#FFD3EE')"id="defaultOpen">Misión</button>
      <button class="tablink" onclick="openPage('Vis', this, '#FFD3EE')">Visión</button>
      <button class="tablink" onclick="openPage('Obj', this, '#FFD3EE')">Objetivo</button>

      <div id="Mis" class="tabcontent">
        <h3>Misión</h3>
        <p class="text-justify">Fortalecer la salud física y emocional de las mujeres que padecen de Cáncer de mama y/o
          Cérvico uterino de Casas Grandes y la región para contribuir a mejorar su calidad de vida.</p>
      </div>

      <div id="Vis" class="tabcontent">
        <h3>Visión</h3>
        <p class="text-justify">Consolidar a Grupo Reto Región Casas grandes como la institución de asistencia más importante en el apoyo
         integral de mujeres diagnosticadas con cáncer de mama y/o cérvico uterino.</p>
      </div>

      <div id="Obj" class="tabcontent">
        <h3>Objetivo</h3>
        <p class="text-justify">Grupo Reto tiene como objetivo fundamental orientar y difundir los métodos
          para la prevención y detección oportuna del cáncer de mama.</p>
      </div>
      </div>

      </section>

      <script type="text/javascript">
      function openPage(pageName, elmnt, color) {
      // Hide all elements with class="tabcontent" by default */
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Remove the background color of all tablinks/buttons
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }

      // Show the specific tab content
      document.getElementById(pageName).style.display = "block";

      // Add the specific color to the button used to open the tab content
      elmnt.style.backgroundColor = color;
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>

<!-- end fact Area -->

<!-- Start portfolio-area Area -->
      <section class="portfolio-area section-gap" id="portfolio">
          <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                    <h1 class="mb-10"><a href="galeria">Galería</a></h1>
                      <h4>Momentos que marcaron nuestras vidas.</h4>
                  </div>
              </div>
          </div>
          <div class="section-top-border">
                  <div class="row gallery-item">
            <div class="col-md-4">
              <a href="{{asset('img/inaguracion/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/2.jpg')}});"></div></a>
            </div>
            <div class="col-md-4">
              <a href="{{asset('img/eventorosa/1.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/1.jpg')}});"></div></a>
            </div>
            <div class="col-md-4">
              <a href="{{asset('img/platica/1.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/platica/1.jpg')}});"></div></a>
            </div>
            <div class="col-md-6">
              <a href="{{asset('img/inaguracion/5.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/5.jpg')}});"></div></a>
            </div>
            <div class="col-md-6">
              <a href="{{asset('img/eventorosa/3.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/3.jpg')}});"></div></a>
            </div>
            <div class="col-md-4">
              <a href="{{asset('img/platica/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/platica/2.jpg')}});"></div></a>
            </div>
            <div class="col-md-4">
              <a href="{{asset('img/eventorosa/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/2.jpg')}});"></div></a>
            </div>
            <div class="col-md-4">
              <a href="{{asset('img/carrera/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/carrera/2.jpg')}});"></div></a>
            </div>
          </div>
          <a href="galeria">ver más</a>
        </div>
      </section>

<!-- Start testimonial Area -->
<section class="recent-blog-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 pb-30 header-text">
        <h1 class="mb-10"><a href="testimonios">Testimonios</a></h1>
            </div>
    </div>
    <div class="row">
      @foreach($testimonios as $t)
      <div class="single-recent-blog col-lg-4 col-md-4">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="{{asset('/img/testimonios/'.$t->imagen)}}" width="80px" height="80px">

        </div>
        <div class="bottom d-flex justify-content-between align-items-center flex-wrap">

          <div class="meta">

          </div>
        </div>
        <a href="testimonios/{{$t->id}}">
          <h4>
            {{$t->titulo}}
          </h4>
        </a>
        <p class="text-justify" style= "height: 180px; overflow: hidden;">
        {{$t->contenido}}
        </p>
      </div>
      @endforeach

    </div>
  </div>
</section>
  <!-- End testimonial Area -->

<!-- Start price Area -->

<!-- End price Area -->

<!-- Start recent-blog Area -->
<section class="recent-blog-area section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 pb-30 header-text">
        <h1 class="mb-10"><a href="noticias">Noticias</a></h1>
            </div>
    </div>
    <div class="row">
      @foreach($noticias as $n)
      <div class="single-recent-blog col-lg-4 col-md-4">
        <div class="thumb">
          <img class="f-img img-fluid mx-auto" src="{{asset('/img/noticias/'.$n->imagen)}}" width="80px" height="80px">

        </div>
        <div class="bottom d-flex justify-content-between align-items-center flex-wrap">

          <div class="meta">

          </div>
        </div>
        <a href="noticias/{{$t->id}}">
          <h4>
            {{$n->nombre}}
          </h4>
        </a>
        <p class="text-justify"  style= "height: 180px; overflow: hidden;">
        {{$n->contenido}}
        </p>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- end recent-blog Area -->

  <!-- Start brands Area -->
  <!-- <section class="brands-area">
      <div class="container">
          <div class="brand-wrap">
              <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                  </div>
                  <div class="col single-brand">
                      <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                  </div>
              </div>
          </div>
      </div>
  </section> -->
@endsection
