<section class="py-0">
    <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
        <div class="swiper-wrapper">
            <?php foreach ($sliders as $slide) { ?>

                <div class="swiper-slide" data-zanim-timeline="{}">
                    <div class="bg-holder" style="background-image:url(<?= base_url('assets/image/slide/'. $slide->img) ?>"></div>
                    <!--/.bg-holder-->
                    <div class="container">
                        <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                            <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                <div class="overflow-hidden">
                                    <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'><?= $slide->title ?></h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'><?= $slide->description ?></p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="<?= base_url('kontak-kami') ?>">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="<?= base_url('kontak-kami') ?>">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            } ?>
        </div>
        <div class="swiper-nav">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
        </div>
    </div>
</section>
<section class="bg-white text-center py-0">
    <div class="container my-5">
        <div class="text-center">
            <h4 class="fs-2 fs-lg-3">Layanan Kami</h4>
            <h5 class="fs-1 fs-lg-2">PAKET PENDIRIAN PT</h5>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />

        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" style="margin: 10px;">
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN PT NON IZIN</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 2,9 juta</h4>

                    </div>
                    <div class="card h-100">
                        <div class="card-body">

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pengecekan dan Pemesanan Nama</li>
                                <li class="list-group-item">Akta Pendirian Dari Notaris</li>
                                <li class="list-group-item">Pengesahan Menteri Hukum dan Hak Asasi Manusia</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20Non%20Izin.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">

                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN PT DAN IZIN</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 5 juta</h4>

                    </div>

                    <div class="card h-100">
                        <div class="card-body">
                            <!-- <h5 class="card-title">PENDIRIAN PT DAN IZIN</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Rp 5 juta</h6> -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pengecekan dan Pemesanan Nama</li>
                                <li class="list-group-item">Akta Pendirian Dari Notaris</li>
                                <li class="list-group-item">Pengesahan Menteri Hukum & HAM</li>
                                <li class="list-group-item">NPWP</li>
                                <li class="list-group-item">SKT Pajak</li>
                                <li class="list-group-item">NIB</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20dan%20Izin.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN PT, IZIN & VO</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 7,5 Juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- <h5 class="card-title">PENDIRIAN PT, IZIN & VO</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Rp 7,5 juta</h6> -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pengecekan dan Pemesanan Nama</li>
                                <li class="list-group-item">Akta Pendirian Dari Notaris</li>
                                <li class="list-group-item">Pengesahan Menteri Hukum & Hak Asasi Manusia</li>
                                <li class="list-group-item">NPWP</li>
                                <li class="list-group-item">SKT Pajak</li>
                                <li class="list-group-item">NIB</li>
                                <li class="list-group-item">Alamat Virtual Office 1 Tahun</li>
                                <li class="list-group-item">Jasa Resepsionis</li>
                                <li class="list-group-item">Penerimaan Surat Menyurat</li>
                                <li class="list-group-item">FREE Pendaftaran EFIN</li>
                                <li class="list-group-item">FREE Pendaftaran Pembukaan Rek untuk KBLI Resiko Rendah</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT,%20Izin%20dan%20Virtual%20Office.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN PT, IZIN, VO dan PKP</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 9 Juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- <h5 class="card-title">PENDIRIAN PT, IZIN, VO dan PKP</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Rp 9 juta</h6> -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pengecekan dan Pemesanan Nama</li>
                                <li class="list-group-item">Akta Pendirian Dari Notaris</li>
                                <li class="list-group-item">Pengesahan Menteri Hukum & Hak Asasi Manusia</li>
                                <li class="list-group-item">NPWP</li>
                                <li class="list-group-item">SKT Pajak</li>
                                <li class="list-group-item">NIB</li>
                                <li class="list-group-item">Alamat Virtual Office</li>
                                <li class="list-group-item">Jasa Resepsionis</li>
                                <li class="list-group-item">Penerimaan Surat Menyurat</li>
                                <li class="list-group-item">Telpon Bersama</li>
                                <li class="list-group-item">Pendaftaran PKP</li>
                                <li class="list-group-item">FREE Pendaftaran EFIN</li>
                                <li class="list-group-item">FREE Pendaftaran Pembukaan REK untuk KBLI Resiko Rendah</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20Lengkap.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="sectionpketperizinana text-center">
    <div class="container my-5">

        <h5 class="fs-1 fs-lg-2">PAKET PENDIRIAN CV, PERUBAHAN AKTA, VIRTUAL OFFICE
        </h5>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" style="margin: 10px;">
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN CV DAN IZIN</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 4 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pemesanan Nama CV</li>
                                <li class="list-group-item">Akta Pendirian Dari Notaris</li>
                                <li class="list-group-item">SK Menteri Hukum &amp; HAM</li>
                                <li class="list-group-item">NPWP</li>
                                <li class="list-group-item">SKT Pajak</li>
                                <li class="list-group-item">Akun OSS RBA</li>
                                <li class="list-group-item">NIB</li>
                                <li class="list-group-item">Pendaftaran API &amp; Kapabeanan</li>
                                <li class="list-group-item">Sertifikat Standar Untuk KBLI Resiko Menengah Rendah</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20CV%20dan%20Izin.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN CV, IZIN & VO</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 6,5 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pemesanan Nama CV</li>
                                <li class="list-group-item">Akta Pendirian dari Notaris</li>
                                <li class="list-group-item">SK Menteri Hukum & HAM</li>
                                <li class="list-group-item">NPWP</li>
                                <li class="list-group-item">SKT Pajak</li>
                                <li class="list-group-item">Akun OSS RBA</li>
                                <li class="list-group-item">NIB</li>
                                <li class="list-group-item">Pendaftaran API & Kapabeanan</li>
                                <li class="list-group-item">Sertifikat Standar Untuk KBLI Resiko Menengah Rendah</li>
                                <li class="list-group-item">Alamat Virtual Office 1 Tahun</li>
                                <li class="list-group-item">Penerimaan Surat- Menyurat</li>
                                <li class="list-group-item">Layanan Resepsionis Profesional dan Telpon Bersama</li>
                                <li class="list-group-item">FREE Pendaftaran EFIN</li>
                                <li class="list-group-item">FREE Pendaftaran Pembukaan Rekening Perusahaan</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20CV,%20Izin%20dan%20Virtual%20Office.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PERUBAHAN AKTA PT DAN CV MULAI DARI</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 2,5 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Perubahan Nama</li>
                                <li class="list-group-item">Perubahan Tempat Kedudukan</li>
                                <li class="list-group-item">Perubahan Alamat</li>
                                <li class="list-group-item">Perubahan Maksud dan Tujuan</li>
                                <li class="list-group-item">Perubahan Modal</li>
                                <li class="list-group-item">Perubahan Pemegang Saham</li>
                                <li class="list-group-item">Perubahan Direksi dan Dewan Komisaris</li>
                                <li class="list-group-item">Perubahan Lainnya</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Akta%20Perubahan.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">VIRTUAL OFFICE MULAI DARI</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 2,5 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Alamat Virtual Office 1 Tahun Di Lokasi Sangat Strategis</li>
                                <li class="list-group-item">Penerimaan Surat- Menyurat</li>
                                <li class="list-group-item">Layanan Resepsionis Profesional</li>
                                <li class="list-group-item">Telpon Bersama</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Virtual%20Office.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="bg-white text-center py-0">
    <div class="container my-5">
        <h5 class="fs-1 fs-lg-2">PAKET PENGURUSAN PERIZINAN<br />
            PENDAFTARAN MERK, HAK CIPTA, DAN PATEN</h5>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" style="margin: 10px;">
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDAFTARAN MERK, HAK CIPTA, DAN PATEN</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 2 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Pendaftaran Merk, Hak Cipta, dan Paten</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendaftaran%20Merek.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENGURUSAN IZIN OSS</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 1,5 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">NIB</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pengurusan%20Perizinan.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_parent">
                    <div class="card-header cardheaderservice">
                        <h5 class="card-title text-white">PENDIRIAN PT PERORANGAN (NEW)</h5>
                    </div>
                    <div class="card-header cardheaderservicesub">
                        <h4 class="card-subtitle mb-2 text-muted text-white"><sub>Rp</sub> 1,5 juta</h4>
                    </div>
                    <div class="card h-100">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Reservasi nama PT Perorangan</li>
                                <li class="list-group-item">Surat pernyataan Menkumham</li>
                                <li class="list-group-item">Surat Sertifikat Menkumham</li>
                                <li class="list-group-item">E-NPWP</li>
                                <li class="list-group-item">NIB Berbasis Risiko</li>
                                <li class="list-group-item">Sertifikat Standar Untuk KBLI Resiko Rendah</li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi%20terkait%20Pendirian%20PT%20Perorangan.%20Mohon%20info%20balasannya%20segera.%20Terima%20kasih." class="btn btn-danger">Konsultasi Gratis Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-white text-center">
    <section class="py-5 bg-light text-center">
        <div class="container">
            <h1>Why TokoLegalitas.com?</h1>
            <p>Lebih dari
            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-black mt-lg-5 mt-3 lh-xs" data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":1000}'>1000</div>
            perusahaan bekerja sama dengan kami</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row mt-4 mt-md-5">
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto btn-whatsapp" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-building" style="color: #000 !important"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Experienced Professional</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Kami telah mendirikan lebih dari 1000 Perusahaan.</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-lightbulb"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>100% Customer Guaranteed</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Tujuan kami adalah untuk memberikan solusi bagi bisnis Anda</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-tag"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>The Best Value-Based Pricing</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Biaya paling rendah mendirikan PT di TokoLegalitas.com adalah 3 juta</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-clock"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Proses Cepat</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>TokoLegalitas.com memberikan pelayanan Cepat dan Terpercaya.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">

            <div class="row mt-4 mt-md-5">
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-tag"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Start Your Business</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Kami tidak hanya mendirikan bisnis anda, namun kami juga bisa melindungi</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-tag"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Praktis</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Anda hanya perlu menyiapkan beberapa dokumen dasar yang akan digunakan untuk syarat pengurusan dan tim kami siap untuk menjemput sekalipun mengantarkan dokumen.</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-tag"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Layanan 24 Jam</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Kami siap melayanan anda 24 Jam. Jangan ragu untuk bertanya dan menghubungi tim kami.</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'>
                        <span class="fas fa-tag"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Gratis Konsultasi</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Konsultasikan perizinan dan legalitas Perusahaan Anda dengan kami tanpa biaya sedikitpun, kapanpun, dan dimanapun.</p>
                </div>
            </div>


        </div>
    </section>
