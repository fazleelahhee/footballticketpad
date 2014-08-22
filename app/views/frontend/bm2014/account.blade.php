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
    
    
    <div class="second-navs">
		<div class="row">


            <ul>

                <li class="active"> <a href="#">Listing</a>  </li>
                <li> <a href="#">Purchases</a>  </li>
                <li> <a href="#">Sales</a>  </li>
                <li> <a href="#">Account Information</a>  </li>
                <li> <a href="#">Addresses</a>  </li>

            </ul>


		</div>
	</div>

    
</section>



<!---------main content------------>
<div class="row">

	 <h1 class="page-header">{{ e($node->title) }}</h1>   

     <div class="site-content">
                     
        {{ $node->content }}


         <!---------faz shortcode------------>


            <h2>Tickets on sale</h2>

            <!---------toolbar------------>
            <div class="row toolbar">

                <span class="filter-label">Filter by</span>

                <input type="text" placeholder="Filter by event" class="quickfilter">


                <div class="pull-right">

                    <a href="#" class="disabled">Reactivate listings</a>
                    <a href="#">Reactivate listings</a>

                    <a href="#"><span class="btn blue-btn">Reactivate listings</span> </a>

                </div>



                <span class="ftp-line">
                    <span class="greenline"></span>
                    <span class="yellowline"></span>
                    <span class="pinkline"></span>
                    <span class="blueline"></span>
                </span>

            </div>
            <!---------toolbar------------>








             <!---------listings----------->

                 <div class="row listing">

                         <div class="collapsible_header" >

                            <div class="thumb-crop pull-left">
                             <img src="{{ Assets::Path('images/bannersize.jpg') }}" alt="test" />
                            </div>

                             <div class="pull-left gamedetail">

                                 <span class="game">
                    	            Barcelona vs Real Madrid
                                 </span>

                                 <span class="game-info pull-left  clearboth">Saturday, 15 August 2014, 3:00pm. Nou Camp, Barcelona, Spain</span>

                             </div>

                             <div class="pull-right">

                                 <span data-tooltip aria-haspopup="true" class="has-tip" title="Blocked listing">1</span>

                             </div>


                         </div>


                        <div class="collapsible_content" style="display: none" >

                                

                        </div>

                 </div>

              <!---------listings----------->



         <!---------faz shortcode------------>

                            
     </div>
</div>
<!---------main content------------>


@stop
