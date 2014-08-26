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
         @if($node instanceof Pages)
            {{ Template::doShortCode($node->content ) }}
         @endif







         <div class="description-team">



             <div class="description">
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 </p>
             </div>

             <div class="sharebox">
                 xxx
             </div>

         </div>


         <div class="row">


             <div class="columns five">
                 <img src="{{ Assets::Path('images/stadium.jpg') }}" />
             </div>


             <div class="columns seven">

                 <!---------toolbar------------>
                 <div class="row toolbar">

                     <span class="filter-label pull-left offset-right">Filter by</span>

                     <input type="text" placeholder="Filter by event" class="quickfilter  pull-left offset-right">


                     <div class="pull-right">

                         <div class="activation">
                             <a href="#" class="disabled">Reactivate listings</a>
                             <a href="#">Pause all listings</a>
                         </div>
                         <a href="#"><span class="btn medium bluebtn pull-right">LIST TICKETS</span> </a>

                     </div>



                <span class="ftp-line">
                    <span class="greenline"></span>
                    <span class="yellowline"></span>
                    <span class="pinkline"></span>
                    <span class="blueline"></span>
                </span>

                 </div>
                 <!---------toolbar------------>




                 <!---------FAZLEEEEEE listing------------>

                 <table class="responsive">
                     <thead>
                     <th>Location</th>
                     <th>Available</th>
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




                     </tbody>
                 </table>

                 <!---------FAZLEEEEEE listing------------>






             </div>

         </div>








     </div>
</div>
<!---------main content------------>


@stop
