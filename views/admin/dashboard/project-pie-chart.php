<?php

?>

<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-chart-two">
        <div class="widget-heading">
            <h5 class="">پروژه ها بر اساس دسته بندی</h5>
        </div>
        <div class="widget-content">
            <div id="chart-2" class="">
                <script>
                    var options = {
                        chart: {
                            type: 'donut',
                            width: 380
                        },
                        colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
                        dataLabels: {
                            enabled: false
                        },
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                            },
                            itemMargin: {
                                horizontal: 0,
                                vertical: 8
                            }
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            fontFamily: 'Nunito, sans-serif',
                                            color: undefined,
                                            offsetY: -10
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            fontFamily: 'Nunito, sans-serif',
                                            color: '#bfc9d4',
                                            offsetY: 16,
                                            formatter: function (val) {
                                                return val
                                            }
                                        },
                                        total: {
                                            show: true,
                                            showAlways: true,
                                            label: 'مجموع',
                                            color: '#888ea8',
                                            formatter: function (w) {
                                                return w.globals.seriesTotals.reduce( function(a, b) {
                                                    return a + b
                                                }, 0)
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: '#0e1726'
                        },
                        series: [985, 737, 270],
                        labels: ['wordpress', '.net', 'nop commerce'],
                        responsive: [{
                            breakpoint: 1599,
                            options: {
                                chart: {
                                    width: '350px',
                                    height: '400px'
                                },
                                legend: {
                                    position: 'bottom'
                                }
                            },

                            breakpoint: 1439,
                            options: {
                                chart: {
                                    width: '250px',
                                    height: '390px'
                                },
                                legend: {
                                    position: 'bottom'
                                },
                                plotOptions: {
                                    pie: {
                                        donut: {
                                            size: '65%',
                                        }
                                    }
                                }
                            },
                        }]
                    }
                </script>
            </div>
        </div>
    </div>
    <!--<div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">وضعیت آب و هوا امروز تهران</h5>
                        </div>
                        <div class="widget-content">

                            <div class="time">

                                <div><?php /*echo ucwords(@$dataWeather->weather->description); */?></div>
                            </div>
                            <div class="weather-forecast">
                                <img src="" class="weather-icon" />
                                <p>بیشترین و کمترین دما</p>
                                <?php /*echo $dataWeather->main->temp_max; */?>°C
                                <span class="min-temperature"><?php /*echo $dataWeather->main->temp_min; */?>°C</span>
                            </div>
                            <div class="time">
                                <div>رطوبت: <?php /*echo $dataWeather->main->humidity; */?> %</div>
                                <div>باد: <?php /*echo $dataWeather->wind->speed; */?> km/h</div>
                            </div>
                        </div>
                    </div>-->
</div>