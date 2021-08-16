@extends("index")

@section('app')
    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-light">{{ $brand->name }}</span>
        </div>
        <div class="container-fluid">
            <small class="text-light">{{ $brand->slogan }}</small>
        </div>
    </nav>
    <div class="navbar navbar-light bg-light" style="margin-top:24px;">
        <ul class="nav flex-column" style="padding: 6px 12px;">
            <li>
                <span class="navbar-brand h3">
                    Data de fundação:
                </span>
                {{ $brand->foundation_date }}
            </li>
            <li> <span class="navbar-brand h3">
                    País Sede:
                </span>
                {{$brand->country->name}} - {{$brand->country->initials}}
            </li>
            <li> <span class="navbar-brand h3">
                    Website:
                </span>
                <a href="{{ $brand->website }}" target="_blank" rel="noopener noreferrer">{{ $brand->website }}</a>
            </li>
            <li>
                <span class="navbar-brand h3">
                    Status:
                </span>
                {{$brand->active ? "ativo" : "inativo"}}
            </li>
        </ul>
    </div>
@endsection
