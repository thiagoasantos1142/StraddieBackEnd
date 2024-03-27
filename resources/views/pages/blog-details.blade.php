
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Blog-Details</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extention</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog-Details</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <div class="row">
                            <div class="col-xxl-8 col-xl-12">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('build/assets/images/media/files/05.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="d-md-flex flex-wrap gap-2">
                                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                                <img class="avatar rounded-circle me-3" src="{{asset('build/assets/images/users/12.jpg')}}" alt="avatar-img">
                                                <div class="pe-3">
                                                    <h6 class="mb-0">Author Name</h6>
                                                    <p class="text-muted tx-15 fw-500 mb-0">Manny Jah</p>
                                                </div>
                                            </div>
                                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                                <span class="avatar bg-light rounded-circle text-muted border me-3"><i class="fe fe-grid"></i></span>
                                                <div class="pe-3">
                                                    <h6 class="mb-0">Categories</h6>
                                                    <p class="text-muted tx-15 fw-500 mb-0">Linux KVM Hosting</p>
                                                </div>
                                            </div>
                                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                                <span class="avatar bg-light rounded-circle text-muted border me-3"><i class="fe fe-calendar"></i></span>
                                                <div class="pe-3">
                                                    <h6 class="mb-0">Date</h6>
                                                    <p class="text-muted tx-15 fw-500 mb-0">01/10/2022</p>
                                                </div>
                                            </div>
                                            <div class="btn-list mt-sm-0 mt-2 flex-grow-1 text-end">
                                                <button class="btn btn-icon btn-sm btn-primary-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like"><i class="ri-thumb-up-line"></i></button>
                                                <button class="btn btn-icon btn-sm btn-warning-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share"><i class="ri-share-line"></i></button>
                                                <button class="btn btn-sm btn-secondary-light"><i class="ri-chat-4-line me-1 align-middle d-inline-flex"></i>Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>Voluptatem quia voluptas</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <p> Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry
                                            you’re working in, as a blogger, you should live and die by this statement.
                                        </p>
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and
                                            I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                            truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.
                                        </p>
                                        <div class="bg-light br-5 border-lw-3 border-start border-primary my-4 p-5">
                                            <blockquote class="quote mb-0 ps-0 border-0">
                                                <p class="h5">" Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco labor. "</p>
                                                <p class="mb-0 mt-3"> so awesome this title <cite title="Source Title" class="fw-semibold"> - magna aliqua</cite> </p>
                                            </blockquote>
                                        </div>
                                        <div class="card shadow-none mb-0 border-0">
                                            <div class="card-body">
                                                <p class="h6 mb-3">Share this Post :</p>
                                                <div class="mb-4 d-flex">
                                                    <a href="javascript:void(0);" class="avatar rounded-circle me-2 text-center bg-primary-transparent"> <i class="mdi mdi-instagram"></i> </a>
                                                    <a href="javascript:void(0);" class="avatar rounded-circle me-2 text-center bg-secondary-transparent"> <i class="mdi mdi-twitter"></i> </a>
                                                    <a href="javascript:void(0);" class="avatar rounded-circle me-2 text-center bg-success-transparent"> <i class="mdi mdi-linkedin"></i> </a>
                                                    <a href="javascript:void(0);" class="avatar rounded-circle me-2 text-center bg-info-transparent"> <i class="mdi mdi-google"></i> </a>
                                                </div>
                                                <p class="h6 mb-3">Related Tags :</p>
                                                <div class="tags">
                                                    <a href="javascript:void(0);" class="tag">Development</a>
                                                    <a href="javascript:void(0);" class="tag">Design</a>
                                                    <a href="javascript:void(0);" class="tag">Technology</a>
                                                    <a href="javascript:void(0);" class="tag">Popular</a>
                                                    <a href="javascript:void(0);" class="tag">Codiegniter</a>
                                                    <a href="javascript:void(0);" class="tag">JavaScript</a>
                                                    <a href="javascript:void(0);" class="tag">Bootstrap</a>
                                                    <a href="javascript:void(0);" class="tag">PHP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Comments</div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="media mb-5 overflow-visible"> <div class="me-3"> <a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/2.jpg')}}"> </a> </div> <div class="media-body border p-4 overflow-visible br-5"> <nav class="nav float-end"> <div class="dropdown"> <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a> <div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit mx-1 d-inline-flex"></i> Edit</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-corner-up-left mx-1 d-inline-flex"></i> Reply</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-flag mx-1 d-inline-flex"></i> Report Abuse</a> <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 mx-1 d-inline-flex"></i> Delete</a> </div> </div> </nav> <h6 class="mt-0">Mozelle Belt</h6> <span><i class="fe fe-thumb-up text-danger"></i></span> <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p><a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a> <span class="reply" id="2"> <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a> </span> </div> </div>
                                        <div class="media mb-5 overflow-visible d-block d-sm-flex">
                                            <div class="me-3 mb-1">
                                                <a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/5.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body overflow-visible">
                                                <div class="border mb-5 p-4 br-5">
                                                    <nav class="nav float-end">
                                                        <div class="dropdown">
                                                            <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit mx-1 d-inline-flex"></i> Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-corner-up-left mx-1 d-inline-flex"></i> Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-flag mx-1 d-inline-flex"></i> Report Abuse</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 mx-1 d-inline-flex"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                    <h6 class="mt-0">Gavin Murray</h6>
                                                    <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                    <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
                                                        what industry you’re working in, as a blogger, you should live and die by this statement.</p>
                                                    <a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a>
                                                    <span class="reply" id="4">
                                                        <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                    </span>
                                                </div>
                                                <div class="media overflow-visible d-block d-sm-flex">
                                                    <div class="me-3 mb-1">
                                                        <a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/2.jpg')}}"> </a>
                                                    </div>
                                                    <div class="media-body overflow-visible">
                                                        <div class="border p-4 mb-5 br-5">
                                                            <nav class="nav float-end">
                                                                <div class="dropdown">
                                                                    <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit mx-1 d-inline-flex"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-corner-up-left mx-1 d-inline-flex"></i> Reply</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-flag mx-1 d-inline-flex"></i> Report Abuse</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 mx-1 d-inline-flex"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </nav>
                                                            <h6 class="mt-0">Mozelle Belt</h6>
                                                            <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                            <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you
                                                                should live and die by this statement.</p>
                                                            <a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a>
                                                            <span class="reply" id="5">
                                                                <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                            </span>
                                                        </div>
                                                        <div class="media overflow-visible">
                                                            <div class="me-3">
                                                                <a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/9.jpg')}}"> </a>
                                                            </div>
                                                            <div class="media-body border p-4 overflow-visible br-5">
                                                                <nav class="nav float-end">
                                                                    <div class="dropdown">
                                                                        <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit mx-1 d-inline-flex"></i> Edit</a>
                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-corner-up-left mx-1 d-inline-flex"></i> Reply</a>
                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-flag mx-1 d-inline-flex"></i> Report Abuse</a>
                                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 mx-1 d-inline-flex"></i> Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </nav>
                                                                <h6 class="mt-0">Paul Smith</h6>
                                                                <span><i class="fe fe-thumb-up text-danger"></i></span>
                                                                <p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger,
                                                                    you should live and die by this statement.</p>
                                                                <a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a>
                                                                <span class="reply" id="6">
                                                                    <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card user-card">
                                            <div class="user-image">
                                                <img src="{{asset('build/assets/images/media/files/08.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl rounded-circle ms-5">
                                                    <img src="{{asset('build/assets/images/users/1.jpg')}}" alt="" class="rounded-circle">
                                                </span>
                                            </div>
                                            <div class="card-body mt-3">
                                                <h6>About the Author</h6>
                                                <p>Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat.</p>
                                                <div class="mt-3">
                                                    <a class="btn btn-sm bg-primary-transparent rounded-circle me-1" role="button" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                    <a class="btn btn-sm bg-secondary-transparent rounded-circle me-1" role="button" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                    <a class="btn btn-sm bg-success-transparent rounded-circle me-1" role="button" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                    <a class="btn btn-sm bg-info-transparent rounded-circle me-1" role="button" href="javascript:void(0);"><i class="mdi mdi-google fs-16"></i></a>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <div class="row row-sm">
                                                    <div class="col-sm-4 border-end text-center">
                                                        <div class="p-3 text-dark">
                                                            <h5 class="mb-0 fs-16">25k</h5>
                                                            <span class="fs-11">TOTAL POSTS</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end text-center">
                                                        <div class="text-center p-3 text-dark">
                                                            <h5 class="mb-0 fs-16">2,765</h5>
                                                            <span class="fs-11">FOLLOWERS</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="text-center p-3 text-dark">
                                                            <h5 class="mb-0 fs-16">4,876</h5>
                                                            <span class="fs-11">FOLLOWING</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Categories</div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group blog-list">
                                                    <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i class="fe fe-chevron-right"></i> Development</a> <span class="product-label">22</span> </li>
                                                    <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i class="fe fe-chevron-right"></i> Web Design</a> <span class="product-label">15</span> </li>
                                                    <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i class="fe fe-chevron-right"></i> Technology</a> <span class="product-label">10</span> </li>
                                                    <li class="list-group-item border-0 p-0"><a href="javascript:void(0);"><i class="fe fe-chevron-right"></i> Sports</a> <span class="product-label">88</span> </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Professional Blog Writers</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex overflow-visible">
                                                        <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/1.jpg')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="{{url('profile')}}" class="h6">Simon Sais</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-4">
                                                        <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/3.jpg')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="{{url('profile')}}" class="h6">Cherry Blossom</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-4">
                                                        <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/5.jpg')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="{{url('profile')}}" class="h6">Ivan Notheridiya</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-4">
                                                        <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/15.jpg')}}" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="{{url('profile')}}" class="h6">Manny Jah</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-6 col-xxl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Recent Posts</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex overflow-visible">
                                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/05.jpg')}}"></a>
                                                        <div class="ps-4 flex-column">
                                                            <span class="badge bg-primary-transparent mb-1">Lifestyle</span>
                                                            <h6 class="mb-0"><a href="{{url('blog-details')}}">Generator on the Internet..</a></h6>
                                                            <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-4">
                                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/10.jpg')}}"></a>
                                                        <div class="ps-4 flex-column">
                                                            <span class="badge bg-secondary-transparent mb-1">Business</span>
                                                            <h6 class="mb-0"><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h6>
                                                            <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-4">
                                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/11.jpg')}}"></a>
                                                        <div class="ps-4 flex-column">
                                                            <span class="badge bg-success-transparent mb-1">Travel</span>
                                                            <h6 class="mb-0"><a href="{{url('blog-details')}}">Generator on the Internet..</a></h6>
                                                            <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex overflow-visible mt-4">
                                                        <a href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/06.jpg')}}"></a>
                                                        <div class="ps-4 flex-column">
                                                            <span class="badge bg-info-transparent mb-1">Meeting</span>
                                                            <h6 class="mb-0"><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h6>
                                                            <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-6 col-xxl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Add a Comments</div>
                                            </div>
                                            <div class="card-body">
                                                <form class="form-horizontal  m-t-20" action="{{url('index')}}">
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text" required="" placeholder="Username*">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="email" required="" placeholder="Email*">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <textarea class="form-control" rows="5">Your Comment*</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card bg-primary tx-fixed-white card-bg-img">
                                            <div class="card-body">
                                                <h5 class="tx-fixed-white">NEVER MISS A POST !</h5>
                                                <P>Signup for free to get the latest posts.</P>
                                                <div class="input-group">
                                                    <input class="form-control border-0" placeholder="Enter your email id" type="text">
                                                    <a href="javascript:void(0);" class="btn btn-secondary">Subscribe<i class="fa fa-paper-plane ms-2"></i></a>
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
