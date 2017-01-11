@extends('layouts.layout')
@section('content')

    <!-- menu profile quick info -->
    @include('layouts.profile-quick-info')
    <!-- menu profile quick info -->

    <!-- sidebar menu -->
    @include('layouts.sidebar-menu')
    <!-- sidebar menu -->

    <!-- /menu footer buttons -->
    @include('layouts.footer-button')
    <!-- /menu footer buttons -->

    <!-- top navigation -->
    @include('layouts.top-navigation')
    <!-- top navigation -->

    <!-- page content -->
    @include('layouts.pane-content')
    <!-- page content -->

    <!-- footer content -->
    @include('layouts.footer-content')
    <!-- footer content -->

@endsection