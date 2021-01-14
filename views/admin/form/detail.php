<?php
$active='form';
require ('views/admin/layout.php');
$detail = $data['detail'];

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12" style="margin-bottom: 30px;">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <h4 style="display: inline;">مدیریت فرم نیاز سنجی
                                    (
                                    <?= $detail['name']; ?>
                                    )
                                </h4>
                                <button class="btn btn-success" onclick="window.print();">Print</button>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>

                        </div>
                    </div>

                    <table id="" class="table table-profile table-panel-profile">
                        <tbody>
                        <tr>
                            <td class="w-50">
                                <div class="title">نام پروژه:</div>
                                <div class="value">
                                    <?= $detail['name']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="title">تاریخ و ساعت ارسال فرم :</div>
                                <div class="value">
                                    <i class="fa fa-calendar"></i>
                                    <?= $detail['date']; ?>
                                    <i class="fa fa-clock-o"></i>
                                    <?= $detail['time']; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="title">آدرس مجموعه:</div>
                                <div class="value">
                                    <?= $detail['address']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="title">شماره تماس های مجموعه :</div>
                                <div class="value">
                                    <?= $detail['tel']; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="title">کد رنگی اصلی:</div>
                                <div class="value">
                                    #<?= $detail['maincolor']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="title">کد رنگی دوم:</div>
                                <div class="value">
                                    #<?= $detail['accentcolor']; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="title"> مزیت های رقابتی :</div>
                                <div class="value">
                                    <?= $detail['pros']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="title"> مطرح ترین رقبا :</div>
                                <div class="value">
                                    <?= $detail['rival']; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="title"> سایت هایی که از نظر محتوا نزدیک به فعالیت <?= $detail['name']; ?> می باشد :</div>
                                <div class="value">
                                    <?= $detail['sitecontent']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="title"> سایت هایی که از نظر طراحی نزدیک به فعالیت <?= $detail['name']; ?> می باشد :</div>
                                <div class="value">
                                    <?= $detail['sitedesign']; ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="title"> نکات با اهمیت در مورد سایت مورینگا :</div>
                                <div class="value">
                                    <?= $detail['mainnotes']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="title">شبکه های اجتماعی که می خواهید در سایت استفاده شود:</div>
                                <div class="value">

                                    <ul class="js-product-variants">

                                        <?php
                                        $all_socials=$detail['all_socials'];
                                        foreach ($all_socials as $social) { ?>

                                            <li class="ui-variant">
                                                <span><?= $social['title']; ?></span>
                                            </li>

                                        <?php } ?>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if ($detail['islogo']=='yes'){ ?>
                                <div class="title"> لوگو مجموعه <?= $detail['name']; ?> :</div>
                                <div class="value">
                                    <a class="logo-img" target="_blank" href="<?= URL.$detail['logo']; ?>">
                                        <img src="<?= URL.$detail['logo'] ?>">
                                    </a>
                                </div>
                                <?php }else{ ?>
                                    <p>لوگو ندارد!</p>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                if ($detail['isguideline']=='yes'){ ?>
                                    <div class="title">فرم راهنمای مجموعه <?= $detail['name']; ?>:</div>
                                    <div class="value">
                                        <div class="value">
                                            <a target="_blank" href="<?= URL.$detail['guideline']; ?>">
                                                <i class="fa fa-folder-open"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <p>فایل راهنما ندارد!</p>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php
                        if ($detail['shop']=='yes'){ ?>
                            <tr>
                                <td>
                                    <div class="title">چه محصولاتی در حال حاظر در فروشگاه خود عرضه می کنید؟</div>
                                    <div class="value">
                                        <?= $detail['product']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="title">چه محصولاتی فروش آن ها در فروشگاه اینترنتی شما از اهمیت خاصی برخوردار است؟</div>
                                    <div class="value">
                                        <?= $detail['specialproduct']; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title">آیا از محصولات شما عکس برداری شده است؟</div>
                                    <div class="value">
                                        <?php
                                        if ($detail['photo']==1){
                                            echo 'بله';
                                        }else{
                                            echo 'خیر';
                                        }
                                        ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="title">امکانات مدنظر شما برای معرفی محصول چیست؟</div>
                                    <div class="value">
                                        <?= $detail['introduction']; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title">در صفحه معرفی محصول، برای کاربر چه امکناتی مد مظرتان است؟</div>
                                    <div class="value">
                                        <?= $detail['userfacilities']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="title">امکانات فروشگاهی که مدنظر دارید چیست؟</div>
                                    <div class="value">
                                        <?= $detail['shopfacilities']; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>


<script>

    $('#html5-extension').DataTable({
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [
                {extend: 'copy', className: 'btn'},
                {extend: 'excel', className: 'btn'},
                {extend: 'print', className: 'btn'},
                { extend: 'pdf', className: 'btn' }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
            },
            "sInfo": "صفحه _PAGE_ از _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "جستجو کنید...",
            "sLengthMenu": "نتایج :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });

</script>
