<?php
$active = 'status';
require('views/panel/index.php');
$tech=$data['tech'];
?>

<style>
    .number-box{
        position: relative;
    }
    .fa.fa-nopcommerce::after{
        content: "";
        position: absolute;
        background: url(assets/images/nopCommerce.png) no-repeat;
        display: block;
        width: 16px;
        height: 16px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }
    .fa.fa-aspnet::after{
        content: "";
        position: absolute;
        background: url(assets/images/asp.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-datatable::after{
        content: "";
        position: absolute;
        background: url(assets/images/DataTables.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-sweetalert::after{
        content: "";
        position: absolute;
        background: url(assets/images/SweetAlert.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-owl::after{
        content: "";
        position: absolute;
        background: url(assets/images/OWL-Carousel.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .fa.fa-mysql::after{
        content: "";
        position: absolute;
        background: url(assets/images/MySQL.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        background-size:contain;
    }
    .fa.fa-jquery::after{
        content: "";
        position: absolute;
        background: url(assets/images/jQuery.png) no-repeat;
        display: block;
        width: 32px;
        height: 32px;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        background-size:contain;
    }

</style>

<div class="box-header">
    <span class="box-title">
        تکنولوژی های مورد استفاده
    (
        در پروژه
        <?= $tech['title']; ?>
        )
    </span>
</div>

<div class="flex-row justify-content-center">
    <div class="row col-12 row-margin" style="width: 100%;">
        <?php
        $all_techs=$tech['all_techs'];
        foreach ($all_techs as $row){ ?>
        <div class="col-md-6 col-sm-6 col-xs-12 sm-m-b40 marginBottom">
            <div class="service-box-s2 s-box <?= $row['background']; ?>">
                <div class="number-box <?= $row['box']; ?>"><i class="<?= $row['icon']; ?>"></i></div>
                <div class="content-box">
                    <h5>
                        <?= $row['title']; ?>
                    </h5>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


</div>
</div>
</div>
</div>

</div>
</section>

</div>

