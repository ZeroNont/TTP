<!--
/*
* v_check_schedule
* show schedule form requestd
* @author Phatchara Khongthandee
* @Create Date 2564-07-16
*/
-->

<!DOCTYPE html>
<html>
    <!-- CSS -->
<style>
    #history_table td, #history_table th 
    {
        padding: 8px;
        text-align: center;
    }
    #history_table tr:nth-child(even) 
    {
        background-color:  #dee2e6;
        }
    #history_table tr:hover 
    {
        background-color: #adb5bd;
    }
    #card_radius
    {
        margin-left: 15px;
        margin-right: 15px;
        border-radius: 24px;
        width: auto;
        min-height: 300px;
    }
    #history_table
    {
        width: 98%;
        margin-top: 20px;
        margin-left: 10px;
    }
</style>

<head>
    <!-- Argon CSS -->
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
                            <a class="nav-link active text-red" href="profile.html">
                                <i class="fas fa-calendar-check text-red active"></i>
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
                            <a class="nav-link" href="upgrade.html">
                                <i  class="fas fa-history text-dark"></i>
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
    <!-- Table Requestd form -->
    <div class="card-header" id="card_radius">
            <div class="table-responsive">
                <table class="table align-items-center" id="history_table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                                <th scope="col">Running No.</th>
                                <th scope="col">Item</th>
                                <th scope="col">Officer in charge</th>
                                <th scope="col">Remaining time</th>
                                <th scope="col">End Date</th>
                            </tr>
                    </thead>
                        <tbody class="list">
                            <?php for ($i = 0; $i < count($arr_schedule); $i++){?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo ($i + 1); ?> </td>
                                    </td>
                                    <td>
                                        <?php echo $arr_schedule[$i]->Form_ID ?></td>
                                    </td>
                                    <td>
                                        <?php echo $arr_schedule[$i]->Item ?></td>
                                    </td>
                                    <td>
                                    <?php echo $arr_schedule[$i]->Officer ?></td>
                                    </td>
                                    <td>
                                        <?php echo $arr_schedule[$i]->Officer ?></td>
                                    </td>
                                    <td>
                                        <?php echo $arr_schedule[$i]->End_date ?></td>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>   
                </table>
            <div>
        </div>
    </div>          

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