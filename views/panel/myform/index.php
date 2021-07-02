<?php
$active = 'myform';
require('views/panel/index.php');
$form = $data['form'];
?>


<div class="box-header">
    <span class="box-title">فرم های نیازسنجی من</span>
</div>

<?php

if (sizeof($form)>0){ ?>

    <?php
    foreach ($form as $row){ ?>
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
                    <div class="title">مشاهده فرم نیازسنجی پروژه من :</div>
                    <div class="value">
                        <a href="myform/form/<?= $row['id']; ?>">
                        <span>
                            <i class="mdi mdi-eye"></i>
                        </span>
                        </a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="profile">
            <ul class="mb-0">
                <li class="profile-item">
                    <div class="title">نام پروژه:</div>
                    <div class="value"><?= $row['name']; ?></div>
                </li>
                <li class="profile-item">
                    <div class="title">مشاهده فرم نیازسنجی پروژه من :</div>
                    <div class="value">
                        <a href="myform/form/<?= $row['id']; ?>">
                        <span>
                            <i class="mdi mdi-eye"></i>
                        </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    <?php } ?>

<?php }else{ ?>

    <div class="row row-empty">
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