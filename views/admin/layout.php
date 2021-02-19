<?php

$option=Model::getOption();
$fontFamily=$option['font'];
$userId=Model::sessionGet('userId');
$level=Model::getUserLevel();
$name=Model::getUserName();

$apiKey = $option['apikey'];
$cityId = $option['cityId'];
$googleApiUrl = $option['googleApiUrl'] . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, '');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$dataWeather = json_decode($response);
date_default_timezone_set('Asia/Tehran');
$currentTime = time();
?>

<?php

$redirect=Model::getRedirect();
$url='';

foreach ($redirect as $row){ ?>

    <?php
    if ($_SERVER['QUERY_STRING']=='url='.$row['currentUrl'].''){
        header('location:'.URL.''.$row['targetUrl']);
    }
    ?>

<?php } ?>



<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <base href="<?= URL; ?>">
    <?php
    require ('meta.php');
    ?>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="assets/panel/assets/css/loader.css" rel="stylesheet" type="text/css"/>
    <script src="assets/panel/assets/js/loader.js"></script>

    <link href="assets/panel/https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="assets/panel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/panel/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/panel/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/panel/assets/css/apps/contacts.css">

    <link href="assets/panel/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/editors/quill/quill.snow.css">
    <link href="assets/panel/assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/vendor/animate-css/vivify.min.css">
    <link rel="stylesheet" href="assets/vendor/c3/c3.min.css"/>
    <link rel="stylesheet" href="assets/vendor/parsleyjs/css/parsley.css">
    <link rel="stylesheet" href="assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="assets/vendor/multi-select/css/multi-select.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/dt-global_style.css">

    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/custom_dt_miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/components/custom-modal.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/scrollspyNav.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/alert/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/parsleyjs/css/parsley.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/authentication/form-1.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/date-picker/kamadatepicker.min.css">

</head>
<body>

