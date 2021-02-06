<?php
$active = 'status';
require('views/panel/index.php');
$sketch=$data['sketch'];
$progressInfo=$data['progressInfo'];
?>

<link rel="stylesheet" href="<?= URL ?>assets/gallery/css/vendor/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/lightgallery.css"/>

<div class="box-header">
    <span class="box-title">اسکچ های پروژه من
    (
      <?=
      $progressInfo['title'];
      ?>
        )
    </span>
</div>


<div class="row col-12" id="lightgallery">
    <?php
    foreach ($sketch as $row){ ?>
    <div class="col-md-4">
        <a href="<?= $row['image']; ?>">
            <img src="<?= $row['image']; ?>">
        </a>
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



<script src="<?= URL ?>assets/js/lightgallery-all.js"></script>

<script type="text/javascript">

    var $lightGallery = $('#lightgallery');
    $lightGallery.lightGallery();

    var colours = ['#21171A', '#81575E', '#9C5043', '#8F655D'];
    $lightGallery.on('onBeforeSlide.lg', function(event, prevIndex, index){
        $('.lg-outer').css('background-color', colours[index])
    });

</script>

