@extends('layouts.master')

@section('styles')
    <!-- noui Slider -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/nouislider/nouislider.min.css') }}">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Adicionar empresa</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Empresas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar empresa</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dados da empresa</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('organization.store') }}">
                            @csrf
                            <div class="">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="razao" class="form-label">Razão social</label>
                                        <input type="text"
                                            class="form-control  @error('razao_social') is-invalid @enderror" id="razao"
                                            name="razao_social" placeholder="Razão social"
                                            value="{{ old('razao_social') ?? '' }}">
                                        @error('razao_social')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="fantasy" class="form-label">Nome fantasia</label>
                                        <input type="text"
                                            class="form-control @error('nome_fantasia') is-invalid @enderror" id="fantasy"
                                            name="nome_fantasia" placeholder="Nome fantasia"
                                            value="{{ old('nome_fantasia') ?? '' }}">
                                        @error('nome_fantasia')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="cnpj" class="form-label">Cnpj</label>
                                        <input type="text" class="form-control @error('cnpj') is-invalid @enderror"
                                            id="cnpj" name="cnpj" placeholder="cnpj"
                                            value="{{ old('cnpj') ?? '' }}">
                                        @error('cnpj')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="estadual" class="form-label">Inscrição estadual (não
                                            obrigatório)</label>
                                        <input type="text"
                                            class="form-control @error('state_registration') is-invalid @enderror"
                                            id="estadual" name="state_registration" placeholder="Inscrição estadual"
                                            value="{{ old('state_registration') ?? '' }}">
                                        @error('state_registration')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="municipal" class="form-label">Inscrição municipal (não
                                            obrigatório)</label>
                                        <input type="text"
                                            class="form-control @error('municipal_registration') is-invalid @enderror"
                                            id="municipal" name="municipal_registration" placeholder="Inscrição municipal"
                                            value="{{ old('municipal_registration') ?? '' }}">
                                        @error('municipal_registration')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                            placeholder="E-mail" value="{{ old('email') ?? '' }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="entidade_type" class="form-label">Tipo instituição</label>
                                        <select class="form-select @error('entidade_type_id') is-invalid @enderror"
                                            name="entidade_type_id">
                                            <option>Disabled select</option>
                                            <option value='1' @if (old('entidade_type_id') == 1) selected @endif>
                                                Disabled 1</option>
                                            <option value='2'>Disabled 2</option>
                                            <option value='3'>Disabled 3</option>
                                        </select>
                                        @error('entidade_type_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-4 mb-0" type="submit">Salvar empresa</button>
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
