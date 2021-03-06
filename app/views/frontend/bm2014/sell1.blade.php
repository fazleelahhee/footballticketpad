@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<section class="banner-home">
    <span class="page-header buy-detail">
         <span class="gamename"> <strong>Chelsea</strong> vs  <strong>Manchester United</strong> Tickets</span>
         <span class="gamedetail">Saturday, 16th August 2014, 3:00pm. Turf moor - Burnley FC, Burnley, UK</span>
     </span>
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
        <div class="row">
            <ul class="step-process">
                <li class="active">
                    <span class="number">1</span>
                    <span class="selltitle">Your Tickets</span>
                </li>
                <li>
                    <span class="number">2</span>
                    <span class="selltitle">Your Tickets</span>
                </li>
                <li>
                    <span class="number">3</span>
                    <span class="selltitle">Your Tickets</span>
                </li>
            </ul>
        </div>
        <h3 class="sell-divider row">Description of tickets</h3>
        <div class="row selldivider">
            <div class="label bluelabel">Event</div>
            <div class="fields">
                <strong>Manchester united vs chelsea</strong> <br/><br/>
                Saturday, 16 august 2014, 6:00pm Old Trafford
            </div>
        </div>
        <div class="row selldivider">
            <div class="label bluelabel">Number of tickets</div>
            <div class="fields">
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <small>The tickets must be a joining seats, if they are not then please list them seperately</small>
            </div>
        </div>


        <div class="row selldivider">

            <div class="label bluelabel">Form of ticket</div>

            <div class="fields">
                <select>
                    <option>Tickets</option>
                    <option>Tickets</option>
                    <option>Tickets</option>
                </select>
                <small>Indicate if you have normal tickets (paper or etickets) or season passes</small>
            </div>

        </div>

        <div class="row selldivider">
            <div class="label bluelabel">Ticket type</div>
            <div class="fields">
                <select>
                    <option>VIP Premiere</option>
                    <option>VIP Premiere</option>
                    <option>VIP Premiere</option>
                </select>
            </div>
        </div>

        <div class="row selldivider">
            <div class="label bluelabel">Location</div>

            <div class="fields">

                <label class="inline-label">Block</label>
                <input class="inline-input input" type="text">

                <label class="inline-label">Row</label>
                <input class="inline-input input" type="text">


                <small>It’s important that you provide a detailed description of your tickets as it increases your chance of selling them</small>


                <div class="row nomargin">
                    <label class="inline-label">Do the tickets have any restrictions</label>

                    <input type="radio" >
                    <label class="inline-label">Yes</label>

                    <input type="radio">
                    <label class="inline-label">No</label>
                </div>

                <div class="restrictions-yes">
                    <ul>
                        <li><input type="checkbox"> <label>Limited or restricted view</label></li>
                        <li><input type="checkbox"> <label>Aisle seat</label></li>
                        <li><input type="checkbox"> <label>Concession ticket - student</label></li>
                        <li><input type="checkbox"> <label>Includes parking</label></li>
                        <li><input type="checkbox"> <label>Ticket and hotel package</label></li>
                        <li><input type="checkbox"> <label>Includes VIP pass</label></li>
                        <li><input type="checkbox"> <label>Concession ticket - senior citizen</label></li>
                        <li><input type="checkbox"> <label>Side or ra=ear view</label></li>                   	                	<li><input type="checkbox"> <label>Ticket and meal package</label></li>
                        <li><input type="checkbox"> <label>Concession ticket - senior citizen</label></li>
                        <li><input type="checkbox"> <label>Wheelchair user only</label></li>
                        <li><input type="checkbox"> <label>Alchohol free area</label></li>
                    </ul>


                    <label class="inline-label">Other information</label>
                    <textarea></textarea>
                    <small>Indicate any kind of restriction that appears on your ticket for example it is a discounted ticket, restricted view etc</small>






                </div>

             </div>



             <span class="notification-green">

                        <span class="infoicon"></span>
                        Football ticket pads does not allow additional information that includes unhelpful descriptions such as "best seats" or "good view"
              </span>

        </div>








        <h3 class="sell-divider row">Sale Definition</h3>


        <div class="row selldivider">


            <div class="label bluelabel">How much do you want to charge for each ticket?</div>

            <div class="fields">

                <input class="inline-input input" placeholder="Enter price" type="text">
            </div>


        </div>





        <div class="row selldivider">


            <div class="label bluelabel">How do you want to sell them?</div>

            <div class="fields">
                <select>
                    <option>all together</option>
                    <option>all together</option>
                    <option>all together</option>
                </select>
            </div>


        </div>




        <h3 class="sell-divider row">Price Review</h3>

        <div class="row selldivider">
            <label class="inline-label">Your tickets will be listed for</label>
            <span class="blueprice">&pound;98.99</span>
        </div>

        <div class="row selldivider">

            <table class="responsivetable">
                <thead>
                <th>&nbsp;</th>
                <th>Maximum price</th>
                <th>Average price</th>
                <th>Minimum price</th>
                </thead>

                <tbody>
                <tr>
                    <td><strong>They are currently being sold for</strong></td>
                    <td>&pound;199.36</td>
                    <td>&pound;199.36</td>
                    <td>&pound;199.36</td>
                </tr>

                <tr>
                    <td><strong>They have previously been sold for</strong></td>
                    <td>&pound;199.36</td>
                    <td>&pound;199.36</td>
                    <td>&pound;199.36</td>
                </tr>

                </tbody>


            </table>

        </div>


        <span class="btn blubtn pull-right">CONTINUE</span>




    </div>
</div>
<!---------main content------------>


@stop


