<?php
$active = 'status';
require('views/panel/index.php');
$sketch=$data['sketch'];
$progressInfo=$data['progressInfo'];
?>

<link rel="stylesheet" href="<?= URL ?>assets/assets/lightgallery/vivify.min.css">
<link rel="stylesheet" href="<?= URL ?>assets/assets/lightgallery/lightgallery.css">

<div class="box-header">
    <span class="box-title">اسکچ های پروژه من
    (
      <?=
      $progressInfo['title'];
      ?>
        )
    </span>
</div>


<div class="row col-12" id="">
    <?php
    foreach ($sketch as $row){ ?>
        <div id="lightgallery" class="row clearfix lightGallery">
            <div class="col-lg-3 col-md-6 m-b-30">
                <a class="light-link" href="<?= $row['image']; ?>">
                    <img class="img-fluid rounded" src="<?= $row['image']; ?>" alt="">
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


<script src="<?= URL ?>assets/assets/lightgallery/image-gallery.js"></script>
<script src="<?= URL ?>assets/assets/lightgallery/mainscripts.bundle.js"></script>
<script src="<?= URL ?>assets/assets/lightgallery/lightgallery.bundle.js"></script>
<script src="<?= URL ?>assets/assets/lightgallery/libscripts.bundle.js"></script>
<script src="<?= URL ?>assets/assets/lightgallery/vendorscripts.bundle.js"></script>