
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Chat</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chat</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="main-content-app pt-0">
                                        <div class="main-content-left main-content-left-chat" id="main-content-left-chat">
                                            <div class="card-body d-flex">
                                                <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/21.jpg')}}"></div>
                                                <div class="main-chat-msg-name">
                                                    <h6>Percy Kewshun</h6>
                                                    <span class="dot-label bg-success"></span><small class="me-3">Available</small>
                                                </div>
                                                <nav class="nav ms-auto">
                                                    <div class="dropdown">
                                                        <button class="btn btn-icon btn-sm btn-primary-light rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-settings-3-line"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-user me-1 d-inline-flex"></i> Profile</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-1 d-inline-flex"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-users me-1 d-inline-flex"></i> New Group</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-settings me-1 d-inline-flex"></i> Settings</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-1 d-inline-flex"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>

                                            <!-- main-chat-header -->
                                            <div class="card-body ">
                                                <div class="main-chat-contacts-slider d-none d-sm-block overflow-auto">
                                                    <label class="form-label mb-2 fs-13 mt-0">Online Users</label>
                                                    <div class="lSSlideOuter main-chat-contacts-slider">
                                                        <div class="main-chat-contacts-slider lSSlideWrapper usingCss">
                                                            <div class="main-chat-contacts lightSlider lsGrab lSSlide ps-0">
                                                                <div class="lslide active">
                                                                    <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="avatar-status bg-secondary"></span>
                                                                    </span><small>Ariana</small>
                                                                </div>
                                                                <div class="lslide">
                                                                    <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                    <span class="avatar-status bg-red"></span>
                                                                    </span><small>Monino</small>
                                                                </div>
                                                                <div class="lslide">
                                                                    <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                    <span class="avatar-status bg-green"></span>
                                                                    </span><small>Reynante</small>
                                                                </div>
                                                                <div class="lslide">
                                                                    <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                    <span class="avatar-status bg-yellow"></span>
                                                                    </span><small>Labares</small>
                                                                </div>
                                                                <div class="lslide">
                                                                    <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="avatar-status bg-secondary"></span>
                                                                    </span><small>Rolando</small>
                                                                </div>
                                                                <div class="lslide">
                                                                    <div class="avatar avatar-md bradius text-primary">
                                                                        <i class="fe fe-users"></i>
                                                                    </div><small>More</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- main-active-contacts -->
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ...">
                                                    <span class="input-group-text btn btn-primary"><i class="fe fe-search"></i></span>
                                                </div>
                                            </div>
                                            <div class="tab-menu-heading border-top">
                                                <div class=" tabs-menu1">
                                                    <ul class="nav panel-tabs">
                                                        <li><a href="#ChatList" class="d-flex align-items-center active"
                                                                data-bs-toggle="tab">Messages</a></li>
                                                        <li><a href="#ChatGroups" class="d-flex align-items-center"
                                                                data-bs-toggle="tab">Groups</a></li>
                                                        <li><a href="#ChatContacts" class="d-flex align-items-center"
                                                                data-bs-toggle="tab">Contacts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="panel-body tabs-menu-body  main-chat-list flex-2 main-chat-2" id="main-chat-list">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="ChatList">
                                                        
                                                    <div class="main-chat-list tab-pane">
                                                        <div class="media new border-top-0">
                                                            <div class="main-img-user online">
                                                                <img alt="" src="{{asset('build/assets/images/users/5.jpg')}}">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Raymart Santiago</span> <span>10 min</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user">
                                                                <img alt="" src="{{asset('build/assets/images/users/6.jpg')}}"> <span>3</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Ariana Monino</span> <span>30 min</span>
                                                                </div>
                                                                <p>Good Morning</p>
                                                            </div>
                                                        </div>
                                                        <div class="media selected">
                                                            <div class="main-img-user online"><img alt="" src="{{asset('build/assets/images/users/9.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Reynante Labares</span> <span>9.40 am</span>
                                                                </div>
                                                                <p> Nice to meet you </p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Joyce Chua</span> <span>11.20 am</span>
                                                                </div>
                                                                <p> Hi, How are you? </p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user"><img alt="" src="{{asset('build/assets/images/users/4.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user">
                                                                <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                </div>
                                                                <p>Typing...</p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user"><img alt="" src="{{asset('build/assets/images/users/21.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user"><img alt="" src="{{asset('build/assets/images/users/5.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user"><img alt="" src="{{asset('build/assets/images/users/3.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>John Pratts</span> <span>20/06/2021</span>
                                                                </div>
                                                                <p>I have some work</p>
                                                            </div>
                                                        </div>
                                                        <div class="media new">
                                                            <div class="main-img-user"><img alt="" src="{{asset('build/assets/images/users/7.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                        <div class="media new border-bottom-0">
                                                            <div class="main-img-user"><img alt="" src="{{asset('build/assets/images/users/6.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="media-contact-name">
                                                                    <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                </div>
                                                                <p> Hey! there I'm available </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="tab-pane" id="ChatGroups">
                                                        <div class="d-flex align-items-center media border-top-0">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online text-primary">
                                                                    <img alt="" src="{{asset('build/assets/images/users/4.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Web Designers</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-user-plus"></i></a> </div>
                                                        </div>
                                                        <div class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('build/assets/images/users/4.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Project 2020</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-user-plus"></i></a> </div>
                                                        </div>
                                                        <div class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('build/assets/images/users/9.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Project 2021</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-user-plus"></i></a> </div>
                                                        </div>
                                                        <div class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('build/assets/images/users/12.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Freshers</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-user-plus"></i></a> </div>
                                                        </div>
                                                        <div class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('build/assets/images/users/6.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Experienced</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-user-plus"></i></a> </div>
                                                        </div>
                                                        <div class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('build/assets/images/users/7.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Freelancer</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-user-plus"></i></a> </div>
                                                        </div>
                                                        <div class="text-center p-5">
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Create New Group</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="ChatContacts">
                                                        <div>
                                                            <div class="py-4 px-6 fw-bold">A</div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/3.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Anna Sthesia</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/9.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Abraham</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/4.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Anderson</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Office</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="py-4 px-6 fw-bold">B</div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/5.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Bernadette</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="py-4 px-6 fw-bold">C</div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/5.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Cameron</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/21.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Christ Arnold</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/2.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Clarkson Gray</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="py-4 px-6 fw-bold">D</div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/7.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Deirdre Short</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/12.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Dylan Gill</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/1.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Donna Davies</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Office</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="py-4 px-6 fw-bold">E</div>
                                                            <div class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('build/assets/images/users/4.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Elizabeth Scott</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Office</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0);"><i class="contact-status text-primary fe fe-message-square me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-success fe fe-phone-call me-2"></i></a>
                                                                    <a href="javascript:void(0);"><i class="contact-status text-danger fe fe-video me-2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- main-chat-list -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="main-content-app pt-0">
                                        <div class="main-content-body main-content-body-chat h-100">
                                            <div class="main-chat-header pt-3 d-block d-sm-flex">
                                                <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                <div class="main-chat-msg-name mt-2 flex-fill">
                                                    <h6>Saul Goodmate</h6>
                                                    <small class="me-3">Last Semm 2 Hours ago</small>
                                                </div>
                                                <div class="d-flex">
                                                    <button class="btn btn-icon btn-outline-light rounded-circle ms-2">
                                                        <i class="ti ti-search"></i>
                                                    </button>
                                                    <button class="btn btn-icon btn-outline-light rounded-circle ms-2">
                                                        <i class="ti ti-phone"></i>
                                                    </button>
                                                    <button class="btn btn-icon btn-outline-light rounded-circle ms-2">
                                                        <i class="ti ti-video"></i>
                                                    </button>
                                                    <div class="dropdown ms-2">
                                                        <button class="btn btn-icon btn-outline-light rounded-circle btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-phone-call me-1 d-inline-flex"></i> Phone Call</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-video me-1 d-inline-flex"></i> Video Call</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-user-plus me-1 d-inline-flex"></i> Add Contact</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-1 d-inline-flex"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- main-chat-header -->
                                            <div class="main-chat-body flex-2" id="ChatBody">
                                                <div class="content-inner">
                                                    <label class="main-chat-time"><span>2 days ago</span></label>
                                                    <div class="media chat-left">
                                                        <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                        <div class="media-body">
                                                            <div class="main-msg-wrapper">
                                                                Lorem ipsum dolor sit amet 😀
                                                            </div>
                                                            <div>
                                                                <span>9:32 am</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media flex-row-reverse chat-right">
                                                        <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/21.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                        <div class="media-body">
                                                            <div class="main-msg-wrapper">
                                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                                            </div>
                                                            <div class="main-msg-wrapper">
                                                                <span><span><i class="fa fa-image fs-14 pe-2"></i></span><span class="fs-14 mt-1"> Image_attachment.jpg </span>
                                                                <i class="fe fe-download mt-3 ps-2"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span>11:22 am</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="main-chat-time"><span>Yesterday</span></label>
                                                    <div class="media chat-left">
                                                        <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                        <div class="media-body">
                                                            <div class="main-msg-wrapper">
                                                                Lorem ipsum dolor sit amet 👋
                                                            </div>
                                                            <div>
                                                                <span>9:32 am</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media flex-row-reverse chat-right">
                                                        <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/21.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                        <div class="media-body">
                                                            <div class="main-msg-wrapper">
                                                                <i class="bi bi-gift text-whiet me-2"></i>
                                                                Donec quam felis, ultricies nec,
                                                            </div>
                                                            <div>
                                                                <span>9:48 am</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div><label class="main-chat-time"><span>Today</span></label>
                                                    <div class="media chat-left">
                                                        <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/1.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                        <div class="media-body">
                                                            <div class="main-msg-wrapper">
                                                                Maecenas tempus, tellus eget condimentum rhoncus
                                                            </div>
                                                            <div class="main-msg-wrapper">
                                                                <img alt="avatar" class="w-10 h-10" src="{{asset('build/assets/images/media/3.jpg')}}">
                                                                <img alt="avatar" class="w-10 h-10" src="{{asset('build/assets/images/media/4.jpg')}}">
                                                                <img alt="avatar" class="w-10 h-10" src="{{asset('build/assets/images/media/5.jpg')}}">
                                                            </div>
                                                            <div>
                                                                <span>10:12 am</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media flex-row-reverse chat-right">
                                                        <div class="main-img-user online"><img alt="avatar" src="{{asset('build/assets/images/users/21.jpg')}}"><span class="avatar-status bg-primary"></span></div>
                                                        <div class="media-body">
                                                            <div class="main-msg-wrapper">
                                                                <div class="">
                                                                    <a href="javascript:void(0);" class="text-white"><i class="ri-play-circle-line align-middle"></i></a>
                                                                    <span class="mx-1">
                                                                        <svg width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                        <svg class="chat_audio" width="20" height="20">
                                                                            <defs></defs>
                                                                            <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                    <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="fill-primary"></path>
                                                                                </svg></g>
                                                                        </svg>
                                                                    </span>
                                                                    <a href="javascript:void(0);" class="text-white"><i class="ri-download-2-line align-middle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="main-msg-wrapper">
                                                                Maecenas tempus, tellus eget condimentum rhoncus
                                                            </div>
                                                            <div>
                                                                <span>09:40 am</span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-chat-footer">
                                                <button type="button" class="btn btn-icon btn-outline-light brround"><i class="fe fe-plus"></i></button>
                                                <input class="form-control" placeholder="text here..." type="text">
                                                <button type="button" class="btn btn-icon  btn-primary brround"><i class="fa fa-paper-plane-o"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="main-content-app profile-details-main" id="profile-details-main">
                                        <div class="card-body p-5">
                                            <div class="">
                                                <nav class="nav float-end">
                                                    <div class="dropdown">
                                                        <a class="nav-link text-muted fs-15 p-0 ps-3" href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-user me-1 d-inline-flex"></i> Profile</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-1 d-inline-flex"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-users me-1 d-inline-flex"></i> New Group</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-settings me-1 d-inline-flex"></i> Settings</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-1 d-inline-flex"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </nav>

                                                <div class="text-center chat-image border-bottom p-4 pb-0 mb-4 br-5">
                                                    <span class="avatar avatar-xxl mb-1 rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                        <span class="avatar-status bg-primary"></span>
                                                    </span>
                                                    <div class="main-chat-msg-name">
                                                        <a href="{{url('profile')}}">
                                                            <h5 class="mb-0 text-dark fw-semibold">Percy Kewshun</h5>
                                                            <p class="text-muted fs-13">Web Developer</p>
                                                        </a>
                                                    </div>
                                                    <div class="btn-list mt-3">
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary-light rounded-pill"><i class="fe fe-phone-call"></i></button>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary-light rounded-pill"><i class="fe fe-message-circle"></i></button>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary-light rounded-pill"><i class="fe fe-video"></i></button>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary-light rounded-pill"><i class="fe fe-more-horizontal"></i></button>
                                                    </div>
                                                </div>
                                                <div class="border-bottom">
                                                    <div class="d-flex mb-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-mail"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-600 mb-0">Email</p>
                                                            <p class="fs-12 text-muted">gracie435@gmail.com.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-2 mt-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-phone"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-600 mb-0">Phone</p>
                                                            <p class="fs-12 text-muted">+123(45)-678-90.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-2 mt-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-600 mb-0">Address</p>
                                                            <p class="fs-12 text-muted">2nd street,houston texas,united states.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom">
                                                    <div class="fs-15 fw-600 mt-3 mb-2">Shared Files :
                                                        <span class="float-end fs-12"><a href="javascript:void(0);" class="text-underline"><u>View All</u></a></span>
                                                    </div>
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="media p-3">
                                                                <div class="avatar avatar-md me-2 bg-success-transparent rounded-circle"><i class="fa fa-folder-open"></i></div>
                                                                <div class="media-body">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-0">
                                                                            <h5 class="mb-1 fs-13 fw-semibold text-dark"> Demo_Document</h5>
                                                                            <p class="mb-0 fs-13 text-muted d-inline-flex" style="line-height: 0;">ppt<span class="fs-11 ms-2">1.2 mb</span></p>
                                                                        </div>
                                                                        <span class="ms-auto fs-14">
                                                                            <span class="float-end">
                                                                                <span class="op-7 text-muted"><i class="fe fe-download"></i></span>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media p-3">
                                                                <div class="avatar avatar-md me-2 bg-secondary-transparent rounded-circle"><i class="fa fa-image"></i></div>
                                                                <div class="media-body">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-0">
                                                                            <h5 class="mb-1 fs-13 fw-semibold text-dark">Image_attachment</h5>
                                                                            <p class="mb-0 fs-13 text-muted d-inline-flex" style="line-height: 0;">img<span class="fs-11 ms-2">12 mb</span></p>
                                                                        </div>
                                                                        <span class="ms-auto fs-14">
                                                                            <span class="float-end">
                                                                                    <span class="op-7 text-muted"><i class="fe fe-download"></i></span>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media p-3">
                                                                <div class="avatar avatar-md me-2 bg-info-transparent rounded-circle"><i class="fa fa-envelope"></i></div>
                                                                <div class="media-body">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-0">
                                                                            <h5 class="mb-1 fs-13 fw-semibold text-dark"> Video_attachment</h5>
                                                                            <p class="mb-0 fs-13 text-muted d-inline-flex" style="line-height: 0;">Video<span class="fs-12 ms-2">16 mb</span></p>
                                                                        </div>
                                                                        <span class="ms-auto fs-14">
                                                                            <span class="float-end">
                                                                                    <span class="op-7 text-muted"><i class="fe fe-download"></i></span>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="fs-15 fw-600 mt-3 mb-2">Media :
                                                        <span class="float-end fs-12"><a href="javascript:void(0);" class="text-underline"><u>View All</u></a></span>
                                                    </div>
                                                    <ul id="lightgallery" class="list-unstyled row">
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mt-2 border-bottom-0 px-1" data-responsive="{{asset('build/assets/images/media/files/01')}}.jpg" data-src="{{asset('build/assets/images/media/files/01')}}.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="javascript:void(0);">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/files/01')}}.jpg" alt="Thumb-1">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mt-2 border-bottom-0 px-1" data-responsive="{{asset('build/assets/images/media/files/02')}}.jpg" data-src="{{asset('build/assets/images/media/files/02')}}.jpg" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="javascript:void(0);">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/files/02')}}.jpg" alt="Thumb-2">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mt-2 border-bottom-0 px-1" data-responsive="{{asset('build/assets/images/media/files/03')}}.jpg" data-src="{{asset('build/assets/images/media/files/03')}}.jpg" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="javascript:void(0);">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/files/03')}}.jpg" alt="Thumb-1">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mt-2 border-bottom-0 px-1" data-responsive="{{asset('build/assets/images/media/files/04')}}.jpg" data-src="{{asset('build/assets/images/media/files/04')}}.jpg" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="javascript:void(0);">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/files/04')}}.jpg" alt="Thumb-2">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mt-2 border-bottom-0 px-1" data-responsive="{{asset('build/assets/images/media/files/05')}}.jpg" data-src="{{asset('build/assets/images/media/files/05')}}.jpg" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="javascript:void(0);">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/files/05')}}.jpg" alt="Thumb-1">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mt-2 border-bottom-0 px-1" data-responsive="{{asset('build/assets/images/media/files/06')}}.jpg" data-src="{{asset('build/assets/images/media/files/06')}}.jpg" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="javascript:void(0);">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/files/06')}}.jpg" alt="Thumb-2">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Internal Chat js-->
        @vite('resources/assets/js/chat.js')

@endsection
