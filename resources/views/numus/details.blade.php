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
                                <h4 class="mb25">Búsqueda Avanzada<a class="filter_closed_btn float-right" href="#"><small></small> <span class="flaticon-close"></span></a></h4>
                                <form action="{{ route('search') }}" method="GET">
                                    <ul class="sasw_list style2 mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" id="title" placeholder="Palabra clave">
                                                <label for="title"><span class="flaticon-magnifying-glass"></span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick" name="type_property">
                                                        <option>Tipo de propiedad</option>
                                                        <option>Departamento</option>
                                                        <option>Casa</option>
                                                        <option>Townhouse</option>
                                                        <option>Terreno</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick" name="location">
                                                        <option>Ubicación</option>
                                                        <option>Colonia Mexico</option>
                                                        <option>Montes de Ame</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Tipo de Oferta</option>
                                                        <option>Renta</option>
                                                        <option>Venta</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-block btn-thm">Buscar</button>
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
                            <h4 class="mb30">Descripción</h4>
                            <p class="mb25">{{ $property->description }}</p>



                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="additional_details">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb15">Detalles de la propiedad</h4>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>ID : </p></a></li>
                                        <li><p>Precio : </p></a></li>
                                        <li><p>Property Size : </p></a></li>
                                        <li><p>Mts Built : </p></a></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{ $property->unique_key }}</span></p></a></li>
                                        <li><p><span>$ {{ number_format($property->price) }}</span></p></a></li>
                                        <li><p><span>{{ $detail->size_property }}</span></p></a></li>
                                       <li><p><span>{{ $detail->size_land }}</span></p></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>Bedrooms :</p></a></li>
                                        <li><p>Bathrooms :</p></a></li>
                                        <li><p>Garage :</p></a></li>
                                        <li><p>Pool :</p></a></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{ $detail->bedroom }}</span></p></a></li>
                                        <li><p><span>{{ $detail->bathroom }}</span></p></a></li>
                                        <li><p><span>{{ $detail->garage }}</span></p></a></li>
                                        <li><p><span>@if($detail->pool == 1) Si @else No @endif </span></p></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>Tipo de la propiedad :</p></a></li>
                                        <li><p>Estatus de la propiedad :</p></a></li>
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
                                    <h4 class="mb10">Amenidades</h4>
                                </div>

                                <div class="col-lg-12">
                                    <p class="mb10">{{$property->amenities}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="application_statics mt30">
                            <h4 class="mb30">Ubicación <small class="float-right">{{ $property->direction }}</small></h4>
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
                                    <h5 class="mt-0 mb0">Samul Williams</h5>
                                    <p class="mb0">(123)456-7890</p>
                                    <p class="mb0">info@findhouse.com</p>
                                  </div>
                            </div>
                            <hr>
                            <div class="media">

                                <div class="media-body">

                                    <p class="mb0">Nombre de la propiedad</p>
                                    <p class="mb0">ID: {{ $property->unique_key}}</p>

                                  </div>
                            </div>
                        </div>
                        <ul class="sasw_list mb0">
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre completo">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleInputName2" placeholder="Teléfono">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="Me interesa este inmueble">Me interesa este inmueble </textarea>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_button">
                                    <button type="submit" class="btn btn-block btn-thm">Buscar</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                    <div class="sidebar_advanced_search_widget">
                        <h4 class="mb25">Búsqueda Avanzada<a class="filter_closed_btn float-right" href="#"><small></small> <span class="flaticon-close"></span></a></h4>
                        <form action="{{ route('search') }}" method="GET">
                            <ul class="sasw_list style2 mb0">
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Palabra clave">
                                        <label for="title"><span class="flaticon-magnifying-glass"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="type_property">
                                                <option>Tipo de propiedad</option>
                                                <option>Departamento</option>
                                                <option>Casa</option>
                                                <option>Townhouse</option>
                                                <option>Terreno</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick" name="location">
                                                <option>Ubicación</option>
                                                <option>Colonia Mexico</option>
                                                <option>Montes de Ame</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Tipo de Oferta</option>
                                                <option>Renta</option>
                                                <option>Venta</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" class="btn btn-block btn-thm">Buscar</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="terms_condition_widget">
                    <h4 class="title">Propiedades destacadas</h4>
                    <div class="sidebar_feature_property_slider">
                        <div class="item">
                            <div class="feat_property home7 agent">
                                <div class="thumb">
                                    <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        <h4 class="posr color-white">Renovated Apartment</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feat_property home7 agent">
                                <div class="thumb">
                                    <img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        <h4 class="posr color-white">Renovated Apartment</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feat_property home7 agent">
                                <div class="thumb">
                                    <img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        <h4 class="posr color-white">Renovated Apartment</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feat_property home7 agent">
                                <div class="thumb">
                                    <img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        <h4 class="posr color-white">Renovated Apartment</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feat_property home7 agent">
                                <div class="thumb">
                                    <img class="img-whp" src="images/property/fp5.jpg" alt="fp5.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        <h4 class="posr color-white">Renovated Apartment</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
