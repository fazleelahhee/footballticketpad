@if(count($tickets) > 0)
<table class="responsive">
    <thead>
    <tr><th>Game</th>
        <th>Date</th>
        <th>Price from:</th>
        <th>&nbsp;</th>
    </tr></thead>

    <tbody>


    @foreach($tickets as $ticket)
    <tr>
        <td>
                    	<span class="game">
                    		{{$ticket->title}}
                    	</span>
        </td>
        <td>
            {{date('l dS F Y <\b\r> ', strtotime($ticket->datetime))}}
        </td>
        <td>
            &pound;{{$ticket->price}}
        </td>
        <td>

            <a href="{{ FootBallEvent::getUrl($ticket) }}" class="btn pinkbtn"> BUY </a>
            <a href="{{ '/ticket/sell/'.$ticket->id }}" class="btn bluebtn"> SELL </a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endif