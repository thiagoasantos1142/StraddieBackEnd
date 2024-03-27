
@extends('layouts.master')

@section('styles')

        <!-- noui Slider -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Form-elements</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form-elements</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 START -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Input Types
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div class="row gy-4">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-label">Basic Input:</label>
                                                    <input type="text" class="form-control" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-label" class="form-label">Form Input With Label</label>
                                                    <input type="text" class="form-control" id="input-label">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-placeholder" class="form-label">Form Input With Placeholder</label>
                                                    <input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-text" class="form-label">Type Text</label>
                                                    <input type="text" class="form-control" id="input-text" placeholder="Text">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-number" class="form-label">Type Number</label>
                                                    <input type="number" class="form-control" id="input-number" placeholder="Number">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-password" class="form-label">Type Password</label>
                                                    <input type="password" class="form-control" id="input-password" placeholder="Password">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-email" class="form-label">Type Email</label>
                                                    <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-tel" class="form-label">Type Tel</label>
                                                    <input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-date" class="form-label">Type Date</label>
                                                    <input type="date" class="form-control" id="input-date">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-week" class="form-label">Type Week</label>
                                                    <input type="week" class="form-control" id="input-week">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-month" class="form-label">Type Month</label>
                                                    <input type="month" class="form-control" id="input-month">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-time" class="form-label">Type Time</label>
                                                    <input type="time" class="form-control" id="input-time">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-datetime-local" class="form-label">Type datetime-local</label>
                                                    <input type="datetime-local" class="form-control" id="input-datetime-local">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-search" class="form-label">Type Search</label>
                                                    <input type="search" class="form-control" id="input-search" placeholder="Search">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-submit" class="form-label">Type Submit</label>
                                                    <input type="submit" class="form-control" id="input-submit" value="Submit">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-reset" class="form-label">Type Reset</label>
                                                    <input type="reset" class="form-control" id="input-reset">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-button" class="form-label">Type Button</label>
                                                    <input type="button" class="form-control btn btn-primary" id="input-button"  value="Button">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="row align-items-center">
                                                        <div class="col-xl-4 mb-2">
                                                            <label class="form-label">Type Color</label>
                                                            <input class="form-control form-input-color" type="color" value="#db555d">
                                                        </div>
                                                        <div class="col-xl-4 mb-2">
                                                            <div class="form-check p-0">
                                                                <p class="mb-1 px-0 text-muted">Type Checkbox</p>
                                                                <input class="form-check-input ms-2" type="checkbox" value="" checked="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-check p-0">
                                                                <p class="mb-1 px-0 text-muted">Type Radio</p>
                                                                <input class="form-check-input ms-2" type="radio" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-file" class="form-label">Type File</label>
                                                    <input class="form-control" type="file" id="input-file">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-label">Type Url</label>
                                                    <input class="form-control" type="url"  name="website" placeholder="http://example.com">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-label">Type Disabled</label>
                                                    <input type="text" class="form-control" placeholder="Disabled input" disabled="">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-readonlytext" class="form-label">Input Readonly Text</label>
                                                    <input type="text" readonly="" class="form-control-plaintext" id="input-readonlytext" value="email@example.com">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="disabled-readonlytext" class="form-label">Disabled Readonly Input</label>
                                                    <input class="form-control" type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled="" readonly="">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-label">Type Readonly Input</label>
                                                    <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly="">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="text-area" class="form-label">Textarea</label>
                                                    <textarea class="form-control" id="text-area" rows="1"></textarea>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-DataList" class="form-label">Datalist example</label>
                                                    <input class="form-control" list="datalistOptions" id="input-DataList" placeholder="Type to search...">
                                                    <datalist id="datalistOptions">
                                                        <option value="San Francisco">
                                                        </option>
                                                        <option value="New York">
                                                        </option>
                                                        <option value="Seattle">
                                                        </option>
                                                        <option value="Los Angeles">
                                                        </option>
                                                        <option value="Chicago">
                                                        </option>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-2 START -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Input shapes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="row gy-3">
                                                <div class="col-xl-12">
                                                    <label for="input-noradius" class="form-label">Input With No Radius</label>
                                                    <input type="text" class="form-control rounded-0" id="input-noradius" placeholder="No Radius">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="input-rounded" class="form-label">Input With Radius</label>
                                                    <input type="text" class="form-control" id="input-rounded" placeholder="Default Radius">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="input-rounded-pill" class="form-label">Rounded Input</label>
                                                    <input type="text" class="form-control rounded-pill" id="input-rounded-pill" placeholder="Rounded">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Input border Styles
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="row gy-3">
                                                <div class="col-xl-12">
                                                    <label for="input-rounded" class="form-label">Default</label>
                                                    <input type="text" class="form-control" placeholder="Default">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="input-rounded" class="form-label">Dotted Input</label>
                                                    <input type="text" class="form-control border-dotted" placeholder="Dotted">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="input-rounded" class="form-label">Dashed Input</label>
                                                    <input type="text" class="form-control border-dashed" placeholder="Dashed">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END-->

                        <!-- ROW-3 START -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Input Sizing
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input class="form-control form-control-sm mb-3" type="text"
                                                placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                            <input class="form-control mb-3" type="text" placeholder="Default input"
                                                aria-label="default input example">
                                            <input class="form-control form-control-lg" type="text"
                                            placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->

                        <!--ROW-4 START-->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Overview
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll
                                                    never share your email
                                                    with
                                                    anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check
                                                    me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Disabled forms
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <fieldset disabled="">
                                                <div class="mb-3">
                                                    <label for="disabledTextInput" class="form-label">Disabled
                                                        input</label>
                                                    <input type="text" id="disabledTextInput" class="form-control"
                                                        placeholder="Disabled input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">Disabled select
                                                        menu</label>
                                                    <select id="disabledSelect" class="form-select">
                                                        <option>Disabled select</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="disabledFieldsetCheck" disabled="">
                                                        <label class="form-check-label" for="disabledFieldsetCheck">
                                                            Can't check this
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Form text
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label for="inputPassword5" class="form-label">Password</label>
                                                <input type="password" id="inputPassword5" class="form-control"
                                                    aria-describedby="passwordHelpBlock">
                                                <div id="passwordHelpBlock" class="form-text">
                                                    Your password must be 8-20 characters long, contain letters and
                                                    numbers,
                                                    and
                                                    must not contain spaces, special characters, or emoji.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Select</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Customize the native <code class="highlighter-rouge">&lt;select&gt;</code>s with custom CSS that changes the element’s initial appearance.</p>
                                        <div class="form-group">
                                            <label class="form-label">Default Select</label>
                                            <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                                    <option value="br">Brazil</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl" selected>Poland</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--ROW-4 END-->

                        <h5 class="mb-4">Checks & Radios</h5>

                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Checks
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Default checkbox
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                    checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Checked checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Disabled
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled"
                                                    disabled="">
                                                <label class="form-check-label" for="flexCheckDisabled">
                                                    Disabled checkbox
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckCheckedDisabled" checked="" disabled="">
                                                <label class="form-check-label" for="flexCheckCheckedDisabled">
                                                    Disabled checked checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Radios
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Default radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" checked="">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Default checked radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Disabled
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                                    id="flexRadioDisabled" disabled="">
                                                <label class="form-check-label" for="flexRadioDisabled">
                                                    Disabled radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                                    id="flexRadioCheckedDisabled" checked="" disabled="">
                                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                    Disabled checked radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Default (stacked)
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Default checkbox
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"
                                                    disabled="">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Disabled checkbox
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Default radio
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios3" value="option3" disabled="">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    Disabled radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Switches
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                                                    checkbox input</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" checked="">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                                    checkbox input</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDisabled" disabled="">
                                                <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled
                                                    switch
                                                    checkbox input</label>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckCheckedDisabled" checked="" disabled="">
                                                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                                    checked switch checkbox input</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Checkbox Sizes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area d-sm-flex align-items-center justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked="">
                                                <label class="form-check-label" for="checkebox-sm">
                                                    Default
                                                </label>
                                            </div>
                                            <div class="form-check form-check-md d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="" id="checkebox-md" checked="">
                                                <label class="form-check-label" for="checkebox-md">
                                                    Medium
                                                </label>
                                            </div>
                                            <div class="form-check form-check-lg d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" value="" id="checkebox-lg" checked="">
                                                <label class="form-check-label" for="checkebox-lg">
                                                    Large
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Radio Sizes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area d-sm-flex align-items-center justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Radio" id="Radio-sm">
                                                <label class="form-check-label" for="Radio-sm">
                                                    default
                                                </label>
                                            </div>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="radio" name="Radio" id="Radio-md">
                                                <label class="form-check-label" for="Radio-md">
                                                    Medium
                                                </label>
                                            </div>
                                            <div class="form-check form-check-lg">
                                                <input class="form-check-input" type="radio" name="Radio" id="Radio-lg" checked="">
                                                <label class="form-check-label" for="Radio-lg">
                                                    Large
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Switch Sizes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area d-sm-flex align-item-center justify-content-between">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="switch-sm">
                                                <label class="form-check-label" for="switch-sm">Default</label>
                                            </div>
                                            <div class="form-check form-check-md form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="switch-md">
                                                <label class="form-check-label" for="switch-md">Medium</label>
                                            </div>
                                            <div class="form-check form-check-lg form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="switch-lg">
                                                <label class="form-check-label" for="switch-lg">Large</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                        <!-- Start:: row-4 -->
                        <div class="row">
                            <div class="col-xl-6  col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Inline
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled>
                                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3" disabled>
                                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Without labels
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="me-3">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                                aria-label="...">
                                        </span>
                                        <span>
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel1" value="" aria-label="...">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Reverse
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check form-check-reverse mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="reverseCheck1">
                                                <label class="form-check-label" for="reverseCheck1">
                                                    Reverse checkbox
                                                </label>
                                            </div>
                                            <div class="form-check form-check-reverse mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="reverseCheck2" disabled="">
                                                <label class="form-check-label" for="reverseCheck2">
                                                    Disabled reverse checkbox
                                                </label>
                                            </div>

                                            <div class="form-check form-switch form-check-reverse">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckReverse">
                                                <label class="form-check-label" for="flexSwitchCheckReverse">Reverse
                                                    switch
                                                    checkbox input</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Outlined styles
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="checkbox" class="btn-check" id="btn-check-outlined" >
                                            <label class="btn btn-outline-primary mb-3" for="btn-check-outlined">Single
                                                toggle</label><br>

                                            <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked
                                                >
                                            <label class="btn btn-outline-secondary mb-3"
                                                for="btn-check-2-outlined">Checked</label><br>

                                            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                                checked>
                                            <label class="btn btn-outline-success" for="success-outlined">Checked success
                                                radio</label>

                                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                                                >
                                            <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->

                        <!-- Start:: row-5 -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Radio toggle buttons
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="radio" class="btn-check" name="options" id="option1"
                                                checked="">
                                            <label class="btn btn-primary" for="option1">Checked</label>

                                            <input type="radio" class="btn-check" name="options" id="option2"
                                                >
                                            <label class="btn btn-primary" for="option2">Radio</label>

                                            <input type="radio" class="btn-check" name="options" id="option3"
                                                disabled="">
                                            <label class="btn btn-primary" for="option3">Disabled</label>

                                            <input type="radio" class="btn-check" name="options" id="option4"
                                                >
                                            <label class="btn btn-primary" for="option4">Radio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Checkbox toggle buttons
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="checkbox" class="btn-check" id="btn-check">
                                            <label class="btn btn-primary" for="btn-check">Single toggle</label>
                                            <input type="checkbox" class="btn-check" id="btn-check-2" checked
                                            >
                                            <label class="btn btn-primary" for="btn-check-2">Checked</label>
                                            <input type="checkbox" class="btn-check" id="btn-check-3"
                                                disabled>
                                            <label class="btn btn-primary" for="btn-check-3">Disabled</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-5 -->

                        <!-- Start:: row-6 -->
                        <div class="row row-cols-12">
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Colored Checkboxes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="primaryChecked" checked="">
                                                <label class="form-check-label" for="primaryChecked">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-secondary" type="checkbox" value="" id="secondaryChecked" checked="">
                                                <label class="form-check-label" for="secondaryChecked">
                                                    Secondary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-warning" type="checkbox" value="" id="warningChecked" checked="">
                                                <label class="form-check-label" for="warningChecked">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-info" type="checkbox" value="" id="infoChecked" checked="">
                                                <label class="form-check-label" for="infoChecked">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked" checked="">
                                                <label class="form-check-label" for="successChecked">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-danger" type="checkbox" value="" id="dangerChecked" checked="">
                                                <label class="form-check-label" for="dangerChecked">
                                                    Danger
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input form-checked-dark" type="checkbox" value="" id="darkChecked" checked="">
                                                <label class="form-check-label" for="darkChecked">
                                                    Dark
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Outline Checkboxes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline" type="checkbox" value="" id="primaryoutlineChecked" checked="">
                                                <label class="form-check-label" for="primaryoutlineChecked">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-secondary" type="checkbox" value="" id="secondaryoutlineChecked" checked="">
                                                <label class="form-check-label" for="secondaryoutlineChecked">
                                                    Secondary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-warning" type="checkbox" value="" id="warningoutlineChecked" checked="">
                                                <label class="form-check-label" for="warningoutlineChecked">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-info" type="checkbox" value="" id="infooutlineChecked" checked="">
                                                <label class="form-check-label" for="infooutlineChecked">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-success" type="checkbox" value="" id="successoutlineChecked" checked="">
                                                <label class="form-check-label" for="successoutlineChecked">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-danger" type="checkbox" value="" id="dangeroutlineChecked" checked="">
                                                <label class="form-check-label" for="dangeroutlineChecked">
                                                    Danger
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input form-checked-outline form-checked-dark" type="checkbox" value="" id="darkoutlineChecked" checked="">
                                                <label class="form-check-label" for="darkoutlineChecked">
                                                    Dark
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Colored Radios
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="radio" name="primaryRadio" id="primaryRadio" checked="">
                                                <label class="form-check-label" for="primaryRadio">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-secondary" type="radio" name="secondaryRadio" id="secondaryRadio" checked="">
                                                <label class="form-check-label" for="secondaryRadio">
                                                    Secondary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-warning" type="radio" name="warningRadio" id="warningRadio" checked="">
                                                <label class="form-check-label" for="warningRadio">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-info" type="radio" name="InfoRadio" id="InfoRadio" checked="">
                                                <label class="form-check-label" for="InfoRadio">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-success" type="radio" name="successRadio" id="successRadio" checked="">
                                                <label class="form-check-label" for="successRadio">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-danger" type="radio" name="dangerRadio" id="dangerRadio" checked="">
                                                <label class="form-check-label" for="dangerRadio">
                                                    Danger
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input form-checked-dark" type="radio" name="darkRadio" id="darkRadio" checked="">
                                                <label class="form-check-label" for="darkRadio">
                                                    Dark
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Outline Radios
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline" type="radio" name="primaryoutlineRadio" id="primaryoutlineRadio" checked="">
                                                <label class="form-check-label" for="primaryoutlineRadio">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-secondary" type="radio" name="secondaryoutlineRadio" id="secondaryoutlineRadio" checked="">
                                                <label class="form-check-label" for="secondaryoutlineRadio">
                                                    Secondary
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-warning" type="radio" name="warningoutlineRadio" id="warningoutlineRadio" checked="">
                                                <label class="form-check-label" for="warningoutlineRadio">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-info" type="radio" name="InfooutlineRadio" id="InfooutlineRadio" checked="">
                                                <label class="form-check-label" for="InfooutlineRadio">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-success" type="radio" name="successoutlineRadio" id="successoutlineRadio" checked="">
                                                <label class="form-check-label" for="successoutlineRadio">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input form-checked-outline form-checked-danger" type="radio" name="dangeroutlineRadio" id="dangeroutlineRadio" checked="">
                                                <label class="form-check-label" for="dangeroutlineRadio">
                                                    Danger
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input form-checked-outline form-checked-dark" type="radio" name="darkoutlineRadio" id="darkoutlineRadio" checked="">
                                                <label class="form-check-label" for="darkoutlineRadio">
                                                    Dark
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Switches Colors
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="switch-primary" checked="">
                                                <label class="form-check-label" for="switch-primary">Primary</label>
                                            </div>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input form-checked-secondary" type="checkbox" role="switch"
                                                    id="switch-secondary" checked="">
                                                <label class="form-check-label" for="switch-secondary">Secondary</label>
                                            </div>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input form-checked-warning" type="checkbox" role="switch"
                                                    id="switch-warning" checked="">
                                                <label class="form-check-label" for="switch-warning">Warning</label>
                                            </div>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input form-checked-info" type="checkbox" role="switch"
                                                    id="switch-info" checked="">
                                                <label class="form-check-label" for="switch-info">Info</label>
                                            </div>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input form-checked-success" type="checkbox" role="switch"
                                                    id="switch-success" checked="">
                                                <label class="form-check-label" for="switch-success">Success</label>
                                            </div>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input form-checked-danger" type="checkbox" role="switch"
                                                    id="switch-danger" checked="">
                                                <label class="form-check-label" for="switch-danger">Danger</label>
                                            </div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input form-checked-dark" type="checkbox" role="switch"
                                                    id="switch-dark" checked="">
                                                <label class="form-check-label" for="switch-dark">Dark</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-6 -->

                        <!-- Start:: row-7 -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Toggle Switches Style-1
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="row gy-1">
                                                <div class="col-xl-4">
                                                    <div class="toggle on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-secondary on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-warning on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-info on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-success on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-danger on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-light on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="toggle toggle-dark on mb-3">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Toggle Switches Style-2
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="row gy-1">
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchPrimary" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchPrimary" class="label-primary"></label><span class="fs-13 ms-3">Primary</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchSecondary" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchSecondary" class="label-secondary"></label><span class="fs-13 ms-3">Secondary</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchWarning" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchWarning" class="label-warning"></label><span class="fs-13 ms-3">Warning</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchInfo" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchInfo" class="label-info"></label><span class="fs-13 ms-3">Info</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchSuccess" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchSuccess" class="label-success"></label><span class="fs-13 ms-3">Success</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchDanger" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchDanger" class="label-danger"></label><span class="fs-13 ms-3">Danger</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchLight" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchLight" class="label-light"></label><span class="fs-13 ms-3">Light</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="custom-toggle-switch d-flex align-items-center mb-4">
                                                        <input id="toggleswitchDark" name="toggleswitch001" type="checkbox" checked="">
                                                        <label for="toggleswitchDark" class="label-dark"></label><span class="fs-13 ms-3">Dark</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-7 -->

                        <!-- Start:: row-8 -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Toggle Switch-1 Sizes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="d-flex align-items-center mb-3 flex-wrap gap-2">
                                                <div class=""> <p class="text-muted m-0">Small size toggle switch <code>toggle-sm</code></p></div>
                                                <div class="toggle toggle-sm on mb-0">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3 flex-wrap gap-2">
                                                <div class=""> <p class="text-muted m-0">Default toggle switch <code>toggle-md</code></p></div>
                                                <div class="toggle toggle-secondary on mb-0">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class=""> <p class="text-muted m-0">Large size toggle switch <code>toggle-lg</code></p></div>
                                                <div class="toggle toggle-lg toggle-success on mb-0">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Toggle Switch-2 Sizes
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="d-flex align-items-center flex-wrap gap-2 mb-4">
                                                <div class=""><p class="text-muted m-0">Small size toggle switch <code>toggle-sm</code></p></div>
                                                <div class="custom-toggle-switch toggle-sm ms-2">
                                                    <input id="size-sm" name="toggleswitchsize" type="checkbox" checked="">
                                                    <label for="size-sm" class="label-primary"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2 mb-4">
                                                <div class=""><p class="text-muted m-0">Default toggle switch <code>toggle-md</code></p></div>
                                                <div class="custom-toggle-switch ms-2">
                                                    <input id="size-default" name="toggleswitchsize" type="checkbox" checked="">
                                                    <label for="size-default" class="label-secondary mb-1"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class=""><p class="text-muted m-0">Large size toggle switch <code>toggle-lg</code></p></div>
                                                <div class="custom-toggle-switch toggle-lg ms-2">
                                                    <input id="size-lg" name="toggleswitchsize" type="checkbox" checked="">
                                                    <label for="size-lg" class="label-success mb-2"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-8 -->

                        <h5 class="mb-4">Input Groups</h5>

                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Input Groups
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">@</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Recipient's username"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                            </div>
                                            <label class="form-label">Your vanity URL</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"
                                                >https://example.com/users/</span>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username">
                                                <span class="input-group-text">@</span>
                                                <input type="text" class="form-control" placeholder="Server"
                                                    aria-label="Server">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text">With textarea</span>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Wrapping
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">@</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Sizing
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group input-group-sm mb-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"
                                                            >Default</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input">
                                                    </div>
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-text">Large</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Buttons addons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-primary" type="button"
                                                            >Button</button>
                                                        <input type="text" class="form-control" placeholder=""
                                                            aria-label="Example text with button addon">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                                            aria-label="Recipient's username">
                                                        <button class="btn btn-primary" type="button"
                                                            >Button</button>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-primary" type="button">Button</button>
                                                        <button class="btn btn-primary" type="button">Button</button>
                                                        <input type="text" class="form-control" placeholder=""
                                                            aria-label="Example text with two button addons">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                                            aria-label="Recipient's username with two button addons">
                                                        <button class="btn btn-primary" type="button">Button</button>
                                                        <button class="btn btn-primary" type="button">Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Buttons with dropdowns
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with dropdown button">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with dropdown button">
                                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="input-group">
                                                        <button class="btn dropdown-toggle btn-outline-primary" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action before</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action before</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with 2 dropdown buttons">
                                                        <button class="btn dropdown-toggle btn-outline-primary" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Custom file input
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <button class="btn btn-primary" type="button"
                                                        id="inputGroupFileAddon03">Button</button>
                                                    <input type="file" class="form-control" id="inputGroupFile03"
                                                        aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                                </div>

                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="inputGroupFile04"
                                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                    <button class="btn btn-primary" type="button"
                                                        id="inputGroupFileAddon04">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Multiple inputs
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group">
                                                        <span class="input-group-text">First and last name</span>
                                                        <input type="text" aria-label="First name" class="form-control border-end-0">
                                                        <input type="text" aria-label="Last name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Checkboxes and radios
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-text">
                                                            <input class="form-check-input mt-0" type="checkbox" value=""
                                                                aria-label="Checkbox for following text input">
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with checkbox">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <input class="form-check-input mt-0" type="radio" value=""
                                                                aria-label="Radio button for following text input">
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with radio button">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Multiple addons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">$</span>
                                                        <span class="input-group-text">0.00</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Dollar amount (with dot and two decimal places)">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            aria-label="Dollar amount (with dot and two decimal places)">
                                                        <span class="input-group-text">$</span>
                                                        <span class="input-group-text">0.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Segmented buttons
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-area">
                                                    <div class="input-group mb-3">
                                                        <button type="button" class="btn btn-primary">Action</button>
                                                        <button type="button"
                                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="visually-hidden">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with segmented dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            aria-label="Text input with segmented dropdown button">
                                                        <button type="button" class="btn btn-primary">Action</button>
                                                        <button type="button"
                                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span class="visually-hidden">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Custom select
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" >Options</label>
                                                    <select class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <select class="form-select" id="inputGroupSelect02">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <button class="btn btn-primary" type="button">Button</button>
                                                    <select class="form-select" id="inputGroupSelect03"
                                                        aria-label="Example select with button addon">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="input-group">
                                                    <select class="form-select" id="inputGroupSelect04"
                                                        aria-label="Example select with button addon">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <button class="btn btn-primary" type="button">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                        <h5 class="mb-4">Range Sliders</h5>

                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Default Range
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="range" class="form-range" id="customRange1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Disabled Range
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="range" class="form-range" id="disabledRange" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Range With Min and Max Values
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Range With Steps
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->

                        <!-- Start:: row-2 -->
                        <h6 class="mb-3">noUiSlider:</h6>
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Default-Styling
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Fit Handles
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="slider-fit"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Rounded Styling
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="slider-round"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Square Styling
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="slider-square"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Color Picker Slider</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div class="sliders" id="color1"></div>
                                            <div class="sliders" id="color2"></div>
                                            <div class="sliders" id="color3"></div>
                                            <div id="result"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Locking Sliders</div>
                                        </div>
                                        <div class="card-body p-5">
                                            <div id="slider1"></div>
                                            <div id="slider1-span" class="my-1"></div>
                                            <div id="slider2"></div>
                                            <div id="slider2-span" class="my-1"></div>
                                            <div id="slider3"></div>
                                            <div id="slider3-span" class="my-1"></div>
                                            <button id="lockbutton" class="btn btn-sm btn-primary float-end">Lock</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">Merging tooltips slider</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="p-5">
                                                <div id="merging-tooltips"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">Non Linear Slider</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="p-5">
                                                    <div id="nonlinear"></div>
                                                    <div id="lower-value" class="mt-5"></div>
                                                    <div id="upper-value" class="mt-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">Sliding Handles Tooltips</div>
                                            </div>
                                            <div class="card-body p-5">
                                                <div id="slider-hide"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                        <!-- Start:: row-4 -->
                        <div  class="row">
                            <div class="col-xl-10">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Colored Connect Elements</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div class="slider" id="color-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Slider Toggle</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-toggle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->

                        <!-- Start:: row-5 -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Toggle Movement By Clicking Pips</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="m-4 mb-5">
                                            <div id="slider-pips"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Soft Limits</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="m-4 mb-5">
                                            <div id="soft"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-5 -->

                        <!-- Start:: row-6 -->
                        <h6 class="mb-3">noUiSlider Colors:</h6>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Primary
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="primary-colored-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Secondary
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="secondary-colored-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Warning
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="warning-colored-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Info
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="info-colored-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Success
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="success-colored-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Danger
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-5">
                                            <div id="danger-colored-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-6 -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Input Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Set heights using classes like <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>.</p>
                                        <div class="row row-sm">
                                            <div class="col-lg">
                                                <input class="form-control form-control-sm mb-4" placeholder="from-control-sm" type="text">
                                                <input class="form-control  mb-4" placeholder=" Default from-control" type="text">
                                                <input class="form-control form-control-lg" placeholder="from-control-lg" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Readonly plain text</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>If you want to have <code class="highlighter-rouge">&lt;input readonly&gt;</code> elements in your form styled as plain text, use the <code class="highlighter-rouge">&lt;.form-control-plaintext&gt;</code> class to remove
                                            the default form field styling and preserve the correct margin and padding .</p>
                                        <form >
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com" autocomplete="username">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputPassword" autocomplete="new-password" >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">General Elements</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Text</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" value="Typing.....">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="example-email">Email</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email" autocomplete="username">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" value="password" autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Placeholder</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="text">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Readonly</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Disabled</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" disabled value="Disabled value">
                                                </div>
                                            </div>
                                            <div class=" row mb-4 mb-4">
                                                <label class="col-md-3 form-label">Number</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="number" name="number">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">URL</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="url" name="url">
                                                </div>
                                            </div>
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Search</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="search" name="search">
                                                </div>
                                            </div>
                                            <div class=" row mb-0">
                                                <label class="col-md-3 form-label">Tel</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="tel" name="tel">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Checkbox & Radio Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Radios</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                                                <span class="custom-control-label">Option 2</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="example-radios5" value="option4" disabled checked>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Medium Radios</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option5" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option6">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option7" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-md">
                                                                <input type="radio" class="custom-control-input" name="example-radios4" value="option8" disabled checked>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Large Radios</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios2" value="option9" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios2" value="option10">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios2" value="option11" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-radio-lg">
                                                                <input type="radio" class="custom-control-input" name="example-radios3" value="option12" disabled checked>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group m-0">
                                                    <div class="form-label">Checkboxes</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked disabled>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group m-0">
                                                    <div class="form-label">Medium Checkboxes</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-md">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" checked disabled>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="form-group m-0">
                                                    <div class="form-label">Large Checkboxes</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" checked>
                                                                <span class="custom-control-label">Option 1</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10">
                                                                <span class="custom-control-label">Option 2</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox11" value="option11" disabled>
                                                                <span class="custom-control-label">Option Disabled</span>
                                                            </label>
                                                        <label class="custom-control custom-checkbox-lg">
                                                                <input type="checkbox" class="custom-control-input" name="example-checkbox12" value="option12" checked disabled>
                                                                <span class="custom-control-label">Option Disabled Checked</span>
                                                            </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-8 col-lg-12">
                                <form method="post" class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Toggle switches</h3>
                                    </div>
                                    <div class=" card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Toggle switch</div>
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Inactive</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio" class="custom-switch-input" checked>
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Active</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio" class="custom-switch-input" disabled>
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Disabled Inactive</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio3" class="custom-switch-input" checked disabled>
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Disabled Active</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                                <div class="form-label">Medium Toggle switch</div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio1" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Inactive</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio1" class="custom-switch-input" checked>
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Active</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio1" class="custom-switch-input" disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Disabled Inactive</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio2" class="custom-switch-input" checked disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Disabled Active</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-4 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-label">Large Toggle switch</div>
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio2" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Inactive</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio2" class="custom-switch-input" checked>
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Active</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                            <input type="radio" name="custom-switch-radio2" class="custom-switch-input" disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Disabled Inactive</span>
                                                        </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                            <input type="radio" name="custom-switch-radio3" class="custom-switch-input" checked disabled>
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Disabled Active</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Your skills</label>
                                                <div class="selectgroup selectgroup-pills">
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">HTML</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                                            <span class="selectgroup-button">CSS</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                                            <span class="selectgroup-button">PHP</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                                            <span class="selectgroup-button">JavaScript</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="Angular" class="selectgroup-input">
                                                            <span class="selectgroup-button">Angular</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="Java" class="selectgroup-input">
                                                            <span class="selectgroup-button">Java</span>
                                                        </label>
                                                    <label class="selectgroup-item">
                                                            <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                                            <span class="selectgroup-button">C++</span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Switches </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Bootstrap Switch Default
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox">
                                                    <label for="someSwitchOptionDefault" class="label-default"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Primary
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox">
                                                    <label for="someSwitchOptionPrimary" class="label-primary"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Success
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox">
                                                    <label for="someSwitchOptionSuccess" class="label-success"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Info
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox">
                                                    <label for="someSwitchOptionInfo" class="label-info"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Warning
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox">
                                                    <label for="someSwitchOptionWarning" class="label-warning"></label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Bootstrap Switch Danger
                                                <div class="material-switch pull-right">
                                                    <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox">
                                                    <label for="someSwitchOptionDanger" class="label-danger"></label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-group m-0 mt-2">
                                            <label class="form-label">Select Color</label>
                                            <div class="row ">
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="azure" class="colorinput-input" checked>
                                                            <span class="colorinput-color bg-azure"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="indigo" class="colorinput-input">
                                                            <span class="colorinput-color bg-indigo"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="purple" class="colorinput-input">
                                                            <span class="colorinput-color bg-purple"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="pink" class="colorinput-input">
                                                            <span class="colorinput-color bg-pink"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="red" class="colorinput-input">
                                                            <span class="colorinput-color bg-red"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="orange" class="colorinput-input">
                                                            <span class="colorinput-color bg-orange"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="yellow" class="colorinput-input">
                                                            <span class="colorinput-color bg-yellow"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="lime" class="colorinput-input">
                                                            <span class="colorinput-color bg-lime"></span>
                                                        </label>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="colorinput">
                                                            <input name="color" type="checkbox" value="green" class="colorinput-input">
                                                            <span class="colorinput-color bg-green"></span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Default Input Groups</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">@</span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" >
                                                <span class="input-group-text">@example.com</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"  >https://example.com/users/</span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control br-0" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                <span class="input-group-text br-0">@</span>
                                                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-light" type="button">Button</button>
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" >
                                                <button class="btn btn-light" type="button" id="button-addon2">Button</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                                </ul>
                                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Input Groups Sizes</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text">Small</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Default</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text">Large</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bootstrap Fileuploads</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label mt-0">Default file input example</label>
                                            <input class="form-control" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Small File Input</label>
                                            <input class="form-control form-control-sm" type="file">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Large File Input</label>
                                            <input class="form-control form-control-lg" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!--Row-->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Form Elements With Sizes</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row p-0 m-0">
                                            <div class="form-label mt-0 p-xl-0">Form-control small sizes</div>
                                            <div class="col-xl-2 px-3 px-xl-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-primary btn-sm mb-3 btn-block">Small button</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <input class="form-control form-control-sm" placeholder="from-control-sm" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group select2-sm">
                                                    <select class="form-select form-select-sm select2" id="inputGroupSelect013">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-radio mb-0 mt-1">
                                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1">
                                                        <span class="custom-control-label">Radio example</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">checkbox example</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch mb-0">
                                                            <input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator"></span>
                                                            <span class="custom-switch-description">Toggle example</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-0 m-0">
                                            <div class="form-label mt-4 p-xl-0">Form-control Medium sizes</div>
                                            <div class="col-xl-2 px-3 px-xl-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-secondary mb-3 btn-block">Default button</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="from-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <select class="form-select form-select select2">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-radio-md mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input" name="example-radios2" value="option2">
                                                            <span class="custom-control-label">Radio example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox-md mb-0">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">checkbox example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch mb-0">
                                                            <input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                            <span class="custom-switch-description">Toggle example</span>
                                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-0 m-0">
                                            <div class="form-label mt-4 p-xl-0">Form-control Large sizes</div>
                                            <div class="col-xl-2 px-3 px-xl-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-success btn-lg mb-3 btn-block me-2">Large button</button>
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" placeholder="from-control-sm" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group select2-lg">
                                                    <select class="form-select form-select-lg select2" id="inputGroupSelect012">
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-radio-lg mb-0">
                                                            <input type="radio" class="custom-control-input" name="example-radios2" value="option2">
                                                            <span class="custom-control-label">Radio example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox-lg mb-0">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">checkbox example</span>
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 px-3 px-xl-1">
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch mb-0">
                                                            <input type="checkbox" name="custom-switch-radio" class="custom-switch-input">
                                                            <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                                            <span class="custom-switch-description">Toggle example</span>
                                                        </label>
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
	
	    <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/nouislider.js')

@endsection
