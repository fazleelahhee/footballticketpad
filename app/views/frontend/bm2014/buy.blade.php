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

                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                 <div class="addthis_sharing_toolbox"></div>
                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f426a07524dc6b4"></script>


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



                     <div class="pull-right">

                         <select>

                             <option>No of tickets</option>
                             <option>No of tickets</option>
                             <option>No of tickets</option>
                         </select>

                         <select>

                             <option>All types of tickets</option>
                             <option>All types of tickets</option>
                             <option>All types of tickets</option>
                         </select>


                     </div>





                 </div>
                 <!---------toolbar------------>




                 <!---------FAZLEEEEEE listing------------>

                 <table class="responsive">
                     <thead>
                     <th>Location</th>
                     <th>Available</th>
                     <th>Price per ticket:</th>
                     <th>  <a href="#" data-reveal-id="GroupPurchase" class="btn yellowbtn">GROUP PURCHASE </a> </th>
                     </thead>

                     <tbody>



                     <tr>
                         <td>
                    	    Longside Upper Pier
                         </td>
                         <td>
                            1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>


                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>




                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>



                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>



                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>



                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>




                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>




                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>



                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>




                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>




                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>



                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>



                     <tr>
                         <td>
                             Longside Upper Pier
                         </td>
                         <td>
                             1 to 10
                         </td>
                         <td>
                             &pound;59.99
                             <small>FINAL PRICE</small>
                         </td>
                         <td>
                             <input class="btn pinkbtn" type="button" value="BUY">

                         </td>
                     </tr>









                     </tbody>
                 </table>





                 <H2>Other events for <strong>Manchester United</strong></H2>
                 <ul class="othervents">

                     <li>
                         <span>FC Bayern vs Manchester united</span>
                         <span class="date-details">Saturday, 9th August 2024, 4:00pm, Allianz areba, Munchen, Germany</span>


                     </li>

                     <li>
                         <span>FC Bayern vs Manchester united</span>
                         <span class="date-details">Saturday, 9th August 2024, 4:00pm, Allianz areba, Munchen, Germany</span>


                     </li>


                     <li>
                         <span>FC Bayern vs Manchester united</span>
                         <span class="date-details">Saturday, 9th August 2024, 4:00pm, Allianz areba, Munchen, Germany</span>


                     </li>


                     <li>
                         <span>FC Bayern vs Manchester united</span>
                         <span class="date-details">Saturday, 9th August 2024, 4:00pm, Allianz areba, Munchen, Germany</span>


                     </li>



                 </ul>





                 <!---------FAZLEEEEEE listing------------>






             </div>

         </div>








     </div>
</div>


<div id="GroupPurchase" class="reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>


    <h2>Group purchase</h2>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>



<!---------main content------------>


@stop
