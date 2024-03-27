
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Scrollspy</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Scrollspy</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Basic Navbar Scrollspy</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                            <a class="" href="javascript:void(0);"><img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" class="" alt="logo"></a>
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#scrollspyHeading1">First</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-expanded="false">Dropdown</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                            <div id="scrollspyHeading1">
                                                <h4 class="fs-16 fw-bold">First heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading2">
                                                <h4 class="fs-16 fw-bold">Second heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading3">
                                                <h4 class="fs-16 fw-bold">Third heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading4">
                                                <h4 class="fs-16 fw-bold">Fourth heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                            <div id="scrollspyHeading5">
                                                <h4 class="fs-16 fw-bold">Fifth heading</h4>
                                                <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Nested nav Scrollspy</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <nav id="navbar-example3" class="navbar navbar-light border flex-column align-items-stretch p-3 br-ts-5 br-bs-5">
                                                    <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                                    <nav class="nav nav-pills flex-column">
                                                        <a class="nav-link border active bg-primary-transparent" href="#item-1"><i class="fe fe-package me-1 text-primary d-inline-flex"></i> UI Kit</a>
                                                        <nav class="nav nav-pills sub-nav flex-column">
                                                            <a class="nav-link border ms-4 my-1" href="#item-1-1">Dropdowns</a>
                                                            <a class="nav-link border ms-4 my-1" href="#item-1-2">Pagination</a>
                                                        </nav>
                                                        <a class="nav-link border bg-primary-transparent" href="#item-2"><i class="fe fe-map-pin me-1 text-primary d-inline-flex"></i>Maps</a>
                                                        <a class="nav-link border bg-primary-transparent mt-1" href="#item-3"><i class=" fe fe-wind me-1 text-primary d-inline-flex"></i> Icons</a>
                                                        <nav class="nav nav-pills sub-nav flex-column">
                                                            <a class="nav-link border ms-4 my-1" href="#item-3-1">Bootstrap Icons</a>
                                                            <a class="nav-link border ms-4 my-1" href="#item-3-2">Feather Icons</a>
                                                        </nav>
                                                    </nav>
                                                </nav>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" data-bs-offset="0" tabindex="0">
                                                    <div id="item-1">
                                                        <h4 class="fs-16 fw-bold">Item 1</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-1-1">
                                                        <h4 class="fs-16 fw-bold">Item 1-1</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-1-2">
                                                        <h4 class="fs-16 fw-bold">item 1-2</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-2">
                                                        <h4 class="fs-16 fw-bold">Item 2</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-3">
                                                        <h4 class="fs-16 fw-bold">Item 3</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-3-1">
                                                        <h4 class="fs-16 fw-bold">Item 3-1</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                    <div id="item-3-2">
                                                        <h4 class="fs-16 fw-bold">Item 3-2</h4>
                                                        <p class="fs-14">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                                            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">List group Scrollspy</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-4">
                                                <div id="list-example" class="list-group">
                                                    <a class="list-group-item list-group-item-action p-2" href="#list-item-1">Item 1</a>
                                                    <a class="list-group-item list-group-item-action p-2" href="#list-item-2">Item 2</a>
                                                    <a class="list-group-item list-group-item-action p-2" href="#list-item-3">Item 3</a>
                                                    <a class="list-group-item list-group-item-action p-2" href="#list-item-4">Item 4</a>
                                                </div>
                                                </div>
                                                <div class="col-8">
                                                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                                                    <h4 class="fs-16 fw-bold" id="list-item-1">Item 1</h4>
                                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                    <h4 class="fs-16 fw-bold" id="list-item-2">Item 2</h4>
                                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                    <h4 class="fs-16 fw-bold" id="list-item-3">Item 3</h4>
                                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                    <h4 class="fs-16 fw-bold" id="list-item-4">Item 4</h4>
                                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">List group Scrollspy</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                            <div id="simple-list-example" class="d-flex flex-column simple-list-example-scrollspy text-center">
                                                <a class="list-group-item list-group-item-action" href="#simple-list-item-1">Item 1</a>
                                                <a class="list-group-item list-group-item-action" href="#simple-list-item-2">Item 2</a>
                                                <a class="list-group-item list-group-item-action" href="#simple-list-item-3">Item 3</a>
                                                <a class="list-group-item list-group-item-action" href="#simple-list-item-4">Item 4</a>
                                                <a class="list-group-item list-group-item-action" href="#simple-list-item-5">Item 5</a>
                                            </div>
                                            </div>
                                            <div class="col-sm-8">
                                            <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                                                <h4 class="fs-16 fw-bold" id="simple-list-item-1">Item 1</h4>
                                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                <h4 class="fs-16 fw-bold" id="simple-list-item-2">Item 2</h4>
                                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                <h4 class="fs-16 fw-bold" id="simple-list-item-3">Item 3</h4>
                                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                <h4 class="fs-16 fw-bold" id="simple-list-item-4">Item 4</h4>
                                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                                <h4 class="fs-16 fw-bold" id="simple-list-item-5">Item 5</h4>
                                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 END -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
