@extends('backend/_layout/layout')
@section('content')

{{  Assets::setStyles([
    'bootstrap-tagsinput' => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.css',
    'datepicker'          => 'js/plugin/bootstrap-datepicker/datepicker.css'
], true) }}

{{
    Assets::setScripts([
        'bootstrap-tagsinput'       => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js',
        'slug'                      => 'js/plugin/jquery-slug/jquery.slug.js',
        'bootstrap-datepicker'      => 'js/plugin/bootstrap-datepicker/bootstrap-datepicker.js',
        'bootstrap-datepicker.tr'   => 'js/plugin/bootstrap-datepicker/locales/bootstrap-datepicker.tr.js',
    ], true);
}}

<div class="container">
    <div class="page-header">
        <h3>
            News Create
            <div class="pull-right">
                {{ HTML::link('/admin/news','Back', array('class'=>'btn btn-primary')) }}
            </div>
        </h3>
    </div>
    {{ Form::open(array('action' => 'App\Controllers\Admin\NewsController@store')) }}

    <!-- Title -->
    <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {{ Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
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
                <span class="input-group-addon">www.bondmedia.co.uk/</span>
                {{ Form::text('slug', null, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
            </div>
            @if ($errors->first('slug'))
            <span class="help-block">{{ $errors->first('slug') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Datetime -->
    <div class="control-group {{ $errors->has('datetime') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Datetime</label>

        <div class="controls">
            {{ Form::text('datetime', null, array('class'=>'form-control', 'id' => 'datetime', 'value'=>Input::old('datetime'))) }}
            @if ($errors->first('datetime'))
            <span class="help-block">{{ $errors->first('datetime') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Content -->
    <div class="control-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Content</label>

        <div class="controls">
            {{ Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content_page', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
            @if ($errors->first('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Published -->
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Publish ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{{ $errors->first('is_published') }}</span>
            @endif
        </div>
    </div>
    <br>
    {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}

</div>
@stop

@section('script')

@include('backend.partials.ckeditor')

<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

        $('#datetime').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            orientation: "top auto"
        });

        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>
@stop