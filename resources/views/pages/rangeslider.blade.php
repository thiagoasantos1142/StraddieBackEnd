
@extends('layouts.master')

@section('styles')

        <!-- noui Slider -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Rangeslider</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rangeslider</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Default Range
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Disabled Range
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <input type="range" class="form-range" id="disabledRange" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Range With Min and Max Values
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Range With Steps
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->
        
                        <!-- Start:: row-2 -->
                        <h6 class="mb-3">noUiSlider:</h6>
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Default-Styling
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Fit Handles
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-fit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Rounded Styling
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-round"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Square Styling
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-square"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->
        
                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Color Picker Slider</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="sliders" id="color1"></div>
                                        <div class="sliders" id="color2"></div>
                                        <div class="sliders" id="color3"></div>
                                        <div id="result"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Locking Sliders</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="slider1"></div>
                                            <div id="slider1-span" class="my-1"></div>
                                            <div id="slider2"></div>
                                            <div id="slider2-span" class="my-1"></div>
                                            <div id="slider3"></div>
                                            <div id="slider3-span" class="my-1"></div>
                                            <button id="lockbutton" class="btn btn-sm btn-primary float-end">Lock</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Merging tooltips slider</div>
                                        </div>
                                        <div class="card-body">
                                            <div id="merging-tooltips"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">Non Linear Slider</div>
                                            </div>
                                            <div class="card-body">
                                                <div id="nonlinear"></div>
                                                <div id="lower-value" class="mt-5"></div>
                                                <div id="upper-value" class="mt-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">Sliding Handles Tooltips</div>
                                            </div>
                                            <div class="card-body">
                                                <div id="slider-hide"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->
        
                        <!-- Start:: row-4 -->
                        <div  class="row">
                            <div class="col-xl-10">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Colored Connect Elements</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="slider" id="color-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Slider Toggle</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-toggle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->
        
                        <!-- Start:: row-5 -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Toggle Movement By Clicking Pips</div>
                                    </div>
                                    <div class="card-body pb-7">
                                        <div id="slider-pips"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Soft Limits</div>
                                    </div>
                                    <div class="card-body pb-7">
                                        <div id="soft"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-5 -->
        
                        <!-- Start:: row-6 -->
                        <h6 class="mb-3">noUiSlider Colors:</h6>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Primary
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="primary-colored-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Secondary
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="secondary-colored-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Warning
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="warning-colored-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Info
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="info-colored-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Success
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="success-colored-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Danger
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="danger-colored-slider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-6 -->
        
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/nouislider.js')

@endsection
