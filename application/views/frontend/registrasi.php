<?php $this->load->view('frontend/header'); ?>
    <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Registrasi</li>
      </div>
    </div>
  </div>
    <div class="booking">
    <!-- Start registrasi Form -->
    <div class="container"  id="cont-registrasi">
      <section id="contact-page">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">  
      
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6">
          <div class="left">
            <h2>Input Data Diri</h2>
            <p>Silahkan masukan data diri anda :</p>
          </div>
          <div id="sendmessage">Pesan anda telah terkirim!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" id="form-registrasi">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:5" data-msg="Silahkan masukan minimal 5 karakter" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Silahkan masukan email yang valid" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="subject" id="subject" placeholder="No Telepon" data-rule="minlen:5" data-msg="Masuka no telepon yang valid" />
              <div class="validation"></div>
            </div>            
            <div class="form-group">
              <div id="file-div"></div>
                <label style="color: gray;">Upload CV anda</label>
                <input id="file_upload" name="file_upload" class="image form-control" type="file" placeholder="Upload CV anda">
              </div>
            <div class="form-group">
              <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="Masukan alamat anda" placeholder="Alamat"></textarea>
              <div class="validation"></div>
            </div>            
          </form>
          <div class="text-right"><button id="register" onclick="registrasi()" class="btn btn-primary btn-lg" required="required">Submit</button></div>
          </div>
      </div>
    </div>
  </section>
	</div>
	<!-- End Cusomer Form -->

  </div>
  <?php $this->load->view('frontend/footer'); ?>
