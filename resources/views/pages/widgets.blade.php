
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Widgets</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Widgets</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 text-gray-600">Total Orders</p>
                                                <span class="fs-5">45</span>
                                                <span class="fs-12 text-success ms-1"><i
                                                        class="ti ti-trending-up mx-1"></i>0.5%</span>
                                            </div>
                                            <div class="min-w-fit-content ms-3">
                                                <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                    <i class="fe fe-user fs-18"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 text-gray-600">Total Package</p>
                                                <span class="fs-5">10</span>
                                                <span class="fs-12 text-secondary ms-1"><i
                                                        class="ti ti-trending-down mx-1"></i>8.0%</span>
                                            </div>
                                            <div class="min-w-fit-content ms-3">
                                                <span
                                                    class="avatar avatar-md br-5 bg-secondary-transparent text-secondary">
                                                    <i class="fe fe-package fs-18"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 text-gray-600">Total Payments</p>
                                                <span class="fs-5">$60.00</span>
                                                <span class="fs-12 text-success ms-1"><i
                                                        class="ti ti-trending-up mx-1"></i>3.5%</span>
                                            </div>
                                            <div class="min-w-fit-content ms-3">
                                                <span class="avatar avatar-md br-5 bg-warning-transparent text-warning">
                                                    <i class="fe fe-credit-card fs-18"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 text-gray-600">Total Subscriptions </p>
                                                <span class="fs-5">10</span>
                                                <span class="fs-12 text-success ms-1"><i
                                                        class="ti ti-trending-up mx-1"></i>0.5%</span>
                                            </div>
                                            <div class="min-w-fit-content ms-3">
                                                <span class="avatar avatar-md br-5 bg-info-transparent">
                                                    <i class="fe fe-user-plus fs-18"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card tx-fixed-white card-bg-img">
                                            <div class="card-body position-relative d-flex justify-content-between">
                                                <div>
                                                    <div class="flex-grow-1">
                                                        <p>Top Sellers</p>
                                                    </div>
                                                    <span class="fs-4">3,531</span>
                                                    <span class="fs-12 op-9 ms-1 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1"></i>0.5%</span>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <div class="h-60 w-60p">
                                                        <img src="{{asset('build/assets/images/png/6.png')}}" class="op-8" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Users</h6>
                                                        <h3 class="mb-0">24,123</h3>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div id="widgetEtcoin"></div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-secondary"><i class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    Last week</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card tx-fixed-white card-bg-img card-img-secondary">
                                            <div class="card-body position-relative d-flex justify-content-between">
                                                <div>
                                                    <div class="flex-grow-1">
                                                        <p>Total Orders</p>
                                                    </div>
                                                    <span class="fs-4">3,531</span>
                                                    <span class="fs-12 op-9 ms-1 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1"></i>0.5%</span>
                                                </div>
                                                <div class="min-w-fit-content">
                                                    <div class="h-60 w-60p">
                                                        <img src="{{asset('build/assets/images/png/6.png')}}" class="op-8" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Orders</h6>
                                                        <h3 class="mb-0">53,567</h3>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div id="total-orders"></div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                                            class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    Last week</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3 flex-wrap">
                                                    <span
                                                        class="avatar avatar-md stat-avatar rounded-circle text-bg-warning fs-18 min-w-fit-content me-2">
                                                        <i class="bi bi-bag-check"></i>
                                                    </span>
                                                    <p class="mb-0 flex-grow-1 text-gray-600">Total Sales</p>
                                                </div>
                                                <span class="fs-5">$12,897</span>
                                                <span class="fs-12 text-warning ms-1"><i
                                                        class="ti ti-trending-up mx-1"></i>3.5%</span>
                                                <div class="fw-normal d-flex align-items-center mb-2 mt-4">
                                                    <p class="mb-0 flex-grow-1">Active Sales</p>
                                                    <span>3,274</span>
                                                </div>
                                                <div class="progress custom-progress-1 mb-4" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 50%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0 text-center">
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="px-3 py-2 text-warning">View
                                                        Details <i class="ti ti-external-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="px-3 pt-3">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <span
                                                            class="avatar avatar-md stat-avatar rounded-circle text-bg-primary fs-18 min-w-fit-content me-2">
                                                            <i class="bi bi-bar-chart"></i>
                                                        </span>
                                                        <p class="mb-0 flex-grow-1">Total Revenue</p>
                                                    </div>
                                                    <span class="fs-5">$8,889</span>
                                                    <span class="fs-12 text-success ms-1"><i
                                                            class="ti ti-trending-up mx-1"></i>5.5%</span>
                                                </div>
                                                <div id="totalRevenue2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card custom-card">
                                            <div class="card-body text-center">
                                                <span class="avatar avatar-md stat-avatar rounded-circle text-bg-secondary fs-18 min-w-fit-content mb-3">
                                                    <i class="bi bi-gift"></i>
                                                </span>
                                                <h6 class="mb-0">Gross Profit Margin</h6>
                                                <h2 class="mb-1 mt-2 tx-normal"><span class="counter">77</span>%</h2>
                                                <p class="text-muted"><span class="mb-0 text-danger fs-13 ms-1"><i class="fe fe-arrow-down"></i> 1.68%</span> <span class="fs-12">Last month</span></p>
                                                <button class="btn btn-sm btn-outline-secondary">Check</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="d-sm-flex align-items-center flex-wrap gap-1">
                                                            <span class="avatar avatar-md br-5 bg-info rounded-circle">
                                                                <i class="fe fe-grid"></i>
                                                            </span>
                                                            <div class="ms-2">
                                                                <h6 class="mb-1"> <a href="#" class="float-start">Web
                                                                        Design</a> <span
                                                                        class="badge bg-light text-muted fs-11 mx-2">opened
                                                                        yesterday</span> </h6>
                                                                <span
                                                                    class="text-muted border-end pe-2 fs-12 float-start">28
                                                                    tasks</span>
                                                                <span class="ps-1 fs-12">11 Nov 19</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex align-items-center">
                                                            <div class="stars-main me-2">
                                                                <i class="fa fa-star text-light star"></i>
                                                            </div>
                                                            <a href="#" class="option-dots" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i
                                                                    class="fe fe-more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <p class="m-0 mb-2 fw-600">Members</p>
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar avatar-sm avatar-radius cover-image"
                                                                data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"
                                                            ></span>
                                                            <span class="avatar avatar-sm avatar-radius cover-image"
                                                                data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                            <span class="avatar avatar-sm avatar-radius cover-image"
                                                                data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                            <span class="avatar avatar-sm avatar-radius cover-image"
                                                                data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"
                                                            ></span>
                                                            <span class="avatar avatar-sm avatar-radius cover-image"
                                                                data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"
                                                            ></span>
                                                            <span
                                                                class="avatar avatar-sm avatar-radius bg-info">+15</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <p class="mb-0">
                                                            <span class="text-muted d-block">Due Date</span>
                                                            <span class="text-danger">11 Nov 21</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="text-center">
                                                    <div class="progress progress-xs progress-custom1 mb-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 60%"></div>
                                                    </div>
                                                    <div class="float-end">
                                                        <div class="fs-13">
                                                            <span class="badge bg-info-transparent text-info">60%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-5">
                                            <h6 class="mb-4 card-title">Revenue By channel</h6>
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-orange" style="width: 15%;"></div>
                                                <div class="progress-bar bg-warning" style="width: 15%;"></div>
                                                <div class="progress-bar bg-info" style="width: 15%;"></div>
                                                <div class="progress-bar bg-success" style="width: 15%;"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="text-muted fs-13">Total Revenue Earned</div>
                                                <div class="fw-600 fs-15">$345,3467.72</div>
                                            </div>
                                        </div>
                                        <ul class="row mx-auto">
                                            <li class="col-xl-6 mb-2">
                                                <span class="me-1"><i
                                                        class="bi bi-circle-fill fs-10 me-2 text-orange"></i>Direct</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                    <span class="">(42.34%)</span>
                                                </span>
                                            </li>
                                            <li class="col-xl-6 mb-2">
                                                <span class="me-1"><i
                                                        class="bi bi-circle-fill fs-10 me-2 text-warning"></i>Referral</span>
                                                <span class="text-danger fw-semibold fs-12">
                                                    <span class="mx-1"><i class="fa fa-caret-down"></i></span>
                                                    <span class="">(13%)</span>
                                                </span>
                                            </li>
                                            <li class="col-xl-6 mb-2">
                                                <span class="me-1"><i
                                                        class="bi bi-circle-fill fs-10 me-2 text-info"></i>Social</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                    <span class="">(62%)</span>
                                                </span>
                                            </li>
                                            <li class="col-xl-6 mb-2">
                                                <span class="me-1"><i
                                                        class="bi bi-circle-fill fs-10 me-2 text-success"></i>Organic
                                                    Search</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                    <span class="">(22.46%)</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header d-block">
                                        <div class="d-sm-flex d-block align-items-center ">
                                            <div class="me-2">
                                                <span class="avatar bg-light avatar-md mb-1 avatar-radius">
                                                    <img src="{{asset('build/assets/images/products/3.jpg')}}" class="avatar-radius"
                                                        alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);">
                                                    <span class="fs-15 fw-bold text-dark    ">Bluberry Co.In</span>
                                                </a>
                                                <span class="d-block fs-13 text-primary">$499</span>
                                            </div>
                                            <div class="text-sm-center">
                                                <span class="fs-15 fw-bold">Order Id :</span>
                                                <span class="d-sm-block fs-13">#SPK-2936</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="w-75">
                                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                                <p class="text-muted fs-13 mb-0">
                                                    mig-1-11,monroe street,georgetown,Washington D.C
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge bg-success">Delivered</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="card-footer d-sm-flex d-block justify-content-between align-items-center">
                                        <div class="fs-11">
                                            <span>Delivered on:</span>
                                            <span class="fw-semibold">29,Oct 2022 - 12:47PM</span>
                                        </div>
                                        <div class="mt-sm-0 mt-2">
                                            <button class="btn btn-sm btn-primary-light">Rate Product<i
                                                    class="bi bi-star-fill ms-2 fs-12 text-warning"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-4 col-xl-6 col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header justify-content-between align-items-center">
                                        <div class="">
                                            <h3 class="card-title mb-1">My Profile</h3>
                                            <p class="fs-11 mb-0">76% completed. <a href="{{url('profile')}}"
                                                    class="text-primary">Info</a> </p>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false" class=""><i
                                                    class="fe fe-more-vertical fs-18"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Reply</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Report Spam</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Show Original</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Print</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0 px-0">
                                        <div class="px-3 pb-3 w-100">
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <div class="avatar-xxl rounded-circle mb-3">
                                                    <a href="{{url('profile')}}">
                                                        <img alt="avatar" class="rounded-circle"
                                                            src="{{asset('build/assets/images/users/5.jpg')}}">
                                                    </a>
                                                </div>
                                                <h6 class="fs-20 mb-0 fw-600"><a href="{{url('profile')}}">Nick Taylor</a>
                                                </h6>
                                                <span class="fs-12 fw-600 text-muted">
                                                    <a href="{{url('profile')}}">UI / UX Designer</a>
                                                </span>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-4 border-end">
                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <span class="fs-20 fw-600">1,200</span>
                                                        <div class="text-muted fs-12 text-center">Followers</div>
                                                    </div>
                                                </div>
                                                <div class="col-4 border-end">
                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <span class="fs-20 fw-600">1,053</span>
                                                        <div class="text-muted fs-12 text-center">Following</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <span class="fs-20 fw-600">280</span>
                                                        <div class="text-muted fs-12 text-center">Projects</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <p class="text-muted text-center px-4 mb-0">Nonumy et dolores ut ea
                                                        sadipscing. Sed ut diam, Lorem sit dolores sanctus vero amet. ea
                                                        takimata sed sit..</p>
                                                </div>
                                                <div class="col-md-12 my-4">
                                                    <div class="btn-list text-center">
                                                        <a class="btn btn-icon btn-sm btn-primary-light rounded-circle"
                                                            href="javascript:void(0);" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Facebook" aria-label="Facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-sm btn-secondary-light rounded-circle"
                                                            href="javascript:void(0);" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Twitter" aria-label="Twitter">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-sm btn-success-light rounded-circle"
                                                            href="javascript:void(0);" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Linkedin" aria-label="Linkedin">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                        <a class="btn btn-icon btn-sm btn-warning-light rounded-circle"
                                                            href="javascript:void(0);" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Linkedin" aria-label="Linkedin">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12"> <a href="{{url('profile')}}"
                                                        class="btn btn-sm btn-block btn-primary py-2">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <h3 class="card-title">Total Sales</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="d-md-flex justify-content-between">
                                            <div class="mx-auto text-center w-100 border-end p-5">
                                                <p class="mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(221 221 222);fill-opacity:1;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chart2" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:#fd6074;fill-opacity:0.7;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <span class="mb-0 fs-13 ms-2 text-danger"><i class="fe fe-arrow-down"></i> 2.52%</span>
                                                </p>
                                                <h3 class="fw-600"><span class="counter">23,590</span></h3>
                                                <p class="fs-12 mb-0 text-muted">Last Week Revenue</p>
                                            </div>
                                            <div class="mx-auto text-center w-100 p-5">
                                                <p class="mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(221 221 222);fill-opacity:1;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chart2" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:#19b159;fill-opacity:0.7;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <span class="mb-0 fs-13 ms-2 text-success"><i class="fe fe-arrow-up"></i> 2.68%</span>
                                                </p>
                                                <h3 class="fw-600"><span class="counter">32,900</span></h3>
                                                <p class="fs-12 mb-0 text-muted">This Week Revenue</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="d-flex">
                                            <div class="p-4 bg-primary tx-fixed-white text-center d-flex rounded-start">
                                                <div class="my-auto"> <span class="mb-1 op-7">Mar</span>
                                                    <p class="mb-0 fs-24">09</p>
                                                </div>
                                            </div>
                                            <div class="p-4 flex-1"> <a href="javascript:void(0);"
                                                    class="float-end text-muted" data-bs-toggle="dropdown"><i
                                                        class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu"> <a href="javascript:void(0);"
                                                    class="dropdown-item">Action</a> <a href="javascript:void(0);"
                                                    class="dropdown-item">Another Action</a> <a
                                                    href="javascript:void(0);" class="dropdown-item">Something else
                                                    here</a>
                                                </div>
                                                <div class="mb-3">
                                                    <h5 class="mb-1">Designing Applee Logo</h5> <span
                                                        class="text-muted fs-12 d-inline-flex align-items-center"><i
                                                            class="fe fe-tag me-1 fs-11"></i>UI/UX</span>
                                                </div>
                                                <div class="mb-1"> <span class="text-muted fw-semibold">50%
                                                        Completed</span> </div>
                                                <div class="progress progress-xs h-2">
                                                    <div class="progress-bar progress-bar-striped h-2 bg-primary"
                                                        style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3 class="card-title">Total Requests</h3>
                                        <div class="card-options">
                                            <a class="btn btn-sm btn-success" href="javascript:void(0);"><i
                                                    class="fa fa-send-o mb-0"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h3 class="d-inline-block mb-2">23,536</h3>
                                        <div class="progress h-2 mt-2 mb-2">
                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar">
                                            </div>
                                        </div>
                                        <div class="float-start">
                                            <div class="mt-2">
                                                <i class="fa fa-caret-down text-success"></i>
                                                <span>5% decrease</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header pb-0 border-bottom-0">
                                        <h3 class="card-title">Support Cost</h3>
                                        <div class="card-options">
                                            <a class="btn btn-sm btn-danger" href="javascript:void(0);"><i class="fa fa-money mb-0"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <h3 class="d-inline-block mb-2">14,563</h3>
                                        <div class="progress h-2 mt-2 mb-2">
                                            <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar"></div>
                                        </div>
                                        <div class="float-start">
                                            <div class="mt-2">
                                                <i class="fa fa-caret-down text-danger"></i>
                                                <span>15% decrease</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <h3 class="card-title">Total Revenue</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="d-md-flex justify-content-between">
                                            <div class="mx-auto text-center w-100 border-end p-5">
                                                <p class="mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(221 221 222);fill-opacity:1;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chart2" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:#fd6074;fill-opacity:0.7;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <span class="mb-0 fs-13 ms-2 text-danger"><i class="fe fe-arrow-down"></i> 2.52%</span>
                                                </p>
                                                <h3 class="fw-600"><span class="counter">23,590</span></h3>
                                                <p class="fs-12 mb-0 text-muted">Last Week Revenue</p>
                                            </div>
                                            <div class="mx-auto text-center w-100 p-5">
                                                <p class="mb-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(221 221 222);fill-opacity:1;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chart2" width="40px" height="40px" viewBox="0 0 30 30" version="1.1">
                                                        <g >
                                                        <path style=" stroke:none;fill-rule:nonzero;fill:#19b159;fill-opacity:0.7;" d="M 6.25 27.5 C 5.558594 27.5 5 26.941406 5 26.25 L 5 16.25 C 5 15.558594 5.558594 15 6.25 15 C 6.941406 15 7.5 15.558594 7.5 16.25 L 7.5 26.25 C 7.5 26.941406 6.941406 27.5 6.25 27.5 Z M 12.5 27.5 C 11.808594 27.5 11.25 26.941406 11.25 26.25 L 11.25 3.75 C 11.25 3.058594 11.808594 2.5 12.5 2.5 C 13.191406 2.5 13.75 3.058594 13.75 3.75 L 13.75 26.25 C 13.75 26.941406 13.191406 27.5 12.5 27.5 Z M 18.75 27.5 C 18.058594 27.5 17.5 26.941406 17.5 26.25 L 17.5 11.25 C 17.5 10.558594 18.058594 10 18.75 10 C 19.441406 10 20 10.558594 20 11.25 L 20 26.25 C 20 26.941406 19.441406 27.5 18.75 27.5 Z M 25 27.5 C 24.308594 27.5 23.75 26.941406 23.75 26.25 L 23.75 21.25 C 23.75 20.558594 24.308594 20 25 20 C 25.691406 20 26.25 20.558594 26.25 21.25 L 26.25 26.25 C 26.25 26.941406 25.691406 27.5 25 27.5 Z M 25 27.5 "/>
                                                        </g>
                                                    </svg>
                                                    <span class="mb-0 fs-13 ms-2 text-success"><i class="fe fe-arrow-up"></i> 2.68%</span>
                                                </p>
                                                <h3 class="fw-600"><span class="counter">32,900</span></h3>
                                                <p class="fs-12 mb-0 text-muted">This Week Revenue</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-0 d-flex align-items-center">
                                            <figure class="rounded-circle align-self-start mb-0">
                                                <img src="{{asset('build/assets/images/users/4.jpg')}}" alt="Generic placeholder image"
                                                    class="avatar avatar-radius avatar-md me-3">
                                            </figure>
                                            <div class="media-body">
                                                <h4 class="p-0 mb-0 fw-semibold leading-normal"><a
                                                        href="javascript:void(0);" class="text-dark">Donnavan Bonnie</a>
                                                </h4>
                                                <span class="text-muted">Canada, UN</span>
                                            </div>
                                            <button class="btn btn-primary d-none d-sm-block me-2"><i
                                                    class="fa fa-comments"></i> </button>
                                            <button class="btn btn-secondary d-none d-sm-block"><i
                                                    class="fa fa-phone"></i> </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-4">
                                            <div
                                                class="pe-4 border-end d-flex align-items-center justify-content-center">
                                                <h6 class="mb-0 me-3 text-muted">Projects</h6>
                                                <p class="m-0 text-dark">2345</p>
                                            </div>
                                            <div class="ms-4 d-flex align-items-center justify-content-center">
                                                <h6 class="mb-0 me-3 text-muted">Tasks</h6>
                                                <p class="m-0 text-dark">456</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top">
                                        <div class="btn-list text-center">
                                            <a class="btn btn-icon btn-sm btn-primary-light rounded-circle"
                                                href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Facebook"
                                                aria-label="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="btn btn-icon btn-sm btn-secondary-light rounded-circle"
                                                href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Twitter"
                                                aria-label="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="btn btn-icon btn-sm btn-success-light rounded-circle"
                                                href="javascript:void(0);" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Linkedin"
                                                aria-label="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="card overflow-hidden mb-0">
                                                <div class="card-body pb-0 bg-recentorder">
                                                    <h3 class="card-title tx-fixed-white">Projects Overview</h3>
                                                    <div id="chart-bar-stacked" class="chartsh h-200"></div>
                                                </div>
                                                <div id="reports" class="flot-background"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-3 border-bottom">
                                                <div class="counter-status p-4 border-end">
                                                    <div class="text-center mb-2"> <svg class="about-icons" width="55"
                                                            height="55" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24">
                                                            <path fill="#38cab3"
                                                                d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                opacity=".99"></path>
                                                            <path fill="#87dfd1"
                                                                d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                            </path>
                                                        </svg> </div>
                                                    <div class="text-center">
                                                        <h4 class="counter mb-2">256</h4>
                                                        <h6 class="mb-0 text-muted fs-14">Completed Projects</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-3 border-bottom">
                                                <div class="counter-status p-4">
                                                    <div class="text-center mb-2"> <svg class="about-icons" width="55"
                                                            height="55" xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <circle cx="10" cy="8.5" r="5" fill="#fbb8c7"></circle>
                                                            <path fill="#fa95ac"
                                                                d="M13.30884,12.22253C12.42566,13.00806,11.27496,13.5,10,13.5s-2.42566-0.49194-3.30884-1.27747C3.92603,13.48206,2,16.26324,2,19.5c0,0.00018,0,0.00037,0,0.00055C2.00012,20.05267,2.44788,20.50012,3,20.5h14c0.00018,0,0.00037,0,0.00055,0c0.55212-0.00012,0.99957-0.44788,0.99945-1C18,16.26324,16.07397,13.48206,13.30884,12.22253z">
                                                            </path>
                                                            <path fill="#f74f75"
                                                                d="M18.3335,13.5c-0.26526,0.0003-0.51971-0.10515-0.707-0.293l-1.3335-1.333c-0.38694-0.39399-0.38123-1.02706,0.01275-1.414c0.38897-0.38202,1.01228-0.38202,1.40125,0l0.62647,0.626l1.95953-1.96c0.39399-0.38694,1.02706-0.38123,1.414,0.01275c0.38202,0.38897,0.38202,1.01227,0,1.40125l-2.6665,2.667C18.85321,13.39485,18.59877,13.5003,18.3335,13.5z">
                                                            </path>
                                                        </svg> </div>
                                                    <div class="text-center">
                                                        <h4 class="counter mb-2">432</h4>
                                                        <h6 class="mb-0 text-muted fs-14">Completed Projects</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-3">
                                                <div class="counter-status p-4 border-end">
                                                    <div class="text-center mb-2"> <svg class="about-icons" width="55"
                                                            height="55" xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path fill="#ffd79c"
                                                                d="M12,14.5c-3.26461,0.00094-6.4876-0.73267-9.43018-2.14648C2.22156,12.18802,1.99974,11.83676,2,11.45117V9.5c0.00181-1.65611,1.34389-2.99819,3-3h14c1.65611,0.00181,2.99819,1.34389,3,3v1.95215c0.00003,0.3859-0.22189,0.73741-0.57031,0.90332C18.48677,13.76762,15.26418,14.50051,12,14.5z M21,11.45215L21,11.45215z">
                                                            </path>
                                                            <path fill="#ffbd5a"
                                                                d="M10,6.5v-1c0.00055-0.55206,0.44794-0.99945,1-1h2c0.55206,0.00055,0.99945,0.44794,1,1v1h2v-1c-0.00183-1.65613-1.34387-2.99817-3-3h-2c-1.65613,0.00183-2.99817,1.34387-3,3v1H10z">
                                                            </path>
                                                            <path fill="#ffe4bd"
                                                                d="M21.42969,12.35547C18.48676,13.76764,15.26416,14.50049,12,14.5c-3.26459,0.00092-6.48761-0.73267-9.43018-2.14648C2.22156,12.18805,1.99976,11.83673,2,11.45117V18.5c0.00183,1.65613,1.34387,2.99817,3,3h14c1.65613-0.00183,2.99817-1.34387,3-3v-7.04785C22.00006,11.83807,21.77814,12.18958,21.42969,12.35547z">
                                                            </path>
                                                            <path fill="#ffbd5a"
                                                                d="M8,15.5c-0.55214,0.00014-0.99986-0.44734-1-0.99948C7,14.50035,7,14.50017,7,14.5v-2c0-0.55229,0.44772-1,1-1s1,0.44771,1,1v2c0.00014,0.55214-0.44734,0.99986-0.99948,1C8.00035,15.5,8.00017,15.5,8,15.5z M16,15.5c-0.55214,0.00014-0.99986-0.44734-1-0.99948c0-0.00017,0-0.00035,0-0.00052v-2c0-0.55229,0.44771-1,1-1c0.55228,0,1,0.44771,1,1v2c0.00014,0.55214-0.44734,0.99986-0.99948,1C16.00035,15.5,16.00017,15.5,16,15.5z">
                                                            </path>
                                                        </svg> </div>
                                                    <div class="text-center">
                                                        <h4 class="counter mb-2">234</h4>
                                                        <h6 class="mb-0 text-muted fs-14">Completed Projects</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-3">
                                                <div class="counter-status p-4">
                                                    <div class="text-center mb-2"> <svg class="about-icons" width="55"
                                                            height="55" xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <circle cx="12" cy="9.25" r="6" fill="#b8e6f9"></circle>
                                                            <path fill="#94daf6"
                                                                d="M19.57391,17.01288L17.00854,12.56l-0.00873,0.00433C15.92511,14.18231,14.08795,15.25,12,15.25c-0.1286,0-0.25439-0.01123-0.38098-0.01923l0.38953,0.66925l2.37408,4.11218c0.13806,0.23914,0.44385,0.32111,0.68304,0.18304c0.07391-0.04266,0.13562-0.10358,0.17938-0.17682l1.32349-2.21844l2.57941-0.0376c0.27612-0.00397,0.4967-0.23108,0.49268-0.5072C19.6394,17.17004,19.61646,17.08667,19.57391,17.01288z">
                                                            </path>
                                                            <path fill="#4ec2f0"
                                                                d="M11.61896,15.23071c-1.92963-0.12152-3.61176-1.14911-4.62012-2.66864l-2.56421,4.45081c-0.04248,0.07379-0.06549,0.15717-0.06671,0.24231c-0.00397,0.27612,0.21661,0.50323,0.49274,0.5072L7.44,17.79999l1.32355,2.21844c0.0437,0.07324,0.10547,0.13416,0.17938,0.17682c0.23914,0.13806,0.54492,0.05609,0.68298-0.18304L12,15.90002l0.00427-0.00732l-0.38525-0.66193L11.61896,15.23071z">
                                                            </path>
                                                        </svg> </div>
                                                    <div class="text-center">
                                                        <h4 class="counter mb-2">564</h4>
                                                        <h6 class="mb-0 text-muted fs-14">Completed Projects</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Tasks Progress</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-12">
                                                <div class="mb-2">
                                                    <span>65% completed</span>
                                                    <span class="text-muted float-end fs-11">463 / 773</span>
                                                </div>
                                                <div class="progress progress-xs h-2 mb-3">
                                                    <div class="progress-bar progress-bar-striped h-2 progress-bar-animated bg-primary"
                                                        style="width: 60%;"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <div class="d-flex flex-wrap mt-2"> <span
                                                        class="avatar rounded-circle bg-primary-transparent"><i
                                                            class="fe fe-briefcase tx-primary"></i></span>
                                                    <div class="ms-2">
                                                        <p class="mb-1 fw-600">Total Projects</p><span
                                                            class="text-muted">746</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <div class="d-flex flex-wrap mt-2"> <span
                                                        class="avatar rounded-circle bg-secondary-transparent"><i
                                                            class="fe fe-users tx-secondary"></i></span>
                                                    <div class="ms-2">
                                                        <p class="mb-1 fw-600">Total Clients</p><span
                                                            class="text-muted">138</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="circle-icon bg-orange text-center align-self-center box-orange-shadow bradius overflow-hidden">
                                                <img src="{{asset('build/assets/images/svgs/circle.svg')}}" alt="img"
                                                    class="card-img-absolute">
                                                <i class="lnr lnr-user fs-25 tx-fixed-white mt-4"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h4 class="mb-2 fw-normal">9,678</h4>
                                                <p class="fw-normal mb-0">Total Requests</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="circle-icon bg-info text-center align-self-center box-info-shadow bradius overflow-hidden">
                                                <img src="{{asset('build/assets/images/svgs/circle.svg')}}" alt="img"
                                                    class="card-img-absolute">
                                                <i class="lnr lnr-gift fs-25 tx-fixed-white mt-4"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h4 class="mb-2 fw-normal">$67,953</h4>
                                                <p class="fw-normal mb-0">Total Profit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xxl-8 col-xl-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <div>
                                            <h3 class="card-title">Sales Report by Locations with Devices</h3>
                                        </div>
                                    </div>
                                    <div class="card-body p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5>6504 <small>Items</small></h5>
                                                <div class="progress progress-sm mb-3">
                                                    <div class="progress-bar bg-orange" style="width: 15%;"></div>
                                                    <div class="progress-bar bg-warning" style="width: 15%;"></div>
                                                    <div class="progress-bar bg-info" style="width: 15%;"></div>
                                                    <div class="progress-bar bg-success" style="width: 15%;"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul class="row mx-auto">
                                                    <li class="col-xl-6 mb-2">
                                                        <span class="me-1"><i
                                                                class="bi bi-circle-fill fs-10 me-2 text-orange"></i>Desktop</span>
                                                        <span class="text-success fw-semibold fs-12">
                                                            <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                            <span class="">(42.34%)</span>
                                                        </span>
                                                    </li>
                                                    <li class="col-xl-6 mb-2">
                                                        <span class="me-1"><i
                                                                class="bi bi-circle-fill fs-10 me-2 text-warning"></i>Mobiles</span>
                                                        <span class="text-danger fw-semibold fs-12">
                                                            <span class="mx-1"><i class="fa fa-caret-down"></i></span>
                                                            <span class="">(13%)</span>
                                                        </span>
                                                    </li>
                                                    <li class="col-xl-6 mb-2">
                                                        <span class="me-1"><i
                                                                class="bi bi-circle-fill fs-10 me-2 text-info"></i>Tablets</span>
                                                        <span class="text-success fw-semibold fs-12">
                                                            <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                            <span class="">(62%)</span>
                                                        </span>
                                                    </li>
                                                    <li class="col-xl-6 mb-2">
                                                        <span class="me-1"><i
                                                                class="bi bi-circle-fill fs-10 me-2 text-success"></i>Laptops
                                                            Search</span>
                                                        <span class="text-success fw-semibold fs-12">
                                                            <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                            <span class="">(22.46%)</span>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-xl-6">
                                                <div id="lines-map" class="worldh world-map h-250"></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mt-4">
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="pe-2">
                                                                    <img src="{{asset('build/assets/images/flags-img/india_flag.jpg')}}"
                                                                        class="rounded-circle country-img w-28p h-28p" alt="img">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="mb-0">India</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="progress progress-xs mt-lg-0 mt-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                                                    style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h6 class="fs-14 mt-lg-0 mt-2">60%</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="pe-2">
                                                                    <img src="{{asset('build/assets/images/flags-img/malaysia.jpg')}}"
                                                                        class="rounded-circle country-img w-28p h-28p" alt="img">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="mb-0">Malaysia</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="progress progress-xs mt-lg-0 mt-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                                    style="width: 70%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h6 class="fs-14 mt-lg-0 mt-2">70%</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="pe-2">
                                                                    <img src="{{asset('build/assets/images/flags-img/argentina.jpg')}}"
                                                                        class="rounded-circle country-img w-28p h-28p" alt="img">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="mb-0">Europe</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="progress progress-xs mt-lg-0 mt-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                                    style="width: 50%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h6 class="fs-14 mt-lg-0 mt-2">50%</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="pe-2">
                                                                    <img src="{{asset('build/assets/images/flags-img/turkey.jpg')}}"
                                                                        class="rounded-circle country-img w-28p h-28p" alt="img">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="mb-0">Turkey</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="progress progress-xs mt-lg-0 mt-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                                    style="width: 80%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h6 class="fs-14 mt-lg-0 mt-2">80%</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="pe-2">
                                                                    <img src="{{asset('build/assets/images/flags-img/italy_flag.jpg')}}"
                                                                        class="rounded-circle country-img w-28p h-28p" alt="img">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="mb-0">Italy</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="progress progress-xs mt-lg-0 mt-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                                    style="width: 40%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <h6 class="fs-14 mt-lg-0 mt-2">40%</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-2 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-fill">
                                                <p class="mb-1 fs-5 fw-semibold text-default">1,773</p>
                                                <p class="mb-0 text-muted">Active Members</p>
                                                <p class="mb-0 fs-11"><a href="javascript:void(0);" class="text-success text-decoration-underline">View All</a></p>
                                            </div>
                                            <div class="ms-2">
                                                <span class="avatar text-bg-info rounded-circle fs-20"><i class="bi bi-people-fill"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-secondary-transparent rounded-circle fs-20 mb-3">
                                            <i class="bi bi-file-earmark-text  project  mx-auto text-secondary "></i>
                                        </div>
                                        <h6 class="mb-1 text-muted">Registrations</h6>
                                        <h3 class="fw-semibold">116</h3>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-primary-transparent rounded-circle fs-20 mb-3">
                                            <i class="ti-pulse  project  mx-auto text-primary "></i>
                                        </div>
                                        <h6 class="mb-1 text-muted">Total Profit</h6>
                                        <h3 class="fw-semibold">$46.352</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-2 col-xl-6">
                                <div class="card bg-primary img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="tx-fixed-white">
                                                <h2 class="mb-0 number-font">7,865</h2>
                                                <p class="mb-0">Total Followers </p>
                                            </div>
                                            <div class="ms-auto tx-fixed-white"> <i
                                                class="fa fa-user-o fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-secondary img-card box-secondary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="tx-fixed-white">
                                                <h2 class="mb-0 number-font">86,964</h2>
                                                <p class="mb-0">Total Likes</p>
                                            </div>
                                            <div class="ms-auto tx-fixed-white"> <i
                                                    class="fa fa-heart-o fs-30 ms-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card  bg-success img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="tx-fixed-white">
                                                <h2 class="mb-0 number-font">98</h2>
                                                <p class=" mb-0">Total Comments</p>
                                            </div>
                                            <div class="ms-auto tx-fixed-white"> <i
                                                    class="fa fa-comment-o  fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-info img-card box-info-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="tx-fixed-white">
                                                <h2 class="mb-0 number-font">893</h2>
                                                <p class=" mb-0">Total Posts</p>
                                            </div>
                                            <div class="ms-auto tx-fixed-white"> <i
                                                    class="fa fa-envelope-o fs-30 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- INTERNAL APEXCHART JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    
        <!-- JSVector Maps JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

        <!-- JSVector Maps MapsJS -->
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
        @vite('resources/assets/js/us-merc-en.js')
        @vite('resources/assets/js/russia.js')
        @vite('resources/assets/js/spain.js')
        @vite('resources/assets/js/canada.js')

@endsection
