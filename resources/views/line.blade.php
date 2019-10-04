@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
@endsection

@section('section_script_optional')
    @parent
    <script>
    $(document).ready(function(){
        $('#tableId_1').DataTable();
        $.fn.select2.defaults.set( "theme", "bootstrap" );
        $('#company').select2();
        $('#factory').select2();
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
                            <span class="text-decoration-none text-justify small"> Create New ( Line )</span>
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
                                    <form action="{!! route('home') !!}" method="POST" class="col col-sm-8" autocomplete="off" id="form1" enctype="multipart/form-data">
                                        @csrf
                                        <!-- form-group-row -->
                                        <div class="row">
                                            <!-- -->
                                            <!-- form-group -->
                                            <div class="form-group row col-sm-12 m-1">
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
                                            <div class="form-group row col-sm-12 m-1">
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
                                            <div class="form-group row col-sm-12 m-1">
                                                <label for="name" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Name</label>
                                                <div class="col">
                                                    <!-- p class="form-control-static"></p -->
                                                    <input type="text" class="form-control form-control-md" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required/>
                                                </div>
                                                <!-- span id="form-control" class="help-block"></span -->
                                            </div>
                                            <!-- /.form-group -->

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