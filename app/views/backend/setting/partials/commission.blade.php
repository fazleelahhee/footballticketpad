
<!-- Basic Seller Limit  -->
<div class="control-group {{ $errors->has('seller_limit') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Basic Seller Limit (£)</label>

    <div class="controls">
        @if (isset($seller_limit))
        {{ Form::text('seller_limit', $seller_limit, array('class'=>'form-control', 'id' => 'seller_limit', 'placeholder'=>'Basic Seller Limit', 'value'=>Input::old('seller_limit'))) }}
        @else
            {{ Form::text('seller_limit', '' , array('class'=>'form-control', 'id' => 'seller_limit', 'placeholder'=>'Basic Seller Limit', 'value'=>Input::old('seller_limit'))) }}
        @endif
        @if ($errors->first('seller_limit'))
        <span class="help-block">{{ $errors->first('seller_limit') }}</span>
        @endif
    </div>
</div>
<br>

<!-- Seller Basic Publish time  -->


<!-- Basic Seller Limit  -->
<div class="control-group {{ $errors->has('basic_seller_publish_time') ? 'has-error' : '' }}">
    <label class="control-label" for="title"> Basic Seller ticket publish time( in hour)</label>

    <div class="controls">
        @if (isset($basic_seller_publish_time))
        {{ Form::text('basic_seller_publish_time', $basic_seller_publish_time, array('class'=>'form-control', 'id' => 'basic_seller_publish_time', 'placeholder'=>'Basic Seller publish time', 'value'=>Input::old('basic_seller_publish_time'))) }}
        @else
        {{ Form::text('basic_seller_publish_time', '' , array('class'=>'form-control', 'id' => 'basic_seller_publish_time', 'placeholder'=>'Basic Seller publish time', 'value'=>Input::old('basic_seller_publish_time'))) }}
        @endif
        @if ($errors->first('basic_seller_publish_time'))
        <span class="help-block">{{ $errors->first('basic_seller_publish_time') }}</span>
        @endif
    </div>
</div>
<br>


<!-- Seller Commission  -->
<div class="control-group {{ $errors->has('seller_commission') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Seller Commission (%)</label>

    <div class="controls">
        @if (isset($seller_commission))
        {{ Form::text('seller_commission', $seller_commission, array('class'=>'form-control', 'id' => 'seller_commission', 'placeholder'=>'Seller Commission', 'value'=>Input::old('seller_commission'))) }}
        @else
        {{ Form::text('seller_commission', '' , array('class'=>'form-control', 'id' => 'seller_commission', 'placeholder'=>'Seller Commission', 'value'=>Input::old('seller_commission'))) }}
        @endif
        @if ($errors->first('seller_commission'))
        <span class="help-block">{{ $errors->first('seller_commission') }}</span>
        @endif
    </div>
</div>
<br>


<!-- Booking Fees -->
<div class="control-group {{ $errors->has('booking_fees') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Booking Fees (%)</label>
    <div class="controls">
        @if (isset($booking_fees))
        {{ Form::text('booking_fees', $booking_fees, array('class'=>'form-control', 'id' => 'booking_fees', 'placeholder'=>'booking_fees', 'value'=>Input::old('booking_fees'))) }}
        @else
        {{ Form::text('booking_fees', '' , array('class'=>'form-control', 'id' => 'booking_fees', 'placeholder'=>'Booking Fees', 'value'=>Input::old('booking_fees'))) }}
        @endif
        @if ($errors->first('booking_fees'))
        <span class="help-block">{{ $errors->first('booking_fees') }}</span>
        @endif
    </div>
</div>
<br>
