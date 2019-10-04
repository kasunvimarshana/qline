<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="h-100">
<head>
    <title>{{ config('app.name', 'Title') }}</title>
    <!-- main meta data -->
    @section('section_main_meta')
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- Tell the browser to be responsive to screen width -->
        <!-- meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/ -->
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" id="meta-viewport"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @show
    <!-- ./main meta data -->
    <!-- meta data stack -->
    @stack('stack_meta')
    <!-- /.meta data stack -->
    <!-- style sheet -->
    @section('section_stylesheet')
        @includeIf('partials.main_stylesheet', array())
    @show
    <!-- /.style sheet -->
    <!-- script -->
    @section('section_script_main')
        @includeIf('partials.main_script', array())
    @show
    <!-- /.script -->
    
    <!-- style sheet -->
    @section('section_stylesheet_optional')
        @includeIf('partials.optional_stylesheet', array())
        <style>
            .card-shadow-1{
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
        </style>
    @show
    <!-- /.style sheet -->
    <!-- script -->
    @section('section_script_optional')
        @includeIf('partials.optional_script', array())
        <script>
            function updateClock(){
                var span_time = $('#span_time');
                var span_date = $('#span_date');
                var momentObject = moment();
                //var momentObjectClone = momentObject.clone();
                var span_time_value = momentObject.clone().format("DD-MMM-YYYY");
                var span_date_value = momentObject.clone().format("hh:mm A");

                span_time.text( span_time_value );
                span_date.text( span_date_value );
                // call this function again in 1000ms
                setTimeout(updateClock, 1000);
            }
            $(function(){
                "use strict";

                updateClock(); // initial call
            });
        </script>
    @show
    <!-- /.script -->
    
    <!-- style stack -->
    @stack('stack_style')
    <!-- /.style stack -->
    <!-- script stack -->
    @stack('stack_script')
    <!-- /.script stack --> 
</head>
<body class="hold-transition h-100 bg-light bg-gradient-light">
<!-- wrapper -->
<div class="wrapper container-fluid h-100 d-flex flex-column p-0 m-0">
    
<!-- Main Header -->
@section('main_header')
    @includeIf('partials.main_header_1', array())
@show
<!-- /.Main Header -->

<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break -->
 
<!-- section -->
<div class="row wrapper flex-fill p-0 m-0">
    
    @section('content_wrapper')
    <!-- container -->
    <div class="col bg-light bg-gradient-light">
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content container-fluid" id="container_fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @section('contant')
        <!-- row -->
        <div class="row pb-4">
            <!-- col -->
            <div class="col col-sm-12 p-0 m-0">
                <!-- log -->
                <div class="container pt-5">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-6 col-md-6">
                            <!-- card-group -->
                            <div class="card-group">
                                
                                <div class="card border-info text-center card-shadow-1">
                                    <div class="card-header">
                                        Sign in to continue
                                    </div>
                                    <div class="card-body">
                                        
                                        <!-- row -->
                                        <div class="row justify-content-center align-self-center align-items-cente">

                                            <!-- col -->
                                            <div class="col col-sm-12 p-0 m-0">
                                                <!-- form -->
                                                <form action="{!! route('login.doLogin', []) !!}" method="POST" class="col col-sm-12" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                    @csrf
                                                    <!-- form-group-row -->
                                                    <div class="row">
                                                        <!-- -->
                                                        <!-- form-group -->
                                                        <div class="form-group row col-sm-12">
                                                            <label for="code" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">User ID</label>
                                                            <div class="col">
                                                                <!-- p class="form-control-static"></p -->
                                                                <input type="text" class="form-control form-control-md" id="code" name="code" placeholder="User ID" value="{{ old('code') }}" required/>
                                                            </div>
                                                            <!-- span id="form-control" class="help-block"></span -->
                                                        </div>
                                                        <!-- /.form-group -->

                                                        <!-- form-group -->
                                                        <div class="form-group row col-sm-12">
                                                            <label for="password" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Password</label>
                                                            <div class="col">
                                                                <!-- p class="form-control-static"></p -->
                                                                <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required/>
                                                            </div>
                                                            <!-- span id="form-control" class="help-block"></span -->
                                                        </div>
                                                        <!-- /.form-group -->

                                                        <!-- form-group -->
                                                        <div class="form-group row col-sm-12">
                                                            <!-- btn-toolbar -->
                                                            <div class="col">
                                                                <!-- div class="btn-group btn-group-lg pull-right" -->
                                                                    <div class="text-right mb-3">
                                                                        <button type="submit" class="btn btn-danger float-right pull-right ml-auto" id="submit">Login</button>
                                                                    </div>               
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
                            <!-- /.card-group -->
                        </div>
                    </div>
                </div>
                <!-- /.log -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        @show    
        <!--------------------------
        | Your Page Content Here |
        -------------------------->

        </section>
        <!-- /.Main content -->
        </div>
        <!-- /.Content Wrapper. Contains page content -->
        
    </div>
    <!-- /.container -->
    @show
    
</div>
<!-- /.section -->
    
<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break -->
    
<!-- Main Footer -->
@section('main_footer')
    @includeIf('partials.main_footer_1', array())
@show
<!-- /.Main Footer -->
    
</div>
<!-- /.wrapper -->
</body>
</html>
