<?php
// print_r($jadwal_dokter);
foreach ($x->result() as $k => $v) {
    if ($k == 0 || (isset($jadwal_dokter[$k - 1]->id_dokter)) && $jadwal_dokter[$k - 1]->id_dokter != $v->id_dokter) {
        if ($k > 0) {
            echo "</table>";
            echo "</div>";
        }
?>
        <div class="col-md-2">
            <img class="img-responsive <?= 'bag_' . $v->id_bagian; ?>" src="<?php echo base_url(); ?>assets/image/dokter/<?= $v->img ?>" alt="" style="width:100px;height: 100px;margin-left: 50px;margin-top: 10px;">
            <!-- <p>Tes</p> -->
        </div>
        <div class="col-md-10" style="margin-top: 10px;">

            <table id="tabel-jadwaldokter" class="<?= 'bag_' . $v->id_bagian; ?> table table-bordered table-striped" style="color: black;">
                <tr style="font-weight: bold;">

                    <td width="10%">Hari</td>
                    <td width="20%">Jam</td>
                    <!--<td width="10%">Selesai</td>-->

                </tr>
            <?php } ?>
            <tr>

                <td><?= $v->hari ?></td>
                <td>
                    <?php
                    $a = substr($v->jam, 0, 5) . ' s/d ' . substr($v->jam_pulang, 0, 5);
                    if ($v->oncall) {
                        echo '';
                    } else {
                        echo $a;
                    }
                    ?>
                </td>

            </tr>
        <?php
        //    if($k == 0 || (isset($jadwal_dokter[$k-1]->id_dokter)) && $jadwal_dokter[$k-1]->id_dokter != $v->id_dokter)
        //     echo "</div>";

    }
        ?>
            </table>