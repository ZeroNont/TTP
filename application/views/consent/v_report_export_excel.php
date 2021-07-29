<!-- /*
* v_report_export_excel
* Display detail of requests for permission to excel
* @input    -
* @output   -
* @author   Chakrit
* @Create Date 2564-07-28
*/ -->

<a href="<?php echo site_url() . 'Report/Report/show_report'; ?>" class="btn btn-secondary float-left"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
<a href='#' id='download_link' onClick='javascript:ExcelReport();' class="btn btn-primary float-right"><i class="fa fa-download"></i> Export Excel</a>

<h1>
    &nbsp; Report (รายงานข้อมูล)
</h1>
<br>
<div class="card-header">
    <h1 style="text-align:center">
        Temporary Tag Permission Report
        <br>
        ------------------------------------------------------------------------------------------
    </h1>
    <div class="row" id="count_table">
        <div class="col-xl-12">
            <div class="card">
                <div class="table-responsive" table id='myTable'>
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Running No.</th>
                                <th scope="col">Company</th>
                                <th scope="col">Requester</th>
                                <th scope="col">Plant No.</th>
                                <th scope="col">Plant Name.</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Requested date</th>
                                <th scope="col">Approval date</th>
                                <th scope="col">Starting date</th>
                                <th scope="col">End date</th>
                                <th scope="col">Approver</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="data_table">
                            <?php
                            $num = 1;
                            for ($i = 0; $i < count($Form_data); $i++) {
                            ?>
                                <tr>
                                    <td><?php echo $num++; ?></td>
                                    <td><?php echo $Form_data[$i]->HR_No; ?></td>
                                    <td><?php echo $Form_data[$i]->Company_name . ' ' . "(" .  $Form_data[$i]->Company_name_th . ")" ?></td>
                                    <td><?php echo $Form_data[$i]->Officer; ?></td>
                                    <td><?php echo $Form_data[$i]->Plant_No; ?></td>
                                    <td><?php echo $Form_data[$i]->Plant_name; ?></td>
                                    <td><?php echo $Form_data[$i]->Reason; ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($Form_data[$i]->Requested_date)); ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($Form_data[$i]->Approve_date)) ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($Form_data[$i]->Start_date)) ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($Form_data[$i]->End_date)) ?></td>
                                    <td><?php echo $Form_data[$i]->Empname_engTitle . ' ' . $Form_data[$i]->Empname_eng . ' ' . $Form_data[$i]->Empsurname_eng; ?></td>
                                    <?php
                                    if ($Form_data[$i]->Status == '4') {
                                        $Status = 'ยังอยู่ในคลัง';
                                    } else if ($Form_data[$i]->Status > '4') {
                                        $Status = 'สิ้นสุดการวาง';
                                    } else if ($Form_data[$i]->Status < '4') {
                                        $Status = 'รอการอนุมัติ';
                                    }
                                    ?>
                                    <td><?php echo $Status; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>

<script>
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
</script>