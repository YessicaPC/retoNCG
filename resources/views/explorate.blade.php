@extends('front.layouts.plantilla', ['titulo' => 'Explorate'])
@section('estilos')
<link rel="stylesheet" type="text/css" href="{{asset('/css/jquery.gridder.min.css')}}">
@endsection
@section('container')
@section('container')
<section class="banner-area relative blog-home-banner" id="home" style="background: url(img/explorate1.jpg) bottom;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content blog-header-content col-lg-12">
        <h1 class="text-white">
          Explórate
        </h1>
        <h4 class="text-white" >
          Una vez superé el cáncer de mama, no tenía miedo de nada más.-Melissa Etheridge.
        </h4>
       </div>
    </div>
  </div>
</section>
<section class="home-about-area pt-120">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 home-about-left">
        <img class="img-fluid" src="{{ asset('img/cuidate.jpg')}}" width="500">
      </div>
      <div class="col-lg-5 col-md-6 home-about-right">
        <h6>Explórate</h6>
        <h1 class="text-uppercase">Cuidate</h1>
        <p>
      Cada semana cientos de mujeres mexicanas reciben un diagnóstico de cáncer de mama
      y se enfrentan a una situación para la cual nadie y nada de sus vidas las podría haber preparado adecuadamente.
        </p>
       </div>
    </div>
  </div>
</section>
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
                <h1 class="mb-10">Pasos</h1>
                <p>Para Autoexplorarse</p>
            </div>
        </div>
    </div>


      <img src="{{ asset('img/explorate/auto.jpg')}}" class="img-thumbnail" alt="Cinque Terre">




    </div>

</section>
<section class="faq-area pb-120">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Preguntas Frecuentes</h1>
              <p>Enfrentarse al diagnóstico de cáncer de mama supone intentar resolver una infinidad de dudas que surgen del desconocimiento y del miedo que provoca esta enfermedad.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
          <dl class="accordion">

            <dt>
              <a href="">Mi cáncer ¿se hereda?</a>
            </dt>
            <dd>
              A pesar de ser el principal temor, sólo en un pequeño porcentaje – entre el 5 y el 10% de los casos – se hereda un cierto riesgo de susceptibilidad. El oncólogo recoge los antecedentes familiares cuando realiza la historia clínica y, si existe sospecha, informa a la paciente de los pasos a seguir.            </dd>
            <dt>
              <a href="">¿Me van a hacer una mastectomía?</a>
            </dt>
            <dd>
              La mastectomía no siempre es necesaria y, en caso de serlo, hoy contamos con cuatro tipos, en función de las características de cada tumor. El diagnóstico precoz también ha contribuido a que los tratamientos sean cada vez menos invasivos y las cirugías menos agresivas.            </dd>
            <dt>
              <a href="">¿Cuál es la alimentación más adecuada durante el tratamiento?</a>
            </dt>
            <dd>
              Beber agua abundamente a lo largo del día es fundamental en la dieta de la paciente de cáncer de mama, ya que los distintos tratamientos pueden provocar deshidratación. El resto de la dieta no debe ser especialmente distinta a la anterior al tratamiento mientras formen parte de una alimentación sana y equilibrada, rica en frutas, verduras y pescado. Los alimentos más recomendables son: legumbres, verduras cocidas, cereales, frutas, productos lácteos y fibra. Se debe evitar el tabaco y el alcohol, así como la sal y las grasas.
            <dt>
              <a href="">¿Puedo hacer ejercicio físico?</a>
            </dt>
            <dd>
              Los tratamientos provocan efectos adversos a nivel muscular y osteoarticular. Para combatirlos, es recomendable el ejercicio físico aeróbico y continuado, así como acudir a un fisioterapeuta especializado en el ámbito de la oncología.
              Es importante recordar que se ha demostrado el efecto protector frente a la enfermedad del ejercicio físico moderado, equivalente a andar media hora a paso rápido al menos 5 días por semana.
            <dt>
              <a href="">¿Cuál es la alimentación más adecuada durante el tratamiento?</a>
            </dt>
            <dd>
              Beber agua abundamente a lo largo del día es fundamental en la dieta de la paciente de cáncer de mama, ya que los distintos tratamientos pueden provocar deshidratación. El resto de la dieta no debe ser especialmente distinta a la anterior al tratamiento mientras formen parte de una alimentación sana y equilibrada, rica en frutas, verduras y pescado. Los alimentos más recomendables son: legumbres, verduras cocidas, cereales, frutas, productos lácteos y fibra. Se debe evitar el tabaco y el alcohol, así como la sal y las grasas.
            <dt>
              <a href="">Efectos secundarios de la quimioterapia</a>
            </dt>
            <dd>
              Los efectos secundarios a corto plazo de la quimioterapia (a menudo tratables), pueden incluir náuseas y vómitos, pérdida de apetito, pérdida del cabello y úlceras en la boca. Debido a que la quimioterapia puede dañar las células hematopoyéticas de la médula ósea, es posible que los pacientes presenten recuentos bajos de células sanguíneas. Esto puede ocasionar:

