@extends('layouts.master')

@section('styles')
    <!-- noui Slider -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/nouislider/nouislider.min.css') }}">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Adicionar usuário</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar usuário</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="main-container container-fluid">
        <form method="POST" action="http://localhost:8000/dashboard/users" id="default-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Usuário</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="_token" value="SRBecHhz2A2xs2SPrbyMdqSCVOPAN7RBNFAb58X0"
                                autocomplete="off">
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="name" class="form-label ">Nome e sobrenome</label>
                                    <input type="text" class="form-control   " id="name" name="name"
                                        placeholder="Nome e sobrenome" value="" data-input="">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="email" class="form-label ">E-mail</label>
                                    <input type="text" class="form-control   " id="email" name="email"
                                        placeholder="E-mail" value="" data-input="">
                                </div>
                                <div class="form-group col-md-4 mb-0">
                                    <label for="cpf" class="form-label ">Cpf</label>
                                    <input type="text" class="form-control   " id="cpf" name="cpf"
                                        placeholder="Cpf" value="" data-input="">
                                </div>
                                <div class="form-group col-md-4 mb-0">
                                    <label for="user_type_id" class="form-label ">Tipo do usuário</label>
                                    <select class="form-select  " id="user_type_id" name="user_type_id" data-input="">
                                        <option>Disabled select</option>
                                        <option value="1">
                                            Admin
                                        </option>
                                        <option value="2">
                                            Operador
                                        </option>
                                        <option value="3">
                                            Originador
                                        </option>
                                        <option value="4">
                                            Advogado
                                        </option>
                                        <option value="5">
                                            Cliente Organization
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 mb-0">
                                    <label for="title" class="form-label ">Título</label>
                                    <input type="text" class="form-control   " id="title" name="title"
                                        placeholder="Título" value="" data-input="">
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <label for="bio" class="form-label ">Bio</label>
                                    <input type="text" class="form-control   " id="bio" name="bio"
                                        placeholder="Bio" value="" data-input="">
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-4 mb-0" type="button" data-saveform="">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12" data-formlawer style="display: none">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Advogado</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="name" class="form-label ">Nome e sobrenome</label>
                                        <input type="text" class="form-control   " id="name" name="name"
                                            placeholder="Nome e sobrenome" value="" data-input="">
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="title" class="form-label ">Título</label>
                                        <input type="text" class="form-control   " id="title" name="title"
                                            placeholder="Título" value="" data-input="">
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="OAB_number" class="form-label ">Número da OAB</label>
                                        <input type="text" class="form-control   " id="OAB_number" name="OAB_number"
                                            placeholder="OAB_number" value="" data-input="">
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="UF" class="form-label ">UF</label>
                                        <input type="text" class="form-control   " id="UF" name="UF"
                                            placeholder="UF" value="" data-input="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <!-- noUiSlider JS -->
    <script src="{{ asset('build/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/wnumb/wNumb.min.js') }}"></script>
    @vite('resources/assets/js/nouislider.js')
    @vite('resources/assets/js/pages/adminCreate.js')
@endsection
