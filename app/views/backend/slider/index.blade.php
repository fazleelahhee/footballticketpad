@extends('backend/_layout/layout')
@section('content')

<div class="container">
    {{ Notification::showAll() }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Sliders</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ URL::route('admin.slider.create') }}?type={{$type}}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;New {{ ucfirst($type) }}
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
              @if($sliders->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>ShortCode</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $sliders as $slider )
                    <tr>
                        <td>{{ $slider->title }}</td>
                        <td>{{ "&#123;&#123;bm-{$type} id={$slider->id}&#125;&#125;" }}</td>
                        <td>{{ $slider->type }}</td>
                        <td>                         
                            <div class="btn-group">
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                    Action
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ URL::route('admin.slider.edit', array($slider->id)) }}?type={{$type}}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit Slider
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ URL::route('admin.slider.delete', array($slider->id)) }}?type={{$type}}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete Slider
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
            {{ $sliders->links() }}
        </ul>
    </div>
</div>
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
@stop