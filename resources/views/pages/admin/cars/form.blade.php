@extends("index")

@section('app')
    <form action="{{ isset($car) ? route('cars.update', $car->id) : route('cars.store') }}" method="post">
        @csrf
        @isset($car)
            @method('PUT')
        @endisset
        <legend>
            <h2>
                Formulário de Carros
            </h2>
        </legend>
        <fieldset>
            <div class="mb-3">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                    value="{{ old('name', $car->name ?? '') }}">
                @error('name')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="brand_id" style="margin-bottom: 8px;">Marca: </label>
                <select class="form-select" name="brand_id">
                    <option {{ $car->brand->id ?? 'selected' }} disabled>Selecione uma Marca </option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }} "
                            {{ old('brand_id', $car->brand->id ?? '') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('brand_id')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_value" class="form-label">Valor: </label>
                <input type="number" class="form-control" id="sale_value" name="sale_value" placeholder="R$"
                    value="{{ old('sale_value', $car->sale_value ?? '') }}">
                @error('sale_value')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição: </label>
                <textarea name="description" id="description" cols="10" class="form-control" placeholder="Descrição..."
                    rows="2">{{ old('description', $car->description ?? '') }}</textarea>
                @error('description')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="motor" class="form-label">Motor: </label>
                <input type="text" class="form-control" id="motor" name="motor" placeholder="Motor"
                    value="{{ old('motor', $car->motor ?? '') }}">
                @error('motor')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Ano de Fabricação: </label>
                <input type="number" class="form-control" id="year" name="year"
                    value="{{ old('year', $car->year ?? '') }}" placeholder="Ano de Fabricação">
                @error('year')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mileage" class="form-label">Quilometragem: </label>
                <input type="number" class="form-control" id="mileage" name="mileage" placeholder="KMs Rodados"
                    value="{{ old('mileage', $car->mileage ?? '') }}">
                @error('mileage')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
        </fieldset>
        <button type="submit" style="margin-top:8px;" class="btn btn-primary">Salvar</button>
    </form>
@endsection
