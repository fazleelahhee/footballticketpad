@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<section class="banner-home">
    <span class="page-header buy-detail">
         <span class="gamename"> <strong>{{$node->homeTeam}}</strong> vs  <strong>{{$node->awayTeam}}</strong> Tickets</span>
         <span class="gamedetail">{{date('l, dS F Y, h:ia', strtotime($node->datetime))}}. {{$node->event_location}}</span>
         <a href="/ticket/sell/{{$node->id}}" class="btn bluebtn">SELL TICKETS</a>
     </span>
<span class="club-effect">
    @if($node->feature_image != '')
    <img class="inner-banner" src="{{$node->feature_image}}" alt="banner image" />
    @else
    <img class="inner-banner" src="{{ Assets::Path('images/default.jpg') }}" alt="banner image" />
    @endif
</span>

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>	
    
    
</section>

<div class="row">
     <div class="site-content">
         <div class="description-team">
             <div class="description">
                 {{$node->content}}
             </div>

             <div class="sharebox">

                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                 <div class="addthis_sharing_toolbox"></div>
                 <!-- Go to www.addthis.com/dashboard to customize your tools -->
                 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f426a07524dc6b4"></script>


             </div>

         </div>


         <div class="row">


             <div class="columns five stadiumpicture">
                 @if($groundImage != '')
                 <img src="{{$groundImage}}" />
                 @else
                 <img src="{{ Assets::Path('images/stadiumpic.png') }}" />
                 @endif
                 <p class="guarenteetxt">Guarentee text to be placed here. FTP to provide</p>
             </div>
             <div class="columns seven">
                 <!---------toolbar------------>

                 <!---------toolbar------------>




                 <!---------FAZLEEEEEE listing------------>
                 @if(!empty($tickets))

                 <div class="row toolbar">

                     <span class="filter-label pull-left offset-right">Filter by</span>
                     <div class="pull-right">
                         <select name="fiter_of_ticket">
                             <option value="-1"> Select Number of Ticket</option>
                             <option value="1"> 1 </option>
                             <option value="2"> 2 </option>
                             <option value="3"> 3 </option>
                             <option value="4"> 4 </option>
                             <option value="5"> 5+</option>
                         </select>
                         <select name="ticket_type">
                             <option value="-1">Select type of tickets</option>
                         </select>
                     </div>
                 </div>

                 <table class="responsive">
                     <thead>
                     <th>Location</th>
                     <th>Available</th>
                     <th>Price per ticket:</th>
                     <th>  <a href="#" data-reveal-id="GroupPurchase" class="btn yellowbtn">GROUP PURCHASE </a> </th>
                     </thead>

                     <tbody>
                         @foreach($tickets as $ticket)
                         <tr>
                             <td data-ticket-type="{{$ticket['ticketInformation']['ticket_type']}}" class="td-ticket-type">
                                @foreach($ticketTypes as $ticketType)
                                    @if($ticketType->id == $ticket['ticketInformation']['ticket_type'])
                                        {{$ticketType->title}}
                                    @endif
                                @endforeach
                             </td>
                             <td data-number-of-ticket="{{$ticket['ticketInformation']['number_of_ticket']}}" class="td-num-of-ticket">
                                1 to {{$ticket['ticketInformation']['number_of_ticket']}}
                             </td>
                             <td>
                                 &pound;{{$ticket['ticketInformation']['price']}}
                                 <small>FINAL PRICE</small>
                             </td>
                             <td>
                                 <a href="/checkout/{{$ticket['product_id']}}" class="btn pinkbtn">BUY</a>
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                 @endif
{{ Assets::jsStart() }}
<script type="text/javascript">
    (function ($) {

        var ticketType = [];
        $(document).ready(function () {

            $('.td-ticket-type').each(function () {
                var t = $(this).html();
                console.log(ticketType.indexOf(t));
                if(ticketType.indexOf(t) ==  '-1') {
                    ticketType.push(t);
                }
            });

            if(ticketType.length > 0) {
                for(var i = 0; i< ticketType.length; i++) {
                    var option = '<option value="'+ticketType[i]+'">'+ticketType[i]+'</option>';
                    $('select[name=ticket_type]').append(option);
                }
            }


            $('select[name=fiter_of_ticket]').change(function () {
                var selectedNumberOfTicket = $(this).val();
                $('.td-num-of-ticket').each(function () {
                    var t = $(this).data('number-of-ticket');
                    var parentTr =  $(this).closest('tr');

                    if(selectedNumberOfTicket == '-1') {
                        if(parentTr.data('type-filter') !== true) {
                            parentTr.show();

                        }
                        parentTr.data('number-filter', false);

                    }
                    else if(parseInt(selectedNumberOfTicket) <= parseInt(t) ) {
                        if(parentTr.data('type-filter') !== true) {
                            parentTr.show();

                        }
                        parentTr.data('number-filter', false);
                    } else {
                        parentTr.data('number-filter', true);
                        parentTr.hide();
                    }
                });
            });


            $('select[name=ticket_type]').change(function () {
                var selectedNumberOfTicket = $(this).val();
                $('.td-ticket-type').each(function () {
                    var t = $(this).html();
                    var parentTr =  $(this).closest('tr');

                    if(selectedNumberOfTicket == '-1') {
                        parentTr.data('type-filter', false);
                        if(parentTr.data('number-filter') !== true) {
                            parentTr.show();
                        }

                    }
                    else if(selectedNumberOfTicket == t ) {
                        parentTr.data('type-filter', false);
                        if(parentTr.data('number-filter') !== true) {
                            parentTr.show();
                        }
                    } else {
                        parentTr.data('type-filter', true);
                        parentTr.hide();
                    }
                });
            });


        })
    })(jQuery)
</script>
{{ Assets::jsEnd() }}

@if(isset($homeTeamEvents) && count($homeTeamEvents) > 0 && isset($homeTeam->title))
     <H2>Other events for <strong>{{$homeTeam->title}}</strong></H2>
     <ul class="othervents">
        @foreach($homeTeamEvents as $e)
         <li>
             <span>{{ $e->title }}</span>
             <span class="date-details">{{date('l, dS F Y, h:ia', strtotime($e->datetime)) }}, {{$e->event_location}}</span>
         </li>
         @endforeach
     </ul>
@endif


                 <!---------FAZLEEEEEE listing------------>






             </div>

         </div>








     </div>
</div>


<div id="GroupPurchase" class="reveal-modal" data-reveal>
    <a class="close-reveal-modal">&#215;</a>


    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>

    <h2>Tickets for Chelsea vs Manchester United</h2>

    <p>Tickets For This Event Are Available On Group Purchase. Please Fill In Your Full Name, Company, Phone Number, Email Address, Quantity And Ticket Type. You Are Interested In And A Salesman Will Get Back To You As Soon As Possible With Our Options.</p>


    <form class="enquiryform">

        <div class="row">


            <input type="text" placeholder="YOUR NAME" />

        </div>

        <div class="row">


            <input type="text" placeholder="COMPANY NAME" />

        </div>


        <div class="row">


            <input type="text" placeholder="YOUR EMAIL" />

        </div>


        <div class="row">


            <input type="text" placeholder="TEL OR MOBILE" />

        </div>


        <div class="row">

            <textarea placeholder="MESSAGE"></textarea>


        </div>


        <div class="row">


            <input type="button" class="btn pinkbtn pull-right" value="SUBMIT">


        </div>




    </form>


</div>



<!---------main content------------>


@stop
