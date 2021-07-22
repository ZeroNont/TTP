<!-- ตารางรายการคำขอ -->
<!-- Table Requestd form -->
<!-- <div class="card" id="card_radius"> -->

<h1>
    Approve Plan Management (การจัดการข้อมูล Approve Plant)
    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#Add"><i class="material-icons">Add
            Approve
            Plan</i></button>
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
                        <label for="exampleInputEmail1" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" name="Emp_ID">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" class="form-control" disabled>
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


                        <button class="btn btn-warning" data-toggle="modal"
                            data-target="#exampleModal<?php echo $i; ?>"><i class="material-icons">Edit</i></button>
                        <!-- Modal -->


                        <div id="exampleModal<?php echo $i; ?>" class="modal fade" role="dialog">
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

                                    <div class="modal-body">
                                        <form action="<?php echo site_url() . 'licence_form/licence_input/insert'; ?>"
                                            method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Employee ID</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $obj_plan[$i]->Emp_ID ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $obj_plan[$i]->Empname_eng . '    ' . $obj_plan[$i]->Empsurname_eng ?>"
                                                    disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Plant No.</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $obj_plan[$i]->Plant_No ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Plant Name</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $obj_plan[$i]->Plant_name ?>" id="province_auto">
                                            </div>
                                            <button type="submit" class="btn btn-success float-right">Submit</button>
                                            <button type="button" class="btn btn-danger float-right"
                                                data-dismiss="modal">Cancle</button>
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