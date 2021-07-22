<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
     Favicon 
    <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png"> -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" >
    function login() { //login admin
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url() . 'Login/Login_controller/login' ?>',
            data: {
                User_login: $('#User_login').val(),
                Pass_login: $('#Pass_login').val()
            },
            success: function(res) {
                console.log('success')
                console.log(res)
                if (res == true) {
                    setTimeout(function() {
                        window.location.href =
                            '<?php echo site_url() . 'Login/Login_controller/show_user_home' ?>'
                    }, 500)
                } //if
                else {
                    console.log('fail')
                    alert('รหัสผ่านผิด กรุณากรอกใหม่อีกครั้ง')
                    console.log(res)

                } //else
            },
            error: function(res) {
                console.log('fail')
                console.log(res)
            }
        });
        
    } //end login admin
    </script>
</head>

<body>
    <!-- Login -->
    <div style="margin-left:25%;margin-top:10%">
        <div class="col-lg-8 col-md-7">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center mb-4">
                        <h3>เข้าสู่ระบบ</h3>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <!-- Insert username -->
                            <input class="form-control" id="User_login" placeholder="ชื่อผู้ใช้" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <!-- Insert password -->
                            <input class="form-control" id="Pass_login" placeholder="รหัสผ่าน" type="password" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <!-- Button login -->
                        <button type="submit" class="btn btn-primary my-4" onclick='login()'>เข้าสู่ระบบ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

