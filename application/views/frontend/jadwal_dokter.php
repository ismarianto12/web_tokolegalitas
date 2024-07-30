<div class="wrap container-full-default">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.6/css/lightgallery.min.css">
  <div class="lokasi-klinik">
    <div class="site-bg lazy" data-src="/img/bg3.jpg">
      <div class="row judul-back">
        <h1 class="title-lokasi-home col-md-9 col-xs-12">Lokasi</h1>
        <!-- <div class="search-lk col-md-3 col-xs-12">
          <div class="row">
            <div class="col-md-12 search-top" id="search-direktori">
              <span class="glyphicon glyphicon-map-marker content-gray" aria-hidden="true" style="display: inline;"></span>
              <span>
                <div class="kv-plugin-loading loading-w0">&nbsp;</div><select id="w0" class="form-control" name="lokasi_klinik" data-s2-options="s2options_6cc131ae" data-krajee-select2="select2_9930966c" style="display:none">
                  <option value="3">Bekasi</option>
                  <option value="2">Bekasi Timur</option>
                  <option value="18">Bina Husada</option>
                  <option value="15">Bintaro</option>
                  <option value="13">Cibubur</option>
                  <option value="4">Cikarang</option>
                  <option value="5">Depok</option>
                  <option value="14">Gading Serpong</option>
                  <option value="6">Kalideres</option>
                  <option value="1">Kelapa Gading</option>
                  <option value="8">Kemayoran</option>
                  <option value="12">Kenjeran</option>
                  <option value="17">Pondok Tjandra</option>
                  <option value="16">Pratama Jatiasih</option>
                  <option value="9">Surabaya</option>
                  <option value="10">Tegal</option>
                  <option value="11" selected="">Waru</option>
                </select>
              </span>

            </div>
          </div>
        </div> -->
      </div>
      <div class="card card-site card-bottom-klinik">
        <div class="image-full-klinik">
          <div id="carousel-gallery-klinik" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="lightgallery">
              <?php $y = 1;
              foreach ($rmahsakit->result()  as $rsm) {

                switch ($rsm->id_rumahsakit) {
                  case 1:
                    $rsname = 'lippo';
                    $gambar = 'https://www.permatakeluarga.net/assets/image/article/IMG_2956.JPG';
                    break;
                  case 2:
                    $rsname = 'jababeka';

                    $gambar = 'http://4.bp.blogspot.com/-50oHHNoXe-E/Vh-9BdgnnxI/AAAAAAAAApg/tPlTrPY6OiA/s1600/Alamat%2BRumah%2BSakit%2BHarapan%2BInternasional%2BBekasi.jpg';

                    break;
                  case 4:
                    $rsname = 'galuhmas';
                    $gambar = 'https://s3-ap-southeast-1.amazonaws.com/arsitagblog/Jasa+Konstruksi+Bangunan+Gedung/Jasa+Konstruksi+Bangunan+Gedung+di+Jakarta+dan+Jabodetabek+3.png';
                    break;
                }
                $sactive = ($rs == $rsname) ? 'active' : '';
              ?>

                <div class="item <?= $sactive ?>">
                  <a class="image-gallery" data-src="<?= $gambar ?>" href="../../mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/cabang-banner/full/11_51_waru.jpg" data-imgresponsive="../../mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/cabang-banner/full/mobile/11_76_waru.jpg">
                    <section class="top-image-klinik lazy" style="background-size: cover; background-position: center center; background-repeat: no-repeat; display: block; background-image: url(&quot;<?= $gambar ?>&quot;);">
                      <img class="sr-only lazy" alt="Permata Keluarga <?= strtoupper($rs) ?>" src="<?= $gambar ?>" style="display: block;">
                      <div class="nama-klinik">
                        <h2>Permata Keluarga <?= strtoupper($rs) ?></h2>
                      </div>
                    </section>
                    <div class="icon-max">
                      <img class="img-responsive lazy" data-src="../img/maximize.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                    </div>
                  </a>
                </div>
              <?php $y++;
              } ?>
              <!-- <div class="item">
                <a class="image-gallery" data-src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/clinic_gallery/full/21_50_1.jpg" href="../../mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/clinic_gallery/full/21_50_1.jpg" data-imgresponsive="../../mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/clinic_gallery/full/21_50_1.jpg">
                  <section class="top-image-klinik lazy" style="background-size: cover; background-position: center center; background-repeat: no-repeat; display: block; background-image: url(&quot;https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/clinic_gallery/full/21_50_1.jpg&quot;);">
                    <img class="sr-only lazy" alt="Permata Keluarga <?= strtoupper($rs) ?>" src="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/clinic_gallery/full/21_50_1.jpg" style="display: block;">
                    <div class="nama-klinik">
                      <h2>Permata Keluarga <?= strtoupper($rs) ?></h2>
                    </div>
                  </section>
                  <div class="icon-max">
                    <img class="img-responsive lazy" data-src="../img/maximize.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </div>
                </a>
              </div> -->
            </div>

            <a class="left left-icon carousel-control" href="#carousel-gallery-klinik" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="right right-icon carousel-control" href="#carousel-gallery-klinik" data-slide="next">
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
        <div class="loading-klinik text-center hidden">
          <h2><span class="glyphicon glyphicon-refresh is-loading"></span> Loading...</h2>
        </div>
        <div class="klinik-content" style="display: block;">
          <div class="nav-klinik">
            <ul class="nav nav-pills nav-klinik-top" id="pills-klinik-tab" role="tablist">
              <li class="nav-item" style="left: 0%;">
                <a class="nav-link" id="fasilitas-rumah-sakit" data-toggle="pill" data-target="#menu-fasilitas-rs" href="<?= base_url('/' . $rs . '/jadwal') ?>#menu-fasilitas-rs" role="tab" aria-controls="menu-fasilitas-rs" aria-expanded="true">Layanan</a>
              </li>
              <li class="nav-item active" style="left: 0%;">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#informasi-dokter" href="<?= base_url('/' . $rs . '/jadwal') ?>#informasi-dokter" role="tab" aria-controls="informasi-dokter" aria-expanded="true">Informasi Dokter</a>
              </li>
              <li class="nav-item" style="left: 0%;">
                <a class="nav-link" id="lokasi-rumah-sakit" data-toggle="pill" data-target="#lokasi-rs" href="<?= base_url('/' . $rs . '/jadwal') ?>#lokasi-rs" role="tab" aria-controls="lokasi-rs" aria-expanded="true">Kontak</a>
              </li>
              <!-- Controls -->
              <button class="hidden-md hidden-lg btn left carousel-control clinic-location" role="button" data-slide="prev">
                <div class="left-icon"></div>
                <span class="sr-only">Previous</span>
              </button>
              <button id="startchange" class="hidden-md hidden-lg btn right carousel-control clinic-location" role="button" data-slide="next">
                <div class="right-icon"></div>
                <span class="sr-only">Next</span>
              </button>
            </ul>

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane" id="menu-fasilitas-rs" role="tabpanel" aria-labelledby="fasilitas-rumah-sakit">
                <div class="row card-fasilitas-rs">
                  <div class="col-md-4 col-sm-4">
                    <nav class="navbar navbar-lk">
                      <div class="row hidden-md hidden-lg">
                        <div class="col-xs-10">
                          <p id="current-infors">
                            Layanan Unggulan
                          </p>
                        </div>
                        <div class="col-xs-2">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#infoRsNavbar" id="toggle-infors">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                      </div>
                      <div class="collapse navbar-collapse" id="infoRsNavbar">
                        <ul class="nav flex-column nav-pills nav-pills-pink nav-fasilitas-rs nav-justified" role="tablist" id="menu-info-rs">
                          <li class="nav-item active">
                            <a class="nav-link nav-profile" data-toggle="collapse" role="tab" href="#layanan-unggulan-konten" aria-controls="layanan-unggulan-konten" aria-expanded="true" data-parent="#menu-fasilitas-rs" id="fasilitas-kami-tab"><b>Layanan Unggulan</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nav-profile" data-toggle="collapse" href="#submenu2" id="fk-tab" data-parent="#menu-fasilitas-rs" data-target="#submenu2"><b>Fasilitas Kami</b></a>
                            <div class="collapse" id="submenu2" aria-expanded="false">
                              <ul class="nav">
                                <li class="nav-item">
                                  <a id="pelayanan-umum-tab" class="konten-fasilitas nav-link nav-profile open" data-parent="#submenu2" href="#pelayanan-umum-content"> Pelayanan
                                    Umum</a>
                                </li>
                                <li class="nav-item">
                                  <a class="konten-fasilitas nav-link nav-profile" data-toggle="tab" href="#pelayanan-khusus-content" role="tab" data-parent="#submenu2" aria-expanded="false"> Pelayanan
                                    Khusus</a>
                                </li>
                                <li class="nav-item">
                                  <a class="konten-fasilitas nav-link nav-profile" data-toggle="tab" href="#health-screening-content" role="tab" data-parent="#submenu2" id="health-screening-tab" aria-expanded="false"> Pemeriksaan
                                    Kesehatan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="konten-fasilitas nav-link nav-profile" data-toggle="tab" href="#poliklinik-content" aria-controls="poliklinik-content" aria-expanded="false" role="tab" data-parent="#submenu2"> Poliklinik</a>
                                </li>
                                <li class="nav-item">
                                  <a class="konten-fasilitas nav-link nav-profile" data-toggle="tab" href="#penunjang-medis-content" aria-controls="penunjang-medis-content" aria-expanded="false" role="tab" data-parent="#submenu2"> Penunjang Medis</a>
                                </li>
                                <li class="nav-item">
                                  <a class="konten-fasilitas nav-link nav-profile" data-toggle="tab" href="#ruang-perawatan-content" aria-controls="ruang-perawatan-content" aria-expanded="false" role="tab" data-parent="#submenu2"> Ruang Perawatan</a>
                                </li>
                              </ul>
                            </div>

                          </li>

                          <li class="nav-item">
                            <a class="nav-link nav-profile" data-toggle="collapse" href="#submenu4" data-target="#submenu4" aria-controls="submenu4" aria-expanded="true" role="tab" id="rekanan-tab" data-parent="#menu-fasilitas-rs"><b>Rekanan</b></a>
                            <ul class="nav collapse" id="submenu4" role="menu" aria-labelledby="rekanan-tab">
                              <li class="nav-item">
                                <a class="open konten-fasilitas nav-link nav-profile" data-target="#rekanan-perusahaan-konten" data-toggle="tab" href="#rekanan-perusahaan-konten" aria-controls="rekanan-perusahaan-konten" aria-expanded="false" role="tab" data-parent="#submenu4" id="sub-rekanan-perusahaan"> Rekanan
                                  Perusahaan</a>
                              </li>
                              <li class="nav-item">
                                <a class="konten-fasilitas nav-link nav-profile" data-toggle="tab" href="#rekanan-asuransi-content" aria-controls="rekanan-asuransi-content" aria-expanded="false" role="tab" data-parent="#submenu4"> Rekanan Asuransi</a>
                              </li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nav-profile" data-toggle="collapse" role="tab" href="#indikator-mutu-konten" aria-controls="indikator-mutu-konten" aria-expanded="true" data-parent="#menu-fasilitas-rs" id="indikator-mutu-tab"><b>Indikator Mutu</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nav-profile" data-toggle="collapse" role="tab" href="#sertifikasi-konten" aria-controls="sertifikasi-konten" aria-expanded="true" data-parent="#menu-fasilitas-rs" id="sertifikasi-tab"><b>Sertifikasi</b></a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                  <div class="col-md-8 col-sm-8 tab-content content-gray content-fasilitas-rs">
                    <div class="collapse tab-pane in active" id="layanan-unggulan-konten" role="tabpanel" aria-labelledby="layanan-unggulan">
                      <h3 class="text-pink"><b>Layanan Unggulan</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-rekanan-asuransi" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-rekanan-asuransi" class="panel-title-sc panel-title" data-target="#paket-laparoskopi0">Laparoskopi</h4>
                            </div>
                            <div id="paket-laparoskopi0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p>Metode operasi yang cukup popular di bidang kasus bedah,
                                  kebidanan &amp; kandungan dengan sayatan kecil sehingga masa
                                  pemulihan lebih cepat (Minimal invasive). Teknik Laparoskopi
                                  ini dapat digunakan sebagai alat diagnostic dan terapeutik
                                  (pengobatan).</p>
                                <p><img src="../../mitrakeluarga.com/source/test/3.%20Laparoskopi.jpg" alt="3. Laparoskopi" width="3888" height="2592"></p>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-rekanan-asuransi" class="collapsed panel-title-sc panel-title" data-target="#paket-cathlab1">Cath Lab&nbsp;</h4>
                            </div>
                            <div id="paket-cathlab1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan angiography/kateterisasi menjadi pemeriksaan yang
                                  paling penting dan paling menentukan di dalam menangani
                                  penderita penyakit jantung koroner. Atau dengan kata lain
                                  angiography adalah gold standard yang diakui secara
                                  internasional.</p>
                                <p>Permatan Keluarga <?= $rs  ?> telah memiliki kemampuan untuk melakukan
                                  pengobatan secara paripurna baik dari segi kompetensi tenaga
                                  medis dan fasilitasnya. WARU HEART CLINIC hadir sebagai
                                  salah satu upaya untuk menangani penderita penyakit jantung
                                  koroner secara komprehensif, dimana semua prosedur dapat
                                  diselesaikan dalam 1 hari (one day care) yang memiliki
                                  benefit dengan mengurangi LoS (length of stay).</p>
                                <p>Waru Heart Clinic</p>
                                <p>RS Permata Keluarga <?= strtoupper($rs) ?>, Lt. 2</p>
                                <p>Jl. Jend S. Parman no 8 Waru – Sidoarjo</p>
                                <p>031-8542111 / 031-8543111</p>
                                <p>waru@mitrakeluarga.com</p>
                                <p><img src="../../mitrakeluarga.com/source/WARU/CATH%20LAB.JPG" alt="CATH LAB" width="1280" height="722"></p>
                                <p><img src="../../mitrakeluarga.com/source/WARU/PLDD%20PAIN%20CLINIC.JPG" alt="PLDD PAIN CLINIC" width="1280" height="720"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-rekanan-asuransi" class="collapsed panel-title-sc panel-title" data-target="#paket-heartclinic2">Heart Clinic</h4>
                            </div>
                            <div id="paket-heartclinic2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Waru Heart Clinic merupakan bentuk kepedulian RS Mitra
                                  Keluarga Waru akan kebutuhan layanan khusus untuk penyakit
                                  jantung yang nyaman, modern dan canggih dengan sistem
                                  “One stop diagnostic and treatment”, yang
                                  didukung oleh para ahli medis, paramedic dan petugas non
                                  medis yang berpengalaman serta dedikasi tinggi.</p>
                                <p><strong>Fasilitas &amp; Pelayanan </strong></p>
                                <ol>
                                  <li>Preventive Heart &amp; Vascular Care (Pencegahan)</li>
                                  <li>Cardiac Health Screening (Pemeriksaan/Diagnostik),
                                    antara lain:</li>
                                </ol>
                                <ul>
                                  <li>ECG :&nbsp; Electrocardiography (Rekam Jantung)</li>
                                  <li>Treadmill :&nbsp; Stress Testing (Uji Latih Jantung)
                                  </li>
                                  <li>Echo/Vascular Doppler (USG Jantung/pembuluh darah)</li>
                                  <li>Chest X-Ray (Rontgen Dada)</li>
                                  <li>Multi Slice CT Cardiac (Pemotretan Jantung dengan CT
                                    Scan)</li>
                                  <li>Angiografi Koroner (Coronary Angiography) &amp;
                                    Angiografi Pembuluh Tepi (Peripheral Angiography)</li>
                                  <li>Heart Catheterisation (Kateterisasi Jantung)</li>
                                </ul>
                                <ol>
                                  <li>Consultation &amp; Second Opinion (Konsultasi)</li>
                                  <li>Treatment (Terapi/Pengobatan), antara lain:</li>
                                </ol>
                                <ul>
                                  <li>PCI (Coronary Angioplasty/Stent) :&nbsp; Pemasangan
                                    Stent (Kasus koroner)</li>
                                  <li>Permanent Pacemaker (Pemasangan pacu jantung permanen)
                                  </li>
                                  <li>Heart Failure (Gagal Jantung)</li>
                                  <li>Hypertention (Tekanan darah tinggi)</li>
                                </ul>
                                <ol>
                                  <li>Cardiac Rehabilitation</li>
                                  <li>Cardiac Emergency Treatment (24 hours), antara lain:
                                  </li>
                                </ol>
                                <ul>
                                  <li>Emergency Service (Gawat darurat)</li>
                                  <li>Primary PCI (Pelebaran pembuluh koroner &amp; pemasangan
                                    stent – tanpa penundaan)</li>
                                  <li>Temporary Pacemaker (Pemasangan pacu jantung sementara)
                                  </li>
                                  <li>Ambulance</li>
                                </ul>
                              </div>
                            </div>
                          </div>








                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-rekanan-asuransi" class="collapsed panel-title-sc panel-title" data-target="#paket-painclinicinterventionalpainmanagementipm3"><strong>Pain Clinic -&nbsp;</strong><strong>INTERVENTIONAL
                                  PAIN MANAGEMENT &lt; IPM &gt;</strong></h4>
                            </div>
                            <div id="paket-painclinicinterventionalpainmanagementipm3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>IPM adalah metoda tata laksana nyeri kronis degan menggunakan
                                  alat – alat intervensi non pembedahan&nbsp; yang dalam
                                  pelaksaan&nbsp; harus&nbsp; menggunakan sarana
                                  penuntun/guiding secara live &lt; tidak boleh blind &gt;.
                                </p>
                                <ol>
                                  <li>Fasilitas penuntun / guiding</li>
                                </ol>
                                <p>USG dan C Arm</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  Sarana Intervensi</p>
                                <ul>
                                  <li>Radio Frequency &lt; RF &gt;</li>
                                  <li>Laser</li>
                                  <li>PRP &lt; Platelet Rich Plasma &gt;</li>
                                  <li>Obat anesthesi lokal</li>
                                  <li>Corticosteroid</li>
                                  <li>Hyaluridase</li>
                                  <li>NaCl Pekat 3 % dan 10 %</li>
                                  <li>Alkohol 90 %</li>
                                  <li>Dextrose pekat</li>
                                  <li>Botox</li>
                                </ul>
                                <ol start="2">
                                  <li>Sarana penunjang sebelum tindakan IPM</li>
                                </ol>
                                <p>Pasien setelah diperiksa keadaan klinis nyerinya oleh seorang
                                  Pain Physician selanjutnya akan diperiksa dengan alat
                                  penunjang ;</p>
                                <ul>
                                  <li>USG</li>
                                  <li>Photo Roentgen</li>
                                  <li>CT scan atau</li>
                                  <li>MRI</li>
                                </ul>
                                <ol start="3">
                                  <li>Pasien yg memerlukan pelayanan IPM</li>
                                </ol>
                                <ul>
                                  <li>Pasien yg mengalami nyeri kronis ( nyeri kronis adalah
                                    nyeri menetap atau bertambah setelah 3 bulan baik dengan
                                    terapi maupun tidak )</li>
                                  <li>Nyeri kronis dari ujung kaki hingga kepala mis. Nyeri
                                    kepala ataupun leher yg sdh lebih dari 3 bulan , nyeri
                                    menetap atau bertambah meskipun sdh diberikan obat -
                                    obatan ataupun tindakan rehabilitasi medik.</li>
                                  <li>Nyeri paska operasi yg menetap</li>
                                  <li>Nyeri kronis akibat kanker</li>
                                  <li>Pasien PTSD ( Post Traumatic Stress Disorder ) yakni
                                    stress akibat trauma fisik maupun psikologis.</li>
                                </ul>
                                <ol start="4">
                                  <li>Pasien di rujuk ke Pain Clinic bila ;</li>
                                </ol>
                                <ul>
                                  <li>Nyeri kronis yg tidak hilang baik setelah pemberian obat
                                    – obatan maupun tindakan rehabilitasi medik</li>
                                  <li>Meliputi nyeri kronis dari ujung kepala hingga ujung
                                    kaki</li>
                                  <li>Nyeri yg muncul ataupun menetap paska operasi</li>
                                  <li>Nyeri kanker</li>
                                </ul>
                                <ol start="5">
                                  <li>Perbedaan dengan terapi nyeri konvensional ;</li>
                                </ol>
                                <ul>
                                  <li>Tidak menggunakan obat minum</li>
                                  <li>Tidak menggunakan sayatan operasi</li>
                                  <li>Pada IPM mutlak dibutuhkan sarana penuntun / guiding
                                    untuk bisa mencapai sumber nyeri dengan pasti tanpa
                                    meraba – raba / blind, dengan demikian keamanan /
                                    safety terjamin.</li>
                                  <li>Dikerjakan dengan standart sterilisasi yang memadai.
                                  </li>
                                  <li>Sebelum dilakukan terapi IPM mutlak harus diketahui
                                    sumber nyerinya / diagnosanya secara klinis dan
                                    disesuaikan sarana pemeriksaan penunjang ( MRI dll ).
                                  </li>
                                </ul>
                                <ol start="6">
                                  <li>Keunggulan IPM dibandingkan terapi konvensional</li>
                                </ol>
                                <ul>
                                  <li>Menghilangkan nyeri langsung dari sumbernya</li>
                                  <li>Nyeri dihilangkan atau dikurangi secara permanen</li>
                                  <li>Tidak menggunakan obat minum sehingga tidak ada
                                    komplikasi ke Ginjal, Lever, ataupun Lambung</li>
                                  <li>Bukan metode pembedahan sehingga tidak ada bekas sayatan
                                    operasi dan jarang sekali di butuhkan pembiusan umum
                                    kareana pelaksanaannya relatif tidak menyakitkan</li>
                                  <li>Bisa dikerjakan secara ODC / tanpa mondok</li>
                                  <li>Komplikasi sangat minim</li>
                                </ul>
                                <p>Kekurangannya ;</p>
                                <ul>
                                  <li>Sarana intervensi dan penuntunnya membutuhkan peralatan
                                    canggih sehingga harganya relatif mahal bila di
                                    bandingkan dengan terapi konvensional</li>
                                  <li>Namun demikian bila di bandingkan pembedahan tetap
                                    relatif lebih murah</li>
                                  <li>Pada keadaan tertentu diperlukan tindakan yang berulang
                                    secara terprogram waktunya.</li>
                                </ul>
                                <ol start="7">
                                  <li>Pasien yg harus di terapi IPM;</li>
                                </ol>
                                <ul>
                                  <li>Pasien dengan Nyeri Pinggang Kronis</li>
                                  <li>Pasien HNP mulai daerah leher hingga pinggang</li>
                                  <li>Pasien OA Lutut grd III dan IV yg seharusnya di operasi
                                    tapi pasien menolak atau ada sakit lain yg berat</li>
                                  <li>Nyeri akibat herpes ( PHN )</li>
                                  <li>Nyeri hebat kepala</li>
                                  <li>Nyeri hebat wajah</li>
                                  <li>Nyeri hebat leher</li>
                                  <li>Nyeri bahu yang tidak kunjung membaik</li>
                                  <li>Nyeri akibat jepitan di syaraf perifer / tepi, mis.
                                    CTS,TTS, dll.</li>
                                </ul>
                                <ol start="8">
                                  <li>Prosedur IPM;</li>
                                </ol>
                                <ul>
                                  <li>PLDD ( Percutaneous Laser Disc Decompression ) untuk HNP
                                    dari daerah leher hingga pinggang</li>
                                  <li>Radio Frequency ( RF ) pada nyeri kepala maupun leher
                                    yang hebat</li>
                                  <li>RF pada nyeri pinggang</li>
                                  <li>RF pada Nyeri Kanker</li>
                                  <li>Neurolysis pada nyeri kanker / mematikan syaraf
                                    penghantar nyeri</li>
                                  <li>Epidurolysis pada nyeri akibat perlengketan serat syaraf
                                  </li>
                                  <li>Proloterapy pada myofascial pain / otot – fascia
                                  </li>
                                  <li>Pemberian Botox pada nyeri otot</li>
                                  <li>Pemberian Hyaluronidase dan PRP pada OA</li>
                                  <li>Injeksi Corticosteroid dan PRP pada Bursitis</li>
                                </ul>
                                <ol start="9">
                                  <li>Tingkat keberhasilan IPM</li>
                                </ol>
                                <ul>
                                  <li>Tingkat keberhasilan IPM rata – rata di atas 80% (
                                    sangat bagus ) oleh karena semua prosedur dikerjakan
                                    secara live dengan penuntun jadi target terapi terarah
                                    bukan secara membabi buta / blind</li>
                                </ul>
                                <ol start="10">
                                  <li>Komplikasi</li>
                                </ol>
                                <ul>
                                  <li>Sangat minimal</li>
                                  <li>Kalaupun ada komplikasi biasanya bersifat sementar</li>
                                  <li>Yang lebih penting tidak ada komplikasi pada organ2
                                    penting spt Ginjal, Lever dan Lambung karena semua
                                    terapi di lakukan langsung pada organ yg menimbulkan
                                    nyeri.</li>
                                </ul>
                                <p>&nbsp;</p>
                                <ol start="11">
                                  <li>Pelayanan IPM perannya akan semakin besar dalam rangka
                                    meningkatkan kualitas hidup seseorang, oleh karena
                                    beberapa alasan</li>
                                </ol>
                                <ul>
                                  <li>Hampir 60 % penderita datang ke RS dengan keluhan utama
                                    Nyeri</li>
                                  <li>Seringkali kali sifat nyeri tidak spesifik sehingga
                                    terapi obat2an sering kali gagal</li>
                                  <li>Tidak semua pasien dengan keluhan nyeri bisa dioperasi
                                    sehingga peran IPM akan semakin besar</li>
                                  <li>Beberapa metode operasi bedah terbuka sudah mulai
                                    ditinggalkan beralih ke teknologi minimal invasif
                                    seperti IPM</li>
                                </ul>
                                <ol start="12">
                                  <li>Target pelayanan IPM</li>
                                </ol>
                                <p>Secara garis besar dapat disimpulkan</p>
                                <ol>
                                  <li>Meningkatkan kualitas hidup dan produktivitas pasien
                                    dengan nyeri kronis / menahun dengan cara menghilangkan
                                    ataupun menurunkan keluhan nyeri yg sdh menggangu ;
                                    kualiatas tidur, produktifitas kerja, ketergantungan
                                    pada lingkungan, menimbulkan kelemahan ataupun kecacatan
                                    anggota gerak karena nyeri yg hebat setiap mobilisasi
                                  </li>
                                  <li>Menurunkan pemakaian obat – obatan anti nyeri yang
                                    seringkali berakibat fatal di Ginjal, Lever, Lambung dll
                                  </li>
                                  <li>Mengurangi beban operasi bedah terbuka yang sering kali
                                    menyebabkan nyeri menetap atau nyeri baru paska operasr
                                  </li>
                                  <li>Meringankan/menghilangkan Nyeri Kanker yg seringkali
                                    lebih hebat daripada kankernya itu sendiri</li>
                                </ol>
                                <p><img src="../../mitrakeluarga.com/source/WARU/PAIN%20CLINIC%20JP.jpg" alt="PAIN CLINIC JP" width="531" height="1024"></p>
                                <p><img src="../../mitrakeluarga.com/source/WARU/PAIN%20CLINIC.jpg" alt="PAIN CLINIC" width="976" height="1024"></p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-rekanan-asuransi" class="collapsed panel-title-sc panel-title" data-target="#paket-unithemodialisis4"><strong>Unit Hemodialisis</strong></h4>
                            </div>
                            <div id="paket-unithemodialisis4" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>&nbsp;</p>
                                <p>Hemodialisis merupakan salah satu bentuk terapi pada
                                  penderita gagal ginjal. Pada proses hemodialisis, sebuah
                                  mesin beserta perangkatnya akan membuang zat-zat&nbsp; sisa,
                                  garam, racun dan kelebihan cairan dari dalam tubuh.
                                  Hemodialisis merupakan prosedur yang sangat umum dilakukan
                                  pada pasien dengan penyakit ginjal yang sudah stadium
                                  lanjut. Prosedur ini akan membantu pasien dengan gagal
                                  ginjal untuk menjalani hidup aktif seperti biasanya. Pasien
                                  yang menjalani hemodialisis rutin, harus menjalankan jadwal
                                  hemodialisis yang teratur sesuai dengan instruksi dokter.
                                  Selain itu, mereka juga harus menjalani diet khusus pasien
                                  hemodialisis dan mengkonsumsi obat-obatan secara teratur.
                                </p>
                                <p>Permata Keluarga <?= strtoupper($rs) ?>saat ini telah mengembangkan ‘Unit
                                  Hemodialisis’ dengan mesin-mesin yang dapat
                                  mempergunakan dialisat baik acetat maupun bikarbonat serta
                                  di dukung oleh personil yang professional dan terampil.</p>
                                <p><img src="../../mitrakeluarga.com/source/WARU/HEMODIALISA.JPG" alt="HEMODIALISA" width="1280" height="722"></p>
                              </div>
                            </div>
                          </div>




                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="penunjang-medis-content" role="tabpanel">
                      <h3 class="text-pink"><b>Penunjang Medis</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-penunjang-medis" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-penunjang-medis" class="panel-title-sc panel-title" data-target="#paket-laboratoriumklinik0">Laboratorium Klinik</h4>
                            </div>
                            <div id="paket-laboratoriumklinik0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li>Hematologi</li>
                                  <li>Kimia Darah</li>
                                  <li>Imunologi &amp; Serologi</li>
                                  <li>Urinalisis</li>
                                  <li>Mikrobiologi</li>
                                  <li>Analisa Gas Darah</li>
                                  <li>Elektrolit</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-penunjang-medis" class="collapsed panel-title-sc panel-title" data-target="#paket-radiologi1">Radiologi</h4>
                            </div>
                            <div id="paket-radiologi1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li><strong>Panaromic, Dental Foto dan
                                      Cephalomerti<br></strong>Merupakan foto gigi dan
                                    rahang yang umumnya diperlukan oleh dokter gigi.</li>
                                  <li><strong>Rontgen<br></strong>
                                    <ul>
                                      <li>Fluoroscopy</li>
                                      <li>C-Arm</li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-penunjang-medis" class="collapsed panel-title-sc panel-title" data-target="#paket-diagnostik2">Diagnostik</h4>
                            </div>
                            <div id="paket-diagnostik2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li><strong>MSCT Scan</strong><br>Pemeriksaan menggunakan
                                    CT Scan yang dapat mendeteksi kelainan-kelainan seperti
                                    perdarahan otak, tumor otak, kelainan-kelainan tulang,
                                    kelainan di rongga dada &amp; rongga perut dan khususnya
                                    mendeteksi kelainan pembuluh darah jantung (koroner) dan
                                    pembuluh darah umumnya (seperti penyempitan pembuluh
                                    darah ginjal, dll). Lama pemeriksaan mulai dari beberapa
                                    detik sampai 2 jam.</li>
                                  <li><strong>USG 2D<br></strong>Adalah pemeriksaan dengan
                                    menggunakan ultrasound (gelombang suara) untuk menilai
                                    organ tubuh.<strong><br></strong></li>
                                  <li><strong>USG Doppler<br></strong>Adalah pemeriksaan
                                    dengan menggunakan ultrasound (gelombang suara) untuk
                                    menilai organ tubuh.</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-penunjang-medis" class="collapsed panel-title-sc panel-title" data-target="#paket-fasilitasmcu3">Fasilitas MCU</h4>
                            </div>
                            <div id="paket-fasilitasmcu3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;">&nbsp;</p>
                                <ul>
                                  <li>Audiometri</li>
                                  <li>Tonometri</li>
                                  <li>Treadmill</li>
                                  <li>EKG</li>
                                  <li>Ekokardiografi</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-penunjang-medis" class="collapsed panel-title-sc panel-title" data-target="#paket-rehabilitasimedik4">Rehabilitasi Medik</h4>
                            </div>
                            <div id="paket-rehabilitasimedik4" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li>Fisioterapi</li>
                                  <li>Terapi Okupasi</li>
                                  <li>Terapi Wicara</li>
                                  <li>Ortotik – Prostetik</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="collapse tab-pane fade" id="ruang-perawatan-content" role="tabpanel">
                      <h3 class="text-pink"><b>Ruang Perawatan</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-ruang-perawatan" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-ruang-perawatan" class="panel-title-sc panel-title" data-target="#paket-anak0">Anak</h4>
                            </div>
                            <div id="paket-anak0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/MKW%20TARIF.jpg" alt="MKW TARIF"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-ruang-perawatan" class="collapsed panel-title-sc panel-title" data-target="#paket-khusus1">Khusus</h4>
                            </div>
                            <div id="paket-khusus1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/MKW%20TARIF%20-%20Copy.jpg" alt="MKW TARIF - Copy"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-ruang-perawatan" class="collapsed panel-title-sc panel-title" data-target="#paket-umumanak2">Umum - Anak</h4>
                            </div>
                            <div id="paket-umumanak2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img class="vc_single_image-img attachment-full" src="../../mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-1.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-1.jpg 1024w, https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-1-300x200.jpg 300w, https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-1-768x512.jpg 768w" alt="" width="1024" height="683"><img src="../../mitrakeluarga.com/source/MKW%20TARIF%202017.jpg" alt="MKW TARIF 2017"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-ruang-perawatan" class="collapsed panel-title-sc panel-title" data-target="#paket-kebidanan3">Kebidanan</h4>
                            </div>
                            <div id="paket-kebidanan3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/MKW%20TARIF%202017%20-%20Copy.jpg" alt="MKW TARIF 2017 - Copy"><img class="vc_single_image-img attachment-full" src="../../mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-2.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-2.jpg 1024w, https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-2-300x200.jpg 300w, https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-2-768x512.jpg 768w" alt="" width="1024" height="683"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-ruang-perawatan" class="collapsed panel-title-sc panel-title" data-target="#paket-umum4">Umum</h4>
                            </div>
                            <div id="paket-umum4" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><a class="prettyphoto" href="../../mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-III-A-1024x683.jpg" data-rel="prettyPhoto[rel-6395-1679345247]"><img class="attachment-full" src="../../mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-III-A.jpg" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-III-A.jpg 1024w, https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-III-A-300x200.jpg 300w, https://mitrakeluarga.com/waru/wp-content/uploads/sites/23/2016/01/KELAS-III-A-768x512.jpg 768w" alt="" width="1024" height="683"></a><img src="../../mitrakeluarga.com/source/MKW%20TARIF%202017%20-%20Copy%20(2).jpg" alt="MKW TARIF 2017 - Copy (2)"></p>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="poliklinik-content" role="tabpanel">
                      <h3 class="text-pink"><b>Poliklinik</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-poliklinik" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-poliklinik" class="panel-title-sc panel-title" data-target="#paket-poliklinikumum0"><strong>Poliklinik Umum</strong></h4>
                            </div>
                            <div id="paket-poliklinikumum0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li>
                                    <div>Dokter Umum</div>
                                  </li>
                                  <li>Dokter Gigi</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-poliklinik" class="collapsed panel-title-sc panel-title" data-target="#paket-poliklinikspesialis1"><strong>Poliklinik Spesialis</strong></h4>
                            </div>
                            <div id="paket-poliklinikspesialis1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li>Anak</li>
                                  <li>Kebidanan &amp; Kandungan</li>
                                  <li>Penyakit Dalam</li>
                                  <li>Bedah Umum</li>
                                  <li>Jantung &amp; Pembuluh Darah</li>
                                  <li>Kulit &amp; Kelamin</li>
                                  <li>THT</li>
                                  <li>Paru &amp; Pernapasan</li>
                                  <li>Mata</li>
                                  <li>Saraf</li>
                                  <li>Saluran Kemih</li>
                                  <li>Rehabilitasi Medik</li>
                                  <li>Perataan Gigi</li>
                                  <li>Konservasi Gigi</li>
                                  <li>Psikiatri</li>
                                  <li>Psikologi</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-poliklinik" class="collapsed panel-title-sc panel-title" data-target="#paket-polikliniksubspesialis2"><strong>Poliklinik Sub Spesialis</strong></h4>
                            </div>
                            <div id="paket-polikliniksubspesialis2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li>Ginjal &amp; Hipertensi</li>
                                  <li>Gastroenterologi Hepatologi</li>
                                  <li>Bedah Orthopedi &amp; Traumatologi</li>
                                  <li>Bedah Saluran Kemih</li>
                                  <li>Bedah Digestif</li>
                                  <li>Bedah Saraf</li>
                                  <li>Bedah Tumor</li>
                                  <li>Bedah Toraks Kardiovaskular</li>
                                  <li>Bedah Plastik</li>
                                  <li>Bedah Mulut</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pelayanan-umum-content" role="tabpanel">
                      <h3 class="text-pink"><b>Pelayanan Umum</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-pelayanan-umum" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-umum" class="panel-title-sc panel-title" data-target="#paket-instalasigawatdarurat24jam0"><strong>Instalasi Gawat Darurat 24 jam</strong></h4>
                            </div>
                            <div id="paket-instalasigawatdarurat24jam0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi :</p>
                                <p style="padding-left: 30px;">Merupakan instalasi yang melayani
                                  hal-hal yang berkenaan dengan kegawatdaruratan medik bagi
                                  pasien dan keluarganya serta pertolongan pengobatan pada
                                  hari-hari libur / minggu. Kegawatdaruratan pada unit ini
                                  dilayani oleh perawat serta dokter.</p>
                                <p>Pelayanan-Pelayanan yang diberikan adalah :</p>
                                <ul>
                                  <li>Pemeriksaan &amp; Pengobatan</li>
                                  <li>Penanganan Luka Pada Pasien Kecelakaan</li>
                                  <li>Pertolongan Pertama Pada Pasien Henti Napas/ Henti
                                    Jantung / Kesadaran Menurun</li>
                                  <li>Ambulan<br>Pelayanan untuk menjemput pasien dari rumah
                                    atau lokasi pasien berada ke Nama Kantor atau
                                    sebaliknya. Fasilitas ambulan terdiri dari monitor
                                    lengkap, peralatan emergensi, brancar (tandu), scope
                                    stretcher (untuk memindahkan pasien dari tempat tidur ke
                                    brancar ambulan dan sebaliknya), tenaga perawat dan
                                    dokter jaga (bila diperlukan).</li>
                                </ul>
                                <p>Fasilitas :</p>
                                <ul>
                                  <li>Ruang Resusitasi, dilengkapi dengan peralatan emergensi
                                    lengkap, monitor &amp; defibrillator, ECG.</li>
                                  <li>Ruang Pemeriksaan &amp; Tindakan Bedah maupun Medikal
                                  </li>
                                  <li>Ruang PONEK</li>
                                </ul>
                                <p>Pelayanan 24 Jam Lainnya :</p>
                                <ul>
                                  <li>Radiologi (CT Scan, X-ray, USG, Panoramic)</li>
                                  <li>Laboratorium</li>
                                  <li>Farmasi</li>
                                </ul>
                                <p>Informasi &amp; Pelayanan :</p>
                                <ul>
                                  <li>Counter Rawat Inap (031) 8542111 / (031) 8543111 Ext.
                                    1500 - 1502</li>
                                  <li>Direct IGD : (31) 8546996</li>
                                </ul>
                              </div>
                            </div>
                          </div>










                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-umum" class="collapsed panel-title-sc panel-title" data-target="#paket-pelayananambulans1">Pelayanan Ambulans</h4>
                            </div>
                            <div id="paket-pelayananambulans1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pelayanan untuk menjemput pasien dari rumah atau lokasi
                                  pasien berada ke Nama Kantor atau sebaliknya. Fasilitas
                                  ambulans terdiri dari monitor lengkap, peralatan emergensi,
                                  brancar (tandu), scope stretcher (untuk memindahkan pasien
                                  dari tempat tidur ke brancar ambulans dan sebaliknya),
                                  tenaga perawat dan dokter jaga (bila diperlukan).</p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-umum" class="collapsed panel-title-sc panel-title" data-target="#paket-pelayananspesialistikpelayanangigi2">Pelayanan Spesialistik &amp; Pelayanan Gigi</h4>
                            </div>
                            <div id="paket-pelayananspesialistikpelayanangigi2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <ul>
                                  <li>Dokter Spesialis Anak (1 Konsultan Neonatologi, 1
                                    Konsultan Gastroenterohepatologi anak))</li>
                                  <li>Dokter Spesialis Obgyn ( 1 Konsultan Fetomaternal)</li>
                                  <li>Dokter Spesialis Penyakit Dalam (1 Konsultan Endokrin, 1
                                    Konsultan Nefrologi)</li>
                                  <li>Dokter Spesialis Bedah Umum</li>
                                  <li>Dokter Spesialis Orthopedi</li>
                                  <li>Dokter Konsultan Bedah Digestif</li>
                                  <li>Dokter Spesialis Urologi</li>
                                  <li>Dokter Spesialis Bedah Saraf</li>
                                  <li>Dokter Spesialis Bedah Plastik</li>
                                  <li>Dokter Konsultan Bedah Onkologi</li>
                                  <li>Dokter Spesialis Bedah Thorax &amp; Kardiovaskuler</li>
                                  <li>Dokter Spesialis Bedah Anak</li>
                                  <li>Dokter Spesialis Jantung &amp; Pembuluh Darah (1 Dokter
                                    Cardiologi Intervensi)</li>
                                  <li>Dokter Spesialis Kulit &amp; Kelamin</li>
                                  <li>Dokter Spesialis THT</li>
                                  <li>Dokter Spesialis Mata</li>
                                  <li>Dokter Spesialis Saraf</li>
                                  <li>Dokter Spesialis Paru</li>
                                  <li>Dokter Spesialis Kesehatan Jiwa</li>
                                  <li>Dokter Spesialis Anestesi (1 Konsultan Cardioanestesi, 1
                                    Konsultan Neuroanestesi, 1 Konsultan Intesive Care)</li>
                                  <li>Dokter Spesialis Rehabilitasi Medik</li>
                                  <li>Dokter Spesialis Patologi Klinik (Konsultan Hematologi)
                                  </li>
                                  <li>Dokter Spesialis Patologi Anatomi</li>
                                  <li>Dokter Spesialis Radiologi</li>
                                  <li>Dokter Gigi Umum</li>
                                  <li>Dokter Gigi Spesialis: Prostodontie, Periodontie,
                                    Pedodontie, Konservasi Gigi, Orthodontie, Bedah Mulut
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pelayanan-khusus-content" role="tabpanel">
                      <h3 class="text-pink"><b>Pelayanan Khusus</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-pelayanan-khusus" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="panel-title-sc panel-title" data-target="#paket-intensivecareuniticu0">Intensive Care Unit (ICU)</h4>
                            </div>
                            <div id="paket-intensivecareuniticu0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi&nbsp;</p>
                                <p style="padding-left: 30px;">Intensive Care Unit (ICU) adalah
                                  suatu bagian dari Nama Kantor dengan staf yang khusus dan
                                  perlengkapan yang khusus ditujukan untuk observasi,
                                  perawatan dan terapi pasien-pasien yang menderita penyakit,
                                  cedera atau penyulit-penyulit yang mengancam nyawa atau
                                  potensial mengancam nyawa dengan prognosis dubia.</p>
                                <p>Ruang Lingkup</p>
                                <p style="padding-left: 30px;">Ruang lingkup pelayanan yang
                                  diberikan di ICU adalah sebagai berikut :</p>
                                <ul>
                                  <li>Diagnosis dan penatalaksanaan sepsifik penyakit-penyakit
                                    akut yang mengancam nyawa dan dapat menimbulkan kematian
                                    dalam beberapa menit sampai sampai beberapa hari.</li>
                                  <li>Memberi bantuan dan mengambil alih fungsi vital tubuh
                                    sekaligus melakukan pelaksanaan spesifik probelma dasar.
                                  </li>
                                  <li>Pemantauan fungsi vital tubuh dan penatalaksanaan
                                    terhadap komplikasi yang ditimbulkan oleh penyakit atau
                                    iatrogenik.</li>
                                  <li>Memberikan bantuan psikologis pada pasien yang
                                    kehidupannya sangat tergantung pada alat/ mesin dan
                                    orang lain.</li>
                                </ul>
                              </div>
                            </div>
                          </div>





                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="collapsed panel-title-sc panel-title" data-target="#paket-intermediatecare1">Intermediate Care</h4>
                            </div>
                            <div id="paket-intermediatecare1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi</p>
                                <p style="padding-left: 30px;">Intermediate Care Unit adalah
                                  Unit pelayanan di Nama Kantor bagi pasien dengan kondisi
                                  respirasi, hemodinamik, dan kesadaran yang stabil yang masih
                                  memerlukan pengobatan, perawatan, dan observasi secara
                                  ketat.</p>
                                <p>Ruang Lingkup</p>
                                <p style="padding-left: 30px;">Ruang lingkup intermediate care
                                  meliputi : Pelayanan HCU/ IMC diberikan kepada pasien dengan
                                  kondisi kritis stabil yang membutuhkan pelayanan, pengobatan
                                  dan observasi secara ketat. Bidang kerja HCU meliputi
                                  pengelolaan pasien, administrasi unit, pendidikan dan
                                  pelatihan kebutuhan dari masing-masing bidang akan
                                  tergantung dari tingkat pelayanan tiap unit</p>
                                <p>Sarana</p>
                                <p style="padding-left: 30px;">Oksigen Sentral, Ventilator, Bed
                                  side monitor, Sentral monitor,Suction sentral, Monitor
                                  invasif, EKG, DC shock, Trolley emergensi.</p>
                              </div>
                            </div>
                          </div>






                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="collapsed panel-title-sc panel-title" data-target="#paket-neonatalintensivecareunitnicu2">Neonatal Intensive Care Unit (NICU)</h4>
                            </div>
                            <div id="paket-neonatalintensivecareunitnicu2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi</p>
                                <ul>
                                  <li>Perinatologi :&nbsp;fasilitas rawat inap yang disediakan
                                    khusus untuk pasien bayi baru lahir -12 bulan.
                                    Sedangkan&nbsp; untuk bayi baru lahir yang sehat dirawat
                                    di ruang bersama ibunya (Gabung ruang)</li>
                                  <li>Neonatal Intensive Care Unit (NICU) :&nbsp;Unit
                                    perawatan intensif neonatal adalah sebuah unit di rumah
                                    sakit yang ditangani oleh tim yang terdiri dari dokter
                                    dan perawat yang terlatih dalam merawat bayi lahir
                                    prematur atau dengan kebutuhan khusus</li>
                                  <li>Pediatric Care Unit (PICU) :<strong>&nbsp;</strong>Suatu
                                    unit perawatan yang merawat klien anak 29 hari - 14
                                    tahun dengan keadaan gawat atau berat yang sewaktu-waktu
                                    dapat meninggal, dan mempunyai harapan untuk sembuh
                                    apabila dirawat secara intensif.</li>
                                </ul>
                                <p>Sarana</p>
                                <p style="padding-left: 30px;">Ventilator, C-PAP, Bedside
                                  monitor, Sentral oxygen, Sentral suction, Trolley Emergency,
                                  Oksigen Analyzer &amp; Neo Puff resuscitation</p>
                                <p style="padding-left: 30px;">NICU</p>
                                <p style="padding-left: 30px;"><img src="../../mitrakeluarga.com/source/WARU/NICU%201.JPG" alt="NICU 1"></p>
                                <p style="padding-left: 30px;">PICU</p>
                                <p style="padding-left: 30px;"><img src="../../mitrakeluarga.com/source/WARU/PICU.JPG" alt="PICU"></p>
                              </div>
                            </div>
                          </div>








                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="collapsed panel-title-sc panel-title" data-target="#paket-kamarbedah3">Kamar Bedah</h4>
                            </div>
                            <div id="paket-kamarbedah3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi</p>
                                <p style="padding-left: 30px;">Suatu unit khusus di Nama Kantor,
                                  tempat untuk melakukan tindakan pembedahan baik elektif
                                  maupun akut yang membutuhkan keadaan steril</p>
                                <p>Ruang Lingkup</p>
                                <p style="padding-left: 30px;">Unit kamar bedah Permatan Keluarga
                                  Waru berada di lantai 2, dilengkapi dengan fasilitas ruang
                                  tunggu yang nyaman dan pelayanan yang cepat serta didukung
                                  dengan tenaga professional dan fasilitas peralatan yang
                                  lengkap dan canggih, pelayanan pembedahan yang dapat
                                  dilakukan antara lain meliputi :</p>
                                <ul>
                                  <li>Bedah Umum</li>
                                  <li>Bedah Obgyn</li>
                                  <li>Bedah Orthopedi</li>
                                  <li>Bedah Syaraf</li>
                                  <li>Bedah Tumor</li>
                                  <li>Bedah Plastik</li>
                                  <li>Bedah Jantung dan Pembuluh Darah</li>
                                  <li>Bedah Thorax</li>
                                  <li>Bedah Mata</li>
                                  <li>Bedah Urologi</li>
                                  <li>Bedah THT</li>
                                </ul>
                                <p>Pelayanan kamar bedah Permata Keluarga <?= strtoupper($rs) ?>melayani permintaan
                                  operasi 24 jam, baik pasien yang berasal dari rawat jalan,
                                  rawat inap, IGD, maupun rujukan, serta melakukan berbagai
                                  macam tindakan bedah. Sebagai penunjang pelayanan kamar
                                  bedah telah menggunakan peralatan canggih dan cukup lengkap.
                                </p>
                              </div>
                            </div>
                          </div>






                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="collapsed panel-title-sc panel-title" data-target="#paket-kamarbersalin4">Kamar Bersalin</h4>
                            </div>
                            <div id="paket-kamarbersalin4" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi</p>
                                <p style="padding-left: 30px;">Ruangan yang berfungsi membantu
                                  proses kelahiran bayi secara partus atau normal.</p>
                                <p>Ruang Lingkup</p>
                                <p style="padding-left: 30px;">Penerapan program kerja kamar
                                  bersalin dan kamar bayi meliputi seluruh area pelayanan
                                  kamar bersalin dan kamar bayi baik dari sisi peningkatan
                                  mutu maupun dari sisi keselamatan pasien</p>
                                <p>Sarana</p>
                                <p style="padding-left: 30px;">penghangat bayi / infant warmer,
                                  bed partus, CTG untuk NST, alat partus + vakum</p>
                              </div>
                            </div>
                          </div>






                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="collapsed panel-title-sc panel-title" data-target="#paket-hemodialisa5">Hemodialisa</h4>
                            </div>
                            <div id="paket-hemodialisa5" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Definisi :</p>
                                <p style="padding-left: 30px;">Tempat pelayanan hemodialisis
                                  yang didiukung oleh sarana dan prasarana serta SDM yang
                                  terlatih dan bersetifikasi.</p>
                                <p>Ruang Lingkup :</p>
                                <p style="padding-left: 30px;">Unit haemodialisa Permatan Keluarga
                                  Waru melayani pasien rawat inap maupun rawat jalan :</p>
                                <ul>
                                  <li>Pelayanan haemodialisa pasien rawat inap yaitu pasien
                                    yang membutuhkan pelayanan haemodialisa selama dalam
                                    perawatan di ruang rawat inap Permata Keluarga <?= strtoupper($rs) ?>.</li>
                                  <li>Pelayanan haemodialisa pasien rawat jalan (one day care)
                                    yaitu pelayanan haemodialisa dimana pasien bisa pulang
                                    setelah dilakukan tindakan haemodialisa.</li>
                                </ul>
                                <p><img src="../../mitrakeluarga.com/source/WARU/HEMODIALISA.JPG" alt="HEMODIALISA"></p>
                              </div>
                            </div>
                          </div>






                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-pelayanan-khusus" class="collapsed panel-title-sc panel-title" data-target="#paket-rehabilitasimedik6">Rehabilitasi Medik</h4>
                            </div>
                            <div id="paket-rehabilitasimedik6" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Jenis Pelayanan :</p>
                                <ul>
                                  <li>SWD, TENS</li>
                                  <li>Ultrasound, Traksi, Laser</li>
                                  <li>Exercise (Terapi latihan stroke, tumbuh kembang)</li>
                                  <li>Nebulizer</li>
                                  <li>Pijat Balita</li>
                                </ul>
                                <p><img src="../../mitrakeluarga.com/source/WARU/REHAB%20MEDIK.JPG" alt="REHAB MEDIK"></p>
                              </div>
                            </div>
                          </div>



                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="health-screening-content" role="tabpanel">
                      <h3 class="text-pink"><b>Pemeriksaan Kesehatan</b></h3>
                      <div class="nav-in without-caret" id="nav-hs">
                        <ul class="nav">
                          <li class="nav-item active" data-href="#hs-individual">
                            <a class="nav-link" href="#hs-individual">Individu</a>
                          </li>
                          <li class="nav-item" data-href="#hs-corporate">
                            <a class="nav-link" href="#hs-corporate">Perusahaan</a>
                          </li>
                          <!--
                                            <li class="nav-item" data-href="#hs-visa">
                                                <a class="nav-link" href="#hs-visa">Visa</a>
                                            </li>
