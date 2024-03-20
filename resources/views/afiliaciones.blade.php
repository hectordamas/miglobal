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
                <h1>{{__('MUDANZAS')}} <span class="color">{{__('INTERNACIONALES')}}</span> {{__('GLOBAL')}}</h1>
                <p style="text-align: center; font-size: 22px; line-height: 30px;">{{__('Somos miembro de las más prestigiosas Asociaciones de Compañías de Mudanzas Internacionales del mundo')}}</p>
            </div>
            <!--divider here-->
            <div class="spacer-40px"></div>

            <!--feature list starts-->
            <ul class="features-big">
                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span7">
                            <h3>{{__('OMNI - The Overseas Moving Network International')}}</h3>
                            <p>
                                {{__('The Overseas Moving Network International, representa a la elite de la industria de Mudanzas internacionales; 260 compañías en 70 países.')}} <br />
                                <br />
                                {{__('Esta familia internacional, se dedica a la obtención de la excelencia en todas sus actividades, comprometiéndose a proporcionar el mejor servicio de mudanza disponible para sus clientes, a través de la cooperación más cercana posible entre sus miembros. OMNI se basa en el principio de la cooperación agente-a-agente, asegurando que los especialistas locales manejen todas las mudanzas de OMNI en origen y en destino. Las compañías operan con los más altos estándares posibles y emplean tecnología de avanzada para asegurar la más alta calidad en sus servicios.')}}
                            </p>
                        </div>
                        <div class="span5">
                            <a href="http://www.omnimoving.com/" target="_blank"> <img style="margin-top: 2%;" src="img/preview/logo-omni-slider.jpg" width="380" height="143" /></a>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->

                <!--divider here-->
                <div class="spacer-40px"></div>

                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span7">
                            <h3>{{__('FIDI - Fédération Internationale des Déménageurs Internationaux')}}</h3>
                            <p>
                                {{__('La misión de FIDI es fomentar el avance en términos de calidad, integridad y cooperación mutua a las compañías de mudanzas internacionales afiliadas. Adicionalmente lleva a cabo programas de estudio, que ayudan a promover la competitividad en el mercado de mudanzas.')}}
                            </p>
                        </div>
                        <div class="span5">
                            <a href="http://www.fidi.org/" target="_blank"><img src="img/preview/logo-fidi-slider.jpg" width="380" height="143" /> </a>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->

                <!--divider here-->
                <div class="spacer-40px"></div>

                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span7">
                            <h3>LACMA - Latin American & Caribbean International Movers Association</h3>
                            <p>
                                {{__('LACMA es la asociación que incluye a 260 de las mejores compañías de mudanzas del mundo, principalmente de América Latina y el Caribe. Debido a su prestigio, generan el 90% de las importaciones y exportaciones que se llevan a cabo en Latinoamérica.')}}
                            </p>
                        </div>
                        <div class="span5">
                            <a href="https://lacmassoc.org/" target="_blank"><img src="img/preview/logo-lacma-slider.jpg" width="380" height="143" /> </a>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->

                <!--divider here-->
                <div class="spacer-40px"></div>
                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span7">
                            <h3>IAM - International Association of Movers</h3>
                            <p>{{__('La International Association of Movers es la mayor unión mundial de compañías de auditoria, transporte, mudanzas y embarques.')}}</p>
                        </div>
                        <div class="span5">
                            <a href="http://www.iamovers.org/" target="_blank"><img src="img/preview/logo-hhgfaa-slider.jpg" width="380" height="143" /> </a>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->

                <!--divider here-->
                <div class="spacer-40px"></div>

                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span7">
                            <h3>PAIMA - Pan American International Movers Association</h3>
                            <p>{{__('El Pan American International Movers Association es un grupo establecido de compañías internacionales de Mudanzas, que representan su mutuo interés en la interacción con autoridades locales.')}}</p>
                        </div>
                        <div class="span5">
                            <a href="http://www.paimamovers.com/" target="_blank"><img src="img/preview/logo-paima-slider.jpg" width="380" height="143" /> </a>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->

                <!--divider here-->
                <div class="spacer-40px"></div>

                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span7">
                            <h3>IATA - International Air Transportation Association</h3>
                            <p>
                                {{__('IATA fue fundada en el año 1919. Representa a la industria de la aviación y simplifica los procesos de viaje y carga, al agrupar aproximadamente 280 aerolíneas, incluyendo a las más importantes. Los vuelos de estas aerolíneas representan más del 95 % del tráfico aéreo internacional, tanto en vuelos para pasajeros como de carga general.')}}
                            </p>
                        </div>
                        <div class="span5">
                            <a href="http://www.iata.org/Pages/default.aspx" target="_blank"><img src="img/preview/logo-iata-slider.jpg" width="380" height="143" /> </a>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->
            </ul>
            <!--feature list ends-->
        </div>
    </div>
    <!--features ends-->

    <!--divider here-->
    <div class="spacer-40px"></div>

    <!--box starts-->
    <!--<div class="row">
      <div class="span12">
        <div class="dark-box">
          <h1>You are just <span class="color">3</span> steps away</h1>
          <ul class="list-inline">
            <li>1. Install the app</li>
            <li>2. Sync it</li>
            <li>3. Use right away</li>
          </ul>
        </div>
      </div>
    </div>-->
    <!--box ends-->
</section>
<!-- content ends
================================================== -->
@endsection