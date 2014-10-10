<!-- Order -->
<div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
    <label class="order">Category</label>
    <div class="controls">
        <select multiple name="category[]" class="form-control">
            @foreach($categories as $cat)
            @if(isset($selectedCat) && in_array($cat->id, $selectedCat))
            <option value="{{$cat->id}}" selected>{{$cat->category}}</option>
            @else
            <option value="{{$cat->id}}">{{$cat->category}}</option>
            @endif
            @endforeach
        </select>
    </div>
</div>
<br />