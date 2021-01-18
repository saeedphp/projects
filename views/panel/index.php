
<!-- profile------------------------------->
<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">فرم نیازسنجی</h1>
                <h6 class="page-title">طراحی سایت</h6>
            </div>
        </div>
    </div>
    <div class="col-12">
        <section class="profile-home">
            <div class="col-lg">
                <div class="post-item-profile order-1 d-block">
                    <div class="col-lg-3 col-md-3 col-xs-12 pr">
                        <div class="sidebar-profile sidebar-navigation">
                            <section class="profile-box">
                                <header class="profile-box-header-inline">
                                    <div class="profile-avatar user-avatar profile-img">
                                        <img src="public/images/man.png">
                                    </div>
                                </header>
                                <footer class="profile-box-content-footer">
                                    <span class="profile-box-nameuser">حسن شجاعی</span>
                                    <span class="profile-box-registery-date">عضویت در سایت 2 پیش</span>
                                    <span class="profile-box-phone">شماره همراه : *******0991</span>
                                    <div id="number" data-last="1234">949<span>1234</span></div>
                                    <div class="profile-box-tabs">
                                        <a href="<?= URL ?>profile/logout" class="profile-box-tab-sign-out"><i class="mdi mdi-logout-variant"></i>خروج از حساب</a>
                                    </div>
                                </footer>
                            </section>
                            <section class="profile-box">
                                <ul class="profile-account-navs">
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="profile/index" class="<?php if ($active=='profile'){echo 'active';} ?>"><i class="mdi mdi-account-outline"></i>
                                            پروفایل
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="report/index" class="<?php if ($active=='report'){echo 'active';} ?>"><i class="fa fa-area-chart"></i>
                                            گزارش عملکرد
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="message/index" class="<?php if ($active=='message'){echo 'active';} ?>"><i class="fa fa-comment"></i>
                                            پیغام های من
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="order/index" class="<?php if ($active=='order'){echo 'active';} ?>"><i class="mdi mdi-cart"></i>
                                            همه سفارش ها
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="favorite/index" class="<?php if ($active=='favorite'){echo 'active';} ?>"><i class="mdi mdi-heart"></i>
                                            لیست علاقه مندی
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="comment/index" class="<?php if ($active=='comment'){echo 'active';} ?>"><i class="mdi mdi-email-open-outline"></i>
                                            نظرات
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a href="address/index" class="<?php if ($active=='address'){echo 'active';} ?>"><i class="mdi mdi-map-outline"></i>
                                            آدرس ها
                                        </a>
                                    </li>
                                    <li class="profile-account-nav-item navigation-link-dashboard">
                                        <a class=""><i class="mdi mdi-tooltip-text-outline"></i>
                                            اطلاعات حساب
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-xs-12 pl">
                        <div class="profile-content">
                            <div class="profile-stats">

                                <script>

                                    $('#number').toggle(function() {
                                        $(this).find('span').text('XXXX');
                                    }, function() {
                                        $(this).find('span').text($(this).data('last'));
                                    })
                                        .click();

                                </script>