<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Movie Recommendation System</title>
        <!-- Font Awesome 5 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/vendor/fontawesome-free/css/all.min.css'); ?>">
        <!-- Favicon icon -->
        <!-- <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('resources/img/favicon.png');?>"> -->
        <!-- Jquery -->
        <script src="<?php echo site_url('resources/plugins/jquery/jquery.min.js');?>"></script>
        <!-- <script src="<?php echo site_url('resources/js/jquery.js');?>"></script> -->
        <!-- Select2  -->
        <script src="<?php echo site_url('resources/plugins/select2/js/select2.full.min.js');?>"></script>
        <!-- Pignose Calender -->
        <link href="<?php echo site_url('resources/plugins/pg-calendar/css/pignose.calendar.min.css');?>" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/chartist/css/chartist.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css');?>">
        <!-- Custom Stylesheet -->
        <link href="<?php echo site_url('resources/css/custom.css');?>" rel="stylesheet">
        <link href="<?php echo site_url('resources/css/style.css');?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= base_url('resources/css/') ?>select2.min.css" />
    </head>
    
    <body >
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

    <div class="ajaxLoaderDiv" id="ajaxLoaderDiv" style="display:none;">
        <img src="<?php echo site_url('resources/img/loader.gif'); ?>" class="ajax-loader" />
    </div>

        
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?php echo site_url('');?>">
                    <!-- <b class="logo-abbr"><img src="<?php echo site_url('uploads/'.$_SESSION['logo']['logo']);?>" height="100%" width="100%" alt=""> </b> -->
                    <!-- <span class="logo-compact"><img src="<?php echo site_url('uploads/'.$_SESSION['logo']['logo']);?>" height="20" width="20" alt=""></span> -->
                    <span class="brand-title">
                        <!-- <img src="<?php echo site_url('resources/img/logo-text.png');?>" alt=""> -->
                        <center><label class="text-white"><b>Project for Data Science</b></label></center>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <!-- <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="header-right">
                    <ul class="clearfix">
                        <!-- <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo site_url('resources/img/avatar/1.jpg');?>" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo site_url('resources/img/avatar/2.jpg');?>" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo site_url('resources/img/avatar/3.jpg');?>" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="<?php echo site_url('resources/img/avatar/3.jpg');?>" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li> -->
                        <!-- <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <li class="icons dropdown">
                            <label><?php echo $this->session->userdata('full_name'); ?>	&nbsp;</label>
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <!-- <span class="activity"></span> -->
                                <img src="https://freesvg.org/img/1389952697.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <!-- <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li> -->
                                        
                                        <!-- <hr class="my-2"> -->
                                        <!-- <li>
                                            <a href="<?php echo site_url('setting/change_password/'.$this->session->userdata('id')) ?>"><i class="fa fa-key"></i> <span>Change Password</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('setting/change_logo') ?>"><i class="fab fa-dyalog"></i> <span>Change Logo</span></a>
                                        </li> -->
                                        <li><a href="<?php echo site_url('login/logout'); ?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li class="nav-label">Dashboard</li> -->
                    <li>
                        <a  href="<?php echo site_url('');?>">
                        <i class="fas fa-home"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'sales' &&($this->uri->segment(2) == 'add')) {echo "active";} ?>">
                        <a class="" href="<?php echo site_url('sales/add'); ?>" aria-expanded=" <?php if ($this->uri->segment(1) == 'sales' &&($this->uri->segment(2) == 'add')) {echo "true";}else{echo "false";} ?>">
                        <i class="fas fa-universal-access"></i><span class="nav-text">Add Sale</span>
                        </a>
                      
                    </li>
                    <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'sales'&&($this->uri->segment(2) == 'pcbuild'||$this->uri->segment(2) == 'all_pcbuild')) {echo "active";} ?>">
                        <a class="has-arrow" href="javascript:void()" aria-expanded=" <?php if ($this->uri->segment(1) == 'sales'&&($this->uri->segment(2) == 'pcbuild'||$this->uri->segment(2) == 'all_pcbuild')) {echo "true";}else{echo "false";} ?>">
                        <i class="fas fa-microchip"></i><span class="nav-text">PC Build Information</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo site_url('sales/all_pcbuild'); ?>" class="<?php if ($this->uri->segment(1) == 'sales' && $this->uri->segment(2) == 'all_pcbuild') {echo "active";} ?>">All PC Build Information</a></li>
                            <li><a href="<?php echo site_url('sales/pcbuild'); ?>" class="<?php if ($this->uri->segment(1) == 'inventory' && $this->uri->segment(2) == 'pcbuild') {echo "active";} ?>">Add PC Build Information</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'sales' &&($this->uri->segment(2) == 'pcbuild')) {echo "active";} ?>">
                        <a class="" href="<?php echo site_url('sales/pcbuild'); ?>" aria-expanded=" <?php if ($this->uri->segment(1) == 'sales' &&($this->uri->segment(2) == 'pcbuild')) {echo "true";}else{echo "false";} ?>">
                        <i class="fas fa-universal-access"></i><span class="nav-text">PC Build Information</span>
                        </a>
                      
                    </li> -->
                    <!-- <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'customers' &&($this->uri->segment(2) == 'index')) {echo "active";} ?>">
                        <a class="" href="<?php echo site_url('customers/index'); ?>" aria-expanded=" <?php if ($this->uri->segment(1) == 'customers' &&($this->uri->segment(2) == 'index')) {echo "true";}else{echo "false";} ?>">
                        <i class="fas fa-users"></i><span class="nav-text">Customers</span>
                        </a>
                      
                    </li>
                    <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'inventory') {echo "active";} ?>">
                        <a class="has-arrow" href="javascript:void()" aria-expanded=" <?php if ($this->uri->segment(1) == 'inventory') {echo "true";}else{echo "false";} ?>">
                        <i class="fas fa-store-alt"></i><span class="nav-text">Inventory</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo site_url('inventory/index'); ?>" class="<?php if ($this->uri->segment(1) == 'inventory' && $this->uri->segment(2) == 'index') {echo "active";} ?>">Inventory Listing</a></li>
                            <li><a href="<?php echo site_url('inventory/add'); ?>" class="<?php if ($this->uri->segment(1) == 'inventory' && $this->uri->segment(2) == 'add') {echo "active";} ?>">Add Inventory</a></li>
                            <li><a href="<?php echo site_url('prereq/categories'); ?>" class="<?php if ($this->uri->segment(1) == 'prereq' && $this->uri->segment(2) == 'categories') {echo "active";} ?>">Category</a></li>
                            <li><a href="<?php echo site_url('prereq/sub_categories'); ?>" class="<?php if ($this->uri->segment(1) == 'prereq' && $this->uri->segment(2) == 'sub_categories') {echo "active";} ?>">Part Category</a></li>
                            <li><a href="<?php echo site_url('prereq/brands'); ?>" class="<?php if ($this->uri->segment(1) == 'prereq' && $this->uri->segment(2) == 'brands') {echo "active";} ?>">Brands</a></li>
                            <li><a href="<?php echo site_url('prereq/models'); ?>" class="<?php if ($this->uri->segment(1) == 'prereq' && $this->uri->segment(2) == 'models') {echo "active";} ?>">Model</a></li>
                            <li><a href="<?php echo site_url('prereq/supplier'); ?>" class="<?php if ($this->uri->segment(1) == 'prereq' && $this->uri->segment(2) == 'supplier') {echo "active";} ?>">Supplier</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'prereq' &&($this->uri->segment(2) == 'add_category'||$this->uri->segment(2) == 'categories'||$this->uri->segment(2) == 'sub_categories'||$this->uri->segment(2) == 'add_sub_category')) {echo "active";} ?>">
                        <a class="has-arrow" href="javascript:void()" aria-expanded=" <?php if ($this->uri->segment(1) == 'prereq'&&($this->uri->segment(2) == 'add_category'||$this->uri->segment(2) == 'categories'||$this->uri->segment(2) == 'sub_categories'||$this->uri->segment(2) == 'add_sub_category')) {echo "true";}else{echo "false";} ?>">
                        <i class="fab fa-contao"></i><span class="nav-text">Category</span>
                        </a>
                        <ul aria-expanded="false">

                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'prereq' &&($this->uri->segment(2) == 'add_brand'||$this->uri->segment(2) == 'brands'||$this->uri->segment(2) == 'models'||$this->uri->segment(2) == 'add_model')) {echo "active";} ?>">
                        <a class="has-arrow" href="javascript:void()" aria-expanded=" <?php if ($this->uri->segment(1) == 'prereq'&&($this->uri->segment(2) == 'add_brand'||$this->uri->segment(2) == 'brands'||$this->uri->segment(2) == 'models'||$this->uri->segment(2) == 'add_model')) {echo "true";}else{echo "false";} ?>">
                        <i class="fab fa-product-hunt"></i><span class="nav-text">Brand</span>
                        </a>
                        <ul aria-expanded="false">
                            
                        </ul>
                    </li> -->
                    <!-- <li class="mega-menu mega-menu-sm <?php if ($this->uri->segment(1) == 'prereq' &&($this->uri->segment(2) == 'addsupplier'||$this->uri->segment(2) == 'supplier'||$this->uri->segment(2) == 'editsupplier')) {echo "active";} ?>">
                        <a class="" href="<?php echo site_url('prereq/supplier'); ?>" aria-expanded=" <?php if ($this->uri->segment(1) == 'prereq' &&($this->uri->segment(2) == 'add_supplier'||$this->uri->segment(2) == 'supplier'||$this->uri->segment(2) == 'edit_supplier')) {echo "true";}else{echo "false";} ?>">
                        <i class="fas fa-user-friends"></i><span class="nav-text">Supplier</span>
                        </a>
                      
                    </li> -->
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
            <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
            ?> 
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <b>GarnerTech</b> <?php echo date('Y'); ?> Developed by <a href="https://gdigic.com" target="_blank">Global Digital
                        Consultants</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
     <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?php echo site_url('resources/plugins/common/common.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/custom.min.js');?>"></script>
        <script src="<?= base_url('resources/js/select2.min.js') ?>"></script>
        <script src="<?php echo site_url('resources/js/settings.js');?>"></script>
        <script src="<?php echo site_url('resources/js/gleek.js');?>"></script>
        <?php if ($this->uri->segment(1) == 'sales'&&($this->uri->segment(2) == 'add' || $this->uri->segment(2) == 'pcbuild' || $this->uri->segment(2) == 'editpcbuild' )){?>
        <script src="<?php echo site_url('resources/js/gleek1.js');?>"></script>
        <?php }?>
        <script src="<?php echo site_url('resources/js/styleSwitcher.js');?>"></script>

        <!-- Chartjs -->
        <script src="<?php echo site_url('resources/plugins/chart.js/Chart.bundle.min.js');?>"></script>
        <!-- Circle progress -->
        <script src="<?php echo site_url('resources/plugins/circle-progress/circle-progress.min.js');?>"></script>
        <!-- Datamap -->
        <script src="<?php echo site_url('resources/plugins/d3v3/index.js');?>"></script>
        <script src="<?php echo site_url('resources/plugins/topojson/topojson.min.js');?>"></script>
        <script src="<?php echo site_url('resources/plugins/datamaps/datamaps.world.min.js');?>"></script>
        <!-- Morrisjs -->
        <script src="<?php echo site_url('resources/plugins/raphael/raphael.min.js');?>"></script>
        <script src="<?php echo site_url('resources/plugins/morris/morris.min.js');?>"></script>
        <!-- Pignose Calender -->
        <script src="<?php echo site_url('resources/plugins/moment/moment.min.js');?>"></script>
        <script src="<?php echo site_url('resources/plugins/pg-calendar/js/pignose.calendar.min.js');?>"></script>
        <!-- ChartistJS -->
        <script src="<?php echo site_url('resources/plugins/chartist/js/chartist.min.js');?>"></script>
        <script src="<?php echo site_url('resources/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js');?>"></script>
        <?php //if ($this->uri->segment(1) == 'dashboard'){?>
        <!-- <script src="<?php echo site_url('resources/js/dashboard/dashboard-1.js');?>"></script> -->
        <?php //}?>
        <script src="<?php echo site_url('resources/plugins/tables/js/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo site_url('resources/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')?>"></script>
        <script src="<?php echo site_url('resources/plugins/tables/js/datatable-init/datatable-basic.min.js')?>"></script>
        <!-- <script src="<?php echo site_url('resources/plugins/toastr/js/toastr.min.js')?>"></script>
        <script src="<?php echo site_url('resources/plugins/toastr/js/toastr.init.js')?>"></script> -->

    </body>
</html>
