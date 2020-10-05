@extends('layouts.app')

@section('content')
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Numus</a></li>
                        <li class="breadcrumb-item active" aria-current="page">how to buy</li>
                    </ol>
                    <h1 class="breadcrumb_title">How to buy</h1>
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
                    <h2 class="mt0">Pasos que necesitas saber para comprar tu nueva casa</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-5">
                <div class="about_thumb">
                    <img class="img-fluid w100" src="{{ asset('cliente/assets/images/logo_black.png')}}" alt="1.jpg">

                </div>
            </div>
            <div class="col-lg-8 col-xl-7">
                <div class="about_content">
                    <p class="large">Paso 1:</p>
                    <p> Se trata de la comunidad, las personas y las relaciones que importan dentro de la casa  y la zona escogida para vivir. Se trata de comprender los matices de su estilo de vida, ya sea que esté en el mercado para vender o comprar. Permítanos ayudarlo a encontrar y definir lo que el lujo significa para usted.
                    </p>
                    <p class="large">Paso 2:</p>
                    <p>Somos un equipo de asesores inmobiliarios residiendo en Merida, Yucatán, la ciudad con mejor calidad de vida para vivir en mexico y Latinoamérica, estamos aquí dispuestos a ayudarlos a encontrar la mejor opción para vivir o invertir en el sureste de mexico.
                    </p>
                    <p class="large">Paso 3:</p>
                    <p>
                        Nuestro objetivo es brindar lo último en servicios profesionales de bienes raíces tanto residenciales y comerciales, como al igual oportunidades de inversión. Enfocándonos en propiedades en el mercado premium que satisfagan las necesidades de nuestros clientes.
                    </p>
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
