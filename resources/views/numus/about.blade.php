@extends('layouts.app')

@section('content')
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Numus</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                    </ol>
                    <h1 class="breadcrumb_title">¿Quiénes somos?</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Text Content -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2 class="mt0">Nuestra misión es encontrar tu próximo sueño</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <div class="about_content">
                    <p class="large">Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante sit amet velit.</p>
                    <p>Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar. Donec et libero ligula. Vivamus semper at orci at placerat.Placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla quae alias tempora.</p>
                    <ul class="ab_counting">
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-user"></span></div>
                                <div class="details">
                                    <h3>80,123</h3>
                                    <p>Clientes satisfechos</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-home"></span></div>
                                <div class="details">
                                    <h3>332</h3>
                                    <p>Propiedades</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-transfer"></span></div>
                                <div class="details">
                                    <h3>$468 Millones</h3>
                                    <p>En ahorros</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-xl-5">
                <div class="about_thumb">
                    <img class="img-fluid w100" src="{{ asset('cliente/assets/images/logo_black.png')}}" alt="1.jpg">

                </div>
            </div>
        </div>
        <div class="row mt50">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>¿Por qué somos tu mejor opción?</h2>
                    <p>Garantizamos tu próximo sueño</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us">
                    <div class="icon">
                        <span class="flaticon-high-five"></span>
                    </div>
                    <div class="details">
                        <h4>Clientes satisfechos</h4>
                        <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us">
                    <div class="icon">
                        <span class="flaticon-home-1"></span>
                    </div>
                    <div class="details">
                        <h4>Todo tipo de propiedades</h4>
                        <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us">
                    <div class="icon">
                        <span class="flaticon-profit"></span>
                    </div>
                    <div class="details">
                        <h4>Asesoría financiera</h4>
                        <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
