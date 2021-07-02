<?php
$active = 'status';
require('views/panel/index.php');
$sketch = $data['sketch'];
$progressInfo = $data['progressInfo'];
?>

<div class="box-header">
    <span class="box-title">اسکچ های پروژه من
    (
      <?=
      $progressInfo['title'];
      ?>
        )
    </span>
</div>


<?php
if (sizeof($sketch) > 0) { ?>

    <div class="row col-12">
        <div class="popup-gallery row-video">
            <?php
            foreach ($sketch as $row) { ?>

                <div class="col-lg-3 col-md-3">
                    <a href="<?= $row['image']; ?>">
                        <img src="<?= $row['image']; ?>">
                    </a>
                </div>

            <?php } ?>
        </div>
    </div>

<?php } else { ?>

    <div class="row col-12">
        <div class="row clearfix sketch-row">
            <div class="col-lg-12 col-md-12 m-b-30">
                <a class="light-link">
                    <p>
                        اسکچی هنور بارگذاری نشده است!
                    </p>
                    <img src="assets/images/sketching.png">
                </a>
            </div>
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