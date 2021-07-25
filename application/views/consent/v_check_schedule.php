<!--
/*
* v_check_schedule
* show schedule form requestd
* @author Phatchara Khongthandee
* @Create Date 2564-07-16
*/
-->
    <!-- CSS -->
<style>
    #history_table td, #history_table th 
    {
        padding: 8px;
        text-align: center;
    }
    #history_table tr:nth-child(even) 
    {
        background-color:  #dee2e6;
    }
    #card_radius
    {
        margin-left: 15px;
        margin-right: 15px;
        border-radius: 20px;
        width: auto;
        min-height: 300px;
    }
    #history_table
    {
        width: 98%;
        margin-top: 20px;
        margin-left: 10px;
    }
</style>

    <!-- Table Requestd form -->
<h1>Check Schedule (ระยะเวลาการวางของ)</h1> 
    <div class="card-header" id="card_radius">
            <div class="table-responsive">
                <table class="table align-items-center" id="history_table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                                <th scope="col">Running No.</th>
                                <th scope="col">Item</th>
                                <th scope="col">Officer in charge</th>
                                <th scope="col">Remaining time</th>
                                <th scope="col">End Date</th>
                            </tr>
                    </thead>
                        <tbody class="list">
                            <?php for ($i = 0; $i < count($arr_schedule); $i++){?>
                                <?php $StartDate = $arr_schedule[$i]->Start_date; 
                                      $EndDate =  $arr_schedule[$i]->End_date;
                                      $today_date = date("Y-m-d"); 
                                      $totalDate = ((strtotime($EndDate) - strtotime($StartDate)) / ( 60 * 60 * 24 )) +1;
                                      $ExpDate = (strtotime($EndDate) - strtotime($today_date)) / ( 60 * 60 * 24 );?>
                                      <?php if ($EndDate > $today_date) { ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo ($i + 1); ?> 
                                        </td>
                                        <td>
                                            <?php echo $arr_schedule[$i]->Form_ID ?>
                                        </td>
                                        <td>
                                            <?php echo $arr_schedule[$i]->Item ?>
                                        </td>
                                        <td>
                                            <?php echo $arr_schedule[$i]->Officer ?>
                                        </td>
                                        <td>
                                        <!-- แสดงแสดงจำนวนวันที่วางของ -->
                                            <?php if ($StartDate != $today_date) { ?>
                                                    <?php echo $totalDate?> วัน
                                            <?php }
                                        //<!-- แสดงแสดงจำนวนวันที่เหลือ -->
                                            if ($StartDate == $today_date) { ?>
                                                <?php echo $ExpDate;?> วัน
                                            <?php }?>
                                        </td>
                                    <td>
                                        <?php $endDate  = date("d/m/Y", strtotime($arr_schedule[$i]->End_date));?>    
                                    <?php echo $endDate;?>
                                    </td>
                                </tr>
                                <?php }?>
                            <?php }?>
                        </tbody>   
                </table>
            <div>
        </div>
    </div>        


