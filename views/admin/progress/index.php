<?php
$active = 'progress';
require('views/admin/layout.php');
$progress = $data['progress'];
$projectInfo = $data['projectInfo'];
$projectType = $data['projectType'];
$progressInfo = $data['progressInfo'];
$status = $data['status'];
$tech = $data['tech'];

date_default_timezone_set('Asia/Tehran');
$time = date('H:i:s');

?>

<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

<style>
    div.chosen-container.chosen-container-multi{width:auto !important;}
</style>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <h4 style="float: right;">مدیریت پروژه ها</h4>
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
                                <button <?php if ($level != 5) {
                                    echo 'onclick="addToArchive();"';
                                } ?> <?php if ($level == 5) {
                                    echo 'disabled';
                                } ?> type="button" class="btn btn-warning mb-2 mr-2"
                                     data-toggle="modal" data-target="#profileModal">
                                    بایگانی
                                </button>
                                <button type="button" id="btn-submit" class="btn btn-success mb-2 mr-2"
                                        data-toggle="modal" data-target="#registerModal">
                                    افزودن
                                </button>
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
                                            <label>نام پروژه</label>
                                            <input type="text" name="title" class="form-control mb-2"
                                                   id="exampleInputUsername1" placeholder="نام پروژه">
                                        </div>

                                        <div class="form-group">
                                            <label>نوع پروژه</label>
                                            <select autocomplete="off" type="text" name="type" class="form-control mb-2"
                                                    id="exampleInputUsername1">
                                                <option>--نوع پروژه را انتخاب کنید--</option>
                                                <?php
                                                foreach ($projectType as $row) { ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>وضعیت پروژه</label>
                                            <select autocomplete="off" type="text" name="status"
                                                    class="form-control mb-2" id="exampleInputUsername1">
                                                <option>--وضعیت پروژه را انتخاب کنید--</option>
                                                <?php
                                                foreach ($status as $row) { ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="social-label">
                                                تکنولوژی ها
                                            </label>
                                            <span class="wpcf7-form-control-wrap your-social">
                                    <select data-placeholder="انتخاب کنید..." multiple="multiple" autocomplete="off"
                                            name="tech[]"
                                            class="wpcf7-form-control chosen">
                                        <option>--انتحاب کنید--</option>
                                        <?php
                                        foreach ($tech as $row) { ?>
                                            <option value="<?= $row['id']; ?>">
                                                <?= $row['title']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>

                                </span>
                                        </div>

                                        <div class="form-group">
                                            <label>تاریخ تحویل</label>
                                            <input type="text" name="deadline" class="form-control mb-2"
                                                   id="date-picker" placeholder="تاریخ تحویل">
                                        </div>

                                        <script>
                                            kamaDatepicker('date-picker');
                                        </script>

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

                    <!--edit modal-->

                    <div class="modal fade register-modal" id="editModal" tabindex="-1" role="dialog"
                         aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> ویرایش </h4>
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
                                    <form id="myform2" class="mt-0" method="post">

                                        <div class="form-group">
                                            <label>نام پروژه</label>
                                            <input type="text" name="title" class="form-control mb-2"
                                                   id="exampleInputUsername1" placeholder="نام پروژه">
                                        </div>

                                        <div class="form-group">
                                            <label>نوع پروژه</label>
                                            <select autocomplete="off" type="text" name="type" class="form-control mb-2"
                                                    id="exampleInputUsername1">
                                                <option>--نوع پروژه را انتخاب کنید--</option>
                                                <?php
                                                foreach ($projectType as $row) { ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>وضعیت پروژه</label>
                                            <select autocomplete="off" type="text" name="status"
                                                    class="form-control mb-2" id="exampleInputUsername1">
                                                <option>--وضعیت پروژه را انتخاب کنید--</option>
                                                <?php
                                                foreach ($status as $row) { ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="social-label">
                                                تکنولوژی ها
                                            </label>
                                            <span class="wpcf7-form-control-wrap your-social">
                                    <select data-placeholder="انتخاب کنید..." multiple="multiple" autocomplete="off"
                                            name="tech[]"
                                            class="wpcf7-form-control chosen">
                                        <option>--انتحاب کنید--</option>
                                        <?php
                                        foreach ($tech as $row) { ?>
                                            <option value="<?= $row['id']; ?>">
                                                <?= $row['title']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>

                                </span>
                                        </div>

                                        <div class="form-group">
                                            <label>تاریخ تحویل</label>
                                            <input type="text" name="deadline" class="form-control mb-2"
                                                   id="date-picker-edit" placeholder="تاریخ تحویل">
                                        </div>

                                        <script>
                                            kamaDatepicker('date-picker-edit');
                                        </script>

                                        <div class="form-group">
                                            <input type="hidden" name="date" class="form-control mb-2"
                                                   id="exampleInputUsername1" placeholder="تاریخ">
                                        </div>

                                        <a id="submit" <?php if ($level != 5) {
                                            echo 'onclick="editForm();"';
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

                    <!--edit modal-->

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4 mt-4">
                            <form id="tbl-form" method="post">
                                <table id="html5-extension" class="table table-hover non-hover x" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>نام پروژه</th>
                                        <th>نوع پروژه</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ ایجاد پروژه</th>
                                        <th>تاریخ تحویل</th>
                                        <th>روزهای باقیمانده</th>
                                        <th>اسکچ ها</th>
                                        <th>ویدیو</th>
                                        <th> ویرایش</th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();" type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    foreach ($progress as $row) { ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row['projectType']!=''){
                                                    echo $row['projectType'];
                                                }else{
                                                    echo 'مشخص نشده';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <span class="shadow-none needs <?php if ($row['status'] == 1) {
                                                    echo 'needs';
                                                } elseif ($row['status'] == 2) {
                                                    echo 'theme';
                                                } elseif ($row['status'] == 3) {
                                                    echo 'UIUX';
                                                } elseif ($row['status'] == 4) {
                                                    echo 'dynamic';
                                                } elseif ($row['status'] == 5) {
                                                    echo 'check';
                                                } elseif ($row['status'] == 6) {
                                                    echo 'finaltest';
                                                } elseif ($row['status'] == 7) {
                                                    echo
                                                    'completed';
                                                } ?>"><?= $row['statusTitle'] ?></span>
                                            </td>
                                            <td>
                                                <?= $row['date']; ?>
                                                <i class="fa fa-calendar-check-o"></i>
                                                <br>
                                                <?= $row['time']; ?>
                                                <i class="fa fa-clock-o"></i>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row['deadline']!=''){
                                                 echo $row['deadline'];
                                                }else{
                                                    echo 'مشخص نشده';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $date1 = $date = date('Y/m/d');
                                                $date_jalali = Model::gregorianToJalali($date, '/');;
                                                $date2 = $row['deadline'];
                                                $days = (strtotime($date2) - strtotime($date_jalali)) / (60 * 60 * 24);
                                                if ($row['deadline']!=''){ ?>
                                                    <span class="shadow-none <?php if ($days < 10) {
                                                        echo 'force';
                                                    } elseif ($days >= 10 && $days < 20) {
                                                        echo 'near';
                                                    } elseif ($days >= 20 && $days < 40) {
                                                        echo
                                                        'normal';
                                                    } elseif ($days >= 40) {
                                                        echo 'deadline';
                                                    } ?>">
                                                    <?php
                                                    if ($days > 0) {
                                                        echo $days . 'روز';
                                                    } else {
                                                        echo 'تمام شد';
                                                    }
                                                    ?>
                                                </span>
                                                <?php }else{ ?>
                                                    <p>
                                                        مشخص نشده
                                                    </p>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a href="adminprogress/sketch/<?= $row['id']; ?>"
                                                   style="cursor: pointer;"
                                                   data-target="#editModal">
                                                    <i class="fa fa-photo"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a style="cursor: pointer;" href="adminprogress/video/<?= $row['id']; ?>">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a style="cursor: pointer;" data-toggle="modal"
                                                   data-target="#editModal">
                                                    <i onclick="editProject(<?= $row['id']; ?>)" class="fa fa-edit"></i>
                                                </a>
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

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>


<script>


    $(".chosen").chosen({
        no_results_text: "نتیجه ای یافت نشد!"
    });

    <?php
    if ($level != 5){ ?>
    $('#btn-submit').click(function () {
        $('form#myform').trigger('reset');
    });

    $('#btn-submit').click(function () {
        $('form#myform2').trigger('reset');
    });

    var editProjectId = '';

    function editProject(projectId) {

        editProjectId = projectId;

        var url = 'adminprogress/editprogress/' + projectId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=title]').val(msg['title']);
            $('select[name=type]').val(msg['type']);
            $('select[name=status]').val(msg['status']);
            $('input[name=deadline]').val(msg['deadline']);
            $('select[name=tech]').val(msg['tech[]']);

        }, 'json');

    }

    function editForm() {

        $.ajax({
            type: 'POST',
            url: 'adminprogress/addprogress/' + editProjectId,
            data: $('#myform2').serializeArray(),
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
                $(".x").load('adminprogress' + " .x");
            }
        });

    }

    function submitForm() {

        $.ajax({
            type: 'POST',
            url: 'adminprogress/addprogress/',
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
                $(".x").load('adminprogress' + " .x");
            }
        });

    }


    function addToArchive() {

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
                            url: 'adminprogress/addtoarchive',
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
                                $(".x").load('adminprogress' + " .x");
                            }
                        });
                    }
                }
            );
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
                {extend: 'pdf', className: 'btn'}
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