@extends('layouts.app')

@section('content')

<div class="uk-section">
        <div class="uk-container uk-container-center">

            <div class="uk-width-1-2@m uk-align-center">

                <form class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-select">一级栏目</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-horizontal-select">
                                <option>Option 01</option>
                                <option>Option 02</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-select">二级栏目</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-horizontal-select">
                                <option>Option 01</option>
                                <option>Option 02</option>
                            </select>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-form-label">是否为链接</div>
                        <div class="uk-form-controls uk-form-controls-text">
                            <label><input class="uk-radio" type="radio" name="isLink" value="1" checked> 是</label>
                            <label><input class="uk-radio" type="radio" name="isLink" value="0"> 否</label>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">标题</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="输入标题">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">内容或链接</label>
                        <textarea class="uk-textarea" rows="5" placeholder="请输入内容或链接地址"></textarea>
                    </div>

                </form>
                    

                
            </div>

        </div>
    </div>




@stop