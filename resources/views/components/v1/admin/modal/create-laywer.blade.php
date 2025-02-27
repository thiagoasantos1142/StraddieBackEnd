<!-- Cria um novo user -->
<div id="create_laywer" class="modal fade" role="dialog" data-modal="createLawyer">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar um advogado</h5>
            </div>
            <div class="modal-body">
                <div>
                    <form id="form_add_lawyer">
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name" placeholder="Nome"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="titulo"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="OAB_number" class="form-label">Número da OAB</label>
                                <input type="text" class="form-control" id="OAB_number" name="OAB_number" placeholder="OAB"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="UF" class="form-label">UF</label>
                                <input type="text" class="form-control" id="UF" name="UF" placeholder="UF"
                                    value="">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
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
                <button type="button" class="btn btn-primary" data-saveUser="laywer">Continuar</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Seu código JavaScript específico para este componente aqui
        console.log('JavaScript do Meu Componente');
    </script>
@endpush