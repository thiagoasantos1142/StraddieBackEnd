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
            <x-v1.admin.modal.addCorporateUser :data-component="['credit_rights_title_id' => $creditRightsTitle->id]" :show-data="$creditRightsTitle->users_titles" :routeUpdate="route('creditRightsTitle.add.user')"
                :routeDelete="route('deleteUsersCreditRigtsTitle')"
                ::action-btnremove="delete"></x-v1.admin.modal.addCorporateUser>

            {{-- @aqui --}}
            <x-v1.admin.modal.addCorporateUser :data-component="['credit_rights_title_id' => $creditRightsTitle->id]" :show-data="$lawyers"
                :routeUpdate="route('crtLwyerController.store')" ::title-card="Atribuir um advogado" :routeDelete="route('deleteLawyerCreditRigtsTitle')" ::action-btnremove="delete"></x-v1.admin.modal.addCorporateUser>


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
