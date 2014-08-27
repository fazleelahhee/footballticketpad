@extends(Template::name('frontend.%s._layout.layout'))
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
         <h2 class="event-cat-header">Categories <span>(2)</span></h2>
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

         <h2 class="event-list-header" >Events <span>(2)</span></h2>
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
@stop

{{
    Assets::setScripts(
    [
        'underscore'          => 'js/underscore.min.js',
        'backbone'            => 'js/backbone.min.js'
    ], false, true);
}}


{{ Assets::jsStart() }}
<script type="text/javascript" charset="utf-8">

</script>

<script type="text/x-template" charset="utf-8">
    <li>
        <a class=" btn pinkbtn pull-right" href="#">Buy</a>
        <a href="#"><span class="game"><%= title %></span></a>
        <span class="date-result"><%= event_date %></span>
        <span class="subtext"><a href="#"><%= short_text %></a></span>
    </li>
</script>

{{ Assets::jsEnd() }}