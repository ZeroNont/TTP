<a href="<?php echo site_url() . 'Report/Report_controller/show_report'; ?>" class="btn btn-secondary float-left"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>

<h1>
    &nbsp; Report (รายงานข้อมูล)
</h1>
<br>
<div class="card-header" id="card_radius">
    <h1 style="text-align:center">
        Running No. <?php echo $Form_data->HR_No; ?>
        <br>
        ------------------------------------------------------------------------------------------
    </h1>
    <br>
    <h2 style="text-align:left">
        <b>Company :</b> <?php echo $Form_data->Company_name . ' ' . "(" .  $Form_data->Company_name_th . ")" ?><br><br>
        <b>Requester :</b> <?php echo $Form_data->Officer; ?><br><br>
        <b>Plant No. :</b> <?php echo $Form_data->Plant_No; ?><br><br>
        <b>Plant Name. :</b> <?php echo $Form_data->Plant_name; ?><br><br>
        <b>Reason :</b> <?php echo $Form_data->Reason; ?><br><br>
        <b>Requested date :</b> <?php echo date("d-m-Y", strtotime($Form_data->Requested_date)); ?><br><br>
        <b>Approval date :</b> <?php echo date("d-m-Y", strtotime($Form_data->Approve_date)) ?><br><br>
        <b>Starting date :</b> <?php echo date("d-m-Y", strtotime($Form_data->Start_date)) ?><br><br>
        <b>End date :</b> <?php echo date("d-m-Y", strtotime($Form_data->End_date)) ?><br><br>
        <b>Approver :</b> <?php echo $Form_data->Empname_engTitle . ' ' . $Form_data->Empname_eng . ' ' . $Form_data->Empsurname_eng; ?><br><br>
        <?php
        if ($Form_data->Status == '4') {
            $Status = 'ยังอยู่ในคลัง';
        } else {
            $Status = 'สิ้นสุดการวาง';
        }
        ?>
        <b>Status :</b> <?php echo $Status; ?><br>
    </h2>


</div>
<br>
&nbsp;