@extends('backend/_layout/layout')
@section('breadcrumb')
<li>Home</li><li>Pages</li>
@stop

{{
Assets::setScripts([
    'jquery.dataTables'         => 'js/plugin/datatables/jquery.dataTables.min.js',
    'dataTables.colVis'         => 'js/plugin/datatables/dataTables.colVis.min.js',
    'dataTables.tableTools'     => 'js/plugin/datatables/dataTables.tableTools.min.js',
    'dataTables.bootstrap'      => 'js/plugin/datatables/dataTables.bootstrap.min.js',
    ], true);
}}

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-table fa-fw "></i>
            Pages
        </h1>
    </div>

</div>
{{ Notification::showAll() }}
<!-- widget grid -->
<section id="widget-grid" class="">

    <!-- row -->
    <div class="row">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
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
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>

                    <h2>Available Pages</h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Thumb</th>
                                <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> name </th>
                                <th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i>Shortcode</th>
                                <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Updated at</th>
                                <th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>
        <!-- WIDGET END -->

    </div>

    <!-- end row -->

    <!-- end row -->

</section>
<!-- end widget grid -->

@stop

@section ('script')
<script>
    $(document).ready(function() {
        $('#dt_basic').dataTable({
            serverSide: true,
            ajax: {
                url: "/{{ Config::get('bondcms.admin_prefix') }}/media/list_json",
                type: 'POST'
            }
        });


        /* END BASIC */

        /* COLUMN FILTER  */
        var otable = $('#datatable_fixed_column').DataTable({
            //"bFilter": false,
            //"bInfo": false,
            //"bLengthChange": false
            //"bAutoWidth": false,
            //"bPaginate": false,
            //"bStateSave": true // saves sort state using localStorage
            "sDom": "<'dt-toolbar'<'col-xs-6'f><'col-xs-6'<'toolbar'>>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>"

        });

        // custom toolbar
        $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

        // Apply the filter
        $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {

            otable
                .column( $(this).parent().index()+':visible' )
                .search( this.value )
                .draw();

        } );
        /* END COLUMN FILTER */

        /* COLUMN SHOW - HIDE */
        $('#datatable_col_reorder').dataTable({
            "sDom": "<'dt-toolbar'<'col-xs-6'f><'col-xs-6'C>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>"
        });

        /* END COLUMN SHOW - HIDE */

        /* TABLETOOLS */
        $('#datatable_tabletools').dataTable({

            // Tabletools options:
            //   https://datatables.net/extensions/tabletools/button_options
            "sDom": "<'dt-toolbar'<'col-xs-6'f><'col-xs-6'T>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>",
            "oTableTools": {
                "aButtons": [
                    "copy",
                    "csv",
                    "xls",
                    {
                        "sExtends": "pdf",
                        "sTitle": "SmartAdmin_PDF",
                        "sPdfMessage": "SmartAdmin PDF Export",
                        "sPdfSize": "letter"
                    },
                    {
                        "sExtends": "print",
                        "sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                    }
                ],
                "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
            }
        });

        /* END TABLETOOLS */

        var edit_page_url = "/admin/media/edit/";
        var delete_url = "/admin/media/delete/";

        $('#dt_basic_wrapper').on('click', '.edit-node', function (e) {
            e.preventDefault();
            var page_id = $(this).attr('href');
            window.location = edit_page_url+page_id;
        });

        $('#dt_basic_wrapper').on('click', '.delete-node', function (e) {
            e.preventDefault();
            var page_id = $(this).attr('href');
            window.location = delete_url+page_id;
        });

    })
</script>
@stop


