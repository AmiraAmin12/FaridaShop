@extends('website.layout')
@section('content')
<main>

	<!-- sidebar mobile menu & sidebar cart - start
================================================== -->
	@include('website.partials.sidebarmenu')

	<!-- sidebar mobile menu & sidebar cart - end
================================================== -->
	<!-- slider_section - start
================================================== -->
	@include('website.partials.slider')

	<!-- slider_section - end
================================================== -->

	<!-- policy_section - start
================================================== -->
	<section class="policy_section sec_ptb_50 pb-0 clearfix">
		<div class="container maxw_1460">
			<div class="supermarket_policy clearfix">
				<ul class="ul_li clearfix">
					<li>
						<div class="supermarket_policy_item clearfix">
							<div class="item_icon">
								<img src="assets/images/icons/supermarket/icon_12.png" alt="icon_not_found">
							</div>
							<div class="item_content">
								<h3 class="text-uppercase">Free Delivery</h3>
								<p>For all order over $120</p>
							</div>
						</div>
					</li>

					<li>
						<div class="supermarket_policy_item clearfix">
							<div class="item_icon">
								<img src="assets/images/icons/supermarket/icon_13.png" alt="icon_not_found">
							</div>
							<div class="item_content">
								<h3 class="text-uppercase">Safe payment</h3>
								<p>100% secure payment</p>
							</div>
						</div>
					</li>

					<li>
						<div class="supermarket_policy_item clearfix">
							<div class="item_icon">
								<img src="assets/images/icons/supermarket/icon_14.png" alt="icon_not_found">
							</div>
							<div class="item_content">
								<h3 class="text-uppercase">Shop with confidence</h3>
								<p>If goods have problems</p>
							</div>
						</div>
					</li>

					<li>
						<div class="supermarket_policy_item clearfix">
							<div class="item_icon">
								<img src="assets/images/icons/supermarket/icon_15.png" alt="icon_not_found">
							</div>
							<div class="item_content">
								<h3 class="text-uppercase">24/7 help center</h3>
								<p>Dedicated 24/7 support</p>
							</div>
						</div>
					</li>

					<li>
						<div class="supermarket_policy_item clearfix">
							<div class="item_icon">
								<img src="assets/images/icons/supermarket/icon_16.png" alt="icon_not_found">
							</div>
							<div class="item_content">
								<h3 class="text-uppercase">Friendly services</h3>
								<p>30 day satisfaction guarantee</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- policy_section - end
================================================== -->


	<!-- deals_section - start
================================================== -->
	<section class="deals_section sec_ptb_50 clearfix">
		<div class="container maxw_1460">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="supermarket_section_title clearfix">
						<span class="sub_title text-uppercase">A wide selection of items </span>
						<h2 class="title_text mb-0">Top Flash Deal</h2>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="gray_line"></div>
				</div>

				<div class="col-lg-2">
					<div class="carousel_nav align_right">
						<button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
						<button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
					</div>
				</div>
			</div>

			<div class="supermarket_deals_carousel position-relative clearfix">
				<div class="slideshow5_slider row clearfix" data-slick='{"dots": false}'>
					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_01.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_02.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_03.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_04.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_01.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_02.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_03.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_04.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_01.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>

					<div class="item col">
						<div class="supermarket_deals_item text-center clearfix">
							<div class="offer_text">Flat -30%</div>
							<a href="#!" class="item_image">
								<img src="assets/images/shop/supermarket/img_02.png" alt="image_not_found">
							</a>
							<div class="item_content">
								<h3 class="item_title">
									<a href="#!"> Baby Shoes </a>
								</h3>
							</div>
							<span class="item_instock">21 Products</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- deals_section - end
================================================== -->


	<!-- product_section - start
