<section class="bg-100">
    <div class="container">
        <div class="overflow-hidden mb-4" data-zanim-timeline="{}">
            <div data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-inline-block text-500" href="#!"><?= DateToIndo($value->created_datetime) ?></a></div>
            <h4 data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;"><?= $value->title ?></h4>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-6"> <img class="card-img-top lazy" src="<?php echo base_url(); ?>assets/image/article/<?= $value->img ?>" alt="new image">
                    <div class="card-body p-5">
                        <?= ($value->content) ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-5">
                        <div class="pb-5">
                            <h4>Top Comments</h4>
                            <div class="row my-5">
                                <div class="col-2 text-center"><img class="rounded-circle img-fluid" src="../assets/img/portrait-8.jpg" style="min-width: 35px" alt="comment author"></div>
                                <div class="col-10">
                                    <h5 class="mb-1">Post Heading</h5>
                                    <p class="fs--1 text-500">May 15, 2017 at 9:33 am</p>
                                    <p>Their work on our website and Internet marketing has made a significant different to our business. We’ve seen a 425% increase in quote requests from the website which has been pretty remarkable – but I’d always like to see more!</p><a class="d-block my-3 text-end me-4" href="#!">Reply</a>
                                    <hr class="muted">
                                    <div class="row my-4">
                                        <div class="col-2 text-center"><img class="rounded-circle img-fluid" src="../assets/img/square-1.jpg" style="min-width: 35px" alt="comment author"></div>
                                        <div class="col-10">
                                            <h5 class="mb-1">Post Heading</h5>
                                            <p class="fs--1 text-500">May 15, 2017 at 9:33 am</p>
                                            <p>Writing case studies was a daunting task for us. We didn’t know where to begin or what questions to ask, and clients never seemed to follow through when we asked. Elixir team did everything – with almost no time or effort for me!</p><a class="d-block my-3 text-end me-4" href="#!">Reply</a>
                                        </div>
                                    </div>
                                    <hr class="muted">
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-2 text-center"><img class="rounded-circle img-fluid" src="../assets/img/square-2.jpg" style="min-width: 35px;" alt="comment author"></div>
                                <div class="col-10">
                                    <h5 class="mb-1">Post Heading</h5>
                                    <p class="fs--1 text-500">May 15, 2017 at 9:33 am</p>
                                    <p>As a sales gamification company, we were skeptical to work with a consultant to optimize our sales emails, but Elixir was highly recommended by many other Y-Combinator startups we knew. Elixir helped us run a ~6 week email campaign that brought us more leads than we had ever seen for a single effort.</p><a class="d-block my-3 text-end me-4" href="#!">Reply</a>
                                    <hr class="muted">
                                </div>
                            </div>
                        </div>
                        <div class="pt-5">
                            <h4>Leave A Comment</h4>
                            <form class="mt-4">
                                <div class="row">
                                    <div class="col-12"><input class="form-control bg-white" type="text" placeholder="Your Name" aria-label="Your Name"></div>
                                    <div class="col-12 mt-4"><input class="form-control bg-white" type="email" placeholder="Email" aria-label="Email"></div>
                                    <div class="col-12 mt-4"><textarea class="form-control bg-white" rows="10" placeholder="Leave your comment here..." aria-label="Leave your comment here"></textarea></div>
                                    <div class="col-12 mt-4"><button class="btn btn-primary" type="Submit">Submit Comment</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center ms-auto mt-5 mt-lg-0">
                <div class="px-2">
                  
                    <div class="mb-5">
                        <h5 class="mb-4">Related Articles</h5>
                        <div class="bg-white pb-5 rounded-3">
                            <div class="swiper news-slider pb-4 swiper-initialized swiper-horizontal swiper-pointer-events" data-swiper="{&quot;loop&quot;:true,&quot;slidesPerView&quot;:1,&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;type&quot;:&quot;bullets&quot;,&quot;clickable&quot;:true}}">
                                <div class="swiper-wrapper" id="swiper-wrapper-0e4806b9c6685fb7" aria-live="polite" style="transform: translate3d(-332px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 332px;">
                                        <div class="card"><a href="../news/news.html"><img class="card-img-top" src="../assets/img/11.jpg" alt="Featured Image"></a>
                                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                                <div class="overflow-hidden"><a href="../news/news.html">
                                                        <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">The growing meanace of social engineering fraud</h5>
                                                    </a></div>
                                                <div class="overflow-hidden">
                                                    <p class="text-500" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">By Robson</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <p class="mt-3" data-zanim-xs="{&quot;delay&quot;:0.2}" style="transform: translate(0px, 0px); opacity: 1;">Social engineering involves the collection of information from various sources about a target...</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <div class="d-inline-block" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-flex align-items-center" href="../news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;x&quot;:-30},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;x&quot;:0},&quot;delay&quot;:0.8}" style="transform: translate(0px, 0px); opacity: 1;"><span class="d-inline-block fw-medium">⟶</span></div></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 332px;">
                                        <div class="card"><a href="../news/news.html"><img class="card-img-top" src="../assets/img/9.jpg" alt="Featured Image"></a>
                                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                                <div class="overflow-hidden"><a href="../news/news.html">
                                                        <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">Tax impacts of lease mean accounting change</h5>
                                                    </a></div>
                                                <div class="overflow-hidden">
                                                    <p class="text-500" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">By Paul O'Sullivan</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <p class="mt-3" data-zanim-xs="{&quot;delay&quot;:0.2}" style="transform: translate(0px, 0px); opacity: 1;">HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <div class="d-inline-block" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-flex align-items-center" href="../news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;x&quot;:-30},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;x&quot;:0},&quot;delay&quot;:0.8}" style="transform: translate(0px, 0px); opacity: 1;"><span class="d-inline-block fw-medium">⟶</span></div></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 332px;">
                                        <div class="card"><a href="../news/news.html"><img class="card-img-top" src="../assets/img/10.jpg" alt="Featured Image"></a>
                                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                                <div class="overflow-hidden"><a href="../news/news.html">
                                                        <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">What brexit means for data protection law</h5>
                                                    </a></div>
                                                <div class="overflow-hidden">
                                                    <p class="text-500" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">By Enrico Ambrosi</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <p class="mt-3" data-zanim-xs="{&quot;delay&quot;:0.2}" style="transform: translate(0px, 0px); opacity: 1;">Assuming that the referendum is not ignored completely, there are two possible futures for the UK...</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <div class="d-inline-block" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-flex align-items-center" href="../news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;x&quot;:-30},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;x&quot;:0},&quot;delay&quot;:0.8}" style="transform: translate(0px, 0px); opacity: 1;"><span class="d-inline-block fw-medium">⟶</span></div></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 332px;">
                                        <div class="card"><a href="../news/news.html"><img class="card-img-top" src="../assets/img/11.jpg" alt="Featured Image"></a>
                                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                                <div class="overflow-hidden"><a href="../news/news.html">
                                                        <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">The growing meanace of social engineering fraud</h5>
                                                    </a></div>
                                                <div class="overflow-hidden">
                                                    <p class="text-500" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">By Robson</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <p class="mt-3" data-zanim-xs="{&quot;delay&quot;:0.2}" style="transform: translate(0px, 0px); opacity: 1;">Social engineering involves the collection of information from various sources about a target...</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <div class="d-inline-block" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-flex align-items-center" href="../news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;x&quot;:-30},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;x&quot;:0},&quot;delay&quot;:0.8}" style="transform: translate(0px, 0px); opacity: 1;"><span class="d-inline-block fw-medium">⟶</span></div></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 332px;">
                                        <div class="card"><a href="../news/news.html"><img class="card-img-top" src="../assets/img/9.jpg" alt="Featured Image"></a>
                                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                                <div class="overflow-hidden"><a href="../news/news.html">
                                                        <h5 data-zanim-xs="{&quot;delay&quot;:0}" style="transform: translate(0px, 0px); opacity: 1;">Tax impacts of lease mean accounting change</h5>
                                                    </a></div>
                                                <div class="overflow-hidden">
                                                    <p class="text-500" data-zanim-xs="{&quot;delay&quot;:0.1}" style="transform: translate(0px, 0px); opacity: 1;">By Paul O'Sullivan</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <p class="mt-3" data-zanim-xs="{&quot;delay&quot;:0.2}" style="transform: translate(0px, 0px); opacity: 1;">HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <div class="d-inline-block" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;"><a class="d-flex align-items-center" href="../news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;x&quot;:-30},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;x&quot;:0},&quot;delay&quot;:0.8}" style="transform: translate(0px, 0px); opacity: 1;"><span class="d-inline-block fw-medium">⟶</span></div></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-5">
                            <h5>Tags</h5>
                            <ul class="nav tags mt-3 fs--1">
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Advisory</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Finance</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Ideas</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Data</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Market</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Tax</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Consulting</a></li>
                                <li><a class="btn btn-sm btn-outline-primary m-1 p-2" href="#!">Accounting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->
</section>