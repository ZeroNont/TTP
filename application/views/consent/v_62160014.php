<!-- HTML 62160014
* Display show form
* @input data -
* @output  -
* @author Nattakorn Noikerd
* @Create Date 13/10/2021 -->
<!-- Coding html 4.1 here!!!! -->

<style>
body {
    background-color: palegoldenrod;
    font-family: 'Courier New', Courier, monospace;
}

div.card-header {
    text-align: center;
    background: burlywood;
}

div.card-body {
    border-radius: 10px;
    background: #ffffff;
    margin: 25px 50px 75px 100px;
    text-align: center;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
}

.in:hover {
    background-color: lightsteelblue;
    border: 1px solid black;
}
</style>

<script>
</script>

<body>
    <div class="card">

        <div class="card-header" id="card-radius">
            <div class="row">
                <div class="col-md-8"><br>

                    <h1>แบบสอบถามข้อมูลส่วนบุคคล </h1>
                    <br>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form>

                คำนำหน้า <select required>
                    <option>นาย</option>
                    <option>นางสาว</option>
                    <option>นาง</option>
                </select> ชื่อจริง
                <input class="in" type="text" maxlength="5" class="form-control" required> นามสกุล
                <input class="in" type="text" maxlength="5" class="form-control" required>
                <br>
                <br> รหัสผ่าน
                <input class="in" type="password" required> อีเมล์
                <input class="in" type="email" required> วันเกิด
                <input type="date" required><br>
                <br> รหัสนิสิต
                <input class="in" type="number" required> สาขา
                <select id="คณะวิทยาการสารสนเทศ" disabled>
                    <option>คณะแพทยศาสตร์</option>
                    <option>คณะพยายาลศาสตร์</option>
                    <option selected="selected">คณะวิทยาการสารสนเทศ</option>
                </select> นิสิตชั้นปีที่ <input type="text" value="3" disabled>
                <br>
                <center>
                    <table>
                        <th>
                            <br><br> ตำแหน่ง <br>
                            <input type="radio" id="Team leader" name="Team leader" value="Team leader" required><label
                                for="Team leader">Team leader</label><br>
                            <input type="radio" id="Developer" name="Developer" value="Developer" checked
                                required><label for="Developer">Developer</label><br>
                            <input type="radio" id="Quality" name="Quality" value="Quality" required><label
                                for="Quality">Quality</label><br>
                            <input type="radio" id="Support" name="Support" value="Support" required><label
                                for="Support">Support</label><br>
                            <br><br>
                        </th>
                        <th>
                            <br> ภาษาที่ถนัด
                            <br>
                            <input type="checkbox" checked required>Html<br>
                            <input type="checkbox" checked required>CSS<br>
                            <input type="checkbox" checked required>MySQL<br>
                            <input type="checkbox" checked required>Js<br>
                            <input type="checkbox" checked required>PHP<br>
                        </th>
                    </table>
                </center>
            </form>
        </div>
    </div>
    </div>
</body>
<!-- Coding html 4.1 here!!!! -->