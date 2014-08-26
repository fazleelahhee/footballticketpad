@extends('backend/_layout/layout')
@section('content')

        {{ Notification::showAll() }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Faq</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ URL::route('admin.faq.create') }}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;New Faq questions
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            @if($news->count())
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
                    @foreach( $news as $v )
                    <tr>
                        <td> {{ link_to_route( 'admin.faq.show', $v->title, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                        <td>{{{ $v->created_at }}}</td>
                        <td>{{{ $v->updated_at }}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                    Action
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
<!--                                    <li>-->
<!--                                        <a href="{{ URL::route('admin.faq.show', array($v->id)) }}">-->
<!--                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Show Faq-->
<!--                                        </a>-->
<!--                                    </li>-->
                                    <li>
                                        <a href="{{ URL::route('admin.faq.edit', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit Faq
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ URL::route('admin.faq.delete', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete Faq
                                        </a>
                                    </li>
                                     <li class="divider"></li>

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
            {{ $news->links() }}
        </ul>
    </div>

@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {

        $('#notification').show().delay(4000).fadeOut(700);

        // publish settings
        $(".publish").bind("click", function (e) {
            var id = $(this).attr('id');
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ url('/admin/news/" + id + "/toggle-publish/') }}",
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
</script>
@stop