<?php
$active='addportfolio';
require ('views/admin/layout.php');
$portfolioInfo = $data['portfolioInfo'];
$portfolio=$data['portfolio'];
$catPortfolio=$data['catPortfolio'];
$edit=$data['edit'];

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
                                    <?php
                                    if ($edit==''){ ?>
                                        افزودن
                                    <?php }else{ ?>
                                        ویرایش
                                        (<?= $portfolioInfo['title']; ?>)
                                    <?php } ?>
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

                    <form action="adminportfolio/addportfolio/<?php if ($edit!=''){echo @$portfolioInfo['id'];} ?>/<?php if ($edit!=''){echo 'edit';} ?>" id="myform" class="mt-0" enctype="multipart/form-data" method="post">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>نام پروژه</label>
                                    <input name="title" class="form-control mb-2" value="<?= @$portfolioInfo['title']; ?>">                                </div>


                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>لینک</label>
                                    <input name="link" class="form-control mb-2" value="<?= @$portfolioInfo['link']; ?>">
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>دسته</label>
                                    <select autocomplete="off" type="text" name="cat" class="form-control mb-2">
                                        <option>--انتخاب کنید--</option>
                                        <?php
                                        $portfolioId=$portfolioInfo['cat'];

                                        foreach ($catPortfolio as $row){
                                            if ($row['id']==$portfolioId){
                                                $selected='selected';
                                            }else{
                                                $selected='';
                                            }
                                            ?>
                                            <option value="<?= $row['id']; ?>" <?= $selected; ?>>
                                                <?= $row['title']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <label>تصویر</label>
                                <div class="card" id="showText">
                                    <div class="body">
                                        <input type="file" name="image" value="" data-allowed-file-extensions="pdf png jpg jpeg webp zip eps ai" data-max-file-size="5m" class="dropify">
                                    </div>
                                </div>

                                <?php
                                if (isset($portfolioInfo['title'])) { ?>

                                    <div style="width: 120px;height: 120px;display: inline-block;float: left;background: url(assets/images/projects/<?= $portfolioInfo['id']; ?>/portfolio.jpg)no-repeat">

                                    </div>

                                <?php } ?>

                            </div>

                            <div class="form-group">
                                <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                            </div>

                        </div>

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



