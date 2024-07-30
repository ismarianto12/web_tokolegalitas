<?php
$me = $this->model->getRecord(array(
    'table' => 'm_user', 'where' => array(
        'user_id' => $this->session->userdata('_USER_ID')
    )
));
if($me != null){?>
    <div class="col-md-3 col-sm-3 col-xs-12">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img alt="User profile picture" src="<?php echo base_url('assets/image/profile/' . $this->session->userdata('_IMG'));?>" class="profile-user-img img-responsive img-circle">
                <h3 class="profile-username text-center"><?php echo $this->session->userdata('_NAME'); ?></h3>
                <p class="text-muted text-center"><?php echo $this->session->userdata('_LEVEL'); ?></p>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-user margin-r-5"></i>  Username</strong>
                <p class="text-muted">
                    <?php echo $me->username;?>
                </p>
                <hr>
                <strong><i class="fa fa-check margin-r-5"></i>  Name</strong>
                <p class="text-muted">
                    <?php echo $me->name;?>
                </p>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i>  Phone</strong>
                <p class="text-muted">
                    <?php echo $me->phone;?>
                </p>
                <hr>
                <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
                <p class="text-muted">
                    <?php echo $me->email;?>
                </p>
                <hr>
                <strong><i class="fa fa-user margin-r-5"></i> Level</strong>
                <p>
                    <?php echo $me->level;?>
                </p>
                <hr>
                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                <p>

                </p>
                <hr>
                <strong><i class="fa fa-key margin-r-5"></i> Password</strong>
                <p>
                    <div id="loading"></div>
                    <form class="form-horizontal" id="form-user">
                        <input type="hidden" id="username-input" name="username-input" value="<?php echo $me->username;?>">
                        <input type="hidden" id="name-input" name="name-input" value="<?php echo $me->name;?>">
                        <input type="hidden" id="phone-input" name="phone-input" value="<?php echo $me->phone;?>">
                        <input type="hidden" id="email-input" name="email-input" value="<?php echo $me->email;?>">
                        <input type="hidden" value="<?php echo $me->level;?>" name="level-input" id="level-input">
                        <input type="hidden" value="<?php echo $me->is_active;?>" name="status-input" id="status-input">
                        <input type="hidden" name="model-input" id="model-input" value="user">
                        <input type="hidden" name="key-input" id="key-input" value="user_id">
                        <input type="hidden" name="action-input" id="action-input" value="2">
                        <input type="hidden" name="value-input" id="value-input" value="<?php echo $me->user_id;?>">
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password-input" name="password-input" value="" placeholder="Kosongi jika tidak di ubah" class="form-control">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <button id="save-btn" class="btn btn-info" onclick="saving(); return false;"><i class="fa fa-fw fa-save"></i> Update Password</button>
                            </div>
                        </div>
                    </form>
                </p>
                <hr>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div>
    <div class="clearfix"></div>
<?php
}
?>
<script type="text/javascript">
    function saving() {
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: "<?php echo site_url('manage');?>",
                data: $("#form-user").serialize(),
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json) {
                    loading('loading',false);
                    if (json['data'].code === 1) {
                        genericAlert('Password berhasil diubah','success', 'success');
                        loadContent('<?php echo site_url("view/_profil");?>');
                    } else if(json['data'].code === 2){
                        genericAlert('Gagal update password','error', 'error');
                    } else{
                        genericAlert(json['data'].message, 'warning', 'warning');
                    }
                },
                error: function () {
                    loading('loading',false);
                    genericAlert('Gagal update password, terjadi kesalahan!','error','error');
                }
            });
        }, 100);
    }
</script>
