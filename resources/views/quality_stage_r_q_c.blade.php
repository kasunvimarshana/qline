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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( RQC )</span>
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
                                        <!-- @includeIf('partials.navigation_quality_stage_', array()); -->
                                        <!-- --- -->    
                                        </div>
                                        <!-- /.tab-nav -->
                                        
                                        <!-- tab-content -->
                                        <div class="row">
                                        <!-- --- -->
                                        <div class="tab-content w-100" id="id_nav_tab_content">
                                            <div id="id_tab_content_2" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_2"><br>
                                                <!-- tab-content-body -->
                                                
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        <!-- form -->
                                                        <form action="{!! route('qualityRecordRQC.create', []) !!}" method="GET" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- form-group-row -->
                                                            <div class="row col border border-danger rounded shadow-sm m-1">
                                                                
                                                                <!-- container -->
                                                                <div class="container mt-3 mb-3">
                                                                    <!-- h2 class="text-danger"> - </h2 -->
                                                                    <!-- p> - </p -->
                                                                </div>
                                                                <!-- /.container -->
                                                                <!-- form-group-col -->
                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                    <!-- -->
                                                                    <!-- form-group -->
                                                                    <div class="form-group form-group-lg row col">
                                                                        <label for="code" class="col-lg-2 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">EMP No</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control form-control-lg" id="code" name="code" placeholder="EMP No" value="{{ old('code') }}" autocomplete="off" aria-label="EMP No" aria-describedby="id_input_addon" required="required"/>
                                                                                <div class="input-group-addon input-group-append">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="submit" class="btn btn btn-outline-danger btn-lg" id="submit">Search</button>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <!-- -->
                                                                </div>
                                                                <!-- /.form-group-col -->
                                                                <!-- container -->
                                                                <div class="container mt-3 mb-3">
                                                                    <!-- h2 class="text-danger"> - </h2 -->
                                                                    <!-- p> - </p -->
                                                                </div>
                                                                <!-- /.container -->
                                                                
                                                            </div>
                                                            <!-- /.form-group-row -->
                                                        </form>
                                                        <!-- /.form -->
                                                    </div>
                                                    <!-- /.col -->

                                                </div>
                                                <!-- /.row -->
                                                
                                                <!-- /.tab-content-body -->
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