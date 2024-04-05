<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/img/plumbero-fabicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
    <!-- progress bar CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/progressbar-fill-visible/css/progressBar.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fancybox/dist/jquery.fancybox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Reservation - Plumbero - Plumber & Repair Services HTML5 Template</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="assets/img/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <!-- header html start -->
        <?php require "components/header.php"; ?>
        <!-- main page html -->
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/img/plumbero-img40-02.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">Agende uma visita</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Banner html end-->
            <!-- reservation html -->
            <div class="reservation-page-section">
                <div class="container">
                    <form method="post" class="reservation-form">
                        <div class="reservation-detais form-inner">
                            <h3>Insira suas informações</h3>
                            <div class="row form-wrap">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="text" name="name" id="name" placeholder="Primeiro Nome">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="text" name="name" id="last-name" placeholder="Sobrenome">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="text" name="address" id="address" placeholder="Endereço">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="tel" name="phone-no" id="phone-no" placeholder="N° de Telefone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="date" name="date" id="date" value="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="time" name="time" id="time">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="number" name="number" id="no-people" placeholder="Estimation Number of Fixing">
                                </div>
                                <div class="col-lg-12 col-12 form-group">
                                    <textarea rows="7" name="note" id="note" placeholder="Descrição"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="button-round-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </main>
        <!-- footer part -->
        <?php require "components/footer.php"; ?>
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="assets/vendors/jquery/jquery.js"></script>
    <script src="assets/vendors/waypoint/jquery.waypoints.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendors/progressbar-fill-visible/js/progressBar.min.js"></script>
    <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>