<br><br>-Aumento del riesgo de infecciones (debido a la escasez de glóbulos blancos).
<br><br>-Sangrado o hematomas después de pequeñas cortaduras o lesiones menores (por la disminución de las plaquetas).
<br><br>-Anemia (a causa de un recuento bajo de glóbulos rojos), lo cual puede causar cansancio, falta de respiración, piel pálida, entre otros síntomas.

            <dt>
              <a href="">Efectos secundarios de la radiación</a>
            </dt>
            <dd>
            El tratamiento con radiación es similar a tomarse radiografías, y no causa dolor. Los efectos secundarios más comunes son la irritación de la piel en el área tratada y el cansancio. Dicho cansancio es una sensación de agotamiento extremo y poca energía que no se alivia con descanso. A menudo perdura por muchas semanas después de finalizar el tratamiento. Otros efectos secundarios también podrían presentarse, dependiendo de la parte del cuerpo que está siendo tratada.
            <dt>
              <a href="">¿Cuándo debo plantear la reconstrucción?</a>
            </dt>
            <dd>
              La reconstrucción mamaria no es un capricho estético, ni un peligro innecesario: una de las finalidades que tiene es restaurar la imagen corporal de la mujer, lo que ayuda a enfrentarse de forma más positiva a la enfermedad.  Para la mayoría de pacientes, la reconstrucción implica dos o tres procesos quirúrgicos, aunque en ocasiones es posible hacer la reconstrucción inmediata, en el mismo acto de la mastectomía.            </dd>
            <dt>
              <a href="">¿Se me va a caer el pelo?</a>
            </dt>
            <dd>
              La mayor parte de las quimioterapias empleadas en cáncer de mama producen alopecia, por el efecto nocivo que tienen sobre el folículo piloso. Suele ocurrir en torno a las tres semanas del inicio del tratamiento y puede afectar a cejas, pestañas, vello axilar y púbico y, en algunos casos, a las uñas.
            </dd>
            <dt>
              <a href="">¿Podré teñirme el pelo cuando vuelva a salir?</a>
            </dt>
            <dd>
              El pelo vuelve a crecer entre dos y tres meses después de haber finalizado el tratamiento. La mayoría de las veces el pelo es más denso, rizado y canoso que antes del tratamiento, y se puede teñir, aunque en los primeros meses se debe evitar el uso de tintes que contengan amoníaco.
            </dd>
            <dt>
              <a href="">¿Se puede curar el cáncer?</a>
            </dt>
            <dd>
              Muchos cánceres pueden ser curados, aunque no todos y no siempre.
              <br><br>
              La curación significa que el tratamiento ha hecho que el cáncer desaparezca, y no hay posibilidad que regrese. Es poco común que un médico pueda asegurar que el cáncer nunca regresará. En la mayoría de los casos, saber esto toma tiempo, y cuanto más tiempo esté una persona libre de cáncer, mejor la probabilidad de que el cáncer no regresará.
            </dd>
          </div>
        </div>
      </div>
    </section>

@endsection
