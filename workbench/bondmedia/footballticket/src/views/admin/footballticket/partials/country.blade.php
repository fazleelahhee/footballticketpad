<input name="type" type="hidden" value="{{$type}}" />

<div class="control-group {{ $errors->has('feature_image') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Feature Image</label>

    <div class="controls feature-image-container">

        @if (isset($node->feature_image) && $node->feature_image != '' )
        <img class="feature-img-preview" src="{{$node->feature_image}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="feature_image" value="{{$node->feature_image}}" type="hidden" id="feature_image"/>
        @endif
        <input name="feature_image" value="" type="hidden" id="feature_image"/>
        {{ Form::button('Feature Image',  array('class'=>'btn btn-info', 'id'=>'feature_image_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_feature_image_btn', 'style'=>"display: none")) }}
        @if ($errors->first('feature_image'))
        <span class="help-block">{{ $errors->first('feature_image') }}</span>
        @endif
    </div>
</div>
<br>

<div class="control-group {{ $errors->has('venue_image') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Venue Image</label>

    <div class="controls venue-image-container">

        @if (isset($node->venue_image) && $node->venue_image != '' )
        <img class="venue-img-preview" src="{{$node->venue_image}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="venue_image" value="{{$node->venue_image}}" type="hidden" id="venue_image"/>
        @endif
        <input name="venue_image" value="" type="hidden" id="venue_image"/>
        {{ Form::button('Venue Image',  array('class'=>'btn btn-info', 'id'=>'venue_image_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_venue_image_btn', 'style'=>"display: none")) }}
        @if ($errors->first('venue_image'))
        <span class="help-block">{{ $errors->first('venue_image') }}</span>
        @endif
    </div>
</div>
<br>