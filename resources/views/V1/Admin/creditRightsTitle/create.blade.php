@extends('layouts.master')

@section('styles')
    <!-- noui Slider -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/nouislider/nouislider.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Inclua os arquivos CSS e JavaScript do Select2 no seu layout -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
@endsection

@section('content')
    <!-- PAGE-HEADER -->


    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Adicionar Título</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Títulos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Título</li>
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
                        <h4 class="card-title">Dados do Título</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('creditRightsTitle.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="crt_type_id">
                            <div class="">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="title" class="form-label">Título / Assunto</label>
                                        <input type="text" class="form-control  @error('title') is-invalid @enderror"
                                            id="title" name="title" placeholder="Informe um titulo para este processo"
                                            value="{{ old('title') ?? '' }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="process_number" class="form-label">Numero do processo</label>
                                        <input type="text"
                                            class="form-control @error('process_number') is-invalid @enderror"
                                            id="process_number" name="process_number"
                                            placeholder="Informe o Numero do processo"
                                            value="{{ old('process_number') ?? '' }}">
                                        @error('process_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
                                        <label for="class" class="form-label">Classe do titulo</label>
                                        <input type="text" class="form-control @error('class') is-invalid @enderror"
                                            id="class" name="class" placeholder="Classe"
                                            value="{{ old('class') ?? '' }}">
                                        @error('class')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
                                        <label for="php " class="form-label">Espécie do titulo</label>
                                        <select class="form-select" id="specie_id" name="specie_id">
                                            <option value="">Selecione a Espécie do titulo</option>
                                            @foreach ($species as $specie)
                                                <option value="{{ $specie->id }}"
                                                    @if (old('specie_id') == $specie->id) selected @endif>{{ $specie->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Adicione a classe "select2" aos seus selects -->
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="court_id" class="form-label">Órgão julgador</label>
                                        <select class="form-select select js-example-basic-single" id="court_id"
                                            name="court_id">
                                            <option value="">Selecione um órgão julgador</option>
                                            @foreach ($courts as $court)
                                                <option value="{{ $court->id }}"
                                                    @if (old('court_id') == $court->id) selected @endif>{{ $court->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
                                        <label for="vara_id" class="form-label">Vara do tribunal</label>
                                        <select class="form-select select js-example-basic-single" id="vara_id"
                                            name="vara_id" required>
                                            <option value="">Selecione uma Vara do tribunal</option>
                                            <!-- Os options serão preenchidos dinamicamente usando JavaScript -->
                                        </select>
                                    </div>



                                    <div class="form-group col-md-6 mb-0">
                                        <label for="nature_credit_id" class="form-label">Natureza do crédito</label>
                                        <select class="form-select" id="nature_credit_id" name="nature_credit_id">
                                            <option value="">Selecione a natureza do crédito</option>
                                            @foreach ($nature_credits as $nature_credit)
                                                <option value="{{ $nature_credit->id }}"
                                                    @if (old('nature_credit_id') == $nature_credit->id) selected @endif>
                                                    {{ $nature_credit->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
                                        <label for="nature_obligation_id" class="form-label">Natureza da obrigação</label>
                                        <select class="form-select" id="nature_obligation_id" name="nature_obligation_id">
                                            <option value="">Selecione a natureza da obrigação</option>
                                            @foreach ($nature_obligations as $nature_obligation)
                                                <option value="{{ $nature_obligation->id }}"
                                                    @if (old('nature_obligation_id') == $nature_obligation->id) selected @endif>
                                                    {{ $nature_obligation->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
                                        <label for="origin_debtor_id" class="form-label">Origem do débito</label>
                                        <select class="form-select" id="origin_debtor_id" name="origin_debtor_id">
                                            <option value="">Selecione a origem do débito</option>
                                            @foreach ($origin_debtors as $origin_debtor)
                                                <option value="{{ $origin_debtor->id }}"
                                                    @if (old('origin_debtor_id') == $origin_debtor->id) selected @endif>
                                                    {{ $origin_debtor->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-md-6 mb-0">
                                        <label for="principal_amount" class="form-label">Valor principal da causa</label>

                                        <input class="form-control @error('principal_amount') is-invalid @enderror"
                                            type="text" id="principal_amount" name="principal_amount"
                                            placeholder="Valor principal da causa"
                                            value="{{ old('principal_amount') ?? '' }}">
                                        @error('principal_amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3 mb-0">
                                        <label for="justice_secret" class="form-label">O processo está em segredo de
                                            Justiça?</label>
                                        <div class="row gy-1">
                                            <div class="col-xl-4">
                                                <!-- Toggle switch com texto personalizado -->
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="secrecySwitch">
                                                    <label class="form-check-label" for="secrecySwitch">Não</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('justice_secret')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-3 mb-0">
                                        <label for="justice_free" class="form-label">Justiça gratuita?</label>
                                        <div class="row gy-1">
                                            <div class="col-xl-4">
                                                <!-- Toggle switch com texto personalizado -->
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="secrecySwitch">
                                                    <label class="form-check-label" for="secrecySwitch">Não</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('justice_free')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-0">
                                        <label for="user" class="form-label">Adicionar usuário(*não obrigatório)</label>

                                        <input class="form-control"
                                            type="text" id="user" name="user"
                                            placeholder="Adicionar usuário"
                                            value="">
                                        <input class="form-control"
                                            type="hidden" id="user_id" name="user_id"
                                            value="">
                                    </div>

                                </div>
                            </div>
                            <!-- Botão para abrir o modal -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center justify-content-center"
                                            style="min-height: 100px;">
                                            <!-- Campo de upload de arquivo -->
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="file" class="form-label">Upload do arquivo</label>
                                                <input class="form-control @error('file') is-invalid @enderror"
                                                    type="file" id="file" name="file">
                                                @error('file')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body d-flex align-items-center justify-content-center"
                                            style="min-height: 100px;">
                                            <div class="text-center">

                                                <button class="btn btn-primary mt-4 mb-0" type="submit">
                                                    Salvar Titulo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- modals --}}
    <x-v1.admin.modal.select-type-title />
    {{-- <x-v1.admin.modal.add-user-in-credit-rigth-title /> --}}
@endsection

@section('modals')
@endsection

@section('scripts')
    <!-- noUiSlider JS -->
    <script src="{{ asset('build/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/wnumb/wNumb.min.js') }}"></script>
    @vite('resources/assets/js/nouislider.js')

    <script>
        $(document).ready(function() {
            $('#court_id').change(function() {
                var courtId = $(this).val();
                if (courtId) {
                    $.ajax({
                        type: 'GET',
                        url: '/dashboard/varas/' + courtId,
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
        });
    </script>

    <script>
        $(document).ready(function() {
            // Aplicar máscara de moeda brasileira
            $('#principal_amount').mask('000.000.000,00', {
                reverse: true
            });

            // // Validar entrada para aceitar apenas números
            // $('#principal_amount').on('input', function() {
            //     // Remover caracteres não numéricos
            //     var sanitized = $(this).val().replace(/[^0-9]/g, '');
            //     // Atualizar o valor no campo
            //     $(this).val(sanitized);
            // });
        });
    </script>
    <!-- Adicione um bloco de script para inicializar o Select2 -->
    <script>
        $('.js-example-basic-single').select2();
    </script>
@endsection
