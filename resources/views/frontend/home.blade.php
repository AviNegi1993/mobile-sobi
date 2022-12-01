@extends('frontend.layouts.app')
@section('link')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/repair.css')}}">
@endsection
@section('content')
<!-- __________ Start Code for Repair section _______  -->
<section class="hero-repair">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="repair-wrapper">
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
						<form class="repair-form">
							<div class="form_group">
								<label>Maunfacturer:</label>
								<select>
									<option>Option 01</option>
									<option>Option 02</option>
									<option>Option 03</option>
								</select>
							</div>
							<div class="form_group">
								<label>Device:</label>
								<select>
									<option>Option 01</option>
									<option>Option 02</option>
									<option>Option 03</option>
								</select>
							</div>
							<div class="form_group">
								<label>Repair:</label>
								<select>
									<option>Option 01</option>
									<option>Option 02</option>
									<option>Option 03</option>
								</select>
							</div>
							<button class="btn-gray">Choose a Repair</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="repair-card-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="repair-card">
					<div class="row row-sm">
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
												<div class="d-flex product-sale">
													<div class="badge bg-pink">New</div>
													<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart-outline ms-auto wishlist"></i></a>
												</div>
												<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/01.jpg" alt="product-image">
												</a>
												<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
												</a>
											</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">FLOWER POT</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$26 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$59</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart text-danger ms-auto wishlist"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/02.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Chair</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$35 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$79</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<div class="badge bg-success">New</div>
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart-outline ms-auto wishlist"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/03.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Hiking Boots</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$25 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$59</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<div class="badge bg-success">New</div>
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart-outline ms-auto wishlist"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/06.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">college bag</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$35 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$69</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart ms-auto wishlist text-danger"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/04.jpg" alt="product-image"></a>
											<a href="javascript:void(0);" class="adtocart"> <i class="las la-shopping-cart"></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Headphones</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$46 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$89</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart-outline ms-auto wishlist"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/05.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Camera lens</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$159 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$299</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<div class="badge bg-purple">New</div>
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart ms-auto wishlist text-danger"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/09.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Camera</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$129 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$189</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart-outline ms-auto wishlist"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/11.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Handbag</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$19 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$39</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-12 col-xl-4  col-sm-6">
								<div class="card">
									<div class="card-body h-100">
										<div class="pro-img-box">
											<div class="d-flex product-sale">
												<div class="badge bg-info">New</div>
												<a href="https://laravel8.spruko.com/valex/wish-list"><i class="mdi mdi-heart ms-auto wishlist text-danger"></i></a>
											</div>
											<a href="https://laravel8.spruko.com/valex/product-details"><img class="w-100" src="https://laravel8.spruko.com/valex/assets/img/ecommerce/07.jpg" alt="product-image"></a>
											<a href="https://laravel8.spruko.com/valex/product-cart" class="adtocart"> <i class="las la-shopping-cart "></i>
											</a>
										</div>
										<div class="text-center pt-3">
											<h3 class="h6 mb-2 mt-4 fw-bold text-uppercase">Laptop</h3>
											<span class="tx-15 ms-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
											<h4 class="h5 mb-0 mt-2 text-center fw-bold text-danger">$89 <span class="text-secondary fw-normal tx-13 ms-1 prev-price">$120</span>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<ul class="pagination product-pagination ms-auto float-end">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="javascript:void(0);">Next</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- __________ End Code for Repair section _________  -->
@endsection