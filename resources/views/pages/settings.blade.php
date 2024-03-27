
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Settings</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extension</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-xl-10 col-xxl-8">
                                <div class="card custom-card">
                                    <div class="card-header d-sm-flex d-block">
                                        <ul class="nav nav-pills nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                            <li class="nav-item m-1">
                                                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#personal-info" aria-selected="true">Personal Information</a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#account-settings" aria-selected="true">Account Settings</a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#email-settings" aria-selected="true">Email</a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#notification-settings" aria-selected="true">Notifications</a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                href="#security" aria-selected="true">Security</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="tab-content">
                                            <div class="tab-pane show active fs-13 p-5" id="personal-info" role="tabpanel">
                                                <h6 class="mb-4">Profile Photo :</h6>
                                                <div class="mb-4 border p-4 br-5 d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                    <div class="d-sm-flex align-items-center flex-wrap gap-2">
                                                        <div class="mb-0 me-5 d-flex align-items-center">
                                                            <span class="avatar-xl rounded-circle position-relative">
                                                                <img src="{{asset('build/assets/images/users/15.jpg')}}" alt="" class="avatar-xl rounded-circle" id="profile-img">
                                                                <a href="javascript:void(0);" class="badge position-absolute rounded-pill bg-primary tx-fixed-white avatar-icons">
                                                                    <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                                    <i class="fe fe-camera lh-base"></i>
                                                                </a>
                                                            </span>
                                                            <div class="ms-3">
                                                                <h5 class="mb-1">Taylor Json</h5>
                                                                <p class="mb-0">Web Designer</p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group mt-sm-0 mt-2">
                                                            <button class="btn btn-primary">Change</button>
                                                            <button class="btn btn-light">Remove</button>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button class="btn btn-secondary-light"><i class="ri-vip-crown-2-line"></i> Premium Membership</button>
                                                    </div>
                                                </div>
                                                <h6>Personal Information :</h6>
                                                <div class="row gy-4 mb-4">
                                                    <div class="col-xl-6">
                                                        <label for="first-name" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="first-name" placeholder="Firt Name">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="last-name" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="row gy-4 mb-4">
                                                    <div class="col-xl-6">
                                                        <label for="email-address" class="form-label">Email Address :</label>
                                                        <input type="text" class="form-control" id="email-address" placeholder="xyz@gmail.com">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label for="phone" class="form-label">Phone Number :</label>
                                                        <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">Language :</label>
                                                        <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple>
                                                            <option value="Choice 1" selected>  English</option>
                                                            <option value="Choice 2">French</option>
                                                            <option value="Choice 3">Arabic</option>
                                                            <option value="Choice 4">Malayalam</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <label class="form-label">Country :</label>
                                                            <select class="form-control" name="country-select" id="country-select">
                                                            <option value="Choice 1" selected>  India</option>
                                                            <option value="Choice 2">USA</option>
                                                            <option value="Choice 4">Australia</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="bio" class="form-label">Bio :</label>
                                                        <textarea class="form-control overflow-auto" id="bio" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fs-13 p-5" id="account-settings" role="tabpanel">
                                                <div class="row gy-3">
                                                    <div class="col-xl-7">
                                                        <div class="card custom-card shadow-none mb-0 border">
                                                            <div class="card-body">
                                                                <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Two Step Verification</p>
                                                                        <p class="fs-12 text-muted mb-0">Two step verificatoin is very secured and restricts in happening faulty practices.</p>
                                                                    </div>
                                                                    <div class="custom-toggle-switch ms-sm-2 ms-0 mt-3 mt-sm-0">
                                                                        <input id="two-step" name="toggleswitchsize" type="checkbox" checked>
                                                                        <label for="two-step" class="label-primary mb-1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                    <div>
                                                                        <p class="fs-14 mb-2 fw-semibold">Authentication</p>
                                                                        <div class="btn-group flex-wrap" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                                                            <label class="btn btn-outline-primary d-flex align-items-center" for="btnradio1"><i class="ri-lock-unlock-line me-1 align-middle d-inline-flex"></i>Pin</label>
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                            <label class="btn btn-outline-primary d-flex align-items-center" for="btnradio2"><i class="ri-lock-password-line me-1 align-middle d-inline-flex"></i>Password</label>
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                                                            <label class="btn btn-outline-primary d-flex align-items-center" for="btnradio3"><i class="ri-fingerprint-line me-1 align-middle d-inline-flex"></i>Finger Print</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="custom-toggle-switch ms-sm-2 ms-0 mt-3 mt-sm-0">
                                                                        <input id="authentication" name="toggleswitchsize2" type="checkbox" checked>
                                                                        <label for="authentication" class="label-primary mb-1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Recovery Mail</p>
                                                                        <p class="fs-12 text-muted mb-0">Incase of forgetting password mails are sent to  heifo@gmail.com</p>
                                                                    </div>
                                                                    <div class="custom-toggle-switch ms-sm-2 ms-0 mt-3 mt-sm-0">
                                                                        <input id="recovery-mail" name="toggleswitchsize3" type="checkbox" checked>
                                                                        <label for="recovery-mail" class="label-primary mb-1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">SMS Recovery</p>
                                                                        <p class="fs-12 text-muted mb-0">SMS are sent to 9102312xx in case of recovery</p>
                                                                    </div>
                                                                    <div class="custom-toggle-switch ms-sm-2 ms-0 mt-3 mt-sm-0">
                                                                        <input id="sms-recovery" name="toggleswitchsize4" type="checkbox" checked>
                                                                        <label for="sms-recovery" class="label-primary mb-1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Reset Password</p>
                                                                        <p class="fs-12 text-muted">Password should be min of <b class="text-success">8 digits<sup>*</sup></b>,atleast <b class="text-success">One Capital letter<sup>*</sup></b> and <b class="text-success">One Special Character<sup>*</sup></b> included.</p>
                                                                        <div class="mb-2">
                                                                            <label for="current-password" class="form-label">Current Password</label>
                                                                            <input type="text" class="form-control" id="current-password" placeholder="Current Password">
                                                                        </div>
                                                                        <div class="mb-2">
                                                                            <label for="new-password" class="form-label">New Password</label>
                                                                            <input type="text" class="form-control" id="new-password" placeholder="New Password">
                                                                        </div>
                                                                        <div class="mb-0">
                                                                            <label for="confirm-password" class="form-label">Confirm Password</label>
                                                                            <input type="text" class="form-control" id="confirm-password" placeholder="Confirm PAssword">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="card custom-card shadow-none mb-0 border">
                                                            <div class="card-header justify-content-between d-sm-flex d-block">
                                                                <div class="card-title">Registered Devices</div>
                                                                <div class="mt-sm-0 mt-2">
                                                                    <button class="btn btn-sm btn-primary">Signout from all devices</button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-top">
                                                                            <div class="lh-1"><i class="bi bi-phone me-2 fs-16 align-middle text-muted"></i></div>
                                                                            <div class="lh-1 flex-fill">
                                                                                <p class="mb-1">
                                                                                    <span class="fw-semibold">Mobile-LG-1023</span>
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted fs-11">Manchester, UK-Nov 30, 04:45PM</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-top">
                                                                            <div class="lh-1"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                            <div class="lh-1 flex-fill">
                                                                                <p class="mb-1">
                                                                                    <span class="fw-semibold">Lenovo-1291203</span>
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted fs-11">England, UK-Aug 12, 12:25PM</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-top">
                                                                            <div class="lh-1"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                            <div class="lh-1 flex-fill">
                                                                                <p class="mb-1">
                                                                                    <span class="fw-semibold">Macbook-Suzika</span>
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted fs-11">Brightoon, UK-Jul 18, 8:34AM</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-top">
                                                                            <div class="lh-1"><i class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i></div>
                                                                            <div class="lh-1 flex-fill">
                                                                                <p class="mb-1">
                                                                                    <span class="fw-semibold">Apple-Desktop</span>
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted fs-11 text-wrap">Darlington, UK-Jan 14, 11:14AM</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fs-13 p-0" id="email-settings" role="tabpanel">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                                                                <span class="fs-14 fw-semibold mb-0">Menu View :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Default View
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Advanced View
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="menu-view" name="toggleswitchsize" type="checkbox" checked="">
                                                                    <label for="menu-view" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Language :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <select class="form-control" name="choices-multiple-remove-button2" id="choices-multiple-remove-button2" multiple>
                                                                    <option value="Choice 1" selected>  English</option>
                                                                    <option value="Choice 2">French</option>
                                                                    <option value="Choice 3">Arabic</option>
                                                                    <option value="Choice 4">Malayalam</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="mail-languages" name="toggleswitchsize" type="checkbox">
                                                                    <label for="mail-languages" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Images :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="images-default" id="images-open">
                                                                    <label class="form-check-label" for="images-open">
                                                                        Always Open Images
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="images-default" id="images-hide" checked="">
                                                                    <label class="form-check-label" for="images-hide">
                                                                        Ask For Permission
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="mails-images" name="toggleswitchsize" type="checkbox">
                                                                    <label for="mails-images" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Keyboard Shortcuts :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="keyboard-default" id="keyboard-enable1">
                                                                    <label class="form-check-label" for="keyboard-enable1">
                                                                        Keyboard Shortcuts Enable
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="keyboard-default" id="keyboard-disable2" checked="">
                                                                    <label class="form-check-label" for="keyboard-disable2">
                                                                        Keyboard Shortcuts Disable
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="keyboard-shortcuts" name="toggleswitchsize" type="checkbox">
                                                                    <label for="keyboard-shortcuts" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Notifications :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="desktop-notifications" checked="">
                                                                    <label class="form-check-label" for="desktop-notifications">
                                                                        Desktop Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="mobile-notifications">
                                                                    <label class="form-check-label" for="mobile-notifications">
                                                                        Mobile Notifications
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="float-sm-end">
                                                                    <a href="javascript:void(0);" class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Maximum Mails Per Page :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <select class="form-control select2" data-trigger name="mail-per-page" id="mail-per-page">
                                                                <option value="Choice 1" selected>10</option>
                                                                <option value="Choice 2">50</option>
                                                                <option value="Choice 3">100</option>
                                                                <option value="Choice 3">120</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="mails-per-page" name="toggleswitchsize" type="checkbox">
                                                                    <label for="mails-per-page" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Mail Composer :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="mail-default" id="mail-composeron1">
                                                                    <label class="form-check-label" for="mail-composeron1">
                                                                        Mail Composer On
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="mail-default" id="mail-composeroff2" checked="">
                                                                    <label class="form-check-label" for="mail-composeroff2">
                                                                        Mail Composer Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="mail-composer" name="toggleswitchsize" type="checkbox">
                                                                    <label for="mail-composer" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Auto Correct :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="auto-default" id="auto-correcton1">
                                                                    <label class="form-check-label" for="auto-correcton1">
                                                                        Auto Correct On
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="auto-default" id="auto-correctoff2" checked="">
                                                                    <label class="form-check-label" for="auto-correctoff2">
                                                                        Auto Correct Off
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="custom-toggle-switch float-sm-end">
                                                                    <input id="auto-correct" name="toggleswitchsize" type="checkbox">
                                                                    <label for="auto-correct" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                            <div class="col-xl-3">
                                                                <span class="fs-14 fw-semibold mb-0">Mail Send Action :</span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="on-keyboard" checked="">
                                                                    <label class="form-check-label" for="on-keyboard">
                                                                        On Keyboard Action
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="on-buttonclick">
                                                                    <label class="form-check-label" for="on-buttonclick">
                                                                        On Button Click
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="float-sm-end">
                                                                    <a href="javascript:void(0);" class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fs-13 p-0" id="notification-settings"
                                                role="tabpanel">
                                                <ul class="list-group list-group-flush list-unstyled">
                                                    <li class="list-group-item">
                                                        <div class="row gx-5">
                                                            <div class="col-xl-5">
                                                                <p class="fs-16 mb-1 fw-semibold">Email Notifications</p>
                                                                <p class="fs-12 mb-0 text-muted">Email notifications are the notifications you will receeive when you are offline, you can customize them by enabling or disabling them.</p>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Updates & Features</p>
                                                                        <p class="fs-12 mb-0 text-muted">Notifications about new updates and their features.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="update-features" name="toggleswitchsize" type="checkbox" checked="">
                                                                            <label for="update-features" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Early Access</p>
                                                                        <p class="fs-12 mb-0 text-muted">Users are selected for beta testing of new update,notifications relating or participate in any of paid product promotion.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="early-access" name="toggleswitchsize" type="checkbox">
                                                                            <label for="early-access" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Email Shortcuts</p>
                                                                        <p class="fs-12 mb-0 text-muted">Shortcut notifications for email.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="email-shortcut" name="toggleswitchsize" type="checkbox" checked="">
                                                                            <label for="email-shortcut" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">New Mails</p>
                                                                        <p class="fs-12 mb-0 text-muted">Notifications related to new mails received.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="new-mails" name="toggleswitchsize" type="checkbox" checked="">
                                                                            <label for="new-mails" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Mail Chat Messages</p>
                                                                        <p class="fs-12 mb-0 text-muted">Any of new messages are received will be updated through notifications.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="mail-chat-messages" name="toggleswitchsize" type="checkbox" checked="">
                                                                            <label for="mail-chat-messages" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gx-5">
                                                            <div class="col-xl-5">
                                                                <p class="fs-16 mb-1 fw-semibold">Push Notifications</p>
                                                                <p class="fs-12 mb-0 text-muted">Push notifications are recieved when you are online, you can customize them by enabling or disabling them.</p>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">New Mails</p>
                                                                        <p class="fs-12 mb-0 text-muted">Notifications related to new mails received.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="push-new-mails" name="toggleswitchsize" type="checkbox" checked="">
                                                                            <label for="push-new-mails" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Mail Chat Messages</p>
                                                                        <p class="fs-12 mb-0 text-muted">Any of new messages are received will be updated through notifications.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="push-mail-chat-messages" name="toggleswitchsize" type="checkbox" checked="">
                                                                            <label for="push-mail-chat-messages" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-top justify-content-between mt-3">
                                                                    <div class="mail-notification-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Mail Extensions</p>
                                                                        <p class="fs-12 mb-0 text-muted">Notifications related to the extensions received by new emails and thier propertied also been displayed.</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="mail-extensions" name="toggleswitchsize" type="checkbox">
                                                                            <label for="mail-extensions" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fs-13 p-0" id="security"
                                                role="tabpanel">
                                                <ul class="list-group list-group-flush list-unstyled">
                                                    <li class="list-group-item">
                                                        <div class="row gx-5">
                                                            <div class="col-xl-4">
                                                                <p class="fs-16 mb-1 fw-semibold">Logging In</p>
                                                                <p class="fs-12 mb-0 text-muted">Security settings related to logging into our email account and taking down account if any mischevious action happended.</p>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                    <div class="mail-security-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Max Limit for login attempts</p>
                                                                        <p class="fs-12 mb-0 text-muted">Account will freeze for 24hrs while attempt to login with wrong credentials for selected number of times</p>
                                                                    </div>

                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Account Freeze time management</p>
                                                                        <p class="fs-12 mb-0 text-muted">You can change the time for the account freeze when attempts for </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gx-5">
                                                            <div class="col-xl-4">
                                                                <p class="fs-16 mb-1 fw-semibold">Password Requirements</p>
                                                                <p class="fs-12 mb-0 text-muted">Security settings related to password strength.</p>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                    <div class="mail-security-settings">
                                                                        <p class="fs-14 mb-1 fw-semibold">Minimun number of characters in the password</p>
                                                                        <p class="fs-12 mb-0 text-muted">There should be a minimum number of characters for a password to be validated that shouls be set here.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Contain A Number</p>
                                                                        <p class="fs-12 mb-0 text-muted">Password should contain a number.</p>
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="password-number" name="toggleswitchsize6" type="checkbox">
                                                                            <label for="password-number" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Contain A Special Character</p>
                                                                        <p class="fs-12 mb-0 text-muted">Password should contain a special Character.</p>
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="password-special-character" name="toggleswitchsize7" type="checkbox" checked>
                                                                            <label for="password-special-character" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Atleast One Capital Letter</p>
                                                                        <p class="fs-12 mb-0 text-muted">Password should contain atleast one capital letter.</p>
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <div class="custom-toggle-switch float-sm-end">
                                                                            <input id="password-capital" name="toggleswitchsize8" type="checkbox" checked>
                                                                            <label for="password-capital" class="label-primary mb-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                    <div>
                                                                        <p class="fs-14 mb-1 fw-semibold">Maximun Password Length</p>
                                                                        <p class="fs-12 mb-0 text-muted">Maximum password lenth should be selected here.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="row gx-5">
                                                            <div class="col-xl-4">
                                                                <p class="fs-16 mb-1 fw-semibold">Unknown Chats</p>
                                                                <p class="fs-12 mb-0 text-muted">Security settings related to unknown chats.</p>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="unknown-messages-default" id="unknown-messages-show1">
                                                                        <label class="form-check-label" for="unknown-messages-show1">
                                                                            Show
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="unknown-messages-default" id="unknown-messages-hide2" checked="">
                                                                        <label class="form-check-label" for="unknown-messages-hide2">
                                                                            Hide
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="float-end">
                                            <button class="btn btn-light m-1">
                                                Reset All
                                            </button>
                                            <button class="btn btn-primary m-1">
                                                Save Changes
                                            </button>
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
	
	    <!-- Internal Settngs JS -->
        @vite('resources/assets/js/setting.js')

@endsection
