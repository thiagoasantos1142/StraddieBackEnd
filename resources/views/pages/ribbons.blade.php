
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Ribbons</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ribbons</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row-->
                        <div class="row">
                            <h5 class="fw-semibold mb-4">Ribbon Style 1</h5>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="power-ribbone power-ribbone-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                    <!-- <div class="ribbone-middle">
                                        <span></span>
                                    </div> -->
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="power-ribbone power-ribbone-bottom-left text-primary"><span class="bg-primary"><i class="fa fa-bolt"></i></span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title.  some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i class="fa fa-bolt"></i></span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="power-ribbone power-ribbone-bottom-right text-success"><span class="bg-success"><i class="fa fa-bolt"></i></span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row-->
                        <div class="row">
                            <h5 class="fw-semibold mb-4">Ribbon Style 2</h5>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="ribbone ribbone-top-left text-primary"><span class="bg-primary">sold out</span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card  sold-out">
                                    <div class="ribbone ribbone-top-right text-danger"><span class="bg-danger">Offer</span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="ribbone ribbone-top-left text-success"><span class="bg-success">Update</span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card  sold-out">
                                    <div class="ribbone ribbone-top-right text-warning"><span class="bg-warning">Open</span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row-->
                        <div class="row">
                            <h5 class="fw-semibold mb-4">Ribbon Style 3</h5>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="arrow-ribbone-left bg-secondary">Sale</div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="arrow-ribbone-right bg-info">Price</div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="arrow-ribbone-left bg-warning">Service</div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card ribbone-card">
                                    <div class="arrow-ribbone-right bg-teal">Offer</div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row-->
                        <div class="row">
                            <h5 class="fw-semibold mb-4">Ribbon Style 4</h5>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="ribbone-success-left">
                                        <span><i class="fe fe-zap"></i></span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="ribbone-warning-right">
                                        <span><i class="fe fe-zap"></i></span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="ribbone-info-left">
                                        <span><i class="fe fe-zap"></i></span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="ribbone-danger-right">
                                        <span><i class="fe fe-zap"></i></span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row-->
                        <div class="row">
                            <h5 class="fw-semibold mb-4">Ribbon Style 5</h5>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="bookmark-ribbone-danger-left">
                                        <span>Jul</span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="bookmark-ribbone-secondary-right">
                                        <span>Aug</span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="bookmark-sideleft-ribbone-success-left">
                                        <span>Sept</span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <span class="bookmark-sideright-ribbone-primary-right">
                                        <span>Oct</span>
                                    </span>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title. Some quick example text to build on the card title</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
