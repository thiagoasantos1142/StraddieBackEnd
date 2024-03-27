
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Shop</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-xxl-2 col-xl-3 col-lg-4">
                                <div class="card">
                                    <div class="card-header justify-content-between align-items-center">
                                        <h4 class="card-title">FILTERS</h4>
                                        <a href="javascript:void(0);" class="fs-12 fw-bold mb-0">CLEAR ALL</a>
                                    </div>
                                    <div class="card-body">
                                        <p class="fw-bold">CATEGORIES</p>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                            <span class="custom-control-label">Kurtha sets</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Trousers</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Jeans</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Shirts</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">T-shirts</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Sweat Shirts</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Tracks</span>
                                        </label>
                                        <p class="fw-bold mt-4">BRANDS</p>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Waving Hunter</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Rare Piece</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Future Stock</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Set & Match</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Ultra Door</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Fruit Ninja</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Purple Pro</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Aviva Matches</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Evil Rock</span>
                                        </label>
                                        <p class="fw-bold mt-4">PRICE</p>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Rs.200 to Rs.700</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Rs.700 to Rs.2000</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Rs.2000 to Rs.3500</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Rs.3500 to Rs.5700</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                            <span class="custom-control-label">Rs.5700 to Rs.10,000</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked>
                                            <span class="custom-control-label">Rs.10,000 to Rs.1,00,000</span>
                                        </label>
                                        <p class="fw-bold mt-4">COLORS</p>
                                        <form class="shop__filter">
                                            <div class="row gutters-xs">
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                        <input name="color" type="radio" value="azure"
                                                            class="colorinput-input" checked="">
                                                        <span class="colorinput-color bg-azure"></span>
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                        <input name="color" type="radio" value="indigo"
                                                            class="colorinput-input">
                                                        <span class="colorinput-color bg-indigo"></span>
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                        <input name="color" type="radio" value="purple"
                                                            class="colorinput-input">
                                                        <span class="colorinput-color bg-purple"></span>
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                        <input name="color" type="radio" value="pink"
                                                            class="colorinput-input">
                                                        <span class="colorinput-color bg-pink"></span>
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                        <input name="color" type="radio" value="red"
                                                            class="colorinput-input">
                                                        <span class="colorinput-color bg-red"></span>
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                        <input name="color" type="radio" value="orange"
                                                            class="colorinput-input">
                                                        <span class="colorinput-color bg-orange"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-10 col-xl-9 col-lg-8">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body p-3">
                                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                                                    <div class="d-sm-flex align-items-center">
                                                        <div>
                                                            <p class="mb-0 fw-semibold fs-15">Showing 1-8 of 45 results</p>
                                                        </div>
                                                        <div class="d-flex ms-sm-4 align-items-center gap-2 sort-select mt-2 mt-sm-0">
                                                            <p class="mb-0 fw-bold text-nowrap">Sort By:</p>
                                                            <select class="form-control " data-trigger name="choices-single-default" id="choices-single-default">
                                                                <option value="">Search Your choices</option>
                                                                <option value="1">New arrivals</option>
                                                                <option value="2">Best Selling</option>
                                                                <option value="3">Cost Low to High</option>
                                                                <option value="4">Cost High to Low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="d-sm-flex align-items-center">
                                                        <div class="me-2">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Search here..." aria-label="Text input with 2 dropdown buttons">
                                                                <button  class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2 mt-sm-0">
                                                            <a href="{{url('add-product')}}" class="btn btn-primary btn-block"><i class="fa fa-plus-square me-2"></i> Add New Product</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/1.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">A Minimal Chair</h6>
                                                            <small class="text-muted">Furnitures</small>
                                                            <h5 class="mt-1">$864 <span class="text-muted text-decoration-line-through fs-13">$1860</span> <span class="text-success fw-semibold fs-14">55% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/2.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Watch Set</h6>
                                                            <small class="text-muted">Gadgets</small>
                                                            <h5 class="mt-1">$20,000 <span class="text-muted text-decoration-line-through fs-13">$25,000</span> <span class="text-success fw-semibold fs-14">35% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/3.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Coloured Shoes</h6>
                                                            <small class="text-muted">Footwear</small>
                                                            <h5 class="mt-1">$7,000 <span class="text-muted text-decoration-line-through fs-13">$9,000</span> <span class="text-success fw-semibold fs-14">20% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/4.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Mony Headphones</h6>
                                                            <small class="text-muted">Gadgets</small>
                                                            <h5 class="mt-1">$2,500 <span class="text-muted text-decoration-line-through fs-13">$3,500</span> <span class="text-success fw-semibold fs-14">10% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/5.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Fashion Sandals</h6>
                                                            <small class="text-muted">Footwear</small>
                                                            <h5 class="mt-1">$750 <span class="text-muted text-decoration-line-through fs-13">$1900</span> <span class="text-success fw-semibold fs-14">65% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/6.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Cactus Plant</h6>
                                                            <small class="text-muted">Flower pot</small>
                                                            <h5 class="mt-1">$750 <span class="text-muted text-decoration-line-through fs-13">$1900</span> <span class="text-success fw-semibold fs-14">65% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/7.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Black Shades</h6>
                                                            <small class="text-muted">Sunglasses</small>
                                                            <h5 class="mt-1">$1500 <span class="text-muted text-decoration-line-through fs-13">$2000</span> <span class="text-success fw-semibold fs-14">25% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6 col-md-4">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a>
                                                        </li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body shop-product">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/8.png')}}" class="rounded-2 w-100" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Black Tshirt</h6>
                                                            <small class="text-muted">Fashions</small>
                                                            <h5 class="mt-1">$3200 <span class="text-muted text-decoration-line-through fs-13">$5400</span> <span class="text-success fw-semibold fs-14">40% off today</span></h5>
                                                            <div class="mb-0 text-warning">
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star-half-o text-warning"></i>
                                                                <i class="fa fa-star-o text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success">SALE!</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="float-end">
                                            <ul class="pagination mb-0">
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
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
