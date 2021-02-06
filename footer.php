<?php
$model=new Model;
$option=Model::getOption();
$link=Model::link();
?>


<footer id="site-footer-home2" class="site-footer-home2 site-footer-2">
    <div class="shape shape-top" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="row footer-row">



                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h5>اینستاگرام ما</h5>
                        <p>اینستاگرام فراموج را دنبال کنید</p>
                        <div class="row col-12">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <img src="assets/images/about-us-1.png">
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <img src="assets/images/about-us-1.png">
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <img src="assets/images/about-us-1.png">
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <img src="assets/images/about-us-1.png">
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <img src="assets/images/about-us-1.png">
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <a>
                                    <img src="assets/images/about-us-1.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h5>ارتباط با ما</h5>
                        <ul class="ft-menu-list">
                            <li class="ft-menu-item">
                                <div class="contact-info text-light m-b30">
                                    <i class="flaticon-world"></i>
                                    <div class="info-text">
                                        <h6>آدرس:</h6>
                                        <p>
                                            <?= $option['address']; ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="ft-menu-item">
                                <div class="contact-info text-light m-b30">
                                    <i class="flaticon-note"></i>
                                    <div class="info-text">
                                        <h6>ایمیل:</h6>
                                        <p><a href="mailto:<?= $option['email']; ?>">
                                                <?= $option['email']; ?>
                                            </a></p>
                                    </div>
                                </div>
                            </li>
                            <li class="ft-menu-item">
                                <div class="contact-info text-light">
                                    <i class="flaticon-viber"></i>
                                    <div class="info-text">
                                        <h6>شماره تلفن:</h6>
                                        <p><a href="tel:<?= $option['tel']; ?>">
                                                <?= $option['tel']; ?>
                                            </a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h5>دسترسی سریع</h5>
                        <ul class="ft-menu-list">
                            <?php
                            foreach ($link as $row){ ?>
                                <li class="ft-menu-item">
                                    <a href="<?= $row['link']; ?>">
                                        <?= $row['title']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="octf-col">
                            <div id="site-logo" class="site-logo">
                                <a href="<?= URL ?>">
                                    <img class="logo-static" src="assets/images/faramouj-white-logo.png" alt="Onum">
                                </a>
                            </div>
                        </div>
                        <p class="m-b18">
                            <?= $option['footer-desc']; ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="copyright-2 text-center">
                        <?= $option['copyright']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="back-to-top" class="show"><i class="flaticon-arrow-pointing-to-up"></i></a>

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/easypiechart.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/header-mobile.js"></script>
<script src="assets/panel/plugins/jscolor/jscolor.js"></script>
<script src="assets/js/dropify/js/dropify.js"></script>
<script src="assets/js/lightgallery-all.js"></script>

<script src="assets/assets/bundles/libscripts.bundle.js"></script>
<script src="assets/assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/assets/bundles/jvectormap.bundle.js"></script>
<script src="assets/assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/assets/js/index.js"></script>
<script src="assets/assets/bundles/c3.bundle.js"></script>
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/vendor/parsleyjs/js/parsley.min.js"></script>
<script src="assets/assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/vendor/dropify/js/dropify.js"></script>
<script src="assets/assets/js/pages/forms/dropify.js"></script>
<script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
<script src="assets/assets/js/pages/forms/advanced-form-elements.js"></script>
<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>


