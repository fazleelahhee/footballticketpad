@extends(Template::name('frontend.%s._layout.layout'))

@section('content')

<!-- ######################## Section ######################## -->



<!---------sidebar + search form------------>
<section class="main">
	<div class="overlay">
		<div class="row">
            
            @include(Template::name('frontend.%s.sidebars.side1'))
            
            <div class="searcharea">
                <span class="slogan">The Home Of Football Tickets</span>
                <form id="form-home" action="/ticket-search" method="get">
                    <input class="forminput" placeholder="eg. Champions League Final" name="search">
                    <input class="bigbox-search-button" type="submit" />
                </form>
                
             </div>


                
        </div>
     </div>
</section>
<!---------sidebar + search form------------>


{{ Template::doShortCode("bm-slider id=2", true) }}



<div class="row">
    <div class="site-content">


    @if($node instanceof Pages)
        {{ Template::doShortCode($node->content) }}
    @endif

    </div>
</div>




@stop
