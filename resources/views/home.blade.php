@extends('layouts.app')

@section('content')
<div class="uk-section">
    <div class="uk-container uk-container-expand uk-margin-large-left uk-margin-large-right">

        

        <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
            {{-- 遍历所有的category --}}
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>

        <ul class="uk-switcher uk-margin ">
            {{-- 遍历每个category 下面的内容 --}}
            <li>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match" uk-grid>
            
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                <h3 class="uk-card-title">Default</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div>
                            <a href="http://www.baidu.com" class="uk-link-reset" target="_blank">
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                <h3 class="uk-card-title">Default</h3>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                <h3 class="uk-card-title">Default</h3>
                                <ul class="uk-list uk-list-divider">
                                    <li><a href="">List item 1</a></li>
                                    <li><a href="">List item 2</a></li>
                                    <li><a href="">List item 3</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                <h3 class="uk-card-title">Default</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                <h3 class="uk-card-title">Default</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match" uk-grid>
                    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <ul class="uk-list uk-list-divider">
                                <li><a href="">List item 1</a></li>
                                <li><a href="">List item 2</a></li>
                                <li><a href="">List item 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    
                </div>
            </li>

            <li>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match" uk-grid>
                    
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                            <h3 class="uk-card-title">Default</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    
                </div>
            </li>
        </ul>

    </div>
</div>




@endsection
