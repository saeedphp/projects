<?php

$portfolio=$data['portfolio'];
$portfolioCat=$data['portfolioCat'];

?>

    <div id="content" class="site-content">
        <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">نمونه کار ها</h1>
                </div>
            </div>
        </div>

        <section class="p-t110 p-b90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 m-b20">
                        <div class="ot-heading text-center">
                            <h6><span>نمونه پروژه های ما</span></h6>
                            <h2 class="main-heading">شرکت فراموج از سال 1389 آغاز به فعالیت نموده است.</h2>
                        </div>
                    </div>
                </div>
                <div class="project-filter-wrapper">
                    <div class="container">
                        <ul class="project_filters">
                            <li><a data-filter="*" class="selected">همه</a></li>
                            <?php
                            foreach ($portfolioCat as $cat){ ?>
                                <li>
                                    <a data-filter=".<?= $cat['title']; ?>">
                                        <?= $cat['title']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="projects-grid projects-style-2 ">

                        <?php
                        foreach ($portfolio as $row){ ?>
                            <div class="project-item <?= $row['catTitle']; ?>">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a class="portfolio-frame" href="portfolio-single.html">
                                        <img src="<?= $row['img']; ?>" class="" alt="">
                                    </a>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5>
                                            <a>
                                            <?= $row['title']; ?>
                                            </a>
                                            <br>
                                            <a href="http://<?= $row['link']; ?>">
                                                <?= $row['link']; ?>
                                            </a>
                                        </h5>
                                        <p class="portfolio-cates">
                                            <a><?= $row['catTitle']; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

    </div>

