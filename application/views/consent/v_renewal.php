<!--
    v_renewal
    display for edit End date
    @input Form_ID
    @output -
    @author Nattakorn
    Create date 2564-07-19
    Update date 2564-07-27
-->
<style>
table 
{
    text-align:center;
}
</style>
<h1>
    Renew Form (ต่ออายุคำขอ)

</h1>

<div class="card-header" id="card_radius">
    <div class="table-responsive">

        <table class="table" style="width:100%">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Running No.</th>
                    <th>Item</th>
                    <th>Office in charge</th>
                    <th>Schedule</th>
                    <th>Status</th>
                    <th>Number of times</th>
                    <th>Submit request</th>
                    
                </tr>
            </thead>
            <tbody>  
                                        
                                        <?php 
                                         $No=1;
                                        for ($i = 0; $i < count($arr_renew); $i++) {?> 
                                        <?php if($arr_renew[$i]->Status==4) ;{?>  
                                        <tr>
                                        
                                            <td style='text-align:center'> 
                                            <?php if($arr_renew[$i]->Status==4)
                                            {echo $No++;}?></td>
                                            
                                            <td><?php  if($arr_renew[$i]->Status==4)
                                            echo $arr_renew[$i]->HR_No;
                                            ?></td>
    
                                            <td><?php if($arr_renew[$i]->Status==4)
                                            { echo $arr_renew[$i]->Item;}?></td>
                                            
                                            <td><?php if($arr_renew[$i]->Status==4)
                                            {echo $arr_renew[$i]->Officer;} ?></td>
    
                                            <td><?php if($arr_renew[$i]->Status==4)
                                            {echo date("d/m/Y",strtotime($arr_renew[$i]->Start_date)); 
                                                echo ' - ';
                                                echo date("d/m/Y",strtotime($arr_renew[$i]->End_date));} 
                                            ?></td>     
    
                                            <td><?php if($arr_renew[$i]->Status==4)
                                            {  if($arr_renew[$i]->Status==4)
                                                {echo "อนุมัติ";} else {echo " ";}
                                            } 
                                            else {echo " ";}?></td>
    
                                            <td><?php if($arr_renew[$i]->Status==4)
                                            {  echo $arr_renew[$i]->Form_count."/3"; 
                                            } 
                                           ?></td>
                               
                                                    
                               
                                                <!--ปุ่มขอต่ออายุ-->
                                                    
                                                    <td> <?php if ($arr_renew[$i]->Status == 4  ) { ?>
                                                    <a href='<?php  echo site_url() . 'Renewal/Renewal/show_reform/'
                                                    .$arr_renew[$i]->Form_ID?>'>
                                                    
                                                    <button> <i class="fas fa-envelope"></i></button> </a><?php } ?>
                                                    </td>
                                                    
                                                    
                                        </tbody>            
                                                   
                                                        
                                        </tr>
                                        
                                        <?php } ?>
                                        <?php } ?>
        </table>
        <div>
        </div>
    </div>
    <!-- <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
     </script> -->
     </script>
    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../../assets/js/argon.js?v=1.2.0"></script>
    <script type="text/javascript">
   