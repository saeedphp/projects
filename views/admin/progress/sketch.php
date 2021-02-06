<?php
$active='progress';
require ('views/admin/layout.php');
$sketch=$data['sketch'];
$projectInfo=$data['projectInfo'];

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
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <h4 style="float: right;">افزودن اسکچ
                                    (
                                    پروژه
                                    <?= $projectInfo['title']; ?>
                                    )
                                </h4>
                                <?php

                                ?>
                                <span style="line-height: 52px;">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo jdate('l d F, Y'); ?>
                                </span>
                                <span style="line-height: 52px;margin-right: 15px;">
                                    <i class="fa fa-clock-o"></i>
                                    <?= $time; ?>
                                </span>


                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button <?php if ($level!=5){echo 'onclick="deleteSketch();"';} ?> <?php if ($level==5){echo 'disabled';} ?> type="button" class="btn btn-warning mb-2 mr-2"
                                                                                                                                             data-toggle="modal" data-target="#profileModal">
                                    حذف
                                </button>
                            </div>

                        </div>
                    </div>

                    <form action="adminprogress/sketch/<?= $projectInfo['id']; ?>" id="myform" enctype="multipart/form-data" class="mt-0" method="post">

                        <div class="row">

                            <div class="card" id="showText">
                                <div class="header">
                                    <h2>اندازه فایل محدود <small>سعی کنید فایل بزرگتر از 5 مگابایت آپلود
                                            نکنید</small></h2>
                                </div>
                                <div class="body">
                                    <input type="file" name="image" data-allowed-file-extensions="pdf png jpg jpeg webp zip eps ai" data-max-file-size="500m" class="dropify">
                                </div>
                            </div>

                        </div>

                        <button type="submit" form="myform" style="width: 150px;" id="submit" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                    </form>

                    <form id="tbl-form" method="post">
                        <table id="html5-extension" class="table table-hover non-hover x" style="width:100%">
                            <thead>
                            <tr>
                                <th class="text-center">ردیف</th>
                                <th> اسکچ </th>
                                <th>انتخاب
                                    <input id="select" onclick="selectAll();" type="checkbox">
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $i = 1;
                            foreach ($sketch as $row) { ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $i; ?>
                                    </td>
                                    <td style="width: 200px;height:200px;">
                                        <img style="width: 100%;height: 100%;" src="<?= $row['image']; ?>">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
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

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>


<script>

    <?php
    if ($level!=5){ ?>
    function deleteSketch() {

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
                            url: 'adminprogress/deletesketch',
                            data: $('#tbl-form').serializeArray(),
                            beforeSend: function () {
                                $('#loader-icon').css('display', 'block');
                                $('#dark').fadeIn(200);
                            },
                            success: function (msg) {
                                console.log(msg);
                                setTimeout(function (msg) {
                                    $('#loader-icon').css('display', 'none');
                                    $('#dark').fadeOut(200);
                                }, 700);
                                $(".x").load('adminprogress/sketch/<?= $projectInfo['id'] ?>' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }
    <?php } ?>

</script>