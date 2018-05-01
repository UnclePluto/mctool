@extends('layouts.app')
@section('content')
<div class="uk-section">
    <div class="uk-container uk-container-expand uk-margin-large-left uk-margin-large-right">

        <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
            @foreach($categories as $category)
                @include('categories._navlist',['category'=>$category])
            @endforeach
        </ul>

        <ul class="uk-switcher uk-margin ">
            {{-- 遍历每个category 下面的内容 --}}
            @foreach($articles as $article)
            <li>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match" uk-grid>
                    @foreach($article as $link)
                       @include('categories._article_card',['link'=>$link])
                    @endforeach
                </div>
            </li>
            @endforeach
        </ul>

    </div>
</div>


@endsection
