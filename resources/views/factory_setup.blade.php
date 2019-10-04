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
                            <span class="text-decoration-none text-justify small"> Stup ( Factory )</span>
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
                                            <!-- -->
                                            <!-- container -->
                                            <div class="container mt-3 mb-3">
                                                <h2 class="text-danger">SBU / Factory Setup</h2>
                                                <!-- p> - </p -->
                                            </div>
                                            <!-- /.container -->
                                            <!-- form-group-col -->
                                            <div class="col col-sm-8 p-0 m-0">
                                                <!-- -->
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12">
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
                                                <div class="form-group row col-sm-12">
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
                                                <h2 class="text-danger">AQL Standard</h2>
                                                <!-- p> - </p -->
                                            </div>
                                            <!-- /.container -->
                                            <!-- form-group-col -->
                                            <div class="col col-sm-8 p-0 m-0">
                                                <!-- -->
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12">
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
                                                
                                                <!-- form-group -->
                                                <div class="form-group row col-sm-12">
                                                    <label for="rqc_level" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">RQC Level</label>
                                                    <div class="col">
                                                        <!-- p class="form-control-static"></p -->
                                                        <select class="form-control form-control-md select2" id="rqc_level" name="rqc_level" value="{{ old('rqc_level') }}" data-placeholder="RQC Level" style="width: 100%;" required>

                                                            <!-- @for($i =1; $i <= 5; $i++) -->
                                                            <option>RQC Level {{ $i }}</option>
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