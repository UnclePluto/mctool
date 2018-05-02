@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
    <div class="uk-margin-xlarge-left uk-margin-xlarge-right uk-margin" >
        <div class="uk-alert-{{ $msg }} uk-text-center" uk-alert >
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session()->get($msg) }}</p>
        </div>
    </div>
    @endif
@endforeach