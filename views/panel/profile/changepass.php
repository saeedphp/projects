<?php
$active = 'changepass';
require('views/panel/index.php');
?>


<div class="box-header">
    <span class="box-title">ویرایش رمز عبور</span>
</div>
<div class="col-md-12 col-xs-12 align-self-center">
    <div class="form-contact">

        <?php

        if (isset($_GET['error'])) {

            if (@$_GET['error'] != '') { ?>

                <p class="error"><?= $_GET['error']; ?></p>

            <?php } else { ?>

                <p class="success">
                    تغییرات با موفقیت انجام شد
                </p>

            <?php }
        } ?>

        <form style="margin-bottom: 50px;" action="profile/changepass" class="wpcf7-form" id="myform"
              method="POST">
            <p>
                <label>
                    رمز عبور فعلی
                </label>
                <span class="wpcf7-form-control-wrap your-name form-card">
                    <i onclick="showpass(this,1)" class="mdi mdi-eye"></i>
                                    <input type="password" id="old-pass" name="password_old" class="wpcf7-form-control wpcf7-text">
                                </span>
            </p>

            <p>
                <label>
                    رمز عبور جدید
                </label>
                <span class="wpcf7-form-control-wrap your-name form-card">
                    <i onclick="showpass(this,2)" class="mdi mdi-eye"></i>
                                    <input name="password_new" id="password" type="password" class="wpcf7-form-control wpcf7-text">
                                </span>
            </p>

            <p>
                <label>
                    تکرار رمز عبور جدید
                </label>
                <span class="wpcf7-form-control-wrap your-name form-card">
                    <i onclick="showpass(this,3)" class="mdi mdi-eye"></i>
                                    <input type="password" name="password_confirm" id="repeat" class="wpcf7-form-control wpcf7-text">
                                </span>
            </p>

            <p>
                <button type="submit" form="myform" class="octf-btn octf-btn-primary octf-btn-icon">
                    اجرای عملیات <i class="flaticon-right-arrow-1"></i></button>
            </p>
        </form>

        <p>
            <a href="profile">
                بازگشت
            </a>
        </p>

    </div>
</div>

</div>
</div>
</div>
</div>

</div>
</section>

</div>

<script>

    function showpass(tag,id) {

        var imgTag = $(tag);
        var eye = imgTag.attr('class');
        if (eye == 'mdi mdi-eye') {
            imgTag.attr('class','mdi mdi-eye-off');
        } else {
            imgTag.attr('class','mdi mdi-eye');
        }

        var x=0;

        switch (id) {
            case 1:
                x = 1;
                var x=
                    document.getElementById("old-pass");
                if (x.type==='password'){
                    x.type="text";
                }else {
                    x.type="password";
                }
                break;
            case 2:
                x = 2;
                var x=
                    document.getElementById("password");
                if (x.type==='password'){
                    x.type="text";
                }else {
                    x.type="password";
                }
                break;
            case 3:
                x = 3;
                var x=
                    document.getElementById("repeat");
                if (x.type==='password'){
                    x.type="text";
                }else {
                    x.type="password";
                }
                break;
            case 3:
                x = 3;
                myFunction1(x);
                break;
        }

    }

</script>
