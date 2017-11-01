<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <base href="/{{Request::segment(1)}}/">

        <link rel="shortcut icon" href="/modules/admin/images/favicon_1.ico">

        <title>Admin Dashboard</title>

        @yield('styleHead')

        <link href="/modules/admin/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="/modules/admin/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="/modules/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/modules/admin/css/core.css" rel="stylesheet" type="text/css">
        <link href="/modules/admin/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/modules/admin/css/components.css" rel="stylesheet" type="text/css">
        <link href="/modules/admin/css/pages.css" rel="stylesheet" type="text/css">
        <link href="/modules/admin/css/menu.css" rel="stylesheet" type="text/css">
        <link href="/modules/admin/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="/modules/admin/js/modernizr.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            @include('admin::layouts.topBar')
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin::layouts.leftSidebar')
            <!-- Left Sidebar End --> 

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Breadcrumb -->
                        @include ('admin::layouts.breadcrumb')

                        <!-- Content -->
                        @yield('content')
                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer text-right">
                   <p>Thank you for using our services.</p>
                   <p>Made with <span style="color: #e25555;">&hearts;</span> by <a href="https://viettechcorp.vn/" target="_blank">Viettech Solutions</a>.</p>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <!-- Right Sidebar -->
            @include('admin::layouts.rightSiderbar')
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="/modules/admin/js/jquery.min.js"></script>
        <script src="/modules/admin/js/bootstrap.min.js"></script>
        <script src="/modules/admin/js/detect.js"></script>
        <script src="/modules/admin/js/fastclick.js"></script>
        <script src="/modules/admin/js/jquery.slimscroll.js"></script>
        <script src="/modules/admin/js/jquery.blockUI.js"></script>
        <script src="/modules/admin/js/waves.js"></script>
        <script src="/modules/admin/js/wow.min.js"></script>
        <script src="/modules/admin/js/jquery.nicescroll.js"></script>
        <script src="/modules/admin/js/jquery.scrollTo.min.js"></script>
        <script src="/modules/admin/plugins/switchery/switchery.min.js"></script>
       
        @yield('srcScript')

        <!-- Custom main Js -->
        <script src="/modules/admin/js/jquery.core.js"></script>
        <script src="/modules/admin/js/jquery.app.js"></script>

        @yield('script')
    </body>
</html>
