@extends('layouts.app')

@section('content')
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Numus</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                    </ol>
                    <h4 class="breadcrumb_title">Contáctanos</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Contact -->
<section class="our-contact pb0 bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="form_grid">
                    <h4 class="mb5">Mándanos un mensaje</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. Maecenas mattis enim at arcu feugiat, sit amet blandit nisl iaculis. Donec lacus odio, malesuada eu libero sit amet, congue aliquam leo. In hac habitasse platea dictumst.</p>
                    <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" name="form_email" class="form-control required email" required="required" type="Email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_phone" name="form_phone" class="form-control required phone" required="required" type="Telefono" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text" placeholder="Tema">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-group mb0">
                                    <button type="button" class="btn btn-lg btn-thm">¡Enviar!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact_localtion">
                    <h4>Contáctanos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst.</p>
                    <div class="content_list">
                        <h5>Ubicación</h5>
                        <p>Calle 21 x 1 y 11<br>Colonia Itzimna, Mérida Yucatán</p>
                    </div>
                    <div class="content_list">
                        <h5>Telefono</h5>
                        <p>+52 9991 123 1234</p>
                    </div>
                    <div class="content_list">
                        <h5>Mail</h5>
                        <p>contacto@numus.com</p>
                    </div>

                    <h5>Siguenos en nuestras redes</h5>
                    <ul class="contact_form_social_area">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p0 mt50">
        <div class="row">
            <div class="col-lg-12">
                <div class="h600" id="map-canvas"></div>
            </div>
        </div>
    </div>
</section>
@endsection