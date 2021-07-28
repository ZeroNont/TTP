<!--
    v_history_detail
    display for detail of history
    @input -
    @output -
    @author Phatchara
    Create date 
    Update date 
-->
<style>
     #card_radius
    {
        border-radius: 20px;
    }
    #card_padding
    {
        padding: 1.5rem;
    }
    #button_size
    {
        border-radius: 24px;
        width: 200px;
    }
    #card_align
    {
        text-align: 20px;
    }

</style> 
    
    <!-- Card Detail form -->
<h1>History Form (ประวัติคำขอวางของ)</h1>
    <div class="col-xl-12 order-xl-1">
        <div class="card" id="card_radius">
            
            <div class="card-body ">
                <form action="<?php echo site_url() . 'licence_form/licence_input/insert'; ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Start Date
                                        (วันที่เริ่มต้น)</label>

                                        <input type="date" name="Start_date" class="form-control" required value="<?php echo $arr_form->Start_date ?>" disabled>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">End Date
                                        (วันที่สิ้นสุด)</label>
                                        <input type="date" name="End_date" class="form-control" required value="<?php echo $arr_form->End_date ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Item
                                        (สิ่งที่ต้องการวาง)</label>
                                    <input type="text" name="Item" class="form-control" require value="<?php echo $arr_form->Item ?>" disabled>
                                </div>
                            </div>
                            <div class=" col-lg-12 ">
                                <div class=" form-group">
                                    <label class="form-control-label" for="input-last-name">Reason
                                        (เหตุผลในการวาง)</label>
                                    <input type="text" name="Reason" class="form-control" require value="<?php echo $arr_form->Reason ?>" disabled> 
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Officer in Charge
                                        (ผู้รับผิดชอบ)</label>
                                    <input class="form-control" type="text" name="Officer" require value="<?php echo $arr_form->Officer ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Tell No.
                                        (เบอร์โทรศัพท์)</label>
                                    <input type="text" class="form-control" name="Tell" require value="<?php echo $arr_form->Tell ?>" disabled>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Layout
                                        (รูปแบบการวาง)</label>
                                        <br>
                                        <a href="<?php echo base_url()?>assets/file/layout/<?php echo $arr_file[0]->Layout_location ?>" download> 
                                                <button type="button" class="btn btn-danger" id="button_size">
                                                    <i class="fas fa-file-alt text-dark"></i>
                                                    &nbsp;&nbsp;ไฟล์
                                                </button> </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Plan
                                        (แผนการวาง)</label>
                                        <br>
                                        <a href="<?php echo base_url()?>assets/file/Plan/<?php echo $arr_file[0]->Plan_location ?>" download>  
                                                <button type="button" class="btn btn-danger" id="button_size">
                                                    <i class="fas fa-file-alt text-dark"></i>
                                                        &nbsp;&nbsp;ไฟล์
                                                </button> 
                                        </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </form>
            </div>
        </div>
    </div>

