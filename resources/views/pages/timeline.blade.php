
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Timeline</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row ">
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Vertical Timeline
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="vtimeline">
                                                <div class="timeline-wrapper timeline-wrapper-primary">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-paper-plane-o"></i></span>
                                                    </div>
                                                    <!-- <span class="timeline-date">Jan 27</span> -->
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Art Ramadani posted a status update</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <div class="media media-lg my-4 border-bottom-0 d-xl-flex d-block">
                                                                <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/18.jpg')}}" alt="Generic placeholder image">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0 mb-1">Goa Tour with Friends</h4>
                                                                <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                                <ul class="list-inline mb-0 pt-3 fs-14">
                                                                        <li class="list-inline-item"><a href="javascript:void(0);" class="btn btn-sm btn-primary-light m-1">Reply</a></li>
                                                                        <li class="list-inline-item"><a href="javascript:void(0);" class="btn btn-sm btn-success-light m-1">Edit</a></li>
                                                                        <li class="list-inline-item"><a href="javascript:void(0);" class="btn btn-sm btn-danger-light m-1">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                            <i class="fe fe-heart  text-muted me-1"></i>
                                                            <span>19</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>19 Oct 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-wrapper timeline-inverted timeline-wrapper-secondary">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-file-image-o"></i></span>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Eroll Maxhuni uploaded 6 new photos to album Summer Trip</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <img src="{{asset('build/assets/images/media/files/01.jpg')}}" class="mb-3 br-5" alt="img">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="{{asset('build/assets/images/media/files/02.jpg')}}" class="mb-3 br-5" alt="img">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="{{asset('build/assets/images/media/files/03.jpg')}}" class="mb-3 br-5" alt="img">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="{{asset('build/assets/images/media/files/04.jpg')}}" class="mb-3 br-5" alt="img">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="{{asset('build/assets/images/media/files/05.jpg')}}" class="mb-3 br-5" alt="img">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="{{asset('build/assets/images/media/files/06.jpg')}}" class="mb-3 br-5" alt="img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                            <i class="fe fe-heart  text-muted me-1"></i>
                                                            <span>19</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>27th Sep 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-wrapper timeline-wrapper-green">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-play-circle-o"></i></span>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Arlind Nushi Send Audio message</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>Alpha 5 has arrived just over a month after Alpha 4 with some major feature improvements and a boat load of bug fixes.</p>
                                                            <div class="mb-3">
                                                                <a href="javascript:void(0);" class="text-success"><i class="ri-play-circle-line align-middle fs-16"></i></a>
                                                                <span class="mx-1">
                                                                    <svg width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(var(--success-rgb), 0.3)" class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(var(--success-rgb), 0.3)" class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(var(--success-rgb), 0.3)" class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(var(--success-rgb), 0.3)" class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(var(--success-rgb), 0.3)" class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                    <svg class="chat_audio" width="20" height="20">
                                                                        <defs></defs>
                                                                        <g transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20">
                                                                                <path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(var(--success-rgb), 0.3)" class="fill-primary"></path>
                                                                            </svg></g>
                                                                    </svg>
                                                                </span>
                                                                <a href="javascript:void(0);" class="text-success"><i class="ri-download-2-line align-middle fs-16"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                            <i class="fe fe-heart  text-muted me-1"></i>
                                                            <span>19</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>5th Oct 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-wrapper timeline-inverted timeline-wrapper-info">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-handshake-o"></i></span>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Job Meeting</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>You have a meeting at Laborator Office Today.</p>
                                                            <div class="d-flex">
                                                                <div class="avatar-list avatar-list-stacked mb-2 me-3">
                                                                    <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" ></span>
                                                                    <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" ></span>
                                                                    <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                    <span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" ></span>
                                                                    <span class="avatar avatar-sm rounded-circle bg-primary">+8</span>
                                                                </div>
                                                                <p class="fs-13 mb-0 text-muted">James Graham, John, Taylor and 12 more</p>
                                                            </div>
                                                            <div>Join the meeting : <a href="#">https://meeting</a></div>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap mt-3">
                                                            <i class="fe fe-heart  text-muted me-1"></i>
                                                            <span>25</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>10th Oct 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-wrapper timeline-wrapper-success">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-envelope"></i></span>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Support Team sent you an email</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-start justify-content-between">
                                                                    <p class="mb-0 fs-13 font-weight-semibold">Taylor invite to a design
                                                                        channel</p>
                                                                </div>
                                                                <div class="fs-12">
                                                                    <small class="text-muted fs-12">Hi, can i change my commission
                                                                        amount?</small>
                                                                    <div class="mt-2">
                                                                        <button type="button" class="btn btn-primary-light btn-sm me-1 fs-11">Accept</button>
                                                                        <button type="button" class="btn btn-danger-light btn-sm fs-11">Reject</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap mt-3">
                                                            <i class="fe fe-heart  text-muted me-1"></i>
                                                            <span>25</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>25th Sep 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-wrapper timeline-inverted timeline-wrapper-warning">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-video-camera"></i></span>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Mr. Doe shared a video</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                                                <iframe class="embed-responsive-item"
                                                                    src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0"
                                                                    allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                            <i class="fe fe-heart  text-muted me-1"></i>
                                                            <span>32</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>19th Sep 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-wrapper timeline-wrapper-dark">
                                                    <div class="avatar avatar-md timeline-badge">
                                                        <span class="timeline-icon"><i class="fa fa-user-o"></i></span>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h6 class="timeline-title">Sarah Young accepted your friend request</h6>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
                                                        </div>
                                                        <div class="timeline-footer d-flex align-items-center flex-wrap">
                                                            <i class="fe fe-heart text-muted me-1"></i>
                                                            <span>26</span>
                                                            <span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>15th Sep 2017</span>
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
	
	

@endsection
