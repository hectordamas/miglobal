@extends('layouts.index')
@section('content')
<!-- header-btm starts
================================================== -->
<section id="header-btm" class="clearfix">
    <div class="container">
      <div class="row">
        <div class="span12">
          <!--<h4 class="heading-icon clearfix"> <img src="img/icons/heading-icon-support.png" width="40" height="40" alt="icon" class="icon-small-bg">Servicios</h4>-->
        </div>
      </div>
    </div>
  </section>
  <!-- header-btm ends
  ================================================== --> 
<!-- content starts
================================================== -->
<section id="content" class="clearfix">
    <div class="container">
        <!--features starts-->
        <div class="row">
            <div class="span12">
                <h1>{{__('PRIMERA EMPRESA')}} <span class="color">{{ __('DE MUDANZAS')}}</span> <br> {{__('EN VENEZUELA')}}</h1>
                <p style="text-align: center; font-size: 22px; line-height: 30px;">{{__('Líderes de mudanzas en Venezuela desde 1988')}}</p>
                <img src="img/preview/img-nosotros.jpg" width="1000" height="451" />

                <p style="margin-top: 2%;">
                    {{ __('Somos la primera empresa de mudanzas en Venezuela que obtiene el prestigioso certificado')}} <a href="{{ url('fidi-faim') }}">FIDI FAIM </a>{{__(', en el año 2000. De esta forma nos posicionamos como la empresa líder del mercado, ubicándonos como una de las compañías de mudanzas más importantes del mundo.')}}
                </p>
                <p>
                    {{__('Como miembro activo de la red de agentes internacionales de mudanzas, nos esforzamos en superar los altos niveles de requerimientos exigidos por representaciones diplomáticas, compañías transnacionales e individuos de nivel y proyección global.')}}
                </p>

                <!--feature list starts-->
                <ul class="features-big">
                    <!--feature one starts-->
                    <li>
                        <div class="row" style="margin-top: 5%;">
                            <div class="span6">
                                <h2>{{__('Nuestra Misión')}}</h2>

                                <ol>
                                    <li>
                                        {{__('Liderar el mercado venezolano gracias a la formación del equipo más eficiente y profesional de expertos en mudanzas. Garantizar la calidad de nuestros servicios y cumplir con las expectativas de nuestros clientes.')}}
                                    </li>
                                    <li>{{__('Capacitar y estimular a nuestro personal para enfrentar retos, cambios y exigencias.')}}</li>
                                    <li>{{__('Ofrecer un ambiente de trabajo adecuado que estimule la interrelación y el trabajo en equipo.')}}</li>
                                    <li>
                                        {{__('Promover las acciones estratégicas asociados a los aspectos ambientales, sociales y de gobernanza para asegurar nuestra participación en los objetivos del desarrollo sostenible, promoviendo así un mundo más equitativo, y con igualdad de oportunidades para todos.')}}
                                    </li>
                                </ol>
                            </div>
                            <div class="span6">
                                <img src="img/preview/mision-imagen.jpg" width="460" height="300" />
                            </div>
                        </div>
                    </li>
                    <!--feature one ends-->

                    <!--feature two starts-->
                    <li>
                        <div class="row" style="margin-top: 4%;">
                            <div class="span6">

                                <img src="img/preview/vision-imagen.jpg" width="460" height="353" />
                            </div>

                            <div class="span6">
                                <h2>{{__('Nuestra Visión')}}</h2>
                                <ol>
                                    <li>{{__('Ser una compañía líder en el mercado venezolano gracias a los estándares de calidad establecidos de acuerdo a las expectativas del cliente.')}}</li>
                                    <li>{{__('Garantizar que nuestros empleados sean los mejores profesionales mudanceros a nivel mundial.')}}</li>
                                    <li>{{__('Trabajar en una atmósfera que conduzca al diálogo y a la cooperación entre los departamentos para lograr así un progreso consistente.')}}</li>
                                    <li>{{__('Promover una cultura de calidad con nuestros proveedores y establecer una conciencia ambiental y social en nuestra comunidad y partes interesadas.')}}</li>
                                </ol>
                            </div>
                        </div>
                    </li>
                    <!--feature two ends-->
                </ul>
                <!--feature list ends-->
            </div>
        </div>
        <!--features ends-->
    </div>
</section>
<!-- content ends
================================================== -->
@endsection