================================================== -->
	<section class="product_section sec_ptb_100 bg_white clearfix">
		<div class="container maxw_1460">
			<div class="row justify-content-lg-between">
				<div class="col-lg-3">
					<div class="supermarket_sidebar_tab mb_30">
						<div class="wrap_heade bg_supermarket_red clearfix">
							<h2>Top Flash Deal</h2>
							<span>A wide selection of items</span>
						</div>
						<ul class="ul_li_block nav" role="tablist">
							<li><a class="active" data-toggle="tab" href="#best_deals_tab">Best Deals</a></li>
							<li><a data-toggle="tab" href="#tv_video_tab">TV & Video</a></li>
							<li><a data-toggle="tab" href="#cameras_tab">Cameras</a></li>
							<li><a data-toggle="tab" href="#audio_tab">Audio</a></li>
							<li><a data-toggle="tab" href="#cell_phones_tab">Cell Phones</a></li>
							<li><a data-toggle="tab" href="#gps_navi_tab">GPS & Navi</a></li>
							<li><a data-toggle="tab" href="#computers_tab">Computers</a></li>
							<li><a data-toggle="tab" href="#portable_audio_tab">Portable Audio</a></li>
							<li><a data-toggle="tab" href="#accesoriess_tab">Accesoriess</a></li>
						</ul>
					</div>

					<div class="supermarket_advertisement_3">
						<img src="assets/images/offer/supermarket/img_05.jpg" alt="image_not_found">
						<div class="item_content text-white">
							<h3 class="item_title text-white">
								ALL-NEW-SPORT
								<span>STARTING AT</span>
							</h3>
							<span class="item_price"><sup>£</sup>7,90</span>
							<a class="custom_btn bg_black btn_round" href="#!">Shop Now</a>
						</div>
					</div>
				</div>

				<div class="col-lg-9">
					<div class="tab-content">
						<div id="best_deals_tab" class="tab-pane active">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li class="supermarket_advertisement_carousel position-relative">
									<div class="slideshow1_slider" data-slick='{"dots": false}'>
										<div class="item">
											<div class="supermarket_advertisement_2">
												<img src="assets/images/offer/supermarket/img_04.jpg" alt="image_not_found">
												<div class="item_content">
													<span class="text-uppercase">Gaming 4k</span>
													<h3 class="item_title text-white mb_15">Desktop & Case</h3>
													<a href="#!" class="custom_btn btn_sm btn_round bg_supermarket_red">Shop Now</a>
												</div>
											</div>
										</div>

										<div class="item">
											<div class="supermarket_advertisement_2">
												<img src="assets/images/offer/supermarket/img_04.jpg" alt="image_not_found">
												<div class="item_content">
													<span class="text-uppercase">Gaming 4k</span>
													<h3 class="item_title text-white mb_15">Desktop & Case</h3>
													<a href="#!" class="custom_btn btn_sm btn_round bg_supermarket_red">Shop Now</a>
												</div>
											</div>
										</div>

										<div class="item">
											<div class="supermarket_advertisement_2">
												<img src="assets/images/offer/supermarket/img_04.jpg" alt="image_not_found">
												<div class="item_content">
													<span class="text-uppercase">Gaming 4k</span>
													<h3 class="item_title text-white mb_15">Desktop & Case</h3>
													<a href="#!" class="custom_btn btn_sm btn_round bg_supermarket_red">Shop Now</a>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel_nav clearfix">
										<button type="button" class="left_arrow"><i class="fal fa-arrow-left"></i></button>
										<button type="button" class="right_arrow"><i class="fal fa-arrow-right"></i></button>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="tv_video_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="cameras_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="audio_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="cell_phones_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="gps_navi_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="computers_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="portable_audio_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="accesoriess_tab" class="tab-pane fade">
							<ul class="supermarket_product_columns has_4columns ul_li clearfix">
								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#8d8d8d">SOLD OUT</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_item">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
											<li data-bg-color="#0062bd">NEW</li>
										</ul>
										<a class="item_image" href="#!">
											<img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
										</a>
										<div class="item_content">
											<span class="item_type text-uppercase">Speakers</span>
											<h3 class="item_title">
												<a href="#!">
													Wireless Audio System Multiroom 360
												</a>
											</h3>
											<div class="item_price">
												<strong>£1,300</strong>
												<del>£2,300</del>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product_section - end
================================================== -->


	<!-- advertisement_section - start
================================================== -->
	<section class="advertisement_section sec_ptb_50 pb-0 clearfix">
		<div class="container maxw_1460">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="sm_offer_item offer_fullimage text-white">
						<img src="assets/images/offer/supermarket/img_06.jpg" alt="image_not_found">
						<div class="item_content">
							<h3 class="item_title text-white">
								Smartphone Bestseller Products 2019
							</h3>
							<span class="item_price">Price: $298.99</span>
							<a class="text_btn" href="#!">
								<span>Pre - Order Now</span>
								<i class="fal fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sm_offer_item offer_fullimage text-white">
						<img src="assets/images/offer/supermarket/img_07.jpg" alt="image_not_found">
						<div class="item_content">
							<h3 class="item_title text-white">
								Smartphone Bestseller Products 2019
							</h3>
							<span class="item_price">Price: $298.99</span>
							<a class="text_btn" href="#!">
								<span>Pre - Order Now</span>
								<i class="fal fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sm_offer_item offer_fullimage text-white">
						<img src="assets/images/offer/supermarket/img_08.jpg" alt="image_not_found">
						<div class="item_content">
							<h3 class="item_title text-white">
								Smartphone Bestseller Products 2019
							</h3>
							<span class="item_price">Price: $298.99</span>
							<a class="text_btn" href="#!">
								<span>Pre - Order Now</span>
								<i class="fal fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- advertisement_section - end
