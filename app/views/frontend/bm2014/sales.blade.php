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
                <li class="active"> <a href="/sales">Sales</a>  </li>
                <li> <a href="/account-information">Account Information</a>  </li>
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
            <h2>Tickets on sale</h2>
         </div>

            <!---------toolbar------------>
            <div class="row toolbar">

                <span class="filter-label pull-left offset-right">Filter by</span>

                <input type="text" placeholder="Filter by event" class="quickfilter  pull-left offset-right">






                <span class="ftp-line">
                    <span class="greenline"></span>
                    <span class="yellowline"></span>
                    <span class="pinkline"></span>
                    <span class="blueline"></span>
                </span>

            </div>
            <!---------toolbar------------>





         <!---------purchases------------>

        <div class="row">
         <table class="responsivetable nocolour">

             <thead>
             <th>Event</th>
             <th>Ticket Type</th>
             <th>Block &amp; row</th>
             <th>Qty</th>
             <th>Price</th>
             <th>Listing ID</th>
             <th>Transaction date</th>
             <th>Transaction status</th>

             </thead>



             <tbody>




            <tr>
             <td>
                 <div class="pull-left gamedetail nopadding">

                     <span class="game">Barcelona vs Real Madrid</span>
                     <span class="game-info pull-left  clearboth">23/03/14, 15:00</span>

                 </div>

             </td>

             <td>Longside uppier tier</td>

             <td>Block: Wu6
             <br/>
              Row: 20
             </td>

             <td>2</td>

             <td>£892</td>

             <td>2dd3333fccsd</td>

             <td>23/03/12</td>

             <td>Cancelled</td>
            </tr>








            <tr>
                <td>
                    <div class="pull-left gamedetail nopadding">

                        <span class="game">Barcelona vs Real Madrid</span>
                        <span class="game-info pull-left  clearboth">23/03/14, 15:00</span>

                    </div>

                </td>

                <td>Longside uppier tier</td>

                <td>Block: Wu6
                    <br/>
                    Row: 20
                </td>

                <td>2</td>

                <td>£892</td>

                <td>2dd3333fccsd</td>

                <td>23/03/12</td>

                <td>Paid
                <br/><span class="paidID">AU3LTL3YLGLGY</span>
                </td>
            </tr>










            <tr>
                <td>
                    <div class="pull-left gamedetail nopadding">

                        <span class="game">Barcelona vs Real Madrid</span>
                        <span class="game-info pull-left  clearboth">23/03/14, 15:00</span>

                    </div>

                </td>

                <td>Longside uppier tier</td>

                <td>Block: Wu6
                    <br/>
                    Row: 20
                </td>

                <td>2</td>

                <td>£892</td>

                <td>2dd3333fccsd</td>

                <td>23/03/12</td>

                <td>Paid
                    <br/><span class="paidID">AU3LTL3YLGLGY</span>
                </td>
            </tr>










            <tr>
                <td>
                    <div class="pull-left gamedetail nopadding">

                        <span class="game">Barcelona vs Real Madrid</span>
                        <span class="game-info pull-left  clearboth">23/03/14, 15:00</span>

                    </div>

                </td>

                <td>Longside uppier tier</td>

                <td>Block: Wu6
                    <br/>
                    Row: 20
                </td>

                <td>2</td>

                <td>£892</td>

                <td>2dd3333fccsd</td>

                <td>23/03/12</td>

                <td>Paid
                    <br/><span class="paidID">AU3LTL3YLGLGY</span>
                </td>
            </tr>






            <tr>
                <td>
                    <div class="pull-left gamedetail nopadding">

                        <span class="game">Barcelona vs Real Madrid</span>
                        <span class="game-info pull-left  clearboth">23/03/14, 15:00</span>

                    </div>

                </td>

                <td>Longside uppier tier</td>

                <td>Block: Wu6
                    <br/>
                    Row: 20
                </td>

                <td>2</td>

                <td>£892</td>

                <td>2dd3333fccsd</td>

                <td>23/03/12</td>

                <td>Paid
                    <br/><span class="paidID">AU3LTL3YLGLGY</span>
                </td>
            </tr>






            <tr>
                <td>
                    <div class="pull-left gamedetail nopadding">

                        <span class="game">Barcelona vs Real Madrid</span>
                        <span class="game-info pull-left  clearboth">23/03/14, 15:00</span>

                    </div>

                </td>

                <td>Longside uppier tier</td>

                <td>Block: Wu6
                    <br/>
                    Row: 20
                </td>

                <td>2</td>

                <td>£892</td>

                <td>2dd3333fccsd</td>

                <td>23/03/12</td>

                <td>Paid
                    <br/><span class="paidID">AU3LTL3YLGLGY</span>
                </td>
            </tr>













             </tbody>


         </table>
        </div>

         <!---------purchases------------>





         <!---------faz shortcode------------>

                            
     </div>
</div>
<!---------main content------------>


@stop
