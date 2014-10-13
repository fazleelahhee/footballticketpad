@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
{{ HTML::style('assets/css/style.css') }}
{{ HTML::style('code_prettify/css/prettify.css') }}
@stop

@section('content')


<!---------sidebar------------>
<section class="main">

    <div class="row">
        @include(Template::name('frontend.%s.sidebars.side1'))
    </div>
</section>
<!---------sidebar------------>


<section class="banner-home">


    <h1 class="page-header">News
    </h1>

    <img class="inner-banner" src="{{ Assets::Path('images/bannersize.jpg') }}" alt="test" />

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>





<div class="container">
    <div class="row">
        <div class="col-lg12">
            <h1 class="page-header">
                <small>{{ $article->title }}</small>
            </h1>
            @yield('partial/breadcrumbs', Breadcrumbs::render('blog.post.show', $article))
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="pull-left">
                @foreach($article->tags as $tag)
                <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->slug)) }}"><span class="label label-warning">{{ $tag->name }}</span></a>
                @endforeach
            </div>
            <br>
            <br>
            <br>
            <p><i class="icon-time"></i> Posted on {{ $article->created_at }} by <a href="#">Bondmeda</a>
            </p>
            {{ $article->content }}

        </div>
        <div class="col-lg-4">
            <div class="row">
                <h4>Categories</h4>

                <div class="tagcloud tabbed_tag">
                    @foreach($categories as $category)
                    <a href="{{ URL::route('dashboard.category', array('category'=>$category->title)) }}">{{ $category->title }}</a>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <h4>Tags</h4>

                <div class="tagcloud tabbed_tag">
                    @foreach($tags as $tag)
                    <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->slug)) }}">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
{{ HTML::script('code_prettify/js/prettify.js') }}
<script type="text/javascript">

    !function ($) {
        $(function () {
            window.prettyPrint && prettyPrint()
        })
    }(window.jQuery)
</script>
@stop