<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta charset="UTF-8">
    <meta name="author" content="Tineth Pathirage">
    <meta name="description" content="Nethsara Weragoda">
    <meta name="keywords" content="Nethsara Weragoda">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="favicon.html" rel="shortcut icon" type="image/x-icon" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <link href="../unpkg.com/video.js%408.17.2/dist/video-js.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="assets/icon-fonts/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/icon-fonts/remixicon/remixicon.css" />

    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3455442,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

</head>

<body>
    <div class="preloader"></div>
    <div class="tavonline-overlay"></div>
    <div class="site-wrap" data-barba="wrapper">
        <main id="main" data-barba="container">

            <!-- HEADER -->
            <?php include 'components/header.php'; ?>

            <!-- PAGE CAPTION= -->
            <div class="page-caption-1">
                <div class="caption-content">
                    <p class="body-three orange-gradient">Photo Gallery</p>
                    <h4>Breathtaking<br> Memories</h4>
                    <div class="spacer-30"></div>
                </div>
            </div>

            <div class="photo-gallery-2">
                <div class="container px-4 px-sm-0">
                    <div class="spacer-90 spacer-md-60 spacer-sm-45"></div>
                    <div class="gallery masonry row g-3 g-md-5">
                        <!-- Photo -->
                        <div class="col-xl-2 offset-xl-1 col-6 grid-item">
                            <a href="assets/images/gallery-3-1.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-1-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                        <!-- Photo -->
                        <div class="col-xl-3 col-6 grid-item">
                            <div class="spacer-30 spacer-md-0"></div>
                            <a href="assets/images/gallery-3-3.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-3-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                        <!-- Photo -->
                        <div class="col-xl-3 col-6 grid-item">
                            <a href="assets/images/gallery-3-2.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-2-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                        <!-- Photo -->
                        <div class="col-xl-2 col-6 grid-item">
                            <div class="spacer-60 spacer-md-0"></div>
                            <a href="assets/images/gallery-3-4.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-4-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                        <!-- Photo -->
                        <div class="col-xl-3 col-6 grid-item">
                            <a href="assets/images/gallery-3-5.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-5-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                        <!-- Photo -->
                        <div class="col-xl-3 col-6 grid-item">
                            <a href="assets/images/gallery-3-6.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-6-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                        <!-- Photo -->
                        <div class="col-xl-3 col-6 grid-item">
                            <a href="assets/images/gallery-3-7.jpg" class="lightbox">
                                <img src="assets/images/gallery-3-7-thumb.jpg" alt="gallery">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOOTER -->
            <?php include 'components/footer.php'; ?>
        </main>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>