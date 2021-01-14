<?php
$active='stat';
require ('views/admin/layout.php');
$user=$data['user'];
$bossNum=$user['bossNum'];
$projectManager=$user['projectManager'];
$developer=$user['developer'];
$graphicDesignerNum=$user['graphicDesignerNum'];
$viewer=$user['viewer'];
$accountant=$user['accountant'];
$startDate=$user['startDate'];
$endDate=$user['endDate'];
$result_total=$user['result_total'];

date_default_timezone_set('Asia/Tehran');
$time=date('H:i:s');

?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12" style="margin-bottom: 30px;">
                                <h4>گزارش اعضای سایت</h4>
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
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>

                        </div>
                    </div>

                    <p class="admin_title">
                        آمار کاربران در بازه
                        (
                        <?= $startDate; ?>
                        )
                        تا
                        (
                        <?= $endDate; ?>
                        )
                    </p>

                    <table id="html5-extension" class="table table-hover non-hover x table-profile">
                        <tbody>
                        <tr>
                            <td class="w-30">
                                <div class="title">تعداد کل کاربران:</div>
                                <div class="value">
                                    <?= sizeof($result_total); ?>
                                </div>
                            </td>
                            <td class="w-30">
                                <div class="title">تعداد کاربران مدیر :</div>
                                <div class="value">
                                    <?= $bossNum; ?>
                                </div>
                            </td>

                        </tr>
                        <tr>

                            <td class="w-30">
                                <div class="title">تعداد کاربران سرپرست:</div>
                                <div class="value">
                                    <?= $projectManager; ?>
                                </div>
                            </td>

                            <td class="w-30">
                                <div class="title">تعداد کاربران برنامه نویس:</div>
                                <div class="value">
                                    <?= $developer; ?>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td class="w-30">
                                <div class="title"> تعداد کاربران گرافیست :</div>
                                <div class="value">
                                    <?= $graphicDesignerNum; ?>
                                </div>
                            </td>
                            <td class="w-30">
                                <div class="title"> تعداد کاربران بیننده :</div>
                                <div class="value">
                                    <?= $viewer; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-30">
                                <div class="title"> تعداد کاربران حسابدار :</div>
                                <div class="value">
                                    <?= $accountant; ?>
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

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>
