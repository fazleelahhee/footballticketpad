
    @if(!empty($images))
        @foreach($images as $image)
        <article class="three columns">
            <div class="panel">
                <a href="{{$image->url}}">
                    <span class="hovereffect">
                    <img class="plushover" src="{{ Assets::Path('images/pluspng.png') }}" alt="plus"/>
                    <img class="ftplinehover" src="{{ Assets::Path('images/ftpline.png') }}" alt="line"/>
                    </span>
                    <img src="{{ $image->path }}" alt="test"/></a>
                <h4>{{$image->title}}</h4>
                <a href="{{$image->url}}" class="pink-btn small">VIEW</a>
            </div>
        </article>
        @endforeach
    @endif
