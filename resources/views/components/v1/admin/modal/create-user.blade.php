<!-- Cria um novo user -->
<div id="create_user" class="modal fade" role="dialog" data-modal="createUser">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar um usuário</h5>
            </div>

            <div class="modal-body">
                <div style="width: 100%;">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6" style="cursor: pointer" data-openform="PF">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <span class="fs-5">Cliente PF</span>
                                        </div>
                                        <div class="min-w-fit-content ms-3">
                                            <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                <i class="fe fe-user fs-18"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6" style="cursor: pointer" data-openform="PJ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <span class="fs-5">Cliente PJ</span>
                                        </div>
                                        <div class="min-w-fit-content ms-3">
                                            <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                <i class="fe fe-user fs-18"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div style="display: none" data-typeform="PF">
                    <form id="form-add-user-pf">
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

                <div style="display: none" data-typeform="PJ">
                    <form id="form-add-user-pj">
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">Nome Fantasia</label>
                                <input type="text" class="form-control" name="nome_fantasia" placeholder="Nome fantasia"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">CNPJ</label>
                                <input type="text" class="form-control" name="cnpj" placeholder="cnpj"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">E-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
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

@push('scripts')
   
@endpush
