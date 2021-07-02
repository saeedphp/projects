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
            <section class="profile-home p-t110 z-index-1 section-contact particles-js"
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
                                            } ?>"><i class="mdi mdi-account"></i>
                                                پروفایل
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="profile/editprofile" class="<?php if ($active == 'editprofile') {
                                                echo 'active';
                                            } ?>"><i class="mdi mdi-account-edit"></i>
                                                ویرایش اطلاعات کاربری
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="profile/changepass" class="<?php if ($active == 'changepass') {
                                                echo 'active';
                                            } ?>"><i class="mdi mdi-account-key"></i>
                                                تغییر رمز عبور
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="myform" class="<?php if ($active == 'myform') {
                                                echo 'active';
                                            } ?>"><i class="mdi mdi-folder"></i>
                                                فرم نیاز سنجی من
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="status" class="<?php if ($active == 'status') {
                                                echo 'active';
                                            } ?>"><i class="mdi mdi-chart-areaspline"></i>
                                                وضعیت پروژه ی من
                                            </a>
                                        </li>
                                        <li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="video" class="<?php if ($active == 'video') {
                                                echo 'active';
                                            } ?>"><i class="mdi mdi-video-image"></i>
                                                ویدیو های آموزشی
                                            </a>
                                        </li>
                                        <!--<li class="profile-account-nav-item navigation-link-dashboard">
                                            <a href="ticket" class="<?php /*if ($active == 'ticket') {
                                                echo 'active';
                                            } */?>"><i class="fa fa-support"></i>
                                                تیکت
                                            </a>
                                        </li>-->

                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12 pl">
                            <div class="profile-content">
                                <div class="profile-stats">







