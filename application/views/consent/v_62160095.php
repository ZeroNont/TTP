<!--html_62160095
* Display show form
* @input data
* @output  -
* @author Niphat Kuhokciw
* @Create Date 2564-10-12 -->
<!--------------------------------------------             Head          ----------------------------------------------------------------------->

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!---------------------------    Style       -------------------------------------->
    <style>
        div.card-body {
            border-radius: 10px;
            background: #ffffff;
            margin: 25px 50px 75px 100px;
            text-align: left;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
        }
        
        div.card {
            background: #ffcdd2;
        }
        
        div.card-header {
            background:  #e57373;
            color: #000000;
            align-items: center;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <!---------------------------    Style       -------------------------------------->
</head>
<!--------------------------------------------             Head          ----------------------------------------------------------------------->
<!-----------------------------------------------------             Body     -------------------------------------------------------------------------------------->

<body>
    <!--------------------------------------------             Card            ----------------------------------------------------------------------->
    <div class="card">

        <!----------------------      Card Header     ----------------------------------->
        <div class="card-header" id="card_radius">
        <font color="#F0FFFF" size="7">แบบสอบถามข้อมูลส่วนบุคคล</font>
        </div>
        <!----------------------      Card Header     ----------------------------------->

        <!-------------------------------------------             Card Body       -------------------------------------------------------------------------->
        <div class="card-body">
            <!-------------------------------------------             Form       -------------------------------------------------------------------------->
            <form>
                <!-----------------------------------       Select NameTitle    ------------------------------------------------->
                คำนำหน้า <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="คำนำหน้า" required>
                        <option value="ชาย">นาย</option>
                        <option value="หญิง">นาง</option>
                        <option value="ชาย">นางสาว</option>
                    </select>
                <!-----------------------------------      Select NameTitle    ------------------------------------------------->
                <br><br>
                <!-----------------------------------      Card Fristname Lastname    ------------------------------------------------->
                <div class="form-row">
                    <div class="col">
                        ชื่อจริง<input name="frisname" type="text" class="form-control" placeholder="ชื่อ" maxlength="5" required>
                    </div>
                    <div class="col">
                        นามสกุล<input name="lastname" type="text" class="form-control" placeholder="นามสกุล" maxlength="5" required>
                    </div>
                </div>
                <!-----------------------------------      Card Fristname Lastname    ------------------------------------------------->
                <br>
                <!-----------------------------------       Birthday    ------------------------------------------------->
                วันเกิด <input type="date" name="birthday" class="form-control col-3" required>
                <!-----------------------------------       Birthday    ------------------------------------------------->
                <br>
                <!-----------------------------------       Student ID   ------------------------------------------------->
                รหัสนิสิต <input type="number" name="myid" class="form-control col-3" required>
                <!-----------------------------------       Student ID   ------------------------------------------------->
                <br>
                <!-----------------------------------       Password   ------------------------------------------------->
                รหัสผ่าน <input type="password" name="mypass" class="form-control col-3" required>
                <!-----------------------------------       Password   ------------------------------------------------->
                <br>
                <!-----------------------------------       Email   ------------------------------------------------->
                อีเมล <input type="email" name="myemail" placeholder="example@gmail.com" class="form-control col-3" required>
                <!-----------------------------------       Email   ------------------------------------------------->
                <br>
                <hr>
                <br>
                <!-----------------------------------       Select Branch    ------------------------------------------------->
                สาขา <select class="custom-select my-1 mr-sm-2 " id="inlineFormCustomSelectPref" name="สาขา" disabled required>
                <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                <option value="คณะพยายาลศาสตร์">คณะพยายาลศาสตร์</option>
                <option value="คณะวิทยาการสารสนเทศ" selected>คณะวิทยาการสารสนเทศ</option>
                </select>
                <!-----------------------------------       Select Branch    ------------------------------------------------->
                <br><br>
                <!-----------------------------------       Year Class   ------------------------------------------------->
                นิสิตชั้นปีที่ <input type="number" name="number" id="number" value="3" class="form-control col-3" required disabled>
                <!-----------------------------------       Year Class   ------------------------------------------------->
                <br>
                <!-----------------------------------      Position   ------------------------------------------------->
                ตำแหน่ง<br>
                <div class="custom-control custom-radio">
                    <input type="radio" name="Teamleader">Team Leader<br>
                    <input type="radio" name="Developer" checked>Developer<br>
                    <input type="radio" name="Quality">Quality<br>
                    <input type="radio" name="Support">Support<br>
                </div>
                <!-----------------------------------      Position   ------------------------------------------------->
                <br>
                <!-----------------------------------      Language Skills  ------------------------------------------------->
                ภาษาที่ถนัด<br>
                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" name="HTML" checked>HTML<br>
                    <input type="checkbox" name="CSS" checked>CSS<br>
                    <input type="checkbox" name="MySQL" checked>MySQL<br>
                    <input type="checkbox" name="JS" checked>JS<br>
                    <input type="checkbox" name="PHP" checked>PHP<br>
                </div>
                <!-----------------------------------      Language Skills  ------------------------------------------------->
            </form>
            <!-------------------------------------------             Form       -------------------------------------------------------------------------->
        </div>
        <!-------------------------------------------             Card Body       -------------------------------------------------------------------------->
    </div>
    <!--------------------------------------------             Card            ----------------------------------------------------------------------->
</body>
<!-----------------------------------------------------             Body     --------------------------------------------------------------------------------------->