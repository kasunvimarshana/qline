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
                            <span class="text-decoration-none text-justify small"> Stup ( CNI )</span>
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
                                    <form action="{!! route('setupConfigurationCNI.store', []) !!}" method="POST" class="col col-sm-12" autocomplete="off" id="form1" enctype="multipart/form-data">
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
                                                            <input type="text" class="form-control form-control-md" id="time_create" name="time_create" placeholder="System Date" value="{{ old('time_create') }}" aria-label="Date" aria-describedby="id_input_addon" required="required" readonly="readonly"/>
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
                                                            <select class="form-control form-control-md select2" id="company_id" name="company_id" value="{{ old('company_id') }}" data-placeholder="Group" style="width: 100%;" required="required" readonly="readonly">
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
                                                            <select class="form-control form-control-md select2" id="strategic_business_unit_id" name="strategic_business_unit_id" value="{{ old('strategic_business_unit_id') }}" data-placeholder="SBU" style="width: 100%;" required="required" readonly="readonly">
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
                                                            <select class="form-control form-control-md select2" id="factory_id" name="factory_id" value="{{ old('factory_id') }}" data-placeholder="Factory" style="width: 100%;" required="required">
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
                                        <div class="row col">
                                            <!-- -->
                                            <!-- form-group -->
                                            <div class="form-group row col-sm-12">
                                                <div class="input-group h-100">
                                                    <!-- btn-toolbar -->
                                                    <div class="col text-center">
                                                        <!-- div class="btn-group btn-group-lg pull-right" -->
                                                        <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
                                                        <!-- /div -->
                                                    </div>
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
@endsection

@push('stack_script')
<script>
    $(function(){
        "use strict";
        @php
            $setup_configuration_company_id = null;
            if( (session()->has('setup_configuration_company_id')) && (session()->exists('setup_configuration_company_id')) ){
                $setup_configuration_company_id = session()->get('setup_configuration_company_id', null);
            }else if( (auth()->check()) && (auth()->user()->company) ){
                $setup_configuration_company_id = auth()->user()->company->id;
            }else{
                $setup_configuration_company_id = null;
            }
        @endphp
        $("#company_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_company_id !!}" }
        });
        $("#company_id").on("select2:opening", function (event) {
            event.preventDefault();
            event.stopPropagation();
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
            }else if( (auth()->check()) && (auth()->user()->strategicBusinessUnit) ){
                $setup_configuration_strategic_business_unit_id = auth()->user()->strategicBusinessUnit->id;
            }else{
                $setup_configuration_strategic_business_unit_id = null;
            }
        @endphp
        $("#strategic_business_unit_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_strategic_business_unit_id !!}" }
        });
        $("#strategic_business_unit_id").on("select2:opening", function (event) {
            event.preventDefault();
            event.stopPropagation();
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
            }else if( (old('factory_id')) ){
                $setup_configuration_factory_id = old('factory_id');
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
        
        var time_create = $('#time_create').datepicker({
            'autoclose': true,
            'format': "yyyy-mm-dd",
            'immediateUpdates': false,
            'todayBtn': true,
            'todayHighlight': true,
            // 'widgetParent': ???,
            'widgetPositioning': {
                horizontal: "auto",
                vertical: "auto"
            },
            'toggleActive': false,
            'orientation': 'auto',
            'container': 'body',
            'ignoreReadonly': true,
            'beforeShowDay': function() {
                return false;
            }
        }).datepicker("setDate", new Date())
        .trigger("changeDate");
        
        time_create.click(function(event) {
            //console.log('Preventing');
            event.preventDefault();
            event.stopPropagation();
        });
        
        @php
            $setup_configuration_time_create = null;
            if( (session()->has('setup_configuration_time_create')) && (session()->exists('setup_configuration_time_create')) ){
                $setup_configuration_time_create = session()->get('setup_configuration_time_create', null);
            }else{
                $setup_configuration_time_create = Carbon\Carbon::now()->format('Y-m-d HH:mm:ss');
            }
        @endphp
        time_create.datepicker("setDate", moment('{!! $setup_configuration_time_create !!}', 'YYYY-MM-DD HH:mm:ss').toDate())
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
