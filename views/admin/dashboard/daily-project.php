<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget-two">
        <div class="widget-content">
            <div class="w-numeric-value">
                <div class="w-content">
                    <span class="w-value">پروژه روزانه</span>
                    <span class="w-numeric-title">برای جزئیات بیشتر به ستون ها بروید.</span>
                </div>
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-dollar-sign">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
            </div>
            <div class="w-chart">
                <div id="daily-sales">
                    <script>
                        var d_2options1 = {
                            chart: {
                                height: 160,
                                type: 'bar',
                                stacked: true,
                                stackType: '100%',
                                toolbar: {
                                    show: false,
                                }
                            },
                            dataLabels: {
                                enabled: false,
                            },
                            stroke: {
                                show: true,
                                width: 1,
                            },
                            colors: ['#e2a03f', '#e0e6ed'],
                            responsive: [{
                                breakpoint: 480,
                                options: {
                                    legend: {
                                        position: 'bottom',
                                        offsetX: -10,
                                        offsetY: 0
                                    }
                                }
                            }],
                            series: [{
                                name: 'پروژه ها',
                                data: [<?= $values ?>].reverse()
                            }],
                            xaxis: {
                                labels: {
                                    show: false,
                                },
                                categories: [<?php foreach ($keys as $date){echo "'$date',";} ?>].reverse(),
                            },
                            yaxis: {
                                show: false
                            },
                            fill: {
                                opacity: 1
                            },
                            plotOptions: {
                                bar: {
                                    horizontal: false,
                                    endingShape: 'rounded',
                                    columnWidth: '25%',
                                }
                            },
                            legend: {
                                show: false,
                            },
                            grid: {
                                show: false,
                                xaxis: {
                                    lines: {
                                        show: false
                                    }
                                },
                                padding: {
                                    top: 10,
                                    right: 0,
                                    bottom: -40,
                                    left: 0
                                },
                            },
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>