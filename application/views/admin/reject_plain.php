<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reject / Plain</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Product (Plain Milk)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php foreach ($total_susu as $data) {
                                    $total_produksi_susu = $data['total_produksi_susu'];
                                }
                                echo number_format($total_produksi_susu, 0, ',', '.');
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Reject</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php foreach ($total_susu as $data) {
                                    $total_reject_susu = $data['total_reject_susu'];
                                }
                                echo number_format($total_reject_susu, 0, ',', '.');
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Percentage of Reject</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php foreach ($persenan_reject_produksi as $data) {
                                            $persenproduksi = round($data->persenan_produksi, 2);
                                            $persenreject = round($data->persenan_reject, 2);
                                        }
                                        echo $persenreject; ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $persenreject ?>%" aria-valuenow="<?= $persenreject ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sigma Value</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sigma ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Bar Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Diagram Production & Reject</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myBarChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bar Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pareto Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Percentage of Reject Production</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Percentage of Reject
                        </span>
                    </div>
                    <div class="mt-1 small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Percentage of Production
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Line Chart 1 -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">C-Chart Bocor Atas</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar pt-4 pb-2">
                        <canvas id="line1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Line Chart 2 -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">C-Chart Bocor Bawah</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar pt-4 pb-2">
                        <canvas id="line2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Line Chart 3 -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">C-Chart Bocor Tutup</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar pt-4 pb-2">
                        <canvas id="line3"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php $this->load->view('templates/footer'); ?>
