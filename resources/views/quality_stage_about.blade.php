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
                                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row" id="id_nav" role="tablist">
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_1" class="nav-link" data-toggle="false" href="{!! url('quality_stage_cutting') !!}" role="tab" aria-controls="id_tab_content_1" aria-selected="false">Cutting</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_2" class="nav-link" data-toggle="false" href="{!! url('quality_stage_rqc') !!}" role="tab" aria-controls="id_tab_content_2" aria-selected="false">RQC</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_3" class="nav-link active" data-toggle="false" href="{!! url('quality_stage_about') !!}" role="tab" aria-controls="id_tab_content_3" aria-selected="true">About</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_4" class="nav-link" data-toggle="false" href="{!! url('quality_stage_contact') !!}" role="tab" aria-controls="id_tab_content_4" aria-selected="false">Contact</a>
                                            </li>
                                        </ul>
                                        <!-- /.tab-nav -->
                                        
                                        <!-- tab-content -->
                                        <div class="tab-content" id="id_nav_tab_content">
                                            <div id="id_tab_content_1" class="container tab-pane fade" role="tabpanel" aria-labelledby="id_nav_link_1"><br>
                                                <h3>Cutting</h3>
                                                <p>Cutting</p>
                                            </div>
                                            <div id="id_tab_content_2" class="container tab-pane fade" role="tabpanel" aria-labelledby="id_nav_link_2"><br>
                                                <h3>RQC</h3>
                                                <p>RQC</p>
                                            </div>
                                            <div id="id_tab_content_3" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_3"><br>
                                                <h3>About</h3>
                                                <p>About</p>
                                            </div>
                                            <div id="id_tab_content_4" class="container tab-pane fade" role="tabpanel" aria-labelledby="id_nav_link_4"><br>
                                                <h3>Contact</h3>
                                                <p>Contact</p>
                                            </div>
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