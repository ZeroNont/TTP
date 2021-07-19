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
                                <th scope="col">รหัสกำกับ</th>
                                <th scope="col">สิ่งของ</th>
                                <th scope="col">ช่วงเวลาร้องขอ</th>
                                <th scope="col">ผู้รับผิดชอบ</th>
                            </tr>
                    </thead>
                         

                        <tbody align="center">
                                        <?php
                                            for($i=0;$i<count($arr_req);$i++){ ?>
                                                <tr>
                                                    <!-- column ลำดับ # -->
                                                    <td style='text-align: center;'>
                                                        <?php echo ($i+1);?>
                                                    </td>

                                                    <!-- column รหัสกำกับ -->
                                                    <td>
                                                        <?php echo $arr_req[$i]->Form_ID;?>
                                                    </td>

                                                    <!-- column สิง่ของ -->
                                                    <td>
                                                        <?php echo $arr_req[$i]->Item;?>
                                                    </td>

                                                    <!-- column ช่วงเวลาร้องขอ -->
                                                    <td>
                                                       
                                                        <?php echo $arr_req[$i]->Start_date.' - '.$arr_req[$i]->End_date;?>
                                                    </td>

                                                    <!-- column ผู้รับผิดชอบ -->
                                                    <td>
                                                        <?php echo $arr_req[$i]->Supervisor;?>
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