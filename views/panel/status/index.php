<?php
$active = 'status';
require('views/panel/index.php');
$projectInfo = $data['projectInfo'];
?>


<div class="box-header">
    <span class="box-title">وضعیت پروژه من</span>
</div>

<?php

if (sizeof($projectInfo)>0){ ?>

    <?php
    foreach ($projectInfo as $row){ ?>
        <table class="table table-profile table-panel-profile table-nedds-form">
            <tbody>
            <tr>
                <td class="w-50">
                    <div class="title">نام پروژه:</div>
                    <div class="value">
                        <?= $row['title']; ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">نوع پروژه :</div>
                    <div class="value">
                        <?php
                        if ($row['projectType']!=''){
                            echo $row['projectType'];
                        }else{
                            echo 'مشخص نشده';
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">وضعیت فعلی پروژه :</div>
                    <div class="value">
                    <span class="shadow-none needs <?php if ($row['status'] == 1) {
                        echo 'needs';
                    } elseif ($row['status'] == 2) {
                        echo 'theme';
                    } elseif ($row['status'] == 3) {
                        echo 'UIUX';
                    } elseif ($row['status'] == 4) {
                        echo 'dynamic';
                    } elseif ($row['status'] == 5) {
                        echo 'check';
                    } elseif ($row['status'] == 6) {
                        echo 'finaltest';
                    } elseif ($row['status'] == 7) {
                        echo
                        'completed';
                    } ?>"><?= $row['statusTitle'] ?></span>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">تاریخ ایجاد پروژه:</div>
                    <div class="value">
                        <?= $row['date']; ?>
                        <i class="fa fa-calendar-check-o"></i>
                        <br>
                        <?= $row['time']; ?>
                        <i class="fa fa-clock-o"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">تاریخ تحویل :</div>
                    <div class="value">
                        <?php
                        if ($row['deadline']!=''){
                            echo $row['deadline'];
                        }else{
                            echo 'مشخص نشده';
                        }
                        ?>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">تعداد روزهای باقیمانده :</div>
                    <div class="value">
                        <?php
                        $date1 = $date = date('Y/m/d');
                        $date_jalali = Model::gregorianToJalali($date, '/');;
                        $date2 = $row['deadline'];
                        if ($date2!=''){
                            $days = (strtotime($date2) - strtotime($date_jalali)) / (60 * 60 * 24);
                        }else{
                            $days='تاریخ تحویل هنوز مشخص نشده است!';
                        }
                        ?>
                        <span>
                            <?php
                            if ($days > 0){
                                echo $days . 'روز';
                            } elseif ($days < 0){
                                echo 'تمام شد';
                            }else{
                                echo 'تاریخ تحویل هنوز مشخص نشده است!';
                            }
                            ?>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="title">مشاهده اسکچ پروژه های من :</div>
                    <div class="value">
                        <a href="sketch/index/<?= $row['id']; ?>">
                        <span>
                            <i class="mdi mdi-eye"></i>
                        </span>
                        </a>
                    </div>
                </td>
                <td class="w-50">
                    <div class="title">تکنولوژی های پروژه من:</div>
                    <div class="value">
                        <a href="tech/index/<?= $row['id']; ?>">
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
                    <div class="value"><?= $row['title']; ?></div>
                </li>
                <li class="profile-item">
                    <div class="title">نوع پروژه :</div>
                    <div class="value">
                        <?php
                        if ($row['projectType']!=''){
                            echo $row['projectType'];
                        }else{
                            echo 'مشخص نشده';
                        }
                        ?>
                    </div>
                </li>
                <li class="profile-item">
                    <div class="title">وضعیت فعلی پروژه:</div>
                    <div class="value">
                        <span class="shadow-none needs <?php if ($row['status'] == 1) {
                            echo 'needs';
                        } elseif ($row['status'] == 2) {
                            echo 'theme';
                        } elseif ($row['status'] == 3) {
                            echo 'UIUX';
                        } elseif ($row['status'] == 4) {
                            echo 'dynamic';
                        } elseif ($row['status'] == 5) {
                            echo 'check';
                        } elseif ($row['status'] == 6) {
                            echo 'finaltest';
                        } elseif ($row['status'] == 7) {
                            echo
                            'completed';
                        } ?>"><?= $row['statusTitle'] ?></span>
                    </div>
                </li>
                <li class="profile-item">
                    <div class="title">تاریخ ایجاد پروژه:</div>
                    <div class="value"><?= $row['date']; ?></div>
                </li>
                <li class="profile-item">
                    <div class="title"> تاریخ تحویل :</div>
                    <div class="value">
                        <?php
                        if ($row['deadline']!=''){
                            echo $row['deadline'];
                        }else{
                            echo 'مشخص نشده';
                        }
                        ?>
                    </div>
                </li>
                <li class="profile-item">
                    <div class="title"> تعداد روزهای باقیمانده : :</div>
                    <div class="value">
                        <?php
                        $date1 = $date = date('Y/m/d');
                        $date_jalali = Model::gregorianToJalali($date, '/');;
                        $date2 = $row['deadline'];
                        if ($date2!=''){
                            $days = (strtotime($date2) - strtotime($date_jalali)) / (60 * 60 * 24);
                        }else{
                            $days='تاریخ تحویل هنوز مشخص نشده است!';
                        }
                        ?>
                        <span>
                            <?php
                            if ($days > 0){
                                echo $days . 'روز';
                            } elseif ($days < 0){
                                echo 'تمام شد';
                            }else{
                                echo 'تاریخ تحویل هنوز مشخص نشده است!';
                            }
                            ?>
                        </span>
                    </div>
                </li>
                <li class="profile-item">
                    <div class="title"> مشاهده اسکچ پروژه های من :</div>
                    <div class="value">
                        <a href="sketch/index/<?= $row['id']; ?>">
                        <span>
                            <i class="mdi mdi-eye"></i>
                        </span>
                        </a>
                    </div>
                </li>
                <li class="profile-item">
                    <div class="title"> تکنولوژی های پروژه من:</div>
                    <div class="value">
                        <a href="tech/index/<?= $row['id']; ?>">
                        <span>
                            <i class="mdi mdi-eye"></i>
                        </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    <?php } ?>

    <?php
    foreach ($projectInfo as $row){ ?>
        <div class="ot-cprocess-item clearfix repeater-item-3 text-left">
            <div class="ot-cprocess-item-inner">
                <div class="ot-cprocess-item-dot"></div>
                <div class="ot-cprocess-item-title font-second">
                    <p style="color:#000;text-align: right;">
                        پروژه
                        <?= $row['title'] ?>
                        در وضعیت
                        <?= $row['statusTitle']; ?>
                        می باشد، این پروژه در تاریخ
                        <?= $row['date'] ?>
                        ،ساعت
                        <?= $row['time']; ?>
                        ایجاد شده است و
                        <?= $days; ?>
                        روز تا پایان پروژه باقی مانده است.
                    </p>
                </div>

            </div>
        </div>
    <?php } ?>

    <div class="row">
        <?php
        foreach ($projectInfo as $row2){ ?>
            <div class="col-md-6 col-sm-6 col-xs-13 sm-m-b60">
                <div class="circle-progress" data-color1="#ff403e" data-color2="#ff811b">
                    <div class="inner-bar" data-percent="<?= $row2['progress']; ?>">
                <span><span class="percent">
                        <?= $row2['progress']; ?>
                    </span>%</span>
                        <canvas height="0" width="0"></canvas></div>
                    <h4>
                        میزان درصد پیشرفت پروژه
                        <?php
                        echo $row2['title'];
                        ?>
                    </h4>
                </div>
            </div>
        <?php } ?>
    </div>

<?php }else{ ?>

    <div class="row row-empty" id="lightgallery">
        <div class="">
            <div class="ot-heading text-center">
                <h2 class="main-heading">وضعیت پروژه شما فعلا مشخص نیست</h2>
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