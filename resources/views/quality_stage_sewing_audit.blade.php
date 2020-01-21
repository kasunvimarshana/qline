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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( Sewing Audit )</span>
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
                                            <div id="id_tab_content_4" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_4"><br>
                                                <!-- ************************************************ -->
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        <!-- form -->
                                                        <!-- form action="{!! route('home') !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data" -->
                                                            <!-- @csrf -->
                                                            <!-- form-group-row -->
                                                            <div class="row col p-0 m-0">
                                                                
                                                                <div class="row w-100 justify-content-between p-0 m-0">
                                                                    <!-- col -->
                                                                    <div class="col col-md-3 p-0 m-0 collapse show" id="id_left_control_div">
                                                                        <!-- card-group -->
                                                                        <div class="card-group h-100">
                                                                            <div class="card bg-light">
                                                                                <div class="card-body text-center p-0 m-0">
                                                                                    
                                                                                    <!-- list-group -->
                                                                                    <ul class="list-group h-100">
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Team</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($line_object)
                                                                                                        {{ $line_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Buyer</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($customer_object)
                                                                                                        {{ $customer_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Style</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($style_object)
                                                                                                        {{ $style_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Colour</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($colour_object)
                                                                                                        {{ $colour_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Export</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($export_object)
                                                                                                        {{ $export_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>AQL Standard</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($standard_sewing_audit_object)
                                                                                                        {{ $standard_sewing_audit_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>AQL Standard</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($standard_sewing_audit_object)
                                                                                                        {{ $standard_sewing_audit_object->name }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100 p-1">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <!-- -->
                                                                                                <div class="btn-toolbar w-100" role="toolbar" aria-label="btn toolbar">
                                                                                                    <div class="btn-group w-100" role="group" aria-label="First group">
                                                                                                        <!-- --- -->
                                                                                                        <a class="btn btn-outline-danger btn-sm btn-block text-left" role="button" type="button" href="" target="_blank">
                                                                                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                                                                                            <span> Failed AQL</span>
                                                                                                        </a>
                                                                                                        <!-- --- -->
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- -->
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100 p-1">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <!-- -->
                                                                                                <div class="btn-toolbar w-100" role="toolbar" aria-label="btn toolbar">
                                                                                                    <div class="btn-group w-100" role="group" aria-label="First group">
                                                                                                        <!-- --- -->
                                                                                                        <a class="btn btn-outline-warning btn-sm btn-block text-left" role="button" type="button" href="" target="_blank">
                                                                                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                                                                                            <span> Suspended AQL</span>
                                                                                                        </a>
                                                                                                        <!-- --- -->
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- -->
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                    </ul>
                                                                                    <!-- /.list-group -->
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-group -->
                                                                    </div>
                                                                    <!-- /.col -->
                                                                    <!-- col -->
                                                                    <div class="col p-0 m-0">
                                                                        <div class="card-group h-100">
                                                                            <div class="card bg-light">
                                                                                <div class="card-header p-0 m-0">
                                                                                <!-- -->
                                                                                <div class="btn-toolbar" role="toolbar" aria-label="btn toolbar">
                                                                                    <div class="btn-group mr-auto" role="group" aria-label="First group">
                                                                                        <!-- --- -->
                                                                                        <button class="btn btn-default" data-toggle="collapse" data-target="#id_left_control_div" aria-expanded="false" aria-controls="id_left_control_div" role="button" type="button">
                                                                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                                                        </button>
                                                                                        <!-- --- -->
                                                                                    </div>
                                                                                    <div class="btn-group ml-auto" role="group" aria-label="Second group">
                                                                                        <!-- --- -->
                                                                                        <button class="btn btn-default" data-toggle="collapse" data-target="#id_right_control_div" aria-expanded="false" aria-controls="id_right_control_div" role="button" type="button">
                                                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                                        </button>
                                                                                        <!-- --- -->
                                                                                    </div>
                                                                                </div>
                                                                                <!-- -->
                                                                                </div>
                                                                                <div class="card-body text-center p-0 m-0">
                                                                                    
                                                                                    <!-- list-group -->
                                                                                    <ul class="list-group h-100">
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start p-0 m-0 bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-center">
                                                                                                <!-- + -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++ -->
        <!-- row -->
        <div class="row w-100">

            <!-- col -->
            <div class="col col-sm-12">
                <!-- form -->
                <form action="{!! route('qualityRecordSewingAudit.create', []) !!}" method="GET" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
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
                            <!-- ------------------------------------------------------------------------- -->
                            <div class="col col-12 w-100">
                                <div class="card-deck">
                                    <div class="card m-1 bg-warning">
                                        <!-- img src="..." class="card-img-top" alt="..."/ -->
                                        <div class="card-body">
                                            <h5 class="card-title dashboard-font-1">OFFERED</h5>
                                            <h5 class="card-title dashboard-font-1">LOT SIZE</h5>
                                            <p class="card-text display-3 dashboard-font-1">
                                                {{ number_format( $count_data_sum ) }}
                                            </p>
                                        </div>
                                        <!-- div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div -->
                                    </div>

                                    <div class="card m-1 bg-success">
                                        <!-- img src="..." class="card-img-top" alt="..."/ -->
                                        <div class="card-body">
                                            <h5 class="card-title dashboard-font-1">STANDARD</h5>
                                            <h5 class="card-title dashboard-font-1">AUDIT LOT SIZE</h5>
                                            <p class="card-text display-3 dashboard-font-1">
                                                @if( ($count_data_sum > 0) )
                                                    {{ number_format($standard_data_sewing_audit_object->count_sample) }}
                                                @else
                                                    {{ number_format(0) }}
                                                @endif
                                            </p>
                                        </div>
                                        <!-- div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div -->
                                    </div>
                                </div>
                            </div>
                            <!-- ------------------------------------------------------------------------- -->

                            <!-- form-group-row -->
                            <div class="col col-12 w-100 mt-5">
                                <!-- -->
                                <!-- form-group -->
                                <div class="form-group form-group-lg row col-sm-12">
                                    <!-- btn-toolbar -->
                                    <div class="col text-center">
                                        <!-- div class="btn-group btn-group-lg pull-right" -->
                                            <button type="submit" class="btn btn-secondary btn-lg ml-auto mr-auto px-5" id="submit">CONTINUE AUDIT</button>
                                        <!-- /div -->
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
        <!-- +++++++++++++++++++++++++++++++++++++++++++ -->
                                                                                                <!-- + -->
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->    
                                                
                                                                                    </ul>
                                                                                    <!-- /.list-group -->
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                    <!-- col -->
                                                                    <div class="col col-md-3 p-0 m-0 collapse show" id="id_right_control_div">
                                                                        <!-- card-group -->
                                                                        <div class="card-group h-100">
                                                                            <div class="card bg-light">
                                                                                <div class="card-body text-center p-0 m-0">
                                                                                    
                                                                                    <!-- list-group -->
                                                                                    <ul class="list-group h-100">
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Now</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>TTL</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Ins Qty</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($quality_record_input_scan_data_count_data_sum)
                                                                                                        {{ number_format($quality_record_input_scan_data_count_data_sum) }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Defects</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($quality_record_sewing_audit_id_count)
                                                                                                        {{ number_format($quality_record_sewing_audit_id_count) }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Pass Qty</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($quality_record_input_scan_data_count_data_sum_pass)
                                                                                                        {{ number_format($quality_record_input_scan_data_count_data_sum_pass) }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Fail Qty</b>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">
                                                                                                        @isset($quality_record_input_scan_data_count_data_sum_fail)
                                                                                                        {{ number_format($quality_record_input_scan_data_count_data_sum_fail) }}
                                                                                                        @endisset
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>Defect</b>
                                                                                                        <span>%</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    @php
                                                                                                        $defect_percentage = 0.0;
                                                                                                        if( (isset($quality_record_input_scan_data_count_data_sum)) && ($quality_record_sewing_audit_id_count) && ($quality_record_input_scan_data_count_data_sum > 0) ){
                                                                                                            $defect_percentage = ( ($quality_record_sewing_audit_id_count / $quality_record_input_scan_data_count_data_sum) * 100 );
                                                                                                        }
                                                                                                    @endphp
                                                                                                    <span class="badge badge-secondary text-wrap text-break">{{  number_format($defect_percentage, 2) }}
                                                                                                        <span>%</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-light h-100">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break font-weight-bold text-danger">
                                                                                                        <b>FPY</b>
                                                                                                        <span>%</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    @php
                                                                                                        $f_p_y_percentage = 0.0;
                                                                                                        if( (isset($quality_record_input_scan_data_count_data_sum)) && ($quality_record_input_scan_data_count_data_sum_pass) && ($quality_record_input_scan_data_count_data_sum > 0) ){
                                                                                                            $f_p_y_percentage = ( ($quality_record_input_scan_data_count_data_sum_pass / $quality_record_input_scan_data_count_data_sum) * 100 );
                                                                                                        }
                                                                                                    @endphp
                                                                                                    <span class="badge badge-secondary text-wrap text-break">{{  number_format($f_p_y_percentage, 2) }}
                                                                                                        <span>%</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                    </ul>
                                                                                    <!-- /.list-group -->
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-group -->
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- /.form-group-row -->
                                                        <!-- /form -->
                                                        <!-- /.form -->
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