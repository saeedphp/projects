<?php

$social = $data['social'];

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">فرم نیازسنجی</h1>
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

                        <?php

                        if (isset($_GET['message'])){

                            if (@$_GET['message']!=''){ ?>

                                <p class="error"><?= $_GET['message']; ?></p>

                            <?php }else{ ?>

                                <p class="success">
                                    فرم نیازسنجی شما با موفقیت ارسال شد
                                </p>

                            <?php } } ?>

                        <form style="margin-bottom: 50px;" action="form/index" enctype="multipart/form-data"
                              class="wpcf7-form" id="myform" method="POST">
                            <p>
                                <label>
                                    نام شرکت/مجموعه شما چیست؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" id="name" class="wpcf7-form-control wpcf7-text" required
                                           placeholder="* نام شرکت ...">
                                </span>
                            </p>

                            <p>
                                <label>
                                    آدرس دقیق شرکت/مجموعه شما چیست؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="address" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="* تهران، میدان آزادی خیابان نیلوفر..."></textarea>
                                </span>
                            </p>

                            <p>
                                <label>
                                    تمامی شماره تماس هاس شرکت/مجموعه شما چیست؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="tel" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="021-12345678 - 021-98745632 - 09121234567 - ..."></textarea>
                                </span>
                            </p>

                            <p>
                                <label class="shop-label">
                                    آیا مجموعه شما لوگو طراحی شده دارد؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="islogo" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="yes"
                                           onchange="displayLogo(this.value)">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="islogo" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="no"
                                           onchange="displayLogo(this.value)">
                                </span>
                            </p>

                            <div id="yesLogo" style="display:none;"><br/>
                                <p>
                                    <label>
                                        لوگو مجموعه خود را در صورت وجود بفرستید
                                    </label>


                                <div class="card" id="showText">
                                    <div class="header">
                                        <h2>اندازه فایل محدود <small>سعی کنید فایل بزرگتر از 5 مگابایت آپلود
                                                نکنید</small></h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" name="logo" data-allowed-file-extensions="pdf png jpg jpeg webp zip eps ai" data-max-file-size="500m" class="dropify">
                                    </div>
                                </div>

                                </p>
                            </div>

                            <div id="noLogo" style="display:none;">
                                <br/>

                            </div>

                            <p>
                                <label>
                                    کد رنگ سازمانی مجموعه شما
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="maincolor" id="color1"
                                           class="wpcf7-form-control wpcf7-text jscolor">
                                </span>
                            </p>

                            <p>
                                <label>
                                    کد رنگ سازمانی دوم مجموعه شما
                                </label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="accentcolor" id="color1"
                                           class="wpcf7-form-control wpcf7-text jscolor">
                                </span>
                            </p>

                            <p>
                                <label class="shop-label">
                                    آیا مجموعه Guideline دارد؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="isguideline" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="yes"
                                           onchange="displayGuideline(this.value)">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="isguideline" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="no"
                                           onchange="displayGuideline(this.value)">
                                </span>
                            </p>

                            <div id="yesGuideline" style="display:none;"><br/>
                                <p>
                                    <label>
                                        ارسال guideline مجموعه شما
                                    </label>
                                <div class="card">
                                    <div class="header">
                                        <h2>اندازه فایل محدود <small>سعی کنید فایل بزرگتر از 500 مگابایت آپلود نکنید</small>
                                        </h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" name="guideline" data-allowed-file-extensions="pdf zip docx txt xlsx csv" data-max-file-size="500m" class="dropify">
                                    </div>
                                </div>

                                </p>
                            </div>

                            <div id="noGuideline" style="display:none;">
                                <br/>

                            </div>

                            <p>
                                <label>
                                    مزیت شما نسبت به دیگر رقبا
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="pros" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="* مزیت شما..."></textarea>
                                </span>
                            </p>

                            <p>
                                <label>
                                    معرفی سایت هایی که از نظر محتوا به کار شما نزدیک می باشند
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="sitecontent" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="* از نظر محتوا..."></textarea>
                                </span>
                            </p>

                            <p>
                                <label>
                                    معرفی سایت هایی که از نظر طراحی و دیزاین به کار شما نزدیک می باشند
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="sitedesign" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="* از نظر طراحی..."></textarea>
                                </span>
                            </p>

                            <p>
                                <label>
                                    مطرح ترین رقبا که کارشان مشابه کار شما می باشند
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="rival" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="* رقبا..."></textarea>
                                </span>
                            </p>

                            <p>
                                <label>
                                    نکات با اهمیت که باید در سایت لحاظ شود
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="mainnotes" id="message"
                                              class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="*نکات مهم..."></textarea>
                                </span>
                            </p>


                            <p class="row2">
                                <label class="social-label">
                                    شکه های اجتماعی که تمایل دارید در سایت استفاده شوند
                                </label>
                                <span class="wpcf7-form-control-wrap your-social">
                                    <select data-placeholder="انتخاب کنید..." multiple="multiple" autocomplete="off"
                                            name="social[]" required
                                            class="wpcf7-form-control chosen-select">
                                        <option>--انتحاب کنید--</option>
                                        <?php
                                        foreach ($social as $row) { ?>
                                            <option value="<?= $row['id']; ?>">
                                                <?= $row['title']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>

                                </span>
                            </p>

                            <p>
                                <label class="shop-label">
                                    آیا سایت شما فروشگاهی می باشد؟
                                </label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>بله</label>
                                    <input type="radio" name="yesOrNo" id="yes"
                                           class="wpcf7-form-control-wrap your-message" value="yes"
                                           onchange="displayQuestion(this.value)">
                                </span>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <label>خیر</label>
                                    <input type="radio" name="yesOrNo" id="no"
                                           class="wpcf7-form-control-wrap your-message" value="no"
                                           onchange="displayQuestion(this.value)">
                                </span>
                            </p>

                            <div id="yesQuestion" style="display:none;"><br/>
                                <p>
                                    <label>
                                        چه محصولاتی در حال حاظر در فروشگاه خود عرضه می کنید؟
                                    </label>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea type="text" name="product" id="message"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  placeholder="* محصولات..."></textarea>
                                </span>
                                </p>

                                <p>
                                    <label>
                                        چه محصولاتی فروش آن ها در فروشگاه اینترنتی شما از اهمیت خاصی برخوردار است؟
                                    </label>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea type="text" name="specialproduct" id="message"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  placeholder="* محصولات با اهمیت..."></textarea>
                                </span>
                                </p>

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
                                    <label>
                                        امکانات مدنظر شما برای معرفی محصول چیست؟
                                    </label>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea type="text" name="introduction" id="message"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  placeholder="* معرفی محصول..."></textarea>
                                </span>
                                </p>

                                <p>
                                    <label>
                                        در صفحه معرفی محصول، برای کاربر چه امکناتی مد مظرتان است؟
                                    </label>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea type="text" name="userfacilities" id="message"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  placeholder="* امکانات کاربر در فروشگاه..."></textarea>
                                </span>
                                </p>

                                <p>
                                    <label>
                                        امکانات فروشگاهی که مدنظر دارید چیست؟
                                    </label>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea type="text" name="shopfacilities" id="message"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  placeholder="* امکانات فروشگاه..."></textarea>
                                </span>
                                </p>

                            </div>

                            <div id="noQuestion" style="display:none;">
                                <br/>

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

            <div class="col-md-2 col-xs-12 align-self-center"></div>

        </div>
    </section>

</div>


<a id="back-to-top" href="#" class="show"><i class="flaticon-arrow-pointing-to-up"></i></a>

<script>
    $(".chosen-select").chosen({
        no_results_text: "نتیجه ای یافت نشد!"
    });

    function displayQuestion(answer) {

        document.getElementById(answer + 'Question').style.display = "block";

        if (answer == "yes") { // hide the div that is not selected

            document.getElementById('noQuestion').style.display = "none";

        } else if (answer == "no") {

            document.getElementById('yesQuestion').style.display = "none";

        }

    }

    function displayLogo(answer) {

        document.getElementById(answer + 'Logo').style.display = "block";

        if (answer == "yes") { // hide the div that is not selected

            document.getElementById('noLogo').style.display = "none";

        } else if (answer == "no") {

            document.getElementById('yesLogo').style.display = "none";

        }

    }

    function displayGuideline(answer) {

        document.getElementById(answer + 'Guideline').style.display = "block";

        if (answer == "yes") { // hide the div that is not selected

            document.getElementById('noGuideline').style.display = "none";

        } else if (answer == "no") {

            document.getElementById('yesGuideline').style.display = "none";

        }

    }

</script>



