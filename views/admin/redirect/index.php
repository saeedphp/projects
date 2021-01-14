<?php
$active='redirect';
require ('views/admin/layout.php');
$redirect=$data['redirect'];
$redirectInfo=$data['redirectInfo'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت تغییر مسیر</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button <?php if ($level!=5){echo 'onclick="deleteCat();"';} ?> <?php if ($level==5){echo 'disabled';} ?> type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                    بایگانی
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
                                            <input type="text" name="currentUrl" class="form-control mb-2" id="exampleInputEmail2" placeholder="آدرس فعلی">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="targetUrl" class="form-control mb-2" id="exampleInputEmail2" placeholder="آدرس مقصد">
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

                    <!--edit modal-->

                    <div class="modal fade register-modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> افزودن </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="myform2" class="mt-0" method="post">

                                        <div class="form-group">
                                            <input type="text" name="currentUrl" class="form-control mb-2" id="exampleInputEmail2" placeholder="آدرس فعلی">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="targetUrl" class="form-control mb-2" id="exampleInputEmail2" placeholder="آدرس مقصد">
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                                        </div>

                                        <a id="submit" <?php if ($level!=5){echo 'onclick="editForm();"';} ?> <?php if ($level==5){echo 'disabled';} ?> class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                    </form>




                                </div>

                            </div>
                        </div>
                    </div>

                    <!--edit modal-->

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4">
                            <form id="tbl-form" method="post">
                                <table id="individual-col-search" class="table table-hover x">

                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>مسیر فعلی</th>
                                        <th> مسیر جایگزین </th>
                                        <th> ویرایش </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($redirect as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['currentUrl']; ?>
                                            </td>
                                            <td>
                                                <?= $row['targetUrl']; ?>
                                            </td>
                                            <td>
                                                <a style="cursor: pointer;" data-toggle="modal" data-target="#editModal">
                                                    <i onclick="editRedirect(<?= $row['id']; ?>)" class="fa fa-edit"></i>
                                                </a>
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
                                        <th>مسیر فعلی</th>
                                        <th> مسیر جایگزین </th>
                                        <th style="visibility: hidden;"> ویرایش </th>
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
    $('#btn-submit').click(function () {
        $('form#myform').trigger('reset');
    });

    $('#btn-submit').click(function () {
        $('form#myform2').trigger('reset');
    });

    var editRedirectId = '';

    function editRedirect(redirectId) {

        editRedirectId = redirectId;

        var url = 'adminredirect/editredirect/' + redirectId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=currentUrl]').val(msg['currentUrl']);
            $('input[name=targetUrl]').val(msg['targetUrl']);

        }, 'json');

    }

    function editForm(){

        $.ajax({
            type: 'POST',
            url: 'adminredirect/addredirect/'+editRedirectId,
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
                setTimeout(function (msg) {
                    console.log(msg);
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminredirect' + " .x");
            }
        });

    }

    function submitForm(){

        $.ajax({
            type: 'POST',
            url: 'adminredirect/addredirect/',
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
                setTimeout(function (msg) {
                    console.log(msg);
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminredirect' + " .x");
            }
        });

    }


    function deleteCat() {

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
                            url:'adminredirect/addtoarchive',
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
                                $(".x").load('adminredirect' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }
    <?php } ?>

</script>