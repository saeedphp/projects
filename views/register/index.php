<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">ثبت نام</h1>
            </div>
        </div>
    </div>
    <section class="p-t110 z-index-1 section-contact bg-white particles-js" data-color="#fe4c1c,#00c3ff,#0160e7"
             data-id="a1">
        <div class="container">
            <div class="row flex-row register-row">

                <div class="col-md-3 col-xs-12 align-self-center"></div>

                <div class="col-md-6 col-xs-12 align-self-center">
                    <div class="form-contact form-register">

                        <?php

                        if (isset($_GET['error'])){

                            if (@$_GET['error']!=''){ ?>

                                <p class="error"><?= $_GET['error']; ?></p>

                            <?php }else{ ?>

                                <p class="success">
                                    ثبت نام شما با موفقیت انجام شد
                                </p>

                            <?php } } ?>

                        <form style="margin-bottom: 50px;" action="register/check" class="wpcf7-form" id="myform" method="POST">

                            <p>
                                <label>
                                    نام
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" id="name" class="wpcf7-form-control wpcf7-text" required
                                           placeholder="مازیار فقیهی">
                                </span>
                            </p>

                            <p>
                                <label>
                                    ایمیل
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <input type="email" name="email" id="name" class="wpcf7-form-control wpcf7-text" required
                                           placeholder="test@gmail.com">
                                </span>
                            </p>

                            <p>
                                <label>
                                    نام کاربری
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="username" id="name" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <p class="show-pass" style="position: relative;">
                                <label>
                                    رمز عبور
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <i onclick="showpass2(this)" class="fa fa-eye"></i>
                                    <input type="password" name="password" id="password2" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <p>
                                <label>
                                    شماره همراه
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" max="11" name="mobile" id="name" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <input type="hidden" name="date">

                            <p>
                                <button type="submit" form="myform" class="octf-btn octf-btn-primary octf-btn-icon">
                                    ارسال <i class="flaticon-right-arrow-1"></i></button>
                            </p>

                            <p>
                                <a href="login">
                                    قبلا ثبت نام کرده اید، وارد شوید
                                </a>
                            </p>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12 align-self-center"></div>

        </div>
    </section>

</div>

<script>

    function showpass2(tag) {

        var imgTag = $(tag);
        var eye = imgTag.attr('class');
        if (eye == 'fa fa-eye') {
            imgTag.attr('class', 'fa fa-eye-slash');
        } else {
            imgTag.attr('class', 'fa fa-eye');
        }

        var x =
            document.getElementById("password2");
        if (x.type === 'password') {
            x.type = "text";
        } else {
            x.type = "password";
        }

    }

</script>



