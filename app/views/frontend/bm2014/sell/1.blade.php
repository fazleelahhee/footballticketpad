@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<section class="banner-home">
    <span class="page-header buy-detail">
         <span class="gamename"> <strong>{{$node->title}}</strong> Tickets</span>
         <span class="gamedetail">{{ date('l, d F Y, h:ia ',strtotime($node->datetime)) }} {{$node->event_location}}</span>
     </span>
    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>
</section>



<form name="ticket_sell" action=""  method="post">
<!---------main content------------>
<input name="event_id" type="hidden" value="{{$node->id}}">
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
                <strong>{{$node->title}}</strong> <br/><br/>
                 {{ date('l, d F Y, h:ia ',strtotime($node->datetime)) }} {{$node->event_location}}
            </div>
        </div>
        <div class="row selldivider">
            <div class="label bluelabel">Number of tickets</div>
            <div class="fields">
                <select name="number_of_ticket">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <small>The tickets must be a joining seats, if they are not then please list them seperately</small>
            </div>
        </div>

        <div class="row selldivider">
            <div class="label bluelabel">Form of ticket</div>
            <div class="fields">
                <select name="form_of_ticket">
                    @foreach($node->getFormOfTickets() as $type)
                    <option value="{{$type->id}}"> {{$type->title}} </option>
                    @endforeach
                </select>
                <small>Indicate if you have normal tickets (paper or etickets) or season passes</small>
            </div>

        </div>

        <div class="row selldivider">
            <div class="label bluelabel">Ticket type</div>
            <div class="fields">
                <select name="ticket_type">
                    @foreach($node->getTicketTypes() as $type)
                    <option value="{{$type->id}}"> {{$type->title}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row selldivider">
            <div class="label bluelabel">Location</div>

            <div class="fields">

                <label class="inline-label">Block</label>
                <input class="inline-input input" type="text" name="loc_block">

                <label class="inline-label">Row</label>
                <input class="inline-input input" type="text" name="loc_row">


                <small>It’s important that you provide a detailed description of your tickets as it increases your chance of selling them</small>


                <div class="row nomargin">
                    <label class="inline-label">Do the tickets have any restrictions</label>

                    <input type="radio" name="restriction_option" value="1" class="restriction-option">
                    <label class="inline-label">Yes</label>

                    <input type="radio" name="restriction_option" value="0" class="restriction-option" ckecked="checked">
                    <label class="inline-label">No</label>
                </div>

                <div class="restrictions-yes" style="display: none">
                    <ul>
                        @foreach($node->getFormOfTickets() as $type)
                        <li><input type="checkbox" value="{{$type->id}}" name="restrictions[{{$type->id}}]"> <label>{{$type->title}}</label></li>
                        @endforeach
                    </ul>
                    <label class="inline-label">Other information</label>
                    <textarea name="restrictions[others]"></textarea>
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
                <input class="inline-input input" placeholder="Enter price" type="text" name="price">
            </div>


        </div>





        <div class="row selldivider">


            <div class="label bluelabel">How do you want to sell them?</div>

            <div class="fields" >
                <select name="sell_preference">
                    <option value="0">No preference</option>
                    <option value="1">All together</option>
                    <option value="2">Avoid leaving one ticket</option>
                    <option value="3">In Pairs</option>
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


        <input name="submit" type="submit" class="btn blubtn pull-right" value="CONTINUE">
        <!-- <span class="btn blubtn ">CONTINUE</span>-->

    </div>
</div>
<!---------main content------------>
</form>

@stop


{{ Assets::jsStart() }}
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            $('.restriction-option').click(function (e) {
                if($(this).val() == 1) {
                    $(".restrictions-yes").css({display: "block"});
                } else {
                    $(".restrictions-yes").css({display: "none"});
                }
            });
        });
    })(jQuery)
</script>
{{ Assets::jsEnd() }}