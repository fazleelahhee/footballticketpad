@extends('backend/_layout/layout')
@section('content')
{{ HTML::style('ckeditor/contents.css') }}

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $events->title }}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/events') }}"
                       class="btn btn-primary">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Title</strong></td>
                    <td>{{ $events->title }}</td>
                </tr>
                <tr>
                    <td><strong>Slug</strong></td>
                    <td>{{ $events->slug }}</td>
                </tr>
                <tr>
                    <td><strong>Published</strong></td>
                    <td>{{ $events->is_published }}</td>
                </tr>
                <tr>
                    <td><strong>Content</strong></td>
                    <td>{{ $events->content }}</td>
                </tr>
                <tr>
                    <td><strong>Team Type</strong></td>
                    <td>{{ $events->team_type }}</td>
                </tr>
                <tr>
                    <td><strong>Home Team</strong></td>
                    <td>{{ $events->home_team_id }}</td>
                </tr>
                <tr>
                    <td><strong>Away Team</strong></td>
                    <td>{{ $events->away_team_id }}</td>
                </tr>

                <tr>
                    <td><strong>Season</strong></td>
                    <td>{{ $events->season_id }}</td>
                </tr>

                <tr>
                    <td><strong>Tournament</strong></td>
                    <td>{{ $events->tournament_id }}</td>
                </tr>

                <tr>
                    <td><strong>Event Venue</strong></td>
                    <td>{{ $events->venue_id }}</td>
                </tr>

                <tr>
                    <td><strong>Feature Image</strong></td>
                    <td>{{ $events->feature_image }}</td>
                </tr>

                <tr>
                    <td><strong>Ticket Type</strong></td>
                    <td>{{ $events->ticket_type_ids }}</td>
                </tr>

                <tr>
                    <td><strong>Form Of Ticket</strong></td>
                    <td>{{ $events->form_of_ticket_ids }}</td>
                </tr>

                <tr>
                    <td><strong>Restrictions</strong></td>
                    <td>{{ $events->ticket_restriction_ids }}</td>
                </tr>

                <tr>
                    <td><strong>Date Created</strong></td>
                    <td>{{ $events->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Date Updated</strong></td>
                    <td>{{ $events->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@stop