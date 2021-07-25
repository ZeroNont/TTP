<h1>
    Check Out (การแจ้งย้ายของ)

</h1>

<div class="card-header" id="card_radius">
    <div class="table-responsive">

        <table class="table" id="example">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Running No.</th>
                    <th>Item</th>
                    <th>Schedule</th>
                    <th>Officer</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($obj_form); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $i + 1 ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['UsEmp_ID'] ?>
                    </td>
                    <td>
                        <?php echo $obj_form[$i]->Item ?>
                    </td>
                    <td>
                        <?php
                            $Start_date = $obj_form[$i]->Start_date;
                            $End_date = $obj_form[$i]->End_date;
                            $newDate = date("d-m-Y", strtotime($Start_date)) . ' - ' . date("d-m-Y", strtotime($End_date));
                            echo $newDate  ?>
                    </td>
                    <td>
                        <?php echo $obj_form[$i]->Officer ?>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target="#exampleModalCenter<?php echo $i; ?>">
                            แจ้งย้ายของออก
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter<?php echo $i; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h1 aligh=center>ยืนยันการแจ้งย้ายของออก</h1>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cancle</button>
                                        <a
                                            href="<?php echo site_url() . 'check_out/ttp_check_out/check_out/' . $obj_form[$i]->Form_ID; ?>">
                                            <button type="button" class="btn btn-success">Confirm</button>
                                        </a>

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