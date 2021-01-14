<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

    <div class="widget widget-activity-four">

        <div class="widget-heading">
            <h5 class="">پروژه های اخیر</h5>
        </div>

        <div class="widget-content">

            <div class="mt-container mx-auto">
                <div class="timeline-line">

                    <?php
                    foreach ($progresses as $progress){ ?>
                        <div class="item-timeline <?php if ($progress['status']==1){echo 'timeline-primary';}elseif ($progress['status']==2){echo 'timeline-success';}elseif ($progress['status']==3){echo 'timeline-danger';}elseif ($progress['status']==4){echo 'timeline-dark';}elseif ($progress['status']==5){echo 'timeline-secondary';}elseif ($progress['status']==6){echo 'timeline-warning';}elseif ($progress['status']==7){echo 'timeline-primary';} ?>">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>
                                    <?= $progress['title']; ?>
                                </p>
                                <span class="badge <?php if ($progress['status']==1){echo 'badge-needs';}elseif ($progress['status']==2){echo 'badge-theme';}elseif ($progress['status']==3){echo 'basge-uiux';}elseif ($progress['status']==4){echo 'badge-dynamic';}elseif ($progress['status']==5){echo 'badge-check';}elseif ($progress['status']==6){echo 'badge-finaltest';}elseif ($progress['status']==7){echo 'completed';} ?>">
                                                <?= $progress['statusTitle']; ?>
                                            </span>
                                <p class="t-time">
                                    <?= $progress['projectType']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
</div>