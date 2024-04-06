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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dados do Advogado</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lawyer.store') }}">
                            @csrf
                            <div class="">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="name" class="form-label">Nome</label>
                                        <input type="text"
                                            class="form-control  @error('name') is-invalid @enderror" id="name"
                                            name="name" placeholder="Razão social"
                                            value="{{ old('name') ?? $lawyer->name ?? '' }}"
                                            disabled>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="title" class="form-label">Título</label>
                                        <input type="text"
                                            class="form-control @error('title') is-invalid @enderror" id="fantasy"
                                            name="title" placeholder="Título "
                                            value="{{ old('title') ?? ($lawyer->title ?? '') }}" disabled>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="cnpj" class="form-label">Cnpj</label>
                                        <input type="text" class="form-control @error('cnpj') is-invalid @enderror"
                                            id="cnpj" name="cnpj" placeholder="cnpj"
                                            value="{{ old('cnpj') ?? $lawyer->UF ?? '' }}" disabled>
                                        @error('cnpj')
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
                                    <p class="fs-4 mb-0">Atribuir um novo usuario +</p>
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
                            Endereços
                        </div>
                    </div>
                    <div class="card-body">
                        @if($lawyer->user)
                            <div class="">                            
                                @foreach($lawyer->user->addresses as $address)
                                    <div class="form-row">
                                        <div class="form-group col-md-8 mb-0">
                                                <label for="street" class="form-label">Rua</label>
                                                <input type="text"
                                                    class="form-control  @error('street') is-invalid @enderror" id="street"
                                                    name="street" placeholder="Rua"
                                                    value="{{ old('street') ?? $address->street ?? '' }}"
                                                    disabled>
                                                @error('street')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>                                   
                                        <div class="form-group col-md-4 mb-0">
                                            <label for="street_number" class="form-label">Numero</label>
                                            <input type="text"
                                                class="form-control  @error('street_number') is-invalid @enderror" id="street_number"
                                                name="street_number" placeholder="Numero"
                                                value="{{ old('street_number') ?? $address->street_number ?? '' }}"
                                                disabled>
                                            @error('street_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="complement" class="form-label">Complemento</label>
                                            <input type="text"
                                                class="form-control @error('complement') is-invalid @enderror" id="complement"
                                                name="complement" placeholder="Nome fantasia"
                                                value="{{ old('complement') ?? ($address->complement ?? '') }}" disabled>
                                            @error('complement')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="zip" class="form-label">CEP</label>
                                            <input type="text" class="form-control @error('zip') is-invalid @enderror"
                                                id="zip" name="zip" placeholder="zip"
                                                value="{{ old('zip') ?? $address->zip?? '' }}" disabled>
                                            @error('zip')
                                                <div class="zip">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 mb-0">
                                            <label for="neighborhood" class="form-label">Bairro</label>
                                            <input type="text" class="form-control @error('neighborhood') is-invalid @enderror"
                                                id="neighborhood" name="neighborhood" placeholder="neighborhood"
                                                value="{{ old('neighborhood') ?? $address->neighborhood?? '' }}" disabled>
                                            @error('neighborhood')
                                                <div class="neighborhood">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3 mb-0">
                                            <label for="estadual" class="form-label">Cidade</label>
                                            <input type="text"
                                                class="form-control @error('city') is-invalid @enderror"
                                                id="city" name="city" placeholder="Cidade"
                                                value="{{ old('city') ?? $lawyer->user->city->title ?? '' }}" disabled>
                                            @error('city')
                                                <div class="city">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3 mb-0">
                                            <label for="uf" class="form-label">UF </label>
                                            <input type="text"
                                                class="form-control @error('uf') is-invalid @enderror"
                                                id="uf" name="uf" placeholder="uf"
                                                value="{{ old('uf') ?? $lawyer->user->city->state->uf ?? '' }}" disabled>
                                            @error('uf')
                                                <div class="uf">{{ $message }}</div>
                                            @enderror
                                        </div>                                        
                                    </div>
                                @endforeach                           
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
                        <x-v1.admin.modal.createAddress :user-id="$lawyer->user->id"></x-v1.admin.modal.createAddress>
                    </div>
                @endif
            </div>
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
