<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
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
    @show
    <!-- /.style sheet -->
    <!-- script -->
    @section('section_script_optional')
        @includeIf('partials.optional_script', array())
    @show
    <!-- /.script -->
    
    <!-- style stack -->
    @stack('stack_style')
    <!-- /.style stack -->
</head>
<body class="hold-transition h-100 bg-light bg-gradient-light">
<!-- wrapper -->
<div class="wrapper container-fluid h-100 d-flex flex-column p-0 m-0">
    
<!-- Main Header -->
@section('main_header')
    @includeIf('partials.main_header', array())
@show
<!-- /.Main Header -->
    

    
<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break --> 
 
<!-- section -->
<div class="row wrapper flex-fill p-0 m-0">
    
    <!-- Left side column. contains the logo and sidebar -->
    @section('left_side_column')
        @includeIf('partials.left_side_column', array())
    @show
    <!-- /.Left side column. contains the logo and sidebar -->
    
    @section('content_wrapper')
    <!-- Right side column -->
    <div class="col bg-light bg-gradient-light p-0 m-0">
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content container-fluid" id="container_fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        
        <!-- row -->
        <!-- div class="row" -->
            <!-- col -->
            <!-- div class="col col-sm-12 p-0 m-0" -->
                
            @yield('contant')
                
            <!-- /div -->
            <!-- /.col -->
        <!-- /div -->
        <!-- /.row -->
            
        <!--------------------------
        | Your Page Content Here |
        -------------------------->

        </section>
        <!-- /.Main content -->
        </div>
        <!-- /.Content Wrapper. Contains page content -->
        
    </div>
    <!-- /.Right side column -->
    @show
    
</div>
<!-- /.section -->
    
<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break --> 

<!-- Main Footer -->
@section('main_footer')
    @includeIf('partials.main_footer', array())
@show
<!-- /.Main Footer -->
      
</div>
<!-- /.wrapper -->
<!-- document script --> 
@section('section_script_document')
@show
<!-- /.document script -->    
<!-- script stack -->
@stack('stack_script')
<!-- /.script stack -->  
</body>
</html>