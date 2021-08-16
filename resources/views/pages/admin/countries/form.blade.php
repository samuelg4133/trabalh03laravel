@extends("index")

@section('app')
    <form action="{{ isset($country) ? route('countries.update', $country->id) : route('countries.store') }}"
        method="post">
        @csrf

        @isset($country)
            @method('PUT')
        @endisset
        <legend>
            <h2>
                Formulário de Países
            </h2>
        </legend>
        <fieldset>
            <div class="mb-3">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                    value="{{ old('name', $country->name ?? '') }}">
                @error('name')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="initials" class="form-label">Sigla: </label>
                <input type="text" maxlength="4" class="form-control" id="initials" name="initials" placeholder="Sigla"
                    value="{{ old('initials', $country->initials ?? '') }}">
                @error('initials')
                    <span><small class="text-danger">{{ $message }}</small></span>
                @enderror
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
