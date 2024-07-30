    <title><?php echo (isset($_TITLE))? $_TITLE : '';?> </title>
    <?php $this->load->view('main/_header');?>
    
    <section style="margin-top: 80px;margin-bottom: 20px;">
        <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url()?>" >Home</a></li>
                    <li><a href="<?php echo site_url($_PAGE_LINK)?>"  ><?php echo (isset($_PAGE_TITLE))? $_PAGE_TITLE : '';?></a></li>
                    <li><a href="#" ><?php echo (isset($_PAGE_TITLE1))? $_PAGE_TITLE1 : '';?></a></li>
                </ul> 
                <div>
                    <div class="col-lg-9 panel panel-info" align="justify">
                        <div class="panel-body">
                            <?php echo (isset($_PAGE_CONTENT))? $_PAGE_CONTENT : '';?>
                            <hr>
                            <a href="http://www.facebook.com/share.php?u=<?php echo site_url($_PAGE_LINK.'/'.$_PAGE_LINK1);?>"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                            <a href="http://twitter.com/share?url=<?php echo site_url($_PAGE_LINK.'/'.$_PAGE_LINK1);?>"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                            <a href="https://plus.google.com/share?url=<?php echo site_url($_PAGE_LINK.'/'.$_PAGE_LINK1);?>"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                            <a href="http://www.linkedin.com/shareArticle?mini=<?php echo site_url($_PAGE_LINK.'/'.$_PAGE_LINK1);?>"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                        </div>
                      <div>
                          <hr>
                        <!-- for comment -->
                        <div class="comment-area">
                            <?php
                                //jml comment
                                $jml_comment = 0;
                                $sql = $this->db->query("SELECT count(*) as jml FROM coment WHERE article_id = $_ID AND is_approve = 1");
                                if ($sql->num_rows() > 0 ) {
                                    $jml_comment = $sql->row()->jml;
                                }
                            ?>
                            <h4>Comments (<?php echo $jml_comment;?>)</h4>
                            <div class="media">
                                <?php
                                
                                $koment = $this->model->getListByQuery("SELECT * FROM coment WHERE article_id = $_ID AND is_approve = 1 AND parent_coment_id IS NULL ORDER BY created_datetime ASC LIMIT 100");                                
                                if ($koment) {
                                    foreach ($koment as $komen) {
                                        echo '
                                        <a href="#" class="pull-left"><img src="'.base_url("assets/img/" . $komen->img ).'" alt="" class="img-circle" /></a>
                                        <div class="media-body">
                                            <div class="media-content">
                                                <h6><span>'.$komen->created_datetime.'</span> '.$komen->name.'</h6>
                                                <p>
                                                    '.$komen->content.'
                                                </p>                                                
                                                <button class="btn btn-primary btn-sm reply" data-name="'.$komen->name.'" data-parent='.$komen->coment_id.'><i class="glyphicon glyphicon-plus"></i> Reply</button>
                                                <hr>
                                                
                                            </div>
                                            ';
                                            
                                           //jika ada child   
                                           $child = $this->model->getListByQuery("SELECT * FROM coment WHERE article_id = ".$_ID." AND is_approve = 1 AND parent_coment_id = ".$komen->coment_id." ORDER BY created_datetime ASC LIMIT 100");                                         
                                            if ($child) {
                                                foreach ($child as $row) {
                                                ?>
                                                    <!-- for child -->
                                                    <div class="media">
                                                        <a href="#" class="pull-left"><img src="<?php echo base_url();?>assets/img/avatar.png" alt="" class="img-circle" /></a>
                                                        <div class="media-body">
                                                            <div class="media-content">
                                                                <h6><span><?php echo $row->created_datetime;?></span> <?php echo $row->name;?></h6>
                                                                <p>
                                                                    <?php echo $row->content;?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end child -->
                                                <?php
                                                }
                                            }
                                    echo '</div>';
                                    }
                                }
                                ?>
                                
                            </div>  

                            <h4 id='title_comment'>Leave your comment</h4>
                            <form role="form" id="form-comment">
                                <div class="form-group">
                                    <input type="hidden" id="parent-id-input" name="parent-id-input">
                                    <input type="hidden" id="id-input" name="id-input" value="<?php echo $_ID;?>">
                                    <input type="text" class="form-control form-komentar" id="name-input" name="name-input" placeholder="* Enter name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-komentar" id="email-input" name="email-input" placeholder="* Enter email address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-komentar" rows="8" placeholder="* Your comment here" name="content-input"></textarea>
                                </div>
                                <div class="form-group">
                                <?php 
                                $widget = $this->recaptcha->getWidget();
                                $script = $this->recaptcha->getScriptTag();
                                ?>
                                    <?php echo $widget;?>
                                    <?php echo $script;?>
                                </div>
                                <input type="hidden" name="key-input" value="coment_id">
                                <input type="hidden" name="value-input" value="0">
                                <input type="hidden" name="model-input" value="coment">
                                <input type="hidden" name="action-input" value="1">
                                <button type="submit" onclick="send_comment(); return false;" class="btn btn-theme btn-md" id="btn_send">Submit</button>
                            </form>
                        </div>
                        <!-- end comment -->
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php $this->load->view('main/_right_side');?>
                </div>
                
            </div>
            
        </section>
        <?php $this->load->view('main/_footer');?>



