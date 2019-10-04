<!-- Left side column. contains the logo and sidebar -->
<div class="col-md-2 pl-0 bg-danger collapse multi-collapse" id="id_accordion_nav_container" name="id_accordion_nav_container">

    <!-- accordion -->
    <div id="id_accordion_nav" class="text-wrap text-break" data-parent="#id_accordion_nav_container">
        <!-- card-group -->
        <div class="card-group">
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard1">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse1" aria-expanded="false" aria-controls="idCollapse1" role="button" type="button">
                        <i class="fa fa-bold fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> TQMS</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse1-temp" class="collapse hide" aria-labelledby="idCard1" data-parent="#id_accordion_nav">
                    <div class="card-body" id="idCollapse1_body">
                        <table class="table">
                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">
                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                    <span>
                                        <a class="text-decoration-none text-justify text-white small" href="#">Link 1</a>
                                    </span>
                                </td>
                            </tr>
                            <!-- /.table-tr -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card-group -->

        <!-- card-group -->
        <div class="card-group">
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard2">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2" aria-expanded="false" aria-controls="idCollapse2" role="button" type="button">
                        <i class="fa fa-atom fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> Backstage</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse2" class="collapse hide" aria-labelledby="idCard2" data-parent="#id_accordion_nav">
                    <div class="card-body" id="idCollapse2_body">
                        <table class="table">
                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">

                                    <!-- nested accordion -->
                                    <div id="id_accordion_nav_2_1">
                                        <!-- card-group -->
                                        <div class="card-group">
                                            <!-- card -->
                                            <div class="card bg-danger">
                                                <div class="card-header" id="idCard2_1">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_1" aria-expanded="false" aria-controls="idCollapse2_1" role="button" type="button">
                                                        <i class="fa fa-band-aid fa-fw"></i>
                                                        <span class="text-decoration-none text-justify small"> Company</span>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="idCollapse2_1" class="collapse hide" aria-labelledby="idCard2_1" data-parent="#idCollapse2_body">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td class="p-0 m-0">
                                                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                    <span>
                                                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('company') !!}"> Add</a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.card-group -->
                                    </div>
                                    <!-- /.nested accordion -->

                                </td>
                            </tr>
                            <!-- /.table-tr -->

                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">

                                    <!-- nested accordion -->
                                    <div id="accordionn_nav_2_2">
                                        <!-- card-group -->
                                        <div class="card-group">
                                            <!-- card -->
                                            <div class="card bg-danger">
                                                <div class="card-header" id="idCard2_2">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_2" aria-expanded="false" aria-controls="idCollapse2_2" role="button" type="button">
                                                        <i class="fa fa-briefcase fa-fw"></i>
                                                        <span class="text-decoration-none text-justify small"> Department</span>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="idCollapse2_2" class="collapse hide" aria-labelledby="idCard2_2" data-parent="#idCollapse2_body">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td class="p-0 m-0">
                                                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                    <span>
                                                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('department') !!}"> Add</a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.card-group -->
                                    </div>
                                    <!-- /.nested accordion -->

                                </td>
                            </tr>
                            <!-- /.table-tr -->

                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">

                                    <!-- nested accordion -->
                                    <div id="accordionn_nav_2_3">
                                        <!-- card-group -->
                                        <div class="card-group">
                                            <!-- card -->
                                            <div class="card bg-danger">
                                                <div class="card-header" id="idCard2_3">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_3" aria-expanded="false" aria-controls="idCollapse2_3" role="button" type="button">
                                                        <i class="fa fa-boxes fa-fw"></i>
                                                        <span class="text-decoration-none text-justify small"> Factory</span>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="idCollapse2_3" class="collapse hide" aria-labelledby="idCard2_3" data-parent="#idCollapse2_body">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td class="p-0 m-0">
                                                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                    <span>
                                                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('factory') !!}"> Add</a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.card-group -->
                                    </div>
                                    <!-- /.nested accordion -->

                                </td>
                            </tr>
                            <!-- /.table-tr -->

                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">

                                    <!-- nested accordion -->
                                    <div id="accordionn_nav_2_4">
                                        <!-- card-group -->
                                        <div class="card-group">
                                            <!-- card -->
                                            <div class="card bg-danger">
                                                <div class="card-header" id="idCard2_4">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_4" aria-expanded="false" aria-controls="idCollapse2_4" role="button" type="button">
                                                        <i class="fa fa-box-open fa-fw"></i>
                                                        <span class="text-decoration-none text-justify small"> Line</span>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="idCollapse2_4" class="collapse hide" aria-labelledby="idCard2_4" data-parent="#idCollapse2_body">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td class="p-0 m-0">
                                                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                    <span>
                                                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('line') !!}"> Add</a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.card-group -->
                                    </div>
                                    <!-- /.nested accordion -->

                                </td>
                            </tr>
                            <!-- /.table-tr -->

                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">

                                    <!-- nested accordion -->
                                    <div id="accordionn_nav_2_5">
                                        <!-- card-group -->
                                        <div class="card-group">
                                            <!-- card -->
                                            <div class="card bg-danger">
                                                <div class="card-header" id="idCard2_5">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_5" aria-expanded="false" aria-controls="idCollapse2_5" role="button" type="button">
                                                        <i class="fa fa-user-alt fa-fw"></i>
                                                        <span class="text-decoration-none text-justify small"> User</span>
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="idCollapse2_5" class="collapse hide" aria-labelledby="idCard2_5" data-parent="#idCollapse2_body">
                                                    <div class="card-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td class="p-0 m-0">
                                                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                    <span>
                                                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('user') !!}"> Add</a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.card-group -->
                                    </div>
                                    <!-- /.nested accordion -->

                                </td>
                            </tr>
                            <!-- /.table-tr -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card-group -->
        
        <!-- card-group -->
        <div class="card-group">
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard3">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse3" aria-expanded="false" aria-controls="idCollapse3" role="button" type="button">
                        <i class="fa fa-bold fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> Factory</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse3" class="collapse hide" aria-labelledby="idCard3" data-parent="#id_accordion_nav">
                    <div class="card-body" id="idCollapse3_body">
                        <table class="table">
                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">
                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                    <span>
                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('factory_setup') !!}">Setup</a>
                                    </span>
                                </td>
                            </tr>
                            <!-- /.table-tr -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card-group -->
        
        <!-- card-group -->
        <div class="card-group">
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard4">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse4" aria-expanded="false" aria-controls="idCollapse4" role="button" type="button">
                        <i class="fa fa-bold fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> Line</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse4" class="collapse hide" aria-labelledby="idCard4" data-parent="#id_accordion_nav">
                    <div class="card-body" id="idCollapse4_body">
                        <table class="table">
                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">
                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                    <span>
                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('line_setup') !!}">Setup</a>
                                    </span>
                                </td>
                            </tr>
                            <!-- /.table-tr -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card-group -->
        
        <!-- card-group -->
        <div class="card-group">
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard5">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse5" aria-expanded="false" aria-controls="idCollapse5" role="button" type="button">
                        <i class="fa fa-bold fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> Quality Stage</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse5" class="collapse hide" aria-labelledby="idCard5" data-parent="#id_accordion_nav">
                    <div class="card-body" id="idCollapse5_body">
                        <table class="table">
                            <!-- table-tr -->
                            <tr>
                                <td class="p-0 m-0">
                                    <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                    <span>
                                        <a class="text-decoration-none text-justify text-white small" href="{!! url('quality_stage') !!}">Link</a>
                                    </span>
                                </td>
                            </tr>
                            <!-- /.table-tr -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card-group -->
    </div>
    <!-- /.accordion -->

</div>
<!-- /.Left side column. contains the logo and sidebar -->