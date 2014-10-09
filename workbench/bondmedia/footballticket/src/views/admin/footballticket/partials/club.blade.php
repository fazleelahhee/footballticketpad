<input name="type" type="hidden" value="{{$type}}" />

<div class="control-group">
    <div class="controls">
    <select name="country" class="select input">
        <option value=""> - </option>
        @foreach($countries as $country)
            @if (isset($meta_country))
                <option value="{{$country->id}}" {{ $meta_country == $country->id?  'selected': '' }}>{{$country->title}}</option>
            @else
                <option value="{{$country->id}}">{{$country->title}}</option>
            @endif
        @endforeach
    </select>
    </div>
</div>
<br>

@if($mode  == 'edit')

<!-- Published -->
<div class="control-group">
    <div class="controls">
        <label>Tournaments/Seasons</label>
        <table class="table">
            <th>Tournaments</th>
            <th>Seasons</th>
            <th></th>
            <tbody>
            <tr>
                <td>
                    <select name="tournament" class="select input">
                        <option value=""> - </option>
                        @foreach($tournament as $t )
                        <option value="{{$t->id}}" >{{$t->title}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="season" class="select input">
                        <option value=""> - </option>
                        @foreach($season as $s )
                        <option value="{{$s->id}}" >{{$s->title}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button  type="button" class="add-tounaments-season btn btn-default " data-url="123">Add Tournament/ Season </button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>

</div>
<br>

<!-- Published -->
<div class="control-group">
    <div class="controls">
        <label>Tournaments/Seasons list</label>
        <table class="table league-container">
            <th>Tournaments</th>
            <th>Seasons</th>
            <th></th>
            <tbody>
            @if(isset($meta_tournament))
            @foreach($meta_tournament as $t)
            <tr>
                <td>
                    {{$t['tournamentHTML']}}
                </td>
                <td>
                    {{$t['seasonHTML']}}
                </td>
                <td><a href="#" class="delete-league" data-meta-id="{{$t['id']}}">X</a></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">
                    No tournament found!
                </td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>


</div>
<br>

{{ Assets::jsStart() }}
<script type="text/javascript" charset="UTF-8">
    (function ($) {
        $('.league-container').on('click', '.delete-league', function  (e) {
            e.preventDefault();

            var data = {
                id :  $(this).data('meta-id')
                },
                self = $(this);
            $.ajax({
                url:  "{{route('footballticket.meta.data.delete')}}",
                data: data,
                dataType: 'json',
                type: 'post',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.id) {
                        self.closest('tr').remove();
                    }
                }
            })

        });

        $('.add-tounaments-season').click(function (e) {
            e.preventDefault();
            var tournament  = $("select[name=tournament]").val();
            var tournamentHTML  = $.trim($("select[name=tournament]  option:selected").text());
            var season      = $("select[name=season]").val();
            var seasonHTML      = $.trim($("select[name=season] option:selected").text());
            var clubId      = $(".edit-form").data('id');

            if ( tournament == '') {
                alert('Please select league/ tournaments');
                return;
            }

            if ( season == '') {
                alert('Please select season');
                return;
            }
            var data = {
                id: clubId,
                key: 'tournament',
                value: {
                    tournament: tournament,
                    season: season,
                    tournamentHTML: tournamentHTML,
                    seasonHTML: seasonHTML
            }}
            $.ajax({
                url:  "{{route('footballticket.meta.data.save')}}",
                data: data,
                dataType: 'json',
                type: 'post',
                beforeSend: function () {

                },
                success: function (response) {
                    if(response.id) {
                        $('.league-container').append('<tr>' +
                            '<td>'+tournamentHTML+'</td>' +
                            '<td>'+seasonHTML+'</td>' +
                            '<td><a href="#" class="delete-league" data-meta-id="'+response.id+'">X</a></td></tr>')
                    }
                }
            })
        });

    })(jQuery)
</script>
{{ Assets::jsEnd() }}
@endif

<div class="control-group {{ $errors->has('feature_image') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Feature Image</label>

    <div class="controls feature-image-container">

        @if (isset($node->feature_image) && $node->feature_image != '' )
        <img class="feature-img-preview" src="{{$node->feature_image}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="feature_image" value="{{$node->feature_image}}" type="hidden" id="feature_image"/>
        @endif
        <input name="feature_image" value="" type="hidden" id="feature_image"/>
        {{ Form::button('Feature Image',  array('class'=>'btn btn-info', 'id'=>'feature_image_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_feature_image_btn', 'style'=>"display: none")) }}
        @if ($errors->first('feature_image'))
        <span class="help-block">{{ $errors->first('feature_image') }}</span>
        @endif
    </div>
</div>
<br>

<div class="control-group {{ $errors->has('venue_image') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Venue Image</label>

    <div class="controls venue-image-container">

        @if (isset($node->venue_image) && $node->venue_image != '' )
        <img class="venue-img-preview" src="{{$node->venue_image}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="venue_image" value="{{$node->venue_image}}" type="hidden" id="venue_image"/>
        @endif
        <input name="venue_image" value="" type="hidden" id="venue_image"/>
        {{ Form::button('Venue Image',  array('class'=>'btn btn-info', 'id'=>'venue_image_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_venue_image_btn', 'style'=>"display: none")) }}
        @if ($errors->first('venue_image'))
        <span class="help-block">{{ $errors->first('venue_image') }}</span>
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
                }

                if(imageUrl && this.type == 'venue') {
                    $('.venue-image-container').find('.venue-img-preview').remove();
                    $('.venue-image-container').find('.image-preview-div').remove();
                    var image = $('<img class="venue-img-preview" src="'+imageUrl+'" style="max-width:300px; max-height:200px;" />');
                    this.elem.prepend("<hr class='image-preview-div' style='margin-top: 10px;' />");
                    this.elem.prepend(image);
                    this.elem.find('#venue_image').val(imageUrl);
                    this.elem.find('#remove_venue_image_btn').css({display: 'block'});
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

        $('#venue_image_btn').click(function () {
            AppFileManager.type = 'venue';
            $(this).fileManager({
                container: '.venue-image-container'
            });
        });

        $('#remove_venue_image_btn').click(function () {
            $(this).removeFeatureImage({
                container: '.venue-image-container',
                img_pre: ".venue-img-preview",
                img_prev_div: ".image-preview-div",
                feature_img: '#venue_image',
                remove: '#remove_venue_image_btn'
            });
        });
    });


</script>

{{ Assets::jsEnd() }}