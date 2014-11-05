@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

@include(Template::name('frontend.%s._layout.account-tabs'))

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







             @if(isset($soldTickets) && count($soldTickets) > 0)
             @foreach($soldTickets as $ticket)
             <tr>
                 <td>
                     <div class="pull-left gamedetail nopadding">

                         <span class="game">{{ $ticket->event->title}}</span>
                         <span class="game-info pull-left  clearboth">{{date('d/m/Y, G:i', strtotime($ticket->event->datetime) ) }}</span>
                     </div>

                 </td>

                 <td>{{ $ticket->ticketType }}</td>

                 <td>Block: {{ $ticket->ticket['ticketInformation']['loc_block'] }}
                     <br/>
                     Row: {{ $ticket->ticket['ticketInformation']['loc_row'] }}
                 </td>

                 <td>{{ $ticket->qty }}</td>

                 <td>£{{ $ticket->amount }}</td>

                 <td>{{ $ticket->product_id }}</td>

                 <td>{{ date('d/m/Y', strtotime($ticket->orderDate)) }}</td>

                 <td>
                     {{ $ticket->payment_status }}
                     <br/><span class="paidID">{{$ticket->order_id}}</span>
                 </td>
             </tr>
             @endforeach
             @else
             <tr>
                 <td colspan="8">No purchased ticket found!</td>
             </tr>
             @endif

             </tbody>


         </table>
        </div>


         <!---------faz shortcode------------>

                            
     </div>
</div>
<!---------main content------------>


@stop
