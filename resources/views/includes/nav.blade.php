<nav class="navbar navbar-expand-lg bg-body-dark  border-bottom border-warning py-3">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ route('movie.index') }}">My movie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a  class="nav-link text-white" href="{{ route('movie.create') }}">Add Movie</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link text-white">
                            Dashboard
                        </a>
                    </li>
                @endauth

                {{-- @guest
                    se utente non loggato
                @endguest --}}
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    {{-- se utente loggato --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- altrimenti, se l'utente non è loggato --}}
                    <li class="nav-item text-white">
                        <a href="{{ route('login') }}" class="nav-link text-white">
                            Log in
                        </a>
                    </li>
                    <li class="nav-item text-white">
                        <a href="{{ route('register') }}" class="nav-link text-white">
                            Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>