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
        <div class="card-header d-flex justify-content-between">
            <div class="card-title"></div>
            <!-- Button trigger modal -->
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
                <li class="breadcrumb-item active" aria-current="page">Disponivel</li>
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
                                <div class="power-ribbone power-ribbone-top-right text-success"><span class="bg-success"><i
                                            class="fa fa-bolt"></i></span></div>
                                <div class="card-body  p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Este Ativo já recebeu {{$availableAsset->offers->count()}} ofert{{$availableAsset->offers->count() == 1 ?"a.":"as."}}</h6>    
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                <div class="col-xl-3 col-md-6">
                        <a href="#section-offers">
                            <div class="card ribbone-card">
                                <div class="power-ribbone power-ribbone-top-right text-danger"><span class="bg-danger"><i
                                            class="fa fa-bolt"></i></span></div>
                                <div class="card-body  p-6">
                                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Este Ativo ainda não recebeu nenhuma oferta.</h6>                                
                                                         
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
                     
                            <div class="">
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="razao" class="form-label">Numero do processo:</label>
                                        <input type="text"
                                            class="form-control  @error('process_number') is-invalid @enderror" id="process_number"
                                            name="process_number" placeholder="Numero do processo"
                                            value="{{ old('process_number') ?? ($availableAsset->dueDiligence->crt->process_number ?? '') }}"
                                            disabled>
                                        @error('process_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="fantasy" class="form-label">Valor principal do titulo</label>
                                        <input type="text"
                                            class="form-control @error('main_value') is-invalid @enderror" id="fantasy"
                                            name="main_value" placeholder="Valor principal"
                                            value="{{ old('main_value') ?? ($availableAsset->dueDiligence->crt->principal_amount ?? '') }}"
                                            disabled>
                                        @error('main_value')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-5 mb-0">
                                        <label for="origin_debtor" class="form-label">Origem do débito</label>
                                        <input type="text" class="form-control @error('origin_debtor') is-invalid @enderror"
                                            id="origin_debtor" name="origin_debtor" placeholder="Origem do débito"
                                            value="{{ old('origin_debtor') ?? ($availableAsset->dueDiligence->crt->crtOriginDebtor->title ?? '') }}" disabled>
                                        @error('origin_debtor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-5 mb-0">
                                        <label for="nature_credit" class="form-label">Natureza do crédito</label>
                                        <input type="text"
                                            class="form-control @error('nature_credit') is-invalid @enderror"
                                            id="nature_credit" name="nature_credit" placeholder="Natureza do crédito"
                                            value="{{ old('nature_credit') ?? ($availableAsset->dueDiligence->crt->crtNatureCredit->title  ?? '') }}"
                                            disabled>
                                        @error('nature_credit')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div> 
                                    <div class="form-group col-md-5 mb-0">
                                        <label for="main_credit_for_sale" class="form-label">O valor principal do titulo está disponível para receber oferta?</label>
                                        <input type="button" class='{{$availableAsset->main_credit_for_sale == 1 ? "btn btn-success" : "btn btn-danger"}}' 
                                            id="municipal" name="main_credit_for_sale" placeholder=""
                                            value="{{ old('main_credit_for_sale') ?? ($availableAsset->main_credit_for_sale == 1 ? 'Sim' : 'Não') }}"
                                            disabled>
                                        @error('main_credit_for_sale')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <label for="negotiated_main_value" class="form-label">Valor prévio negociado</label>
                                        <input type="negotiated_main_value" class="form-control @error('negotiated_main_value') is-invalid @enderror"
                                            id="negotiated_main_value" name="negotiated_main_value" placeholder="E-mail"
                                            value="{{ old('negotiated_main_value') ?? ($availableAsset->negotiated_main_value ?? '') }}" disabled>
                                        @error('negotiated_main_value')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 mb-0">
                                        <label for="contractual_fees_for_sale" class="form-label">Os valores dos Honorários estão disponíveis para receber oferta?</label>
                                        <input type="button" class='{{$availableAsset->contractual_fees_for_sale == 1 ? "btn btn-success" : "btn btn-danger"}}' 
                                            id="contractual_fees_for_sale" name="contractual_fees_for_sale" placeholder=""
                                            value="{{ old('contractual_fees_for_sale') ?? ($availableAsset->contractual_fees_for_sale == 1 ? 'Sim' : 'Não') }}"
                                            disabled>
                                        @error('contractual_fees_for_sale')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="percentage_contractual_fee" class="form-label">Percentual dos honorários</label>
                                        <input type="percentage_contractual_fee" class="form-control @error('percentage_contractual_fee') is-invalid @enderror"
                                            id="percentage_contractual_fee" name="percentage_contractual_fee" placeholder="percentage_contractual_fee"
                                            value="{{ old('contractual_fees_for_sale') ?? ($availableAsset->percentage_contractual_fee ?? 'N/A') }}" disabled>
                                        @error('percentage_contractual_fee')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4 mb-0">
                                        <label for="negotiated_fee_value" class="form-label">Valor negociado dos honorários</label>
                                        <input type="negotiated_fee_value" class="form-control @error('negotiated_fee_value') is-invalid @enderror"
                                            id="negotiated_fee_value" name="negotiated_fee_value" placeholder="negotiated_fee_value"
                                            value="{{ old('negotiated_fee_value') ?? ($availableAsset->contractual_fees_for_sale == 1 ? $availableAsset->negotiated_fee_value : 'N/A') }}" disabled>
                                        @error('negotiated_fee_value')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                   
                                </div>
                            </div>  
                    </div>                    
                </div> 
                <div class="col-xl-5" id="section-title">
                      
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title">Due Diligence geradora deste ativo</div>                                        
                        </div>
                        <a href="{{ route('dueDiligence.show', ['dueDiligence' => $availableAsset->dueDiligence->id]) }}" target="_blank" class="stretched-link">
                            <ul class="list-group list-group-flush" data-title>                                       
                                <li class="list-group-item" data-idtitle="{{ $availableAsset->dueDiligence->id }}">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div class="d-flex mt-2">                                                   
                                            <div class="ms-2" id="line-dueDiligence">
                                                <p class="fs-13 fw-600 mb-0">Status: {{ $availableAsset->dueDiligence->status->title }}</p>                                                           
                                            </div>
                                        </div>
                                        @can('view-dueDiligences')
                                            <div class="d-flex">                                                    
                                                <a href="javascript:void(0);" 
                                                            class="btn btn-primary btn-block float-end">Visualizar DueDiligence</a>
                                            </div>
                                        @endcan
                                    </div>
                                </li>
                            </ul>
                        </a>                                    
                    </div>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title">Titulo de direito creditório originador deste ativo</div>                                        
                        </div>
                            <a href="{{ route('creditRightsTitle.show', ['creditRightsTitle' => $availableAsset->dueDiligence->crt->id]) }}" target="_blank" class="stretched-link">
                                <ul class="list-group list-group-flush" data-title>                                       
                                    <li class="list-group-item" data-idtitle="{{ $availableAsset->dueDiligence->crt->id }}">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex mt-2">                                                   
                                                <div class="ms-2" id="line-addresses">
                                                    <p class="fs-13 fw-600 mb-0">{{ $availableAsset->dueDiligence->crt->title }}</p>                                                           
                                                </div>
                                            </div>
                                            @can('view-crt')
                                                <div class="d-flex">                                                    
                                                    <a href="javascript:void(0);" data-modaladdress data-typeaction="create"
                                                            class="btn btn-primary btn-block float-end">Visualizar Título</a>
                                                </div>
                                            @endcan
                                        </div>
                                    </li>
                                </ul>
                            </a>                                    
                        </div>
                    </div>
                </div>              
            </div>               
        </div> 
                
        <!-- Modal -->
        @can('make-offer')
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
                                @if($availableAsset->main_credit_for_sale == 1)
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" name='offerMainValue' id="offerMainValue">
                                        <label class="form-check-label"  for="offerMainValue">Fazer oferta para o valor principal?</label>
                                    </div>
                                    <div id="mainValueFields" style="display: none;">
                                        <div class="mb-3">
                                            <label for="offer_main_value">Valor da Oferta</label>
                                            <input type="text" class="form-control" id="offer_main_value" name="offer_main_value">
                                        </div>
                                       
                                    </div>
                                @endif
                                @if($availableAsset->contractual_fees_for_sale == 1)
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" name='offerFeeValue' id="offerFeeValue">
                                        <label class="form-check-label" for="offerFeeValue">Fazer oferta para os valores dos honorários?</label>
                                    </div>
                                    <div id="feeValueFields" style="display: none;">
                                        <div class="mb-3">
                                            <label for="feeValue">Valor da Oferta</label>
                                            <input type="text" class="form-control" name="feeValue" id="feeValue">
                                        </div>
                                       
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary" onclick="makeOffer()">Fazer Oferta</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endcan
    
    </div>

    
@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- Filepond JS -->
    <script src="{{ asset('build/assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}">
    </script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
    </script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script
        src="{{ asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}">
    </script>
    <script src="{{ asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}">
    </script>

    <!-- Dropzone JS -->
    <script src="{{ asset('build/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <!-- Color Picker JS -->
    @vite('resources/assets/js/color-picker.js')

    <!-- Date & Time Picker JS -->
    <script src="{{ asset('build/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- FORMELEMENTS JS -->
    @vite('resources/assets/js/formelementadvnced.js')

    <script>
    // Function to toggle main value fields
    document.getElementById('offerMainValue').addEventListener('change', function() {
        var mainValueFields = document.getElementById('mainValueFields');
        if (this.checked) {
            mainValueFields.style.display = 'block';
        } else {
            mainValueFields.style.display = 'none';
        }
    });

    // Function to toggle fee value fields
    document.getElementById('offerFeeValue').addEventListener('change', function() {
        var feeValueFields = document.getElementById('feeValueFields');
        if (this.checked) {
            feeValueFields.style.display = 'block';
        } else {
            feeValueFields.style.display = 'none';
        }
    });

    // Function to handle making offer
    function makeOffer() {

        var mainValue = document.getElementById('offer_main_value').value.trim();
        var feeValue = document.getElementById('feeValue').value.trim();
        
        // You can implement your logic to handle making offer here
        alert('Oferta realizada com sucesso!');
        // Close modal
        var modal = new bootstrap.Modal(document.getElementById('offerModal'));
        modal.hide();
    }

    $(document).ready(function(){
        $('#offer_main_value').mask('#.##0,00', {reverse: true});
        $('#feeValue').mask('#.##0,00', {reverse: true});

        // Mostrar ou esconder os campos quando os checkboxes forem clicados
        $('#offerMainValue').change(function() {
            if(this.checked) {
                $('#mainValueFields').show();
            } else {
                $('#mainValueFields').hide();
            }
        });

        $('#offerFeeValue').change(function() {
            if(this.checked) {
                $('#feeValueFields').show();
            } else {
                $('#feeValueFields').hide();
            }
        });
    });

</script>
@endsection
