@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Empresas</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Gerenciar Empresas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Empresas</li>
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
                        <div class="card-title">Ativos</div>
                        <div class="d-flex">
                            <a href="{{ route('assets.create') }}" class="btn btn-primary btn-block float-end my-2"><i
                                    class="fa fa-plus-square me-2"></i>Adicionar ativo</a>
                        </div>
                    </div>
                    <div id="filter-assets" data-filters="{{ json_encode($crtTypes) }}"></div>
                    <div id="filter-assets-origin-debitors" data-filters="{{ json_encode($crtOriginDebitors) }}"></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="assets-table" class="table text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>número do processo</th>
                                        <th>Crédito a venda</th>
                                        <th>Valor do crédito</th>
                                        <th>Honorários a venda</th>
                                        <th>Valor do honorario</th>
                                        <th>Percentual do honorario</th>
                                        <th>Ofertas</th>
                                        <th>Criada em</th>
                                        <th>Açoes</th>
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
                "url": "/dashboard/assets", // URL para a fonte de dados
                "dataSrc": "data" // Campo para os dados (se não especificado, usa "data")
            },
            // "columnDefs": [{
            //         "targets": [2, 5],
            //         "className": 'custom-cel'
            //     }, // Largura da primeira célula (0)
            //     {
            //         // "targets": 0, // Índice da coluna alvo
            //         // "createdCell": function(td, cellData, rowData, row, col) {
            //         //     // Adiciona uma classe personalizada ao <td> da primeira coluna
            //         //     $(td).addClass('minha-classe');
            //         //     // Outras personalizações podem ser feitas aqui
            //         // }
            //         // "min-width": "20%",
            //         // "width": "20%",
            //         // "targets": 1
            //     }, // Largura da segunda célula (1)
            //     // Adicione mais definições de coluna conforme necessário
            // ],
            "columns": [{
                    "data": "id"
                }, // Campo "nome" do JSON
                {
                    "data": "title"
                }, // Campo "nome" do JSON
                {
                    "data": "process_number"
                }, // Campo "nome" do JSON
                {
                    "data": "main_credit_for_sale",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        if (!!data) {
                            return `<p>Sim</p>`
                        }
                        return `<p>Não</p>`;
                    }
                },
                {
                    "data": "main_credit_for_sale",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        if (!!data) {
                            return `<p>${row.negotiated_value}</p>`
                        }
                        return 'N/A';
                    }
                },
                {
                    "data": "contractual_fees_for_sale",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        if (!!data) {
                            return `<p>Sim</p>`
                        }
                        return `<p>Não</p>`;
                    }
                },
                {
                    "data": "contractual_fees_for_sale",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        if (!!data) {
                            return `<p>${row.negotiated_fee_value}</p>`
                        }
                        return 'N/A';
                    }
                },
                {
                    "data": "highlighted_contractual_fee",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        if (!!data) {
                            return `<p>${row.percentage_contractual_fee}</p>`
                        }
                        return 'N/A';
                    }
                },
                {
                    "data": "count_offer",
                    "render": function(data, type, row, meta) {
                        if (data == '0') {
                            return `<button type="button" class='btn btn-danger' placeholder="" value="" disabled>${data}</button>`
                        } else if (data >= 1 && data <= 5) {
                            return `<button type="button" class='btn btn-warning' placeholder="" value="" disabled>${data}</button>`
                        } else {
                            return `<button type="button" class='btn btn-success' placeholder="" value="" disabled>${data}</button>`
                        }
                    }
                }, // Campo "nome" do JSON
                {
                    "data": "created_at"
                }, // Campo "nome" do JSON
                {
                    "data": "id",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        return `
                        <div class="btn-list">
                            <a
                                href="/dashboard/assets/${data}">
                                <button class="btn btn-sm btn-icon btn-info-light rounded-circle"
                                    type="button"><i class="bi bi-pencil-square"></i></button>
                            </a>
                            <a href="">
                                <button
                                    class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                                    type="button"><i class="bi bi-trash"></i></button>
                            </a>
                        </div>
                        `;
                    }
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
