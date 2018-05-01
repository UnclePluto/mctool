 {{-- <div>
    <div class="uk-card uk-card-default uk-card-hover uk-card-body">
        <h3 class="uk-card-title">Default</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
</div> --}}
<div>
   <a href="{{ $link->link }}" class="uk-link-reset" target="_blank">
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title">{{ $link->title }}</h3>
            
            <p>{{ $link->body }}</p>
        </div>
    </a>
</div>
{{-- <div>
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
</div> --}}