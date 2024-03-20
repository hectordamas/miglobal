@extends('layouts.index')
@section('content')
        <!-- content starts
================================================== -->
<section id="content" class="clearfix">
    <!--slider-bg starts-->
    <div id="slider-bg">
        <div class="container">
            <div class="row content-top">
                <!--slides starts-->
                <div class="span12">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <!--slide one starts-->
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2>
                                            {{ __('Mudanzas Internacionales') }} <br />
                                            {{ __('Global') }}
                                        </h2>
                                        <p>{{ __('Fundada en el año de 1968, Mudanzas Internacionales Global es considerada como la empresa de mudanzas con mayor trayectoria en el mercado venezolano.')}}</p>
                                    </div>
                                    <div class="span6"><img src="img/preview/tab-slide1.png" alt="slide" /></div>
                                </div>
                            </li>
                            <!--slide one ends-->

                            <!--slide two starts-->
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2>{{ __('Servicio de origen')}} <br> {{ __('En Venezuela')}}</h2>
                                        <p>{{ __('Nuestro equipo multicultural de expertos está siempre listo para atenderlo y comprender sus necesidades y ofrecerle la mejor solución. Contáctenos, hablamos español, inglés, alemán, francés e italiano.')}}</p>
                                    </div>
                                    <div class="span6"><img src="img/preview/tab-slide2.png" alt="slide" /></div>
                                </div>
                            </li>
                            <!--slide two ends-->

                            <!--slide three starts-->
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2>FIDI FAIM</h2>
                                        <p>{{ __('Nuestros estándares de calidad están avalados por la prestigiosa certificación FAIM (FIDI Accredited International Mover) asociación líder en compañías de mudanzas a nivel mundial.') }}</p>
                                    </div>
                                    <div class="span6"><img src="img/preview/tab-slide3.png" alt="slide" /></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--slider-bg ends-->

    <div class="container">
        <!--features starts-->
        <div class="row">
            <div class="span12">
                <h1>
                    {{ __('LLEVAR') }} <span class="color">{{ __('TODA UNA VIDA')}}</span> {{ __('A CUALQUIER') }} <br />
                    {{ __('PARTE DEL MUNDO')}}
                </h1>
                <ul class="list-3col text-center">
                    <li>
                        <div class="icon-bg"><img src="img/icons/icon1-iphone.png" width="120" height="120" alt="icon" /></div>
                        <h2>{{ __('Líder en el Mercado') }}</h2>
                        {{ __('Somos la primera empresa de mudanzas en Venezuela que obtiene el prestigioso certificado FIDI FAIM posicionándonos como una de las compañías de mudanzas más importantes del mundo.') }}
                    </li>
                    <li>
                        <div class="icon-bg"><img src="img/icons/icon1-leaf.png" width="120" height="120" alt="icon" /></div>
                        <h2>{{__('Alta Calidad de Servicios')}}</h2>
                        {{__('Como miembro de las más prestigiosas Asociaciones de Compañías de Mudanzas Internacionales aseguramos la más alta calidad en la coordinación de su mudanza, sea local, nacional o internacional.')}}
                    </li>
                    <li>
                        <div class="icon-bg"><img src="img/icons/icon1-create.png" width="120" height="120" alt="icon" /></div>
                        <h2>{{__('Atención Inmediata')}}</h2>
                        {{__('Contamos con los mejores asesores y ejecutivos de ventas para asegurar el eficiente traslado de sus pertenencias. Ellos están dispuestos a ayudarlo y a contestar todas sus preguntas.')}}
                    </li>
                </ul>
            </div>
        </div>
        <!--features ends-->



        <!--spacer here-->
        <div class="spacer-40px"></div>

        <!--row starts-->
        <div class="row">
            <!--column one starts-->
            <div class="span6">
                <h4 class="heading-icon clearfix"><img src="img/icons/heading-icon-support.png" width="40" height="40" alt="icon" class="icon-small-bg" /> {{__('Nuestros Servicios')}}</h4>
                <p>{{__('Como miembro activo de la red de agentes internacionales de mudanzas, nos esforzamos en superar lo altos niveles de requerimientos exigidos por las representaciones diplomáticas.')}}</p>
                <div class="spacer-18px"></div>
                <!--two column list (nested columns) starts-->
                <div class="row">
                    <ul class="span3 list-checkmark">
                        <li>{{ __('Servicio de origen y destino') }}</li>
                        <li>{{ __('Estándares internacionales de calidad')}}</li>
                        <li>{{ __('Evaluación preliminar (Survey)')}}</li>
                    </ul>
                    <ul class="span3 list-checkmark">
                      <li>{{ __('Servicio de atención en 24 horas') }}</li>
                      <li>{{ __('Asesoría personalizada') }}</li>
                      <li>{{ __('Seguimiento del traslado') }}</li>
                  </ul>
                </div>
                <!--two column list starts-->

                <a href="{{ url('servicios') }}">{{ __('Leer más') }}...</a>
            </div>
            <!--column one ends-->

            <!--column two starts-->
            <div class="span6"><img src="img/preview/img-window.png" alt="image" /></div>
            <!--column two ends-->
        </div>
        <!--row ends-->

        <!--spacer here-->
        <div class="spacer-30px"></div>

        <!--box starts-->
        <!-- <div class="row">
<div class="span12">
<div class="dark-box">
  <h1><span class="color">Get started</span> today with a free trial!</h1>
  <ul class="list-separator">
    <li>14 days free trial <span class="separator">|</span></li>
    <li> No credit card required <span class="separator">|</span> </li>
    <li> <span class="color">$10/mo</span> after end of trial period</li>
  </ul>
  <a href="#" class="mybtn">Download</a> </div>
</div>
</div>-->
        <!--box ends-->
    </div>
</section>
<!-- content ends
================================================== -->
@endsection