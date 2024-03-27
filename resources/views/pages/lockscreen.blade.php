
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
        
                <div class="">
                    <div class="text-center">
                        <a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/desktop-dark.png')}}" class="header-brand-img" alt=""></a>
                    </div>
                </div>
                
                <!-- CONTAINER OPEN -->
                <div class="container-lg">
                    <div class="row justify-content-center mt-4 mx-auto">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card shadow-none">
                                <div class="card-body p-sm-6">
                                    <div class="text-center mb-4">
                                        <h4 class="mb-1">Lock Screen</h4>
                                        <p>Enter your password to unlock the screen.</p>
                                    </div>
                                    <div class="text-center mb-4">
                                        <img src="{{asset('build/assets/images/users/21.jpg')}}" alt="lockscreen image" class="avatar avatar-xxl brround mb-2">
                                        <h6>Percy Kewshun</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                                                <input class="form-control ms-0" type="email" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-grid mb-3">
                                                <a href="{{url('index')}}" class="btn btn-primary"> Unlock</a>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 tx-14">I forgot password
                                                    <a href="{{url('forgot-password')}}" class="tx-primary ms-1 text-decoration-underline">Give me Hint</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
