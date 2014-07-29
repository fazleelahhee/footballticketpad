@extends('backend/_layout/layout')
@section('content')

{{ HTML::style('assets/bootstrap/css/bootstrap-tagsinput.css') }}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-pencil-square-o"></i> Article <span>>
                                New Article </span></h1>
    </div>
</div>

<section id="widget-grid" class="admin-page">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="alert alert-danger hidden-lg hidden-md hidden-sm">
                <b>Please note:</b>
                This plugin is non-responsive
            </div>

            <!-- Widget ID (each widget will need unique ID)-->

            <div class="jarviswidget jarviswidget-sortable" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" role="widget" style="">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"

                -->
                <header role="heading">
                    <span class="widget-icon"> <i class="fa fa-file-image-o txt-color-darken"></i> </span>
                    <h2 class="hidden-xs hidden-sm">New Article</h2>

                    <ul class="nav nav-tabs pull-right in" id="myTab">

                        <li class="active">
                            <a data-toggle="tab" href="#s1"><i class="fa fa-crop text-success"></i> <span class="hidden-mobile hidden-tablet">Content</span></a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#s2"><i class="fa fa-crop text-primary"></i> <span class="hidden-mobile hidden-tablet">SEO</span></a>
                        </li>

                    </ul>

                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                </header>

                <!-- widget div-->
                <div role="content">
                    <!-- widget edit box -->

                    <div class="widget-body">
                        <!--                        <div class="page-header">-->
                        <!--                            <h3>-->
                        <!--                                New Page-->
                        <!--                            </h3>-->
                        <!--                        </div>-->
                        <!-- content -->
                        <div id="myTabContent" class="tab-content">

                            {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\ArticleController@update', $article->id), 'method' => 'PATCH')) }}
                            <div class="tab-pane fade active in" id="s1">
                                <!-- Title -->
                                <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Title</label>

                                    <div class="controls">
                                        {{ Form::text('title', $article->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
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
                                            {{ Form::text('slug', $article->slug, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
                                        </div>
                                        @if ($errors->first('slug'))
                                        <span class="help-block">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <!-- Tag -->
                                <div class="control-group {{ $errors->has('tag') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Tag</label>

                                    <div class="controls">
                                        {{ Form::text('tag', $tags, array('class'=>'form-control', 'id' => 'tag', 'placeholder'=>'Tag', 'value'=>Input::old('tag'))) }}
                                        @if ($errors->first('tag'))
                                        <span class="help-block">{{ $errors->first('tag') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <!-- Category -->
                                <div class="control-group {{ $errors->has('category') ? 'error' : '' }}">
                                    <label class="control-label" for="title">Category</label>

                                    <div class="controls">
                                        {{ Form::select('category', $categories, $article->category, array('class' => 'form-control', 'value'=>Input::old('category'))) }}
                                        @if ($errors->first('category'))
                                        <span class="help-block">{{ $errors->first('category') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <!-- Content -->
                                <div class="control-group {{ $errors->has('content') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Content</label>

                                    <div class="controls">
                                        {{ Form::textarea('content', $article->content, array('class'=>'form-control', 'id' => 'content_page', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
                                        @if ($errors->first('content'))
                                        <span class="help-block">{{ $errors->first('content') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>



                                <!-- Published -->
                                <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

                                    <div class="controls">
                                        <label class="checkbox">{{ Form::checkbox('is_published', 'is_published', $article->is_published) }} Publish ?</label>
                                        @if ($errors->first('is_published'))
                                        <span class="help-block">{{ $errors->first('is_published') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="s2">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- Meta Description -->
                                        <div class="control-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                                            <label class="control-label" for="title">Meta Description</label>

                                            <div class="controls">
                                                {{ Form::text('meta_description', $article->meta_description, array('class'=>'form-control', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_description'))) }}
                                                @if ($errors->first('meta_description'))
                                                <span class="help-block">{{ $errors->first('meta_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <br>


                                        <!-- Meta Keywords -->
                                        <div class="control-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                                            <label class="control-label" for="title">Meta Keywords</label>

                                            <div class="controls">
                                                {{ Form::textarea('meta_keywords', $article->meta_keywords, array('class'=>'form-control', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>Input::old('meta_keywords'))) }}
                                                @if ($errors->first('meta_keywords'))
                                                <span class="help-block">{{ $errors->first('meta_keywords') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <br>
                            {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div> <!-- end widget div -->
            </div>
        </article>

    </div>
</section>
@stop

@section('script')
{{ HTML::script('assets/bootstrap/js/bootstrap-tagsinput.js') }}
{{ HTML::script('assets/js/jquery.slug.js') }}

@include('backend.partials.ckeditor')

<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>
@stop