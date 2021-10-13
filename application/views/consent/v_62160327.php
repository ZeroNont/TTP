<!-- 
  v_62160327
  Display1 form
  @input    -
  @output   -
  @author   Thitim Popila
  @Create Date 2564-10-13
  @Update Date 
-->
<style>
.card {
    background: white;
    width: 100%;
}
header {
  text-align: center;
}
.row{
    margin-left: 30px;
}
#btn_submit{
    background-color: green;
    color: white;
    border: 2px solid #4CAF50;
    border-radius: 8px;
}
#btn_cancel{
    background-color: red;
    color: white;
    border: 2px solid #f44336;
    border-radius: 8px;
}
</style>

<html>
    <body>
    <!-- body -->
        <div class="container">
            <div class="card">
                <div class="container">
                        <header>
                            <br>
                            <h1>แบบสอบถามข้อมูลส่วนบุคคล</h1>                                
                            <!-- h1 -->
                            <hr>
                        </header>
                        <!-- header -->
                    
                        <!-- *************************************************************** -->
                    
                        <div class="container">
                            <div class="row"></div>
                            <!-- row -->
                            <div class="row">
                                <hr>
                                <div class="col-3">
                                    <label for="">คำนำหน้า</label>
                                    <br>
                                    <select name="" id="" require>
                                        <option value="">นาย</option>
                                        <option value="">นาง</option>
                                        <option value="">นางสาว</option>
                                    </select>
                                    <!-- select -->
                                </div>
                                <!-- col -->
                                <div class="col-3">
                                    <label for="">ชื่อจริง</label>
                                    <br>
                                    <input type="text" maxlength="5" require>
                                </div>
                                <!-- col first name -->
                                <div class="col-6">
                                    <label for="">นามสกุล</label>
                                    <br>
                                    <input type="text" maxlength="5" require>
                                </div>
                                <!-- col last name-->  
                            </div>
                            <!-- row 1 -->
            
                            <div class="row">
                                <div class="col-3">
                                    <label for="">วันเกิด</label>
                                    <br>    
                                    <input type="date" require>
                                </div>
                                <!-- col birth date -->
                                <div class="col-3">
                                    <label for="">รหัสนิสิต</label>
                                    <br>
                                    <input type="number" require>
                                </div>
                                <!-- col student id -->
                                <div class="col-6">
                                    <label for="">รหัสผ่าน</label>
                                    <br>
                                    <input type="password" require>
                                </div>
                                <!-- col password -->
                            </div>
                            <!-- row 2 -->
                               
                            <div class="row">
                                <div class="col-3">
                                    <label for="">อีเมลล์</label>
                                    <br>
                                    <input type="email" placeholder="example@email.com" require>
                                </div>
                                <!-- col email-->
                                <div class="col-3">
                                    <label for="">สาขา</label>
                                    <br>
                                        <select name="" id="" disabled>
                                            <option value="">คณะแพทยศาสตร์</option>
                                            <option value="">คณะพยายาลศาสตร์</option>
                                            <option value="" selected>คณะวิทยาการสารสนเทศ</option>
                                        </select>
                                        <!-- select -->
                                </div>
                                <!-- col faculty-->
                                <div class="col-6">
                                    <label for="">นิสิตชั้นปีที่</label>    
                                    <br>
                                    <input type="text" value="3" disabled>
                                </div>
                                <!-- col calss-->
                            </div>
                            <!-- row 3-->

                            <div class="row">
                                <div class="col-6">
                                    <label for="">ตำแหน่ง</label>
                                    <br>
                                    <input type="radio" name="position"> Team Leader
                                    <br>
                                    <input type="radio" name="position" checked>Developer
                                    <br>
                                    <input type="radio" name="position">Quality
                                    <br>
                                    <input type="radio" name="position">Support
                                </div>
                                <!-- col -->
                                <div class="col-6">
                                    <label for="">ภาษาที่ถนัด</label>
                                    <br>
                                    <input type="checkbox" checked>HTML
                                    <br>
                                    <input type="checkbox" checked>CSS
                                    <br>
                                    <input type="checkbox" checked>MySQL
                                    <br>
                                    <input type="checkbox" checked>JS
                                    <br>
                                    <input type="checkbox" checked>PHP
                                </div>
                                <!-- col calss-->
                            </div>
                            <!-- row 4-->
                        </div>
                        <!-- container -->

                        <!-- *************************************************************** -->

                        <footer>
                            <div class="row">
                                <br>
                            </div>
                            <!-- row blank -->
                            <div class="row">
                                <div class="col-10"></div>
                                <!-- col -->
                                <div class="col-1">
                                    <button id="btn_cancel">ยกเลิก</button>
                                </div>
                                <!-- col -->
                                <div class="col-1">
                                    <button id="btn_submit">ส่ง</button>
                                </div>
                                <!-- col -->
                            </div>
                            <!-- row -->
                            <br>
                        </footer>
                        <!-- footer -->
                </div>
                <!-- container -->
            </div>
            <!-- card -->
        </div>
        <!-- container -->
    </body>
    <!-- body -->
</html>
<!-- html -->