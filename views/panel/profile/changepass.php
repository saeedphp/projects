<?php
$active = 'profile';
require('views/panel/index.php');
$userInfo = $data['userInfo'];
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
                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="password" name="password_old" class="wpcf7-form-control wpcf7-text"
                                           value="<?= @$userInfo['name']; ?>">
                                </span>
            </p>

            <p>
                <label>
                    رمز عبور جدید
                </label>
                <span class="wpcf7-form-control-wrap your-name">
                                    <input name="password_new" type="password" class="wpcf7-form-control wpcf7-text"
                                           value="<?= @$userInfo['email']; ?>">
                                </span>
            </p>

            <p>
                <label>
                    تکرار رمز عبور جدید
                </label>
                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="password" name="password_confirm" class="wpcf7-form-control wpcf7-text"
                                           value="<?= @$userInfo['mobile']; ?>">
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
