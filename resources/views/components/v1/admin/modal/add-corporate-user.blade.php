<div class="col-xl-6" name="container-main">
    <input name="route_update" type="hidden" value="{{ $attributes['routeUpdate'] }}">
    <input name="route_create" type="hidden" value="{{ $attributes['routeCreate'] }}">
    <input name="route_delete" type="hidden" value="{{ $attributes['routeDelete'] }}">

    <input name="search_dataroute" type="hidden" value="{{ $attributes['search-dataroute'] }}">

    <input name="action_btnremove" type="hidden" value="{{ $attributes[':action-btnremove'] }}">
    <input name="data_component" type="hidden" value="{{ json_encode($dataComponent) }}">

    <div class="card custom-card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">{{ $attributes[':title-card'] ?? 'Atribuir um usuario' }}</div>
            <div class="d-flex">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-modaluser="search">Atribuir
                        usuario</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);" data-modaluser="search">Atribuir</a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);" data-modaluser="addAndSearch">Criar e
                                Atribuir</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-wrap">
                <div class="dropdown-samples">
                    <ul class=" dropdown-scroll" name="show-date">
                        @foreach ($showData as $user)
                            <li>
                                <a class="dropdown-item d-flex flex-row justify-content-between"
                                    href="javascript:void(0);">
                                    <div>
                                        <img src="http://localhost:9000/build/assets/images/users/1.jpg" alt="img"
                                            width="25" height="25"
                                            class="rounded-circle me-2">{{ $user->name }}
                                    </div>
                                    <button type="button" class="btn btn-sm btn-secondary"
                                        data-removeusercorporate={{ $user->id }}><i class="fe fe-minus me-2"
                                            data-removebtn="update"></i>remover</button>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" name="addUser" tabindex="-1" role="dialog" data-asign>
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Atribuir usuario a empresa</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Pesquise por nome,id,cpf ou email"
                            name="serarchuser">
                        <span class="input-group-text btn btn-primary"><i class="fe fe-search"></i></span>
                    </div>

                    <ul class="list-group list-scroll" name="search-data">

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal create new user-->
    <div id="create_user" class="modal fade" role="dialog" data-modal="createUser">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Criar um usuário</h5>
                </div>
                <div class="modal-body">
                    <div data-step="add-user">
                        <form id="form-add-user">
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Nome" value="">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label">E-mail</label>
                                    <input type="text" class="form-control"  name="email"
                                        placeholder="Email" value="">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label">CPF</label>
                                    <input type="text" class="form-control" name="cpf"
                                        placeholder="Cpf" value="">
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

    <!-- Modal create new laywer-->
    {{-- <div id="create_laywer" class="modal fade" role="dialog" data-modal="createUser">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Criar um advogado</h5>
                </div>
                <div class="modal-body">
                    <div id="create-new-user" data-step="add-user">
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
</div>


@section('scripts')
    @parent
    @vite('resources/assets/js/components/addCorporateUser.js')
@endsection
<!-- CONTAINER CLOSED -->
