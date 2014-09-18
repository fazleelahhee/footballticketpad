@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')



<section class="banner-home">


    <h1 class="page-header">
        @if($node instanceof Pages)
        {{ e($node->title) }}
        @endif
    </h1>
 	
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



     <div class="site-content">


         <div class="columns seven">



             <div class="checkoutarea">
             <!---------descriptoin------------>

                 <h3 class="buy-divider row">Description of tickets</h3>


                 <div class="row buydivider">
                     <div class="label pinklabel">Event</div>
                     <div class="fields columns seven pull-right">
                         <strong>Arsenal v Dortmund</strong> <br><br>
                         Saturday, 16 august 2014, 6:00pm,  Old Trafford
                     </div>
                 </div>

                 <div class="row buydivider">
                     <div class="label pinklabel">Ticket Type</div>
                     <div class="fields columns seven pull-right">
                         <strong>Shortside Upper Tier | Adjoining seats</strong>

                     </div>
                 </div>


                 <div class="row buydivider">
                     <div class="label pinklabel">Number of tickets</div>
                     <div class="fields columns seven pull-right">
                         <select>
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>

                         </select>
                     </div>
                 </div>

                 <div class="row buydivider">
                     <div class="label pinklabel">Shipping </div>
                     <div class="fields columns seven pull-right">
                         <strong>Delivery of tickets is guaranteed before the event</strong>

                     </div>
                 </div>

             <!---------descriptoin------------>
             </div>





             <div class="checkoutarea">
                 <!---------buyer details------------>
                 <h3 class="buy-divider row">Buyer details</h3>


                             <label class="radio">
                                 <input type="radio" checked="" >
                                 United Kingdom -
                                 <span>£0.00</span>

                             </label>


                             <hr>


                             <input type="hidden" value="16" name="pais_local_id" autocomplete="off">
                             <label class="radio">
                                 <input type="radio" value="pais_otros" name="envio" autocomplete="off">
                                 Other countries
                             </label>

                             <select class="countrieslist">
                                 <option value="-1">Select Country</option>
                                 <option value="49">Andorra</option>
                                 <option value="24">Argentina</option>

                             </select>


                               <hr>




                             <h2> faz to place in register + login form + set shipping rates calulations UPS</h2>


                 <!---------buyer details------------>
            </div>




             <div class="checkoutarea">

                 <label>
                     <input type="checkbox" value="1" name="terms_n_conditions">
                     I agree to <a href="/terms-conditions" target="_blank">terms &amp; conditions </a>
                 </label>

             </div>










             <div class="checkoutarea">
                 <!---------opt in places------------>





                 <!---------opt in places------------>
             </div>





         </div>




         <!---------main cart------------>
            <div class="columns four cart-summary cart-right">

                         <h2>Order Summary</h2>

                         <span class="ftp-line">
                            <span class="greenline"></span>
                            <span class="yellowline"></span>
                            <span class="pinkline"></span>
                            <span class="blueline"></span>
                        </span>

                        <table>
                            <tr>
                                <td>2 ticket(s) x £132.90 </td>
                                <td class="rightAlign"> £265.80</td>
                            </tr>
                            <tr>
                                <td>Delivery fee </td>
                                <td class="rightAlign"> £0.00</td>
                            </tr>

                        </table>

                         <hr>

                         <span class="finalprice">FINAL PRICE*</span>
                         <span class="pull-right bigprice"> £265.80 </span>
                         <span class="priceHelp">*Final price with handling fee already included</span>


                <hr>

                <p class="guarenteetxt">Guarentee text to be placed here. FTP to provide</p>




              </div>
           <!---------main cart------------>







        </div>



</div>
<!---------main content------------>







@stop
