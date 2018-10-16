<nav id="ocultar" class="navbar navbar-expand-md fixed-top navbar-static-top" style="background-color: /*#238276*/; color: #238276;">
    <div class="navbar-header col-3" style="align-items: center;">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse"><span class="navbar-toogler-icon"></span>
        </button>
        @if(Auth::user()->role == 'Admin')
        <style>
            .hover01 img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .15s ease-in-out;
    transition: .15s ease-in-out;
}
.hover01 img:hover {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
        </style>
            <a class="hover01 column" style="width: 200px; color: #238276; font-size: 16px; font-weight: 600; text-decoration: none;" class="navbar-brand" href="{{ url('home') }}"><img class="" src="{{ asset('imgs/logoverde.png') }}" style="width: 60px; height: 60px; margin-top: 5px;">&nbsp;&nbsp;SIPLATRI <?php \Carbon\Carbon::setLocale(config('app_locale')); echo date('d M Y');?>
            </a>
            @elseif(Auth::user()->role == 'Instructor')
            <style>
            .hover01 img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}
.hover01 img:hover {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
        </style>
            <a class="hover01 column" style="color: #238276; font-size: 16px; font-weight: 600; text-decoration: none;" class="navbar-brand" href="{{ url('home') }}"><img class="" src="{{ asset('imgs/logoverde.png') }}" style="width: 60px; height: 60px; margin-top: 5px;">&nbsp;&nbsp;SIPLATRI <?php \Carbon\Carbon::setLocale(config('app_locale')); echo date('d M Y');?>
            </a>
            @elseif(Auth::user()->role == 'Almac')
            <style>
            .hover01 img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}
.hover01 img:hover {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
        </style>
            <a class="hover01 column" style="color: #238276; font-size: 16px; font-weight: 600; text-decoration: none;" class="navbar-brand" href="{{ url('home') }}"><img class="" src="{{ asset('imgs/logoverde.png') }}" style="width: 60px; height: 60px; margin-top: 5px;">&nbsp;&nbsp;SIPLATRI <?php \Carbon\Carbon::setLocale(config('app_locale')); echo date('d M Y');?>
            </a>
        @endif
    </div>
    <div class="col-5"></div>
    <div class="collapse navbar-collapse col-md-4" id="app-navbar-collapse">
        <ul class="navbar-nav ml-auto">
            @if (Auth::guest())
                <li><a style="color: #238276; font-weight: 700; font-size: 16px;" href="{{ route('login') }}" class="nav-link"><i class="fa fa-lock"></i> Ingresar </a></li>
                <li><a style="color: #238276; font-weight: 700; font-size: 16px;" href="{{ route('register') }}" class="nav-link"><i class="fa fa-users"></i> Registrar</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #238276; font-size: 16px;">
                      {{ Auth::user()->role }} 
                       <strong>{{ Auth::user()->fullname }}</strong> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu" style="position: absolute; left: 150px;">
                        <li class="hover01">
                            @if(Auth::user()->role == 'Admin')
                             <style>
            .hover01 a {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .15s ease-in-out;
    transition: .15s ease-in-out;
}
.hover01 a:hover {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
        </style>

                                <a href="{{ url('user') }}" class="dropdown-item">
                                    <i class="fa fa-users"></i> Instructores
                                </a>

                                <a href="{{ url('classroom') }}" class="dropdown-item">
                                    <i class="fas fa-warehouse"></i> Ambientes
                                </a>

                                <a href="{{ url('program') }}" class="dropdown-item">
                                    <i class="fas fa-boxes"></i> Programas
                                </a>

                                <a href="{{ url('record') }}" class="dropdown-item">
                                    <i class="fas fa-clipboard-list"></i> Fichas
                                </a>
                                <a href="{{ url('abilities') }}" class="dropdown-item">
                                    <i class="fas fa-puzzle-piece"></i>
                                    Competencias
                                </a>
                                <a href="{{ url('municipalities') }}" class="dropdown-item">
                                    <i class="far fa-compass"></i>
                                    Municipios
                                </a>
                                <div class="dropdown-divider"></div>
                            @elseif(Auth::user()->role == 'Almac')
                                <a href="{{ url('classroom') }}" class="dropdown-item">
                                    <i class="fas fa-warehouse"></i>Ambientes
                                </a>
                                <a href="{{ url('users/info') }}" class="dropdown-item">
                                    <i class="fa fa-users"></i> Mi perfil
                                </a>
                                <div class="dropdown-divider"></div>
                            @elseif(Auth::user()->role == 'Instructor')
                            <a href="{{ url('users/info') }}" class="dropdown-item">
                                    <i class="fa fa-users"></i> Mi perfil
                                </a>
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
</nav>