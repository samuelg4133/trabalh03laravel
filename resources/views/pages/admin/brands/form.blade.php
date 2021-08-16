@extends("index")

@section('app')
    <form action="{{ isset($brand) ? route('brands.update', $brand->id) : route('brands.store') }}" method="post">
        @csrf
        @isset($brand)
            @method('PUT')
        @endisset
        <legend>
            <h2>
                Formulário de Marcas
            </h2>
        </legend>
        <fieldset>
            <div class="mb-3">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                    value="{{ old('name', $brand->name ?? '') }}">
                @error('name')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slogan" class="form-label">Slogan: </label>
                <input type="text" class="form-control" id="slogan" name="slogan" placeholder="Slogan"
                    value="{{ old('slogan', $brand->slogan ?? '') }}">
                @error('slogan')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foundation_date" class="form-label">Data de Fundação: </label>
                <input type="date" class="form-control" id="foundation_date" name="foundation_date"
                    value="{{ old('foundation_date', $brand->foundation_date ?? '') }}">
                @error('foundation_date')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website: </label>
                <input type="site" class="form-control" id="website" name="website" placeholder="example.com"
                    value="{{ old('website', $brand->website ?? '') }}">
                @error('website')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <p>Status: </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="active" value="1"
                    {{ isset($brand->active) ? ($brand->active ? 'checked' : '') : 'checked' }}>
                <label class="form-check-label" for="active">
                    Ativo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="inactive" value="0" @if (isset($brand->active) && $brand->active == 0) checked @endif>
                <label class="form-check-label" for="inactive">
                    Inativo
                </label>
            </div>
            @error('active')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
            <label for="country_id" style="margin: 12px 0;">País Sede: </label>
            <select class="form-select" name="country_id">
                <option {{ $brand->country->id ?? 'selected' }} disabled>Selecione um País: </option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }} "
                        {{ old('country_id', $brand->country->id ?? '') == $country->id ? 'selected' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
            @error('country_id')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
        </fieldset>
        <button type="submit" style="margin-top:16px;" class="btn btn-primary">Salvar</button>
    </form>
@endsection
