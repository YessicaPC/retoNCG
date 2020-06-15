@extends('front.layouts.plantilla', ['titulo' => 'Bienvenido'])
@section('estilos')

@endsection
@section('container')
<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/testimonio1.jpg) bottom;" >
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Testimonios
        </h1>
        <h4 class="text-white" >
          Una vez superé el cáncer de mama, no tenía miedo de nada más.-Melissa Etheridge.
        </h4>
       </div>
    </div>
  </div>
</section>

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
            <p class="text-justify"  style= "height: 180px; overflow: hidden;">
            {{$t->contenido}}
            </p>
          </div>
          @endforeach

        </div>
      </div>
    </section>
@endsection