</div>


<section class="bg-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="custom-bg-light">
                    <h2 style="font-size: 20px;    font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
">Pilihan Tepat Jasa Pendirian PT, CV, Virtual Office dan Pengurusan Izin</h2>
                    <p>Kami dengan senang hati menerima segala bentuk izin usaha, dokumen perizinan dan legalitas perusahaan Anda. Kami menyediakan jasa pembuatan PT, CV, PMA dengan tujuan mempermudah, mempercepat proses dan membantu Perusahaan Anda. Lebih dari ribuan pengusaha asing, dan pengusaha lokal sudah menggunakan jasa kami.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-column gap-2">
                    <a class="btn btn-primary rounded-pill btn-whatsapp" href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com%2C%20Saya%20ingin%20berkonsultasi">Chat Via WhatsApp</a>
                    <a class="btn btn-primary rounded-pill btn-whatsapp" href="<?= base_url('pengajuan-proposal') ?>">Pengajuan Proposal</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-4">
                <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}">
                    <div class="overflow-hidden">
                        <h4 class="text-white" data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">Request a call back</h4>
                    </div>
                    <div class="overflow-hidden">
                        <p class="px-lg-1 text-100 mb-0" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">Would you like to speak to one of our financial advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
                <h5 class="text-white">I would like to discuss:</h5>
                <form class="mt-4" method="post">
                    <div class="row">
                        <div class="col-6"><input class="form-control" type="hidden" name="to" value="username@domain.extension"><input class="form-control" type="text" placeholder="Your Name" aria-label="Your Name"></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Phone Number" aria-label="Phone Number"></div>
                        <div class="col-6 mt-4"><input class="form-control" type="text" placeholder="Subject" aria-label="Subject"></div>
                        <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end of .container-->
