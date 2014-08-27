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

             <h2 class="register-icon">Register</h2>

             <p><strong>Not a member yet?</strong> <br/>
                 Join thousands of others who are already members of Football
                 Ticket Pad. It's freeYou can buy and sell the best tickets all around
                 the world. </p>


             <a href="register" class="btn greenbtn pull-right">REGISTER</a>

         </div>





         <div class="columns six">


             <h2 class="login-icon">Login</h2>

             <form class="enquiryform">

                 <div class="row">


                     <input type="text" placeholder="EMAIL" />

                 </div>

                 <div class="row">


                     <input type="text" placeholder="PASSWORD" />

                 </div>







                 <div class="row">

                     <a href="/forgot-password" class="pull-left forgottenpassword">I forgot my password</a>

                     <input type="button" class="btn pinkbtn pull-right" value="LOGIN">


                 </div>




             </form>

         </div>







     </div>
</div>
<!---------main content------------>

    
@stop    
