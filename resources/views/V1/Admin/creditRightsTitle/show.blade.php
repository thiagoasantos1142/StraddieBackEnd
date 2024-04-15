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
                <li class="breadcrumb-item"><a href="javascript:void(0);">Títulos de direitos Creditórios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Título</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12 row">
                @if($creditRightsTitle->users_titles->count() == 0)
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
                @if($creditRightsTitle->crtDocuments)
                    @php
                        $documentsCount = $creditRightsTitle->crtDocuments->count();
                        Log::info("Número de documentos associados ao título: " . $documentsCount);
                    @endphp

                    @if($documentsCount == 0)
                        <div class="col-xl-3 col-md-6">
                            <a href="#documents">
                                <div class="card ribbone-card">
                                    <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                                class="fa fa-bolt"></i></span></div>
                                    <div class="card-body  p-6">
                                        <h6 class="card-subtitle mb-2 text-dark fw-bold">Complete o cadastro.</h6>
                                        <p class="card-text">Atribua um arquivo ao título</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endif
            </div>

            <x-v1.admin.form.defaultForm ::type="update" :action="route('creditRightsTitle.update', ['creditRightsTitle' => $creditRightsTitle->id])"
                :dataForm="$dataForm"></x-v1.admin.form.defaultForm>


            {{-- @aqui --}}
            <x-v1.admin.modal.addCorporateUser :custom-request="['credit_rights_title_id' => $creditRightsTitle->id]" :data-base="$creditRightsTitle->users_titles"
                :routeUpdate="route('creditRightsTitle.add.user')"></x-v1.admin.modal.addCorporateUser>

            <div class="col-xl-12" id="section-documents">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Arquivos</div>
                        <div class="d-flex">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFileModal"
                                class="btn btn-primary btn-block float-end"><i class="fa fa-plus-square me-2"></i>Adicionar
                                arquivo</a>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush" data-documents>
                        @foreach ($creditRightsTitle->crtDocuments as $document)
                            <li class="list-group-item" data-iddocuments="{{ $document->id }}">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="col-xl-10 col-md-12">
                                        <div class="card ribbone-card">
                                            <div class="card-body p-12">
                                                <h6 class="card-subtitle mb-2 text-dark fw-bold">{{ $document->file_name }}</h6>
                                                <p class="card-text">Data de Upload: {{ $document->created_at->format('d/m/Y H:i') }}</p>
                                                <form action="{{ route('download.file', $document->id) }}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Baixar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-list">
                                       
                                        <button class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                                            data-modaldocuments data-typeaction="delete" type="button"><i
                                                class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    @if ($creditRightsTitle->crtDocuments->count() == 0)
                        <div class="card-body">
                            <a href="" onclick="event.preventDefault();" class="col-md-6 mb-4 mb-md-0"
                                data-bs-toggle="modal" data-bs-target="#documents">
                                <div class="dropzone d-flex justify-content-center align-items-center">
                                    <p class="fs-4 mb-0">Adicione um arquivo +</p>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
                
            


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
                        <form action="{{ route('upload.crtDocument') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="fileInput" class="form-label">Selecione um arquivo</label>
                                <input class="form-control" type="file" id="fileInput" name="file">
                            </div>
                            <div class="mb-3">
                                <label for="credit_rights_title_id" class="form-label"></label>
                                <input class="form-control" value="{{$creditRightsTitle->id}}" type="hidden" id="credit_rights_title_id" name="credit_rights_title_id">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
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
