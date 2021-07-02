<?php
$active = 'video';
require('views/panel/index.php');
$video=$data['video'];
?>


<div class="box-header">
    <span class="box-title">ویدیو های آموزشی پروژه من</span>
</div>

<div class="row col-12 row-video">

    <?php
    if (sizeof($video)>0){ ?>

        <?php
        foreach ($video as $row){ ?>
            <div class="col-lg-6 col-md-6 m-b-30">
                <p class="box-title txt-video-title">
                    <?= $row['title']; ?>
                </p>
                <video width="400" controls>
                    <source src="<?= $row['src']; ?>" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML video.
                </video>
            </div>
        <?php } ?>

    <?php }else{ ?>

        <div class="row row-empty">
            <div class="">
                <div class="ot-heading text-center">
                    <h2 class="main-heading">وضعیت ویدیو های پروژه شما فعلا مشخص نیست</h2>
                </div>
                <a>
                    <img src="assets/images/video.png">
                </a>
            </div>
        </div>

    <?php } ?>

</div>

</div>
</div>
</div>
</div>

</div>
</section>

</div>