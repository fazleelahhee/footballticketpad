@extends('backend/_layout/layout')
@section('content')

{{  Assets::setStyles([
    'bootstrap-tagsinput'       => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.css',
    'jquery-datetime'           => 'js/plugin/jquery-datetime/jquery.datetimepicker.css',
], true) }}

{{
Assets::setScripts([
    'bootstrap-tagsinput'       => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js',
    'slug'                      => 'js/plugin/jquery-slug/jquery.slug.js',
    'jquery-datetime'           => 'js/plugin/jquery-datetime/jquery.datetimepicker.js',
    'underscore'                => 'js/libs/underscore.min.js'
    ], true);
}}



    <div class="page-header">
        <h3>
            Update Events
            <div class="pull-right">
                {{ HTML::link('/admin/events','Back', array('class'=>'btn btn-primary')) }}
            </div>
        </h3>
    </div>
    {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\EventsController@update', $events->id), 'method' => 'PATCH')) }}

    <!-- Title -->
    <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {{ Form::text('title', $events->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
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
                {{ Form::text('slug', $events->slug, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
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
            {{ Form::text('datetime', date('d/m/Y H:i', strtotime($events->datetime)), array('class'=>'form-control', 'id' => 'datetime', 'value'=>Input::old('datetime'))) }}
            @if ($errors->first('datetime'))
            <span class="help-block">{{ $errors->first('datetime') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Datetime -->
    <div class="control-group {{ $errors->has('event_location') ? 'has-error' : '' }}">
        <label class="control-label" for="event-location">Where</label>

        <div class="controls">
            {{ Form::text('event_location',$events->event_location, array('class'=>'form-control', 'id' => 'event-location', 'value'=>Input::old('event_location'))) }}
            @if ($errors->first('event_location'))
            <span class="help-block">{{ $errors->first('event_location') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Content -->
    <div class="control-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Content</label>

        <div class="controls">
            {{ Form::textarea('content', $events->content, array('class'=>'form-control', 'id' => 'content_page', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
            @if ($errors->first('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Published -->
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('is_published', 'is_published',$events->is_published) }} Publish ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{{ $errors->first('is_published') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Event in home-->
    <div class="control-group {{ $errors->has('event_in_home') ? 'has-error' : '' }}">
        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('event_in_home', 'event_in_home', $events->event_in_home) }} Event in home ground?</label>
            @if ($errors->first('event_in_home'))
            <span class="help-block">{{ $errors->first('event_in_home') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('team_type') ? 'has-error' : '' }}">
        <label class="control-label" for="team-type">Team Type</label>
        <div class="controls">
            {{ Form::select('team_type', array('club'=>'Club', 'country' => 'Country'), $events->team_type, array('class'=>'form-control', 'id'=>'team-type')) }}
            @if ($errors->first('template'))
            <span class="help-block">{{ $errors->first('team_type') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('team_type') ? 'has-error' : '' }}">
        <label class="control-label" for="home-team-id">Home Team</label>
        <div class="controls">
            {{ Form::select('home_team_id', $club, $events->home_team_id, array('class'=>'form-control', 'id'=>'home-team-id')) }}
            @if ($errors->first('home-team-id'))
            <span class="help-block">{{ $errors->first('home_team_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('away-team-id') ? 'has-error' : '' }}">
        <label class="control-label" for="away-team-id">Away Team</label>
        <div class="controls">
            {{ Form::select('away_team_id', $club, $events->away_team_id, array('class'=>'form-control', 'id'=>'away-team-id')) }}
            @if ($errors->first('home-team-id'))
            <span class="help-block">{{ $errors->first('away_team_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('season_id') ? 'has-error' : '' }}">
        <label class="control-label" for="season-id">Season</label>
        <div class="controls">
            {{ Form::select('season_id', $season, $events->season_id, array('class'=>'form-control', 'id'=>'season-id')) }}
            @if ($errors->first('season_id'))
            <span class="help-block">{{ $errors->first('season_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('tournament_id') ? 'has-error' : '' }}">
        <label class="control-label" for="tournament-id">Tournament</label>
        <div class="controls">
            {{ Form::select('tournament_id', $tournaments, $events->tournament_id, array('class'=>'form-control', 'id'=>'tournament-id')) }}
            @if ($errors->first('tournament_id'))
            <span class="help-block">{{ $errors->first('tournament_id') }}</span>
            @endif
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('ticket_type_ids') ? 'has-error' : '' }}">
        <label class="control-label" for="available-ticket-type">
            <a href="#" class="available-ticket-type">Select Available Ticket Type</a>
            <input name="ticket_type_ids" value="{{$events->ticket_type_ids}}" id="ticket-type-ids" type="hidden">
        </label>
        <div class="selected-types-container">
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('form_of_ticket_ids') ? 'has-error' : '' }}">
        <label class="control-label" for="form-of-ticket-ids">
            <a href="#" class="available-form-of-ticket-ids">Select available form of ticket</a>
            <input name="form_of_ticket_ids" value="{{$events->form_of_ticket_ids}}" id="form-of-ticket-ids" type="hidden">
        </label>

        <div class="selected-form-of-ticket-container">
        </div>
    </div>
    <br>

    <div class="control-group {{ $errors->has('ticket_restrictions_ids') ? 'has-error' : '' }}">
        <label class="control-label" for="ticket-restrictions-ids">
            <a href="#" class="available-ticket-restrictions-ids">Select available restrictions for this event</a>
            <input name="ticket_restriction_ids" value="{{$events->ticket_restriction_ids}}" id="ticket-restrictions-ids" type="hidden">
        </label>

        <div class="selected-restriction-ticket-container">
        </div>
    </div>
    <br>
     @include('backend.events.partials.images')

    {{ Form::submit('Update', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}

@stop

@section('script')

@include('backend.partials.ckeditor')

@stop


{{ Assets::jsStart() }}

<script type="text/javascript">

    (function ($) {
        window.PopUpSelector = function (options) {
            var body        = $('body'),
                url         = options.url,
                inputIds    = options.inputIds,
                container   = options.container,
                linkToClick = options.linkToClick,
                template    = options.template,
                templateCon = options.templateCon,
                addEvent    = options.addEvent,
                addInElem   = options.addInElem,
                saveBtnElem = options.saveBtnElem,
                selectElem  = options.selectElem,
                addUrl      = options.addUrl,
                loaded      = false,
                types       = [],
                self        = this;

            this.init = function  () {
                $.ajax({
                    url: url,
                    dataType: 'json',
                    type: 'GET'
                }).done(function (response) {
                    if( response.length > 0) {
                        _.each(response, function (val) {
                            if(val.title) {
                                types[val.id] = val;
                            }
                        });
                        loaded = true;
                        self.displayOnForm();
                    }
                });

                return this;
            }

            this.displayOnForm = function() {
                var ArrIds = $(inputIds).val().split(',');
                var ids = [];
                _.each(ArrIds, function (val, key) {
                    ids[key] = parseInt(val);
                });
                $(container).html('');
                _.each(types, function (val, key) {
                    if (_.contains(ids, key)) {
                        $(container).append(
                            '<p>'+val.title+'</p>'
                        );
                    }
                });

                return this;
            }

            this.events = function () {
                $(linkToClick).click(function (e) {
                    e.preventDefault();
                    var _template = _.template($(template).html());
                    $(templateCon).remove();
                    var ids = [];
                    if($(inputIds).val() != undefined || $(inputIds).val().length > 0 ) {
                        var ArrIds = $(inputIds).val().split(',');
                        _.each(ArrIds, function (val, key) {
                            ids[key] = parseInt(val);
                        });
                    }

                    body.append(_template({
                        types: types,
                        ids: ids
                    }));

                    $(templateCon).modal({show: true});

                });


                body.on('click', addEvent,function (e) {
                    e.preventDefault();
                    var data = {
                        name: $(addInElem).val()
                    }

                    $.ajax({
                        url: addUrl,
                        data: data,
                        type: 'post',
                        dataType: 'json',
                    }).done(function(response) {
                        if (response.id) {
                            $(selectElem).append(
                                '<option value='+response.id+'>'+response.ticketType+'</option>'
                            );
                            self.init();
                        }
                    });
                });

                body.on('click', saveBtnElem, function (e) {
                    e.preventDefault();
                    var selected = $(selectElem+' :selected');
                    var values = [];

                    _.each(selected, function (val, key) {
                        values[key] = parseInt($(val).val());
                    });

                    if(values.length > 0) {
                        $(inputIds).val(values.join(','));
                    }

                    $(templateCon)
                        .find('.close')
                        .trigger('click');
                    self.displayOnForm();
                });
                return this;
            }

            return this;
        }
    })(jQuery);

    (function ($) {
        $(document).ready(function () {

            function getTimes() {
                var hour = ['08', '09','10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'];
                var min = ['00', '05', '15', '20', '25', '30', '35', '40', '45', '50', '55']
                var output = [];

                for(var i=0; i<hour.length; i++) {
                    for(var j=0; j<min.length; j++) {
                        output.push(hour[i]+':'+min[j]);
                    }
                }

                return output;
            }

            $("#title").slug();
            var alloedTime = getTimes();
            $('#datetime').datetimepicker({
                format:'d/m/Y H:i',
                allowTimes: alloedTime
            });

            if ($('#tag').length != 0) {
                var elt = $('#tag');
                elt.tagsinput();
            }

            new PopUpSelector({
                url         : '{{route("ticket.events.ticket-types")}}',
                inputIds    : '#ticket-type-ids',
                container   : '.selected-types-container',
                linkToClick : '.available-ticket-type',
                template    : '#available-ticket-type-template',
                templateCon : '.available-ticket-type-template',
                addEvent    : '.add-ticket-type',
                addInElem   : '.add-ticket-type-input',
                addUrl      : '{{ route("ticket.events.ticket-types.add")}}',
                saveBtnElem : '.selected-ticket-type',
                selectElem  : '.ticket-types'
            }).init().events();

            new PopUpSelector({
                url         : '{{route("ticket.events.formOfTicketTypes")}}',
                inputIds    : '#form-of-ticket-ids',
                container   : '.selected-form-of-ticket-container',
                linkToClick : '.available-form-of-ticket-ids',
                template    : '#available-form-of-ticket-template',
                templateCon : '.available-form-of-ticket-template',
                addEvent    : '.add-form-ticket',
                addInElem   : '.add-ticket-type-input',
                addUrl      : '{{ route("ticket.events.formOfTicket.add")}}',
                saveBtnElem : '.set-form-of-ticket',
                selectElem  : '.form-of-tickets'
            }).init().events();

            new PopUpSelector({
                url         : '{{route("ticket.events.ticketRestriction")}}',
                inputIds    : '#ticket-restrictions-ids',
                container   : '.selected-restriction-ticket-container',
                linkToClick : '.available-ticket-restrictions-ids',
                template    : '#available-restriction-ticket-template',
                templateCon : '.available-restriction-ticket-template',
                addEvent    : '.add-restriction-ticket',
                addInElem   : '.add-restriction-input',
                addUrl      : '{{ route("ticket.events.restriction.add")}}',
                saveBtnElem : '.set-restriction-ticket',
                selectElem  : '.restrictions-ticket'
            }).init().events();

            //
        });

    })(jQuery);
</script>

<script type="application/x-template" id="available-ticket-type-template" charset="utf-8">
    <div class="modal fade available-ticket-type-template">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Available Ticket Type</h4>
                </div>
                <div class="modal-body">
                    <p>
                    <div class="form-group">
                        <input name="ticket_type_ids" value="" type="text" class="form-control add-ticket-type-input">
                        <input type="button" value="Add" class="btn add-ticket-type">
                    </div>
                    <div class="form-group">
                        <select multiple class="form-control ticket-types" >
                            <% _.each(types, function (val, key) {  %>
                                <option value="<%=key %>" <%= _.contains(ids, key)?'selected': '' %> ><%=val.title %></option>
                            <% }) %>
                        </select>
                    </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary selected-ticket-type">Set</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</script>

<script type="application/x-template" id="available-form-of-ticket-template" charset="utf-8">
    <div class="modal fade available-form-of-ticket-template">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Available Form of Ticket</h4>
                </div>
                <div class="modal-body ">
                    <p>
                    <div class="form-group">
                        <input name="ticket_type_ids" value="" type="text" class="form-control add-ticket-type-input">
                        <input type="button" value="Add" class="btn add-form-ticket">
                    </div>

                    <div class="form-group">
                        <select multiple class="form-control form-of-tickets">
                            <% _.each(types, function (val, key) {  %>
                                <option value="<%=key %>" <%= _.contains(ids, key)?'selected': '' %> ><%=val.title %></option>
                            <% }) %>
                        </select>
                    </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary set-form-of-ticket">Set</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</script>

<script type="application/x-template" id="available-restriction-ticket-template" charset="utf-8">
    <div class="modal fade available-restriction-ticket-template">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Available Restriction</h4>
                </div>
                <div class="modal-body ">
                    <p>
                    <div class="form-group">
                        <input name="ticket_type_ids" value="" type="text" class="form-control add-restriction-input">
                        <input type="button" value="Add" class="btn add-restriction-ticket">
                    </div>

                    <div class="form-group">
                        <select multiple class="form-control restrictions-ticket">
                            <% _.each(types, function (val, key) {  %>
                                <option value="<%=key %>" <%= _.contains(ids, key)?'selected': '' %> ><%=val.title %></option>
                            <% }) %>
                        </select>
                    </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary set-restriction-ticket">Set</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</script>

{{ Assets::jsEnd() }}