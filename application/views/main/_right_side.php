
    <div id="list-cat">
        <a href="<?php echo site_url('news/news');?>" class="list-group-item active ">
            Promo Program
        </a>
        <ul class="list-group">
                    <?php
                    //get 4 article terbaru
                    $artikels = $this->model->getListByQuery("SELECT * FROM v_article WHERE is_publish = 1 AND article_category_id = 2 ORDER BY created_datetime DESC LIMIT 3");
                    if ($artikels) {
                        foreach ($artikels as $artikel) {
                            echo '<li class="list-group-item"><div class="row text-center" style="padding-top: 0px;padding-bottom: 0px;">
                                    <div class="col-md-12 col-sm-12 hero-feature">
                                        <div align="left">
                                        <p style="margin-bottom: 0px;">Posted By:&nbsp;<strong><u><span style="color:#0000cd"><em>'.$artikel->username.'</em></span></u></strong> &nbsp; on &nbsp; '.date ("d-m-Y",strtotime($artikel->created_datetime)).' </p>
                                            <div class="caption">
                                                <a href="'.site_url('promo/'.$artikel->link).'"><h4>'. substr(strip_tags($artikel->title), 0,30) .'</h4></a>
                                                <p>'. substr(strip_tags($artikel->content), 0,60) .'</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
                            }
                        }
                        ?>
        </ul>
    </div>
    <div id="list-cat">
        <a href="<?php echo site_url('news/news');?>" class="list-group-item active ">
            Artikel Terbaru
        </a>
        <ul class="list-group">
                    <?php
                    //get 4 article terbaru
                    $artikels = $this->model->getListByQuery("SELECT * FROM v_article WHERE is_publish = 1 AND article_category_id = 3 ORDER BY created_datetime DESC LIMIT 3");
                    if ($artikels) {
                        foreach ($artikels as $artikel) {
                            echo '<li class="list-group-item"><div class="row text-center" style="padding-top: 0px;padding-bottom: 0px;">
                                    <div class="col-md-12 col-sm-12 hero-feature">
                                        <div align="left">
                                        <p style="margin-bottom: 0px;">Posted By:&nbsp;<strong><u><span style="color:#0000cd"><em>'.$artikel->username.'</em></span></u></strong> &nbsp; on &nbsp; '.date ("d-m-Y",strtotime($artikel->created_datetime)).' </p>
                                            <div class="caption">
                                                <a href="'.site_url('article/'.$artikel->link).'"><h4>'. substr(strip_tags($artikel->title), 0,30) .'</h4></a>
                                                <p>'. substr(strip_tags($artikel->content), 0,60) .'</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
                            }
                        }
                        ?>
        </ul>
        
    </div>

    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=220px&height=70px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    <div>
    <h5><a href="https://api.whatsapp.com/send?phone=+<?php echo $this->settingmodel->getSetByName('WA01');?>"><i class="fa fa-whatsapp fa-3x color-whatsapp" style="font-size:30px;"><u>&nbsp;+<?php echo $this->settingmodel->getSetByName('WA01');?></u></i></a></h5>
    <h5><a href="https://api.whatsapp.com/send?phone=+<?php echo $this->settingmodel->getSetByName('WA02');?>"><i class="fa fa-whatsapp fa-3x color-whatsapp" style="font-size:30px;"><u>&nbsp;+<?php echo $this->settingmodel->getSetByName('WA02');?></u></i></a></h5>
    <h5><i class="fa fa-instagram" style="font-size:30px;color:red"><a href="https://www.instagram.com/sbc_karawang/"><u>&nbsp;<?php echo $this->settingmodel->getSetByName('instagram');?></u></a></i></h5>
    </div>
