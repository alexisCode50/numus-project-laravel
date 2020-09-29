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
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Compra</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Renta</a>
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Ingresar palabra clave...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick">
															<option>Tipo de propiedad</option>
															<option>Departamento</option>
															<option>Townhouse</option>
															<option>Casa</option>
															<option>Terreno</option>

														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Ubicación">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs" class="btn dd_btn">
												    	<span>Precio</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount" placeholder="$250,000">
															<input type="text" class="amount2" placeholder="$10,000,000">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>

											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Buscar</button>
												</div>
											</li>
										</ul>
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
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp2.jpg')}}" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,700,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Mirova, Dzitya</h4>
										<p><span class="flaticon-placeholder"></span> Calle 2 x 10 y 12, Dzitya</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 512</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp3.jpg')}}" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$6,500,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Lujosa casa en Montecristo</h4>
										<p><span class="flaticon-placeholder"></span> Calle 24 x 4 y 6, Montecristo</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 5280</a></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
						<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('cliente/assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Venta</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$3,850,000<small>MXN</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Casa</p>
										<h4>Casa en Colonia México</h4>
										<p><span class="flaticon-placeholder"></span> Calle 25 entre 2 y 14 Colonia México</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Cuartos: 4</a></li>
											<li class="list-inline-item"><a href="#">Baños: 2</a></li>
											<li class="list-inline-item"><a href="#">Mts2: 500</a></li>
										</ul>
									</div>

								</div>
							</div>
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

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="color-white">Testimonios</h2>
						<p class="color-white">Here could be a nice sub title</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider">
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="{{ asset('cliente/assets/images/testimonial/1.jpg')}}" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusto Silva</h4>
									<p>Cliente personal</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="{{ asset('cliente/assets/images/testimonial/1.jpg')}}" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Carlos López</h4>
									<p>Cliente personal</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="{{ asset('cliente/assets/images/testimonial/1.jpg')}}" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="{{ asset('cliente/assets/images/testimonial/1.jpg')}}" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="{{ asset('cliente/assets/images/testimonial/1.jpg')}}" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Blog -->


	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Nuestras Alianzas</h2>
						<p>Trabajamos con las mejores inmobiliarias del sureste</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ asset('cliente/assets/images/partners/1.png')}}" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ asset('cliente/assets/images/partners/2.png')}}" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ asset('cliente/assets/images/partners/3.png')}}" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ asset('cliente/assets/images/partners/4.png')}}" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ asset('cliente/assets/images/partners/5.png')}}" alt="5.png">
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
