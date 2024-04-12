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
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12 row">

                <div class="col-xl-3 col-md-6">
                    <a href="#address">
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
            </div>

            <x-v1.admin.form.defaultForm ::type="update" :action="route('creditRightsTitle.update', ['creditRightsTitle' => $title->id])"
                :dataForm="$dataForm"></x-v1.admin.form.defaultForm>


            {{-- @aqui --}}
            <x-v1.admin.modal.addCorporateUser :custom-request="['credit_rights_title_id' => $title->id]" :data-base="$title->users_titles"
                :routeUpdate="route('creditRightsTitle.add.user')"></x-v1.admin.modal.addCorporateUser>
            {{-- @aqui --}}
            <x-v1.admin.modal.addCorporateUser :custom-request="['credit_rights_title_id' => $title->id]" :data-base="$title->users_titles"
                :routeUpdate="route('creditRightsTitle.add.user')"></x-v1.admin.modal.addCorporateUser>


        </div>
    </div>

    <x-v1.admin.modal.createAddress :title-id="$title->id"></x-v1.admin.modal.createAddress>
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
