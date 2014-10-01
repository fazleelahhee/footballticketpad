<input name="type" type="hidden" value="{{$type}}" />

<div class="control-group">
    <div class="controls">
    <select name="country" class="select input">
        <option value=""> - </option>
        @foreach($countries as $country)
        <option value="{{$country->id}}" {{ $meta_country == $country->id?  'selected': '' }}>{{$country->title}}</option>
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
                    <a href="#" class="add-tounaments-season btn" data-url="123">Add Tournament/ Season </a>
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
        <table class="table">
            <th>Tournaments</th>
            <th>Seasons</th>
            <tbody>
                <tr>
                    <td>
                        <input name="league[season][]" type="hidden" value="2014">
                        <input name="league[tournament][]" type="hidden" value="Premier League">
                        Premier League
                    </td>
                    <td>2014</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<br>

{{ Assets::jsStart() }}
<script type="text/javascript" charset="UTF-8">
    (function ($) {
        $(document).ready(function  () {

        });
    })(jQuery)
</script>
{{ Assets::jsEnd() }}
@endif