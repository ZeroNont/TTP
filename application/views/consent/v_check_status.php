<h1>
    Check status (ตรวจสอบสถานะคำร้องขอ)

</h1>

<div class="card-header" id="card_radius">
    <div class="table-responsive">

        <table class="table" id="example">
            <thead class="thead-light">
                <tr>
                    <th>#</th>

                    <th>Item</th>
                    <th>Supervisor</th>
                    <th>HR/5S Center</th>
                    <th>Approve Plant</th>
                    <th>Remaining Time</th>
                    <th>Number of Edits</th>
                    <th>Printing Status</th>
                    <th>Tool</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($obj_status); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $i + 1 ?>
                    </td>

                    <td>
                        <?php echo $obj_status[$i]->Item ?>
                    </td>
                    <td>
                        <?php
                            if ($obj_status[$i]->Status >= 1) {
                                echo "อนุมัติ";
                            } else {
                                echo "-";
                            }

                            ?>
                    </td>
                    <td>
                        <?php
                            if ($obj_status[$i]->Status >= 2) {
                                echo "อนุมัติ";
                            } else {
                                echo "-";
                            }

                            ?>
                    </td>
                    <td>
                        <?php
                            if ($obj_status[$i]->Status >= 3) {
                                echo "อนุมัติ";
                            } else {
                                echo "-";
                            }

                            ?>
                    </td>
                    <td>
                        <?php
                            $str =  (strtotime($obj_status[$i]->End_date)) - strtotime(date("M d Y "));
                            $str = floor($str / 3600 / 24);
                            if ($str <= 5) {
                                echo $str;
                            } else {
                                echo "-";
                            }
                            // echo $str;
                            ?>
                    </td>
                    <td>
                        <?php echo $obj_status[$i]->Form_count ?>
                    </td>

                    <td>
                        <?php if ($obj_status[$i]->print_status == 1) { ?>

                        <img src="<?php echo site_url() . '/assets/file/icon/check.png' ?>" width="30">
                        <?php } else { ?>
                        <img src="<?php echo site_url() . '/assets/file/icon/remove.png' ?>" width="30">
                        <?php } ?>
                    </td>

                    <td>
                        <?php if ($obj_status[$i]->Status < 0) { ?>
                        <a
                            href="<?php echo site_url() . 'licence_form/form_edit/show_form_edit/' . $obj_status[$i]->Form_ID; ?>">
                            <img src="<?php echo site_url() . '/assets/file/icon/edit.png' ?>" width="30">
                        </a>
                        <?php } else { ?>
                        <img src="<?php echo site_url() . '/assets/file/icon/edit_2.png' ?>" width="30">
                        <?php } ?>
                        <?php if ($obj_status[$i]->Status == 4) { ?>
                        <a
                            href="<?php echo site_url() . 'licence_form/form_edit/show_form_edit/' . $obj_status[$i]->Form_ID; ?>">
                            <img src="<?php echo site_url() . '/assets/file/icon/printing.png' ?>" width="30">
                        </a>
                        <?php } else { ?>
                        <img src="<?php echo site_url() . '/assets/file/icon/print_2.png' ?>" width="30">
                        <?php } ?>
                    </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
        <div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>