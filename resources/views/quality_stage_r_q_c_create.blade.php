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
                                                        <form action="{!! route('home') !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                            @csrf
                                                            <div id="form1_hidden_input_group" name="form1_hidden_input_group" class="d-none">
                                                                @isset($user_object)
                                                                <input type="hidden" id="user_id_record" name="user_id_record" value="{!! $user_object->id !!}" required="required" readonly="readonly"/>
                                                                @endisset
                                                            </div>
                                                            
                                                            <!-- form-group-row -->
                                                            <div class="row col border border-danger rounded shadow-sm m-1">
                                                                
                                                                <!-- container -->
                                                                <div class="container mt-3 mb-3">
                                                                    <!-- h2 class="text-danger"> - </h2 -->
                                                                    <!-- p> - </p -->
                                                                </div>
                                                                <!-- /.container -->
                                                                <!-- form-group-col -->
                                                                <div class="col col-sm-7 p-0 m-0">
                                                                    <!-- -->
                                                                    <div class="row">
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12">
                                                                        <label for="code" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">EMP No</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control form-control-md" id="code" name="code" placeholder="EMP No" value="{!! $user_object->code !!}" aria-label="EMP No" aria-describedby="id_input_addon" required="required" readonly="readonly"/>
                                                                                <div class="input-group-addon input-group-append">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="submit" class="btn btn btn-outline-danger" id="submit" aria-disabled="true" disabled="disabled">
                                                                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12">
                                                                        <label for="attempt" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Attempt</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control form-control-md" id="attempt" name="attempt" placeholder="Attempt" value="{!! $attempt !!}" aria-label="Attempt" aria-describedby="id_input_addon" required="required"/>
                                                                                <div class="input-group-addon input-group-append">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="submit" class="btn btn btn-outline-danger" id="submit" aria-disabled="true" disabled="disabled">
                                                                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12">
                                                                        <label for="measure_point_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Operation</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon input-group-prepend">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="button" class="btn btn-outline-danger" id="submit" data-select2-open-control="measure_point_id" aria-disabled="false">
                                                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                                <select class="form-control select2" id="measure_point_id" name="measure_point_id" value="{{ old('measure_point_id') }}" data-placeholder="Operation" required="required">
                                                                                    <!-- option> Option </option -->
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12">
                                                                        <label for="defect_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Defect</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon input-group-prepend">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="button" class="btn btn-outline-danger" id="submit" data-select2-open-control="defect_id" aria-disabled="false">
                                                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                                <select class="form-control select2 select2-multiple select2-allow-clear" id="defect_id" name="defect_id" value="{{ old('defect_id') }}" data-placeholder="Defect" aria-hidden="true" multiple="multiple" required="required">
                                                                                    <!-- option> Option </option -->
                                                                                </select>
                                                                                <div class="input-group-addon input-group-append">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="button" class="btn btn-outline-danger" id="submit_temp" data-select2-close-control="defect_id" aria-disabled="false">
                                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                                        </button>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- row-part -->
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12 w-100">
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="count_defect" class="col-md-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Defect Qty</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="count_defect" name="count_defect" placeholder="Defect Qty" value="{{ old('count_defect') }}" required="required"/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                        
                                                                    <!-- form-group -->
                                                                    @php
                                                                        $count_sample = 0;
                                                                        if( ($standardRQCObject->standardDataRQC) ){
                                                                            $standardDataRQC = $standardRQCObject->standardDataRQC->first();
                                                                            $count_sample = $standardDataRQC->count_sample;
                                                                        }
                                                                    @endphp
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="count_sample" class="col-md-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Check Qty</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="count_sample" name="count_sample" placeholder="Check Qty" value="{!! $count_sample !!}" required="required"/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                        
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    <!-- /.row-part -->
                                                                        
                                                                    <!-- form-group-row -->
                                                                    <div class="row col-12 w-100">
                                                                        <!-- -->
                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12">
                                                                            <!-- btn-toolbar -->
                                                                            <div class="col text-center">
                                                                                <!-- div class="btn-group btn-group-lg pull-right" -->
                                                                                    <button type="submit" class="btn btn-primary ml-auto mr-auto" id="submit">Submit</button>
                                                                                <!-- /div -->
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <!-- -->
                                                                    </div>
                                                                    <!-- /.form-group-row -->
                                                                        
                                                                    </div>
                                                                    <!-- -->
                                                                </div>
                                                                <!-- /.form-group-col -->
                                                                
                                                                <!-- form-group-col -->
                                                                <div class="col col-sm-5 row p-0 m-0">
                                                                    <!-- -->
                                                                    <!-- form-group -->
                                                                    <div class="form-group row text-center">
                                                                        <!-- img-container -->
                                                                        <div class="img box clearfix text-center">
                                                                            <img src="{!! asset('img/avatar5.png') !!}" alt="" class="img-responsive img-fluid img-thumbnail rounded"/>
                                                                        </div>
                                                                        <!-- /.img-container -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- fieldset -->
                                                                    <div class="form-group row w-100">
                                                                    <fieldset class="w-100" disabled="disabled">
                                                                        
                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12 m-1">
                                                                            <label for="name" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Name</label>
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="text" class="form-control form-control-md" id="name" name="name" placeholder="Name" value="{!! $user_object->name_first !!}" disabled="disabled"/>
                                                                            </div>
                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                        </div>
                                                                        <!-- /.form-group -->

                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12 m-1">
                                                                            <label for="grade" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Operator Grade</label>
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="text" class="form-control form-control-md" id="grade" name="grade" placeholder="Operator Grade" value="{!! $user_object->grade !!}" disabled="disabled"/>
                                                                            </div>
                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        
                                                                    </fieldset>
                                                                    </div>
                                                                    <!-- /.fieldset -->
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
                                                
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        <!-- form -->
                                                        <form action="{!! route('home') !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
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
                                                                <!-- fieldset -->
                                                                <div class="form-group row w-100 m-1">
                                                                    <fieldset class="w-100" disabled>
                                                                        
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
                                                                                        <th scope="col">Defect</th>
                                                                                        <th scope="col"></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="tableId_1_tbody">
                                                                                   <!-- @for($i =1; $i <= 5; $i++) -->                 
                                                                                   <!-- tr -->
                                                                                   <tr>
                                                                                        <th scope="row">Operation {{ $i }}</th>
                                                                                        <td>Defect {{ $i }}</td>
                                                                                        <td class="text-center">
                                                                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown" tabindex="-1">
                                                                                                <div class="btn-group" role="group">
                                                                                                    <!-- button type="button" role="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split">Action</button -->
                                                                                                    <button id="btnGroupDrop_1_{{ $i }}" type="button" role="button" class="btn btn-outline-primary" data-toggle="dropdown"
                                                                                                    aria-haspopup="true" aria-expanded="false">
                                                                                                        <i class="fas fa-cogs fa-fw" aria-hidden="true"></i>
                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu text-wrap text-break bg-light border-light" aria-labelledby="btnGroupDrop_1_{{ $i }}">
                                                                                                        <!-- span class="dropdown-item-text ">Title</span -->
                                                                                                        <!-- div class="dropdown-item dropdown-divider"></div -->
                                                                                                        <div class="dropdown-item btn-group  pl-1 pr-1 m-0" role="group" aria-label="Button Group">
                                                                                                            <button type="button" role="button" class="btn btn-outline-primary btn-block waves-effect">
                                                                                                            <i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>
                                                                                                            <span class="sr-only">Action</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
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
                                                                    <!-- --- -->    
                                                                        
                                                                    </fieldset>
                                                                </div>
                                                                <!-- /.fieldset -->
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
        </div>
        <!-- /.accordion -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@section('section_script_document')
    @parent
    @includeIf('partials.script.select_measure_point', array());
    @includeIf('partials.script.select_multiple_defect', array());
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
        var submit_temp = $("#submit_temp");
        submit_temp.on("click", function(event){
            try{
                submit_temp.attr("disabled", true);
            
                var measure_point_id = $("#measure_point_id");
                var defect_id = $("#defect_id");
                var count_defect = $("#count_defect");
                var measure_point_id_value = null;
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
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
                        var temp = measure_point_id.find( ("[value=" + value + "]") );
                        console.log(temp);
                        console.log(temp.text);
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
                        var vv = measure_point_id;     
                        var label = $(vv).children("option[value='"+$(vv).select2("val")+"']").first().data;
                        console.log(label);
                        var a = $("#measure_point_id option:selected").data();
                        console.log(a.id);
                        console.log($('#measure_point_id').select2('data'));
                        //$('#all_contacts').select2('data', {id: '123', text: 'res_data.primary_email'});
                        //$('#measure_point_id').select2('data')
                        console.log( measure_point_id.find(":selected").data("id") );
                        console.log(measure_point_id.select2().find(":selected").data("id"));
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
                    });

                    /*form1_hidden_input_group.find( ("." + id_defect_id_prefix) ).each(function( index, value ){
                        //console.log(index);
                        //console.log(value);
                    });*/
                    
                    measure_point_id.val(null).trigger("change");
                    defect_id.val(null).trigger("change");
                }
                var count_defect_value = form1_hidden_input_group.find( ("." + id_defect_id_prefix) ).length;
                count_defect.val(function(index, currentvalue){
                    return count_defect_value;
                });
            }catch(error){
                console.log("error");
                console.log(error);
            }finally{
                //console.log("finally");
                submit_temp.attr("disabled", false);
                //delete variable;
            }
        });
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