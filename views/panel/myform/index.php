<?php
$active = 'myform';
require('views/panel/index.php');
$form = $data['form'];
?>


<div class="box-header">
    <span class="box-title">فرم نیازسنجی من</span>
</div>

<?php
if (sizeof($form) > 0) { ?>

    <?php
    foreach ($form as $row) { ?>
        <table class="table table-profile table-panel-profile table-nedds-form">
            <tbody>
            <tr>
                <td class="w-50">
                    <div class="title">نام پروژه:</div>
                    <div class="value">
                        <?= $row['name']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">تاریخ و ساعت ارسال :</div>
                    <div class="value">
                        <?= $row['date']; ?>
                        <br>
                        <?= $row['time']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">آدرس مجموعه :</div>
                    <div class="value">
                        <?= $row['address']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">شماره های تماس:</div>
                    <div class="value">
                        <?= $row['tel']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">کد رنگی اصلی :</div>
                    <div class="value">
                        #<?= $row['maincolor']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">کد رنگی دوم :</div>
                    <div class="value">
                        #<?= $row['accentcolor']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">مزیت های رقابتی:</div>
                    <div class="value">
                        <?= $row['pros']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">مطرح ترین رقبا :</div>
                    <div class="value">
                        <?= $row['rival']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">سایت های موردنظر از لحاظ محتوا:</div>
                    <div class="value">
                        <?= $row['sitecontent']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">سایت های موردنظر از لحاظ دیزاین :</div>
                    <div class="value">
                        <?= $row['sitedesign']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">نکات با اهمیت:</div>
                    <div class="value">
                        <?= $row['mainnotes']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">شبکه های اجتماعی :</div>
                    <div class="value">
                        <?= $row['sitedesign']; ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">آیا مجموعه شما لوگو طراحی شده دارد؟:</div>
                    <div class="value">
                        <?php
                        if ($row['islogo'] == 'yes') {
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
                        if ($row['isguideline'] == 'yes') {
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
                        if ($row['shop'] == 'yes') {
                            echo 'بله';
                        } else {
                            echo 'خیر';
                        }
                        ?>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    <?php } ?>

<?php } else { ?>

    <div class="row row-empty" id="lightgallery">
        <div class="">
            <div class="ot-heading text-center">
                <h2 class="main-heading">فرم نیاز سنجی <br> شما خالی می باشد </h2>
            </div>
            <a>
                <img src="assets/images/paper.png">
            </a>
        </div>
    </div>

<?php } ?>

</div>
</div>
</div>
</div>

</div>
</section>

</div>