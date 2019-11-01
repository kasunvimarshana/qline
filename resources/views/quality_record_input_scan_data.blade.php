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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( Scan )</span>
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
                                            <div id="id_tab_content_3" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_3"><br>
                                                
                                                <!-- ************************************************ -->
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        
                                                        <!-- -->
                                                        <!-- accordion -->
                                                        <div id="accordion_1_content">
                                                            <!-- card-group -->
                                                            <div class="card-group">
                                                                <!-- card -->
                                                                <div class="card bg-secondary border-light">
                                                                    <div class="card-header" id="idCard_accordion_1_1_content_1">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_1_content_1" aria-expanded="true" aria-controls="idCollapse_accordion_1_1_content_1" role="button" type="button">
                                                                            <i class="fab fa-buromobelexperte fa-fw"></i>
                                                                            <span class="text-decoration-none text-justify small"> QTY Offered for ( AQL )</span>
                                                                            </button>
                                                                        </h5>
                                                                    </div>

                                                                    <div id="idCollapse_accordion_1_1_content_1" class="collapse show" aria-labelledby="idCard_accordion_1_1_content_1" data-parent="#idCollapse_accordion_1_1_content_1">
                                                                        <div class="card-body bg-light" id="idCollapse_content_1_body">

                                                                            <!-- row -->
                                                                            <div class="row">

                                                                                <!-- col -->
                                                                                <div class="col-sm-12">
                                                                                    <!-- form -->
                                                                                    <form action="{!! route('qualityRecordInputScanData.store', []) !!}" method="POST" class="col col-sm-8" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        <!-- form-group-row -->
                                                                                        <div class="row">
                                                                                            <!-- -->
                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                                                <label for="code" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Tag Reading</label>
                                                                                                <div class="col">
                                                                                                    <!-- p class="form-control-static"></p -->
                                                                                                    <input type="text" class="form-control form-control-lg" id="code" name="code" placeholder="Tag Reading" value="{{ old('code') }}" autocomplete="off" required="required" autofocus="autofocus"/>
                                                                                                </div>
                                                                                                <!-- span id="form-control" class="help-block"></span -->
                                                                                            </div>
                                                                                            <!-- /.form-group -->
                                                                                            
                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                                                <label for="count_data" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Bundle Qty</label>
                                                                                                <div class="col">
                                                                                                    <!-- p class="form-control-static"></p -->
                                                                                                    <input type="number" class="form-control form-control-lg" id="count_data" name="count_data" placeholder="Bundle Qty" value="{{ old('count_data') }}" autocomplete="off" required="required"/>
                                                                                                </div>
                                                                                                <!-- span id="form-control" class="help-block"></span -->
                                                                                            </div>
                                                                                            <!-- /.form-group -->
                                                                                            
                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                                                <label for="size_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Size</label>
                                                                                                <div class="col">
                                                                                                    <!-- p class="form-control-static"></p -->
                                                                                                    <div class="input-group h-100">
                                                                                                        <select class="form-control form-control-lg select2" id="size_id" name="size_id" value="{{ old('size_id') }}" autocomplete="off" data-placeholder="Size" style="width: 100%;" required="required" data-minimum-results-for-search="Infinity">
                                                                                                            <option value="S"> S </option>
                                                                                                            <option value="M"> M </option>
                                                                                                            <option value="L"> L </option>
                                                                                                            <option value="Xl"> XL </option>
                                                                                                            <option value="XXl"> XXL </option>
                                                                                                            <option value="XXXl"> XXXL </option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- span id="form-control" class="help-block"></span -->
                                                                                            </div>
                                                                                            <!-- /.form-group -->

                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12">
                                                                                                <!-- btn-toolbar -->
                                                                                                <div class="col text-right mt-3">
                                                                                                    <!-- div class="btn-group btn-group-lg pull-right" -->
                                                                                                        <button type="submit" class="btn btn-primary btn-lg ml-auto px-5" id="submit">SUBMIT</button>
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

                                                            <!-- card-group -->
                                                            <div class="card-group">
                                                                <!-- card -->
                                                                <div class="card bg-secondary rounded border-0">
                                                                    <div class="card-header border-0" id="idCard_accordion_1_1_content_2">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_1_content_2" aria-expanded="false" aria-controls="idCollapse_accordion_1_1_content_2" role="button" type="button">
                                                                            <i class="fab fa-buromobelexperte fa-fw"></i>
                                                                            <span class="text-decoration-none text-justify small"> List</span>
                                                                            </button>
                                                                        </h5>
                                                                    </div>

                                                                    <div id="idCollapse_accordion_1_1_content_2" class="collapse hide" aria-labelledby="idCard_accordion_1_1_content_2" data-parent="#idCollapse_accordion_1_1_content_2">
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
                                                                                                <th scope="col">#</th>
                                                                                                <th scope="col">Code</th>
                                                                                                <th scope="col">Style</th>
                                                                                                <th scope="col">Qty</th>
                                                                                                <th scope="col">Size</th>
                                                                                                <th scope="col"></th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                           <!-- @foreach($quality_record_input_scan_data_array as $key => $value) -->                 
                                                                                           <!-- tr -->
                                                                                           <tr>
                                                                                                <th scope="row"># {{ ($key + 1) }}</th>
                                                                                                <td>{{ $value->code }}</td>
                                                                                                <td>
                                                                                                    @if($value->style)
                                                                                                    {{ $value->style->name }}
                                                                                                    @endif
                                                                                                </td>
                                                                                                <td>{{ number_format($value->count_data) }}</td>
                                                                                                <td>{{ $value->size_id }}</td>
                                                                                                <td>
                                                                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown" tabindex="-1">
                                                                                                        <div class="btn-group" role="group">
                                                                                                            <!-- button type="button" role="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split">Action</button -->
                                                                                                            <button id="group_drop_1_{{ $key }}" type="button" role="button" class="btn btn-outline-primary" data-toggle="dropdown"
                                                                                                            aria-haspopup="true" aria-expanded="false">
                                                                                                                <i class="fas fa-cogs fa-fw" aria-hidden="true"></i>
                                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu text-wrap text-break bg-light border-light" aria-labelledby="group_drop_1_{{ $key }}">
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
                                                                                            <!-- @endforeach -->
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
                                                        </div>
                                                        <!-- /.accordion -->
                                                        <!-- -->
                                                        
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
    @includeIf('partials.script.select_style', array());
@endsection

@push('stack_script')
<script>
    $(function(){
        "use strict";
        @php
            $setup_configuration_style_id = null;
            if( (session()->has('setup_configuration_style_id')) && (session()->exists('setup_configuration_style_id')) ){
                $setup_configuration_style_id = session()->get('setup_configuration_style_id', null);
            }else if( (old('style_id')) ){
                $setup_configuration_style_id = old('style_id');
            }else{
                $setup_configuration_style_id = null;
            }
        @endphp
        $("#style_id").select2("trigger", "select", {
            data: { id: "{!! $setup_configuration_style_id !!}" }
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

@push('stack_script')
<script>
    $(function(){
        "use strict";
        var code = $("#code");
        var count_data = $("#count_data");
        var code_val = "";
        var count_data_val = "";
        code.on("blur", function(){
            code_val = code.val();
            count_data_val = code_val.substring(code_val.length - 2, code_val.length);
            count_data.val( count_data_val );
        });
    });
</script>
@endpush
