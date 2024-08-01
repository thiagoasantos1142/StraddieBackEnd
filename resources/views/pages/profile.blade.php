
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
                                                    <h5 class="mb-3">Informações pesssoais</h5>
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
                                                                                                        <input type="text" class="form-control" placeholder="entidade_type" value="{{$user->organization->organizationType->title}}">
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
                                               
                                            <div class="tab-pane fade" id="editprofile">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="">
                                                            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
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
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Bio</label>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <input type="text" class="form-control"  name="bio"  placeholder="Bio" value="{{$user->bio}}">
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
                                                                    
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer d-flex justify-content-end">                                                                    
                                                                    <button type="submit" class="btn ripple btn-primary w-sm">Salvar</button>
                                                                </div>                                                            
                                                            </form>
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
