<script>
$(document).ready(function() {
    $("#btn_success").click(function() {
        $("#Modal_approve").hide();
        
    });

});
</script>

<div class="col-xl-12 order-xl-1">
    <div class="card">

        <div class="card-body ">


            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Start Date
                                (วันที่เริ่มต้น)</label>

                            <input type="date" name="Start_date" class="form-control" required
                                value="<?php echo $arr_req->Start_date ?>">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-email">End Date
                                (วันที่สิ้นสุด)</label>
                            <input type="date" name="End_date" class="form-control" required
                                value="<?php echo $arr_req->End_date ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Item
                                (สิ่งที่ต้องการวาง)</label>
                            <input type="text" name="Item" class="form-control" require
                                value="<?php echo $arr_req->Item ?>">
                        </div>
                    </div>
                    <div class=" col-lg-12 ">
                        <div class=" form-group">
                            <label class="form-control-label" for="input-last-name">Reason
                                (เหตุผลในการวาง)</label>
                            <input type="text" name="Reason" class="form-control" require
                                value="<?php echo $arr_req->Reason ?>">
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
                            <input class="form-control" type="text" name="Officer" require
                                value="<?php echo $arr_emp->Empname_th.' '.$arr_emp->Empsurname_th ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-city">Tell No.
                                (เบอร์โทรศัพท์)</label>
                            <input type="text" class="form-control" name="Tell" require
                                value="<?php echo $arr_req->Tell ?>">
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-country">Layout
                                (รูปแบบการวาง)</label>
                            <input type="file" name="Layout" class="form-control" require
                                value="<?php echo $arr_req->Layout_location ?>">
                            <?php echo $arr_req->Layout_location ?>
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

            <div class="row">
                <div class="col-lg-4">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-lg float-right" data-toggle="modal"
                        data-target="#exampleModal_reject">
                        ไม่อนุมัติ
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_reject" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...ldldlld
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-lg float-right" data-toggle="modal"
                        data-target="#Modal_approve">
                        อนุมัติ
                    </button>

                </div>
            </div>


        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="Modal_approve" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" align="center">
                <h1 class="modal-title" id="ModalLabel">ยืนยันการอนุมัติคำขอ</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-lg float-right" data-dismiss="modal">ยกเลิก</button>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-lg float-right" id="btn_success" data-toggle="modal"
                        data-target="#successModal"
                    action="<?php echo site_url() . 'request/ttp_request/update_request_form/'; ?>">
                    ยืนยัน
                </button>
            </div>

        </div>
    </div>
</div>
<!-- end modal -->

<!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body" align="center">
                <h1> อนุมัติคำขอสำเร็จ </h1>
            </div>
            <div class="modal-footer">
                <a href="<?php echo site_url() . 'request/ttp_request/show_request_list/' ?>">
                    <button type="button" class="btn btn-success btn-lg float-right">ตกลง</button>
                </a>               
            </div>
        </div>
    </div>
</div>
<!-- end modal  -->