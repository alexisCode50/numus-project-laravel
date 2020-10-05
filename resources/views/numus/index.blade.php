@extends('layouts.app')

@section('content')

	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">@lang('message.home_title')</h2>
							<p class="fz18 color-white">@lang('message.home_subtitle')</p>
						</div>
						<div class="home_adv_srch_opt">

							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
										<form action="{{ route('search') }}" method="GET">
											<ul class="h1ads_1st_list mb0">
												<li class="list-inline-item">
													<div class="form-group">
														<input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="@lang('message.key_word')">
													</div>
												</li>
												<li class="list-inline-item">
													<div class="search_option_two">
														<div class="candidate_revew_select">
															<select class="selectpicker w100 show-tick" name="type_property">
																<option value="">@lang('message.type_property')</option>
																<option>@lang('message.department')</option>
																<option>Townhouse</option>
																<option>@lang('message.house')</option>
																<option>@lang('message.land')</option>
															</select>
														</div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="search_option_two">
														<div class="candidate_revew_select">
															<select class="selectpicker w100 show-tick" name="location">
																<option value="">@lang('message.location')</option>
																@foreach($location as $item)
																	<option value="{{ $item->id }}">{{ $item->name }}</option>
																@endforeach
															</select>
														</div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="search_option_two">
														<div class="candidate_revew_select">
															<select class="selectpicker w100 show-tick">
																<option value="">@lang('message.offer_type')</option>
																<option>@lang('message.offer_type_sale')</option>
																<option>@lang('message.offer_type_rent')</option>
															</select>
														</div>
													</div>
												</li>

												<li class="list-inline-item">
													<div class="search_option_button">
														<button type="submit" class="btn btn-thm" style="font-size: 16px;">@lang('message.btn_seach')</button>
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
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
				    	<div class="mouse_scroll">
			        		<div class="icon">
					    		<h4>@lang('message.btn_slide')</h4>
					    		<p>@lang('message.btn_slide_sub')</p>
			        		</div>
			        		<div class="thumb">
			        			<img src="{{ asset('cliente/assets/images/resource/mouse.png')}}" alt="mouse.png">
			        		</div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>@lang('message.home_recomend')</h2>
						<p>@lang('message.home_subtitle_recomend')</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						@foreach($property as $item)
							<a href="{{ route('detail-pro', $item->id) }}">
								<div class="item">
									<div class="feat_property">
										<div class="thumb" style="height: 220px;">
											<img class="img-whp" src="{{ asset('images/'.$item->profile_picture) }}" alt="{{ $item->title }}" >
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a>{{ $item->state_property }}</a></li>
													@if($item->outstanding == 1)
														<li class="list-inline-item"><a>Destacada</a></li>
													@endif
												</ul>
												<a class="fp_price" href="{{ route('detail-pro', $item->id) }}">$ {{ number_format($item->price) }}</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p class="text-thm">{{ $item->type_property }}</p>
												<h4><a href="{{ route('detail-pro', $item->id) }}">{{ $item->title }}</a></h4>
												<p><span class="flaticon-placeholder"></span>{{ $item->direction }}</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="property-city" class="property-city pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>@lang('message.home_title_find')</h2>
						<p>@lang('message.home_subtitle_find')</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<a href="http://127.0.0.1:8000/search?title=&type_property=&location=5">
						<div class="properti_city">
							<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/home/p2.jpg')}}" alt="pc1.jpg"></div>
							<div class="overlay">
								<div class="details">
									<h4>Montecristo</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-8 col-xl-8">
					<a href="http://127.0.0.1:8000/search?title=&type_property=&location=6">
						<div class="properti_city">
							<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/home/p1.jpg')}}" alt="p2.jpg"></div>
							<div class="overlay">
								<div class="details">
									<h4>Country Club</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-8 col-xl-8">
					<a href="http://127.0.0.1:8000/search?title=&type_property=&location=7">
						<div class="properti_city">
							<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/home/p4.jpg')}}" alt="pc3.jpg"></div>
							<div class="overlay">
								<div class="details">
									<h4>Temozón</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-xl-4">
					<a href="http://127.0.0.1:8000/search?title=&type_property=&location=1">
						<div class="properti_city">
							<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/home/p3.jpg')}}" alt="pc4.jpg"></div>
							<div class="overlay">
								<div class="details">
									<h4>Dzitya</h4>
									
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>@lang('message.home_question')</h2>
						<p>@lang('message.home_subtitle_question')</p>
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
							<h4>@lang('message.home_option_one')</h4>
							<p>@lang('message.home_text_option_one')</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>@lang('message.home_option_two')</h4>
							<p>@lang('message.home_text_option_two')</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>@lang('message.home_option_three')</h4>
							<p>@lang('message.home_text_option_three')</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>@lang('message.home_question_info')</h2>
						<p>@lang('message.home_subtitle_question_info')</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">@lang('message.home_btn_info')</a>
					</div>
				</div>
			</div>
		</div>
    </section>

@endsection
