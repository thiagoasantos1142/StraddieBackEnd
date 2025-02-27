@yield('modals')

{{-- <!-- Cria um novo user -->
<div id="create_user" class="modal fade" role="dialog" data-modal="createUser">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar um usuário</h5>
            </div>
            <div class="modal-body">
                <div>
                    <form id="form-add-user">
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name" placeholder="Nome"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">E-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">CPF</label>
                                <input type="text" class="form-control" name="cpf" placeholder="Cpf"
                                    value="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-btnback style="display: none">Voltar</button>
                <button type="button" class="btn btn-primary" data-saveUser="user">Continuar</button>
            </div>
        </div>
    </div>
</div>

<!-- Cria um novo advogado -->
<div id="create_laywer" class="modal fade" role="dialog" data-modal="createUser">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar um advogado</h5>
            </div>
            <div class="modal-body">
                <div id="create-new-user">
                    <form id="add-new-laywer">
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
                <button type="button" class="btn btn-primary" data-saveUser="laywer">Continuar</button>
            </div>
        </div>
    </div>
</div> --}}
