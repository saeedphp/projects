
<?php

$active='profile';
require ('views/panel/index.php');
$userInfo=$data['userInfo'];

?>

<div class="box-header">
    <span class="box-title">اطلاعات من</span>
</div>
<table class="table table-profile table-panel-profile">
    <tbody>
    <tr>
        <td class="w-50">
            <div class="title">نام و نام خانوادگی:</div>
            <div class="value">
                <?= $userInfo['name']; ?>
            </div>
        </td>
        <td>
            <div class="title">پست الکترونیک :</div>
            <div class="value">
                <?= $userInfo['email']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="title">شماره تلفن ثابت:</div>
            <div class="value">
                <?= $userInfo['tel']; ?>
            </div>
        </td>
        <td>
            <div class="title">شماره تلفن همراه:</div>
            <div class="value">
                <?= $userInfo['mobile']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="title"> کد ملی :</div>
            <div class="value">
                <?= $userInfo['code_meli'] ?>
            </div>
        </td>
        <td>
            <div class="title"> کد پستی :</div>
            <div class="value">
                <?= $userInfo['code_posti'] ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="title"> تولد :</div>
            <div class="value">
                <?= $userInfo['birth'] ?>
            </div>
        </td>
        <td>
            <div class="title"> جنسیت :</div>
            <div class="value">
                <?php
                $gender=$userInfo['gender'];
                if ($gender==1){
                    echo 'مرد';
                }else{
                    echo 'زن';
                }
                ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="title"> دریافت خبرنامه :</div>
            <div class="value">
                <?php
                $newsletter=$userInfo['newsletter'];
                if ($newsletter==1){
                    echo 'بله';
                }else{
                    echo 'خیر';
                }
                ?>
            </div>
        </td>
        <td>
            <div class="title">تاریخ عضویت:</div>
            <div class="value">
                <?= $userInfo['date']; ?>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<div class="profile">
    <ul class="mb-0">
        <li class="profile-item">
            <div class="title">نام و نام خانوادگی:</div>
            <div class="value"><?= $userInfo['name']; ?></div>
        </li>
        <li class="profile-item">
            <div class="title">پست الکترونیک :</div>
            <div class="value"><?= $userInfo['email']; ?></div>
        </li>
        <li class="profile-item">
            <div class="title">شماره تلفن ثابت:</div>
            <div class="value">
                <?= $userInfo['tel']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">شماره تلفن همراه:</div>
            <div class="value">
                <?= $userInfo['mobile']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">کد ملی:</div>
            <div class="value">
                <?= $userInfo['code_meli']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">کد پستی:</div>
            <div class="value">
                <?= $userInfo['code_posti']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">تولد:</div>
            <div class="value">
                <?= $userInfo['birth']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">جنسیت:</div>
            <div class="value">
                <?php
                $gender=$userInfo['gender'];
                if ($gender==1){
                    echo 'مرد';
                }else{
                    echo 'زن';
                }
                ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title"> دریافت خبرنامه :</div>
            <div class="value">
                <?php
                $newsletter=$userInfo['newsletter'];
                if ($newsletter==1){
                    echo 'بله';
                }else{
                    echo 'خیر';
                }
                ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title"> تاریخ عضویت :</div>
            <div class="value">
                <?= $userInfo['date']; ?>
            </div>
        </li>
    </ul>
</div>
<div class="profile-edit-action">
    <a href="profile/editprofile" class="link-spoiler-edit btn btn-secondary">ویرایش اطلاعات</a>
    <a href="profile/changepass" class="link-spoiler-edit btn btn-secondary">تغییر رمز عبور</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<!-- profile------------------------------->