 <footer>
   <div class="footer">
     <div class="container">
       <div class="social-icon">
         <div class="col-md-4">
           <ul class="social-network">
             <?php
              $id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
              switch ($id_rumahsakit) {
                case 'lippo':
                  $fb = '29';
                  $email = '26';
                  $youtube = '38';
                  $id_rs = '1';
                  break;
                case 'jababeka':
                  $fb = '30';
                  $email = '27';
                  $youtube = '39';
                  $id_rs = '2';
                  break;
                case 'galuhmas':
                  $fb = '31';
                  $email = '28';
                  $youtube = '40';
                  $id_rs = '3';
                  break;
              }

              $fbs = $this->frontmodel->getSingleSettingKontak($fb, $id_rs);
              $emails = $this->frontmodel->getSingleSettingKontak($email, $id_rs);
              $youtubes = $this->frontmodel->getSingleSettingKontak($youtube, $id_rs);
              ?>

             <li><a href="<?= $fbs[0]->value_set ?>" class="fb tool-tip" title="<?= $fbs[0]->name_set ?>"><i class="fa fa-facebook"></i></a></li>
             <li><a href="mailto:<?= $emails[0]->value_set ?>" class="gmail tool-tip" title="<?= $emails[0]->name_set ?>"><i class="fa fa-envelope-o"></i></a></li>
             <li><a href="<?= $youtubes[0]->value_set ?>" class="ytube tool-tip" title="<?= $youtubes[0]->name_set ?>"><i class="fa fa-youtube-play"></i></a></li>
           </ul>

         </div>
       </div>

       <div class="col-md-4 col-md-offset-4">
         <div class="copyright">
           &copy; TokoLegalitas.com. All Rights Reserved.
           <div class="credits">
             <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->

             <div class="pull-right">
               <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </footer>

 ?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="<?php echo base_url(); ?>assets/ui/js/rcs_front/bootstrap.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/ui/js/rcs_front/jquery.prettyPhoto.js"></script>
 <script src="<?php echo base_url(); ?>assets/ui/js/rcs_front/jquery.isotope.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/ui/js/rcs_front/wow.min.js"></script>
 <!-- jQuery 2.1.4 -->
 <script src="<?php echo base_url(); ?>assets/ui/js/rcs_front/functions.js"></script>
 <!--Jquery Datatable-->
 <script src="<?php echo base_url(); ?>assets/cms/js/plugins/datatables/jquery.dataTables.js"></script>
 <script>
   function va(v) {
     window.open(base_url + v, "_self");
   }

   function vax(v, x) {
     if (x == '/') {
       x = '/home';
     }
     window.open(base_url + v + x, "_self");
   }

   function openDaftarModal(id) {
     console.log(id)
     $('#modal-daftar').modal('show');
     $('#modal-daftar').appendTo("body")
     //  $("#modal-daftar").modal('show')
     //  $('.modal-backdrop').remove();
   }

   function sendMessage(id) {
     var text = {
       //text: "Saya ingin daftar di Nama Kantor " + id
     }
    
     var param = $.param(text);
     window.open('https://wa.me/6285604081560?text=PASIEN%20BARU%0ANama%20Lengkap%20%3A%0ATempat%2FTanggal%20lahir%20%3A%0Ajenis%20Kelamin%20%3A%20laki-laki%2Fperempuan%0AStatus%20%3A%0ADokter%20yang%20dituju%20%3A%0AWaktu%20berobat%20%3A%20(pagi%2Fsore)%0AAlamat%20Domisili%20%3A%0APenjamin%20%3A%20Tunai%2FAsuransi%2FPerusahaan%2FBpjs%20Kesehatan%0ANo%20telepon%3A%0A%0APASIEN%20LAMA%0ANama%20Lengkap%20%3A%0ATempat%2FTanggal%20lahir%20%3A%0ADokter%20yang%20dituju%20%3A%0AWaktu%20berobat%20%3A%20(pagi%2Fsore)%0AAlamat%20Domisili%20%3A%0APenjamin%20%3A%20Tunai%2FAsuransi%2FPerusahaan%2FBpjs%20Kesehatan%0ANo%20telepon%3A%0A%0A' + param);
   }
 </script>
 </body>

 </html>