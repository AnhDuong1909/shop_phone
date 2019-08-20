
{{-- check cookie(checkAdim) if it's exist => login to admin page. else => login page --}}
@if(Request::cookie('checkAdmin'))

            <html style="height: auto; min-height: 100%;"><head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>AdminLTE 2 | Starter</title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
                <!-- Ionicons -->
                <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
                <!-- Theme style -->
                <link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
                <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                    page. However, you can choose any other skin. Make sure you
                    apply the skin class to the body tag so the changes take effect. -->
                <link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/skin-blue.min.css')}}">

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

                <!-- Google Font -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
                {{-- ---------------------------------------------------------------------------------------- --}}
                <style>
                .product_column1{
                    display: inline-block;
                    width: 120px;
                    font-weight: 700;
                    line-height: 10px;
                }
                .product_column2{
                    display: inline-block;
                }

                .product_column1 , .product_column2{
                    font-size: 15px;
                }

                .delete_form{
                    display: inline-block;
                }
                .abc{
                    display: inline-block;
                    width:400px;
                }
                </style>
                {{-- ---------------------------------------------------------------------------------------- --}}
            </head>
            <!--
            BODY TAG OPTIONS:
            =================
            Apply one or more of the following classes to get the
            desired effect
            |---------------------------------------------------------|
            | SKINS         | skin-blue                               |
            |               | skin-black                              |
            |               | skin-purple                             |
            |               | skin-yellow                             |
            |               | skin-red                                |
            |               | skin-green                              |
            |---------------------------------------------------------|
            |LAYOUT OPTIONS | fixed                                   |
            |               | layout-boxed                            |
            |               | layout-top-nav                          |
            |               | sidebar-collapse                        |
            |               | sidebar-mini                            |
            |---------------------------------------------------------|
            -->
            <body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
            <div class="wrapper" style="height: auto; min-height: 100%;">

                <!-- Main Header -->
                <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->

                </nav>

                </header>
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->

                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu tree" data-widget="tree">
                    <li class="header" >HEADER</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class=""><a href="{{ route('users.index') }}"><i class="fa fa-link"></i> <span>Users</span></a></li>
                    <li class=""><a href="{{ route('customer.index') }}"><i class="fa fa-link"></i> <span>Customer</span></a></li>
                    <li class=""><a href="{{ route('products.index') }}"><i class="fa fa-link"></i> <span>Product</span></a></li>
                    <li class=""><a href="{{ route('productsType.index') }}"><i class="fa fa-link"></i> <span>Products Type</span></a></li>
                    <li class=""><a href="{{ route('bills.index') }}"><i class="fa fa-link"></i> <span>Bills</span></a></li>
                    <li class=""><a href="{{ url('admin/news') }}"><i class="fa fa-link"></i> <span>news</span></a></li>
                    <li class=""><a href="{{ route('slides.index') }}"><i class="fa fa-link"></i> <span>Slides</span></a></li>
                        <br><br><br>
                    <li class=""><a href="{{ url('index') }}"><i class="fa fa-link"></i> <span>Trang chủ</span></a></li>
                    <br><br><br><br><br>
                    <li  class=""><a href="{{ route('deleteCookie_checkAdmin') }}" ><i class="fa fa-link"></i> <span >Logout</span></a></li>
                </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
                </aside>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper" style="min-height: 571px;">
                <!-- Content Header (Page header) -->

                <!-- Main content -->
                <section class="content container-fluid">

                    <!--------------------------| Your Page Content Here |--------------------------------------------------------------------------------------------------------------------------------->
                        @section('content')

                        @show



                    <!--------------------------| Your Page Content end |--------------------------------------------------------------------------------------------------------------------------------->

                </section>
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                <!-- Main Footer -->
                <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="pull-right-container">
                                <span class="label label-danger pull-right">70%</span>
                                </span>
                            </h4>

                            <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked="">
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                </aside>
                <!-- /.control-sidebar -->
                <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
                <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED JS SCRIPTS -->

            <!-- jQuery 3 -->
            <script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

            <!-- Optionally, you can add Slimscroll and FastClick plugins.
                Both of these plugins are recommended to enhance the
                user experience. -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            </body></html>
@else
  <script>window.location = "http://localhost:8080/shop_phone/public/login";</script>
@endif
