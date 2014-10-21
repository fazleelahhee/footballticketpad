<input name="type" type="hidden" value="{{$type}}" />

<div class="control-group">
    <div class="controls">
        <label class="control-label" for="country">
            &nbsp; Country</label>
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

<div class="control-group">
    <div class="controls">
        <label class="control-label" for="season">
            &nbsp; Current Season</label>
        <select name="season" class="select input">
            <option value=""> - </option>
            @foreach($season as $s)
            @if (isset($meta_season))
            <option value="{{$s->id}}" {{ $meta_season == $s->id?  'selected': '' }}>{{$s->title}}</option>
            @else
            <option value="{{$s->id}}">{{$s->title}}</option>
            @endif
            @endforeach
        </select>
    </div>
</div>
<br>

