@extends('layouts.index')
@section('content')
<!-- header-btm starts
================================================== -->
<section id="header-btm" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="span12">
                <!--<h4 class="heading-icon clearfix"> <img src="img/icons/heading-icon-user.png" width="40" height="40" alt="icon" class="icon-small-bg"> Nosotros</h4>-->
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
                <h1><span class="color">{{__('RESPONSABILIDAD')}}</span> {{__('CORPORATIVA')}}</h1>

                <img src="img/preview/img-principios.png" width="1000" height="451" />

                <p style="margin-top: 2%;">
                    {{__('La integridad es fundamental para Mudanzas Internacionales Global C.A. y, en conjunto con nuestros valores de Liderazgo, Pasión, Responsabilidad, Colaboración, Diversidad y Calidad, fundamentamos nuestras prácticas de negocios en sólidos principios éticos, a fin de garantizar a cada una de nuestras partes interesadas; trabajadores, clientes, proveedores y agentes, un ambiente justo, protegido y confiable.')}}
                </p>
                <p>
                    {{__('Las operaciones, actividades y cultura en Mudanzas Internacionales Global, C.A. se fundamentan en lo establecido en nuestro Manual Anticorrupción, Política de Privacidad y Código de Conducta, así como en el firme compromiso de Calidad y Mejora Continua adherido a las regulaciones FIDI. Puede usted consultar todos estos documentos en detalle a través de los siguientes links:')}}
                </p>

                @if(app()->getLocale() == 'es')
                <ul style="text-indent: 1em; list-style-type: circle;">
                    <li>
                        <a href="docs/FIDI_ABC_2015_ESP_firmado.pdf" target="_blank">Carta Estatutaria Antisoborno y Anticorrupción de FIDI</a>
                    </li>

                    <li>
                        <a href="docs/FIDI_ATC_2017_ENG_signed.pdf" target="_blank">Carta Antimonopolio de FIDI (en inglés)</a>
                    </li>
                    <li>
                        <a href="docs/RCEC-DG-001_CODIGO_CONDUCTA_V5.pdf" target="_blank">Código de Conducta</a>
                    </li>
                    <li>
                        <a href="docs/GCAL-FR-005_Aviso de privacidad.pdf" target="_blank">Aviso de Privacidad</a>
                    </li>
                    <li>
                        <a href="docs/GCAL-PO-001_Política de Calidad.pdf" target="_blank">Política de Calidad</a>
                    </li>

                    <li>
                        <a href="docs/RCEC-PO-001_Política de Responsabilidad Social.pdf" target="_blank">Política de Responsabilidad Social</a>
                    </li>
                    <li>
                        <a href="docs/RCEC-PO-003_Política de Salud y Seguridad Laboral.pdf" target="_blank">Política de Salud y Seguridad Laboral</a>
                    </li>
                    <li>
                        <a href="docs/RCEC-PO-002_Política Ambiental.pdf" target="_blank">Política Ambiental</a>
                    </li>
                    <li>
                        <a href="docs/RIF.pdf" target="_blank">Registro de Información Fiscal (RIF)</a>
                    </li>

                    <li>
                        <a href="docs/RCEC-PG-01 PROGRAMA SOSTENIBILIDAD.pdf" target="_blank">Programa de Sostenibilidad </a>
                    </li>
                </ul>
                @else
                <ul style=" text-indent: 1em; list-style-type: circle;">

                    <li>
                         <a href="docs/FIDI_ABC_2015_ENG_signed.pdf" target="_blank">FIDI Anti-Bribery and Anti-Corruption Charter</a>
                     </li>
                    <li>
                         <a href="docs/FIDI_ATC_2017_ENG_signed.pdf" target="_blank">FIDI Anti-Trust Charter</a>
                     </li>
                    <li>
                         <a href="docs/RCEC-DG-001_CODE_CONDUCT_V5.pdf" target="_blank">Code of Conduct</a>
                     </li>
                    <li>
                         <a href="docs/GCAL-FR-005_Data Privacy Notice.pdf" target="_blank">Data Privacy Notice</a>
                     </li>
                     
                     <li>
                         <a href="docs/RCEC-PG-01 PROGRAMA SOSTENIBILIDAD.pdf" target="_blank">Sustainability Program</a>
                     </li>
                     
                </ul>
                @endif
            </div>
        </div>
        <!--features ends-->
    </div>
</section>
<!-- content ends
================================================== -->

@endsection