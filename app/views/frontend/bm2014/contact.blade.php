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


    <h1 class="page-header">{{ e($node->title) }}</h1>

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
                     



         <div class="columns six nopadding">


             {{ $node->content }}



             <ul class="contact-display">
                 <li class="phone-icon"><a href="mailto:info@footballticketpad.com">info@footballticketpad.com</a></li>
                 <li class="msg-icon">0800 300 6000</li>
             </ul>

         </div>





         <div class="columns six">

             <form class="enquiryform">

                 <div class="row">


                     <input type="text" placeholder="YOUR NAME" />

                 </div>

                 <div class="row">


                     <input type="text" placeholder="YOUR EMAIL" />

                 </div>


                 <div class="row">


                     <input type="text" placeholder="TEL OR MOBILE" />

                 </div>


                 <div class="row">

                     <textarea placeholder="MESSAGE"></textarea>


                 </div>


                 <div class="row">


                     <input type="button" class="btn pinkbtn pull-right" value="SUBMIT">


                 </div>




             </form>

         </div>





                            
     </div>
</div>
<!---------main content------------>

    
@stop    
