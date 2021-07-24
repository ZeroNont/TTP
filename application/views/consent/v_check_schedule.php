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
