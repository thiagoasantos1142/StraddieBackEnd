@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
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
    <!-- PAGE-HEADER END -->

    {{-- <div class="alert alert-solid-secondary alert-dismissible fs-15 fade show mb-4 mx-3">
        We Placed <strong class="text-fixed-black">Datatables</strong> only in this page by using <strong
            class="text-fixed-black">jquery</strong> cdn link.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
    </div> --}}

    <!-- CONTAINER -->
    <div class="main-container container-fluid"> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">Ofertas</div>                        
                    </div>                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="assets-table" class="table text-nowrap w-100">
                                <thead>
                                    <tr>
                                       
                                        <th>Id do título</th>
                                        <th>Beneficiários</th>
                                        <th>Número do proeesso</th>
                                        <th>Valor da oferta</th>
                                        <th>Status</th>
                                        <th>Data da oferta</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
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

    <!-- Datatables Cdn -->
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
        console.log('Hello');
        const table = $('#assets-table').DataTable({
            "ajax": {
                "url": "/dashboard/offers", // URL para a fonte de dados
                "dataSrc": "data" // Campo para os dados (se não especificado, usa "data")
            },
            "columns": [
               
                {
                    "data": "asset.due_diligence.crt.id"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        if (row.asset && row.asset.due_diligence && row.asset.due_diligence.crt && row.asset.due_diligence.crt.users_titles) {
                            return row.asset.due_diligence.crt.users_titles.map(user => 
                                `<button class="btn btn-outline-primary">${user.name}</button>`
                            ).join("<br>");
                        }
                        return '';
                    }
                },
                {
                    "data": "asset.due_diligence.crt.process_number"
                },
                {
                    "data": "value"
                },
                {
                    "data": "offer_status.title"
                },
                {
                    "data": "created_at"
                },
            ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
    </script>
    {{-- @vite('resources/assets/js/table-data.js') --}}
@endsection
