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
            <div class="row flex-row register-row">

                <div class="col-md-3 col-xs-12 align-self-center"></div>

                <div class="col-md-6 col-xs-12 align-self-center">
                    <div class="form-contact form-register">

                        <form style="margin-bottom: 50px;" action="login/check" class="wpcf7-form" id="myform" method="POST">


                            <p>
                                <label>
                                    نام کاربری
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input value="<?php if (isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" type="text" name="username" id="name" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <p class="show-pass" style="position:relative;">
                                <label>
                                    رمز عبور
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <i onclick="showpass2(this)" class="mdi mdi-eye"></i>
                                    <input value="<?php if (isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" type="password" name="password" id="password" class="wpcf7-form-control wpcf7-text" required>
                                </span>
                            </p>

                            <p>
                                <label>
                                    مرا بخاطر بسپار
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input style="width: 20px;" name="remember" id="remember" class="wpcf7-form-control wpcf7-text remember-checkbox" checked type="checkbox" value="true" <?php if (isset($_COOKIE['user_login'])){ ?>  <?php } ?>">
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

            <div class="col-md-3 col-xs-12 align-self-center"></div>

        </div>
    </section>

</div>


<script>

    function showpass2(tag) {

        var imgTag = $(tag);
        var eye = imgTag.attr('class');
        if (eye == 'mdi mdi-eye') {
            imgTag.attr('class', 'mdi mdi-eye-off');
        } else {
            imgTag.attr('class', 'mdi mdi-eye');
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

