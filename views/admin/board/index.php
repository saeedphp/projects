<?php
$active='board';
require ('views/admin/layout.php');
$option=Model::getOption();
$board=$data['board'];
$boardType=$data['boardType'];
?>


    <!-- BEGIN BOARD COLOR STYLE -->

<style>

    a{
        cursor: pointer;
    }

    ul.nav li{
        float: none !important;
        clear: both;
        display: inline-block !important;
    }
    ul.nav li a{
        display: inline !important;
    }

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


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row app-notes layout-top-spacing" id="cancel-row">
                <div class="col-lg-12">
                    <div class="app-hamburger-container">
                        <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                    </div>

                    <div class="app-container">

                        <div class="col-12 col-md-12" style="display: flex;">
                            <div class="col-md-6">
                                <a id="btn-submit" class="btn btn-primary" data-toggle="modal" data-target="#addBoard">افزودن</a>
                                <a id="btn-submit" class="btn btn-warning" onclick="addToArchive();">بایگانی</a>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> برچسب ها</p>

                                    <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                        <?php
                                        foreach ($boardType as $item){ ?>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-primary" id="<?= $item['tabId']; ?>">
                                                    <?= $item['title']; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="app-note-container" style="margin-top: 10rem;">

                            <!--<div class="app-note-overlay"></div>

                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12 text-center">
                                        <a id="btn-submit" class="btn btn-primary" data-toggle="modal" data-target="#addBoard">افزودن</a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12 text-center">
                                        <a id="btn-submit" class="btn btn-warning" onclick="addToArchive();">بایگانی</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12 mt-5">
                                        <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> برچسب ها</p>

                                        <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-primary" id="note-personal">شخصی</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-warning" id="note-work">کار</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-success" id="note-social">اجتماعی</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-danger" id="note-important">مهم</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>-->


                            <form method="post" id="tbl-form" style="width: 100%;padding: 0 15px;">

                                <div id="ct" class="note-container note-grid x">

                                    <?php
                                    foreach ($board as $row){ ?>

                                        <div class="note-item all-notes <?= $row['tabId']; ?>" style="background: #<?= $row['color']; ?>">
                                            <div class="note-inner-content">
                                                <div class="note-content">
                                                    <p class="note-title" style="position: relative;" data-noteTitle="ملاقات با رضا">
                                                        <?= $row['title']; ?>
                                                        <i class="<?= $row['icon']; ?>" style="position: absolute;left: 0;color: #fff;"></i>
                                                    </p>
                                                    <p class="meta-time">
                                                        <?= $row['date']; ?>
                                                    </p>
                                                    <div class="note-description-content">
                                                        <p class="note-description" data-noteDescription="اما توسعه دهنده چت آنتی اکسیدان ها و اعضای پروتئین نارنجی فلفل قرمز است.">
                                                            <?= $row['description']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="note-action">
                                                    <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                                                    <a data-toggle="modal"
                                                       data-target="#edit">
                                                        <i style="color: #fff;" onclick="editProject(<?= $row['id']; ?>)" class="fa fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="note-footer">
                                                    <div class="tags-selector btn-group">
                                                        <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                            <div class="tags">
                                                                <a href="adminboard/detail/<?= $row['id']; ?>">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                </a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                    <!--<div class="note-item all-notes note-important">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title" data-noteTitle="نمایه کاربران جدید ایجاد کنید">نمایه کاربران جدید ایجاد کنید</p>
                                                <p class="meta-time">11/10/1399</p>
                                                <div class="note-description-content">
                                                    <p class="note-description" data-noteDescription="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                                                </div>
                                            </div>
                                            <div class="note-action">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> شخصی</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> کار</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> اجتماعی</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> مهم</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->

                                </div>

                            </form>

                        </div>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade register-modal" id="addBoard" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="notes-box">
                                        <div class="notes-content">
                                            <form method="post" id="myform">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex note-title">
                                                            <input type="text" name="title" id="n-title" class="form-control" maxlength="25" placeholder="عنوان">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="d-flex note-description">
                                                            <textarea name="description" id="n-description" class="form-control" maxlength="60" placeholder="توضیحات" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                        <div class="d-flex">
                                                            <select data-placeholder="انتخاب کنید..." autocomplete="off"
                                                                    name="type" class="form-control">
                                                                <option>--انتحاب کنید--</option>
                                                                <?php
                                                                foreach ($boardType as $type) { ?>
                                                                    <option value="<?= $type['id']; ?>">
                                                                        <?= $type['title']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="date">

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>  نادیده گرفتن</button></button>
                                    <button id="btn-n-add" onclick="submitForm();" class="btn">افزودن</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade register-modal" id="edit" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="notes-box">
                                        <div class="notes-content">
                                            <form method="post" id="myform2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex note-title">
                                                            <input type="text" name="title" id="n-title" class="form-control" maxlength="25" placeholder="عنوان">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="d-flex note-description">
                                                            <textarea name="description" id="n-description" class="form-control" maxlength="60" placeholder="توضیحات" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                        <div class="d-flex">
                                                            <select data-placeholder="انتخاب کنید..." autocomplete="off"
                                                                    name="type" class="form-control">
                                                                <option>--انتحاب کنید--</option>
                                                                <?php
                                                                foreach ($boardType as $type) { ?>
                                                                    <option value="<?= $type['id']; ?>">
                                                                        <?= $type['title']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="date">

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>  نادیده گرفتن</button></button>
                                    <button id="btn-n-add" onclick="editForm();" class="btn">ویرایش</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

<div id="output"></div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->



<script>

    $('#btn-submit').click(function () {
        $('form#myform').trigger('reset');
    });

    $('#btn-submit').click(function () {
        $('form#myform2').trigger('reset');
    });

    var editBoardId = '';

    function editProject(boardId) {

        editBoardId = boardId;

        var url = 'adminboard/editboard/' + boardId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=title]').val(msg['title']);
            $('textarea[name=description]').val(msg['description']);
            $('select[name=type]').val(msg['type']);

        }, 'json');

    }

    function editForm() {

        $.ajax({
            type: 'POST',
            url: 'adminboard/addboard/' + editBoardId,
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
                $(".x").load('adminboard' + " .x");
            }
        });

    }

    function submitForm() {

        $.ajax({
            type: 'POST',
            url: 'adminboard/addboard/',
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
                $(".x").load('adminboard' + " .x");
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
                            url: 'adminboard/archive',
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
                                $(".x").load('adminboard' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>
