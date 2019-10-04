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
                            <span class="text-decoration-none text-justify small"> Stup ( Default )</span>
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
                                    <form action="{!! route('home') !!}" method="POST" class="col col-sm-12" autocomplete="off" id="form1" enctype="multipart/form-data">
                                        @csrf
                                        <!-- form-group-row -->
                                        <div class="row col border border-danger rounded shadow-sm pr-5 m-1">
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
                                                <div class="form-group row col-sm-6">
                                                    <label for="time_create" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">System Date</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group date">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar" id="id_input_addon"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control form-control-md" id="time_create" name="time_create" placeholder="System Date" value="{{ old('time_create') }}" aria-label="Date" aria-describedby="id_input_addon" required/>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="company_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Group</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="company_id" name="company_id" value="{{ old('company_id') }}" data-placeholder="Group" style="width: 100%;" required>
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="strategic_business_unit_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">SBU</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="strategic_business_unit_id" name="strategic_business_unit_id" value="{{ old('strategic_business_unit_id') }}" data-placeholder="SBU" style="width: 100%;" required>
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="factory_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Factory</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="factory_id" name="factory_id" value="{{ old('factory_id') }}" data-placeholder="Factory" style="width: 100%;" required>
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="line_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Line</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="line_id" name="line_id" value="{{ old('line_id') }}" data-placeholder="Line" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- -->
                                            </div>
                                            <!-- /.form-group-col -->
                                        </div>
                                        <!-- /.form-group-row -->

                                        <!-- form-group-row -->
                                        <div class="row col border border-danger rounded shadow-sm pr-5 m-1">
                                            <!-- -->
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
                                                <div class="form-group row col-sm-6">
                                                    <label for="customer_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Customer</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="customer_id" name="customer_id" value="{{ old('customer_id') }}" data-placeholder="Customer" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="style_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Style</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="style_id" name="style_id" value="{{ old('style_id') }}" data-placeholder="Style" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="colour_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Colour</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="colour_id" name="colour_id" value="{{ old('colour_id') }}" data-placeholder="Colour" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="export_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Export</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="export_id" name="export_id" value="{{ old('export_id') }}" data-placeholder="Export" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- -->
                                            </div>
                                            <!-- /.form-group-col -->
                                        </div>
                                        <!-- /.form-group-row -->
                                        
                                        <!-- form-group-row -->
                                        <div class="row col border border-danger rounded shadow-sm pr-5 m-1">
                                            <!-- -->
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
                                                <div class="form-group row col-sm-6">
                                                    <label for="standard_r_q_c_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">RQC</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="standard_r_q_c_id" name="standard_r_q_c_id" value="{{ old('standard_r_q_c_id') }}" data-placeholder="RQC" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="standard_sewing_check_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">SC 100%</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="standard_sewing_check_id" name="standard_sewing_check_id" value="{{ old('standard_sewing_check_id') }}" data-placeholder="SC 100%" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="standard_sewing_audit_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Sewing AQL Audit</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="standard_sewing_audit_id" name="standard_sewing_audit_id" value="{{ old('standard_sewing_audit_id') }}" data-placeholder="Sewing AQL Audit" style="width: 100%;">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- -->
                                            </div>
                                            <!-- /.form-group-col -->
                                        </div>
                                        <!-- /.form-group-row -->
                                        
                                        <!-- form-group-row -->
                                        <div class="row">
                                            <!-- -->
                                            <!-- form-group -->
                                            <div class="form-group row col-sm-12">
                                                <!-- btn-toolbar -->
                                                <div class="col text-right">
                                                    <!-- div class="btn-group btn-group-lg pull-right" -->
                                                        <button type="submit" class="btn btn-primary ml-auto" id="submit">Submit</button>
                                                    <!-- /div -->
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                            <!-- -->
                                        </div>
                                        <!-- /.form-group-row -->
                                    </form>
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
    @includeIf('partials.script.select_company', array());
    @includeIf('partials.script.select_strategic_business_unit', array());
    @includeIf('partials.script.select_factory', array());
    @includeIf('partials.script.select_line', array());
    @includeIf('partials.script.select_customer', array());
    @includeIf('partials.script.select_style', array());
    @includeIf('partials.script.select_colour', array());
    @includeIf('partials.script.select_export', array());
    @includeIf('partials.script.select_standard_r_q_c', array());
    @includeIf('partials.script.select_standard_sewing_check', array());
    @includeIf('partials.script.select_standard_sewing_audit', array());
