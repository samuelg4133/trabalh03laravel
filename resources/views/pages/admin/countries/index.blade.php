@extends("index")

@section('app')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sigla</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
                <tr>
                    <th scope="row">{{ $country->id }}</th>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->initials }}</td>
                    <td style="display: flex; align-items: center;">
                        <a href="{{ route('countries.show', $country->id) }}" style="margin-right: 8px;">
                            <i class="bi bi-eye-fill text-dark"></i>
                        </a>
                        <a href="{{ route('countries.edit', $country->id) }}" style="margin-right: 8px;">
                            <i class="bi bi-pen-fill"></i>
                        </a>
                        <form action="{{ route('countries.destroy', $country->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button style="border:0;background:transparent;" type="submit">
                                <i class="bi bi-trash-fill text-danger">
                                </i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('countries.create') }}">
        <button type="button" class="btn btn-primary">Adicionar</button>
    </a>
@endsection
