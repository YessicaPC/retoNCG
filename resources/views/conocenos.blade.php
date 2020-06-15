@extends('front.layouts.plantilla', ['titulo' => 'Conocenos'])
@section('estilos')

@endsection
@section('container')
<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/Sombrillas.jpg) bottom;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Conócenos
        </h1>
        <h4 class="text-white" >
          Reto Region Casas Grandes
        </h4>
       </div>
    </div>
  </div>
</section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-5 col-md-5 home-about-left">
            <img class="img-fluid" src="{{ asset('img/a.jpg') }}" width="400px" height="650">
          </div>

          <div class="col-lg-6 col-md-4 home-about-right">

            <br>
            <h1 class="text-uppercase">Conócenos</h1>
            <div class="centrado">
            <p class="text-justify">
            Sabes ahora que no ha sido en vano tu esfuerzo, tu valor, tu sueño estamos aquí con el empeño,
            el coraje y el amor que tú nos transmites.
            El camino tú lo trazaste, nuestra meta ahora es llegar hasta el fin.
            Por ti, por nosotros, por todas.
            Es solo un sueño por un mismo Reto: ¡VIVIR!
            <p>Fundadora Reto México: Cecilia Vildósola de Sepúlveda</p>

                </p>
                  </div>
          </div>
          <br>
          <div class="centrado">
