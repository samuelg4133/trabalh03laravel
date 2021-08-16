<header class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">ShopCar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    </div>
    <nav class="container-fluid">
        <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="{{route('cars.index')}}">Carros</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="{{route('brands.index')}}">Marcas</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="{{route('countries.index')}}">Países</a>
      </nav>
    </div>
</header>
