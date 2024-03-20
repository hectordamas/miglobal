<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="business portfolio site template" />
        <meta name="keywords" content="business, marketing, corporate, app, software, marketing" />
        <meta name="author" content="Tansh" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Global Mundanzas Internacionales</title>

        <!--/////////////INCLUIR EL MODAL//////////////-->
        <style media="screen">
            body {
                position: relative;
            }

            .contenedor-modal {
                background: rgba(0, 0, 0, 0.6);
                color: #fff;
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 100vw;
                transition: all 0.5s;
                cursor: pointer;
            }

            .contenedor-modal img {
                width: 30%;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
            }

            .cuerpo-modal {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: white;
                color: black;
            }

            .cerrar-modal + label {
                position: absolute;
                top: 1em;
                right: 1em;
                z-index: 100;
                color: #fff;
                font-weight: bold;
                font-size: 25px;
                cursor: pointer;
                width: 25px;
                height: 25px;
                line-height: 25px;
                text-align: center;
                border-radius: 50%;
                transition: all 0.5s;
            }
        </style>
        <!--/////////////INCLUIR EL MODAL//////////////-->

        <!--Fav and touch icons-->
        <link rel="shortcut icon" href="img/icons/favicon.ico" />
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png" />

        <!--google web font
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet" type="text/css" />
-->
        <!--style sheet-->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="css/bootstrap.css" />
        <link rel="stylesheet" media="screen" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" media="screen" href="css/style.css" />

        <!--jquery libraries / others are at the bottom-->
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script src="js/modernizr.js" type="text/javascript"></script>

        <!--elastislide carousel script starts-->
        <link rel="stylesheet" media="screen" href="css/elastislide.css" />
        <script type="text/javascript" src="js/jquery.elastislide.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#carousel").elastislide({
                    imageW: 300,
                    margin: 20,
                    border: 0,
                    easing: "easeInBack",
                });
            });
        </script>
        <!--elastislide carousel script ends-->

        <!--prettyphoto scripts starts-->
        <link rel="stylesheet" media="screen" href="css/prettyPhoto.css" />
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("a[data-rel]").each(function () {
                    $(this).attr("rel", $(this).data("rel"));
                });
                $("a[rel^='prettyPhoto[gallery1]']").prettyPhoto({
                    animation_speed: "fast",
                    slideshow: 5000,
                    autoplay_slideshow: false,
                    opacity: 0.8,
                    show_title: false,
                    theme: "pp_default" /* light_rounded / dark_rounded / light_square / dark_square / facebook */,
                    overlay_gallery: false,
                    social_tools: false,
                    changepicturecallback: function () {
                        var $pp = $(".pp_default");
                        if (parseInt($pp.css("left")) < 0) {
                            $pp.css("left", 0);
                        }
                    },
                });
            });
        </script>
        <!--prettyphoto scripts ends-->

        <!--flexslider scripts starts-->
        <link rel="stylesheet" media="screen" href="css/flexslider.css" />
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script type="text/javascript">
            // Slider with thumbnail
            $(document).ready(function () {
                if ($(window).width() < 959) {
                    $("#slider").flexslider({
                        directionNav: true,
                        controlNav: false,
                    });
                } else {
                    $("#thumb-slider").flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: true,
                        directionNav: false,
                        controlNav: false,
                        itemWidth: 180,
                        itemMargin: 0,
                        asNavFor: "#slider",
                    });
                    $("#slider").flexslider({
                        animation: "slide",
                        controlNav: false,
                        directionNav: false,
                        animationLoop: true,
                        slideshow: true,
                        sync: "#thumb-slider",
                    });
                }


                $('.contenedor-modal').on('click', function() {
                    $('.contenedor-modal').fadeOut();
                });
            });
        </script>
        <!--flexslider scripts ends-->
        @yield('script')
    </head>
    <body>
        <!-- header starts ================================================= -->
        <section id="header" class="clearfix">
            <div class="containertop">
                <!--icons flags -->

                <div class="row">
                    <div class="span12 clearfix">
                        <!-- flags-->

                        <p style="float: left; font-size: 12px; text-align: center;">
                            <img src="img/info.jpg" width="15" height="17" /> Av. La Estancia con Av. Ernesto Blohm, Centro Banaven (Cubo Negro), Torre C, piso 6, oficinas 61 y 62. Chuao. Caracas, 1060. Venezuela. Teléfono: 0212-213.99.00​
                            ​
                        </p>

                        <ul class="social clearfix">
                            <li style="margin-right: 10px;">
                                <a href="{{ url('locale/es') }}"><img src="img/icons/venezuela-flag.png" width="28" height="28" alt="icon" /></a>
                            </li>
                            <li>
                                <a href="{{ url('locale/en') }}"><img src="img/icons/usa-flag.png" width="28" height="28" alt="icon" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--icons flags ends-->

                <div class="row">
                    <!--logo starts-->
                    <div class="span3 logo" style="max-width: 380px;">
                        <a href="{{ url('/') }}"><img src="img/logo.png" alt="logo" /></a>
                    </div>
                    <!--logo ends-->

                    <div class="span9 clearfix" style="margin-top: 3%;">
                        <!--social starts-->
                        <!--<ul class="social clearfix">
                              <li><a href="#"><img src="img/icons/social-icon-linkedin.png" width="28" height="28" alt="icon"></a></li>
                              <li><a href="#"><img src="img/icons/social-icon-facebook.png" width="28" height="28" alt="icon"></a></li>
                              <li><a href="#"><img src="img/icons/social-icon-twitter.png" width="28" height="28" alt="icon"></a></li>
                            </ul>-->
                        <!--social ends-->

                        <!--menu starts-->
                        <div id="smoothmenu" class="ddsmoothmenu">
                            <ul>
                                <li><a href="{{ url('/') }}" @if(Request::is('/')) class="selected" @endif>{{__('Inicio')}}</a></li>
                                <li><a href="{{ url('/nosotros') }}" @if(Request::is('nosotros')) class="selected" @endif>{{__('Nosotros')}}</a></li>
                                <li><a href="{{ url('/afiliaciones') }}" @if(Request::is('afiliaciones')) class="selected" @endif>{{__('Afiliaciones')}}</a></li>
                                <li><a href="{{ url('/fidi-faim') }}" @if(Request::is('fidi-faim')) class="selected" @endif>FIDI FAIM</a></li>
                                <li><a href="{{ url('/servicios') }}" @if(Request::is('servicios')) class="selected" @endif>{{__('Servicios')}}</a></li>
                                <li><a href="{{ url('/contacto') }}" @if(Request::is('contacto')) class="selected" @endif>{{__('Contacto')}}</a></li>
                                <li><a href="{{ url('/almacenes') }}" @if(Request::is('almacenes')) class="selected" @endif>{{__('Almacenes')}}</a></li>
                                <li><a href="{{ url('/responsabilidad') }}" @if(Request::is('responsabilidad')) class="selected" @endif>{{__('Responsabilidad Corporativa')}}</a></li>
                            </ul>
                        </div>
                        <!--menu ends--> 
                    </div>
                </div>
            </div>
        </section>
        <!-- header ends ================================================== -->

        @yield('content')


        <!-- copyright starts ================================================= -->
        <section id="copyright" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <p>{{ date('Y') }} © Global All Rights Reserved | Powered by <a href="http://www.laovejanegra.com.ve/">LON</a></p>

                        <!--copyright menu starts-->
                        <ul class="copyright-menu">
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li><a href="{{ url('/nosotros') }}">Nosotros</a> </li>
                            <li><a href="{{ url('/afiliaciones') }}">Afiliaciones</a></li>
                            <li><a href="{{ url('/fidi-faim') }}">FIDI FAIM</a></li>
                            <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                            <li><a href="{{ url('/almacenes') }}">Almacenes</a></li>
                            <li><a href="{{ url('/responsabilidad') }}">Responsabilidad Corporativa</a></li>
                        </ul>
                        <!--copyright menu ends-->
                    </div>
                </div>
                <div class="row">
                    <div align="center">
                        Visitas
                        <br />
                        <!--<img src="http://www.e-zeeinternet.com/count.php?page=1120130&style=odometer&nbdigits=9" alt="Free Counters" border="0" />-->
                    </div>
                </div>
            </div>
        </section>
        <!-- copyright ends ================================================= -->

        @if(Request::is('/'))
            <!-- INICIO DE LA PUBLICIDAD EMERGENTE ================================================= -->
            <div class="contenedor-modal">
                <a href="#"><img src="publicidadglobal.png" width="20%" /></a>
            </div>
            <!--other jqueries required-->
        @endif

        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/ddsmoothmenu.js" type="text/javascript"></script>
        <script src="js/twitter.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
        @if(session()->has('message'))
        <script>
            var colorSuccess = '#28a745';
            Swal.fire({icon:'success', title:'', text: "{{session('message')}}", confirmButtonText: 'Aceptar', confirmButtonColor: colorSuccess})
        </script>
        @endif
    </body>
</html>
