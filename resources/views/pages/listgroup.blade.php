
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">List Group</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List Group</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Active List item</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="list-group-item active">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List item with avatar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm rounded-circle">
                                                            <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                        </span>
                                                        <div class="ms-2 fs-13 fw-semibold">
                                                            Cras justo odio
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm rounded-pill bg-info">D</span>
                                                        <div class="ms-2 fs-13 fw-semibold">
                                                            Dapibus ac facilisis in
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm rounded-circle">
                                                            <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                        </span>
                                                        <div class="ms-2 fs-13 fw-semibold">
                                                            Morbi leo risus
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm rounded-circle">
                                                            <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                        </span>
                                                        <div class="ms-2 fs-13 fw-semibold">
                                                            Porta ac consectetur ac
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-sm rounded-pill bg-danger-transparent">V</span>
                                                        <div class="ms-2 fs-13 fw-semibold">
                                                            Vestibulum at eros
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List item with Links</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                    Cras justo odio
                                                    <span class="badgetext badge bg-primary-transparent rounded-pill">20</span>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                    Dapibus ac facilisis in
                                                    <span class="badgetext badge bg-danger-transparent rounded-pill">15</span>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                    Morbi leo risus
                                                    <span class="badgetext badge bg-success-transparent rounded-pill">10</span>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                    Porta ac consectetur ac
                                                    <span class="badgetext badge bg-warning-transparent rounded-pill">8</span>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                    Vestibulum at eros
                                                    <span class="badgetext badge bg-info-transparent rounded-pill">1</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Flush List item</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <i class="fe fe-wifi d-inline-flex text-primary me-2" aria-hidden="true"></i>
                                                        WI-FI
                                                    </span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <i class="fe fe-bluetooth d-inline-flex text-primary me-2" aria-hidden="true"></i>
                                                        Bluetooth
                                                    </span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1">
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <i class="fe fe-map-pin d-inline-flex text-primary me-2" aria-hidden="true"></i>
                                                        Location
                                                    </span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <i class="fe fe-radio d-inline-flex text-primary me-2" aria-hidden="true"></i>
                                                        Hotspot
                                                    </span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <i class="fe fe-bell-off d-inline-flex text-primary me-2" aria-hidden="true"></i>
                                                        Do Not Disturb
                                                    </span>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                                                    </div>
                                                </li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disabled List item</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="list-group-item disabled">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sub Headings</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                    <div class="fw-bold">List Group Item Heading</div>
                                                    <p class="mb-0 text-muted">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    </div>
                                                    <span class="badge bg-info rounded-pill">14</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                    <div class="fw-bold">List Group Item Heading</div>
                                                    <p class="mb-0 text-muted">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    </div>
                                                    <span class="badge bg-secondary rounded-pill">14</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                    <div class="fw-bold">List Group Item Heading</div>
                                                    <p class="mb-0 text-muted">Donec id elit non mi porta gravida at eget metus.</p>
                                                    </div>
                                                    <span class="badge bg-success rounded-pill">14</span>
                                                </li>
                                                </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Contextual classes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="list-group-item">A simple default list group item</li>

                                                <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                                                <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                                                <li class="list-group-item list-group-item-success">A simple success list group item</li>
                                                <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                                                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Contextual classes with hover</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>

                                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                                                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                                                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                                                <a href="#" class="list-group-item list-group-item-action list-group-item-info active">A simple info list group item</a>
                                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                                                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Choose Your Product</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customCheck1" type="checkbox" checked>
                                                        <label class="cursor-pointer d-block custom-control-label" for="customCheck1">
                                                            <span class="mb-0 d-block">Flower Pot for Home Decor</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customCheck1"><span class="avatar avatar-lg avatar-radius"><img src="{{asset('build/assets/images/products/3.jpg')}}" alt="" class="avatar-radius"></span></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customCheck2" type="checkbox">
                                                        <label class="cursor-pointer d-block custom-control-label" for="customCheck2">
                                                            <span class="mb-0 d-block">Light pink nail polish</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customCheck2"><span class="avatar avatar-lg avatar-radius"><img src="{{asset('build/assets/images/products/6.jpg')}}" alt="" class="avatar-radius"></span></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customCheck3" type="checkbox" checked>
                                                        <label class="cursor-pointer d-block custom-control-label" for="customCheck3">
                                                            <span class="mb-0 d-block">Candy Pure Rose Water</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customCheck3"><span class="avatar avatar-lg avatar-radius"><img src="{{asset('build/assets/images/products/7.jpg')}}" alt="" class="avatar-radius"></span></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customCheck4" type="checkbox">
                                                        <label class="cursor-pointer d-block custom-control-label" for="customCheck4">
                                                            <span class="mb-0 d-block">White Tshirt for Men</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customCheck4"><span class="avatar avatar-lg avatar-radius"><img src="{{asset('build/assets/images/products/8.jpg')}}" alt="" class="avatar-radius"></span></label>
                                                </li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Choose Your Payment Option</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="payment-method">
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" name="list-radio" id="customRadio1" type="radio">
                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio1">
                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customRadio1"><img src="{{asset('build/assets/images/payments/bitcoin-dark.svg')}}" alt=""  class="br-5"></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" name="list-radio" id="customRadio2" type="radio" checked>
                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio2">
                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customRadio2"><img src="{{asset('build/assets/images/payments/amazon-dark.svg')}}" alt=""  class="br-5"></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" name="list-radio" id="customRadio3" type="radio">
                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio3">
                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customRadio3"><img src="{{asset('build/assets/images/payments/discover-dark.svg')}}" alt=""  class="br-5"></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" name="list-radio" id="customRadio4" type="radio">
                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio4">
                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customRadio4"><img src="{{asset('build/assets/images/payments/sepa-dark.svg')}}" alt=""  class="br-5"></label>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" name="list-radio" id="customRadio5" type="radio">
                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio5">
                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span>
                                                            <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label" for="customRadio5"><img src="{{asset('build/assets/images/payments/paymill-dark.svg')}}" alt=""  class="br-5"></label>
                                                </li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center justify-content-between border-bottom">
                                        <h6 class="card-title">Timeline</h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="mb-0">
                                            <li class="list-item activity-avatar-before info mb-4">
                                                <div class="d-flex">
                                                    <div class="avatar p-1 avatar-md rounded-circle bg-info-transparent min-w-fit-content">
                                                        <span class="avatar avatar-sm rounded-circle activity-avatar bg-info min-w-fit-content">
                                                            <span class="fs-14"><i class="bi bi-briefcase"></i></span>
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Nile Robetz mentioned a jogh in post</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Uploaded a new post</small>
                                                        <span class="clearfix"></span>
                                                        <a href="javascript:void(0);" class="text-primary fw-normal fs-13"><i class="bi bi-arrow-right"></i> View Details</a>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-muted fs-12 ms-2"><i class="bi bi-clock"></i> 11:17 am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-item activity-avatar-before danger mb-4">
                                                <div class="d-flex">
                                                    <div class="avatar p-1 avatar-md rounded-circle bg-danger-transparent min-w-fit-content">
                                                        <span class="avatar avatar-sm rounded-circle activity-avatar bg-danger min-w-fit-content">
                                                            <span class="fs-14"><i class="bi bi-brightness-high"></i></span>
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Always look on the bright side of life</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Look at the Life</small>
                                                        <span class="clearfix"></span>
                                                        <a href="javascript:void(0);" class="text-primary fw-normal fs-13"><i class="bi bi-arrow-right"></i> View Details</a>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-muted fs-12 ms-2"><i class="bi bi-clock"></i> 08:19 am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-item activity-avatar-before success mb-4">
                                                <div class="d-flex">
                                                    <div class="avatar p-1 avatar-md rounded-circle bg-success-transparent min-w-fit-content">
                                                        <span class="avatar avatar-sm rounded-circle activity-avatar bg-success min-w-fit-content">
                                                            <span class="fs-14"><i class="bi bi-peace"></i></span>
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Peace on earth a wonderful widh but no way</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Wonderful earth gives a peace</small>
                                                        <span class="clearfix"></span>
                                                        <a href="javascript:void(0);" class="text-primary fw-normal fs-13"><i class="bi bi-arrow-right"></i> View Details</a>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-muted fs-12 ms-2"><i class="bi bi-clock"></i> 10:43 am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-item activity-avatar-before warning mb-4 overflow-hidden">
                                                <div class="d-flex">
                                                    <div class="avatar p-1 avatar-md rounded-circle bg-warning-transparent box-shadow-warning min-w-fit-content">
                                                        <span class="avatar avatar-sm rounded-circle activity-avatar bg-warning min-w-fit-content">
                                                            <span class="fs-14"><i class="bi bi-clock-history"></i></span>
                                                        </span>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">A brief history of creation</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Create your own history</small>
                                                        <span class="clearfix"></span>
                                                        <a href="javascript:void(0);" class="text-primary fw-normal fs-13"><i class="bi bi-arrow-right"></i> View Details</a>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="text-muted fs-12 ms-2"><i class="bi bi-clock"></i> 07:27 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSEDE -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Order list</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="listorder">Cras justo odio</li>
                                                <li class="listorder">Dapibus ac facilisis in</li>
                                                <li class="listorder">Morbi leo risus</li>
                                                <li class="listorder">Porta ac consectetur ac</li>
                                                <li class="listorder">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Unorder list</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="list-group">
                                                <li class="listunorder">Cras justo odio</li>
                                                <li class="listunorder">Dapibus ac facilisis in</li>
                                                <li class="listunorder">Morbi leo risus</li>
                                                <li class="listunorder">Porta ac consectetur ac</li>
                                                <li class="listunorder">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Horizontal list</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <ul class="mb-1 list-group list-group-horizontal">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                </ul>
                                                <ul class="mb-1 list-group list-group-horizontal-sm">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                </ul>
                                                <ul class="mb-1 list-group list-group-horizontal-md">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                </ul>
                                                <ul class="mb-1 list-group list-group-horizontal-lg">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                </ul>
                                                <ul class="mb-1 list-group list-group-horizontal-xl">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-5 CLOSED -->

                        <!-- ROW-6 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List Group With Custom content</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="list-group">
                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start active">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="op-8">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="op-8">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="op-8">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="op-8">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="op-8">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="op-8">Donec id elit non mi porta.</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List Group With Disabled Custom content</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="list-group">
                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">List group item heading</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-6 CLOSED -->

                        <!-- ROW-7 OPEN-->
                        <div class="row">
                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Checkboxes List Style</h3>
                                    </div>
                                    <div class="card-body px-5">
                                        <ul class="list-group lg-alt">
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" name="checkbox1" type="checkbox" id="checkbox1">
                                                <label class="cform-check-label" for="checkbox1">
                                                    <span class="mb-0 d-block">Women's Clothing</span>
                                                    <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                </label>
                                                <ul>
                                                <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" id="subcheckbox1-1">
                                                    <label class="form-check-label" for="subcheckbox1-1">Western Wear</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" id="subcheckbox1-2">
                                                    <label class="form-check-label" for="subcheckbox1-2">Party Wear</label>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" name="checkbox2" type="checkbox" value="" id="checkbox2">
                                                <label class="form-check-label" for="checkbox2">
                                                <span class="mb-0 d-block">Accessories</span>
                                                <span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span></label>
                                                <ul>
                                                <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="" id="subcheckbox2-1">
                                                    <label class="form-check-label" for="subcheckbox2-1">Watches</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="" id="subcheckbox2-2">
                                                    <label class="form-check-label" for="subcheckbox2-2">Shoes</label>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List Scroll</h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-scroll">
                                            <li class="list-group-item br-ts-5 br-te-5">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                    </span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Morbi leo risus</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i> Online</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-pill bg-info">D</span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Dapibus ac facilisis in</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                    </span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Morbi leo risus</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                    </span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Porta ac consectetur ac</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-pill bg-danger-transparent">V</span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Vestibulum at eros</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                    </span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Cras justo odio</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-pill bg-info">D</span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Dapibus ac facilisis in</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                    </span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Morbi leo risus</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                    </span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Porta ac consectetur ac</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item br-be-5 br-bs-5">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md rounded-pill bg-danger-transparent">V</span>
                                                    <div class="ms-3">
                                                        <p class="mb-0 fs-14">Vestibulum at eros</p>
                                                        <span class="clearfix"></span>
                                                        <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Paragraph with Order List</h3>
                                    </div>
                                    <div class="card-body px-5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, (injected humour and the like).</p>
                                        <ol class="order-list">
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                        </ol>
                                        <p>Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                            like).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-7 CLOSED -->

                        <!-- ROW-8 OPEN-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Unorder List Style</h3>
                                    </div>
                                    <div class="card-body px-5">
                                        <ul class="list-style-1">
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                            <li>Nulla volutpat aliquam velit
                                                <ul>
                                                    <li>Phasellus iaculis neque</li>
                                                    <li>Purus sodales ultricies</li>
                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                    <li>Ac tristique libero volutpat at</li>
                                                </ul>
                                            </li>
                                            <li>Faucibus porta lacus fringilla vel</li>
                                            <li>Aenean sit amet erat nunc</li>
                                            <li>Eget porttitor lorem</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Order list</h3>
                                    </div>
                                    <div class="card-body px-5">
                                        <ol class="order-list">
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                            <li>Nulla volutpat aliquam velit
                                                <ol class="order-list">
                                                    <li>Phasellus iaculis neque</li>
                                                    <li>Purus sodales ultricies</li>
                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                    <li>Ac tristique libero volutpat at</li>
                                                </ol>
                                            </li>
                                            <li>Faucibus porta lacus fringilla vel</li>
                                            <li>Aenean sit amet erat nunc</li>
                                            <li>Eget porttitor lorem</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-8 CLOSED-->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
