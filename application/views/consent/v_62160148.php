<!-- 
/*
* v_62160148
* Display Form v_62160148
* @input  -
* @output - 
* @author Chakrit Boonprasert
* @Create Date 13-10-2564
*/
-->

<style>
    h1 {
        text-align: center;
    }
</style>
<!-- End style -->

<!-- html -->
<html>

<body>
    <!-- body -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>
                    แบบสอบถามข้อมูลส่วนบุคคล
                </h1>
                <!-- h1 -->
            </div>
            <!-- card header -->
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="prefix">คำนำหน้า</label><br>
                                <select id="input" class="form-control" name="form" required>
                                    <option value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                </select>
                                <!-- select -->
                            </div>
                        </div>
                        <!-- col คำนำหน้า -->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-control-label" for="fname">ชื่อจริง</label>
                                <input type="text" name="fname" maxlength="5" class="form-control" required>
                            </div>
                        </div>
                        <!-- col ชื่อจริง -->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-control-label" for="lname">นามสกุล</label>
                                <input type="text" name="lname" maxlength="5" class="form-control" required>
                            </div>
                        </div>
                        <!-- col นามสกุล -->
                    </div>
                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="bday">วันเกิด</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <!-- col วันเกิด -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="std_id">รหัสนิสิต</label>
                                <input type="number" size="8" class="form-control" required>
                            </div>
                        </div>
                        <!-- col รหัสนิสิต -->
                    </div>
                    <!-- row 2 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">อีเมล</label>
                                <input type="email" placeholder="example@gmail.com" class="form-control" required>
                            </div>
                        </div>
                        <!-- col อีเมล -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="pass">รหัสผ่าน</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>
                        <!-- col รหัสผ่าน -->
                    </div>
                    <!-- row 3 -->
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="department">สาขา</label>
                                <select class="form-control" disabled>
                                    <option value="1">คณะแพทยศาสตร์</option>
                                    <option value="2">คณะพยายาลศาสตร์</option>
                                    <option value="3" selected>คณะวิทยาการสารสนเทศ</option>
                                </select>
                                <!-- select -->
                            </div>
                        </div>
                        <!-- col สาขา -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="year_class">นิสิตชั้นปีที่</label>
                                <input type="number" size="8" value="3" class="form-control" disabled>
                            </div>
                        </div>
                        <!-- col นิสิตชั้นปีที่ -->
                    </div>
                    <!-- row 4 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="position">ตำแหน่ง</label><br>
                                <input type="radio" required>
                                <label for="TL">Team leader</label><br>
                                <input type="radio" checked required>
                                <label for="Dev">Developer</label><br>
                                <input type="radio" required>
                                <label for="QA">Quality</label><br>
                                <input type="radio" required>
                                <label for="Sup">Support</label><br>
                                <input type="radio" required>
                                <label for="Plan">Planner</label><br>
                            </div>
                        </div>
                        <!-- col ตำแหน่ง -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="lang">ภาษาที่ถนัด</label><br>
                                <input type="checkbox" checked required>
                                <label for="HTML">HTML</label><br>
                                <input type="checkbox" checked required>
                                <label for="CSS">CSS</label><br>
                                <input type="checkbox" checked required>
                                <label for="MySQL">MySQL</label><br>
                                <input type="checkbox" checked required>
                                <label for="JS">JS</label><br>
                                <input type="checkbox" checked required>
                                <label for="PHP">PHP</label><br>
                            </div>
                        </div>
                        <!-- col ภาษาที่ถนัด -->
                    </div>
                    <!-- row 5 -->
                </form>
                <!-- form -->
            </div>
            <!-- card body -->
        </div>
        <!-- card -->
    </div>
    <!-- container -->
</body>
<!-- body -->

</html>
<!-- html -->