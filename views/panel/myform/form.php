<?php
$active = 'myform';
require('views/panel/index.php');
$formInfo=$data['formInfo'];
?>


<div class="box-header">
    <span class="box-title">فرم نیازسنجی من</span>
</div>

<table class="table table-profile table-panel-profile table-needs-form">
    <tbody>
    <tr>
        <td class="w-50">
            <div class="title">نام پروژه:</div>
            <div class="value">
                <?= $formInfo['name']; ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">تاریخ و ساعت ارسال :</div>
            <div class="value">
                <?= $formInfo['date']; ?>
                <br>
                <?= $formInfo['time']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div class="title">آدرس مجموعه :</div>
            <div class="value">
                <?= $formInfo['address']; ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">شماره های تماس:</div>
            <div class="value">
                <?= $formInfo['tel']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div class="title">کد رنگی اصلی :</div>
            <div class="value">
                #<?= $formInfo['maincolor']; ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">کد رنگی دوم :</div>
            <div class="value">
                #<?= $formInfo['accentcolor']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div class="title">مزیت های رقابتی:</div>
            <div class="value">
                <?= $formInfo['pros']; ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">مطرح ترین رقبا :</div>
            <div class="value">
                <?= $formInfo['rival']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div class="title">سایت های موردنظر از لحاظ محتوا:</div>
            <div class="value">
                <?= $formInfo['sitecontent']; ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">سایت های موردنظر از لحاظ دیزاین :</div>
            <div class="value">
                <?= $formInfo['sitedesign']; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div class="title">نکات با اهمیت:</div>
            <div class="value">
                <?= $formInfo['mainnotes']; ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">شبکه های اجتماعی :</div>
            <div class="value">
                <?php
                $socialInfo=$formInfo['socialsInfo'];
                foreach ($socialInfo as $row){ ?>
                    <p>

                        <?= $row['title']; ?>
                    </p>
                <?php } ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-50">
            <div class="title">آیا مجموعه شما لوگو طراحی شده دارد؟:</div>
            <div class="value">
                <?php
                if ($formInfo['islogo'] == 'yes') {
                    echo 'بله';
                } else {
                    echo 'خیر';
                }
                ?>
            </div>
        </td>
        <td class="w-50">
            <div class="title">آیا مجموعه شما guideline دارد؟:</div>
            <div class="value">
                <?php
                if ($formInfo['isguideline'] == 'yes') {
                    echo 'بله';
                } else {
                    echo 'خیر';
                }
                ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="w-100">
            <div class="title">آیا سایت شما فروشگاهی می باشد؟:</div>
            <div class="value">
                <?php
                if ($formInfo['shop'] == 'yes') {
                    echo 'بله';
                } else {
                    echo 'خیر';
                }
                ?>
            </div>
        </td>
    </tr>

    <?php
    if ($formInfo['shop']=='yes'){ ?>

        <tr>
            <td class="w-100">
                <div class="title">چه محصولاتی در حال حاظر در فروشگاه خود عرضه می کنید؟:</div>
                <div class="value">
                    <?= $formInfo['product']; ?>
                </div>
            </td>
            <td class="w-100">
                <div class="title">چه محصولاتی فروش آن ها در فروشگاه اینترنتی شما از اهمیت خاصی برخوردار است؟:</div>
                <div class="value">
                    <?= $formInfo['specialproduct']; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class="w-100">
                <div class="title">آیا از محصولات شما عکس برداری شده است؟:</div>
                <div class="value">
                    <?php
                    if ($formInfo['photo'] == '1') {
                        echo 'بله';
                    } else {
                        echo 'خیر';
                    }
                    ?>
                </div>
            </td>
            <td class="w-100">
                <div class="title">امکانات مدنظر شما برای معرفی محصول چیست؟:</div>
                <div class="value">
                    <?= $formInfo['introduction']; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class="w-100">
                <div class="title">در صفحه معرفی محصول، برای کاربر چه امکناتی مد مظرتان است؟:</div>
                <div class="value">
                    <?= $formInfo['userfacilities']; ?>
                </div>
            </td>
            <td class="w-100">
                <div class="title">امکانات فروشگاهی که مدنظر دارید چیست؟:</div>
                <div class="value">
                    <?= $formInfo['shopfacilities']; ?>
                </div>
            </td>
        </tr>


    <?php } ?>

    </tbody>
