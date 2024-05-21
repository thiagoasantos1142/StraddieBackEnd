@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <style>
        .custom-cel {
            word-break: break-word;
            white-space: pre-line;
            min-width: 100px;
            width: 20%;
        }
    </style>
@endsection

@section('content')
    <!-- PAGE-HEADER -->

    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Títulos</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Gerenciar Títulos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Títulos</li>
            </ol>
        </div>
    </div>
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
                        <div class="card-title">Títulos</div>
                        <div class="d-flex">
                            <a href="{{ route('creditRightsTitle.create') }}"
                                class="btn btn-primary btn-block float-end my-2"><i
                                    class="fa fa-plus-square me-2"></i>Adicionar Títulos</a>
                        </div>
                    </div>
                    <div id="custom-filter" data-filters="{{json_encode($ctrTypes)}}"></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-export" class="table text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Assunto / Sobre </th>
                                        <th>Corte</th>
                                        <th>BENEFICIÁRIOS</th>
                                        <th>Órgão Devedor</th>
                                        <th>Natureza do Crédito</th>
                                        <th>Valor Principal</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($creditRightsTitles as $titles)
                                        <tr>

                                            <td title="{{ $titles->title }}">{{ substr($titles->title, 0, 25) }}</td>
                                            <td title="{{ $titles->court->title }}">
                                                {{ substr($titles->court->title, 0, 25) }}</td>

                                            <td>
                                                @foreach ($titles->users_titles as $beneficiary)
                                                    <button type="button"
                                                        class="btn btn-sm btn-info">{{ $beneficiary->name }}</button>
                                                @endforeach
                                            </td>
                                            <td>{{ $titles->crtOriginDebtor->title }}</td>
                                            <td title="{{ $titles->CrtNatureCredit->title }}">
                                                {{ substr($titles->CrtNatureCredit->title, 0, 25) }}</td>


                                            <td>{{ $titles->principal_amount }}</td>


                                            <td class="align-middle">
                                                <div class="btn-list">
                                                    <a
                                                        href="{{ route('creditRightsTitle.show', ['creditRightsTitle' => $titles->id]) }}">
                                                        <button class="btn btn-sm btn-icon btn-info-light rounded-circle"
                                                            type="button"><i class="bi bi-pencil-square"></i></button>
                                                    </a>
                                                    <a href="">
                                                        <button
                                                            class="btn btn-sm btn-icon btn-secondary-light rounded-circle"
                                                            type="button"><i class="bi bi-trash"></i></button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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
        // crt_origin_debitors
        // crt_types

        const table = $('#file-export').DataTable({
            "ajax": {
                "url": "/dashboard/creditRightsTitle", // URL para a fonte de dados
                "dataSrc": "data" // Campo para os dados (se não especificado, usa "data")
            },
            "columnDefs": [{
                    "targets": [2, 5],
                    "className": 'custom-cel'
                }, // Largura da primeira célula (0)
                {
                    // "targets": 0, // Índice da coluna alvo
                    // "createdCell": function(td, cellData, rowData, row, col) {
                    //     // Adiciona uma classe personalizada ao <td> da primeira coluna
                    //     $(td).addClass('minha-classe');
                    //     // Outras personalizações podem ser feitas aqui
                    // }
                    // "min-width": "20%",
                    // "width": "20%",
                    // "targets": 1
                }, // Largura da segunda célula (1)
                // Adicione mais definições de coluna conforme necessário
            ],
            "columns": [{
                    "data": "id"
                }, // Campo "nome" do JSON
                {
                    "data": "title"
                }, // Campo "nome" do JSON
                {
                    "data": "court.title"
                }, // Campo "nome" do JSON
                {
                    "data": "users_titles",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        if(!!data){
                            const users = data.map((obj) => {
                                return `<button type="button"
                                                            class="btn btn-sm btn-info">${obj.name}</button>`;
                            });
                            return users?.join('');
                        }
                        return '';
                    }
                },
                {
                    "data": "crt_origin_debtor.title"
                },
                {
                    "data": "crt_nature_credit.title"
                },
                {
                    "data": "principal_amount"
                },
                {
                    "data": "id",
                    "render": function(data, type, row, meta) {
                        // Renderização personalizada para a segunda coluna, se necessário
                        return `
                        <div class="btn-list">
                            <a
                                href="/dashboard/creditRightsTitle/${data}">
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
