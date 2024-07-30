<div class="form-group">
    <label for="id_rumahsakit-input" class="col-md-3 control-label">Nama Kantor</label>
    <div class="col-md-6">
        <!-- <select class="form-control" name="id_rumahsakit-input" id="id_rumahsakit-input">
         </select> -->
        <?php if ($id_rs == NULL) :  ?>
            <h3>Nama Kantor Untuk Operator NULL</h3>
            <br />
            <div class="alert alert-danger">
                <small>Status Rumahsa Sakit User ,Aplikasi Belum di setting ,Silahkan Setting Terlebih dahulu di menu User</small>
            </div>
        <?php else : ?>

            <input type="hidden" name="id_rumahsakit-input" value="<?= $id_rs ?>">
            <h3><?= $nama_rs ?></h3>
        <?php endif ?>
    </div>
</div>