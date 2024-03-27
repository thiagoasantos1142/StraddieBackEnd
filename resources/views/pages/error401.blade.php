
@extends('layouts.custom-master')

@section('styles')



@endsection

@section('content')
	
                <!-- PAGE-CONTENT OPEN -->
                <div class="page-content error-page error2 tx-fixed-white">
                    <div class="container text-center">
                        <div class="error-template">
                            <h1 class="display-1 mb-2">4<span class="custom-emoji"><svg xmlns="http://www.w3.org/2000/svg" height="140" width="140" data-name="Layer 1" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#ffffff"/><path fill="#00a5a2" d="M14.99951,17.0918a.99473.99473,0,0,1-.64209-.23438,3.766,3.766,0,0,0-4.71484,0,.99955.99955,0,1,1-1.28516-1.53125,5.81162,5.81162,0,0,1,7.28516,0,.99974.99974,0,0,1-.64307,1.76563Z"/><circle cx="15" cy="10" r="1" fill="#00a5a2"/><circle cx="9" cy="10" r="1" fill="#00a5a2"/></svg></span>1</h1>
                            <h5 class="error-details">
                                Sorry, an error has occured, Requested page not found!
                            </h5>
                            <div class="text-center">
                                <a class="btn btn-secondary mt-5" href="{{url('index')}}"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PAGE-CONTENT OPEN CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
