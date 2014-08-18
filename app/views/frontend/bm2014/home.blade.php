@extends(Template::name('frontend.%s._layout.layout'))

@section('content')

<!-- ######################## Section ######################## -->

@if($node instanceof Pages)
    {{ e($node->title) }}
@endif

@if($node instanceof Pages)
    {{ Template::doShortCode($node->content) }}
@endif


<!---------sidebar + search form------------>
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
<!---------sidebar + search form------------>




<!---------bannner------------>
<section class="banner-home">
     <a href="/">
        <img src="{{ Assets::Path('images/ronaldo.jpg') }}" alt="test" />
     </a>
</section>
<!---------bannner------------>



<!---------content------------>
<div class="row">
	<div class="site-content">
		
        
        
        <article class="three columns">
		<div class="panel">
			<a href="#">
			<span class="hovereffect">
			<img class="plushover" src="{{ Assets::Path('images/pluspng.png') }}" alt="plus"/>
			<img class="ftplinehover" src="{{ Assets::Path('images/ftpline.png') }}" alt="line"/>
			</span>
			<img src="{{ Assets::Path('images/toure.jpg') }}" alt="test"/>
			</a>
			<h4>Premiership tickets</h4>
			<a href="#" class="pink-btn small">VIEW</a>
		</div>
		</article>
        
        
        
		<article class="three columns">
		<div class="panel">
			<a href="#">
			<span class="hovereffect">
			<img class="plushover" src="{{ Assets::Path('images/pluspng.png') }}" alt="plus"/>
			<img class="ftplinehover" src="{{ Assets::Path('images/ftpline.png') }}" alt="line"/>
			</span>
			<img src="{{ Assets::Path('images/messi.jpg') }}" alt="test"/></a>
			<h4>La Liga tickets</h4>
			<a href="#" class="pink-btn small">VIEW</a>
		</div>
		</article>
        
        
        
		<article class="three columns">
		<div class="panel">
			<a href="#">
			<span class="hovereffect">
			<img class="plushover" src="{{ Assets::Path('images/pluspng.png') }}" alt="plus"/>
			<img class="ftplinehover" src="{{ Assets::Path('images/ftpline.png') }}" alt="line"/>
			</span>
			<img src="{{ Assets::Path('images/robben.jpg') }}" alt="test"/></a>
			<h4>Bundesliga tickets</h4>
			<a href="#" class="pink-btn small">VIEW</a>
		</div>
		</article>
        
        
        
		<article class="three columns">
		<div class="panel">
			<a href="#">
			<span class="hovereffect">
			<img class="plushover" src="{{ Assets::Path('images/pluspng.png') }}" alt="plus"/>
			<img class="ftplinehover" src="{{ Assets::Path('images/ftpline.png') }}" alt="line"/>
			</span>
			<img src="{{ Assets::Path('images/cavani.jpg') }}" alt="test"/>
			</a>
			<h4>Ligue tickets</h4>
			<a href="#" class="pink-btn small">VIEW</a>
		</div>
		</article>
        
        
	</div>
</div>
<!---------content------------>


@stop
