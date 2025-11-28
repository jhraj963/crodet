<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        {{-- <div>
            <span>You are using free lite version of</span>
            <span class="description-title">Explore</span>
        </div> --}}
        <p>Check Our Recent Project</p>
    </div>
    <!-- End Section Title -->

    <div class="container-fluid">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <!-- Portfolio Filters -->
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Web</li>
                <li data-filter=".filter-product">Design</li>
                <li data-filter=".filter-branding">Business</li>
                {{-- <li data-filter=".filter-books">Books</li> --}}
            </ul>
            <!-- End Portfolio Filters -->

            <!-- Portfolio Items -->
            <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <!-- Example Item 1 -->
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="#" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Example Item 2 -->
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="#" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Example Item 3 -->
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="#" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Example Item 4 -->
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="#" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Portfolio Items -->

        </div>

    </div>

</section>
