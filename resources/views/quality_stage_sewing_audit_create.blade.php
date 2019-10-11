@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom_style_select2_1.css') !!}"/>
@endsection

@section('section_script_optional')
    @parent
    <!-- -->
    <!-- --------test-script-------- -->
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
    <!-- --------test-script-------- -->
    <!-- --------test-script-------- -->
    <script>
        $(function(){
            function format(param) {
                if (!param.id){
                    return param.text; // optgroup
                }

                var tempOptionObject = "<div class='text-wrap text-break w-100'>"
                + "<p>" + param.text + "</p>"
                + "</div>";

                var optionObject = $(tempOptionObject);
                return optionObject;
            }

            //$.fn.select2.defaults.set( "theme", "bootstrap" );
            $("#defect_category").select2({
            theme: 'bootstrap',
            placeholder: "Select",
            //disabled: false,
            //scrollAfterSelect: true,
            //closeOnSelect: false,
            //containerCssClass: ':all:',
            width: 'resolve',
            scrollAfterSelect: true,
            closeOnSelect: false,
            allowClear: true,

            formatResult: format,
            formatSelection: format,
            escapeMarkup: function(markup) {
                return markup;
            },
            templateResult: function(data) {
                //console.log(data);
                //return data.text;
                return format(data);
            },
            templateSelection: function(data) {
                //console.log(data);
                //return data.text;
                return format(data);
            },
            data: []
            });
        });
    </script>
    <!-- --------test-script-------- -->
    <!-- --------test-script-------- -->
    <script>
        $(function(){
            function format(param) {
                if (!param.id){
                    return param.text; // optgroup
                }

                var tempOptionObject = "<div class='text-wrap text-break w-100'>"
                + "<p>" + param.text + "</p>"
                + "</div>";

                var optionObject = $(tempOptionObject);
                return optionObject;
            }

            //$.fn.select2.defaults.set( "theme", "bootstrap" );
            $("#defect").select2({
            theme: 'bootstrap',
            placeholder: "Select",
            //disabled: false,
            //scrollAfterSelect: true,
            //closeOnSelect: false,
            //containerCssClass: ':all:',
            width: 'resolve',
            scrollAfterSelect: true,
            closeOnSelect: false,
            allowClear: true,

            formatResult: format,
            formatSelection: format,
            escapeMarkup: function(markup) {
                return markup;
            },
            templateResult: function(data) {
                //console.log(data);
                //return data.text;
                return format(data);
            },
            templateSelection: function(data) {
                //console.log(data);
                //return data.text;
                return format(data);
            },
            data: []
            });
        });
    </script>
    <!-- --------test-script-------- -->
    <!-- --------test-script-------- -->
    <script>
        $(function(){
            function format(param) {
                if (!param.id){
                    return param.text; // optgroup
                }

                var tempOptionObject = "<div class='text-wrap text-break w-100'>"
                + "<p>" + param.text + "</p>"
                + "</div>";

                var optionObject = $(tempOptionObject);
                return optionObject;
            }

            //$.fn.select2.defaults.set( "theme", "bootstrap" );
            $("#operation").select2({
            theme: 'bootstrap',
            placeholder: "Select",
            //disabled: false,
            //scrollAfterSelect: true,
            //closeOnSelect: false,
            //containerCssClass: ':all:',
            width: 'resolve',
            scrollAfterSelect: true,
            closeOnSelect: true,
            allowClear: true,

            formatResult: format,
            formatSelection: format,
            escapeMarkup: function(markup) {
                return markup;
            },
            templateResult: function(data) {
                //console.log(data);
                //return data.text;
                return format(data);
            },
            templateSelection: function(data) {
                //console.log(data);
                //return data.text;
                return format(data);
            },
            data: []
            });
        });
    </script>
    <!-- --------test-script-------- -->
    <!-- --------test-script-------- -->
    <script>
        $(function(){
            $("#id_left_control_div").collapse("hide");
            $("#id_right_control_div").collapse("hide");
        });
    </script>
    <!-- --------test-script-------- -->
    <!-- --------test-script-------- -->
    <script>
        $(document).ready(function(){
            $('#tableId_1').DataTable();
        }); 
    </script>
    <!-- --------test-script-------- -->
    <!-- -->
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
                                                                    <th scope="col">Select to Audit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <!-- @foreach($quality_record_input_scan_data_array as $key => $value) -->                 
                                                               <!-- tr -->
                                                               <tr>
                                                                    <th scope="row"># {{ ($key + 1) }}</th>
                                                                    <td>{{ $value->code }}</td>
                                                                    <td>{{ $value->count_data }}</td>
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
                                                                    <td>
                                                                        <!-- -->
                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12 m-1">
                                                                            <!-- label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Label</label -->
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="checkbox" class="form-control form-check-input" id="id_{{ $key }}" name="name_{{ $key }}" data-toggle="toggle" data-size="md" data-onstyle="primary" data-offstyle="light" data-on="<i class='fas fa-toggle-on'></i>" data-off="<i class='fas fa-toggle-off'></i>"/>
                                                                            </div>
                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <!-- -->
                                                                    </td>
                                                                </tr>
                                                                <!-- /.tr -->                 
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
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- form-group -->
                                                <div class="form-group col col-12">
                                                    <label for="operation" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Operation /Area /POM</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger" id="submit" data-select2-open-control="operation" aria-disabled="false">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                            <select class="form-control select2" id="operation" name="operation" value="{{ old('operation') }}" data-placeholder="Operation" required>

                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                <option>Operations {{ $i }}</option>
                                                                <!-- @endfor -->

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- ------------------------------------------------------------------------- -->
                                                <!-- form-group -->
                                                <div class="form-group col col-12">
                                                    <label for="defect_category" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Defect Category</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger" id="submit" data-select2-open-control="defect_category" aria-disabled="false">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                            <select class="form-control select2 select2-multiple select2-allow-clear" id="defect_category" name="defect_category" value="{{ old('defect_category') }}" data-placeholder="Defect Category" aria-hidden="true" multiple="multiple" required>

                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                <option>Defect Category {{ $i }}</option>
                                                                <!-- @endfor -->

                                                            </select>
                                                            <div class="input-group-addon input-group-append">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger" id="submit" data-select2-close-control="defect_category" aria-disabled="false">
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
                                                <div class="form-group col col-12">
                                                    <label for="defect" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Defect</label>
                                                    <div class="col col-lg-12">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger" id="submit" data-select2-open-control="defect" aria-disabled="false">
                                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                                    </button>
                                                                <!-- /div -->
                                                            </div>
                                                            <select class="form-control select2 select2-multiple select2-allow-clear" id="defect" name="defect" value="{{ old('defect') }}" data-placeholder="Defect" aria-hidden="true" multiple="multiple" required>

                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                <option>Defect {{ $i }}</option>
                                                                <!-- @endfor -->

                                                            </select>
                                                            <div class="input-group-addon input-group-append">
                                                                <!-- div class="input-group-text" -->
                                                                    <button type="button" class="btn btn-outline-danger" id="submit" data-select2-close-control="defect" aria-disabled="false">
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
                                                                    <button type="button" class="btn btn-success m-1" id="submit">Pass</button>
                                                                    <button type="button" class="btn btn-danger m-1" id="submit">Fail</button>
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