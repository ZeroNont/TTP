<!--
    v_history_user
    display history list
    @input Form_ID
    @output -
    @author Phatchara
    Create date 
    Update date 
-->

<!-- CSS -->
<style>
#history_table td,
#history_table th 
{
    padding: 8px;
    text-align: center;
}

#history_table tr:nth-child(even) 
{
    background-color: #e9ecef;
}

#history_table tr:hover 
{
    background-color: #adb5bd;
}

#card_radius 
{
    margin-left: 14px;
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
<h1>History Form (ประวัติคำขอวางของ)</h1>
<!-- Table Requestd form -->
    <div class="card-header" id="card_radius">
        <div class="table-responsive">
            <table class="table align-items-center" id="history_table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Running No.</th>
                        <th scope="col">Item</th>
                        <th scope="col">Schedule</th>
                        <th scope="col">Officer in charge</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php for ($i = 0; $i < count($em_form); $i++){?>
                    <tr>
                        <td class="text-center">
                            <?php echo ($i + 1); ?> </td>
                        </td>
                        <td>
                            <?php echo $em_form[$i]->Form_ID ?></td>
                        </td>
                        <td>
                            <?php echo $em_form[$i]->Item ?></td>
                        </td>
                        <td>
                        <?php
                            $startDate = date("d/m/Y", strtotime($em_form[$i]->Start_date)); 
                            $endDate  = date("d/m/Y", strtotime($em_form[$i]->End_date));?>
                        <?php echo $startDate." - ".$endDate ?></td>
                        </td>
                        <td>
                            <?php echo $em_form[$i]->Officer ?></td>
                        </td>
                        <!-- column ดำเนินการ -->
                        <td style='text-align: center;'>
                            <!-- ปุ่มดำเนินการ -->
                            <a href=" <?php echo site_url() . '/history/ttp_history/show_history_detail/' . $em_form[$i]->Form_ID; ?>">
                            <button type="button" class="btn btn-primary btn-sm" style="background-color: info;"> 
                                <i class="fas fa-search"></i>
                            </button>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            </div>
        </div>