
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Profile</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
                                <div class="card text-center shadow-none border profile-cover__img">
                                    <div class="card-body">
                                        <div class="profile-img-1">
                                            <img src="{{asset('build/assets/images/users/18.jpg')}}" alt="img" id="profile-img">
                                            <a aria-label="anchor" href="#" class="rounded-pill avatar-icons bg-primary tx-fixed-white p-2">
                                                <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                <i class="fe fe-camera lh-base"></i>
                                            </a>
                                        </div>
                                        <div class="profile-img-content text-dark my-2">
                                            <div>
                                                <h5 class="mb-0">Cedric Kelly</h5>
                                                <p class="text-muted mb-0">UI Developer</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-warning mb-0">
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star-half-o fs-20"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2">(3145 Reviews)</p>
                                        <div class="d-flex btn-list btn-list-icon justify-content-center">
                                            <button type="button" class="btn btn-sm btn-primary"><i class="fe fe-user-plus me-1"></i>Follow</button>
                                            <button type="button" class="btn btn-sm btn-info"><i class="fe fe-message-square me-1"></i>Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Skills</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tags">
                                            <a class="tag alert bg-light">
                                                HTML
                                            </a>
                                            <a class="tag alert bg-light">
                                                CSS
                                            </a>
                                            <a class="tag alert bg-light">
                                                javascript
                                            </a>
                                            <a class="tag alert bg-light">
                                                Angular
                                            </a>
                                            <a class="tag alert bg-light">
                                                React
                                            </a>
                                            <a class="tag alert bg-light">
                                                Laravel
                                            </a>
                                            <a class="tag alert bg-light">
                                                Bootstrap
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header justify-content-between align-items-center">
                                        <div class="card-title">Friends <span class="badge rounded-pill bg-default">419</span></div>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary-light">View all</a>
                                    </div>
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-2 w-100" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-2 w-100" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/6.jpg')}}" class="rounded-2 w-100" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/2.jpg')}}" class="rounded-2 w-100" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/8.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/9.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/13.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/7.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                            <div class="col-3 px-1">
                                                <a href="javascript:void(0);"><img src="{{asset('build/assets/images/users/12.jpg')}}" class="rounded-2 w-100 mt-2" alt="img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header justify-content-between align-items-center">
                                        <div class="card-title">Suggestions</div>
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                            </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="avatar avatar-lg rounded-circle">
                                                <img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-circle" alt="img">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 fw-semibold">Gibson</h6>
                                                <p class="mb-0 fs-13">Developer</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-light rounded-pill"><i class="fe fe-plus"></i></button></span>
                                                <span class="ms-1"><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-blue rounded-pill"><i class="fe fe-message-square"></i></button></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <div class="avatar avatar-lg rounded-circle">
                                                <img src="{{asset('build/assets/images/users/11.jpg')}}" class="rounded-circle" alt="img">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 fw-semibold">Jaon Powell</h6>
                                                <p class="mb-0 fs-13">Manager</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-light rounded-pill"><i class="fe fe-plus"></i></button></span>
                                                <span class="ms-1"><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-blue rounded-pill"><i class="fe fe-message-square"></i></button></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <div class="avatar avatar-lg rounded-circle">
                                                <img src="{{asset('build/assets/images/users/12.jpg')}}" class="rounded-circle" alt="img">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 fw-semibold">Cedric Kelly</h6>
                                                <p class="mb-0 fs-13">UI Developer</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-primary rounded-pill"><i class="fe fe-check"></i></button></span>
                                                <span class="ms-1"><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-blue rounded-pill"><i class="fe fe-message-square"></i></button></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <div class="avatar avatar-lg rounded-circle">
                                                <img src="{{asset('build/assets/images/users/18.jpg')}}" class="rounded-circle" alt="img">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 fw-semibold">Samantha</h6>
                                                <p class="mb-0 fs-13">JS Developer</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-light rounded-pill"><i class="fe fe-plus"></i></button></span>
                                                <span class="ms-1"><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-blue rounded-pill"><i class="fe fe-message-square"></i></button></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <div class="avatar avatar-lg rounded-circle">
                                                <img src="{{asset('build/assets/images/users/20.jpg')}}" class="rounded-circle" alt="img">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 fw-semibold">Julian Kerr</h6>
                                                <p class="mb-0 fs-13">JS Developer</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-primary rounded-pill"><i class="fe fe-check"></i></button></span>
                                                <span class="ms-1"><button type="button" aria-label="anchor" class="btn btn-icon btn-sm btn-blue rounded-pill"><i class="fe fe-message-square"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <ul class="nav nav-pills gap-2" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button type="button" aria-label="anchor" class="nav-link active" id="about-tab"
                                                    data-bs-toggle="pill" data-bs-target="#about">About</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="timeline-tab" data-bs-toggle="pill"
                                                    data-bs-target="#timeline" type="button" role="tab"
                                                    aria-controls="timeline" aria-selected="false">Timeline</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="gallery-tab" data-bs-toggle="pill"
                                                    data-bs-target="#gallery" type="button" role="tab"
                                                    aria-controls="gallery" aria-selected="false">Gallery</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="editprofile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#editprofile" type="button" role="tab"
                                                    aria-controls="editprofile" aria-selected="false">Edit Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="projects-tab" data-bs-toggle="pill"
                                                    data-bs-target="#projects" type="button" role="tab"
                                                    aria-controls="projects" aria-selected="false">Projects</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="team-tab" data-bs-toggle="pill"
                                                    data-bs-target="#team" type="button" role="tab"
                                                    aria-controls="team" aria-selected="false">Team</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="about">
                                                <div class="p-5">
                                                    <h5 class="text-dark">Biodata</h5>
                                                    <p class="text-dark mb-2">Hi I'm Teri Dactyl,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    <p class="text-dark mb-0">Industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                </div>
                                                <div class="border-top"></div>
                                                <div class="p-5">
                                                    <h5 class="mb-3">Experience</h5>
                                                    <div class="d-flex">
                                                        <div class="experience-icon bg-primary rounded-circle">
                                                            <i class="fe fe-pocket fs-22 tx-fixed-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="text-dark fw-semibold mb-0">Lead designer / Developer</h6>
                                                            <a href="javascript:void(0);" class="text-primary">sprukotechnologies.com</a>
                                                            <p class="mb-2 mt-2"><b>2010-2015</b></p>
                                                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="experience-icon bg-secondary rounded-circle">
                                                            <i class="fe fe-award fs-22 tx-fixed-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="text-dark fw-semibold mb-0">Senior Graphic Designer</h6>
                                                            <a href="javascript:void(0);" class="text-primary">sprukotechnologies.com</a>
                                                            <p class="mb-2 mt-2"><b>2007-2009</b></p>
                                                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="experience-icon bg-info rounded-circle">
                                                            <i class="fe fe-award fs-22 tx-fixed-white"></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="text-dark fw-semibold mb-0">Senior Backend Designer</h6>
                                                            <a href="javascript:void(0);" class="text-primary">sprukotechnologies.com</a>
                                                            <p class="mb-2 mt-2"><b>2005-2007</b></p>
                                                            <p class="text-muted mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                            <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-top"></div>
                                                <div class="table-responsive p-5">
                                                    <h5 class="mb-3">Personal Info</h5>
                                                    <div class="row">
                                                        <div class="col-xl-8 ms-3">
                                                            <div class="row row-sm">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">First Name : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">Cedric Kelly</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Last Name : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">Macro</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Designation : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">UI/UX Designer</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Email : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15 text-primary">sprukotechnologies8@gmail.com</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Website : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15 text-primary">https://www.spruko.com/</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Address : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">San franscisko, UAE</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Phone : </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15 text-primary">(+65) 7894 5612 3212</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-top"></div>
                                                <div class="p-5">
                                                    <h5 class="mb-3">Social</h5>
                                                    <div class="d-xxl-flex justify-content-between">

                                                        <div class="main-profile-contact-list">
                                                            <div class="media mx-2 mb-2">
                                                                <div class="media-icon bg-primary tx-fixed-white"> <i class="fe fe-github fs-20"></i> </div>
                                                                <div class="media-body ms-2">
                                                                    <span class="text-muted">Github</span>
                                                                    <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">github.com/spruko</a> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="main-profile-contact-list">
                                                            <div class="media mx-2 mb-2">
                                                                <div class="media-icon bg-info tx-fixed-white"> <i class="fe fe-linkedin fs-20"></i> </div>
                                                                <div class="media-body ms-2">
                                                                    <span class="text-muted">Linkedin</span>
                                                                    <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">linkedin.com/in/spruko</a> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="main-profile-contact-list">
                                                            <div class="media mx-2 mb-2">
                                                                <div class="media-icon bg-secondary tx-fixed-white"> <i class="fe fe-instagram fs-20"></i> </div>
                                                                <div class="media-body ms-2">
                                                                    <span class="text-muted">Instagram</span>
                                                                    <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">instagram.com/in/spruko</a> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="main-profile-contact-list">
                                                            <div class="media mx-2 mb-2">
                                                                <div class="media-icon bg-success tx-fixed-white"> <i class="fe fe-twitter fs-20"></i> </div>
                                                                <div class="media-body ms-2">
                                                                    <span class="text-muted">Twitter</span>
                                                                    <p class="mb-0"> <a href="javascript:void(0);" class="text-dark text-break">twitter.com/spruko.me</a> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="timeline">
                                                <div class="row p-5">
                                                    <div class="col-xl-12">
                                                        <div class="card border p-0 shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="media mt-0">
                                                                        <div class="media-user me-2">
                                                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{asset('build/assets/images/users/16.jpg')}}"></div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                                            <small class="text-muted">just now</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <div class="dropdown show">
                                                                            <a aria-label="anchor" class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
                                                                                <a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
                                                                                <a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <h5 class="mt-3">There is nothing more beautiful.</h5>
                                                                    <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer user-pro-2">
                                                                <div class="media mt-0 flex-wrap overflow-visible">
                                                                    <div class="media-user me-2">
                                                                        <div class="avatar-list avatar-list-stacked">
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/12.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image bg-primary">+28</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body flex-fill">
                                                                        <p class="mb-0 ms-2">28 people like your photo</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="d-flex mt-1">
                                                                            <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                                            <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                                            <a aria-label="anchor" class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border p-0 shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="media mt-0">
                                                                        <div class="media-user me-2">
                                                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{asset('build/assets/images/users/16.jpg')}}"></div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                                            <small class="text-muted">Sep 26 2019, 10:14am</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <div class="dropdown show">
                                                                            <a aria-label="anchor" class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
                                                                                <a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
                                                                                <a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <div class="d-flex">
                                                                        <a href="{{url('gallery')}}" class="w-20 m-2"><img src="{{asset('build/assets/images/media/22.jpg')}}" alt="img" class="br-5"></a>
                                                                        <a href="{{url('gallery')}}" class="w-20 m-2"><img src="{{asset('build/assets/images/media/24.jpg')}}" alt="img" class="br-5"></a>
                                                                    </div>
                                                                    <h5 class="mt-3">There is nothing more beautiful.</h5>
                                                                    <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer user-pro-2">
                                                                <div class="media mt-0 flex-wrap overflow-visible">
                                                                    <div class="media-user me-2">
                                                                        <div class="avatar-list avatar-list-stacked">
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/12.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image bg-primary">+28</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body flex-fill">
                                                                        <p class="mb-0 ms-2">28 people like your photo</p>
                                                                    </div>
                                                                    <div class="">
                                                                        <div class="d-flex mt-1">
                                                                            <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                                            <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                                            <a aria-label="anchor" class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border p-0 shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="media mt-0">
                                                                        <div class="media-user me-2">
                                                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{asset('build/assets/images/users/16.jpg')}}"></div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                                            <small class="text-muted">Sep 24 2019, 09:14am</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <div class="dropdown show">
                                                                            <a aria-label="anchor" class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" href="javascript:void(0);">Edit Post</a>
                                                                                <a class="dropdown-item" href="javascript:void(0);">Delete Post</a>
                                                                                <a class="dropdown-item" href="javascript:void(0);">Personal Settings</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <div class="d-flex">
                                                                        <a href="{{url('gallery')}}" class="w-20 m-2"><img src="{{asset('build/assets/images/media/26.jpg')}}" alt="img" class="br-5"></a>
                                                                        <a href="{{url('gallery')}}" class="w-20 m-2"><img src="{{asset('build/assets/images/media/23.jpg')}}" alt="img" class="br-5"></a>
                                                                        <a href="{{url('gallery')}}" class="w-20 m-2"><img src="{{asset('build/assets/images/media/20.jpg')}}" alt="img" class="br-5"></a>
                                                                    </div>
                                                                    <h5 class="mt-3">There is nothing more beautiful.</h5>
                                                                    <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer user-pro-2">
                                                                <div class="media mt-0 flex-wrap overflow-visible">
                                                                    <div class="media-user me-2">
                                                                        <div class="avatar-list avatar-list-stacked">
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/12.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                                            <span class="avatar brround avatar-sm cover-image bg-primary">+28</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body flex-fill">
                                                                        <p class="mb-0 ms-2">28 people like your photo</p>
                                                                    </div>
                                                                    <div class="">
                                                                        <div class="d-flex mt-1">
                                                                            <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                                            <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                                            <a aria-label="anchor" class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="shadow-none">
                                                            <div class="card-body p-0">
                                                                <form class="profile-edit">
                                                                    <textarea class="form-control" placeholder="What's in your mind right now" rows="7"></textarea>
                                                                    <div class="profile-share border-top-0">
                                                                        <div class="mt-2">
                                                                            <a aria-label="anchor" href="javascript:void(0);" class="me-2" title="Audio" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-mic"></i></span></a>
                                                                            <a aria-label="anchor" href="javascript:void(0);" class="me-2" title="Video" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-video"></i></span></a>
                                                                            <a aria-label="anchor" href="javascript:void(0);" class="me-2" title="Image" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-image"></i></span></a>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i> Share</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="gallery">
                                                <ul id="lightgallery" class="list-unstyled row p-5">
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="img-responsive br-5">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/2.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/3.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/4.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/5.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/5.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/6.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/6.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/7.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/7.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/8.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/8.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/9.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive mb-0 br-5" src="{{asset('build/assets/images/media/9.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-xl-0 mb-md-0 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/10.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive mb-0 br-5" src="{{asset('build/assets/images/media/10.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mb-md-0 mb-xl-0  border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/11.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive mb-0 br-5" src="{{asset('build/assets/images/media/11.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/1.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/2.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/3.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                        <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                            <img class="img-responsive br-5" src="{{asset('build/assets/images/media/4.jpg')}}" alt="image">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="editprofile">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="">
                                                            <div class="p-5">
                                                                <div class="mb-4 main-content-label">Personal Information</div>
                                                                <div class="form-horizontal">
                                                                    <div class="mb-4 main-content-label">Name</div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">User Name</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="User Name" value="Sonia Taylor">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">First Name</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="First Name" value="Sonia">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Last Name</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="Last Name" value="Taylor">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Designation</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="Designation" value="Web Designer">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 main-content-label">Contact Info</div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Email<i>(required)</i></label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="Email" value="klomitoor@domain.com">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Website</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="Website" value="domain.com">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Phone</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="phone number" value="+125 254 3562">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Address</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <textarea class="form-control" name="example-textarea-input" rows="2" placeholder="Address">London, UK</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 main-content-label">Social Info</div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Twitter</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="twitter" value="twitter.com/spruko.me">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Facebook</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="facebook" value="https://www.facebook.com/vexel">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Linked in</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <input type="text" class="form-control" placeholder="linkedin" value="linkedin.com/in/spruko">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 main-content-label">About Yourself</div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Biographical Info</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <textarea class="form-control" name="example-textarea-input1" rows="4" placeholder="Please say something about yourself"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 main-content-label">Notifications</div>
                                                                    <div class="form-group mb-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label class="form-label">Configure Notifications</label>
                                                                            </div>
                                                                            <div class="col-md-10">
                                                                                <label class="custom-switch d-block mb-2">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                    <span class="text-muted ms-2">Allow all Notifications</span>
                                                                                </label>
                                                                                <label class="custom-switch d-block mb-2">
                                                                                    <input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                    <span class="text-muted ms-2">Disable all Notifications</span>
                                                                                </label>
                                                                                <label class="custom-switch d-block mb-2">
                                                                                    <input type="checkbox" name="custom-switch-checkbox11" class="custom-switch-input" checked>
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                    <span class="text-muted ms-2">Notification Sounds</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer d-flex justify-content-end">
                                                                <button type="button" class="btn ripple btn-light w-sm me-2">Cancel</button>
                                                                <button type="submit" class="btn ripple btn-primary w-sm">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane projects fade" id="projects">
                                                <div class="row p-5">
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-primary rounded-circle project-icon">
                                                                                        <i class="fe fe-grid"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Web
                                                                                                Design</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
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
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-primary">+15</span>
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
                                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-primary-transparent text-primary">55%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-secondary rounded-circle project-icon">
                                                                                        <i class="fe fe-cloud-lightning"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Cloud Computing</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
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
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-secondary">+12</span>
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
                                                                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-secondary-transparent text-secondary">65%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-warning rounded-circle project-icon">
                                                                                        <i class="fe fe-server"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Ethical Hacking</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
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
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-warning">+8</span>
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
                                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-warning-transparent text-warning">75%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-success rounded-circle project-icon">
                                                                                        <i class="fe fe-airplay"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">System Design</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                1min ago</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">53
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">18 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-success">+5</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">18 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-success-transparent text-success">45%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-danger rounded-circle project-icon">
                                                                                        <i class="fe fe-pocket"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Login Authentication</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">56
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">16 Oct 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-danger">+22</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">18 Oct 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-danger-transparent text-danger">30%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-pink rounded-circle project-icon">
                                                                                        <i class="fe fe-cpu"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">SEO Using React</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                1mnth ago</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">43
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">04 Oct 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-pink">+26</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">04 Oct 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-pink-transparent text-pink">35%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-primary rounded-circle project-icon">
                                                                                        <i class="fe fe-grid"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Web
                                                                                                Design</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
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
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-primary">+15</span>
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
                                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-primary-transparent text-primary">55%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-secondary rounded-circle project-icon">
                                                                                        <i class="fe fe-cloud-lightning"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Cloud Computing</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
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
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
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
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-secondary">+12</span>
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
                                                                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-secondary-transparent text-secondary">65%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="team">
                                                <div class="row p-5">
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/04.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Adam Cotter</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>France</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1456789867</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">30k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">7,345</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,785</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/05.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Dennis Trexy</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>United States</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 135792468</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">18k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">6,452</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">6,452</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/06.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Terrie Boaler</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Canada</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1567843567</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">25k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,765</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">4,876</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/07.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Dorothea Joicey</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Indonesia</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 135792468</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">34k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">1,789</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,456</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/08.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Donnell Farries</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Poland</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1456789456</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">46k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,567</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">3,345</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/09.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/7.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Letizia Puncher</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Ukraine</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1234567893</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">24k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">5,765</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">7,345</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/profile.js')

@endsection
