@extends('layouts.app')

@section('title')
    @lang('home.nav_contact')
@endsection

@section('content')
<section class="inner_page_breadcrumb contactanos" style="background-image: url(../cliente/assets/images/about/contact-min.jpg); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 letrascontactanos">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home', App::getLocale()) }}">Numus</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('home.nav_contact')</li>
                    </ol>
                    <h4 class="breadcrumb_title">@lang('home.contact_us')</h4>
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
                    <h4 class="mb5">@lang('home.contact_title')</h4>
                    <p>@lang('home.contact_text')</p>
                    <form class="contact_form" action="{{ route('send-email', App::getLocale()) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" class="form-control" required="required" type="text" placeholder="@lang('home.form_name')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" class="form-control required email" required="required" type="Email" placeholder="@lang('home.form_email')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone" class="form-control required phone" required="required" type="Telefono" placeholder="@lang('home.form_phone')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="subject" class="form-control required" required="required" type="text" placeholder="@lang('home.form_subject')">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control required" rows="8" required="required" placeholder="@lang('home.form_message')"></textarea>
                                </div>
                                <div class="form-group mb0">
                                    <button type="submit" class="btn btn-lg btn-thm">@lang('home.form_btn_send')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact_localtion">
                    <h4>@lang('home.contact_us')</h4>
                    <p>@lang('home.contact_text')</p>
                    <div class="content_list">
                        <h5>@lang('home.contact_location')</h5>
                        <p>Calle 21 x 1 y 11<br>Colonia Itzimna, Mérida Yucatán</p>
                    </div>
                    <div class="content_list">
                        <h5>@lang('home.form_phone')</h5>
                        <p>+52 9993 682 670</p>
                    </div>
                    <div class="content_list">
                        <h5>@lang('home.form_email')</h5>
                        <p>info@numusinmobiliaria.com</p>
                    </div>

                    <h5>@lang('home.contact_follow')</h5>
                    <ul class="contact_form_social_area">
                        <li class="list-inline-item"><a href="https://www.facebook.com/Numus-Inmobiliaria-105428674678016/"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=529993682670&text=Hola,%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20servicios"><i class="fa fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/numusinmobiliaria?igshid=yv9st75ljb96"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p0 mt50">
        <div class="row">
            <div class="col-lg-12">
                <div class="h600" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.051563331066!2d-89.60823068553437!3d20.99057008601914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5671361f330aff%3A0x25a696d62a160381!2sAv.%20Aleman%20103%2C%20Itzimn%C3%A1%2C%2097100%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses-419!2smx!4v1604677673489!5m2!1ses-419!2smx" width="600" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>
        </div>
    </div>
</section>
@endsection
