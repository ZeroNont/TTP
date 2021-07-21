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

                                    <input type="date" name="Start_date" class="form-control" required value="<?php echo $arr_req->Start_date ?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">End Date
                                    (วันที่สิ้นสุด)</label>
                                    <input type="date" name="End_date" class="form-control" required value="<?php echo $arr_req->End_date ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Item
                                    (สิ่งที่ต้องการวาง)</label>
                                <input type="text" name="Item" class="form-control" require value="<?php echo $arr_req->Item ?>">
                            </div>
                        </div>
                        <div class=" col-lg-12 ">
                            <div class=" form-group">
                                <label class="form-control-label" for="input-last-name">Reason
                                    (เหตุผลในการวาง)</label>
                                <input type="text" name="Reason" class="form-control" require value="<?php echo $arr_req->Reason ?>">
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
                                <input class="form-control" type="text" name="Officer" require value="<?php echo $arr_req->Supervisor ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Tell No.
                                    (เบอร์โทรศัพท์)</label>
                                <input type="text" class="form-control" name="Tell" require value="<?php echo $arr_req->Tell ?>">
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

                <div class="row">
                    <div class="col-lg-4">

                        <button type="submit" class="btn btn-danger btn-lg float-right">ไม่อนุมัติ</button>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success btn-lg float-right">อนุมัติ</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>