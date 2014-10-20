<!-- Title -->
<div class="control-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
    <label class="control-label" for="metaTitle">Meta Title</label>

    <div class="controls">
        @if(isset($node->meta_title))
        {{ Form::text('meta_title', $node->meta_title, array('class'=>'form-control', 'id' => 'meta-title', 'placeholder'=>'Meta Title', 'value'=>Input::old('meta_title'))) }}
        @else
        {{ Form::text('meta_title', '', array('class'=>'form-control', 'id' => 'meta-title', 'placeholder'=>'Meta Title', 'value'=>Input::old('meta_title'))) }}
        @endif
        @if ($errors->first('metaTitle'))
        <span class="help-block">{{ $errors->first('meta_title') }}</span>
        @endif
    </div>
</div>
<br>

<div class="control-group {{ $errors->has('meta_keyword') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Meta Keyword</label>

    <div class="controls">
        @if(isset($node->meta_content))
        {{ Form::textarea('meta_content', $node->meta_content, array('class'=>'form-control', 'id' => 'meta-keyword', 'placeholder'=>'Meta Keyword', 'value'=>Input::old('meta_keyword'))) }}
        @else
        {{ Form::textarea('meta_content', '', array('class'=>'form-control', 'id' => 'meta-keyword', 'placeholder'=>'Meta Keyword', 'value'=>Input::old('meta_keyword'))) }}
        @endif
        @if ($errors->first('meta_keyword'))
        <span class="help-block">{{ $errors->first('meta_keyword') }}</span>
        @endif
    </div>
</div>
<br>

<div class="control-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Meta Description</label>

    <div class="controls">
        @if(isset($node->meta_description))
        {{ Form::textarea('meta_description', $node->meta_description, array('class'=>'form-control', 'id' => 'meta-description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_descriptiont'))) }}
        @else
        {{ Form::textarea('meta_description', '', array('class'=>'form-control', 'id' => 'meta-description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_descriptiont'))) }}
        @endif
        @if ($errors->first('meta_description'))
        <span class="help-block">{{ $errors->first('meta_description') }}</span>
        @endif
    </div>
</div>
<br>