<input name="type" type="hidden" value="{{$type}}" />

<div class="control-group">
    <div class="controls">
    <select name="country" class="select input">
        <option value=""> - </option>
        @foreach($countries as $country)
            @if (isset($meta_country))
                <option value="{{$country->id}}" {{ $meta_country == $country->id?  'selected': '' }}>{{$country->title}}</option>
            @else
                <option value="{{$country->id}}">{{$country->title}}</option>
            @endif
        @endforeach
    </select>
    </div>
</div>
<br>

@if($mode  == 'edit')

<!-- Published -->
<div class="control-group">
    <div class="controls">
        <label>Tournaments/Seasons</label>
        <table class="table">
            <th>Tournaments</th>
            <th>Seasons</th>
            <th></th>
            <tbody>
            <tr>
                <td>
                    <select name="tournament" class="select input">
                        <option value=""> - </option>
                        @foreach($tournament as $t )
                        <option value="{{$t->id}}" >{{$t->title}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="season" class="select input">
                        <option value=""> - </option>
                        @foreach($season as $s )
                        <option value="{{$s->id}}" >{{$s->title}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button  type="button" class="add-tounaments-season btn btn-default " data-url="123">Add Tournament/ Season </button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>

</div>
<br>

<!-- Published -->
<div class="control-group">
    <div class="controls">
        <label>Tournaments/Seasons list</label>
        <table class="table league-container">
            <th>Tournaments</th>
            <th>Seasons</th>
            <th></th>
            <tbody>
            @if(isset($meta_tournament))
            @foreach($meta_tournament as $t)
            <tr>
                <td>
                    {{$t['tournamentHTML']}}
                </td>
                <td>
                    {{$t['seasonHTML']}}
                </td>
                <td><a href="#" class="delete-league" data-meta-id="{{$t['id']}}">X</a></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">
                    No tournament found!
                </td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>

</div>
<br>

{{ Assets::jsStart() }}
<script type="text/javascript" charset="UTF-8">
    (function ($) {
        $('.league-container').on('click', '.delete-league', function  (e) {
            e.preventDefault();

            var data = {
                id :  $(this).data('meta-id')
                },
                self = $(this);
            $.ajax({
                url:  "{{route('footballticket.meta.data.delete')}}",
                data: data,
                dataType: 'json',
                type: 'post',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.id) {
                        self.closest('tr').remove();
                    }
                }
            })

        });

        $('.add-tounaments-season').click(function (e) {
            e.preventDefault();
            var tournament  = $("select[name=tournament]").val();
            var tournamentHTML  = $.trim($("select[name=tournament]  option:selected").text());
            var season      = $("select[name=season]").val();
            var seasonHTML      = $.trim($("select[name=season] option:selected").text());
            var clubId      = $(".edit-form").data('id');

            if ( tournament == '') {
                alert('Please select league/ tournaments');
                return;
            }

            if ( season == '') {
                alert('Please select season');
                return;
            }
            var data = {
                id: clubId,
                key: 'tournament',
                value: {
                    tournament: tournament,
                    season: season,
                    tournamentHTML: tournamentHTML,
                    seasonHTML: seasonHTML
            }}
            $.ajax({
                url:  "{{route('footballticket.meta.data.save')}}",
                data: data,
                dataType: 'json',
                type: 'post',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.id) {
                        $('.league-container').append('<tr>' +
                            '<td>'+tournamentHTML+'</td>' +
                            '<td>'+seasonHTML+'</td>' +
                            '<td><a href="#" class="delete-league" data-meta-id="'+response.id+'">X</a></td></tr>')
                    }
                }
            })
        });

    })(jQuery)
</script>
{{ Assets::jsEnd() }}
@endif