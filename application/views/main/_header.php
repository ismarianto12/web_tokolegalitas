<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TokoLegalitas.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="<?php echo base_url();?>assets/template-public/asset/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/template-public/asset/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />   
<link href="<?php echo base_url();?>assets/template-public/asset/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/template-public/asset/css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="<?php echo base_url();?>assets/template-public/asset/skins/default.css" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="<?php echo base_url();?>assets/template-public/asset/bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="topleft-info">
                                <li><i class="fa fa-phone"></i>&nbsp;CALL : <?php echo $this->settingmodel->getSetByName('telp');?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." t
                                    ype="text" value="" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search" title="Click to start searching"></span>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url();?>assets/template-public/asset/img/logo1.png" alt="" width="199" height="52" /></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">RSPK Lippo Cikarang</a></li>
                                    <li><a href="index2.html">RSPK Jababeka Cikarang</a></li>
                                    <li><a href="index2.html">RSPK Galuhmas Karawang</a></li>

                                </ul>               

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Fasilitas dan Layanan <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">RSPK Lippo Cikarang</a></li>
                                    <li><a href="components.html">RSPK Jababeka Cikarang</a></li>
                                    <li><a href="pricing-box.html">RSPK Galuhmas Karawang</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Jadwal Dokter <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">RSPK Lippo Cikarang</a></li>
                                    <li><a href="components.html">RSPK Jababeka Cikarang</a></li>
                                    <li><a href="pricing-box.html">RSPK Galuhmas Karawang</a></li>
                                </ul>
                            </li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Informasi <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">RSPK Lippo Cikarang</a></li>
                                    <li><a href="components.html">RSPK Jababeka Cikarang</a></li>
                                    <li><a href="pricing-box.html">RSPK Galuhmas Karawang</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('loker')?>">Lowongan Kerja</a>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Contact <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html">RSPK Lippo Cikarang</a></li>
                                        <li><a href="contact.html">RSPK Jababeka Cikarang</a></li>
                                        <li><a href="contact.html">RSPK Galuhmas Karawang</a></li>
                                    </ul>
                                </li>
                                <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                       <!-- <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-rightsidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-leftsidebar.html">Blog left sidebar</a></li>
                                <li><a href="post-rightsidebar.html">Post right sidebar</a></li>
                                <li><a href="post-leftsidebar.html">Post left sidebar</a></li>
                            </ul>
                        </li>-->

                        <!--<li><a href="contact.html">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->