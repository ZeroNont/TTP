<!-- 
    /*
    * v_report
    * Display report of requests for permission 
    * @input    -
    * @output   -
    * @author   Chakrit
    * @Create Date 2564-07-24
    * @Update Date 2564-07-28
    */ -->

<h1>
    Report (รายงานข้อมูล)
    <a href='<?php echo site_url() . 'Report/Report/show_report_export_excel'; ?>' class="btn btn-secondary btn-lg canter float-right" id="count_export"><i class="fa fa-download"></i> Export Excel</a>
    <!-- <a href='#' id='download_link' onClick='javascript:ExcelReport();' class="btn btn-primary float-right"><i class="fa fa-download"></i> Export Excel</a> -->
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
            <div class="form-group">
                <label class="form-control-label" for="exampleInputName2">Start Date
                    (วันที่เริ่มต้น)</label>
                <input type="date" class="form-control" name="Start_date" id="Start_date" width="270">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label" for="exampleInputEmail2">End Date
                    (วันที่สิ้นสุด)</label>
                <input type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" name="End_date" id="End_date" width="270">
            </div>
        </div>
        <div class="col-lg-3">
            <br>
            <button onclick='show_all_data()' class="btn btn-primary btn-lg canter"><i class="fas fa-search"></i> Search</button>
        </div>
    </div>


    <div class="row" id="count_requested">
        <!-- <div class="col-xl-1"></div> -->

        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">All Requests</h5>
                            <span class="h2 font-weight-bold mb-0" id="total_request">

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

        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Approved</h5>
                            <span class="h2 font-weight-bold mb-0" id="total_approval">

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

        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Pending Approval</h5>
                            <span class="h2 font-weight-bold mb-0" id="pending_approval">

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

    <div class="row" id="count_graph">
        <!-- <div class="col-xl-1"></div> -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h5 class="h2 text-black mb-0">Graph number of requests for permission</h5>
                        </div>
                        <!-- <div class="col-lg-6" align="right">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">department
                                    (แผนก)</label><br>
                                <select name="Dep_id" id="Department" class="form-select" aria-label="Default select example">
                                    <option value="0">-----------Please select-----------</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChart" class="chart-canvas"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="count_table">
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
                </div>
                <div class="table-responsive" table id='myTable'>
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
                        <tbody id="data_table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>

<script>
    $(document).ready(function() {
        $("#count_requested").hide();
        $("#count_graph").hide();
        $("#count_table").hide();
        $("#count_export").hide();
    });

    function ExcelReport() //function สำหรับสร้าง ไฟล์ excel จากตาราง
    {
        var sheet_name = "Report"; /* กำหหนดชื่อ sheet ให้กับ excel โดยต้องไม่เกิน 31 ตัวอักษร */
        var elt = document.getElementById('myTable'); /*กำหนดสร้างไฟล์ excel จาก table element ที่มี id ชื่อว่า myTable*/

        /*------สร้างไฟล์ excel------*/
        var wb = XLSX.utils.table_to_book(elt, {
            sheet: sheet_name
        });
        XLSX.writeFile(wb, 'SDM&SKD Temporary Tag Permission Report.xlsx'); //Download ไฟล์ excel จากตาราง html โดยใช้ชื่อว่า SDM&SKD Temporary Tag Permission Report.xlsx
    }

    function show_chart(label, data) {
        var bar_charts = document.getElementById("myChart");
        var myChart = new Chart(bar_charts, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: 'Number of requests',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)'
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

    }

    function show_all_data() {
        var Start_date = document.getElementById('Start_date').value;
        var End_date = document.getElementById('End_date').value;
        console.log(Start_date)
        console.log(End_date)

        var approve = 0;
        var pending = 0;

        const label = [];
        var check = '';
        const data = [];
        var count = 0;
        const Dep = [];
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url() ?>Report/Report/get_report",
            dataType: "JSON",
            data: {
                "Start_date": Start_date,
                "End_date": End_date
            },
            success: function(data_charts) {
                console.log(data_charts);
                // console.log(status);

                data_charts.forEach((row, index) => {
                    console.log(row.Form_ID);
                    if (index == 0) {
                        label.push(row.Department);
                        Dep.push(row.dep_id);
                        check = row.Department;
                    } else if (check != row.Department) {
                        label.push(row.Department);
                        Dep.push(row.dep_id);
                        check = row.Department;
                    }
                    if (row.Status >= '4') {
                        approve++;
                    } else {
                        pending++;
                    }
                });
                // forEach data_charts
                label.forEach((row_label, index) => {
                    data_charts.forEach((row, index) => {
                        if (row_label == row.Department) {
                            count++;
                        }
                    });
                    data.push(count);
                    count = 0;
                });
                // forEach label
                $("#count_requested").show();
                $("#count_graph").show();
                $("#count_table").show();
                $("#count_export").show();

                show_chart(label, data);
                //show_label_select(label, Dep);
                show_table(data_charts);
                $('#total_request').text(approve + pending);
                $('#total_approval').text(approve);
                $('#pending_approval').text(pending);

                console.log(label);

            },
            error: function(res) {

            }
        });

    }

    function show_label_select(label, Dep) {
        var data_row = '';
        console.log(Dep)
        label.forEach((row_label, index) => {
            data_row += '<option value="' + Dep[index] + '">' + row_label + '</option>';
        });
        // forEach label
        $('#Department').append(data_row);
    }

    function show_table(data_chart) {
        var data_row = '';
        data_chart.forEach((row, index) => {

            data_row += '<tr>';
            data_row += '<td>' + (index + 1) + '</td>';
            if (row.HR_No == '') {
                data_row += '<td>-</td>';
            } else {
                data_row += '<td>' + row.HR_No + '</td>';
            }
            data_row += '<td>' + row.Officer + '</td>';
            if (row.Status == '4') {
                data_row += '<td>ยังอยู่ในคลัง</td>';
            } else if (row.Status > '4') {
                data_row += '<td>สิ้นสุดการวาง</td>';
            } else if (row.Status < '4') {
                data_row += '<td>รอการอนุมัติ</td>';
            }
            data_row += '<td><a href="<?php echo site_url() ?>Report/Report/show_report_detail?Form_ID= ' + row.Form_ID + ' ">'
            data_row += '<button type="button" class="btn btn-primary btn-sm" style="background-color: info;">'
            data_row += '<i class="fas fa-search"></i></button></a></td>'
            data_row += '</tr>';
        });
        // forEach label
        $('#data_table').html(data_row);

    }
</script>