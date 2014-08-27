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


    <img class="inner-banner" src="{{ Assets::Path('images/bannersize.jpg') }}" alt="test" />

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>



<!---------main content------------>
<div class="row">

    <h1 class="page-header">{{ $news->title }}</h1>

    <div class="site-content">


        <p><i class="icon-time"></i> Posted on {{ $news->created_at }} by <a href="www.bondmedia.co.uk">Bond Media</a> </p>

            {{ $news->content }}



    </div>
</div>
<!---------main content------------>



@stop