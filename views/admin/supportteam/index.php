<?php
$active='support-team';
require ('views/admin/layout.php');
$supportTeam=$data['supportTeam'];

?>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="widget-content searchable-container list">

                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <input type="text" class="form-control product-search" id="input-search" placeholder="جستجو مخاطب...">
                                </div>
                            </form>
                        </div>

                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                            <div class="d-flex justify-content-sm-end justify-content-center">

                                <a id="btn-submit">
                                    <svg data-toggle="modal" data-target="#registerModal" id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                </a>

                                <a onclick="deleteSupport();">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="btn-add-contact" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus delete"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>

                                </a>

                                <div class="switch align-self-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                </div>
                            </div>




                            <!--modal-->

                            <div class="modal fade register-modal" id="registerModal" data-id="<?= $supportTeam['id']; ?>"
                                 tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="registerModalLabel">
                                            <h4 class="modal-title">
                                                افزودن
                                            </h4>
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
                                            <form id="myform" class="mt-0" action="" method="post">

                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="نام">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="position" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="شغل">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="ایمیل">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="tel" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="تلفن">
                                                </div>

                                                <input type="hidden" name="date">

                                                <a id="submit" onclick="submitForm();"
                                                   class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--modal-->

                            <!--edit modal-->

                            <div class="modal fade register-modal" id="editModal" data-id="<?= $supportTeam['id']; ?>"
                                 tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="registerModalLabel">
                                            <h4 class="modal-title">
                                                ویرایش
                                            </h4>
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
                                            <form id="myform2" class="mt-0" action="" method="post">

                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="نام">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="position" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="شغل">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="ایمیل">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="tel" class="form-control mb-2"
                                                           id="exampleInputUsername1" placeholder="تلفن">
                                                </div>

                                                <a id="submit" onclick="editForm();"
                                                   class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--edit modal-->


                        </div>
                    </div>

                    <div class="x">
                        <?php
                        if (sizeof($supportTeam)>0){ ?>

                            <form method="post" id="tbl-form">
                                <div class="searchable-items list">
                                    <div class="items items-header-section">
                                        <div class="item-content">
                                            <div class="">
                                                <div class="n-chk align-self-center text-center">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <p class="user-name">
                                                            ردیف
                                                        </p>
                                                    </label>
                                                </div>
                                                <h4>نام</h4>
                                            </div>
                                            <div class="user-email">
                                                <h4>ایمیل</h4>
                                            </div>
                                            <div class="user-phone">
                                                <h4 style="margin-left: 3px;">موبایل</h4>
                                            </div>
                                            <div class="action-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    $i=1;
                                    foreach ($supportTeam as $row){ ?>

                                        <div class="items">
                                            <div class="item-content">
                                                <div class="user-profile">
                                                    <div class="n-chk align-self-center text-center">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <?= $i; ?>
                                                        </label>
                                                    </div>
                                                    <!--<img src="assets/img/90x90.jpg" alt="avatar">-->
                                                    <div class="user-meta-info">
                                                        <p class="user-name" data-name="<?= $row['name']; ?>">
                                                            <?= $row['name']; ?>
                                                        </p>
                                                        <p class="user-work" data-occupation="<?= $row['position']; ?>">
                                                            <?= $row['position']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="user-email">
                                                    <p class="info-title">ایمیل: </p>
                                                    <p class="usr-email-addr" data-email="<?= $row['email']; ?>">
                                                        <a href="mailto:<?= $row['email']; ?>">
                                                            <?= $row['email']; ?>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="user-phone">
                                                    <p class="info-title">موبایل: </p>
                                                    <p class="usr-ph-no" data-phone="<?= $row['tel']; ?>">
                                                        <a href="tel:<?= $row['tel']; ?>">
                                                            <?= $row['tel']; ?>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="action-btn">

                                                    <a onclick="editSupport(<?= $row['id']; ?>)" data-toggle="modal"
                                                       data-target="#editModal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    </a>

                                                    <input name="id[]" type="checkbox" value="<?= $row['id']; ?>">

                                                </div>
                                            </div>
                                        </div>

                                        <?php $i++; } ?>

                                </div>
                            </form>

                        <?php }else{ ?>
                            <p style="text-align: center;line-height: 35px;">
                                <i style="width: 100%;display: block;font-size: 50px !important;" class="fa fa-user-circle-o"></i>
                                هیچ کاربری وجود ندارد!
                            </p>
                        <?php } ?>
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

<script>

    $('#btn-submit').click(function () {
        $('form#myform').trigger('reset');
    });

    $('#btn-submit').click(function () {
        $('form#myform2').trigger('reset');
    });

    var editSupportId = '';

    function editSupport(supportId) {

        editSupportId = supportId;

        var url = 'adminsupportteam/editsupportteam/' + supportId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=name]').val(msg['name']);
            $('input[name=position]').val(msg['position']);
            $('input[name=email]').val(msg['email']);
            $('input[name=tel]').val(msg['tel']);

        }, 'json');

    }

    function editForm() {

        $.ajax({
            type: 'POST',
            url: 'adminsupportteam/addsupportteam/' + editSupportId,
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
                $(".x").load('adminsupportteam' + " .x");
            }
        });

    }


    function submitForm(){

        $.ajax({
            type: 'POST',
            url: 'adminsupportteam/addsupportteam/',
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
                $(".x").load('adminsupportteam' + " .x");
            }
        });

    }


    function deleteSupport() {

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
                            url:'adminsupportteam/delete',
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
                                $(".x").load('adminsupportteam' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>
