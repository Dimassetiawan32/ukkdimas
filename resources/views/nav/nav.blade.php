 <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-image: linear-gradient(#04519b, #044687 60%, #033769);">
    <div class="container">
        <a class="navbar-brand text-light" href="{{ url('/') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill mb-1" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
            Aplikasi Jasa Cuci
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
           
            @if (Route::has('login'))
            @auth
            <ul class="navbar-nav mr-auto">
                @role('Admin|User|Kasir')
                <li class="nav-item">
                    <a href="{{route('beranda')}}" class="nav-link text-light">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('transaksi.index')}}" class="nav-link text-light">Transaksi</a>
                </li>
                @endrole
                @role('Admin|Kasir')
                <li class="nav-item">
                    <a href="{{route('laporan.index')}}" class="nav-link text-light">Laporan</a>
                </li>
                @endrole
                <li class="nav-item dropdown">
                @role('Admin')
                    <a class="nav-link dropdown-toggle text-light" href=""  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Data Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('masterdata.biaya.index')}}">
                            Data Biaya 
                        </a>
                        <a class="dropdown-item" href="{{route('masterdata.user.index')}}">
                            Data User
                        </a>
                    </div>
                @endrole
                </li>
            @endauth
            @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown d-flex">
                    <a class="nav-link text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    </a>
                    <label class="dropdown-toggle text-light pt-2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} | <strong>{{ auth()->user()->roles->first()->name }}</strong><span class="caret"></span>
                    </label>
                    <div class="dropdown-menu px-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} {{ auth()->user()->roles->first()->name }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>