-->
                        </ul>
                      </div>
                      <!--
                                    <div class="panel-hs fade" id="hs-visa">
                                        <div class="accordion-paket" id="accordion-paket-visa" data-accordion="">           
                                                                                </div>
                                    </div>
-->
                      <div class="panel-hs fade" id="hs-corporate">
                        <div class="accordion-paket" id="accordion-paket-corporate" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-corporate" class="panel-title-sc panel-title" data-target="#paket-perusahaanpaketanggrek0"><strong>Perusahaan - Paket Anggrek</strong></h4>
                            </div>
                            <div id="paket-perusahaanpaketanggrek0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>Rontgen Thorax</li>
                                  <li>Darah Lengkap</li>
                                  <li>Urine Lengkap</li>
                                  <li>Feses Lengkap</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-corporate" class="collapsed panel-title-sc panel-title" data-target="#paket-perusahaanpaketbrasia1"><strong>Perusahaan - </strong><strong>Paket Brasia</strong>
                              </h4>
                            </div>
                            <div id="paket-perusahaanpaketbrasia1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>Ekg</li>
                                  <li>Rontgen</li>
                                  <li>Darah Lengkap</li>
                                  <li>SGOT</li>
                                  <li>SGPT</li>
                                  <li>Gamma Gt</li>
                                  <li>Ureum</li>
                                  <li>Creatinin</li>
                                  <li>Asam Urat</li>
                                  <li>Kolesterol Total</li>
                                  <li>Trigliserida</li>
                                  <li>HDL</li>
                                  <li>LDL</li>
                                  <li>Gula Darah Puasa</li>
                                  <li>2 Jam Pp</li>
                                  <li>Urine Lengkap</li>
                                  <li>Hbsag</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-corporate" class="collapsed panel-title-sc panel-title" data-target="#paket-perusahaanpaketcasablanca2"><strong>Perusahaan - </strong><strong>Paket
                                  Casablanca</strong></h4>
                            </div>
                            <div id="paket-perusahaanpaketcasablanca2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>THT</li>
                                  <li>Audiogram</li>
                                  <li>Ekg</li>
                                  <li>Treadmill</li>
                                  <li>Rontgen Thorax</li>
                                  <li>Peny.Dalam</li>
                                  <li>Darah Lengkap</li>
                                  <li>Alkali Fosfatase</li>
                                  <li>SGOT</li>
                                  <li>SGPT</li>
                                  <li>Gamma Gt</li>
                                  <li>Ureum</li>
                                  <li>Creatinin</li>
                                  <li>Asam Urat</li>
                                  <li>Kolesterol Total</li>
                                  <li>Trigliserida</li>
                                  <li>HDL</li>
                                  <li>LDL</li>
                                  <li>Gula Darah Puasa</li>
                                  <li>2 Jam Pp</li>
                                  <li>Urine Lengkap</li>
                                  <li>Hbsag</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-corporate" class="collapsed panel-title-sc panel-title" data-target="#paket-perusahaanpakettulip3"><strong>Perusahaan - </strong><strong>Paket Tulip</strong>
                              </h4>
                            </div>
                            <div id="paket-perusahaanpakettulip3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>Darah Lengkap</li>
                                  <li>SGOT</li>
                                  <li>SGPT</li>
                                  <li>Ureum</li>
                                  <li>Creatinin</li>
                                  <li>Asam Urat</li>
                                  <li>Kolesterol Total</li>
                                  <li>Trigliserida</li>
                                  <li>Gula Darah Puasa</li>
                                  <li>2 Jam Pp</li>
                                  <li>Hbsag</li>
                                  <li>Ahcv</li>
                                  <li>Urine Lengkap</li>
                                  <li>Igm Cmv</li>
                                  <li>Igm Toksoplasma</li>
                                  <li>Igm Anti Rubella</li>
                                  <li>Analisa Sperma</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="panel-hs fade in" id="hs-individual">
                        <div class="accordion-paket" id="accordion-paket-individual" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-individual" class="panel-title-sc panel-title" data-target="#paket-individupaketanggrek0"><strong>Individu - Paket Anggrek</strong></h4>
                            </div>
                            <div id="paket-individupaketanggrek0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>Rontgen Thorax</li>
                                  <li>Darah Lengkap</li>
                                  <li>Urine Lengkap</li>
                                  <li>Feses Lengkap</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-individual" class="collapsed panel-title-sc panel-title" data-target="#paket-individupaketbrasia1"><strong>Individu - Paket Brasia</strong></h4>
                            </div>
                            <div id="paket-individupaketbrasia1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>Ekg</li>
                                  <li>Rontgen</li>
                                  <li>Darah Lengkap</li>
                                  <li>SGOT</li>
                                  <li>SGPT</li>
                                  <li>Gamma Gt</li>
                                  <li>Ureum</li>
                                  <li>Creatinin</li>
                                  <li>Asam Urat</li>
                                  <li>Kolesterol Total</li>
                                  <li>Trigliserida</li>
                                  <li>HDL</li>
                                  <li>LDL</li>
                                  <li>Gula Darah Puasa</li>
                                  <li>2 Jam Pp</li>
                                  <li>Urine Lengkap</li>
                                  <li>Hbsag</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-individual" class="collapsed panel-title-sc panel-title" data-target="#paket-individupaketcasablanca2"><strong>Individu -&nbsp;</strong><strong>Paket
                                  Casablanca</strong></h4>
                            </div>
                            <div id="paket-individupaketcasablanca2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>THT</li>
                                  <li>Audiogram</li>
                                  <li>Ekg</li>
                                  <li>Treadmill</li>
                                  <li>Rontgen Thorax</li>
                                  <li>Peny.Dalam</li>
                                  <li>Darah Lengkap</li>
                                  <li>Alkali Fosfatase</li>
                                  <li>SGOT</li>
                                  <li>SGPT</li>
                                  <li>Gamma Gt</li>
                                  <li>Ureum</li>
                                  <li>Creatinin</li>
                                  <li>Asam Urat</li>
                                  <li>Kolesterol Total</li>
                                  <li>Trigliserida</li>
                                  <li>HDL</li>
                                  <li>LDL</li>
                                  <li>Gula Darah Puasa</li>
                                  <li>2 Jam Pp</li>
                                  <li>Urine Lengkap</li>
                                  <li>Hbsag</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-individual" class="collapsed panel-title-sc panel-title" data-target="#paket-individupakettulip3"><strong>Individu -&nbsp;</strong><strong>Paket
                                  Tulip</strong></h4>
                            </div>
                            <div id="paket-individupakettulip3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p>Pemeriksaan</p>
                                <ul>
                                  <li>Fisik</li>
                                  <li>Darah Lengkap</li>
                                  <li>SGOT</li>
                                  <li>SGPT</li>
                                  <li>Ureum</li>
                                  <li>Creatinin</li>
                                  <li>Asam Urat</li>
                                  <li>Kolesterol Total</li>
                                  <li>Trigliserida</li>
                                  <li>Gula Darah Puasa</li>
                                  <li>2 Jam Pp</li>
                                  <li>Hbsag</li>
                                  <li>Ahcv</li>
                                  <li>Urine Lengkap</li>
                                  <li>Igm Cmv</li>
                                  <li>Igm Toksoplasma</li>
                                  <li>Igm Anti Rubella</li>
                                  <li>Analisa Sperma</li>
                                </ul>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="rekanan-perusahaan-konten" role="tabpanel">
                      <h3 class="text-pink"><b>Rekanan Perusahaan</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-rekanan-perusahaan" data-accordion="0">
                          <p><strong>REKANAN PERUSAHAAN MITRA KELUARGA WARU</strong></p>
                          <p>1 ADARO INDONESIA, PT</p>
                          <p>2 ADIRA DINAMIKA MULTIFINANCE, PT ,TBK</p>
                          <p>3 ADIRA RENT, PT</p>
                          <p>4 AGRICON PUTRA CITRA OPTIMA, PT</p>
                          <p>5 AJINOMOTO INDONESIA, PT</p>
                          <p>6 ALKON TRAININDO UTAMA, PT</p>
                          <p>7 ALTEK PRIMINDO, PT</p>
                          <p>8 ANGKASA PURA, PT</p>
                          <p>9 ARTHA BOGA CEMERLANG, PT</p>
                          <p>10 ARUTMIN INDONESIA</p>
                          <p>11 ASDP IND FERRY ,PT</p>
                          <p>12 ASIA TEMBAKAU, PT</p>
                          <p>13 ASTRA DAIHATSU, PT</p>
                          <p>14 ASTRA GRAPHIA, PT</p>
                          <p>15 ASTRA HONDA MOTOR, PT</p>
                          <p>16 ASTRA INT, PT (A.YANI)</p>
                          <p>17 ASTRA INT, PT (BMW SO)</p>
                          <p>18 ASTRA INT, PT (DAIHATSU – WARU)</p>
                          <p>19 ASTRA INT, PT (ISUZU SO)</p>
                          <p>20 ASTRA INT, PT (KEDIRI)</p>
                          <p>21 ASTRA INT, PT (KTJ)</p>
                          <p>22 ASTRA INT, PT (MAYJEND)</p>
                          <p>23 ASTRA INT, PT (NISSAN – WARU)</p>
                          <p>24 ASTRA INT, PT (TOYOTA – WARU)</p>
                          <p>25 ASTRA INT, PT (TOYOTA B. RACHMAT)</p>
                          <p>26 ASTRA INT, PT (TYT-PCDLN)</p>
                          <p>27 ASTRA INT, PT(TOYOTA -JMRSARI)</p>
                          <p>28 ASTRA INT, TBK (PSO)</p>
                          <p>29 ASTRA INT,PT (TYTA-KJRN)</p>
                          <p>30 ASTRA INTERNATIONAL TBK-BMW, PT</p>
                          <p>31 ASTRA SEDAYA FINANCE, PT</p>
                          <p>32 ASURANSI EKSPOR IND, PT</p>
                          <p>33 BADAK LNG.PT</p>
                          <p>34 BAKRIE SUMATERA PLANTATIONS,PT TBK</p>
                          <p>35 BAKRIE TELECOM, PT (ESIA)</p>
                          <p>36 BANK CIMB NIAGA, TBK</p>
                          <p>37 BANK JATIM</p>
                          <p>38 BANK MANDIRI (PS.ATOM)</p>
                          <p>39 BANK MANDIRI (RCO-BANJARMASIN)</p>
                          <p>40 BANK MANDIRI CAB. SIDOARJO TBK, PT</p>
                          <p>41 BANK MANDIRI CAB.SBY-KEMBANG JEPUN</p>
                          <p>42 BANK MANDIRI CABANG INDRAGIRI</p>
                          <p>43 BANK MANDIRI TBK, PT</p>
                          <p>44 BANK MANDIRI TBK, PT (CAB.JEMBATAN MERAH)</p>
                          <p>45 BANK MANDIRI, PT(PD CHANDRA)</p>
                          <p>46 BANK PANIN,TBK (KCU SBY CENDANA)</p>
                          <p>47 BANK TABUNGAN NEGARA, PT</p>
                          <p>48 BAYER INDONESIA,PT</p>
                          <p>49 BCA-CAR</p>
                          <p>50 BERAU COAL, PT</p>
                          <p>51 BI – DENPASAR</p>
                          <p>52 BI – JAKARTA</p>
                          <p>53 BI – JEMBER</p>
                          <p>54 BI – KEDIRI</p>
                          <p>55 BI – KUPANG</p>
                          <p>56 BI – MALANG</p>
                          <p>57 BI – MANADO</p>
                          <p>58 BI – MATARAM</p>
                          <p>59 BI – SEMARANG</p>
                          <p>60 BI – SURABAYA</p>
                          <p>61 BINA PERTIWI, PT</p>
                          <p>62 BINTANG TERANG GMLG, PT</p>
                          <p>63 BIRO KLASIFIKASI IND.</p>
                          <p>64 BJ SERVICE INDONESIA,PT</p>
                          <p>65 BNI CABANG UTAMA SURABAYA</p>
                          <p>66 BNI, PT (KCU GRAHA PANGERAN SBY)</p>
                          <p>67 BNI, PT (KGDRO)</p>
                          <p>68 BNI, PT (SKC)</p>
                          <p>69 BP BERAU, LTD</p>
                          <p>70 BRI (CAB RAJAWALI)</p>
                          <p>71 BRI (CAB.KALIASIN), PT</p>
                          <p>72 BRI (PERSERO), PT (CAB HR MUHAMMAD)</p>
                          <p>73 BRI CAB. TANJUNG PERAK</p>
                          <p>74 BRI, PT (CAB GRESIK)</p>
                          <p>75 BRI, PT (JEMURSARI)</p>
                          <p>76 BRI, PT (SIDOARJO)</p>
                          <p>77 BRI,PT (CAB SBY KERTAJAYA)</p>
                          <p>78 BRI,PT (KANWIL)</p>
                          <p>79 BTMU-BRI FINANCE, PT</p>
                          <p>80 BTN CAB.PEMUDA</p>
                          <p>81 BTN SYARIAH CAB SBY</p>
                          <p>82 BTN, PT (SIDOARJO)</p>
                          <p>83 BUANA DISTRINDO, PT</p>
                          <p>84 BULOG, PERUM (REG. JAWA TIMUR)</p>
                          <p>85 CATHAY PASIFIC AIRWAYS LTD</p>
                          <p>86 CHEIL JEDANG IND, PT</p>
                          <p>87 CIMB NIAGA</p>
                          <p>88 CIPTA KRIDA BAHARI, PT</p>
                          <p>89 CITRA MARGATAMA SURABAYA, PT</p>
                          <p>90 COCA COLA DIST IND, PT (PUMA)</p>
                          <p>91 CV BANGUN CITRA MANDIRI</p>
                          <p>92 DHARMA SATYA NUSANTARA, PT</p>
                          <p>93 EASTERN PEARL FLOUR MILLS, PT</p>
                          <p>94 EASTERNTEX, PT</p>
                          <p>95 EISAI IND, PT</p>
                          <p>96 ENERGIZER IND, PT</p>
                          <p>97 ENSEVAL PUTERA MEGATRADING, PT</p>
                          <p>98 ERES REVCO, PT</p>
                          <p>99 FILTRONA INDONESIA, PT</p>
                          <p>100 FRISIAN FLAG INDONESIA, PT</p>
                          <p>101 FSCM MANUFACTURING INDONESIA, PT</p>
                          <p>102 GARAM IND, PT</p>
                          <p>103 GARUDA IND, PT</p>
                          <p>104 GAS NEGARA TBK, PT</p>
                          <p>105 GAS NEGARA, PT (UNIT DISTRIK PASURUAN)</p>
                          <p>106 GOLF TAMAN DAYU, PT</p>
                          <p>107 GOODYEAR INDONESIA, PT</p>
                          <p>108 HEXINDO ADI PERKASA, PT</p>
                          <p>109 HM SAMPOERNA, PT</p>
                          <p>110 HOLCIM IND, PT</p>
                          <p>111 HUTAMA KARYA, PT</p>
                          <p>112 IKPT TUBAN, PT</p>
                          <p>113 INDESSO NIAGATAMA, PT</p>
                          <p>114 INDOFOOD CBP SUKSES MAKMUR, PT</p>
                          <p>115 INDOFOOD CBP, PT (PADALARANG)</p>
                          <p>116 INDOMOBIL PRIMA NIAGA, PT</p>
                          <p>117 INDONESIA POWER UBP PERAK &amp; GRATI, PT</p>
                          <p>118 INDOSAT TBK, PT</p>
                          <p>119 ISPAT INDO, PT</p>
                          <p>120 JAMSOSTEK, PT</p>
                          <p>121 JAPFA COMFEED IND.TBK, PT.</p>
                          <p>122 JASA MARGA, PT (SBY-GMP)</p>
                          <p>123 JASARAHARJA PUTERA INSURANCE</p>
                          <p>124 JW. MARRIOT</p>
                          <p>125 KANGEAN ENERGY INDONESIA, PT</p>
                          <p>126 KARENINDO CITRA UTAMA, PT</p>
                          <p>127 KEBON AGUNG, PT</p>
                          <p>128 KIMIA FARMA LAB, PT</p>
                          <p>129 KINGFURN INTERNATIONAL, PT</p>
                          <p>130 KOMPAS</p>
                          <p>131 KOPKAR CITRA BEKISAR</p>
                          <p>132 KUSUMA BAHARIJAYA, PT</p>
                          <p>133 MALAYSIA AIRLINES, PT</p>
                          <p>134 MANDIRI BANK (KANWIL VIII)</p>
                          <p>135 MANDIRI SYARIAH (CFBC SBY)</p>
                          <p>136 MASAJI P CARGO,PT</p>
                          <p>137 MASAJI T. CONTAINER, PT</p>
                          <p>138 MERATUS LINE, PT</p>
                          <p>139 MERCK, PT</p>
                          <p>140 MERPATI NUSANTARA AIRLINES, PT</p>
                          <p>141 MITRA CABLE IND, PT</p>
                          <p>142 MITRA TEKNIK MANDIRI</p>
                          <p>143 NATIONAL UTILITY HELICOPTERS, PT</p>
                          <p>144 NESTLE INDONESIA, PT (KEJAYAN)</p>
                          <p>145 NESTLE INDONESIA, PT (PORONG)</p>
                          <p>146 NOVEL PHARM LAB, PT</p>
                          <p>147 OCBC NISP</p>
                          <p>148 PAMAPERSADA NUS,PT (ADARO)</p>
                          <p>149 PAMAPERSADA NUS,PT (KIDECO)</p>
                          <p>150 PAMAPERSADA NUSANTARA, PT</p>
                          <p>151 PANCA PATRIOT PRIMA, PT</p>
                          <p>152 PANDROL, PT</p>
                          <p>153 PANGANSARI UTAMA,PT</p>
                          <p>154 PANGGUNG, PT</p>
                          <p>155 PENERBIT ERLANGGA, PT</p>
                          <p>156 PENGERUKAN INDONESIA (PERSERO), PT</p>
                          <p>157 PERFETTI VAN MELLE</p>
                          <p>158 PERFETTI VAN MELLE (CIBINONG)</p>
                          <p>159 PERHUTANI UNIT II, PT</p>
                          <p>160 PERUM PERUMNAS REGIONAL VI</p>
                          <p>161 PETROSEA, PT</p>
                          <p>162 PFIZER IND, PT</p>
                          <p>163 PHAPROS, TBK</p>
                          <p>164 PHE ONWJ LTD</p>
                          <p>165 PHILIP MORRIS INDONESIA, PT</p>
                          <p>166 PJB KANTOR PUSAT, PT</p>
                          <p>167 PJB SERVICES, PT</p>
                          <p>168 PJB UNIT GRESIK, PT</p>
                          <p>169 PJB UNIT PEMB. PAITON, PT</p>
                          <p>170 PJB UNIT PEMBANGKITAN MUARA TAWAR, PT.</p>
                          <p>171 PJB UNIT PLYN. PEMELIHARAAN WIL.TMR (GRESIK)</p>
                          <p>172 PLN (PERSERO) J &amp; P UNIT PRODUKSI SBY, PT</p>
                          <p>173 PLN APD DIST JATIM</p>
                          <p>174 PLN APJ GRESIK</p>
                          <p>175 PLN DISTRIBUSI JATIM</p>
                          <p>176 PLN JMK-USK JTBN</p>
                          <p>177 PLN KALINUSA, PT</p>
                          <p>178 PLN KIT SULMAPA, PT</p>
                          <p>179 PLN P3BJB RJTB, PT</p>
                          <p>180 PLN SBY BARAT</p>
                          <p>181 PLN SBY SELATAN</p>
                          <p>182 PLN SBY UTARA, PT</p>
                          <p>183 PLN SIDOARJO</p>
                          <p>184 PLN, PT (UNIT PEND &amp; PELAT)</p>
                          <p>185 POS IND, PT</p>
                          <p>186 POS IND, PT (MPC SBY)</p>
                          <p>187 PP (PERSERO) DV03, PT</p>
                          <p>188 PROPAN RAYA, PT</p>
                          <p>189 PTPN X (PERSERO)</p>
                          <p>190 PTPN XII (PERSERO)</p>
                          <p>191 PZ CUSSONS IND, PT</p>
                          <p>192 RAMA EMERALD MULTI SUKSES, PT</p>
                          <p>193 READYMIX CONCRETE,PT(HOLCIM)</p>
                          <p>194 REXPLAST, PT</p>
                          <p>195 RIAU AIRLINES,PT</p>
                          <p>196 RUMAH ZAKAT</p>
                          <p>197 SAMUDERA SHIPPING SERVICES, PT</p>
                          <p>198 SANOVI AVENTIS GROUP</p>
                          <p>199 SAPTA PUSAKA GRAHANUSANTARA, PT</p>
                          <p>200 SEKAWAN KARYATAMA MANDIRI, PT</p>
                          <p>201 SEKOLAH CIPUTRA</p>
                          <p>202 SENTRA MULTIGAS UTAMA,PT (SAMATOR)</p>
                          <p>203 SEROJA LUKINDO L, PT</p>
                          <p>204 SERVIER INDONESIA, PT</p>
                          <p>205 SHAFIRA TOUR AND TRAVEL</p>
                          <p>206 SHANGRI-LA HOTEL</p>
                          <p>207 SHARP ELECTRONIC IND</p>
                          <p>208 SIRKULASI KOMPAS GRAMEDIA, PT</p>
                          <p>209 SMAILING TOUR</p>
                          <p>210 SMELTING, PT</p>
                          <p>211 SUCOFINDO (PERSERO), PT</p>
                          <p>212 SUCOFINDO, PT KALIBUTUH</p>
                          <p>213 SUMBER C MULTINIAGA, PT</p>
                          <p>214 SUPRACO INDONESIA, PT</p>
                          <p>215 SURABAYA AUTOCOMP IND, PT</p>
                          <p>216 SURVEYOR IND, PT</p>
                          <p>217 SUZUKI FINANCE IND</p>
                          <p>218 SWADHARMA IND FINANCE</p>
                          <p>219 TASPEN, PT</p>
                          <p>220 TELKOM PT.</p>
                          <p>221 TELKOMSEL, PT</p>
                          <p>222 TEMPO, PT</p>
                          <p>223 TEMPO, PT (CAB SBY)</p>
                          <p>224 TOYOTA ASTRA FINANCE SVC</p>
                          <p>225 TOYOTA TSUSHO IND, PT</p>
                          <p>226 TRAKINDO UTAMA, PT</p>
                          <p>227 TRAKINDO UTAMA, PT (TIMIKA)</p>
                          <p>228 TRAKINDO UTAMA,PT (BATULICIN)</p>
                          <p>229 TRANS-PACIFIC PETROCHEMICAL INDOTAMA, PT</p>
                          <p>230 UNILEVER IND, PT(RKT)</p>
                          <p>231 UNILEVER INDONESIA, PT (SBY)</p>
                          <p>232 UNITED TRACTORS ( BONTANG )</p>
                          <p>233 UNITED TRACTORS, PT</p>
                          <p>234 VITAE INTERNATIONAL, PT</p>
                          <p>235 WASKITA KARYA (WILAYAH TIMUR), PT</p>
                          <p>236 WINTHERTHUR – AEA</p>
                          <p>237 YAKES BANK MANDIRI</p>
                          <p>238 YAMAHA ELECTRONICS MANUFACTURING IND. PT</p>
                          <p>239 YAPEN ASTRA MDR</p>
                          <p>240 YKP BANK DAGANG NEGARA</p>
                          <p>241 YKP BANK EXIM</p>
                          <p>242 YTL JAWA TIMUR</p>
                          <p>243 WHITESKY AVIATION</p>
                          <p>244 PT.BRAHMANA KARYA</p>
                        </div>
                      </div>
                    </div>
                    <div id="rekanan-asuransi-content" class="tab-pane fade">
                      <h3 class="text-pink"><b>Rekanan Asuransi</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-rekanan-asuransi" data-accordion="0">
                          <p><strong>REKANAN ASURANSI MITRA KELUARGA WARU</strong></p>
                          <p>1 A.I.A INDONESIA, PT (NON ADMEDIKA)</p>
                          <p>2 ABADI SMILYNKS, PT</p>
                          <p>3 ABDA – ADMEDIKA</p>
                          <p>4 ABDA INSURANCE</p>
                          <p>5 ACA – ADMEDIKA</p>
                          <p>6 ACE LIFE – ADMEDIKA</p>
                          <p>7 AIA FINANCIAL</p>
                          <p>8 AIA INDONESIA ASURANSI, PT</p>
                          <p>9 AIAF ADMEDIKA</p>
                          <p>10 AJ NUSANTARA – ADMEDIKA</p>
                          <p>11 AJB BUMIPUTERA 1912</p>
                          <p>12 AJB BUMIPUTERA 1912 (ADMEDIKA)</p>
                          <p>13 ALLIANZ – ADMEDIKA</p>
                          <p>14 ALLIANZ IND, PT</p>
                          <p>15 ASIH EKA ABADI (AEA), PT</p>
                          <p>16 ASTRA BUANA / GARDA MEDIKA, PT</p>
                          <p>17 ASURANSI JIWA TUGU MANDIRI</p>
                          <p>18 ASURANSI MULTI ARTHA GUNA, PT</p>
                          <p>19 AVIVA INDONESIA, PT</p>
                          <p>20 AVRIST – ADMEDIKA</p>
                          <p>21 AVRIST – ASSURANCE,PT</p>
                          <p>22 AXA FIN-ADMEDIKA</p>
                          <p>23 AXA FINANCIAL (MEDICARE)</p>
                          <p>24 BNI LIFE – ADMED</p>
                          <p>25 BNI LIFE INSURANCE, PT</p>
                          <p>26 BUMI PUTERA ADMEDIKA</p>
                          <p>27 CAR LIFE INSURANCE</p>
                          <p>28 CIU ADMEDIKA</p>
                          <p>29 CIU INSURANCE, PT</p>
                          <p>30 COMMONWEALTH – ADMEDIKA</p>
                          <p>31 COMMONWEALTH LIFE PT</p>
                          <p>32 EQUITY – ADMEDIKA</p>
                          <p>33 EQUITY LIFE IND, PT</p>
                          <p>34 GARDA MEDIKA – ADMEDIKA</p>
                          <p>35 GENERALI IND, AJ – ADMED</p>
                          <p>36 GESA ASSISTANCE</p>
                          <p>37 GLOBAL ASSISTANCE</p>
                          <p>38 GLOBAL HEALTHCARE</p>
                          <p>39 HMO NON RSMK WARU</p>
                          <p>40 HMO RSMK WARU</p>
                          <p>41 HMO RSMKW</p>
                          <p>42 HMO-BINTANG TUJUH</p>
                          <p>43 HMO-EKSEKUTIF</p>
                          <p>44 HMO-ENSEVAL</p>
                          <p>45 HMO-GCM</p>
                          <p>46 HMO-KALBE</p>
                          <p>47 HMO-TRI SAPTA</p>
                          <p>48 I’MCARE177 – TUGU MANDIRI</p>
                          <p>49 I’MCARE177-ADIRA INS</p>
                          <p>50 I’MCARE177-AJ.BUMIPUTERA</p>
                          <p>51 I’MCARE177-AJ.MUBARAKAH</p>
                          <p>52 I’MCARE177-AJ.RECAPITAL</p>
                          <p>53 I’MCARE177-BAKRIE LIFE</p>
                          <p>54 I’MCARE177-COMMONWEALTH</p>
                          <p>55 I’MCARE177-FERRO MAS D</p>
                          <p>56 I’MCARE177-INHEALTH</p>
                          <p>57 I’MCARE177-INTERJAYA SURYA MEGAH,PT</p>
                          <p>58 I’MCARE177-JAYA PROTEKSI</p>
                          <p>59 I’MCARE177-JIWA NUSANTARA</p>
                          <p>60 I’MCARE177-JIWASRAYA</p>
                          <p>61 I’MCARE177-KRESNA LIFE</p>
                          <p>62 I’MCARE177-MAA LIFE</p>
                          <p>63 I’MCARE177-MAYAPADA LIFE</p>
                          <p>64 I’MCARE177-NESTLE</p>
                          <p>65 I’MCARE177-NUSANTARA</p>
                          <p>66 I’MCARE177-PAN PACIFIC INS</p>
                          <p>67 I’MCARE177-PAROLAMAS</p>
                          <p>68 I’MCARE177-PETRONAS C</p>
                          <p>69 I’MCARE177-PREMIAIR</p>
                          <p>70 I’MCARE177-TUGU PRATAMA</p>
                          <p>71 INHEALTH, PT</p>
                          <p>72 INHEALTH-DPD RI, PT</p>
                          <p>73 INHEALTH-DPR RI, PT</p>
                          <p>74 JASINDO – KAISSAR</p>
                          <p>75 JASINDO HEALTH CARE</p>
                          <p>76 JATIM AUTOCOMP INDONESIA</p>
                          <p>77 JAYA PROTEKSI – ADMED</p>
                          <p>78 LIPPO GENERAL – ADMED</p>
                          <p>79 LIPPO GENERAL – MDCARE</p>
                          <p>80 MAA-ADMEDIKA</p>
                          <p>81 MANULIFE – ADMEDIKA</p>
                          <p>82 MANULIFE INDONESIA A.J, PT</p>
                          <p>83 MAYAPADA ADMEDIKA</p>
                          <p>84 MEDIKA JASA UTAMA</p>
                          <p>85 MEDIPRO ADVC – ADMEDK</p>
                          <p>86 MEDIPRO ADVICE</p>
                          <p>87 MEGA INSURANCE</p>
                          <p>88 MEGA INSURANCE-ADMEDIKA</p>
                          <p>89 MEGA LIFE, AJ</p>
                          <p>90 MEGA LIFE, AJ – ADMEDIKA</p>
                          <p>91 MNC LIFE-ADMED</p>
                          <p>92 PAN PACIFIC – ADMEDIKA</p>
                          <p>93 PAN PACIFIC INSURANCE</p>
                          <p>94 PERTAMEDIKA</p>
                          <p>95 RELIANCE ADMEDIKA</p>
                          <p>96 RELIANCE, ASURANSI</p>
                          <p>97 SANTOS – ACA</p>
                          <p>98 SINAR MAS – ADMED</p>
                          <p>99 SINAR MAS – ASURANSI</p>
                          <p>100 SINAR MAS AJ – ADMEDIKA</p>
                          <p>101 SINAR MAS AJ, PT</p>
                          <p>102 TAKAFUL – ADMEDIKA</p>
                          <p>103 TAKAFUL ASURANSI, PT</p>
                          <p>104 TAKEDA INDONESIA PT.</p>
                          <p>105 TRITUNGGAL MANDIRI SOLUSINDO, PT (TMS HEALTHCARE)</p>
                          <p>106 TUGU MANDIRI – ADMEDIKA</p>
                          <p>107 TUGU MANDIRI, PT</p>
                          <p>108 WANAARTHA ASSISTANCE</p>
                          <p>109 WANAARTHA LIFE</p>
                          <p>110 WANAARTHA-ADMEDIKA</p>
                          <p>111 ZAKIRAH HEALTH CARE</p>
                          <p>112 ZURICH INSURANCE IND,PT</p>
                          <p>113 TIRTA MEDICAL CENTER</p>
                        </div>
                      </div>
                    </div>
                    <div id="indikator-mutu-konten" class="tab-pane fade">
                      <h3 class="text-pink"><b>Indikator Mutu</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-indikator-mutu" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-indikator-mutu" class="panel-title-sc panel-title" data-target="#paket-asesmenpasien0">Asesmen Pasien</h4>
                            </div>
                            <div id="paket-asesmenpasien0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/Indikator%20mutu%20Waru/ASESMEN%20PASIEN.JPG" alt="ASESMEN PASIEN" width="550" height="564"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-indikator-mutu" class="collapsed panel-title-sc panel-title" data-target="#paket-penggunaanabdanobatlain1">Penggunaan AB dan Obat Lain</h4>
                            </div>
                            <div id="paket-penggunaanabdanobatlain1" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/Indikator%20mutu%20Waru/PENGGUNAAN%20AB%20DAN%20OBAT%20LAIN.JPG" alt="PENGGUNAAN AB DAN OBAT LAIN" width="553" height="372"></p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-indikator-mutu" class="collapsed panel-title-sc panel-title" data-target="#paket-penggunaananestesidansedasi2">Penggunaan Anestesi dan Sedasi</h4>
                            </div>
                            <div id="paket-penggunaananestesidansedasi2" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/Indikator%20mutu%20Waru/ANESTESI%20DAN%20SEDASI.JPG" alt="ANESTESI DAN SEDASI" width="551" height="581">
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-indikator-mutu" class="collapsed panel-title-sc panel-title" data-target="#paket-prosedurbedah3">Prosedur Bedah</h4>
                            </div>
                            <div id="paket-prosedurbedah3" class="panel-collapse collapse">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/Indikator%20mutu%20Waru/PROSEDUR%20BEDAH.JPG" alt="PROSEDUR BEDAH" width="555" height="590"></p>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div id="sertifikasi-konten" class="tab-pane fade">
                      <h3 class="text-pink"><b>Sertifikasi</b></h3>
                      <div class="panel-hs in show">
                        <div class="accordion-paket" id="accordion-paket-sertifikasi" data-accordion="1">
                          <div class="panel panel-default panel-default-sc">
                            <div class="panel-heading panel-heading-sc">
                              <h4 data-toggle="collapse" data-parent="#accordion-paket-sertifikasi" class="panel-title-sc panel-title" data-target="#paket-sertifikatparipurna0">Sertifikat Paripurna</h4>
                            </div>
                            <div id="paket-sertifikatparipurna0" class="panel-collapse collapse in">
                              <div class="panel-body panel-body-sc">
                                <p style="margin-bottom: 0px; line-height: 0;"><img src="../../mitrakeluarga.com/source/WARU/IMG_0001.jpg" alt="IMG_0001"></p>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane active" id="informasi-dokter" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                  <div class="col-md-3 col-sm-5 col-xs-12 title-lokasi-klinik">
                    <h2>Dokter</h2>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-12 col-md-push-2 form-info-dokter">
                    <div class="form-group">
                      <!-- <label for="spesialisasi-info-dokter"><b>Klinik</b></label> -->
                      <div class="hidden">
                        <form id="jadwal-form" action="https://www.mitrakeluarga.com/buat-janji/search-result" method="get">
                          <div class="form-group field-jadwalform-id_clinic required">

                            <p class="help-block help-block-error"></p>

                            <input type="hidden" id="jadwalform-id_clinic" class="form-control" name="JadwalForm[id_clinic]" value="11">

                          </div>
                          <div class="form-group field-form-specialization required">

                            <p class="help-block help-block-error"></p>

                            <input type="hidden" id="form-specialization" class="form-control" name="JadwalForm[id_specialization]" value="4">

                          </div>
                          <div class="form-group field-jadwalform-tanggal required">

                            <p class="help-block help-block-error"></p>

                            <input type="hidden" id="jadwalform-tanggal" class="form-control" name="JadwalForm[tanggal]" value="2021-03-02">

                          </div>
                          <div class="form-group field-form-namadokter">

                            <p class="help-block help-block-error"></p>

                            <input type="hidden" id="form-namadokter" class="form-control" name="JadwalForm[nama_dokter]" value="">

                          </div><button type="submit" id="form-submit" name="save-button">Cari</button>
                        </form>
                      </div>
                      <select onchange="hide_table('.'+this.value)" class="form-control" id="bag_ch" style="width: 200px;float: right;margin-top:-50px;">
                        <option value="">Semua Spesialis</option>
                        <?php
                        $bag = $this->frontmodel->get_opt_bagian($this->uri->segment(1));
                        foreach ($bag as $key => $v) {
                        ?>
                          <option data-spesial="<?= $v->nama_bagian; ?>" value="<?= 'bag_' . $v->id_bagian; ?>"><?= $v->nama_bagian; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="loading-dokter text-center hidden">
                  <h2><span class="glyphicon glyphicon-refresh is-loading"></span> Loading...</h2>
                </div>
                <div class="row list-info-dokter" id="info-dokter-content">

                  <!-- looping data -->

                  <?php foreach ($jadwal_dokter as $k => $v) :
                    if ($k == 0 || (isset($jadwal_dokter[$k - 1]->id_dokter)) && $jadwal_dokter[$k - 1]->id_dokter != $v->id_dokter) {
                  ?>
                      <div class="row bag_<?= $v->id_bagian ?>" id="bag_<?= $v->id_bagian ?>" itemscope="" itemtype="https://schema.org/Physician" itemid="/<?= $rs ?>/">
                        <div class="col-md-3 col-sm-3 col-xs-12 center-info-dokter">
                          <div class="row">
                            <div class="accordion">
                              <div class="overlay-info-dokter col-xs-4 col-sm-12 col-md-12">
                                <div class="crop-info-dokter">
                                  <img class="foto-info-dokter lazy" alt="<?= strip_tags($v->nama_dokter) ?>" itemprop="image" src="<?php echo base_url(); ?>/assets/image/dokter/<?= $v->img ?>" style="display: inline;">
                                </div>
                                <div class="spesialis-bar hidden-xs" itemprop="medicalSpecialty"><?= $v->bagian ?></div>
                              </div>
                              <div class="name-info-dokter col-xs-7 col-sm-12 col-md-12" itemprop="name"><b><?= strip_tags($v->nama_dokter) ?></b></div>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-xs-6 col-sm-12">
                              <button class="btn btn-border-pink btn-lihat-info-dokter-v2 info-dokter wekew" data-slug="" data-id="6" data-name="<?= strip_tags($v->nama_dokter) ?>" data-toggle="modal" data-target="#info-dokter-modal<?= $v->id_dokter ?>">
                                <span class="hidden-xs hidden-sm">Lihat</span> Info Dokter
                              </button>
                            </div>
                            <div class="text-right hidden-md hidden-lg hidden-sm col-xs-6">
                              <div class="btn btn-pink button-buat-janji-detail pull-right col-xs-12" data-idsp="4" data-nama="<?= strip_tags($v->nama_dokter) ?>">
                                Buat Janji
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12 hidden-xs">
                          <div class="row content-detail-rs">
                            <div class="col-md-12">
                              <div class="row">
                                <?php $detail = $this->frontmodel->get_listjadwal($v->id_dokter);
                                foreach ($detail->result_array() as $ls_s) { ?>
                                  <div class="col-md-2">
                                    <p style="font-weight:bold"><?= $ls_s['hari'] ?></p>
                                    <hr />
                                    <p>
                                      <?php
                                      $a = substr($ls_s['jam'], 0, 5) . ' s/d ' . substr($ls_s['jam_pulang'], 0, 5);
                                      if ($ls_s['oncall']) {
                                        echo '';
                                      } else {
                                        echo $a;
                                      } ?>
                                    </p>
                                  </div>
                                <?php  } ?>

                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="row row-bottom hidden">
                          <div class="col-md-12 col-xs-6 col-sm-4 hidden-md hidden-lg">
                            <button class="btn btn-border-pink btn-lihat-info-dokter-v2 info-dokter" data-slug="" data-id="6" data-name="<?= strip_tags($v->nama_dokter) ?>" data-cv="<p><strong>Riwayat Pendidikan :</strong></p><ul><li>SD - SMA : Kediri</li><li>1993&nbsp; : Lulus Dokter, FK Universitas Airlangga Surabaya</li><li>2005&nbsp;: Lulus Spesialis Anak, FK Universitas Airlangga / RSUD Dr.Soetomo Surabaya</li></ul><p><strong>Riwayat Pekerjaan :</strong></p><ul><li>1995 : Dokter Puskesmas Birayang, Hulu Sungai Tengah, Kalimantan Selatan</li><li>2009 : Dokter Spesialis Anak RS Permata Keluarga <?= strtoupper($rs) ?></li></ul><p>&nbsp;</p>" data-spesialis="Anak" data-slugspesialis="anak" data-idspesialis="4" data-idclinic="11" data-nama-rs="Waru" data-src-photo="https://mitrakeluarga.s3.ap-southeast-1.amazonaws.com/images/doctor/full/ahmad-fauzin.jpg" data-toggle="modal" data-target="#info-dokter-modal">
                              <span class="hidden-xs hidden-sm">Lihat</span> Info Dokter
                            </button>
                          </div>
                          <div class="text-right hidden-md hidden-lg col-sm-4 col-xs-6">
                            <div class="btn btn-pink button-buat-janji-detail pull-right col-xs-12" data-idsp="4" data-nama="<?= strip_tags($v->nama_dokter) ?>">
                              Buat Janji
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- modal -->
                      <div class="modal modal-info-dokter" tabindex="-1" role="dialog" aria-hidden="true" id="info-dokter-modal<?= $v->id_dokter ?>" style="display: none;">
                        <div class="modal-dialog modal-dialog-custom">
                          <div class="model-content">
                            <div class="modal-header modal-header-custom">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h2 class="title-lokasi-home content-gray">Detail Dokter</h2>
                              <div class="row content-detail-dokter">
                                <div class="col-md-4 col-md-push-8 col-xs-12">
                                  <div class="crop-info-dokter">
                                    <img class="foto-info-dokter lazy" id="doctor-photo" data-src="../img/user2.png" src="<?php echo base_url(); ?>/assets/image/dokter/<?= $v->img ?>">
                                  </div>
                                </div>
                                <div class="col-md-8 col-md-pull-4 col-xs-12">
                                  <div class="title-jk"><b>Info Dokter</b></div>
                                  <div class="content-gray klinik-jk">Nama Dokter</div>
                                  <div class="nama-jk"><b id="doctor-name"><?= strip_tags($v->nama_dokter) ?></b></div>
                                  <div class="content-gray klinik-jk">Klinik</div>
                                  <div class="nama-jk"><b id="doctor-spesialization"><?= strip_tags($v->ket) ?></b>
                                  </div>
                                  <div class="content-gray klinik-jk">Nama Kantor</div>
                                  <div class="nama-jk"><b id="doctor-clinic"><?= strtoupper(strip_tags($v->nama_rumahsakit)) ?></b></div>
                                </div>
                              </div>
                              <div class="row content-detail-dokter">
                                <!-- <div class="col-xs-12">
                                  <div class="title-jk" id="title-tentangdokter"><b>Tentang
                                      dokter</b></div>
                                  <div class="scroll-cv-dokter content-gray ps-active-y">
                                    <p class="text-testimoni" id="doctor-cv">
                                    <p><strong>Riwayat Pendidikan :</strong></p>
                                    <ul>
                                      <li>SD - SMA : Kediri</li>
                                      <li>1993&nbsp; : Lulus Dokter, FK Universitas Airlangga Surabaya</li>
                                      <li>2005&nbsp;: Lulus Spesialis Anak, FK Universitas Airlangga / RSUD Dr.Soetomo Surabaya</li>
                                    </ul>
                                    <p><strong>Riwayat Pekerjaan :</strong></p>
                                    <ul>
                                      <li>1995 : Dokter Puskesmas Birayang, Hulu Sungai Tengah, Kalimantan Selatan</li>
                                      <li>2009 : Dokter Spesialis Anak RS Permata Keluarga <?= strtoupper($rs) ?></li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    </p>
                                  </div>
                                </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php  }
                  endforeach; ?>
                  <!-- end parser loop -->
                </div>

              </div>
              <div class="tab-pane" id="lokasi-rs" role="tabpanel" aria-labelledby="lokasi-rumah-sakit">
                <div class="">
                  <div class="rumah-sakit-klinik">
                    <div class="row content-rs-klinik">
                      <div class="col-md-7 col-xs-12 img-rs-klinik">
                        <?php
                        $maps = $this->frontmodel->getSingleSettingMaps($id_rs);
                        if ($maps) {
                          echo
                          "<iframe src='" . $maps[0]->value_set . "' width='1140' height='360' frameborder='0' style='border:0' allowfullscreen></iframe>";
                        }
                        ?>
                      </div>
                      <div class="col-md-4 col-xs-12 detail-rs-lokasi">


                        <h4 class="title-footer-top">Kontak Kami :</h4>
                        <?php
                        $this->load->helper('url');
                        $rs = $this->uri->segment(1);
                        $list_rs = $this->frontmodel->get_opt_rs();
                        $id_rumahsakit = ($this->uri->segment(1)) ?  $this->uri->segment(1) : 'lippo';
                        switch ($id_rumahsakit) {
                          case 'lippo':
                            $alamat = '15';
                            $tlp = '18';
                            $igd = '11';
                            $fax = '12';
                            $email = '26';
                            $id_rs = '1';
                            break;
                          case 'jababeka':
                            $alamat = '16';
                            $tlp = '24';
                            $igd = '1';
                            $fax = '2';
                            $email = '27';
                            $id_rs = '2';
                            break;
                          case 'galuhmas':
                            $alamat = '17';
                            $tlp = '25';
                            $email = '28';
                            $id_rs = '3';
                            break;
                        }

                        $alamats = $this->frontmodel->getSingleSettingKontak($alamat, $id_rs);
                        $tlps = $this->frontmodel->getSingleSettingKontak($tlp, $id_rs);
                        $igds = $this->frontmodel->getSingleSettingKontak($igd, $id_rs);
                        $faxs = $this->frontmodel->getSingleSettingKontak($fax, $id_rs);
                        $emails = $this->frontmodel->getSingleSettingKontak($email, $id_rs);
                        if (isset($alamats)) {
                          $fhome = "<li><h5><i class='fa fa-home'></i>&nbsp; " . $alamats[0]->value_set . " </h5></li>";
                        }
                        if (isset($tlps)) {
                          $ftelp = "<li><h5><i class='fa fa-phone'></i>&nbsp; " . $tlps[0]->value_set . " </h5></li>";
                        }
                        if (isset($igds)) {
                          $figds = "<li><h5><i class='fa fa-phone'></i>&nbsp; " . $igds[0]->value_set . " </h5></li>";
                        }
                        if (isset($faxs)) {
                          $ffax = "<li><h5><i class='fa fa-phone'></i>&nbsp; " . $faxs[0]->value_set . " </h5></li>";
                        }
                        if (isset($emails)) {
                          $femails =  "<li><h5><i class='fa fa-envelope'></i>&nbsp; " . $emails[0]->value_set . " </h5></li>";
                        }
                        ?>
                        <h3 class="klinik-title blue"><b>Permata Keluarga <?= strtoupper($rs) ?></b></h3>
                        <div class="detail-rs-home">
                          <div class="row">
                            <div class="col-md-1 col-xs-1">
                              <span class="glyphicon glyphicon-map-marker blue" aria-hidden="true" style="display: inline;"></span>
                            </div>
                            <div class="col-md-10 col-xs-10">
                              <span><?= $alamats[0]->value_set  ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="detail-rs-home">
                          <div class="row">
                            <div class="col-md-1 col-xs-1">
                              <span class="glyphicon glyphicon-earphone blue" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-10 col-xs-10">
                              <span>
                                <p>Informasi :&nbsp;<span style="font-weight: 400;"><?= $tlps[0]->value_set  ?></span></p>
                                <p>IGD :&nbsp;<span style="font-weight: 400;"><?= $igds[0]->value_set ?></span></p>
                                <p>Fax :&nbsp;<span style="font-weight: 400;"><?= $faxs[0]->value_set ?></span></p>
                                <p><span style="font-weight: 400;">Whatsapp : <?= $tlps[0]->value_set ?></span></p>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="detail-rs-home">
                          <div class="row">
                            <div class="col-md-1 col-xs-1">
                              <span class="glyphicon glyphicon-envelope blue" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-10 col-xs-10">
                              <span><?= $emails[0]->value_set ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="detail-rs-home">
                          <div class="row">
                            <div class="col-md-1 col-xs-1">
                              <i class="fab fa-facebook-square blue"></i>
                            </div>
                            <div class="col-md-10 col-xs-10"><span><a href="#" target="_blank">Permata Keluarga <?= strtoupper($rs) ?></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script defer="" src="https://cdn.jsdelivr.net/combine/npm/lightgallery,npm/lg-autoplay,npm/lg-fullscreen,npm/lg-hash,npm/lg-pager,npm/lg-share,npm/lg-thumbnail,npm/lg-video,npm/lg-zoom"></script>
  <script id="jadwal-dokter-template" type="text/template">
    <div class="col-md-1 col-xs-6">
                                        <div class="hidden-lg hidden-md">
                                            {{HARI}}
                                        </div>
                                        <div class="day-text" id="jam-container-{{ID}}">
                                        </div>
        </div>
</script>

  <script id="jam-jadwal-dokter-template" type="text/template">
    <p id='row1'>{{JAM}}</p>
</script>
  <script id="info-dokter-template" type="text/template">
    <div class="row" id="doctor-info-{{DOCTORID}}">
    <div class="col-md-3 col-xs-12 center-info-dokter">
        <div class="row">
            <div class="accordion">
                <div class="overlay-info-dokter col-xs-4 col-md-12">
                    <div class="crop-info-dokter">
                        <img class="foto-info-dokter" alt="{{DOCTORNAME}}" src="{{IMAGE}}"/>
                    </div>
                    <div class="spesialis-bar hidden-xs hidden-sm">{{SPNAME}}</div>
                </div>  
                <div class="name-info-dokter col-xs-7 col-sm-4 col-md-12"><b>{{DOCTORNAME}}</b></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-4 col-xs-6">
                <button class="btn btn-border-pink btn-lihat-info-dokter-v2 info-dokter" data-slug="{{SLUG}}" data-id="{{DOCTORID}}" data-name="{{DOCTORNAME}}" data-spesialis="{{SPNAME}}" data-slugspesialis="{{SSPNAME}}" data-cv="{{DOCTORCV}}" data-nama-rs="{{CLINICNAME}}" data-idspesialis="{{SPID}}" data-idclinic="{{CLINICID}}" data-src-photo="{{IMAGE}}" data-toggle="modal" data-target="#info-dokter-modal">
                    <span class="hidden-sm hidden-xs">Lihat</span> Info Dokter
                </button>
            </div>
            <div class="text-right hidden-md hidden-lg col-sm-4 col-xs-6">
                <a href="#" class="btn btn-pink button-buat-janji-detail col-xs-12 pull-right col-md-2" data-idsp="{{SPID}}" data-nama="{{DOCTORNAME}}" >Buat Janji</a>
            </div>
        </div>
    </div>
    <div class="col-md-9 col-xs-12 hidden-sm hidden-xs">
        <div class="row content-detail-rs">
            <div class="col-md-12">
                <div class="row jadwal-klinik-hari hidden-sm hidden-xs">
                    <div class="col-md-1">
                        Senin
                    </div>
                    <div class="col-md-1">
                        Selasa
                    </div>
                    <div class="col-md-1">
                        Rabu
                    </div>
                    <div class="col-md-1">
                        Kamis
                    </div>
                    <div class="col-md-1">
                        Jumat
                    </div>
                    <div class="col-md-1">
                        Sabtu
                    </div>
                    <div class="col-md-1">
                        Minggu
                    </div>
                </div>
                <div class="row jadwal-klinik-row">
                    <div id="jadwal-dokter-popup" class="jadwal-dokter-modal">
                    </div>
                </div>
                <p class="remarks hidden" id="remarks-{{DOCTORID}}">{{REMARKS}}</p>
                <div class="text-right hidden-sm hidden-xs col-md-4 col-sm-4 pull-right">
                    <a href="#" class="btn btn-pink button-buat-janji-detail" data-idsp="{{SPID}}" data-nama="{{DOCTORNAME}}" >Buat Janji</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-bottom hidden">
            <div class="col-md-12 col-sm-4 col-xs-6">
                <button class="btn btn-border-pink btn-lihat-info-dokter-v2 info-dokter" data-id="{{DOCTORID}}" data-name="{{DOCTORNAME}}" data-spesialis="{{SPNAME}}" data-slugspesialis="{{SSPNAME}}" data-cv="{{DOCTORCV}}" data-nama-rs="{{CLINICNAME}}" data-idspesialis="{{SPID}}" data-idclinic="{{CLINICID}}" data-src-photo="{{IMAGE}}" data-toggle="modal" data-target="#info-dokter-modal">
                    <span class="hidden-sm hidden-xs">Lihat</span> Info Dokter
                </button>
            </div>
            <div class="text-right hidden-md hidden-lg col-sm-4 col-xs-6">
                <a href="#" class="btn btn-pink button-buat-janji-detail col-xs-12 pull-right col-md-2" data-idsp="{{SPID}}" data-nama="{{DOCTORNAME}}" >Buat Janji</a>
            </div>
        </div>
</div>
</script>
  <script id="jadwal-klinik-template" type="text/template">
    <div class="row list-jk">
    <div class="nama-klinik-jk blue"><b>{{SPNAME}}</b></div>
    <div class="col-md-12">
        <div class="title-jk">Jam Operasional</div>
            <div class="row jadwal-klinik-hari hidden-xs hidden-sm">
                <div class="col-md-1">Senin</div>
                <div class="col-md-1">Selasa</div>
                <div class="col-md-1">Rabu</div>
                <div class="col-md-1">Kamis</div>
                <div class="col-md-1">Jumat</div>
                <div class="col-md-1">Sabtu</div>
                <div class="col-md-1">Minggu</div>
            </div>
            <div class="row jadwal-klinik-row" id="jadwal-klinik-template-content-{{IDSCH}}">
            </div>
    </div>
    <div class="pull-right btn btn-pink btn-lihat-info-dokter-v2" onclick="location.href='{{URL}}'">Buat Janji</div>
</div>
</script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    // load page 
    function hide_table(v) {
      // var vc = this.getAttribute('data-spesial');
      swal.fire(
        'info', 'Dokter yang di pilih', 'success'
      );

      <?php
      foreach ($bag as $key => $v) {
      ?>
        $(".bag_<?= $v->id_bagian ?>").hide();
      <?php
      }
      ?>
      if (v == '.') {
        <?php
        foreach ($bag as $key => $v) {
        ?>
          $(".bag_<?= $v->id_bagian ?>").show();
        <?php
        }
        ?>
      } else {
        $("" + v + "").show();
      }
    }
    // 
    // end function
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

</div>