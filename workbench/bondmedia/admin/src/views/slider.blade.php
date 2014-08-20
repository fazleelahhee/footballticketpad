@if(!empty($images))

<div class="flexslider">
    <ul class="slides">
        @foreach($images as $image)
        <li class="slider-image slider-image-{{$image->id}}"
            data-id="{{$image->id}}"
            data-title="{{addslashes($image->title)}}"
            data-url="{{$image->url}}"
            data-description="{{addslashes($image->description)}}"
            data-order="{{$image->order}}"
            data-path="{{ $image->path }}">
            <a href="{{$image->url}}"><img src="{{ $image->path }}" /></a>
        </li>
        @endforeach
    </ul>
    </div>
@endif

{{
    Assets::setStyles(
    [
        'flexislider'         => 'js/flex-slider/flexslider.css'
    ], false, true);
}}

{{
    Assets::setScripts(
    [
        'flexislider'          => 'js/flex-slider/jquery.flexslider-min.js',
    ], false, true);
}}

{{ Assets::jsStart() }}
<script type="text/javascript" charset="utf-8">
    (function ($) {
        $(document).ready(function () {
            $('.flexslider').flexslider();
        });
    })(jQuery);
</script>
{{ Assets::jsEnd() }}