<!-- Tag -->
<div class="control-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Excerpt</label>

    <div class="controls">

        @if(isset($article->excerpt))
        {{ Form::textarea('excerpt', $article->excerpt, array('class'=>'form-control', 'id' => 'excerpt', 'placeholder'=>'excerpt', 'value'=>Input::old('excerpt'))) }}
        @else
        {{ Form::textarea('excerpt', null, array('class'=>'form-control', 'id' => 'excerpt', 'placeholder'=>'excerpt', 'value'=>Input::old('excerpt'))) }}
        @endif

        @if ($errors->first('excerpt'))
        <span class="help-block">{{ $errors->first('excerpt') }}</span>
        @endif
    </div>
</div>
<br>

<div class="control-group {{ $errors->has('feature_image') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Feature Image</label>

    <div class="controls feature-image-container">

        @if (isset($article->feature_image) && $article->feature_image != '' )
        <img class="feature-img-preview" src="{{$article->feature_image}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="feature_image" value="{{$article->feature_image}}" type="hidden" id="feature_image"/>
        @else
        <input name="feature_image" value="" type="hidden" id="feature_image"/>
        @endif

        {{ Form::button('Feature Image',  array('class'=>'btn btn-info', 'id'=>'feature_image_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_feature_image_btn', 'style'=>"display: none")) }}
        @if ($errors->first('feature_image'))
        <span class="help-block">{{ $errors->first('feature_image') }}</span>
        @endif
    </div>
</div>
<br>


{{ Assets::jsStart() }}
<script type="text/javascript">
    window.AppFileManager = {};


    function SetUrl(p,w,h) {
        AppFileManager.setImage(p,w,h);
    }

    (function ($, f) {
        f.fileManagerWindow =null;
        f.elem = null;
        f.intervalId = null;
        f.type = '';
        f.openFileManager = function () {
            if ( f.fileManagerWindow !== null) {
                alert("You already have opened window, p[lease close that before open another one");
                return null;
            }
            this.fileManagerWindow = window.open("/filemanager/show?CKEditorFuncNum=1&langCode=en", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=500, width=600, height=400");
            this.intervalId = window.setInterval(this.checkwindow, 500);
        };
        f.closeFileManager = function () {

            this.fileManagerWindow.close();
            this.fileManagerWindow = null;
        };
        f.setImage= function(p,w,h) {
            this.closeFileManager();
            window.clearInterval(f.intervalId);
            if(p) {
                var pathExtract = /^[a-z]+:\/\/\/?[^\/]+(\/[^?]*)/i;
                var imageUrl = (pathExtract.exec(p))[1];
                if(imageUrl && this.type == 'feature') {
                    $('.feature-image-container').find('.feature-img-preview').remove();
                    $('.feature-image-container').find('.image-preview-div').remove();
                    var image = $('<img class="feature-img-preview" src="'+imageUrl+'" style="max-width:300px; max-height:200px;" />');
                    this.elem.prepend("<hr class='image-preview-div' style='margin-top: 10px;' />");
                    this.elem.prepend(image);
                    this.elem.find('#feature_image').val(imageUrl);
                    this.elem.find('#remove_feature_image_btn').css({display: 'block'});
                    return;
                }

                if(imageUrl && this.type == 'venue') {
                    $('.venue-image-container').find('.venue-img-preview').remove();
                    $('.venue-image-container').find('.image-preview-div').remove();
                    var image = $('<img class="venue-img-preview" src="'+imageUrl+'" style="max-width:300px; max-height:200px;" />');
                    this.elem.prepend("<hr class='image-preview-div' style='margin-top: 10px;' />");
                    this.elem.prepend(image);
                    this.elem.find('#venue_image').val(imageUrl);
                    this.elem.find('#remove_venue_image_btn').css({display: 'block'});
                    return;
                }

                if(imageUrl && this.type == 'logo') {
                    $('.club-logo-container').find('.club-logo-preview').remove();
                    $('.club-logo-container').find('.image-preview-div').remove();
                    var image = $('<img class="venue-img-preview" src="'+imageUrl+'" style="max-width:300px; max-height:200px;" />');
                    this.elem.prepend("<hr class='image-preview-div' style='margin-top: 10px;' />");
                    this.elem.prepend(image);
                    this.elem.find('#club_logo').val(imageUrl);
                    this.elem.find('#remove_club_logo_btn').css({display: 'block'});
                    return;
                }
            }
        }

        f.checkwindow =  function () {
            if (f.fileManagerWindow  && f.fileManagerWindow  == null) {
                window.clearInterval(f.intervalId);
            }

            try {
                if(!f.fileManagerWindow.top) {
                    window.clearInterval(f.intervalId);
                    f.fileManagerWindow = null;
                }
            } catch (err) {
                window.clearInterval(f.intervalId);
                f.fileManagerWindow = null;
            }

        }


        $.fn.fileManager = function (option) {
            f.elem = $(this).closest(option.container);
            f.openFileManager();
        }

        $.fn.removeFeatureImage = function (option) {
            var elem = $(this).closest(option.container);
            elem.find(option.img_pre).remove();
            elem.find(option.img_prev_div).remove();
            elem.find(option.feature_img).val('');
            elem.find(option.remove).css({display: 'none'});
        }
    })(jQuery, AppFileManager)

    $(function() {

        $('#feature_image_btn').click(function () {
            AppFileManager.type = 'feature';
            $(this).fileManager({
                container: '.feature-image-container'
            });
        });

        $('#remove_feature_image_btn').click(function () {
            $(this).removeFeatureImage({
                container: '.feature-image-container',
                img_pre: ".feature-img-preview",
                img_prev_div: ".image-preview-div",
                feature_img: '#feature_image',
                remove: '#remove_feature_image_btn'
            });
        });
    });


</script>

{{ Assets::jsEnd() }}