<?php
$active = 'profile';
require('views/panel/index.php');
$userInfo = $data['userInfo'];
?>


<div class="box-header">
    <span class="box-title">اطلاعات من</span>
</div>
<table class="table table-profile table-panel-profile table-nedds-form">
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
                <a href="mailto:<?= $userInfo['email']; ?>">
                    <?= $userInfo['email']; ?>
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="title">نام کاربری:</div>
            <div class="value">
                <?= $userInfo['username']; ?>
            </div>
        </td>
        <td>
            <div class="title">شماره تلفن همراه:</div>
            <div class="value">
                <a href="tel:<?= $userInfo['mobile']; ?>">
                    <?= $userInfo['mobile']; ?>
                </a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="title">تاریخ عضویت:</div>
            <div class="value">
                <?= $userInfo['date']; ?>
            </div>
        </td>
        <td>
            <div class="title"> زمان عضویت :</div>
            <div class="value">
                <?= $userInfo['time']; ?>
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
            <div class="value">
                <a href="mailto:<?= $userInfo['email']; ?>">
                    <?= $userInfo['email']; ?>
                </a>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">شماره تلفن همراه:</div>
            <div class="value">
                <a href="tel:<?= $userInfo['mobile']; ?>">
                    <?= $userInfo['mobile']; ?>
                </a>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">تاریخ عضویت:</div>
            <div class="value"><?= $userInfo['date']; ?></div>
        </li>
        <li class="profile-item">
            <div class="title"> زمان عضویت :</div>
            <div class="value"><?= $userInfo['time']; ?></div>
        </li>
    </ul>
</div>
<div class="profile-edit-action">
    <a href="profile/editprofile" class="link-spoiler-edit btn btn-secondary">ویرایش پروفایل</a>
    <a href="profile/changepass" class="link-spoiler-edit btn btn-secondary">تغییر رمز عبور</a>
</div>
<div class="btn-row">

</div>

</div>
</div>
</div>
</div>

</div>
</section>

</div>