@endsection

@push('stack_script')
<script>
    $(function(){
        "use strict";
        @php
            $setup_configuration_company_id = null;
            if( (session()->has('setup_configuration_company_id')) && (session()->exists('setup_configuration_company_id')) ){
                $setup_configuration_company_id = session()->get('setup_configuration_company_id', null);
            }else if( (session()->has('authorized_user_company_id')) && (session()->exists('authorized_user_company_id')) ){
                $setup_configuration_company_id = session()->get('authorized_user_company_id', null);
            }else{
                $setup_configuration_company_id = null;
            }
        @endphp
        $("#company_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_company_id !!}" }
        }); 
    });
</script>
@endpush
@push('stack_script')
<script>
    $(function(){
        "use strict";
        @php
            $setup_configuration_strategic_business_unit_id = null;
            if( (session()->has('setup_configuration_strategic_business_unit_id')) && (session()->exists('setup_configuration_strategic_business_unit_id')) ){
                $setup_configuration_strategic_business_unit_id = session()->get('setup_configuration_strategic_business_unit_id', null);
            }else if( (session()->has('authorized_user_strategic_business_unit_id')) && (session()->exists('authorized_user_strategic_business_unit_id')) ){
                $setup_configuration_strategic_business_unit_id = session()->get('authorized_user_strategic_business_unit_id', null);
            }else{
                $setup_configuration_strategic_business_unit_id = null;
            }
        @endphp
        $("#strategic_business_unit_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_strategic_business_unit_id !!}" }
        });
    });
</script>
@endpush
@push('stack_script')
<script>
    $(function(){
        "use strict";
        @php
            $setup_configuration_factory_id = null;
            if( (session()->has('setup_configuration_factory_id')) && (session()->exists('setup_configuration_factory_id')) ){
                $setup_configuration_factory_id = session()->get('setup_configuration_factory_id', null);
            }else if( (session()->has('authorized_user_factory_id')) && (session()->exists('authorized_user_factory_id')) ){
                $setup_configuration_factory_id = session()->get('authorized_user_factory_id', null);
            }else{
                $setup_configuration_factory_id = null;
            }
        @endphp
        $("#factory_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_factory_id !!}" }
        });
    });
</script>
@endpush
@push('stack_script')
<script>
    $(function(){
        "use strict";
        @php
            $setup_configuration_line_id = null;
            if( (session()->has('setup_configuration_line_id')) && (session()->exists('setup_configuration_line_id')) ){
                $setup_configuration_line_id = session()->get('setup_configuration_line_id', null);
            }else if( (session()->has('authorized_user_line_id')) && (session()->exists('authorized_user_line_id')) ){
                $setup_configuration_line_id = session()->get('authorized_user_line_id', null);
            }else{
                $setup_configuration_line_id = null;
            }
        @endphp
        $("#line_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_line_id !!}" }
        });
    });
</script>
@endpush
@push('stack_script')
<script>
    $(function(){
        "use strict";
        
        $('#time_create').datepicker({
            'autoclose': true,
            'format': "yyyy-mm-dd",
            'immediateUpdates': true,
            'todayBtn': true,
            'todayHighlight': true,
            // 'widgetParent': ???,
            'widgetPositioning': {
                horizontal: "auto",
                vertical: "auto"
            },
            'toggleActive': true,
            'orientation': 'auto',
            'container': 'body'
        }).datepicker("setDate", new Date())
        .trigger("changeDate");
        /*
        $('#id').datepicker().on('show', function(e){
            $(this).datepicker("setEndDate", new Date());
            $(this).datepicker("setStartDate", new Date());
        });
        */
    });
</script>
@endpush