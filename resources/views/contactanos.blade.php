@extends('front.layouts.plantilla', ['titulo' => 'Contactanos'])
@section('estilos')

@endsection
@section('container')
<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/conocenos.jpg) bottom;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Contáctanos
        </h1>
        <h4 class="text-white" >
          Una vez superé el cáncer de mama, no tenía miedo de nada más.-Melissa Etheridge.
        </h4>
       </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
  <div class="container">
    <div class="row">
      <div class="map-wrap" style="width:100%; height: 445px;" id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.0978306748766!2d-107.95773538546922!3d30.37657978176271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dcab57862cceb5%3A0xab8adebb8ac9d91d!2sCalle+Revolucion+408%2C+Esperanza%2C+Nuevo+Casas+Grandes%2C+Chih.!5e0!3m2!1ses!2smx!4v1557793705602!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
       <div class="col-lg-4 d-flex flex-column address-wrap">
        <div class="single-contact-address d-flex flex-row">
          <div class="icon">
            <span class="lnr lnr-home"></span>
          </div>
          <div class="contact-details">
            <h5>Casas Grandes Chihuahua</h5>
            <p>
                Calle Revolución #408-D
              </p>
          </div>
        </div>
        <div class="single-contact-address d-flex flex-row">
          <div class="icon">
            <span class="lnr lnr-phone-handset"></span>
          </div>
          <div class="contact-details">
            <h5>636-116-31-92</h5>
            <p>Horario de 9:00am a 3:00 pm</p>
          </div>
        </div>
        <div class="single-contact-address d-flex flex-row">
          <div class="icon">
            <span class="lnr lnr-envelope"></span>
          </div>
          <div class="contact-details">
            <h5>gruporetocg@hotmail.com</h5>
            <p>Envíanos tus preguntas o comentarios</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
          <div class="row">
            <div class="col-lg-6 form-group">
              <input name="name" placeholder="Introduzca su nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

              <input name="email" placeholder="Introduzca la dirección de correo electrónico" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

              <input name="subject" placeholder="Ingrese asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
            </div>
            <div class="col-lg-6 form-group">
              <textarea class="common-textarea form-control" name="message" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
            </div>
            <div class="col-lg-12">
              <div class="alert-msg" style="text-align: left;"></div>
              <button class="genric-btn primary" style="float: right;">Enviar mensaje</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
