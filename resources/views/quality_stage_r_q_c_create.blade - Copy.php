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
                            <span class="text-decoration-none text-justify small"> Quality Stage ( RQC )</span>
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
                                                        <form action="{!! route('qualityRecordRQC.store', []) !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- ------------------------------------------------------------------------------------- -->
                                                            <div id="form1_hidden_input_group" name="form1_hidden_input_group" class="d-none">
                                                                @isset($user_object)
                                                                <input type="hidden" id="user_id_record" name="user_id_record" value="{!! $user_object->id !!}" autocomplete="off" required="required" readonly="readonly"/>
                                                                @endisset
                                                            </div>
                                                            <!-- ------------------------------------------------------------------------------------- -->
                                                            
                                                            <!-- form-group-row -->
                                                            <div class="row col border border-danger rounded shadow-sm m-1">
                                                                
                                                                <!-- container -->
                                                                <div class="container mt-3 mb-3">
                                                                    <!-- h2 class="text-danger"> - </h2 -->
                                                                    <!-- p> - </p -->
                                                                </div>
                                                                <!-- /.container -->
                                                                
                                                                <!-- row -->
                                                                <div class="container-fluid p-0">

                                                                    <!-- col -->
                                                                    <div class="container-fluid p-0">
                                                                        <!-- form -->
                                                                        <div class="container-fluid p-0">
                                                                        <!-- container -->
                                                                        <div class="container-fluid p-0">
                                                                            <!-- tab-nav -->
                                                                            <div class="row collapse multi-collapse" id="id_nav_container_3">
                                                                            <!-- --- -->

                                                                            <div class="col">
                                                                            <!-- --- -->
                                                                            <ul class="nav nav-tabs nav-tabs-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">

                                                                                <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                    <a id="id_nav_link_3_2" class="nav-link m-1 btn btn-outline-danger border-danger active" data-toggle="tab" href="#id_tab_content_3_2" role="tab" aria-controls="id_tab_content_3_2" aria-selected="true">
                                                                                        <span><i class="fas fa-user"></i> Operator</span>
                                                                                    </a>
                                                                                </li>
                                                                                
                                                                                <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                    <a id="id_nav_link_3_1" class="nav-link m-1 btn btn-outline-danger border-danger" data-toggle="tab" href="#id_tab_content_3_1" role="tab" aria-controls="id_tab_content_3_1" aria-selected="false">
                                                                                        <span><i class="fab fa-wpforms"></i> Audit</span>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                            <!-- --- -->   
                                                                            </div>

                                                                            <!-- --- -->    
                                                                            </div>
                                                                            <!-- /.tab-nav -->

                                                                            <!-- tab-content -->
                                                                            <div class="row">
                                                                            <!-- --- -->
                                                                            <div class="tab-content w-100" id="id_nav_tab_content_3">
                                                                                
                                                                                <div id="id_tab_content_3_2" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_3_2">
                                                                                    <br/>
                                                                                    <!-- --- -->
                                                                                    <!-- form-group-col -->
                                                                                    <div class="col col-sm-12 row p-0 m-0">
                                                                                        <!-- -->
                                                                                        <!-- form-group -->
                                                                                        <div class="form-group form-group-lg col col-md-6 text-center">
                                                                                            <!-- img-container -->
                                                                                            <div class="img box clearfix text-center ml-auto mr-5">
                                                                                                @php
                                                                                                    $image_uri = asset('img/avatar5.png');
                                                                                                    if( (isset($user_object)) && ($user_object->image_uri) ){
                                                                                                        if(Storage::exists($user_object->image_uri)){
                                                                                                            $image_uri = Storage::url($user_object->image_uri);
                                                                                                            $image_uri = asset($image_uri);
                                                                                                        }
                                                                                                    }
                                                                                                @endphp
                                                                                                <img src="{!! $image_uri !!}" alt="" class="img-responsive img-fluid img-thumbnail rounded" style="max-width: 13em; min-width: 13em;"/>
                                                                                            </div>
                                                                                            <!-- /.img-container -->
                                                                                        </div>
                                                                                        <!-- /.form-group -->

                                                                                        <!-- fieldset -->
                                                                                        <div class="form-group form-group-lg col col-md-6 text-center">
                                                                                        <fieldset class="w-100" disabled="disabled">

                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                                                <label for="name" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-1">EMP No</label>
                                                                                                <label for="name" class="col-lg-8 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                                                                                                    <span> [ </span>
                                                                                                    <span> {!! $user_object->code !!} </span>
                                                                                                    <span> ] </span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <!-- /.form-group -->
                                                                                            
                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                                                <label for="name" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-1">Name</label>
                                                                                                <label for="name" class="col-lg-8 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                                                                                                    <span> [ </span>
                                                                                                    <span> {!! $user_object->name_first !!} </span>
                                                                                                    <span> ] </span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <!-- /.form-group -->
                                                                                            
                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg row col-sm-12 m-1">
                                                                                                <label for="name" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-1">Operator Grade</label>
                                                                                                <label for="name" class="col-lg-8 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                                                                                                    <span> [ </span>
                                                                                                    <span> {!! $user_object->grade !!} </span>
                                                                                                    <span> ] </span>
                                                                                                </label>
                                                                                            </div>
                                                                                            <!-- /.form-group -->

                                                                                        </fieldset>
                                                                                        </div>
                                                                                        <!-- /.fieldset -->
                                                                                        <!-- -->
                                                                                    </div>
                                                                                    <!-- /.form-group-col -->
                                                                                    <!-- --- -->
                                                                                </div>
                                                                                
                                                                                <div id="id_tab_content_3_1" class="container tab-pane fade" role="tabpanel" aria-labelledby="id_nav_link_3_1">
                                                                                    <br/>
                                                                                    <!-- -->
                                                                                    <!-- form-group-col -->
                                                                                    <div class="col col-sm-12 p-0 m-0">
                                                                                        <!-- -->
                                                                                        <div class="row">

                                                                                        <!-- form-group -->
                                                                                        <div class="form-group form-group-lg row col-12 d-none">
                                                                                            <label for="code" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">EMP No</label>
                                                                                            <div class="col">
                                                                                                <!-- p class="form-control-static"></p -->
                                                                                                <div class="input-group">
                                                                                                    <input type="text" class="form-control form-control-lg" id="code" name="code" placeholder="EMP No" value="{!! $user_object->code !!}" autocomplete="off" aria-label="EMP No" aria-describedby="id_input_addon" required="required" readonly="readonly"/>
                                                                                                    <div class="input-group-addon input-group-append">
                                                                                                        <!-- div class="input-group-text" -->
                                                                                                            <button type="submit" class="btn btn btn-outline-danger btn-lg" id="submit" aria-disabled="true" disabled="disabled">
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
                                                                                        <div class="form-group form-group-lg row col-12 d-none">
                                                                                            <label for="attempt" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">Attempt</label>
                                                                                            <div class="col">
                                                                                                <!-- p class="form-control-static"></p -->
                                                                                                <div class="input-group">
                                                                                                    <input type="number" class="form-control form-control-lg" id="attempt" name="attempt" placeholder="Attempt" value="{!! $attempt !!}" autocomplete="off" aria-label="Attempt" aria-describedby="id_input_addon" required="required" readonly="readonly"/>
                                                                                                    <div class="input-group-addon input-group-append">
                                                                                                        <!-- div class="input-group-text" -->
                                                                                                            <button type="submit" class="btn btn btn-outline-danger btn-lg" id="submit" aria-disabled="true" disabled="disabled">
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
                                                                                        <div class="form-group form-group-lg col col-12 w-100">
                                                                                            <div class="form-group form-group-lg col w-100">
                                                                                                <div class="col">
                                                                                                    <!-- p class="form-control-static"></p -->
                                                                                                    <div class="input-group">
                                                                                                        <div class="col text-center px-5">
                                                                                                            <!-- div class="btn-group btn-group-lg pull-right" -->
                                                                                                            <button type="button" class="btn btn-secondary btn-block btn-lg ml-auto mr-auto px-5" id="submit_id_01">
                                                                                                                <span>
                                                                                                                    <i class="fa fa-plus fa-fw"></i>
                                                                                                                </span>
                                                                                                            </button>
                                                                                                            <!-- /div -->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- span id="form-control" class="help-block"></span -->
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- /.form-group -->

                                                                                        <!-- row-part -->
                                                                                        <!-- form-group -->
                                                                                        <div class="form-group col col-12 w-100">

                                                                                        <!-- form-group -->
                                                                                        <div class="form-group form-group-lg row col-md-6 d-none">
                                                                                            <label for="count_defect" class="col-md-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">Defect Count</label>
                                                                                            <div class="col">
                                                                                                <!-- p class="form-control-static"></p -->
                                                                                                <input type="number" class="form-control form-control-lg" id="count_defect" name="count_defect" placeholder="Defect Count" value="{{ old('count_defect') }}" autocomplete="off" required="required" readonly="readonly"/>
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
                                                                                        <div class="form-group form-group-lg row col-md-6 d-none">
                                                                                            <label for="count_sample" class="col-md-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">Check Qty</label>
                                                                                            <div class="col">
                                                                                                <!-- p class="form-control-static"></p -->
                                                                                                <input type="number" class="form-control form-control-lg" id="count_sample" name="count_sample" placeholder="Check Qty" value="{!! $count_sample !!}" autocomplete="off" required="required" readonly="readonly"/>
                                                                                            </div>
                                                                                            <!-- span id="form-control" class="help-block"></span -->
                                                                                        </div>
                                                                                        <!-- /.form-group -->

                                                                                        </div>
                                                                                        <!-- /.form-group -->
                                                                                        <!-- /.row-part -->
                                                                                            
                                                                                        <!-- form-group-row -->
                                                                                        <div class="col col-12 w-100">
                                                                                            <!-- -->
                                                                                            <div class="row col col-12">
                                                                                                <!-- form-group -->
                                                                                                <div class="form-group form-group-lg row col col-md-4 col-sm-4">
                                                                                                    <label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">Attempt</label>
                                                                                                    <label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                                                                                                        <span> [ </span>
                                                                                                        <span> {!! $attempt !!} </span>
                                                                                                        <span> ] </span>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <!-- /.form-group -->
                                                                                                
                                                                                                <!-- form-group -->
                                                                                                <div class="form-group form-group-lg row col col-md-4 col-sm-4">
                                                                                                    @php
                                                                                                        $count_sample = 0;
                                                                                                        if( ($standardRQCObject->standardDataRQC) ){
                                                                                                            $standardDataRQC = $standardRQCObject->standardDataRQC->first();
                                                                                                            $count_sample = $standardDataRQC->count_sample;
                                                                                                        }
                                                                                                    @endphp
                                                                                                    <label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">Std Sample Qty</label>
                                                                                                    <label for="name" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                                                                                                        <span> [ </span>
                                                                                                        <span> {!! number_format($count_sample) !!} </span>
                                                                                                        <span> ] </span>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <!-- /.form-group -->
                                                                                                
                                                                                                <!-- form-group -->
                                                                                                <div class="form-group form-group-lg row col col-md-4 col-sm-4">
                                                                                                    <label for="count_defect_temp" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-5">Defect Count</label>
                                                                                                    <label for="count_defect_temp" class="col control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                                                                                                        <span> [ </span>
                                                                                                        <span id="count_defect_temp"> {!! 0 !!} </span>
                                                                                                        <span> ] </span>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <!-- /.form-group -->
                                                                                            </div>
                                                                                            <!-- -->
                                                                                        </div>
                                                                                        <!-- /.form-group-row -->

                                                                                        <!-- form-group-row -->
                                                                                        <div class="col col-12 w-100">
                                                                                            <!-- -->
                                                                                            <!-- form-group -->
                                                                                            <div class="form-group form-group-lg col col-sm-12 w-100">
                                                                                                <!-- btn-toolbar -->
                                                                                                <div class="col text-center px-5">
                                                                                                    <!-- div class="btn-group btn-group-lg pull-right" -->
                                                                                                        <button type="submit" class="btn btn-primary btn-block btn-lg ml-auto mr-auto px-md-5 px-sm-0" id="submit">SUBMIT</button>
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
                                                                                    <!-- -->
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
                                                                    <fieldset class="w-100">
                                                                        
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

