    <div>
        <style>
            .navbar-nav .nav-link {
                color: #1c1c1c;
                /* Color deseado */
            }

            /* Cambiar el color del texto para nav-link cuando está siendo hovereado */
            .navbar-nav .nav-link:hover {
                color: #0a0a0a;
                /* Color deseado al pasar el mouse sobre el enlace */
            }

        </style>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#f6f6f6">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"> <img src="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}"alt="logo_bomoc"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset('imagenes/icons/Menu.svg') }}" alt="menu_drop">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="bombasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bombas
                            </a>
                            <ul class="dropdown-menu " style="max-height: 200px;
                                overflow-x: hidden;
                                overflow-y: scroll;" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('altamira') }}">Altamira</a></li>
                                <li><a class="dropdown-item" href="{{ route('armstrong') }}">Armstrong</a></li>
                                <li><a class="dropdown-item" href="{{ route('aurora') }}">Aurora</a></li>
                                <li><a class="dropdown-item" href="{{ route('barmesa') }}">Barmesa</a></li>
                                <li><a class="dropdown-item" href="{{ route('franklin') }}">Franklin Electric</a></li>
                                <li><a class="dropdown-item" href="{{ route('flygt') }}">Flygt</a></li>
                                <li><a class="dropdown-item" href="{{ route('grundfos') }}">Grundfos</a></li>
                                <li><a class="dropdown-item" href="{{ route('impel') }}">Impel</a></li>
                                <li><a class="dropdown-item" href="{{ route('jandy') }}">Jandy/Astralpool</a></li>
                                <li><a class="dropdown-item" href="{{ route('mann') }}">Mann pumps</a></li>
                                <li><a class="dropdown-item" href="{{ route('netzsch') }}">Netzsch</a></li>
                                <li><a class="dropdown-item" href="{{ route('pentair') }}">Pentair</a></li>
                                <li><a class="dropdown-item" href="{{ route('tsurumi') }}">Tsurumi Pump</a></li>
                                <li><a class="dropdown-item" href="{{ route('wdm') }}">Wdm</a></li>
                                <li><a class="dropdown-item" href="{{ route('wilo') }}">Wilo/Scott</a></li>
                                <li><a class="dropdown-item" href="{{ route('zoeller') }}">Zoeller</a></li>
                            </ul>
                            <!-- end menu desplegable -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="otrasLineasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Otras lineas de productos
                            </a>
                            <!-- start menu desplegable -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('contraincendios') }}">Contraincendios</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('tableros') }}">Tableros</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('abb') }}">Variadores</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('motores') }}">Motores</a></li>
                            </ul>
                            <!-- end menu desplegable -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                        </li>
                        {{-- @if (Route::has('login'))
                        @auth
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('profile.show') }}">Perfil</a>
                        </li>
                        @if (auth()->user()->can('modificacion'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    Salir
                                </a>
                            </li>
                        </form>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Acceder</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrate</a>
                        </li>
                        @endif
                        @endauth
                        @endif --}}

                        @livewire('exchange-rate')
                    </ul>
                 
                </div>
             
            </div>
         
        </nav>
    </div>