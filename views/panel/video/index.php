<?php
$active = 'video';
require('views/panel/index.php');
$projectInfo=$data['projectInfo'];
?>


<div class="box-header">
    <span class="box-title">ویدیو های آموزشی پروژه من</span>
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
                    <div class="title">مشاهده ویدیو های پروژه من :</div>
                    <div class="value">
                        <a href="video/video/<?= $row['id']; ?>">
                        <span>
                            <i class="fa fa-eye"></i>
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
                    <div class="title">مشاهده ویدیو های پروژه من :</div>
                    <div class="value">
                        <a href="video/video/<?= $row['id']; ?>">
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

<!--<div class="row col-12 row-video">

    <div class="col-lg-6 col-md-6 m-b-30">
        <p class="box-title txt-video-title">ویدیو های آموزشی پروژه من</p>
        <video width="400" controls>
            <source src="https://r2---sn-hju7enel.c.drive.google.com/videoplayback?expire=1625168749&ei=LePdYJCLBpDphgbagqOwCA&ip=5.113.251.110&cp=QVRHV0JfV1dSSlhPOl9QMC11LXhvYml1WWlwS1h4S2ppcDRCZGRfSmdfWVJaRGFWdjFEMWpqdGk&id=480c664056c310d7&itag=18&source=webdrive&requiressl=yes&mh=Xz&mm=32&mn=sn-hju7enel&ms=su&mv=u&mvi=2&pl=20&ttl=transient&susc=dr&driveid=1034b6aA3wCh_NPQjhz4flKbH_v1TXx56&app=explorer&mime=video/mp4&vprv=1&prv=1&dur=224.769&lmt=1624695938826156&mt=1625153872&sparams=expire,ei,ip,cp,id,itag,source,requiressl,ttl,susc,driveid,app,mime,vprv,prv,dur,lmt&sig=AOq0QJ8wRQIhAOAR-3gdCmet4vm_Xaz-mWnkB40Yb806YvpGeZjO1-rDAiADuvoO8qwrRwQlkXWT0z96vu9aN8s0uXl17CHPYJxGZA==&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIgRFTzPE01ca7o4G7DyCtZdkpJgHteOotvfRDgYl4JAOwCIQCwvzh75I3AKTrCOATN_6Qwa50BsaSi6UuiSddW8pYI_Q==&cpn=4BOptpk_hXToxJRl&c=WEB_EMBEDDED_PLAYER&cver=1.20210629.1.0" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML video.
        </video>
    </div>
    <div class="col-lg-6 col-md-6 m-b-30">
        <p class="box-title txt-video-title">ویدیو های آموزشی پروژه من</p>
        <video width="400" controls>
            <source src="https://r2---sn-hju7enel.c.drive.google.com/videoplayback?expire=1625168749&ei=LePdYJCLBpDphgbagqOwCA&ip=5.113.251.110&cp=QVRHV0JfV1dSSlhPOl9QMC11LXhvYml1WWlwS1h4S2ppcDRCZGRfSmdfWVJaRGFWdjFEMWpqdGk&id=480c664056c310d7&itag=18&source=webdrive&requiressl=yes&mh=Xz&mm=32&mn=sn-hju7enel&ms=su&mv=u&mvi=2&pl=20&ttl=transient&susc=dr&driveid=1034b6aA3wCh_NPQjhz4flKbH_v1TXx56&app=explorer&mime=video/mp4&vprv=1&prv=1&dur=224.769&lmt=1624695938826156&mt=1625153872&sparams=expire,ei,ip,cp,id,itag,source,requiressl,ttl,susc,driveid,app,mime,vprv,prv,dur,lmt&sig=AOq0QJ8wRQIhAOAR-3gdCmet4vm_Xaz-mWnkB40Yb806YvpGeZjO1-rDAiADuvoO8qwrRwQlkXWT0z96vu9aN8s0uXl17CHPYJxGZA==&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIgRFTzPE01ca7o4G7DyCtZdkpJgHteOotvfRDgYl4JAOwCIQCwvzh75I3AKTrCOATN_6Qwa50BsaSi6UuiSddW8pYI_Q==&cpn=4BOptpk_hXToxJRl&c=WEB_EMBEDDED_PLAYER&cver=1.20210629.1.0" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML video.
        </video>
    </div>
    <div class="col-lg-6 col-md-6 m-b-30">
        <p class="box-title txt-video-title">ویدیو های آموزشی پروژه من</p>
        <video width="400" controls>
            <source src="https://r2---sn-hju7enel.c.drive.google.com/videoplayback?expire=1625168749&ei=LePdYJCLBpDphgbagqOwCA&ip=5.113.251.110&cp=QVRHV0JfV1dSSlhPOl9QMC11LXhvYml1WWlwS1h4S2ppcDRCZGRfSmdfWVJaRGFWdjFEMWpqdGk&id=480c664056c310d7&itag=18&source=webdrive&requiressl=yes&mh=Xz&mm=32&mn=sn-hju7enel&ms=su&mv=u&mvi=2&pl=20&ttl=transient&susc=dr&driveid=1034b6aA3wCh_NPQjhz4flKbH_v1TXx56&app=explorer&mime=video/mp4&vprv=1&prv=1&dur=224.769&lmt=1624695938826156&mt=1625153872&sparams=expire,ei,ip,cp,id,itag,source,requiressl,ttl,susc,driveid,app,mime,vprv,prv,dur,lmt&sig=AOq0QJ8wRQIhAOAR-3gdCmet4vm_Xaz-mWnkB40Yb806YvpGeZjO1-rDAiADuvoO8qwrRwQlkXWT0z96vu9aN8s0uXl17CHPYJxGZA==&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIgRFTzPE01ca7o4G7DyCtZdkpJgHteOotvfRDgYl4JAOwCIQCwvzh75I3AKTrCOATN_6Qwa50BsaSi6UuiSddW8pYI_Q==&cpn=4BOptpk_hXToxJRl&c=WEB_EMBEDDED_PLAYER&cver=1.20210629.1.0" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML video.
        </video>
    </div>

</div>-->

</div>
</div>
</div>
</div>

</div>
</section>

</div>