<?php
    $url_atual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url_base = 'http://localhost/watecservice.com/';
    $url_home = $url_base . 'index.php';
    $url_about = $url_base . 'about.php';
    $url_contact = $url_base . 'contact.php';
?>

<header class="site-header site-header-transparent" id="masthead">
    <!-- header html start -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-7 flex-grow-1">
                    <div class="schedule-wrapper d-flex justify-content-md-start justify-content-center flex-wrap flex-sm-nowrap">
                        <div class="header-schedule-info">
                            <i aria-hidden="true" class="far fa-clock"></i>
                            <span class="schedule-info">
                                Aberto : 07:30 - 17:30 (Segunda - Sexta)
                                | 08:00 - 12:00(Sábado)
                            </span>
                        </div>
                        <div class="header-schedule-info">
                            <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                            <span class="schedule-info">
                                Rua Guadalajara 633, Caieiras, São Paulo
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 d-flex justify-content-sm-end justify-content-center align-items-center">
                    <div class="header-social social-links">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61554165166084" target="_blank">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/watecservicebr/" target="_blank">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href=https://www.linkedin.com/company/watecservice/about/" target="_blank">
                                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mid-header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="site-identity col-lg-3 col-md-4">
                    <p class="site-title">
                        <a href="index.php">
                            <img src="assets/img/Logo-watec-gray.png" alt="logo">
                        </a>
                    </p>
                </div>
                <div class=" mid-left-header col-md-6 d-flex align-items-center justify-content-md-end justify-content-between flex-grow-1 flex-wrap flex-sm-nowrap">
                    <div class="header-contact-info">
                        <a href="https://wa.me/551146053444?text=Oi%2C+vim+pelo+site%21" target="_blank">
                            <div class="header-contact-inner">
                                <span class="icon">
                                    <i aria-hidden="true" class="icon icon-phone"></i>
                                </span>
                                <div class="details-content">
                                    <span class="content-title">Telefone</span>
                                    <h5>(11) 4605-3444</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="https://wa.me/551146053444?text=Oi%2C+vim+pelo+site%21" target="_blank" class="button-round-secondary appoinment-btn">Ligue Agora</a>
                    <div class="header-search-icon d-lg-none">
                        <button class="search-icon">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="hb-group d-flex align-items-center justify-content-between">
                <div class="site-identity col-lg-3">
                    <a href="index.php">
                        <img src="assets/img/Logo-watec-gray.png" alt="logo">
                    </a>
                </div>
                <div class="main-navigation col-lg-9">
                    <nav id="navigation" class="navigation d-none d-lg-inline-block">
                        <ul>
                            <li class=" <?php echo $url_atual === $url_home ? "current-menu-item" : '' ?>">
                                <a href="index.php">Home</a>
                            </li>
                            <li class=" <?php echo $url_atual === $url_about ? "current-menu-item" : '' ?>">
                                <a href="about.php">Sobre nós</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Serviços</a>
                                <ul>
                                    <li>
                                        <a href="service.php">Lista de serviços</a>
                                    </li>
                                    <li>
                                        <a href="service-detail.php">Detalhes dos nossos serviços</a>
                                    </li>
                                    <li>
                                        <a href="partner.php">Nossos parceiros</a>
                                    </li>
                                    <li>
                                        <a href="reservation.php">Agendar uma visita</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" <?php echo $url_atual === $url_contact ? "current-menu-item" : '' ?>">
                                <a href="contact.php">Contato</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-search-icon">
                        <button class="search-icon">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu-container"></div>
            </div>
        </div>
    </div>
</header>