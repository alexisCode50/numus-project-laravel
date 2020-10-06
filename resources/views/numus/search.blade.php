@extends('layouts.app')

@section('content')
<section class="our-listing bgc-f7 pb30-991">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="listing_sidebar dn db-991">
                    <div class="sidebar_content_details style3">
                        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                        <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                            <div class="sidebar_advanced_search_widget">
                                <h4 class="mb25">@lang('home.detail_advanced_search')<a class="filter_closed_btn float-right" href="#"><small></small> <span class="flaticon-close"></span></a></h4>
                                <form action="{{ route('search') }}" method="GET">
                                    <ul class="sasw_list style2 mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="title" id="title" placeholder="@lang('home.key_word')">
                                                <label for="title"><span class="flaticon-magnifying-glass"></span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick" name="type_property">
                                                        <option value="">@lang('home.type_property')</option>
                                                        <option>@lang('home.department')</option>
                                                        <option>Townhouse</option>
                                                        <option>@lang('home.house')</option>
                                                        <option>@lang('home.land')</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <select class="selectpicker w100 show-tick" name="location">
                                                    <option value="">@lang('home.location')</option>
                                                    @foreach($location as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option value="">@lang('home.offer_type')</option>
                                                        <option>@lang('home.offer_type_sale')</option>
                                                        <option>@lang('home.offer_type_rent')</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-block btn-thm">@lang('home.btn_seach')</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -30px;">
            <div class="col-lg-6" >
                <div class="breadcrumb_content style2 mb0-991">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Numus</a></li>
                        <li class="breadcrumb-item active text-thm" aria-current="page">@lang('home.nav_properties')</li>
                    </ol>
                    <h2 class="breadcrumb_title">@lang('home.nav_properties')</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dn db-991 mt25 mb15">
                    <div id="main2" style="padding-top: 25px;">
                        <span id="open2" class="flaticon-filter-results-button filter_open_btn style2" style="left: 90px;top: 1px;">Buscador</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="sidebar_listing_grid1 dn-991">
                    <div class="sidebar_listing_list">
                        <div class="sidebar_advanced_search_widget">
                            <form action="{{ route('search') }}" method="GET">
                                <ul class="sasw_list mb0">
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="@lang('home.key_word')">
                                            <label for="title"><span class="flaticon-magnifying-glass"></span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick" name="type_property">
                                                    <option value="">@lang('home.type_property')</option>
                                                    <option>@lang('home.department')</option>
                                                    <option>Townhouse</option>
                                                    <option>@lang('home.house')</option>
                                                    <option>@lang('home.land')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <select class="selectpicker w100 show-tick" name="location">
                                                <option value="">@lang('home.location')</option>
                                                @foreach($location as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option value="">@lang('home.offer_type')</option>
                                                    <option>@lang('home.offer_type_sale')</option>
                                                    <option>@lang('home.offer_type_rent')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_button">
                                            <button type="submit" class="btn btn-block btn-thm">@lang('home.btn_seach')</button>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="terms_condition_widget">
                        <h4 class="title">@lang('home.home_recomend')</h4>
                        <div class="sidebar_feature_property_slider">
                            <div class="item">
                                <div class="feat_property home7">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">Renta</a></li>
                                                <li class="list-inline-item"><a href="#">Destacada</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000</a>
                                            <h4 class="posr color-white">Departamento de lujo </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">Renta</a></li>
                                                <li class="list-inline-item"><a href="#">Destacada</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>mxn</small></a>
                                            <h4 class="posr color-white">Departamento de lujo </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">Renta</a></li>
                                                <li class="list-inline-item"><a href="#">Destacada</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>mxn</small></a>
                                            <h4 class="posr color-white">Departamento de lujo </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">Renta</a></li>
                                                <li class="list-inline-item"><a href="#">Destacada</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>mxn</small></a>
                                            <h4 class="posr color-white">Departamento de lujo </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">Renta</a></li>
                                                <li class="list-inline-item"><a href="#">Destacada</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>mxn</small></a>
                                            <h4 class="posr color-white">Departamento de lujo </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="grid_list_search_result">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                            <div class="left_area tac-xsd">
                                <p>{{ count($data) }} @lang('home.results_search')</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                            <div class="right_area text-right tac-xsd">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (count($data) > 0)
                        @foreach($data as $item)

                            <div class="col-lg-12">
                                <div class="feat_property list" style="height: 150px;">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('images/'.$item->profile_picture) }}" alt="{{ $item->title }}">
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <div class="dtls_headr">
                                                <ul class="tag">
                                                    <li class="list-inline-item"><a>{{ $item->state_property }}</a></li>
                                                    @if($item->outstanding == 1)
                                                        <li class="list-inline-item">
                                                            <a>
                                                                @lang('home.outstanding')
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                                <a class="fp_price" href="{{ route('detail-pro', $item->id) }}">$ {{ number_format($item->price) }}</a>
                                            </div>
                                            <p class="text-thm">{{ $item->type_property }}</p>
                                            <h4><a href="{{ route('detail-pro', $item->id) }}">{{ $item->title }}</a></h4>
                                            <p><span class="flaticon-placeholder"></span>{{ $item->direction }}</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                    @else
                        <p>@lang('home.no_results_search')</p>
                    @endif

                    {{ $data->links() }}

                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
