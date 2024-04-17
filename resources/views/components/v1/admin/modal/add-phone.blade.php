<div class="col-xl-6" id="{{ $id }}">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">Telefones</div>
            <div class="d-flex">
                <a href="javascript:void(0);" data-btnadd class="btn btn-primary btn-block float-end"><i
                        class="fa fa-plus-square me-2"></i>Adicionar telefone</a>
            </div>
        </div>

        <ul class="list-group list-group-flush" data-show>
            @foreach ($showData as $phone)
                <li class="list-group-item" data-key="{{ $phone->id }}">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex mt-2">
                            <div>
                                <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2"
                                    href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
                            </div>
                            <div class="ms-2" id="line-addresses">
                                <p class="fs-13 fw-600 mb-0">Telefone: {{ $phone->phone }}</p>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                                data-btndeletaddress="{{ $phone->id }}" type="button"><i
                                    class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" data-modal>
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastre um telefone</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <form name="form-phone">
                        @csrf
                        <div class="">
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-0">
                                    <label for="phone" class="form-label">Telefone</label>
                                    <input type="text" class="form-control phone_with_ddd" id="phone"
                                        name="phone" placeholder="phone" value="">
                                </div>

                                <input type="hidden" value="{{ json_encode($keys) }}" data-keys>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" data-save>Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    @vite('resources/assets/js/components/addPhone.js')
@endsection
