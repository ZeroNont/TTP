<style>

    table, th, td {
        /* margin-left : 40px; */
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
    }

</style> 
    
    <!-- Card Detail form -->
    <div class="col-xl-12 order-xl-1">
    <div class="card">
    <span><img src= <?php echo base_url()?>assets/img/Logo.jfif width="150" height="150" >
    <img src= <?php echo base_url()?>assets/img/HR.png width="150" height="150"   align="right"   ></span>
    
<br>
        <div class="card-body ">
            <form action="<?php echo site_url() . 'licence_form/licence_input/insert'; ?>" method="post"
                enctype="multipart/form-data">

                <div class="pl-lg-4">
                <center><h1>ป้ายอนุมัติวางของชั่วคราว</h1><br>
                                <h1>(Permission of Temporary Tag)</h1></center>
                    <div class="row">
                    
                        <div class="col-lg-6">
                            <div class="form-group">
                            
                                <label class="form-control-label" for="input-username">หมายเลขเอกสาร
                                    (Running No.)</label>

                                    <input type="text" name="Start_date" class="form-control" required value="<?php //echo  ?>" disabled>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">แผนก
                                    (Department)</label>
                                    <input type="text" name="End_date" class="form-control" required value="<?php  //echo ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">ผู้รับผิดชอบ
                                    (Responsibility)</label>
                                <input type="text" name="Item" class="form-control" require value="<?php  //echo ?>" disabled>
                            </div>
                        </div>
                        <div class=" col-lg-6 ">
                            <div class=" form-group">
                                <label class="form-control-label" for="input-last-name">เบอร์ติดต่อ
                                    (Ext./Mobile Phone)</label>
                                <input type="text" name="Reason" class="form-control" require value="<?php //echo ?>" disabled> 
                            </div>
                        </div>
                    </div>
                    
                </div>


                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">ชื่อ อุปกรณ์
                                    (Equipment name)</label>
                                <input class="form-control" type="text" name="Officer" require value="<?php //echo ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">เหตุผลในการวาง
                                    (The reason in putting)</label>
                                <input type="text" class="form-control" name="Tell" require value="<?php //echo ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">วันที่เริ่มวาง
                                    (Starting Date)</label>

                                    <input type="date" name="Start_date" class="form-control" required value="<?php //echo ?>" disabled>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">วันที่สิ้นสุด
                                    (End Date)</label>
                                    <input type="date" name="End_date" class="form-control" required value="<?php //echo  ?>" disabled>
                            </div>
                        </div>
                    </div>

                
                <table style="width:100%">

                    <tr>
                        <th>จำนวนครั้งที่วางเอกสาร <br>No.</th>
                        <th>Prepare by </th>
                        <th>Checked#1 <br>(MGR Above) </th> 
                        <th>Checked#2 <br>(5S Center) </th>
                        <th>Approved by <br>(5S Leader) </th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </table>
              
            </form>
        </div>
    </div>
</div>
</div>