<?php
$active='board-type';
require ('views/admin/layout.php');
$boardType=$data['boardType'];
$projectInfo=$data['projectInfo'];
$boardInfo=$data['boardInfo'];

?>
<style>
    .number-box{
        position: relative;
    }
    .fa.fa-nopcommerce::after{
        content: "";
        position: absolute;
        background: url(assets/images/nopCommerce.png) no-repeat;
        display: block;
        width: 16px;
        height: 16px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }
    .fa.fa-aspnet::after{
        content: "";
        position: absolute;
        background: url(assets/images/asp.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-datatable::after{
        content: "";
        position: absolute;
        background: url(assets/images/DataTables.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-sweetalert::after{
        content: "";
        position: absolute;
        background: url(assets/images/SweetAlert.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-owl::after{
        content: "";
        position: absolute;
        background: url(assets/images/OWL-Carousel.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-mysql::after{
        content: "";
        position: absolute;
        background: url(assets/images/MySQL.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        background-size:contain;
    }
    .fa.fa-jquery::after{
        content: "";
        position: absolute;
        background: url(assets/images/jQuery.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        background-size:contain;
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
                                <h4>مدیریت نوع پروژه ها</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button <?php if ($level!=5){echo 'onclick="deleteType();"';} ?> <?php if ($level==5){echo 'disabled';} ?> type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                    حذف
                                </button>
                                <button type="button" id="btn-submit" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#registerModal">
                                    افزودن
                                </button>
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
                                            <label>عنوان نوع پروژه</label>
                                        <input type="text" name="title" class="form-control mb-2" id="exampleInputUsername1" placeholder="عنوان پروژه">
                                </div>
                                        <div class="form-group">
                                            <label>رنگ </label>
                                            <input name="color" class="form-control mb-2 jscolor">
                                        </div>

                                        <div class="form-group">
                                            <label>آیکون</label>
                                            <input type="text" name="icon" class="form-control mb-2" placeholder="آیکون">
                                        </div>

                                        <div class="form-group">
                                            <label>آیدی تب</label>
                                            <input type="text" name="tabId" class="form-control mb-2" placeholder="عنوان آیدی تب">
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                                        </div>

                                        <a id="submit" <?php if ($level!=5){echo 'onclick="submitForm();"';} ?> <?php if ($level==5){echo 'disabled';} ?> class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--modal-->


                    <!--modal-->

                    <div class="modal fade register-modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> ویرایش </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="myform2" class="mt-0" method="post">

                                        <div class="form-group">
                                            <label>عنوان نوع پروژه</label>
                                            <input type="text" name="title" class="form-control mb-2" id="exampleInputUsername1" placeholder="عنوان پروژه">
                                        </div>

                                        <div class="form-group">
                                            <label>رنگ </label>
                                            <input name="color" class="form-control mb-2 jscolor">
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                                        </div>

                                        <div class="form-group">
                                            <label>آیکون</label>
                                            <input type="text" name="icon" class="form-control mb-2" placeholder="آیکون">
                                        </div>

                                        <div class="form-group">
                                            <label>آیدی تب</label>
                                            <input type="text" name="tabId" class="form-control mb-2" placeholder="عنوان آیدی تب">
                                        </div>

                                        <a id="submit" <?php if ($level!=5){echo 'onclick="editForm();"';} ?> <?php if ($level==5){echo 'disabled';} ?> class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

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
                                        <th>نوع پروژه</th>
                                        <th>رنگ</th>
                                        <th>آیکون</th>
                                        <th>آیدی تب</th>
                                        <th> ویرایش </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($boardType as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <span style="width: 15px;height: 15px;display: inline-block;background: #<?= $row['color']; ?>;position: relative;top: 3px;border-radius: 4px;"></span>
                                                #<?= $row['color']; ?>
                                            </td>
                                            <td>
                                                <i class="<?= $row['icon']; ?>"></i>
                                            </td>
                                            <td>
                                                <?= $row['tabId']; ?>
                                            </td>
                                            <td>
                                                <a style="cursor: pointer;" data-toggle="modal" data-target="#editModal">
                                                    <i onclick="editProject(<?= $row['id']; ?>)" class="fa fa-edit"></i>
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
    $('#btn-submit').click(function () {
        $('form#myform').trigger('reset');
    });

    $('#btn-submit').click(function () {
        $('form#myform2').trigger('reset');
    });

    var editProjectId = '';

    function editProject(projectId) {

        editProjectId = projectId;

        var url = 'adminboardtype/editboardtype/' + projectId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=title]').val(msg['title']);
            $('input[name=color]').val(msg['color']);
            $('input[name=icon]').val(msg['icon']);
            $('input[name=tabId]').val(msg['tabId']);

        }, 'json');

    }

    function editForm(){

        $.ajax({
            type: 'POST',
            url: 'adminboardtype/addboardtype/'+editProjectId,
            data: $('#myform2').serializeArray(),
            beforeSend: function () {
                $('#loader-icon').css('display', 'block');
                $('#dark').fadeIn(200);
                event.preventDefault();
                setTimeout(function (msg) {
                    $('.register-modal').modal( 'hide' );
                }, 700);
            },
            success: function (msg) {
                console.log(msg);
                setTimeout(function (msg) {
                    console.log(msg);
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminboardtype' + " .x");
            }
        });

    }

    function submitForm(){

        $.ajax({
            type: 'POST',
            url: 'adminboardtype/addboardtype/',
            data: $('#myform').serializeArray(),
            beforeSend: function () {
                $('#loader-icon').css('display', 'block');
                $('#dark').fadeIn(200);
                event.preventDefault();
                setTimeout(function (msg) {
                    $('.register-modal').modal( 'hide' );
                }, 700);
            },
            success: function (msg) {
                console.log(msg);
                setTimeout(function (msg) {
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminboardtype' + " .x");
            }
        });

    }


    function deleteType() {

        if (!$('input[type="checkbox"]').is(':checked')){
            swal('خطا','هیچ گزینه ای انتخاب نشده است!','warning');
        }else {
            swal({
                    title: "آیا می خواهید حذف کنید؟",
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
                            url:'adminboardtype/delete',
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
                                $(".x").load('adminboardtype' + " .x");
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