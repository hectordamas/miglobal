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
                <h1>FAIM <span class="color">(FIDI Accredited International Mover) </span></h1>
            </div>

            <!--feature list starts-->
            <ul class="features-big">
                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span6"><img src="img/preview/fidi-faim-imagen.jpg" width="630" height="500" /></div>
                        <div class="span6">
                            <p>{{__('Es una designación de Calidad, otorgada por FIDI, una de las asociaciones lideres de compañías de mudanzas a nivel mundial.')}}</p>
                            <p>
                                {{__('FIDI desarrolló un sistema basado en estándares de Calidad, para la industria de Mudanzas internacionales. Este involucra todos los aspectos de las actividades de la empresa, colaborando para que todo el personal pueda mantener y mejorar el excelente grado de calidad de servicios prestados exclusivamente para nuestros clientes.')}}
                            </p>
                            <p>{{__('Para poder mantener esta prestigiosa certificación, nuestra empresa es reauditada cada 3 años por la reconocida mundialmente Ernst & Young, Grupo de Consultores.')}}</p>
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

