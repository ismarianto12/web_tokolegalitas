<hr>
<div class="comment-area">
    <h4>Comments</h4>
    <div class="media">
        <?php $koment = $this->model->getListByQuery("SELECT * FROM coment WHERE is_approve = 1 AND parent_coment_id = 1 ORDER BY created_datetime DESC LIMIT 100");

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
                        <a href="#" class="align-right reply">Reply</a>
                        <hr>
                    </div>
                </div>';
            }
        }
        ?>
        <a href="#" class="pull-left"><img src="<?php echo site_url();?>assets/img/avatar.png" alt="" class="img-circle" /></a>
        <div class="media-body">
            <div class="media-content">
                <h6><span>March 12, 2013</span> Smith karlsen</h6>
                <p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </p>

                <a href="#" class="align-right reply">Reply</a>
            </div>
            <div class="media">
                <a href="#" class="pull-left"><img src="<?php echo site_url();?>assets/img/avatar.png" alt="" class="img-circle" /></a>
                <div class="media-body">
                    <div class="media-content">
                        <h6><span>June 22, 2013</span> Jay Moeller</h6>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>

                        <a href="#" class="align-right reply">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <h4>Leave your comment</h4>


    <form role="form">
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="* Enter name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="* Enter email address">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="8" placeholder="* Your comment here"></textarea>
        </div>
        <button type="submit" class="btn btn-theme btn-md">Submit</button>
    </form>
</div>