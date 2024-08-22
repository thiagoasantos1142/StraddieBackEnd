
@extends('layouts.master')

@section('styles')



@endsection

@section('content')


	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex justify-content-center border-bottom mb-4">
                        <h1 class="page-title text-center">DueDiligence Status:     
                                                    <button  type="button" 
                                                             class='{{
                                                                        ($dueDiligence->status_id == 1 ? "btn btn-outline-primary" :
                                                                        ($dueDiligence->status_id == 2 ? "btn btn-secondary-primary" :
                                                                        ($dueDiligence->status_id == 3 ? "btn btn-outline-success" :
                                                                        ($dueDiligence->status_id == 4 ? "btn btn-outline-danger" :
                                                                        "btn btn-outline-warning"))))
                                                                    }}
                                                                    '> 
                                                        {{$dueDiligence->status->title??'Sem informação'}}</button>
                        </h1>
                       
                        <ol class="breadcrumb">
                                
                        </ol>
                    </div> 

                                
                
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
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-xl-10 col-xxl-10">
                                                         
                                <form method="POST" action="{{ route('dueDiligence.aprove', ['id' => $dueDiligence->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                   
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
                                                <li class="nav-item m-1">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                    href="#contracts-settings" aria-selected="true">Contratos</a>
                                                </li>
                                                @if($dueDiligence->status_id == 1)
                                                    <li class="nav-item m-1">
                                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                        href="#highlights" aria-selected="true">Parametros para a Geração do Ativo</a>
                                                    </li>
                                                @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="tab-content">                                                
                                                <div class="tab-pane show active fs-13 p-5" id="personal-info" role="tabpanel">                                                     
                                                    @foreach($users as $user)   
                                                        <div class="row gy-3">                                                                                                         
                                                            <div class="col-xl-7">
                                                                <div class="card custom-card shadow-none mb-0 border">
                                                                    <div class="card-body">                                                                   
                                                                        <div class="d-sm-flex align-items-center flex-wrap gap-2">
                                                                            <div class="mb-0 me-5 d-flex align-items-center">                                                                
                                                                                <div class="ms-3">
                                                                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                                                                    <p class="mb-0">{{ $user->title }}</p>
                                                                                    @if($user->name == '' || $user->cpf == '' || $user->email == '' || $user->phone == '' || $user->addresses->count() == 0)
                                                                                        <div class="row">
                                                                                            <button type="button" class="btn btn-secondary-gradient"><i class="ri-vip-crown-2-line"></i> Cadastro inclompleto</button>
                                                                                        </div>
                                                                                    @endif   
                                                                                </div>
                                                                                
                                                                            </div>
                                                                       
                                                                            <div class="btn-group mt-sm-0 mt-2">
                                                                                <a href="{{ route('users.show', ['user' => $user->id]) }}">
                                                                                    <button class="btn btn-lg btn-outline-primary "
                                                                                        type="button">Ver usuário</i></button>
                                                                                </a>
                                                                            </div>
                                                                                                                                               
                                                                        </div>
                                                                        <br>

                                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                            <div>
                                                                                <p class="fs-14 mb-1 fw-semibold">Dados pessoais</p>                                                                                
                                                                                <label for="email-address" class="form-label"><b>E-mail: </b>{{$user->email }}</label> 
                                                                                <label for="email-address" class="form-label"><b>CPF: </b>{{$user->cpf }}</label>   
                                                                                @foreach($user->contacts as $contact)
                                                                                        <label for="phone" class="form-label"><b>Telefone: </b>{{$contact->phone }}</label>  
                                                                                @endforeach                                                                    
                                                                                    
                                                                                @if($user->addresses->count() == 0)
                                                                                        <div class="ms-3">
                                                                                            <button class="btn btn-secondary-light"><i class="fa fa-map-marker" aria-hidden="true"></i> Nenhum endereço cadastrado</button>                                                          
                                                                                        </div>
                                                                                @else
                                                                                    @foreach($user->addresses as $address)
                                                                                        <label for="street-address" class="form-label"><b>Rua: </b>{{$address->street }}</label>                                                                                                                       
                                                                                        <label for="neighborhood-address" class="form-label"><b>Bairro: </b>{{$address->neighborhood }}</label>                                                                                                                       
                                                                                        <label for="city-address" class="form-label"><b>Cidade: </b>{{$address->city->title }}</label>                                                                                                                       
                                                                                            
                                                                                    @endforeach
                                                                                @endif                                                                              
                                                                            </div>                                                                   
                                                                        </div>                                                       
                                                                    </div>
                                                                </div>                                                            
                                                            </div>     
                                                            <div class="col-xl-5">
                                                                <div class="card custom-card shadow-none mb-0 border">
                                                                    <div class="card-header justify-content-between d-sm-flex d-block">
                                                                        <div class="card-title">Documentação: <p class="card-text  text-muted">{{$user->name}}</p></div>
                                                                        <div class="mt-sm-0 mt-2">
                                                                            <button class="btn btn-sm btn-primary">Análise de Documentos</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <ul class="list-group">
                                                                            @foreach($files as $file)
                                                                                @if($file->user_id == $user->id)
                                                                                    <li class="list-group-item">
                                                                                        <div class="d-flex align-items-top">
                                                                                            @if($file->status_id == 1 )
                                                                                                <div class="lh-1"> <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#05c3fb" d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 2 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#fad383" d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z"></path><circle cx="12" cy="16" r="1" fill="#f7b731"></circle><path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 3 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#13bfa6" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"></path><path fill="#71d8c9" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 4 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span></div>     
                                                                                            @endif
                                                                                            <div class="lh-1 flex-fill">
                                                                                                <p class="mb-1">
                                                                                                    <span class="fw-semibold">{{$file->type->title}}</span>
                                                                                                    <div class="d-sm-flex align-items-center">
                                                                                                        <div>                                                                                                
                                                                                                            <p class="card-text  text-muted">{{$file->status->title}}</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </p>                                                                                    
                                                                                            </div>
                                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                                </a>
                                                                                                <ul class="dropdown-menu">
                                                                                                    <li><a class="dropdown-item view-button" data-file-id="{{ $file->id }}">Visualizar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item upload-modal-button" data-bs-toggle="modal" data-bs-target="#uploadModal" data-file-id="{{ $file->id }}">Carregar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item aprove-button" data-file-id="{{ $file->id }}">Aprovar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item reject-button" data-file-id="{{ $file->id }}">Rejeitar Arquivo</a></li>  
                                                                                                   
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>                                                      
                                                        </div>                                                         
                                                                     
                                                    @endforeach                                                   
                                                </div>
                                                <div class="tab-pane fs-13 p-5" id="lawyer-settings" role="tabpanel">                                                   
                                                    @foreach($lawyers as $lawyer)
                                                        <div class="row gy-3">                                                     
                                                            <div class="col-xl-7">
                                                                <div class="card custom-card shadow-none mb-0 border">
                                                                    <div class="card-body">                                                                      
                                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">                                                                        
                                                                            <div>                                                                        
                                                                                <p class="fs-14 mb-1 fw-semibold">{{ $lawyer->user->name ?? 'vazio'}}</p>
                                                                                <p class="fs-12 text-muted mb-0">Título: {{$lawyer->title ?? 'vazio'}}</p><br>
                                                                                <p class="fs-14 mb-1 fw-semibold">OAB: {{$lawyer->OAB_number ?? 'Vazio'}}</p>
                                                                                @if($lawyer->user->name == '' || $lawyer->user->cpf == '' || $lawyer->user->email == '' || $lawyer->user->phone == '' || $lawyer->user->addresses->count() == 0)
                                                                                    <div class="row">
                                                                                        <button type="button" class="btn btn-secondary-gradient"><i class="ri-vip-crown-2-line"></i> Cadastro inclompleto</button>
                                                                                    </div>
                                                                                @endif  
                                                                               
                                                                            </div>  
                                                                            <div class="btn-group mt-sm-0 mt-2">
                                                                                    <a href="{{ route('users.show', ['user' => $lawyer->user->id]) }}">
                                                                                        <button class="btn btn-lg btn-outline-primary "
                                                                                            type="button">Ver usuário</i></button>
                                                                                    </a>
                                                                                </div>                                                                                                                                   
                                                                        </div>
                                                                       
                                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                            <div>
                                                                                <p class="fs-14 mb-2 fw-semibold">Dados pessoais</p>
                                                                                @if($lawyer->user)
                                                                                    <p class="fs-12 text-muted mb-0">Nome: {{$lawyer->user->name}}</p>                                                                        
                                                                                    <p class="fs-12 text-muted mb-0">CPF: {{$lawyer->user->cpf}}</p> 
                                                                                    @foreach ( $lawyer->user->contacts as $contact )
                                                                                        <p class="fs-12 text-muted mb-0">Phone: {{$contact->phone ?? 'vazio'}}</p> 
                                                                                    @endforeach                                                                  
                                                                                                                                                      
                                                                                    <p class="fs-12 text-muted mb-0">Email: {{$lawyer->user->email}}</p> 
                                                                                @else   
                                                                                    <p class="fs-12 text-muted mb-0">Sem dados pessoais cadastrados.</p>
                                                                                @endif
                                                                            </div>                                                                    
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-xl-5">
                                                                <div class="card custom-card shadow-none mb-0 border">
                                                                    <div class="card-header justify-content-between d-sm-flex d-block">
                                                                        <div class="card-title">Documentação: <p class="card-text  text-muted">{{$lawyer->name}}</p></div>
                                                                        <div class="mt-sm-0 mt-2">
                                                                            <button class="btn btn-sm btn-primary">Análise de Documentos</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <ul class="list-group">
                                                                            @foreach($files as $file)
                                                                                @if($file->user_id == $lawyer->user_id)
                                                                                    <li class="list-group-item">
                                                                                        <div class="d-flex align-items-top">
                                                                                            @if($file->status_id == 1 )
                                                                                                <div class="lh-1"> <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#05c3fb" d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 2 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#fad383" d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z"></path><circle cx="12" cy="16" r="1" fill="#f7b731"></circle><path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 3 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#13bfa6" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"></path><path fill="#71d8c9" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 4 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span></div>     
                                                                                            @endif
                                                                                            <div class="lh-1 flex-fill">
                                                                                                <p class="mb-1">
                                                                                                    <span class="fw-semibold">{{$file->type->title}}</span>
                                                                                                    <div class="d-sm-flex align-items-center">
                                                                                                        <div>                                                                                                
                                                                                                            <p class="card-text  text-muted">{{$file->status->title}}</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </p>                                                                                    
                                                                                            </div>
                                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                                </a>
                                                                                                <ul class="dropdown-menu">
                                                                                                    <li><a class="dropdown-item view-button" data-file-id="{{ $file->id }}">Visualizar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item upload-modal-button" data-bs-toggle="modal" data-bs-target="#uploadModal" data-file-id="{{ $file->id }}">Carregar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item aprove-button" data-file-id="{{ $file->id }}">Aprovar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item reject-button" data-file-id="{{ $file->id }}">Rejeitar Arquivo</a></li>  
                                                                                                   
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>                                                                                                                 
                                                        @endforeach                                                           
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="card custom-card shadow-none mb-0 border">
                                                                <div class="card-header justify-content-between d-sm-flex d-block">
                                                                    <div class="card-title">Documentação, título ID: {{$creditRightsTitle->id}} </p></div>
                                                                    <div class="mt-sm-0 mt-2">
                                                                            <button class="btn btn-sm btn-primary">Análise de Documentos</button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                        <ul class="list-group">
                                                                            @foreach($files as $file)
                                                                                @if($file->credit_rights_title_id == $creditRightsTitle->id)
                                                                                    <li class="list-group-item">
                                                                                        <div class="d-flex align-items-top">
                                                                                            @if($file->status_id == 1 )
                                                                                                <div class="lh-1"> <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#05c3fb" d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 2 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#fad383" d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z"></path><circle cx="12" cy="16" r="1" fill="#f7b731"></circle><path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 3 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24"><path fill="#13bfa6" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"></path><path fill="#71d8c9" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"></path></svg></span></div>
                                                                                            @elseif($file->status_id == 4 )
                                                                                                <div class="lh-1"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span></div>     
                                                                                            @endif
                                                                                            <div class="lh-1 flex-fill">
                                                                                                <p class="mb-1">
                                                                                                    <span class="fw-semibold">{{$file->type->title}}</span>
                                                                                                    <div class="d-sm-flex align-items-center">
                                                                                                        <div>                                                                                                
                                                                                                            <p class="card-text  text-muted">{{$file->status->title}}</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </p>                                                                                    
                                                                                            </div>
                                                                                            <div class="dropdown mt-sm-0 mt-2">
                                                                                                <a href="#" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    <i class="fe fe-more-vertical"></i>
                                                                                                </a>
                                                                                                <ul class="dropdown-menu">
                                                                                                    <li><a class="dropdown-item view-button" data-file-id="{{ $file->id }}">Visualizar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item upload-modal-button" data-bs-toggle="modal" data-bs-target="#uploadModal" data-file-id="{{ $file->id }}">Carregar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item aprove-button" data-file-id="{{ $file->id }}">Aprovar Arquivo</a></li>  
                                                                                                    <li><a class="dropdown-item reject-button" data-file-id="{{ $file->id }}">Rejeitar Arquivo</a></li>  
                                                                                                   
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>                                                          
                                                    </div>
                                                </div>
                                                @if($dueDiligence->status_id == 1)
                                                    <div class="tab-pane fs-13 p-0" id="highlights"
                                                        role="tabpanel">
                                                        <ul class="list-group list-group-flush list-unstyled">
                                                            <li class="list-group-item">
                                                                <div class="row gx-5">
                                                                    <div class="col-xl-4">
                                                                        <p class="fs-16 mb-1 fw-semibold">Parametros do Ativo disponível</p>
                                                                        <p class="fs-12 mb-0 text-muted">Configuração para configuração e geração do Ativo disponível.</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                            <div class="mail-security-settings">
                                                                                <p class="fs-14 mb-1 fw-semibold">Disponibilidade do valor Principal</p>
                                                                                <p class="fs-12 mb-0 text-muted">Informe se o valor Principal do título está disponivel para receber ofertas?</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-3 mt-sm-0">
                                                                            <div class="custom-toggle-switch float-sm-end">
                                                                                <input id="main_credit_for_sale" name="main_credit_for_sale" type="checkbox">
                                                                                <label for="main_credit_for_sale" class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Campos adicionais a serem exibidos/ocultados -->
                                                                        <div id="campos-adicionais" style="display: none;">
                                                                            <!-- Coloque os campos adicionais aqui -->
                                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">Informe o valor atualizado informado ao Beneficiário:</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Qual o valor atualizado do titulo?</p>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">R$</span>
                                                                                    <input type="number" id="main_value" name="main_value" class="form-control" placeholder="Informe o valor atualizado do titulo">
                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                    
                                                                    </div>                                                               
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row gx-5">
                                                                    <div class="col-xl-4">
                                                                        <p class="fs-16 mb-1 fw-semibold">Honorários</p>
                                                                        <p class="fs-12 mb-0 text-muted">Informações sobre os vaores de Honorários.</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">Disponíveis para receber ofertas</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Os valores de Honorários estão disponíveis para receber ofertas?</p>
                                                                                </div>                                                                                                                                                  
                                                                        </div>
                                                                    
                                                                        <div class="mt-3 mt-sm-0">
                                                                            <div class="custom-toggle-switch float-sm-end">
                                                                                <input id="contractual_fees_for_sale" name="contractual_fees_for_sale" type="checkbox">
                                                                                <label for="contractual_fees_for_sale" class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Campos adicionais a serem exibidos/ocultados -->
                                                                        <div id="fields-fee_value" style="display: none;">
                                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                                <div class="mail-security-settings">
                                                                                    <p class="fs-14 mb-1 fw-semibold">Os honorários estão destacados no Título?</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Informe se os honorários estão destacados na Ação Judicial</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-3 mt-sm-0">
                                                                                <div class="custom-toggle-switch float-sm-end">
                                                                                    <input id="highlighted_contractual_fee" name="highlighted_contractual_fee" type="checkbox">
                                                                                    <label for="highlighted_contractual_fee" class="label-primary mb-1"></label>
                                                                                </div>
                                                                            </div>                                                                        
                                                                        </div>
                                                                        <div id="fields-fee_value2" style="display: none;">
                                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">Informe a porcentagem dos Honorários</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Qual o percentual dos honorários Advocatícios?</p>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <input type="number" id="percentage_fee" name="percentage_fee" class="form-control" placeholder="Informe o percentual" min="0" max="100">
                                                                                    <span class="input-group-text">%</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                                <div>
                                                                                    <p class="fs-14 mb-1 fw-semibold">Informe o valor atualizado informado ao cliente:</p>
                                                                                    <p class="fs-12 mb-0 text-muted">Qual o valor atualizado dos honorários?</p>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">R$</span>
                                                                                    <input type="number" id="fee_value" name="fee_value" class="form-control" placeholder="Informe o valor atualizado dos honorários">
                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>  
                                                @endif
                                            </div>
                                    </div>
                                        @if($dueDiligence->status_id == 1)
                                            <div class="card-footer">
                                                <div class="float-end">
                                                <!-- Botão de cancelar a due diligence -->
                                                <button type="button" " class="btn btn-danger" onclick="confirmCancellation({{ $dueDiligence->id }})">Cancelar Due Diligence</button>


                                                    <!-- Botão de salvar -->
                                                    <button type="submit" onclick="return verifyFields();" class="btn btn-primary">
                                                        Avançar
                                                    </button>


                                                        
                                                    </button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->
                       
                        <!-- Conteúdo do arquivo -->
                           
                        

                    </div>
                    <!-- CONTAINER CLOSED -->
                    <!-- Modal -->
                    <div class="modal fade" id="uploadModal-" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="uploadModalLabel">Carregar Arquivo: </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulário para carregar o arquivo -->
                                    <form action="{{ route('uploadFile') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="fileId" id="fileId" value="">
                                        <div class="mb-3">
                                            <label for="file" class="form-label">Selecione o arquivo</label>
                                            <input type="file" class="form-control" id="file" name="file">
                                        </div>
                                        <div class="modal-body">
                                            <!-- Exibindo o fileId -->
                                            <p>: <span id="fileId"></span></p>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

     
                  
