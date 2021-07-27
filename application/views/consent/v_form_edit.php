<h1>
    Edit permission form (แก้ไขแบบฟอร์มการขออนุญาต)
</h1><br>
<div class="col-xl-12 order-xl-1">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Requestd Form ( แบบฟอร์มขออนุญาต )</h3>
                </div>

            </div>
        </div>
        <div class="card-body ">
            <form action="<?php echo site_url() . 'licence_form/licence_input/edit'; ?>" method="post"
                enctype="multipart/form-data">

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Start Date
                                    (วันที่เริ่มต้น)</label>

                                <input type="date" name="Start_date" class="form-control"
                                    min="<?php echo date('Y-m-d'); ?>" require
                                    value="<?php echo $obj_form[0]->Start_date ?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">End Date
                                    (วันที่สิ้นสุด)</label>
                                <input type="date" class="form-control" name="End_date"
                                    min="<?php echo date('Y-m-d'); ?>" require
                                    value="<?php echo $obj_form[0]->End_date ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Item
                                    (สิ่งที่ต้องการวาง)</label>
                                <input type="text" name="Item" class="form-control" require
                                    value="<?php echo $obj_form[0]->Item ?>">
                                <input type="text" name="form" class="form-control" require
                                    value="<?php echo $obj_form[0]->Form_ID ?>" hidden>
                                <input type="text" name="count" class="form-control" require
                                    value="<?php echo $obj_form[0]->Form_count ?>" hidden>
                            </div>
                        </div>
                        <div class=" col-lg-12 ">
                            <div class=" form-group">
                                <label class="form-control-label" for="input-last-name">Reason
                                    (เหตุผลในการวาง)</label>
                                <input type="text" name="Reason" class="form-control" require
                                    value="<?php echo $obj_form[0]->Reason ?>">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Officer in Charge
                                    (ผู้รับผิดชอบ)</label>
                                <input class="form-control" type="text" name="Officer" require
                                    value="<?php echo $obj_form[0]->Officer ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Tell No.
                                    (เบอร์โทรศัพท์)</label>
                                <input type="text" class="form-control" name="Tell" require
                                    value="<?php echo $obj_form[0]->Tell ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Company
                                    (บริษัท)</label><br>
                                <select name="Company_ID" id="company" class="form-select"
                                    aria-label="Default select example">
                                    <option value="<?php echo $obj_com[0]->Company_ID ?>">
                                        <?php echo $obj_com[0]->Company_name ?></option>
                                    <?php for ($i = 0; $i < count($obj_company); $i++) {
                                        if ($obj_company[$i]->Company_ID != $obj_com[0]->Company_ID) { ?>
                                    <option value="<?php echo $obj_company[$i]->Company_ID ?>">
                                        <?php echo $obj_company[$i]->Company_name ?></option>
                                    <?php }
                                    } ?>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Layout
                                    (รูปแบบการวาง)</label>
                                <input type="file" name="Layout" class="form-control"
                                    value="<?php echo $obj_file[0]->Layout_location ?>">
                                <a id="download_link" download="Layout"
                                    href="http://localhost/TTP/assets/file/layout/<?php echo $obj_file[0]->Layout_location ?>">Download
                                    Layout
                                    File</a>



                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Plan
                                    (แผนการวาง)</label>
                                <input type="file" name="Plan" class="form-control"
                                    value="<?php echo $obj_file[0]->Plan_location ?>">
                                <a id="download" download="Plan"
                                    href="http://localhost/TTP/assets/file/plan/<?php echo $obj_file[0]->Plan_location ?>">Download
                                    Plan File</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Supervisor
                                    (หัวหน้างาน)</label><br>
                                <select name="Supervisor" id="Supervisor" class="form-select"
                                    aria-label="Default select example">
                                    <option value="<?php echo $obj_sup[0]->Emp_ID ?>"><?php
                                                                                        echo $obj_sup[0]->Empname_th . " " . $obj_sup[0]->Empsurname_th;

                                                                                        ?></option>
                                    <?php for ($i = 0; $i < count($obj_supervisor); $i++) {
                                        if ($obj_supervisor[$i]->Position_Level > $obj_level[0]->Position_Level and $obj_sup[0]->Emp_ID != $obj_supervisor[$i]->Emp_ID) { ?>
                                    <option value="<?php echo $obj_supervisor[$i]->Emp_ID ?>">
                                        <?php echo $obj_supervisor[$i]->Empname_th . " " . $obj_supervisor[$i]->Empsurname_th ?>
                                    </option>
                                    <?php }
                                    } ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Approve Plant
                                </label><br>
                                <select name="Approve_Plant" id="Approve_Plant" class="form-select"
                                    aria-label="Default select example">
                                    <option value="<?php echo $obj_app[0]->Emp_ID ?>">
                                        <?php echo "Plan: " . $obj_app[0]->Plant_No . "  :  " . $obj_app[0]->Plant_name . " : " . $obj_app[0]->Empname_th . " " . $obj_app[0]->Empsurname_th ?>
                                    </option>
                                    <?php for ($i = 0; $i < count($obj_plan); $i++) {
                                        if ($obj_plan[$i]->Plant_ID != $obj_app[0]->Plant_ID) {
                                    ?>
                                    <option value="<?php echo $obj_plan[$i]->Emp_ID ?>">
                                        <?php echo "Plan: " . $obj_plan[$i]->Plant_No . "  :  " . $obj_plan[$i]->Plant_name . " : " . $obj_plan[$i]->Empname_th . " " . $obj_plan[$i]->Empsurname_th ?>
                                    </option>

                                    <?php }
                                    } ?>

                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg float-right">Confirm</button>
            </form>
        </div>
    </div>
</div>
</div>