<!-- ................ -->
<!-- *********************************************************************** -->
<!-- Modal -->
<div class="modal fade bd-example-modal-xl p-0 m-0" id="modalElement_1" tabindex="-1" role="dialog" aria-labelledby="modalElement_1_Title" aria-hidden="true">
    <!-- class="modal-dialog modal-xl modal-dialog-centered modal-full" -->
    <div class="modal-dialog modal-xl modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- h5 class="modal-title" id="modalElement_1_Title">Title</h5 -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
<!-- .................................................................... -->
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        <!-- form -->
                                                        <form action="#" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                            @csrf
                                                            <!-- ------------------------------------------------------------------------------------- -->
                                                            <!--
                                                            <div id="form1_hidden_input_group" name="form1_hidden_input_group" class="d-none">
                                                                
                                                            </div>
                                                            -->
                                                            <!-- ------------------------------------------------------------------------------------- -->
                                                            <!-- form-group-row -->
                                                            <div class="row col border border-danger rounded shadow-sm m-1">
                                                                
                                                                <!-- container -->
                                                                <div class="container mt-3 mb-3">
                                                                    <!-- h2 class="text-danger"> - </h2 -->
                                                                    <!-- p> - </p -->
                                                                </div>
                                                                <!-- /.container -->
                                                                <!-- form-group-col -->
                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                    <!-- -->
                                                                    
                                                                    <!-- container -->
                                                                    <div class="container-fluid p-0">
                                                                        <!-- tab-nav -->
                                                                        <div class="row collapse multi-collapse" id="id_nav_container_3_modal_1">
                                                                        <!-- --- -->

                                                                        <div class="col">
                                                                        <!-- --- -->
                                                                        <ul class="nav nav-tabs nav-tabs-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">

                                                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                <a id="id_nav_link_3_1_modal_1" class="nav-link m-1 btn btn-outline-danger border-danger active" data-toggle="tab" href="#id_tab_content_3_1_modal_1" role="tab" aria-controls="id_tab_content_3_1_modal_1" aria-selected="true">
                                                                                    <span><i class="fas fa-user"></i> Operation</span>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                <a id="id_nav_link_3_2_modal_1" class="nav-link m-1 btn btn-outline-danger border-danger" data-toggle="tab" href="#id_tab_content_3_2_modal_1" role="tab" aria-controls="id_tab_content_3_2_modal_1" aria-selected="false">
                                                                                    <span><i class="fab fa-wpforms"></i> Defect Category</span>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                                                <a id="id_nav_link_3_3_modal_1" class="nav-link m-1 btn btn-outline-danger border-danger" data-toggle="tab" href="#id_tab_content_3_3_modal_1" role="tab" aria-controls="id_tab_content_3_3_modal_1" aria-selected="false">
                                                                                    <span><i class="fab fa-wpforms"></i> Defect</span>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                        <!-- --- -->   
                                                                        </div>

                                                                        <!-- --- -->    
                                                                        </div>
                                                                        <!-- /.tab-nav -->

                                                                        <!-- tab-content -->
                                                                        <div class="row">
                                                                        <!-- --- -->
                                                                        <div class="tab-content w-100" id="id_nav_tab_content_3">

                                                                            <div id="id_tab_content_3_1_modal_1" class="container tab-pane p-0 fade show active" role="tabpanel" aria-labelledby="id_nav_link_3_1_modal_1">
                                                                                <br/>
                                                                                <!-- --- -->
                                                                                <!-- form-group-col -->
                                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                                    <!-- -->
                                                                                    <!-- fieldset -->
                                                                                    <div class="form-group form-group-lg col col-md-12 text-center">
                                                                                    <!-- disabled="disabled" -->
                                                                                    <fieldset class="w-100">
            <!-- ======================================================================== -->
            <!-- accordion -->
            <div id="accordion_1_content_tab_content_3_1">
                <!-- card-group -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card bg-secondary border-light">
                        <div class="card-header" id="idCard_accordion_1_content_1_tab_content_3_1">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1_tab_content_3_1" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1_tab_content_3_1" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Operation ( Add )</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_1_tab_content_3_1" class="collapse show" aria-labelledby="idCard_accordion_1_content_1_tab_content_3_1" data-parent="#idCollapse_accordion_1_content_1_tab_content_3_1">
                            <div class="card-body bg-light p-0" id="idCollapse_content_1_body_tab_content_3_1">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-sm-12">
                                        <!-- form -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_1_1" name="form1_hidden_input_group_3_1_1" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_1_1_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                        <div class="card-header" id="idCard_accordion_1_content_2_tab_content_3_1">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2_tab_content_3_1" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2_tab_content_3_1" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Selected (List)</span>
                                    </button>
                                </div>

                                <div class="col mb-0 text-right m-0 p-0">
                                    <button class="btn btn-default btn-success text-white" role="button" type="button" id="button_id_1_2_3_1_1">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_2_tab_content_3_1" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2_tab_content_3_1" data-parent="#idCollapse_accordion_1_content_2_tab_content_3_1">
                            <div class="card-body bg-light p-0" id="idCollapse_content_2_body">


                                <!-- --- -->
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-sm-12 table-responsive-sm">
                                        <!-- table -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_1_2" name="form1_hidden_input_group_3_1_2" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_1_2_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
            <!-- ======================================================================== -->
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <!-- /.fieldset -->
                                                                                    <!-- -->
                                                                                </div>
                                                                                <!-- /.form-group-col -->
                                                                                <!-- --- -->
                                                                            </div>

                                                                            <div id="id_tab_content_3_2_modal_1" class="container tab-pane p-0 fade" role="tabpanel" aria-labelledby="id_nav_link_3_2_modal_1">
                                                                                <br/>
                                                                                <!-- --- -->
                                                                                <!-- form-group-col -->
                                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                                    <!-- -->
                                                                                    <!-- fieldset -->
                                                                                    <div class="form-group form-group-lg col col-md-12 text-center">
                                                                                    <!-- disabled="disabled" -->
                                                                                    <fieldset class="w-100">
            <!-- ======================================================================== -->
            <!-- accordion -->
            <div id="accordion_1_content_tab_content_3_2">
                <!-- card-group -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card bg-secondary border-light">
                        <div class="card-header" id="idCard_accordion_1_content_1_tab_content_3_2">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1_tab_content_3_2" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1_tab_content_3_2" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Defect Category ( Add )</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_1_tab_content_3_2" class="collapse show" aria-labelledby="idCard_accordion_1_content_1_tab_content_3_2" data-parent="#idCollapse_accordion_1_content_1_tab_content_3_2">
                            <div class="card-body bg-light p-0" id="idCollapse_content_1_body_tab_content_3_2">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-sm-12">
                                        <!-- form -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_2_1" name="form1_hidden_input_group_3_2_1" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_2_1_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                        <div class="card-header" id="idCard_accordion_1_content_2_tab_content_3_2">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2_tab_content_3_2" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2_tab_content_3_2" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Selected (List)</span>
                                    </button>
                                </div>

                                <div class="col mb-0 text-right m-0 p-0">
                                    <button class="btn btn-default btn-success text-white" role="button" type="button" id="button_id_1_2_3_2_1">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_2_tab_content_3_2" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2_tab_content_3_2" data-parent="#idCollapse_accordion_1_content_2_tab_content_3_2">
                            <div class="card-body bg-light p-0" id="idCollapse_content_2_body">


                                <!-- --- -->
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-sm-12 table-responsive-sm">
                                        <!-- table -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_2_2" name="form1_hidden_input_group_3_2_2" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_2_2_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
            <!-- ======================================================================== -->
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <!-- /.fieldset -->
                                                                                    <!-- -->
                                                                                </div>
                                                                                <!-- /.form-group-col -->
                                                                                <!-- --- -->
                                                                            </div>
                                                                            
                                                                            <div id="id_tab_content_3_3_modal_1" class="container tab-pane p-0 fade" role="tabpanel" aria-labelledby="id_nav_link_3_3_modal_1">
                                                                                <br/>
                                                                                <!-- --- -->
                                                                                <!-- form-group-col -->
                                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                                    <!-- -->
                                                                                    <!-- fieldset -->
                                                                                    <div class="form-group form-group-lg col col-md-12 text-center">
                                                                                    <!-- disabled="disabled" -->
                                                                                    <fieldset class="w-100">
            <!-- ======================================================================== -->
            <!-- accordion -->
            <div id="accordion_1_content_tab_content_3_3">
                <!-- card-group -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card bg-secondary border-light">
                        <div class="card-header" id="idCard_accordion_1_content_1_tab_content_3_3">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1_tab_content_3_3" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1_tab_content_3_3" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Defect ( Add )</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_1_tab_content_3_3" class="collapse show" aria-labelledby="idCard_accordion_1_content_1_tab_content_3_3" data-parent="#idCollapse_accordion_1_content_1_tab_content_3_3">
                            <div class="card-body bg-light p-0" id="idCollapse_content_1_body_tab_content_3_3">

                                <!-- row -->
                                <div class="row">

                                    <!-- col -->
                                    <div class="col-sm-12">
                                        <!-- form -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_3_1" name="form1_hidden_input_group_3_3_1" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_3_1_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
                        <div class="card-header" id="idCard_accordion_1_content_2_tab_content_3_3">
                            <div class="row">
                                <div class="col mb-0 text-left m-0 p-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2_tab_content_3_3" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2_tab_content_3_3" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Selected (List)</span>
                                    </button>
                                </div>

                                <div class="col mb-0 text-right m-0 p-0">
                                    <button class="btn btn-default btn-success text-white" role="button" type="button" id="button_id_1_2_3_3_1">
                                    <i class="fa fa-plus fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="idCollapse_accordion_1_content_2_tab_content_3_3" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2_tab_content_3_3" data-parent="#idCollapse_accordion_1_content_2_tab_content_3_3">
                            <div class="card-body bg-light p-0" id="idCollapse_content_2_body">


                                <!-- --- -->
                                <!-- row -->
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-sm-12 table-responsive-sm">
                                        <!-- table -->
                                        <!-- ------------------------------------------------------------------------------------- -->
                                        <div id="form1_hidden_input_group_3_3_2" name="form1_hidden_input_group_3_3_2" class="d-block">
                                            <!-- ... -->
                                            <!-- --- -->
                                            <div id="form1_hidden_input_group_child_3_3_2_1" class="d-flex flex-row align-items-start align-content-start align-content-lg-start flex-wrap element-max-height-1">
                                                <!-- -->
                                                <!--
                                                <div class="d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0">
                                                    <div class="col p-0">
                                                        <div class="btn-group btn-group-lg w-100 p-1">
                                                            <button type="submit" class="btn btn-primary btn-lg" id="submit">
                                                                <span class="text-wrap text-break">Button</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                                <!-- -->
                                            </div>
                                            <!-- --- -->
                                        </div>
                                        <!-- ------------------------------------------------------------------------------------- -->
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
            <!-- ======================================================================== -->
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <!-- /.fieldset -->
                                                                                    <!-- -->
                                                                                </div>
                                                                                <!-- /.form-group-col -->
                                                                                <!-- --- -->
                                                                            </div>

                                                                        </div>
                                                                        <!-- --- -->
                                                                        </div>
                                                                        <!-- /.tab-content -->
                                                                    </div>
                                                                    <!-- /.container -->
                                                                    
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
<!-- .................................................................... -->
                </div>
            </div>
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            -->
        </div>
    </div>
