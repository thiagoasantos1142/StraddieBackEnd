<div class="col-xl-6">
    <input name="corporate_id" type="hidden" value="{{ $organizationId }}">
    <div class="card custom-card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-title">Atribuir um usuario</div>
            <div class="d-flex">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-modaluser="search">Atribuir usuario</button>
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
                {{-- <a href="javascript:void(0);" data-modaladdress data-typeaction="create"
                    class="btn btn-primary btn-block float-end"><i
                        class="fa fa-plus-square me-2"></i>Adicionar endereço</a> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="text-wrap">
                <div class="dropdown-samples">
                    <ul class=" dropdown-scroll" id="list-users-colaborate">
                        @foreach ($usersCompany as $user)
                            <li>
                                <a class="dropdown-item d-flex flex-row justify-content-between" href="javascript:void(0);">
                                    <div>
                                        <img src="http://localhost:9000/build/assets/images/users/1.jpg" alt="img"
                                            width="25" height="25" class="rounded-circle me-2">{{$user->name}}
                                    </div>
                                    <button type="button" class="btn btn-sm btn-secondary" data-removeusercorporate={{$user->id}}><i class="fe fe-minus me-2"></i>remover</button>
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
</div>

<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog">
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
                        id="serarchuser">
                    <span class="input-group-text btn btn-primary"><i class="fe fe-search"></i></span>
                </div>

                <ul class="list-group list-scroll" id="users-search-table">
                    {{-- <li class="list-group-item br-ts-5 br-te-5">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-md rounded-circle">
                                <img src="{{ asset('build/assets/images/users/1.jpg') }}" class="rounded-circle"
                                    alt="img">
                            </span>
                            <div class="ms-3">
                                <p class="mb-0 fs-14">Morbi leo risus</p>
                                <span class="clearfix"></span>
                                <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                            </div>
                            <div class="ms-auto">
                                <span class="badge bg-light text-dark p-2"><i
                                        class="bi bi-circle-fill fs-8 me-1 text-success"></i> Online</span>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @vite('resources/assets/js/components/addCorporateUser.js')
@endsection
<!-- CONTAINER CLOSED -->
