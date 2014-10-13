<!-- Tag -->
<div class="control-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Excerpt</label>

    <div class="controls">

        @if(isset($article->excerpt))
        {{ Form::textarea('excerpt', excerpt, array('class'=>'form-control', 'id' => 'excerpt', 'placeholder'=>'excerpt', 'value'=>Input::old('excerpt'))) }}
        @else
        {{ Form::textarea('excerpt', excerpt, array('class'=>'form-control', 'id' => 'excerpt', 'placeholder'=>'excerpt', 'value'=>Input::old('excerpt'))) }}
        @end

        @if ($errors->first('excerpt'))
        <span class="help-block">{{ $errors->first('excerpt') }}</span>
        @endif
    </div>
</div>
<br>