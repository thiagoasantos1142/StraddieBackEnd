
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Checkout</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Shipping Details</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row p-5">
                                            <div class="col-xl-6 mb-3">
                                                <p class="mb-2">Full Name :</p>
                                                <input type="text" class="form-control" placeholder="Enter your name">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <p class="mb-2">Email :</p>
                                                <input type="text" class="form-control" placeholder="Enter your Email" >
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <p class="mb-2">Contact No :</p>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your contact number" >
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <p class="mb-2">Address :</p>
                                                <input type="text" class="form-control" placeholder="Enter your adress">
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label">ZIP Code :</label>
                                                    <select class="form-control" name="zip-code" id="zip-code">
                                                        <option value="">Select ZIP Code</option>
                                                        <option value="br">551512</option>
                                                        <option value="cz">611121</option>
                                                        <option value="de">212121</option>
                                                        <option value="pl" selected>112230</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label">City :</label>
                                                    <select class="form-control" name="city" id="city">
                                                        <option value="">Select city</option>
                                                        <option value="br">Brazil</option>
                                                        <option value="cz">Czech Republic</option>
                                                        <option value="de">Germany</option>
                                                        <option value="pl" selected>Poland</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div>
                                                    <label class="form-label">State :</label>
                                                    <select class="form-control" name="state" id="state">
                                                        <option value="">Select state</option>
                                                        <option value="br" selected>Brazil</option>
                                                        <option value="cz">Czech Republic</option>
                                                        <option value="de">Germany</option>
                                                        <option value="pl">Poland</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div>
                                                    <label class="form-label">Country :</label>
                                                    <select class="form-control" name="country" id="country">
                                                        <option value="">Select Country</option>
                                                        <option value="br">Brazil</option>
                                                        <option value="cz">Czech Republic</option>
                                                        <option value="de">Germany</option>
                                                        <option value="pl" selected>Poland</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-1">
                                            <div class="card-header">
                                                <div class="card-title">Payment Info</div>
                                            </div>
                                            <div class="card-pay mt-0 p-5">
                                                <ul class="tabs-menu nav">
                                                    <li class=""><a href="#tab20" class="payment-icon d-flex justify-content-center align-items-center gap-2 active"
                                                            data-bs-toggle="tab"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" enable-background="new 0 0 24 24"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M19.5,5h-15C3.119812,5.0012817,2.0012817,6.119812,2,7.5v10c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-10C21.9987183,6.119812,20.880188,5.0012817,19.5,5z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V11h18V17.5z M21,10H3V7.5C3.0009155,6.671936,3.671936,6.0009155,4.5,6h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V10z M6.5,15h4c0.276123,0,0.5-0.223877,0.5-0.5S10.776123,14,10.5,14h-4C6.223877,14,6,14.223877,6,14.5S6.223877,15,6.5,15z" />
                                                            </svg> Credit Card</a></li>
                                                    <li><a href="#tab21" data-bs-toggle="tab"
                                                            class="payment-icon d-flex justify-content-center align-items-center gap-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" enable-background="new 0 0 24 24"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M19.6542969,7.5869141c-0.2009888-0.2196655-0.4307251-0.4111938-0.6829224-0.569397c0.2329712-1.2444458-0.1186523-2.5269165-0.9537964-3.4784546c-0.9375-1.0605469-2.5751953-1.5986328-4.8681641-1.5986328H7.2646484c-0.6590576,0.0014038-1.2197266,0.480957-1.3232422,1.1318359l-2.453125,15.5898438c-0.0911865,0.5485229,0.279541,1.0670776,0.828064,1.1582642c0.0548706,0.0090942,0.1104126,0.0136719,0.1660767,0.0136108h3.0460815l-0.1593628,1.0136719c-0.0817261,0.5153809,0.2698364,0.9993896,0.7852173,1.0811157c0.0480957,0.0076294,0.0967407,0.0115356,0.1454468,0.0116577h3.0634766c0.6047363,0.0022583,1.12146-0.4353638,1.218689-1.0322266l0.6065063-3.8271484l0.0409546-0.2167969c0.0169067-0.1159668,0.116272-0.2019653,0.2333984-0.2021484h0.4580078c3.6289062,0,5.8027344-1.7197266,6.4619141-5.1123047C20.7811279,10.1879883,20.5109253,8.7180176,19.6542969,7.5869141z M7.8912964,17.5264893l-0.2067261,1.3065186l-3.2089844-0.0107422L6.9296875,3.2236328c0.0270996-0.1637573,0.1690063-0.2837524,0.335022-0.2832031h5.8847656c1.9941406,0,3.3798828,0.4238281,4.1162109,1.2587891c0.7022095,0.8255005,0.9553833,1.942627,0.6777344,2.9902344l0.0020752,0.0003052l-0.0001221,0.0006714c-0.0166016,0.1054688-0.0351562,0.2138672-0.0566406,0.3251953l-0.0010376,0.0029297c-0.6494141,3.3476562-2.7207031,4.9755859-6.3330078,4.9755859H9.8271484c-0.661499-0.0014648-1.2243652,0.4816284-1.3232422,1.1357422L7.8912964,17.5264893z M19.4003906,11.359375c-0.5625,2.8955078-2.3544922,4.3027344-5.4794922,4.3027344h-0.4580078c-0.6051636-0.0033569-1.1224976,0.4347534-1.21875,1.0322266l-0.6152344,3.8729858l-0.0322266,0.1708984c-0.017334,0.1160889-0.1170044,0.2020874-0.234375,0.2021484l-3.0048828,0.0644531l0.6048584-3.8487549l0.5338135-3.3699951l-0.0040894-0.0006104l0.0001831-0.0012817c0.024353-0.1663208,0.1668701-0.2897339,0.335022-0.289978h1.7275391c3.9599609,0,6.3896484-1.8076172,7.2275391-5.375c0.0419922,0.0410156,0.0820312,0.0830078,0.1201172,0.1259766C19.5513916,9.1461182,19.7360229,10.3009644,19.4003906,11.359375z" />
                                                            </svg> Paypal</a></li>
                                                    <li><a href="#tab22" data-bs-toggle="tab"
                                                            class="payment-icon d-flex justify-content-center align-items-center gap-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" enable-background="new 0 0 24 24"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M21.6728516,4.53125l-9.5-3.5c-0.1115723-0.0410156-0.2341309-0.0410156-0.3457031,0l-9.5,3.5C2.1305542,4.6034546,1.999939,4.7905884,2,5v3.5C1.9998169,8.776001,2.2234497,8.9998169,2.4993896,9C2.4996338,9,2.4998169,9,2.5,9H4v8.0505371C2.836792,17.2893677,2.0013428,18.3125,2,19.5v2c-0.0001831,0.276001,0.2234497,0.4998169,0.4993896,0.5C2.4996338,22,2.4998169,22,2.5,22h19c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507c0-0.0001831,0-0.0003662,0-0.0005493v-2c-0.0013428-1.1875-0.836792-2.2106323-2-2.4494629V9h1.5c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507C22,8.5003662,22,8.5001831,22,8.5V5C22.000061,4.7905884,21.8694458,4.6034546,21.6728516,4.53125z M21,19.5V21H3v-1.5c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5h15C20.328064,18.0009155,20.9990845,18.671936,21,19.5z M5,17V9h3v8H5z M9,17V9h6v8H9z M16,17V9h3v8H16z M21,8H3V5.3486328l9-3.3154297l9,3.3154297V8z" />
                                                            </svg> Bank Transfer</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active show" id="tab20">
                                                        <div class="form-group">
                                                            <label class="form-label">Name On Card</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Full Name...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Credit Card Number</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Card Number...">
                                                                <span class="input-group-text input-text-color">
                                                                    <i class="fa fa-cc-visa text-muted"></i>
                                                                    &nbsp; <i
                                                                        class="fa fa-cc-amex text-muted"></i>
                                                                    &nbsp;
                                                                    <i
                                                                        class="fa fa-cc-mastercard text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <label class="form-label">Expiration of Card</label>
                                                                    <div class="input-group">
                                                                        <input type="number"
                                                                            class="form-control"
                                                                            placeholder="MM" name="Month">
                                                                        <input type="number"
                                                                            class="form-control"
                                                                            placeholder="YY" name="Year">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">CVV <i
                                                                            class="fa fa-question-circle"></i></label>
                                                                    <input type="number" class="form-control"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <a href="javascript:void(0);"
                                                            class="btn btn-primary float-end">
                                                        </a> -->
                                                    </div>
                                                    <div class="tab-pane" id="tab21">
                                                        <p>Paypal is easiest way to pay online</p>
                                                        <p><a href="javascript:void(0);"
                                                                class="btn btn-primary"><i
                                                                    class="fa fa-paypal"></i> Log in my
                                                                Paypal</a></p>
                                                        <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam
                                                            voluptatem quia voluptas sit aspernatur aut odit aut
                                                            fugit, sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt. </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab22">
                                                        <p class="fw-semibold">Bank account details</p>
                                                        <dl class="card-text">
                                                            <dt>BANK: </dt>
                                                            <dd> BANK OF DELTA 54SS</dd>
                                                        </dl>
                                                        <dl class="card-text">
                                                            <dt>Account Number: </dt>
                                                            <dd> 67542897653214</dd>
                                                        </dl>
                                                        <dl class="card-text">
                                                            <dt>IBAN: </dt>
                                                            <dd>543218769</dd>
                                                        </dl>
                                                        <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam
                                                            voluptatem quia voluptas sit aspernatur aut odit aut
                                                            fugit, sed quia consequuntur magni dolores eos qui
                                                            ratione voluptatem sequi nesciunt. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <span class="btn float-end btn-primary"  data-bs-toggle="modal" data-bs-target="#largemodal">Place Order</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Order Summary</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="mb-0 px-2 border-bottom">
                                            <li class="p-3">
                                                <div class="d-flex align-items-start cart-dropdown-item">
                                                    <img src="{{asset('build/assets/images/products/8.jpg')}}" alt="img" class="avatar avatar-md br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                                            <div class="mb-0 fs-14 fw-semibold">
                                                                <a href="{{url('cart')}}" class="text-dark">White Tshirt</a>
                                                            </div>
                                                            <div>
                                                                <span class="fs-15 mb-1">$1,299.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                            <ul class="header-product-item">
                                                                <li>Quantity: 1</li>
                                                                <li>Size: XL</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="p-3">
                                                <div class="d-flex align-items-start cart-dropdown-item">
                                                    <img src="{{asset('build/assets/images/products/2.jpg')}}" alt="img" class="avatar avatar-md br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                                            <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                <a href="{{url('cart')}}" class="text-dark">Canvas Shoes</a>
                                                            </div>
                                                            <div>
                                                                <span class="fs-15 mb-1">$179.29</span>
                                                            </div>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                            <ul class="header-product-item">
                                                                <li>Quantity: 2</li>
                                                                <li>Size: L</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="p-3">
                                                <div class="d-flex align-items-start cart-dropdown-item">
                                                    <img src="{{asset('build/assets/images/products/1.jpg')}}" alt="img" class="avatar avatar-md br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                                            <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                <a href="{{url('cart')}}" class="text-dark">Photo Frame</a>
                                                            </div>
                                                            <div>
                                                                <span class="fs-15 mb-1">$29.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                            <ul class="header-product-item">
                                                                <li>Quantity: 5</li>
                                                                <li>Size: M</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="p-3">
                                                <div class="d-flex align-items-start cart-dropdown-item">
                                                    <img src="{{asset('build/assets/images/products/5.jpg')}}" alt="img" class="avatar avatar-md br-5 me-3">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-start justify-content-between mb-0">
                                                            <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                <a href="{{url('cart')}}" class="text-dark">Kikon Camera</a>
                                                            </div>
                                                            <div>
                                                                <span class="fs-15 mb-1">$4,999.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                            <ul class="header-product-item">
                                                                <li>Quantity: 2</li>
                                                                <li>Size: XXL</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="rounded-2 px-5 py-4">
                                            <div class="d-flex justify-content-between">
                                                <p class="fs-15 fw-bold mb-0">Sub Total</p>
                                                <p class="fw-bold mb-0">$25,012</p>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="fs-15 mb-0">Shipping charges</p>
                                                <p class="mb-0 text-success fw-bold">0 (Free)</p>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="fs-15 mb-0">Tax</p>
                                                <p class="mb-0 text-danger fw-bold">$40</p>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="fs-15 mb-0">Coupon Discount</p>
                                                <p class="mb-0 text-success fw-bold">$15</p>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <h6 class="text-primary">Total Bill</h6>
                                                <h6>$26,325</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')

                    <!-- order-placed Modal -->
                    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center order-placed-modal">
                                    <h6 class="text-primary mt-4">Your Order Placed Successfully...!!</h6>
                                    <img src="{{asset('build/assets/images/shop/17.gif')}}" alt="img">
                                    <p class="fs-15 mb-1">You can track your order by using this order i'd <span class="fw-bold">#11258846</span> from <span class="fw-bold text-success text-decoration-underline">Vexel Ecommerce</span></p>
                                    <p>Thank you for shopping with us!!</p>
                                    <a href="{{url('shop')}}" class="btn btn-primary my-3"><i class="fe fe-shopping-cart me-2 d-inline-flex"></i>Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- order-placed Modal -->

@endsection

@section('scripts')
	
	    <!-- Internal Check-out JS -->
        @vite('resources/assets/js/Check-out.js')

@endsection
