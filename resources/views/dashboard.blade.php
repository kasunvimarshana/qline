@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
@endsection

@section('section_script_optional')
    @parent
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
                                        
                                        <!-- -------------------- -->
                                        <!-- div class="col-xl-3 col-lg-6">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Subject</h5>
                                                            <span class="h2 font-weight-bold mb-0">000,000</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                                <i class="fas fa-chart-bar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 0.00%</span>
                                                        <span class="text-nowrap">description</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div -->
                                        <!-- -------------------- -->
                                            
                                        <!-- -------------------- -->
                                        <div class="col-xl-3 col-lg-6 col-md-4">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col text-center">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Power BI</h5>
                                                            <span class="h2 font-weight-bold mb-0">
                                                                <i class="fas fa-chart-bar"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                                <i class="fas fa-chart-bar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-success mr-2">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </span>
                                                        <span class="text-nowrap">
                                                            <a class="text-decoration-none badge badge-danger text-wrap font-weight-bolder" href="#">Go</a>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------------- -->
                                            
                                        <!-- -------------------- -->
                                        <div class="col-xl-3 col-lg-6 col-md-4">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col text-center">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Upload File</h5>
                                                            <span class="h2 font-weight-bold mb-0">
                                                                <i class="fa fa-file-excel"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                                <i class="fa fa-file-excel"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-success mr-2">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </span>
                                                        <span class="text-nowrap">
                                                            <a class="text-decoration-none badge badge-danger text-wrap font-weight-bolder" href="{!! route('workbook.createWorkbook', []) !!}" target"_blank">Go</a>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -------------------- -->
                                            
                                        <!-- --- -->    
                                        </div>
                                        <!-- /.tab-nav -->
                                        
                                        <!-- tab-content -->
                                        <div class="row">
                                        <!-- --- -->
                                        <div class="tab-content w-100" id="id_nav_tab_content">
                                            <!-- div id="id_tab_content_1" class="container tab-pane fade" role="tabpanel" aria-labelledby="id_nav_link_1"><br>
                                                <h3>Tab</h3>
                                                <p>Tab 1</p>
                                            </div -->
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
        </div>
        <!-- /.accordion -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@section('section_script_document')
    @parent
@endsection

@push('stack_script')
<script>
    $(function(){
        "use strict";
        var control_button_home = $("#control_button_home");
        control_button_home.attr("aria-controls", function(index, currentvalue){
            return (currentvalue + "");
        });
        $("#id_nav_container_1").removeClass("collapse");
        $("#id_nav_container_1").removeClass("multi-collapse");
        $("#id_nav_container_1").removeClass("show");
        $("#id_nav_container_1").addClass("show");
    });
</script>
@endpush
