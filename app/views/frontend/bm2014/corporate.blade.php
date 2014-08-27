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

             @if($node instanceof Pages)
             {{ Template::doShortCode($node->content ) }}
             @endif

         </div>





         <div class="columns six">

             <form class="enquiryform">

                 <div class="row">


                     <input type="text" placeholder="YOUR NAME" />

                 </div>

                 <div class="row">


                     <input type="text" placeholder="COMPANY" />

                 </div>


                 <div class="row">


                     <input type="text" placeholder="EMAIL" />

                 </div>


                 <div class="row">


                     <input type="text" placeholder="TEL OR MOBILE" />

                 </div>


                 <div class="row">


                     <input type="text" placeholder="NUMBER OF TICKETS" />

                 </div>



                 <div class="row">


                     <input type="text" placeholder="GAME" />

                 </div>


                 <div class="row">


                     <input type="text" placeholder="DATE OF MATCH" />

                 </div>


                 <div class="row">


                     <input type="text" placeholder="MAXIMUM BUDGET" />

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
