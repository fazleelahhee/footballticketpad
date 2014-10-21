@extends('backend/_layout/layout')
@section('content')

{{ HTML::style('assets/bootstrap/css/bootstrap-tagsinput.css') }}
{{ HTML::style('bootstrap_datepicker/css/datepicker.css') }}


    <div class="page-header">
        <h3>
            Update {{$type}}
        </h3>
    </div>
    <form action="{{route('admin.footballticket.update', array('id'=>$node->id)).'?action_type='.$type}}" method="post" data-id="{{$node->id}}" class="edit-form">

    <input name="action_type" type="hidden" value="{{$type}}" />
    <!-- Title -->
    <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {{ Form::text('title', $node->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
            @if ($errors->first('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Slug -->
    <div class="control-group {{ $errors->has('slug') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Slug</label>

        <div class="controls">
            <div class="input-group">
                <span class="input-group-addon">{{Config::get('app.url')}}group/{{$type}}/</span>
                {{ Form::text('slug', $node->slug, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
            </div>
            @if ($errors->first('slug'))
            <span class="help-block">{{ $errors->first('slug') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Content -->
    <div class="control-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Content</label>

        <div class="controls">
            {{ Form::textarea('content', $node->content, array('class'=>'form-control', 'id' => 'content_page', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
            @if ($errors->first('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Published -->
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('is_published', 'is_published',$node->is_published) }} Publish ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{{ $errors->first('is_published') }}</span>
            @endif
        </div>
    </div>
    <br>

    @include('footballticket::admin.footballticket.partials.'.$type)
    @include('footballticket::admin.footballticket.partials.common')

    {{ Form::submit('Update', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}

@stop

{{ Assets::jsStart() }}
{{ HTML::script('assets/bootstrap/js/bootstrap-tagsinput.js') }}
{{ HTML::script('assets/js/jquery.slug.js') }}
{{ HTML::script('bootstrap_datepicker/js/bootstrap-datepicker.js') }}
{{ HTML::script('bootstrap_datepicker/js/locales/bootstrap-datepicker.tr.js') }}

@include('backend.partials.ckeditor')

<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

        $('#datetime').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            orientation: "top auto"
        });
    });
</script>
{{ Assets::jsEnd() }}