<br>
          <p>
              Cada semana, cientos de mujeres mexicanas reciben un diagnóstico de cáncer de mama y/o cérvico uterino y se enfrentan a una situación para la cual nada de sus vidas podría haber preparado adecuadamente.
            </p>
            <p>
              Por lo tanto somos una asociación que brinda apoyo emocional y económico para esas mujeres que comienzan un nuevo reto para salir adelante.
            </p>
          </div>
        </div>
        <h4 class="pt-30">Antecedentes de la Organización</h4>
        <br>
        <p>
          Grupo Reto surge  por la iniciativa de la  Sra. Cecilia Vildozola  de Sepuveda en el 1983 en la Cd de México dos años más tarde  en 1985 se establece
          legalmente como asociación civil y donataria autorizada, dicha organización de funda con el objetivo de dar apoyo a mujeres con que  padecen cáncer de mama.
          Esta agrupación se conformó  en su mayoría  por voluntarias que han sobrevivido a la enfermedad, es por esto que es una organización con calidad humana y amplia sensibilidad del tema; todas las voluntarias
          además han recibido capacitación sobre el padecimiento, síntomas y tratamientos lo cual  hace que la Información brindada a los pacientes o en las placas educativas sean de gran utilidad para todos.
        </p>
        <p>
          En el año de 2013 un grupo de mujeres conformado por la Sra Lolita Lara, Adriana Soto y Maru Baca, después de haber vivido el proceso del
          Cáncer se comienzan a reunir y buscan más mujeres, que como ellas vivieran la misma situación y logran el apoyo para en 2014 crear formalmente Grupo de Recuperación
          Total Reto Región Casas Grandes, A.C., la cual es una asociación civil constituida para dar atención a las mujeres de Nuevo Casas Grandes Chihuahua y las regiones circunvecinas.
          Esta asociación es conformada con la misma ideología de la asociación inicial ubicada en la ciudad de México, es decir que está integrada en su gran mayoría por mujeres sobrevivientes de cáncer y dedicada a la atención de mujeres que padecen cáncer de mama y cervicouterino, ofreciéndoles a las pacientes la atención para que recuperen la salud física y emocional través de brindarles el apoyo con varios programas, entre los cuales se encuentran el de ayuda con gastos de viaje a las mujeres que acuden a la Cd De Chihuahua a sus tratamientos. Para la recuperación de la salud física se les apoya con: medicamento, estudios de diagnóstico,
          donación de agujas para limpieza de catéter y bolsas de recuperación otro es el de la salud emocional donde se les ayuda con: pelucas turbantes, prótesis mamaria y sesiones de apoyo y por último los programas de procuración de fondos y de prevención y detección oportuna de la enfermedad.
        </p>

        <!-- <div class="row skillbar-wraps">
          <div class="col-lg-6 skill-left">
            <div class="single-skill">
              <p>
                After Effects 85%
              </p>
              <div class="skill" data-width="85"></div>
            </div>
            <div class="single-skill">
              <p>
                Photoshop 90%
              </p>
              <div class="skill" data-width="90"></div>
            </div>
            <div class="single-skill">
              <p>
                Illustrator 70%
              </p>
              <div class="skill" data-width="70"></div>
            </div>
          </div>
          <div class="col-lg-6 skill-right">
            <div class="single-skill">
              <p>
                Sublime 95%
              </p>
              <div class="skill" data-width="95"></div>
            </div>
            <div class="single-skill">
              <p>
                Sketch 85%
              </p>
              <div class="skill" data-width="85"></div>
            </div>

          </div>
        </div> -->
      </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start timeline Area -->
    <section class="timeline pb-120">
          <div class="text-center">
              <div class="menu-content pb-70">
                  <div class="title text-center">
                      <h1 class="mb-10">Historia</h1>
                      <h4>Como inicio la fundacion de Reto Región Casas Grandes</h4>
                  </div>
              </div>
          </div>
      <ul>
        <li>
          <div class="content">
            <h4>
              <time>Fue constituida legalmente</time>
            </h4>
            <p><b>Fecha: </b>1 de Octubre del 2014</p>
          </div>
        </li>
        <li>
          <div class="content">
            <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt="">
            <h4>
              <time>Reto México</time>
            </h4>
            <p>Es aval para constitución como asociación civil</p>
          </div>
        </li>
        <li>
          <div class="content">
            <h4>
              <time>Reto Chihuahua</time>
            </h4>
            <p>Otorga diversos apoyos para la formación.</p>
          </div>
        </li>
      </ul>
      <div class="margen">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-5 col-md-6 home-about-right">
            <h6>Mesa directiva</h6>
            <h1 class="text-uppercase">Conformada por:</h1>
            <p><b>Presidencia:</b> Lic. María Eugenia Baca Carrillo</p>
            <p><b>Secretaria:</b> Gloria Castillo Martínez</p>
            <p><b>Tesorera:</b> Lic. Lizeth Adriana Soto Carmona</p>

          </div>
          <div class="col-lg-6 col-md-6 home-about-left">
            <img class="img-fluid" src="{{ asset('img/Mesa.jpeg')}}" width="500">
          </div>
  </div>
    </section>
    <br><br><br>
  <h1 style="text-align:center;"><strong>Grupos Reto en México</strong></h1><br>
  <h3 style="text-align:center;">Existen Grupos RETO en 28 ciudades de la República</h3><br><br>
  <div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">

                  <p>Acapulco, Gro.</p>
                  <p>Casas Grandes, Chih.</p>
                  <p>Celaya Gto.</p>
                  <p>Chihuahua, Chih.</p>
                  <p>Coahuila, Coah.</p>
                  <p>Ensenada, B.C.</p>
                  <p>Fresnillo, Zac.</p>
                  <p>Guanajuato, Gto.</p>
                  <p>Guadalajara, Jal.</p>


              </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">

          <p>Hermosillo, Son.</p>
          <p>Jalapa, Ver</p>
          <p>La Paz, BC</p>
          <p>León, Gto.</p>
          <p>Los Mochis, Sin.</p>
          <p>Matehuala, SLP</p>
          <p>Mérida, Yuc.</p>
          <p>Morelos</p>
          <p>Oaxaca, Oax.</p>
          <p>Pachuca, Hgo.</p>


       </div>
       <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">

         <p>Puebla, Pue.</p>
         <p>Nuevo Laredo, Tamps.</p>
         <p>Querétaro, Qro.</p>
         <p>San Juan del Río, Qro.</p>
         <p>San Luis Potosí, SLP</p>
         <p>Villahermosa, Tab,</p>
         <p>Tapachula, Chis</p>
         <p>Tecamachalco, Pue.</p>
         <p>Tingüindín, Mich.</p>


      </div>
            </div>
        </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
            <div class="single-footer-widget">
                <h4>Síguenos</h4>
                <p>Redes sociales</p>
                <div class="footer-social d-flex align-items-center">
                    <a href="https://www.facebook.com/retorcg"><i class="fa fa-facebook"></i></a>
                    <br>
                    <p>Reto México</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="https://www.gruporeto.org/"><i class="fa fa-facebook"></i></a>

                </div>
            </div>
        </div>
    </div>
    <!-- End timeline Area -->


@endsection
    <!-- Start testimonial Area -->
