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
                <h1><span class="color">{{__('TODA UNA VIDA ')}}</span> {{__('A CUALQUIER LUGAR DEL MUNDO')}}</h1>
                <!--<p style="text-align:center; font-size:22px; line-height:30PX;">Más de 46 años siendo líderes de mudanzas en Venezuela</p>-->

                <!--<img style="margin-bottom:2%; margin-top:2%;" src="img/preview/img-nosotros.jpg" width="1000" height="300">-->

                <!--feature list starts-->
                <ul class="features-big">
                    <!--feature one starts-->
                    <li>
                        <div class="row" style="margin-top: 3%;">
                            <div class="span6">
                                <h2>{{__('Servicio de Origen')}}</h2>
                                <p>
                                    {{__('Nuestro servicio de origen consiste en evaluar, embalar y transportar sus pertenencias desde su ubicación actual en Venezuela hasta su destino final, bien sea en una mudanza local, o en un traslado a nivel nacional o internacional.')}}
                                </p>

                                <p>{{__('Una vez establecido el contacto con nuestros ejecutivos, un miembro de nuestro equipo de asesores lo visitará en su residencia y le hará recomendaciones con su mudanza.')}}</p>

                                <p>{{__('El asesor realizará una evaluación de sus bienes y luego le ofrecerá una estimación del costo, basada en sus requerimientos y necesidades.')}}</p>

                                <p>{{__('Contamos con más de 50 embaladores altamente entrenados y experimentados. Su eficiente desempeño es la garantía de un servicio incomparable.')}}</p>

                                <p>{{__('Utilizamos material de embalaje de la mejor calidad para cumplir con los estándares y normas internacionales de empaque.')}}</p>

                                <p>
                                    {{__('Haremos seguimiento de sus pertenencias durante todo el trayecto de la mudanza, ya sea con destino local, nacional o internacional. Así aseguramos que sus posesiones más preciadas permanezcan seguras aunque el viaje hacia su destino sea difícil.')}}
                                </p>
                            </div>
                            <div class="span6">
                                <!--<ul class="list-icon clearfix visible-desktop">
                    <li> <img src="img/icons/icon1-iphone.png" width="120" height="120" alt="icon" class="icon-bg"> <br/>
                      iphone </li>
                    <li class="plus"><img src="img/plus.png" alt="image" width="14" height="15"></li>
                    <li> <img src="img/icons/icon1-desktop.png" width="120" height="120" alt="icon" class="icon-bg"> <br/>
                      Desktop </li>
                    <li class="plus"><img src="img/plus.png" alt="image" width="14" height="15"></li>
                    <li> <img src="img/icons/icon1-ipad.png" width="120" height="120" alt="icon" class="icon-bg"> <br/>
                      ipad / Tab </li>
                  </ul>-->
                                <img src="img/preview/servicio-imagen-01.jpg" width="430" height="457" />
                            </div>
                        </div>
                    </li>
                    <!--feature one ends-->

                    <!--feature two starts-->
                    <li>
                        <div class="row" style="margin-top: 4%;">
                            <div class="span6">
                                <!--<ul class="list-icon clearfix visible-desktop">
                    <li> <img src="img/icons/icon1-android.png" width="120" height="120" alt="icon" class="icon-bg"> <br/>
                      <em class="color">for</em> Android </li>
                    <li class="plus"><img src="img/plus.png" alt="image" width="14" height="15"></li>
                    <li> <img src="img/icons/icon1-iphone.png" width="120" height="120" alt="icon" class="icon-bg"> <br/>
                      <em class="color">for</em> iphone </li>
                    <li class="plus"><img src="img/plus.png" alt="image" width="14" height="15"></li>
                    <li> <img src="img/icons/icon1-blackberry.png" width="120" height="120" alt="icon" class="icon-bg"> <br/>
                      <em class="color">for</em> Blackberry </li>
                  </ul>-->
                                <img src="img/preview/servicio-imagen-02.jpg" width="430" height="611" />
                            </div>

                            <div class="span6">
                                <h2>{{__('Servicios de Destino')}}</h2>
                                <p>
                                  {{ __('Mudanzas Internacionales Global presta el mejor servicio en el traslado de su pertenencias desde cualquier país del mundo, incluyendo el proceso de aduana y el servicio con entrega y desembalaje en su residencia en Venezuela. Nuestro departamento de importación coordinará su mudanza en todas sus etapas.')}}                                
                                </p>
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
<!-- content ends ================================================== -->
@endsection