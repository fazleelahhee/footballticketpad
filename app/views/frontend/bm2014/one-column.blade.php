@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')



<section class="banner-home">


    <h1 class="page-header">
        @if($node instanceof Pages)
        {{ e($node->title) }}
        @endif
    </h1>
 	
    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
    
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
         @if($node instanceof Pages)
            {{ Template::doShortCode($node->content ) }}
         @endif
     </div>
</div>
<!---------main content------------>


@stop
