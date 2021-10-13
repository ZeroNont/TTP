<?php
/*
* v_62160102
* View Form 
* @input  -
* @output - 
* @author Ponprapai
* @Create Date 2564-10-12
*/
?>
<style>
h1 {
    color: red;
    text-align: center;
}

.BG {
    border: 2px solid DodgerBlue;
    padding: 35px;
    background-color: #f9f9f9;
    background-repeat: no-repeat;
    background-origin: content-box;
}
</style>
<!-- <style> -->
<html>

<body>
    <div class="card">
        <form action="">
            <div class="card-header">
                <div class="BG">
                    <h1>
                        แบบสอบถามข้อมูลส่วนบุคคล
                    </h1>
                    <hr />
                    <div class="card-body">
                        <div class="col-xl-12 order-xl-1">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="prefix" id="label">คำนำหน้า :</label><br>
                                    <select id="input" class="form-control" required>
                                        <option value="1">นาย</option>
                                        <option value="2">นาง</option>
                                        <option value="3">นางสาว</option>
                                    </select>
                                    <!----- select ----->
                                </div>
                            </div>
                            <!-- <row> -->
                            <!-----  คำนำหน้า ----->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label id="label">ชื่อ : </label>
                                    <input type="text" class="form-control " placeholder="ชื่อ" required>
                                </div>
                                <!-----  ชื่อ ----->
                                <div class="col-md-6 mb-3 ">
                                    <label id="label">นามสกุล :</label>
                                    <input type="text" class="form-control" placeholder="นามสกุล" required>
                                </div>
                                <!-----  นามสกุล ----->
                            </div>
                            <!-- <row> -->
                            <div class="row">
                                <div class=" col-md-6 mb-3 ">
                                    <label id="label">วันเกิด :</label>
                                    <input type="date" class="form-control" placeholder="วันเกิด" required>
                                </div>
                                <!-----  วันเกิด ----->
                                <div class="col-md-6 mb-3">
                                    <label id="label">รหัสนิสิต : </label>
                                    <input type="number" class="form-control" placeholder="รหัสนิสิต" required>
                                </div>
                                <!-----  รหัสนิสิต ----->
                            </div>
                            <!-- <row> -->
                            <div class="row">
                                <div class="col-md-6 mb-3 ">
                                    <label id="label">อีเมล :</label>
                                    <input type="email" class="form-control" placeholder="example@email.com" required>
                                </div>
                                <!-----  อีเมล ----->
                                <div class="col-md-6 mb-3 ">
                                    <label id="label">รหัสผ่าน :</label>
                                    <input type="password" class="form-control" placeholder="รหัสผ่าน" required>
                                </div>
                                <!----- รหัสผ่าน ----->
                            </div>
                            <!-- <row> -->
                            <div class="row">
                                <div class="col-md-6 mb-3 ">
                                    <label id="label">สาขา :</label><br>
                                    <select id="input" class="form-control " disabled>
                                        <option value="1">คณะแพทยศาสตร์</option>
                                        <option value="2">คณะพยายาลศาสตร์</option>
                                        <option value="3" selected>คณะวิทยาการสารสนเทศ</option>
                                    </select>
                                    <!----- select ----->
                                </div>
                                <!----- สาขา ----->
                                <div class="col-md-6 mb-3">
                                    <label id="label">นิสิตชั้นปีที่ :</label><br>
                                    <input class="form-control" type="number" size="8" value="3" disabled>
                                </div>
                                <!----- นิสิตชั้นปีที่ ----->
                            </div>
                            <!-- <row>   -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label id="label">ตำแหน่ง :</label><br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="rad"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Team leader</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="rad"
                                                class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio2">Developer</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="rad"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">Quality</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="rad"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">Support</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="rad"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">Planner</label>
                                        </div>
                                    </div>
                                </div>
                                <!-----  ตำแหน่ง ----->
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label id="label">ภาษาที่ถนัด :</label><br>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                checked>
                                            <label class="custom-control-label" for="customCheck1">HTML</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2"
                                                checked>
                                            <label class="custom-control-label" for="customCheck2">CSS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3"
                                                checked>
                                            <label class="custom-control-label" for="customCheck3">MySQL</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4"
                                                checked>
                                            <label class="custom-control-label" for="customCheck4">JS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5"
                                                checked>
                                            <label class="custom-control-label" for="customCheck5">PHP</label>
                                        </div>
                                    </div>
                                </div>
                                <!----- ภาษาที่ถนัด ----->
                            </div>
                        </div>
                    </div>
                    <!-- <card body> -->
                </div>
                <!-- <BG> -->
            </div>
            <!-- <card header> -->
        </form>
        <!-- <form> -->
    </div>
    <!-- <card> -->
</body>
<!-- <body> -->

</html>
<!-- <html> -->