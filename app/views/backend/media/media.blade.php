@extends('backend/_layout/layout')

{{  Assets::setScripts([
'dropzone' => "js/plugin/dropzone/dropzone.min.js"
], true) }}

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-pencil-square-o fa-fw "></i>
            Forms
			<span>> 
				Dropzone
			</span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <ul id="sparks" class="">
            <li class="sparks-info">
                <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                    1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                </div>
            </li>
            <li class="sparks-info">
                <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                    110,150,300,130,400,240,220,310,220,300, 270, 210
                </div>
            </li>
            <li class="sparks-info">
                <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                    110,150,300,130,400,240,220,310,220,300, 270, 210
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- widget grid -->
<section id="widget-grid" class="">

<div class="row">

    <!-- NEW WIDGET START -->
    <article class="col-sm-12">

        <p class="alert alert-warning">
            <i class="fa fa-warning fa-fw fa-lg"></i><strong>Opps!</strong>
            You may get an error during the upload for this demo. The error will subside once the backend portion is properly configured.
        </p>
        <p>
				<span class="label label-warning">
				NOTE</span> &nbsp; This plugins works only on Latest Chrome, Firefox, Safari, Opera &amp; Internet Explorer 10.
        </p>

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-0" data-widget-editbutton="false">
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
            <header>
                <span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
                <h2>My Dropzone! </h2>

            </header>

            <!-- widget div-->
            <div>

                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->

                </div>
                <!-- end widget edit box -->

                <!-- widget content -->
                <div class="widget-body">
                    <form action="/admin/media/upload" class="dropzone" id="media-upload"></form>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>
    <!-- WIDGET END -->

</div>


</section>
<!-- end widget grid -->
@stop



@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        Dropzone.autoDiscover = false;
        $("#media-upload").dropzone({
            //url: "/file/post",
            addRemoveLinks : true,
            maxFilesize: 50,
            dictResponseError: 'Error uploading file!',
            success: function (file, response) {
                //TODO: display file upload success or error message to client.
                console.log(response);
            }
        });
    })
</script>
@stop

