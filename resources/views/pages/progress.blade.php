
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Progress</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Progress</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 10%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary" style="width: 20%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3 ">
                                                <div class="progress-bar bg-primary" style="width: 40%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-primary " style="width: 60%;"></div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-primary " style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Progress with label</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-default" style="width: 20%;">10%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-secondary" style="width: 30%;"> 20%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-success" style="width: 40%;"> 40%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-warning " style="width: 60%;"> 60%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-info" style="width: 80%;"> 80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 OPEN -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Progress Height</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-success" style="width: 30%;"></div>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-success" style="width: 60%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-success" style="width: 80%;"></div>
                                            </div>
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-success" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Mixed color Progress with Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="progress progress-xs mb-3">
                                                <div class="progress-bar bg-orange" style="width: 5%;"></div>
                                                <div class="progress-bar bg-warning" style="width: 5%;"></div>
                                                <div class="progress-bar bg-info" style="width: 5%;"></div>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-pink" style="width: 10%;"></div>
                                                <div class="progress-bar bg-yellow" style="width: 15%;"></div>
                                                <div class="progress-bar bg-teal" style="width: 15%;"></div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar bg-pink" style="width: 15%;"></div>
                                                <div class="progress-bar bg-blue" style="width: 20%;"></div>
                                                <div class="progress-bar bg-cyan" style="width: 30%;"></div>
                                            </div>

                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-green" style="width: 30%;"></div>
                                                <div class="progress-bar bg-pink" style="width: 20%;"></div>
                                                <div class="progress-bar bg-orange" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Striped Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="progress mb-3">
                                                <div class="progress-bar progress-bar-striped" role="progressbar" aria-label="Default striped example" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success striped example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3">
                                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-label="Danger striped example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Animated Striped Progress</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink"
                                                    style="width: 10%;">10%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-blue-1"
                                                    style="width: 20%;">20%</div>
                                            </div>
                                            <div class="progress progress-md mb-3">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow-1"
                                                    style="width: 40%;">40%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-green-1"
                                                    style="width: 60%;">60%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-3 OPEN -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Progress Style-1</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="mb-5">
                                                <div class="progress progress-sm progress-custom mb-2 progress-animate">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                                        <div class="progress-bar-value bg-success">55%</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="fs-13">
                                                        Raised: <span class="text-success">$3200</span>
                                                    </div>
                                                    <div class="fs-13">
                                                        Goal: <span class="text-success">$7700</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="progress progress-sm progress-custom mb-2 progress-animate">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <div class="progress-bar-value bg-info">70%</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="fs-13">
                                                        Raised: <span class="text-info">$4300</span>
                                                    </div>
                                                    <div class="fs-13">
                                                        Goal: <span class="text-info">$6400</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="progress progress-sm progress-custom mb-2 progress-animate">
                                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                        <div class="progress-bar-value bg-secondary">40%</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="fs-13">
                                                        Raised: <span class="text-secondary">$2340</span>
                                                    </div>
                                                    <div class="fs-13">
                                                        Goal: <span class="text-secondary">$5678</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Progress Style-2</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="mb-5">
                                                <div class="progress progress-sm progress-custom mb-2 progress-animate">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                        <div class="progress-bar-value progress-rounded bg-info">40%</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="fs-13">
                                                        Raised: <span class="text-info">$3200</span>
                                                    </div>
                                                    <div class="fs-13">
                                                        Goal: <span class="text-info">$7700</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="progress progress-sm progress-custom mb-2 progress-animate">
                                                    <div class="progress-bar bg-warning-gradient" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <div class="progress-bar-value progress-rounded bg-warning">60%</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="fs-13">
                                                        Raised: <span class="text-warning">$4300</span>
                                                    </div>
                                                    <div class="fs-13">
                                                        Goal: <span class="text-warning">$6400</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="progress progress-sm progress-custom mb-2 progress-animate">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                        <div class="progress-bar-value progress-rounded bg-success">20%</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="fs-13">
                                                        Raised: <span class="text-success">$2340</span>
                                                    </div>
                                                    <div class="fs-13">
                                                        Goal: <span class="text-success">$5678</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Progress Style-3</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="mb-5">
                                                <div class="progress progress-sm progress-custom1 mb-2">
                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                                <div class="float-end">
                                                    <div class="fs-13">
                                                        <span class="badge bg-info-transparent text-info">40%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="progress progress-sm progress-custom1 mb-2">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                </div>
                                                <div class="float-end">
                                                    <div class="fs-13">
                                                        <span class="badge bg-pink-transparent text-pink">60%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="progress progress-sm progress-custom1 mb-2">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                                                </div>
                                                <div class="float-end">
                                                    <div class="fs-13">
                                                        <span class="badge bg-danger-transparent text-danger">20%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-5 CLOSED -->


                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
