@extends('front.layouts.plantilla', ['titulo' => 'Bienvenido'])
@section('estilos')

@endsection
@section('container')
<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/luchaa.jpg)" >
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Noticias
        </h1>
        <h4 class="text-white" >
          Una vez superé el cáncer de mama, no tenía miedo de nada más.-Melissa Etheridge.
        </h4>
       </div>
    </div>
  </div>
</section>
    <!-- End banner Area -->

    <!-- Start top-category-widget Area -->
    <!-- <section class="top-category-widget-area pt-90 pb-90 ">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-cat-widget">
              <div class="content relative">
                <div class="overlay overlay-bg"></div>
                  <a href="#" target="_blank">
                    <div class="thumb">
                     <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget1.jpg" alt="">
                    </div>
                    <div class="content-details">
                      <h4 class="content-title mx-auto text-uppercase">Social life</h4>
                      <span></span>
                      <p>Enjoy your social life together</p>
                    </div>
                  </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-cat-widget">
              <div class="content relative">
                <div class="overlay overlay-bg"></div>
                  <a href="#" target="_blank">
                    <div class="thumb">
                     <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget2.jpg" alt="">
                    </div>
                    <div class="content-details">
                      <h4 class="content-title mx-auto text-uppercase">Politics</h4>
                      <span></span>
                      <p>Be a part of politics</p>
                    </div>
                  </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-cat-widget">
              <div class="content relative">
                <div class="overlay overlay-bg"></div>
                  <a href="#" target="_blank">
                    <div class="thumb">
                     <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget3.jpg" alt="">
                    </div>
                    <div class="content-details">
                      <h4 class="content-title mx-auto text-uppercase">Food</h4>
                      <span></span>
                      <p>Let the food be finished</p>
                    </div>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End top-category-widget Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 posts-list">
            <div class="single-post row">
              <div class="col-lg-3  col-md-3 meta-details">

                <div class="user-details row">
                  <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Noticia registrada:</a> </span></p>
                  <p class="date col-lg-14 col-md-12 col-8"><a href="#">{{$vernoticias{0}->created_at}}</a> <span class="lnr lnr-calendar-full"></span></p>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 ">
                <div class="feature-img">
                  <img class="img-fluid" src="{{asset('/img/noticias/'.$vernoticias{0}->imagen)}}" alt="">
                </div>
                <a class="posts-title" ><h3>{{$vernoticias{0}->nombre}}</h3></a>
                <p class="excert">
                  {{$vernoticias{0}->contenido}}
                </p>
               </div>
            </div>



    </section>
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
          <a href="/noticias/{{$n->id}}">
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
@endsection
