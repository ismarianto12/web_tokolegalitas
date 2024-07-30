<?php $this->load->view('frontend/header'); ?>
    <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Booking</li>
      </div>
    </div>
  </div>
    <div class="booking">
    <!-- Start Customer Form -->
    <div class="container"  id="cont-customer">
      <section id="contact-page">
	    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">  
	      <div class="col-md-6 col-md-offset-1">
	        <h2>Masukan data diri anda</h2>
	        <p>Data Berikut akan kami gunakan untuk memproses pesanan anda :</p>
	      </div>
	      <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <div class="col-md-6 col-md-offset-1">
                      <form action="" method="post" role="form" class="contactForm" id="form-customer">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="Phone" class="form-control" name="phone" id="phone" placeholder="masukan No yang bisa dihubungi" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <select onchange="getKabupaten()" class="form-control" id="data-prov">
                            <option value="" selected disabled>Provinsi</option>
                            <?php
                            	if($province){
                            		foreach ($province as $key => $value) {
                            			echo "<option value='".$value->prov_id."'>".$value->prov_name."</option>\n";
                            		}
                            	}
                            ?>
                            
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="data-kab" disabled="true">
                            <option selected disabled>Kabupaten</option>
                          </select>
                        </div>
                      </form>
                      <div class="text-right"><button onclick="nextForm()" class="btn btn-primary" required="required">Next</button></div>
                    </div>
                    <div class="col-md-5">
                    	<h3 class="text-center">Konfirmasi Pemesanan</h3>
	        			<p class="text-center">Jika anda sudah melakukan transfer, klik disini :</p>
                    	<div class="text-center"><button onclick="" class="btn btn-primary" required="required">Konfirmasi</button></div>
                    </div>
                </div>
	    </div>
	  </section>
	</div>
	<!-- End Cusomer Form -->kat_service

	<!-- Start Service Form -->
	<div class="container" id="cont-service" style="display: none">
      <section id="contact-page">
	    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">  
	      <div class="col-md-6 col-md-offset-1">
	        <h2>Pilih service yang anda inginkan</h2>
	        <p>Data Berikut akan kami gunakan untuk memproses pesanan anda :</p>
	      </div>
	      <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <div class="col-md-6 col-md-offset-1">
                      <form action="" method="post" role="form" class="contactForm" id="form-service">
                        <div class="form-group">
                          <select class="form-control" id="tipe-cus">
                            <option value="" selected disabled>Tipe Customer</option>                            
                            <?php
                              if($tipe_costumer){
                                foreach ($tipe_costumer as $key => $value) {
                                  echo "<option value='".$value->partner_category_code."'>".$value->partner_category_name."</option>\n";
                                }
                              }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="cat-service">
                            <option value="" selected disabled>Kategori Service</option>                            
                            <?php
                            	if($kat_service){
                            		foreach ($kat_service as $key => $value) {
                            			echo "<option value='".$value->product_category_id."'>".$value->product_category_name."</option>\n";
                            		}
                            	}
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="text" name="luas" disabled class="form-control" id="luas" placeholder="Luas Area" />
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="use-alat" onchange="alat_khusus()">
                            <option value="" selected disabled>Menggunakan Alat Khusus?</option>                            
                            <option value='1'>Ya</option>
                            <option value='0'>Tidak</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="text" name="nama-alat" class="form-control" disabled id="nama-alat" placeholder="Alat Khusus yang digunakan"  />
                        </div>
                        <div class="form-group">
                          <input type="text" name="qty-service" class="form-control" id="qty-service" placeholder="Quantity Service" />
                        </div>
                      </form>
                      <!-- <div class="text-left pull-left"><button onclick="customerForm()" class="btn btn-primary" required="required">Kembali</button></div> -->
                      <div class="text-right"><button type="submit" name="submit" class="btn btn-primary" required="required">Submit</button></div>
                    </div>
                </div>
	    </div>
	  </section>
	</div>
	<!-- End Service FOrm -->
  </div>
  <?php $this->load->view('frontend/footer'); ?>
  <script>
    $(document).ready(function () {

        // file upload
        $("#file_upload").fileinput({
            maxFileCount: 1,
            browseClass: "btn btn-default",
            browseLabel: "Pilih file",
            browseIcon: '<i class="fa fa-file"></i> ',
            removeClass: "btn btn-warning",
            removeLabel: "Hapus",
            removeIcon: '<i class="glyphicon glyphicon-trash"></i> ',
            uploadClass: "btn btn-info",
            uploadLabel: "Unggah",
            uploadIcon: '<i class="fa fa-cloud-upload"></i> ',
            previewFileType: "image",
            uploadUrl: "<?php echo base_url('doupload_slide'); ?>",
            msgFilesTooMany: 'Jumlah berkas yang akan diunggah ({n}) melebihi batas jumlah yang sudah ditentukan ({m}). Coba ulangi proses unggah berkas!',
            msgLoading: 'Memproses berkas {index} dari {files} …',
            msgProgress: 'Memproses berkas {index} dari {files} - {name} - {percent}% selesai.',
            uploadExtraData: function() {
                return {
                    nama_field:'file_upload',
                    title: $("#title-input").val(),
                    description: $("#description-input").val(),
                    alt: $("#alt-input").val()
                };
            }
        });

        //refresh if succes upload...
        $('#file_upload').on('filebatchuploadcomplete', function(event, files, extra) {
            loadContent(base_url + "view/_slide_form");
        });
    });
  </script>
