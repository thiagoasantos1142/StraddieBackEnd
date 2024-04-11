<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Dados da empresa</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ $attributes['action'] }}">
                @csrf
                @if ($attributes[':type'] === 'update')
                    @method('PUT')
                @endif
                <div class="form-row">
                    @foreach ($attributes['dataForm']['inputs'] as $input)
                        @if (isset($input['input']))
                            @switch($input['input'])
                                @case($input['input'] == 'select')
                                    <div class="form-group col-md-{{ $input['col'] ?? '12' }} mb-0">
                                        <label for="{{ $input['name'] ?? $input['id'] }}"
                                            class="form-label">{{ $input['label'] }}</label>
                                        <select class="form-select " id="{{ $input['name'] ?? $input['id'] }}"
                                            name="{{ $input['name'] }}" @if ($attributes[':type'] === 'update') disabled @endif data-input>
                                            <option>Disabled select</option>
                                            @foreach ($input['options'] as $item)
                                                <option value="1">
                                                    Disabled 1
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @break

                                @default
                            @endswitch
                        @else
                            <div class="form-group col-md-{{ $input['col'] ?? '12' }} mb-0">
                                <label for="{{ $input['name'] ?? $input['id'] }}"
                                    class="form-label">{{ $input['label'] }}</label>
                                <input type="text" class="form-control  @error($input['name']) is-invalid @enderror"
                                    id="{{ $input['name'] ?? $input['id'] }}" name="{{ $input['name'] }}"
                                    placeholder="{{ $input['placeholder'] ?? $input['label'] }}"
                                    value="{{ old($input['name']) ?? ($input['value'] ?? '') }}"
                                    @if ($attributes[':type'] === 'update') disabled @endif data-input>
                            </div>
                        @endif
                        @error($input['name'])
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    @endforeach
                </div>
                <div class="d-flex flex-row-reverse">
                    <button class="btn btn-primary mt-4 mb-0" type="button"
                        data-saveform="{{ $attributes[':type'] }}">{{ $attributes[':type'] === 'update' ? 'Editar' : 'Salvar' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('scripts')
    @parent
    @vite('resources/assets/js/components/defaultForm.js')
@endsection