</section>

<section class="bg-white text-start">
    <div class="container mt-4">
        <!-- FAQ Header -->
        <div class="row custom-bg-light p-4 mb-4">
            <div class="col-12">
                <h1 class="text-start">Faq’s</h1>
                <h3 class="text-start">Pertanyaan Klien dan Jawaban</h3>
            </div>
        </div>

        <div class="custom-blurb d-flex align-items-start">
            <div class="me-3">
                <i class="fa fa-question" aria-hidden="true"></i>
            </div>
            <div>
                <h4>1. Bolehkan PNS Menjadi Pemegang Saham?</h4>
                <p>PNS pada dasarnya tidak dilarang untuk menjadi Pemegang Saham, tetapi harus ada surat keterangan dari Atasan untuk mengizinkan PNS tersebut.</p>
            </div>
        </div>

        <div class="custom-blurb d-flex align-items-start">
            <div class="me-3">
                <i class="fa fa-question" aria-hidden="true"></i>
            </div>
            <div>
                <h4>2. Apakah perusahaan harus mendaftar BPJS Ketenagakerjaan?</h4>
                <p>Pendaftaran BPJS Ketenagakerjaan saat ini wajib untuk Perusahaan dengan Modal Kelas Menengah atau Perusahaan dengan izin khusus.</p>
            </div>
        </div>

        <div class="custom-blurb d-flex align-items-start">
            <div class="me-3">
                <i class="fa-solid fa-question"></i>
            </div>
            <div>
                <h4>3. Apa Perbedaan Modal Setor dan Modal Dasar?</h4>
                <p>Modal Dasar adalah total jumlah modal yang dapat diterbitkan oleh perusahaan. Modal Setor adalah bagian dari modal dasar yang harus dimasukkan ke rekening perusahaan.</p>
            </div>
        </div>

        <div class="custom-blurb d-flex align-items-start">
            <div class="me-3">
                <i class="fa-solid fa-question"></i>
            </div>
            <div>
                <h4>4. Apakah perusahaan harus mendaftar PKP?</h4>
                <p>PKP hanya diwajibkan bagi perusahaan yang ingin mengikuti proyek tender dan telah mendapat omset di atas 4.8 Miliar. Bagi perusahaan yang tidak termasuk kedua golongan di atas, tidak diwajibkan untuk melakukan PKP.</p>
            </div>
        </div>

        <div class="custom-blurb d-flex align-items-start">
            <div class="me-3">
                <i class="fa-solid fa-question"></i>
            </div>
            <div>
                <h4>5. Bisakah CV Berkembang Menjadi PT?</h4>
                <p>CV tidak bisa berubah menjadi PT karena PT adalah badan hukum yang berbeda jenis dan bukan bentuk lanjutan dari CV. CV yang ingin berkembang menjadi PT harus memulai perizinan dari tahap awal.</p>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #222; color:#fff !important">
    <div class="container">
        <div class="row">
            <!-- Widget 1 -->
            <div class="col-md-4 mb-3">
                <div>
                    <a href="https://www.TokoLegalitas.com/">
                        <img class="img-fluid" src="<?= base_url('assets/front') ?>/assets/logo.png" alt="Logo Footer">
                    </a>
                    <p>Kami akan membantu anda terkait dengan pembuatan dan pendirian PT, CV, serta pengurusan perizinan-perizinan yang diperlukan dalam rangka melakukan kegiatan usaha.</p>
                    <a href="https://pse.kominfo.go.id/tdpse-detail/15498" target="_blank" rel="noopener noreferrer">
                        <img class="img-fluid" src="https://www.TokoLegalitas.com/wp-content/uploads/2023/08/PSE-Kominfo-Terdaftar-Resmi.png" alt="PSE Kominfo Terdaftar">
                    </a>
                </div>
            </div>

            <!-- Widget 2 -->
            <div class="col-md-4 mb-3">
                <h4 class="text-white">PAKET KAMI</h4>
                <ul class="list-unstyled text-white">
                    <li><a href="https://www.TokoLegalitas.com/paket-pendirian-pt/" class="text-white">Paket Pendirian PT</a></li>
                    <li><a href="https://www.TokoLegalitas.com/paket-pendirian-cv/" class="text-white">Paket Pendirian CV</a></li>
                    <li><a href="https://www.TokoLegalitas.com/paket-perubahan-akta-pt-cv/" class="text-white">Paket Perubahan Akta PT & CV</a></li>
                    <li><a href="https://www.TokoLegalitas.com/paket-virtual-office/" class="text-white">Paket Virtual Office</a></li>
                    <li><a href="https://www.TokoLegalitas.com/pendaftaran-hak-cipta-merk-dan-paten/" class="text-white">Pendaftaran Hak Cipta, Merk dan Paten</a></li>
                    <li><a href="https://www.TokoLegalitas.com/jasa-penataan-dokumen/" class="text-white">Jasa Penataan Dokumen</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h4 class="text-white">KONTAK KAMI</h4>
                <p class="text-white">Grand Slipi Tower, Lt 9 Unit O, CHR Office,<br>Jl. Jend. S. Parman Kav 22-24, RT.001/RW.004, Kel. Palmerah, Kec. Palmerah Kota Jakarta Barat, 11480 DKI Jakarta</p>
                <div class="d-flex align-items-center mb-2 text-white">
                    <img src="https://www.TokoLegalitas.com/wp-content/uploads/2019/02/logo-tlp.png" class="me-2" style="width: 16px;" alt="Phone">
                    <a href="tel:02129021873" class="text-white">(021) 29021873</a>
                </div>
                <div class="d-flex align-items-center mb-2 text-white">
                    <img src="https://www.TokoLegalitas.com/wp-content/uploads/2019/02/logo-wa.png" class="me-2" style="width: 16px;" alt="WhatsApp">
                    <a href="https://api.whatsapp.com/send?phone=6285274639791&amp;text=Halo%20TokoLegalitas.com,%20saya%20mau%20tanya" class="text-white">+62 812-1077-6636</a>
                </div>
                <div class="d-flex align-items-center text-white">
                    <img src="https://www.TokoLegalitas.com/wp-content/uploads/2019/02/gmail.png" class="me-2" style="width: 16px;" alt="Email">
                    <span class="text-white">info.rariyosya@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
</section>