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
                                <a class="uk-navbar-item" href="{{ url('http://faq.netease.im/') }}">
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a class="uk-navbar-item" href="{{ route('home') }}">
                                    常用链接
                                </a>
                            </li>
                            @if (!Auth::guest() && Auth::user()->role === 0)
                            <li>
                                <a class="uk-navbar-item" href="{{ route('setting') }}">
                                    设置
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">登录</a></li>
                                <li><a href="{{ route('register') }}">注册</a></li>
                            @else
                                <li>
                                    <a href="#"><span uk-icon="icon: user"></span>&nbsp;{{ Auth::user()->name }}</a>
                                    <div class="uk-navbar-dropdown uk-box-shadow-medium" uk-dropdown="mode: hover">
                                        <ul class="uk-nav uk-navbar-dropdown-nav uk-iconnav">
                                            <li>
                                                
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    <span uk-icon="icon: sign-out"></span> 登出
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