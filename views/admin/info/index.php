<?php

$active='info';
require ('views/admin/layout.php');
$projectInfo=$data['projectInfo'];

?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>وضعیت پروژه</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4 mt-4">
                            <form id="tbl-form" method="post">
                                <table id="html5-extension" class="table table-hover non-hover x table-profile">
                                    <tbody>
                                    <tr>
                                        <td class="w-50">
                                            <div class="title">نام پروژه:</div>
                                            <div class="value">
                                                <?= $projectInfo['title']; ?>
                                            </div>
                                        </td>
                                        <td class="w-50">
                                            <div class="title">نام کاربری :</div>
                                            <div class="value">
                                                <?= $projectInfo['userTitle']; ?>
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
