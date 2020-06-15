@extends('front.layouts.plantilla', ['titulo' => 'Explorate'])
@section('estilos')
<link rel="stylesheet" type="text/css" href="{{asset('/css/jquery.gridder.min.css')}}">
@endsection
@section('container')
@section('container')
<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/globos.jpg) bottom;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Programas
        </h1>
        <h4 class="text-white" >

        </h4>
       </div>
    </div>
  </div>
</section>
<section class="home-about-area pt-120">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/bolsa.jpeg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">ENTREGA DE BOLSAS DE RECUPERACIÓN:</h1>
        <p>
      Son para las pacientes que acaban de practicarles una mastectomía radical, se les obsequia una bolsa que contiene:
      su primera prótesis de tela suave para que no lastime su herida, un corazón acolchonado para poner debajo de su axila,
      una pelotita y una soguita para sus ejercicios del brazo.
      Esto les será de gran ayuda en su proceso de recuperación de la cirugía para extirpar el cáncer.
        </p>
       </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">VISITAS DOMICILIARIAS:</h1>
        <p>
      Nos encargamos de visitar a mujeres que recientemente son diagnosticadas con cáncer de seno o cervicouterino, así como a sus familiares para motivarlos a salir adelante.
      Les damos apoyo emocional para que comprendan que el cáncer no es una sentencia de muerte.
        </p>
       </div>
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/visita.jpg')}}" width="500">
      </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/entrega1.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">ENTREGA DE PROTESIS:</h1>
        <p>
       Es un evento que realizamos una vez al año, en el cual las mujeres que se realizaron mastectomía radical,
      reciben una prótesis externa de gel como apoyo para su recuperación física.
        </p>
       </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">DONACION DE PELUCAS:</h1>
        <p>
     Se entregan pelucas oncológicas a las mujeres que las solicitan, ya que no todas las usan,
    también se les apoya con turbantes o sombreros.
    Las pelucas oncológicas las pedimos a través de una solicitud y un donativo a la fábrica de pelucas de Aguascalientes.
        </p>
       </div>
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/pelucas.jpg')}}" width="500">
      </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/visita.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">APOYOS CON GASOLINA: </h1>
        <p>
     A las pacientes oncológicas que
     tienen sus citas médicas fuera de la Ciudad y tienen en que trasladarse les apoyamos con tanques de gasolina.
        </p>
       </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">BOLETOS DE CAMIÓN: </h1>
        <p>
    A las pacientes oncológicas que tienen sus citas médicas fuera de la Ciudad no
    tienen en que trasladarse les apoyamos con boletos de camión para ella y su acompañante.
        </p>
       </div>
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/autobus.jpg')}}" width="500">
      </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/medicina.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">MEDICAMENTOS: </h1>
        <p>
     Los medicamentos de cáncer son muy costosos y hay pacientes que requieren de algún medicamento.
        </p>
       </div>
  </div>
  <br><br>
  <div class="row align-items-center justify-content-between">
    <div class="col-lg-5 col-md-6 home-about-right">
      <h1 class="text-uppercase">AGUJAS PARA LAVAR EL CATETER:</h1>
      <p>
   Las pacientes oncológicas utilizan para sus quimioterapias un catéter y cuando terminar sus tratamientos lo deben tener por 5 años más, así que las apoyamos con las agujas especiales para que cada mes puedan estar lavando su catéter.
   Cabe hacer mención que aquí en NCG se gestionó a través de Reto para que se realice el lavado de catéter en el Hospital Integral.
      </p>
     </div>

    <div class="col-lg-6 col-md-6 home-about-left">
      <img class="img-fluid" src="{{ asset('img/apoyo.jpg')}}" width="500">
    </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/platica.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">PLÁTICAS: </h1>
        <p>
     Reto Región Casas Grandes se enfoca mucho en la prevención del cáncer,
     por este motivo acudimos a Universidades, Preparatorias, Empresas, Maquiladoras, Instituciones, etc.
     Para dar pláticas sobre prevención de cáncer de mama o cervicouterino.
        </p>
       </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">TALLERES:</h1>
        <p>
     Cada mes realizamos algún taller sobre diversos temas: tanatología, nutrición, autoestima, maquillaje, etc.
     para las pacientes y sus familiares que están enfrentando momentos muy difíciles.
        </p>
       </div>
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/taller.jpg')}}" width="500">
      </div>
    </div>
    <br>
    <div class="about-content ">
        <h1>PROGRAMA DE RECAUDACIÓN DE FONDOS</h1>
    </div>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/Programas/desayuno.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">DESAYUNO ANUAL DE RETO:</h1>
        <p>
     Es un desayuno que se realiza una vez al año, siempre en el mes de Octubre.
     Es el evento más importante que tenemos en cuanto a recaudación de fondos. Lo comenzamos a planear
     desde meses antes porque buscamos patrocinadores (para la rifa de regalos)
     la variedad (música, algún show, etc.) y posteriormente nos damos a la tarea de vender los boletos.
        </p>
       </div>
      </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">RIFAS: </h1>
        <p>
     También ocasionalmente tenemos esta opción en el año de organizar alguna rifa para solventar gastos.
        </p>
       </div>
      <div class="col-lg-6 col-md-6 home-about-left">
          <img class="img-fluid" src="{{ asset('img/inaguracion/25.jpg')}}" width="500">
      </div>
          </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/carrera/3.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">CARRERAS:</h1>
        <p>
    Hemos participado en carreras en conjunto con alguna institución y lo que se obtiene son recursos para Reto.
        </p>
       </div>
    </div>
    <br><br>
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5 col-md-6 home-about-right">
        <h1 class="text-uppercase">CAMINATA ANUAL:</h1>
        <p>
    Así mismo cada año tenemos la caminata del mes de Octubre para conmemorar el día del cáncer de mama
        </p>
       </div>
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/listonhumano.jpg')}}" width="500">
      </div>
    </div>
    <br>
    </section>


@endsection
