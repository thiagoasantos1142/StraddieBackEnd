@extends('layouts.master', ['noNavebar' => true])

@section('styles')
    <link rel="stylesheet" href="{{ asset('build/assets/libs/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/quill/quill.bubble.css') }}">

    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
            height: 100vh;
            overflow: hidden;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: #f3f6f9;
        }

        .formbold-steps {
            padding-bottom: 18px;
            margin-bottom: 35px;
            border-bottom: 1px solid #DDE3EC;
        }

        .formbold-steps ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            gap: 40px;
        }

        .formbold-steps li {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }

        .formbold-steps li span {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #DDE3EC;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }

        .formbold-steps li.active {
            color: #07074D;
            ;
        }

        .formbold-steps li.active span {
            background: #00a5a2;
            color: #FFFFFF;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 22px;
        }

        .formbold-input-flex>div {
            width: 50%;
        }

        .formbold-form-input {
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #DDE3EC;
            background: #f3f6f9;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #00a5a2;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-form-label {
            color: #07074D;
            font-weight: 500;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-form-confirm {
            border-bottom: 1px solid #DDE3EC;
            padding-bottom: 35px;
        }

        .formbold-form-confirm p {
            font-size: 16px;
            line-height: 24px;
            color: #536387;
            margin-bottom: 22px;
            width: 75%;
        }

        .formbold-form-confirm>div {
            display: flex;
            gap: 15px;
        }

        .formbold-confirm-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #f3f6f9;
            border: 0.5px solid #DDE3EC;
            border-radius: 5px;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
            cursor: pointer;
            padding: 10px 20px;
            transition: all .3s ease-in-out;
        }

        .formbold-confirm-btn {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
        }

        .formbold-confirm-btn.active {
            background: #00a5a2;
            color: #FFFFFF;
        }

        .formbold-form-step {
            display: none;
        }

        .active {
            display: block;
        }

        .formbold-form-btn-wrapper {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 25px;
            margin-top: 25px;
        }

        .formbold-back-btn {
            cursor: pointer;
            background: #fff;
            border: none;
            color: #07074D;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            display: none;
        }

        .formbold-back-btn.active {
            display: block;
        }

        .formbold-btn {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 16px;
            border-radius: 5px;
            padding: 10px 25px;
            border: none;
            font-weight: 500;
            background-color: #00a5a2;
            color: white;
            cursor: pointer;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .app-content {
            margin: 0 !important
        }
    </style>
@endsection

@section('content')
    <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
            <div class="card p-4">
                <div class="main-container container-fluid">
                    <div class="formbold-steps">
                        <div class="d-flex flex-row justify-content-between">
                            @foreach ($files as $key => $file)
                                <li class="active" data-stepheader="{{ $key + 1 }}" style="display: none">
                                    <span>{{ $key + 1 }}</span>
                                    {{ $file->document_type->title }}
                                </li>
                            @endforeach
                            <li class="active" data-totalsteps>
                                <span>1</span>
                                Total
                            </li>
                        </div>
                    </div>
    
                    @foreach ($files as $key => $file)
                        {{-- controla onde parou o step --}}
                        @if ($file->id === $stopIn->id)
                            <input type="hidden" name="stopIn" value="{{ $key + 1 }}">
                        @endif
    
                        <div class="" data-step="{{ $key + 1 }}" style="display: none">
                            
                            <div class="" data-showdocument>
                                @if (isset($file->path))
                                    <div class="col-12" data-file>
                                        <div class="card file-manager">
                                            <a href="{{ route('download.file', ['id' => $file->id]) }}" target="_blank"
                                                class="stretched-link"></a>
                                            <div class="card-body">
                                                <div class="file-dropdown file-icon">
                                                    <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                                            class="mdi mdi-dots-vertical fs-10"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="fe fe-edit me-2"></i> Visualizar</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="fe fe-download me-2"></i> Baixar</a>
                                                        <form action="{{ route('files.destroy', ['file' => $file->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fe fe-trash me-2"></i> Excluir
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="55px" width="55px"
                                                        enable-background="new 0 0 100 100" viewBox="0 0 100 100" id="pdf">
                                                        <path fill="#00a5a2" d="M55,52c0.3,0.3,0.5,0.7,0.5,1.2c0,0.6-0.2,1-0.5,1.3c-0.4,0.3-0.9,0.4-1.6,0.4h-0.8v-3.3h1.1
                                                                            C54.3,51.6,54.7,51.8,55,52z"></path>
                                                        <path fill="#00a5a2" d="M75.6,73.6H72c-0.6,0-1,0.5-1,1l0,7.3c0,2.7-2.2,5-4.9,5l-44.9,0.3c-2.4,0-4.4-1.6-4.9-3.9
                                                                                c-0.1-0.3-0.1-0.7-0.1-1.1L16,35.9c0-0.3,0.3-0.6,0.6-0.6l18.8-0.1c3.3,0,5.9-2.7,5.9-5.9l-0.1-15.7c0-0.3,0.3-0.6,0.6-0.6
                                                                                l23.8-0.2c2.7,0,5,2.2,5,4.9l0.1,18.5c0,0.6,0.5,1,1,1h3.6c0.6,0,1-0.5,1-1l-0.1-21.4c0-4.3-3.5-7.8-7.9-7.8L39.1,7.3
                                                                                c-0.8,0-1.7,0.3-2.3,0.9L11.4,31.5c-0.7,0.7-1.1,1.6-1.1,2.5l0.2,51c0,4.3,3.5,7.8,7.9,7.8l50.6-0.1c4.3-0.2,7.8-3.7,7.8-8l0-10.1
                                                                                C76.6,74.1,76.2,73.6,75.6,73.6z"></path>
                                                        <path fill="#00a5a2"
                                                            d="M63.6,51.6h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M63.6,51.6
                                                                                h-1.3v7.3h1c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z M86.7,41.9H42c-1.7,0-3,1.4-3,3v20.8c0,1.7,1.4,3,3,3h44.7
                                                                                c1.7,0,3-1.4,3-3V44.9C89.7,43.2,88.4,41.9,86.7,41.9z M56.8,55.9c-0.8,0.6-1.8,1-3.2,1h-1v4h-2.4V49.7h3.6c1.4,0,2.4,0.3,3.1,0.9
                                                                                c0.7,0.6,1.1,1.5,1.1,2.6C57.9,54.4,57.5,55.3,56.8,55.9z M67.7,59.4c-1,1-2.6,1.5-4.5,1.5H60V49.7h3.5c1.8,0,3.2,0.5,4.2,1.4
                                                                                c1,1,1.5,2.3,1.5,4C69.2,57,68.7,58.4,67.7,59.4z M78,51.6h-4.1v2.9h3.8v1.9h-3.8v4.4h-2.3V49.7H78V51.6z M63.6,51.6h-1.3v7.3h1
                                                                                c2.3,0,3.4-1.2,3.4-3.7C66.8,52.8,65.7,51.6,63.6,51.6z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <p class="text-center mt-3">{{ $file->filename }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
    
                            <form name="form" enctype="multipart/form-data">
                                {{-- multiple --}}
                                @csrf
                                <div class="mb-3">
                                    <label for="fileInput" class="form-label">Selecione um arquivo</label>
                                    <input class="form-control" type="file" name="file">
                                </div>
                                <input type="hidden" name="type_id" value="21">
                                <input type="hidden" name="category_id" value="1">
                                {{-- ajustar para usar filePond --}}
                                {{-- <div class="form-group mb-0">
                                <label class="col-md-3 form-label mb-4">Foto do RG :</label>
                                <input type="file" class="product-Images" name="file" data-allow-reorder="true"
                                    data-max-file-size="3MB" data-max-files="6">
                            </div> --}}
                            </form>
                        </div>
                    @endforeach
                    <div class="formbold-form-btn-wrapper">
                        <button class="formbold-back-btn">
                            Voltar
                        </button>
                        <button class="formbold-btn">
                            Proximo
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1675_1807)">
                                    <path
                                        d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1675_1807">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('build/assets/libs/filepond/filepond.min.js') }}"></script>
    @vite('resources/assets/js/pages/formDocuments.js');
@endsection
