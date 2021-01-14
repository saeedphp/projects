<?php
$active='archive-progress';
require ('views/admin/layout.php');
$archive=$data['archive'];
$projectInfo=$data['projectInfo'];
$projectType=$data['projectType'];
$progressInfo=$data['progressInfo'];
$status=$data['status'];

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت بایگانی پیشرفت پروژه ها</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button <?php if ($level!=5){echo 'onclick="deleteProject();"';} ?> <?php if ($level==5){echo 'disabled';} ?> type="button" class="btn btn-danger mb-2 mr-2">
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
                                        <th>نام پروژه</th>
                                        <th>نوع پروژه</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ ایجاد پروژه</th>
                                        <th>تاریخ تحویل</th>
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
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <?= $row['projectType']; ?>
                                            </td>
                                            <td>

                                                <span class="shadow-none <?php if ($row['status']==1){echo 'needs';}elseif ($row['status']==2){echo 'theme';}elseif ($row['status']==3){echo 'UIUX';}elseif ($row['status']==4){echo 'dynamic';}elseif ($row['status']==5){echo 'check';}elseif ($row['status']==6){echo 'finaltest';}elseif ($row['status']==7){echo
                                                'completed';} ?>"><?= $row['statusTitle'] ?></span>

                                            </td>
                                            <td>
                                                <?= $row['date']; ?>
                                                <br>
                                                <?= $row['time']; ?>
                                            </td>
                                            <td>
                                                <?= $row['deadline']; ?>
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
                                        <th>نام پروژه</th>
                                        <th>نوع پروژه</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ ایجاد پروژه</th>
                                        <th>تاریخ تحویل</th>
                                        <th style="visibility: hidden;">انتخاب
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
                            url: 'adminprogress/recovery',
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
                                $(".x").load('adminprogress/archive' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

    function deleteProject() {

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
                            url: 'adminprogress/delete',
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
                                $(".x").load('adminprogress/archive' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }
    <?php } ?>

</script>