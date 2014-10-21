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


    @if(isset($feature_image) && $feature_image != '')
    <img class="inner-banner" src="{{ $feature_image }}" alt="{{$node->title}}" />
    @else
    <img class="inner-banner" src="{{ Assets::Path('images/default.jpg') }}" alt="{{$node->title}}" />
    @endif
    
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


         @if( isset($tickets) && count($tickets) > 0)
         @foreach($tickets as $ticket)
         <!--repeater--->
         <div class="columns four topmatch">
             <div class="ft-image-match">
                 <a href="{{FootBallEvent::getUrl($ticket)}}">
                     @if(trim($ticket->feature_image) != '')
                     <img src="{{$ticket->feature_image}}" alt="{{$ticket->title}}" />
                     @else
                     <div class="default-fallback">
                         <img src="{{ @$ticket->homeTeamClubLog->value }}" />
                         <span>vs</span>
                         <img src="{{ @$ticket->awayTeamClubLog->value }}" />
                     </div>
                     @endif
                 </a>
             </div>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
            </span>
             <a href="{{FootBallEvent::getUrl($ticket)}}">
                <span class="gamematch">{{$ticket->title}}</span>
             </a>
             <span class="stadium"><img src="{{ Assets::Path('images/stadium.png') }}" />{{$ticket->event_location}}</span>
             <span class="date-time"><img src="{{ Assets::Path('images/whistle.png') }}" />{{date('l dS F Y', strtotime($ticket->datetime))}}</span>

             <div class="btnsgroup">

                 <a href="{{ FootBallEvent::getUrl($ticket) }}" class="btn pinkbtn"> BUY </a>
                 <a href="{{ '/ticket/sell/'.$ticket->id }}" class="btn bluebtn"> SELL </a>

             </div>

         </div>
         <!--repeater--->
         @endforeach
         @else
         <p> No match found! </p>
         @endif

     </div>
</div>
<!---------main content------------>

    
@stop    
