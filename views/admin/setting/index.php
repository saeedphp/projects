<?php
$active='setting';
require ('views/admin/layout.php');
$option = Model::getOption();
$font = $data['font'];

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت تنظیمات</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>

                        </div>
                    </div>

                    <form action="adminsetting/index" id="myform" class="mt-0" method="post">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>انتخاب فونت</label>
                                    <select autocomplete="off" type="text" name="font" class="form-control mb-2">
                                        <?php
                                        $value = $option['font'];
                                        foreach ($font as $row) { ?>
                                            <option <?php if ($row['title'] == $value) {
                                                echo 'selected="selected"';
                                            } ?>>
                                                <?= $row['title']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>رنگ نیازسنجی</label>
                                    <input name="needs" value="<?= $option['needs']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ قالب</label>
                                    <input name="theme" id="color1" class="form-control mb-2 jscolor" value="<?= $option['theme']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>رنگ UIUX</label>
                                    <input name="UIUX" value="<?= $option['UIUX']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ تعداد روز کمتر از 9</label>
                                    <input name="UIUX" value="<?= $option['<9']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ تعداد روز بین 20 تا 40</label>
                                    <input name="UIUX" value="<?= $option['20--40']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>آدرس سایت</label>
                                    <input name="url" value="<?= $option['url']; ?>" class="form-control mb-2">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>رنگ داینامیک</label>
                                    <input name="dynamic" value="<?= $option['dynamic']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ چک کردن</label>
                                    <input name="check" value="<?= $option['check']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ تست نهایی</label>
                                    <input name="finaltest" value="<?= $option['finaltest']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ تکمیل</label>
                                    <input name="completed" value="<?= $option['completed']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ تعداد روز بین 10 تا 20</label>
                                    <input name="UIUX" value="<?= $option['10--20']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>رنگ تعداد روز بیشتر از 50 </label>
                                    <input name="UIUX" value="<?= $option['>50']; ?>" class="form-control mb-2 jscolor">
                                </div>

                                <div class="form-group">
                                    <label>عنوان قالب مدیریت</label>
                                    <input name="title" value="<?= $option['title']; ?>" class="form-control mb-2">
                                </div>

                            </div>

                        </div>

                        <a id="submit" <?php if ($level!=5){echo 'onclick="setting();"';} ?> <?php if ($level==5){echo 'disabled';} ?> class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                    </form>


                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>


<script>

    <?php
    if ($level!=5){ ?>
    function setting() {

        $.ajax({
            type:'POST',
            url:'adminsetting/index',
            data:$('#myform').serializeArray(),
            beforeSend: function() {
                $('#loader-icon').css('display','block');
                $('#dark').fadeIn(200);
            },
            success: function(msg) {
                $('#loader-icon').css('display','none');
                $('#dark').fadeOut(200);
                $("#myform").load('adminsetting/index' + " #myform");
                console.log(msg);
            }
        });

    }
    <?php } ?>

</script>