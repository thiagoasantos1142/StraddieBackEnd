
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">About</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extension</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                            <!-- ROW-2 OPEN-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about-img">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-4 col-10">
                                                <div class="main-heading text-center">
                                                    <h4 class="display-4 fw-semibold">About us</h4>
                                                    <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-2 CLOSED -->

                            <!-- ROW-3 -->
                            <div class="container my-5">
                                <div class="text-center mb-4">
                                    <h4 class="mb-1">Meet Our Team</h4>
                                    <p>Vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-xl-3">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <div class="text-center mt-4">
                                                    <div class="team-img">
                                                        <img src="{{asset('build/assets/images/users/11.jpg')}}" class="rounded-circle" alt="img">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6 class="mb-0">Steve Stella</h6>
                                                    <p class="fs-12 text-muted mb-1">Web Developer</p>
                                                    <p class="fs-13 mb-0"> Nullam dictum felis eu pede mollis pretium. Integer tincidunt. </p>
                                                </div>
                                            </div>
                                            <div class="card-footer py-3">
                                                <div class="text-center">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-icon btn-blue-light rounded-pill"><i class="fa fa-facebook"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger-light rounded-pill ms-2"><i class="fa fa-instagram"></i></button>
                                                        <button type="button" class="btn btn-icon btn-info-light rounded-pill ms-2"><i class="fa fa-twitter"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <div class="text-center mt-4">
                                                    <div class="team-img">
                                                        <img src="{{asset('build/assets/images/users/18.jpg')}}" class="rounded-circle" alt="img">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6 class="mb-0">Joy Mrack</h6>
                                                    <p class="fs-12 text-muted mb-1">Web Developer</p>
                                                    <p class="fs-13 mb-0"> Elementum semper nisi. nu Aenean vulputate eleifend tellus.  </p>
                                                </div>
                                            </div>
                                            <div class="card-footer py-3">
                                                <div class="text-center">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-icon btn-blue-light rounded-pill"><i class="fa fa-facebook"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger-light rounded-pill ms-2"><i class="fa fa-instagram"></i></button>
                                                        <button type="button" class="btn btn-icon btn-info-light rounded-pill ms-2"><i class="fa fa-twitter"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <div class="text-center mt-4">
                                                    <div class="team-img">
                                                        <img src="{{asset('build/assets/images/users/7.jpg')}}" class="rounded-circle" alt="img">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6 class="mb-0">Broad sit</h6>
                                                    <p class="fs-12 text-muted mb-1">Web Developer</p>
                                                    <p class="fs-13 mb-0"> Curabitur ullamcorper ultricies nisi. Nam eget dui Etiam. </p>
                                                </div>
                                            </div>
                                            <div class="card-footer py-3">
                                                <div class="text-center">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-icon btn-blue-light rounded-pill"><i class="fa fa-facebook"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger-light rounded-pill ms-2"><i class="fa fa-instagram"></i></button>
                                                        <button type="button" class="btn btn-icon btn-info-light rounded-pill ms-2"><i class="fa fa-twitter"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <div class="text-center mt-4">
                                                    <div class="team-img">
                                                        <img src="{{asset('build/assets/images/users/13.jpg')}}" class="rounded-circle" alt="img">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-2">
                                                    <h6 class="mb-0">Bin Crock</h6>
                                                    <p class="fs-12 text-muted mb-1">Web Developer</p>
                                                    <p class="fs-13 mb-0"> Nullam dictum felis eu pede mollis pretium. Integer tincidunt. </p>
                                                </div>
                                            </div>
                                            <div class="card-footer py-3">
                                                <div class="text-center">
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-icon btn-blue-light rounded-pill"><i class="fa fa-facebook"></i></button>
                                                        <button type="button" class="btn btn-icon btn-danger-light rounded-pill ms-2"><i class="fa fa-instagram"></i></button>
                                                        <button type="button" class="btn btn-icon btn-info-light rounded-pill ms-2"><i class="fa fa-twitter"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-3 END -->

                            <!-- ROW-4 -->
                            <div class="bg-white rounded-3">
                                <div class="container my-5">
                                    <div class="row py-7">
                                        <div class="text-center mb-4">
                                            <h4 class="mb-1">Our Mission</h4>
                                            <p>Vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="d-flex">
                                                <span>
                                                    <i class="mdi mdi-chevron-double-right   fs-24 text-primary lh-1"></i>
                                                </span>
                                                <div class="ms-3 mb-3">
                                                    <h6 class="fw-bold">Ultra Flexible & Secure</h6>
                                                    <p class="fs-14">The Vexel admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <span>
                                                    <i class="mdi mdi-chevron-double-right   fs-24 text-secondary lh-1"></i>
                                                </span>
                                                <div class="ms-3 mb-3">
                                                    <h6 class="fw-bold">It Allows easy customization</h6>
                                                    <p class="fs-14">The Vexel admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <span>
                                                    <i class="mdi mdi-chevron-double-right   fs-24 text-warning lh-1"></i>
                                                </span>
                                                <div class="ms-3 mb-3">
                                                    <h6 class="fw-bold">Comfortable & Fast Response</h6>
                                                    <p class="fs-14">
                                                        The Vexel admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="d-flex">
                                                <span>
                                                    <i class="mdi mdi-chevron-double-right   fs-24 text-primary lh-1"></i>
                                                </span>
                                                <div class="ms-3 mb-3">
                                                    <h6 class="fw-bold">Care, Share & be Fair</h6>
                                                    <p class="fs-14">The Vexel admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <span>
                                                    <i class="mdi mdi-chevron-double-right   fs-24 text-secondary lh-1"></i>
                                                </span>
                                                <div class="ms-3 mb-3">
                                                    <h6 class="fw-bold">Healthy Communication</h6>
                                                    <p class="fs-14">The Vexel admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <span>
                                                    <i class="mdi mdi-chevron-double-right   fs-24 text-warning lh-1"></i>
                                                </span>
                                                <div class="ms-3 mb-3">
                                                    <h6 class="fw-bold">Bulids a positive Team spirit</h6>
                                                    <p class="fs-14">
                                                        The Vexel admin code is maintained very
                                                        cleanly and well-structured with proper
                                                        comments.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-4 CLOSED -->

                            <!-- ROW-5 -->
                            <div class="container my-5">
                                <div class="row">
                                    <div class="text-center mb-4">
                                        <h4 class="mb-1">Our Services</h4>
                                        <p>Vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card shadow-none">
                                            <div class="card-body text-center py-6">
                                                <div class="avatar avatar-xl bg-primary rounded-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="35px" width="35px" fill="#fff" viewBox="0 0 64 64" id="management"><path d="M23 52h-1v-6.95a1 1 0 0 0-.133-.5l-6.912-11.968a2.279 2.279 0 0 0-.14-.212A4.036 4.036 0 0 0 12 30.633V22a4 4 0 0 0-8 0v24a1 1 0 0 0 .219.625L8 51.351V52H7a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1ZM9.781 50.375 6 45.649V22a2 2 0 0 1 4 0v8.905a4.317 4.317 0 0 0-.5.23A4.014 4.014 0 0 0 8.034 36.6l5.72 9.9 1.732-1-5.72-9.9a2.007 2.007 0 0 1 .725-2.73 1.856 1.856 0 0 1 .651-.231c.034-.005.314-.04.358-.04a1.95 1.95 0 0 1 1.008.28 1.886 1.886 0 0 1 .653.615c.019.028.052.079.073.105L20 45.317V52H10v-1a1 1 0 0 0-.219-.625ZM22 60H8v-6h14Z"></path><path d="M18 56h2v2h-2zM56 18a4 4 0 0 0-4 4v8.633a3.852 3.852 0 0 0-1.492.506 3.893 3.893 0 0 0-1.322 1.23 2.354 2.354 0 0 0-.152.231l-6.9 11.951a1 1 0 0 0-.133.5V52H41a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1h-1v-.649l3.781-4.726A1 1 0 0 0 60 46V22a4 4 0 0 0-4-4Zm0 42H42v-6h14Zm2-14.351-3.781 4.726A1 1 0 0 0 54 51v1H44v-6.683l6.779-11.74c.022-.027.041-.054.06-.082A2.031 2.031 0 0 1 52.5 32.6c.044 0 .324.035.357.04a1.837 1.837 0 0 1 .641.225 2.009 2.009 0 0 1 .735 2.735l-5.719 9.9 1.732 1 5.72-9.9A3.908 3.908 0 0 0 54 30.905V22a2 2 0 0 1 4 0Z"></path><path d="M44 56h2v2h-2zM18.858 18.99l2.682.383a10.96 10.96 0 0 0 .678 1.639l-1.624 2.166a1 1 0 0 0 .093 1.307l2.828 2.828a1 1 0 0 0 1.307.093l2.166-1.624a10.96 10.96 0 0 0 1.639.678l.383 2.682A1 1 0 0 0 30 30h4a1 1 0 0 0 .99-.858l.383-2.682a10.9 10.9 0 0 0 1.639-.678l2.167 1.624a1 1 0 0 0 1.306-.093l2.828-2.828a1 1 0 0 0 .093-1.307l-1.625-2.166a10.86 10.86 0 0 0 .679-1.639l2.682-.383A1 1 0 0 0 46 18v-4a1 1 0 0 0-.858-.99l-2.682-.383a10.86 10.86 0 0 0-.679-1.639l1.625-2.166a1 1 0 0 0-.093-1.307l-2.828-2.828a1 1 0 0 0-1.306-.093l-2.167 1.624a10.9 10.9 0 0 0-1.639-.678l-.383-2.682A1 1 0 0 0 34 2h-4a1 1 0 0 0-.99.858l-.383 2.682a10.96 10.96 0 0 0-1.639.678l-2.166-1.624a1 1 0 0 0-1.307.093l-2.828 2.828a1 1 0 0 0-.093 1.307l1.624 2.166a10.96 10.96 0 0 0-.678 1.639l-2.682.383A1 1 0 0 0 18 14v4a1 1 0 0 0 .858.99ZM20 14.867l2.463-.352a1 1 0 0 0 .828-.743 8.892 8.892 0 0 1 .975-2.356 1 1 0 0 0-.06-1.111l-1.492-1.99 1.6-1.6 1.99 1.492a1 1 0 0 0 1.111.06 8.892 8.892 0 0 1 2.356-.975 1 1 0 0 0 .743-.828L30.867 4h2.266l.351 2.463a1 1 0 0 0 .744.828 8.859 8.859 0 0 1 2.356.975 1 1 0 0 0 1.11-.06l1.991-1.492 1.6 1.6-1.492 1.99a1 1 0 0 0-.061 1.111 8.923 8.923 0 0 1 .977 2.357 1 1 0 0 0 .827.742l2.464.353v2.266l-2.463.352a1 1 0 0 0-.827.742 8.923 8.923 0 0 1-.977 2.357 1 1 0 0 0 .061 1.111l1.492 1.99-1.6 1.6-1.991-1.492a1 1 0 0 0-1.11-.06 8.859 8.859 0 0 1-2.356.975 1 1 0 0 0-.744.828L33.133 28h-2.266l-.352-2.463a1 1 0 0 0-.743-.828 8.892 8.892 0 0 1-2.356-.975 1 1 0 0 0-1.111.06l-1.99 1.492-1.6-1.6 1.492-1.99a1 1 0 0 0 .06-1.111 8.892 8.892 0 0 1-.975-2.356 1 1 0 0 0-.828-.743L20 17.133Z"></path><path d="M32 22a6 6 0 1 0-6-6 6.006 6.006 0 0 0 6 6Zm0-10a4 4 0 1 1-4 4 4 4 0 0 1 4-4ZM31 6h2v2h-2zM24.222 9.636l1.414-1.414 1.414 1.414-1.414 1.414zM22 15h2v2h-2zM24.222 22.364l1.414-1.414 1.414 1.414-1.414 1.414zM31 24h2v2h-2zM36.95 22.364l1.414-1.414 1.414 1.414-1.414 1.414zM40 15h2v2h-2zM36.95 9.636l1.414-1.414 1.414 1.414-1.414 1.414zM50 10a1 1 0 0 1 1-1h5.586l-1.293 1.293 1.414 1.414 3-3a1 1 0 0 0 0-1.414l-3-3-1.414 1.414L56.586 7H51a3 3 0 0 0-3 3v10h2ZM48 22h2v2h-2zM48 26h2v2h-2z"></path><path d="M52 11h2v2h-2zM52 15h2v2h-2zM7.293 11.707l1.414-1.414L7.414 9H13a1 1 0 0 1 1 1v10h2V10a3 3 0 0 0-3-3H7.414l1.293-1.293-1.414-1.414-3 3a1 1 0 0 0 0 1.414ZM14 22h2v2h-2zM14 26h2v2h-2z"></path><path d="M10 11h2v2h-2zM10 15h2v2h-2zM26.293 32.293l-3 3 1.414 1.414L26 35.414V43h2v-7.586l1.293 1.293 1.414-1.414-3-3a1 1 0 0 0-1.414 0ZM26 45h2v2h-2zM26 49h2v2h-2zM40.707 35.293l-3-3a1 1 0 0 0-1.414 0l-3 3 1.414 1.414L36 35.414V43h2v-7.586l1.293 1.293ZM36 45h2v2h-2zM36 49h2v2h-2z"></path></svg>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="text-dark mb-1">Project Management</h6>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card bg-primary-transparent shadow-none">
                                            <div class="card-body text-center py-6">
                                                <div class="avatar avatar-xl bg-white rounded-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="35px" width="35px" fill="#00a5a2" data-name="Layer 1" viewBox="0 0 128 128" id="marketing"><path d="M93.94 48.352 94 26.005a4 4 0 0 0-6.847-2.808c-5.178 5.288-18.452 18.82-48.099 23.582A5.995 5.995 0 0 0 34 44H16a6.007 6.007 0 0 0-5.762 4.344c-1.195-.042-2.4-.09-3.634-.16A6.017 6.017 0 0 0 2.12 49.85a6.687 6.687 0 0 0-2.087 4.827L0 67.012a6.695 6.695 0 0 0 2.11 4.896 5.878 5.878 0 0 0 4.463 1.621c1.215-.085 2.402-.148 3.58-.204a6.003 6.003 0 0 0 5.598 4.662c.783 1.604 1.54 3.2 2.185 4.603 3.21 6.256 1.619 14.494.786 17.746a2.961 2.961 0 0 0 .85 2.936 2.859 2.859 0 0 0 2.817.562l13.647-4.882a2.971 2.971 0 0 0 1.709-1.616 3.056 3.056 0 0 0 .01-2.42L32.03 81.683A34.112 34.112 0 0 1 30.553 78H34a6.002 6.002 0 0 0 5.314-3.224c28.975 4.77 42.372 18.58 47.623 24.002a4.035 4.035 0 0 0 4.375.928 3.972 3.972 0 0 0 2.498-3.686l.06-22.34a13.953 13.953 0 0 0 .07-25.328zM10 69.324c-1.22.06-2.451.127-3.706.215a1.943 1.943 0 0 1-1.452-.553A2.717 2.717 0 0 1 4 67.024l.034-12.336a2.703 2.703 0 0 1 .83-1.927 2.031 2.031 0 0 1 1.514-.585c1.219.07 2.423.118 3.622.16zM33.67 95.55l-10.621 3.8c.9-4.44 1.722-12.2-1.516-18.508-.237-.516-.716-1.55-1.33-2.842h6.145a37.45 37.45 0 0 0 2.038 5.33zM36 72a2.002 2.002 0 0 1-2 2H16a2.002 2.002 0 0 1-2-2V50a2.002 2.002 0 0 1 2-2h18a2.002 2.002 0 0 1 2 2zm54 24-.19-.005C84.302 90.308 70.227 75.8 40 70.827V50.634a102.825 102.825 0 0 0 25.396-7.422A76.449 76.449 0 0 0 90 26zm3.883-26.936.044-16.098a9.957 9.957 0 0 1-.044 16.098zM107 55a1.993 1.993 0 0 0 1.414-.586l6-6a2 2 0 0 0-2.828-2.828l-6 6A2 2 0 0 0 107 55zm-1.414 15.414 6 6a2 2 0 0 0 2.828-2.828l-6-6a2 2 0 0 0-2.828 2.828z"></path><circle cx="25" cy="61" r="2" transform="rotate(-89.883 25 61)"></circle><path d="M76.002 17a1.992 1.992 0 0 0 1.168-.377l12.514-9.018a1.996 1.996 0 0 0 3.843.84l2.325-5.688a2 2 0 0 0-2.116-2.74L87.715.82a1.997 1.997 0 0 0-.663 3.75L74.83 13.377A2 2 0 0 0 76 17zm36-3a1.997 1.997 0 0 0 1.16-.372l9.274-6.624a1.981 1.981 0 0 0 1.755 1.06 2.002 2.002 0 0 0 1.828-1.187l1.808-4.064a2 2 0 0 0-2.07-2.799l-4.683.574a1.993 1.993 0 0 0-1.219 3.342l-9.018 6.442A2 2 0 0 0 112.002 14z"></path><circle cx="105.469" cy="16.844" r="2" transform="rotate(-89.883 105.468 16.844)"></circle><circle cx="69" cy="20" r="2" transform="rotate(-89.883 69 20)"></circle><path d="M93.527 119.554a1.996 1.996 0 0 0-3.843.84l-12.514-9.017a2 2 0 0 0-2.34 3.246l12.222 8.806a1.997 1.997 0 0 0 .663 3.75l6.02.803a2 2 0 0 0 2.117-2.74zm32.492 1.569a1.99 1.99 0 0 0-3.583-.127l-9.273-6.624a2 2 0 0 0-2.326 3.256l9.02 6.441a1.977 1.977 0 0 0-.525 1.114 2 2 0 0 0 1.742 2.229l4.683.573A2.045 2.045 0 0 0 126 128a2 2 0 0 0 1.826-2.814z"></path><circle cx="105.469" cy="111.156" r="2" transform="translate(-.227 .216)"></circle><circle cx="69" cy="108" r="2" transform="translate(-.22 .141)"></circle><path d="M120 61a2 2 0 0 0-2-2h-10a2 2 0 0 0 0 4h10a2 2 0 0 0 2-2zM59 33a6 6 0 1 0-6-6 6.007 6.007 0 0 0 6 6zm0-8a2 2 0 1 1-2 2 2.002 2.002 0 0 1 2-2zm0 70a6 6 0 1 0 6 6 6.007 6.007 0 0 0-6-6zm0 8a2 2 0 1 1 2-2 2.002 2.002 0 0 1-2 2z"></path></svg>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="text-dark mb-1">Marketing & Communication</h6>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card shadow-none">
                                            <div class="card-body text-center py-6">
                                                <div class="avatar avatar-xl bg-primary rounded-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="35px" width="35px" fill="#fff" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="design-tools"><path d="M27.4,12.2C27.5,12.2,27.5,12.2,27.4,12.2L31,3c0.1-0.2,0-0.4-0.1-0.5c-0.1-0.1-0.4-0.2-0.5-0.1l-9.2,3.5c0,0,0,0,0,0
                                                        C21.1,5.9,21,5.9,21,6l-6.4,6.4c-0.7-0.4-1.3-0.7-1.9-1c0-0.3,0-0.6,0-1l0-0.2c-0.1-3.2-2.2-5.6-5.3-6c-0.4,0-0.8,0-1.2-0.1
                                                        c-0.6,0-1.1,0-1.6-0.1C3.4,3.7,1.9,2.5,2.2,1.1c0,0,0-0.1,0-0.1c0-0.2-0.2-0.4-0.4-0.5C1.5,0.5,1.3,0.7,1.2,0.9
                                                        C0.8,3.2,0.9,5.9,1.7,8.1c1.2,3.5,4.1,5.8,8.1,6.2c0,0,0,0,0.1,0c0.1,0,0.2,0,0.3-0.1c0.2,0.5,0.5,1.1,0.9,1.7l-4.8,4.8c0,0,0,0,0,0
                                                        s0,0,0,0L4,23l-1.4,1.4c-1,1-1,2.6,0,3.5l0,0l2.8,2.8c0.5,0.5,1.1,0.7,1.8,0.7c0,0,0,0,0,0s0,0,0,0c0,0,0.1,0,0.1,0
                                                        c0.6,0,1.2-0.3,1.7-0.7l7.7-7.8c0.2,0.2,0.4,0.4,0.6,0.6c2.5,2.5,5.2,4.7,7.4,6.1c1.6,1,2.9,1.6,3.8,1.6c0.4,0,0.8-0.1,1.1-0.4
                                                        c1.8-1.8-3.3-8.3-7.3-12.3c-0.2-0.2-0.4-0.4-0.6-0.6l5.7-5.7C27.4,12.3,27.4,12.2,27.4,12.2z M29.7,3.7L29,5.3c-0.4-0.2-0.8-0.6-1-1
                                                        L29.7,3.7z M21.1,10.1C21.1,10.1,21.1,10.1,21.1,10.1c0.3-0.3,0.6-0.4,1-0.4h1c0.3,0,0.5,0.2,0.5,0.5v1c0,0.4-0.2,0.8-0.4,1.1
                                                        L19.5,16c-0.8-0.7-1.6-1.3-2.3-1.9L21.1,10.1z M20.8,8.3c0,0.4-0.1,0.8-0.4,1c0,0,0,0,0,0l-4.1,4.1c-0.3-0.2-0.6-0.4-0.8-0.6
                                                        l5.3-5.3V8.3z M9.7,13.3c-3.5-0.5-6-2.5-7.1-5.5C2.2,6.4,2,4.9,2,3.5C2.6,4.2,3.5,4.8,4.4,5C5,5.1,5.7,5.1,6.3,5.1
                                                        c0.4,0,0.8,0,1.1,0c2.5,0.3,4.3,2.3,4.4,5l0,0.2c0,0.5,0,0.8,0,0.8L9.7,13.3z M12.2,12.2c0.7,0.3,1.4,0.6,2.2,1.2
                                                        c0.5,0.3,1,0.6,1.6,1.1c0,0,0,0,0.1,0c0.5,0.4,1,0.8,1.6,1.2c-0.6,1.4-1.8,2.6-3.2,3.2c-0.4-0.5-0.9-1.1-1.2-1.6c0,0,0,0,0-0.1
                                                        c-0.4-0.6-0.8-1.1-1.1-1.6c-0.5-0.8-0.9-1.6-1.2-2.2L12.2,12.2z M12.8,18.4c0.6,0.7,1.2,1.5,1.9,2.3l-3.9,3.9l-2.1-2.1L12.8,18.4z
                                                        M11.6,16.8c0.2,0.3,0.4,0.5,0.6,0.8L8,21.8l-0.7-0.7L11.6,16.8z M8.2,30c-0.6,0.6-1.5,0.6-2.1,0l-2.8-2.8c0,0,0,0,0,0
                                                        C3.2,27,3,26.9,3,26.7c0,0,0,0,0,0c-0.1-0.2-0.1-0.3-0.1-0.5c0,0,0,0,0,0c0,0,0,0,0,0c0-0.2,0-0.4,0.1-0.5c0,0,0,0,0,0
                                                        c0.1-0.2,0.2-0.3,0.3-0.5c0,0,0,0,0,0l1.3-1.3l0.4-0.4l4.9,4.9L8.2,30z M10.7,27.6l-5-5l0.8-0.8l1,1c0,0,0,0,0,0l2.8,2.8
                                                        c0,0,0,0,0,0l1,1L10.7,27.6z M11.5,25.3l3.8-3.8c0.2,0.2,0.4,0.5,0.7,0.7l-3.8,3.8L11.5,25.3z M28.8,30.1c-0.2,0.2-1.2,0.2-3.6-1.3
                                                        c-2.2-1.4-4.7-3.5-7.2-6c-0.3-0.3-0.6-0.6-0.9-0.9c-0.5-0.5-0.9-1-1.3-1.5c-0.2-0.2-0.4-0.4-0.6-0.7c1.4-0.7,2.6-1.9,3.3-3.3
                                                        c0.2,0.2,0.4,0.3,0.6,0.5c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0.5,0.4,1,0.9,1.5,1.3c0.3,0.3,0.6,0.6,0.9,0.9
                                                        C27.5,25.2,29.4,29.5,28.8,30.1z M21,17.3c-0.2-0.2-0.5-0.5-0.7-0.7l3.7-3.7c0,0,0,0,0.1-0.1c0.3-0.3,0.7-0.4,1.1-0.4h0.8L21,17.3z
                                                        M25,11.5c-0.1,0-0.2,0-0.4,0c0-0.1,0-0.2,0-0.4v-1c0-0.8-0.7-1.5-1.5-1.5h-1c-0.1,0-0.2,0-0.4,0c0-0.1,0-0.2,0-0.4V6.7l5.2-2
                                                        c0.3,0.7,0.9,1.3,1.6,1.6l-2,5.2H25z"></path></svg>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="text-dark mb-1">Design & Development</h6>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card shadow-none">
                                            <div class="card-body text-center py-6">
                                                <div class="avatar avatar-xl bg-primary rounded-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="35px" width="35px" fill="#fff" viewBox="0 0 1024 1024" id="support"><path d="M805.7 789.1c6.9 0 13.8.3 20.7-.4 16-1.6 30.8-5.5 44.9-13.3 25.2-13.9 44.6-38.9 51.9-66.7 5.6-21.4 3.6-45.1 3.6-67V478c0-20.4-5.1-40.9-16-58.3-15.2-24.2-40.1-43-68.3-48.9-21.2-4.4-47.4-4.6-68.1 2-27.3 8.7-52 28.2-64.7 54.3-8.1 16.6-11.9 33.8-11.9 52.3v196.3c0 13.9 1.2 28 6.2 41.1 10.3 26.8 29.6 50.3 56.3 61.9 14.5 6.5 29.3 10.2 45.4 10.4 15.7.1 30.7-13.9 30-30-.7-16.4-13.2-29.9-30-30-3.7 0-7.3-.3-11-.8 2.7.4 5.3.7 8 1.1-6.7-1-13.1-2.8-19.3-5.4l7.2 3c-4.4-1.9-8.7-4.2-12.7-6.8-.2-.1-3.2-2-3.2-2.3 0 .1 6.6 5.5 2.5 1.9-1.8-1.6-3.6-3.1-5.3-4.8-1.5-1.5-3-3.1-4.4-4.8-1.7-2-3.3-5.5 1.4 2-.7-1.1-1.5-2.1-2.3-3.2-2.7-4-4.9-8.3-6.8-12.7l3 7.2c-2.6-6.2-4.4-12.6-5.4-19.3.4 2.7.7 5.3 1.1 8-1.2-9.3-.8-18.9-.8-28.3V498.5c0-11-.7-22.3.8-33.2-.4 2.7-.7 5.3-1.1 8 1-6.7 2.8-13.1 5.4-19.3l-3 7.2c1.9-4.4 4.2-8.7 6.8-12.7.1-.2 2-3.2 2.3-3.2-.1 0-5.5 6.6-1.9 2.5 1.6-1.8 3.1-3.6 4.8-5.3 1.5-1.5 3.1-3 4.8-4.4 2-1.7 5.5-3.3-2 1.4 1.1-.7 2.1-1.5 3.2-2.3 4-2.7 8.3-4.9 12.7-6.8l-7.2 3c6.2-2.6 12.6-4.4 19.3-5.4-2.7.4-5.3.7-8 1.1 11.2-1.5 23.8-1.5 35.1 0-2.7-.4-5.3-.7-8-1.1 6.7 1 13.1 2.8 19.3 5.4l-7.2-3c4.4 1.9 8.7 4.2 12.7 6.8.2.1 3.2 2 3.2 2.3 0-.1-6.6-5.5-2.5-1.9 1.8 1.6 3.6 3.1 5.3 4.8 1.5 1.5 3 3.1 4.4 4.8 1.7 2 3.3 5.5-1.4-2 .7 1.1 1.5 2.1 2.3 3.2 2.7 4 4.9 8.3 6.8 12.7l-3-7.2c2.6 6.2 4.4 12.6 5.4 19.3-.4-2.7-.7-5.3-1.1-8 1.2 9.3.8 18.9.8 28.3v165.4c0 11 .7 22.3-.8 33.2.4-2.7.7-5.3 1.1-8-1 6.7-2.8 13.1-5.4 19.3l3-7.2c-1.9 4.4-4.2 8.7-6.8 12.7-.1.2-2 3.2-2.3 3.2.1 0 5.5-6.6 1.9-2.5-1.6 1.8-3.1 3.6-4.8 5.3-1.5 1.5-3.1 3-4.8 4.4-2 1.7-5.5 3.3 2-1.4-1.1.7-2.1 1.5-3.2 2.3-4 2.7-8.3 4.9-12.7 6.8l7.2-3c-6.2 2.6-12.6 4.4-19.3 5.4 2.7-.4 5.3-.7 8-1.1-8 1.1-16 .8-24.1.8-15.7 0-30.7 13.8-30 30 .7 16.2 13.1 30 30 30zm-600.4 0c6.9 0 13.8.3 20.7-.4 16-1.6 30.8-5.5 44.9-13.3 25.2-13.9 44.6-38.9 51.9-66.7 5.6-21.4 3.6-45.1 3.6-67V478c0-20.4-5.1-40.9-16-58.3-15.2-24.2-40.1-43-68.3-48.9-21.2-4.4-47.4-4.6-68.1 2-27.3 8.7-52 28.2-64.7 54.3-8.1 16.6-11.9 33.8-11.9 52.3v196.3c0 13.9 1.2 28 6.2 41.1 10.3 26.8 29.6 50.3 56.3 61.9 14.5 6.5 29.3 10.2 45.4 10.4 15.7.1 30.7-13.9 30-30-.7-16.4-13.2-29.9-30-30-3.7 0-7.3-.3-11-.8 2.7.4 5.3.7 8 1.1-6.7-1-13.1-2.8-19.3-5.4l7.2 3c-4.4-1.9-8.7-4.2-12.7-6.8-.2-.1-3.2-2-3.2-2.3 0 .1 6.6 5.5 2.5 1.9-1.8-1.6-3.6-3.1-5.3-4.8-1.5-1.5-3-3.1-4.4-4.8-1.7-2-3.3-5.5 1.4 2-.7-1.1-1.5-2.1-2.3-3.2-2.7-4-4.9-8.3-6.8-12.7l3 7.2c-2.6-6.2-4.4-12.6-5.4-19.3.4 2.7.7 5.3 1.1 8-1.2-9.3-.8-18.9-.8-28.3V498.5c0-11-.7-22.3.8-33.2-.4 2.7-.7 5.3-1.1 8 1-6.7 2.8-13.1 5.4-19.3l-3 7.2c1.9-4.4 4.2-8.7 6.8-12.7.1-.2 2-3.2 2.3-3.2-.1 0-5.5 6.6-1.9 2.5 1.6-1.8 3.1-3.6 4.8-5.3 1.5-1.5 3.1-3 4.8-4.4 2-1.7 5.5-3.3-2 1.4 1.1-.7 2.1-1.5 3.2-2.3 4-2.7 8.3-4.9 12.7-6.8l-7.2 3c6.2-2.6 12.6-4.4 19.3-5.4-2.7.4-5.3.7-8 1.1 11.2-1.5 23.8-1.5 35.1 0-2.7-.4-5.3-.7-8-1.1 6.7 1 13.1 2.8 19.3 5.4l-7.2-3c4.4 1.9 8.7 4.2 12.7 6.8.2.1 3.2 2 3.2 2.3 0-.1-6.6-5.5-2.5-1.9 1.8 1.6 3.6 3.1 5.3 4.8 1.5 1.5 3 3.1 4.4 4.8 1.7 2 3.3 5.5-1.4-2 .7 1.1 1.5 2.1 2.3 3.2 2.7 4 4.9 8.3 6.8 12.7l-3-7.2c2.6 6.2 4.4 12.6 5.4 19.3-.4-2.7-.7-5.3-1.1-8 1.2 9.3.8 18.9.8 28.3v165.4c0 11 .7 22.3-.8 33.2.4-2.7.7-5.3 1.1-8-1 6.7-2.8 13.1-5.4 19.3l3-7.2c-1.9 4.4-4.2 8.7-6.8 12.7-.1.2-2 3.2-2.3 3.2.1 0 5.5-6.6 1.9-2.5-1.6 1.8-3.1 3.6-4.8 5.3-1.5 1.5-3.1 3-4.8 4.4-2 1.7-5.5 3.3 2-1.4-1.1.7-2.1 1.5-3.2 2.3-4 2.7-8.3 4.9-12.7 6.8l7.2-3c-6.2 2.6-12.6 4.4-19.3 5.4 2.7-.4 5.3-.7 8-1.1-8 1.1-16 .8-24.1.8-15.7 0-30.7 13.8-30 30 .7 16.2 13.2 30 30 30z"></path><path d="M157.3 674.6V443.9c0-21.6.6-43.1 3.5-64.6-.4 2.7-.7 5.3-1.1 8 4.6-33.6 13.6-66.4 26.8-97.6l-3 7.2c7.6-17.9 16.6-35.3 26.8-51.9 5-8.1 10.2-15.9 15.8-23.6 1.4-2 2.9-3.9 4.3-5.8.5-.7 1.1-1.4 1.6-2.1 3.2-4.3-4.8 6.1-1.5 1.9 3-3.8 6-7.6 9.2-11.2 12.3-14.6 25.8-28.3 40.1-40.9 3.5-3 7-6 10.6-9 1.7-1.4 3.4-2.8 5.1-4.1 1.7-1.4 6-4.5-1.9 1.4 1.1-.8 2.1-1.6 3.2-2.4 7.7-5.8 15.7-11.4 23.9-16.6 18.3-11.7 37.5-21.8 57.5-30.3l-7.2 3c31.2-13.2 64-22.2 97.6-26.8-2.7.4-5.3.7-8 1.1 34.1-4.6 68.8-4.6 102.9 0-2.7-.4-5.3-.7-8-1.1 33.6 4.6 66.4 13.6 97.6 26.8l-7.2-3c17.9 7.6 35.3 16.6 51.9 26.8 8.1 5 15.9 10.2 23.6 15.8 2 1.4 3.9 2.9 5.8 4.3.7.5 1.4 1.1 2.1 1.6 4.3 3.2-6.1-4.8-1.9-1.5 3.8 3 7.6 6 11.2 9.2 14.6 12.3 28.3 25.8 40.9 40.1 3 3.5 6 7 9 10.6 1.4 1.7 2.8 3.4 4.1 5.1 1.4 1.7 4.5 6-1.4-1.9.8 1.1 1.6 2.1 2.4 3.2 5.8 7.7 11.4 15.7 16.6 23.9 11.7 18.3 21.8 37.5 30.3 57.5l-3-7.2c13.2 31.2 22.2 64 26.8 97.6-.4-2.7-.7-5.3-1.1-8 3 22.4 3.5 44.8 3.5 67.3v253c0 19.2.8 38.8-1.7 57.9.4-2.7.7-5.3 1.1-8-2.2 15.6-6.4 30.9-12.4 45.5l3-7.2c-4.6 11-10.3 21.5-16.9 31.4-1.6 2.4-3.3 4.7-4.9 7-3.7 5.2 4.4-5.4 1.1-1.4-.8 1-1.6 2.1-2.5 3.1-3.8 4.6-7.7 8.9-11.9 13.1-4.2 4.2-8.6 8.2-13.1 11.9-1 .8-2 1.7-3.1 2.5-4.1 3.3 5.9-4.4 1.9-1.5-2.5 1.8-5 3.6-7.5 5.3-9.9 6.6-20.4 12.3-31.4 16.9l7.2-3c-14.6 6-29.8 10.2-45.5 12.4 2.7-.4 5.3-.7 8-1.1-16.2 2.2-32.6 1.7-48.9 1.7h-76.3c-15.7 0-30.7 13.8-30 30 .7 16.3 13.2 30 30 30h75.9c9.5 0 19.1.2 28.6 0 25.3-.6 50.8-5.5 74.2-15.1 47.9-19.8 88.9-55.3 112.1-102.1 16.1-32.3 23.2-66.7 23.2-102.6V431c-.1-47.1-8-94.8-24.2-139.1-17.1-47-42-89.8-74.1-128.2-30.2-36.1-67.2-67.1-107.7-90.9-41.5-24.3-87.7-41.7-135.1-50-51.1-8.9-102.5-8.6-153.4 1.1-46.9 8.9-92.7 26.9-133.6 51.6-40.3 24.4-76.9 55.7-106.5 92.2-31.7 39-56.2 82.3-72.7 129.8-14.8 42.8-22.1 88.5-22.2 133.7v243.4c0 15.7 13.8 30.7 30 30 16.1-.8 29.9-13.2 29.9-30z"></path><path d="M582.8 916.2c0 2.8-.2 5.5-.6 8.2.4-2.7.7-5.3 1.1-8-.8 5.3-2.2 10.4-4.2 15.4l3-7.2c-1.5 3.4-3.2 6.7-5.2 9.8-.1.2-1.6 2.8-1.8 2.7-.1 0 5-6.1 2.3-3-1.3 1.5-2.6 2.9-3.9 4.3-1.2 1.2-2.5 2.4-3.8 3.5-1.9 1.7-4.6 2.3 2.5-1.9-.7.4-1.4 1-2.1 1.5-3.3 2.2-6.8 4-10.4 5.6l7.2-3c-5 2-10.1 3.4-15.4 4.2 2.7-.4 5.3-.7 8-1.1-13.5 1.7-27.7.6-41.3.6-13.9 0-28.3 1.1-42.2-.5 2.7.4 5.3.7 8 1.1-5.2-.8-10.3-2.1-15.2-4l7.2 3c-3.8-1.6-7.5-3.5-10.9-5.8-2.8-1.9-3.3-4.1 1.1 1-1.3-1.5-3.1-2.7-4.5-4.1-1.2-1.2-3.4-3-4.1-4.5.9 1.2 1.9 2.4 2.8 3.7-.6-.8-1.2-1.7-1.8-2.5-2.3-3.4-4.2-7.1-5.8-10.9l3 7.2c-1.9-4.9-3.3-9.9-4-15.2.4 2.7.7 5.3 1.1 8-.6-5.5-.7-10.9 0-16.3-.4 2.7-.7 5.3-1.1 8 .8-5.3 2.2-10.4 4.2-15.4l-3 7.2c1.5-3.4 3.2-6.7 5.2-9.8.1-.2 1.6-2.8 1.8-2.7.1 0-5 6.1-2.3 3 1.3-1.5 2.6-2.9 3.9-4.3 1.2-1.2 2.5-2.4 3.8-3.5 1.9-1.7 4.6-2.3-2.5 1.9.7-.4 1.4-1 2.1-1.5 3.3-2.2 6.8-4 10.4-5.6l-7.2 3c5-2 10.1-3.4 15.4-4.2-2.7.4-5.3.7-8 1.1 13.5-1.7 27.7-.6 41.3-.6 13.9 0 28.3-1.1 42.2.5-2.7-.4-5.3-.7-8-1.1 5.2.8 10.3 2.1 15.2 4l-7.2-3c3.8 1.6 7.5 3.5 10.9 5.8 2.8 1.9 3.3 4.1-1.1-1 1.3 1.5 3.1 2.7 4.5 4.1 1.2 1.2 3.4 3 4.1 4.5-.9-1.2-1.9-2.4-2.8-3.7.6.8 1.2 1.7 1.8 2.5 2.3 3.4 4.2 7.1 5.8 10.9l-3-7.2c1.9 4.9 3.3 9.9 4 15.2-.4-2.7-.7-5.3-1.1-8 .4 2.7.6 5.4.6 8.1.2 15.7 13.7 30.7 30 30 16.1-.7 30.2-13.2 30-30-.4-33.6-19.5-67.3-50.5-81.9-13.4-6.3-26.8-9.8-41.7-9.9h-57.5c-19 0-37 2.3-54 11.7-26.8 14.7-43 42-46.5 71.8-4 34 14 66.9 41.9 85.5 17.5 11.7 37.7 14.5 58.2 14.5h58.2c15.4-.1 30.1-4 43.8-11.1 29.6-15.5 47.8-47.7 48.2-80.7.2-15.7-13.9-30.7-30-30-16.5.9-29.9 13.3-30.1 30.1z"></path></svg>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="text-dark mb-1">24/7 Customer Support</h6>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-5 END -->

                            <!-- ROW-6 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="about-footer rounded-3">
                                        <div class="row justify-content-center mb-4">
                                            <div class="col-xl-6 my-5 text-center">
                                                <h6 class="tx-fixed-white fw-semibold">Feel free to communicate with our team faster and easier way. Want to get in ?</h6>
                                                <a href="javascript:void(0);" class="btn btn-light mt-2">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-6 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED-->

@endsection

@section('scripts')
	
	

@endsection
