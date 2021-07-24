<style>
     #card_radius
    {
        border-radius: 24px;
        width: auto;
        min-height: 300px;
    }
    #card_padding
    {
        padding: 1.5rem;
    }

</style> 
    
    <!-- Card Detail form -->
    <div class="col-xl-12 order-xl-1">
    <div class="card">
        
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
                                <input type="file" name="Layout" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Plan
                                    (แผนการวาง)</label>
                                <input type="file" name="Plan" class="form-control" placeholder="Postal code">
                            </div>
                        </div>
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<!-- ========== ข้อมูลผู้พิจารณา ========== -->
<div class="col-xl-12">
    <div class="card" id="card_padding">
            <?php if ($arr_form->Status != 1 ) { ?>
                        <div class="col-md-6" id='card1'>
                            <div class="card">
                                    <br>
                                    <h3 class="card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลผู้พิจารณา</h3>
                                <div class="card-body">
                                    <!-- แสดงชื่อหัวหน้า อนุมัติ -->
                                    <?php if ($arr_form->Status == 2 || $arr_form->Status == 3 || $arr_form->Status == 4 || $arr_form->Status == -2 || $arr_form->Status == -1 ) { ?>
                                    <div><b>ชื่อผู้อนุมัติ : </b>
                                        <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th; ?></div>
                                        <b>ตำแหน่ง : </b>หัวหน้างาน<?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                        $newDate = date("d/m/Y", strtotime($arr_list->Supervisor_date)); ?>
                                    <div><b>วันที่อนุมัติ : </b>
                                        <?php echo $newDate;  ?></div><br>
                                    <?php }
                                    //  <!-- แสดงชื่อ HR อนุมัติ -->
                                if ($arr_form->Status == 3 || $arr_form->Status == 4 || $arr_form->Status == -2) { ?>
                                    <div><b>ชื่อผู้อนุมัติ : </b>
                                        <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th; ?></div>
                                        <b>ตำแหน่ง : </b>HR<?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                        $newDate = date("d/m/Y", strtotime($arr_list->HR_date)); ?>
                                    <div><b>วันที่อนุมัติ : </b>
                                        <?php echo $newDate;  ?></div><br>
                                    <?php }
                                     //  <!-- แสดงชื่อ Approve Plant อนุมัติ -->
                                if ($arr_form->Status == 4) { ?>
                                    <div><b>ชื่อผู้อนุมัติ : </b>
                                        <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th; ?></div>
                                        <b>ตำแหน่ง : </b>Approve Plant<?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                        $newDate = date("d/m/Y", strtotime($arr_list->Approval_plant_date)); ?>
                                    <div><b>วันที่ผู้อนุมัติ : </b>
                                        <?php echo $newDate;  ?></div><br>
                                    <?php }
                                    // <!-- แสดงชื่อหัวหน้า ปฎิเสธ -->
                                if ($arr_form->Status == 0 ) { ?>
                                    <div><b>ชื่อผู้ปฏิเสธ : </b>
                                        <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th  ?></div>
                                        <b>ตำแหน่ง : </b>หัวหน้างาน<?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                        $newDate = date("d/m/Y", strtotime($arr_list->Supervisor_date)); ?>
                                    <div><b>วันที่ปฏิเสธ : </b>
                                        <?php echo $newDate;  ?></div><br>
                                    <div> <b>เหตุผลที่ปฏิเสธ : </b>
                                        <!--<?php
                                           echo $arr_list->Reason_reject;
                                        ?> -->
                                    </div>
                                    <?php } 
                                    // <!-- แสดงชื่อ HR ปฎิเสธ -->
                                if ($arr_form->Status == -1 ) { ?>
                                    <div><b>ชื่อผู้ปฏิเสธ : </b>
                                        <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th;  ?></div>
                                        <b>ตำแหน่ง : </b>HR<?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                            $newDate = date("d/m/Y", strtotime($arr_list->HR_date)); ?>
                                        <div><b>วันที่ปฏิเสธ : </b>
                                            <?php echo $newDate;  ?></div><br>
                                        <div> <b>เหตุผลที่ปฏิเสธ : </b>
                                            <?php
                                            echo $arr_list->Reason_reject;
                                            ?>
                                        </div>
                                        <?php }
                                     // <!-- แสดงชื่อ Approve Plant ปฎิเสธ -->
                                else if ($arr_form->Status == -2 ) { ?>
                                    <div><b>ชื่อผู้ปฏิเสธ : </b>
                                        <?php echo $arr_list->Empname_th . " " . $arr_list->Empsurname_th  ?></div>
                                        <b>ตำแหน่ง : </b>Approve Plant<?php //แสดงตำแหน่งหัวหน้าแบบกำหนดเอง หรือดึงจากดาต้า
                                        $newDate = date("d/m/Y", strtotime($arr_list->Approval_plant_date)); ?>
                                    <div><b>วันที่ปฏิเสธ : </b>
                                        <?php echo $newDate;  ?></div><br>
                                    <div> <b>เหตุผลที่ปฏิเสธ : </b>
                                        <?php
                                        echo $arr_list->Reason_reject;
                                        ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
        </div>
    </div>
</div>
    