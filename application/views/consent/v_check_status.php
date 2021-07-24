<h1>
    Check request status (ตรวจสอบสถานะคำร้องขอ)

</h1>
<div id="Add" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">

                <h4 align='center' class="modal-title" id="exampleModalLabel">

                    Add Detail
                </h4>

                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo site_url() . 'plan_management/plan_input/insert'; ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="focusedinput" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" name="Emp_ID" id="Emp_id_modal" placeholder="JS000xxx"
                            onkeyup="get_Emp()">
                    </div>
                    <div class="mb-3">
                        <label for="focusedinput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="showname_modal" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Plant No.</label>
                        <input type="text" class="form-control" name="Plant_No">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Plant Name</label>
                        <input type="text" class="form-control" name="Plant_name">
                    </div>
                    <button type="submit" class="btn btn-success float-right">Submit</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Cancle</button>
                </form>
            </div>

        </div>
    </div>
</div>
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
                        <a
                            href="<?php echo site_url() . 'licence_form/form_edit/show_form_edit/' . $obj_status[$i]->Form_ID; ?>">
                            <button type="button" class="btn btn-primary btn-sm" style="background-color: orange;"> <i
                                    class="fa fa-gear"></i>
                            </button>
                        </a>
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