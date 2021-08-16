@extends("index")

@section('app')
    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-light"> {{ $car->brand->name }} - {{ $car->name }}
                ({{ $car->year }})</span>
        </div>
        <div class="container-fluid">
            <small class="text-light ">{{ $car->description }}</small>
        </div>
    </nav>
    <div class="navbar navbar-light bg-light" style="margin-top:24px;">
        <ul class="nav flex-column" style="padding: 6px 12px;">
            <li>
                <span class="navbar-brand h3">
                    Quilometragem:
                </span>
                {{ str_replace('.', ',', $car->mileage) }} km
            </li>
            <li> <span class="navbar-brand h3">
                    Motor:
                </span>
                {{ $car->motor }}
            </li>
            <li> <span class="navbar-brand h3">
                    Valor:
                </span>
                R$ {{ str_replace('.', ',', $car->sale_value) }}
            </li>
        </ul>
    </div>
@endsection
