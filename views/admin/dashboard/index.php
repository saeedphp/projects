<script src="<?= URL ?>assets/panel/plugins/highcharts/highcharts.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/highcharts-3d.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/series-label.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/exporting.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/export-data.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/accessibility.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/highcharts-more.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/solid-gauge.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/heatmap.js"></script>
<script src="<?= URL ?>assets/panel/plugins/highcharts/tilemap.js"></script>

<?php
$active='dashboard';
require ('views/admin/layout.php');
$level = Model::getUserLevel();
?>

<?php
/*$apiKey = "16d01119b2cb9daa4ca45ea583835b36";
$cityId = "112931";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, '');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$dataWeather = json_decode($response);
date_default_timezone_set('Asia/Tehran');
$currentTime = time();*/

$progressStat = $data['progressStat'];
$weekStat = $data['weekStat'];
$progresses = $data['progress'];

$keys=array_keys($progressStat);
$values=array_values($progressStat);
$values=implode(',',$values);

?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <?php
                require ('project-chart.php');
                require ('project-pie-chart.php');
                require ('daily-project.php');
                require ('summary.php');
                require ('all-project.php');
                if ($level==1){
                    require ('financial.php');
                }

                require ('recent.php');
                require ('user-stat.php');
                ?>

            </div>

        </div>

    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->



<script src="assets/panel/plugins/apex/apexcharts.min.js"></script>
<script src="assets/panel/assets/js/dashboard/dash_1.js"></script>