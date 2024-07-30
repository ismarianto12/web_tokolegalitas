
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="">
  <title><?php echo $this->config->item('app_name'); ?> | <?php echo (isset($_TITLE))?$_TITLE:'';?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/bootstrap.min.css">
  <!--Time Picker-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/bootstrap-timepicker.css" >
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/skins/skin-purple.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/swal/sweet-alert.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/fileinput.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/iCheck/all.css">
  <!-- Bootstrap CSS -->
  <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">-->
  <!-- bootstrap theme -->
  <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css" rel="stylesheet">-->
  <!--external css-->
  <!-- font icon -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/widgets.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
<!-- =======================================================
  Theme Name: NiceAdmin
  Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  Author: BootstrapMade
  Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script>var base_url = '<?php echo base_url();?>';</script>
</head>
<body>
  <!-- container section start -->
  <section id="container" class="#">
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <!--logo start-->
      <a href="<?php echo site_url('view/home');?>" class="logo">Admin <span class="lite">Panel</span></a>
      <!--logo end-->
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
           <a data-toggle="dropdown" class="dropdown-toggle" href="#" data-toggle="dropdown">
            <span class="profile-ava">
              <img alt="" src="<?php echo base_url();?>assets/cms/img/<?php echo $this->session->userdata('_IMG');?>" class="user-image" alt="User Image" width="36" class="img-circle">
            </span>
            <span><?=$user;?></span>

            <!-- <b class="caret"></b> -->
          </a>
          
            <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#" data-toggle="dropdown">
              <span class="profile-ava">
                <img alt="" src="<?php echo base_url();?>assets/cms/img/<?php echo $this->session->userdata('_IMG');?>" class="user-image" alt="User Image" width="36" class="img-circle">
              </span>
              <span><?=$user;?></span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <div  class="log-arrow-up"></div>
              <li>
               <a href="<?php echo base_url('logout');?>" class="icon_key_alt" >Sign out</a>
             </li>
        
           </ul> -->
         </li>
         <li>
           <a class="btn btn-primary" href="<?php echo base_url('logout');?>" >Sign out</a>
         </li>
         <!-- user login dropdown end -->
       </ul>
       <!-- notificatoin dropdown end-->
     </div>
   </header>
   <!--header end-->

   <!--sidebar start-->
   <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="active">
          <a  onclick="loadContent(base_url + 'view/_dashboard'); return false;" class="">
            <i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> <span>Dashboard</span>
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
          <a href="#" onclick="loadContent(base_url + 'view/_page_form'); return false;" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Halaman</a>
        </li>
        <li>
          <a href="#" onclick="loadContent(base_url + 'view/_comment_form'); return false;" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Comment</a>
        </li>
        <li>
          <a href="#" onclick="loadContent(base_url + 'view/_user_form'); return false;">
            <i class="fa fa-users"></i>
            <span> User Management</span>
          </a>
        </li>                   
        <li>
          <a href="#" onclick="loadContent(base_url + 'view/_setting_form'); return false;" class="waves-effect"><i class="fa fa-gears fa-fw" aria-hidden="true"></i>Setting</a>
        </li>
        <li>
          <a href="#" onclick="loadContent(base_url + 'view/_guestbook_form'); return false;">
            <i class="fa fa-envelope"></i>
            <span> Guestbook</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="loadContent(base_url + 'view/_slide_form'); return false;">
            <i class="fa fa-gear"></i>
            <span> Slide Setting</span>
          </a>
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
        <!-- <li>
          <a href="#" onclick="loadContent('<?php echo site_url('view/_rumahsakit_form');?>')">
            <i class="fa fa-hospital-o fa-fw"></i>
            <span>Nama Kantor</span>
          </a>
        </li> -->
        <!-- <li>
            <li>
          <a href="#" onclick="loadContent(base_url + 'view/_bagian_form'); return false;">
            <i class="fa fa-tags"></i>
            <span> Bagian</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#" onclick="loadContent('<?php echo site_url('view/_dokter_form');?>')">
            <i class="fa fa-user-md fa-fw"></i>
            <span>Dokter</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#" onclick="loadContent('<?php echo site_url('view/_jadwaldokter_form');?>')">
            <i class="fa fa-tasks fa-fw "></i>
            <span>Jadwal Dokter</span>
          </a>
        </li> -->
      </ul>
             <!-- <div class="center p-20">
                     <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn waves-effect waves-light">Upgrade to Pro</a>
                   </div> -->
                 </div>   
               </div>
               <!-- End Top Navigation -->
             </aside>
             <!--sidebar end-->
             <!--main content start-->
             <section id="main-content">
              <section class="wrapper">
                <!--overview start-->
                <div class="row">
                  <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i></i><a href="<?php echo site_url('view/home');?>">Dashboard</a></h3>
                    <ol class="breadcrumb">
                      <li><i class="fa fa-home"></i><a href="<?php echo site_url('view/home');?>">Home</a></li>
                      <li><i class="fa fa-laptop"></i><a href="<?php echo site_url('view/home');?>">Dashboard</a></li>
                    </ol>

                    <div id="dinamic-content">
                      <?php echo (isset($_CONTENT)) ? $_CONTENT : '';?>
                    </div>
                  </section>
                </div>
              </div>
              <!-- Content Wrapper. Contains page content -->



              <div class="widget-foot">
                <!-- Footer goes here -->
              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- project team & activity end -->

    </section>
     
  </section>
  <!--main content end-->
</section>



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
<script src="<?php echo base_url();?>assets/cms/js/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/fileinput.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/ckeditor_full/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url();?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/asset/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/cms/js/bootstrap-timepicker.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="<?php echo base_url();?>assets/js/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url();?>assets/asset/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="<?php echo base_url();?>assets/js/sparkline-chart.js"></script>
<script src="<?php echo base_url();?>assets/js/easy-pie-chart.js"></script>
<script src="<?php echo base_url();?>assets/js/xcharts.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.autosize.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url();?>assets/js/gdp-data.js"></script>
<script src="<?php echo base_url();?>assets/js/morris.min.js"></script>
<script src="<?php echo base_url();?>assets/js/sparklines.js"></script>
<script src="<?php echo base_url();?>assets/js/charts.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
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
