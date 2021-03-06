<!--
    v_renew_form
    display for add date
    @input Form_ID
    @output date chahnge
    @author Nattakorn
    Create date 2564-07-19
    Update date 2564-07-27
-->
<div class="col-xl-12 order-xl-1">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Renew Tag (แบบฟอร์มขอต่ออายุ)</h3>
                </div>

            </div>
        </div>
        <div class="card-body ">
            <form action="<?php echo site_url() . 'Renewal/Renewal/update_date/'; ?>" method='post'
                enctype="multipart/form-data">

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">

                                <input type="text" class="form-control" name="Form_ID"
                                    value='<?php echo $arr_renew[0]->req_form_id ?>' hidden>
                                <input type="text" class="form-control" name="set_Enddate" id="setStartdate"
                                    value='<?php echo $arr_renew[0]->req_end_date ?>' hidden>
                                <input type="text" class="form-control" name="Form_count"
                                    value='<?php echo $arr_renew[0]->req_form_count ?>' hidden>
                                <input type="text" class="form-control" name="Status"
                                    value='<?php echo $arr_renew[0]->req_status ?>' hidden>
                                <!--อัพเดท/เพิ่มวันขออนุญาตวาง-->
                                <label class="form-control-label" for="input-username">Select Date
                                    (เลือกระยะเวลาวันที่ต้องการต่ออายุ)</label>
                                <input type="text" id="date" name="datefilter" class="form-control" value=""
                                    required /><br>

                                <script type="text/javascript">
                                var setStartdate = document.getElementById("setStartdate").value;
                                var today = new Date();
                                var start_date = new Date(setStartdate);
                                start_date.setDate(start_date.getDate() + 1);
                                var dd = String(today.getDate()).padStart(2, '0');
                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                var yyyy = today.getFullYear();


                                $(function() {
                                    $('#date').daterangepicker({
                                        "maxSpan": {
                                            "days": 30
                                        },
                                        "startDate": start_date,

                                        "endDate": moment().startOf('day').add(30, 'day'),
                                        "minDate": moment().startOf('day').add(1, 'day'),
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

                                <?php
                                $arr_renew[0]->req_end_date = strtotime(date("Y-m-d", strtotime($arr_renew[0]->req_end_date) + 1) . "days");
                                echo  $arr_renew[0]->req_end_date;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Item
                                    (สิ่งที่ต้องการวาง)</label>
                                <input type="text" name="Item" class="form-control"
                                    value='<?php echo $arr_renew[0]->req_item ?>' disabled>
                            </div>
                        </div>
                        <div class=" col-lg-12 ">
                            <div class=" form-group">
                                <label class="form-control-label" for="input-last-name">Reason
                                    (เหตุผลในการวาง)</label>
                                <input type="text" name="Reason" class="form-control"
                                    value='<?php echo $arr_renew[0]->req_reason ?>' disabled>
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
                                    value='<?php echo $arr_supervisor[0]->Empname_th . " " . $arr_supervisor[0]->Empsurname_th ?>'
                                    disabled>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Tel No.
                                    (เบอร์โทรศัพท์)</label>
                                <input type="text" class="form-control" name="Tell"
                                    value='<?php echo $arr_renew[0]->req_tel ?>' disabled>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Layout
                                    (รูปแบบการวาง)

                                    <input type="text" class="form-control" name="Layout"
                                        value='<?php echo $arr_formfile[0]->fil_layout_location ?>' disabled>
                                </label>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Plan
                                    (แผนการวาง)
                                    <input type="text" class="form-control" name="Plan"
                                        value='<?php echo $arr_formfile[0]->fil_plan_location ?>' disabled>
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Supervisor
                                    (หัวหน้างาน)</label><br>
                                <input type="text" class="form-control" name="EMPname"
                                    value='<?php echo $arr_supervisor[0]->Empname_th . " " . $arr_supervisor[0]->Empsurname_th ?>'
                                    disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Approve Plant
                                </label><br>

                                <input type="text" class="form-control" name="Plant"
                                    value='<?php echo $arr_plan[0]->pla_plant_name ?>' disabled>
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