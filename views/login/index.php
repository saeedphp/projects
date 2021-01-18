<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">ورود</h1>
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

                        <form style="margin-bottom: 50px;" action="login/check" class="wpcf7-form" id="myform" method="POST">


                            <p>
                                <label>
                                    نام کاربری
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input value="<?php if (isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" type="text" name="username" id="name" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <p>
                                <label>
                                    رمز عبور
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input value="<?php if (isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" type="password" name="password" id="name" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <p>
                                <label>
                                    مرا بخاطر بسپار
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input checked type="checkbox" value="true" <?php if (isset($_COOKIE['user_login'])){ ?>  <?php } ?>" name="remember" id="remember" class="wpcf7-form-control wpcf7-text">
                                </span>
                            </p>

                            <p>
                                <button type="submit" form="myform" class="octf-btn octf-btn-primary octf-btn-icon">
                                    ورود <i class="flaticon-right-arrow-1"></i></button>
                            </p>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-2 col-xs-12 align-self-center"></div>

        </div>
    </section>

</div>


<a id="back-to-top" href="#" class="show"><i class="flaticon-arrow-pointing-to-up"></i></a>



