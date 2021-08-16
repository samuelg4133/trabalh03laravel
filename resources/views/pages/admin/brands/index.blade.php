@extends("index")

@section('app')
    <div id="root" style="margin:48px;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Slogan</th>
                    <th scope="col">Data de Fundação</th>
                    <th scope="col">Website</th>
                    <th scope="col">Status</th>
                    <th scope="col">País Sede</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <th scope="row">{{ $brand->id }}</th>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->slogan }}</td>
                        <td>{{ $brand->foundation_date }}</td>
                        <td>
                            <a href="{{ $brand->website }}" target="_blank" rel="noopener noreferrer">
                                {{ $brand->website }}
                            </a>
                        </td>
                        <td>{{ $brand->active ? 'ativo' : 'inativo' }}</td>
                        <td>{{ $brand->country->name }}</td>

                        <td style="display: flex; align-items: center;">
                            <a href="{{ route('brands.show', $brand->id) }}" style="margin-right: 8px;">
                                <i class="bi bi-eye-fill text-dark"></i>
                            </a>
                            <a href="{{ route('brands.edit', $brand->id) }}" class="button-blue"
                                style="margin-right: 8px;">
                                <i class="bi bi-pen-fill"></i>
                            </a>
                            <form action="{{ route('brands.destroy', $brand->id) }}" method="post">
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
        <a href="{{ route('brands.create') }}">
            <button type="button" class="btn btn-primary">Adicionar</button>
        </a>

    </div>
@endsection
