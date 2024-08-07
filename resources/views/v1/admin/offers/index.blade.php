@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Ofertas</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Ofertas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Todas as ofertas</li>
            </ol>
        </div>
    </div>

    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="card">
            <div class="card-body p-2">
                <ul class="nav nav-pills bg-primary-transparent br-5 p-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="received-tab" data-bs-toggle="pill"
                            data-bs-target="#received" type="button" role="tab" aria-controls="received"
                            aria-selected="true">Ofertas Recebidas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="made-tab" data-bs-toggle="pill"
                            data-bs-target="#made" type="button" role="tab" aria-controls="made"
                            aria-selected="false">Ofertas Realizadas</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content mt-4">
            <div class="tab-pane fade show active" id="received" role="tabpanel" aria-labelledby="received-tab">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Ofertas Recebidas</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="received-table" class="table text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id do título</th>
                                        <th>Beneficiários</th>
                                        <th>Número do processo</th>
                                        <th>Valor da oferta</th>
                                        <th>Status</th>
                                        <th>Categoria</th>
                                        <th>Titular da oferta</th>
                                        <th>Data da oferta</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="made" role="tabpanel" aria-labelledby="made-tab">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Ofertas Realizadas</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="made-table" class="table text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id do título</th>
                                        <th>Beneficiários</th>
                                        <th>Número do processo</th>
                                        <th>Valor da oferta</th>
                                        <th>Status</th>
                                        <th>Categoria</th>
                                        <th>Titular da oferta</th>
                                        <th>Data da oferta</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <script>
       
       

            $(document).ready(function() {             
                $('#made-table').DataTable(madeConfig);
                $('#received-table').DataTable(receivedConfig);
            });

            const receivedConfig = {
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ route('offers.received') }}",
                    "dataSrc": "data"
                },
                columns: [
                    { "data": "asset.due_diligence.crt.id" },
                    { 
                        "data": null,
                        "render": function(data, type, row) {
                            if (row.asset && row.asset.due_diligence && row.asset.due_diligence.crt && row.asset.due_diligence.crt.users_titles) {
                                return row.asset.due_diligence.crt.users_titles.map(user => 
                                    `<button class="btn btn-outline-primary">${user.name}</button>`
                                ).join("<br>");
                            } else if (row.user) {
                                return `<button class="btn btn-outline-primary">${row.user.name}</button>`;
                            }
                            return 'Sem informação';
                        }
                    },
                    { "data": "asset.due_diligence.crt.process_number" },
                    { "data": "value" },
                    { "data": "status.title" },
                    { "data": "category.title" },
                    { 
                        "data": null,
                        "render": function(data, type, row) {
                            @can('access-admin')
                                if (row.organization) {
                                    return `<span style="color: blue">${row.organization.nome_fantasia}</span>`;
                                } else if (row.user) {
                                    return `<span style="color: green">${row.user.name}</span>`;
                                }
                            @else
                                return 'Confidencial';
                            @endcan
                            return 'Sem informação';
                        }
                    },
                    { "data": "created_at" },
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
            };

            const madeConfig = {
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ route('offers.made') }}",
                    "dataSrc": "data"
                },
                "columns": [
                    { "data": "asset.due_diligence.crt.id" },
                    { 
                        "data": null,
                        "render": function(data, type, row) {
                            if (row.asset && row.asset.due_diligence && row.asset.due_diligence.crt && row.asset.due_diligence.crt.users_titles) {
                                return row.asset.due_diligence.crt.users_titles.map(user => 
                                    `<button class="btn btn-outline-primary">${user.name}</button>`
                                ).join("<br>");
                            } else if (row.user) {
                                return `<button class="btn btn-outline-primary">${row.user.name}</button>`;
                            }
                            return 'Sem informação';
                        }
                    },
                    { "data": "asset.due_diligence.crt.process_number" },
                    { "data": "value" },
                    { "data": "status.title" },
                    { "data": "category.title" },
                    { 
                        "data": null,
                        "render": function(data, type, row) {
                            @can('access-admin')
                                if (row.organization) {
                                    return `<span style="color: blue">${row.organization.nome_fantasia}</span>`;
                                } else if (row.user) {
                                    return `<span style="color: green">${row.user.name}</span>`;
                                }
                            @else
                                return 'Confidencial';
                            @endcan
                            return 'Sem informação';
                        }
                    },
                    { "data": "created_at" },
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
            };
    </script>
@endsection
