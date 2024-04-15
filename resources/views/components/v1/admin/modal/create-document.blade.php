{{-- modal cadastro de use --}}
<!-- Modal -->
<div class="modal fade" id="document" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar arquivo ao título</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <form id="form-document">
                    @csrf
                    <!-- Modal -->
                        <div class="modal fade" id="addFileModal" tabindex="-1" aria-labelledby="addFileModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addFileModalLabel">Adicionar Novo Arquivo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulário para enviar o arquivo -->
                                    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="fileInput" class="form-label">Selecione um arquivo</label>
                                        <input class="form-control" type="file" id="fileInput" name="file">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button class="btn btn-primary" data-savedocuments>Salvar</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    @vite('resources/js/viacep.js')
@endsection
<!-- CONTAINER CLOSED -->
