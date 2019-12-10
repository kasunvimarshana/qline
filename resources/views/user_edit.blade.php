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
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="code" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">EMP No</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-lg" id="code" name="code" placeholder="EMP No" value="{{ old('code') }}" autocomplete="off" required="required"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="email" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">E-Mail</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" autocomplete="off" required="required"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="name_first" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">First Name</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-lg" id="name_first" name="name_first" placeholder="First Name" value="{{ old('name_first') }}" autocomplete="off" required="required"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="name_last" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Surname</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-lg" id="name_last" name="name_last" placeholder="Surname" value="{{ old('name_last') }}" autocomplete="off" required="required"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="password" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Password</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" value="{{ old('password') }}" autocomplete="off" required="required"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="is_token_authentication" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Two Way Authentication</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="checkbox" class="form-control form-control-lg form-check-input" id="is_token_authentication" name="is_token_authentication" value="is_token_authentication" autocomplete="off" data-toggle="toggle" data-size="md" data-onstyle="primary" data-offstyle="light" data-on="<i class='fas fa-toggle-on'></i>" data-off="<i class='fas fa-toggle-off'></i>"/>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="company_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Company</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-lg select2" id="company_id" name="company_id" value="{{ old('company_id') }}" autocomplete="off" data-placeholder="Company" style="width: 100%;" required="required" data-minimum-results-for-search="Infinity">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="strategic_business_unit_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">SBU</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-lg select2" id="strategic_business_unit_id" name="strategic_business_unit_id" value="{{ old('strategic_business_unit_id') }}" autocomplete="off" data-placeholder="SBU" style="width: 100%;" required="required" data-minimum-results-for-search="Infinity">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="factory_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Factory</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-lg select2" id="factory_id" name="factory_id" value="{{ old('factory_id') }}" autocomplete="off" data-placeholder="Factory" style="width: 100%;" required="required" data-minimum-results-for-search="Infinity">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="department_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Department</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-lg select2" id="department_id" name="department_id" value="{{ old('department_id') }}" autocomplete="off" data-placeholder="Department" style="width: 100%;" required="required" data-minimum-results-for-search="Infinity">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="section_id" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Section</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group h-100">
                                                            <select class="form-control form-control-lg select2" id="section_id" name="section_id" value="{{ old('section_id') }}" autocomplete="off" data-placeholder="Section" style="width: 100%;" required="required" data-minimum-results-for-search="Infinity">
                                                                <!-- option> Option </option -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group form-group-lg row col-sm-12 m-1">
                                                    <label for="phone_mobile" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">Mobile</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <input type="text" class="form-control form-control-lg" id="phone_mobile" name="phone_mobile" placeholder="Mobile" value="{{ old('phone_mobile') }}" autocomplete="off" required="required"/>
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
                                                <div class="form-group form-group-lg row col-sm-12 m-1 p-0">
                                                    <label for="image_uri" class="col-lg-3 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left d-none">File</label>
                                                    <div class="col kv-avatar">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="col p-0 m-0 file-loading">
                                                            <!-- class="file" -->
                                                            <input type="file" multiple="false" class="form-control form-control-lg" id="image_uri" name="image_uri" value="{{ old('image_uri') }}" autocomplete="off" data-preview-file-type="text"/>
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
                                        <div class="row mt-3">
                                            <!-- -->
                                            <!-- form-group -->
                                            <div class="form-group form-group-lg row col-sm-12">
                                                <!-- btn-toolbar -->
                                                <div class="col text-center">
                                                    <!-- div class="btn-group btn-group-lg pull-right" -->
                                                        <button type="submit" class="btn btn-primary ml-auto px-5" id="submit">SUBMIT</button>
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
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="permission_1" name="permission_1" value="permission_1" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="permission_1">Service Admin</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-quality_record_cutting" name="create-quality_record_cutting" value="create-quality_record_cutting" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_cutting">Cutting</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="create-quality_record_sewing_check" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-quality_record_sewing_check" name="create-quality_record_sewing_check" value="create-quality_record_sewing_check" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_sewing_check">Sewing 100% Checking</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="permission_4" name="permission_4" value="permission_4" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="permission_4">Finishing AQL Audit</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="create-quality_record_sewing_audit" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-quality_record_sewing_audit" name="create-quality_record_sewing_audit" value="create-quality_record_sewing_audit" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_sewing_audit">Sewing AQL Audit</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="permission_6" name="permission_6" value="permission_6" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="permission_6">Dry Room 100% Checking</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="create-quality_record_finishing" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-quality_record_finishing" name="create-quality_record_finishing" value="create-quality_record_finishing" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_finishing">Finishing 100% Checking</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="create-quality_record_c_n_i" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-quality_record_c_n_i" name="create-quality_record_c_n_i" value="create-quality_record_c_n_i" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_c_n_i">CTN Audit</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="create-quality_record_r_q_c" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-quality_record_r_q_c" name="create-quality_record_r_q_c" value="create-quality_record_r_q_c" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-quality_record_r_q_c">RQC</label>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->
                                            
                                            <!-- form-group -->
                                            <div class="form-group form-group-lg col col-md-6">
                                                <label for="create-user-monitor" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right d-none">Label</label>
                                                <div class="col custom-control custom-switch form-check">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="checkbox" class="form-control form-control-lg custom-control-input form-check-input" id="create-user-monitor" name="create-user-monitor" value="create-user-monitor" autocomplete="off"/>
                                                    <label class="custom-control-label form-check-label" for="create-user-monitor">Monitor User</label>
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
                                           <!-- @if( (isset($userObjectArray)) ) -->
                                           <!-- @foreach($userObjectArray as $key_temp_user => $value_temp_user) -->
                                           <!-- tr -->
                                            <tr>
                                                <th scope="row"># {{ $value_temp_user->code }}</th>
                                                <td>{{ $value_temp_user->name_first }}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown" tabindex="-1">
                                                        <div class="btn-group" role="group">
                                                            <!-- button type="button" role="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split">Action</button -->
                                                            <button id="btnGroupDrop_1_{{ $key_temp_user }}" type="button" role="button" class="btn btn-outline-primary" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-cogs fa-fw" aria-hidden="true"></i>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu text-wrap text-break bg-light border-light" aria-labelledby="btnGroupDrop_1_{{ $key_temp_user }}">
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
                                           <!-- @endforeach -->
                                           <!-- @endif -->
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