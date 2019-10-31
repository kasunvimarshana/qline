@extends('layouts.home_layout_1')

@section('section_stylesheet_optional')
    @parent
@endsection

@section('section_script_optional')
    @parent
@endsection

@section('contant')
<!-- row -->
<div class="row pb-4 h-100">
    <!-- col -->
    <div class="col col-sm-12 p-0 m-0">

        <!-- body -->
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="mx-auto text-center bg-transparent">
                    <a class="text-decoration-none text-dark align-baseline" href="{!! route('login.showLogin', []) !!}" style="font-family: HussarBoldWeb;">
                        <span class="align-baseline text-info" style="font-size: 5.5rem; font-weight: bold;"> Q </span>
                        <span class="align-baseline" style="font-size: 5.5rem; font-weight: bold;"> | </span>
                        <span class="align-baseline" style="font-size: 5.5rem; font-weight: bold;"> OMS </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.body -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@section('section_script_document')
    @parent
@endsection
