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

<div class="control-group {{ $errors->has('venue_image') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Venue Image</label>

    <div class="controls venue-image-container">

        @if (isset($node->venue_image) && $node->venue_image != '' )
        <img class="venue-img-preview" src="{{$node->venue_image}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="venue_image" value="{{$node->venue_image}}" type="hidden" id="venue_image"/>
        @else
        <input name="venue_image" value="" type="hidden" id="venue_image"/>
        @endif
        {{ Form::button('Venue Image',  array('class'=>'btn btn-info', 'id'=>'venue_image_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_venue_image_btn', 'style'=>"display: none")) }}
        @if ($errors->first('venue_image'))
        <span class="help-block">{{ $errors->first('venue_image') }}</span>
        @endif
    </div>
</div>
<br>


<div class="control-group {{ $errors->has('club_logo') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Club Logo</label>

    <div class="controls club-logo-container">

        @if (isset($meta_club_logo) && $meta_club_logo != '' )
        <img class="club-logo-preview" src="{{$meta_club_logo}}" style="max-width:300px; max-height:200px;" />
        <hr class='image-preview-div' style='margin-top: 10px;' />
        <input name="club_logo" value="{{$meta_club_logo}}" type="hidden" id="club_logo"/>
        @else
        <input name="club_logo" value="" type="hidden" id="club_logo"/>
        @endif

        {{ Form::button('Club Logo',  array('class'=>'btn btn-info', 'id'=>'club_logo_btn')) }}
        {{ Form::button('Remove',  array('class'=>'btn btn-info', 'id'=>'remove_club_logo_btn', 'style'=>"display: none")) }}
        @if ($errors->first('club_logo'))
        <span class="help-block">{{ $errors->first('club_logo') }}</span>
        @endif
    </div>
</div>
<br>
<h2> Club Fact File</h2>
<div class="control-group">
    <div class="controls">
        <label class="control-label" for="nickname">Nickname</label>
        <div class="controls">
            @if (isset($meta_nickname) && $meta_nickname != '' )
            {{ Form::text('nickname', $meta_nickname, array('class'=>'form-control', 'id' => 'nickname', 'placeholder'=>'Nickname', 'value'=>Input::old('nickname'))) }}
            @else
            {{ Form::text('nickname', null, array('class'=>'form-control', 'id' => 'nickname', 'placeholder'=>'Nickname', 'value'=>Input::old('nickname'))) }}
            @endif
            @if ($errors->first('title'))
            <span class="help-block">{{ $errors->first('nickname') }}</span>
            @endif
        </div>
    </div>
</div>
<br>

<div class="control-group">
    <div class="controls">
        <label class="control-label" for="founded">Founded</label>
        <div class="controls">
            @if (isset($meta_founded) && $meta_founded != '' )
            {{ Form::text('founded', $meta_founded, array('class'=>'form-control', 'id' => 'founded', 'placeholder'=>'Founded', 'value'=>Input::old('founded'))) }}
            @else
            {{ Form::text('founded', null, array('class'=>'form-control', 'id' => 'founded', 'placeholder'=>'founded', 'value'=>Input::old('founded'))) }}
            @endif
            @if ($errors->first('founded'))
            <span class="help-block">{{ $errors->first('founded') }}</span>
            @endif
        </div>
    </div>
</div>
<br>


<div class="control-group">
    <div class="controls">
        <label class="control-label" for="rivals">Rivals</label>
        <div class="controls">
            @if (isset($meta_rivals) && $meta_rivals != '' )
            {{ Form::text('rivals', $meta_rivals, array('class'=>'form-control', 'id' => 'rivals', 'placeholder'=>'Rivals', 'value'=>Input::old('rivals'))) }}
            @else
            {{ Form::text('rivals', null, array('class'=>'form-control', 'id' => 'rivals', 'placeholder'=>'founded', 'value'=>Input::old('rivals'))) }}
            @endif
            @if ($errors->first('rivals'))
            <span class="help-block">{{ $errors->first('rivals') }}</span>
            @endif
        </div>
    </div>
</div>
<br>

<div class="control-group">
    <div class="controls">
        <label class="control-label" for="recorded_goal_scorer">Record goal scorer</label>
        <div class="controls">
            @if (isset($meta_recorded_goal_scorer) && $meta_recorded_goal_scorer != '' )
            {{ Form::text('recorded_goal_scorer', $meta_recorded_goal_scorer, array('class'=>'form-control', 'id' => 'recorded_goal_scorer', 'placeholder'=>'recorded_goal_scorer', 'value'=>Input::old('recorded_goal_scorer'))) }}
            @else
            {{ Form::text('recorded_goal_scorer', null, array('class'=>'form-control', 'id' => 'recorded_goal_scorer', 'placeholder'=>'recorded_goal_scorer', 'value'=>Input::old('recorded_goal_scorer'))) }}
            @endif
            @if ($errors->first('recorded_goal_scorer'))
            <span class="help-block">{{ $errors->first('recorded_goal_scorer') }}</span>
            @endif
        </div>
    </div>
</div>
<br>

<div class="control-group">
    <div class="controls">
        <label class="control-label" for="record_signing">Record signing</label>
        <div class="controls">
            @if (isset($meta_record_signing) && $meta_record_signing != '' )
            {{ Form::text('record_signing', $meta_record_signing, array('class'=>'form-control', 'id' => 'record_signing', 'placeholder'=>'record_signing', 'value'=>Input::old('record_signing'))) }}
            @else
            {{ Form::text('record_signing', null, array('class'=>'form-control', 'id' => 'record_signing', 'placeholder'=>'record_signing', 'value'=>Input::old('record_signing'))) }}
            @endif
            @if ($errors->first('record_signing'))
            <span class="help-block">{{ $errors->first('record_signing') }}</span>
            @endif
        </div>
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


        $('#club_logo_btn').click(function () {
            AppFileManager.type = 'logo';
            $(this).fileManager({
                container: '.club-logo-container'
            });
        });

        $('#remove_club_logo_btn').click(function () {
            $(this).removeFeatureImage({
                container: '.club-logo-container',
                img_pre: ".club-logo-preview",
                img_prev_div: ".image-preview-div",
                feature_img: '#club_logo',
                remove: '#remove_club_logo_btn'
            });
        });
    });


</script>

{{ Assets::jsEnd() }}