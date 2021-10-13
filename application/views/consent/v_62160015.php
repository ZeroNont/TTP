<!--
/*
* v_62160015
* หน้าจอแบบสอบถามข้อมูลส่วนบุคคล
* @input  -
* @output -
* @author pontakon 
* @Create Date 2564-10-13
*/ --> 

<div class ="container ">
<div class="card" >
    
<div class ="container ">
<h1> HTML 4.1 : 14 points </h1>
<div class ="container">
- คำนำหน้า มีตัวเลือกคือ นาย นาง และนางสาว <br> - ชื่อจริง และนามสกุล บันทึกข้อมูลได้มากสุด 5 ตัวอักษร<br> - วันเกิดใช้เป็นแบบปฏิทิน <br> - รหัสนิสิตบันทึกได้แค่ตัวเลขเท่านั้น <br> - รหัสผ่าน เมื่อบันทึกจะเห็นข้อความเป็นจุดกลมดำ <br> - อีเมล บังคับผู้ใช้ให้บันทึกในรูปแบบอีเมล
<br> - สาขามีตัวเลือกเป็น คณะแพทยศาสตร์ คณะพยายาลศาสตร์ และคณะวิทยาการสารสนเทศ ตามลำดับ โดยเลือกคณะวิทยาการสารสนเทศเป็นค่าเริ่มต้น และไม่สามารถเปลี่ยนแปลงค่าได้ <br> - นิสิตชั้นปีที่ ให้กำหนดค่าเริ่มต้นเป็น 3 และเปลี่ยนแปลงค่าไม่ได้ <br> - ตำแหน่งประกอบด้วย
Team leader, Developer, Quality, Support ชนิดเลือกได้รายการเดียว และเลือก Developer เป็นค่าเริ่มต้น <br> - ภาษาที่ถนัด ประกอบด้วย HTML, CSS, MySQL, JS, PHP ชนิดเลือกได้หลายรายการ โดยเลือกทุกภาษาเป็นค่าเริ่มต้น 
</div></div>
<!-- Coding html 4.1 here!!!! -->
<div class ="container ">
<h1>แบบสอบถามข้อมูลส่วนบุคคล</h1>
<hr>
<form>
<div class ="container">
<div class ="row" >
<div class="form-group col-md-2" >
      คำนำหน้า
    <select name="nun" id="nun">
        <option value="3">นาย</option>
        <option value="2">นาง</option>
        <option value="1">นางสาว</option>
      </select>
</div></div>
<div class ="row" >

      <div class="form-group col-md-4" >
      ชื่อจริง <br>
    <input type="text" required> 
</div> <div class="form-group col-md-4" >นามสกุล  <br><input type="text" required> </div> </div>
<div class ="row" >
<div class="form-group col-md-4" >
    วันเกิด <br>
    <input type="date"> </div>
    <div class="form-group col-md-4" >
     รหัสนิสิต <br>
    <input type="number" required> </div></div>
    <div class ="row" ><div class="form-group col-md-4" >
     รหัสผ่าน <br>
    <input type="password" required> </div> 
    <div class="form-group col-md-4" >
     อีเมล <br>
    <input type="email" placeholder='example@gmail.com'></div></div>

    <br>
    <hr>
    <div class ="row" ><div class="form-group col-md-4" >
    สาขา<br>
    <select name="nun" id="nun" disabled>
        <option value="3">คณะแพทยศาสตร์</option>  
        <option value="2">คณะพยายาลศาสตร์</option>
        <option value="1" selected>คณะวิทยาการสารสนเทศ</option>
      </select>
      </div><div class="form-group col-md-4" >
    นิสิตชั้นปีที่<br>
    <input type="text" value="3" disabled> </div></div>
    
    <div class ="row" >
    <div class="form-group col-md-4 " >
    ตำแหน่ง<br>
    <input type="radio" name="go" required>Team leader </input><br>
    <input type="radio" name="go" checked required>Developer</input><br>
    <input type="radio" name="go" required>Quality</input><br>
    <input type="radio" name="go" required>Support</input><br>
    
    </div><div class="form-group col-md-4 " >
    ภาษาที่ถนัด <br>
    <input type="checkbox" checked required>HTML <br>
    <input type="checkbox" checked required>CSS<br>
    <input type="checkbox" checked required>MySQL<br>
    <input type="checkbox" checked required>JS<br>
    <input type="checkbox" checked required>PHP<br>
    </div></div>
    </div></div>
</form>

</div>
<!-- Coding html 4.1 here!!!! -->