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
        <h1 class="page-title">Empresa</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Empresas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Empresa</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12 row">
                @if (!$organization->addresses->count())
                    <div class="col-xl-3 col-md-6">
                        <a href="#section-address">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                            class="fa fa-bolt"></i></span></div>
                                <div class="card-body  p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                    <p class="card-text">adicione um endereço a empresa</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif

                @if (!$organization->users_organization->count())
                    <div class="col-xl-3 col-md-6">
                        <a href="#address">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                            class="fa fa-bolt"></i></span></div>
                                <div class="card-body  p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                    <p class="card-text">Atribua um usuario a sua empresa</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            </div>

            <x-v1.admin.form.defaultForm ::type="update" :action="route('organization.update', ['organization' => $organization->id])"
                :dataForm="$dataForm"></x-v1.admin.form.defaultForm>


            {{-- @aqui --}}
            <x-v1.admin.modal.addCorporateUser :custom-request="['organization_id' => $organization->id]" :data-base="$organization->users_organization" :routeUpdate="route('corporate.add.user')"></x-v1.admin.modal.addCorporateUser>
            {{-- @aqui --}}

            <div class="col-xl-6" id="section-address">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Endereços</div>
                        <div class="d-flex">
                            <a href="javascript:void(0);" data-modaladdress data-typeaction="create"
                                class="btn btn-primary btn-block float-end"><i class="fa fa-plus-square me-2"></i>Adicionar
                                endereço</a>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush" data-addresses>
                        @foreach ($organization->addresses as $addresse)
                            <li class="list-group-item" data-idaddress="{{ $addresse->id }}">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex mt-2">
                                        <div>
                                            <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2"
                                                href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
                                        </div>
                                        <div class="ms-2" id="line-addresses">
                                            <p class="fs-13 fw-600 mb-0">{{ $addresse->zip }}</p>
                                            <p class="fs-12 text-muted">CEP: {{ $addresse->zip }}, CIDADE:
                                                {{ $addresse->title_city }}<br>BAIRRO: {{ $addresse->neighborhood }}<br>N:
                                                {{ $addresse->street_number }}<br>COMPLEMENTO: {{ $addresse->complement }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn-list">
                                        <button class="btn btn-sm btn-icon btn-info-light rounded-circle" type="button"
                                            data-modaladdress data-typeaction="update"><i
                                                class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                                            data-modaladdress data-typeaction="delete" type="button"><i
                                                class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    @if ($organization->addresses->count() == 0)
                        <div class="card-body">
                            <a href="" onclick="event.preventDefault();" class="col-md-6 mb-4 mb-md-0"
                                data-bs-toggle="modal" data-bs-target="#address">
                                <div class="dropzone d-flex justify-content-center align-items-center">
                                    <p class="fs-4 mb-0">Adicione um endereço +</p>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-v1.admin.modal.createAddress :organization-id="$organization->id"></x-v1.admin.modal.createAddress>
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
