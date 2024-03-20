@extends('layouts.index')

@section('script')
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        // Inicializar la validación del formulario
        $("#contactform").validate();
    }); 
</script>
@endsection

@section('content')
<!-- content starts
================================================== -->
<section id="content" class="clearfix">
    <!--<iframe style="margin-bottom:3%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.1286258665514!2d-66.86569829999999!3d10.490525199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58fce5047e0f%3A0xf30a4cbbf47f4f74!2sTorre+Dozsa%2C+Av+Francisco+de+Miranda%2C+Caracas!5e0!3m2!1ses!2sve!4v1416089489454" width="100%" height="400" frameborder="0" style="border:0"></iframe>-->

    <!--<iframe style="margin-bottom:3%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.1286259614403!2d-66.86788698435623!3d10.490525192515895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58fce5047e0f%3A0xf30a4cbbf47f4f74!2sTorre+Dozsa%2C+Avenida+Francisco+de+Miranda%2C+Caracas%2C+Miranda!5e0!3m2!1ses!2sve!4v1478009239502"  width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
-->
    <iframe
        style="margin-bottom: 3%;"
        width="100%"
        height="480"
        src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Cubo%20Negro.%20Caracas+(Global%20Mudanzas%20Internacionales)&ie=UTF8&t=&z=16&iwloc=B&output=embed"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        allowfullscreen
    >
    </iframe>

    <div class="container">
        <div class="row">
            <!--main content starts-->
            <div class="main-content span8">
                <h3>{{__('Contacto')}}</h3>
                <!--<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu facilisis at vero feugiat nulla facilisis at vero eros et accumsan.</p>-->
                <form id="contactform" method="post" action="{{ url('contact-form') }}">
                    @csrf
                    <fieldset>
                        <p>
                            <label>{{__('Nombre y apellido:')}}</label>
                            <input name="name" type="text" required/>
                        </p>
                        <p>
                            <label>Ciudad de origen:</label>
                            <input name="ori" type="text" required/>
                        </p>
                        <p>
                            <label>Ciudad de Destino:</label>
                            <input name="dest" type="text" required/>
                        </p>
                        <p>
                            <label>Nombre de la compañía:</label>
                            <input name="company" type="text" required />
                        </p>
                        <p>
                            <label>Número telefónico:</label>
                            <input name="phone" class="number" type="text" required/>
                        </p>
                        <p>
                            <label>Dirección de email:</label>
                            <input name="email" class="required email" type="text" required/>
                        </p>
                        <p>
                            <label>Mensaje:</label>
                            <textarea rows="4" name="message" id="message" class="required" required></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Enviar Mensaje" class="submit" />
                        </p>
                        <div class="clearfix"></div>
                        <div id="result"></div>
                    </fieldset>
                </form>
            </div>
            <!--main content ends-->

            <!--sidebar starts-->
            <div class="sidebar span4 contact">
                <h3>Dirección</h3>
                <!--<p>For bulk and custom works contact us by mail or phone. </p>-->
                <h5>Oficina Principal</h5>
                <p>
                    Av. La Estancia con Av. Ernesto Blohm,<br />
                    Centro Banaven (Cubo Negro,)<br />
                    Torre C, piso 6, oficinas 61 y 62.<br />
                    Chuao. Caracas, 1060.<br />
                    Venezuela<br />
                    <img src="img/icons/WA.png" alt="icon" />
                    <a href="https://wa.me/584142005223">+(58 414)200.52.23</a>
                    <!--<a href="#" class="color"><em>info@companyname.com</em></a>-->
                </p>

                <div class="spacer-20px"></div>

                <h5>Almacén y Operaciones</h5>
                <!--<a href="#" class="color"><em>support@companyname.com</em></a>-->
                <p>
                    Prolongación Calle Las Tinajas<br />
                    Edificio Global. El Llanito<br />
                    Sector Las Tinajas. Caracas, 1073<br />
                    Venezuela<br />
                    <img src="img/icons/WA.png" alt="icon" />
                    <a href="https://wa.me/584242790703">+(58 424)279.07.03</a>
                </p>

                <div class="spacer-20px"></div>

                <h5>E-mail</h5>
                <!--<p> We are always keen to meet new, talented people. If you could work with us, please email your CV and portfolio to </p>-->
                <a href="mailto:miglobal@miglobal.com" class="color"><em>miglobal@miglobal.com</em></a>
            </div>
            <!--sidebar ends-->
        </div>
    </div>
</section>
<!-- content ends
================================================== -->
@endsection