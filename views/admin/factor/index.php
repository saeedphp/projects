<?php
$active='factor';
require ('views/admin/layout.php');
$factor=$data['factor'];
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
                        <div class="tab-title">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="search">
                                        <input type="text" class="form-control" placeholder="جستجو کنید...">
                                        <button type="button" id="btn-submit" class="btn btn-success mb-2 mr-2"
                                                data-toggle="modal" data-target="#registerModal">
                                            افزودن
                                        </button>
                                    </div>
                                    <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                                        <?php
                                        foreach ($factor as $row){ ?>
                                        <li class="nav-item">
                                            <div class="nav-link list-actions" id="<?= $row['id']; ?>" data-invoice-id="<?= $row['id']; ?>">
                                                <div class="f-m-body">
                                                    <div class="f-head">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                    </div>
                                                    <div class="f-body">
                                                        <p class="invoice-number">فاکتور : <?= $row['title']; ?></p>
                                                        <p class="invoice-customer-name"><span>از طرف :</span> <?= $row['name']; ?></p>
                                                        <p class="invoice-customer-name"><span>به :</span> شرکت فراموج</p>
                                                        <p class="invoice-generated-date">تاریخ: <?= $row['date']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="invoice-container">
                            <div class="invoice-inbox">

                                <!--<div class="inv-not-selected">
                                    <p>یک فاکتور را از لیست باز کنید.</p>
                                </div>-->

                                <div class="invoice-header-section">
                                    <h4 class="inv-number"></h4>
                                    <div class="invoice-action">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="پرینت"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                    </div>
                                </div>

                                <div id="ct" class="">
                                    <?php
                                    foreach ($factor as $row){ ?>

                                        <div class="<?= $row['id']; ?>">
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
                                                    <p class="inv-detail-title">از جانب : <?= $row['name']; ?></p>
                                                    <p class="inv-detail-title">شماره کارت : <?= $row['cardNum']; ?></p>
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
                                                            00<?= $row['id']; ?>
                                                        </span></p>
                                                    <p class="inv-created-date"><span class="inv-title">تاریخ فاکتور:</span> <span class="inv-date">
                                                            <?= $row['date']; ?>
                                                        </span></p>
                                                    <p class="inv-due-date"><span class="inv-title">زمان فاکتور:</span> <span class="inv-date">
                                                            <?= $row['time']; ?>
                                                        </span></p>
                                                </div>
                                            </div>

                                            <div class="row inv--product-table-section">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="">
                                                            <tr>
                                                                <th scope="col">ردیف</th>
                                                                <th scope="col">موارد</th>
                                                                <th class="text-right" scope="col">تعداد</th>
                                                                <th class="text-right" scope="col">قیمت واحد</th>
                                                                <th class="text-right" scope="col">قیمت کل</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $i=1;
                                                            foreach ($factor as $row){ ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $i; ?>
                                                                </td>
                                                                <td>
                                                                    <?= $row['element']; ?>
                                                                </td>
                                                                <td class="text-right">
                                                                    <?= $row['tedad']; ?>
                                                                </td>
                                                                <td class="text-right">
                                                                    <?= number_format($row['price']); ?>
                                                                    تومان
                                                                </td>
                                                                <td class="text-right">
                                                                    <?= number_format($row['tedad']*$row['price']); ?>
                                                                    تومان
                                                                </td>
                                                            </tr>
                                                            <?php $i++; } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <?php } ?>

                                    <!--<div class="invoice-00015">
                                        <div class="content-section  animated animatedFadeInUp fadeInUp">

                                            <div class="row inv--head-section">

                                                <div class="col-sm-6 col-12">
                                                    <h3 class="in-heading">صورتحساب </h3>
                                                </div>
                                                <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                    <div class="company-info">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                        <h5 class="inv-brand-name">کورک</h5>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row inv--detail-section">

                                                <div class="col-sm-12 align-self-center  text-sm-left order-sm-0 order-1">
                                                    <p class="inv-detail-title">از جانب : کمپانی ستون</p>
                                                </div>
                                                <div class="col-sm-7 align-self-center">
                                                    <p class="inv-to">فاکتور به</p>
                                                </div>

                                                <div class="col-sm-7 align-self-center">
                                                    <p class="inv-customer-name">روکسانا</p>
                                                    <p class="inv-street-addr">تهران ، خیابان 22 ، کوچه 22 ، پلاک 18</p>
                                                    <p class="inv-email-address">redq@company.com</p>
                                                </div>
                                                <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                    <p class="inv-list-number"><span class="inv-title">شماره فاکتور:</span> <span class="inv-number">[invoice number]</span></p>
                                                    <p class="inv-created-date"><span class="inv-title">تاریخ فاکتور:</span> <span class="inv-date">20 مهر 1399</span></p>
                                                    <p class="inv-due-date"><span class="inv-title">موعد مقرر:</span> <span class="inv-date">26 مهر 1399</span></p>
                                                </div>
                                            </div>

                                            <div class="row inv--product-table-section">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="">
                                                            <tr>
                                                                <th scope="col">ردیف</th>
                                                                <th scope="col">موارد</th>
                                                                <th class="text-right" scope="col">تعداد</th>
                                                                <th class="text-right" scope="col">قیمت واحد</th>
                                                                <th class="text-right" scope="col">قیمت کل</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>ریش تراش الکتریکی</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">28000 تومان</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>هدفون</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">7000 تومان</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>روتر بیسیم</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">35000 تومان</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    <div class="inv--payment-info">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-12">
                                                                <h6 class=" inv-title">اطلاعات پرداخت</h6>
                                                            </div>
                                                            <div class="col-sm-4 col-12">
                                                                <p class=" inv-subtitle">نام بانک : </p>
                                                            </div>
                                                            <div class="col-sm-8 col-12">
                                                                <p class="">بانک مرکزی ایران</p>
                                                            </div>
                                                            <div class="col-sm-4 col-12">
                                                                <p class=" inv-subtitle">شماره حساب : </p>
                                                            </div>
                                                            <div class="col-sm-8 col-12">
                                                                <p class="">1234567890</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                    <div class="inv--total-amounts text-sm-right">
                                                        <div class="row">
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">زیر مجموع: </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">13000 تومان</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">مالیات: </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">7000 تومان</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class=" discount-rate">تخفیف:<span class="discount-percentage">5%</span> </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">7000 تومان</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7 grand-total-title">
                                                                <h4 class="">کل:</h4>
                                                            </div>
                                                            <div class="col-sm-4 col-5 grand-total-amount">
                                                                <h4 class="">$14000</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>-->
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
