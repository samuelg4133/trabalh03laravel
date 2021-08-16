@extends("index")

@section('app')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ano do Modelo</th>
                <th scope="col">Km rodados</th>
                <th scope="col">Modelo Motor</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($cars as $car)
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->brand->name }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ mb_strimwidth($car->description, 0, 30, '...') }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->mileage }}</td>
                    <td>{{ $car->motor }}</td>
                    <td style="display: flex; align-items: center;">
                        <a href="{{ route('cars.show', $car->id) }}" style="margin-right: 8px;">
                            <i class="bi bi-eye-fill text-dark"></i>
                        </a>
                        <a href="{{ route('cars.edit', $car->id) }}" class="button-blue" style="margin-right: 8px;">
                            <i class="bi bi-pen-fill"></i>
                        </a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="post">
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

    <a href="{{ route('cars.create') }}">
        <button type="button" class="btn btn-primary">Adicionar</button>
    </a>
@endsection
