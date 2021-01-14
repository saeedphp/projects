<?php

$active='profile';
require ('views/admin/layout.php');
$userInfo=$data['userInfo'];

?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>پروفایل کاربری</h4>
                            </div>
                        </div>
                    </div>

                    <!--editUserProfile modal-->

                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> ویرایش اطلاعات من </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="myform" class="mt-0" method="post">

                                        <div class="form-group">
                                            <label>نام</label>
                                            <input type="text" name="name" value="<?= $userInfo['name']; ?>" class="form-control mb-2" id="exampleInputUsername1">
                                        </div>

                                        <div class="form-group">
                                            <label>ایمیل</label>
                                            <input type="text" name="email" value="<?= $userInfo['email']; ?>" class="form-control mb-2" id="exampleInputUsername1">
                                        </div>

                                        <div class="form-group">
                                            <label>نام کاربری</label>
                                            <input type="text" name="username" value="<?= $userInfo['username']; ?>" class="form-control mb-2" id="exampleInputUsername1">
                                        </div>

                                        <div class="form-group">
                                            <label>موبایل</label>
                                            <input type="text" name="mobile" value="<?= $userInfo['mobile']; ?>" class="form-control mb-2" id="exampleInputUsername1">
                                        </div>

                                        <a id="submit" <?php if ($level!=5){echo 'onclick="editUserProfile();"';} ?> <?php if ($level==5){echo 'disabled';} ?> class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--editUserProfile modal-->

                    <!--changePass modal-->

                    <div class="modal fade register-modal" id="changePassModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> تغییر رمز عبور </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="changepassform" class="mt-0" method="post">

                                        <div class="form-group eye-show">
                                            <label>رمز عبور فعلی</label>
                                            <i id="w" style="left: 8%;position: absolute;top: 3.5rem;cursor: pointer;" onclick="showpass2(this,1)" class="fa fa-eye"></i>
                                            <input onkeyup="check2();" required type="password" name="password_old" class="form-control mb-2" id="old-pass">
                                            <span id='message2'></span>
                                        </div>

                                        <div class="form-group eye-show">
                                            <label>رمز عبور جدید</label>
                                            <i id="w" style="left: 8%;position: absolute;top: 3.5rem;cursor: pointer;" onclick="showpass2(this,2)" class="fa fa-eye"></i>
                                            <input onkeyup="check();" required type="password" name="password_new" class="form-control mb-2" id="password">
                                        </div>

                                        <div class="form-group eye-show">
                                            <label>تکرار رمز عبور جدید</label>
                                            <i id="w" style="left: 8%;position: absolute;top: 3.5rem;cursor: pointer;" onclick="showpass2(this,3)" class="fa fa-eye"></i>
                                            <input onkeyup="check();" required type="password" name="password_confirm" class="form-control mb-2" id="repeat">
                                            <span id='message'></span>
                                        </div>

                                        <input id="submit2" onclick="changePass();" <?php if ($level==5){echo 'disabled';} ?> value="اجرای عملیات" class="btn btn-primary mt-2 mb-2 btn-block">

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--changePass modal-->

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4 mt-4">
                            <form id="tbl-form" method="post">
                                <table id="html5-extension" class="table table-hover non-hover x table-profile">
                                    <tbody>
                                    <tr>
                                        <td class="w-50">
                                            <div class="title">نام:</div>
                                            <div class="value">
                                                <?= $userInfo['name']; ?>
                                            </div>
                                        </td>
                                        <td class="w-50">
                                            <div class="title">ایمیل :</div>
                                            <div class="value">
                                                <a href="mailto:<?= $userInfo['email']; ?>">
                                                    <?= $userInfo['email']; ?>
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td class="w-50">
                                            <div class="title">نام کاربری:</div>
                                            <div class="value">
                                                <?= $userInfo['username']; ?>
                                            </div>
                                        </td>

                                        <td class="w-50">
                                            <div class="title">رمز  عبور:</div>
                                            <div class="value">
                                                <?= $userInfo['password']; ?>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="w-50">
                                            <div class="title"> موبایل :</div>
                                            <div class="value">
                                                <a href="tel:<?= $userInfo['mobile']; ?>">
                                                    <?= $userInfo['mobile']; ?>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="w-50">
                                            <div class="title"> سطح دسترسی :</div>
                                            <div class="value">
                                                <?= $userInfo['title']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-50">
                                            <div class="title"> تاریخ عضویت :</div>
                                            <div class="value">
                                                <?= $userInfo['date']; ?>
                                            </div>
                                        </td>
                                        <td class="w-50">
                                            <div class="title"> زمان عضویت :</div>
                                            <div class="value">
                                                <?= $userInfo['time']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <a class="edit-btn" data-toggle="modal" data-target="#registerModal">ویرایش اطلاعات من</a>
                        <a class="change-pass" data-toggle="modal" data-target="#changePassModal">تغییر رمز عبور</a>
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

    $('#submit').click(function () {
        $('form#myform').trigger('reset');
    });


    function editUserProfile(){

        $.ajax({
            type: 'POST',
            url: 'adminprofile/edituserprofile',
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
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminprofile' + " .x");
            }
        });

    }

    function showpass2(tag,id) {

        var imgTag = $(tag);
        var eye = imgTag.attr('class');
        if (eye == 'fa fa-eye') {
            imgTag.attr('class','fa fa-eye-slash');
        } else {
            imgTag.attr('class','fa fa-eye');
        }

        var x=0;

        switch (id) {
            case 1:
                x = 1;
                var x=
                    document.getElementById("old-pass");
                if (x.type==='password'){
                    x.type="text";
                }else {
                    x.type="password";
                }
                break;
            case 2:
                x = 2;
                var x=
                    document.getElementById("password");
                if (x.type==='password'){
                    x.type="text";
                }else {
                    x.type="password";
                }
                break;
            case 3:
                x = 3;
                var x=
                    document.getElementById("repeat");
                if (x.type==='password'){
                    x.type="text";
                }else {
                    x.type="password";
                }
                break;
            case 3:
                x = 3;
                myFunction1(x);
                break;
        }

    }

    var check2 = function () {
        <?php
        $old_pass=$userInfo['password'];
        ?>
        if (document.getElementById('old-pass').value == <?= $old_pass; ?>) {
            document.getElementById('message2').style.color = 'green';
            document.getElementById('message2').innerHTML = 'رمز فعلی درست است';
            $('#submit2').prop('disabled', false);
        } else {
            document.getElementById('message2').style.color = 'red';
            document.getElementById('message2').innerHTML = 'رمز فعلی نادرست است!!';
            $('#submit2').prop('disabled', true);
        }
    }

    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('repeat').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'تاییدیه رمز جدید درست است';
            $('#submit2').prop('disabled', false);
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'تاییدیه رمز جدید درست نیست!';
            $('#submit2').prop('disabled', true);
        }
    }


    function changePass() {

        $.ajax({
            type:'POST',
            url:'adminprofile/changepass',
            data:$('#changepassform').serializeArray(),
            beforeSend: function() {
                $('#loader-icon').css('display','block');
                $('#dark').fadeIn(200);
                event.preventDefault();
                setTimeout(function (msg) {
                    $('.register-modal').modal( 'hide' );
                    $('form#changepassform').trigger('reset');
                }, 700);
            },
            success: function(msg) {
                setTimeout(function (msg) {
                    console.log(msg);
                    $('#loader-icon').css('display','none');
                    $('#dark').fadeOut(200);
                },700);
                $(".x").load('adminprofile' + " .x");
            }
        });

    }

</script>
