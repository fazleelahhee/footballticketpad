@extends('backend/_layout/layout')
@section('content')

{{  Assets::setStyles([
    'bootstrap-tagsinput' => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.css',
    'jquery-datetime'           => 'js/plugin/jquery-datetime/jquery.datetimepicker.css',
], true) }}

{{
    Assets::setScripts([
        'bootstrap-tagsinput'       => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js',
        'slug'                      => 'js/plugin/jquery-slug/jquery.slug.js',
        'jquery-datetime'           => 'js/plugin/jquery-datetime/jquery.datetimepicker.js',
    ], true);
}}


    <div class="page-header">
        <h3>
             Create Events
            <div class="pull-right">
                {{ HTML::link('/admin/events','Back', array('class'=>'btn btn-primary')) }}
            </div>
        </h3>
    </div>
    {{ Form::open(array('action' => 'App\Controllers\Admin\EventsController@store')) }}

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
        <label class="control-label" for="title">When</label>

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

    <!-- Event in home-->
    <div class="control-group {{ $errors->has('event_in_home') ? 'has-error' : '' }}">
        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('event_in_home', 'event_in_home') }} Event in home ground?</label>
            @if ($errors->first('event_in_home'))
            <span class="help-block">{{ $errors->first('event_in_home') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('team_type') ? 'has-error' : '' }}">
        <label class="control-label" for="team-type">Team Type</label>
        <div class="controls">
            {{ Form::select('team_type', array('club'=>'Club', 'country' => 'Country'), 'club', array('class'=>'form-control', 'id'=>'team-type')) }}
            @if ($errors->first('template'))
            <span class="help-block">{{ $errors->first('team_type') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('team_type') ? 'has-error' : '' }}">
        <label class="control-label" for="home-team-id">Home Team</label>
        <div class="controls">
            {{ Form::select('home_team_id', array(''=>'-', '1'=>'Man U'), '', array('class'=>'form-control', 'id'=>'home-team-id')) }}
            @if ($errors->first('home-team-id'))
            <span class="help-block">{{ $errors->first('home_team_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('away-team-id') ? 'has-error' : '' }}">
        <label class="control-label" for="away-team-id">Away Team</label>
        <div class="controls">
            {{ Form::select('away_team_id', array(''=>'-', '2'=>'Chelsea'), '', array('class'=>'form-control', 'id'=>'away-team-id')) }}
            @if ($errors->first('home-team-id'))
            <span class="help-block">{{ $errors->first('away_team_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('away-team-id') ? 'has-error' : '' }}">
        <label class="control-label" for="away-team-id">Away Team</label>
        <div class="controls">
            {{ Form::select('away_team_id', array(''=>'-', '2'=>'Chelsea'), '', array('class'=>'form-control', 'id'=>'away-team-id')) }}
            @if ($errors->first('home-team-id'))
            <span class="help-block">{{ $errors->first('away_team_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    {{ Form::submit('Save', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}


@stop

@section('script')

@include('backend.partials.ckeditor')

@stop

{{ Assets::jsStart() }}

<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

        $('#datetime').datetimepicker({
            format:'d/m/Y H:i'
        });

        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>

{{ Assets::jsEnd() }}