<!-- ========== ข้อมูลผู้พิจารณา ========== -->
        <?php if ($arr_form->Status != 0) { ?>
            <div class="card-body">            
                <h3>ข้อมูลผู้พิจารณา</h3>
                                <div class="row">
                                    <!-- แสดงชื่อหัวหน้า อนุมัติ -->
                                    <?php if ($arr_form->Status == 1 || $arr_form->Status == 2 || $arr_form->Status == 3  || $arr_form->Status == -3 || $arr_form->Status == -2) { ?>
                                        <div class="col-6 col-md-4" id="card_align"><span><b>ชื่อผู้อนุมัติ : </b>
                                            <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th; ?>
                                            <br>
                                            <b>ตำแหน่ง : </b>หัวหน้างาน
                                            <?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                            $newDate = date("d/m/Y", strtotime($arr_list->Supervisor_date)); ?>
                                            <br>
                                            <b>วันที่อนุมัติ : </b>
                                            <?php echo $newDate;  ?><br></span>
                                        </div>
                                    <?php }
                                    //  <!-- แสดงชื่อ HR อนุมัติ -->
                                    if ($arr_form->Status == 2 || $arr_form->Status == 3 || $arr_form->Status == -3) { ?>
                                        <div class="col-6 col-md-4"><span><b>ชื่อผู้อนุมัติ : </b>
                                                <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th; ?>
                                                <br>
                                            <b>ตำแหน่ง : </b>HR 
                                            <?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                                $newDate = date("d/m/Y", strtotime($arr_list->HR_date)); ?>
                                                <br>
                                            <b>วันที่อนุมัติ : </b>
                                                <?php echo $newDate;  ?><br></span>
                                        </div>
                                        <?php }
                                     //  <!-- แสดงชื่อ Approve Plant อนุมัติ -->
                                    if ($arr_form->Status == 3) { ?>
                                       <div class="col-6 col-md-4"><span><b>ชื่อผู้อนุมัติ : 
                                            <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th; ?>
                                            <br>
                                            <b>ตำแหน่ง : </b>Approve Plant <br>
                                            <?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                            $newDate = date("d/m/Y", strtotime($arr_list->Approval_plant_date)); ?>
                                            <br>
                                            <b>วันที่ผู้อนุมัติ : </b>
                                            <?php echo $newDate;  ?><br></span>
                                        </div>
                                    <?php }
                                    // <!-- แสดงชื่อหัวหน้า ปฎิเสธ -->
                                    if ($arr_form->Status == -1 ) { ?>
                                        <div class="col-6 col-md-4"><span><b>ชื่อผู้ปฏิเสธ : </b>
                                            <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th  ?>
                                            <br>
                                            <b>ตำแหน่ง : </b>หัวหน้างาน 
                                            <?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                                $newDate = date("d/m/Y", strtotime($arr_list->Supervisor_date)); ?>
                                            <br>
                                            <b>วันที่ปฏิเสธ : </b>
                                                <?php echo $newDate;  ?> 
                                                <br>   
                                            <b>เหตุผลที่ปฏิเสธ : </b>
                                            <?php echo $arr_list->Reason_reject;?></span>
                                        </div>
                                    <?php } 
                                    // <!-- แสดงชื่อ HR ปฎิเสธ -->
                                    if ($arr_form->Status == -2 ) { ?>
                                        <div class="col-6 col-md-4"><span><b>ชื่อผู้ปฏิเสธ : </b>
                                            <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th;  ?>
                                            <br>
                                            <b>ตำแหน่ง : </b>HR 
                                            <?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                                $newDate = date("d/m/Y", strtotime($arr_list->HR_date)); ?>
                                            <b>วันที่ปฏิเสธ : </b>
                                                <?php echo $newDate;  ?>
                                            <br>
                                            <b>เหตุผลที่ปฏิเสธ : </b>
                                                <?php echo $arr_list->Reason_reject;?></span>
                                            </div>
                                            <?php }
                                     // <!-- แสดงชื่อ Approve Plant ปฎิเสธ -->
                                    else if ($arr_form->Status == -3 ) { ?>
                                        <div class="col-6 col-md-4"><span><b>ชื่อผู้ปฏิเสธ : </b>
                                            <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th  ?>
                                            <br>
                                            <b>ตำแหน่ง : </b>Approve Plant <br>
                                            <?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                                $newDate = date("d/m/Y", strtotime($arr_list->Approval_plant_date)); ?>
                                            <b>วันที่ปฏิเสธ : </b>
                                                <?php echo $newDate;  ?>
                                            <br>
                                            <b>เหตุผลที่ปฏิเสธ : </b>
                                            <?php echo $arr_list->reject_reason;?></span>
                                        </div>
                                        <?php } ?>
                                    </div>
            </div>
            <br>
        <?php } ?>

        <a href="<?php echo base_url().'history/ttp_history/show_history_employee/'.$_SESSION['UsEmp_ID']?>" >  
                        <center><button type="button" class="btn btn-danger canter" id="button_size">Back</button> </center>
                    </a>
            <br>
            <br>
    