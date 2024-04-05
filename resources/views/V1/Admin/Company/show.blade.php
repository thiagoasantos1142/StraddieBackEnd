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
        <h1 class="page-title">Form Advanced</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
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
                                <p class="card-text">adicione um endereço a empresa</p>
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
                                <p class="card-text">Atribua um usuario a sua empresa</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dados da empresa</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('company.store') }}">
                            @csrf
                            <div class="">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="razao" class="form-label">Razão social</label>
                                        <input type="text"
                                            class="form-control  @error('razao_social') is-invalid @enderror" id="razao"
                                            name="razao_social" placeholder="Razão social"
                                            value="{{ old('razao_social') ?? $organization->razao_social ?? '' }}"
                                            disabled>
                                        @error('razao_social')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="fantasy" class="form-label">Nome fantasia</label>
                                        <input type="text"
                                            class="form-control @error('nome_fantasia') is-invalid @enderror" id="fantasy"
                                            name="nome_fantasia" placeholder="Nome fantasia"
                                            value="{{ old('nome_fantasia') ?? ($organization->nome_fantasia ?? '') }}" disabled>
                                        @error('nome_fantasia')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="cnpj" class="form-label">Cnpj</label>
                                        <input type="text" class="form-control @error('cnpj') is-invalid @enderror"
                                            id="cnpj" name="cnpj" placeholder="cnpj"
                                            value="{{ old('cnpj') ?? $organization->cnpj ?? '' }}" disabled>
                                        @error('cnpj')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="estadual" class="form-label">Inscrição estadual (não
                                            obrigatório)</label>
                                        <input type="text"
                                            class="form-control @error('state_registration') is-invalid @enderror"
                                            id="estadual" name="state_registration" placeholder="Inscrição estadual"
                                            value="{{ old('state_registration') ?? $organization->state_registration ?? '' }}" disabled>
                                        @error('state_registration')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="municipal" class="form-label">Inscrição municipal (não
                                            obrigatório)</label>
                                        <input type="text"
                                            class="form-control @error('municipal_registration') is-invalid @enderror"
                                            id="municipal" name="municipal_registration" placeholder="Inscrição municipal"
                                            value="{{ old('municipal_registration') ?? $organization->municipal_registration ?? '' }}" disabled>
                                        @error('municipal_registration')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="E-mail"
                                            value="{{ old('email') ?? $organization->email ?? '' }}" disabled>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="entidade_type" class="form-label">Tipo instituição</label>
                                        <select class="form-select @error('entidade_type_id') is-invalid @enderror"
                                            name="entidade_type_id" disabled>
                                            <option>Disabled select</option>
                                            <option value='1' @if (old('entidade_type_id') == 1) selected @endif>
                                                Disabled 1</option>
                                            <option value='2'>Disabled 2</option>
                                            <option value='3'>Disabled 3</option>
                                        </select>
                                        @error('entidade_type_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-4 mb-0" type="submit">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Atribuir um usuario
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <a href="" onclick="event.preventDefault();" class="col-md-6 mb-4 mb-md-0" data-bs-toggle="modal"
                                data-bs-target="#largemodal">
                                <div class="dropzone d-flex justify-content-center align-items-center">
                                    <p class="fs-4 mb-0">Atribuir um usuario +</p>
                                </div>
                            </a>
                            <a href="" onclick="event.preventDefault();" class="col-md-6" data-bs-toggle="modal" data-bs-target="#largemodal">
                                <div class="dropzone d-flex justify-content-center align-items-center">
                                    <p class="fs-4 mb-0">Atribuir um usuario existente +</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" id="section-address">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Endereço
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="" onclick="event.preventDefault();" class="col-md-6 mb-4 mb-md-0" data-bs-toggle="modal"
                            data-bs-target="#address">
                            <div class="dropzone d-flex justify-content-center align-items-center">
                                <p class="fs-4 mb-0">Adicione um endereço +</p>
                            </div>
                        </a>
                        {{-- <form data-single="true" method="post" action="https://httpbin.org/post"
                            class="dropzone"></form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-v1.admin.modal.createAddress></x-v1.admin.modal.createAddress>





    
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
