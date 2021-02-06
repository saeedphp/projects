<?php


?>


<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">براورد هزینه</h1>
                <h6 class="page-title">طراحی سایت</h6>
            </div>
        </div>
    </div>
    <section class="p-t110 z-index-1 section-contact bg-white particles-js" data-color="#fe4c1c,#00c3ff,#0160e7"
             data-id="a1">
        <div class="container">
            <div class="row flex-row">

                <div class="col-md-2 col-xs-12 align-self-center"></div>

                <div class="col-md-8 col-xs-12 align-self-center">
                    <div class="form-contact">

                        <form style="margin-bottom: 50px;" action="estimate/price"
                              class="wpcf7-form" id="myform" method="POST">

                            <p>
                                <label class="shop-label">
                                    آیا از محصولات شما عکس برداری شده است؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="photo" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="1">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="photo" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="0">
                                </span>
                            </p>

                            <p>
                                <label class="shop-label">
                                    سوال دوم؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="www" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="1">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="www" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="0">
                                </span>
                            </p>

                            <p>
                                <label class="shop-label">
                                    سوال سوم؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="sw" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="1">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="sw" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="0">
                                </span>
                            </p>

                            <p>
                                <label class="shop-label">
                                    سوال چهارم؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="aq" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="1">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="aq" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="0">
                                </span>
                            </p>

                            <input type="hidden" name="date">

                            <p>
                                <button type="submit" form="myform" class="octf-btn octf-btn-primary octf-btn-icon">
                                    ارسال <i class="flaticon-right-arrow-1"></i></button>
                            </p>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-2 col-xs-12 align-self-center"></div>

        </div>
    </section>

</div>




