@extends('layouts.app')

@section('content')
    <div class="uk-section">
        <div class="uk-container uk-container-center">
            <div class="uk-width-1-2@m uk-align-center">
                <div class="uk-padding uk-box-shadow-large">
                    <h2>添加类别</h2>
                     {{-- <div class="uk-alert-danger" uk-alert>
                        {{ $errors->first('password') }}
                     </div> --}}
                     @include('shared._errors')
                    <form class="uk-form-stacked" role="form" method="POST" action="{{ route('categories.store') }}">

                        {{ csrf_field() }}

                        <div>
                            <label class="uk-form-label">标题</label>
                            <input id="cname" type="cname" class="uk-input{{ $errors->has('cname') ? ' uk-form-danger' : '' }}" name="cname" value="{{ old('cname') }}" required autofocus>

                            {{-- @if ($errors->has('email'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif --}}
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary" type="submit" name="button">添加</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
