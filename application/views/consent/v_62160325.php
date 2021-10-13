<!--html_62160325
* Display show form
* @input data
* @output  -
* @author Jaraspon Seallo
* @Create Date 2564-10-12 -->
<!DOCTYPE html>
<!-----------------------------------------------------             html     --------------------------------------------------------------------------------------->
<html lang="en">
<!-----------------------------------------------------             Head          ---------------------------------------------------------------------------------->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบสอบถามข้อมูลส่วนบุคคล</title>
    <!-------------------------------------------------             Style          --------------------------------------------------------------------------------->
    <style>
        .colorzeed {
            opacity: 0.7 !important;
        }

        .cardtrich {
            background: #e0eaff;
        }

        .card {
            border-radius: 30px !important;
        }
    </style>
    <!-------------------------------------------------             Style                             ------------------------------------------------------------->

</head>
<!-----------------------------------------------------             Head                              ------------------------------------------------------------->
<!-----------------------------------------------------             body                              ------------------------------------------------------------->

<body class="cardtrich">

    <!-------------------------------------------------             container                         ------------------------------------------------------------->
    <div class="container">
        <!---------------------------------------------             form class="needs-validation"     -------------------------------------------------------------->
        <form class="needs-validation" novalidate>
            <!-----------------------------------------             class="row"                       -------------------------------------------------------------->
            <div class="row">
                <!-------------------------------------             class=" card p-5 my-5"            -------------------------------------------------------------->
                <div class=" card p-5 my-5">
                    <!----------------------------------            card-body                         -------------------------------------------------------------->
                    <div class="card-body">

                        <h1 class="mb-5 ">แบบสอบถามข้อมูลส่วนบุคคล</h1>
                        <!------------------------------            row                               -------------------------------------------------------------->
                        <div class="row">
                            <!------------------------------        col-2 md-3 mb-3                   -------------------------------------------------------------->
                            <div class="col-2 md-3 mb-3">
                                <!------------------------------           select  name prefix        -------------------------------------------------------------->
                                คำนำหน้า
                                <br>
                                <select class="form-select " aria-label="Default select example" name="title" id="title"
                                    required>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                                <!------------------------------           select  name prefix        -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-2 md-3 mb-3                -------------------------------------------------------------->

                            <!------------------------------           col-5 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-5 md-4 mb-3">
                                <!--------------------------           First name                     -------------------------------------------------------------->
                                <label for="validationTooltip01">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01"  placeholder="First name" required>
                                <!--------------------------           First name                     -------------------------------------------------------------->

                            </div>
                            <!------------------------------           col-5 md-4 mb-3                -------------------------------------------------------------->

                            <!------------------------------           col-5 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-5 md-4 mb-3">
                                <!--------------------------           Last name                     --------------------------------------------------------------->
                                <label for="validationTooltip02">Last name</label> 
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" required>
                                <!--------------------------           Last name                     --------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-5 md-4 mb-3                -------------------------------------------------------------->
                            <br>
                            <!------------------------------           col-4 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-4 md-4 mb-3"> 
                                <!--------------------------           Birthday                       -------------------------------------------------------------->
                                <label for="Bdate">วันเกิด</label>
                                <input type="date" class="form-control" id="Bdate" required>
                                <!--------------------------           Birthday                       -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-4 md-4 mb-3                -------------------------------------------------------------->
                            <br>
                            <!------------------------------           col-4 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-4 md-4 mb-3">
                                <!--------------------------           Student ID                     -------------------------------------------------------------->
                                <label for="StudentID">รหัสนิสิต</label>
                                <input type="text" class="form-control" id="StudentID" required>
                                <!--------------------------           Student ID                     -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-4 md-4 mb-3                -------------------------------------------------------------->
                            <br>
                            <!------------------------------           col-4 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-4 md-4 mb-3">
                                <!--------------------------           Password                       -------------------------------------------------------------->
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="password" required>
                                <!--------------------------           Password                       -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-4 md-4 mb-3                -------------------------------------------------------------->
                            <br>
                            <!------------------------------           col-12 md-4 mb-3               -------------------------------------------------------------->
                            <div class="col-12 md-4 mb-3">
                                <!--------------------------           Email                          -------------------------------------------------------------->
                                <label for="email">อีเมล</label>
                                <input type="email" class="form-control" id="email" placeholder="email@gmail.com"  required>
                                <!--------------------------           Email                          -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-12 md-4 mb-3               -------------------------------------------------------------->
                            <br>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-6 md-4 mb-3">
                                <!--------------------------           Select Branch                  -------------------------------------------------------------->
                                <label for="branch">สาขา</label>
                                <select class="form-select colorzeed " aria-label="Default select example"
                                    name="tagging" disabled="disabled">
                                    <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                                    <option value="คณะพยายาลศาสตร์">คณะพยายาลศาสตร์</option>
                                    <option value="คณะวิทยาการสารสนเทศ" selected>คณะวิทยาการสารสนเทศ </option>
                                </select>
                                <!--------------------------           Select Branch                  -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->
                            <br>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-6 md-4 mb-3">
                                <!--------------------------           Year                           -------------------------------------------------------------->
                                <label for="year">นิสิตชั้นปี</label>
                                <input type="number" class="form-control" id="year" value="3" disabled required>
                                <!--------------------------           Year                           -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->


                            <br>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-6 md-4 mb-3">
                                <!--------------------------           Radio Position                 -------------------------------------------------------------->
                                <label for="branch">ตำแหน่ง</label><br>
                                <input type="radio" id="TL" name="luck" value="TL" required>
                                <label for="TL"> Team leader</label><br>
                                <input type="radio" id="DEV" name="luck" value="DEV" required>
                                <label for="DEV">Developer</label><br>
                                <input type="radio" id="QA" name="luck" value="QA" required>
                                <label for="QA">Quality</label><br>
                                <input type="radio" id="SP" name="luck" value="SP" required>
                                <label for="SP">Support</label><br>
                                <!--------------------------           Radio Position                 -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->

                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->
                            <div class="col-6 md-4 mb-3">
                                <!--------------------------           checkbox Preferred language    -------------------------------------------------------------->
                                <label for="branch">ภาษาที่ถนัด</label><br>
                                <input type="checkbox" id="HTML" name="HTML" value="HTML" required>
                                <label for="HTML"> HTML</label><br>
                                <input type="checkbox" id="CSS" name="CSS" value="CSS" required>
                                <label for="CSS">CSS</label><br>
                                <input type="checkbox" id="MySQL" name="MySQL" value="MySQL" required>
                                <label for="MySQL">MySQL</label><br>
                                <input type="checkbox" id="JS" name="JS" value="JS" required>
                                <label for="JS">JS</label><br>
                                <input type="checkbox" id="PHP" name="PHP" value="PHP" required>
                                <label for="PHP">PHP</label><br>
                                <!--------------------------           checkbox Preferred language    -------------------------------------------------------------->
                            </div>
                            <!------------------------------           col-6 md-4 mb-3                -------------------------------------------------------------->


                        </div>
                        <!------------------------------             row                               ------------------------------------------------------------------->
                    </div>
                    <!----------------------------------             card-body                         ------------------------------------------------------------------->
                </div>
                <!--------------------------------------             class=" card p-5 my-5"            ------------------------------------------------------------------->
            </div>
            <!------------------------------------------             class="row"                       ------------------------------------------------------------------->
        </form>
        <!----------------------------------------------             form class="needs-validation"     ------------------------------------------------------------------->
    </div>
    <!--------------------------------------------------             container                         ------------------------------------------------------------------->
</body>
<!------------------------------------------------------             body                              ------------------------------------------------------------------->

</html>
<!------------------------------------------------------             html                              ------------------------------------------------------------------->