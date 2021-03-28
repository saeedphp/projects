


<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">ثبت نام دوره</h1>
                <h6 class="page-title">رایگان اینستاگرام</h6>
            </div>
        </div>
    </div>
    <section class="p-t110 z-index-1 section-contact bg-white particles-js" data-color="#fe4c1c,#00c3ff,#0160e7"
             data-id="a1">


        <div class="container">
            <div class="row flex-row">

                <div class="col-md-2 col-xs-12 align-self-center"></div>

                <div class="col-md-8 col-xs-12 align-self-center">
                    <div class="form-contact form-nedds">

                        <?php

                        if (isset($_GET['message'])) {

                            if (@$_GET['message'] != '') { ?>

                                <p class="error"><?= $_GET['message']; ?></p>

                            <?php } else { ?>

                                <p class="success">
                                    ثبت نام شما با موفقیت انجام شد.با شما تماس خواهیم گرفت.
                                </p>

                            <?php }
                        } ?>

                        <form style="margin-bottom: 50px;" action="insta"
                              class="wpcf7-form" id="myform" method="POST">
                            <p>
                                <label>
                                    *نام
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" class="wpcf7-form-control wpcf7-text"
                                           required
                                           placeholder="* نام خود را وارد کنید...">
                                </span>
                            </p>

                            <p>
                                <label>
                                    *شماره همراه
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" max="11" name="mobile" class="wpcf7-form-control wpcf7-text"
                                           required
                                           placeholder="* شماره همراه خود را وارد کنید...">
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




