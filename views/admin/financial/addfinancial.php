<?php
$active='addfinancial';
require ('views/admin/layout.php');
$financialInfo = $data['financialInfo'];
$progress=$data['progress'];
$project=$data['project'];
$financialStatus=$data['financialStatus'];
$edit=0;
if (isset($financialInfo['cost'])){
    $edit=1;
}
$parentId=$data['parentId'];

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
                                    if ($edit==0){ ?>
                                    افزودن
                                    <?php }else{ ?>
                                    ویرایش
                                        (<?= $financialInfo['projectTitle']; ?>)
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

                    <form action="" id="myform" class="mt-0" method="post">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>نام پروژه</label>
                                    <select autocomplete="off" type="text" name="project" class="form-control mb-2">
                                        <option>--انتخاب کنید--</option>
                                        <?php
                                        if ($edit==''){
                                            $selectedId=$parentId;
                                        }else{
                                            $selectedId=$financialInfo['project'];
                                        }
                                        foreach ($progress as $row){
                                            if ($row['id']==$selectedId){
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

                                <div class="form-group">
                                    <label>هزینه پروژه</label>
                                    <input name="cost" class="form-control mb-2" value="<?php if ($edit!=''){echo $financialInfo['cost'];} ?>">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>نوع پروژه</label>
                                    <select autocomplete="off" type="text" name="type" class="form-control mb-2">
                                        <option>--انتخاب کنید--</option>
                                        <?php
                                        if ($edit==''){
                                            $selectedId=$parentId;
                                        }else{
                                            $selectedId=$financialInfo['type'];
                                        }
                                        foreach ($project as $row){
                                            if ($row['id']==$selectedId){
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

                                <div class="form-group">
                                    <label>وضعیت پرداختی</label>
                                    <select autocomplete="off" type="text" name="status" class="form-control mb-2">
                                        <option>--انتخاب کنید--</option>
                                        <?php
                                        if ($edit==''){
                                            $selectedId=$parentId;
                                        }else{
                                            $selectedId=$financialInfo['status'];
                                        }
                                        foreach ($financialStatus as $row){
                                            if ($row['id']==$selectedId){
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
                                <label>توضیحات تکمیلی</label>
                                <textarea name="description" class="form-control mb-2">
                                    <?php if ($edit!=''){echo $financialInfo['description'];} ?>
                                </textarea>
                            </div>

                        </div>

                        <a id="submit" <?php if ($level==5){echo 'disabled';} ?> <?php if ($level!=5){echo 'onclick="addFinancial();"';} ?> class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

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
        function addFinancial() {

        $.ajax({
            type:'POST',
            url:'adminfinancial/addfinancial/<?php if ($edit!=''){echo $financialInfo['id'];}  ?>',
            data:$('#myform').serializeArray(),
            beforeSend: function() {
                $('#loader-icon').css('display','block');
                $('#dark').fadeIn(200);
            },
            success: function(msg) {
                console.log(msg);
                $('#loader-icon').css('display','none');
                $('#dark').fadeOut(200);
            }
        });

    }
    <?php } ?>

</script>