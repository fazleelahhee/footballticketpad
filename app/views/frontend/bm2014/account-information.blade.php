@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')



<section class="banner-home">

    <div class="row">

        <h1 class="page-header">{{ e($node->title) }}</h1>

    </div>

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

                <li > <a href="/my-account">Listing</a>  </li>
                <li> <a href="/purchases">Purchases</a> </li>
                <li> <a href="/sales">Sales</a>  </li>
                <li class="active"> <a href="/account-information">Account Information</a>  </li>
                <li> <a href="/addresses">Addresses</a>  </li>

            </ul>


		</div>
	</div>

    
</section>



<!---------main content------------>
<div class="accountarea">









     <div class="site-content">




         <!---------faz shortcode------------>

         <div class="row">
            <h2>Account details</h2>
         </div>







         <!---------account details------------>


        <div class="row">
             <div id="personal-details" class="three columns acc-detail-block">

                 <h3>Personal details
                     <img class="icon-acc" src="{{ Assets::Path('images/personaldetails.png') }}" />
                 </h3>


                 <label>Name</label>
                 <span class="field">

                     Jonathan

                 </span>

                 <label>Surname</label>
                 <span class="field">

                     Burrows

                 </span>

                 <label>Email</label>
                 <span class="field">

                     am@bondedia.co.uk

                 </span>


                 <label>Recieve newsletter</label>
                 <span class="field">

                     yes

                 </span>


                 <label>mobile</label>
                 <span class="field">

                     077016615551

                 </span>


                 <a class="pull-left clearboth">change your password</a>
                 <a class="pull-left clearboth">change information</a>


             </div>










             <div id="payment-method" class="three columns acc-detail-block">
                 <h3>Payment method
                     <img class="icon-acc" src="{{ Assets::Path('images/paymentmethod.png') }}" />
                 </h3>


                 <label>Account holder</label>
                 <span class="field">

                     BOND MEDIA

                 </span>

                 <label>IBAN (contact bank)</label>
                 <span class="field">

                     U7CO7SEVO7E7SC7

                 </span>

                 <label>BIC or SWIFT (contact bank)</label>
                 <span class="field">

                     ch8secs8

                 </span>


                 <a class="pull-left clearboth">modify</a>

             </div>









             <div id="Billing-details" class="three columns acc-detail-block">
                 <h3>Billing details
                     <img class="icon-acc" src="{{ Assets::Path('images/billingdetails.png') }}" />
                 </h3>



                 <label>VAT reg no</label>
                 <span class="field">

                     uwudwdhwhdu

                 </span>


                 <label>Company name</label>
                 <span class="field">

                     VIP SPORTS EVENTS LTD

                 </span>

                 <label>Address</label>
                 <span class="field">

                     7 yemen road

                 </span>


                 <label>Postcode</label>
                 <span class="field">

                     e6 1eb

                 </span>


                 <label>City</label>
                 <span class="field">

                     Wirral

                 </span>


                 <label>Country</label>
                 <span class="field">

                     Mersyside

                 </span>


                 <label>Country</label>
                 <span class="field">

                     United Kingdom

                 </span>


                 <a class="pull-left clearboth">modify</a>


             </div>


             <div id="trust-seller" class="three columns acc-detail-block">

                 <h3>Trust Seller guarentee
                     <img class="icon-acc" src="{{ Assets::Path('images/trust.png') }}" />
                 </h3>


                 <label>Account holder</label>
                 <span class="field">

                     Bond media

                 </span>

                 <label>card type</label>
                 <span class="field">

                     Mastercard

                 </span>


                 <label>Card number</label>
                 <span class="field">

                     XXX XXXX XXXX 0987

                 </span>

                 <label>Card number</label>
                 <span class="field">

                     11/15

                 </span>


                 <a class="pull-left clearboth">add another card</a>

             </div>


        </div>

         <!---------account details------------>






                            
     </div>
</div>
<!---------main content------------>


@stop
