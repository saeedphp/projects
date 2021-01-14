<?php
$active='form-archive';
require ('views/admin/layout.php');
$archive=$data['archive'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت بایگانی فرم های نیازسنجی</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button <?php if ($level!=5){echo 'onclick="deleteForm();"';} ?> <?php if ($level==5){echo 'disabled';} ?> type="button" class="btn btn-danger mb-2 mr-2">
                                    حذف
                                </button>
                                <button <?php if ($level!=5){echo 'onclick="recovery();"';} ?> <?php if ($level==5){echo 'disabled';} ?> type="button" class="btn btn-success mb-2 mr-2">
                                    بازگردانی
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4">
                            <form id="tbl-form" method="post">
                                <table id="individual-col-search" class="table table-hover x">

                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>نام مجموعه</th>
                                        <th> لوگو </th>
                                        <th> فرم راهنما </th>
                                        <th> کد رنگی اصلی </th>
                                        <th> کد رنگی دوم </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($archive as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['name']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row['islogo']=='yes'){ ?>
                                                    <a target="_blank" class="logo-img" href="<?= URL.$row['logo']; ?>">
                                                        <img src="<?= URL.$row['logo']; ?>">
                                                    </a>
                                                <?php }else{ ?>
                                                    <p>لوگو ندارد!</p>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row['guideline']=='yes'){ ?>
                                                    <a target="_blank" href="<?= URL.$row['guideline']; ?>">
                                                        <i class="fa fa-folder"></i>
                                                    </a>
                                                <?php }else{ ?>
                                                    <p>فایل راهنما ندارد!</p>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                #<?= $row['maincolor']; ?>
                                            </td>
                                            <td>
                                                #<?= $row['accentcolor']; ?>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>

                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>نام مجموعه</th>
                                        <th> لوگو </th>
                                        <th> فرم راهنما </th>
                                        <th> کد رنگی اصلی </th>
                                        <th> کد رنگی دوم </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </tfoot>

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
    function recovery() {

        if (!$('input[type="checkbox"]').is(':checked')) {
            swal('خطا', 'هیچ گزینه ای انتخاب نشده است!', 'warning');
        } else {
            swal({
                    title: "آیا می خواهید این مورد را برگردانید؟",
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
                            url: 'adminform/recovery',
                            data: $('#tbl-form').serializeArray(),
                            beforeSend: function () {
                                $('#loader-icon').css('display', 'block');
                                $('#dark').fadeIn(200);
                            },
                            success: function (msg) {
                                setTimeout(function (msg) {
                                    $('#loader-icon').css('display', 'none');
                                    $('#dark').fadeOut(200);
                                }, 700);
                                $(".x").load('adminform/archive' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

    function deleteForm() {

        if (!$('input[type="checkbox"]').is(':checked')) {
            swal('خطا', 'هیچ گزینه ای انتخاب نشده است!', 'warning');
        } else {
            swal({
                    title: "آیا می خواهید این مورد را حذف کنید؟",
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
                            url: 'adminform/delete',
                            data: $('#tbl-form').serializeArray(),
                            beforeSend: function () {
                                $('#loader-icon').css('display', 'block');
                                $('#dark').fadeIn(200);
                            },
                            success: function (msg) {
                                setTimeout(function (msg) {
                                    $('#loader-icon').css('display', 'none');
                                    $('#dark').fadeOut(200);
                                }, 700);
                                $(".x").load('adminform/archive' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }
    <?php } ?>

</script>