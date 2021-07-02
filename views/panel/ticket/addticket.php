<?php
$active = 'ticket';
require('views/panel/index.php');

?>


<div class="box-header">
    <span class="box-title">
        افزودن تیکت
    </span>
</div>


<div id="content" class="site-content">

    <div class="col-md-12 col-xs-12 align-self-center">
        <div class="form-contact form-nedds">

            <?php

            if (isset($_GET['error'])){

                if (@$_GET['error']!=''){ ?>

                    <p class="error"><?= $_GET['error']; ?></p>

                <?php }else{ ?>

                    <p class="success">
                        تیکت شما با موفقیت ارسال شد
                    </p>

                <?php } } ?>

            <form style="margin-bottom: 50px;" action="ticket/addticket" enctype="multipart/form-data"
                  class="wpcf7-form" id="myform" method="POST">

                <p>
                    <label>
                        اولویت
                    </label>
                    <span class="wpcf7-form-control-wrap your-name">
                                    <select name="priority" autocomplete="off" class="wpcf7-form-control wpcf7-text">
                                        <option value="زیاد">زیاد</option>
                                        <option value="متوسط">متوسط</option>
                                        <option value="کم">کم</option>
                                    </select>
                                </span>
                </p>

                <p>
                    <label>
                        عنوان
                    </label>
                    <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="title" class="wpcf7-form-control wpcf7-text" required
                                           placeholder="* عنوان تیکت ...">
                                </span>
                </p>

                <p>
                    <label>
                        موضوع
                    </label>
                    <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="subject"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="موضوع تیکت خود را شرح دهید..."></textarea>
                                </span>
                </p>

                <div>
                    <p>
                        <label>
                            ضمیمه
                        </label>


                    <div class="card" id="showText">
                        <div class="header">
                            <h2>اندازه فایل محدود <small>سعی کنید فایل بزرگتر از 5 مگابایت آپلود
                                    نکنید</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" name="file" data-allowed-file-extensions="pdf png jpg jpeg webp zip eps ai" data-max-file-size="500m" class="dropify">
                        </div>
                    </div>

                    </p>
                </div>

                <input type="hidden" name="date">

                <p>
                    <button type="submit" form="myform" class="octf-btn octf-btn-primary octf-btn-icon">
                        ارسال <i class="flaticon-right-arrow-1"></i></button>
                </p>
            </form>

        </div>
    </div>

</div>








</div>
</div>
</div>
</div>

</div>
</section>

</div>

