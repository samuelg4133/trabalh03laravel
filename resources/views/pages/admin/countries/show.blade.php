@extends("index")

@section('app')
<nav class="navbar navbar-light bg-info">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-light">{{$country->name}} - {{$country->initials}}</span>
    </div>
  </nav>
@endsection
