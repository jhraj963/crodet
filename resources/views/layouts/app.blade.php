<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crodet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/service_&_others.css">

    <!-- Animate.css & AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* Simple Lightbox */
        #simple-lightbox {
            display: none;
            position: fixed;
            top:0; left:0; width:100%; height:100%;
            background: rgba(0,0,0,0.9);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        #simple-lightbox img {
            max-width: 90%;
            max-height: 90%;
        }
        #simple-lightbox .lb-close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 3rem;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div id="page">
            <div id="container">
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="ring"></div>
                <div id="h3">Crodet</div>
            </div>
        </div>
    </div>

    <!-- Layout Sections -->
    @include('layouts.header')
    @include('layouts.service')
    @include('layouts.about')
    @include('layouts.portfolio')
    @include('layouts.client')
    @include('layouts.team')
    @include('layouts.blog')
    @include('layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="bi bi-chevron-up"></i></a>

    <!-- JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/scrollIt.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- WOW.js & AOS -->
    <script src="assets/js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 20) navbar.classList.add("scrolled");
            else navbar.classList.remove("scrolled");
        });

        // Initialize WOW & AOS
        new WOW().init();
        AOS.init({ duration: 1000, once: true });

        // Services tab
        document.addEventListener("DOMContentLoaded", function () {
            const menuItems = document.querySelectorAll(".naccs .menu > div");
            const tabs = document.querySelectorAll(".nacc li");
            menuItems.forEach((menuItem, index) => {
                menuItem.addEventListener("click", function () {
                    menuItems.forEach(item => item.classList.remove("active"));
                    tabs.forEach(tab => tab.classList.remove("active"));
                    this.classList.add("active");
                    tabs[index].classList.add("active");
                });
            });
        });

        // Portfolio filter & lightbox
        document.addEventListener("DOMContentLoaded", function () {
            const filterButtons = document.querySelectorAll('.portfolio-filters li');
            const items = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                    filterButtons.forEach(b => b.classList.remove('filter-active'));
                    this.classList.add('filter-active');
                    const filter = this.getAttribute('data-filter');
                    items.forEach(item => {
                        if (filter === '*') item.style.display = '';
                        else item.classList.contains(filter.replace('.', '')) ? item.style.display = '' : item.style.display = 'none';
                    });
                });
            });

            // Lightbox
            const lightbox = document.createElement('div');
            lightbox.id = 'simple-lightbox';
            lightbox.innerHTML = `
                <div class="lb-inner"><img src="" alt=""></div>
                <div class="lb-close" aria-label="Close">&times;</div>
            `;
            document.body.appendChild(lightbox);

            const lbImage = lightbox.querySelector('img');
            const lbClose = lightbox.querySelector('.lb-close');

            document.querySelectorAll('.portfolio-info .preview-link').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    lbImage.src = this.getAttribute('href') || '';
                    lightbox.style.display = 'flex';
                    document.documentElement.style.overflow = 'hidden';
                });
            });

            function closeLB() {
                lightbox.style.display = 'none';
                lbImage.src = '';
                document.documentElement.style.overflow = '';
            }

            lbClose.addEventListener('click', closeLB);
            lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLB(); });
            document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLB(); });

            // Default filter
            const iso = document.querySelector('.isotope-layout');
            if (iso && iso.dataset.defaultFilter) {
                const def = iso.dataset.defaultFilter;
                const btn = Array.from(filterButtons).find(b => b.getAttribute('data-filter') === def);
                if (btn) btn.click();
            }
        });
    </script>

</body>
</html>