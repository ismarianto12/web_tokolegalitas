<section>
  <div class="bg-holder overlay" style="background-image:url('https://lh3.googleusercontent.com/p/AF1QipPhsLKxtND__-z89eWLIvHzSVuNSUq0uKQVq7X-=s1360-w1360-h1020');background-position:center bottom;"></div>
  <!--/.bg-holder-->
  <div class="container">
    <div class="row pt-6" data-inertia="{&quot;weight&quot;:1.5}" style="transform: translate(0px, -26.6373px);">
      <div class="col-md-8 text-white" data-zanim-timeline="{}">
        <div class="overflow-hidden">
          <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">Informasi Terbaru</h1>
          <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">
            <ol class="breadcrumb fs-1 ps-0 fw-bold">
              <li class="breadcrumb-item"><a class="text-white" href="<?= base_url('/') ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">News Room</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>
<main class="main" id="top">
  <section class="bg-100">
    <div class="container">
      <div class="row g-4">
        <?php
        if ($informasi) {

          foreach ($informasi as $key => $value) {
        ?>

            <div class="col-md-6 col-lg-4">
              <div class="card"><a href="<?= base_url(); ?>/informasi/<?= $value->link ?>"><img class="card-img-top" src="<?php echo base_url(); ?>assets/image/article/<?= $value->img ?>" alt="Featured Image"></a>
                <div class="card-body" data-zanim-timeline="{}">
                  <div class="overflow-hidden"><a href="<?= base_url(); ?>/informasi/<?= $value->link ?>">
                      <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;"><?= $value->title ?></h5>
                    </a></div>
                  <div class="overflow-hidden">
                    <p class="text-500" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">By Admin</p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs="{&quot;delay&quot;:0.2}" style="transform: translate(0px, 0px); opacity: 1;"><?= strip_tags(substr($value->content, 0, 300)) . '....'; ?></p>
                  </div>
                  <div class="overflow-hidden">
                    <div class="d-inline-block" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-flex align-items-center" href="<?= base_url(); ?>/informasi/<?= $value->link ?>">Learn More<div class="overflow-hidden ms-2" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;x&quot;:-30},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;x&quot;:0},&quot;delay&quot;:0.8}" style="transform: translate(0px, 0px); opacity: 1;"><span class="d-inline-block fw-medium">⟶</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>

        <?php
          }
        }
        ?>

      </div>
      <div class="row">
        <div class="col-auto mx-auto mt-4">
          <nav class="mt-5" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <?php
              foreach ($links as $link) {
                echo "<li class='page-item'>" . $link . "</li>";
                

              }
              ?>
            </ul>

          </nav>
        </div>
      </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->
</main>