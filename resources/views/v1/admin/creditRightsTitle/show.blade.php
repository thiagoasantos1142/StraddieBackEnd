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
        @can('create-dueDiligences')
            <div class="card-header d-flex justify-content-between">
                <div class="card-title"></div>
                <div class="d-flex">
                    <a href="{{ route('due-Diligence.create', ['creditRightsTitleId' => $creditRightsTitle->id]) }}" class="btn btn-primary btn-block float-end my-2">
                        <i class="fa fa-plus-square me-2"></i>Iniciar Due Diligence
                    </a>
                </div>

            </div>
        @endcan
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Títulos de direitos Creditórios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Título</li>
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
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12 row">
                @if(!$creditRightsTitle->users_titles->count() && !$creditRightsTitle->organizations_titles->count())
                    <div class="col-xl-3 col-md-6">
                        <a href="#users">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                            class="fa fa-bolt"></i></span></div>
                                <div class="card-body  p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                    <p class="card-text">Atribua um usuario ao título</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif  
                @if(!$creditRightsTitle->crtLawyers->count())
                    <div class="col-xl-3 col-md-6">
                        <a href="#users">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                            class="fa fa-bolt"></i></span></div>
                                <div class="card-body  p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                    <p class="card-text">Atribua um advogado ao título</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif                 
            </div>
            

            <x-v1.admin.form.defaultForm 
                :type="'update'" 
                :action="route('creditRightsTitle.update', ['creditRightsTitle' => $creditRightsTitle->id])"
                :dataForm="$dataForm"
                :permission="'edit-crt'">
            </x-v1.admin.form.defaultForm>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <h5 class="mb-3 fw-semibold">Arquivos</h5>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFileModal">Adicionar Arquivo</button>
                    </div>
                </div>

                <div class="col-xxl-10 col-xl-9 col-sm-8">
                    <div class="row">                        
                        @foreach($creditRightsTitle->files as $file)
                            <div class="col-xl-2 col-sm-6">
                                <div class="card file-manager">                           
                                <a href="{{ route('download.file', ['id' => $file->id]) }}" target="_blank" class="stretched-link" ></a>
                                    <div class="card-body">
                                        <div class="file-dropdown file-icon">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-10"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Visualizar</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Baixar</a>
                                                <form action="{{ route('files.destroy', ['file' => $file->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fe fe-trash me-2"></i> Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="55px" enable-background="new 0 0 100 100" viewBox="0 0 100 100" id="pdf"><path fill="#00a5a2" d="M55,52c0.3,0.3,0.5,0.7,0.5,1.2c0,0.6-0.2,1-0.5,1.3c-0.4,0.3-0.9,0.4-1.6,0.4h-0.8v-3.3h1.1
                                                            C54.3,51.6,54.7,51.8,55,52z"></path><path fill="#00a5a2" d="M75.6,73.6H72c-0.6,0-1,0.5-1,1l0,7.3c0,2.7-2.2,5-4.9,5l-44.9,0.3c-2.4,0-4.4-1.6-4.9-3.9
                                                                c-0.1-0.3-0.1-0.7-0.1-1.1L16,35.9c0-0.3,0.3-0.6,0.6-0.6l18.8-0.1c3.3,0,5.9-2.7,5.9-5.9l-0.1-15.7c0-0.3,0.3-0.6,0.6-0.6
                                                                l23.8-0.2c2.7,0,5,2.2,5,4.9l0.1,18.5c0,0.6,0.5,1,1,1h3.6c0.6,0,1-0.5,1-1l-0.1-21.4c0-4.3-3.5-7.8-7.9-7.8L39.1,7.3
                                                                c-0.8,0-1.7,0.3-2.3,0.9L11.4,31.5c-0.7,0.7-1.1,1.6-1.1,2.5l0.2,51c0,4.3,3.5,7.8,7.9,7.8l50.6-0.1c4.3-0.2,7.8-3.7,7.8-8l0-10.1
                                                                C76.6,74.1,76.2,73.6,75.6,73.6z"></path><path fill="#00a5a2" d="M63.6,51.6h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M63.6,51.6
                                                                h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M86.7,41.9H42c-1.7,0-3,1.4-3,3v20.8c0,1.7,1.4,3,3,3h44.7
                                                                c1.7,0,3-1.4,3-3V44.9C89.7,43.2,88.4,41.9,86.7,41.9z M56.8,55.9c-0.8,0.6-1.8,1-3.2,1h-1v4h-2.4V49.7h3.6c1.4,0,2.4,0.3,3.1,0.9
                                                                c0.7,0.6,1.1,1.5,1.1,2.6C57.9,54.4,57.5,55.3,56.8,55.9z M67.7,59.4c-1,1-2.6,1.5-4.5,1.5H60V49.7h3.5c1.8,0,3.2,0.5,4.2,1.4
                                                                c1,1,1.5,2.3,1.5,4C69.2,57,68.7,58.4,67.7,59.4z M78,51.6h-4.1v2.9h3.8v1.9h-3.8v4.4h-2.3V49.7H78V51.6z M63.6,51.6h-1.3v7.3h1
                                                                c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z"></path></svg>
                                        </div>
                                        <p class="text-center mt-3">{{ $file->filename }}</p>
                                    </div>
                                </div>
                            </div>                        
                        @endforeach
                    </div>
                </div>
                                   
            @can('edit-crt')
                
                <x-v1.admin.modal.addCorporateUser :data-component="['credit_rights_title_id' => $creditRightsTitle->id]" :show-data="$userPfAndPj" :routeUpdate="route('creditRightsTitle.add.user')"
                    :routeDelete="route('deleteUsersCreditRigtsTitle')"
                    ::action-btnremove="delete"></x-v1.admin.modal.addCorporateUser>
           
            
                {{-- //a base de dados deve ser lawer --}}
                <x-v1.admin.modal.addCorporateUser :data-component="['credit_rights_title_id' => $creditRightsTitle->id]" :show-data="$lawyers" :search-dataroute="route('lawyer.index')"
                    :routeUpdate="route('crtLawyer.store')" ::title-card="Atribuir um advogado" :routeDelete="route('deleteLawyerCreditRigtsTitle')" ::action-btnremove="delete" ::loadScript></x-v1.admin.modal.addCorporateUser>
            @endcan

        </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="addFileModal" tabindex="-1" aria-labelledby="addFileModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFileModalLabel">Adicionar Novo Arquivo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulário para enviar o arquivo -->
                        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="fileInput" class="form-label">Selecione um arquivo</label>
                                <input class="form-control" type="file" id="fileInput" name="file">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Adiconar descrição ao documento</label>
                                <input class="form-control" type="description" id="description" name="description">
                            </div>
                            <div class="mb-3">
                                <label for="credit_rights_title_id" class="form-label"></label>
                                <input class="form-control" value="{{$creditRightsTitle->id}}" type="hidden" id="credit_rights_title_id" name="credit_rights_title_id">
                            </div>
                            <div class="mb-3">
                                <label for="type_id" class="form-label"></label>
                                <input class="form-control" value="21" type="hidden" id="type_id" name="type_id">
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label"></label>
                                <input class="form-control" value=1 type="hidden" id="category_id" name="category_id">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
@endsection

@section('modals')
    <x-v1.admin.modal.add-user-in-credit-rigth-title />
    <x-v1.admin.modal.create-user />
    <x-v1.admin.modal.create-laywer />
@endsection

@section('scripts')
    
    <script>
        $('#court_id').change(function() {
            var courtId = $(this).val();
            if (courtId) {
                $.ajax({
                    type: 'GET',
                    url: '/dashboard/varas/' +
                        courtId, // Rota para carregar varas com base no tribunal selecionado
                    success: function(data) {
                        $('#vara_id').empty();
                        $('#vara_id').append(
                            '<option value="">Selecione uma Vara do tribunal</option>');
                        $.each(data, function(key, value) {
                            $('#vara_id').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    }
                });
            } else {
                $('#vara_id').empty();
                $('#vara_id').append('<option value="">Selecione uma Vara do tribunal</option>');
            }
        });

        $('.js-example-basic-single').select2();
    </script>
@endsection
