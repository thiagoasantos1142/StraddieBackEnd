
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Cards</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cards</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <img src="{{asset('build/assets/images/media/8.jpg')}}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                        <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <img src="{{asset('build/assets/images/users/2.jpg')}}" alt="img" width="50" height="50" class="br-5 me-3">
                                            <div>
                                                <h6 class="fw-600 mt-2 mb-0">Laura Norda</h6>
                                                <p class="text-muted fs-13">Web Developer</p>
                                            </div>
                                        </div>
                                        <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Featured</div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fe fe-check-circle text-primary me-1 fs-13 d-inline-flex"></i>An item</li>
                                        <li class="list-group-item"><i class="fe fe-check-circle text-primary me-1 fs-13 d-inline-flex"></i>A second item</li>
                                        <li class="list-group-item"><i class="fe fe-check-circle text-primary me-1 fs-13 d-inline-flex"></i>A third item</li>
                                        <li class="list-group-item"><i class="fe fe-check-circle text-primary me-1 fs-13 d-inline-flex"></i>A Four item</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div  class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-3 text-muted">Card subtitle</h6>
                                        <img src="{{asset('build/assets/images/media/8.jpg')}}" class="card-img-top br-5" alt="img">
                                        <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                    </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <img src="{{asset('build/assets/images/media/10.jpg')}}" class="card-img-top br-5" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                    </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-xxl-6">
                                <h6 class="fw-600 mb-3">Using Grid Markup</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card p-3">
                                            <div class="card-body text-center">
                                                <img src="{{asset('build/assets/images/users/3.jpg')}}" alt="img" width="55" height="55" class="br-5 me-3">
                                                <h5 class="fw-600 mt-3">Mike Rowe-Soft</h5>
                                                <p class="card-text">Reprehenderit in voluptate velit esse cillum dolore eu fugia.</p>
                                                <button type="button" class="btn btn-primary rounded-pill"><i class="fe fe-check-circle me-1 d-inline-flex"></i>Completed!!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COL END -->
                                    <div class="col-md-4">
                                        <div class="card p-3">
                                            <div class="card-body text-center">
                                                <img src="{{asset('build/assets/images/users/4.jpg')}}" alt="img" width="55" height="55" class="br-5 me-3">
                                                <h5 class="fw-600 mt-3">Laura Norda</h5>
                                                <p class="card-text">Reprehenderit in voluptate velit esse cillum dolore eu fugia.</p>
                                                <button type="button" class="btn btn-primary rounded-pill"><i class="fe fe-check-circle me-1 d-inline-flex"></i>Completed!!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COL END -->
                                    <div class="col-md-4">
                                        <div class="card p-3">
                                            <div class="card-body text-center">
                                                <img src="{{asset('build/assets/images/users/5.jpg')}}" alt="img" width="55" height="55" class="br-5 me-3">
                                                <h5 class="fw-600 mt-3">Willie Makit</h5>
                                                <p class="card-text">Reprehenderit in voluptate velit esse cillum dolore eu fugia.</p>
                                                <button type="button" class="btn btn-primary rounded-pill"><i class="fe fe-check-circle me-1 d-inline-flex"></i>Completed!!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COL END -->
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <h6 class="fw-600 mb-3">Card Text Alignment</h6>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{asset('build/assets/images/media/files/02')}}.jpg" class="br-5 mb-3" alt="img">
                                                <h4 class="card-title">Design Tools</h4>
                                                <p>Some quick example</p>
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm rounded-circle bg-azure"><i class="bi bi-facebook lh-base"></i></span>
                                                    <span class="avatar avatar-sm rounded-circle bg-pink"><i class="bi bi-twitter lh-base"></i></span>
                                                    <span class="avatar avatar-sm rounded-circle bg-warning"><i class="bi bi-instagram lh-base"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <img src="{{asset('build/assets/images/media/files/05')}}.jpg" class="br-5 mb-3" alt="img">
                                                <h4 class="card-title">Design Tools</h4>
                                                <p>Some quick example</p>
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm rounded-circle bg-azure"><i class="bi bi-facebook lh-base"></i></span>
                                                    <span class="avatar avatar-sm rounded-circle bg-pink"><i class="bi bi-twitter lh-base"></i></span>
                                                    <span class="avatar avatar-sm rounded-circle bg-warning"><i class="bi bi-instagram lh-base"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body text-end">
                                                <img src="{{asset('build/assets/images/media/files/04')}}.jpg" class="br-5 mb-3" alt="img">
                                                <h4 class="card-title">Design Tools</h4>
                                                <p>Some quick example</p>
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-sm rounded-circle bg-azure"><i class="bi bi-facebook lh-base"></i></span>
                                                    <span class="avatar avatar-sm rounded-circle bg-pink"><i class="bi bi-twitter lh-base"></i></span>
                                                    <span class="avatar avatar-sm rounded-circle bg-warning"><i class="bi bi-instagram lh-base"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <h6 class="fw-600 mb-3">Card Headers & Footers</h6>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div>
                                            <h3 class="card-title">Tour Festival - USA</h3>
                                            <p class="mb-0 text-muted fs-13">Reprehenderit in voluptate</p>
                                        </div>
                                        <a href="javascript:void(0);" class="float-end text-muted" data-bs-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <a href="javascript:void(0);" class="dropdown-item">Another Action</a>
                                        <a href="javascript:void(0);" class="dropdown-item">Something elsehere</a>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <p>6 Members Going - 8 Pending</p>
                                        <div class="avatar-list">
                                            <span class="avatar rounded-circle cover-image mb-0" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                            <span class="avatar rounded-circle cover-image mb-0" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                            <span class="avatar rounded-circle cover-image mb-0" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"></span>
                                            <span class="avatar rounded-circle cover-image mb-0" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-block">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card custom-card">
                                    <div class="card-header border-bottom-0 pb-0">
                                        <div>
                                            <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                            <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                            <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                            <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                            <span class="text-black op-1"><i class="bi bi-star-fill"></i></span>
                                            <p class="d-block text-muted mb-0 fs-12 fw-semibold">1 year ago</p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3">
                                        <span class="badge bg-default text-primary mb-2">Marketing & Sales</span>
                                        <div class="fw-bold fs-16 mb-2">Sell your stock</div>
                                        Some quick example text to build on the card title and make up the bulk of the card's content
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <span class="fs-13"><i class="fe fe-calendar me-1"></i>1 Day ago</span>
                                            <div class="avatar-list avatar-list-stacked">
                                                <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                <span class="avatar avatar-sm rounded-circle bg-primary">+8</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-2 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/media/files/06')}}.jpg" class="br-5 mb-3" alt="img">
                                        <div class="d-flex">
                                            <img src="{{asset('build/assets/images/users/5.jpg')}}" alt="img" width="30" height="30" class="rounded-circle me-2">
                                            <div>
                                                <h6 class="fw-600 mb-0">James Graham</h6>
                                                <p class="fs-13 text-muted">Available for work</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-block">Portfolio</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <span class="avatar avatar-lg rounded-pill cover-image me-4" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}">
                                                <span class="rounded-pill avatar-icons bg-primary"><i class="fe fe-eye"></i></span>
                                            </span>
                                            <div>
                                                <h6 class="fw-600 mb-0">James Graham</h6>
                                                <p class="fs-13 text-muted mb-0">Manager</p>
                                                <div>
                                                    <span class="text-yellow"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-yellow"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-yellow"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-yellow"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-black op-1"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-muted">(57 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-list avatar-list-stacked me-3">
                                                <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" ></span>
                                                <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" ></span>
                                                <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                <span class="avatar avatar-sm rounded-circle bg-primary">+12</span>
                                            </div>
                                            <p class="fs-13 mb-0 text-muted">James Graham, John, Taylor and 12 more</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="avatar avatar-lg avatar-radius cover-image me-4 my-auto" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></div>
                                            <div class="w-100">
                                                <h6 class="fw-600">James Graham</h6>
                                                <div class="progress progress-sm progress-custom mt-4 progress-animate">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                        <div class="progress-bar-value bg-primary">75%</div>
                                                    </div>
                                                </div>
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
                            <div class="col-lg-6">
                                <h6 class="fw-600 mb-3">Using Utilities</h6>
                                <div class="row">
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card w-75">
                                            <div class="card-header">
                                                Width 75
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-primary">Button</a>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="card w-50">
                                            <div class="card-header">
                                                Width 50
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-primary">Button</a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="fw-600 mb-3">Navigation</h6>
                                <div class="row">
                                    <div class="col-xl-6 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="panel panel-primary">
                                                    <div class="tab-menu-heading tab-menu-heading-boxed">
                                                        <div class="tabs-menu-boxed">
                                                            <!-- Tabs -->
                                                            <ul class="nav panel-tabs fs-14">
                                                                <li><a href="#activetabs" class="active" data-bs-toggle="tab">Active</a></li>
                                                                <li><a href="#linktabs" data-bs-toggle="tab">Link</a></li>
                                                                <li><a class="disable" href="#disabletabs" data-bs-toggle="tab">Disabled</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body tabs-menu-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="activetabs">
                                                                <h5 class="card-title">Special title treatment 01</h5>
                                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                                            </div>
                                                            <div class="tab-pane" id="linktabs">
                                                                <h5 class="card-title">Special title treatment 02</h5>
                                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                                            </div>
                                                            <div class="tab-pane disabled" id="disabletabs"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-12">
                                        <div class="card card-headpills">
                                            <div class="card-header border-bottom">
                                                <ul class="nav nav-pills card-header-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#activepills">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#linkpills">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" data-bs-toggle="tab" href="#disablepills" tabindex="-1">Disabled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="activepills">
                                                        <h5 class="card-title">Special title treatment 01</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                    <div class="tab-pane" id="linkpills">
                                                        <h5 class="card-title">Special title treatment 02</h5>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                    <div class="tab-pane disabled" id="disablepills"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card overflow-hidden">
                                    <img src="{{asset('build/assets/images/media/8.jpg')}}" class="card-img-top" alt="img">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                    <img src="{{asset('build/assets/images/media/9.jpg')}}" class="card-img-bottom" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <img src="{{asset('build/assets/images/media/11.jpg')}}" class="card-img rounded-0" alt="img">
                                    <div class="card-footer">
                                        <p class="mb-0">Last updated 3 mins ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-5 CLOSED -->

                        <!-- ROW-6 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-4">
                                <div class="card bg-dark overlay-card overflow-auto">
                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" class="card-img" alt="...">
                                    <div class="card-img-overlay d-flex flex-column p-0">
                                        <div class="card-header">
                                            <div class="card-title tx-fixed-white">
                                                Image Overlays Are Awesome!
                                            </div>
                                        </div>
                                        <div class="card-body overflow-scroll">
                                            <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                            <div class="card-text">Last updated 3 mins ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card bg-dark overlay-card overflow-auto">
                                    <img src="{{asset('build/assets/images/media/4.jpg')}}" class="card-img" alt="...">
                                    <div class="card-img-overlay d-flex flex-column p-0 over-content-bottom overflow-scroll">
                                        <div class="card-body">
                                            <div class="card-text">
                                                Image Overlays Are Awesome!
                                            </div>
                                            <div class="card-text mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                            <div class="card-text">Last updated 3 mins ago</div>
                                        </div>
                                        <div class="card-footer tx-fixed-white">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card bg-dark overlay-card overflow-auto">
                                    <img src="{{asset('build/assets/images/media/5.jpg')}}" class="card-img" alt="...">
                                    <div class="card-img-overlay d-flex flex-column p-0 overflow-scroll">
                                        <div class="card-header">
                                            <div class="card-title tx-fixed-white">
                                                Image Overlays Are Awesome!
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</div>
                                        </div>
                                        <div class="card-footer tx-fixed-white">Last updated 3 mins ago</div>
                                    </div>
                                    </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-6 CLOSED -->

                        <!-- ROW-7 OPEN -->
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-header border-white3">
                                        <span class="avatar rounded-circle cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                        <div>
                                            <h4 class="card-title tx-fixed-white mb-1">Primary card title</h4>
                                            <p class="mb-0 op-8 tx-fixed-white fs-12">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text tx-fixed-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-4 col-xl-3">
                                <div class="card text-white bg-secondary">
                                    <div class="card-header border-white3">
                                        <span class="avatar rounded-circle cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                        <div>
                                            <h4 class="card-title tx-fixed-white mb-1">Secondary card title</h4>
                                            <p class="mb-0 op-8 tx-fixed-white fs-12">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text tx-fixed-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-4 col-xl-3">
                                <div class="card text-white bg-success">
                                    <div class="card-header border-white3">
                                        <span class="avatar rounded-circle cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"></span>
                                        <div>
                                            <h4 class="card-title mb-1 tx-fixed-white">Success card title</h4>
                                            <p class="mb-0 op-8 tx-fixed-white fs-12">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text tx-fixed-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-4 col-xl-3">
                                <div class="card text-white bg-info">
                                    <div class="card-header border-white3">
                                        <span class="avatar rounded-circle cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                        <div>
                                            <h4 class="card-title mb-1 tx-fixed-white">info card title</h4>
                                            <p class="mb-0 op-8 tx-fixed-white fs-12">Last updated 3 mins ago</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text tx-fixed-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-8  col-xl-6">
                                <div class="card">
                                    <div class="card-header flex-wrap">
                                        <h3 class="card-title">Panel with custom buttons</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Action 1</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-sm ms-2">Action 2</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-6  col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with search form</h3>
                                        <div class="card-options">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                                    <span class="input-group-btn ms-0">
                                                            <button class="btn btn-sm btn-primary" type="submit">
                                                                <span class="fe fe-search tx-fixed-white"></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-6  col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">fullscreen button</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0);" class="card-options-fullscreen" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with switch</h3>
                                        <div class="card-options">
                                            <label class="custom-switch m-0">
                                                    <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-6 col-xl-4">
                                <div class="card card-collapsed">
                                    <div class="card-header">
                                        <h3 class="card-title">Initial collapsed card</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-7 CLOSED -->

                        <!-- ROW-8 OPEN -->
                        <div class="row ">
                            <div class="col-md-12 col-xl-4">
                                <div class="card ">
                                    <div class="card-body text-start">
                                        <blockquote class="quote">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <small class="text-muted">
                                                        so awesome this title <cite title="Source Title">-magna aliqua</cite>
                                                    </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card ">
                                    <div class="card-body text-center">
                                        <blockquote class="quote">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <small class="text-muted">
                                                        so awesome this title <cite title="Source Title">-magna aliqua</cite>
                                                    </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card ">
                                    <div class="card-body text-end">
                                        <blockquote class="quote">
                                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <small class="text-muted">
                                                        so awesome this title <cite title="Source Title">-magna aliqua</cite>
                                                    </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class=" col-xl-4 col-md-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Card With List</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="visitor-list">
                                            <div class="p-3 media m-0 mt-0 border-bottom">
                                                <img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('build/assets/images/users/18.jpg')}}">
                                                <div class="media-body">
                                                    <a href="javascript:void(0);" class="text-default fw-semibold">John Paige</a>
                                                    <p class="text-muted mb-0">Uploaded new invoices for RedBus</p>
                                                </div>
                                            </div>
                                            <div class="p-3 media border-bottom">
                                                <img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('build/assets/images/users/20.jpg')}}">
                                                <div class="media-body">
                                                    <a href="javascript:void(0);" class="text-default fw-semibold">Lillian Quinn</a>
                                                    <p class="text-muted mb-0">Created new work flow for the current</p>
                                                </div>
                                            </div>
                                            <div class="p-3 media">
                                                <img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('build/assets/images/users/18.jpg')}}">
                                                <div class="media-body">
                                                    <a href="javascript:void(0);" class="text-default fw-semibold">Irene Harris</a>
                                                    <p class="text-muted mb-0">Submitted the project schedule to the manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Card With Collapse Button
                                        </div>
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="ri-arrow-down-s-line fs-18 collapse-open"></i>
                                            <i class="ri-arrow-up-s-line collapse-close fs-18"></i>
                                        </a>
                                    </div>
                                    <div class="collapse show" id="collapseExample">
                                        <div class="card-body">
                                            <h6 class="card-text fw-semibold">Collapsible Card</h6>
                                            <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-4 col-md-12">
                                <div class="card d-flex m-b-20">
                                    <div class="card-header">
                                        <h3 class="card-title">Card with Toolbar</h3>
                                        <div class="card-options">
                                            <a class="text-gray" href="javascript:void(0);">
                                                <i class="mdi mdi-refresh"></i>
                                            </a>
                                            <a class="text-gray" href="javascript:void(0);">
                                                <i class="mdi mdi-bookmark-outline"></i>
                                            </a>
                                            <a class="text-gray" href="javascript:void(0);">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
                                        <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit Scratch the postman wake up lick paw wake up owner meow meow lick plastic bags Scratch the postman wake up lick paw wake having their mate disturbing sleeping
                                            humans.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-8 CLOSED -->

                        <!-- ROW-9 OPEN -->
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="card-status bg-blue br-te-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Card blue</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-status card-status-left bg-red br-bs-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Card status on left side</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0);" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-9 CLOSED -->

                        <!-- ROW-10 OPEN -->
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{asset('build/assets/images/media/22.jpg')}}" class="card-img-left h-100" alt="img">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12  col-xl-6">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{asset('build/assets/images/media/22.jpg')}}" class="card-img-right h-100" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-10 CLOSED -->

                        <!-- ROW-11 OPEN -->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="mb-5 card-group overflow-hidden">
                                    <div class="card border-end shadow-none">
                                        <img src="{{asset('build/assets/images/media/22.jpg')}}" class="card-img-top" alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card border-end shadow-none">
                                        <img src="{{asset('build/assets/images/media/18.jpg')}}" class="card-img-top" alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card shadow-none">
                                        <img src="{{asset('build/assets/images/media/6.jpg')}}" class="card-img-top" alt="img">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-11 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
