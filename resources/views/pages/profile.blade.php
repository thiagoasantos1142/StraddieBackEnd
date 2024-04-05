
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- jQuery Mask Plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


@endsection

@section('content')

                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Perfil</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Páginas</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    
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

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
                                <div class="card text-center shadow-none border profile-cover__img">
                                    <div class="card-body">
                                        <div class="profile-img-1">
                                            <img src="{{asset('build/assets/images/users/Thiago_053.jpg')}}" alt="img" id="profile-img">
                                            <a aria-label="anchor" href="#" class="rounded-pill avatar-icons bg-primary tx-fixed-white p-2">
                                                <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                                <i class="fe fe-camera lh-base"></i>
                                            </a>
                                        </div>
                                        <div class="profile-img-content text-dark my-2">
                                            <div>
                                                <h5 class="mb-0">{{$user->name}}</h5>
                                                <p class="text-muted mb-0">{{$user->userType->title}}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-warning mb-0">
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star fs-20"></i>
                                                <i class="fa fa-star-half-o fs-20"></i>
                                            </div>
                                        </div>
                                        <p class="mb-2">(3145 Reviews)</p>
                                        <div class="d-flex btn-list btn-list-icon justify-content-center">
                                            <button type="button" class="btn btn-sm btn-primary"><i class="fe fe-user-plus me-1"></i>Seguir</button>
                                            <button type="button" class="btn btn-sm btn-info"><i class="fe fe-message-square me-1"></i>Mensagem</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Funções Habilitadas</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tags">
                                            @foreach ($user->roles as $role)
                                                <a class="tag alert bg-light">
                                                    {{ $role->title }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                                
                                
                            </div>
                            <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <ul class="nav nav-pills gap-2" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button type="button" aria-label="anchor" class="nav-link active" id="about-tab"
                                                    data-bs-toggle="pill" data-bs-target="#about">Sobre</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="organization-tab" data-bs-toggle="pill"
                                                    data-bs-target="#organization" type="button" role="tab"
                                                    aria-controls="organization" aria-selected="false">Empresa</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="OAB-tab" data-bs-toggle="pill"
                                                    data-bs-target="#OAB" type="button" role="tab"
                                                    aria-controls="OAB" aria-selected="false">OAB</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="editprofile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#editprofile" type="button" role="tab"
                                                    aria-controls="editprofile" aria-selected="false">Editar Perfil</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="titulos-tab" data-bs-toggle="pill"
                                                    data-bs-target="#titulos" type="button" role="tab"
                                                    aria-controls="titulos" aria-selected="false">Titulos cadastrados</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="assets-tab" data-bs-toggle="pill"
                                                    data-bs-target="#assets" type="button" role="tab"
                                                    aria-controls="assets" aria-selected="false">Ativos Disponíveis</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="about">
                                                <div class="p-5">
                                                    <h5 class="text-dark">{{$user->title ?? 'Titulo vazio'}}</h5>
                                                    <p class="text-dark mb-2">
                                                        {{$user->bio}}
                                                    </p>
                                                </div>
                                                
                                                <div class="border-top"></div>
                                                <div class="table-responsive p-5">
                                                    <h5 class="mb-3">Informação pesssoais</h5>
                                                    <div class="row">
                                                        <div class="col-xl-8 ms-3">
                                                            <div class="row row-sm">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Primeiro Nome: </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">
                                                                        @php
                                                                            $nameParts = explode(" ", $user->name);
                                                                                $firstName = $nameParts[0];
                                                                        @endphp
                                                                         {{ $firstName }}
                                                                            
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Ultimo nome: </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">
                                                                    <span class="fs-15">
                                                                        @php
                                                                             $lastName = end($nameParts);
                                                                        @endphp
                                                                         {{ $lastName }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Título: </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15">{{$user->title}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">CPF: </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span id="cpf" class="fs-15 cpf-input">{{$user->cpf}}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">E-mail: </span>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <span class="fs-15 text-primary">{{$user->email}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <div class="col-md-3">
                                                                    <span class="fw-semibold fs-14">Telefone: </span>
                                                                </div>
                                                                @foreach($user->contacts as $contact)
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15 text-primary phone-input">{{$contact->phone}}</span>
                                                                    </div>
                                                                @endforeach
                                                                
                                                            </div>
                                                            <div class="row row-sm mt-3">
                                                                <h5 class="mb-3">Endereços</h5>
                                                                @foreach($user->addresses as $address)
                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">Rua: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->street}}</span>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">Numero: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->street_number}}</span>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">Complemento: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->complement}}</span>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">Bairro: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->neighborhood}}</span>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">CEP: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->zip}}</span>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">Cidade: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->city->title}}</span>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <span class="fw-semibold fs-14">Estado: </span>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <span class="fs-15">{{$address->city->state->uf}}</span>
                                                                    </div>



                                                                @endforeach
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- End profile -->


                                            <!-- Start organization -->                                           
                                            <div class="tab-pane fade" id="organization">
                                                @if(isset($user->organization))
                                                    <div class="row p-5">
                                                        <div class="col-xl-12">                                                       
                                                            <div class="card border p-0 shadow-none">
                                                                <div class="card-body">
                                                                    <div class="d-flex">
                                                                        <div class="media mt-0">
                                                                            <div class="media-user me-2">
                                                                                <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{asset('build/assets/images/organizations/Clin-1.png')}}"></div>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 class="mb-0 mt-1">{{$user->organization->razao_social}}</h6>
                                                                                <small class="text-muted"></small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ms-auto">
                                                                            <div class="dropdown show">
                                                                                <a aria-label="anchor" class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                                    <span class=""><i class="fe fe-more-vertical"></i></span>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="javascript:void(0);">Editar perfil</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <h5 class="mt-3">{{$user->organization->nome_fantasia}}</h5>
                                                                        <p class="mb-0 text-muted">{{$user->organization->description}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer user-pro-2">
                                                                    <div class="media mt-0 flex-wrap overflow-visible">
                                                                        <div class="media-user me-2">
                                                                            <div class="avatar-list avatar-list-stacked">
                                                                                @foreach($user->organization->users as $user)
                                                                                    <span class="avatar brround avatar-sm cover-image" data-bs-image-src="{{ asset('build/assets/images/users/' . $user->id . '.jpg') }}"></span>
                                                                                @endforeach
                                                                                @php
                                                                                    $userCount = $user->organization->users->count();
                                                                                    $message = ($userCount == 1) ? 'usuário' : 'usuários';
                                                                                @endphp
                                                                                @if ($userCount > 5)
                                                                                    <span class="avatar brround avatar-sm cover-image bg-primary">+{{ $userCount - 5 }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="media-body flex-fill">
                                                                            <p class="mb-0 ms-2">
                                                                                @php
                                                                                    $userCount = $user->organization->users->count();
                                                                                    $message = ($userCount == 1) ? 'usuário' : 'usuários';
                                                                                @endphp
                                                                                {{ $userCount }} {{ $message }} associado(s) a essa organização.
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <div class="d-flex mt-1">
                                                                                <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                                                <a aria-label="anchor" class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                                                <a aria-label="anchor" class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card border p-0 shadow-none">
                                                                <div class="card-body">
                                                                    <div class="d-flex">
                                                                        <div class="col-xl-12">
                                                                            <div class="">
                                                                                <div class="p-5">
                                                                                    <div class="mb-4 main-content-label">Dados da Empresa</div>
                                                                                    <div class="form-horizontal">
                                                                                        <div class="mb-4 main-content-label">Perfil</div>                                                                    
                                                                                            
                                                                                           

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Nome Fantasia</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="Nome Fantasia" value="{{$user->organization->nome_fantasia}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Razão Social</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="Razão Social" value="{{$user->organization->razao_social}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                           <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">CNPJ</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="CNPJ" value="{{$user->organization->cnpj}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">CNAE</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="cnae" value="{{$user->organization->main_CNAE}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Inscricao Municipal</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="Inscricao Municipal" value="{{$user->organization->inscricao_municipal}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Inscricao Estadual</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="Inscricao Estadual" value="{{$user->organization->inscricao_estadual}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Tipo Sociedade Empresárial</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="entidade_type" value="{{$user->organization->EntidadeType->title}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Data de abertura do CNPJ</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="08/10/2018" value="{{$user->organization->cnpj_opening_date}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">UF resgistro</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="pr" value="{{$user->organization->state_registration}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Cidade de resgistro</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="Curitiba" value="{{$user->organization->municipal_registration}}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="mb-4 main-content-label">Informações de Contato</div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">E-mail<i>(required)</i></label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="text" class="form-control" placeholder="Email" value={{$user->organization->email}}>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                    
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Telefone</label>
                                                                                                    </div>
                                                                                                    @foreach($user->organization->contacts ?? [] as $contact)
                                                                                                        <div class="col-md-10">
                                                                                                            <input type="text" class="form-control" placeholder="phone number" value="{{$contact->phone}}">
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2">
                                                                                                        <label class="form-label">Website</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-10">
                                                                                                        @if(isset($user->organization->website))
                                                                                                            <a href="{{$user->organization->website}}" target="_blank">{{$user->organization->website}}</a>
                                                                                                        @else
                                                                                                            <span>Não especificado</span>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                    
                                                                                            <div class="mb-4 main-content-label">Endereço</div>                                                                        
                                                                                            @foreach($user->organization->addresses as $address)
                                                                                                <div class="form-group">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-2">
                                                                                                                <label class="form-label">Rua</label>
                                                                                                            </div>
                                                                                                            <div class="col-md-10">
                                                                                                                <input type="text" class="form-control" placeholder="Rua" value="{{ $address->street }}">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-2">
                                                                                                            <label class="form-label">Número</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-10">
                                                                                                            <input type="text" class="form-control" placeholder="Número" value="{{ $address->street_number }}">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-2">
                                                                                                            <label class="form-label">Complemento</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-10">
                                                                                                            <input type="text" class="form-control" placeholder="Complemento" value="{{ $address->complement }}">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-2">
                                                                                                            <label class="form-label">CEP</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-10">
                                                                                                            <input type="text" class="form-control" placeholder="CEP" value="{{ $address->zip }}">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-2">
                                                                                                            <label class="form-label">Cidade</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-10">
                                                                                                            <input type="text" class="form-control" placeholder="Cidade" value="{{ $address->city->title }}">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-2">
                                                                                                            <label class="form-label">Estado</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-10">
                                                                                                            <input type="text" class="form-control" placeholder="Estado" value="{{ $address->city->state->uf }}">
                                                                                                        </div>
                                                                                                    </div>
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
                                                        
                                                @else
                                                    <div class="col-md-9">                                                            
                                                        <div class="mb-4 main-content-label">                                                                
                                                                        Usuário não está associado a nenhuma Empresa.                                                                
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            <!--                                             
                                                End organization 
                                            -->
                                            <!--                                             
                                                Inicio OAB organization 
                                            -->

                                            <div class="tab-pane fade" id="OAB">
                                                @if(isset($user->OAB))

                                                    <ul id="lightgallery" class="list-unstyled row p-5">
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="img-responsive br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/2.jpg')}}" alt="image">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/3.jpg')}}" alt="image">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/4.jpg')}}" alt="image">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/5.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/5.jpg')}}" alt="image">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/6.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/6.jpg')}}" alt="image">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/7.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/7.jpg')}}" alt="image">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/8.jpg')}}" class="glightbox br-5" data-gallery="image">
                                                                <img class="img-responsive br-5" src="{{asset('build/assets/images/media/8.jpg')}}" alt="image">
                                                            </a>
                                                        </li>                                              
                                                   
                                                    </ul>
                                                @else
                                                    <div class="col-md-9">                                                            
                                                        <div class="mb-4 main-content-label">                                                                
                                                                        Usuário não possuí OAB Cadastrada.                                                                
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <!--                                             
                                            End OAB 
                                            -->
                                            <!--                                             
                                                Inicio editprofile  
                                            -->
                                            <form action="{{ route('user.update') }}" method="post">
                                                @csrf <!-- Adiciona o token CSRF -->
                                                    <div class="tab-pane fade" id="editprofile">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="">
                                                                <div class="p-5">
                                                                    <div class="mb-4 main-content-label">Informações Pessoais</div>
                                                                    <div class="form-horizontal">
                                                                        <div class="mb-4 main-content-label">Perfil</div>
                                                                    
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Primeiro Nome</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    @php
                                                                                        $nameParts = explode(" ", $user->name);
                                                                                        $firstName = $nameParts[0];
                                                                                        echo '<input type="text" class="form-control"  name="firstName" placeholder="First Name" value="' . $firstName . '">';
                                                                                    @endphp
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Último Nome</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    @php
                                                                                        $lastName = end($nameParts);
                                                                                        echo '<input type="text" class="form-control" name="lastName" placeholder="Last Name" value="' . $lastName . '">';
                                                                                    @endphp
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Título</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <input type="text" class="form-control"  name="title"  placeholder="Título" value="{{$user->title}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">CPF</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <input type="text" class="form-control cpf-input" name="cpf" placeholder="CPF" value="{{$user->cpf}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4 main-content-label">Informações de Contato</div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">E-mail<i>(required)</i></label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Telefone</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    @foreach($user->contacts as $contact)
                                                                                        <input type="text" class="form-control phone-input" name="phone" placeholder="phone number" value="{{ strval($contact->phone) }}">
                                                                                     @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        
                                                                        <div class="mb-4 main-content-label">Endereço</div>                                                                        
                                                                        @foreach($user->addresses as $address)
                                                                            <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label class="form-label">Rua</label>
                                                                                        </div>
                                                                                        <div class="col-md-10">
                                                                                            <input type="text" class="form-control" placeholder="Rua" value="{{ $address->street }}">
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label class="form-label">Número</label>
                                                                                        </div>
                                                                                        <div class="col-md-10">
                                                                                            <input type="text" class="form-control" placeholder="Número" value="{{ $address->street_number }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label class="form-label">Complemento</label>
                                                                                        </div>
                                                                                        <div class="col-md-10">
                                                                                            <input type="text" class="form-control" placeholder="CEP" value="{{ $address->complement }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label class="form-label">CEP</label>
                                                                                        </div>
                                                                                        <div class="col-md-10">
                                                                                            <input type="text" class="form-control" placeholder="CEP" value="{{ $address->zip }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label class="form-label">Cidade</label>
                                                                                        </div>
                                                                                        <div class="col-md-10">
                                                                                            <input type="text" class="form-control" placeholder="Cidade" value="{{ $address->city->title }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2">
                                                                                            <label class="form-label">Estado</label>
                                                                                        </div>
                                                                                        <div class="col-md-10">
                                                                                            <input type="text" class="form-control" placeholder="Estado" value="{{ $address->city->state->title }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach

                                                                        
                                                                    
                                                                        <div class="mb-4 main-content-label">Permissões</div>
                                                                        <div class="form-group mb-0">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Configurar Permissões</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <label class="custom-switch d-block mb-2">
                                                                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                                                                        <span class="custom-switch-indicator"></span>
                                                                                        <span class="text-muted ms-2">Cadastrar Títulos</span>
                                                                                    </label>
                                                                                    <label class="custom-switch d-block mb-2">
                                                                                        <input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
                                                                                        <span class="custom-switch-indicator"></span>
                                                                                        <span class="text-muted ms-2">Iniciar Due Diligence</span>
                                                                                    </label>
                                                                                    <label class="custom-switch d-block mb-2">
                                                                                        <input type="checkbox" name="custom-switch-checkbox11" class="custom-switch-input" checked>
                                                                                        <span class="custom-switch-indicator"></span>
                                                                                        <span class="text-muted ms-2">Aprovar Due Diligence</span>
                                                                                    </label>
                                                                                    <label class="custom-switch d-block mb-2">
                                                                                        <input type="checkbox" name="custom-switch-checkbox11" class="custom-switch-input" checked>
                                                                                        <span class="custom-switch-indicator"></span>
                                                                                        <span class="text-muted ms-2">Fazer Oferta</span>
                                                                                    </label>
                                                                                    <label class="custom-switch d-block mb-2">
                                                                                        <input type="checkbox" name="custom-switch-checkbox11" class="custom-switch-input" checked>
                                                                                        <span class="custom-switch-indicator"></span>
                                                                                        <span class="text-muted ms-2">Aceitar Oferta</span>
                                                                                    </label>
                                                                                    <label class="custom-switch d-block mb-2">
                                                                                        <input type="checkbox" name="custom-switch-checkbox11" class="custom-switch-input" checked>
                                                                                        <span class="custom-switch-indicator"></span>
                                                                                        <span class="text-muted ms-2">Recusar Oferta</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer d-flex justify-content-end">                                                                    
                                                                    <button type="submit" class="btn ripple btn-primary w-sm">Salvar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <!--                                             
                                            End editprofile 
                                            -->
                                            <!--                                             
                                                Inicio titulos  
                                            -->
                                            <div class="tab-pane titulo fade" id="titulos">
                                                <div class="row p-5">
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-primary rounded-circle project-icon">
                                                                                        <i class="fe fe-grid"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Web
                                                                                                Design</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">11 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-primary">+15</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">11 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-primary-transparent text-primary">55%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-secondary rounded-circle project-icon">
                                                                                        <i class="fe fe-cloud-lightning"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Cloud Computing</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">11 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-secondary">+12</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">11 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-secondary-transparent text-secondary">65%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-warning rounded-circle project-icon">
                                                                                        <i class="fe fe-server"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Ethical Hacking</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">11 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-warning">+8</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">11 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-warning-transparent text-warning">75%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-success rounded-circle project-icon">
                                                                                        <i class="fe fe-airplay"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">System Design</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                1min ago</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">53
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">18 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-success">+5</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">18 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-success-transparent text-success">45%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-danger rounded-circle project-icon">
                                                                                        <i class="fe fe-pocket"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Login Authentication</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">56
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">16 Oct 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-danger">+22</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">18 Oct 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-danger-transparent text-danger">30%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-pink rounded-circle project-icon">
                                                                                        <i class="fe fe-cpu"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">SEO Using React</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                1mnth ago</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">43
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">04 Oct 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-pink">+26</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">04 Oct 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-pink-transparent text-pink">35%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-primary rounded-circle project-icon">
                                                                                        <i class="fe fe-grid"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Web
                                                                                                Design</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">11 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-primary">+15</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">11 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-primary-transparent text-primary">55%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-6">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="d-sm-flex align-items-center">
                                                                                    <span class="avatar avatar-md br-5 bg-secondary rounded-circle project-icon">
                                                                                        <i class="fe fe-cloud-lightning"></i>
                                                                                    </span>
                                                                                    <div class="ms-2 mt-sm-0 mt-2">
                                                                                        <h6 class="mb-1"> <a href="#" class="float-start">Cloud Computing</a> <span class="badge bg-light text-muted fs-11 mx-2">opened
                                                                                                yesterday</span> </h6>
                                                                                        <span class="text-muted border-end pe-2 fs-12 float-start">28
                                                                                            tasks</span>
                                                                                        <span class="ps-1 fs-12">11 Nov 19</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="stars-main me-2">
                                                                                        <i class="fa fa-star text-light star"></i>
                                                                                    </div>
                                                                                    <a aria-label="anchor" href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-start">
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-edit me-2 d-inline-flex"></i> Edit</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-share me-2 d-inline-flex"></i> Share</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-download me-2 d-inline-flex"></i> Clone</a>
                                                                                        <a class="dropdown-item" href="#"><i class="fe fe-trash me-2 d-inline-flex"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col">
                                                                                <p class="m-0 mb-2 fw-600">Members</p>
                                                                                <div class="avatar-list avatar-list-stacked">
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" ></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                                                    <span class="avatar avatar-sm avatar-radius bg-secondary">+12</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <p class="mb-0">
                                                                                    <span class="text-muted d-block">Due Date</span>
                                                                                    <span class="text-danger">11 Nov 21</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="text-center">
                                                                            <div class="progress progress-xs progress-custom1 mb-2">
                                                                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                                                            </div>
                                                                            <div class="float-end">
                                                                                <div class="fs-13">
                                                                                    <span class="badge bg-secondary-transparent text-secondary">65%</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--                                             
                                                End titulos 
                                            -->
                                            <!--                                             
                                                Inicio assets  
                                            -->


                                            <div class="tab-pane fade" id="assets">
                                                <div class="row p-5">
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/04.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/2.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Adam Cotter</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>France</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1456789867</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">30k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">7,345</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,785</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/05.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/3.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Dennis Trexy</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>United States</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 135792468</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">18k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">6,452</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">6,452</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/06.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/4.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Terrie Boaler</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Canada</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1567843567</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">25k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,765</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">4,876</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/07.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/5.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Dorothea Joicey</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Indonesia</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 135792468</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">34k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">1,789</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,456</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/08.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/6.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Donnell Farries</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Poland</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1456789456</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">46k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">2,567</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">3,345</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-4">
                                                        <div class="card user-card shadow-none">
                                                            <div class="user-image">
                                                                <img src="{{asset('build/assets/images/media/files/09.jpg')}}" class="card-img-top" alt="...">
                                                                <span class="avatar avatar-xl rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/7.jpg')}}" alt="" class="rounded-circle">
                                                                </span>
                                                            </div>
                                                            <div class="card-body mt-3 text-center">
                                                                <a href="{{url('profile')}}" class="fs-18 fw-bold d-block">Letizia Puncher</a>
                                                                <p class="text-muted text-center">Web Designer</p>
                                                                <span class="text-muted mx-3"><i class="fe fe-map-pin mx-2 text-secondary "></i>Ukraine</span>
                                                                <span class="text-muted"><i class="fe fe-phone mx-2 text-success "></i>+1 1234567893</span>
                                                                <div class="text-center mt-3">
                                                                    <a aria-label="anchor" class="btn btn-sm bg-primary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-facebook fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-secondary-transparent rounded-circle me-1" href="javascript:void(0);"><i class="mdi mdi-linkedin fs-16"></i></a>
                                                                    <a aria-label="anchor" class="btn btn-sm bg-success-transparent rounded-circle" href="javascript:void(0);"><i class="mdi mdi-twitter fs-16"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">24k</h5>
                                                                            <span class="fs-11">TOTAL POSTS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4 border-end text-center">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">5,765</h5>
                                                                            <span class="fs-11">FOLLOWERS</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-center p-3 text-dark">
                                                                            <h5 class="mb-1 fs-16 fw-600">7,345</h5>
                                                                            <span class="fs-11">FOLLOWING</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
	
	    <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/profile.js')

        <script>
            $(document).ready(function(){
                $('.phone-input').mask('(00) 00000-0000');
            });
        </script>

        <script>
                $(document).ready(function() {
                    // Aplica a máscara ao campo de entrada de CPF
                    $('.cpf-input').each(function() {
                        var cpf = $(this).val().replace(/\D/g, '');
                        var maskedCpf = '';

                        if (cpf.length === 11) {
                            maskedCpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                        } else {
                            maskedCpf = cpf;
                        }

                        $(this).val(maskedCpf).mask('000.000.000-00', {reverse: true});
                    });
                });
        </script>


@endsection
