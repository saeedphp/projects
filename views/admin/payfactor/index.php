<?php
$active = 'payFactor';
require('views/admin/layout.php');
$factor = $data['factor'];

?>

<style>

    .pay_status{
        color: #fff;
        padding: 5px 10px;
        border-radius: 20px;
    }

    .paid{
        background: #00ff00;
    }

    .paying{
        background: #00dcff;
    }

    .notpaid{
        background: #ff003b;
    }

    .canceled{
        background: #b7b32d;
    }

</style>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت پرداختی فاکتور ها</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button type="button" id="btn-submit" class="btn btn-warning mb-2 mr-2" onclick="archive();">
                                    بایگانی
                                </button>
                                <a href="adminpayfactor/addfactor" id="btn-submit" class="btn btn-light-success mb-2 mr-2">
                                    افزودن
                                </a>
                                <button type="button" id="btn-submit" class="btn btn-success mb-2 mr-2"
                                    <?php if ($level!=5){echo 'onclick="submitFormMulti();"';} ?>
                                    <?php if ($level==5){echo 'disabled';} ?>>
                                    اجرای عملیات
                                </button>
                            </div>

                            <select class="col-md-4 select-comment" autocomplete="off" type="text" id="parent">
                                <option>--انتخاب کنید--</option>
                                <option value="1">پرداخت شده</option>
                                <option value="2">در حال پرداخت</option>
                                <option value="3">لغو پرداخت</option>
                                <option value="4">حذف</option>
                            </select>

                        </div>
                    </div>

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4 mt-4">
                            <form id="tbl-form" method="post">
                                <table id="html5-extension" class="table table-hover non-hover x" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>شماره فاکتور</th>
                                        <th>نام فاکتور</th>
                                        <th> شخص</th>
                                        <th> شماره کارت</th>
                                        <th> مبلغ فاکتور</th>
                                        <th> تاریخ ایجاد فاکتور</th>
                                        <th> وضعیت</th>
                                        <th> جزئیات</th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();" type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    foreach ($factor as $row) { ?>
                                        <tr>
                                            <td>
                                                00<?= $row['id']; ?>
                                            </td>
                                            <td>
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <?= $row['name']; ?>
                                            </td>
                                            <td>
                                                <?= number_format($row['cardNum'],4,'-',''); ?>
                                            </td>
                                            <td>
                                                <?= number_format($row['tedad']*$row['price']); ?>
                                                تومان
                                            </td>
                                            <td>
                                                <?= $row['date'] ?>
                                            </td>
                                            <td>
                                                <span class="pay_status <?php
                                                if ($row['status']==1){
                                                    echo 'notpaid';
                                                }elseif ($row['status']==2){
                                                    echo 'paying';
                                                }elseif ($row['status']==3){
                                                    echo 'paid';
                                                }else{
                                                    echo 'canceled';
                                                }
                                                ?>">
                                                    <?= $row['statusTitle'] ?>
                                                </span>
                                            </td>
                                            <td>
                                                <a target="_blank" href="adminpayfactor/detail/<?= $row['id']; ?>">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="id[]"
                                                       value="<?= $row['id']; ?>">
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    } ?>

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

    <?php
    if ($level!=5){ ?>

    function archive() {

        if (!$('input[type="checkbox"]').is(':checked')) {
            swal('خطا', 'هیچ گزینه ای انتخاب نشده است!', 'warning');
        } else {
            swal({
                    title: "آیا می خواهید بایگانی کنید؟",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: 'خیر',
                    confirmButtonText: 'بله',
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: 'POST',
                            url: 'adminpayfactor/archive',
                            data: $('#tbl-form').serializeArray(),
                            beforeSend: function () {
                                $('#loader-icon').css('display', 'block');
                                $('#dark').fadeIn(200);
                            },
                            success: function (msg) {
                                setTimeout(function (msg) {
                                    console.log(msg);
                                    $('#loader-icon').css('display', 'none');
                                    $('#dark').fadeOut(200);
                                }, 700);
                                $(".x").load('adminpayfactor' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

    function submitFormMulti() {

        if (!$('input[type="checkbox"]').is(':checked')) {
            swal('خطا', 'هیچ گزینه ای انتخاب نشده است!', 'warning');
        }else {
            var actionSelected = $('.select-comment option:selected').val();
            var action = '';
            if (actionSelected == 1) {
                action = 'adminpayfactor/paid';
            }
            if (actionSelected == 2) {
                action = 'adminpayfactor/paying';
            }
            if (actionSelected == 3) {
                action = 'adminpayfactor/canceled';
            }
            if (actionSelected == 4) {
                action = 'adminpayfactor/delete';
            }

            var form = $('#tbl-form');
            form.attr('action', action);
            form.submit();
        }

    }

    <?php } ?>

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