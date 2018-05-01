@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
        <div class="uk-alert-{{ $msg }}" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session()->get($msg) }}</p>
        </div>
    @endif
@endforeach