<!-- ตารางรายการคำขอ -->
<!-- Table Requestd form -->
<!-- <div class="card" id="card_radius"> -->


<div class="card-header" id="card_radius">
    <div class="table-responsive">
        <table class="table" id="example">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Plan No.</th>
                    <th>Plan Name</th>
                    <th>Name</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($obj_plan); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $i + 1 ?>
                    </td>
                    <td>
                        <?php echo $obj_plan[$i]->Plant_No ?>
                    </td>
                    <td>
                        <?php echo $obj_plan[$i]->Plant_name ?>
                    </td>
                    <td>
                        <?php echo $obj_plan[$i]->Empname_eng . '            ' . $obj_plan[$i]->Empsurname_eng ?>
                    </td>
                    <td>
                        <?php echo $i ?>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i
                                class="material-icons">Edit</i></button>
                        <!-- Modal -->
                        <?php echo $i ?>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header ">

                                        <h4 class="modal-title" id="exampleModalLabel">

                                            Edit Detail
                                        </h4>
                                        <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo $i ?>
                                    <div class="modal-body">
                                        <form>
                                            <?php echo $i ?>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Employee ID</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $obj_plan[$i]->Emp_ID ?>">

                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $obj_plan[$i]->Empname_eng . '    ' . $obj_plan[$i]->Empsurname_eng ?>">
                                            </div>
                                            <button type="button" class="btn btn-danger float-right"
                                                data-dismiss="modal">Cancle</button>
                                            <button type="submit" class="btn btn-success float-right">Submit</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
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