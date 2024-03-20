@extends('layouts.index')
@section('content')
<!-- content starts
================================================== -->
<section id="content" class="clearfix">
    <div class="container">
        <!--features starts-->
        <div class="row">
            <!--<div class="span12"> <h1>FAIM <span class="color">(FIDI Accredited International Mover) </span>  </h1> </div>-->

            <!--feature list starts-->
            <ul class="features-big">
                <!--feature one starts-->
                <li>
                    <div class="row">
                        <div class="span8"><img src="img/preview/almacen-imagen.jpg" width="620" height="319" /></div>
                        <div class="span4" style="padding-left: 1%; margin-top: 1%;">
                            <h3 class="heading-icon clearfix">{{__('Almacenes')}}</h3>
                            <p>{{__('Contamos con 1 almacen, de 2000m, los cuales resguardan la carga en tránsito o durante el proceso de trámites de salida del país.')}}</p>
                            <p>{{__('Prestamos servicio a nuestros clientes para almacenajes temporales.')}}</p>
                        </div>
                    </div>
                </li>
                <!--feature one ends-->
            </ul>
            <!--feature list ends-->
        </div>
        <!--features ends-->
        <div class="row">
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDZuq8xIpTq-tsq-O7rR_pAN_UEbfAwAVo"></script>
            <div style="overflow: hidden; height: 400px; width: 100%;">
                <div id="gmap_canvas" style="height: 400px; width: 100%;"></div>
                <style>
                    #gmap_canvas img {
                        max-width: none !important;
                        background: none !important;
                    }
                </style>
            </div>
            <a href="https://addmap.net/">how to embed google maps</a>
            <script type="text/javascript" src="https://embedmaps.com/google-maps-authorization/script.js?id=bf5a23b3d511c668cac182f2ed5bab398a0d73ad"></script>
            <script type="text/javascript">
                function init_map() {
                    var myOptions = { zoom: 16, center: new google.maps.LatLng(10.463003970825174, -66.80824441252184), mapTypeId: google.maps.MapTypeId.ROADMAP };
                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                    marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(10.463003970825174, -66.80824441252184) });
                    infowindow = new google.maps.InfoWindow({ content: "<strong>Mudanzas Internacionales Global, Caracas, Distrito Capital</strong><br>Prolongación Calle Las Tinajas; Edf. Global, El Llanito <br> Caracas<br>" });
                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, "load", init_map);
            </script>
        </div>
    </div>
</section>
<!-- content ends
================================================== -->
@endsection