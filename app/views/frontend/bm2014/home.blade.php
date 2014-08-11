@extends(Template::name('frontend.%s._layout.layout'))

@section('content')

<!-- ######################## Section ######################## -->

<section class="main">
	
    <div class="overlay">
            <div class="row">
            
            	 @include(Template::name('frontend.%s.sidebars.side1'))
            
                <div class="searcharea">
                    
                    <form id="form-home">
                            <input class="forminput" placeholder="eg. Champions League Final" >
                            <input class="bigbox-search-button" type="button"></button>
                        </form>
                
                </div>
            </div>
    </div>

</section>





<section class="banner-home">
 <a href="/"><img src="{{ Assets::Path('images/ronaldo.jpg') }}" alt="test" /></a>
</section>


    <div class="row">
            
        <div class="site-content">
                            
                            
                            
               
                            
         <article class="three columns">
            <div class="panel">
           	 <a href="#"><img src="{{ Assets::Path('images/toure.jpg') }}" alt="test" /></a>
                <h4>Premiership tickets</h4>
               
                <a href="#" class="pink-btn small">VIEW</a>
            </div>
        </article>
		
        
                               
         <article class="three columns">
            <div class="panel">
           	 <a href="#"><img src="{{ Assets::Path('images/messi.jpg') }}" alt="test" /></a>
                <h4>La Liga tickets</h4>
               
                <a href="#" class="pink-btn small">VIEW</a>
            </div>
        </article>
        
        
                               
         <article class="three columns">
            <div class="panel">
           	 <a href="#"><img src="{{ Assets::Path('images/robben.jpg') }}" alt="test" /></a>
                <h4>Bundesliga tickets</h4>
               
                <a href="#" class="pink-btn small">VIEW</a>
            </div>
        </article>
        
        
                               
         <article class="three columns">
            <div class="panel">
           	 <a href="#"><img src="{{ Assets::Path('images/cavani.jpg') }}" alt="test" /></a>
             <h4>Ligue tickets</h4>
               
                <a href="#" class="pink-btn small">VIEW</a>
            </div>
        </article>
     
                            
                            
                            
                            
                        
        </div>
	</div>

@stop
