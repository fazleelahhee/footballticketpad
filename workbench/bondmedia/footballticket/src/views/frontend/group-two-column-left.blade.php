@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<!---------sidebar------------>
<section class="main">

        <div class="row">
            <span class="sidebar-space"></span>
            @include(Template::name('frontend.%s.sidebars.side1'))
        </div>
</section>
<!---------sidebar------------>
<section class="banner-home">
    <h1 class="page-header">
        {{ e($node->title) }}
    </h1>


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
     <div class="site-content">
         {{ Template::doShortCode($node->content ) }}

         @if($type == 'club')
            @include('footballticket::frontend.partials.ticket-listing')
         @endif
     </div>
</div>


<!---------main content------------>
@stop    
