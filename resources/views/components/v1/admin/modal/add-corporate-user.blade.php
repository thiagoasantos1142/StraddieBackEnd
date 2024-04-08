<div class="col-xl-6">
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
            <div class="row">
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
            </div>
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
                <div class="main-header-center  d-none d-lg-block  header-link mb-4">
                    <input type="text" class="form-control" id="serarchuser" placeholder="Search for results..."
                        autocomplete="off">
                    <button class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
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
