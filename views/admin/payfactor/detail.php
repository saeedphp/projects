<?php
$active='factor';
require ('views/admin/layout.php');
$detail=$data['detail'];
$option=Model::getOption();
?>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row invoice layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="app-hamburger-container">
                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                </div>
                <div class="doc-container x">

                    <div class="invoice-container">
                        <div class="invoice-inbox">

                            <div id="ct" class="">

                                <div class="">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">صورتحساب </h3>
                                                <a id="btn-submit" class="btn btn-primary" onclick="window.print();">چاپ</a>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <a>
                                                        <img src="assets/images/optimized-nxo9.png" class="navbar-logo" alt="logo">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-12 align-self-center  text-sm-left order-sm-0 order-1">
                                                <p class="inv-detail-title">از جانب : <?= $detail['name']; ?></p>
                                                <p class="inv-detail-title">شماره کارت : <?= $detail['cardNum']; ?></p>
                                                <p class="inv-detail-title">مبلغ فاکتور : <?= number_format($detail['price']); ?>تومان</p>
                                            </div>
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">فاکتور به</p>
                                            </div>

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">شرکت فراموج</p>
                                                <p class="inv-street-addr">
                                                    <?= $option['address']; ?>
                                                </p>
                                                <p>
                                                    <a href="mailto:<?= $option['email']; ?>" class="inv-email-address">
                                                        <?= $option['email']; ?>
                                                    </a>
                                                </p>
                                                <p>
                                                    <a href="tel:<?= $option['tel']; ?>" class="inv-email-address">
                                                        <?= $option['tel']; ?>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">شماره فاکتور:</span> <span class="inv-number">
                                                            00<?= $detail['id']; ?>
                                                        </span></p>
                                                <p class="inv-created-date"><span class="inv-title">تاریخ فاکتور:</span> <span class="inv-date">
                                                            <?= $detail['date']; ?>
                                                        </span></p>
                                                <p class="inv-due-date"><span class="inv-title">زمان فاکتور:</span> <span class="inv-date">
                                                            <?= $detail['time']; ?>
                                                        </span></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    این فاکنور (<?= $detail['title']; ?>
                                                    )
                                                    شامل موارد
                                                    <?= $detail['element']; ?>
                                                    و مبلغ
                                                    <?= number_format($detail['price']); ?>
                                                    تومان
                                                    توسط
                                                    <?= $detail['name']; ?>
                                                    در تاریخ
                                                    <?= $detail['date']; ?>
                                                    در ساعت
                                                    <?= $detail['time']; ?>
                                                    پرداخت شده است.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <a class="btn btn-success mb-2" target="_blank" href="<?= $detail['factor'] ?>">
                                                    دانلود فاکتور
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <!--modal-->

            <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog"
                 aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header" id="registerModalLabel">
                            <h4 class="modal-title"> افزودن </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="myform" class="mt-0" method="post">

                                <div class="form-group">
                                    <label>شماره کارت شما</label>
                                    <input type="text" name="cardNum" class="form-control mb-2"
                                           id="exampleInputUsername1" placeholder="شماره کارت">
                                </div>

                                <div class="form-group">
                                    <label>عنوان فاکتور</label>
                                    <input type="text" name="title" class="form-control mb-2"
                                           id="exampleInputUsername1" placeholder="عنوان فاکتور">
                                </div>

                                <div class="form-group">
                                    <label>مورد</label>
                                    <input type="text" name="element" class="form-control mb-2"
                                           id="exampleInputUsername1" placeholder="مورد">
                                </div>

                                <div class="form-group">
                                    <label>تعداد</label>
                                    <input type="text" name="tedad" class="form-control mb-2"
                                           id="exampleInputUsername1" placeholder="تعداد">
                                </div>

                                <div class="form-group">
                                    <label>قیمت فاکتور</label>
                                    <input type="text" name="price" class="form-control mb-2"
                                           id="exampleInputUsername1" placeholder="قیمت فاکتور">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="date" class="form-control mb-2"
                                           id="exampleInputUsername1" placeholder="تاریخ">
                                </div>

                                <a id="submit" <?php if ($level != 5) {
                                    echo 'onclick="submitForm();"';
                                } ?>
                                    <?php if ($level == 5) {
                                        echo 'disabled';
                                    } ?>
                                   class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                            </form>


                        </div>

                    </div>
                </div>
            </div>

            <!--modal-->

        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

<div id="output"></div>

</div>

<script>

    var factor = $('ul.vav li');
    var ct = $('#ct');

    factor.click(function () {
        ct.css('display','block');
    });

    function submitForm() {

        $.ajax({
            type: 'POST',
            url: 'adminfactor/addfactor/',
            data: $('#myform').serializeArray(),
            beforeSend: function () {
                $('#loader-icon').css('display', 'block');
                $('#dark').fadeIn(200);
                event.preventDefault();
                setTimeout(function (msg) {
                    $('.register-modal').modal('hide');
                }, 700);
            },
            success: function (msg) {
                console.log(msg);
                setTimeout(function (msg) {
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminfactor' + " .x");
            }
        });

    }

</script>
