<!--
    v_licence_form
    display form input
    @input -
    @output -
    @author Jirayut Saifah
    Create 16/7/2564 
    Update date 
-->

<!-- Include Date Range Picker -->

<div class="card">
    <div class="card-header" id="card_radius">

        <h1>
            Request Tag (การขออนุญาตวางของ)
        </h1><br>
        <div class="card-body ">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body ">
                        <form action="<?php echo site_url() . 'Licence_form/Licence_input/insert'; ?>" method="post"
                            enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();" name="licence">

                            <div class="pl-lg-4">
                                <!-- <div class="row">
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
                                            <label class="form-control-label" for="input-username">Expiration Date
                                                (วันที่สิ้นสุด)</label>

                                            <input type="date" name="End_date" class="form-control"
                                                min="<?php echo date('Y-m-d'); ?>" required>
                     
                                        </div>
                                    </div>
                                </div> -->

                                <label class="form-control-label" for="input-username">Date Picker
                                    (วันที่ต้องการวาง)</label>
                                <input type="text" id="date" name="datefilter" class="form-control" value=""
                                    required /><br>

                                <script type="text/javascript">
                                var today = new Date();
                                var dd = String(today.getDate()).padStart(2, '0');
                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                var yyyy = today.getFullYear();


                                $(function() {
                                    $('#date').daterangepicker({
                                        "maxSpan": {
                                            "days": 30
                                        },
                                        "startDate": today,
                                        "endDate": moment().startOf('day').add(30, 'day'),
                                        "minDate": today,
                                        // "maxDate": moment().startOf('day').add(30, 'day'),
                                    }, function(start, end, label) {
                                        console.log(
                                            "New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')"
                                        );
                                    });

                                    $('input[name="datefilter"]').on('apply.daterangepicker', function(ev,
                                        picker) {
                                        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' +
                                            picker.endDate.format('YYYY-MM-DD'));
                                    });

                                    $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev,
                                        picker) {
                                        $(this).val('');
                                    });

                                });
                                </script>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Item
                                                (สิ่งที่ต้องการวาง)</label>
                                            <input type="text" name="Item" class="form-control" minlength="1"
                                                required />
                                            <input type="text" name="Emp_ID" class="form-control"
                                                value="<?php echo $_SESSION['UsEmp_ID'] ?>" hidden>
                                        </div>
                                    </div>
                                    <div class=" col-lg-12 ">
                                        <div class=" form-group">
                                            <label class="form-control-label" for="input-last-name">Reason
                                                (เหตุผลในการวาง)</label>
                                            <input type="text" name="Reason" class="form-control" minlength="1"
                                                required />
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
                                            <input type="text" class="form-control" name="Tell" maxlength="10"
                                                required />
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
                                            <input type="file" name="Plan" class="form-control"
                                                placeholder="Postal code" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">Supervisor
                                                (หัวหน้างาน)</label><br>
                                            <select name="Supervisor" id="Supervisor" required class="form-control">
                                                <option value="">-----------Please select-----------</option>

                                                <?php for ($i = 0; $i < count($obj_supervisor); $i++) { ?>

                                                <?php
                                                    if ($obj_supervisor[$i]->Position_Level > $obj_level[0]->Position_Level) { ?>
                                                <option value="<?php echo $obj_supervisor[$i]->Emp_ID ?>">
                                                    <?php
                                                        // echo $obj_supervisor[$i]->Position_Level;
                                                        // echo $obj_level[0]->Position_Level;
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
                                            <select name="Approve_Plant" id="Approve_Plant" required
                                                class="form-control">
                                                <option value="">-----------Please select-----------</option>
                                                <?php for ($i = 0; $i < count($obj_plan); $i++) { ?>
                                                <option value="<?php echo $obj_plan[$i]->pla_plant_id ?>">
                                                    <?php echo "Plan: " . $obj_plan[$i]->pla_plant_no . "  :  " . $obj_plan[$i]->pla_plant_name . " : " . $obj_plan[$i]->Empname_eng . " " . $obj_plan[$i]->Empsurname_eng ?>
                                                </option>

                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg float-right"
                                id="bt_confirm">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>