<?php
$userId = Model::sessionGet('userId');
$level = Model::getUserLevel();
$name = Model::getUserName();
$date = Model::getUserDate();
$mobile = Model::getUserMobile();
$result = substr($mobile, 0, 4);
$result .= "***";
$result .= substr($mobile, 7, 4);
?>

<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">پنل کاربری</h1>
                <h6 class="page-title">مشتریان</h6>
            </div>
        </div>
    </div>

    <div class="container-main">
        <div class="col-12">
            <section class="profile-home p-t110 z-index-1 section-contact bg-white particles-js"
                     data-color="#fe4c1c,#00c3ff,#0160e7"
                     data-id="a1">
                <div class="container col-lg">

                    <div class="post-item-profile order-1 d-block">
                        <div class="col-md-4 col-xs-12">
                            <div class="sidebar-profile sidebar-navigation">
                                <section class="profile-box">
                                    <header class="profile-box-header-inline">
                                        <div class="profile-avatar user-avatar profile-img">
                                            <img src="assets/images/man.png">
                                        </div>
                                    </header>
                                    <footer class="profile-box-content-footer">
                                        <span class="profile-box-nameuser"><?= $name; ?></span>
                                        <span class="profile-box-registery-date">عضویت در سایت:
                                <?= $date; ?>
                                </span>
                                        <span class="profile-box-phone">شماره همراه : <span class="phone-number"><?= $result; ?></span></span>
                                        <div class="profile-box-tabs">
                                            <a href="<?= URL ?>admindashboard/logout"
                                               class="profile-box-tab-sign-out"><i
                                                        class="mdi mdi-logout-variant"></i>خروج از حساب</a>
                                        </div>
                                    </footer>
                                </section>
                                <section class="profile-box">
                                    <ul class="profile-account-navs">
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="profile" class="<?php if ($active == 'profile') {
                                                echo 'active';
                                            } ?>"><i class="fa fa-user"></i>
                                                پروفایل
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="myform" class="<?php if ($active == 'myform') {
                                                echo 'active';
                                            } ?>"><i class="fa fa-folder-open"></i>
                                                فرم نیاز سنجی من
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="status" class="<?php if ($active == 'status') {
                                                echo 'active';
                                            } ?>"><i class="fa fa-chart-area"></i>
                                                وضعیت پروژه ی من
                                            </a>
                                        </li>

                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12 pl">
                            <div class="profile-content">
                                <div class="profile-stats">







