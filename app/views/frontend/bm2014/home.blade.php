@extends(Template::name('frontend.%s._layout.layout'))

@section('content')

<!-- ######################## Section ######################## -->

@if($node instanceof Pages)
    {{ e($node->title) }}
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


@if($node instanceof Pages)
    {{ Template::doShortCode($node->content) }}
@endif

@stop
