@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom_style_select2_1.css') !!}"/>
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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( Cutting )</span>
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
                                            <div id="id_tab_content_1" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_1"><br>
                                                <!-- tab-content-body -->
                                                
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        <!-- form -->
                                                        <form action="{!! route('qualityRecordCutting.store', []) !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- ------------------------------------------------------------------------------------- -->
                                                            <div id="form1_hidden_input_group" name="form1_hidden_input_group" class="d-none">
                                                                <!-- ... -->
                                                            </div>
                                                            <!-- ------------------------------------------------------------------------------------- -->
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
                                                                    
                                                                    <!-- container -->
                                                                    <div class="container-fluid p-0">
                                                                        <!-- tab-nav -->
                                                                        <div class="row collapse multi-collapse" id="id_nav_container_3">
                                                                        <!-- --- -->

                                                                        <div class="col">
                                                                        <!-- --- -->
                                                                        <ul class="nav nav-tabs nav-tabs-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">

                                                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                <a id="id_nav_link_3_1" class="nav-link m-1 btn btn-outline-danger border-danger active" data-toggle="tab" href="#id_tab_content_3_1" role="tab" aria-controls="id_tab_content_3_1" aria-selected="true">
                                                                                    <span><i class="fas fa-user"></i> Operation</span>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                <a id="id_nav_link_3_2" class="nav-link m-1 btn btn-outline-danger border-danger" data-toggle="tab" href="#id_tab_content_3_2" role="tab" aria-controls="id_tab_content_3_2" aria-selected="false">
                                                                                    <span><i class="fab fa-wpforms"></i> Defect Category</span>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                <a id="id_nav_link_3_3" class="nav-link m-1 btn btn-outline-danger border-danger" data-toggle="tab" href="#id_tab_content_3_3" role="tab" aria-controls="id_tab_content_3_3" aria-selected="false">
                                                                                    <span><i class="fab fa-wpforms"></i> Defect</span>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                        <!-- --- -->   
                                                                        </div>

                                                                        <!-- --- -->    
                                                                        </div>
                                                                        <!-- /.tab-nav -->

                                                                        <!-- tab-content -->
                                                                        <div class="row">
                                                                        <!-- --- -->
                                                                        <div class="tab-content w-100" id="id_nav_tab_content_3">

                                                                            <div id="id_tab_content_3_1" class="container tab-pane p-0 fade show active" role="tabpanel" aria-labelledby="id_nav_link_3_1">
                                                                                <br/>
                                                                                <!-- --- -->
                                                                                <!-- form-group-col -->
                                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                                    <!-- -->
                                                                                    <!-- fieldset -->
                                                                                    <div class="form-group form-group-lg col col-md-12 text-center">
                                                                                    <!-- disabled="disabled" -->
                                                                                    <fieldset class="w-100">
            <!-- ======================================================================== -->
            <!-- accordion -->
            <div id="accordion_1_content_tab_content_3_1">
                <!-- card-group -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card bg-secondary border-light">
                        <div class="card-header" id="idCard_accordion_1_content_1_tab_content_3_1">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1_tab_content_3_1" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1_tab_content_3_1" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Operation ( Add )</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_1_tab_content_3_1" class="collapse show" aria-labelledby="idCard_accordion_1_content_1_tab_content_3_1" data-parent="#idCollapse_accordion_1_content_1_tab_content_3_1">
                            <div class="card-body bg-light p-0" id="idCollapse_content_1_body_tab_content_3_1">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-sm-12">
                                        <!-- form -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_1_1" name="form1_hidden_input_group_3_1_1" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_1_1_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                        <div class="card-header" id="idCard_accordion_1_content_2_tab_content_3_1">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2_tab_content_3_1" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2_tab_content_3_1" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Selected (List)</span>
                                    </button>
                                </div>

                                <div class="col mb-0 text-right m-0 p-0">
                                    <button class="btn btn-default btn-success text-white" role="button" type="button">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_2_tab_content_3_1" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2_tab_content_3_1" data-parent="#idCollapse_accordion_1_content_2_tab_content_3_1">
                            <div class="card-body bg-light p-0" id="idCollapse_content_2_body">


                                <!-- --- -->
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-sm-12 table-responsive-sm">
                                        <!-- table -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_1_2" name="form1_hidden_input_group_3_1_2" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_1_2_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <!-- /.table -->
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
            <!-- ======================================================================== -->
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <!-- /.fieldset -->
                                                                                    <!-- -->
                                                                                </div>
                                                                                <!-- /.form-group-col -->
                                                                                <!-- --- -->
                                                                            </div>

                                                                            <div id="id_tab_content_3_2" class="container tab-pane p-0 fade" role="tabpanel" aria-labelledby="id_nav_link_3_2">
                                                                                <br/>
                                                                                <!-- --- -->
                                                                                <!-- form-group-col -->
                                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                                    <!-- -->
                                                                                    <!-- fieldset -->
                                                                                    <div class="form-group form-group-lg col col-md-12 text-center">
                                                                                    <!-- disabled="disabled" -->
                                                                                    <fieldset class="w-100">
            <!-- ======================================================================== -->
            <!-- accordion -->
            <div id="accordion_1_content_tab_content_3_2">
                <!-- card-group -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card bg-secondary border-light">
                        <div class="card-header" id="idCard_accordion_1_content_1_tab_content_3_2">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1_tab_content_3_2" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1_tab_content_3_2" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Defect Category ( Add )</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_1_tab_content_3_2" class="collapse show" aria-labelledby="idCard_accordion_1_content_1_tab_content_3_2" data-parent="#idCollapse_accordion_1_content_1_tab_content_3_2">
                            <div class="card-body bg-light p-0" id="idCollapse_content_1_body_tab_content_3_2">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-sm-12">
                                        <!-- form -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_2_1" name="form1_hidden_input_group_3_2_1" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_2_1_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                        <div class="card-header" id="idCard_accordion_1_content_2_tab_content_3_2">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2_tab_content_3_2" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2_tab_content_3_2" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Selected (List)</span>
                                    </button>
                                </div>

                                <div class="col mb-0 text-right m-0 p-0">
                                    <button class="btn btn-default btn-success text-white" role="button" type="button">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_2_tab_content_3_2" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2_tab_content_3_2" data-parent="#idCollapse_accordion_1_content_2_tab_content_3_2">
                            <div class="card-body bg-light p-0" id="idCollapse_content_2_body">


                                <!-- --- -->
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-sm-12 table-responsive-sm">
                                        <!-- table -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_2_2" name="form1_hidden_input_group_3_2_2" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_2_2_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <!-- /.table -->
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
            <!-- ======================================================================== -->
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <!-- /.fieldset -->
                                                                                    <!-- -->
                                                                                </div>
                                                                                <!-- /.form-group-col -->
                                                                                <!-- --- -->
                                                                            </div>
                                                                            
                                                                            <div id="id_tab_content_3_3" class="container tab-pane p-0 fade" role="tabpanel" aria-labelledby="id_nav_link_3_3">
                                                                                <br/>
                                                                                <!-- --- -->
                                                                                <!-- form-group-col -->
                                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                                    <!-- -->
                                                                                    <!-- fieldset -->
                                                                                    <div class="form-group form-group-lg col col-md-12 text-center">
                                                                                    <!-- disabled="disabled" -->
                                                                                    <fieldset class="w-100">
            <!-- ======================================================================== -->
            <!-- accordion -->
            <div id="accordion_1_content_tab_content_3_3">
                <!-- card-group -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card bg-secondary border-light">
                        <div class="card-header" id="idCard_accordion_1_content_1_tab_content_3_3">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1_tab_content_3_3" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1_tab_content_3_3" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Defect ( Add )</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_1_tab_content_3_3" class="collapse show" aria-labelledby="idCard_accordion_1_content_1_tab_content_3_3" data-parent="#idCollapse_accordion_1_content_1_tab_content_3_3">
                            <div class="card-body bg-light p-0" id="idCollapse_content_1_body_tab_content_3_3">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-sm-12">
                                        <!-- form -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_3_1" name="form1_hidden_input_group_3_3_1" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_3_1_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                        <div class="card-header" id="idCard_accordion_1_content_2_tab_content_3_3">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2_tab_content_3_3" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2_tab_content_3_3" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Selected (List)</span>
                                    </button>
                                </div>

                                <div class="col mb-0 text-right m-0 p-0">
                                    <button class="btn btn-default btn-success text-white" role="button" type="button">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_2_tab_content_3_3" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2_tab_content_3_3" data-parent="#idCollapse_accordion_1_content_2_tab_content_3_3">
                            <div class="card-body bg-light p-0" id="idCollapse_content_2_body">


                                <!-- --- -->
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-sm-12 table-responsive-sm">
                                        <!-- table -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_3_2" name="form1_hidden_input_group_3_3_2" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_3_2_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <!-- /.table -->
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
            <!-- ======================================================================== -->
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <!-- /.fieldset -->
                                                                                    <!-- -->
                                                                                </div>
                                                                                <!-- /.form-group-col -->
                                                                                <!-- --- -->
                                                                            </div>

                                                                        </div>
                                                                        <!-- --- -->
                                                                        </div>
                                                                        <!-- /.tab-content -->
                                                                    </div>
                                                                    <!-- /.container -->
                                                                    
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
            
            <!-- ======================================================================================= -->
            <!-- card-group -->
            <div class="card-group">
                <!-- card -->
                <div class="card bg-secondary border-light">
                    <div class="card-header" id="idCard_accordion_1_content_3">
                        <div class="row">
                            <div class="col mb-0 text-left m-0 p-0">
                                <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_3" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2" role="button" type="button">
                                <i class="fab fa-buromobelexperte fa-fw"></i>
                                <span class="text-decoration-none text-justify small"> List</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="idCollapse_accordion_1_content_3" class="collapse hide" aria-labelledby="idCard_accordion_1_content_3" data-parent="#idCollapse_accordion_1_content_3">
                        <div class="card-body bg-light" id="idCollapse_content_2_body">


                            <!-- --- -->
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-sm-12 table-responsive-sm">
                                    <!-- table -->
                                    <!-- class="table table-striped table-bordered dt-responsive nowrap" -->
                                    <table id="tableId_1" class="table table-bordered" style="width:100%" width="100%" cellspacing="0" border="1" align="left">

                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Operation</th>
                                                <th scope="col">Defect Category</th>
                                                <th scope="col">Defect</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableId_1_tbody">     
                                            <!-- tr -->
                                            <!-- /.tr -->                 
                                        </tbody>

                                    </table>
                                    <!-- /.table -->
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
            <!-- ======================================================================================= -->
        </div>
        <!-- /.accordion -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@section('section_script_document')
    @parent
    @includeIf('partials.script.dynamic_measure_point', array());
    @includeIf('partials.script.dynamic_defect_category', array());
    @includeIf('partials.script.dynamic_defect', array());
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
        
        $("#id_nav_container_3").removeClass("collapse");
        $("#id_nav_container_3").removeClass("multi-collapse");
        $("#id_nav_container_3").removeClass("show");
        $("#id_nav_container_3").addClass("show");
    });
</script>
@endpush

@push('stack_script')
<script>
    $(function(){
        "use strict";
        var defect_category_id = $("#defect_category_id");
        var defect_id = $("#defect_id");
        
        defect_category_id.on("change.select2", function (event) {
            //console.log(event.target.value);
            var defect_category_id_value = defect_category_id.val();
            defect_id.data("defect_category_id", defect_category_id_value);
        });
    });
</script>
@endpush

<!-- ======================================================================================== -->
@push('stack_script')
<script>
    $(function(){
        "use strict";
        /*console.log("______________________________________");
        $(document).setMyStorageData("key1", "value1");
        console.log($(document).getMyStorageData("key1"));
        $(document).removeMyStorageData("key1");
        console.log($(document).getMyStorageData("key1"));
        
        $(document).setMyStorageData("key2", ["asd", "fgh"]);
        var test = $(document).getMyStorageData("key2");
        console.log(test);
        console.log(test[0]);
        
        $(document).removeMyStorageData(1, "key2");
        var test_2 = $(document).getMyStorageData("key2");
        console.log(test_2);
        console.log(test_2[1]);
        console.log(test_2[0]);
        console.log(test_2);
        console.log("______________________________________");*/
    });
</script>
@endpush
<!-- ======================================================================================== -->