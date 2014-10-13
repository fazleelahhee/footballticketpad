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


    <h1 class="page-header">@if(isset($node->title))
        {{ e($node->title) }}
        @endif</h1>


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
         @if(isset($node->content))
         {{ Template::doShortCode($node->content ) }}
         @endif
        <h2>Top matches</h2>
         <hr>

         <!--repeater--->
         <div class="columns four topmatch">
             <div class="ft-image-match">
                 <img src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>

             <span class="gamematch">Chelsea vs Man Utd</span>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />Stamford Bridge</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />Saturday, 16th August 2014, 3:00pm</span>

                <div class="btnsgroup">

                    <input type="button" value="SELL" class="btn bluebtn">
                    <input type="button" value="BUY" class="btn pinkbtn">

                </div>

         </div>
         <!--repeater--->






         <!--repeater--->
         <div class="columns four topmatch">

             <div class="ft-image-match">
                 <img src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>

             <span class="gamematch">Chelsea vs Man Utd</span>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />Stamford Bridge</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />Saturday, 16th August 2014, 3:00pm</span>

             <div class="btnsgroup">

                 <input type="button" value="SELL" class="btn bluebtn">
                 <input type="button" value="BUY" class="btn pinkbtn">

             </div>

         </div>
         <!--repeater--->





         <!--repeater--->
         <div class="columns four topmatch">

             <div class="ft-image-match">
                 <img src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>

             <span class="gamematch">Chelsea vs Man Utd</span>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />Stamford Bridge</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />Saturday, 16th August 2014, 3:00pm</span>

             <div class="btnsgroup">

                 <input type="button" value="SELL" class="btn bluebtn">
                 <input type="button" value="BUY" class="btn pinkbtn">

             </div>

         </div>
         <!--repeater--->






         <!--repeater--->
         <div class="columns four topmatch">

             <div class="ft-image-match">
                 <img src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>

             <span class="gamematch">Chelsea vs Man Utd</span>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />Stamford Bridge</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />Saturday, 16th August 2014, 3:00pm</span>

             <div class="btnsgroup">

                 <input type="button" value="SELL" class="btn bluebtn">
                 <input type="button" value="BUY" class="btn pinkbtn">

             </div>

         </div>
         <!--repeater--->





         <!--repeater--->
         <div class="columns four topmatch">

             <div class="ft-image-match">
                 <img src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>

             <span class="gamematch">Chelsea vs Man Utd</span>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />Stamford Bridge</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />Saturday, 16th August 2014, 3:00pm</span>

             <div class="btnsgroup">

                 <input type="button" value="SELL" class="btn bluebtn">
                 <input type="button" value="BUY" class="btn pinkbtn">

             </div>

         </div>
         <!--repeater--->





         <!--repeater--->
         <div class="columns four topmatch">

             <div class="ft-image-match">
                 <img src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>

             <span class="gamematch">Chelsea vs Man Utd</span>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />Stamford Bridge</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />Saturday, 16th August 2014, 3:00pm</span>

             <div class="btnsgroup">

                 <input type="button" value="SELL" class="btn bluebtn">
                 <input type="button" value="BUY" class="btn pinkbtn">

             </div>

         </div>
         <!--repeater--->
















                            
     </div>
</div>
<!---------main content------------>

    
@stop    
