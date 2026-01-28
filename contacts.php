<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
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

</head>

<body>
    <div class="preloader"></div>
    <div class="tavonline-overlay"></div>
    <div class="site-wrap" data-barba="wrapper">
        <main id="main" data-barba="container">

            <!-- HEADER -->
            <?php include 'components/header.php'; ?>

            <!-- CONTACT -->
            <div class="contact-page">
                <div class="spacer-250"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <h2>Get in touch</h2>
                            <div class="spacer-60"></div>
                            <div class="contact-us offset-xl-1">
                                <p class="body-two">Feel free to contact us and we will get back to you as soon as we
                                    can.</p>
                                <div class="spacer-15"></div>
                                <div id="contact-formular" class="contact-form">
                                    <div id="message"></div>
                                    <form name="contactform" action="send_mail.php" method="POST" class="row gx-5">
                                        <!-- name -->
                                        <div class="col-xl-12">
                                            <input class="inp" placeholder="Your Name" name="name" type="text"
                                                id="name">
                                        </div>
                                        <!-- email -->
                                        <div class="col-xl-12">
                                            <input class="inp" placeholder="Your Email" name="email" type="text"
                                                id="email">
                                        </div>
                                        <!-- subject -->
                                        <div class="col-xl-12">
                                            <input class="inp" placeholder="Subject" name="subject" type="text"
                                                id="subject">
                                        </div>
                                        <!-- message -->
                                        <div class="col-xl-12">
                                            <textarea class="inp-text" name="message" id="message"
                                                placeholder="Comment"></textarea>
                                        </div>
                                        <!-- button -->
                                        <div class="col-xl-12 form-btn text-center">
                                            <div class="spacer-60"></div>
                                            <button class="button-two" type="submit">
                                                <div class="button-wrapper"><span data-hover="Send Message">Send
                                                        Message</span></div>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-2">
                            <div class="contact-info">
                                <h6>Reach out to us</h6>
                                <div class="spacer-45"></div>
                                <span class="body-three info-title">address:</span>
                                <div class="spacer-15"></div>
                                <p class="body-three">Horana , Kalutara <br> Sri Lanka
                                </p>
                                <div class="spacer-45"></div>
                                <span class="body-three info-title">Phone:</span>
                                <div class="spacer-15"></div>
                                <p class="body-three">+94 719129008<br>+94 719129008</p>
                                <div class="spacer-45"></div>
                                <span class="body-three info-title">Emails:</span>
                                <div class="spacer-15"></div>
                                <p class="body-three">necorecordz@gmail.com <br>info@nethsaraweragoda.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image" style="background: url(assets/images/contact-bg.jpg);"></div>
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