@extends('layouts.app')

@section('content')
    <div class="uk-section">
        <div class="uk-container uk-container-center">
            <div class="uk-width-1-2@m uk-align-center">
                <div class="uk-padding uk-box-shadow-large">
                <h2>添加链接</h2>
                     {{-- <div class="uk-alert-danger" uk-alert>
                        {{ $errors->first('password') }}
                     </div> --}}
                    <form class="uk-form-horizontal uk-margin-large" method="POST" action="{{ route('articles.store') }}">
                        {{ csrf_field() }}

                        @include('shared._errors')

                        <div class="uk-margin">
                            <label class="uk-form-label" for="category_id">所属栏目</label>
                            <div class="uk-form-controls">
                                <select class="uk-select" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->cname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" >标题</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="title" name="title" type="text" placeholder="输入标题">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-label">是否为链接</div>
                            <div class="uk-form-controls uk-form-controls-text">
                                <label><input class="uk-radio" type="radio" id="islink" name="islink" value="1" checked> 是</label>
                                <label><input class="uk-radio" type="radio" id="islink" name="islink" value="0"> 否</label>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" >链接</label>
                            <input class="uk-input" id="link" name="link" placeholder="请输入链接地址"></input>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" >描述</label>
                            <textarea class="uk-textarea" rows="5" name="body" id="body" placeholder="请输入内容或链接地址"></textarea>
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