<style>

    .force{
        color: #<?= $option['<9'] ?>;
        border: 2px dashed;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .near{
        color: #<?= $option['10--20'] ?>;
        border: 2px dashed;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .normal{
        color: #<?= $option['20--40'] ?>;
        border: 2px dashed;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .deadline{
        color: #<?= $option['>50'] ?>;
        border: 2px dashed;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .needs{
        color: #<?= $option['needs'] ?>;
        border: 2px dashed #<?= $option['needs']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .theme{
        color: #<?= $option['theme']; ?>;
        border: 2px dashed #<?= $option['theme']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .UIUX{
        color: #<?= $option['UIUX']; ?>;
        border: 2px dashed #<?= $option['UIUX']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .dynamic{
        color: #<?= $option['dynamic']; ?>;
        border: 2px dashed #<?= $option['dynamic']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .check{
        color: #<?= $option['check']; ?>;
        border: 2px dashed #<?= $option['check']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .finaltest{
        color: #<?= $option['finaltest']; ?>;
        border: 2px dashed #<?= $option['finaltest']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }

    .completed{
        color: #<?= $option['completed']; ?>;
        border: 2px dashed #<?= $option['completed']; ?>;
        border-radius: 8px;
        padding: 1px 10px;
    }


    *{
        letter-spacing: 0!important;
        font-family: <?= $fontFamily; ?> !important;
    }


    .fa{position: relative;top: 3px;margin-left: :5px;font-size: 16px !important;}

    #dark{
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0,0,0,.3);
        left:0;
        top: 0;
        z-index: 9999999;
        display: none;
    }

    #loader-icon{
        text-align: center;
        margin: 0 auto;
    }
</style>

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="admindashboard">
                    <img src="assets/images/optimized-nxo9.png" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link">  </a>
            </li>
        </ul>



        <ul class="navbar-item flex-row ml-md-auto">

            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="assets/images/man.png" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">

                        <?php
                        if ($userId==false){ ?>

                        <?php }else{ ?>

                            <div class="dropdown-item">
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <?= $name; ?>
                                    ,خوش آمدین
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a href="adminprofile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    پروفایل من
                                </a>
                            </div>

                            <div class="dropdown-item">
                                <a href="<?= URL ?>admindashboard/logout">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    خروج</a>
                            </div>

                        <?php } ?>


                    </div>
                </div>
            </li>

        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </a>

        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">پنل مدیریت پروژه های فراموج</a></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>

    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories" id="accordionExample">

                <li class="menu">
                    <a href="#dashboard" <?php if ($active=='dashboard'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse"
                       class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-dashboard"></i>
                            <span>داشبورد</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='dashboard'){echo 'show';} ?>" id="dashboard" data-parent="#accordionExample">
                        <li class="<?php if ($active=='dashboard'){echo 'active';} ?>">
                            <a href="admindashboard"> داشبورد </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#profile" <?php if ($active=='profile' ){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-user"></i>
                            <span>پروفایل من</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='profile'){echo 'show';} ?>" id="profile" data-parent="#accordionExample">
                        <li class="<?php if ($active=='profile'){echo 'active';} ?>">
                            <a href="adminprofile"> پروفایل </a>
                        </li>
                    </ul>
                </li>

                <?php
                if ($level==1 || $level==6 || $level==5){ ?>
                    <li class="menu">
                        <a href="#financial" <?php if ($active=='financial' || $active=='addfinancial' || $active=='archive'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-dollar"></i>
                                <span>مدیریت مالی</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled <?php if ($active=='financial' || $active=='addfinancial' || $active=='archive'){echo 'show';} ?>" id="financial" data-parent="#accordionExample">
                            <li class="<?php if ($active=='financial'){echo 'active';} ?>">
                                <a href="adminfinancial"> مالی </a>
                            </li>
                            <li class="<?php if ($active=='addfinancial'){echo 'active';} ?>">
                                <a href="adminfinancial/addfinancial"> افزودن </a>
                            </li>
                            <li class="<?php if ($active=='archive'){echo 'active';} ?>">
                                <a href="adminfinancial/archive"> بایگانی ها </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php
                if ($level==1 || $level==5){ ?>
                    <li class="menu">
                        <a href="#stat"  <?php if ($active=='stat'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-area-chart"></i>
                                <span>مدیریت گزارشات</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled <?php if ($active=='stat'){echo 'show';} ?>" id="stat" data-parent="#accordionExample">
                            <li class="<?php if ($active=='stat'){echo 'active';} ?>">
                                <a href="adminstat"> گزارشات </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <li class="menu">
                    <a href="#form"  <?php if ($active=='form'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-file-text"></i>
                            <span>مدیریت فرم نیازسنجی</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='form' || $active=='form-archive'){echo 'show';} ?>" id="form" data-parent="#accordionExample">
                        <li class="<?php if ($active=='form'){echo 'active';} ?>">
                            <a href="adminform"> فرم نیازسنجی </a>
                        </li>
                        <li class="<?php if ($active=='form-archive'){echo 'active';} ?>">
                            <a href="adminform/archive"> بایگانی ها </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#social"  <?php if ($active=='social'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-share-alt"></i>
                            <span>مدیریت شبکه های اجتماعی</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='social'){echo 'show';} ?>" id="social" data-parent="#accordionExample">
                        <li class="<?php if ($active=='social'){echo 'active';} ?>">
                            <a href="adminsocial"> شبکه های اجتماعی </a>
                        </li>
                    </ul>
                </li>

                <?php
                if ($level==1 || $level==2 || $level==5){ ?>
                    <li class="menu">
                        <a href="#user" <?php if ($active=='user'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-user"></i>
                                <span>مدیریت کاربران</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled <?php if ($active=='user'){echo 'show';} ?>" id="user" data-parent="#accordionExample">
                            <li class="<?php if ($active=='user'){echo 'active';} ?>">
                                <a href="adminuser"> کاربران </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php
                if ($level==1 || $level==2 || $level==3 || $level==5){ ?>
                    <li class="menu">
                        <a href="#redirect" <?php if ($active=='redirect' || $active=='archive-redirect'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <i class="fa fa-exchange"></i>
                                <span>مدیریت ریدایرکت</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled <?php if ($active=='redirect' || $active=='archive-redirect'){echo 'show';} ?>" id="redirect" data-parent="#accordionExample">
                            <li class="<?php if ($active=='redirect'){echo 'active';} ?>">
                                <a href="adminredirect"> ریدایرکت </a>
                            </li>
                            <li class="<?php if ($active=='archive-redirect'){echo 'active';} ?>">
                                <a href="adminredirect/archive"> بایگانی </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <li class="menu">
                    <a href="#metatag" <?php if ($active=='metatag'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-search"></i>
                            <span>مدیریت متاتگ ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='metatag'){echo 'show';} ?>" id="metatag" data-parent="#accordionExample">
                        <li class="<?php if ($active=='metatag'){echo 'active';} ?>">
                            <a href="adminmetatag"> متاتگ </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#setting" <?php if ($active=='setting'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                            <i class="fa fa-gear"></i>
                            <span>مدیریت تنظیمات</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='setting'){echo 'show';} ?>" id="setting" data-parent="#accordionExample">
                        <li class="<?php if ($active=='setting'){echo 'active';} ?>">
                            <a href="adminsetting"> تنظیمات </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#project-progress" <?php if ($active=='progress' || $active=='archive-progress'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-line-chart"></i>
                            <span>مدیریت پیشرفت پروژه ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='progress' || $active=='archive-progress' || $active=='tech'){echo 'show';} ?>" id="project-progress" data-parent="#accordionExample">
                        <li class="<?php if ($active=='progress'){echo 'active';} ?>">
                            <a href="adminprogress"> نوع پیشرفت </a>
                        </li>
                        <li class="<?php if ($active=='archive-progress'){echo 'active';} ?>">
                            <a href="adminprogress/archive"> بایگانی </a>
                        </li>
                        <!--<li class="<?php /*if ($active=='tech'){echo 'active';} */?>">
                            <a href="admintech"> تکنولوژی </a>
                        </li>-->
                    </ul>
                </li>

                <li class="menu">
                    <a href="#project" <?php if ($active=='project' || $active=='archive-project'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-filter"></i>
                            <span>مدیریت نوع پروژه ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='project' || $active=='archive-project'){echo 'show';} ?>" id="project" data-parent="#accordionExample">
                        <li class="<?php if ($active=='project'){echo 'active';} ?>">
                            <a href="adminproject"> نوع پروژه ها </a>
                        </li>
                        <li class="<?php if ($active=='archive-project'){echo 'active';} ?>">
                            <a href="adminproject/archive"> بایگانی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#stage" <?php if ($active=='stage' || $active=='archive-stage'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-filter"></i>
                            <span>مدیریت مراحل پروژه ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='stage' || $active=='archive-stage'){echo 'show';} ?>" id="stage" data-parent="#accordionExample">
                        <li class="<?php if ($active=='project'){echo 'active';} ?>">
                            <a href="adminstage"> مراحل </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#admintech" <?php if ($active=='admintech'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-filter"></i>
                            <span>مدیریت تکنولوژی ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='tech'){echo 'show';} ?>" id="admintech" data-parent="#accordionExample">
                        <li class="<?php if ($active=='tech'){echo 'active';} ?>">
                            <a href="admintechnology"> تکنولوژی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#link" <?php if ($active=='link'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-link"></i>
                            <span>مدیریت پیوند ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='link'){echo 'show';} ?>" id="link" data-parent="#accordionExample">
                        <li class="<?php if ($active=='link'){echo 'active';} ?>">
                            <a href="adminlink"> لینک ها </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#portfolio" <?php if ($active=='portfolio' || $active=='cat'){echo 'data-active="true"'.'aria-expanded="true"';} ?> data-toggle="collapse" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-link"></i>
                            <span>مدیریت نمونه کارها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='portfolio' || $active=='addportfolio' || $active=='cat'){echo 'show';} ?>" id="portfolio" data-parent="#accordionExample">
                        <li class="<?php if ($active=='portfolio'){echo 'active';} ?>">
                            <a href="adminportfolio"> نمونه کارها </a>
                        </li>
                        <li class="<?php if ($active=='addportfolio'){echo 'active';} ?>">
                            <a href="adminportfolio/addportfolio"> افزودن </a>
                        </li>
                        <li class="<?php if ($active=='cat'){echo 'active';} ?>">
                            <a href="adminportfolio/cat"> دسته بندی ها </a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!-- <div class="shadow-bottom"></div> -->

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <div id="dark">

        <div class="row">


            <div class="col-md-12">
                <div class="col-md-6"></div>

                <div class="col-md-2" id="loader-icon"><img src="loading.gif" style="margin: 300px auto"/></div>

                <div class="col-md-5"></div>

            </div>
        </div>
    </div>

    <script src="assets/panel/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/panel/bootstrap/js/popper.min.js"></script>
    <script src="assets/panel/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/panel/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/panel/assets/js/app.js"></script>
    <script src="assets/panel/assets/js/apps/contact.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="assets/panel/assets/js/custom.js"></script>



    <script src="assets/panel/plugins/apex/apexcharts.min.js"></script>
    <script src="assets/panel/assets/js/dashboard/dash_1.js"></script>
    <script src="assets/panel/assets/js/ie11fix/fn.fix-padStart.js"></script>
    <script src="assets/panel/assets/js/scrollspyNav.js"></script>
    <script src="assets/panel/plugins/editors/quill/quill.js"></script>
    <script src="assets/panel/assets/js/apps/todoList.js"></script>
    <script src="assets/panel/assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>

    <script src="assets/panel/plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="assets/panel/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/custom_miscellaneous.js"></script>
    <script src="assets/panel/plugins/alert/js/sweetalert.min.js"></script>
    <script src="assets/panel/plugins/dropify/js/dropify.js"></script>
    <script src="assets/panel/plugins/parsleyjs/js/parsley.min.js"></script>
    <script src="assets/panel/assets/js/authentication/form-1.js"></script>
    <script src="assets/panel/plugins/date-picker/kamadatepicker.min.js"></script>
    <script src="assets/panel/plugins/jscolor/jscolor.js"></script>
    <script src="assets/vendor/dropify/js/dropify.js"></script>
    <script src="assets/assets/js/pages/forms/dropify.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        } );
    </script>

    <script>

        $('document').ready(function()
        {
            $('textarea').each(function(){
                    $(this).val($(this).val().trim());
                }
            );
        });

        function selectAll() {
            var items = document.getElementsByName('id[]');
            for (var i = 0; i < items.length; i++) {
                if (items[i].type === 'checkbox')
                    items[i].checked = false;
            }
            if ($('#select').is(':checked'))
                for (var i = 0; i < items.length; i++) {
                    if (items[i].type === 'checkbox')
                        items[i].checked = true;
                }
        }


        /*remove white space in textarea tag*/

        $('document').ready(function()
        {
            $('textarea').each(function(){
                    $(this).val($(this).val().trim());
                }
            );
        });

        /*remove white space in textarea tag*/

        function showpass(tag) {

            var imgTag = $(tag);
            var eye = imgTag.attr('class');
            if (eye == 'fa fa-eye') {
                imgTag.attr('class', 'fa fa-eye-slash');
            } else {
                imgTag.attr('class', 'fa fa-eye');
            }

            var x =
                document.getElementById("password");
            if (x.type === 'password') {
                x.type = "text";
            } else {
                x.type = "password";
            }

        }

    </script>

</body>
</html>