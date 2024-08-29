@extends('layouts.master')

@section('styles')
    <!-- FilePond CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/dropzone/dropzone.css') }}">

    <!-- Color Picker CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/flatpickr/flatpickr.min.css') }}">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title"></div>
            @can('make-offer')
                <div class="d-flex">
                    <button type="button" class="btn btn-primary btn-block float-end my-2" data-bs-toggle="modal" data-bs-target="#offerModal">
                        <i class="fa fa-plus-square me-2"></i>Fazer Oferta
                    </button>
                </div>
            @endcan
        </div>
        <h1 class="page-title">Ativo</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Ativo</a></li>
                <li class="breadcrumb-item active" aria-current="page">Disponível</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-md-12 row">
                @if($availableAsset->offers->count() >= 1)
                    <div class="col-xl-3 col-md-6">
                        <a href="#section-offers">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-success">
                                    <span class="bg-success"><i class="fa fa-bolt"></i></span>
                                </div>
                                <div class="card-body p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">
                                        Este Ativo já recebeu {{ $availableAsset->offers->count() }} ofert{{ $availableAsset->offers->count() == 1 ? "a" : "as" }}.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="col-xl-3 col-md-6">
                        <a href="#section-offers">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-danger">
                                    <span class="bg-danger"><i class="fa fa-bolt"></i></span>
                                </div>
                                <div class="card-body p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">
                                        Este Ativo ainda não recebeu nenhuma oferta.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dados do Ativo</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="process_number" class="form-label">Número do processo:</label>
                                <input type="text" class="form-control @error('process_number') is-invalid @enderror" id="process_number"
                                       name="process_number" placeholder="Número do processo"
                                       value="{{ old('process_number') ?? ($availableAsset->dueDiligence->crt->process_number ?? '') }}"
                                       disabled>
                                @error('process_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="main_value" class="form-label">Valor principal do título</label>
                                <input type="text" class="form-control @error('main_value') is-invalid @enderror" id="fantasy"
                                       name="main_value" placeholder="Valor principal"
                                       value="{{ old('main_value') ?? ($availableAsset->dueDiligence->crt->principal_amount ?? '') }}"
                                       disabled>
                                @error('main_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-5 mb-0">
                                <label for="origin_debtor" class="form-label">Origem do débito</label>
                                <input type="text" class="form-control @error('origin_debtor') is-invalid @enderror" id="origin_debtor"
                                       name="origin_debtor" placeholder="Origem do débito"
                                       value="{{ old('origin_debtor') ?? ($availableAsset->dueDiligence->crt->crtOriginDebtor->title ?? '') }}"
                                       disabled>
                                @error('origin_debtor')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-5 mb-0">
                                <label for="nature_credit" class="form-label">Natureza do crédito</label>
                                <input type="text" class="form-control @error('nature_credit') is-invalid @enderror" id="nature_credit"
                                       name="nature_credit" placeholder="Natureza do crédito"
                                       value="{{ old('nature_credit') ?? ($availableAsset->dueDiligence->crt->crtNatureCredit->title ?? '') }}"
                                       disabled>
                                @error('nature_credit')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-5 mb-0">
                                <label for="main_credit_for_sale" class="form-label">O valor principal do título está disponível para receber oferta?</label>
                                <input type="button" class="{{ $availableAsset->main_credit_for_sale == 1 ? 'btn btn-success' : 'btn btn-danger' }}"
                                       id="main_credit_for_sale" name="main_credit_for_sale" value="{{ old('main_credit_for_sale') ?? ($availableAsset->main_credit_for_sale == 1 ? 'Sim' : 'Não') }}"
                                       disabled>
                                @error('main_credit_for_sale')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="negotiated_main_value" class="form-label">Valor prévio negociado</label>
                                <input type="text" class="form-control @error('negotiated_main_value') is-invalid @enderror" id="negotiated_main_value"
                                       name="negotiated_main_value" placeholder="Valor negociado"
                                       value="{{ old('negotiated_main_value') ?? ($availableAsset->negotiated_main_value ?? '') }}" disabled>
                                @error('negotiated_main_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="contractual_fees_for_sale" class="form-label">Os valores dos honorários estão disponíveis para receber oferta?</label>
                                <input type="button" class="{{ $availableAsset->contractual_fees_for_sale == 1 ? 'btn btn-success' : 'btn btn-danger' }}"
                                       id="contractual_fees_for_sale" name="contractual_fees_for_sale"
                                       value="{{ old('contractual_fees_for_sale') ?? ($availableAsset->contractual_fees_for_sale == 1 ? 'Sim' : 'Não') }}"
                                       disabled>
                                @error('contractual_fees_for_sale')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="percentage_contractual_fee" class="form-label">Percentual dos honorários</label>
                                <input type="text" class="form-control @error('percentage_contractual_fee') is-invalid @enderror" id="percentage_contractual_fee"
                                       name="percentage_contractual_fee" placeholder="Percentual dos honorários"
                                       value="{{ old('percentage_contractual_fee') ?? ($availableAsset->percentage_contractual_fee ?? 'N/A') }}" disabled>
                                @error('percentage_contractual_fee')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="negotiated_fees_value" class="form-label">Valor prévio negociado dos honorários</label>
                                <input type="text" class="form-control @error('negotiated_fees_value') is-invalid @enderror" id="negotiated_fees_value"
                                       name="negotiated_fees_value" placeholder="Valor prévio dos honorários"
                                       value="{{ old('negotiated_fees_value') ?? ($availableAsset->negotiated_fees_value ?? '') }}" disabled>
                                @error('negotiated_fees_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="interest_rate" class="form-label">Taxa de juros anual</label>
                                <input type="text" class="form-control @error('interest_rate') is-invalid @enderror" id="interest_rate"
                                       name="interest_rate" placeholder="Taxa de juros"
                                       value="{{ old('interest_rate') ?? ($availableAsset->interest_rate ?? '') }}" disabled>
                                @error('interest_rate')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="monetary_correction" class="form-label">Correção monetária</label>
                                <input type="text" class="form-control @error('monetary_correction') is-invalid @enderror" id="monetary_correction"
                                       name="monetary_correction" placeholder="Correção monetária"
                                       value="{{ old('monetary_correction') ?? ($availableAsset->monetary_correction ?? '') }}" disabled>
                                @error('monetary_correction')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4 mb-0">
                                <label for="discount_percentage" class="form-label">Percentual de desconto permitido</label>
                                <input type="text" class="form-control @error('discount_percentage') is-invalid @enderror" id="discount_percentage"
                                       name="discount_percentage" placeholder="Desconto permitido"
                                       value="{{ old('discount_percentage') ?? ($availableAsset->discount_percentage ?? '') }}" disabled>
                                @error('discount_percentage')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Offers -->
        @if(isset($isAssociated) || $isAssociated || isset($isAdmin) || $isAdmin)
            <div id="section-offers" class="row">
                <div class="col-md-12">
                    @if($availableAsset->offers->count() > 0)
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ofertas</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="offers-table">
                                        <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Oferta para</th>
                                                <th>Valor Principal</th>   
                                                <th>Status</th>                                         
                                                <th>Data da Oferta</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($availableAsset->offers as $offer)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>                                              
                                               
                                                    @if($offer->category_id == 1)
                                                        <td>Valor Principal</td>
                                                    @elseif($offer->category_id == 2)  
                                                        <td>Honorários</td>
                                                    @else
                                                    <td>Sem Classificação</td>
                                                    @endif
                                                    <td>{{ $offer->value }}</td>  
                                                    <td>{{ $offer->status->title }}</td>                                             
                                                    <td>{{ $offer->created_at }}</td>
                                                
                                                    <td>
                                                        <a href="{{ route('offers.show', $offer->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Nenhuma oferta disponível para este ativo.
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
    
    <!-- CONTAINER CLOSED -->

    <!-- Offer Modal -->
    <div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('assets.makeOffer', ['assetId' => $availableAsset->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="offerModalLabel">Fazer Oferta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="offerMainValue" name="offerMainValue">
                            <label class="form-check-label" for="offerMainValue">Ofertar valor principal</label>
                        </div>
                        <div id="mainValueFields" style="display: none;">
                            <div class="form-group">
                                <label for="offer_main_value" class="form-label">Valor Principal:</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="text" class="form-control" id="offer_main_value" name="offer_main_value">
                                </div>
                            </div>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="offerFeeValue" name="offerFeeValue">
                            <label class="form-check-label" for="offerFeeValue">Ofertar valor dos honorários</label>
                        </div>
                        <div id="feeValueFields" style="display: none;">
                            <div class="form-group">
                                <label for="feeValue" class="form-label">Valor dos Honorários:</label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="text" class="form-control" id="feeValue" name="feeValue">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar Oferta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- FilePond JS -->
    <script src="{{ asset('build/assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/dropzone/dropzone.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('build/assets/libs/@simonwep/pickr/pickr.min.js') }}"></script>

    <!-- FlatPickr JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- Custom Scripts -->
    <script>
        $(document).ready(function () {
            // Handle main value field visibility and masking
            $('#offerMainValue').change(function () {
                if (this.checked) {
                    $('#mainValueFields').show();
                    $('#offer_main_value').focus().mask('#.##0,00', { reverse: true });
                } else {
                    $('#mainValueFields').hide();
                }
            });

            // Handle fee value field visibility and masking
            $('#offerFeeValue').change(function () {
                if (this.checked) {
                    $('#feeValueFields').show();
                    $('#feeValue').focus().mask('#.##0,00', { reverse: true });
                } else {
                    $('#feeValueFields').hide();
                }
            });
        });
    </script>
@endsection
