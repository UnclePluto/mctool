<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script> --}}
</head>
<body>
    <div id="app">
        <div class="uk-box-shadow-medium uk-navbar-container uk-navbar-primary" uk-navbar="mode: click">
            <div class="uk-container uk-container-expand uk-width-1-1">

                <nav class="uk-navbar">

                    <div class="uk-navbar-left">
                        <!-- Branding Image -->
                        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>

                        <ul class="uk-navbar-nav">
                            <li>
                                <a class="uk-navbar-item" href="{{ url('/') }}">
                                    基础工具
                                </a>
                            </li>
                            <li>
                                <a class="uk-navbar-item" href="{{ url('/') }}">
                                    wiki/论坛
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">登录</a></li>
                                <li><a href="{{ route('register') }}">注册</a></li>
                            @else
                                <li>
                                    <a href="#">{{ Auth::user()->name }}</a>
                                    <div class="uk-navbar-dropdown uk-box-shadow-medium" uk-dropdown="mode: hover">
                                        <ul class="uk-nav uk-navbar-dropdown-nav uk-iconnav">
                                            <li>
                                                
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    <span uk-icon="icon: close"></span> 登出
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>

                </nav>

            </div>
        </div>

        @yield('content')
    </div>

    
</body>
</html>
