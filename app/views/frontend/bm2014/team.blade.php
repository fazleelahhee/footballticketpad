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
   	 <img class="inner-banner" src="{{ Assets::Path('images/chelsea.jpg') }}" alt="test" />
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

	  
      <!---------FAZLEEEEEE this area need management------------>
      <div class="teaminfo">
      		
            <img class="club-logo fadeIn" src="{{ Assets::Path('images/clublogo.png') }}" alt="chelsea FC" />
            <h1 class="page-header fadeIn">{{ e($node->title) }}</h1>      
            
            
            <div class="team-summary">
            	<span class="small-title">
                	<strong>Club Fact File:</strong>
                </span>
                
                <ul>
                  <li>
                  	 <span class="labeltitle"><strong>Nickname:</strong></span>
                     <span class="data">The Blues / The pensioners</span>
                  </li>	
                  <li>
                  	 <span class="labeltitle"><strong>Founded:</strong></span>
                     <span class="data">1905</span>
                  </li>
                  <li>
                  	 <span class="labeltitle"><strong>Rivals:</strong></span>
                     <span class="data">Fulham / Tottenham / QPR</span>
                  </li>
                  <li>
                  	 <span class="labeltitle"><strong>Record goal scorer:</strong></span>
                     <span class="data">Frank Lampard</span>
                  </li>
                  <li>
                  	 <span class="labeltitle"><strong>Record signing:</strong></span>
                     <span class="data">Torres - 50m</span>
                  </li>
                </ul>
                
            </div>
            
            
      </div>
       <!---------FAZLEEEEEE this area need management------------>
      
      	
    
     <div class="site-content">






         @if($node instanceof Pages)
         {{ Template::doShortCode($node->content ) }}
         @endif
        
        
        
        
        <!---------FAZLEEEEEE listing------------>
      	
        <table class="responsive">
        	<thead>
            	<th>Game</th>
                <th>Date</th>
                <th>Price from:</th>
                <th>&nbsp;</th>
            </thead>
            
            <tbody>
            	
                
                
                <tr>
                	<td>
                    	<span class="game">
                    		Burnley <span class="vs">vs</span> Chelsea
                    	</span>
                    </td>
                    <td>
                    	Saturday 16th August 2014
                    </td>
                    <td>
                    	&pound;59.99
                    </td>
                    <td>
                    	<input class="btn pinkbtn" type="button" value="BUY">
                        <input class="btn bluebtn" type="button" value="SELL">
                    </td>
                </tr>
                
                
                <tr>
                	<td>
                    	<span class="game">
                    		Burnley <span class="vs">vs</span> Chelsea
                    	</span>
                    </td>
                    <td>
                    	Saturday 16th August 2014
                    </td>
                    <td>
                    	&pound;59.99
                    </td>
                    <td>
                    	<input class="btn pinkbtn" type="button" value="BUY">
                        <input class="btn bluebtn" type="button" value="SELL">
                    </td>
                </tr>
                
                
                
                <tr>
                	<td>
                    	<span class="game">
                    		Burnley <span class="vs">vs</span> Chelsea
                    	</span>
                    </td>
                    <td>
                    	Saturday 16th August 2014
                    </td>
                    <td>
                    	&pound;59.99
                    </td>
                    <td>
                    	<input class="btn pinkbtn" type="button" value="BUY">
                        <input class="btn bluebtn" type="button" value="SELL">
                    </td>
                </tr>                                



                <tr>
                	<td>
                    	<span class="game">
                    		Burnley <span class="vs">vs</span> Chelsea
                    	</span>
                    </td>
                    <td>
                    	Saturday 16th August 2014
                    </td>
                    <td>
                    	&pound;59.99
                    </td>
                    <td>
                    	<input class="btn pinkbtn" type="button" value="BUY">
                        <input class="btn bluebtn" type="button" value="SELL">
                    </td>
                </tr>

                
            </tbody>
        </table>
        
        <!---------FAZLEEEEEE listing------------>
        
        
        
                 
                            
     </div>
</div>
<!---------main content------------>

    
@stop    
