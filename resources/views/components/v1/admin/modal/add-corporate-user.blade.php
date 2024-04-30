<div class="col-xl-6" name="container-main">
    <input name="route_update" type="hidden" value="{{ $attributes['routeUpdate'] }}">
    <input name="route_create" type="hidden" value="{{ $attributes['routeCreate'] }}">
    <input name="route_delete" type="hidden" value="{{ $attributes['routeDelete'] }}">

    <input name="search_dataroute" type="hidden" value="{{ $attributes['search-dataroute'] }}">

    <input name="action_btnremove" type="hidden" value="{{ $attributes[':action-btnremove'] }}">
    <input name="data_component" type="hidden" value="{{ json_encode($dataComponent) }}">

    <div class="card custom-card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">{{$attributes[':title-card'] ?? 'Adicionar usuário'}}</div>
            <div class="d-flex">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-modaluser="search">Adicionar</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);"
                                data-modaluser="search">Atribuir</a>
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
                                        data-removeusercorporate={{ $user->id }}><i
                                            class="fe fe-minus me-2"  data-removebtn="update"></i>remover</button>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- <div class="row">
                <a href="" onclick="event.preventDefault();" class="col-md-6 mb-4 mb-md-0" data-bs-toggle="modal"
                    data-bs-target="#largemodal">
                    <div class="dropzone d-flex justify-content-center align-items-center">
                        <p class="fs-4 mb-0">Atribuir um usuario +</p>
                    </div>
                </a>
                <a href="" onclick="event.preventDefault();" class="col-md-6" data-bs-toggle="modal"
                    data-bs-target="#largemodal">
                    <div class="dropzone d-flex justify-content-center align-items-center">
                        <p class="fs-4 mb-0">Atribuir um usuario existente +</p>
                    </div>
                </a>
            </div> --}}
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
</div>


@section('scripts')
    @parent
    @vite('resources/assets/js/components/addCorporateUser.js')
@endsection
<!-- CONTAINER CLOSED -->