</div>
<!-- /.Modal -->
<!-- *********************************************************************** -->
<!-- ................ -->
@endsection

@section('section_script_document')
    @parent
    @includeIf('partials.script.dynamic_measure_point', array());
    @includeIf('partials.script.dynamic_defect_category', array());
    @includeIf('partials.script.dynamic_defect', array());
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
        
        $("#id_nav_container_3").removeClass("collapse");
        $("#id_nav_container_3").removeClass("multi-collapse");
        $("#id_nav_container_3").removeClass("show");
        $("#id_nav_container_3").addClass("show");
        
        $("#id_nav_container_3_modal_1").removeClass("collapse");
        $("#id_nav_container_3_modal_1").removeClass("multi-collapse");
        $("#id_nav_container_3_modal_1").removeClass("show");
        $("#id_nav_container_3_modal_1").addClass("show");
    });
</script>
@endpush

@push('stack_script')
<script>
    $(function(){
        "use strict";
        var submit_id_01 = $("#submit_id_01");
        var modalElement_1 = $("#modalElement_1");
        modalElement_1.modal({
            'backdrop': false,
            'keyboard': true,
            'focus': true,
            'show': false
        });
        submit_id_01.off("click").on("click", function(e){
            //e.preventDefault();
            //e.stopPropagation();
            modalElement_1.modal('show');
        });
    });
