<?php

$answer1 = $_POST['photo'];
$answer2 = $_POST['www'];
$answer3 = $_POST['sw'];
$answer4 = $_POST['aq'];

$totalA = 0;
$totalB = 0;
$totalC = 0;
$totalD = 0;

if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

if ($answer2 == "A") { $totalA = $totalA + 1.23; }
if ($answer2 == "B") { $totalB = $totalB + 1.15; }
if ($answer2 == "C") { $totalC = $totalC + 1.13; }
if ($answer2 == "D") { $totalD = $totalD + 1.16; }

if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
if ($answer3 == "D") { $totalD = $totalD + 1.16; }

if ($answer4 == "A") { $totalA = $totalA + 1.17; }
if ($answer4 == "B") { $totalB = $totalB + 1.15; }
if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

?>


<div id="content" class="site-content">

    <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">فرم نیازسنجی</h1>
                <h6 class="page-title">طراحی سایت</h6>
            </div>
        </div>
    </div>

    <?php
    if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
        echo '<div class="quiz-overlay result priest"></div><div class="results-text"><p class="you-chose">You Scored:10000</p></div>';
    }
    elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
        echo '<div class="quiz-overlay result megadeth"></div><div class="results-text"><p class="you-chose">You Scored:15000</div>';
    }
    elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
        echo '<div class="quiz-overlay result maiden"></div><div class="results-text"><p class="you-chose">You Scored:17000</div>';
    }
    elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
        echo '<div class="quiz-overlay result dio"></div><div class="results-text"><p class="you-chose">You Scored:20000</div>';
    }
    ?>

</div>
