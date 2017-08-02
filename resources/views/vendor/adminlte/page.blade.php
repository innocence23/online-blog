@extends('adminlte::master')
@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('/vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">

    <!-- other -->
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/sweetalert/dist/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/angular-chosen-1.5.1/dist/chosen.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/kartik-v-bootstrap-fileinput/css/fileinput.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/layer-v3.0.3/layer/skin/default/layer.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/plugins/lightbox2/dist/css/lightbox.min.css') }}" />

    <style>
        div.chosen-container{
            width: 100% !important;
        }
        .chosen-container-single .chosen-single {
            height: 32px !important;
            border-radius: 3px !important;
            line-height: 32px !important;
        }
        .sidebar {
            padding-bottom: 0 !important;
        }
    </style>
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-fw fa-user"></i> {{ auth('admin')->user()->name }}
                            </a>
                        </li>

                        <li>
                            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                </a>
                            @else
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                </a>
                                <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                    @if(config('adminlte.logout_method'))
                                        {{ method_field(config('adminlte.logout_method')) }}
                                    @endif
                                    {{ csrf_field() }}
                                </form>
                            @endif
                        </li>
                    </ul>
                </div>
                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('/vendor/adminlte/dist/js/app.min.js') }}"></script>
    {{--1.4-angular.min.js--}}
    <script src="{{ asset('/vendor/plugins/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/bootstrap-table/dist/locale/bootstrap-table-zh-CN.js') }}" type="text/javascript"></script>

    <script src="{{ asset('/vendor/plugins/sweetalert/dist/sweetalert.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/angular-chosen-1.5.1/dist/chosen.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/angular-chosen-1.5.1/dist/angular-chosen.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/kartik-v-bootstrap-fileinput/js/fileinput.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/kartik-v-bootstrap-fileinput/js/locales/zh.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/plugins/lightbox2/dist/js/lightbox.min.js') }}" type="text/javascript"></script>

    {{--bootstrap angular--}}
    <script src="{{ asset('/vendor/plugins/bootstrap-table/dist/extensions/angular/bootstrap-table-angular.js') }}" type="text/javascript"></script>
    {{--//bootstrap angular 不能使用情况处理的自定义标签--}}
    <script src="{{ asset('/vendor/plugins/bootstrap-table-angular-custom.js') }}" type="text/javascript"></script>

    <script src="{{ asset('/vendor/plugins/layer-v3.0.3/layer/layer.js') }}" type="text/javascript"></script>

    @stack('js')
    @yield('js')
@stop
