<!-- Portfolio
    ============================================= -->
<section id="portfolio" class="section bg-light">
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Portfolio</h2>
            <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">
                My Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span>
            </p>
        </div>
        <!-- Heading end-->

        <!-- Filter Menu -->
        <ul class="portfolio-menu nav nav-tabs justify-content-center border-bottom-0 mb-5">
            <li class="nav-item"> <a data-filter="*" class="nav-link active" href="">All</a></li>
            <li class="nav-item"> <a data-filter=".design" href="" class="nav-link">Design</a></li>
            <li class="nav-item"> <a data-filter=".brand" href="" class="nav-link">Brand</a></li>
            <li class="nav-item"> <a data-filter=".photos" href="" class="nav-link">Photos</a></li>
        </ul>
        <!-- Filter Menu end -->

        <div class="portfolio popup-ajax-gallery">
            <div class="row portfolio-filter g-4">
                <div class="col-sm-6 col-lg-4 brand">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-1.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-1.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 design">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-2.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-2.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 artwork photos">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-3.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-3.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 artwork brand photos">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-4.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-4.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 design">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-5.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-5.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 brand">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-6.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-6.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 design photos">
                    <div class="portfolio-box rounded">
                        <div class="portfolio-img rounded">
                            <img class="img-fluid d-block" src="{{ asset('images/projects/project-7.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="popup-ajax stretched-link" href="ajax/portfolio-ajax-project-7.html"></a>
                                <div class="portfolio-overlay-details">
                                    <h5 class="text-white fw-400">Project Title</h5>
                                    <span class="text-light">Category</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio end -->
