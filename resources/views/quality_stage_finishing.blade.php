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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( Finishing )</span>
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
                                            <div id="id_tab_content_5" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_5"><br>
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
                                                                    <th scope="col">Booked Qty For Finishing</th>
                                                                    <th scope="col">Line</th>
                                                                    <th scope="col">Style</th>
                                                                    <th scope="col">Size</th>
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
                                                                            
                                                                            var data = new Object();
                                                                            data.code = code;
                                                                            data.quality_record_input_scan_data_id = quality_record_input_scan_data_id;
                                                                            data.count_data = count_data;
                                                                            
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
                                    <form action="{!! route('qualityRecordFinishing.store', []) !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                        @csrf
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group" name="form1_hidden_input_group" class="d-none">

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
                                                                    <button type="submit" class="btn btn-success btn-lg m-1" id="submit" name="submit" value="submit_pass">Quantity Confirmed</button>
                                                                    <button type="submit" class="btn btn-warning btn-lg m-1" id="submit" name="submit" value="submit_suspend">Suspend</button>
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

    <script>
        function setQualityRecordInputScanDataValues( data ){
            //console.log("data");
            var id_quality_record_input_scan_data_prefix = "quality_record_input_scan_data_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            var count_data = $("#count_data");
            var count_data_sum = 0;
            var input_quality_record_input_scan_data = form1_hidden_input_group.find( ("." + id_quality_record_input_scan_data_prefix) );
            if( (input_quality_record_input_scan_data.length <= 0) ){
                count_data.text( count_data_sum );
            }else{
                input_quality_record_input_scan_data.each(function( index, value ){
                    var count_data_temp = $(value).data("count_data");
                    count_data_temp = parseFloat(count_data_temp);
                    count_data_sum = (count_data_sum + count_data_temp);
                    count_data.text( count_data_sum );
                });
            }
        }
        function createInputScanDataElement( data ){
            //console.log( data );
            var id_quality_record_input_scan_data_prefix = "quality_record_input_scan_data_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            deleteInputScanDataElement( data );
            
            var input_temp = $("<input/>");
            input_temp.attr("id", (id_quality_record_input_scan_data_prefix + data.quality_record_input_scan_data_id));
            input_temp.attr("name", (id_quality_record_input_scan_data_prefix + "[]"));
            input_temp.attr("value", (data.quality_record_input_scan_data_id));
            input_temp.attr("required", ("required"));
            input_temp.attr("readonly", ("readonly"));
            input_temp.data("count_data", data.count_data);
            input_temp.addClass( id_quality_record_input_scan_data_prefix );
            form1_hidden_input_group.append(input_temp);
            setQualityRecordInputScanDataValues( data );
        }
    </script>
    <script>
        function deleteInputScanDataElement( data ){
            //console.log( data );
            var id_quality_record_input_scan_data_prefix = "quality_record_input_scan_data_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            form1_hidden_input_group.find( ("#" + id_quality_record_input_scan_data_prefix + data.quality_record_input_scan_data_id) ).remove();
            setQualityRecordInputScanDataValues( data );
        }
    </script>
@endsection

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