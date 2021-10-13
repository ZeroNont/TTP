<!--
/*
* v_62160083
* Display View Form
* @input  -
* @output -
* @author Natthanit Ploempool
* @Create Date 2564-10-13
*/
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .container {
        padding-left: 5%;
        padding-right: 5%;
        background-color: #CCDDEF
    }
</style>
<!-- Coding html 4.1 here!!!! -->

<html>
<body style="background-color:#F7D7C1">

    <form action="">
        <br>
        <h1>
            <center><br>แบบสอบถามข้อมูลส่วนบุคคล</center>
        </h1>
        <div class="container">

			<!-- คำนำหน้า -->
            <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">คำนำหน้า</label>
                <select class="form-control" id="exampleFormControlSelect1">
                          <option>นาย</option>
                          <option>นาง</option>
                          <option>นางสาว</option>

                        </select>

            </div>
            <div class="form-row">
				<!-- ชื่อ -->
                <div class="col">
                    <label for="exampleFormControlSelect1">ชื่อ</label>
                    <input type="text" class="form-control" placeholder="ชื่อ" required>
                </div>
				<!-- นามสกุล -->
                <div class="col">
                    <label for="exampleFormControlSelect1">นามสกุล</label>
                    <input type="text" class="form-control" placeholder="นามสกุล" required>
                </div>
            </div><br>
            <div class="form-row">

                <div class="col-md-3">
                    <label for="exampleFormControlSelect1">วันเกิด</label>
                    <input type="date" class="form-control" placeholder="วันเกิด" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="exampleFormControlSelect1">รหัสนิสิต</label>
                    <input type="text" class="form-control" placeholder="รหัสนิสิต" required>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">รหัสผ่าน</label>
                    <input type="password" class="form-control" placeholder="รหัสผ่าน" required>
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" required>

            </div>
            <br><br>
            <hr>
            <br>
            <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">สาขา</label>
                <select class="form-control" id="cars" disabled>
                            <option value="1">คณะแพทยศาสตร์</option>
                            <option value="2">คณะพยายาลศาสตร์</option>
                            <option value="3" selected>คณะวิทยาการสารสนเทศ</option>

                        </select>

            </div>

            <br>
            <br>
            <div class="col-md-3">
                <label for="exampleFormControlSelect1">นิสิตชั้นปีที่</label>
                <input type="number" size="8" value="3" class="form-control" disabled>
            </div>



            <br><br>ตำแหน่ง<br>
            <input type="radio" required>Team leader<br>
            <input type="radio" checked required>Developer<br>
            <input type="radio" required>Quality<br>
            <input type="radio" required>Support<br>
            <input type="radio" required>Planner
            <br><br>ภาษาที่ถนัด<br>
            <input type="checkbox" checked required>HTML<br>
            <input type="checkbox" checked required>CSS<br>
            <input type="checkbox" checked required>MySQL<br>
            <input type="checkbox" checked required>JS<br>
            <input type="checkbox" checked required>PHP<br>
    </form>
    </div>
</body>
<!-- Coding html 4.1 here!!!! -->
</html>
