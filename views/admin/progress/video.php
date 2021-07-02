<?php
$active='video';
require ('views/admin/layout.php');
$video=$data['video'];
$progressInfo=$data['progressInfo'];

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                مدیریت ویدیو های آموزشی
                                <?= $progressInfo['title']; ?>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button form="tbl-form" type="submit" class="btn btn-danger mb-2 mr-2">
                                    حذف
                                </button>
                            </div>

                        </div>
                    </div>

                    <form action="adminprogress/video/<?= $progressInfo['id']; ?>" id="myform" class="mt-0" method="post">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <input type="text" name="src" class="form-control mb-2" id="exampleInputUsername1" placeholder="لینک ویدیو">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="title" class="form-control mb-2" id="exampleInputUsername1" placeholder="عنوان ویدیو">
                                </div>

                            </div>


                        </div>

                        <button id="submit" type="submit" form="myform" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                    </form>


                    <form id="tbl-form" action="adminprogress/deletegallery/<?= $progressInfo['id']; ?>" method="post">
                        <table id="html5-extension" class="table table-hover non-hover x" style="width:100%">
                            <thead>
                            <tr>
                                <th class="text-center">ردیف</th>
                                <th> ویدیو </th>
                                <th> عنوان </th>
                                <th>انتخاب
                                    <input id="select" onclick="selectAll();" type="checkbox">
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $i = 1;
                            foreach ($video as $row) { ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $i; ?>
                                    </td>
                                    <td style="width: 200px;height:200px;">
                                        <video width="400" controls>
                                            <source src="<?= $row['src']; ?>" type="video/mp4">
                                            <source src="<?= $row['src']; ?>" type="video/ogg">
                                        </video>
                                    </td>
                                    <td>
                                        <?= $row['title']; ?>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                                    </td>
                                </tr>
                                <?php $i++;
                            } ?>

                            </tbody>
                        </table>
                    </form>


                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>




