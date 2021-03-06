<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/modules/admin/images/favicon_1.ico">

        <title>Minton - Responsive Admin Dashboard Template</title>

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
    <body>
        <div class="wrapper-page">

            <div class="text-center">
                <a href="index.html" class="logo-lg"><i class="md md-equalizer"></i> <span>Minton</span> </a>
            </div>
            <form class="form-horizontal m-t-20"  action="{{ route('loginAdmin') }} " method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username" name="email">
                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                        <i class="md md-vpn-key form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30">
                    <div class="col-sm-7">
                        <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your
                            password?</a>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="pages-register.html" class="text-muted">Create an account</a>
                    </div>
                </div>
            </form>
        </div>
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
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

        <!-- Custom main Js -->
        <script src="/modules/admin/js/jquery.core.js"></script>
        <script src="/modules/admin/js/jquery.app.js"></script>
	</body>
</html>