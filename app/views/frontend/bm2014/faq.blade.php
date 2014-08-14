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

 	
    <img class="inner-banner" src="{{ Assets::Path('images/robben.jpg') }}" alt="test" />
    
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
                 
        
        
        
        
        <!---------FAZLEEEEEE take this area for faq shortcode------------>
        {{ $node->content }} 
        
        
        <div id="accordion">
         
          <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
          
          
           <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
          
           <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
          
          
           <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
          
          
           <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
          
          
           <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
          
           <h4 class="accordion-toggle">Where can i buy cheap football tickets from?</h4>
          <div class="accordion-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </p>
          </div>
          
        </div>
        
        <!---------FAZLEEEEEE take this area for faq shortcode------------>
        
        
        
                 
                            
     </div>
</div>
<!---------main content------------>

    
@stop    
