
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
                                                    href="#highlights" aria-selected="true">Destaques</a>
                                                </li>
                                                <li class="nav-item m-1">
                                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                                    href="#additional-settings" aria-selected="true">Informações Adicionais</a>
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
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="btn-group mt-sm-0 mt-2">
                                                                                <button class="btn btn-primary">Ver usuário</button>
                                                                            </div>
                                                                            <div class="text-end">
                                                                                <button class="btn btn-secondary-light"><i class="ri-vip-crown-2-line"></i> Beneficiário Principal</button>
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
                                                                                                    <li><a class="dropdown-item" href="#">Visualizar</a></li>                                                                                        
                                                                                                    <li><a class="dropdown-item" href="#">Carregar arquivo</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Aprovar</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Rejeitar</a></li>
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
                                                                                <p class="fs-14 mb-1 fw-semibold">
                                                                                    @if( $lawyer->user )

                                                                                        {{ $lawyer->user->name }}
                                                                                    @else

                                                                                        {{ $lawyer->name }}

                                                                                    @endif
                                                                                </p>
                                                                                <p class="fs-12 text-muted mb-0">Título: {{$lawyer->title}}</p><br>
                                                                                <p class="fs-14 mb-1 fw-semibold">OAB: {{$lawyer->OAB_number}}</p>
                                                                            </div>                                                                                                                                     
                                                                        </div>
                                                                        <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                                            <div>
                                                                                <p class="fs-14 mb-2 fw-semibold">Dados pessoais</p>
                                                                                @if($lawyer->user)
                                                                                    <p class="fs-12 text-muted mb-0">Nome: {{$lawyer->user->name}}</p>                                                                        
                                                                                    <p class="fs-12 text-muted mb-0">CPF: {{$lawyer->user->cpf}}</p>                                                                    
                                                                                    <p class="fs-12 text-muted mb-0">Phone: {{$lawyer->user->contacts[1]->phone}}</p>                                                                    
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
                                                                                @if($file->lawyer_id == $lawyer->id)
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
                                                                                                    <li><a class="dropdown-item" href="#">Visualizar</a></li>                                                                                        
                                                                                                    <li><a class="dropdown-item" href="#">Carregar arquivo</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Aprovar</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Rejeitar</a></li>
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
                                                                                <b><p class="fs-14 text-muted mb-0">Tipo do título:                        </b>{{$creditRightsTitle->class}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Classe:                                </b>{{$creditRightsTitle->class}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Numero do processo:                   </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Origem do débito:                     </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Natureza do Crédito:                  </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0d">Natureza do Obrigação:                </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Orgão Julgador:                       </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Vara do tribunal:                     </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Data da distribuíção do processo:     </b>{{$creditRightsTitle->process_number}}</p><br>
                                                                                <b><p class="fs-14 text-muted mb-0">Numero do processo:                   </b>{{$creditRightsTitle->process_number}}</p><br>
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
                                                                                @if($file->id == $creditRightsTitle->id)
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
                                                                                                    <li><a class="dropdown-item" href="#">Visualizar</a></li>                                                                                        
                                                                                                    <li><a class="dropdown-item" href="#">Carregar arquivo</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Aprovar</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Rejeitar</a></li>
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
                                                <div class="tab-pane fs-13 p-0" id="additional-settings"
                                                    role="tabpanel">
                                                    <ul class="list-group list-group-flush list-unstyled">
                                                    
                                                        
                                                        <li class="list-group-item">
                                                            
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fs-13 p-0" id="highlights"
                                                    role="tabpanel">
                                                    <ul class="list-group list-group-flush list-unstyled">
                                                        <li class="list-group-item">
                                                            <div class="row gx-5">
                                                                <div class="col-xl-4">
                                                                    <p class="fs-16 mb-1 fw-semibold">Logging In</p>
                                                                    <p class="fs-12 mb-0 text-muted">Security settings related to logging into our email account and taking down account if any mischevious action happended.</p>
                                                                </div>
                                                                <div class="col-xl-8">
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                        <div class="mail-security-settings">
                                                                            <p class="fs-14 mb-1 fw-semibold">Max Limit for login attempts</p>
                                                                            <p class="fs-12 mb-0 text-muted">Account will freeze for 24hrs while attempt to login with wrong credentials for selected number of times</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                        <div>
                                                                            <p class="fs-14 mb-1 fw-semibold">Account Freeze time management</p>
                                                                            <p class="fs-12 mb-0 text-muted">You can change the time for the account freeze when attempts for </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row gx-5">
                                                                <div class="col-xl-4">
                                                                    <p class="fs-16 mb-1 fw-semibold">Password Requirements</p>
                                                                    <p class="fs-12 mb-0 text-muted">Security settings related to password strength.</p>
                                                                </div>
                                                                <div class="col-xl-8">
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 flex-wrap">
                                                                        <div class="mail-security-settings">
                                                                            <p class="fs-14 mb-1 fw-semibold">Minimun number of characters in the password</p>
                                                                            <p class="fs-12 mb-0 text-muted">There should be a minimum number of characters for a password to be validated that shouls be set here.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                        <div>
                                                                            <p class="fs-14 mb-1 fw-semibold">Contain A Number</p>
                                                                            <p class="fs-12 mb-0 text-muted">Password should contain a number.</p>
                                                                        </div>
                                                                        <div class="mt-3 mt-sm-0">
                                                                            <div class="custom-toggle-switch float-sm-end">
                                                                                <input id="password-number" name="toggleswitchsize6" type="checkbox">
                                                                                <label for="password-number" class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                        <div>
                                                                            <p class="fs-14 mb-1 fw-semibold">Contain A Special Character</p>
                                                                            <p class="fs-12 mb-0 text-muted">Password should contain a special Character.</p>
                                                                        </div>
                                                                        <div class="mt-3 mt-sm-0">
                                                                            <div class="custom-toggle-switch float-sm-end">
                                                                                <input id="password-special-character" name="toggleswitchsize7" type="checkbox" checked>
                                                                                <label for="password-special-character" class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                                        <div>
                                                                            <p class="fs-14 mb-1 fw-semibold">Atleast One Capital Letter</p>
                                                                            <p class="fs-12 mb-0 text-muted">Password should contain atleast one capital letter.</p>
                                                                        </div>
                                                                        <div class="mt-3 mt-sm-0">
                                                                            <div class="custom-toggle-switch float-sm-end">
                                                                                <input id="password-capital" name="toggleswitchsize8" type="checkbox" checked>
                                                                                <label for="password-capital" class="label-primary mb-1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-sm-flex d-block align-items-top justify-content-between mt-3 flex-wrap">
                                                                        <div>
                                                                            <p class="fs-14 mb-1 fw-semibold">Maximun Password Length</p>
                                                                            <p class="fs-12 mb-0 text-muted">Maximum password lenth should be selected here.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row gx-5">
                                                                <div class="col-xl-4">
                                                                    <p class="fs-16 mb-1 fw-semibold">Unknown Chats</p>
                                                                    <p class="fs-12 mb-0 text-muted">Security settings related to unknown chats.</p>
                                                                </div>
                                                                <div class="col-xl-8">
                                                                    <div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="unknown-messages-default" id="unknown-messages-show1">
                                                                            <label class="form-check-label" for="unknown-messages-show1">
                                                                                Show
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="unknown-messages-default" id="unknown-messages-hide2" checked="">
                                                                            <label class="form-check-label" for="unknown-messages-hide2">
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
