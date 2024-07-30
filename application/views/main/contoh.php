<?php 
// print_r($user);
// die;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/plugins/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->config->item('app_name'); ?> | <?php echo (isset($_TITLE))?$_TITLE:'';?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/skins/skin-purple.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/swal/sweet-alert.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/fileinput.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/iCheck/all.css">
        <script>var base_url = '<?php echo base_url();?>';</script>
    <link href="<?php echo base_url();?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/editor.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/jquery.ui.timepicker.css?v=0.3.3" type="text/css" /> -->
    <link href="<?php echo base_url();?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>assets/css/materialize.min.css" rel="stylesheet"> -->
    </head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                  <!-- Logo -->
                   <!--  <a class="logo" href="index.html">
                        Logo icon image, you can use font-icon also<b>
                        This is dark logo icon<img src="<?php echo base_url();?>assets/plugins/images/admin-logo.png" alt="home" class="dark-logo" />This is light logo icon<img src="<?php echo base_url();?>assets/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        Logo text image you can use text also<span class="hidden-xs">
                        This is dark logo text<img src="<?php echo base_url();?>assets/plugins/images/admin-text.png" alt="home" class="dark-logo" />This is light logo text<img src="<?php echo base_url();?>assets/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a> -->
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo base_url();?>assets/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?=$user;?></b></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('logout');?>" class="btn btn-danger btn-block waves-effect waves-light">Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<!--end header -->
<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo site_url('view/home');?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_user_form'); return false;">
                            <i class="fa fa-users"></i>
                            <span> User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_article_category_form'); return false;">
                            <i class="fa fa-tags"></i>
                            <span> Article Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_article_form'); return false;" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Article</a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_comment_form'); return false;" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Comment</a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_page_form'); return false;" class="waves-effect"><i class="fa fa-files-o fa-fw" aria-hidden="true"></i>Page Management</a>
                    </li>      
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_slide_form'); return false;">
                            <i class="fa fa-gear"></i>
                            <span> Slide Setting</span>
                        </a>
                    </li>              
                    <li>
                        <a href="#" onclick="loadContent(base_url + 'view/_setting_form'); return false;" class="waves-effect"><i class="fa fa-gears fa-fw" aria-hidden="true"></i>Setting</a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent('<?php echo site_url('view/_gallery_form');?>')">
                            <i class="fa fa-image fa-fw"></i>
                            <span>Image</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent('<?php echo site_url('view/_gallery_video_form');?>')">
                            <i class="fa fa-film fa-fw"></i>
                            <span>video</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent('<?php echo site_url('view/_rumahsakit_form');?>')">
                            <i class="fa fa-hospital-o fa-fw"></i>
                            <span>Nama Kantor</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent('<?php echo site_url('view/_dokter_form');?>')">
                            <i class="fa fa-user-md fa-fw"></i>
                            <span>Dokter</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadContent('<?php echo site_url('view/_jadwaldokter_form');?>')">
                            <i class="fa fa-calendar-check-o fa-fw"></i>
                            <span>Jadwal Dokter</span>
                        </a>
                    </li>
                    
                    

                </ul>
                <!-- <div class="center p-20">
                     <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn waves-effect waves-light">Upgrade to Pro</a>
                 </div> -->
            </div>
            
        </div>

        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div> -->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- Main content -->
                    <section class="content">
                        <div id="dinamic-content">
                            <?php echo (isset($_CONTENT))?$_CONTENT:'';?>
                        </div>
                    </section>
                <!-- /.content -->
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Dashboard Admin brough </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>

<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url();?>assets/cms/js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url();?>assets/cms/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/plugins/fastclick/fastclick.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/function.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/cms/swal/sweet-alert.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/fileinput.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/ckeditor_full/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/js/waves.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables.editor.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/js/custom_1.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/js/dashboard1.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.ui.timepicker.js?v=0.3.3"></script> -->
<script src="<?php echo base_url();?>assets/cms/js/plugins/timepicker/bootstrap-timepicker.min.js">
<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script>
      //custom js...
      $(document).ready(function(){
        //for error keypress space
        $(":input, textarea").keypress(function(e) {
          if (e.keyCode === 0 || e.keyCode === 32) {
            $(this).focus();
        }
    });
        
        //for extra js...
        <?php echo (isset($_EXTRA_JS))?$_EXTRA_JS:'';?>
    });
</script>
   
</body>
</html>
