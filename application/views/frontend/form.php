<div id="modalCustomer" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title title-white">Pemesanan</h4>
            </div>
            <div class="modal-body">
                <div class="center">
                  <h4 >Data Diri</h4>
                  <p>Silahkan masukan data diri anda untuk melakukan pemesanan:</p>
                </div>
                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <div class="col-md-10 col-md-offset-1">
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
                          <input type="Phone" class="form-control" name="Phone" id="Phone" placeholder="masukan No yang bisa dihubungi" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="tipe-cus">
                            <option value="" selected disabled>Tipe Customer</option>
                            <option>Corporate</option>
                            <option>Perumahan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="prov">
                            <option value="" selected disabled>Provinsi</option>
                            <option>DKI Jakrta</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="kab">
                            <option value="" selected disabled>Kabupaten</option>
                            <option>DKI Jakrta</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                          </select>
                        </div>
                        <!-- <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button></div> -->
                      </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default blue data-toggle="modal" id="btn_pesan" onclick="next_modal()" data-backdrop="false"">Next</button>
            </div>
        </div>
    </div>
</div>

<div id="modalService" class="modal fade" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title title-white">Pemesanan</h4>
            </div>
            <div class="modal-body">
                <div class="center">
                  <h4 >Detail Service</h4>
                  <p>Silahkan masukan data diri anda untuk melakukan pemesanan:</p>
                </div>
                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <div class="col-md-10 col-md-offset-1">
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
                          <input type="Phone" class="form-control" name="Phone" id="Phone" placeholder="masukan No yang bisa dihubungi" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="tipe-cus">
                            <option value="" selected disabled>Tipe Customer</option>
                            <option>Corporate</option>
                            <option>Perumahan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="prov">
                            <option value="" selected disabled>Provinsi</option>
                            <option>DKI Jakrta</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" id="kab">
                            <option value="" selected disabled>Kabupaten</option>
                            <option>DKI Jakrta</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                          </select>
                        </div>
                        <!-- <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button></div> -->
                      </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="back_modal()">Back</button>
                <button type="button" class="btn btn-default blue" onclick="submit()">Save</button>
            </div>
        </div>
    </div>
</div>