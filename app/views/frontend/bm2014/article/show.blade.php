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


    <h1 class="page-header">
        {{ $article->title }}
    </h1>

    <img class="inner-banner" src="{{ Assets::Path('images/bannersize.jpg') }}" alt="test" />

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>



<div class="row">




    <div class="container site-content">


            @foreach($article->tags as $tag)
            <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->slug)) }}"><span class="label label-warning">{{ $tag->name }}</span></a>
            @endforeach

            <p><strong>Posted on {{ $article->created_at }}</strong>
            </p>

            {{ $article->content }}

        <!--<h4>Categories</h4>
        <div class="tagcloud tabbed_tag">
            @foreach($categories as $category)
            <a href="{{ URL::route('dashboard.category', array('category'=>$category->title)) }}">{{ $category->title }}</a>
            @endforeach
        </div>-->

        <!--<h4>Tags</h4>
        <div class="tagcloud tabbed_tag">
            @foreach($tags as $tag)
            <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->slug)) }}">{{ $tag->name }}</a>
            @endforeach
        </div>-->
            <br/>    <br/>
            <div class="sharebox">

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f426a07524dc6b4"></script>


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