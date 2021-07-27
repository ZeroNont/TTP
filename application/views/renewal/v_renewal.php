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
<meta charset="UTF-8" />

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
<h1>
    Renewal Form (ต่ออายุคำร้อง)

</h1>  
    <div class="main-content" id="panel">
      
        <div class="header pb-6 d-flex align-items-center"
            style="min-height: 100px;  background-size: cover; background-position: center top;">
            

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6 ">
            <div class="row">

                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <thead>
                                    <table style="width:100%">
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
                                    <?php for ($i = 0; $i < count($arr_renew); $i++) {?> 
                                    <?php if($arr_renew[$i]->Status==4) ;{?>  
                                    <tr>
                                    
                                        <td style='text-align:center'> 
                                        <?php if($arr_renew[$i]->Status==4)
                                        {echo $i + 1;}?></td>
                                        
                                        <td><?php  if($arr_renew[$i]->Status==4)
                                        {echo "HR2021-00". $arr_renew[$i]->Form_ID;}   ?></td>

                                        <td><?php if($arr_renew[$i]->Status==4)
                                        { echo $arr_renew[$i]->Item;}?></td>
                                        
                                        <td><?php if($arr_renew[$i]->Status==4)
                                        {echo $arr_renew[$i]->Officer;} ?></td>

                                        <td><?php if($arr_renew[$i]->Status==4)
                                        {echo date("d F",strtotime($arr_renew[$i]->Start_date)); 
                                            echo '-';
                                            echo date("d F Y",strtotime($arr_renew[$i]->End_date));} 
                                        ?></td>     

                                        <td><?php if($arr_renew[$i]->Status==4)
                                        {  if($arr_renew[$i]->Status==4)
                                            {echo "อนุมัติ";} else {echo " ";}
                                        } 
                                        else {echo " ";}?></td>

                                        <td><?php if($arr_renew[$i]->Status==4)
                                        {  echo $arr_renew[$i]->Form_count; 
                                        } 
                                       ?></td>
                           
                                                
                           
                                            <!--ปุ่มขอต่ออายุ-->
                                                
                                                <td> <?php if ($arr_renew[$i]->Status == 4) { ?>
                                                <a href='<?php  echo site_url() . 'Renewal/Renewal_controller/show_reform/'
                                                .$arr_renew[$i]->Form_ID?>'>
                                                
                                                <button> <i class="ni ni-email-83 text-dark"></i></button>
                                            
                                                </a><?php } ?>
                                                </td>
                                                
                                                
                                    </tbody>            
                                               
                                                    
                                    </tr>
                                    
                                    <?php } ?>
                                    <?php } ?>
                                    </table>
                               
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    </script>
</body>

</html>