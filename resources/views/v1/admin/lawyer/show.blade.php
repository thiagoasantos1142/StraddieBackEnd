@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/dropzone/dropzone.css') }}">


    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Exibição de cadastro</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Exibição</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12 row">
                <div class="col-xl-3 col-md-6">
                    <a href="#section-address">
                        <div class="card ribbone-card">
                            <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                        class="fa fa-bolt"></i></span></div>
                            <div class="card-body  p-6">
                                <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                <p class="card-text">adicione um usuário ao Advogado</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="#address">
                        <div class="card ribbone-card">
                            <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                        class="fa fa-bolt"></i></span></div>
                            <div class="card-body  p-6">
                                <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                <p class="card-text">Atribua um usuario a sua Advogado</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <x-v1.admin.form.defaultForm ::type="update" :action="route('lawyer.update', ['lawyer' => $lawyer->id])"
                :dataForm="$dataForm"></x-v1.admin.form.defaultForm>

            <x-v1.admin.modal.addCorporateUser :data-component="['lawyer_id' => $lawyer->id]" :user-id="$lawyer->id" :show-data="$lawyer->users"
                :routeUpdate="route('lawyer.add.user')" ::action-btnremove="delete" :routeDelete="route('deleteLawyerToUser')"></x-v1.admin.modal.addCorporateUser>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Filepond JS -->
    <script src="{{ asset('build/assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}">
    </script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
    </script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}">
    </script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}">
    </script>

    <!-- Dropzone JS -->
    <script src="{{ asset('build/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <!-- Color Picker JS -->
    @vite('resources/assets/js/color-picker.js')

    <!-- Date & Time Picker JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    @vite('resources/assets/js/formelementadvnced.js')
@endsection
