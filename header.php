<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <base href="<?= URL; ?>">
    <?php
    include "meta.php";
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.css"/>
    <link rel="stylesheet" href="assets/css/flaticon.css"/>
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css"/>
    <link rel="stylesheet" href="assets/css/magnific-popup.css"/>
    <link rel="stylesheet" href="assets/style.css"/>
    <link rel="stylesheet" href="assets/responsive.css"/>
    <link rel="stylesheet" href="assets/css/materialdesignicons.css"/>
    <link rel="stylesheet" href="assets/css/royal-preload.css"/>
    <link rel="stylesheet" href="assets/vendor/animate-css/vivify.min.css"/>
    <link rel="stylesheet" href="assets/vendor/dropify/css/dropify.min.css"/>
    <link rel="stylesheet" href="assets/gallery/css/vendor/font-awesome.min.css">


    <link rel="stylesheet" href="assets/vendor/animate-css/vivify.min.css">
    <link rel="stylesheet" href="assets/vendor/c3/c3.min.css"/>
    <link rel="stylesheet" href="assets/vendor/parsleyjs/css/parsley.css">
    <link rel="stylesheet" href="assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="assets/vendor/multi-select/css/multi-select.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="assets/assets/css/site.min.css">


</head>
<?php
$userId = Model::sessionGet('userId');
$level = Model::getUserLevel();
$name = Model::getUserName();
$menu=Model::getMenu();
?>

<style>

    @font-face {
        font-family: Sarbaz;
        font-style: normal;
        font-weight: bold;
        src: url('assets/fonts/eot/SarPink.eot');
        src: url('assets/fonts/eot/SarPink.eot?#iefix') format('embedded-opentype'), /* IE6-8 */ url('assets/fonts/woff2/SarPink.woff2') format('woff2'), /* FF39+,Chrome36+, Opera24+*/ url('assets/fonts/woff/SarPink.woff') format('woff'), /* FF3.6+, IE9, Chrome6+, Saf5.1+*/ url('assets/fonts/ttf/SarPink.ttf') format('truetype');
    }

    a,span,ul,li,h1,h2,h3,h4,h5,h6{
        font-family: Sarbaz !important;
    }

</style>

<body style="background: #fff;">

<div id="page" class="site">
    <header id="site-header" class="site-header header-style-2 sticky-header header-fullwidth">

        <!-- Main header start -->
        <div class="octf-main-header">
            <div class="octf-area-wrap">
                <div class="container-fluid octf-mainbar-container">
                    <div class="octf-mainbar">
                        <div class="octf-mainbar-row octf-row">
                            <div class="octf-col">
                                <div id="site-logo" class="site-logo">
                                    <a href="<?= URL ?>">
                                        <img class="logo-static" src="assets/images/optimized-nxo9.png" alt="Faramouj">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul id="primary-menu" class="menu" style="display: flex;">
                                        <?php
                                        foreach ($menu as $row){ ?>
                                        <li>
                                            <a href="<?= $row['link']; ?>">
                                                <?= $row['title']; ?>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </nav><!-- #site-navigation -->
                            </div>
                            <div class="octf-col text-right">
                                <!-- Call To Action -->
                                <div class="octf-btn-cta">

                                    <div class="octf-header-module">

                                        <!-- Form Search on Header -->
                                        <div class="account-box">
                                            <div class="nav-account d-block pl">
                                            <span class="icon-account">
                                                <img src="assets/images/man.png" class="avator">
                                            </span>
                                                <span class="title-account">
                                                    <?php
                                                    if ($userId==false){ ?>
                                                        حساب کاربری
                                                    <?php }else{ ?>
                                                    کاربر عزیز،
                                                        <?= $name; ?>
                                                        خوش آمدین
                                                    <?php } ?>
                                                </span>
                                                <div class="dropdown-menu">
                                                    <ul class="account-uls mb-0">
                                                        <?php
                                                        if ($userId==false){ ?>

                                                            <li class="account-item">
                                                                <a href="register" class="account-link">ثبت نام</a>
                                                            </li>
                                                            <li class="account-item">
                                                                <a href="login" class="account-link">ورود</a>
                                                            </li>

                                                        <?php }else{ ?>

                                                            <li class="account-item">
                                                                <a href="profile" class="account-link">پروفایل</a>
                                                            </li>
                                                            <li class="account-item">
                                                                <a href="<?= URL ?>admindashboard/logout" class="account-link">خروج</a>
                                                            </li>

                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="octf-header-module">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main header close -->

        <!-- Header mobile open -->
        <div class="header_mobile">
            <div class="container">
                <div class="mlogo_wrapper clearfix">
                    <div class="mobile_logo">
                        <a href="<?= URL; ?>"><img src="assets/images/optimized-nxo9.png" alt="Onum"
                                                   data-lazy-src="assets/images/logo-dark.svg">
                            <noscript><img src="assets/images/logo-dark.svg" alt="Onum"></noscript>
                        </a>
                    </div>
                    <div class="octf-col text-right">
                        <!-- Call To Action -->
                        <div class="octf-btn-cta">

                            <div class="octf-header-module">

                                <!-- Form Search on Header -->
                                <div class="account-box">
                                    <div class="nav-account d-block pl">
                                            <span class="icon-account">
                                                <img src="assets/images/man.png" class="avator">
                                            </span>
                                        <div class="dropdown-menu">
                                            <ul class="account-uls mb-0">
                                                <?php
                                                if ($userId==false){ ?>

                                                    <li class="account-item">
                                                        <a href="register" class="account-link">ثبت نام</a>
                                                    </li>
                                                    <li class="account-item">
                                                        <a href="login" class="account-link">ورود</a>
                                                    </li>

                                                <?php }else{ ?>

                                                    <li class="account-item">
                                                        <a href="profile" class="account-link">پروفایل</a>
                                                    </li>
                                                    <li class="account-item">
                                                        <a href="<?= URL ?>admindashboard/logout" class="account-link">خروج</a>
                                                    </li>

                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="octf-header-module">

                            </div>
                        </div>
                    </div>
                    <div class="octf-btn-cta">
                        <div class="octf-header-module cart-btn-hover">

                        </div>
                    </div>
                    <div id="mmenu_toggle">
                        <button></button>
                    </div>
                </div>
                <div class="mmenu_wrapper">
                    <div class="mobile_nav">
                        <ul style="display: flex;flex-direction: column;" id="menu-main-menu" class="mobile_mainmenu">
                            <?php
                            foreach ($menu as $row){ ?>
                                <li>
                                    <a href="<?= $row['link']; ?>">
                                        <?= $row['title']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header mobile close -->

    </header>

</div><!-- #page -->

</body>
</html>

