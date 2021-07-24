<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
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

<style>
.button {
  background-color:#ff0000;
  border-radius :20px;
  color:white;
  padding: 5px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
}

table, th, td {

  text-align:center;
}


</style>
</head>

<body>
    <!-- Sidenav -->
   
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
      
        <!-- Header -->
        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 100px;  background-size: cover; background-position: center top;">
            <!-- Mask -->
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6 ">
            <div class="row">

                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <thead>
                                    <table >
                                    <tr>
                                    <th><h5>#</h5></th> 
                                    <th><h5>Running No.</h5></th> 
                                    <th><h5>Item</h5></th>
                                    <th><h5>Office in Charge</h5></th>
                                    <th><h5>Schedule</h5></th>
                                    <th><h5>Status</h5></th>
                                    <th><h5>Number of times</h5></th>
                                    <th><h5>Submit a request</h5></th>
                                    </tr>
                                   
                                <thead>

                            </div>
                        </div>
                        
                                
                                    
                                    <tbody>    
                                    <tr>
                                    <?php for ($i = 0; $i < count($arr_renew); $i++) { ?>
                                        
                                        <td style='text-align:center'> <?php echo ($i + 1); ?></td>
                                        <td>HR2021-00<?php echo ($i+1); ?></td>

                                                <td><?php echo $arr_renew[$i]->Item; ?></td>
                                                <td><?php echo $arr_renew[$i]->Officer; ?></td>
                                                <td><?php echo $arr_renew[$i]->Start_date; 
                                                echo '-';
                                                echo $arr_renew[$i]->End_date; ?></td>
                                                <td>
                                                <?php
                                                if($arr_renew[$i]->Status==0)
                                                {
                                                    echo 'รออนุมัติ';
                                                }
                                                else
                                                {
                                                    echo 'อนุมัติ';
                                                }
                                                ?>
                                                </td>

                                                <td><?php 
                                                echo $arr_renew[$i]->Form_count; echo '/3';
                                                
                                                ?></td>

                                                <!--ปุ่มขอต่ออายุ-->
                                                
                                                <td> 
                                                <a href='<?php echo site_url() . 'Renewal/Renewal_controller/show_reform/'
                                                .$arr_renew[$i]->Form_ID?>'>
                                                <button> <i class="ni ni-email-83 text-dark"></i></button>
                                                </a>
                                                </td>
                                                
                                    </tbody>            
                                               
                                                    
                                    </tr>
                                    <?php } ?>
                                    </table>
                              
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
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