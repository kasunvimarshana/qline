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
                                                <a id="id_nav_link_2" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_rqc') !!}" role="tab" aria-controls="id_tab_content_2" aria-selected="false">
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
                                                <a id="id_nav_link_6" class="nav-link m-1 btn btn-outline-danger active" data-toggle="false" href="{!! url('quality_stage_cni') !!}" role="tab" aria-controls="id_tab_content_6" aria-selected="true">
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
                                            <div id="id_tab_content_6" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_6"><br>
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
                                                                <div class="col col-sm-12 row p-0 m-0">
                                                                    <!-- -->
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="customer" class="col col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Buyer / Customer</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <select class="form-control form-control-md select2" id="customer" name="customer" value="{{ old('customer') }}" data-placeholder="Buyer / Customer" style="width: 100%;" required>

                                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                                <option>Customer {{ $i }}</option>
                                                                                <!-- @endfor -->

                                                                            </select>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->

                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="style" class="col col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Style</label>
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
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="po_no" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">PO No</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="po_no" name="po_no" placeholder="PO No" value="{{ old('po_no') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- hr-devider -->
                                                                    <div class="row clearfix no-gutters w-100 m-0">
                                                                        <hr class="mx-auto w-100 border-top border-danger" size="3" width="100%"/>
                                                                    </div>
                                                                    <!-- hr-devider -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="colour" class="col col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Colour</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <select class="form-control form-control-md select2" id="colour" name="colour" value="{{ old('colour') }}" data-placeholder="Colour" style="width: 100%;" required>

                                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                                <option>Colour {{ $i }}</option>
                                                                                <!-- @endfor -->

                                                                            </select>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="total_p_c_s" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Total PCs</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="total_p_c_s" name="total_p_c_s" placeholder="Total PCs" value="{{ old('total_p_c_s') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="total_carton" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Total Carton</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="total_carton" name="total_carton" placeholder="Total Carton" value="{{ old('total_carton') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="check_carton" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Check Carton</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="check_carton" name="check_carton" placeholder="Check Carton" value="{{ old('check_carton') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="check_p_c_s" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Check PCs</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="check_p_c_s" name="check_p_c_s" placeholder="Check PCs" value="{{ old('check_p_c_s') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="defect_carton_no" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Defect Carton No</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="defect_carton_no" name="defect_carton_no" placeholder="Defect Carton No" value="{{ old('defect_carton_no') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-4 m-0">
                                                                        <label for="defect_p_c_s" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Defect PCs</label>
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <input type="text" class="form-control form-control-md" id="defect_p_c_s" name="defect_p_c_s" placeholder="Defect PCs" value="{{ old('defect_p_c_s') }}" required/>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
                                                                    <!-- form-group -->
                                                                    <div class="form-group row col-sm-12">
                                                                        <!-- label for="input_id" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Label</label -->
                                                                        <div class="col">
                                                                            <!-- p class="form-control-static"></p -->
                                                                            <textarea type="text" class="form-control form-control-md" id="description" name="description" placeholder="Reason" value="{{ old('description') }}" rows="5" required></textarea>
                                                                        </div>
                                                                        <!-- span id="form-control" class="help-block"></span -->
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                    
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