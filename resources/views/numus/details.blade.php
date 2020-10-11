@extends('layouts.app')

@section('content')
<div class="single_page_listing_tab">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="slider_tabs" role="tabpanel" aria-labelledby="slider-tab">
              <!-- 10th Home Slider -->
            <div class="home10-mainslider">
                <div class="container-fluid p0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-banner-wrapper home10">
                                <div class="banner-style-one owl-theme owl-carousel">
                                    @foreach($images as $item)
                                        <div class="slide slide-one">
                                            <img src="{{ asset('images/' . $item->route_img) }}" height="600">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="carousel-btn-block banner-carousel-btn">
                                    <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
                                    <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                                </div><!-- /.carousel-btn-block banner-carousel-btn -->
                            </div><!-- /.main-banner-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Agent Single Grid View -->
<section class="our-agent-single bgc-f7 pb30-991">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="listing_sidebar dn db-991">
                    <div class="sidebar_content_details style3">
                        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                        <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                            <div class="sidebar_advanced_search_widget">
                                <h4 class="mb25">@lang('home.detail_advanced_search')<a class="filter_closed_btn float-right" href="#"><small></small> <span class="flaticon-close"></span></a></h4>
                                <form action="{{ route('search', App::getLocale()) }}" method="GET">
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
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="dn db-991 mt30 mb0" style="padding-top: 0.1rem;">
                    <div id="main2">
                        <span id="open2" class="flaticon-filter-results-button filter_open_btn style3" style="left: 95px;"> Show Filter</span>
                    </div>
                </div>
                <div class="single_property_title mt30-767 mb30-767">
                    <h2>{{ $property->title }}</h2>
                    <p>{{ $property->direction }}</p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="single_property_social_share">
                    <div class="price float-right fn-400">
                        <h2>$ {{ number_format($property->price) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 mt50">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="listing_single_description">
                            <h4 class="mb30">@lang('home.detail_description')</h4>
                            <p class="mb25">{{ $property->description }}</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="additional_details">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb15">@lang('home.detail_property_details')</h4>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>ID: </p></a></li>
                                        <li><p>@lang('home.detail_land'): </p></a></li>
                                        <li><p>@lang('home.detail_built'): </p></a></li>
                                        <li><p>@lang('home.detail_front'): </p></a></li>
                                        <li><p>@lang('home.detail_fund'): </p></a></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{ $property->unique_key }}</span></p></a></li>
                                        <li><p><span>{{ $detail->size_property }}</span></p></a></li>
                                       <li><p><span>{{ $detail->size_land }}</span></p></a></li>
                                       <li><p><span>{{ $detail->front_land }}</span></p></a></li>
                                       <li><p><span>{{ $detail->back_land }}</span></p></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>@lang('home.detail_bedrooms'):</p></a></li>
                                        <li><p>@lang('home.detail_complete_bathroom'):</p></a></li>
                                        <li><p>@lang('home.detail_half_baths'):</p></a></li>
                                        <li><p>@lang('home.detail_garage'):</p></a></li>
                                        <li><p>@lang('home.detail_pool'):</p></a></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{ $detail->bedroom }}</span></p></a></li>
                                        <li><p><span>{{ $detail->complete_bathroom }}</span></p></a></li>
                                        <li><p><span>{{ $detail->half_baths }}</span></p></a></li>
                                        <li><p><span>{{ $detail->garage }}</span></p></a></li>
                                        <li><p><span>@if($detail->pool == 1) Si @else No @endif </span></p></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>@lang('home.detail_property_type') :</p></a></li>
                                        <li><p>@lang('home.detail_offer_type') :</p></a></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{ $property->type_property }}</span></p></a></li>
                                        <li><p><span>{{ $property->state_property }}</span></p></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="application_statics mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb10">@lang('home.detail_amenities')</h4>
                                </div>

                                <div class="col-lg-12">
                                    <p class="mb10">{{$property->amenities}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="application_statics mt30">
                            <h4 class="mb30">@lang('home.detail_location') <small class="float-right">{{ $property->direction }}</small></h4>
                            <div class="property_video p0">
                                <div class="thumb">
                                    @php
                                        $map =  htmlentities($detail->map);
                                        echo html_entity_decode($map); 
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-xl-4 mt50">
                <div class="sidebar_listing_list">
                    <div class="sidebar_advanced_search_widget">
                        <div class="sl_creator">
                            <div class="media">

                                <div class="media-body">
                                    <h5 class="mt-0 mb0">{{ $adviser->name }}</h5>
                                    <p class="mb0">{{ $adviser->phone }}</p>
                                    <p class="mb0">{{ $adviser->email }}</p>
                                  </div>
                            </div>
                            <hr>
                            <div class="media">

                                <div class="media-body">

                                    <p class="mb0">{{ $property->title }}</p>
                                    <p class="mb0">ID: {{ $property->unique_key}}</p>

                                  </div>
                            </div>
                        </div>
                        <form class="contact_form" action="{{ route('send-email', App::getLocale()) }}" method="POST">
                            @csrf
                            <ul class="sasw_list mb0">
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="@lang('home.form_name')">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('home.form_email')">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="phone" name="phone"  placeholder="@lang('home.form_phone')">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="@lang('home.form_subject')">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" id="message" class="form-control required" rows="5" required="required" placeholder="@lang('home.form_message')"></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" class="btn btn-block btn-thm">@lang('home.form_btn_send')</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                    <div class="sidebar_advanced_search_widget">
                        <h4 class="mb25">@lang('home.detail_advanced_search')<a class="filter_closed_btn float-right" href="#"><small></small> <span class="flaticon-close"></span></a></h4>
                        <form action="{{ route('search', App::getLocale()) }}" method="GET">
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
                <div class="terms_condition_widget">
                    <h4 class="title">@lang('home.home_recomend')</h4>
                    <div class="sidebar_feature_property_slider">
                        @foreach($outstanding as $item)
                            <div class="item">
                                <div class="feat_property">
                                    <div class="thumb" style="height: 220px;">
                                        <img class="img-whp" src="{{ asset('images/'.$item->profile_picture) }}" alt="{{ $item->title }}" >
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item" style="background-color: rgb(62, 76, 102);"><a>{{ $item->state_property }}</a></li>
                                                @if($item->outstanding == 1)
                                                    <li class="list-inline-item"><a>@lang('home.outstanding')</a></li>
                                                @endif
                                            </ul>
                                            <a class="fp_price" href="{{ route('detail-pro', [App::getLocale(), $item->id]) }}">$ {{ number_format($item->price) }}</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">{{ $item->type_property }}</p>
                                            <h4><a href="{{ route('detail-pro', [App::getLocale(), $item->id]) }}">{{ $item->title }}</a></h4>
                                            <p><span class="flaticon-placeholder"></span>{{ $item->direction }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
