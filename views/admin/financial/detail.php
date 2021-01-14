<?php
$active='financial';
require ('views/admin/layout.php');
$detail = $data['detail'];

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت مالی پروژه ها
                                (
                                    <?= $detail['projectTitle']; ?>
                                    )
                                </h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>

                        </div>
                    </div>

                    <form action="adminsetting/index" id="myform" class="mt-0" method="post">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>نام پروژه</label>
                                    <input  value="<?= $detail['projectTitle'] ?>" class="form-control mb-2">
                                </div>

                                <div class="form-group">
                                    <label>تاریخ ایجاد پروژه </label>
                                    <input value="<?= $detail['projectDate']; ?>" class="form-control mb-2">
                                </div>

                                <div class="form-group">
                                    <label>هزینه پروژه</label>
                                    <input class="form-control mb-2" value="<?= number_format($detail['cost']); ?>">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>نوع پروژه</label>
                                    <input value="<?= $detail['projectType']; ?>" class="form-control mb-2">
                                </div>


                                <div class="form-group">
                                    <label>تاریخ تحویل </label>
                                    <input value="<?= $detail['deadline']; ?>" class="form-control mb-2">
                                </div>

                                <div class="form-group">
                                    <label>وضعیت پرداختی</label>
                                    <input class="form-control mb-2" value="<?= $detail['projectStatus']; ?>">
                                </div>

                            </div>

                            <div class="col-md-12">
                                <label>توضیحات تکمیلی</label>
                                <textarea class="form-control mb-2">
                                    <?= $detail['description']; ?>
                                </textarea>
                            </div>

                        </div>

                    </form>


                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>
