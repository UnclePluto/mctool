@extends('layouts.app')

@section('content')
    <div class="uk-section">
        <div class="uk-container uk-container-center">
            <div class="uk-width-1-2@m uk-align-center">
                <div class="uk-padding uk-box-shadow-large">
                <h2>编辑资料</h2>
                    <form class="uk-form-horizontal uk-margin-large" method="POST" action="{{ route('users.update', $user->id )}}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        @include('shared._errors')
                        <div class="uk-margin">
                            <label class="uk-form-label" >姓名</label>
                                <input class="uk-input" id="name" name="name" type="text" value="{{ $user->name }}" disabled></input>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" >邮箱</label>
                            <input class="uk-input" id="email" name="email" value="{{ $user->email }}" disabled></input>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" >密码</label>
                            <input class="uk-input" id="password" name="password" type="password" value="{{ old('password') }}" ></input>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" >确认密码</label>
                            <input class="uk-input" id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}"></input>
                        </div>
                        
                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary" type="submit" name="button">更新</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
