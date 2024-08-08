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

     {{-- <!-- Inclua o jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- Inclua o jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Usuário</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuário</li>
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
    <div class="offer-details card mb-4">
        <div class="card-header">
            <h4>Detalhes da Oferta</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Titulo #{{ $offer->asset->due_diligence->crt->id }}</h5>
                    <p><strong>Título:</strong> {{ $offer->asset->due_diligence->crt->title ?? 'Não especificado' }}</p>
                    <p><strong>Categoria:</strong> {{ $offer->category->title ?? 'Não especificado' }}</p>
                    <p><strong>Valor principal do Titulo:</strong> {{ $offer->asset->due_diligence->availableAsset  ->negotiated_main_value ?? 'Não especificado' }}</p>
                    <p><strong>Numero do processo:</strong> {{ $offer->asset->due_diligence->crt->process_number ?? 'Não especificado' }}</p>
                    
                    
                </div>
                <div class="col-md-6">
                    <h5>Oferta #{{ $offer->id }}</h5>
                    <p><strong>Valor da Oferta:</strong> {{ $offer->value }}</p>                    
                    <p><strong>Data da Oferta:</strong> {{ \Carbon\Carbon::parse($offer->offer_date)->format('d/m/Y') }}</p>
                    <p><strong>Descrição:</strong> {{ $offer->description }}</p>
                    <p><strong>Titular da Oferta:</strong> 'Confidencial'</p>
                    <p><strong>Status:</strong> {{ $offer->status->title ?? 'Não especificado' }}</p>
                    <!-- Adicione mais detalhes conforme necessário -->
                </div>
            </div>
        </div>
    </div>

    <div class="action-buttons">
        <form action="{{ route('offers.accept', $offer->id) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-success">Aceitar Oferta</button>
        </form>

        <button class="btn btn-warning" data-toggle="modal" data-target="#counterOfferModal">Enviar Contra Proposta</button>
    </div>

    <!-- Modal para Contra Proposta -->
    <div class="modal fade" id="counterOfferModal" tabindex="-1" role="dialog" aria-labelledby="counterOfferModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="counterOfferModalLabel">Enviar Contra Proposta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('offers.counter', $offer->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="counterAmount">Valor da Contra Proposta</label>
                            <input type="number" class="form-control" id="counterAmount" name="counter_amount" required>
                        </div>
                        <div class="form-group">
                            <label for="counterDescription">Descrição</label>
                            <textarea class="form-control" id="counterDescription" name="counter_description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
