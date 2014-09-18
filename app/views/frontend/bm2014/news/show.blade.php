@extends(Template::name('frontend.%s._layout.layout'))

@section('style')
{{ HTML::style('ckeditor/contents.css') }}
{{ HTML::style('assets/css/style.css') }}
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


    <h1 class="page-header">{{ $news->title }}</h1>


    <img class="inner-banner" src="{{ Assets::Path('images/vangaal.jpg') }}" alt="test" />

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>



<!---------main content------------>
<div class="row">



    <div class="site-content">


        <p><i class="icon-time"></i> Posted on {{ $news->created_at }} by <a href="www.bondmedia.co.uk">Bond Media</a> </p>

            {{ $news->content }}

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f426a07524dc6b4"></script>




    </div>
</div>
<!---------main content------------>



@stop