<script src="<?= base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>
<script src="<?= base_url('assets/js/demo/chart-bar-demo.js') ?>"></script>
<?php
foreach ($total_susu as $data) {
    $bocor_atas = round($data['bocor_atas'] / $data['total_reject_susu'] * 100, 2);
    $bocor_bawah = round($data['bocor_bawah'] / $data['total_reject_susu'] * 100, 2);
    $bocor_tutup = round($data['bocor_tutup'] / $data['total_reject_susu'] * 100, 2);
    $arraybar = [
        $bocor_atas,
        $bocor_bawah,
        $bocor_tutup
    ];
}
foreach ($total_susu_perbulan as $data) {
    $produksi[] = $data->total_produksi_susu;
    $reject[] = $data->total_reject_susu;
}
foreach ($persenan_reject_produksi as $data) {
    $persenproduksi = round($data->persenan_produksi, 2);
    $persenreject = round($data->persenan_reject, 2);
    $arraypie = [
        $persenreject,
        $persenproduksi
    ];
}
foreach ($susu as $data) {
    $line_bocor_atas[] = $data->bocor_atas;
    $line_bocor_bawah[] = $data->bocor_bawah;
    $line_bocor_tutup[] = $data->bocor_tutup;
}
foreach ($c_chart as $data) {
    $cl_bocor_bawah[] = round($data->cl_bocor_bawah, 2);
    $ucl_bocor_bawah[] = round($data->ucl_bocor_bawah, 2);
    $lcl_bocor_bawah[] = round($data->lcl_bocor_bawah, 2);
    $cl_bocor_atas[] = round($data->cl_bocor_atas, 2);
    $ucl_bocor_atas[] = round($data->ucl_bocor_atas, 2);
    $lcl_bocor_atas[] = round($data->lcl_bocor_atas, 2);
    $cl_bocor_tutup[] = round($data->cl_bocor_tutup, 2);
    $ucl_bocor_tutup[] = round($data->ucl_bocor_tutup, 2);
    $lcl_bocor_tutup[] = round($data->lcl_bocor_tutup, 2);
}
// Array cl, ucl, lcl bocor atas
$arraycl_bocor_atas = [];
$arrayucl_bocor_atas = [];
$arraylcl_bocor_atas = [];
foreach ($cl_bocor_atas as $clba) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arraycl_bocor_atas, $clba);
    }
}
foreach ($ucl_bocor_atas as $uclba) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arrayucl_bocor_atas, $uclba);
    }
}
foreach ($lcl_bocor_atas as $lclba) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arraylcl_bocor_atas, $lclba);
    }
}
// Array cl, ucl, lcl bocor bawah
$arraycl_bocor_bawah = [];
$arrayucl_bocor_bawah = [];
$arraylcl_bocor_bawah = [];
foreach ($cl_bocor_bawah as $clbb) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arraycl_bocor_bawah, $clbb);
    }
}
foreach ($ucl_bocor_bawah as $uclbb) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arrayucl_bocor_bawah, $uclbb);
    }
}
foreach ($lcl_bocor_bawah as $lclbb) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arraylcl_bocor_bawah, $lclbb);
    }
}
// Array cl, ucl, lcl bocor tutup
$arraycl_bocor_tutup = [];
$arrayucl_bocor_tutup = [];
$arraylcl_bocor_tutup = [];
foreach ($cl_bocor_tutup as $clbt) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arraycl_bocor_tutup, $clbt);
    }
}
foreach ($ucl_bocor_tutup as $uclbt) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arrayucl_bocor_tutup, $uclbt);
    }
}
foreach ($lcl_bocor_tutup as $lclbt) {
    for ($i = 1; $i <= 12; $i++) {
        array_push($arraylcl_bocor_tutup, $lclbt);
    }
}
?>
<script>
    // Diagram Production and Reject Bar Chart
    var ctx = document.getElementById("myBarChart1");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Produksi",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: <?= json_encode($produksi) ?>,
            }, {
                label: "Reject",
                backgroundColor: "#ff4d4d",
                hoverBackgroundColor: "#ff0000",
                borderColor: "#ff4d4d",
                data: <?= json_encode($reject) ?>,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 35000,
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel, 0, ',', '.');
                    }
                }
            },
        }
    });

    // Percentage of Reject Production Pie Chart
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Percentage of Reject", "Percentage of Production"],
            datasets: [{
                data: <?= json_encode($arraypie) ?>,
                backgroundColor: ['#4e73df', '#1cc88a'],
                hoverBackgroundColor: ['#2e59d9', '#17a673'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                        var total = meta.total;
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = parseFloat((currentValue / total * 100).toFixed(2));
                        return percentage + '%';
                    },
                    title: function(tooltipItem, data) {
                        return data.labels[tooltipItem[0].index];
                    }
                }
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });

    // Pareto Bar Chart

    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Bocor Atas", "Bocor Bawah", "Bocor Tutup"],
            datasets: [{
                label: "Persentase",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: <?= json_encode($arraybar) ?>,
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 100,
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value) + '%';
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + '%';
                    }
                }
            },
        }
    });

    // Bocor Atas Line Chart
    var ctx = document.getElementById("line1");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Jumlah Bocor Atas",
                lineTension: 0.3,
                backgroundColor: "rgba(50, 168, 82, 0)",
                borderColor: "rgba(50, 168, 82)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(50, 168, 82)",
                pointBorderColor: "rgba(50, 168, 82)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(168, 50, 50)",
                pointHoverBorderColor: "rgba(50, 168, 166)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($line_bocor_atas) ?>,
            }, {
                label: "CL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arraycl_bocor_atas) ?>,
            }, {
                label: "UCL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arrayucl_bocor_atas) ?>,
            }, {
                label: "LCL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arraylcl_bocor_atas) ?>,
            }],


        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: true,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });

    // Bocor Bawah Line Chart
    var ctx2 = document.getElementById("line2");
    var myLineChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Jumlah Bocor Atas",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($line_bocor_bawah) ?>,
            }, {
                label: "CL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arraycl_bocor_bawah) ?>,
            }, {
                label: "UCL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arrayucl_bocor_bawah) ?>,
            }, {
                label: "LCL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arraylcl_bocor_bawah) ?>,
            }],


        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });

    // Bocor Tutup Line Chart
    var ctx3 = document.getElementById("line3");
    var myLineChart = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Jumlah Bocor Atas",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($line_bocor_tutup) ?>,
            }, {
                label: "CL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arraycl_bocor_tutup) ?>,
            }, {
                label: "UCL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arrayucl_bocor_tutup) ?>,
            }, {
                label: "LCL",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?= json_encode($arraylcl_bocor_tutup) ?>,
            }],


        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });
</script>

</body>

</html>