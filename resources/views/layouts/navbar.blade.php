<nav id="ocultar" class="navbar navbar-expand-md navbar-light fixed-top navbar-static-top" style="background-color: rgb(35,130,118);opacity: 0.8;">
    <div class="container">
        <div class="navbar-header" style="align-items: center;">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse"><span class="navbar-toogler-icon"></span>
            </button>
            <a style="color: white; font-size: 24px; font-weight: 600;" class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imgs/logosena.png') }}" style="width: 40px; height: 40px;">&nbsp;&nbsp;SIPLATRI-<?php \Carbon\Carbon::setLocale(config('app_locale')); echo date('D M Y'); ?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @if (Auth::guest())
                    <li><a style="color: white; font-weight: 700; font-size: 18px;" href="{{ route('login') }}" class="nav-link"><i class="fa fa-lock"></i> Ingresar </a></li>
                    <li><a style="color: white; font-weight: 700; font-size: 18px;" href="{{ route('register') }}" class="nav-link"><i class="fa fa-users"></i> Registrar</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white; font-size: 18px;">
                          {{ Auth::user()->role }}  <strong>{{ Auth::user()->fullname }}</strong> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                @if(Auth::user()->role == 'Admin')

                                    <a href="{{ url('user') }}" class="dropdown-item">
                                        <i class="fa fa-users"></i> Instructores
                                    </a>

                                    <a href="{{ url('classroom') }}" class="dropdown-item">
                                        <i class="fas fa-warehouse"></i> Ambientes
                                    </a>

                                    <a href="{{ url('#') }}" class="dropdown-item">
                                        <i class="fas fa-boxes"></i> Programas
                                    </a>

                                    <a href="{{ url('#') }}" class="dropdown-item">
                                        <i class="fas fa-clipboard-list"></i> Fichas
                                    </a>
                                    <a href="{{ url('#') }}" class="dropdown-item">
                                        <i class="fas fa-clipboard-list"></i> Competencias
                                    </a>
                                    <div class="dropdown-divider"></div>
                                @else
                                    <a href="{{ url('#') }}" class="dropdown-item">
                                        <i class="fa fa-newspaper"></i>Mis articulos
                                    </a>
                                    <div class="dropdown-divider"></div>
                                @endif


                                <a href="{{ route('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-times"></i>  Cerrar Sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>