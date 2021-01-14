<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">

    <div class="widget widget-chart-one">
        <div class="widget-heading">
            <h5 class="">تعداد پروژه ها</h5>
            <ul class="tabs tab-pills">
                <script>

                    var options1 = {
                        chart: {
                            fontFamily: 'Nunito, sans-serif',
                            height: 365,
                            type: 'area',
                            zoom: {
                                enabled: false
                            },
                            dropShadow: {
                                enabled: true,
                                opacity: 0.3,
                                blur: 5,
                                left: -7,
                                top: 22
                            },
                            toolbar: {
                                show: false
                            },
                            events: {
                                mounted: function(ctx, config) {
                                    const highest1 = ctx.getHighestValueInSeries(0);
                                    const highest2 = ctx.getHighestValueInSeries(1);

                                    ctx.addPointAnnotation({
                                        x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                        y: highest1,
                                        label: {
                                            style: {
                                                cssClass: 'd-none'
                                            }
                                        },
                                        customSVG: {
                                            SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                            cssClass: undefined,
                                            offsetX: -8,
                                            offsetY: 5
                                        }
                                    })

                                    ctx.addPointAnnotation({
                                        x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                                        y: highest2,
                                        label: {
                                            style: {
                                                cssClass: 'd-none'
                                            }
                                        },
                                        customSVG: {
                                            SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                            cssClass: undefined,
                                            offsetX: -8,
                                            offsetY: 5
                                        }
                                    })
                                },
                            }
                        },
                        colors: ['#e7515a', '#1b55e2'],
                        dataLabels: {
                            enabled: false
                        },
                        markers: {
                            discrete: [{
                                seriesIndex: 0,
                                dataPointIndex: 7,
                                fillColor: '#000',
                                strokeColor: '#000',
                                size: 5
                            }, {
                                seriesIndex: 2,
                                dataPointIndex: 11,
                                fillColor: '#000',
                                strokeColor: '#000',
                                size: 4
                            }]
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square'
                        },
                        series: [{
                            name: 'تعداد پروژه ها',
                            data: [<?= $values ?>].reverse()
                        }],
                        labels: [<?php foreach ($keys as $date){echo "'$date',";} ?>].reverse(),
                        xaxis: {
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            crosshairs: {
                                show: true
                            },
                            labels: {
                                offsetX: 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    fontFamily: 'Nunito, sans-serif',
                                    cssClass: 'apexcharts-xaxis-title',
                                },
                            }
                        },

                        grid: {
                            borderColor: '#191e3a',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true
                                }
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                }
                            }
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            offsetY: -50,
                            fontSize: '16px',
                            fontFamily: 'Nunito, sans-serif',
                            markers: {
                                width: 10,
                                height: 10,
                                strokeWidth: 0,
                                strokeColor: '#fff',
                                fillColors: undefined,
                                radius: 12,
                                onClick: undefined,
                                offsetX: 0,
                                offsetY: 0
                            },
                            itemMargin: {
                                horizontal: 0,
                                vertical: 20
                            }
                        },
                        tooltip: {
                            theme: 'dark',
                            marker: {
                                show: true,
                            },
                            x: {
                                show: false,
                            }
                        },
                        fill: {
                            type:"gradient",
                            gradient: {
                                type: "vertical",
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: .28,
                                opacityTo: .05,
                                stops: [45, 100]
                            }
                        },
                        responsive: [{
                            breakpoint: 575,
                            options: {
                                legend: {
                                    offsetY: -30,
                                },
                            },
                        }]
                    }

                </script>
            </ul>
        </div>

        <div class="widget-content">
            <div class="tabs tab-content">
                <div id="content_1" class="tabcontent">
                    <div id="revenueMonthly"></div>
                </div>
            </div>
        </div>
    </div>
</div>