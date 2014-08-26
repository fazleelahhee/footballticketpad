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

	 <h1 class="page-header">{{ e($node->title) }}</h1>   

     <div class="site-content">





         <form>

             <span class="label-seperator">Personal details</span>

             <div class="columns six">
                 <input type="text" placeholder="NAME">
             </div>

             <div class="columns six">
                 <input type="text" placeholder="SURNAME">
             </div>



             <span class="label-seperator">Email address  &amp; contact info</span>

             <div class="columns six">
                 <input type="text" placeholder="EMAIL">
             </div>

             <div class="columns six">
                 <input type="text" placeholder="CONFIRM EMAIL">
             </div>


             <div class="columns six">
                 <select>
                     <option value="077">077</option>
                     <option value="077">077</option>
                     <option value="077">077</option>
                     <option value="077">077</option>
                     <option value="077">077</option>
                     <option value="077">077</option>
                 </select>

             </div>

             <div class="columns six">
                 <input type="text" placeholder="MOBILE NUMBER">
             </div>



             <input type="checkbox" id="checkbox1">
             <label for="checkbox1">Subscribe to newsletter offering promotions and discount codes</label>



             <span class="label-seperator">Secuirity</span>


             <div class="columns six">
                 <input type="password" placeholder="PASSWORD">
             </div>

             <div class="columns six">
                 <input type="password" placeholder="CONFIRM PASSWORD">
             </div>

             <div class="columns six">
                 faz place your plugin here
             </div>

             <div class="columns six">
                 <input type="checkbox" id="checkbox1">
                 <label for="checkbox1">Subscribe to newsletter offering promotions and discount codes</label>


             </div>



             <input type="button" class="btn pinkbtn pull-right clearboth" value="LOGIN">


         </form>







     </div>
</div>
<!---------main content------------>

    
@stop    
