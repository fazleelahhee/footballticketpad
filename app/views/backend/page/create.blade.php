@extends('backend/_layout/layout')

@section('style')
<style>
    .container {top: 0px;}
</style>
@stop

{{
    Assets::setStyles([
        'bootstrap-datepicker'          => 'js/plugin/jquery-datetime/jquery.datetimepicker.css',
        'bootstrap-tagsinput'           => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.css'
    ], true);
}}


{{
Assets::setScripts([
    'bootstrap-tagsinput'       => 'js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js',
    'slug'                      => 'js/plugin/jquery-slug/jquery.slug.js'
], true);
}}
@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-pencil-square-o"></i> Page <span>>
							New Page </span></h1>
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
                    <h2 class="hidden-xs hidden-sm">New Page </h2>

                    <ul class="nav nav-tabs pull-right in" id="myTab">

                        <li class="active">
                            <a data-toggle="tab" href="#s1"><i class="fa fa-crop text-success"></i> <span class="hidden-mobile hidden-tablet">Content</span></a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#s2"><i class="fa fa-crop text-primary"></i> <span class="hidden-mobile hidden-tablet">SEO</span></a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#s3"><i class="fa fa-crop text-warning"></i> <span class="hidden-mobile hidden-tablet">Attributes</span></a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#s4"><i class="fa fa-crop text-danger"></i> <span class="hidden-mobile hidden-tablet">Feature Image</span></a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#s5"><i class="fa fa-crop txt-color-purple"></i> <span class="hidden-mobile hidden-tablet">Misc</span></a>
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
                            {{ Form::open(array('action' => 'App\Controllers\Admin\PageController@store')) }}
                            <div class="tab-pane fade active in" id="s1">
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
                                <!-- parent -->
                                <div class="control-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Parent page</label>

                                    <div class="controls">
                                        {{ Form::select('parent_id', $pages , 0, array('class'=>'form-control', 'id'=>'parent_id')) }}
                                        @if ($errors->first('parent_id'))
                                        <span class="help-block">{{ $errors->first('parent_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <!-- Slug -->
                                <div class="control-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Slug</label>

                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-addon">{{ BMAdmin::siteUrl() }}/</span>
                                            {{ Form::text('slug', null, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
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
                                        {{ Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content_page', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
                                        @if ($errors->first('content'))
                                        <span class="help-block">{{ $errors->first('content') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <!-- Published -->
                                <div class="control-group {{ $errors->has('publication_date') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Publication Date</label>
                                    <div class="controls">
                                        {{ Form::text('publication_date', null, array('data-format'=>"dd/MM/yyyy hh:mm", 'class'=>'form-control ', 'id' => 'publication-date', 'placeholder'=>'Publication Date', 'value'=>Input::old('publication_date'))) }}
                                        @if ($errors->first('publication_date'))
                                        <span class="help-block">{{ $errors->first('publication_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br />
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

                            </div>

                            <div class="tab-pane fade tab-hide" id="s2">
                                <!-- Title -->
                                <div class="control-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
                                    <label class="control-label" for="metaTitle">Meta Title</label>

                                    <div class="controls">
                                        {{ Form::text('meta_title', null, array('class'=>'form-control', 'id' => 'meta-title', 'placeholder'=>'Meta Title', 'value'=>Input::old('meta_title'))) }}
                                        @if ($errors->first('metaTitle'))
                                            <span class="help-block">{{ $errors->first('meta_title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <div class="control-group {{ $errors->has('meta_keyword') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Meta Keyword</label>

                                    <div class="controls">
                                        {{ Form::textarea('meta_keyword', null, array('class'=>'form-control', 'id' => 'meta-keyword', 'placeholder'=>'Meta Keyword', 'value'=>Input::old('meta_keyword'))) }}
                                        @if ($errors->first('meta_keyword'))
                                        <span class="help-block">{{ $errors->first('meta_keyword') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <div class="control-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Meta Description</label>

                                    <div class="controls">
                                        {{ Form::textarea('meta_description', null, array('class'=>'form-control', 'id' => 'meta-description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_descriptiont'))) }}
                                        @if ($errors->first('meta_description'))
                                        <span class="help-block">{{ $errors->first('meta_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                            </div>

                            <div class="tab-pane fade" id="s3">
                                <div class="control-group {{ $errors->has('template') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Template</label>

                                    <div class="controls">
                                        {{ Form::select('template', $templates, 'default', array('class'=>'form-control', 'id'=>'template')) }}
                                        @if ($errors->first('template'))
                                        <span class="help-block">{{ $errors->first('template') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="tab-pane fade" id="s4">
                                <div class="control-group {{ $errors->has('feature_image') ? 'has-error' : '' }}">
                                    <label class="control-label" for="title">Feature Image</label>

                                    <div class="controls feature-image-container">
                                        <input name="feature_image" value="" type="hidden" id="feature_image"/>
                                        {{ Form::button('Upload Featured Image',  array('class'=>'btn btn-info', 'id'=>'feature_image_btn')) }}
                                        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_feature_image_btn', 'style'=>"display: none")) }}
                                        @if ($errors->first('feature_image'))
                                        <span class="help-block">{{ $errors->first('feature_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="tab-pane fade" id="s5">

                            </div>
                            <div class="">
                            <!-- Form actions -->
                            {{ Form::submit('Save', array('class' => 'btn btn-success')) }}
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div> <!-- end widget div -->
            </div>
        </article>

    </div>
</section>


@stop

{{
Assets::setScripts([
    'bootstrap-datepicker'         => 'js/plugin/jquery-datetime/jquery.datetimepicker.js'
    ], true);
}}

@section('script')
@parent
@include('backend.partials.ckeditor')
<script type="text/javascript">

    window.AppFileManager = {};

    function SetUrl(p,w,h) {
        AppFileManager.setImage(p,w,h);
    }

    (function ($, f) {
        f.fileManagerWindow =null;
        f.elem = null;
        f.openFileManager = function () {
            this.fileManagerWindow = window.open("/filemanager/show?CKEditorFuncNum=1&langCode=en", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=500, width=900, height=600");
        };
        f.closeFileManager = function () {
            if(this.fileManagerWindow) {
                this.fileManagerWindow.close();
                this.fileManagerWindow = null;
            }
        };
        f.setImage= function(p,w,h) {
            this.closeFileManager();
            if(p) {
                var pathExtract = /^[a-z]+:\/\/\/?[^\/]+(\/[^?]*)/i;
                var imageUrl = (pathExtract.exec(p))[1];
                if(imageUrl) {
                    var image = $('<img class="feature-img-preview" src="'+imageUrl+'" style="max-width:300px; max-height:200px;" />');
                    this.elem.prepend("<hr class='image-preview-div' style='margin-top: 10px;' />");
                    this.elem.prepend(image);
                    this.elem.find('#feature_image').val(imageUrl);
                    this.elem.find('#remove_feature_image_btn').css({display: 'block'});
                }
            }
        }

        $.fn.fileManager = function () {
            f.elem = $(this).closest('.feature-image-container');
            f.openFileManager();
        }

        $.fn.removeFeatureImage = function () {
            var elem = $(this).closest('.feature-image-container');
            elem.find(".feature-img-preview").remove();
            elem.find(".image-preview-div").remove();
            elem.find('#feature_image').val('');
            elem.find('#remove_feature_image_btn').css({display: 'none'});
        }
    })(jQuery, AppFileManager)

    $(function() {
        $('#publication-date').datetimepicker({
            language: 'en-GB'
        });

        $('#feature_image_btn').click(function () {
            $(this).fileManager();
        });

        $('#remove_feature_image_btn').click(function () {
            $(this).removeFeatureImage();
        });

    });

    $(document).ready(function () {
        $("#title").slug({
            parent: "#parent_id :selected"
        });

        $('#datetime').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            orientation: "top auto"
        });

        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }


        $('#parent_id').change(function (e) {
            var selected = $('#parent_id :selected').html();
            var slug = $("#slug").val().replace(/^.*\/|\.[^.]*$/g, '');

            if(selected == 'parent') {
                $("#slug").val(slug);
            } else {
                $("#slug").val(selected +"/"+slug);
            }

        });
    });
</script>
@stop
