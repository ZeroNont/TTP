<h1>
    Report (รายงานข้อมูล)
    <button class="btn btn-primary float-right"><i class="fa fa-download"></i> Export Excel</button>
</h1>
<br>
<div class="card-header" id="card_radius">
    <h1 style="text-align:center">
        Temporary Tag Permission Report
    </h1>
    <br>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-3">
            <form id="form1" name="form1" class="form-inline" method="post" action="s.php">
                <center>
                    <div class="form-group">
                        <label for="exampleInputName2">วันที่ :</label>
                        <input name="d_s" id="datepicker" width="270" />
                    </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="exampleInputEmail2">&nbsp;ถึงวันที่ :&nbsp;</label>
                <input name="d_e" id="datepicker2" width="270" />
            </div>
        </div>
        <div class="col-lg-2">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
        </div>

        </center>
        </form>

        <!-- <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label" for="input-username">Start Date
                    (วันที่เริ่มต้น)</label>
                <input type="date" name="Start_date" class="form-control" min="<?php echo date('Y-m-d'); ?>">
            </div>

        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label" for="input-email">End Date
                    (วันที่สิ้นสุด)</label>
                <input type="date" class="form-control" name="End_date" min="<?php echo date('Y-m-d'); ?>">
            </div>

        </div> -->
    </div>
    <!-- row  -->


    <div class="row">
        <div class="col-xl-1"></div>

        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">All Requests</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <?php
                                $total_request = 0;
                                for ($i = 0; $i < count($requested); $i++) {
                                    $total_request += 1;
                                }
                                echo $total_request;
                                ?>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-single-copy-04"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                        <span class="text-nowrap">Send to requests</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- All Requests  -->

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Approved</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <?php
                                $total_approval = 0;
                                for ($i = 0; $i < count($requested); $i++) {
                                    if ($requested[$i]->HR_No != null) {
                                        $total_approval += 1;
                                    }
                                }
                                echo $total_approval;
                                ?>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-check-bold"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                        <span class="text-nowrap">Send to requests</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- Approved -->

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Pending Approval</h5>
                            <span class="h2 font-weight-bold mb-0">
                                <?php
                                $pending_approval = count($requested) - $total_approval;
                                echo $pending_approval;
                                ?>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                                <i class="ni ni-time-alarm"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                        <span class="text-nowrap">Send to requests</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- Pending Approval  -->

    </div>

    <div class="row">
        <div class="col-xl-1"></div>

        <div class="col-xl-10">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h5 class="h2 text-black mb-0">Graph number of requests for permission</h5>
                        </div>
                        <div class="col-lg-6" align="right">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">department
                                    (แผนก)</label><br>
                                <select name="Dep_id" id="department" class="form-select" aria-label="Default select example">
                                    <option value="0">-----------Please select-----------</option>
                                    <?php for ($i = 0; $i < count($obj_department); $i++) { ?>
                                        <option value="<?php echo $obj_department[$i]->Dep_id ?>">
                                            <?php echo $obj_department[$i]->Dep_Name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                                <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                    <span class="d-none d-md-block">Month</span>
                                    <span class="d-md-none">M</span>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                    <span class="d-none d-md-block">Week</span>
                                    <span class="d-md-none">W</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    </div>
                </div>

                <div class="card-body">
                    <!-- Chart -->
                    <!-- <div class="chart"> -->
                    <!-- Chart wrapper -->
                    <canvas id="myChart" class="chart-canvas"></canvas>
                    <!-- <canvas id="chart-sales-dark" class="chart-canvas"></canvas> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="col-xl-3" align="right">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input class="form-control" placeholder="Search" type="text">
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- <h3 class="mb-0">Light table</h3> -->
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Running No.</th>
                                <th scope="col">Requester</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            for ($i = 0; $i < count($requested); $i++) {
                                if ($requested[$i]->HR_No != null) {
                            ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <th scope="row"><?php echo $requested[$i]->HR_No ?></th>
                                        <th scope="row"><?php echo $requested[$i]->Officer ?></th>
                                        <?php
                                        if ($requested[$i]->Status == '4') {
                                            $Status = 'ยังอยู่ในคลัง';
                                        } else {
                                            $Status = 'สิ้นสุดการวาง';
                                        }
                                        ?>
                                        <td><?php echo $Status ?></td>
                                        <td>
                                            <a href="<?php echo site_url() . 'Report/Report_controller/show_report_detail?Form_ID=' . $requested[$i]->Form_ID; ?>" class="fas fa-search text-success mr-3"></a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

<script>
    var bar_charts = document.getElementById("myChart");
    var myChart = new Chart(bar_charts, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>