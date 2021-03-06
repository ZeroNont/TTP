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
table {
    text-align: center;
}
</style>
<div class="card">
    <div class="card-header" id="card_radius">
        <h1>
            Renew Tag (ต่ออายุคำขอ)

        </h1>
        <div class="card-body">
            <div class="card-header" id="card_radius">
                <div class="table-responsive">

                    <table class="table" style="width:100%" id="example">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Running No.</th>
                                <th>Item</th>
                                <th>Office in charge</th>
                                <th>Schedule</th>
                                <th>req_status</th>
                                <th>Number of times</th>
                                <th>Submit request</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $No = 1;
                            for ($i = 0; $i < count($arr_renew); $i++) { ?>

                            <tr>

                                <td style='text-align:center'>
                                    <?php {
                                            echo $No++;
                                        } ?></td>

                                <td>
                                    <?php
                                        echo $arr_renew[$i]->req_hr_no;
                                        ?>
                                </td>

                                <td><?php
                                        echo $arr_renew[$i]->req_item;
                                        ?></td>

                                <td>
                                    <?php echo $arr_supervisor[$i]->Empname_eng . ' ' . $arr_supervisor[$i]->Empsurname_eng ?>
                                </td>

                                <td><?php
                                        echo date("d/m/Y", strtotime($arr_renew[$i]->req_start_date));
                                        echo ' - ';
                                        echo date("d/m/Y", strtotime($arr_renew[$i]->req_end_date));

                                        ?></td>

                                <td><?php
                                        if ($arr_renew[$i]->req_status == 4) {
                                            echo "อนุมัติ";
                                        } else {
                                            echo " ";
                                        }
                                        ?></td>

                                <td><?php
                                        echo $arr_renew[$i]->req_form_count . "/4";

                                        ?></td>



                                <!--ปุ่มขอต่ออายุ-->

                                <td> <?php { ?>
                                    <a href='<?php echo site_url() . 'Renewal/Renewal/show_reform/'
                                                            . $arr_renew[$i]->req_form_id ?>'>

                                        <button class="btn btn-success btn-sm"> <i class="fas fa-edit"></i></button>
                                    </a><?php } ?>
                                </td>


                        </tbody>


                        </tr>

                        <?php } ?>

                    </table>
                    <div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
                </script>
                <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
                <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
                <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
                <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
                <!-- Argon JS -->
                <script src="../../assets/js/argon.js?v=1.2.0"></script>
                <script type="text/javascript">