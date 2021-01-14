<?php
$active='financial';
require ('views/admin/layout.php');
$financial=$data['financial'];
$projectInfo=$data['projectInfo'];
$projectType=$data['projectType'];
$progressInfo=$data['progressInfo'];
$status=$data['status'];

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
                                <h4 style="float: right;">مدیریت مالی پروژه ها</h4>
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
                                <button <?php if ($level==5){echo 'disabled';} ?> <?php if ($level!=5){echo 'onclick="addToArchive();"';} ?> type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                    بایگانی
                                </button>
                                <a href="adminfinancial/addfinancial" class="btn btn-success mb-2 mr-2">
                                    افزودن
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--modal-->

                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> افزودن </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="myform" class="mt-0" method="post">

                                        <div class="form-group">
                                            <label>نام پروژه</label>
                                            <input type="text" name="project" class="form-control mb-2" id="exampleInputUsername1">
                                        </div>

                                        <div class="form-group">
                                            <label>هزینه پروژه</label>
                                            <input type="text" name="cost" class="form-control mb-2" id="exampleInputUsername1">
                                        </div>

                                        <div class="form-group">
                                            <label>نوع پروژه</label>
                                            <select autocomplete="off" type="text" name="type" class="form-control mb-2" id="exampleInputUsername1">
                                                <option>--نوع پروژه را انتخاب کنید--</option>
                                                <?php
                                                foreach ($projectType as $row){ ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>وضعیت پروژه</label>
                                            <select autocomplete="off" type="text" name="status" class="form-control mb-2" id="exampleInputUsername1">
                                                <option>--وضعیت پروژه را انتخاب کنید--</option>
                                                <?php
                                                foreach ($status as $row){ ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <a id="submit" onclick="submitForm();" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                    </form>




                                </div>

                            </div>
                        </div>
                    </div>

                    <!--modal-->

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4 mt-4">
                            <form id="tbl-form" method="post">
                                <table id="html5-extension" class="table table-hover non-hover x" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>نام پروژه</th>
                                        <th>نوع پروژه</th>
                                        <th>هزینه</th>
                                        <th>وضعیت</th>
                                        <?php
                                        if ($level!=5){ ?>
                                            <th>جزئیات</th>
                                        <?php } ?>
                                        <th> ویرایش </th>
                                        <th> ویرایش سریع </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($financial as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['projectTitle']; ?>
                                            </td>
                                            <td>
                                                <?= $row['projectType']; ?>
                                            </td>
                                            <td>
                                                <?= number_format($row['cost']); ?>
                                                تومان
                                            </td>
                                            <td>
                                                <span style="padding: 5px 10px;" class="shadow-none <?php if ($row['status']==1){echo 'badge-paid';}elseif ($row['status']==2){echo 'badge-wait';}elseif ($row['status']==3){echo 'badge-postponed';} ?>">
                                                    <?= $row['projectStatus']; ?>
                                                </span>
                                            </td>
                                            <?php
                                            if ($level!=5){ ?>
                                                <td>
                                                    <a href="adminfinancial/detail/<?= $row['id']; ?>">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <a href="adminfinancial/addfinancial/<?= $row['id']; ?>" style="cursor: pointer;">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a style="cursor: pointer;" data-toggle="modal" data-target="#registerModal">
                                                    <i onclick="editFinance(<?= $row['id']; ?>);" class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>

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

    function addToArchive() {

        if (!$('input[type="checkbox"]').is(':checked')){
            swal('خطا','هیچ گزینه ای انتخاب نشده است!','warning');
        }else {
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
                    if (isConfirm){
                        $.ajax({
                            type:'POST',
                            url:'adminfinancial/addtoarchive',
                            data:$('#tbl-form').serializeArray(),
                            beforeSend: function() {
                                $('#loader-icon').css('display','block');
                                $('#dark').fadeIn(200);
                            },
                            success: function(msg) {
                                setTimeout(function (msg) {
                                    console.log(msg);
                                    $('#loader-icon').css('display','none');
                                    $('#dark').fadeOut(200);
                                },700);
                                $(".x").load('adminfinancial' + " .x");
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