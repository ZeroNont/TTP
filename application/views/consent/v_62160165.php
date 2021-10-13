<!-- /*
* v_62160165.php
* View Example_Test
* @input  -
* @output - 
* @author Apinya Phadungkit
* @Create Date 2564-10-12
* @Update Date 2564-10-13
*/ -->

<!-------------------------------------------------------    html     ---------------------------------------------------------------->
<html lang="en">
<html>
<!--------------------------------------------------------   Head    ----------------------------------------------------------------->

<head>
    <title>แบบสอบถามข้อมูลส่วนบุคคล</title>
    <!-- template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <!-------------------------------------------------------    Style       ------------------------------------------------------------->
    <style>
    .form-card {
        border-radius: 2px;
        background: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.56s cubic-bezier(0.25, 0.8, 0.25, 1);
        max-width: 1000px;
        padding: 0;
        margin: 50px auto;
    }

    .form-card:hover,
    .form-card:focus {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .form-fieldset {
        padding: 100px;
        border: 0;
    }

    .form-fieldset+.form-fieldset {
        margin-top: 15px;
    }

    .form-legend {
        padding: 1em 0 0;
        margin: 0 0 -6em;
        font-size: 1.5rem;
        text-align: center;
    }

    .form-element {
        position: relative;
        margin-top: 2.25rem;
        margin-bottom: 2.25rem;
    }

    /* เส้น */
    .form-element-bar {
        position: relative;
        height: 1px;
        background: #999;
        display: block;
    }

    .form-element-bar::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: #337ab7;
        height: 2px;
        display: block;
        transform: rotateY(90deg);
        transition: transform 0.28s ease;
        will-change: transform;
    }

    .form-element-label {
        position: absolute;
        top: 0.75rem;
        line-height: 1.5rem;
        pointer-events: none;
        padding-left: 0.125rem;
        z-index: 1;
        font-size: 1rem;
        font-weight: normal;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        color: #a6a6a6;
        transform: translateY(-50%);
        transform-origin: left center;
        transition: transform 0.28s ease, color 0.28s linear, opacity 0.28s linear;
        will-change: transform, color, opacity;
    }

    .form-element-field {
        outline: none;
        height: 1.5rem;
        display: block;
        background: none;
        padding: 0.125rem 0.125rem 0.0625rem;
        font-size: 1rem;
        border: 0 solid transparent;
        line-height: 1.5;
        width: 100%;
        color: #333;
        box-shadow: none;
        opacity: 0.001;
        transition: opacity 0.28s ease;
        will-change: opacity;
    }

    .form-element-field:focus~.form-element-bar::after {
        transform: rotateY(0deg);
    }

    .form-element-field:focus~.form-element-label {
        color: #337ab7;
    }

    /* เลื่อนขึ้นด้านบน */
    .form-element-field.-hasvalue~.form-element-label,
    .form-element-field:focus~.form-element-label {
        transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
        cursor: pointer;
        pointer-events: auto;
    }

    input.form-element-field:not(:placeholder-shown),
    textarea.form-element-field:not(:placeholder-shown) {
        opacity: 1;
    }

    input.form-element-field:not(:placeholder-shown)~.form-element-label,
    textarea.form-element-field:not(:placeholder-shown)~.form-element-label {
        transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
        cursor: pointer;
        pointer-events: auto;
    }

    .form-select-placeholder {
        color: #a6a6a6;
        display: none;
    }

    .form-select .form-element-bar::before {
        content: "";
        position: absolute;
        height: 0.5em;
        width: 0.5em;
        border-bottom: 1px solid #999;
        border-right: 1px solid #999;
        display: block;
        right: 0.5em;
        bottom: 0;
        transition: transform 0.28s ease;
        transform: translateY(-100%) rotateX(0deg) rotate(45deg);
        will-change: transform;
    }

    .form-select select:focus~.form-element-bar::before {
        transform: translateY(-50%) rotateX(180deg) rotate(45deg);
    }

    body {
        background-image: linear-gradient(to top, #a4acb9 0%, #4c5055 100%);
        font-family: 'Prompt', sans-serif;
    }
    </style>
    <!--------------------------------------  END Style       ----------------------------------------->
</head>
<!--------------------------------------  END Head    --------------------------------------------->

<!----------------------------------------  Script   ---------------------------------------------->
<script>

</script>
<!----------------------------------------  END  Script --------------------------------------------->

<!-------------------------------------------  Body --------------------------------------------->

<body>
    <form class="form-card">
        <fieldset class="form-fieldset">
            <legend class="form-legend">personal data questionnaire</legend>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <!-- คำนำหน้า -->
                    <div class="form-element form-select">
                        <select id="nametitle" class="form-element-field">
                            <option disabled selected value="" class="form-select-placeholder"></option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                        </select>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label">Name Title</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- ชื่อจริง -->
                    <div class="form-element form-input">
                        <input id="fname" class="form-element-field" placeholder="Please fill in your frist name"
                            type="input" required>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label">Name</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- นามสกุล -->
                    <div class="form-element form-input">
                        <input id="lname" class="form-element-field" placeholder="Please fill in your last name"
                            type="input" required>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label">Last Name</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- วันที่ -->
                <div class="col-md-6">
                    <div class="form-element form-input">
                        <input id="date" class="form-element-field" type="date" required>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label">Date</label>
                    </div>
                </div>
                <!-- รหัสนิสิต -->
                <div class="col-md-6">
                    <div class="form-element form-input">
                        <input id="stu_id" class="form-element-field" placeholder="Please fill your Student ID"
                            type="number" size="8" required>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label">Student ID</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- อีเมลล์ -->
                <div class="col-md-6">
                    <div class="form-element form-input">
                        <input id="email" class="form-element-field" placeholder="example@gmail.com" type="email"
                            required>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label">E-mail</label>
                    </div>
                </div>
                <!-- รหัสผ่าน -->
                <div class="col-md-6">
                    <div class="form-element form-input">
                        <input id="password" class="form-element-field" placeholder="Please fill your password"
                            type="password" required>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label" for="fname">Password</label>
                    </div>
                </div>
            </div>

            <hr><br>

            <div class="row">
                <!-- สาขา -->
                <div class="col-md-2">
                    <label class="form-element-label">Major</label>
                </div>
                <div class="col-md-4">
                    <select disabled>
                        <option value="Medicine">Faculty of Medicine</option>
                        <option value="Nursing">Faculty of Nursing</option>
                        <option value="Informatics" selected>Faculty of Informatics</option>
                    </select>
                </div>
            </div>

            <br><br>
            <!-- =ชั้นปี -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-element form-input">
                        <input id="college_years" class="form-element-field" type="number" size="8" value="3" disabled>
                        <div class="form-element-bar"></div>
                        <label class="form-element-label" for="fname">College Years</label>
                    </div>
                </div>
            </div>

            <!-- ตำแหน่ง -->
            <div class="form-radio-legend">Position</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Team leader</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline"
                            class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadioInline2">Developer</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="customRadioInline"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">Quality</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="customRadioInline"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline4">Support</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" name="customRadioInline"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline5">Planner</label>
                    </div>
                </div>
            </div><br>

            <!-- ภาษาที่ถนัด -->
            <div class="form-radio-legend">Preferred language</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                        <label class="custom-control-label" for="customCheck2">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                        <label class="custom-control-label" for="customCheck3">MySQL</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                        <label class="custom-control-label" for="customCheck4">JS</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5" checked>
                        <label class="custom-control-label" for="customCheck5">PHP</label>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</body>
<!----------------------------------------  END  Body --------------------------------------------->

</html>
<!----------------------------------------  END  HTML --------------------------------------------->