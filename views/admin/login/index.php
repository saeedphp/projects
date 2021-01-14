<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> ورود به پنل مدیریت </title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="assets/panel/assets/css/loader.css" rel="stylesheet" type="text/css"/>
    <script src="assets/panel/assets/js/loader.js"></script>

    <link href="assets/panel/https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="assets/panel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/panel/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/panel/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/panel/assets/css/apps/contacts.css">

    <link href="assets/panel/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/editors/quill/quill.snow.css">
    <link href="assets/panel/assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/dt-global_style.css">

    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/custom_dt_miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/components/custom-modal.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/scrollspyNav.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/alert/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/parsleyjs/css/parsley.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/authentication/form-1.css">

</head>
<body>

<div class="form-container">
    <div class="form-form row col-12">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <div style="display: flex;justify-content: center;margin-bottom: 10px;" class="row col-12">
                        <a>
                            <img src="assets/images/faramouj-white-logo.png">
                        </a>
                    </div>

                    <h1 class="">ورود به <a><span class="brand-name">پنل مدیریت</span></a></h1>
                    <form style="box-shadow: 2px 2px 15px rgb(86 77 77);border-radius: 16px;padding: 8px 12px;" class="text-left" action="adminlogin/check" method="post">
                        <div class="form">

                            <div id="username-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="username" name="username" type="text" class="form-control" placeholder="نام کاربری" value="<?php if (isset($_COOKIE['user_login'])) {
                                    echo $_COOKIE['user_login'];
                                } ?>">
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password" name="password" type="password" class="form-control" placeholder="رمزعبور" value="<?php if (isset($_COOKIE['userpassword'])) {
                                    echo $_COOKIE['userpassword'];
                                } ?>">
                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">ورود</button>
                                </div>

                            </div>

                            <div class="field-wrapper text-center keep-logged-in">
                                <div class="n-chk new-checkbox checkbox-outline-primary">
                                    <label class="new-control new-checkbox checkbox-outline-primary">
                                        <input checked type="checkbox" class="new-control-input" name="remember" id="remember" value="true" <?php if (isset($_COOKIE['user_login'])) { ?><?php } ?>>
                                        <span class="new-control-indicator"></span>مرا به خاطر بسپار
                                    </label>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/panel/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="assets/panel/bootstrap/js/popper.min.js"></script>
<script src="assets/panel/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/panel/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/panel/assets/js/app.js"></script>
<script src="assets/panel/assets/js/apps/contact.js"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="assets/panel/assets/js/custom.js"></script>



<script src="assets/panel/plugins/apex/apexcharts.min.js"></script>
<script src="assets/panel/assets/js/dashboard/dash_1.js"></script>
<script src="assets/panel/assets/js/ie11fix/fn.fix-padStart.js"></script>
<script src="assets/panel/assets/js/scrollspyNav.js"></script>
<script src="assets/panel/plugins/editors/quill/quill.js"></script>
<script src="assets/panel/assets/js/apps/todoList.js"></script>
<script src="assets/panel/assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>

<script src="assets/panel/plugins/table/datatable/datatables.js"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="assets/panel/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="assets/panel/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="assets/panel/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="assets/panel/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="assets/panel/plugins/table/datatable/custom_miscellaneous.js"></script>
<script src="assets/panel/plugins/alert/js/sweetalert.min.js"></script>
<script src="assets/panel/plugins/dropify/js/dropify.js"></script>
<script src="assets/panel/plugins/parsleyjs/js/parsley.min.js"></script>
<script src="assets/panel/assets/js/authentication/form-1.js"></script>
<script>
    $('#html5-extension').DataTable( {
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [
                { extend: 'copy', className: 'btn' },
                { extend: 'csv', className: 'btn' },
                { extend: 'excel', className: 'btn' },
                { extend: 'print', className: 'btn' }
            ]
        },
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
            "sInfo": "صفحه _PAGE_ از _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "جستجو کنید...",
            "sLengthMenu": "نتایج :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    } );
</script>

<script>

    $('document').ready(function()
    {
        $('textarea').each(function(){
                $(this).val($(this).val().trim());
            }
        );
    });

    function selectAll() {
        var items = document.getElementsByName('id[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type === 'checkbox')
                items[i].checked = false;
        }
        if ($('#select').is(':checked'))
            for (var i = 0; i < items.length; i++) {
                if (items[i].type === 'checkbox')
                    items[i].checked = true;
            }
    }


    /*remove white space in textarea tag*/

    $('document').ready(function()
    {
        $('textarea').each(function(){
                $(this).val($(this).val().trim());
            }
        );
    });

    /*remove white space in textarea tag*/

</script>

</body>
