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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( Sewing Audit ) [Failed]</span>
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
                                                    <div class="col-sm-12 table-responsive-sm">
                                                        <!-- table -->
                                                        <!-- class="table table-striped table-bordered dt-responsive nowrap" -->
                                                        <table id="tableId_1" class="table table-bordered" style="width:100%" width="100%" cellspacing="0" border="1" align="left">

                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Barcode Ref</th>
                                                                    <th scope="col">Offered Qty For AQL</th>
                                                                    <th scope="col">Line</th>
                                                                    <th scope="col">Style</th>
                                                                    <th scope="col">Size</th>
                                                                    <th scope="col">Description</th>
                                                                    <th scope="col">Select to Audit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <!-- @foreach($quality_record_input_scan_data_array as $key => $value) -->                 
                                                               <!-- tr -->
                                                               <tr>
                                                                    <th scope="row"># {{ ($key + 1) }}</th>
                                                                    <td>{{ $value->code }}</td>
                                                                    <td>{{ number_format($value->count_data) }}</td>
                                                                    <td>
                                                                        @if($value->line)
                                                                        {{ $value->line->name }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if($value->style)
                                                                        {{ $value->style->name }}
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $value->size_id }}</td>
                                                                    <td>
                                                                        @if($value->qualityRecordInputScanDataStatusSewingAuditFailActiveVisible)
                                                                        {{  $value->qualityRecordInputScanDataStatusSewingAuditFailActiveVisible->description }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <!-- -->
                                                                        <!-- form-group -->
                                                                        <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                            <!-- label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Label</label -->
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="checkbox" class="form-control form-control-lg form-check-input" id="input_check_id_{{ $key }}" name="name_{{ $key }}" autocomplete="off" data-toggle="toggle" data-size="md" data-onstyle="primary" data-offstyle="light" data-on="<i class='fas fa-toggle-on'></i>" data-off="<i class='fas fa-toggle-off'></i>"/>
                                                                            </div>
                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <!-- -->
                                                                    </td>
                                                                </tr>
                                                                <!-- /.tr -->  
                                                                
                                                                @push('stack_script')
                                                                <script>
                                                                    $(function(){
                                                                        $("#input_check_id_{{ $key }}").on("change", function(event){
                                                                            var quality_record_input_scan_data_id = null;
                                                                            var code = null;
                                                                            var count_data = null;
                                                                            var quality_record_input_scan_data_status_id = null;
                                                                            @isset( ($value->code) ){
                                                                                quality_record_input_scan_data_id = "{!! $value->id !!}";
                                                                            }
                                                                            @endisset
                                                                            @isset( ($value->code) ){
                                                                                code = "{!! $value->code !!}";
                                                                            }
                                                                            @endisset
                                                                            @isset( ($value->code) ){
                                                                                count_data = {!! $value->count_data !!};
                                                                            }
                                                                            @endisset
                                                                            @if( ($value->qualityRecordInputScanDataStatusSewingAuditFailActiveVisible) )
                                                                                quality_record_input_scan_data_status_id = "{!!  $value->qualityRecordInputScanDataStatusSewingAuditFailActiveVisible->id !!}";
                                                                            @endif
                                                                            
                                                                            var data = new Object();
                                                                            data.code = code;
                                                                            data.quality_record_input_scan_data_id = quality_record_input_scan_data_id;
                                                                            data.count_data = count_data;
                                                                            data.quality_record_input_scan_data_status_id = quality_record_input_scan_data_status_id;
                                                                            
                                                                            if( ($(this).prop('checked')) ){
                                                                               createInputScanDataElement( data );
                                                                            }else{
                                                                                deleteInputScanDataElement( data );
                                                                            }
                                                                            //var input_value = 
                                                                        });
                                                                    });
                                                                </script>
                                                                @endpush
                                                                <!-- @endforeach -->
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
                            <span class="text-white"> | </span>
                            <span class="text-decoration-none text-justify small text-white"> Booked Qty : </span>
                            <span class="text-monospace text-justify">
                                <span class="text-white"> ( </span>
                                <span class="badge badge-secondary text-wrap text-break" id="count_data">0</span>
                                <span class="text-white"> ) pcs </span>
                            </span>
                            <span class="text-white"> | </span>
                            <span class="text-decoration-none text-justify small text-white"> AQL Audit Lot Size : </span>
                            <span class="text-monospace text-justify">
                                <span class="text-white"> ( </span>
                                <span class="badge badge-secondary text-wrap text-break" id="count_sample">0</span>
                                <span class="text-white"> ) pcs </span>
                            </span>
                            <span class="text-white"> | </span>
                            <span class="text-decoration-none text-justify small text-white"> Pass Rate : </span>
                            <span class="text-monospace text-justify">
                                <span class="text-white"> ( </span>
                                <span class="badge badge-secondary text-wrap text-break" id="count_accept">0</span>
                                <span class="text-white"> ) Defects </span>
                            </span>
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
                                    <form action="{!! route('qualityRecordSewingAudit.store_fail', []) !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                        @csrf
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group" name="form1_hidden_input_group" class="d-none">
                                            <!-- -->
                                            <input type="hidden" id="quantity_audit" name="quantity_audit" value="0" autocomplete="off" required="required" readonly="readonly"/>
                                            <!-- -->
                                            <!-- -->
                                            <input type="hidden" id="quantity_inspect" name="quantity_inspect" value="0" autocomplete="off" required="required" readonly="readonly"/>
                                            <!-- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg col col-12">
                                                    <label for="measure_point_id" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Operation /Area /POM</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger btn-lg" id="submit" data-select2-open-control="measure_point_id" aria-disabled="false">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                            <select class="form-control form-control-lg select2" id="measure_point_id" name="measure_point_id" value="{{ old('measure_point_id') }}" autocomplete="off" data-placeholder="Operation" data-minimum-results-for-search="1">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg col col-12">
                                                    <label for="defect_category_id" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Defect Category</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger btn-lg" id="submit" data-select2-open-control="defect_category_id" aria-disabled="false">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                            <select class="form-control form-control-lg select2 select2-multiple select2-allow-clear" id="defect_category_id" name="defect_category_id" value="{{ old('defect_category_id') }}" autocomplete="off" data-placeholder="Defect Category" aria-hidden="true" multiple="multiple" data-minimum-results-for-search="1">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                            <div class="input-group-addon input-group-append">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger btn-lg" id="submit" data-select2-close-control="defect_category_id" aria-disabled="false">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg col col-12">
                                                    <label for="defect_id" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Defect</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger btn-lg" id="submit" data-select2-open-control="defect_id" aria-disabled="false">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                            <select class="form-control form-control-lg select2 select2-multiple select2-allow-clear" id="defect_id" name="defect_id" value="{{ old('defect_id') }}" autocomplete="off" data-placeholder="Defect" aria-hidden="true" multiple="multiple" data-minimum-results-for-search="1">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                            <div class="input-group-addon input-group-append">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger btn-lg" id="form_submit_id_1" data-select2-close-control="defect_id" aria-disabled="false">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg col col-12">
                                                    <label for="defect_id" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Description</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="p-0 m-0">
                                                            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Description">{{ old('description') }}</textarea>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- ------------------------------------------------------------------------- -->

                                                <!-- form-group-row -->
                                                <div class="col col-12 w-100">
                                                    <!-- -->
                                                    <!-- form-group -->
                                                    <div class="form-group form-group-lg row">
                                                        <!-- btn-toolbar -->
                                                        <div class="col text-center">
                                                            <!-- ------------------------------------------------------ -->
                                                            <div class="btn-toolbar" role="toolbar" aria-label="tool bar">
                                                                <div class="btn-group btn-group-lg btn-group-justified w-100 m-1" role="group" aria-label="button group">
                                                                    <button type="submit" class="btn btn-success text-white btn-lg m-1 px-5 col" id="submit_pass" name="submit" value="submit_pass">PASS</button>
                                                                    <button type="submit" class="btn btn-danger text-white btn-lg m-1 px-5 col" id="submit_fail" name="submit" value="submit_fail">FAIL</button>
                                                                    <button type="submit" class="btn btn-warning text-white btn-lg m-1 px-5 col" id="submit_suspend" name="submit" value="submit_suspend">SUSPEND</button>
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
            
            <!-- ******************************************************************************************************************** -->
            <!-- card-group -->
            <div class="card-group">
                <!-- card -->
                <div class="card bg-secondary border-light">
                    <div class="card-header" id="idCard_accordion_1_content_3">
                        <h5 class="mb-0">
                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_3" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2" role="button" type="button">
                            <i class="fab fa-buromobelexperte fa-fw"></i>
                            <span class="text-decoration-none text-justify small"> List</span>
                            </button>
                        </h5>
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
            <!-- ******************************************************************************************************************** -->
        </div>
        <!-- /.accordion -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@section('section_script_document')
    @parent
    @includeIf('partials.script.select_measure_point', array())
    @includeIf('partials.script.select_multiple_defect_category', array())
    @includeIf('partials.script.select_multiple_defect', array())

    <script>
        function setQualityRecordInputScanDataValues( data ){
            var standardDataSewingAuditArray = [];
            @isset( $standard_data_sewing_audit_array )
                @foreach( $standard_data_sewing_audit_array as $key => $value )
                    @if( (isset($key)) && (isset($value)) )
                        standardDataSewingAuditArray[{!! $key !!}] = {!! $value !!};
                    @endif
                @endforeach
            @endisset
            
            //console.log("data");
            var id_quality_record_input_scan_data_status_prefix = "quality_record_input_scan_data_status_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            var count_data = $("#count_data");
            var count_sample = $("#count_sample");
            var count_accept = $("#count_accept");
            var quantity_audit = $("#quantity_audit");
            var quantity_inspect = $("#quantity_inspect");
            
            var count_data_sum = 0;
            var input_quality_record_input_scan_data_status = form1_hidden_input_group.find( ("." + id_quality_record_input_scan_data_status_prefix) );
            if( (input_quality_record_input_scan_data_status.length <= 0) ){
                count_data.text( count_data_sum );
                quantity_inspect.val( count_data_sum );
            }else{
                input_quality_record_input_scan_data_status.each(function( index, value ){
                    var count_data_temp = $(value).data("count_data");
                    count_data_temp = parseFloat(count_data_temp);
                    count_data_sum = (count_data_sum + count_data_temp);
                    count_data.text( count_data_sum );
                    quantity_inspect.val( count_data_sum );
                });
            }
            
            var standardDataSewingAuditObject = null;
            $.each(standardDataSewingAuditArray, function(index, value){
                if( (value.batch_count_min <= count_data_sum) ){
                    if( (standardDataSewingAuditObject == null) ){
                       standardDataSewingAuditObject = value;
                    }else if( ((value.batch_count_min > standardDataSewingAuditObject.batch_count_min)) ){
                        standardDataSewingAuditObject = value;
                    }
                }
            });
            
            count_sample.text( standardDataSewingAuditObject.count_sample );
            count_accept.text( standardDataSewingAuditObject.count_accept );
            quantity_audit.val( standardDataSewingAuditObject.count_sample );
            
            /*submit pass disable*/
            var submit_pass = $("#submit_pass");
            var id_defect_id_prefix = "defect_id_array";
            var count_defect_value = form1_hidden_input_group.find( ("." + id_defect_id_prefix) ).length;
            if( (count_defect_value > standardDataSewingAuditObject.count_accept) ){
                submit_pass.addClass("d-none");
            }else{
                submit_pass.removeClass("d-none");
            }
        }
        function createInputScanDataElement( data ){
            //console.log( data );
            var id_quality_record_input_scan_data_status_prefix = "quality_record_input_scan_data_status_id_array";
            
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            deleteInputScanDataElement( data );
            
            var input_temp = $("<input/>");
            input_temp.attr("id", (id_quality_record_input_scan_data_status_prefix + data.quality_record_input_scan_data_status_id));
            input_temp.attr("name", (id_quality_record_input_scan_data_status_prefix + "[]"));
            input_temp.attr("value", (data.quality_record_input_scan_data_status_id));
            input_temp.attr("required", ("required"));
            input_temp.attr("readonly", ("readonly"));
            input_temp.data("count_data", data.count_data);
            input_temp.addClass( id_quality_record_input_scan_data_status_prefix );
            form1_hidden_input_group.append(input_temp);
            setQualityRecordInputScanDataValues( data );
        }
    </script>
    <script>
        function deleteInputScanDataElement( data ){
            //console.log( data );
            var id_quality_record_input_scan_data_status_prefix = "quality_record_input_scan_data_status_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            form1_hidden_input_group.find( ("#" + id_quality_record_input_scan_data_status_prefix + data.quality_record_input_scan_data_status_id) ).remove();
            setQualityRecordInputScanDataValues( data );
        }
    </script>
@endsection

@push('stack_script')
<script>
    $(function(){
        $("button[data-select2-open-control]").each(function() {
            var element = $( this );
            var select2_id = element.attr("data-select2-open-control");
            element.on("click", function(){
                var element_id = "#" + select2_id;
                //console.log( $(element_id).data('select2').isOpen() );
                //$(element_id).select2('isOpen');
                //$(element_id).hasClass("select2-hidden-accessible");
                //$(element_id).data('select2').toggleDropdown();
                if( (!$(element_id).select2('isOpen')) ){
                    $(element_id).select2('open');
                }
            });
        });
    });
</script>
@endpush

@push('stack_script')
<script>
    $(function(){
        $("button[data-select2-close-control]").each(function() {
            var element = $( this );
            var select2_id = element.attr("data-select2-close-control");
            element.on("click", function(){
                var element_id = "#" + select2_id;
                //console.log( $(element_id).data('select2').isOpen() );
                //$(element_id).select2('isOpen');
                //$(element_id).hasClass("select2-hidden-accessible");
                //$(element_id).data('select2').toggleDropdown();
                if( ($(element_id).select2('isOpen')) ){
                    $(element_id).select2('close');
                }
            });
        });
    });
</script>
@endpush

@push('stack_script')
<script>
    $(function(){
        var form_submit_id_1 = $("#form_submit_id_1");
        form_submit_id_1.on("click", function(event){
            try{
                form_submit_id_1.attr("disabled", true);
            
                var measure_point_id = $("#measure_point_id");
                var defect_id = $("#defect_id");
                var defect_category_id = $("#defect_category_id");
                var count_defect = $("#count_defect");
                var measure_point_id_value = null;
                var defect_category_id_value = null;
                var defect_id_value = null;

                var id_temp = null;
                var id_defect_id_prefix = "defect_id_array";
                var id_measure_point_id_prefix = "measure_point_id_array";
                var id_tr_prefix = "tr";

                var form1_hidden_input_group = $("#form1_hidden_input_group");
                var tableId_1_tbody = $("#tableId_1_tbody");

                measure_point_id_value = measure_point_id.val();
                defect_id_value = defect_id.val();

                if( (typeof measure_point_id_value === "undefined") || 
                    (measure_point_id_value === void(0)) || 
                    (measure_point_id_value == "") || 
                    (measure_point_id_value == null) ){
                    //console.log(measure_point_id_value);
                    throw "error";
                    //return false;
                }else if( (typeof defect_id_value === "undefined") || 
                    (defect_id_value === void(0)) || 
                    (defect_id_value == "") || 
                    (defect_id_value == null) ){
                    //console.log(defect_id_value);
                    throw "error";
                    //return false;
                }else{
                    id_temp = (Date.now() + "_" + (Math.floor(Math.random() * 26) + Date.now()));
                    defect_id_value = $.makeArray( defect_id_value );

                    $.each(defect_id_value, function( index, value ) {
                        //console.log(index);
                        //console.log(value);
                        var input_temp = $("<input/>");
                        input_temp.attr("id", (id_defect_id_prefix + id_temp));
                        input_temp.attr("name", (id_defect_id_prefix + "[]"));
                        input_temp.attr("value", (value));
                        input_temp.attr("required", ("required"));
                        input_temp.attr("readonly", ("readonly"));
                        input_temp.addClass( id_defect_id_prefix );
                        form1_hidden_input_group.append(input_temp);
                        
                        var input_temp = $("<input/>");
                        input_temp.attr("id", (id_measure_point_id_prefix + id_temp));
                        input_temp.attr("name", (id_measure_point_id_prefix + "[]"));
                        input_temp.attr("value", (measure_point_id.val()));
                        input_temp.attr("required", ("required"));
                        input_temp.attr("readonly", ("readonly"));
                        input_temp.addClass( id_measure_point_id_prefix );
                        form1_hidden_input_group.append(input_temp);
                        //input_temp = null;
                        var tr_temp = $("<tr></tr>");
                        var td_temp = $("<td></td>");
                        
                        var measure_point_id_data_temp = measure_point_id.select2('data');
                        var defect_id_data_temp = defect_id.select2('data');
                        measure_point_id_data_temp = $.makeArray(measure_point_id_data_temp);
                        defect_id_data_temp = $.makeArray(defect_id_data_temp);
                        $.each(measure_point_id_data_temp, function( k, v ){
                            //console.log(key);
                            //console.log(value);
                            if( ((measure_point_id_value.localeCompare(v.id)) == 0) ){
                                td_temp = $("<td></td>");
                                td_temp.html(v.data.name);
                                tr_temp.append(td_temp);
                            }
                        });
                        $.each(defect_id_data_temp, function( k, v ){
                            //console.log(key);
                            //console.log(value);
                            if( ((value.localeCompare(v.id)) == 0) ){
                                td_temp = $("<td></td>");
                                td_temp.html(v.data.name);
                                tr_temp.append(td_temp);
                                
                                td_temp = $("<td></td>");
                                if( (v.data) ){
                                    var data = v.data;
                                    if( (data.defect_category) ){
                                        var defect_category = data.defect_category;
                                        td_temp.html(defect_category.name);
                                    }
                                }
                                tr_temp.append(td_temp);
                            }
                        });
                        
                        td_temp = $("<td></td>");
                        td_temp.addClass("text-center");
                        var btn_group_1 = $("<div></div>");
                        btn_group_1.addClass("btn-group");
                        btn_group_1.attr("role", "group");
                        btn_group_1.attr("aria-label", "button group");
                        btn_group_1.attr("tabindex", "-1");
                        
                        var btn_group_2 = $("<div></div>");
                        btn_group_2.addClass("btn-group");
                        btn_group_2.attr("role", "group");
                        
                        var button_1 = $("<button></button>");
                        button_1.addClass("btn btn-outline-primary");
                        button_1.attr("type", "button");
                        button_1.attr("role", "button");
                        button_1.attr("data-toggle", "dropdown");
                        button_1.attr("aria-haspopup", "true");
                        button_1.attr("aria-expanded", "false");
                        button_1.attr("id", ("btn" + id_temp));
                        
                        var i_1 = $("<i></i>");
                        i_1.addClass("fas fa-cogs fa-fw");
                        i_1.attr("aria-hidden", "true");
                        
                        var span_1 = $("<span></span>");
                        span_1.addClass("sr-only");
                        span_1.text("Toggle Dropdown");
                        
                        button_1.append(i_1);
                        button_1.append(span_1);
                        
                        var drop_down_menu_1 = $("<div></div>");
                        drop_down_menu_1.addClass("dropdown-menu text-wrap text-break bg-light border-light");
                        drop_down_menu_1.attr("aria-labelledby", ("btn" + id_temp));
                        
                        var drop_down_item_1 = $("<div></div>");
                        drop_down_item_1.addClass("dropdown-item btn-group  pl-1 pr-1 m-0");
                        drop_down_item_1.attr("role", "group");
                        drop_down_item_1.attr("aria-label", "Button Group");
                        
                        var button_2 = $("<button></button>");
                        button_2.addClass("btn btn-outline-primary btn-block waves-effect");
                        button_2.attr("type", "button");
                        button_2.attr("role", "button");
                        button_2.off("click").on("click", function(e){
                            e.preventDefault();
                            //e.stopPropagation();
                            var parent_tr = button_2.closest("tr");
                            var control_input_id = parent_tr.data("control_input_id");
                            form1_hidden_input_group.find( ("#" + id_defect_id_prefix + control_input_id) ).remove();
                            form1_hidden_input_group.find( ("#" + id_measure_point_id_prefix + control_input_id) ).remove();
                            parent_tr.remove();
                            
                            var count_defect_value = form1_hidden_input_group.find( ("." + id_defect_id_prefix) ).length;
                            count_defect.val(function(index, currentvalue){
                                return count_defect_value;
                            });
                            
                            var data = Object();
                            setQualityRecordInputScanDataValues( data );
                        });
                        
                        var i_2 = $("<i></i>");
                        i_2.addClass("far fa-trash-alt fa-fw");
                        i_2.attr("aria-hidden", "true");
                        
                        var span_2 = $("<span></span>");
                        span_2.addClass("sr-only");
                        span_2.text("Action");
                        
                        button_2.append(i_2);
                        button_2.append(span_2);
                        
                        drop_down_item_1.append(button_2);
                        drop_down_menu_1.append(drop_down_item_1);
                        btn_group_2.append(drop_down_menu_1);
                        btn_group_2.append(button_1);
                        btn_group_1.append(btn_group_2);
                        td_temp.append(btn_group_1);
                        tr_temp.append(td_temp);
                        
                        tr_temp.data("control_input_id", id_temp);
                        tableId_1_tbody.append(tr_temp);
                    });

                    /*form1_hidden_input_group.find( ("." + id_defect_id_prefix) ).each(function( index, value ){
                        //console.log(index);
                        //console.log(value);
                    });*/
                    
                    measure_point_id.val(null).trigger("change");
                    defect_category_id.val(null).trigger("change");
                    defect_id.val(null).trigger("change");
                }
                var count_defect_value = form_hidden_input_group_0.find( ("." + id_defect_id_prefix) ).length;
                count_defect.val(function(index, currentvalue){
                    return count_defect_value;
                });
            }catch(error){
                //console.log("error");
                //console.log(error);
            }finally{
                //console.log("finally");
                form_submit_id_1.attr("disabled", false);
                var data = Object();
                setQualityRecordInputScanDataValues( data );
                //delete variable;
            }
        });
    });
</script>
@endpush

@push('stack_script')
<script>
    $(function(){
        $("#id_left_control_div").collapse("hide");
        $("#id_right_control_div").collapse("hide");
    });
</script>
@endpush

@push('stack_script')
<script>
    $(document).ready(function(){
        $('#tableId_1').DataTable();
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