<!-- 
/*
* v_62160159
* View Form 
* @input  -
* @output - 
* @author Phatchara
* @Create Date 2564-10-12
*/
-->

<style>
    #card_padding {
        padding: 1.5rem;
    }

    .card {
        border-radius: 20px;
    }

    input,
    select {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    #label {
        font-size: 14px;
        line-height: 1.42857;
        color: black;
        font-weight: 400;
        padding-left: 9px;
    }

    .label {
        padding-left: unset;
    }

    .form-control {
        border: 0px;
        border-radius: 0px;
    }

    #input {
        border: 0px;
        border-bottom: 2px solid;
        border-bottom-color: #9055FF;
    }
    
</style>
<!--css-->

<html>
<body>
    <div class="card">
        <!-------------------------------------------------------------- start form ----------------------------------------------------------->
        <form action="#">
            <div class="card-header">
                <h1 style="text-align: center;">แบบสอบถามข้อมูลส่วนบุคคล</h1>
            </div>
            <!----- card header ----->
            <div class="card-body" id="card_padding">
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-2 mb-3">
                            <label for="prefix" id="label">คำนำหน้า :</label><br>
                            <select id="input" class="form-control mt-1" required>
                                <option value="1">นาย</option>
                                <option value="2">นาง</option>
                                <option value="3">นางสาว</option>
                            </select>
                            <!----- select ----->
                        </div>
                        <!----- col คำนำหน้า ----->
                        <div class="form-group col-md-4 mb-3">
                            <label id="label">ชื่อ : </label>
                            <input id="input" type="text" class="form-control mt-1" placeholder="ชื่อ" required>
                        </div>
                        <!----- col ชื่อ ----->
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">นามสกุล :</label>
                            <input type="text" class="form-control mt-1" id="input" placeholder="นามสกุล" required>
                        </div>
                        <!----- col นามสกุล ----->
                    </div>
                    <!----- row 1 ----->
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">วันเกิด :</label>
                            <input id="input" type="date" class="form-control mt-1" placeholder="วันเกิด" required>
                        </div>
                        <!----- col วันเกิด ----->
                        <div class="form-group col-md-4 mb-3">
                            <label id="label">รหัสนิสิต : </label>
                            <input id="input" type="number" class="form-control mt-1" placeholder="รหัสนิสิต" required>
                        </div>
                        <!----- col รหัสนิสิต ----->
                    </div>
                    <!----- row 2 ----->
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">อีเมล :</label>
                            <input id="input" type="email" class="form-control mt-1" placeholder="example@email.com"
                                required>
                        </div>
                        <!----- col อีเมล ----->
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">รหัสผ่าน :</label>
                            <input id="input" type="password" class="form-control mt-1" placeholder="รหัสผ่าน" required>
                        </div>
                        <!----- col รหัสผ่าน ----->
                    </div>
                    <!----- row 3 ----->
                    <br><br>
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">สาขา :</label><br>
                            <select id="input" class="form-control mt-1" disabled>
                                <option value="1">คณะแพทยศาสตร์</option>
                                <option value="2">คณะพยายาลศาสตร์</option>
                                <option value="3" selected>คณะวิทยาการสารสนเทศ</option>
                            </select>
                            <!----- select ----->
                        </div>
                        <!----- col สาขา ----->
                        <div class="form-group col-md-4 mb-3">
                            <label id="label">นิสิตชั้นปีที่ :</label><br>
                            <input id="input" class="form-control mt-1" type="number" size="8" value="3" disabled>
                        </div>
                        <!----- col นิสิตชั้นปีที่ ----->
                    </div>
                    <!----- row 4 ----->
                    <br><br>
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">ตำแหน่ง :</label><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Team leader</label>
                            </div><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"
                                    checked>
                                <label class="custom-control-label" for="customRadio2">Developer</label>
                            </div><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Quality</label>
                            </div><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio4">Support</label>
                            </div><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio5">Planner</label>
                            </div>
                        </div>
                        <!----- col ตำแหน่ง ----->
                        <div class="form-group col-md-6 mb-3">
                            <label id="label">ภาษาที่ถนัด :</label><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">HTML</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                <label class="custom-control-label" for="customCheck2">CSS</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                <label class="custom-control-label" for="customCheck3">MySQL</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                                <label class="custom-control-label" for="customCheck4">JS</label>
                            </div><br>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5" checked>
                                <label class="custom-control-label" for="customCheck5">PHP</label>
                            </div>
                        </div>
                        <!----- col ภาษาที่ถนัด ----->
                    </div>
                    <!----- row 5 ----->
                </div>
                <!----- container ----->
                <br><br>
                <div style="text-align: center;">
                        <button id="submit" class="btn btn-success success"><b>Confirm</b></button>
                </div>
                <!----- button Confirm ----->
            </div>
            <!----- card body ----->
        </form>
        <!----------------------------------------------------------- end form ---------------------------------------------------------------->
    </div>
    <!----- card ----->
</body>
<!----- body ----->

</html>
<!----- html ----->