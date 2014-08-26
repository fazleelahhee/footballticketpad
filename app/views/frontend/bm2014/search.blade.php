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




<!---------main content------------>
<div class="row">

	 <h1 class="page-header">
         @if($node instanceof Pages)
            {{ e($node->title) }}
         @endif
     </h1>

     <div class="site-content">

         <h2>Categories (2)</h2>

          <ul class="search-results-list">

              <li>
                  <a class="btn greenbtn pull-right" href="#">See tickets</a>
                  <a href="#"><span class="game"> Manchester City</span></a>
                  <span class="subtext"><a href="#">Premier League</a></span>
              </li>


              <li>
                  <a class="btn greenbtn pull-right" href="#">See tickets</a>
                  <a href="#"><span class="game"> Manchester City</span></a>
                  <span class="subtext"><a href="#">Premier League</a></span>
              </li>





          </ul>




         <h2>Events (2)</h2>

         <ul class="search-results-list">

             <li>
                 <a class=" btn pinkbtn pull-right" href="#">Buy</a>
                 <a href="#"><span class="game"> Manchester City</span></a>
                 <span class="date-result">04 November 19:00</span>
                 <span class="subtext"><a href="#">O2 Apollo Manchester</a></span>
             </li>


             <li>
                 <a class=" btn pinkbtn pull-right" href="#">Buy</a>
                 <a href="#"><span class="game"> Manchester City</span></a>
                 <span class="date-result">04 November 19:00</span>
                 <span class="subtext"><a href="#">O2 Apollo Manchester</a></span>
             </li>


             <li>
                 <a class=" btn pinkbtn pull-right" href="#">Buy</a>
                 <a href="#"><span class="game"> Manchester City</span></a>
                 <span class="date-result">04 November 19:00</span>
                 <span class="subtext"><a href="#">O2 Apollo Manchester</a></span>
             </li>



             <li>
                 <a class=" btn pinkbtn pull-right" href="#">Buy</a>
                 <a href="#"><span class="game"> Manchester City</span></a>
                 <span class="date-result">04 November 19:00</span>
                 <span class="subtext"><a href="#">O2 Apollo Manchester</a></span>
             </li>



             <li>
                 <a class=" btn pinkbtn pull-right" href="#">Buy</a>
                 <a href="#"><span class="game"> Manchester City</span></a>
                 <span class="date-result">04 November 19:00</span>
                 <span class="subtext"><a href="#">O2 Apollo Manchester</a></span>
             </li>








         </ul>





     </div>
</div>
<!---------main content------------>


@stop
