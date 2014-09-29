@extends('backend/_layout/layout')
@section('content')

        {{ Notification::showAll() }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">News</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{URL::to('admin/footballticket/create?action_type='.$type)}}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;New {{$menu}}
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            @if($node->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Action</th>
                        <th>Settings</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $node as $v )
                    <tr>
                        <td>{{$v->title}} </td>
                        <td>{{{ $v->created_at }}}</td>
                        <td>{{{ $v->updated_at }}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                    Action
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ URL::route('admin.footballticket.index', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Show {{$menu}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::route('admin.footballticket.edit', array('id'=>$v->id)) }}?action_type={{$type}}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit {{$menu}}
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ URL::route('admin.footballticket.delete', array($v->id)) }}?action_type={{$type}}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete {{$menu}}
                                        </a>
                                    </li>
                                     <li class="divider"></li>
                                    <li>
                                        <a target="_blank" href="{{ URL::route('dashboard.footballticket.show', ['id' => $v->id, 'slug' => $v->slug]) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;View On Site
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                        <a href="#" id="{{ $v->id }}" class="publish">
                            <img id="publish-image-{{ $v->id }}" src="{{url('/')}}/assets/images/{{ ($v->is_published) ? 'publish.png' : 'not_publish.png'  }}"/>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="alert alert-danger">No results found</div>
            @endif
        </div>
    </div>

    <div class="pull-left">
        <ul class="pagination">
            {{ $node->links() }}
        </ul>
    </div>

@stop
{{ Assets::jsStart() }}
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            $('#notification').show().delay(4000).fadeOut(700);
            // publish settings
            $(".publish").bind("click", function (e) {
                var id = $(this).attr('id');
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ url('/admin/footballticket/" + id + "/toggle-publish/') }}",
                    success: function (response) {
                        if (response['result'] == 'success') {
                            var imagePath = (response['changed'] == 1) ? "{{url('/')}}/assets/images/publish.png" : "{{url('/')}}/assets/images/not_publish.png";
                            $("#publish-image-" + id).attr('src', imagePath);
                        }
                    },
                    error: function () {
                        alert("error");
                    }
                })
            });
        });
    })(jQuery)
</script>
{{ Assets::jsEnd() }}