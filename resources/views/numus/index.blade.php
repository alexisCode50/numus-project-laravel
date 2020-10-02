@extends('layouts.app')

@section('content')

	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">Encuentra tu próxima propiedad</h2>
							<p class="fz18 color-white">Propiedades de todo tipo desde $50,000 mxn</p>
						</div>
						<div class="home_adv_srch_opt">

							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
										<form action="{{ route('search') }}" method="GET">
											<ul class="h1ads_1st_list mb0">
												<li class="list-inline-item">
													<div class="form-group">
														<input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Ingresar palabra clave...">
													</div>
												</li>
												<li class="list-inline-item">
													<div class="search_option_two">
														<div class="candidate_revew_select">
															<select class="selectpicker w100 show-tick" name="type_property">
																<option value="">Tipo de propiedad</option>
																<option>Departamento</option>
																<option>Townhouse</option>
																<option>Casa</option>
																<option>Terreno</option>
															</select>
														</div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="search_option_two">
														<div class="candidate_revew_select">
															<select class="selectpicker w100 show-tick" name="location">
																<option value="">Ubicación</option>
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
															<select class="selectpicker w100 show-tick" name="">
																<option value="">Tipo de oferta</option>
																<option>Venta</option>
																<option>Renta</option>
															</select>
														</div>
													</div>
												</li>

												<li class="list-inline-item">
													<div class="search_option_button">
														<button type="submit" class="btn btn-thm">Buscar</button>
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
					    		<h4>Desliza</h4>
					    		<p>para descubrir más</p>
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
						<h2>Propiedades Recomendadas</h2>
						<p>Recomendadas por nuestros asesores expertos.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						@foreach($property as $item)
							<div class="item">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="{{ asset('images/'.$item->profile_picture) }}" alt="{{ $item->title }}">
										<div class="thmb_cntnt">
											<ul class="tag mb0">
												<li class="list-inline-item"><a href="#">{{ $item->state_property }}</a></li>
												@if($item->outstanding == 1)
													<li class="list-inline-item"><a href="#">Destacada</a></li>
												@endif
											</ul>


											<a class="fp_price" href="#">$ {{ $item->price }} <small>MXN</small></a>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p class="text-thm">{{ $item->type_property }}</p>
											<h4>{{ $item->title }}</h4>
											<p><span class="flaticon-placeholder"></span>{{ $item->direction }}</p>

										</div>

									</div>
								</div>
							</div>
						@endforeach
							

						{{-- 
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">Venta</a></li>
                                            <li class="list-inline-item"><a href="#">Destacada</a></li>
										</ul>

										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

									</div>

								</div>
							</div>
						
						<div class="feat_property">
							<div class="thumb">
								<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
								<div class="thmb_cntnt">
									<ul class="tag mb0">
										<li class="list-inline-item"><a href="#">Venta</a></li>
										<li class="list-inline-item"><a href="#">Destacada</a></li>
									</ul>

									<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
								</div>
							</div>
							<div class="details">
								<div class="tc_content">
									<p class="text-thm">Casa</p>
									<h4>Casa en Colonia México</h4>
									<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>

								</div>

							</div>
						</div>
						--}}
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
						<h2>Encuentra propiedades en esta zona</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/property/pc1.jpg')}}" alt="pc1.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Montecristo</h4>
								<p>24 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/property/pc2.jpg')}}" alt="pc2.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Country Club</h4>
								<p>18 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/property/pc3.jpg')}}" alt="pc3.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Temozón</h4>
								<p>89 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('cliente/assets/images/property/pc4.jpg')}}" alt="pc4.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Dzitya</h4>
								<p>47 Properties</p>
							</div>
						</div>
					</div>
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



	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>¿Tienes alguna duda?</h2>
						<p>¡Mándanos un mensaje y con gusto te apoyaremos!</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Más información</a>
					</div>
				</div>
			</div>
		</div>
    </section>

@endsection
