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
                                <a class="uk-navbar-item" target="_blank" href="{{ url('http://faq.netease.im/') }}">
                                    FAQ
                                </a>
                            </li>
                            {{-- 
                            <li><a href="javascript:setHome(this,window.location)">
                                <span class="uk-navbar-item"></span>设为首页</a>
                            </li>  --}}
                            {{-- 
                            <li>
                                <a class="uk-navbar-item" href="{{ route('categories.index') }}">
                                    常用链接
                                </a>
                            </li>
                             --}}
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
                            @else
                                <li>
                                    <a href="#"><span uk-icon="icon: user"></span>&nbsp;{{ Auth::user()->name }}</a>
                                    <div class="uk-navbar-dropdown uk-box-shadow-medium" uk-dropdown="mode: hover">
                                            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                                                @can('create', Auth::user())
                                                    <li>
                                                        <a href="{{ route('signup') }}">
                                                        <span class="uk-margin-small-right" uk-icon="icon: plus"></span>
                                                        创建用户
                                                        </a>
                                                    </li>
                                                @endcan
                                                <li>  
                                                    <a href="{{ route('users.edit',Auth::user()->id) }}">
                                                        <span class="uk-margin-small-right" uk-icon="icon: file-edit"></span> 修改信息
                                                    </a>
                                                </li>
                                                <li> 
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        <span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> 登出
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
