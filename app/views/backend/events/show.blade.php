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
                    <td>{{ $evens->content }}</td>
                </tr>
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