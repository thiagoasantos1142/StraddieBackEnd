
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">File Manager</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
                                <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-xxl-2 col-xl-3 col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="flex-fill">
                                            <a href="javascript:void(0);" class="btn btn-lg btn-block btn-primary">Add Folder <i class="mdi mdi-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body py-2 filemanager-list">
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-folder-outline me-2 fs-20"></i><span class="text-dark ms-1"> Home</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-file-multiple-outline me-2 fs-20"></i><span class="text-dark ms-1">All Files</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-star-outline me-2 fs-20"></i><span class="text-dark ms-1">Starred Files</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-send-outline me-2 fs-20"></i><span class="text-dark ms-1">Files shared by you</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-call-received me-2 fs-20"></i><span class="text-dark ms-1">Files you received</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-cog-outline me-2 fs-20"></i><span class="text-dark ms-1">Settings</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-help-circle-outline me-2 fs-20"></i><span class="text-dark ms-1">Help</span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="d-flex align-items-center py-1  border-0">
                                            <span class="me-2"><i class="mdi mdi-logout me-2 fs-20"></i><span class="text-dark ms-1">Log out</span></span>
                                        </a>
                                    </div>
                                    <div class="card-footer px-4">
                                        <p class="mb-1">STORAGE</p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 40%;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="fs-12">400GB used</span>
                                            <span class="fs-12">of 1TB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-10 col-xl-9 col-sm-8">
                                <div class="row">
                                    <h5 class="fw-semibold mb-3">Folders</h5>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#00a5a2" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#9dd1d0" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">HTML Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-primary" style="width: 30%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">28.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"> </a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#db555d" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#d59094" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">React Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-secondary" style="width: 50%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">49.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#f7b731" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#e1cea6" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">PhP Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-warning" style="width: 70%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">69.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#00a5a2" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#9dd1d0" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">Documents</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-primary" style="width: 70%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">69.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#17b1df" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#76c7df" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">Swipper Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-info" style="width: 65%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">64.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#69b747" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#a1db88" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">Tailwind Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-success" style="width: 75%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">74.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#e82646" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#d77a89" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">Typescript Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-danger" style="width: 85%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">85.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="{{url('filemanager-list')}}" class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="folder-file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#17b1df" d="M19.97586,10V9a3,3,0,0,0-3-3H10.69678l-.31622-.94868A3,3,0,0,0,7.53451,3H3.97586a3,3,0,0,0-3,3V19a2,2,0,0,0,2,2H3.3067a2,2,0,0,0,1.96774-1.64223l1.40283-7.71554A2,2,0,0,1,8.645,10Z"></path><path fill="#76c7df" d="M22.02386,10H8.645a2,2,0,0,0-1.96777,1.64221L5.27441,19.35773A2,2,0,0,1,3.3067,21H19.55292a2,2,0,0,0,1.96771-1.64227l1.48712-8.17884A1,1,0,0,0,22.02386,10Z"></path></svg>
                                                    </span>
                                                    <div class="file-dropdown file-icon">
                                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="fw-semibold my-1">Tasks Folder</h6>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-info" style="width: 65%;"></div>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span class="fs-12">64.5GB</span>
                                                    <span class="fs-12">100GB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-3 fw-semibold">Files</h5>
                                    <div class="col-xl-2 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="javascript:void(0);" class="stretched-link" data-bs-toggle="modal" data-bs-target="#largemodal"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="55px" enable-background="new 0 0 100 100" viewBox="0 0 100 100" id="pdf"><path fill="#00a5a2" d="M55,52c0.3,0.3,0.5,0.7,0.5,1.2c0,0.6-0.2,1-0.5,1.3c-0.4,0.3-0.9,0.4-1.6,0.4h-0.8v-3.3h1.1
                                                        C54.3,51.6,54.7,51.8,55,52z"></path><path fill="#00a5a2" d="M75.6,73.6H72c-0.6,0-1,0.5-1,1l0,7.3c0,2.7-2.2,5-4.9,5l-44.9,0.3c-2.4,0-4.4-1.6-4.9-3.9
                                                            c-0.1-0.3-0.1-0.7-0.1-1.1L16,35.9c0-0.3,0.3-0.6,0.6-0.6l18.8-0.1c3.3,0,5.9-2.7,5.9-5.9l-0.1-15.7c0-0.3,0.3-0.6,0.6-0.6
                                                            l23.8-0.2c2.7,0,5,2.2,5,4.9l0.1,18.5c0,0.6,0.5,1,1,1h3.6c0.6,0,1-0.5,1-1l-0.1-21.4c0-4.3-3.5-7.8-7.9-7.8L39.1,7.3
                                                            c-0.8,0-1.7,0.3-2.3,0.9L11.4,31.5c-0.7,0.7-1.1,1.6-1.1,2.5l0.2,51c0,4.3,3.5,7.8,7.9,7.8l50.6-0.1c4.3-0.2,7.8-3.7,7.8-8l0-10.1
                                                            C76.6,74.1,76.2,73.6,75.6,73.6z"></path><path fill="#00a5a2" d="M63.6,51.6h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M63.6,51.6
                                                            h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M86.7,41.9H42c-1.7,0-3,1.4-3,3v20.8c0,1.7,1.4,3,3,3h44.7
                                                            c1.7,0,3-1.4,3-3V44.9C89.7,43.2,88.4,41.9,86.7,41.9z M56.8,55.9c-0.8,0.6-1.8,1-3.2,1h-1v4h-2.4V49.7h3.6c1.4,0,2.4,0.3,3.1,0.9
                                                            c0.7,0.6,1.1,1.5,1.1,2.6C57.9,54.4,57.5,55.3,56.8,55.9z M67.7,59.4c-1,1-2.6,1.5-4.5,1.5H60V49.7h3.5c1.8,0,3.2,0.5,4.2,1.4
                                                            c1,1,1.5,2.3,1.5,4C69.2,57,68.7,58.4,67.7,59.4z M78,51.6h-4.1v2.9h3.8v1.9h-3.8v4.4h-2.3V49.7H78V51.6z M63.6,51.6h-1.3v7.3h1
                                                            c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z"></path></svg>
                                                </div>
                                                <p class="text-center mt-3">Project123.PDF</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="javascript:void(0);" class="stretched-link" data-bs-toggle="modal" data-bs-target="#largemodal"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="48px" fill="#db555d" enable-background="new 0 0 512 512" viewBox="0 0 512 512" id="ppt-file"><path d="M493.23,150.65L344.95,2.35c-1.5-1.5-3.53-2.35-5.65-2.35H171.34c-39.09,0-70.89,31.81-70.89,70.9v140.31H38.23
                                                        c-12.02,0-21.8,9.78-21.8,21.8v125.32c0,12.02,9.78,21.8,21.8,21.8h62.22v60.97c0,39.09,31.8,70.9,70.89,70.9h253.34
                                                        c39.09,0,70.89-31.81,70.89-70.9V156.31C495.57,154.19,494.73,152.15,493.23,150.65z M96.17,338.57V252.8c0-4.42,3.58-8,7.99-8
                                                        h25.77c18.62,0,33.76,15.15,33.76,33.76v1.08c0,18.62-15.14,33.76-33.76,33.76h-17.77v25.17c0,4.42-3.58,8-8,8
                                                        C99.75,346.57,96.17,342.99,96.17,338.57z M178.15,338.57V252.8c0-4.42,3.58-8,7.99-8h25.77c18.61,0,33.76,15.15,33.76,33.76v1.08
                                                        c0,18.62-15.15,33.76-33.76,33.76h-17.78v25.17c0,4.42-3.57,8-7.99,8C181.73,346.57,178.15,342.99,178.15,338.57z M262.36,260.79
                                                        c-4.41,0-7.99-3.58-7.99-7.99c0-4.42,3.58-8,7.99-8h51.54c4.41,0,7.99,3.58,7.99,8c0,4.41-3.58,7.99-7.99,7.99h-17.77v77.78
                                                        c0,4.42-3.58,8-8,8c-4.41,0-7.99-3.58-7.99-8v-77.78H262.36z M479.58,441.1c0,30.28-24.63,54.91-54.9,54.91H171.34
                                                        c-30.27,0-54.9-24.63-54.9-54.91v-60.97h263.39c12.02,0,21.8-9.78,21.8-21.8V233.01c0-12.02-9.78-21.8-21.8-21.8H116.44V70.9
                                                        c0-30.28,24.63-54.91,54.9-54.91H331.3v124.3c0,13.24,10.76,24.01,23.98,24.01h124.3V441.1z M129.93,297.41h-17.77v-36.62h17.77
                                                        c9.8,0,17.77,7.97,17.77,17.77v1.08C147.7,289.44,139.73,297.41,129.93,297.41z M211.91,297.41h-17.78v-36.62h17.78
                                                        c9.8,0,17.77,7.97,17.77,17.77v1.08C229.68,289.44,221.71,297.41,211.91,297.41z"></path></svg>

                                                </div>
                                                <p class="text-center mt-3">Project234.PPT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="javascript:void(0);" class="stretched-link" data-bs-toggle="modal" data-bs-target="#largemodal"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="52px" fill="#dbb255" enable-background="new 0 0 100 100" viewBox="0 0 100 100" id="zip-file"><path fill="#dbb255" d="M62.3,7.1C61,5.7,59.3,5,57.4,5H25.3c-4.1,0-7.4,3.3-7.4,7.4v32.7H9.7c-2.6,0-4.8,2.1-4.8,4.8V67
                                                        c0,2.6,2.1,4.8,4.8,4.8h44.7c2.6,0,4.8-2.1,4.8-4.8V49.8c0-2.6-2.1-4.8-4.8-4.8H25.9V13.4c0-0.2,0.2-0.4,0.4-0.4H57
                                                        c1.2,0,2.2,1,2.2,2.2V29c0,4.1,3.3,7.4,7.4,7.4h13.1c1.2,0,2.2,1,2.2,2.2v48c0,0.2-0.2,0.4-0.4,0.4H26.3c-0.2,0-0.4-0.2-0.4-0.4
                                                        v-6.5c0-0.6-0.5-1.2-1.2-1.2H19c-0.6,0-1.2,0.5-1.2,1.2v7.5c0,4.1,3.3,7.4,7.4,7.4h57.3c4.1,0,7.4-3.3,7.4-7.4V38.2
                                                        c0-1.8-0.7-3.5-1.9-4.8L62.3,7.1z M37.6,53c0-0.3,0.1-0.5,0.2-0.7s0.4-0.2,0.6-0.2h3c0.3,0,0.6,0,0.9,0s0.6,0.1,1,0.1
                                                        s0.8,0.2,1.1,0.4s0.7,0.5,1,0.8s0.5,0.7,0.6,1.1s0.2,0.9,0.2,1.4c0,0.7-0.1,1.3-0.3,1.9s-0.5,1-1,1.4S44,59.8,43.4,60
                                                        s-1.3,0.3-2.2,0.3h-1.1v4c0,0.1,0,0.1-0.1,0.2s-0.1,0.1-0.2,0.1s-0.2,0.1-0.4,0.1s-0.4,0-0.6,0c-0.2,0-0.5,0-0.6,0s-0.3,0-0.4-0.1
                                                        s-0.2-0.1-0.2-0.1s-0.1-0.1-0.1-0.2V53z M30.3,52.4c0-0.1,0-0.1,0.1-0.2s0.1-0.1,0.2-0.1s0.2-0.1,0.4-0.1s0.4,0,0.6,0
                                                        c0.3,0,0.5,0,0.6,0s0.3,0,0.4,0.1s0.2,0.1,0.2,0.1s0.1,0.1,0.1,0.2v11.9c0,0.1,0,0.1-0.1,0.2s-0.1,0.1-0.2,0.1s-0.2,0.1-0.4,0.1
                                                        s-0.4,0-0.6,0c-0.2,0-0.5,0-0.6,0s-0.3,0-0.4-0.1s-0.2-0.1-0.2-0.1s-0.1-0.1-0.1-0.2V52.4z M26.2,52.9v0.5c0,0.2,0,0.3,0,0.5
                                                        s0,0.3-0.1,0.4s-0.1,0.2-0.2,0.4s-0.2,0.3-0.3,0.5l-4.8,7.7h5.3c0.1,0,0.2,0.1,0.3,0.2s0.1,0.4,0.1,0.8c0,0.2,0,0.3,0,0.5
                                                        s0,0.2-0.1,0.3s-0.1,0.1-0.1,0.2s-0.1,0-0.2,0h-7.5c-0.3,0-0.5-0.1-0.6-0.2s-0.2-0.4-0.2-0.7v-0.4c0-0.1,0-0.2,0-0.4s0-0.2,0.1-0.3
                                                        s0.1-0.2,0.2-0.4s0.2-0.3,0.3-0.5l4.9-7.8h-4.9c-0.1,0-0.1,0-0.2-0.1s-0.1-0.1-0.1-0.2s-0.1-0.2-0.1-0.3s0-0.3,0-0.5
                                                        c0-0.2,0-0.4,0-0.5s0-0.2,0.1-0.3s0.1-0.1,0.1-0.2s0.1,0,0.2,0h7c0.3,0,0.5,0.1,0.6,0.2S26.2,52.6,26.2,52.9z"></path><path fill="#dbb255" d="M42.4,58.2c0.3-0.1,0.5-0.3,0.7-0.5s0.3-0.4,0.4-0.7s0.1-0.6,0.1-0.9c0-0.4-0.1-0.8-0.2-1.1s-0.3-0.5-0.6-0.6
                                                        s-0.5-0.2-0.7-0.3s-0.5-0.1-0.8-0.1h-1.1v4.3h1.2C41.8,58.3,42.1,58.3,42.4,58.2z"></path></svg>
                                                </div>
                                                <p class="text-center mt-3">Project345.ZIP</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="javascript:void(0);" class="stretched-link" data-bs-toggle="modal" data-bs-target="#largemodal"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="52px" fill="#17b1df" viewBox="0 0 100 100"><path fill="##17b1df" d="M62.6 7.1C61.3 5.7 59.5 5 57.7 5H25.5c-4.1 0-7.4 3.3-7.4 7.4v33H9.8c-2.6 0-4.8 2.1-4.8 4.8v17.1c0 2.6 2.1 4.8 4.8 4.8h44.7c2.6 0 4.8-2.1 4.8-4.8V50.2c0-2.6-2.1-4.8-4.8-4.8H26.1v-32c0-.2.2-.4.4-.4h30.7c1.2 0 2.2 1 2.2 2.2V29c0 4.1 3.3 7.4 7.4 7.4H80c1.2 0 2.2 1 2.2 2.2v48c0 .2-.2.4-.4.4H26.5c-.2 0-.4-.2-.4-.4v-6.5c0-.6-.5-1.2-1.2-1.2h-5.7c-.6 0-1.2.5-1.2 1.2v7.5c0 4.1 3.3 7.4 7.4 7.4h57.3c4.1 0 7.4-3.3 7.4-7.4V38.2c0-1.8-.7-3.5-1.9-4.8L62.6 7.1zM23.1 58.2c-.2.5-.5 1-1 1.4s-.9.7-1.6.9-1.3.3-2.2.3h-1.1v4c0 .1 0 .1-.1.2s.1 0 0 0-.2.1-.4.1h-1.2c-.1 0-.3 0-.4-.1s-.2-.1-.2-.1-.1-.1-.1-.2V53.4c0-.3.1-.5.2-.7s.4-.2.6-.2h3.9c.3 0 .6.1 1 .1s.8.2 1.1.4.7.5 1 .8.5.7.6 1.1.2.9.2 1.4c.1.7 0 1.3-.3 1.9zm15.8-4.9c0-.3.1-.5.2-.6s.3-.2.5-.2h3.2c1.1 0 2.1.1 2.9.4s1.4.7 2 1.2.9 1.2 1.2 1.9.4 1.6.4 2.6c0 1.2-.2 2.1-.5 3s-.7 1.5-1.3 2-1.3.9-2.1 1.1-1.8.4-2.9.4h-3c-.2 0-.4-.1-.5-.2s-.2-.3-.2-.6v-11zm-12.2 9.5c0-.1 0-.2.1-.3s.1-.1.1-.2.1-.1.2-.1.2.1.4.2.4.2.6.4.6.2.9.4.8.2 1.3.2c.3 0 .6 0 .8-.1s.5-.2.6-.3.3-.3.4-.5.1-.4.1-.7c0-.3-.1-.5-.2-.7s-.4-.4-.6-.5-.5-.3-.9-.4-.6-.3-1-.4-.7-.3-1-.5-.6-.4-.9-.7-.5-.6-.6-1-.2-.8-.2-1.4c0-.6.1-1.1.3-1.6s.5-.8.9-1.1.8-.5 1.3-.7 1.1-.2 1.6-.2c.3 0 .6 0 .9.1s.6.1.8.2.5.2.7.3.3.2.4.2.1.1.1.2 0 .1.1.2 0 .2 0 .3v1.2c0 .1.2-.3.2-.3s-.1.1-.2.1-.2 0-.3-.1-.3-.2-.6-.3-.5-.2-.8-.3-.6-.1-1-.1c-.3 0-.5 0-.7.1s-.4.2-.5.3-.2.3-.3.4-.1.3-.1.5c0 .3.1.5.2.7s.4.4.6.5.5.3.9.4.7.3 1 .4.7.3 1 .5.6.4.9.7.5.6.6 1 .2.8.2 1.3c0 .7-.1 1.2-.4 1.7s-.6.9-1 1.3-.9.6-1.5.8-1.2.3-1.8.3c-.4 0-.8 0-1.2-.1s-.7-.2-1-.3-.5-.2-.7-.3-.3-.2-.4-.3-.1-.2-.2-.4-.1-.4-.1-.7v-.3z"></path><path fill="##17b1df" d="M44.6 62.8c.5-.2.9-.5 1.2-.8s.6-.8.7-1.4.2-1.2.2-1.9c0-.6-.1-1.2-.2-1.7s-.4-1-.7-1.3-.7-.7-1.2-.9-1.1-.3-1.9-.3h-1.3v8.6h1.3c.8 0 1.4-.1 1.9-.3zM20 54.7c-.2-.1-.5-.2-.7-.3s-.5-.1-.8-.1h-1.1v4.3h1.2c.4 0 .8-.1 1-.2s.5-.3.7-.5.3-.4.4-.7.1-.6.1-.9c0-.4-.1-.8-.2-1.1s-.4-.3-.6-.5z"></path></svg>
                                                </div>
                                                <p class="text-center mt-3">Project456.PSD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="javascript:void(0);" class="stretched-link" data-bs-toggle="modal" data-bs-target="#largemodal"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="50px" fill="#69b747" enable-background="new 0 0 512 512" viewBox="0 0 512 512" id="apk-file"><path d="M493.23,150.65L344.95,2.35c-1.5-1.5-3.53-2.35-5.65-2.35H171.34c-39.09,0-70.89,31.81-70.89,70.9v140.31H38.23
                                                        c-12.02,0-21.8,9.78-21.8,21.8v125.32c0,12.02,9.78,21.8,21.8,21.8h62.22v60.97c0,39.09,31.8,70.9,70.89,70.9h253.34
                                                        c39.09,0,70.89-31.81,70.89-70.9V156.31C495.57,154.19,494.73,152.15,493.23,150.65z M87.35,336.79l19.62-85.8
                                                        c0.83-3.64,4.07-6.22,7.79-6.22h18.51c3.73,0,6.97,2.58,7.8,6.22l19.61,85.8c0.99,4.31-1.7,8.59-6.01,9.58
                                                        c-0.6,0.13-1.2,0.2-1.79,0.2c-3.64,0-6.94-2.51-7.78-6.22l-5.73-25.05h-30.7l-5.73,25.05c-0.98,4.31-5.27,7-9.57,6.02
                                                        C89.06,345.38,86.37,341.1,87.35,336.79z M177.83,338.57v-85.8c0-4.42,3.58-8,8-8h25.77c18.61,0,33.76,15.15,33.76,33.77v1.1
                                                        c0,18.62-15.15,33.76-33.76,33.76h-17.78v25.17c0,4.42-3.58,8-7.99,8C181.41,346.57,177.83,342.99,177.83,338.57z M316.49,248.01
                                                        c2.63-3.55,7.64-4.29,11.18-1.66c3.55,2.63,4.29,7.63,1.66,11.18l-25.27,34.11l25.71,42.82c2.27,3.78,1.04,8.69-2.74,10.97
                                                        c-1.29,0.77-2.71,1.14-4.11,1.14c-2.72,0-5.36-1.38-6.86-3.88l-22.31-37.15l-14.38,19.4v13.63c0,4.42-3.58,8-7.99,8
                                                        c-4.42,0-8-3.58-8-8v-85.8c0-4.42,3.58-8,8-8c4.41,0,7.99,3.58,7.99,8v45.32L316.49,248.01z M479.58,441.1
                                                        c0,30.28-24.63,54.91-54.9,54.91H171.34c-30.27,0-54.9-24.63-54.9-54.91v-60.97h263.39c12.02,0,21.8-9.78,21.8-21.8V233.01
                                                        c0-12.02-9.78-21.8-21.8-21.8H116.44V70.9c0-30.28,24.63-54.91,54.9-54.91H331.3v124.3c0,13.24,10.76,24.01,23.98,24.01h124.3V441.1
                                                        z M135.72,299.31h-23.4l8.82-38.55h5.76L135.72,299.31z M211.6,297.41h-17.78v-36.65h17.78c9.8,0,17.77,7.98,17.77,17.78v1.1
                                                        C229.37,289.44,221.4,297.41,211.6,297.41z"></path></svg>
                                                </div>
                                                <p class="text-center mt-3">Project567.APK</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6">
                                        <div class="card file-manager">
                                            <a href="javascript:void(0);" class="stretched-link" data-bs-toggle="modal" data-bs-target="#largemodal"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="52px" fill="#e82646" viewBox="0 0 100 100"><path fill="#e82646" d="M62.6 7.1C61.3 5.7 59.5 5 57.7 5H25.5c-4.1 0-7.4 3.3-7.4 7.4v33H9.8c-2.6 0-4.8 2.1-4.8 4.8v17.1c0 2.6 2.1 4.8 4.8 4.8h44.7c2.6 0 4.8-2.1 4.8-4.8V50.2c0-2.6-2.1-4.8-4.8-4.8H26.1v-32c0-.2.2-.4.4-.4h30.7c1.2 0 2.2 1 2.2 2.2V29c0 4.1 3.3 7.4 7.4 7.4H80c1.2 0 2.2 1 2.2 2.2v48c0 .2-.2.4-.4.4H26.5c-.2 0-.4-.2-.4-.4v-6.5c0-.6-.5-1.2-1.2-1.2h-5.7c-.6 0-1.2.5-1.2 1.2v7.5c0 4.1 3.3 7.4 7.4 7.4h57.3c4.1 0 7.4-3.3 7.4-7.4V38.2c0-1.8-.7-3.5-1.9-4.8L62.6 7.1zM23.1 58.2c-.2.5-.5 1-1 1.4s-.9.7-1.6.9-1.3.3-2.2.3h-1.1v4c0 .1 0 .1-.1.2s.1 0 0 0-.2.1-.4.1h-1.2c-.1 0-.3 0-.4-.1s-.2-.1-.2-.1-.1-.1-.1-.2V53.4c0-.3.1-.5.2-.7s.4-.2.6-.2h3.9c.3 0 .6.1 1 .1s.8.2 1.1.4.7.5 1 .8.5.7.6 1.1.2.9.2 1.4c.1.7 0 1.3-.3 1.9zm15.8-4.9c0-.3.1-.5.2-.6s.3-.2.5-.2h3.2c1.1 0 2.1.1 2.9.4s1.4.7 2 1.2.9 1.2 1.2 1.9.4 1.6.4 2.6c0 1.2-.2 2.1-.5 3s-.7 1.5-1.3 2-1.3.9-2.1 1.1-1.8.4-2.9.4h-3c-.2 0-.4-.1-.5-.2s-.2-.3-.2-.6v-11zm-12.2 9.5c0-.1 0-.2.1-.3s.1-.1.1-.2.1-.1.2-.1.2.1.4.2.4.2.6.4.6.2.9.4.8.2 1.3.2c.3 0 .6 0 .8-.1s.5-.2.6-.3.3-.3.4-.5.1-.4.1-.7c0-.3-.1-.5-.2-.7s-.4-.4-.6-.5-.5-.3-.9-.4-.6-.3-1-.4-.7-.3-1-.5-.6-.4-.9-.7-.5-.6-.6-1-.2-.8-.2-1.4c0-.6.1-1.1.3-1.6s.5-.8.9-1.1.8-.5 1.3-.7 1.1-.2 1.6-.2c.3 0 .6 0 .9.1s.6.1.8.2.5.2.7.3.3.2.4.2.1.1.1.2 0 .1.1.2 0 .2 0 .3v1.2c0 .1.2-.3.2-.3s-.1.1-.2.1-.2 0-.3-.1-.3-.2-.6-.3-.5-.2-.8-.3-.6-.1-1-.1c-.3 0-.5 0-.7.1s-.4.2-.5.3-.2.3-.3.4-.1.3-.1.5c0 .3.1.5.2.7s.4.4.6.5.5.3.9.4.7.3 1 .4.7.3 1 .5.6.4.9.7.5.6.6 1 .2.8.2 1.3c0 .7-.1 1.2-.4 1.7s-.6.9-1 1.3-.9.6-1.5.8-1.2.3-1.8.3c-.4 0-.8 0-1.2-.1s-.7-.2-1-.3-.5-.2-.7-.3-.3-.2-.4-.3-.1-.2-.2-.4-.1-.4-.1-.7v-.3z"></path><path fill="#e82646" d="M44.6 62.8c.5-.2.9-.5 1.2-.8s.6-.8.7-1.4.2-1.2.2-1.9c0-.6-.1-1.2-.2-1.7s-.4-1-.7-1.3-.7-.7-1.2-.9-1.1-.3-1.9-.3h-1.3v8.6h1.3c.8 0 1.4-.1 1.9-.3zM20 54.7c-.2-.1-.5-.2-.7-.3s-.5-.1-.8-.1h-1.1v4.3h1.2c.4 0 .8-.1 1-.2s.5-.3.7-.5.3-.4.4-.7.1-.6.1-.9c0-.4-.1-.8-.2-1.1s-.4-.3-.6-.5z"></path></svg>
                                                </div>
                                                <p class="text-center mt-3">Project456.PSD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 -->
                        <div class="row">
                            <div class="col-xxl-2">
                            </div>
                            <div class="col-xxl-6 col-xl-7">
                                <h5 class="mb-3 fw-semibold">Categories</h5>
                                <div class="card">
                                    <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>File</th>
                                                            <th>File Size</th>
                                                            <th>No.of files</th>
                                                            <th>Last Modified</th>
                                                            <th>Shared with</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-file-jpg-box fs-20 text-primary me-1"></i><span>Graphic.jpg</span></td>
                                                            <td>30MB</td>
                                                            <td>03</td>
                                                            <td>05 May,2022</td>
                                                            <td>2 users</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-file-pdf-box fs-20 text-secondary me-1"></i><span>Project.pdf</span></td>
                                                            <td>504MB</td>
                                                            <td>02</td>
                                                            <td>12 June,2022</td>
                                                            <td>5 users</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-application fs-20 text-warning me-1"></i><span>Flaira.apk</span></td>
                                                            <td>1001MB</td>
                                                            <td>01</td>
                                                            <td>11 Aug,2022</td>
                                                            <td>3 users</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-file-pdf-box fs-20 text-info me-1"></i><span>vexel.pdf</span></td>
                                                            <td>30MB</td>
                                                            <td>05</td>
                                                            <td>21 Jan,2022</td>
                                                            <td>10 users</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-application fs-20 text-success me-1"></i><span>valex.psd</span></td>
                                                            <td>1.2GB</td>
                                                            <td>02</td>
                                                            <td>23 Nov,2019</td>
                                                            <td>7 users</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0 d-flex align-items-center"><i class="mdi mdi-folder-zip fs-20 text-danger me-1"></i><span>spruha.zip</span></td>
                                                            <td class="border-bottom-0">2.3GB</td>
                                                            <td class="border-bottom-0">03</td>
                                                            <td class="border-bottom-0">26 Mar,2023</td>
                                                            <td class="border-bottom-0">4 users</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-5">
                                <h5 class="mb-3 fw-semibold">History</h5>
                                <div class="card">
                                    <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>File Name</th>
                                                            <th>Transfered</th>
                                                            <th>Size</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-folder-zip fs-20 text-primary me-1"></i><span>Dashfox.zip</span></td>
                                                            <td>Shared</td>
                                                            <td>1.22GB</td>
                                                            <td>
                                                                <div class="file-dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-file-pdf-box fs-20 text-secondary me-1"></i><span>Spaner.pdf</span></td>
                                                            <td>Received</td>
                                                            <td>22GB</td>
                                                            <td>
                                                                <div class="file-dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-application fs-20 text-warning me-1"></i><span>Orzo.psd</span></td>
                                                            <td>Shared</td>
                                                            <td>12.3GB</td>
                                                            <td>
                                                                <div class="file-dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-file-jpg-box fs-20 text-info me-1"></i><span>Graphic.jpg</span></td>
                                                            <td>Received</td>
                                                            <td>3.5GB</td>
                                                            <td>
                                                                <div class="file-dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="d-flex align-items-center"><i class="mdi mdi-file-pdf-box fs-20 text-success me-1"></i><span>Extra.pdf</span></td>
                                                            <td>Shared</td>
                                                            <td>4.2GB</td>
                                                            <td>
                                                                <div class="file-dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0 d-flex align-items center"><i class="mdi mdi-folder-zip fs-20 text-danger me-1"></i><span>Valex.zip</span></td>
                                                            <td class="border-bottom-0">Received</td>
                                                            <td class="border-bottom-0">5.8GB</td>
                                                            <td class="border-bottom-0">
                                                                <div class="file-dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')

                    <!-- File-Details Modal -->
                    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">File Details</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div>
                                                <img src="{{asset('build/assets/images/media/33.jpg')}}" class="rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-bold">File Name</td>
                                                            <td>Media Image</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File Size</td>
                                                            <td>11.45GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded date</td>
                                                            <td>03-11-2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded by</td>
                                                            <td>Michael Starc</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File format</td>
                                                            <td>psd</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image height</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image Width</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File location</td>
                                                            <td>storage/documents/images/File.psd</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- File-Details Modal -->

@endsection

@section('scripts')
	
	

@endsection
