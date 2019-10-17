@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom_style_select2_1.css') !!}"/>
    <!-- file-input-override-style -->
    <!-- some CSS styling changes and overrides -->
    <style>
        .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
        }
        .kv-avatar {
            display: inline-block;
        }
        .kv-avatar .file-input {
            display: table-cell;
            width: 213px;
        }
        .kv-reqd {
            color: red;
            font-family: monospace;
            font-weight: normal;
        }
    </style>
    <!-- file-input-override-style -->
@endsection

@section('section_script_optional')
    @parent
    <script>
        $(document).ready(function(){
            "use strict";
            $('#tableId_1').DataTable();
            $.fn.select2.defaults.set( "theme", "bootstrap" );
            $('#company').select2();
            $('#factory').select2();
            $('#department').select2();
            $('#section').select2();
            //$.fn.fileinputThemes['fa'];

            try {
                var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
                'onclick="alert(\'Call your custom code here.\')">' +
                '<i class="glyphicon glyphicon-tag"></i>' +
                '</button>'; 
                $("#image_uri").fileinput({
                    //'theme': "fa",
                    'showUpload': false,
                    'showRemove': true,
                    'previewFileType': 'any',
                    'overwriteInitial': true,
                    'maxFileSize': 1500,
                    'showClose': false,
                    'showCaption': false,
                    'browseLabel': '',
                    'removeLabel': '',
                    'browseIcon': '<i class="glyphicon glyphicon-folder-open"></i>',
                    'removeIcon': '<i class="glyphicon glyphicon-remove"></i>',
                    'showBrowse': false,
                    'browseOnZoneClick': true,
                    'removeTitle': 'Cancel or reset changes',
                    'elErrorContainer': '#kv-avatar-errors-2',
                    'msgErrorClass': 'alert alert-block alert-danger',
                    'defaultPreviewContent': '<img src="{!! asset('img/avatar5.png') !!}" alt="Your Avatar"><h6 class="text-muted">Click to select</h6>',
                    //'layoutTemplates': {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
                    'layoutTemplates': {main2: '{preview} {remove} {browse}'},
                    'allowedFileExtensions': ["jpg", "png", "gif"]
                });
            }
            catch(e) {
                console.log("catch error");
            }
        }); 
    </script>
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
                            <span class="text-decoration-none text-justify small"> Create New ( User )</span>
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
                                    <form action="{!! route('user.store', []) !!}" method="POST" class="col col-sm-12" autocomplete="off" id="form1" enctype="multipart/form-data">
                                        @csrf
                                        <!-- form-group-row -->
                                        <div class="row">
                                            <!-- -->
                                            <!-- form-group-col -->
                                            <div class="col col-md-8">

                                                <!-- -->
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="code" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">EMP No</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-md" id="code" name="code" placeholder="EMP No" value="{{ old('code') }}" required/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="email" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">E-Mail</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-md" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="name_first" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">First Name</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-md" id="name_first" name="name_first" placeholder="First Name" value="{{ old('name_first') }}" required/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="name_last" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Surname</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-md" id="name_last" name="name_last" placeholder="Surname" value="{{ old('name_last') }}" required/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="password" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Password</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="company_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Company</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="company_id" name="company_id" value="{{ old('company_id') }}" data-placeholder="Company" style="width: 100%;" required="required">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="strategic_business_unit_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">SBU</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="strategic_business_unit_id" name="strategic_business_unit_id" value="{{ old('strategic_business_unit_id') }}" data-placeholder="SBU" style="width: 100%;" required="required">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="department_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Department</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="department_id" name="department_id" value="{{ old('department_id') }}" data-placeholder="Department" style="width: 100%;" required="required">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="section_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Section</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-md select2" id="section_id" name="section_id" value="{{ old('section_id') }}" data-placeholder="Section" style="width: 100%;" required="required">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
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

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1">
                                                    <label for="phone_mobile" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Mobile</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-md" id="phone_mobile" name="phone_mobile" placeholder="Mobile" value="{{ old('phone_mobile') }}" required="required"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                <!-- -->

                                            </div>
                                            <!-- /.form-group-col -->

                                            <!-- form-group-col -->
                                            <div class="col col-md-4">

                                                <!-- -->
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12 m-1 p-0">
                                                    <label for="image_uri" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">File</label>
                                                    <div class="col kv-avatar">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="col p-0 m-0 file-loading">
                                                            <!-- class="file" -->
                                                            <input type="file" multiple="false" class="form-control form-control-md" id="image_uri" name="image_uri" value="{{ old('image_uri') }}" data-preview-file-type="text"/>
                                                        </div>
                                                        <div class="col kv-avatar-hint d-none">
                                                            <small>hint</small>
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

                                        <!-- form-group-row -->
                                        <div class="row col border border-danger rounded shadow-sm">
                                            <!-- -->
                                            <!-- container -->
                                            <div class="container mt-3 mb-3">
                                                <h2 class="text-danger">Application Access Level</h2>
                                                <!-- p> - </p -->
                                            </div>
                                            <!-- /.container -->
                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="permission_1" name="permission_1" value="{{ old('permission_1') }}"/>
                                                    <label class="custom-control-label form-check-label" for="permission_1">Service Admin</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="create-quality_record_cutting" name="create-quality_record_cutting" value="create-quality_record_cutting"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_cutting">Cutting</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="create-quality_record_sewing_check" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="create-quality_record_sewing_check" name="create-quality_record_sewing_check" value="create-quality_record_sewing_check"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_sewing_check">Sewing 100% Checking</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="permission_4" name="permission_4" value="{{ old('permission_4') }}"/>
                                                    <label class="custom-control-label form-check-label" for="permission_4">Finishing AQL Audit</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="create-quality_record_sewing_audit" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="create-quality_record_sewing_audit" name="create-quality_record_sewing_audit" value="create-quality_record_sewing_audit"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_sewing_audit">Sewing AQL Audit</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="permission_6" name="permission_6" value="{{ old('permission_6') }}"/>
                                                    <label class="custom-control-label form-check-label" for="permission_6">Dry Room 100% Checking</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="create-quality_record_finishing" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="create-quality_record_finishing" name="create-quality_record_finishing" value="create-quality_record_finishing"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_finishing">Finishing 100% Checking</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="create-quality_record_c_n_i" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="create-quality_record_c_n_i" name="create-quality_record_c_n_i" value="create-quality_record_c_n_i"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_c_n_i">CTN Audit</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group col col-md-6">
                                                <label for="create-quality_record_r_q_c" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-md custom-control-input form-check-input" id="create-quality_record_r_q_c" name="create-quality_record_r_q_c" value="create-quality_record_r_q_c"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_r_q_c">RQC</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
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
                <div class="card bg-secondary border-light">
                    <div class="card-header" id="idCard_accordion_1_content_2">
                        <h5 class="mb-0">
                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2" role="button" type="button">
                            <i class="fab fa-buromobelexperte fa-fw"></i>
                            <span class="text-decoration-none text-justify small"> List</span>
                            </button>
                        </h5>
                    </div>

                    <div id="idCollapse_accordion_1_content_2" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2" data-parent="#idCollapse_accordion_1_content_2">
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
                                                <th scope="col">Name</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <!-- @for($i =1; $i <= 5; $i++) -->                 
                                           <!-- tr -->
                                           <tr>
                                                <th scope="row"># {{ $i }}</th>
                                                <td>Line {{ $i }}</td>
                                                <td>
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
    @includeIf('partials.script.select_company', array())
    @includeIf('partials.script.select_strategic_business_unit', array())
    @includeIf('partials.script.select_department', array())
    @includeIf('partials.script.select_section', array())
    @includeIf('partials.script.select_factory', array())
@endsection