<!-- Modal -->
<div id="teste" class="modal fade" role="dialog" data-modal="addUserInCreditRigthTitle">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selecione um usuário</h5>
            </div>
            <div class="modal-body">
                <form name="form-phone" data-step="select-user">
                    @csrf
                    <div class="">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-0">
                                <label for="crt_type_id" class="form-label">Usuários</label>
                                <div class="d-flex flex-row">
                                    <select class="form-select add-user-in-credit-rigth-title" id="user_select"
                                        name="user_select"></select>
                                    <button type="button" class="btn btn-primary ms-2"
                                        style="white-space: nowrap;" data-nextstep="add-user"><i class="fa fa-plus-square me-2"></i>User</button>
                                </div>
                            </div>
                            {{-- <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">Título / Assunto</label>
                                <input type="text" class="form-control  " id="title" name="title"
                                    placeholder="Informe um titulo para este processo" value="">
                            </div> --}}
                        </div>
                    </div>
                </form>

                <div id="create-new-user" data-step="add-user">
                    <form id="add-new-user">
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">Nome</label>
                                <input type="text" class="form-control  " id="title" name="name"
                                    placeholder="Nome" value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">E-mail</label>
                                <input type="text" class="form-control" id="title" name="email"
                                    placeholder="Email" value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="title" name="cpf"
                                    placeholder="Cpf" value="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-btnback style="display: none">Voltar</button>
                <button type="button" class="btn btn-primary" data-continue>Continuar</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    @vite('resources/assets/js/components/addUserInCreditRigthTitle.js');
    <script>
        $('.js-example-basic-single').select2();
    </script>
@endsection
