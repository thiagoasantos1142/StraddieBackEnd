{{-- modal cadastro de use --}}
<!-- Modal -->
<div class="modal fade" id="address" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastre um endereço</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <form id="form-address">
                    @csrf
                    <div class="">
                        <div class="form-row">
                            <div class="form-group col-md-3 mb-0">
                                <label for="zip" class="form-label">Cep</label>
                                <input type="text" class="form-control zip" id="zip" name="zip"
                                    placeholder="Cep" value="">
                            </div>
                            <div class="form-group col-md-2 mb-0">
                                <label for="street_number" class="form-label">Número</label>
                                <input type="text" class="form-control" id="street_number" name="street_number"
                                    placeholder="Número" value="">
                            </div>
                            <div class="form-group col-md-7 mb-0">
                                <label for="neighborhood" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="neighborhood" name="neighborhood"
                                    placeholder="Bairro" value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="street" class="form-label">Rua</label>
                                <input type="text" class="form-control" id="street" name="street"
                                    placeholder="Rua" value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="city_id" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="city_id" name="city_id"
                                    placeholder="Cidade" value="">
                            </div>
                            <div class="form-group col-md-12 mb-0">
                                <label for="complement" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complement" name="complement"
                                    placeholder="Complemento" value="">
                            </div>
                            <input type="hidden" name="organization_id" value="{{ $organizationId ?? null }}">
                            <input type="hidden" name="user_id" value="{{ $userId ?? null }}">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button class="btn btn-primary" data-saveaddress>Salvar</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    @vite('resources/js/viacep.js')
@endsection
<!-- CONTAINER CLOSED -->
