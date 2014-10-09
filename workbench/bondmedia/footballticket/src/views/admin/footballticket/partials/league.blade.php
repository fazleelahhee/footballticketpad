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