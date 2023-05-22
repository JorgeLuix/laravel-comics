<header>
        <div class="container d-flex justify-content-center justify-content-between ">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }} " alt="">
        </div>
        <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
        </div>
        {{-- <div class="main-menu">
            <div class="navbar-nav">
                <ul class="d-flex gap-4 text-uppercase align-items-center">
                    @foreach ($headerItems as $item)
                    <li class="nav-item list-unstyled">
                        <a href="#"> {{ $item }} </a>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div> --}}
</header>
