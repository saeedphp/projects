<?php
$financial=$data['financial'];
?>

<div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-one">
        <div class="widget-heading">
            <h5 class="">معاملات</h5>
        </div>

        <div class="widget-content">

            <?php
            foreach ($financial as $row){ ?>
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>
                                <?= $row['projectTitle']; ?>
                            </h4>
                            <p class="meta-date">

                            </p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span>
                                <?= number_format($row['cost']); ?>
                                تومان
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-arrow-down">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!--<div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar avatar-xl">
                                <span class="avatar-title rounded-circle">SP</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>پارک شون</h4>
                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                        </div>
                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+66400 تومان</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-arrow-up">
                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                <polyline points="5 12 12 5 19 12"></polyline>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar avatar-xl">
                                <span class="avatar-title rounded-circle">AD</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>امی دیاز</h4>
                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                        </div>

                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+64000 تومان</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-arrow-up">
                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                <polyline points="5 12 12 5 19 12"></polyline>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>نتفلیکس</h4>
                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span>- تومان 32.00</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-arrow-down">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <polyline points="19 12 12 19 5 12"></polyline>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>