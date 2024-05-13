<!-- Modal -->
<div id="teste" class="modal fade" tabindex="-1" role="dialog" data-modal="typeTitle">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tipo de título</h5>
                </button>
            </div>
            <div class="modal-body">
                <form name="form-phone">
                    @csrf
                    <div class="">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-0">
                                <label for="crt_types_id" class="form-label">Tipo</label>
                                <select class="form-select" id="select_crt_type_id" name="select_crt_type_id"></select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal">Continuar</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    @vite('resources/assets/js/components/selectTypeTitle.js');
@endsection
