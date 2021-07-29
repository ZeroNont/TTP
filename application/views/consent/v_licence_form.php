<h1>
    Permission to Place (การขออนุญาตวางของ)
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
            <form action="<?php echo site_url() . 'Licence_form/Licence_input/insert'; ?>" method="post"
                enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();" name="licence">

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Start Date
                                    (วันที่เริ่มต้น)</label>

                                <input type="date" name="Start_date" class="form-control"
                                    min="<?php echo date('Y-m-d'); ?>" required>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">

                                <!--อัพเดท/เพิ่มวันขออนุญาตวาง-->
                                <label class="form-control-label" for="input-email">Number of Date
                                    (จำนวนวันที่ต้องการวาง)
                                    <select class="form-control" name="End_date" style="text-align:center" required><br>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>

                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Item
                                    (สิ่งที่ต้องการวาง)</label>
                                <input type="text" name="Item" class="form-control" minlength="1" required />
                                <input type="text" name="Emp_ID" class="form-control"
                                    value="<?php echo $_SESSION['UsEmp_ID'] ?>" hidden>
                            </div>
                        </div>
                        <div class=" col-lg-12 ">
                            <div class=" form-group">
                                <label class="form-control-label" for="input-last-name">Reason
                                    (เหตุผลในการวาง)</label>
                                <input type="text" name="Reason" class="form-control" minlength="1" required />
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
                                <input class="form-control" type="text" name="Officer"
                                    value="<?php echo $detail[0]->Empname_eng . ' ' . $detail[0]->Empsurname_eng ?>"
                                    disabled />
                                <input class="form-control" type="text" name="Officer"
                                    value="<?php echo $detail[0]->Emp_ID ?>" hidden />
                            </div>
                        </div>
                        <div class=" col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Tel No.
                                    (เบอร์โทรศัพท์)</label>
                                <input type="text" class="form-control" name="Tell" maxlength="10" required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Company
                                    (บริษัท)</label>
                                <input type="text" class="form-control"
                                    value="<?php echo $detail[0]->Company_name . ' (' . $detail[0]->Company_name_th . ')' ?>"
                                    disabled />
                                <input type="text" class="form-control" name="Company_ID"
                                    value="<?php echo $detail[0]->Company_ID ?>" hidden />
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Layout
                                    (รูปแบบการวาง)</label>
                                <input type="file" name="Layout" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Plan
                                    (แผนการวาง)</label>
                                <input type="file" name="Plan" class="form-control" placeholder="Postal code"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Supervisor
                                    (หัวหน้างาน)</label><br>
                                <select name="Supervisor" id="Supervisor" class="form-select"
                                    aria-label="Default select example" required>
                                    <option value="0">-----------Please select-----------</option>
                                    <?php for ($i = 0; $i < count($obj_supervisor); $i++) { ?>

                                    <?php
                                        if ($obj_supervisor[$i]->Position_Level > $obj_level[0]->Position_Level) { ?>
                                    <option value="<?php echo $obj_supervisor[$i]->Emp_ID ?>">
                                        <?php
                                            echo $obj_supervisor[$i]->Empname_eng . " " . $obj_supervisor[$i]->Empsurname_eng;
                                        }
                                            ?>
                                    </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Approve Plant
                                </label><br>
                                <select name="Approve_Plant" id="Approve_Plant" class="form-select"
                                    aria-label="Default select example" required>
                                    <option value="0">-------------------------Please
                                        select-------------------------
                                    </option>
                                    <?php for ($i = 0; $i < count($obj_plan); $i++) { ?>
                                    <option value="<?php echo $obj_plan[$i]->Emp_ID ?>">
                                        <?php echo "Plan: " . $obj_plan[$i]->Plant_No . "  :  " . $obj_plan[$i]->Plant_name . " : " . $obj_plan[$i]->Empname_eng . " " . $obj_plan[$i]->Empsurname_eng ?>
                                    </option>

                                    <?php } ?>

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