<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->config->item('app_name'); ?> | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/skins/skin-purple.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/swal/sweet-alert.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/js/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/css/fileinput.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/cms/js/plugins/iCheck/all.css');?>">
    <!--CUSTOM STYLES-->
    <link href='<?php echo base_url();?>assets/cms/css/style.css' rel="stylesheet" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>var base_url = '<?php echo base_url();?>';</script>
    </head>
    <body>
        <div>
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="margin-top: 30px;">
                <div class="lg-container">
                    <div >
                        <div id="loading"></div>
                        <h3 align="center"><?php echo $this->config->item('app_name'); ?> <i><small>Login</small></i></h3>
                        <hr />
                    </div>
                    <form role="form" id="login-form">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username-input" id="username-input" placeholder="Username" autofocus="" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password-input" id="password-input"  placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" /> <strong>Remember me</strong>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right" onclick="doLogin(); return false;"><i class="fa fa-unlock"></i> Login </button>
                        <div class="clearfix"></div>
                        <hr />
                        <strong> Tidak bisa login ? <a href="#" >klik bantuan.</a></strong>
                    </form>
                    <div id="message"></div>
                </div>
            </div>
        </div><!-- ./wrapper -->

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
        <script>
            //custom js...
            <?php echo (isset($_EXTRA_JS))?$_EXTRA_JS:'';?>
            function doLogin() {
                loading('loading',true);
                setTimeout(function() {
                    $.ajax({
                        url: '<?php echo site_url('login');?>',
                        data: $("#login-form").serialize(),
                        dataType: 'json',
                        type: 'POST',
                        cache: false,
                        success: function(json){
                            loading('loading',false);
                            if (json['data'].code === 1) {
                                doneAlert('Login berhasil. Anda diizinkan menggunakan sistem ini','success','<?php echo site_url("view/home");?>');
                            } else if(json['data'].code === 2){
                                loginAlert('Username tidak dikenal');
                            } else if(json['data'].code === 3){
                                loginAlert('Password salah');
                            } else{
                                loginAlert(json['data'].message);
                            }
                        }
                    });
                }, 100);
            }
        </script>
    </body>
</html>
