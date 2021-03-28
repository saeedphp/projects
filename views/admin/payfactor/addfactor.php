<?php
$active='addfactor';
require ('views/admin/layout.php');


date_default_timezone_set('Asia/Tehran');
$time=date('H:i:s');

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>
                                    افزودن
                                </h4>
                                <span style="line-height: 52px;">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo jdate('l d F, Y'); ?>
                                </span>
                                <span style="line-height: 52px;margin-right: 15px;">
                                    <i class="fa fa-clock-o"></i>
                                    <?= $time; ?>
                                </span>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>

                        </div>
                    </div>

                    <form action="adminpayfactor/addfactor" id="myform" class="mt-0" enctype="multipart/form-data" method="post">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>نام فاکتور</label>
                                    <input name="title" class="form-control mb-2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تعداد</label>
                                    <input name="tedad" class="form-control mb-2">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>موارد</label>
                                    <textarea name="element" class="form-control mb-2">

                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>قیمت</label>
                                    <input name="price" type="number" class="form-control mb-2">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>شماره کارت</label>
                                    <input name="cardNum" type="number" class="form-control mb-2">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>فایل</label>
                                    <div class="card" id="showText">
                                        <div class="body">
                                            <input type="file" name="factor" value="" data-allowed-file-extensions="pdf png jpg jpeg webp zip eps ai" data-max-file-size="5m" class="dropify">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="date">

                        <button id="submit" type="submit" form="myform" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                    </form>


                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>



