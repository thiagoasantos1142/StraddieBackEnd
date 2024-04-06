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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dados do Advogado</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lawyer.store') }}">
                            @csrf
                            <div class="">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="name" class="form-label">Nome</label>
                                        <input type="text"
                                            class="form-control  @error('name') is-invalid @enderror" id="name"
                                            name="name" placeholder="Nome"
                                            value="{{ old('name') ?? '' }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> 
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text"
                                            class="form-control @error('title') is-invalid @enderror" id="title"
                                            name="title" placeholder="Titulo"
                                            value="{{ old('title') ?? '' }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="OAB_number" class="form-label">Numero da OAB</label>
                                        <input type="text" class="form-control @error('OAB_number') is-invalid @enderror"
                                            id="OAB_number" name="OAB_number" placeholder="Numero da OAB"
                                            value="{{ old('OAB_number') ?? '' }}">
                                        @error('OAB_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="UF" class="form-label">UF</label>
                                        <input type="text"
                                            class="form-control @error('UF') is-invalid @enderror"
                                            id="UF" name="UF" placeholder="UF"
                                            value="{{ old('UF') ?? '' }}">
                                        @error('UF')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>                                   
                                   
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-4 mb-0" type="submit">Salvar Advogado</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
