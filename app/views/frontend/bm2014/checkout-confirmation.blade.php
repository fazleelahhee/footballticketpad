@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')



<section class="banner-home">


    <h1 class="page-header">
        Confirmation
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
           <h2>Purchase Confirmation</h2>
           Congratulation! You have successfully purchased ticket. You order number is {{$orderNumber}}.
           <br />
           A confirmation email has been sent to you.
           <br />
     </div>
</div>
<!---------main content------------>


@stop
