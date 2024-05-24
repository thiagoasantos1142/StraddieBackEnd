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
            <div class="col-lg-7 col-xl-10 col-xxl-10">
                <form method="POST" action="{{ route('dueDiligence.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="creditRightsTitleId" value="{{ $creditRightsTitle->id }}">

                    <div class="card custom-card">
                        <div class="card-header d-sm-flex d-block">
                            <ul class="nav nav-pills nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                <li class="nav-item m-1">
                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#personal-info" aria-selected="true">Beneficiários </a>
                                </li>
                                <li class="nav-item m-1">
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#lawyer-settings" aria-selected="true">Advogados</a>
                                </li>
                                <li class="nav-item m-1">
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#title-settings" aria-selected="true">Informações Sobre o titulo</a>
                                </li>



                            </ul>
                        </div>
                        <div class="card-body p-0">
                            <div class="tab-content">
                                <div class="tab-pane show active fs-13 p-5" id="personal-info" role="tabpanel">
                                    <div class="row gy-3">
                                        <div class="col-xl-7">
                                            <div class="card custom-card shadow-none mb-0 border">
                                                <div class="card-body">
                                                    @foreach ($users as $user)
                                                        <div class="d-sm-flex align-items-center flex-wrap gap-2">
                                                            <div class="mb-0 me-5 d-flex align-items-center">
                                                                <div class="ms-3">
                                                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                                                    <p class="mb-0">{{ $user->title }}</p>
                                                                </div>

                                                            </div>
                                                            <div class="btn-group mt-sm-0 mt-2">
                                                                <button class="btn btn-primary">Ver usuário</button>
                                                            </div>
                                                            <div class="text-end">
                                                                <button class="btn btn-secondary-light"><i
                                                                        class="ri-vip-crown-2-line"></i> Beneficiário
                                                                    Principal</button>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-semibold">Dados pessoais</p>
                                                                <label for="email-address" class="form-label"><b>E-mail:
                                                                    </b>{{ $user->email }}</label>
                                                                <label for="email-address" class="form-label"><b>CPF:
                                                                    </b>{{ $user->cpf }}</label>
                                                                @foreach ($user->contacts as $contact)
                                                                    <label for="phone" class="form-label"><b>Telefone:
                                                                        </b>{{ $contact->phone }}</label>
                                                                @endforeach

                                                                @if ($user->addresses->count() == 0)
                                                                    <div class="ms-3">
                                                                        <button class="btn btn-secondary-light"><i
                                                                                class="fa fa-map-marker"
                                                                                aria-hidden="true"></i> Nenhum endereço
                                                                            cadastrado</button>
                                                                    </div>
                                                                @else
                                                                    @foreach ($user->addresses as $address)
                                                                        <label for="street-address"
                                                                            class="form-label"><b>Rua:
                                                                            </b>{{ $address->street }}</label>
                                                                        <label for="neighborhood-address"
                                                                            class="form-label"><b>Bairro:
                                                                            </b>{{ $address->neighborhood }}</label>
                                                                        <label for="city-address"
                                                                            class="form-label"><b>Cidade:
                                                                            </b>{{ $address->city->title }}</label>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    @foreach ($usersPj as $user)
                                                        <div class="d-sm-flex align-items-center flex-wrap gap-2">
                                                            <div class="mb-0 me-5 d-flex align-items-center">
                                                                <div class="ms-3">
                                                                    <h5 class="mb-1">{{ $user->nome_fantasia }}</h5>
                                                                    <p class="mb-0">{{ $user->title }}</p>
                                                                </div>

                                                            </div>
                                                            <div class="btn-group mt-sm-0 mt-2">
                                                                <button class="btn btn-primary">Ver usuário</button>
                                                            </div>
                                                            <div class="text-end">
                                                                <button class="btn btn-secondary-light"><i
                                                                        class="ri-vip-crown-2-line"></i> Beneficiário
                                                                    Principal</button>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-semibold">Dados pessoais</p>
                                                                <label for="email-address" class="form-label"><b>E-mail:
                                                                    </b>{{ $user->email }}</label>
                                                                <label for="email-address" class="form-label"><b>CNPJ:
                                                                    </b>{{ $user->cnpj }}</label>
                                                                @foreach ($user->contacts as $contact)
                                                                    <label for="phone" class="form-label"><b>Telefone:
                                                                        </b>{{ $contact->phone }}</label>
                                                                @endforeach

                                                                @if ($user->addresses->count() == 0)
                                                                    <div class="ms-3">
                                                                        <button class="btn btn-secondary-light"><i
                                                                                class="fa fa-map-marker"
                                                                                aria-hidden="true"></i> Nenhum endereço
                                                                            cadastrado</button>
                                                                    </div>
                                                                @else
                                                                    @foreach ($user->addresses as $address)
                                                                        <label for="street-address"
                                                                            class="form-label"><b>Rua:
                                                                            </b>{{ $address->street }}</label>
                                                                        <label for="neighborhood-address"
                                                                            class="form-label"><b>Bairro:
                                                                            </b>{{ $address->neighborhood }}</label>
                                                                        <label for="city-address"
                                                                            class="form-label"><b>Cidade:
                                                                            </b>{{ $address->city->title }}</label>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <div class="mb-6 main-content-label">Envio de documentos</div>
                                                    <div class="form-group mb-0">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="form-label">Documentos Obrigatórios</label>
                                                            </div>

                                                            @foreach ($documentsTypesKYCPF as $documentTypeKYC)
                                                                <div class="col-md-10">
                                                                    <label class="custom-switch d-block mb-2">
                                                                        <input type="checkbox"
                                                                            name="doc_type_kyc_user_ids[]"
                                                                            value="{{ $documentTypeKYC->id }}"
                                                                            class="custom-switch-input" checked>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span
                                                                            class="text-muted ms-2">{{ $documentTypeKYC->title }}</span>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                            @foreach ($documentsTypesCND as $documentTypeCND)
                                                                <div class="col-md-10">
                                                                    <label class="custom-switch d-block mb-2">
                                                                        <input type="checkbox"
                                                                            name="doc_type_cnd_user_ids[]"
                                                                            value="{{ $documentTypeCND->id }}"
                                                                            class="custom-switch-input" checked>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span
                                                                            class="text-muted ms-2">{{ $documentTypeCND->title }}</span>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fs-13 p-5" id="lawyer-settings" role="tabpanel">
                                    <div class="row gy-3">
                                        <div class="col-xl-7">
                                            <div class="card custom-card shadow-none mb-0 border">
                                                <div class="card-body">
                                                    @foreach ($lawyers as $lawyer)
                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-semibold">
                                                                    @if ($lawyer->user)
                                                                        {{ $lawyer->user->name }}
                                                                    @else
                                                                        {{ $lawyer->name }}
                                                                    @endif
                                                                </p>
                                                                <p class="fs-12 text-muted mb-0">Título:
                                                                    {{ $lawyer->title }}</p><br>
                                                                <p class="fs-14 mb-1 fw-semibold">OAB:
                                                                    {{ $lawyer->OAB_number }}</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-2 fw-semibold">Dados pessoais</p>
                                                                @if ($lawyer->user)
                                                                    <p class="fs-12 text-muted mb-0">Nome:
                                                                        {{ $lawyer->user->name }}</p>
                                                                    <p class="fs-12 text-muted mb-0">CPF:
                                                                        {{ $lawyer->user->cpf }}</p>
                                                                    <p class="fs-12 text-muted mb-0">Phone:
                                                                        {{ $lawyer->user->contacts[1]->phone ?? 'N/A' }}</p>
                                                                    <p class="fs-12 text-muted mb-0">Email:
                                                                        {{ $lawyer->user->email }}</p>
                                                                @else
                                                                    <p class="fs-12 text-muted mb-0">Sem dados pessoais
                                                                        cadastrados.</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="mb-6 main-content-label">Envio de documentos</div>
                                                    <div class="form-group mb-0">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="form-label">Documentos Obrigatórios</label>
                                                            </div>
                                                            @foreach ($documentsTypesKYCPF as $documentTypeKYC)
                                                                <div class="col-md-10">
                                                                    <label class="custom-switch d-block mb-2">
                                                                        <input type="checkbox"
                                                                            name="doc_type_kyc_law_ids[]"
                                                                            value="{{ $documentTypeKYC->id }}"
                                                                            class="custom-switch-input" checked>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span
                                                                            class="text-muted ms-2">{{ $documentTypeKYC->title }}</span>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fs-13 p-0" id="title-settings" role="tabpanel">
                                    <div class="row gy-3">
                                        <div class="col-xl-7">
                                            <div class="card custom-card shadow-none mb-0 border">
                                                <div class="card-body">
                                                    <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">                                                                    
                                                        <div>                                                                        
                                                            <p class="fs-18 mb-1 fw-bold">
                                                                                {{$creditRightsTitle->title}}
                                                                                </p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Tipo do título:                        </b>{{$creditRightsTitle->title}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Classe:                                </b>{{$creditRightsTitle->class}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Numero do processo:                   </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Origem do débito:                     </b>{{$creditRightsTitle->crtOriginDebtor->title ?? 'vazio'}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Natureza do Crédito:                  </b>{{$creditRightsTitle->crtNatureCredit->title ?? 'vazio'}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0d">Natureza do Obrigação:                </b>{{$creditRightsTitle->crtNatureObligation->title ?? 'vazio'}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Orgão Julgador:                       </b>{{$creditRightsTitle->court->title ?? 'vazio'}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Vara do tribunal:                     </b>{{$creditRightsTitle->vara->title ?? 'vazio'}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Data da distribuíção do processo:     </b>{{$creditRightsTitle->distribution_date ?? 'vazio'}}</p><br>
                                                                                
                                                        </div>   
                                                        <div class="btn-group mt-sm-0 mt-2">
                                                            <a href="{{ route('creditRightsTitle.show', ['creditRightsTitle' => $creditRightsTitle->id]) }}">
                                                                <button class="btn btn-lg btn-outline-primary "
                                                                                type="button">Visualizar Título</i></button>
                                                            </a>
                                                        </div>                                                                                                                                    
                                                    </div>   

                                                    <div class="mb-6 main-content-label">Envio de documentos</div>
                                                    <div class="form-group mb-0">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="form-label">Documentos Obrigatórios</label>
                                                            </div>
                                                            @foreach ($documentsTypesTitle as $documentTypeTitle)
                                                                <div class="col-md-10">
                                                                    <label class="custom-switch d-block mb-2">
                                                                        <!-- Adiciona o valor do ID como atributo value do checkbox -->
                                                                        <input type="checkbox" name="doc_type_title_ids[]"
                                                                            class="custom-switch-input"
                                                                            value="{{ $documentTypeTitle->id }}" checked>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span
                                                                            class="text-muted ms-2">{{ $documentTypeTitle->title }}</span>
                                                                    </label>
                                                                </div>
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-end">

                                <button class="btn btn-primary m-1">
                                    Iniciar Due Diligence
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
