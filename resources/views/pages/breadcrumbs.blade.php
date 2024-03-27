
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Breadcrumb</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Simple Breadcrumbs</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Header</h5>
                                                    <p class="mb-0 fs-14 text-muted">Basic Breadcrumb inside Header</p>
                                                </div>
                                                <ol class="breadcrumb1 mb-0">
                                                    <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                    <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                    <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between flex-wrap">
                                        <div class="breadcrumb-style2">
                                            <ol class="breadcrumb1 px-0 mb-0">
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                            </ol>
                                        </div>
                                        <div>
                                            <a href="#" class="ms-2 text-default">
                                                <i class="fe fe-settings mx-1"></i>Settings
                                            </a>
                                            <a href="#" class="text-default">
                                                <i class="fe fe-calendar mx-1"></i>Calendar
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Top Header</h5>
                                                    <p class="mb-0 fs-14 text-muted">Basic Breadcrumb inside Header</p>
                                                </div>
                                                <div class="form-group mb-0 mt-sm-0 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" aria-label="Example text with button addon">
                                                        <button class="btn btn-light" type="button"><i class="fe fe-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header justify-content-center">
                                        <div class="breadcrumb-style2">
                                            <ol class="breadcrumb1 px-0 mb-0">
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Center-Header</h5>
                                                    <p class="mb-0 fs-14 text-muted">Basic Breadcrumb inside Header</p>
                                                </div>
                                                <div class="form-group mb-0 mt-sm-0 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" aria-label="Example text with button addon">
                                                        <button class="btn btn-light" type="button"><i class="fe fe-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header justify-content-end">
                                        <div class="breadcrumb-style2">
                                            <ol class="breadcrumb1 px-0 mb-0">
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Left-Header</h5>
                                                    <p class="mb-0 fs-14 text-muted">Basic Breadcrumb inside Header</p>
                                                </div>
                                                <div class="form-group mb-0 mt-sm-0 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" aria-label="Example text with button addon">
                                                        <button class="btn btn-light" type="button"><i class="fe fe-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Breadcrumb Style1</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Breadcrumb-Header</h5>
                                                    <div class="breadcrumb-style2">
                                                        <ol class="breadcrumb1 px-0 mb-0">
                                                            <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                            <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                            <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" aria-label="Example text with button addon">
                                                        <button class="btn btn-light" type="button"><i class="fe fe-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Breadcrumb Style2</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div class="form-group mb-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" aria-label="Example text with button addon">
                                                        <button class="btn btn-light" type="button"><i class="fe fe-search"></i></button>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="mb-1 mt-sm-0 mt-2">Right-Header</h5>
                                                    <div class="breadcrumb-style2">
                                                        <ol class="breadcrumb1 px-0 mb-0">
                                                            <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                            <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                            <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Footer Breadcrumbs</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="mb-1">Footer Header</h5>
                                                    <p class="mb-0 fs-14 text-muted">Basic Breadcrumb inside Header</p>
                                                </div>
                                                <div class="form-group mb-0 mt-sm-0 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search" aria-label="Example text with button addon">
                                                        <button class="btn btn-light" type="button"><i class="fe fe-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="breadcrumb-style3">
                                                <ol class="breadcrumb1 px-0 mb-0">
                                                    <li class="breadcrumb-item1"><a href="javascript:void(0);">Home</a></li>
                                                    <li class="breadcrumb-item1"><a href="javascript:void(0);">UI Kit</a></li>
                                                    <li class="breadcrumb-item1 active" aria-current="page">Breadcrumbs</li>
                                                </ol>
                                            </div>
                                            <div>
                                                <a href="#" class="ms-2 text-dark">
                                                    <i class="fe fe-settings mx-1"></i>Settings
                                                </a>
                                                <a href="#" class="text-dark">
                                                    <i class="fe fe-calendar mx-1"></i>Calendar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-md-12 col-xxl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Color Breadcrumbs</h3>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <ol class="breadcrumb1 bg-info">
                                                <li class="breadcrumb-item active"><i class="fa fa-star-o me-2 text-transparant" aria-hidden="true"></i>Home</li>
                                            </ol>
                                            <ol class="breadcrumb1 bg-success">
                                                <li class="breadcrumb-item"><i class="fa fa-star-o me-2 tx-fixed-white" aria-hidden="true"></i><a class="tx-fixed-white" href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Library</li>
                                            </ol>
                                            <ol class="breadcrumb1 bg-secondary">
                                                <li class="breadcrumb-item"><i class="fa fa-star-o me-2 tx-fixed-white" aria-hidden="true"></i><a class="tx-fixed-white" href="javascript:void(0);">Home</a></li>
                                                <li class="breadcrumb-item"><i class="fa fa-star-o mx-2 tx-fixed-white" aria-hidden="true"></i><a class="tx-fixed-white" href="javascript:void(0);">Library</a></li>
                                                <li class="breadcrumb-item active"><i class="fa fa-star-o mx-2 text-transparant" aria-hidden="true"></i>Data</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
