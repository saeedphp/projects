<div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget-one">
        <div class="widget-content">
            <div class="w-numeric-value">
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </div>
                <div class="w-content">
                    <span class="w-value">3,192</span>
                    <span class="w-numeric-title">کل پروژه ها</span>
                </div>
            </div>
            <div class="w-chart">
                <div id="total-orders">
                    <script>
                        var d_2options2 = {
                            chart: {
                                id: 'sparkline1',
                                group: 'sparklines',
                                type: 'area',
                                height: 280,
                                sparkline: {
                                    enabled: true
                                },
                            },
                            stroke: {
                                curve: 'smooth',
                                width: 2
                            },
                            fill: {
                                opacity: 1,
                            },
                            series: [{
                                name: 'پروژه ها ها',
                                data: [<?= $values ?>].reverse()
                            }],
                            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'].reverse(),
                            yaxis: {
                                min: 0
                            },
                            grid: {
                                padding: {
                                    top: 125,
                                    right: 0,
                                    bottom: 36,
                                    left: 0
                                },
                            },
                            fill: {
                                type:"gradient",
                                gradient: {
                                    type: "vertical",
                                    shadeIntensity: 1,
                                    inverseColors: !1,
                                    opacityFrom: .40,
                                    opacityTo: .05,
                                    stops: [45, 100]
                                }
                            },
                            tooltip: {
                                x: {
                                    show: false,
                                },
                                theme: 'dark'
                            },
                            colors: ['#fff']
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>