<section class="bg-100">
    <div class="bg-holder overlay" style="background-image:url('<?= base_url('assets/front/assets/img/background-2.jpg') ?>');background-position:center bottom;"></div>
    <div class="container">
        <div class="row pt-6" data-inertia="{&quot;weight&quot;:1.5}" style="transform: translate(0px, -438.573px);">
            <div class="col-md-8 text-white" data-zanim-timeline="{}">
                <div class="overflow-hidden">
                    <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;"><?= isset($page->title) ?  $page->title : '' ?></h1>
                    <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">
                        <ol class="breadcrumb fs-1 ps-0 fw-bold">
                            <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>

<main class="main" id="top"> 
    <section class="bg-100">
        <div class="container">
            <div class="row">
                <?= isset($page->content) ?  $page->content : '' ?>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->

</main>