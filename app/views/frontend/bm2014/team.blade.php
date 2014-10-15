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

 	<span class="club-effect">
        @if(isset($node->feature_image ))
        <img class="inner-banner" src="{{ $node->feature_image }}" alt="test" />
        @else
        <img class="inner-banner" src="{{ Assets::Path('images/chelsea.jpg') }}" alt="test" />
        @endif



    </span>
    
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>	
    
    
</section>



<!---------main content------------>
<div class="row">

	   <div class="teaminfo">
      		@if(isset($meta_club_logo))
            <img class="club-logo fadeIn" src="{{ $meta_club_logo }}" alt="{{ e($node->title) }}" />
            @else
            <img class="club-logo fadeIn" src="" alt="{{ e($node->title) }}" />
            @endif


            <h1 class="page-header fadeIn">{{ e($node->title) }}</h1>      
            <div class="team-summary">
            	<span class="small-title">
                	<strong>Club Fact File:</strong>
                </span>
                
                <ul>
                  <li>
                  	 <span class="labeltitle"><strong>Nickname:</strong></span>
                     <span class="data">{{ @$meta_nickname }}</span>
                  </li>	
                  <li>
                  	 <span class="labeltitle"><strong>Founded:</strong></span>
                     <span class="data">{{ @$meta_founded }}</span>
                  </li>
                  <li>
                  	 <span class="labeltitle"><strong>Rivals:</strong></span>
                     <span class="data">{{ @$meta_rivals }}</span>
                  </li>
                  <li>
                  	 <span class="labeltitle"><strong>Record goal scorer:</strong></span>
                     <span class="data">{{ @$meta_recorded_goal_scorer }}</span>
                  </li>
                  <li>
                  	 <span class="labeltitle"><strong>Record signing:</strong></span>
                     <span class="data">{{ @$meta_record_signing }}</span>
                  </li>
                </ul>
                
            </div>
            
            
      </div>
       <!---------FAZLEEEEEE this area need management------------>
      
      	
    
     <div class="site-content">


         @if(isset($node->content ))
         {{ Template::doShortCode($node->content ) }}
         @endif
         @include('footballticket::frontend.partials.ticket-listing')
     </div>
</div>
<!---------main content------------>

    
@stop    
