@extends('layouts.app')

@section('content')
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home', App::getLocale()) }}">Numus</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('home.nav_company')</li>
                    </ol>
                    <h1 class="breadcrumb_title">@lang('home.company_about_us')</h1>
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
                    <h2 class="mt0">@lang('home.company_title_one')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <div class="about_content">
                    <p class="large">@lang('home.company_subtitle_one')</p>
                    <p>
                        @lang('home.company_description_one')
                    </p>
                    <p>
                        @lang('home.company_description_two')
                    </p>
                    <p>
                        @lang('home.company_description_three')
                    </p>
                    <ul class="ab_counting">
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-user"></span></div>
                                <div class="details">
                                    <h3>80,123</h3>
                                    <p>@lang('home.company_customers')</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-home"></span></div>
                                <div class="details">
                                    <h3>332</h3>
                                    <p>@lang('home.company_properties')</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-transfer"></span></div>
                                <div class="details">
                                    <h3>$468 @lang('home.company_millions')</h3>
                                    <p>@lang('home.company_savings')</p>
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
                    <h2>@lang('home.home_question')</h2>
					<p>@lang('home.home_subtitle_question')</p>
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
                        <h4>@lang('home.home_option_one')</h4>
						<p>@lang('home.home_text_option_one')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us">
                    <div class="icon">
                        <span class="flaticon-home-1"></span>
                    </div>
                    <div class="details">
                        <h4>@lang('home.home_option_two')</h4>
						<p>@lang('home.home_text_option_two')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us">
                    <div class="icon">
                        <span class="flaticon-profit"></span>
                    </div>
                    <div class="details">
                        <h4>@lang('home.home_option_three')</h4>
						<p>@lang('home.home_text_option_three')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
