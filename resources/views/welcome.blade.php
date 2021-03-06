@extends('layouts.app')

<style>
    .full-height {
        height: 90vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name', 'Laravel') }} v{{ config('app.version', '1.0')}}
        </div>

        <div class="links">
            <a href="http://faq.netease.im/mctools.html">原工具箱</a>
            <a href="http://faq.netease.im">FAQ</a>
           {{-- <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a> --}}
        </div>
    </div>
</div>
@endsection

