<?php
$visit=$data['visit'];
?>

<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

    <div class="widget widget-account-invoice-one">

        <div class="widget-heading">
            <h5 class="">اطلاعات حساب</h5>
        </div>

        <div class="widget-content">
            <div class="invoice-box">

                <div class="acc-total-info">
                    <h5>تعادل</h5>
                    <p class="acc-amount">470000 تومان</p>
                </div>

                <?php
                echo sizeof([$visit]);
                ?>

                <div class="inv-detail">
                    <div class="info-detail-1">
                        <p>پلن ماهیانه</p>
                        <p>199000 تومان</p>
                    </div>
                    <div class="info-detail-2">
                        <p>مالیات</p>
                        <p>17000 تومان</p>
                    </div>
                    <div class="info-detail-3 info-sub">
                        <div class="info-detail">
                            <p>اضافی در این ماه</p>
                            <p>-2500 تومان</p>
                        </div>
                        <div class="info-detail-sub">
                            <p>اشتراک سالانه Netflix</p>
                            <p>0 تومان</p>
                        </div>
                        <div class="info-detail-sub">
                            <p>دیگر</p>
                            <p>-3000 تومان</p>
                        </div>
                    </div>
                </div>

                <div class="inv-action">
                    <a href="" class="btn btn-outline-dark">خلاصه</a>
                    <a href="" class="btn btn-danger">انتقال</a>
                </div>
            </div>
        </div>

    </div>
</div>