</table>

<div class="profile">
    <ul class="mb-0">
        <li class="profile-item">
            <div class="title">نام پروژه:</div>
            <div class="value"><?= $formInfo['name']; ?></div>
        </li>
        <li class="profile-item">
            <div class="title">تاریخ و ساعت ارسال :</div>
            <div class="value">
                <?= $formInfo['date']; ?>
                <br>
                <?= $formInfo['time']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">آدرس مجموعه:</div>
            <div class="value">
                <?= $formInfo['address']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">کد رنگی اصلی:</div>
            <div class="value">
                <?= $formInfo['maincolor']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">کد رنگی اصلی:</div>
            <div class="value">
                <?= $formInfo['address']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">کد رنگی اصلی:</div>
            <div class="value">
                <?= $formInfo['address']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">کد رنگی دوم:</div>
            <div class="value">
                <?= $formInfo['accentcolor']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">مزیت های رقابتی:</div>
            <div class="value">
                <?= $formInfo['pros']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">مطرح ترین رقبا:</div>
            <div class="value">
                <?= $formInfo['rival']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">سایت های موردنظر از لحاظ محتوا:</div>
            <div class="value">
                <?= $formInfo['sitecontent']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">سایت های موردنظر از لحاظ دیزاین :</div>
            <div class="value">
                <?= $formInfo['sitedesign']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">نکات با اهمیت:</div>
            <div class="value">
                <?= $formInfo['mainnotes']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">شبکه های اجتماعی:</div>
            <div class="value">
                <?php
                $socialInfo=$formInfo['socialsInfo'];
                foreach ($socialInfo as $row){ ?>
                    <p>

                        <?= $row['title']; ?>
                    </p>
                <?php } ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">شبکه های اجتماعی:</div>
            <div class="value">
                <?= $formInfo['sitedesign']; ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">آیا مجموعه شما لوگو طراحی شده دارد:</div>
            <div class="value">
                <?php
                if ($formInfo['islogo'] == 'yes') {
                    echo 'بله';
                } else {
                    echo 'خیر';
                }
                ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">آیا مجموعه شما guideline دارد:</div>
            <div class="value">
                <?php
                if ($formInfo['isguideline'] == 'yes') {
                    echo 'بله';
                } else {
                    echo 'خیر';
                }
                ?>
            </div>
        </li>
        <li class="profile-item">
            <div class="title">آیا سایت شما فروشگاهی می باشد:</div>
            <div class="value">
                <?php
                if ($formInfo['shop'] == 'yes') {
                    echo 'بله';
                } else {
                    echo 'خیر';
                }
                ?>
            </div>
        </li>

        <?php
        if ($formInfo['shop']=='yes'){ ?>

            <li class="profile-item">
                <div class="title">چه محصولاتی در حال حاظر در فروشگاه خود عرضه می کنید:</div>
                <div class="value">
                    <?= $formInfo['product']; ?>
                </div>
            </li>

            <li class="profile-item">
                <div class="title">چه محصولاتی فروش آن ها در فروشگاه اینترنتی شما از اهمیت خاصی برخوردار است؟:</div>
                <div class="value">
                    <?= $formInfo['specialproduct']; ?>
                </div>
            </li>

            <li class="profile-item">
                <div class="title">آیا از محصولات شما عکس برداری شده است؟:</div>
                <div class="value">
                    <?php
                    if ($formInfo['photo'] == '1') {
                        echo 'بله';
                    } else {
                        echo 'خیر';
                    }
                    ?>
                </div>
            </li>

            <li class="profile-item">
                <div class="title">امکانات مدنظر شما برای معرفی محصول چیست؟:</div>
                <div class="value">
                    <?= $formInfo['introduction']; ?>
                </div>
            </li>

            <li class="profile-item">
                <div class="title">در صفحه معرفی محصول، برای کاربر چه امکناتی مد مظرتان است؟:</div>
                <div class="value">
                    <?= $formInfo['userfacilities']; ?>
                </div>
            </li>

            <li class="profile-item">
                <div class="title">امکانات فروشگاهی که مدنظر دارید چیست؟:</div>
                <div class="value">
                    <?= $formInfo['shopfacilities']; ?>
                </div>
            </li>

        <?php } ?>

    </ul>
</div>

</div>
</div>
</div>
</div>

</div>
</section>

</div>