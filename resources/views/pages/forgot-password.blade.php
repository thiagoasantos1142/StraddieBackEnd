
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
	
                <!-- CONTAINER OPEN -->                
                <div class="">
                    <div class="text-center">
                        <a href="{{url('index')}}"><img src="{{asset('build/assets/images/brand/desktop-dark.png')}}" class="header-brand-img m-0" alt=""></a>
                    </div>
                </div>
                <div class="container-lg">
                    <div class="row justify-content-center mt-4 mx-0">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card shadow-none">
                                <div class="card-body p-sm-6">
                                    <div class="text-center mb-4">
                                        <h4 class="mb-1">Forgot Password?</h4>
                                        <p>Enter your email address registered on your account</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                                <input class="form-control ms-0" type="email" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-grid mb-3">
                                                <a href="{{url('index')}}" class="btn btn-primary"> Submit</a>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 tx-14">Remembered your password?
                                                    <a href="{{url('login')}}" class="tx-primary ms-1 text-decoration-underline">Sign In</a>
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
