@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('ckeditor/ckeditor.js') }}
{{ HTML::style('dropzone/css/basic.css') }}
{{ HTML::style('dropzone/css/dropzone.css') }}
{{ HTML::script('dropzone/dropzone.js') }}
<div class="container">
    <div class="page-header">
        <h3>
            {{ucfirst($type)}} Update
            <div class="pull-right">
                {{ HTML::link('/admin/slider','Back', array('class'=>'btn btn-primary')) }}
            </div>
        </h3>
    </div>
    <!-- Dropzone -->
    <label class="control-label" for="title">Images</label>

    <div style="width: 700px; min-height: 300px; height: auto; border:1px solid slategray;" id="dropzone">
        {{ Form::open(array('url' => 'admin/slider/upload/' . $slider->id, 'class'=>'dropzone', 'id'=>'my-dropzone')) }}
        <!-- Single file upload
        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        -->
        <!-- Multiple file upload-->
        <div class="fallback">
            <input name="file" type="file" multiple/>
        </div>
        <br>
        <br>
        {{ Form::close() }}
    </div>

    <br>
    {{ Form::open(array('action' => array('App\Controllers\Admin\SliderController@update', $slider->id), 'method' => 'PATCH')) }}
    <!-- Title -->
    <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {{ Form::text('title', $slider->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
            @if ($errors->first('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Type -->
    <div class="control-group {{ $errors->has('type') ? 'error' : '' }}" style="display: none">
        <label class="control-label" for="title">Type</label>

        <div class="controls">
            {{ Form::select('type', $types, null, array('class' => 'form-control', 'value'=>Input::old('type'))) }}
            @if ($errors->first('type'))
            <span class="help-block">{{ $errors->first('type') }}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {{ Form::submit('Update', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}

    @if(!empty($images))
    <ul class="image-container">
        @foreach($images as $image)
            <li class="slider-image slider-image-{{$image->id}}"
                data-id="{{$image->id}}"
                data-title="{{addslashes($image->title)}}"
                data-url="{{$image->url}}"
                data-description="{{addslashes($image->description)}}"
                data-order="{{$image->order}}"
                data-path="{{ $image->path }}">

                <img src="{{ $image->path }}" />
            </li>
        @endforeach
    </ul>
    @endif

</div>
@stop

{{
    Assets::setScripts([
        'underscore'       => 'js/libs/underscore.min.js'
    ], true);
}}

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        // myDropzone is the configuration for the element that has an id attribute
        // with the value my-dropzone (or myDropzone)
        Dropzone.options.myDropzone = {
            init: function () {
                this.on("addedfile", function (file) {

                    var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                    var _this = this;

                    removeButton.addEventListener("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        var fileInfo = new Array();
                        fileInfo['name'] = file.name;

                        $.ajax({
                            type: "POST",
                            url: "{{ url('admin/slider-delete-image') }}",
                            data: {file: file.name},
                            success: function (response) {

                                if (response == 'success') {

                                    //alert('deleted');
                                }
                            },
                            error: function () {
                                alert("error");
                            }
                        });

                        _this.removeFile(file);

                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });
            }
        };


//        var myDropzone = new Dropzone("#dropzone .dropzone");
//        Dropzone.options.myDropzone = false;
//             @foreach($slider->images as $photo)
//
//        // Create the mock file:
//        var mockFile = { name: "{{ $photo->file_name }}", size: "{{ $photo->file_size }}" };
//
//        // Call the default addedfile event handler
//        myDropzone.emit("addedfile", mockFile);
//
//        // And optionally show the thumbnail of the file:
//        myDropzone.emit("thumbnail", mockFile, "{{ url($photo->path) }}");
//
//             @endforeach


        $('.slider-image img').click(function (e) {
            e.preventDefault();
            var parent = $(this).parent();
            var template = _.template($("#template-image-popup").html());
            $('body').find('#image-pop').remove();
            $('body').append(template({
                title: $(parent).data('title'),
                url: $(parent).data('url'),
                description: $(parent).data('description'),
                order: $(parent).data('order')? $(parent).data('order'): 0,
                id: $(parent).data('id')
            }));
            $('#image-pop').modal({show: true})
        });

        $('body').on('click', '.btn-save', function (e) {
            e.preventDefault();
            var imagePopUpForm = $('#image-pop').find('form');
            var id = imagePopUpForm.find("#id").val(),
                title = imagePopUpForm.find("#photoTitle").val(),
                description = imagePopUpForm.find("#description").val(),
                url = imagePopUpForm.find("#url").val(),
                order = imagePopUpForm.find("#order").val();

            var data = {
                id: id,
                title: title,
                description: description,
                url: url,
                order: order
            };


            $.ajax({
                url: "{{ url('admin/slider/save/image-meta') }}",
                type: 'post',
                data: data,
                dataType: 'json',
                success: function () {
                    $('p.message').html('Image meta updated');
                    $('p.message').css({display: 'block'});
                }
            }).done(function () {

            });

            var elem = $('.slider-image-'+data.id)
            elem.data('title', data.title);
            elem.data('description', data.description);
            elem.data('url', data.url);
            elem.data('order', data.order);

            //$('#image-pop').modal({show: true})
        });

        $('body').on('click', '.btn-delete', function (e) {
            console.log('delete has been clicked');
            var imagePopUpForm = $('#image-pop').find('form');
            var id = imagePopUpForm.find("#id").val();

            var data = {
                id: id
            };

            $.ajax({
                url: "{{ url('admin/slider/delete/image') }}",
                type: 'post',
                data: data,
                dataType: 'json',
                success: function () {
                    var elem = $('.slider-image-'+data.id);
                    elem.remove();
                    $('.btn-modal-close').trigger('click');
                }
            });
        });

    });


</script>

<script type="text/x-template" id="template-image-popup">
    <div class="modal fade" id="image-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        {{ Form::open(array('url' => '/', 'class'=>'modal-image', 'id'=>'modal-image')) }}
        <input type="hidden" name="id" id="id" value="<%=id%>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Slider image meta</h4>
                    <p class="message" style="display:none"></p>
                </div>
                <div class="modal-body">

                <div class="popup-content">


                    <!-- Title -->
                    <div class="control-group">
                        <label class="control-label" for="title">Title</label>

                        <div class="controls">
                            <input class="form-control" id="photoTitle" placeholder="Image Title" value="<%=title%>" name="photoTitle" type="text">
                        </div>
                    </div>
                    <br>
                    <!-- url -->
                    <div class="control-group">
                        <label class="control-label" for="url">URL</label>

                        <div class="controls">
                            <input class="form-control" id="url" placeholder="URL" value="<%=url%>" name="url" type="text">
                        </div>
                    </div>
                    <br>
                    <!-- url -->
                    <div class="control-group">
                        <label class="control-label" for="description">Description</label>

                        <div class="controls">
                           <textarea name="description" id="description" class="input form-control" placeholder="image description" ><%=description%></textarea>
                        </div>
                    </div>
                    <br>
                    <!-- Sort Order -->
                    <div class="control-group">
                        <label class="control-label" for="title">Sort Order</label>

                        <div class="controls">
                            <input class="form-control" id="order" placeholder="Sort Order" value="<%=order%>" name="photoTitle" type="text">
                        </div>
                    </div>
                    <br>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-modal-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger btn-delete"> Delete </button>
                    <button type="button" class="btn btn-primary btn-save"> Save </button>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</script>
@stop