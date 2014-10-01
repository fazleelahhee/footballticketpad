@extends('backend/_layout/layout')
@section('content')

    <div class="row">

        <div class="col-md-12">
              <div class="row">
                <div class="col-xs-6 col-md-12 menuconfig">
                    <a href="{{ route('admin.menu.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Menus</a>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-book"></span> <br/>News</a>
                    <a href="{{ route('admin.article.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-font"></span> <br/>Article</a>
                    <a href="{{ route('admin.page.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-book"></span> <br/>Pages</a>
                    <a href="{{ route('admin.photo_gallery.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Gallery</a>
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Sliders</a>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
                    <a href="{{ route('admin.form-post.index') }}" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-envelope"></span> <br/>Inbox</a>
                    <a href="{{ route('admin.settings') }}" class="btn btn-default btn-lg" role="button"><span class="glyphicon glyphicon-cog"></span> <br/>Settings</a>
                </div>
                </div>
<!--             <br>-->
<!--             <br>-->
<!--                <a target="_blank" href="{{ route('dashboard') }}" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a>-->
        </div>
    </div>

@stop
