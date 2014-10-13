@extends('backend/_layout/layout')
@section('content')
<!-- Published -->
    <div class="control-group">
        <div class="controls">
            <label>Hot Tickets</label>
            <table class="table">
                <th>Games</th>
                <th></th>
                <tbody>
                <tr>
                    <td>
                        <select name="games" class="select input">
                            <option value=""> - </option>
                            @foreach($games as $t )
                            <option value="{{$t->id}}" >{{$t->title}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <button  type="button" class="add-hot-ticket btn btn-default " data-url="123">Add Tickets </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>

    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 40px;  display: inline-block; width: 100%;}
        #sortable li span { position: absolute; margin-left: -1.3em; }
        #sortable li a.remove {text-align: right; margin-left: 100px; }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Hot Ticket Widget</h3>
        </div>
        <div class="panel-body">
            <ul id="sortable">
                @foreach($tickets as $ticket)
                <li class="ui-state-default" data-id="{{$ticket->id}}" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{$ticket->title}}<a href="#" class="remove">X</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@stop


{{ Assets::jsStart() }}
<script>
    $(function() {

        $( "#sortable" ).sortable({
            stop: function( event, ui ) {
                updateHotTicket();
            }
        });

        $(".add-hot-ticket").click(function () {
            var value = $('.select').val();
            var title = $('.select option:selected').html();
            $('.select option:selected').remove();
            var html = '<li class="ui-state-default" data-id="'+value+'" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'+title+'<a href="#" class="remove">X</a></li>';
            $('#sortable').append(html);
            updateHotTicket();
        });

        $( "#sortable" ).disableSelection();

        $('#sortable').on('click','a.remove',function (e) {
            e.preventDefault();
            var parent = $(this).closest('li');
            var id = parent.data('id');
            parent.find('span').remove();
            parent.find('a').remove();
            var html = '<option value="'+id+'" >'+parent.html()+'</option>';
            $('.select').append(html);
            parent.remove();
            updateHotTicket();
        });
    });

    function updateHotTicket() {
        var sortableHotTicket = $('#sortable');
        var li = sortableHotTicket.find('li')
        var data = [];
        li.each(function () {
            var ticket = {};
            ticket.id = $(this).data('id');
            ticket.index = $(this).index();
            data.push(ticket);
        });

        $.ajax({
            url: '{{route("admin.events.widget.update")}}',
            data: {tickets: data},
            dataType: 'json',
            type: 'post',
            success: function (response) {
                console.log(response);
            }
        });
    }
</script>
{{ Assets::jsEnd() }}