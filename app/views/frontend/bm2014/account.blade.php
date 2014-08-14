@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')



<section class="banner-home">

 	
    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
    
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>	
    
    
</section>

<section class="second-navs">
xx
</section>


<!---------main content------------>
<div class="row">

	 <h1 class="page-header">{{ e($node->title) }}</h1>   

     <div class="site-content">
                     
        {{ $node->content }}          
                            
     </div>
</div>
<!---------main content------------>


@stop