================================================== -->


	<!-- bestseller_section - start
================================================== -->
	@include('website.partials.bestseller')

	<!-- bestseller_section - end
================================================== -->


	<!-- advertisement_section - start
================================================== -->
	<section class="advertisement_section sec_ptb_50 clearfix">
		<div class="container maxw_1460">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="sm_offer_item offer_fullimage text-white">
						<img src="assets/images/offer/supermarket/img_09.jpg" alt="image_not_found">
						<div class="item_content">
							<h3 class="item_title text-white">
								Smartphone Bestseller Products 2019
							</h3>
							<span class="item_price">Price: $298.99</span>
							<a class="text_btn" href="#!">
								<span>Pre - Order Now</span>
								<i class="fal fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="sm_offer_item offer_fullimage text-white">
						<img src="assets/images/offer/supermarket/img_10.jpg" alt="image_not_found">
						<div class="item_content">
							<h3 class="item_title text-white">
								Smartphone Bestseller Products 2019
							</h3>
							<span class="item_price">Price: $298.99</span>
							<a class="text_btn" href="#!">
								<span>Pre - Order Now</span>
								<i class="fal fa-long-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- advertisement_section - end
================================================== -->


	<!-- supermarket_feature_carousel - start
================================================== -->
	<section class="supermarket_feature_carousel arrow_ycenter clearfix" data-slick='{"dots": false}'>
		<div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
			<div class="container maxw_1460">
				<div class="row align-items-center justify-content-lg-between">
					<div class="col-lg-7 order-last">
						<div class="item_image">
							<img src="assets/images/feature/supermarket/img_01.png" alt="image_not_found">
						</div>
					</div>

					<div class="col-lg-5">
						<div class="item_content">
							<span class="item_price">£99.00</span>
							<h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
							<h3 class="item_title text-white mb_30">
								Everything you need to Start an online store
							</h3>
							<a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
			<div class="container maxw_1460">
				<div class="row align-items-center justify-content-lg-between">
					<div class="col-lg-7 order-last">
						<div class="item_image">
							<img src="assets/images/feature/supermarket/img_01.png" alt="image_not_found">
						</div>
					</div>

					<div class="col-lg-5">
						<div class="item_content">
							<span class="item_price">£99.00</span>
							<h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
							<h3 class="item_title text-white mb_30">
								Everything you need to Start an online store
							</h3>
							<a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
			<div class="container maxw_1460">
				<div class="row align-items-center justify-content-lg-between">
					<div class="col-lg-7 order-last">
						<div class="item_image">
							<img src="assets/images/feature/supermarket/img_01.png" alt="image_not_found">
						</div>
					</div>

					<div class="col-lg-5">
						<div class="item_content">
							<span class="item_price">£99.00</span>
							<h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
							<h3 class="item_title text-white mb_30">
								Everything you need to Start an online store
							</h3>
							<a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- supermarket_feature_carousel - end
================================================== -->


	<!-- bestseller_section - start
================================================== -->
	<section class="bestseller_section sec_ptb_100 clearfix">
		<div class="container">
			<div class="row justify-content-lg-between">

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="bestseller_wrap">
						<div class="supermarket_section_title mb_50 clearfix">
							<span class="sub_title text-uppercase">A wide selection of items</span>
							<h2 class="title_text mb-0">Bestseller Products</h2>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_22.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="bestseller_wrap">
						<div class="supermarket_section_title mb_50 clearfix">
							<span class="sub_title text-uppercase">A wide selection of items</span>
							<h2 class="title_text mb-0">Bestseller Products</h2>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="bestseller_wrap">
						<div class="supermarket_section_title mb_50 clearfix">
							<span class="sub_title text-uppercase">A wide selection of items</span>
							<h2 class="title_text mb-0">Bestseller Products</h2>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_23.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_24.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>

						<div class="supermarket_product_small">
							<div class="item_image">
								<img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
								<ul class="product_label ul_li_block clearfix">
									<li data-bg-color="#cc1414">-70%</li>
								</ul>
							</div>
							<div class="item_content">
								<span class="item_type">Speakers</span>
								<h3 class="item_title">
									<a href="#!">Red Wireless Headphone Solo 2 HD</a>
								</h3>
								<span class="item_price">£2,300</span>
								<ul class="rating_star ul_li clearfix">
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fal fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- bestseller_section - end
================================================== -->


</main>

@endsection