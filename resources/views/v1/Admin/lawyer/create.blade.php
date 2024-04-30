@extends('layouts.master')

@section('styles')
    <!-- noui Slider -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/nouislider/nouislider.min.css') }}">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Adicionar Advogado</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Advogados</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Advogado</li>
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
    <div class="main-container container-fluid">
        <div class="row">
            <x-v1.admin.form.defaultForm :action="route('lawyer.store')"
                :dataForm="$dataForm"></x-v1.admin.form.defaultForm>
        </div>
    </div>
@endsection

@section('modals')
    <!-- File-Details Modal -->
    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">File Details</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-5">
                            <div>
                                <img src="{{ asset('build/assets/images/media/33.jpg') }}" class="rounded-2"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">File Name</td>
                                            <td>Media Image</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">File Size</td>
                                            <td>11.45GB</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Uploaded date</td>
                                            <td>03-11-2022</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Uploaded by</td>
                                            <td>Michael Starc</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">File format</td>
                                            <td>psd</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Image height</td>
                                            <td>350px</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Image Width</td>
                                            <td>350px</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">File location</td>
                                            <td>storage/documents/images/File.psd</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- File-Details Modal -->
@endsection

@section('scripts')
    <!-- noUiSlider JS -->
    <script src="{{ asset('build/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/wnumb/wNumb.min.js') }}"></script>
    @vite('resources/assets/js/nouislider.js')
@endsection
