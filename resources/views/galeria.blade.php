@extends('front.layouts.plantilla', ['titulo' => 'Explorate'])
@section('estilos')
<link rel="stylesheet" type="text/css" href="{{asset('/css/jquery.gridder.min.css')}}">
@endsection
@section('container')

<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/camara.jpg) bottom;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Galería
        </h1>
        <h4 class="text-white" >

        </h4>
       </div>
    </div>
  </div>
</section>
    <!-- End banner Area -->
      <!-- Start portfolio-area Area -->
      <!-- Grid row -->
<!-- Grid column -->
<!-- Grid row -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1>Inauguración</h1>
            </div>
        </div>
    </div>
    <div class="section-top-border">
            <div class="row gallery-item">
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/2.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/20.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/20.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/3.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/3.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/inaguracion/4.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/4.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/inaguracion/5.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/5.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/6.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/6.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/7.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/7.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/8.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/8.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/9.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/9.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/10.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/10.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/11.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/11.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/inaguracion/12.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/12.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/inaguracion/13.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/13.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/14.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/14.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/15.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/15.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/inaguracion/16.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/inaguracion/16.jpg')}});"></div></a>
      </div>

    </div>
  </div>
</section>
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1>Evento de Octubre</h1>
            </div>
        </div>
    </div>
    <div class="section-top-border">
            <div class="row gallery-item">
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/1.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/1.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/2.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/3.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/3.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/eventorosa/4.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/4.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/eventorosa/5.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/5.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/6.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/6.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/7.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/7.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/8.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/8.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/9.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/9.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/10.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/10.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/11.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/11.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/eventorosa/12.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/12.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/eventorosa/13.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/13.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/14.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/14.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/15.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/15.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/16.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/16.jpg')}});"></div></a>
      </div>

    </div>
  </div>
</section>

<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1>Actividades</h1>
            </div>
        </div>
    </div>
    <div class="section-top-border">
            <div class="row gallery-item">
      <div class="col-md-4">
        <a href="{{asset('img/platica/1.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/platica/1.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/platica/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/platica/2.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/platica/3.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/platica/3.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/Programas/bolsa.jpeg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/Programas/bolsa.jpeg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/Programas/desayuno.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/Programas/desayuno.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/Programas/entrega1.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/Programas/entrega1.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/Programas/pelucas.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/Programas/pelucas.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/Programas/visita.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/Programas/visita.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/Programas/taller.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/Programas/taller.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/carrera/1.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/carrera/1.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/carrera/2.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/carrera/2.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/carrera/3.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/carrera/3.jpg')}});"></div></a>
      </div>
      <div class="col-md-6">
        <a href="{{asset('img/carrera/4.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/carrera/4.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/14.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/14.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/15.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/15.jpg')}});"></div></a>
      </div>
      <div class="col-md-4">
        <a href="{{asset('img/eventorosa/16.jpg')}}" class="img-gal"><div class="single-gallery-image" style="background: url({{asset('img/eventorosa/16.jpg')}});"></div></a>
      </div>

    </div>
  </div>
</section>
@endsection
