@extends('backend/_layout/layout')


@section('content')
<div class="row">

    <!-- col -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-pencil-square-o"></i> Footballpad Ticket Settings</h1>
    </div>
    <!-- end col -->

</div>
<!-- end row -->

<div class="row">
    {{ Notification::showAll() }}
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#settings" data-toggle="tab">General</a></li>
        <li><a href="#commission" data-toggle="tab">Seller & Commission</a></li>
        <li><a href="#delivery010203" data-toggle="tab">Delivery</a></li>
        <li><a href="#email" data-toggle="tab">Email</a></li>
    </ul>

    <form action="{{ route('admin.settings.save.options') }}" method="post" />
    {{ Form::token() }}
    <div class="tab-content">
        <div class="tab-pane active" id="settings">
            <br>
            <h4><i class="glyphicon glyphicon-cog"></i>General</h4>
            <br>

            @include('backend.setting.partials.general')
        </div>
        <div class="tab-pane" id="commission">
            <br>
            <h4><i class="glyphicon glyphicon-info-sign"></i>Seller & Commission</h4>
            <br>
            @include('backend.setting.partials.commission')
        </div>
        <div class="tab-pane" id="email">
            <br>
            <h4><i class="glyphicon glyphicon-info-sign"></i> Email </h4>
            <br>
            @include('backend.setting.partials.email')
        </div>

        <div class="tab-pane" id="delivery010203">
            <br>
            <h4><i class="glyphicon glyphicon-info-sign"></i> Delivery </h4>
            <br>
            @include('backend.setting.partials.delivery')
        </div>
    </div>

    {{ Form::submit('Save Changes', array('class' => 'btn btn-success')) }}
    </form>
</div>

@stop

