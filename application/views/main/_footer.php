<footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="widget">
                            <h4>Alamat Nama Kantor Permata Lippo Cikarang</h4>
                            <address>
                            <?php echo $this->settingmodel->getSetByName('address1');?>

                                <p>
                                    <i class="icon-phone"></i> &nbsp;CALL : <?php echo $this->settingmodel->getSetByName('telp');?> <br>
                                    <i class="icon-envelope-alt"></i> &nbsp;MAIL : <?php echo $this->settingmodel->getSetByName('email-info');?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                        <div class="widget">
                            <h4>Alamat Nama Kantor Permata Jababeka Cikarang</h4>
                            <address>
                             <?php echo $this->settingmodel->getSetByName('adress2');?>
                             </div>
                        </div>

                        <div class="col-sm-3 col-lg-3">
                            <div class="widget">
                                <h4>Information</h4>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="widget">
                                <h4>Newsletter</h4>
                                <p>Fill your email and sign up for monthly newsletter to keep updated</p>
                                <div class="form-group multiple-form-group input-group">
                                    <input type="email" name="email" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="copyright">
                                    <p>&copy; Sailor Theme - All Right Reserved</p>
                                    <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://permatakeluarga.net">Permata Keluarga</a> by ABCD <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="https://web.facebook.com/search/top/?q=rs%20permata%20keluarga" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>assets/template-public/asset/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/modernizr.custom.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url();?>assets/template-public/asset/plugins/flexslider/flexslider.config.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/jquery.appear.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/stellar.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/classie.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/uisearch.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/animate.js"></script>
<script src="<?php echo base_url();?>assets/template-public/asset/js/custom.js"></script>

    
</body>
</html>