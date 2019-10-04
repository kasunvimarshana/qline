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
                            <span class="text-decoration-none text-justify small"> Stup ( Line )</span>
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
                                    <form action="{!! route('home') !!}" method="POST" class="col col-sm-12" autocomplete="off" id="form1" enctype="multipart/form-data">
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
                                                    <label for="sys_date" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">System Date</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <div class="input-group date">
                                                            <div class="input-group-addon input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar" id="id_input_addon"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control form-control-md" id="sys_date" name="sys_date" placeholder="System Date" value="{{ old('sys_date') }}" aria-label="Date" aria-describedby="id_input_addon" required/>
                                                        </div>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="company" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Company</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="company" name="company" value="{{ old('company') }}" data-placeholder="Company" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Company {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->

                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="factory" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Factory</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="factory" name="factory" value="{{ old('factory') }}" data-placeholder="Factory" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Factory {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="line" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Line</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="line" name="line" value="{{ old('line') }}" data-placeholder="Line" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Line {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
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
                                        <div class="row col border border-danger rounded shadow-sm pr-5 m-1">
                                            <!-- -->
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
                                                    <label for="customer" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Customer</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="customer" name="customer" value="{{ old('customer') }}" data-placeholder="Customer" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Customer {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="style" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Style</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="style" name="style" value="{{ old('style') }}" data-placeholder="Style" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Style {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="export" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Export</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="export" name="export" value="{{ old('export') }}" data-placeholder="Export" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Export {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
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
                                        <div class="row col border border-danger rounded shadow-sm pr-5 m-1">
                                            <!-- -->
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
                                                    <label for="inspection_stage" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Inspection Stage</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="inspection_stage" name="inspection_stage" value="{{ old('inspection_stage') }}" data-placeholder="Inspection Stage" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>Inspection Stage {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
                                                    </div>
                                                    <!-- span id="form-control" class="help-block"></span -->
                                                </div>
                                                <!-- /.form-group -->
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-6">
                                                    <label for="aql_level" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">AQL Level</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="aql_level" name="aql_level" value="{{ old('aql_level') }}" data-placeholder="AQL Level" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>AQL Level {{ $i }}</option>
                                                            <!-- @endfor -->

                                                        </select>
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