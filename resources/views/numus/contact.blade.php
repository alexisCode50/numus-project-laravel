@extends('layouts.app')

@section('content')
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Numus</a></li>
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
                    <form class="contact_form" action="{{ route('send-email') }}" method="POST">
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
                        <p>+52 9991 123 1234</p>
                    </div>
                    <div class="content_list">
                        <h5>@lang('home.form_email')</h5>
                        <p>contacto@numus.com</p>
                    </div>

                    <h5>@lang('home.contact_follow')</h5>
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
