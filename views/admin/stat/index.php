<?php

$active='stat';
require ('views/admin/layout.php');

?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">

                    <form style="margin-bottom: 80px;" id="myform" class="mt-0" action="adminstat/project" method="post">

                        <span>گزارش گیری پروژه ها</span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاریخ شروع</label>
                                    <input type="text" name="date1" class="form-control mb-2" id="date-picker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاریخ پایان</label>
                                    <input type="text" name="date2" class="form-control mb-2" id="date-picker2">
                                </div>
                            </div>
                        </div>

                        <script>
                            kamaDatepicker('date-picker');
                            kamaDatepicker('date-picker2');
                        </script>

                        <button style="width: 150px;" form="myform" type="submit" id="submit"  class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                    </form>

                    <form style="margin-bottom: 80px;" id="myform2" class="mt-0" action="adminstat/user" method="post">

                        <span>گزارش گیری اعضای سایت</span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاریخ شروع</label>
                                    <input type="text" name="date1" class="form-control mb-2" id="date-picker3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاریخ پایان</label>
                                    <input type="text" name="date2" class="form-control mb-2" id="date-picker4">
                                </div>
                            </div>
                        </div>

                        <script>
                            kamaDatepicker('date-picker3');
                            kamaDatepicker('date-picker4');
                        </script>

                        <button style="width: 150px;" form="myform2" type="submit" id="submit"  class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                    </form>

                    <form <?php if ($level!=5){echo 'id="myform3"';} ?> class="mt-0" <?php if ($level!=5){echo 'action="adminstat/financial"';} ?> method="post">

                        <span>گزارش گیری مالی پروژه ها</span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاریخ شروع</label>
                                    <input type="text" name="date1" class="form-control mb-2" id="date-picker5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاریخ پایان</label>
                                    <input type="text" name="date2" class="form-control mb-2" id="date-picker6">
                                </div>
                            </div>
                        </div>

                        <script>
                            kamaDatepicker('date-picker5');
                            kamaDatepicker('date-picker6');
                        </script>

                        <button style="width: 150px;" <?php if ($level!=5){echo 'form="myform3" type="submit"';} ?> <?php if ($level==5){echo 'disabled';} ?>  id="submit"  class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>
