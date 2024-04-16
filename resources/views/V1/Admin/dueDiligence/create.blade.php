@extends('layouts.master')

@section('styles')
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Iniciar Due Diligence</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Due Diligence</a></li>
                <li class="breadcrumb-item active" aria-current="page">Iniciar</li>
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
                                    href="#personal-info" aria-selected="true">Beneficiários </a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#account-settings" aria-selected="true">Advogados</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#email-settings" aria-selected="true">Informações Sobre o titulo</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                    href="#notification-settings" aria-selected="true">Informações Adicionais</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#security"
                                    aria-selected="true">Destaques</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane show active fs-13 p-5" id="personal-info" role="tabpanel">
                                <h6 class="mb-4">Beneficiários:</h6>
                                @foreach ($creditRightsTitle->users_titles as $user)
                                    <div
                                        class="mb-4 border p-4 br-5 d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="d-sm-flex align-items-center flex-wrap gap-2">
                                            <div class="mb-0 me-5 d-flex align-items-center">
                                                <div class="ms-3">
                                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                                    <p class="mb-0">{{ $user->title }}</p>
                                                </div>

                                                <!-- CONTAINER -->
                                                <div class="main-container container-fluid">

                                                    <!-- ROW-1 OPEN -->
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-7 col-xl-10 col-xxl-8">
                                                            <div class="card custom-card">
                                                                <div class="card-header d-sm-flex d-block">
                                                                    <ul class="nav nav-pills nav-tabs-header mb-0 d-sm-flex d-block"
                                                                        role="tablist">
                                                                        <li class="nav-item m-1">
                                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                                role="tab" aria-current="page"
                                                                                href="#personal-info"
                                                                                aria-selected="true">Beneficiários </a>
                                                                        </li>
                                                                        <li class="nav-item m-1">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                role="tab" aria-current="page"
                                                                                href="#account-settings"
                                                                                aria-selected="true">Advogados</a>
                                                                        </li>
                                                                        <li class="nav-item m-1">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                role="tab" aria-current="page"
                                                                                href="#email-settings"
                                                                                aria-selected="true">Informações Sobre o
                                                                                titulo</a>
                                                                        </li>
                                                                        <li class="nav-item m-1">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                role="tab" aria-current="page"
                                                                                href="#notification-settings"
                                                                                aria-selected="true">Informações
                                                                                Adicionais</a>
                                                                        </li>
                                                                        <li class="nav-item m-1">
                                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                                role="tab" aria-current="page"
                                                                                href="#security"
                                                                                aria-selected="true">Destaques</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="card-body p-0">
                                                                    <div class="tab-content">

                                                                        <div class="tab-pane show active fs-13 p-5"
                                                                            id="personal-info" role="tabpanel">
                                                                            @foreach ($users as $user)
                                                                                <div class="row gy-3">
                                                                                    <div class="col-xl-7">
                                                                                        <div
                                                                                            class="card custom-card shadow-none mb-0 border">
                                                                                            <div class="card-body">
                                                                                                <div
                                                                                                    class="d-sm-flex align-items-center flex-wrap gap-2">
                                                                                                    <div
                                                                                                        class="mb-0 me-5 d-flex align-items-center">
                                                                                                        <div
                                                                                                            class="ms-3">
                                                                                                            <h5
                                                                                                                class="mb-1">
                                                                                                                {{ $user->name }}
                                                                                                            </h5>
                                                                                                            <p
                                                                                                                class="mb-0">
                                                                                                                {{ $user->title }}
                                                                                                            </p>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="btn-group mt-sm-0 mt-2">
                                                                                                        <button
                                                                                                            class="btn btn-primary">Ver
                                                                                                            usuário</button>
                                                                                                    </div>
                                                                                                    <div class="text-end">
                                                                                                        <button
                                                                                                            class="btn btn-secondary-light"><i
                                                                                                                class="ri-vip-crown-2-line"></i>
                                                                                                            Beneficiário
                                                                                                            Principal</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <br>

                                                                                                <div
                                                                                                    class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                                                    <div>
                                                                                                        <p
                                                                                                            class="fs-14 mb-1 fw-semibold">
                                                                                                            Dados pessoais
                                                                                                        </p>
                                                                                                        <label
                                                                                                            for="email-address"
                                                                                                            class="form-label"><b>E-mail:
                                                                                                            </b>{{ $user->email }}</label>
                                                                                                        <label
                                                                                                            for="email-address"
                                                                                                            class="form-label"><b>CPF:
                                                                                                            </b>{{ $user->cpf }}</label>
                                                                                                        @foreach ($user->contacts as $contact)
                                                                                                            <label
                                                                                                                for="phone"
                                                                                                                class="form-label"><b>Telefone:
                                                                                                                </b>{{ $contact->phone }}</label>
                                                                                                        @endforeach

                                                                                                        @if ($user->addresses->count() == 0)
                                                                                                            <div
                                                                                                                class="ms-3">
                                                                                                                <button
                                                                                                                    class="btn btn-secondary-light"><i
                                                                                                                        class="fa fa-map-marker"
                                                                                                                        aria-hidden="true"></i>
                                                                                                                    Nenhum
                                                                                                                    endereço
                                                                                                                    cadastrado</button>
                                                                                                            </div>
                                                                                                        @else
                                                                                                            @foreach ($user->addresses as $address)
                                                                                                                <label
                                                                                                                    for="street-address"
                                                                                                                    class="form-label"><b>Rua:
                                                                                                                    </b>{{ $address->street }}</label>
                                                                                                                <label
                                                                                                                    for="neighborhood-address"
                                                                                                                    class="form-label"><b>Bairro:
                                                                                                                    </b>{{ $address->neighborhood }}</label>
                                                                                                                <label
                                                                                                                    for="city-address"
                                                                                                                    class="form-label"><b>Cidade:
                                                                                                                    </b>{{ $address->city->title }}</label>
                                                                                                            @endforeach
                                                                                                        @endif

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mb-6 main-content-label">
                                                                                                    Envio de documentos
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group mb-0">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-md-12">
                                                                                                            <label
                                                                                                                class="form-label">Documentos
                                                                                                                Obrigatórios</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-md-10">
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Documento
                                                                                                                    de
                                                                                                                    identificação</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Selfie
                                                                                                                    com o
                                                                                                                    documento</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Procuração</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox1"
                                                                                                                    class="custom-switch-input">
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Comprovante
                                                                                                                    de
                                                                                                                    Endereço</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox11"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Municipais</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox11"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Estaduais</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox11"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Federais
                                                                                                                </span>
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-5">
                                                                                        <div
                                                                                            class="card custom-card shadow-none mb-0 border">
                                                                                            <div
                                                                                                class="card-header justify-content-between d-sm-flex d-block">
                                                                                                <div class="card-title">
                                                                                                    Documentação</div>
                                                                                                <div class="mt-sm-0 mt-2">
                                                                                                    <button
                                                                                                        class="btn btn-sm btn-primary">Análise
                                                                                                        de
                                                                                                        Documentos</button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <ul class="list-group">
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#13bfa6"
                                                                                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                                                                            opacity=".99">
                                                                                                                        </path>
                                                                                                                        <path
                                                                                                                            fill="#71d8c9"
                                                                                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Documento
                                                                                                                        de
                                                                                                                        identificação</span>
                                                                                                                <div
                                                                                                                    class="d-sm-flex align-items-center">
                                                                                                                    <div>
                                                                                                                        <p
                                                                                                                            class="card-text  text-muted">
                                                                                                                            Documento
                                                                                                                            Aprovado
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Selfie
                                                                                                                        com
                                                                                                                        o
                                                                                                                        documento</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">

                                                                                                        <div
                                                                                                            class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                                                                            <div
                                                                                                                class="d-sm-flex align-items-center">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="50"
                                                                                                                        width="50"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#fad383"
                                                                                                                            d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z">
                                                                                                                        </path>
                                                                                                                        <circle
                                                                                                                            cx="12"
                                                                                                                            cy="16"
                                                                                                                            r="1"
                                                                                                                            fill="#f7b731">
                                                                                                                        </circle>
                                                                                                                        <path
                                                                                                                            fill="#f7b731"
                                                                                                                            d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                                <div>
                                                                                                                    <h4
                                                                                                                        class="h4 mb-0">
                                                                                                                        Procuração
                                                                                                                    </h4>
                                                                                                                    <p
                                                                                                                        class="card-text  text-muted">
                                                                                                                        Enviado,
                                                                                                                        aguardando
                                                                                                                        aprovação
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="text-end">
                                                                                                                <a href="javascript:void(0);"
                                                                                                                    class="btn btn-white me-2 mb-2">Visualizar</a>
                                                                                                                <a href="javascript:void(0);"
                                                                                                                    class="btn btn-success me-2 mb-2">Aprovar</a>
                                                                                                                <a href="javascript:void(0);"
                                                                                                                    class="btn btn-danger me-2 mb-2">Rejeitar</a>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="50"
                                                                                                                        width="50"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#f07f8f"
                                                                                                                            d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                                                                                                                        <circle
                                                                                                                            cx="12"
                                                                                                                            cy="17"
                                                                                                                            r="1"
                                                                                                                            fill="#e62a45" />
                                                                                                                        <path
                                                                                                                            fill="#e62a45"
                                                                                                                            d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" />
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Comprovante
                                                                                                                        de
                                                                                                                        Endereço</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11 text-wrap">Documento
                                                                                                                        Rejeitado</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Certidão
                                                                                                                        Negativa
                                                                                                                        de
                                                                                                                        Débitos
                                                                                                                        Municipais</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Certidão
                                                                                                                        Negativa
                                                                                                                        de
                                                                                                                        Débitos
                                                                                                                        Estaduais</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Certidão
                                                                                                                        Negativa
                                                                                                                        de
                                                                                                                        Débitos
                                                                                                                        Federais</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="tab-pane fs-13 p-5"
                                                                            id="account-settings" role="tabpanel">
                                                                            @foreach ($lawyers as $lawyer)
                                                                                <div class="row gy-3">
                                                                                    <div class="col-xl-7">
                                                                                        <div
                                                                                            class="card custom-card shadow-none mb-0 border">
                                                                                            <div class="card-body">
                                                                                                <div
                                                                                                    class="d-sm-flex d-block align-items-top mb-4 justify-content-between">

                                                                                                    <div>
                                                                                                        <p
                                                                                                            class="fs-14 mb-1 fw-semibold">
                                                                                                            @if ($lawyer->user)
                                                                                                                {{ $lawyer->user->name }}
                                                                                                            @else
                                                                                                                {{ $lawyer->name }}
                                                                                                            @endif
                                                                                                        </p>
                                                                                                        <p
                                                                                                            class="fs-12 text-muted mb-0">
                                                                                                            Título:
                                                                                                            {{ $lawyer->title }}
                                                                                                        </p><br>
                                                                                                        <p
                                                                                                            class="fs-14 mb-1 fw-semibold">
                                                                                                            OAB:
                                                                                                            {{ $lawyer->OAB_number }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                                                    <div>
                                                                                                        <p
                                                                                                            class="fs-14 mb-2 fw-semibold">
                                                                                                            Dados pessoais
                                                                                                        </p>
                                                                                                        @if ($lawyer->user)
                                                                                                            <p
                                                                                                                class="fs-12 text-muted mb-0">
                                                                                                                Nome:
                                                                                                                {{ $lawyer->user->name }}
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="fs-12 text-muted mb-0">
                                                                                                                Nome:
                                                                                                                {{ $lawyer->user->cpf }}
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="fs-12 text-muted mb-0">
                                                                                                                Nome:
                                                                                                                {{ $lawyer->user->contacts[1]->phone }}
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="fs-12 text-muted mb-0">
                                                                                                                Nome:
                                                                                                                {{ $lawyer->user->email }}
                                                                                                            </p>
                                                                                                        @else
                                                                                                            <p
                                                                                                                class="fs-12 text-muted mb-0">
                                                                                                                Sem dados
                                                                                                                pessoais
                                                                                                                cadastrados.
                                                                                                            </p>
                                                                                                        @endif
                                                                                                    </div>

                                                                                                </div>
                                                                                                <div
                                                                                                    class="mb-6 main-content-label">
                                                                                                    Envio de documentos
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group mb-0">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-md-12">
                                                                                                            <label
                                                                                                                class="form-label">Documentos
                                                                                                                Obrigatórios</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-md-10">
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Documento
                                                                                                                    de
                                                                                                                    identificação</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Selfie
                                                                                                                    com o
                                                                                                                    documento</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Procuração</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox1"
                                                                                                                    class="custom-switch-input">
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Comprovante
                                                                                                                    de
                                                                                                                    Endereço</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox11"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Municipais</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox11"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Estaduais</span>
                                                                                                            </label>
                                                                                                            <label
                                                                                                                class="custom-switch d-block mb-2">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    name="custom-switch-checkbox11"
                                                                                                                    class="custom-switch-input"
                                                                                                                    checked>
                                                                                                                <span
                                                                                                                    class="custom-switch-indicator"></span>
                                                                                                                <span
                                                                                                                    class="text-muted ms-2">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Federais
                                                                                                                </span>
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-5">
                                                                                        <div
                                                                                            class="card custom-card shadow-none mb-0 border">
                                                                                            <div
                                                                                                class="card-header justify-content-between d-sm-flex d-block">
                                                                                                <div class="card-title">
                                                                                                    Documentação</div>
                                                                                                <div class="mt-sm-0 mt-2">
                                                                                                    <button
                                                                                                        class="btn btn-sm btn-primary">Análise
                                                                                                        de
                                                                                                        Documentos</button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <ul class="list-group">
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#13bfa6"
                                                                                                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                                                                            opacity=".99">
                                                                                                                        </path>
                                                                                                                        <path
                                                                                                                            fill="#71d8c9"
                                                                                                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Documento
                                                                                                                        de
                                                                                                                        identificação</span>
                                                                                                                <div
                                                                                                                    class="d-sm-flex align-items-center">
                                                                                                                    <div>
                                                                                                                        <p
                                                                                                                            class="card-text  text-muted">
                                                                                                                            Documento
                                                                                                                            Aprovado
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                </p>

                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Selfie
                                                                                                                        com
                                                                                                                        o
                                                                                                                        documento</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">

                                                                                                        <div
                                                                                                            class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                                                                            <div
                                                                                                                class="d-sm-flex align-items-center">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="50"
                                                                                                                        width="50"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#fad383"
                                                                                                                            d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z">
                                                                                                                        </path>
                                                                                                                        <circle
                                                                                                                            cx="12"
                                                                                                                            cy="16"
                                                                                                                            r="1"
                                                                                                                            fill="#f7b731">
                                                                                                                        </circle>
                                                                                                                        <path
                                                                                                                            fill="#f7b731"
                                                                                                                            d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                                <div>
                                                                                                                    <h4
                                                                                                                        class="h4 mb-0">
                                                                                                                        Procuração
                                                                                                                    </h4>
                                                                                                                    <p
                                                                                                                        class="card-text  text-muted">
                                                                                                                        Enviado,
                                                                                                                        aguardando
                                                                                                                        aprovação
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="text-end">
                                                                                                                <a href="javascript:void(0);"
                                                                                                                    class="btn btn-white me-2 mb-2">Visualizar</a>
                                                                                                                <a href="javascript:void(0);"
                                                                                                                    class="btn btn-success me-2 mb-2">Aprovar</a>
                                                                                                                <a href="javascript:void(0);"
                                                                                                                    class="btn btn-danger me-2 mb-2">Rejeitar</a>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="50"
                                                                                                                        width="50"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#f07f8f"
                                                                                                                            d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                                                                                                                        <circle
                                                                                                                            cx="12"
                                                                                                                            cy="17"
                                                                                                                            r="1"
                                                                                                                            fill="#e62a45" />
                                                                                                                        <path
                                                                                                                            fill="#e62a45"
                                                                                                                            d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" />
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Comprovante
                                                                                                                        de
                                                                                                                        Endereço</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11 text-wrap">Documento
                                                                                                                        Rejeitado</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Certidão
                                                                                                                        Negativa
                                                                                                                        de
                                                                                                                        Débitos
                                                                                                                        Municipais</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Certidão
                                                                                                                        Negativa
                                                                                                                        de
                                                                                                                        Débitos
                                                                                                                        Estaduais</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item">
                                                                                                        <div
                                                                                                            class="d-flex align-items-top">
                                                                                                            <div
                                                                                                                class="lh-1">
                                                                                                                <span
                                                                                                                    class="me-3"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        height="40"
                                                                                                                        width="40"
                                                                                                                        data-name="Layer 1"
                                                                                                                        viewBox="0 0 24 24">
                                                                                                                        <path
                                                                                                                            fill="#05c3fb"
                                                                                                                            d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                        </path>
                                                                                                                    </svg></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="lh-1 flex-fill">
                                                                                                                <p
                                                                                                                    class="mb-1">
                                                                                                                    <span
                                                                                                                        class="fw-semibold">Certidão
                                                                                                                        Negativa
                                                                                                                        de
                                                                                                                        Débitos
                                                                                                                        Federais</span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="mb-0">
                                                                                                                    <span
                                                                                                                        class="text-muted fs-11">Aguardando
                                                                                                                        envio</span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="dropdown mt-sm-0 mt-2">
                                                                                                                <a href="#"
                                                                                                                    class="btn btn-icon btn-sm btn-light"
                                                                                                                    data-bs-toggle="dropdown"
                                                                                                                    aria-expanded="false">
                                                                                                                    <i
                                                                                                                        class="fe fe-more-vertical"></i>
                                                                                                                </a>
                                                                                                                <ul
                                                                                                                    class="dropdown-menu">
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Visualizar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Carregar
                                                                                                                            arquivo</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Aprovar</a>
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item"
                                                                                                                            href="#">Rejeitar</a>
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="tab-pane fs-13 p-0"
                                                                            id="email-settings" role="tabpanel">
                                                                            <div class="row gy-3">
                                                                                <div class="col-xl-7">
                                                                                    <div
                                                                                        class="card custom-card shadow-none mb-0 border">
                                                                                        <div class="card-body">
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="fs-18 mb-1 fw-bold">
                                                                                                        {{ $creditRightsTitle->title }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Tipo do título:
                                                                                                    </b>{{ $creditRightsTitle->class }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Classe:
                                                                                                    </b>{{ $creditRightsTitle->class }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Numero do
                                                                                                            processo:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Origem do
                                                                                                            débito:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Natureza do
                                                                                                            Crédito:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0d">
                                                                                                            Natureza do
                                                                                                            Obrigação:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Orgão Julgador:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Vara do
                                                                                                            tribunal:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Data da
                                                                                                            distribuíção do
                                                                                                            processo:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                    <b>
                                                                                                        <p
                                                                                                            class="fs-14 text-muted mb-0">
                                                                                                            Numero do
                                                                                                            processo:
                                                                                                    </b>{{ $creditRightsTitle->process_number }}
                                                                                                    </p><br>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="mb-6 main-content-label">
                                                                                                Envio de documentos</div>
                                                                                            <div class="form-group mb-0">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <label
                                                                                                            class="form-label">Documentos
                                                                                                            Obrigatórios</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox"
                                                                                                                class="custom-switch-input"
                                                                                                                checked>
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Documento
                                                                                                                de
                                                                                                                identificação</span>
                                                                                                        </label>
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox"
                                                                                                                class="custom-switch-input"
                                                                                                                checked>
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Selfie
                                                                                                                com o
                                                                                                                documento</span>
                                                                                                        </label>
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox"
                                                                                                                class="custom-switch-input"
                                                                                                                checked>
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Procuração</span>
                                                                                                        </label>
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox1"
                                                                                                                class="custom-switch-input">
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Comprovante
                                                                                                                de
                                                                                                                Endereço</span>
                                                                                                        </label>
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox11"
                                                                                                                class="custom-switch-input"
                                                                                                                checked>
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Certidão
                                                                                                                Negativa de
                                                                                                                Débitos
                                                                                                                Municipais</span>
                                                                                                        </label>
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox11"
                                                                                                                class="custom-switch-input"
                                                                                                                checked>
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Certidão
                                                                                                                Negativa de
                                                                                                                Débitos
                                                                                                                Estaduais</span>
                                                                                                        </label>
                                                                                                        <label
                                                                                                            class="custom-switch d-block mb-2">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="custom-switch-checkbox11"
                                                                                                                class="custom-switch-input"
                                                                                                                checked>
                                                                                                            <span
                                                                                                                class="custom-switch-indicator"></span>
                                                                                                            <span
                                                                                                                class="text-muted ms-2">Certidão
                                                                                                                Negativa de
                                                                                                                Débitos
                                                                                                                Federais
                                                                                                            </span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-5">
                                                                                    <div
                                                                                        class="card custom-card shadow-none mb-0 border">
                                                                                        <div
                                                                                            class="card-header justify-content-between d-sm-flex d-block">
                                                                                            <div class="card-title">
                                                                                                Documentação</div>
                                                                                            <div class="mt-sm-0 mt-2">
                                                                                                <button
                                                                                                    class="btn btn-sm btn-primary">Análise
                                                                                                    de Documentos</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <ul class="list-group">
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div
                                                                                                        class="d-flex align-items-top">
                                                                                                        <div
                                                                                                            class="lh-1">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="40"
                                                                                                                    width="40"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#13bfa6"
                                                                                                                        d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                                                                        opacity=".99">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        fill="#71d8c9"
                                                                                                                        d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="lh-1 flex-fill">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                <span
                                                                                                                    class="fw-semibold">Documento
                                                                                                                    de
                                                                                                                    identificação</span>
                                                                                                            <div
                                                                                                                class="d-sm-flex align-items-center">
                                                                                                                <div>
                                                                                                                    <p
                                                                                                                        class="card-text  text-muted">
                                                                                                                        Documento
                                                                                                                        Aprovado
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            </p>

                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                                            <a href="#"
                                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                                data-bs-toggle="dropdown"
                                                                                                                aria-expanded="false">
                                                                                                                <i
                                                                                                                    class="fe fe-more-vertical"></i>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="dropdown-menu">
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Visualizar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Carregar
                                                                                                                        arquivo</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Aprovar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Rejeitar</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div
                                                                                                        class="d-flex align-items-top">
                                                                                                        <div
                                                                                                            class="lh-1">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="40"
                                                                                                                    width="40"
                                                                                                                    data-name="Layer 1"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#05c3fb"
                                                                                                                        d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="lh-1 flex-fill">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                <span
                                                                                                                    class="fw-semibold">Selfie
                                                                                                                    com o
                                                                                                                    documento</span>
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="mb-0">
                                                                                                                <span
                                                                                                                    class="text-muted fs-11">Aguardando
                                                                                                                    envio</span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                                            <a href="#"
                                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                                data-bs-toggle="dropdown"
                                                                                                                aria-expanded="false">
                                                                                                                <i
                                                                                                                    class="fe fe-more-vertical"></i>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="dropdown-menu">
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Visualizar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Carregar
                                                                                                                        arquivo</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Aprovar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Rejeitar</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">

                                                                                                    <div
                                                                                                        class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                                                                        <div
                                                                                                            class="d-sm-flex align-items-center">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="50"
                                                                                                                    width="50"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#fad383"
                                                                                                                        d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z">
                                                                                                                    </path>
                                                                                                                    <circle
                                                                                                                        cx="12"
                                                                                                                        cy="16"
                                                                                                                        r="1"
                                                                                                                        fill="#f7b731">
                                                                                                                    </circle>
                                                                                                                    <path
                                                                                                                        fill="#f7b731"
                                                                                                                        d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                            <div>
                                                                                                                <h4
                                                                                                                    class="h4 mb-0">
                                                                                                                    Procuração
                                                                                                                </h4>
                                                                                                                <p
                                                                                                                    class="card-text  text-muted">
                                                                                                                    Enviado,
                                                                                                                    aguardando
                                                                                                                    aprovação
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="text-end">
                                                                                                            <a href="javascript:void(0);"
                                                                                                                class="btn btn-white me-2 mb-2">Visualizar</a>
                                                                                                            <a href="javascript:void(0);"
                                                                                                                class="btn btn-success me-2 mb-2">Aprovar</a>
                                                                                                            <a href="javascript:void(0);"
                                                                                                                class="btn btn-danger me-2 mb-2">Rejeitar</a>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div
                                                                                                        class="d-flex align-items-top">
                                                                                                        <div
                                                                                                            class="lh-1">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="50"
                                                                                                                    width="50"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#f07f8f"
                                                                                                                        d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                                                                                                                    <circle
                                                                                                                        cx="12"
                                                                                                                        cy="17"
                                                                                                                        r="1"
                                                                                                                        fill="#e62a45" />
                                                                                                                    <path
                                                                                                                        fill="#e62a45"
                                                                                                                        d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" />
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="lh-1 flex-fill">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                <span
                                                                                                                    class="fw-semibold">Comprovante
                                                                                                                    de
                                                                                                                    Endereço</span>
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="mb-0">
                                                                                                                <span
                                                                                                                    class="text-muted fs-11 text-wrap">Documento
                                                                                                                    Rejeitado</span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                                            <a href="#"
                                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                                data-bs-toggle="dropdown"
                                                                                                                aria-expanded="false">
                                                                                                                <i
                                                                                                                    class="fe fe-more-vertical"></i>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="dropdown-menu">
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Visualizar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Carregar
                                                                                                                        arquivo</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Aprovar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Rejeitar</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div
                                                                                                        class="d-flex align-items-top">
                                                                                                        <div
                                                                                                            class="lh-1">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="40"
                                                                                                                    width="40"
                                                                                                                    data-name="Layer 1"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#05c3fb"
                                                                                                                        d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="lh-1 flex-fill">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                <span
                                                                                                                    class="fw-semibold">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Municipais</span>
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="mb-0">
                                                                                                                <span
                                                                                                                    class="text-muted fs-11">Aguardando
                                                                                                                    envio</span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                                            <a href="#"
                                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                                data-bs-toggle="dropdown"
                                                                                                                aria-expanded="false">
                                                                                                                <i
                                                                                                                    class="fe fe-more-vertical"></i>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="dropdown-menu">
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Visualizar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Carregar
                                                                                                                        arquivo</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Aprovar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Rejeitar</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div
                                                                                                        class="d-flex align-items-top">
                                                                                                        <div
                                                                                                            class="lh-1">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="40"
                                                                                                                    width="40"
                                                                                                                    data-name="Layer 1"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#05c3fb"
                                                                                                                        d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="lh-1 flex-fill">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                <span
                                                                                                                    class="fw-semibold">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Estaduais</span>
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="mb-0">
                                                                                                                <span
                                                                                                                    class="text-muted fs-11">Aguardando
                                                                                                                    envio</span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                                            <a href="#"
                                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                                data-bs-toggle="dropdown"
                                                                                                                aria-expanded="false">
                                                                                                                <i
                                                                                                                    class="fe fe-more-vertical"></i>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="dropdown-menu">
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Visualizar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Carregar
                                                                                                                        arquivo</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Aprovar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Rejeitar</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <div
                                                                                                        class="d-flex align-items-top">
                                                                                                        <div
                                                                                                            class="lh-1">
                                                                                                            <span
                                                                                                                class="me-3"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    height="40"
                                                                                                                    width="40"
                                                                                                                    data-name="Layer 1"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="#05c3fb"
                                                                                                                        d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z">
                                                                                                                    </path>
                                                                                                                </svg></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="lh-1 flex-fill">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                <span
                                                                                                                    class="fw-semibold">Certidão
                                                                                                                    Negativa
                                                                                                                    de
                                                                                                                    Débitos
                                                                                                                    Federais</span>
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="mb-0">
                                                                                                                <span
                                                                                                                    class="text-muted fs-11">Aguardando
                                                                                                                    envio</span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                                            <a href="#"
                                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                                data-bs-toggle="dropdown"
                                                                                                                aria-expanded="false">
                                                                                                                <i
                                                                                                                    class="fe fe-more-vertical"></i>
                                                                                                            </a>
                                                                                                            <ul
                                                                                                                class="dropdown-menu">
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Visualizar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Carregar
                                                                                                                        arquivo</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Aprovar</a>
                                                                                                                </li>
                                                                                                                <li><a class="dropdown-item"
                                                                                                                        href="#">Rejeitar</a>
                                                                                                                </li>
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
                                                                        <div class="tab-pane fs-13 p-0"
                                                                            id="notification-settings" role="tabpanel">
                                                                            <ul
                                                                                class="list-group list-group-flush list-unstyled">
                                                                                <li class="list-group-item">
                                                                                    <div class="row gx-5">
                                                                                        <div class="col-xl-5">
                                                                                            <p
                                                                                                class="fs-16 mb-1 fw-semibold">
                                                                                                Email Notifications</p>
                                                                                            <p
                                                                                                class="fs-12 mb-0 text-muted">
                                                                                                Email notifications are the
                                                                                                notifications you will
                                                                                                receeive when you are
                                                                                                offline, you can customize
                                                                                                them by enabling or
                                                                                                disabling them.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-7">
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Updates & Features
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Notifications about
                                                                                                        new updates and
                                                                                                        their features.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="update-features"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <label
                                                                                                            for="update-features"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Early Access</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Users are selected
                                                                                                        for beta testing of
                                                                                                        new
                                                                                                        update,notifications
                                                                                                        relating or
                                                                                                        participate in any
                                                                                                        of paid product
                                                                                                        promotion.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="early-access"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox">
                                                                                                        <label
                                                                                                            for="early-access"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Email Shortcuts</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Shortcut
                                                                                                        notifications for
                                                                                                        email.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="email-shortcut"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <label
                                                                                                            for="email-shortcut"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        New Mails</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Notifications
                                                                                                        related to new mails
                                                                                                        received.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="new-mails"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <label
                                                                                                            for="new-mails"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Mail Chat Messages
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Any of new messages
                                                                                                        are received will be
                                                                                                        updated through
                                                                                                        notifications.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="mail-chat-messages"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <label
                                                                                                            for="mail-chat-messages"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="row gx-5">
                                                                                        <div class="col-xl-5">
                                                                                            <p
                                                                                                class="fs-16 mb-1 fw-semibold">
                                                                                                Push Notifications</p>
                                                                                            <p
                                                                                                class="fs-12 mb-0 text-muted">
                                                                                                Push notifications are
                                                                                                recieved when you are
                                                                                                online, you can customize
                                                                                                them by enabling or
                                                                                                disabling them.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-7">
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        New Mails</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Notifications
                                                                                                        related to new mails
                                                                                                        received.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="push-new-mails"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <label
                                                                                                            for="push-new-mails"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Mail Chat Messages
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Any of new messages
                                                                                                        are received will be
                                                                                                        updated through
                                                                                                        notifications.</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="push-mail-chat-messages"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox"
                                                                                                            checked="">
                                                                                                        <label
                                                                                                            for="push-mail-chat-messages"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                                <div
                                                                                                    class="mail-notification-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Mail Extensions</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Notifications
                                                                                                        related to the
                                                                                                        extensions received
                                                                                                        by new emails and
                                                                                                        thier propertied
                                                                                                        also been displayed.
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="mail-extensions"
                                                                                                            name="toggleswitchsize"
                                                                                                            type="checkbox">
                                                                                                        <label
                                                                                                            for="mail-extensions"
                                                                                                            class="label-primary mb-1"></label>
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
                                                                            <ul
                                                                                class="list-group list-group-flush list-unstyled">
                                                                                <li class="list-group-item">
                                                                                    <div class="row gx-5">
                                                                                        <div class="col-xl-4">
                                                                                            <p
                                                                                                class="fs-16 mb-1 fw-semibold">
                                                                                                Logging In</p>
                                                                                            <p
                                                                                                class="fs-12 mb-0 text-muted">
                                                                                                Security settings related to
                                                                                                logging into our email
                                                                                                account and taking down
                                                                                                account if any mischevious
                                                                                                action happended.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-8">
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                                                <div
                                                                                                    class="mail-security-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Max Limit for login
                                                                                                        attempts</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Account will freeze
                                                                                                        for 24hrs while
                                                                                                        attempt to login
                                                                                                        with wrong
                                                                                                        credentials for
                                                                                                        selected number of
                                                                                                        times</p>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Account Freeze time
                                                                                                        management</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        You can change the
                                                                                                        time for the account
                                                                                                        freeze when attempts
                                                                                                        for </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="row gx-5">
                                                                                        <div class="col-xl-4">
                                                                                            <p
                                                                                                class="fs-16 mb-1 fw-semibold">
                                                                                                Password Requirements</p>
                                                                                            <p
                                                                                                class="fs-12 mb-0 text-muted">
                                                                                                Security settings related to
                                                                                                password strength.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-8">
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                                                <div
                                                                                                    class="mail-security-settings">
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Minimun number of
                                                                                                        characters in the
                                                                                                        password</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        There should be a
                                                                                                        minimum number of
                                                                                                        characters for a
                                                                                                        password to be
                                                                                                        validated that
                                                                                                        shouls be set here.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Contain A Number</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Password should
                                                                                                        contain a number.
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="mt-3 mt-sm-0">
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="password-number"
                                                                                                            name="toggleswitchsize6"
                                                                                                            type="checkbox">
                                                                                                        <label
                                                                                                            for="password-number"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Contain A Special
                                                                                                        Character</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Password should
                                                                                                        contain a special
                                                                                                        Character.</p>
                                                                                                </div>
                                                                                                <div class="mt-3 mt-sm-0">
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="password-special-character"
                                                                                                            name="toggleswitchsize7"
                                                                                                            type="checkbox"
                                                                                                            checked>
                                                                                                        <label
                                                                                                            for="password-special-character"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Atleast One Capital
                                                                                                        Letter</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Password should
                                                                                                        contain atleast one
                                                                                                        capital letter.</p>
                                                                                                </div>
                                                                                                <div class="mt-3 mt-sm-0">
                                                                                                    <div
                                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                                        <input
                                                                                                            id="password-capital"
                                                                                                            name="toggleswitchsize8"
                                                                                                            type="checkbox"
                                                                                                            checked>
                                                                                                        <label
                                                                                                            for="password-capital"
                                                                                                            class="label-primary mb-1"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                                <div>
                                                                                                    <p
                                                                                                        class="fs-14 mb-1 fw-semibold">
                                                                                                        Maximun Password
                                                                                                        Length</p>
                                                                                                    <p
                                                                                                        class="fs-12 mb-0 text-muted">
                                                                                                        Maximum password
                                                                                                        lenth should be
                                                                                                        selected here.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="row gx-5">
                                                                                        <div class="col-xl-4">
                                                                                            <p
                                                                                                class="fs-16 mb-1 fw-semibold">
                                                                                                Unknown Chats</p>
                                                                                            <p
                                                                                                class="fs-12 mb-0 text-muted">
                                                                                                Security settings related to
                                                                                                unknown chats.</p>
                                                                                        </div>
                                                                                        <div class="col-xl-8">
                                                                                            <div>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        type="radio"
                                                                                                        name="unknown-messages-default"
                                                                                                        id="unknown-messages-show1">
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="unknown-messages-show1">
                                                                                                        Show
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        type="radio"
                                                                                                        name="unknown-messages-default"
                                                                                                        id="unknown-messages-hide2"
                                                                                                        checked="">
                                                                                                    <label
                                                                                                        class="form-check-label"
                                                                                                        for="unknown-messages-hide2">
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
                                                                <div class="col-xl-5">
                                                                    <div class="card custom-card shadow-none mb-0 border">
                                                                        <div
                                                                            class="card-header justify-content-between d-sm-flex d-block">
                                                                            <div class="card-title">Registered Devices
                                                                            </div>
                                                                            <div class="mt-sm-0 mt-2">
                                                                                <button
                                                                                    class="btn btn-sm btn-primary">Signout
                                                                                    from all
                                                                                    devices</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item">
                                                                                    <div class="d-flex align-items-top">
                                                                                        <div class="lh-1"><i
                                                                                                class="bi bi-phone me-2 fs-16 align-middle text-muted"></i>
                                                                                        </div>
                                                                                        <div class="lh-1 flex-fill">
                                                                                            <p class="mb-1">
                                                                                                <span
                                                                                                    class="fw-semibold">Mobile-LG-1023</span>
                                                                                            </p>
                                                                                            <p class="mb-0">
                                                                                                <span
                                                                                                    class="text-muted fs-11">Manchester,
                                                                                                    UK-Nov 30,
                                                                                                    04:45PM</span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="fe fe-more-vertical"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Action</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Another
                                                                                                        action</a></li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Something
                                                                                                        else here</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="d-flex align-items-top">
                                                                                        <div class="lh-1"><i
                                                                                                class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i>
                                                                                        </div>
                                                                                        <div class="lh-1 flex-fill">
                                                                                            <p class="mb-1">
                                                                                                <span
                                                                                                    class="fw-semibold">Lenovo-1291203</span>
                                                                                            </p>
                                                                                            <p class="mb-0">
                                                                                                <span
                                                                                                    class="text-muted fs-11">England,
                                                                                                    UK-Aug 12,
                                                                                                    12:25PM</span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="fe fe-more-vertical"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Action</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Another
                                                                                                        action</a></li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Something
                                                                                                        else here</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="d-flex align-items-top">
                                                                                        <div class="lh-1"><i
                                                                                                class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i>
                                                                                        </div>
                                                                                        <div class="lh-1 flex-fill">
                                                                                            <p class="mb-1">
                                                                                                <span
                                                                                                    class="fw-semibold">Macbook-Suzika</span>
                                                                                            </p>
                                                                                            <p class="mb-0">
                                                                                                <span
                                                                                                    class="text-muted fs-11">Brightoon,
                                                                                                    UK-Jul 18,
                                                                                                    8:34AM</span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="fe fe-more-vertical"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Action</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Another
                                                                                                        action</a></li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Something
                                                                                                        else here</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="d-flex align-items-top">
                                                                                        <div class="lh-1"><i
                                                                                                class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i>
                                                                                        </div>
                                                                                        <div class="lh-1 flex-fill">
                                                                                            <p class="mb-1">
                                                                                                <span
                                                                                                    class="fw-semibold">Apple-Desktop</span>
                                                                                            </p>
                                                                                            <p class="mb-0">
                                                                                                <span
                                                                                                    class="text-muted fs-11 text-wrap">Darlington,
                                                                                                    UK-Jan 14,
                                                                                                    11:14AM</span>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dropdown mt-sm-0 mt-2">
                                                                                            <a href="#"
                                                                                                class="btn btn-icon btn-sm btn-light"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false">
                                                                                                <i
                                                                                                    class="fe fe-more-vertical"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Action</a>
                                                                                                </li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Another
                                                                                                        action</a></li>
                                                                                                <li><a class="dropdown-item"
                                                                                                        href="#">Something
                                                                                                        else here</a></li>
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
                                                        <div class="tab-pane fs-13 p-0" id="email-settings"
                                                            role="tabpanel">
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                                                                            <span class="fs-14 fw-semibold mb-0">Menu View
                                                                                :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="flexRadioDefault"
                                                                                    id="flexRadioDefault1">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault1">
                                                                                    Default View
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="flexRadioDefault"
                                                                                    id="flexRadioDefault2"
                                                                                    checked="">
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault2">
                                                                                    Advanced View
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="menu-view"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox" checked="">
                                                                                <label for="menu-view"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Language
                                                                                :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <select class="form-control"
                                                                                name="choices-multiple-remove-button2"
                                                                                id="choices-multiple-remove-button2"
                                                                                multiple>
                                                                                <option value="Choice 1" selected> English
                                                                                </option>
                                                                                <option value="Choice 2">French</option>
                                                                                <option value="Choice 3">Arabic</option>
                                                                                <option value="Choice 4">Malayalam
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="mail-languages"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox">
                                                                                <label for="mail-languages"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Images
                                                                                :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="images-default"
                                                                                    id="images-open">
                                                                                <label class="form-check-label"
                                                                                    for="images-open">
                                                                                    Always Open Images
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="images-default"
                                                                                    id="images-hide" checked="">
                                                                                <label class="form-check-label"
                                                                                    for="images-hide">
                                                                                    Ask For Permission
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="mails-images"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox">
                                                                                <label for="mails-images"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Keyboard
                                                                                Shortcuts :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="keyboard-default"
                                                                                    id="keyboard-enable1">
                                                                                <label class="form-check-label"
                                                                                    for="keyboard-enable1">
                                                                                    Keyboard Shortcuts Enable
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="keyboard-default"
                                                                                    id="keyboard-disable2"
                                                                                    checked="">
                                                                                <label class="form-check-label"
                                                                                    for="keyboard-disable2">
                                                                                    Keyboard Shortcuts Disable
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="keyboard-shortcuts"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox">
                                                                                <label for="keyboard-shortcuts"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span
                                                                                class="fs-14 fw-semibold mb-0">Notifications
                                                                                :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="desktop-notifications"
                                                                                    checked="">
                                                                                <label class="form-check-label"
                                                                                    for="desktop-notifications">
                                                                                    Desktop Notifications
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="mobile-notifications">
                                                                                <label class="form-check-label"
                                                                                    for="mobile-notifications">
                                                                                    Mobile Notifications
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div class="float-sm-end">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Maximum
                                                                                Mails Per Page :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <select class="form-control select2"
                                                                                data-trigger name="mail-per-page"
                                                                                id="mail-per-page">
                                                                                <option value="Choice 1" selected>10
                                                                                </option>
                                                                                <option value="Choice 2">50</option>
                                                                                <option value="Choice 3">100</option>
                                                                                <option value="Choice 3">120</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="mails-per-page"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox">
                                                                                <label for="mails-per-page"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Mail
                                                                                Composer :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="mail-default"
                                                                                    id="mail-composeron1">
                                                                                <label class="form-check-label"
                                                                                    for="mail-composeron1">
                                                                                    Mail Composer On
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="mail-default"
                                                                                    id="mail-composeroff2"
                                                                                    checked="">
                                                                                <label class="form-check-label"
                                                                                    for="mail-composeroff2">
                                                                                    Mail Composer Off
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="mail-composer"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox">
                                                                                <label for="mail-composer"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Auto
                                                                                Correct :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="auto-default"
                                                                                    id="auto-correcton1">
                                                                                <label class="form-check-label"
                                                                                    for="auto-correcton1">
                                                                                    Auto Correct On
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio" name="auto-default"
                                                                                    id="auto-correctoff2"
                                                                                    checked="">
                                                                                <label class="form-check-label"
                                                                                    for="auto-correctoff2">
                                                                                    Auto Correct Off
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div
                                                                                class="custom-toggle-switch float-sm-end">
                                                                                <input id="auto-correct"
                                                                                    name="toggleswitchsize"
                                                                                    type="checkbox">
                                                                                <label for="auto-correct"
                                                                                    class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div
                                                                        class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                                        <div class="col-xl-3">
                                                                            <span class="fs-14 fw-semibold mb-0">Mail Send
                                                                                Action :</span>
                                                                        </div>
                                                                        <div class="col-xl-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="on-keyboard" checked="">
                                                                                <label class="form-check-label"
                                                                                    for="on-keyboard">
                                                                                    On Keyboard Action
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="on-buttonclick">
                                                                                <label class="form-check-label"
                                                                                    for="on-buttonclick">
                                                                                    On Button Click
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-5">
                                                                            <div class="float-sm-end">
                                                                                <a href="javascript:void(0);"
                                                                                    class="btn btn-success-ghost btn-sm">Learn-more</a>
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
                                                                            <p class="fs-16 mb-1 fw-semibold">Email
                                                                                Notifications</p>
                                                                            <p class="fs-12 mb-0 text-muted">Email
                                                                                notifications are the notifications
                                                                                you will receeive when you are offline, you
                                                                                can customize them by
                                                                                enabling or disabling them.</p>
                                                                        </div>
                                                                        <div class="col-xl-7">
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Updates & Features</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Notifications about new updates
                                                                                        and their features.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="update-features"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                        <label for="update-features"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Early Access</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Users
                                                                                        are selected for beta
                                                                                        testing of new update,notifications
                                                                                        relating or participate in
                                                                                        any of paid product promotion.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="early-access"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox">
                                                                                        <label for="early-access"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Email Shortcuts</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Shortcut notifications for email.
                                                                                    </p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="email-shortcut"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                        <label for="email-shortcut"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">New
                                                                                        Mails</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Notifications related to new mails
                                                                                        received.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="new-mails"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                        <label for="new-mails"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">Mail
                                                                                        Chat Messages</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Any
                                                                                        of new messages are received
                                                                                        will be updated through
                                                                                        notifications.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="mail-chat-messages"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                        <label for="mail-chat-messages"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row gx-5">
                                                                        <div class="col-xl-5">
                                                                            <p class="fs-16 mb-1 fw-semibold">Push
                                                                                Notifications</p>
                                                                            <p class="fs-12 mb-0 text-muted">Push
                                                                                notifications are recieved when you
                                                                                are online, you can customize them by
                                                                                enabling or disabling them.</p>
                                                                        </div>
                                                                        <div class="col-xl-7">
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">New
                                                                                        Mails</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Notifications related to new mails
                                                                                        received.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="push-new-mails"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                        <label for="push-new-mails"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">Mail
                                                                                        Chat Messages</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Any
                                                                                        of new messages are received
                                                                                        will be updated through
                                                                                        notifications.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input
                                                                                            id="push-mail-chat-messages"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox"
                                                                                            checked="">
                                                                                        <label
                                                                                            for="push-mail-chat-messages"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex align-items-top justify-content-between mt-3">
                                                                                <div class="mail-notification-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">Mail
                                                                                        Extensions</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Notifications related to the
                                                                                        extensions received by new emails
                                                                                        and thier propertied also been
                                                                                        displayed.</p>
                                                                                </div>
                                                                                <div>
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="mail-extensions"
                                                                                            name="toggleswitchsize"
                                                                                            type="checkbox">
                                                                                        <label for="mail-extensions"
                                                                                            class="label-primary mb-1"></label>
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
                                                                            <p class="fs-16 mb-1 fw-semibold">Logging In
                                                                            </p>
                                                                            <p class="fs-12 mb-0 text-muted">Security
                                                                                settings related to logging into
                                                                                our email account and taking down account if
                                                                                any mischevious action
                                                                                happended.</p>
                                                                        </div>
                                                                        <div class="col-xl-8">
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                                <div class="mail-security-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">Max
                                                                                        Limit for login attempts</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Account will freeze for 24hrs
                                                                                        while attempt to login with wrong
                                                                                        credentials for selected
                                                                                        number of times</p>
                                                                                </div>

                                                                            </div>
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Account Freeze time management
                                                                                    </p>
                                                                                    <p class="fs-12 mb-0 text-muted">You
                                                                                        can change the time for the
                                                                                        account freeze when attempts for
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row gx-5">
                                                                        <div class="col-xl-4">
                                                                            <p class="fs-16 mb-1 fw-semibold">Password
                                                                                Requirements</p>
                                                                            <p class="fs-12 mb-0 text-muted">Security
                                                                                settings related to password
                                                                                strength.</p>
                                                                        </div>
                                                                        <div class="col-xl-8">
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                                <div class="mail-security-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Minimun number of characters in
                                                                                        the password</p>
                                                                                    <p class="fs-12 mb-0 text-muted">There
                                                                                        should be a minimum number
                                                                                        of characters for a password to be
                                                                                        validated that shouls be set
                                                                                        here.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Contain A Number</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Password should contain a number.
                                                                                    </p>
                                                                                </div>
                                                                                <div class="mt-3 mt-sm-0">
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="password-number"
                                                                                            name="toggleswitchsize6"
                                                                                            type="checkbox">
                                                                                        <label for="password-number"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Contain A Special Character</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Password should contain a special
                                                                                        Character.</p>
                                                                                </div>
                                                                                <div class="mt-3 mt-sm-0">
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input
                                                                                            id="password-special-character"
                                                                                            name="toggleswitchsize7"
                                                                                            type="checkbox" checked>
                                                                                        <label
                                                                                            for="password-special-character"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Atleast One Capital Letter</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Password should contain atleast
                                                                                        one capital letter.</p>
                                                                                </div>
                                                                                <div class="mt-3 mt-sm-0">
                                                                                    <div
                                                                                        class="custom-toggle-switch float-sm-end">
                                                                                        <input id="password-capital"
                                                                                            name="toggleswitchsize8"
                                                                                            type="checkbox" checked>
                                                                                        <label for="password-capital"
                                                                                            class="label-primary mb-1"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">
                                                                                        Maximun Password Length</p>
                                                                                    <p class="fs-12 mb-0 text-muted">
                                                                                        Maximum password lenth should be
                                                                                        selected here.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row gx-5">
                                                                        <div class="col-xl-4">
                                                                            <p class="fs-16 mb-1 fw-semibold">Unknown
                                                                                Chats</p>
                                                                            <p class="fs-12 mb-0 text-muted">Security
                                                                                settings related to unknown
                                                                                chats.</p>
                                                                        </div>
                                                                        <div class="col-xl-8">
                                                                            <div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="unknown-messages-default"
                                                                                        id="unknown-messages-show1">
                                                                                    <label class="form-check-label"
                                                                                        for="unknown-messages-show1">
                                                                                        Show
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio"
                                                                                        name="unknown-messages-default"
                                                                                        id="unknown-messages-hide2"
                                                                                        checked="">
                                                                                    <label class="form-check-label"
                                                                                        for="unknown-messages-hide2">
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
