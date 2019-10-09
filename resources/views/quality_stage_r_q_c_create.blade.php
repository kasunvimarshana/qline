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


            var dataArray = [
                {
                    "id": 1,
                    "text": "Operation 1",
                    "selected": false
                },{
                    "id": 2,
                    "text": "Operation 2",
                    "selected": false
                },{
                    "id": 3,
                    "text": "Operation 3",
                    "disabled": false
                },{
                    "id": 4,
                    "text": "Operation 4",
                    "disabled": false
                },{
                    "id": 5,
                    "text": "Operation 5",
                    "disabled": false
                }
            ];

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
                data: dataArray
            }).setSelect2OptionDataAttribute(dataArray);
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
                                        <ul class="nav nav-pills nav-pills-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_1" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_cutting') !!}" role="tab" aria-controls="id_tab_content_1" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Cutting</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_2" class="nav-link m-1 btn btn-outline-danger active" data-toggle="false" href="{!! url('quality_stage_rqc') !!}" role="tab" aria-controls="id_tab_content_2" aria-selected="true">
                                                    <span><i class="fas fa-anchor"></i> RQC</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_3" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_sewing_hundred_percent') !!}" role="tab" aria-controls="id_tab_content_3" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> SC 100%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_4" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_sewing_aql_audit') !!}" role="tab" aria-controls="id_tab_content_4" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Sewing AQL Audit</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_5" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_finishing') !!}" role="tab" aria-controls="id_tab_content_5" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Finishing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_6" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_cni') !!}" role="tab" aria-controls="id_tab_content_6" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> CNI</span>
                                                </a>
                                            </li>
                                        </ul>
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
                                                                        <label for="name" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">EMP No</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control form-control-md" id="name" name="name" placeholder="EMP No" value="{{ old('name') }}" aria-label="EMP No" aria-describedby="id_input_addon" required/>
                                                                                <div class="input-group-addon input-group-append">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="submit" class="btn btn btn-outline-danger" id="submit" aria-disabled="true" disabled>
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
                                                                        <label for="name" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Attempt</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control form-control-md" id="name" name="name" placeholder="Attempt" value="{{ old('name') }}" aria-label="Attempt" aria-describedby="id_input_addon" required/>
                                                                                <div class="input-group-addon input-group-append">
                                                                                    <!-- div class="input-group-text" -->
                                                                                        <button type="submit" class="btn btn btn-outline-danger" id="submit" aria-disabled="true" disabled>
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
                                                                        <label for="operation" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Operation</label>
                                                                        <div class="col">
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
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12">
                                                                        <label for="defect" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Defect</label>
                                                                        <div class="col">
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
                                                                    
                                                                    <!-- row-part -->
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-12 w-100">
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="qty_defect" class="col-md-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Defect Qty</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="qty_defect" name="qty_defect" placeholder="Defect Qty" value="{{ old('qty_defect') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                        
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="qty_check" class="col-md-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Check Qty</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="qty_check" name="qty_check" placeholder="Check Qty" value="{{ old('qty_check') }}" required/>
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
                                                                    <fieldset class="w-100" disabled>
                                                                        
                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12 m-1">
                                                                            <label for="name" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Name</label>
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="text" class="form-control form-control-md" id="name" name="name" placeholder="Name" value="{{ old('name') }}" disabled/>
                                                                            </div>
                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                        </div>
                                                                        <!-- /.form-group -->

                                                                        <!-- form-group -->
                                                                        <div class="form-group row col-sm-12 m-1">
                                                                            <label for="grade" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Operator Grade</label>
                                                                            <div class="col">
                                                                                <!-- p class="form-control-static"></p -->
                                                                                <input type="text" class="form-control form-control-md" id="grade" name="grade" placeholder="Operator Grade" value="{{ old('grade') }}" disabled/>
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
                                                                                <tbody>
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
                                                                                                            <i class="far fa-edit fa-fw" aria-hidden="true"></i>
                                                                                                            <span class="sr-only">Action</span>
                                                                                                            </button>
                                                                                                        </div>
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