@endsection

@section('scripts')
	
	    <!-- Internal Settngs JS -->
        @vite('resources/assets/js/setting.js')

        <script>
            $(document).ready(function() {
                // Adiciona um evento de clique aos botões que abrem o modal
                $('.upload-modal-button').click(function() {
                    // Captura o ID do arquivo associado ao botão clicado
                    var fileId = $(this).data('file-id');
                
                    $('#fileId').text(fileId);            
                    $('#fileId').val(fileId); // Definir fileId como valor do input hidden

                    $('#uploadModal-').modal('show');

                });

                // Adicione um evento de clique para os elementos com a classe view-modal-button
                $('.view-button').on('click', function() {
                    // Obtenha o fileId do atributo data-file-id
                    var fileId = $(this).data('file-id');
                    // Para redirecionar para a rota de download
                    window.open("{{ route('download.file', ['id' => ':fileId']) }}".replace(':fileId', fileId), '_blank');

                });

                 // Adicione um evento de clique para os elementos com a classe view-modal-button
                 $('.aprove-button').on('click', function() {
                    // Obtenha o fileId do atributo data-file-id
                    var fileId = $(this).data('file-id');
                    // Para redirecionar para a rota de aprove
                    window.location.href = "{{ route('aprove.file', ['id' => ':fileId']) }}".replace(':fileId', fileId);
        
                });

                 // Adicione um evento de clique para os elementos com a classe view-modal-button
                 $('.reject-button').on('click', function() {
                    // Obtenha o fileId do atributo data-file-id
                    var fileId = $(this).data('file-id');
                    // Para redirecionar para a rota de rejeitar
                    window.location.href = "{{ route('reject.file', ['id' => ':fileId']) }}".replace(':fileId', fileId);
        
                });


            });

        </script>

        <script>
            // Captura o elemento do toggle switch
            const toggleSwitch = document.getElementById('main_credit_for_sale');

            // Captura o elemento dos campos adicionais
            const camposAdicionais = document.getElementById('campos-adicionais');

            // Adiciona um event listener para quando o toggle switch for clicado
            toggleSwitch.addEventListener('change', function() {
              
                // Verifica se o toggle switch está marcado ou não
                if (this.checked) {
                    // Se estiver marcado, exibe os campos adicionais
                    camposAdicionais.style.display = 'block';
                } else {
                    // Se não estiver marcado, oculta os campos adicionais
                    camposAdicionais.style.display = 'none';
                }
            });
        </script>

        <script>
            // Captura o elemento do toggle switch
            const toggleSwitch2 = document.getElementById('contractual_fees_for_sale');

            // Captura o elemento dos campos adicionais
            const fieldsFeeValue = document.getElementById('fields-fee_value');

              // Adiciona um event listener para quando o toggle switch for clicado
              toggleSwitch2.addEventListener('change', function() {
                
                // Verifica se o toggle switch está marcado ou não
                if (this.checked) {
                    // Se estiver marcado, exibe os campos adicionais
                    fieldsFeeValue.style.display = 'block';
                } else {
                    // Se não estiver marcado, oculta os campos adicionais
                    fieldsFeeValue.style.display = 'none';
                }
            });
            
        </script>

        <script>
            // Função para verificar se pelo menos um dos campos main_credit_for_sale ou contractual_fees_for_sale está marcado
            function verifyFields() {
               
                var toggle1 = document.getElementById('main_credit_for_sale').checked;
                var toggle2 = document.getElementById('contractual_fees_for_sale').checked;

                
                if(toggle1 && !toggle2){
                    // Verifica se o campo main_value está preenchido
                    var mainValue = document.getElementById('main_value').value.trim();
                    
                    if (mainValue !== '') {
                        // Se o campo main_value estiver preenchido, permite o avanço
                        return true;
                    }else{
                        // Se o campo main_value não  estiver preenchido, não permite o avanço
                        alert('Por favor, preencha o campo: Qual o valor atualizado do titulo?.');
                        return false;
                        
                    }
                }else if (toggle2 && !toggle1){
                     // Verifica se o campo percentage_fee está preenchido
                     var percentageFee = document.getElementById('percentage_fee').value.trim();

                    if (percentageFee !== '') {
                        // Se o campo fee_value estiver preenchido, permite o avanço
                        var feeValue = document.getElementById('fee_value').value.trim();

                        if (feeValue !== '') {

                            return true;

                        }else{

                            // Se o campo main_value não  estiver preenchido, não permite o avanço
                            alert('Por favor, preencha o campo: Valor atualizado para os  Honorários?.');
                            return false;

                        }
                    }else{
                        // Se o campo main_value não  estiver preenchido, não permite o avanço
                        alert('Por favor, preencha o campo: Qual o percentual dos Honorários?.');
                        return false;
                        
                    }
                }else if (toggle2 && toggle1){
                    alert('aqui.');
                    // Verifica se o campo main_value está preenchido
                    var mainValue = document.getElementById('main_value').value.trim();
                    // Verifica se o campo percentage_fee está preenchido
                    var percentageFee = document.getElementById('percentage_fee').value.trim();
                    // Se o campo fee_value estiver preenchido, permite o avanço
                    var feeValue = document.getElementById('fee_value').value.trim();
                    
                    if (mainValue == '') {
                         // Se o campo main_value não  estiver preenchido, não permite o avanço
                         alert('Por favor, preencha o campo: Valor atualizado para o saldo principal?.');
                        return false;
                    }

                    if (feeValue !== '') {
                        // Se o campo main_value não  estiver preenchido, não permite o avanço
                        alert('Por favor, preencha o campo: Valor atualizado para os Honorários?.');
                            return false;                        
                    }

                    
                    if (percentageFee !== '') {
                         // Se o campo main_value não  estiver preenchido, não permite o avanço
                         alert('Por favor, preencha o campo: Qual o percentual dos Honorários?.');
                        return false;                     
                    }

                    return true;

                }else {

                     // Se nenhum togle foi selecionado
                     alert('Por favor, selecione pelo menos um dos parametros e informe os Valores para o vencimento principal ou para os honorários.');

                     return false;         
                }
                
               
            }
        </script>



        <script>
            function confirmCancellation(dueDiligenceId) {
                var confirmation = confirm("Tem certeza que deseja cancelar esta Due Diligence?");
                if (confirmation) {
                    // Enviar uma solicitação POST usando AJAX
                    axios.post('/dashboard/dueDiligence/cancel/' + dueDiligenceId)
                        .then(function(response) {
                            // Lidar com a resposta se necessário
                            console.log(response.data);
                            // Redirecionar ou fazer qualquer outra ação necessária após o cancelamento
                            window.location.reload(); // Recarregar a página como exemplo
                        })
                        .catch(function(error) {
                            // Lidar com erros de solicitação, se houver
                            console.error(error);
                        });
                }
            }
        </script>


        <script>
            // Captura o elemento do toggle switch
            const toggleSwitch3 = document.getElementById('highlighted_contractual_fee');

            // Captura o elemento dos campos adicionais
            const fieldsFeeValue2 = document.getElementById('fields-fee_value2');

              // Adiciona um event listener para quando o toggle switch for clicado
              toggleSwitch3.addEventListener('change', function() {
                
                // Verifica se o toggle switch está marcado ou não
                if (this.checked) {
                    // Se estiver marcado, exibe os campos adicionais
                    fieldsFeeValue2.style.display = 'block';
                } else {
                    // Se não estiver marcado, oculta os campos adicionais
                    fieldsFeeValue2.style.display = 'none';
                }
            });
            
        </script>
@endsection
