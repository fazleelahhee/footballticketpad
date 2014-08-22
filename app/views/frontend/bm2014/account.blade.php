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

                <li class="active"> <a href="/my-account">Listing</a>  </li>
                <li> <a href="/purchases">Purchases</a> </li>
                <li> <a href="/sales">Sales</a>  </li>
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

                 <span data-tooltip aria-haspopup="true" class="has-tip activelisting" title="Active listing">1</span>

             </div>


         </div>


         <div class="collapsible_content" style="display: none" >

         <table class="responsivetable">

         <thead>
         <th>&nbsp;</th>
         <th>Ticket Type (Ticket Category)</th>
         <th>Form of ticket</th>
         <th>Listing ID</th>
         <th>QTY</th>
         <th>Sold</th>
         <th>Split</th>
         <th>Block &amp; row</th>
         <th>My earnings</th>
         <th>Web price (GBP)</th>
         <th>Ready to ship</th>
         <th>Buyer notes</th>
         <th>&nbsp;</th>
         </thead>



         <tbody>






         <tr>
             <td>
                 <span class="statusChange paused">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="Buyer notes">
					<span class="buyernotes"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>





















         <tr>
             <td>
                 <span class="statusChange active">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="Buyer notes">
					<span class="buyernotes"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>
























         <tr class="sold">
             <td>
                 <span class="statusChange sold">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="Buyer notes">
					<span class="buyernotes"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>












         <tr>
             <td>
                 <span class="statusChange active">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="add Buyer notes">
					<span class="buyernotes empty"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>





         </tbody>

         </table>


         </div>

         </div>

         <!---------listings----------->
































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

                 <span data-tooltip aria-haspopup="true" class="has-tip pausedlisting" title="Paused listing">1</span>
                 <span data-tooltip aria-haspopup="true" class="has-tip blockedlisting" title="Blocked listing">1</span>
                 <span data-tooltip aria-haspopup="true" class="has-tip activelisting" title="Active listing">1</span>

             </div>


         </div>


         <div class="collapsible_content" style="display: none" >

         <table class="responsivetable">

         <thead>
         <th>&nbsp;</th>
         <th>Ticket Type (Ticket Category)</th>
         <th>Form of ticket</th>
         <th>Listing ID</th>
         <th>QTY</th>
         <th>Sold</th>
         <th>Split</th>
         <th>Block &amp; row</th>
         <th>My earnings</th>
         <th>Web price (GBP)</th>
         <th>Ready to ship</th>
         <th>Buyer notes</th>
         <th>&nbsp;</th>
         </thead>



         <tbody>






         <tr>
             <td>
                 <span class="statusChange paused">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="Buyer notes">
					<span class="buyernotes"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>





















         <tr>
             <td>
                 <span class="statusChange active">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="Buyer notes">
					<span class="buyernotes"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>
























         <tr class="sold">
             <td>
                 <span class="statusChange sold">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="Buyer notes">
					<span class="buyernotes"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>












         <tr>
             <td>
                 <span class="statusChange active">

                 </span>
             </td>
             <td>



                 </span>

                 <select>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                     <option>VIP Premium</option>
                 </select>
             </td>
             <td>
                 <select>
                     <option>Tickets</option>
                     <option>Tickets</option>
                 </select>
             </td>
             <td>87ef8e7f87x</td>
             <td>2</td>
             <td>0</td>
             <td>
                 <select>
                     <option>No preferences</option>
                     <option>preferences</option>
                 </select>

             </td>
             <td>Block & row</td>
             <td>200.99</td>
             <td>289.99</td>
             <td>
                 <select>
                     <option>Yes</option>
                     <option>No</option>
                 </select>

             </td>
             <td>

				<span data-tooltip aria-haspopup="true" class="has-tip" title="add Buyer notes">
					<span class="buyernotes empty"></span>
				</span>

             </td>


             <td>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="trash">
						<span class="trash"></span>
					</span>

					<span data-tooltip aria-haspopup="true" class="has-tip" title="add">
						<span class="add"></span>
					</span>

             </td>
         </tr>





         </tbody>

         </table>


         </div>

         </div>

         <!---------listings----------->








         <!---------faz shortcode------------>

                            
     </div>
</div>
<!---------main content------------>


@stop
