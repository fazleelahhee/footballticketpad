<!-- Title -->
<div class="control-group {{ $errors->has('flatrate') ? 'has-error' : '' }}">
    <label class="control-label" for="title">UK - Monday to Friday Special Delivery</label>

    <div class="controls">
        @if (isset($flatrate))
        {{ Form::text('flatrate', $flatrate, array('class'=>'form-control', 'id' => 'flatrate', 'placeholder'=>'UK - Monday to Friday Special Delivery', 'value'=>Input::old('seller_commission'))) }}
        @else
        {{ Form::text('flatrate', '' , array('class'=>'form-control', 'id' => 'flatrate', 'placeholder'=>'UK - Monday to Friday Special Delivery', 'value'=>Input::old('flatrate'))) }}
        @endif
        @if ($errors->first('flatrate'))
        <span class="help-block">{{ $errors->first('flatrate') }}</span>
        @endif
    </div>
</div>
<br>

<!-- Title -->
<div class="control-group {{ $errors->has('flatrate') ? 'has-error' : '' }}">
    <label class="control-label" for="title">UK - Saturday Guarantee (pre 1pm)</label>

    <div class="controls">
        @if (isset($flatrate2))
        {{ Form::text('flatrate2', $flatrate2, array('class'=>'form-control', 'id' => 'flatrate2', 'placeholder'=>'UK - Saturday Guarantee (pre 1pm)', 'value'=>Input::old('flatrate2'))) }}
        @else
        {{ Form::text('flatrate2', '' , array('class'=>'form-control', 'id' => 'flatrate2', 'placeholder'=>'UK - Saturday Guarantee (pre 1pm)', 'value'=>Input::old('flatrate2'))) }}
        @endif
        @if ($errors->first('flatrate2'))
        <span class="help-block">{{ $errors->first('flatrate2') }}</span>
        @endif
    </div>
</div>
<br>

<!-- Title -->
<div class="control-group {{ $errors->has('flatrate3') ? 'has-error' : '' }}">
    <label class="control-label" for="title">UK - Hotel Delivery </label>

    <div class="controls">
        @if (isset($flatrate3))
        {{ Form::text('flatrate3', $flatrate3, array('class'=>'form-control', 'id' => 'flatrate3', 'placeholder'=>'UK - Hotel Delivery ', 'value'=>Input::old('flatrate3'))) }}
        @else
        {{ Form::text('flatrate3', '' , array('class'=>'form-control', 'id' => 'flatrate3', 'placeholder'=>'UK - Hotel Delivery ', 'value'=>Input::old('flatrate3'))) }}
        @endif
        @if ($errors->first('flatrate3'))
        <span class="help-block">{{ $errors->first('flatrate3') }}</span>
        @endif
    </div>
</div>
<br>

<!-- Title -->
<div class="control-group {{ $errors->has('flatrate4') ? 'has-error' : '' }}">
    <label class="control-label" for="title">International Delivery </label>

    <div class="controls">
        @if (isset($flatrate4))
        {{ Form::text('flatrate4', $flatrate4, array('class'=>'form-control', 'id' => 'flatrate4', 'placeholder'=>'UK - Hotel Delivery ', 'value'=>Input::old('flatrate4'))) }}
        @else
        {{ Form::text('flatrate4', '' , array('class'=>'form-control', 'id' => 'flatrate3', 'placeholder'=>'International Delivery ', 'value'=>Input::old('flatrate4'))) }}
        @endif
        @if ($errors->first('flatrate4'))
        <span class="help-block">{{ $errors->first('flatrate4') }}</span>
        @endif
    </div>
</div>
<br>