@extends('backend/_layout/layout')


@section('content')
<div class="row">

    <!-- col -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-pencil-square-o"></i> General Settings</h1>
    </div>
    <!-- end col -->

</div>
<!-- end row -->

<!--
The ID "widget-grid" will start to initialize all widgets below
You do not need to use widgets if you dont want to. Simply remove
the <section></section> and you can use wells or panels instead
-->

<!-- widget grid -->
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="alert alert-danger hidden-lg hidden-md hidden-sm">
                <b>Please note:</b>
                This plugin is non-responsive
            </div>

            <!-- Widget ID (each widget will need unique ID)-->

            <div class="jarviswidget jarviswidget-sortable" id="wid-id-0" data-widget-togglebutton="false"
                 data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false"
                 data-widget-deletebutton="false" role="widget" style="">
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

                    <h2 class="hidden-xs hidden-sm">General Settings</h2>
                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                </header>

                <!-- widget div-->
                <div role="content">
                    <!-- widget edit box -->

                    <div class="widget-body">
                        Working on progress
                    </div>

                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->

        </article>
        <!-- WIDGET END -->

    </div>

    <!-- end row -->

</section>
<!-- end widget grid -->

@stop