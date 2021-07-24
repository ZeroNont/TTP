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
#history_table th 
{
    padding: 8px;
    text-align: center;
}

#history_table tr:nth-child(even) 
{
    background-color: #e9ecef;
}

#history_table tr:hover 
{
    background-color: #adb5bd;
}

#card_radius 
{
    margin-left: 14px;
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

<!-- Table Requestd form -->
    <div class="card-header" id="card_radius">
        <div class="table-responsive">
            <table class="table align-items-center" id="history_table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Running No.</th>
                        <th scope="col">Item</th>
                        <th scope="col">Schedule</th>
                        <th scope="col">Officer in charge</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <a href="<?php echo site_url().'history/ttp_history/'?>">
                    <?php for ($i = 0; $i < count($em_form); $i++){?>
                    <tr>
                        <td class="text-center">
                            <?php echo ($i + 1); ?> </td>
                        </td>
                        <td>
                            <?php echo $em_form[$i]->Form_ID ?></td>
                        </td>
                        <td>
                            <?php echo $em_form[$i]->Item ?></td>
                        </td>
                        <td>
                        <?php echo $em_form[$i]->Start_date." - ".$em_form[$i]->End_date ?></td>
                        </td>
                        <td>
                            <?php echo $em_form[$i]->Officer ?></td>
                        </td>
                        <!-- column ดำเนินการ -->
                        <td style='text-align: center;'>
                            <!-- ปุ่มดำเนินการ -->
                            <a href=" <?php echo site_url() . '/history/ttp_history/show_history_detail/' . $em_form[$i]->Form_ID; ?>">
                                <button class="btn btn-warning"> <i class="fa fa-pencil"></i> </button>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
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