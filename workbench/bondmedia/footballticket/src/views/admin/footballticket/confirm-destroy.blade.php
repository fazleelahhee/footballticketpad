@extends('backend/_layout/layout')
@section('content')
<div class="container">
    <form action="{{route('admin.footballticket.destroy', array('id'=>$node->id))}}?action_type={{$type}}" method="post">
    {{ Form::hidden( 'action_type', $type ) }}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Be Careful!</b> Are you sure you want to delete <b>{{{ $node->title }}} </b> ?
        </div>
        <div class="pull-right">
            {{ Form::submit( 'Yes', array( 'class' => 'btn btn-danger' ) ) }}
            {{ link_to( URL::previous(), 'No', array( 'class' => 'btn btn-primary' ) ) }}
        </div>
        <div class="clearfix"></div>
    </div>
    {{ Form::close() }}
</div>
@stop