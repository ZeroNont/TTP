<!DOCTYPE html>
<html>
    <!-- CSS -->
<style>
    #history_table td, #history_table th 
    {
        padding: 8px;
        text-align: center;
    }
    #history_table tr:nth-child(even) 
    {
        background-color:  #e9ecef;
        }
    #history_table tr:hover 
    {
        background-color: #adb5bd;
    }
    
</style>

<h1>
    Request (อนุมัติคำร้องขออนุญาต)
</h1>

<body>
    <!-- ตารางรายการคำขอ -->
    <!-- Table Requestd form -->
    <div class="card">
        <div class="card-header">
            <div class="table-responsive">
                <table class="table align-items-center" id="history_table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            
                                <th scope="col">Item</th>
                                <th scope="col">Schedule</th>
                                <th scope="col">OFFICER IN CHARGE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                    </thead>

                
                        <tbody align="center">
                                        <?php
                                            foreach($arr_req as $index => $row ){ ?>
                                                <tr>
                                                    
                                                    <!-- column ลำดับ # -->
                                                    <td style='text-align: center;'>
                                                        <?php echo ($index+1);?>
                                                    </td>

                                                    <!-- column สิง่ของ -->
                                                    <td>
                                                        <?php echo $row->Item;?>
                                                    </td>

                                                    <!-- column ช่วงเวลาร้องขอ -->
                                                    <td>
                                                       
                                                        <?php echo date("d-m-Y",strtotime($row->Start_date)).' - '.date("d-m-Y",strtotime($row->End_date));?>
                                                    </td>

                                                    <!-- column ผู้รับผิดชอบ -->
                                                    <td>
                                                        <?php echo $row->Empname_th.' '.$row->Empsurname_th;?>
                                                    </td>

                                                    <!-- column ดำเนินการ -->
                                                    <td style='text-align: center;'>

                                                        <!-- ปุ่มดำเนินการ -->
                                                        <a href=" <?php echo site_url() . '/approve_form/ttp_approve_form/show_approve_form_plant_detail/' . $row->Form_ID; ?>">
                                                             <button class="btn btn-primary"> <i class="fa fa-info-circle"></i> </button>
                                                        </a>

                                                        
                                                    </td>
                                                    
                                                </tr>
                                              
                                            <?php } ?>
                                    </tbody>  
                </table>

            <div>
        </div>
    </div>          
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.2.0"></script>
    <script type="text/javascript">
    $(function() {
        $('#datetimepickerDemo').datetimepicker({
            minDate: new Date()
        });
    });
    </script>
</body>

</html>