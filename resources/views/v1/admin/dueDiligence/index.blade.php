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
        <h1 class="page-title">Títulos</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Gerenciar Due Diligences</a></li>
                <li class="breadcrumb-item active" aria-current="page">Due Diligence</li>
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
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-export" class="table text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Assunto / Sobre do título </th>
                                        <th>ID do titulo</th>
                                        <th>BENEFICIÁRIOS</th>
                                        <th>Órgão Devedor</th>                                        
                                        <th>Natureza do Crédito</th>
                                        <th>Valor Principal</th>
                                        
                                        <th>Status da Due Diligence</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dueDiligences as $dueDiligence)
                                        <tr>
                                            
                                            <td title="{{ $dueDiligence->crt->title }}">{{ substr($dueDiligence->crt->title, 0, 25) }}</td>
                                            <td>{{ $dueDiligence->crt->id }}</td>
                                      
                                            <td>
                                                @foreach ($dueDiligence->crt->users_titles as $beneficiary)
                                                    <button type="button" class="btn btn-sm btn-info">{{ $beneficiary->name }}</button>
                                                @endforeach
                                            </td> 
                                            <td>{{ $dueDiligence->crt->crtOriginDebtor->title}}</td>
                                            <td title="{{ $dueDiligence->crt->CrtNatureCredit->title }}">{{ substr($dueDiligence->crt->CrtNatureCredit->title, 0, 25) }}</td>
                                      
                                            
                                            <td>{{ $dueDiligence->crt->principal_amount }}</td>

                                            <td>{{ $dueDiligence->status->title ?? '' }}</td>



                                            <td class="align-middle">
                                                <div class="btn-list">
                                                    <a href="{{ route('dueDiligence.show', ['dueDiligence' => $dueDiligence->id]) }}">
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
                                    @endforeach
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
        $('#file-export').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
    </script>
    {{-- @vite('resources/assets/js/table-data.js') --}}
@endsection
