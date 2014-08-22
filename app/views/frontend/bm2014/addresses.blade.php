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

                <li> <a href="/my-account">Listing</a>  </li>
                <li> <a href="/purchases">Purchases</a> </li>
                <li> <a href="/sales">Sales</a>  </li>
                <li> <a href="/account-information">Account Information</a>  </li>
                <li class="active"> <a href="/addresses">Addresses</a>  </li>

            </ul>


		</div>
	</div>

    
</section>



<!---------main content------------>
<div class="accountarea">









     <div class="site-content">




         <!---------faz shortcode------------>

         <div class="row">
            <h2>Addresses</h2>

             <span class="ftp-line">
                <span class="greenline"></span>
                <span class="yellowline"></span>
                <span class="pinkline"></span>
                <span class="blueline"></span>
             </span>

         </div>


         <!---------adresss----------->




         <div class="row">

             <h3>Main collection and delivery address</h3>
             <span class="address_label">Your shipping address and main collection point</span>

             <table class="responsivetable addresstable">

                 <tr>
                     <td><strong>Name</strong></td>
                     <td>Stephen</td>
                 </tr>
                 <tr>
                     <td><strong>Surname</strong></td>
                     <td>King</td>
                 </tr>
                 <tr>
                     <td><strong>Address</strong></td>
                     <td>8 lovely drive</td>
                 </tr>
                 <tr>
                     <td><strong>Postcode</strong></td>
                     <td>e6 1eb</td>
                 </tr>
                 <tr>
                     <td><strong>City</strong></td>
                     <td>Virral</td>
                 </tr>
                 <tr>
                     <td><strong>County</strong></td>
                     <td>Mersydie</td>
                 </tr>
                 <tr>
                     <td><strong>Country</strong></td>
                     <td>United kingdom</td>
                 </tr>
                 <tr>
                     <td><strong>Mobile</strong></td>
                     <td>07706155515</td>
                 </tr>
             </table>

             <a href="#" class="pull-left clearboth">change address</a>

             <a href="#" class="pull-left clearboth">Add another address</a>


         </div>


         <!---------adresss----------->




         <!---------faz shortcode------------>

                            
     </div>
</div>
<!---------main content------------>


@stop
