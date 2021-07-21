<!--
/*
* v_history_user
* show History Employee
* @author Phatchara Khongthandee
* @Create Date 2564-07-15
*/
-->

<!DOCTYPE html>
<html>
<!-- CSS -->
<style>
#history_table td,
#history_table th {
    padding: 8px;
    text-align: center;
}

#history_table tr:nth-child(even) {
    background-color: #e9ecef;
}

#history_table tr:hover {
    background-color: #adb5bd;
}

#card_radius {
    margin-left: 14px;
    margin-right: 15px;
    border-radius: 24px;
    width: auto;
    min-height: 300px;
}

#history_table {
    width: 98%;
    margin-top: 20px;
    margin-left: 10px;
}
</style>

<head>
    <title>History</title>
    <!--Argon CSS -->
    <link rel="stylesheet" href="../../assets/css/argon.css?v=1.2.0" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="..." width="150"
                        height="800">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html">
                                <i class="fas fa-home text-dark"></i>
                                <span class="nav-link-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons.html">
                                <i class="fas fa-clipboard-list text-dark"></i>
                                <span class="nav-link-text ">Requested Form</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="map.html">
                                <i class="fas fa-calendar-plus text-dark"></i>
                                <span class="nav-link-text">Renewal Form</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.html">
                                <i class="fas fa-calendar-check text-dark"></i>
                                <span class="nav-link-text">Check Schedule</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tables.html">
                                <i class="fas fa-file-import text-dark"></i>
                                <span class="nav-link-text">Check Out</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">
                                <i class="fas fa-user-check text-dark"></i>
                                <span class="nav-link-text">Status Form</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-red" href="upgrade.html">
                                <i class="fas fa-history text-red active"></i>
                                <span class="nav-link-text">History Form</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">
                                <i class="ni ni-single-copy-04 text-dark"></i>
                                <span class="nav-link-text">Request</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Card Detail form -->
    
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Argon JS -->
        <script src="../../assets/js/argon.js?v=1.2.0"></script>
        <script type="text/javascript">
        $(function() {
            $('#datetimepickerDemo').datetimepicker({
                minDate: new Date()
            });
        });
        </script>
</body>

</html>