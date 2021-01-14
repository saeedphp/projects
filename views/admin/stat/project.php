<?php
$active='stat';
require ('views/admin/layout.php');
$project=$data['project'];
$wpNum=$project['wpProject'];
$dotNetNum=$project['dotnetProject'];
$nopNum=$project['nopProject'];
$needs=$project['needs'];
$theme=$project['theme'];
$uiux=$project['uiux'];
$dynamic=$project['dynamic'];
$check=$project['check'];
$finaltest=$project['finaltest'];
$completed=$project['completed'];
$startDate=$project['startDate'];
$endDate=$project['endDate'];
$result_total=$project['result_total'];

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
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>گزارش پروژه ها</h4>
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

                    <div class="widget-content widget-content-area">

                        <p class="admin_title">
                            آمار سفارشات در بازه
                            (
                            <?= $startDate; ?>
                            )
                            تا
                            (
                            <?= $endDate; ?>
                            )
                        </p>

                        <div class="table-responsive mb-4 mt-4">
                            <form id="tbl-form" method="post">
                                <table id="html5-extension" class="table table-hover non-hover x table-profile">
                                    <tbody>
                                    <tr>
                                        <td class="w-30">
                                            <div class="title">تعداد کل سفارشات:</div>
                                            <div class="value">
                                                <?= sizeof($result_total); ?>
                                            </div>
                                        </td>
                                        <td class="w-30">
                                            <div class="title">تعداد کل سفارشات وردپرسی :</div>
                                            <div class="value">
                                                <?= $wpNum; ?>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td class="w-30">
                                            <div class="title">تعداد کل سفارشات دات نت:</div>
                                            <div class="value">
                                                <?= $dotNetNum; ?>
                                            </div>
                                        </td>

                                        <td class="w-30">
                                            <div class="title">تعداد کل سفارشات ناپ کامرس:</div>
                                            <div class="value">
                                                <?= $nopNum; ?>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="title"> تعداد کل سفارشات در وضعیت نیازسنجی :</div>
                                            <div class="value">
                                                <?= $needs; ?>
                                            </div>
                                        </td>
                                        <td class="w-30">
                                            <div class="title"> تعداد کل سفارشات در وضعیت طراحی قالب :</div>
                                            <div class="value">
                                                <?= $theme; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="title"> تعداد کل سفارشات در وضعیت UIUX :</div>
                                            <div class="value">
                                                <?= $uiux; ?>
                                            </div>
                                        </td>
                                        <td class="w-30">
                                            <div class="title"> تعداد کل سفارشات در وضعیت داینامیک :</div>
                                            <div class="value">
                                                <?= $dynamic; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="title"> تعداد کل سفارشات در وضعیت چک :</div>
                                            <div class="value">
                                                <?= $check; ?>
                                            </div>
                                        </td>
                                        <td class="w-30">
                                            <div class="title">تعداد کل سفارشات در وضعیت تست نهایی:</div>
                                            <div class="value">
                                                <?= $finaltest; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="title"> تعداد کل سفارشات تکمیل شده :</div>
                                            <div class="value">
                                                <?= $completed; ?>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>

<script>

    $('#html5-extension').DataTable({
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [
                {extend: 'copy', className: 'btn'},
                {extend: 'excel', className: 'btn'},
                {extend: 'print', className: 'btn'},
                { extend: 'pdf', className: 'btn' }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
            },
            "sInfo": "صفحه _PAGE_ از _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "جستجو کنید...",
            "sLengthMenu": "نتایج :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });

</script>
