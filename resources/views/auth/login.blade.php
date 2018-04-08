@extends('layouts.app')

@section('content')
    <div class="uk-section">
        <div class="uk-container uk-container-center">

            <div class="uk-width-1-2@m uk-align-center">

                <div class="uk-padding uk-box-shadow-large">

                    <h2>登录</h2>

                    <form class="uk-form-stacked" role="form" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}

                        <div>
                            <label class="uk-form-label">邮箱地址</label>
                            <input id="email" type="email" class="uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">密码</label>
                            <input id="password" type="password" class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password" value="{{ old('password') }}" required>

                            @if ($errors->has('password'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                           <label><input class="uk-checkbox" type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}> 记住我</label>
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary" type="submit" name="button">登录</button>
                            <a class="uk-float-right" href="{{ route('password.request') }}">
                                忘记密码?
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
