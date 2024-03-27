
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Offcanvas</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Offcanvas</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <a class="btn btn-primary off-canvas" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                                    Link with href
                                                </a>
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                                    Button with data-bs-target
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">BackDrop Offcanvas</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                                    Enable body scrolling
                                                </button>
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Placement Offcanvas</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
                                                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Offcanvas with Icon & Avatar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="row gy-3">
                                                <div class="col-lg-4">
                                                    <div class="btn-list">
                                                        <button class="btn btn-success btn-icon off-canvas"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fe fe-menu"></i></button>
                                                        <button class="btn btn-info btn-icon off-canvas"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fe fe-bell"></i></button>
                                                        <button class="btn btn-info btn-icon btn-danger off-canvas"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fe fe-shopping-cart"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="avatar-list">
                                                        <a href="#" class="avatar rounded-pill avatar-md bg-info-transparent off-canvas"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fe fe-menu"></i></a>
                                                        <a href="#" class="avatar rounded-pill avatar-md bg-danger-transparent off-canvas"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fe fe-bell"></i></a>
                                                        <a href="#" class="avatar rounded-pill avatar-md bg-success-transparent off-canvas"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fe fe-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="avatar-list">
                                                        <a href="#" class="avatar rounded-pill avatar-md off-canvas cover-image"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"><span class="avatar-status bg-primary"></span></a>
                                                        <a href="#" class="avatar rounded-pill avatar-md off-canvas cover-image"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-danger"></span></a>
                                                        <a href="#" class="avatar rounded-pill avatar-md off-canvas cover-image"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"><span class="avatar-status bg-warning"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')

                    <!-- Default Offcanvas-->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h6 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Offcanvas</h6>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                            </div>
                            <div class="dropdown mt-3">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                        Dropdown button
                                    </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/Default Offcanvas-->

                    <!--Scroll offcanvas-->
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h6 class="offcanvas-title fw-bold" id="offcanvasScrollingLabel">Colored with scrolling</h6>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>

                        <div class="offcanvas-body">
                            <div>
                                <h6 class="fw-bold mb-3">Settings</h6>
                                <ul class="list-group list-group-flush border">
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-wifi text-primary me-2" aria-hidden="true"></i>
                                            WI-FI
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bluetooth text-primary me-2" aria-hidden="true"></i>
                                            Bluetooth
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch">
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-map-pin text-primary me-2" aria-hidden="true"></i>
                                            Location
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"  checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-radio text-primary me-2" aria-hidden="true"></i>
                                            Hotspot
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"  checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bell-off text-primary me-2" aria-hidden="true"></i>
                                            Do Not Disturb
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" >
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-4">
                                <h6 class="mb-3 fw-bold">Online Users</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                    <!--/Scroll offcanvas-->

                    <!--Withbackdrop offcanvas-->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                        <div class="offcanvas-header">
                            <h6 class="offcanvas-title fw-bold" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h6>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>

                        <div class="offcanvas-body">
                            <div>
                                <h6 class="mb-3 fw-bold">Settings</h6>
                                <ul class="list-group list-group-flush border">
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-wifi text-primary me-2" aria-hidden="true"></i>
                                            WI-FI
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bluetooth text-primary me-2" aria-hidden="true"></i>
                                            Bluetooth
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch">
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-map-pin text-primary me-2" aria-hidden="true"></i>
                                            Location
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-radio text-primary me-2" aria-hidden="true"></i>
                                            Hotspot
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bell-off text-primary me-2" aria-hidden="true"></i>
                                            Do Not Disturb
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" >
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fw-bold">Online Users</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                    <!--/Withbackdrop offcanvas-->

                    <!--Withbothoptions offcanvas-->
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <h6 class="offcanvas-title fw-bold" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h6>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <h6 class="fw-bold mb-3">Settings</h6>
                                <ul class="list-group list-group-flush border">
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-wifi text-primary me-2" aria-hidden="true"></i>
                                            WI-FI
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bluetooth text-primary me-2" aria-hidden="true"></i>
                                            Bluetooth
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch">
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-map-pin text-primary me-2" aria-hidden="true"></i>
                                            Location
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-radio text-primary me-2" aria-hidden="true"></i>
                                            Hotspot
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"  checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bell-off text-primary me-2" aria-hidden="true"></i>
                                            Do Not Disturb
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" >
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fw-bold">Online Users</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                    <!--/Withbothoptions offcanvas-->

                    <!--Top Offcanvas-->
                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasTopLabel" class="fw-bold">Offcanvas top</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/19.jpg')}}" ></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-danger me-1 mb-1 mt-1">Lifestyle</span>
                                            <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/22.jpg')}}"></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-primary me-1 mb-1 mt-1">Business</span>
                                            <h4><a href="{{url('blog-details')}}">Voluptatem quia...</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/12.jpg')}}"></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-secondary me-1 mb-1 mt-1">Travel</span>
                                            <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/25.jpg')}}"></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-success me-1 mb-1 mt-1">Meeting</span>
                                            <h4><a href="{{url('blog-details')}}">Voluptatem quia...</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Top Offcanvas-->

                    <!--Right Offcanvas-->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                        <div class="offcanvas-header">
                            <h6 class="fw-bold offcanvas-title">Offcanvas right</h6>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <h6 class="mb-3 fw-bold">Settings</h6>
                                <ul class="list-group list-group-flush border">
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-wifi text-primary me-2" aria-hidden="true"></i>
                                            WI-FI
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bluetooth text-primary me-2" aria-hidden="true"></i>
                                            Bluetooth
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" >
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-map-pin text-primary me-2" aria-hidden="true"></i>
                                            Location
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"  checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-radio text-primary me-2" aria-hidden="true"></i>
                                            Hotspot
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"  checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center pe-2">
                                        <span class="d-inline-flex align-items-center">
                                            <i class="fe fe-bell-off text-primary me-2" aria-hidden="true"></i>
                                            Do Not Disturb
                                        </span>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fw-bold">Online Users</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap">
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
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center flex-wrap">
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
                    <!--/Right Offcanvas-->

                    <!--Bottom Offcanvas-->
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/19.jpg')}}" ></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-danger me-1 mb-1 mt-1">Lifestyle</span>
                                            <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/22.jpg')}}"></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-primary me-1 mb-1 mt-1">Business</span>
                                            <h4><a href="{{url('blog-details')}}">Voluptatem quia...</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/12.jpg')}}"></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-secondary me-1 mb-1 mt-1">Travel</span>
                                            <h4><a href="{{url('blog-details')}}">Generator on the Internet..</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex overflow-visible">
                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/25.jpg')}}"></a>
                                        <div class="ps-3 flex-column">
                                            <span class="badge bg-success me-1 mb-1 mt-1">Meeting</span>
                                            <h4><a href="{{url('blog-details')}}">Voluptatem quia...</a></h4>
                                            <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Bottom Offcanvas-->

@endsection

@section('scripts')
	
	

@endsection