</script>
@endpush

<!-- ======================================================================================== -->
@push('stack_script')
<script>
    $(function(){
        "use strict";
        var myStorageObject = window.sessionStorage;
        var id_nav_link_3_1 = $("#id_nav_link_3_1_modal_1");
        var id_nav_link_3_2 = $("#id_nav_link_3_2_modal_1");
        var id_nav_link_3_3 = $("#id_nav_link_3_3_modal_1");
        var button_id_1_2_3_1_1 = $("#button_id_1_2_3_1_1");
        var button_id_1_2_3_2_1 = $("#button_id_1_2_3_2_1");
        var button_id_1_2_3_3_1 = $("#button_id_1_2_3_3_1");
        var button_id_1_3_0_0_1 = $("#button_id_1_3_0_0_1");
        //$('#myTab a[href="#profile"]').tab('show');
        /*
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            console.log(e.target); // newly activated tab
            console.log(e.relatedTarget); // previous active tab
        });
        */
        var id_prefix_measure_point = "measure_point_element_id";
        var id_prefix_defect_category = "defect_category_element_id";
        var id_prefix_defect = "defect_element_id";
        var id_prefix_temp_measure_point = (id_prefix_measure_point + "_temp_");
        var id_prefix_temp_defect_category = (id_prefix_defect_category + "_temp_");
        var id_prefix_temp_defect = (id_prefix_defect + "_temp_");

        var form_hidden_input_group_0 = $("#form1_hidden_input_group");
        
        var temporaryDataArrayMeasurePoint = new Array();
        var temporaryDataArrayDefectCategory = new Array();
        var temporaryDataArrayDefect = new Array();
        
        var form_hidden_input_group_2_measure_point = $("#form1_hidden_input_group_child_3_1_2_1");
        var form_hidden_input_group_2_defect_category = $("#form1_hidden_input_group_child_3_2_2_1");
        var form_hidden_input_group_2_defect = $("#form1_hidden_input_group_child_3_3_2_1");
        /*
        temporaryDataArrayMeasurePoint = $(document).getMyStorageData( id_prefix_measure_point );
        temporaryDataArrayDefectCategory = $(document).getMyStorageData( id_prefix_defect_category );
        temporaryDataArrayDefect = $(document).getMyStorageData( id_prefix_defect );
        temporaryDataArrayMeasurePoint = (temporaryDataArrayMeasurePoint) ? temporaryDataArrayMeasurePoint : new Array();
        temporaryDataArrayDefectCategory = (temporaryDataArrayDefectCategory) ? temporaryDataArrayDefectCategory : new Array();
        temporaryDataArrayDefect = (temporaryDataArrayDefect) ? temporaryDataArrayDefect : new Array();
        if( (!Array.isArray(temporaryDataArrayMeasurePoint)) ){
            temporaryDataArrayMeasurePoint = new Array();
        }
        if( (!Array.isArray(temporaryDataArrayDefectCategory)) ){
            temporaryDataArrayDefectCategory = new Array();
        }
        if( (!Array.isArray(temporaryDataArrayDefect)) ){
            temporaryDataArrayDefect = new Array();
        }
        */
        id_nav_link_3_3.on('shown.bs.tab', function (e) {
            //console.log(e.target); // newly activated tab
            //console.log(e.relatedTarget); // previous active tab
            var ajaxRequest_ = window.ajaxRequest_Defect;
            if( (ajaxRequest_) ){
                ajaxRequest_();
            }
        });
        
        button_id_1_2_3_1_1.off("click").on("click", function(event){
            event.preventDefault();
            //event.stopPropagation();
            id_nav_link_3_2.tab("show");
        });
        
        button_id_1_2_3_2_1.off("click").on("click", function(event){
            event.preventDefault();
            //event.stopPropagation();
            id_nav_link_3_3.tab("show");
        });
        
        button_id_1_2_3_3_1.off("click").on("click", function(event){
            event.preventDefault();
            //event.stopPropagation();
            //id_nav_link_3_1.tab("show");
            var id_temp = null;
            var id_defect_id_prefix = "defect_id_array";
            var id_measure_point_id_prefix = "measure_point_id_array";
            var id_tr_prefix = "tr";
            var tableId_1_tbody = $("#tableId_1_tbody");
            var measure_point_id_value = null;
            var defect_category_id_value = null;
            var defect_id_value = null;
            
            var form_hidden_input_group_0 = $("#form1_hidden_input_group");
            var count_defect = $("#count_defect");
            var count_defect_temp = $("#count_defect_temp");
            
            try{
                button_id_1_2_3_3_1.attr("disabled", true);
                temporaryDataArrayMeasurePoint = $(document).getMyStorageData( id_prefix_measure_point );
                temporaryDataArrayDefectCategory = $(document).getMyStorageData( id_prefix_defect_category );
                temporaryDataArrayDefect = $(document).getMyStorageData( id_prefix_defect );
                temporaryDataArrayMeasurePoint = (temporaryDataArrayMeasurePoint) ? temporaryDataArrayMeasurePoint : new Array();
                temporaryDataArrayDefectCategory = (temporaryDataArrayDefectCategory) ? temporaryDataArrayDefectCategory : new Array();
                temporaryDataArrayDefect = (temporaryDataArrayDefect) ? temporaryDataArrayDefect : new Array();
                if( (!Array.isArray(temporaryDataArrayMeasurePoint)) ){
                    temporaryDataArrayMeasurePoint = new Array();
                }
                if( (!Array.isArray(temporaryDataArrayDefectCategory)) ){
                    temporaryDataArrayDefectCategory = new Array();
                }
                if( (!Array.isArray(temporaryDataArrayDefect)) ){
                    temporaryDataArrayDefect = new Array();
                }
                /*
                measure_point_id_value = $.makeArray( measure_point_id_value );
                defect_category_id_value = $.makeArray( defect_category_id_value );
                defect_id_value = $.makeArray( defect_id_value );
                */
                measure_point_id_value = temporaryDataArrayMeasurePoint.shift();
                defect_category_id_value = temporaryDataArrayDefectCategory;
                defect_id_value = temporaryDataArrayDefect;
                
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
                        form_hidden_input_group_0.append(input_temp);
                        
                        var input_temp = $("<input/>");
                        input_temp.attr("id", (id_measure_point_id_prefix + id_temp));
                        input_temp.attr("name", (id_measure_point_id_prefix + "[]"));
                        input_temp.attr("value", (measure_point_id_value));
                        input_temp.attr("required", ("required"));
                        input_temp.attr("readonly", ("readonly"));
                        input_temp.addClass( id_measure_point_id_prefix );
                        form_hidden_input_group_0.append(input_temp);
                        //input_temp = null;
                        var tr_temp = $("<tr></tr>");
                        var td_temp = $("<td></td>");
                        
                        var measure_point_id_data_temp = form_hidden_input_group_2_measure_point.data("element_data");
                        var defect_category_id_data_temp = form_hidden_input_group_2_defect_category.data("element_data");
                        var defect_id_data_temp = form_hidden_input_group_2_defect.data("element_data");
                        
                        measure_point_id_data_temp = $.makeArray(measure_point_id_data_temp);
                        defect_category_id_data_temp = $.makeArray(defect_category_id_data_temp);
                        defect_id_data_temp = $.makeArray(defect_id_data_temp);
                        
                        $.each(measure_point_id_data_temp, function( k, v ){
                            //console.log(k);
                            //console.log(v);
                            if( ((measure_point_id_value.localeCompare(v.id)) == 0) ){
                                td_temp = $("<td></td>");
                                td_temp.html(v.name);
                                tr_temp.append(td_temp);
                            }
                        });
                        $.each(defect_id_data_temp, function( k, v ){
                            //console.log(k);
                            //console.log(v);
                            if( ((value.localeCompare(v.id)) == 0) ){
                                td_temp = $("<td></td>");
                                if( (v) ){
                                    var data = v;
                                    if( (data.defect_category) ){
                                        var defect_category = data.defect_category;
                                        td_temp.html(defect_category.name);
                                    }
                                }
                                tr_temp.append(td_temp);
                                
                                td_temp = $("<td></td>");
                                td_temp.html(v.name);
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
                            form_hidden_input_group_0.find( ("#" + id_defect_id_prefix + control_input_id) ).remove();
                            form_hidden_input_group_0.find( ("#" + id_measure_point_id_prefix + control_input_id) ).remove();
                            parent_tr.remove();
                            
                            var count_defect_value = form_hidden_input_group_0.find( ("." + id_defect_id_prefix) ).length;
                            count_defect.val(function(index, currentvalue){
                                return count_defect_value;
                            });
                            console.log(count_defect_value);
                            count_defect_temp.text( count_defect_value );
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
                   
                    form_hidden_input_group_2_measure_point.empty();
                    form_hidden_input_group_2_defect_category.empty();
                    form_hidden_input_group_2_defect.empty();
                   
                    var ajaxRequest_ = window.ajaxRequest_MeasurePoint;
                    if( (ajaxRequest_) ){
                        ajaxRequest_();
                    }
                    var ajaxRequest_ = window.ajaxRequest_DefectCategory;
                    if( (ajaxRequest_) ){
                        ajaxRequest_();
                    }
                    var ajaxRequest_ = window.ajaxRequest_Defect;
                    if( (ajaxRequest_) ){
                        ajaxRequest_();
                    }
                }

                var count_defect_value = form_hidden_input_group_0.find( ("." + id_defect_id_prefix) ).length;
                count_defect.val(function(index, currentvalue){
                    return count_defect_value;
                });
                count_defect_temp.text( count_defect_value );
                
                $(document).removeMyStorageData( id_prefix_measure_point );
                $(document).removeMyStorageData( id_prefix_defect_category );
                $(document).removeMyStorageData( id_prefix_defect );
                myStorageObject.clear();
                id_nav_link_3_1.tab("show");
            }catch(error){
                //console.log("error");
                console.log(error);
            }finally{
                //console.log("finally");
                button_id_1_2_3_3_1.attr("disabled", false);
            }
        });
        
        button_id_1_3_0_0_1.off("click").on("click", function(event){
            event.preventDefault();
            //event.stopPropagation();
            //button_id_1_2_3_3_1.trigger("click");
            /*
            temporaryDataArrayMeasurePoint = $(document).getMyStorageData( id_prefix_measure_point );
            temporaryDataArrayDefectCategory = $(document).getMyStorageData( id_prefix_defect_category );
            temporaryDataArrayDefect = $(document).getMyStorageData( id_prefix_defect );
            temporaryDataArrayMeasurePoint = (temporaryDataArrayMeasurePoint) ? temporaryDataArrayMeasurePoint : new Array();
            temporaryDataArrayDefectCategory = (temporaryDataArrayDefectCategory) ? temporaryDataArrayDefectCategory : new Array();
            temporaryDataArrayDefect = (temporaryDataArrayDefect) ? temporaryDataArrayDefect : new Array();
            if( (!Array.isArray(temporaryDataArrayMeasurePoint)) ){
                temporaryDataArrayMeasurePoint = new Array();
            }
            if( (!Array.isArray(temporaryDataArrayDefectCategory)) ){
                temporaryDataArrayDefectCategory = new Array();
            }
            if( (!Array.isArray(temporaryDataArrayDefect)) ){
                temporaryDataArrayDefect = new Array();
            }
            */
            $(document).removeMyStorageData( id_prefix_measure_point );
            $(document).removeMyStorageData( id_prefix_defect_category );
            $(document).removeMyStorageData( id_prefix_defect );
            myStorageObject.clear();
        });
    });
</script>
@endpush
<!-- ======================================================================================== -->