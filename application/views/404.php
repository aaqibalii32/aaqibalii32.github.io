<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Garner Tech</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('resources/img/favicon.png');?>">
    <link href="<?php echo site_url('resources/css/style.css');?>" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="error-content">
                        <div class="card mb-0">
                            <div class="card-body text-center pt-5">
                                <h1 class="error-text text-primary">404</h1>
                                <h4 class="mt-4"><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
                                <p>Page Not Found</p>
                                <form class="mt-5 mb-5">
                                    
                                    <div class="text-center mb-4 mt-4"><a href="<?php echo site_url(); ?>" class="btn btn-flat btn-primary">Go to Homepage</a>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p>GarnerTech © <?php echo date('Y') ?> Developed by gDigic</p>
                                    <ul class="list-inline">
                                        <!-- <li class="list-inline-item"><a href="javascript:void()" class="btn btn-facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="javascript:void()" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="javascript:void()" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="javascript:void()" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?php echo site_url('resources/plugins/common/common.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/custom.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/settings.js');?>"></script>
    <script src="<?php echo site_url('resources/js/gleek.js');?>"></script>
    <script src="<?php echo site_url('resources/js/styleSwitcher.js');?>"></script>
</body>
</html>





