@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
@endsection

@section('section_script_optional')
    @parent
    <script>
        $(document).ready(function(){
            $('#tableId_1').DataTable();
        }); 
    </script>
@endsection

@section('contant')
<!-- row -->
<div class="row pb-4">
    <!-- col -->
    <div class="col col-sm-12 p-0 m-0">

        <!-- accordion -->
        <div id="accordion_1_content">
            <!-- card-group -->
            <div class="card-group">
                <!-- card -->
                <div class="card bg-secondary border-light">
                    <div class="card-header" id="idCard_accordion_1_content_1">
                        <h5 class="mb-0">
                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1" role="button" type="button">
                            <i class="fab fa-buromobelexperte fa-fw"></i>
                            <span class="text-decoration-none text-justify small"> Quality ( Stage )</span>
                            </button>
                        </h5>
                    </div>

                    <div id="idCollapse_accordion_1_content_1" class="collapse show" aria-labelledby="idCard_accordion_1_content_1" data-parent="#idCollapse_accordion_1_content_1">
                        <div class="card-body bg-light" id="idCollapse_content_1_body">

                            <!-- row -->
                            <div class="row">

                                <!-- col -->
                                <div class="col-sm-12">
                                    <!-- form -->
                                    <div class="container container-fluid">
                                    <!-- container -->
                                    <div class="container">
                                        <!-- tab-nav -->
                                        <div class="row collapse multi-collapse" id="id_nav_container_1">
                                        <!-- --- -->
                                        <ul class="nav nav-pills nav-pills-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_1" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_cutting') !!}" role="tab" aria-controls="id_tab_content_1" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Cutting</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_2" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_rqc') !!}" role="tab" aria-controls="id_tab_content_2" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> RQC</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_3" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_sewing_hundred_percent') !!}" role="tab" aria-controls="id_tab_content_3" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> SC 100%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_4" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_sewing_aql_audit') !!}" role="tab" aria-controls="id_tab_content_4" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Sewing AQL Audit</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_5" class="nav-link m-1 btn btn-outline-danger active" data-toggle="false" href="{!! url('quality_stage_finishing') !!}" role="tab" aria-controls="id_tab_content_5" aria-selected="true">
                                                    <span><i class="fas fa-anchor"></i> Finishing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_6" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_cni') !!}" role="tab" aria-controls="id_tab_content_6" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> CNI</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- --- -->
                                        </div>
                                        <!-- /.tab-nav -->
                                        
                                        <!-- tab-content -->
                                        <div class="row">
                                        <!-- --- -->
                                        <div class="tab-content w-100" id="id_nav_tab_content">
                                            <div id="id_tab_content_5" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_5"><br>
                                                <!-- ************************************************ -->
                                                <!-- row -->
                                                <div class="row">
                                                    <!-- col -->
                                                    <div class="col-sm-12 table-responsive-sm">
                                                        <!-- table -->
                                                        <!-- class="table table-striped table-bordered dt-responsive nowrap" -->
                                                        <table id="tableId_1" class="table table-bordered" style="width:100%" width="100%" cellspacing="0" border="1" align="left">

                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Barcode Ref</th>
                                                                    <th scope="col">Booked Qty For Finishing</th>
                                                                    <th scope="col">Line</th>
                                                                    <th scope="col">Style</th>
                                                                    <th scope="col">Size</th>
                                                                    <th scope="col">Select to Audit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <!-- @for($i =1; $i <= 5; $i++) -->                 
                                                               <!-- tr -->
                                                               <tr>
                                                                    <th scope="row"># {{ $i }}</th>
                                                                    <td>Bar Code {{ $i }}</td>
                                                                    <td>{{ $i }}</td>
                                                                    <td>Line {{ $i }}</td>
                                                                    <td>Style {{ $i }}</td>
                                                                    <td>{{ $i }}</td>
                                                                    <td>
                                                                        <!-- -->
                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12 m-1">
                                                                            <!-- label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Label</label -->
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="checkbox" class="form-control form-check-input" id="id_{{ $i }}" name="name_{{ $i }}" data-toggle="toggle" data-size="md" data-onstyle="primary" data-offstyle="light" data-on="<i class='fas fa-toggle-on'></i>" data-off="<i class='fas fa-toggle-off'></i>"/>
                                                                            </div>
                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <!-- -->
                                                                    </td>
                                                                </tr>
                                                                <!-- /.tr -->                 
                                                                <!-- @endfor -->
                                                            </tbody>

                                                        </table>
                                                        <!-- /.table -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                                <!-- ************************************************ -->
                                            </div>
                                        </div>
                                        <!-- --- -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.container -->
                                    </div>
                                    <!-- /.form -->
                                </div>
                                <!-- /.col -->

                            </div>
                            <!-- /.row -->

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-group -->
            
            <!-- card-group -->
            <div class="card-group">
                <!-- card -->
                <div class="card bg-secondary border-light">
                    <div class="card-header" id="idCard_accordion_1_content_2">
                        <h5 class="mb-0">
                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_2" role="button" type="button">
                            <i class="fab fa-buromobelexperte fa-fw"></i>
                            <!-- span class="text-decoration-none text-justify small"> - </span -->
                            </button>
                        </h5>
                    </div>

                    <div id="idCollapse_accordion_1_content_2" class="collapse show" aria-labelledby="idCard_accordion_1_content_2" data-parent="#idCollapse_accordion_1_content_2">
                        <div class="card-body bg-light" id="idCollapse_content_2_body">


                            <!-- --- -->
                            <!-- row -->
                            <div class="row w-100 justify-content-center">

                                <!-- col -->
                                <div class="col col-sm-8 align-self-center">
                                    <!-- form -->
                                    <form action="{!! route('home') !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                        @csrf
                                        <!-- form-group-row -->
                                        <div class="row">

                                            <!-- container -->
                                            <!-- div class="container mt-3 mb-3">
                                                <h2 class="text-danger"> - </h2>
                                                <p> - </p>
                                            </div -->
                                            <!-- /.container -->
                                            <!-- form-group-col -->
                                            <div class="col col-sm-12 row p-0 m-0">
                                                <!-- -->
                                                <!-- form-group-row -->
                                                <div class="col col-12 w-100">
                                                    <!-- -->
                                                    <!-- form-group -->
                                                    <div class="form-group row">
                                                        <!-- btn-toolbar -->
                                                        <div class="col text-center">
                                                            <!-- ------------------------------------------------------ -->
                                                            <div class="btn-toolbar" role="toolbar" aria-label="tool bar">
                                                                <div class="btn-group btn-group-lg btn-group-justified w-100 m-1" role="group" aria-label="button group">
                                                                    <button type="button" class="btn btn-success m-1" id="submit">Quantity Confirmed</button>
                                                                    <button type="button" class="btn btn-warning m-1" id="submit">Suspend</button>
                                                                </div>
                                                            </div>
                                                            <!-- ------------------------------------------------------ -->
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <!-- -->
                                                </div>
                                                <!-- /.form-group-row -->
                                                <!-- -->
                                            </div>
                                            <!-- /.form-group-col -->

                                        </div>
                                        <!-- /.form-group-row -->
                                    </form>
                                    <!-- /.form -->
                                </div>
                                <!-- /.col -->

                            </div>
                            <!-- /.row -->
                            <!-- --- -->

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-group -->
        </div>
        <!-- /.accordion -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection