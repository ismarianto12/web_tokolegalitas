<?php $this->load->view('frontend/header'); 
?> 
<div id="jadwal_dokter-wrapper" style="margin-top: 50px;"">
  <div id="jadwal_dokter">
    <div id="breadcrumb">
      <div class="container">
        <div class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Jadwal Dokter</li>
        </div>
      </div>
    </div>
  <div class="aboutus">
  <div class="container">
    <h3>Jadwal Dokter</h3>
    <hr>
    <table id="table-jadwaldokter" class="table table-bordered table-striped table-hover table-condensed" style="color:black;"> 
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Jadwal Dokter</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Nama Kantor</th>
                <th>Keterangan</th>
            </tr>
            <?php
            if ($jadwal_dokter) {
                foreach ($jadwal_dokter as $key => $x) {
                    ?>
                    <tr>
                        <td ><?=$x->nama_dokter?></td>
                        <td ><?=$x->spesialis?></td>
                        <td ><?=$x->hari?></td>
                        <td ><?=$x->jam?></td>
                        <td ><?=$x->jam_pulang?></td>
                        <td ><?=$x->nama_rumahsakit?></td>
                        <td ><?=$x->ket?></td>
                    </tr>
                <?php
                }
            }
            ?>
        </thead>
        <tbody></tbody>
    </table>
    <div class="col-md-12" style="margin-bottom: 50px">
        <p> Jadwal dapat berubah sewaktu waktu. Demi kenyamanan Anda, silahkan hubungi customer care untuk konfirmasi sebelum berkunjung.
            Untuk Konfirmasi :</p>
            <?php
            switch ($this->uri->segment(1)) {
                case 'lippo':
                    $kontak = '18';
                    break;
                case 'jababeka' :
                    $kontak = '24';
                    break;
                case 'galuhmas' :
                    $kontak = '25';
                    break;

            }
             $kontaks = $this->frontmodel->getSingleSettingKontak($kontak,$this->frontmodel->switch_uri($this->uri->segment(1)));
              if(isset($kontaks)){
              echo "<li><h3><i class='fa fa-phone'></i>&nbsp; ".$kontaks[0]->value_set." </h3></li>";
            }
            ?>

        </div>
     <h3>Jadwal Dokter oncall</h3>
    <hr>
    <table id="table-jadwaldokter" class="table table-bordered table-striped table-hover table-condensed" style="color:black;"> 
        <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Nama Kantor</th>
                <th>Keterangan</th>
            </tr>
            <?php
            // print_r($jadwal_dokter);
            if ($jadwal_dokter_oncall) {
                foreach ($jadwal_dokter_oncall as $key => $x) {
                    ?>
                    <tr>
                        <td ><?=$x->nama_dokter?></td>
                        <td ><?=$x->spesialis?></td>
                        <td ><?=$x->nama_rumahsakit?></td>
                        <td ><?=$x->ket?></td>
                    </tr>
                <?php
                }
            }
            ?>
        </thead>
        <tbody></tbody>
    </table>
    
    </div>
  </div>
  </div>
</div>
<?php $this->load->view('frontend/footer'); ?>
