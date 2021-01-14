<?php
$active='stat';
require ('views/admin/layout.php');
$financial=$data['financial'];
$paidProject=$financial['paidProject'];
$waitProject=$financial['waitProject'];
$postponesProject=$financial['postponesProject'];
$paidWpProject=$financial['paidWpProject'];
$waitWpProject=$financial['waitWpProject'];
$postponedWpProject=$financial['postponedWpProject'];
$amountTotal=$financial['amountTotal'];
$amountWpTotal=$financial['amountWpTotal'];
$amountDotNetTotal=$financial['amountDotNetTotal'];
$amountNopCommerceTotal=$financial['amountNopCommerceTotal'];

$paidDotNetProject=$financial['paidDotNetProject'];
$waitDotNetProject=$financial['waitDotNetProject'];
$postponedDotNetProject=$financial['postponedDotNetProject'];

$paidNopProject=$financial['paidNopProject'];
$waitNopProject=$financial['waitNopProject'];
$postponedNopProject=$financial['postponedNopProject'];

$startDate=$financial['startDate'];
$endDate=$financial['endDate'];
$result_total=$financial['result_total'];

date_default_timezone_set('Asia/Tehran');
$time=date('H:i:s');

?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="col-xl-4 col-md-4 col-sm-12" style="margin-bottom: 30px;">
                            <h4>گزارش مالی پروژه ها</h4>
                            <button class="btn btn-success" onclick="window.print();">Print</button>
                            <span style="line-height: 52px;">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo jdate('l d F, Y'); ?>
                                </span>
                            <span style="line-height: 52px;margin-right: 15px;">
                                    <i class="fa fa-clock-o"></i>
                                    <?= $time; ?>
                                </span>
                        </div>
                    </div>

                    <p class="admin_title">
                        آمار مالی در بازه
                        (
                        <?= $startDate; ?>
                        )
                        تا
                        (
                        <?= $endDate; ?>
                        )
                    </p>

                    <div class="row">

                        <table id="html5-extension" class="table table-hover non-hover x table-profile">
                            <tbody>
                            <p>وضعیت مالی</p>
                            <tr>
                                <td class="w-30">
                                    <div class="title">مبلغ کل پروژه ها:</div>
                                    <div class="value">
                                        <?= number_format($amountTotal); ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">مبلغ کل پروژه های وردپرسی :</div>
                                    <div class="value">
                                        <?= number_format($amountWpTotal); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="title">مبلغ کل پروژه های دات نت:</div>
                                    <div class="value">
                                        <?= number_format($amountDotNetTotal); ?>
                                    </div>
                                </td>

                                <td class="w-30">
                                    <div class="title">مبلغ کل پروژه های ناپ کامرس:</div>
                                    <div class="value">
                                        <?= number_format($amountNopCommerceTotal); ?>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="title"> تعداد کل پروژه های پرداخت شده :</div>
                                    <div class="value">
                                        <?= $paidProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title"> تعداد کل پروژه های در انتظار پرداخت :</div>
                                    <div class="value">
                                        <?= $waitProject; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="title"> تعداد کل پروژه های به تعویق افتاده :</div>
                                    <div class="value">
                                        <?= $postponesProject; ?>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table id="html5-extension" class="table table-hover non-hover x table-profile">
                            <tbody>
                            <p>وضعیت مالی پروژه های وردپرس</p>
                            <tr>
                                <td class="w-30">
                                    <div class="title">تعداد پروژه های وردپرسی پرداخت شده:</div>
                                    <div class="value">
                                        <?= $paidWpProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">تعداد کل پروژه های وردپرس در انتظار پرداخت :</div>
                                    <div class="value">
                                        <?= $waitWpProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">تعداد کل پروژه های وردپرس به تعویق افتاده:</div>
                                    <div class="value">
                                        <?= $postponedWpProject; ?>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table id="html5-extension" class="table table-hover non-hover x table-profile">
                            <tbody>
                            <p>وضعیت مالی پروژه های دات نت</p>
                            <tr>
                                <td class="w-30">
                                    <div class="title">تعداد پروژه های دات نتی پرداخت شده:</div>
                                    <div class="value">
                                        <?= $paidDotNetProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">تعداد کل پروژه های دات نتی در انتظار پرداخت :</div>
                                    <div class="value">
                                        <?= $waitDotNetProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">تعداد کل پروژه های دات نتی به تعویق افتاده:</div>
                                    <div class="value">
                                        <?= $postponedDotNetProject; ?>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table id="html5-extension" class="table table-hover non-hover x table-profile">
                            <tbody>
                            <p>وضعیت مالی پروژه های دات نت</p>
                            <tr>
                                <td class="w-30">
                                    <div class="title">تعداد پروژه های ناپ کامرسی پرداخت شده:</div>
                                    <div class="value">
                                        <?= $paidNopProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">تعداد کل پروژه های دات نتی در انتظار پرداخت :</div>
                                    <div class="value">
                                        <?= $waitNopProject; ?>
                                    </div>
                                </td>
                                <td class="w-30">
                                    <div class="title">تعداد کل پروژه های دات نتی به تعویق افتاده:</div>
                                    <div class="value">
                                        <?= $postponedNopProject; ?>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>
