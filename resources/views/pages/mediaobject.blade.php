
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Media Object</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Object</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="media media-lg mt-0">
                                                <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Media heading</h4>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">Right Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Media heading</h4>
                                                    <p class="text-muted mb-0 fs-14 me-3 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                                </div>
                                                <img class="avatar avatar-xl bradius w-100p h-10" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media overflow-hidden">
                                    <div class="card-header">
                                        <h3 class="card-title">Nesting Mediaobject</h3>
                                    </div>
                                    <div class="card-body overflow-hidden">
                                        <div class="card-content">
                                            <div class="media media-lg mt-0">
                                                <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/30.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body overflow-hidden">
                                                    <h4 class="mt-0">Media heading</h4>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    <div class="media media-lg mt-3">
                                                        <img class="avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/27.jpg')}}" alt="Generic placeholder image">
                                                        <div class="media-body overflow-hidden">
                                                            <h4 class="mt-0">Media heading</h4>
                                                            <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media overflow-hidden">
                                    <div class="card-header">
                                        <h3 class="card-title">Right Nesting Mediaobject</h3>
                                    </div>
                                    <div class="card-body overflow-hidden">
                                        <div class="card-content">
                                            <div class="media media-lg mt-0">
                                                <div class="media-body overflow-hidden text-end">
                                                    <h4 class="mt-0">Media heading</h4>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    <div class="media media-lg mt-3">
                                                        <div class="media-body overflow-hidden">
                                                            <h4 class="mt-0">Media heading</h4>
                                                            <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                        <img class="avatar avatar-xl bradius ms-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/27.jpg')}}" alt="Generic placeholder image">
                                                    </div>
                                                </div>
                                                <img class="avatar avatar-xl bradius ms-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/30.jpg')}}" alt="Generic placeholder image">
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
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">List Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <ul class="list-unstyled">
                                                <li class="media media-lg mt-0 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/29.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 01</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                    </div>
                                                </li>
                                                <li class="media media-lg my-4 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/30.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 02</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                    </div>
                                                </li>
                                                <li class="media media-lg my-4 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 03</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                    </div>
                                                </li>
                                                <li class="media media-lg border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/3.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 04</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">List Mediaobject with Heading</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <ul class="list-unstyled">
                                                <li class="list-group-item fw-bold">First header</li>
                                                <li class="list-group-item d-sm-flex d-block py-4">
                                                    <img class="avatar avatar-xl br-5 me-3 w-100p h-10 mb-3" src="{{asset('build/assets/images/media/29.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 01</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                                    </div>
                                                </li>
                                                <li class="list-group-item d-sm-flex d-block py-4">
                                                    <img class="avatar avatar-xl br-5 me-3 w-100p h-10 mb-3" src="{{asset('build/assets/images/media/30.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 02</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                                    </div>
                                                </li>
                                                <li class="list-group-item fw-bold">Second header</li>
                                                <li class="list-group-item d-sm-flex d-block py-4">
                                                    <img class="avatar avatar-xl br-5 me-3 w-100p h-10 mb-3" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 03</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">Alignments Mediaobject</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="media media-lg mt-0">
                                                <img class="align-self-start avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Top-aligned media</h4>
                                                    <p class="text-muted fs-14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <p class="text-muted fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media media-lg">
                                                <img class="align-self-center avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/30.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Center-aligned media</h4>
                                                    <p class="text-muted fs-14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <p class="text-muted fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="media media-lg">
                                                <img class="align-self-end avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/29.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Bottom-aligned media</h4>
                                                    <p class="text-muted fs-14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card Relatedpost nested-media">
                                    <div class="card-header">
                                        <h3 class="card-title">Mediaobject with Notation Link Text</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <ul class="">
                                                <li class="media media-lg mt-0 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/29.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 01</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                        <ul class="list-inline mb-0 pt-3 fs-14">
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Reply</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Edit</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="media media-lg my-4 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/30.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 02</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                        <ul class="list-inline mb-0 pt-3 fs-14">
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Reply</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Edit</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="media media-lg my-4 border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 03</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                        <ul class="list-inline mb-0 pt-3 fs-14">
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Reply</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Edit</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="media media-lg border-bottom-0">
                                                    <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/3.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h4 class="mt-0 mb-1">Media heading 04</h4>
                                                        <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                        <ul class="list-inline mb-0 pt-3 fs-14">
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Reply</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Edit</a></li>
                                                            <li class="list-inline-item"><a href="javascript:void(0);">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
