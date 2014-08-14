@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
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

 	
    <img class="inner-banner" src="{{ Assets::Path('images/banner-robben.jpg') }}" alt="test" />
    
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>	
    
    
</section>




<!---------main content------------>
<div class="row">

	  <h1 class="page-header">{{ e($node->title) }}</h1>      
      	
    
     <div class="site-content">
                 
        
        
        
        
        
        {{ $node->content }} 
        
        <!---------FAZLEEEEEE take this area for faq shortcode------------>
      	
        
        <!---------FAZLEEEEEE take this area for faq shortcode------------>
        
        
        
                 
                            
     </div>
</div>
<!---------main content------------>

    
@stop    
