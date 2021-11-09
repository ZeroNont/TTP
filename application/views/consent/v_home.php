<!--
    v_home
    display home
    @input -
    @output -
    @author Jirayut Saifah
    Create 16/7/2564 
    Update date 
-->


<style>
div.table-responsive {
    text-align: center;
}
</style>
<div class="card">
    <div class="card-header" id="card_radius">
        <h1>
            Home (หน้าแรก)
        </h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-items-center table-flush" id="example">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">#</th>
                        <th scope="col" class="sort" data-sort="budget">Running Number</th>
                        <th scope="col" class="sort" data-sort="status">Item</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="sort" data-sort="completion">Status</th>
                        <th scope="col" class="sort" data-sort="completion">Renew</th>
                        <th scope="col" class="sort" data-sort="completion">Edit</th>
                        <th scope="col" class="sort" data-sort="completion">Action</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php for ($i = 0; $i < count($obj_status); $i++) {
                        $j = $i + 1; ?>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm"><?php echo $j;  ?></span>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            <?php if ($obj_status[$i]->req_hr_no != '') { ?>
                            <span class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_hr_no  ?></span>
                            <?php } else { ?>
                            <span class="name mb-0 text-sm">-</span>
                            <?php } ?>
                        </td>
                        <td>
                            <span class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_item ?></span>
                        </td>
                        <td>
                            <?php
                                $startDate = date("d/m/Y", strtotime($obj_status[$i]->req_start_date));
                                $endDate  = date("d/m/Y", strtotime($obj_status[$i]->req_end_date)); ?>
                            <?php echo $startDate . " - " . $endDate ?></td>
                        <td>
                            <?php if ($obj_status[$i]->req_status > 0 && $obj_status[$i]->req_status < 4) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i>
                                <?php if ($obj_status[$i]->req_status == 1) {  ?>
                                <span class="status">pending (Supervisor)</span>
                                <?php } else if ($obj_status[$i]->req_status == 2) { ?>
                                <span class="status">pending (HR/5S center)</span>
                                <?php } else if ($obj_status[$i]->req_status == 3) { ?>
                                <span class="status">pending (Approve Plant)</span>
                                <?php } ?>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status <= 0 && $obj_status[$i]->req_edit_count == 3) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">canceled</span>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status <= 0 && $obj_status[$i]->req_form_count == 4) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">canceled</span>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status <= 0 && $obj_status[$i]->req_reject_count == 3) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">canceled</span>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status == 0) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">reject (Supervisor)</span>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status == -1) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">reject (HR/5S center)</span>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status == -2) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">reject (Approve Plant)</span>
                            </span>
                            <?php } else if ($obj_status[$i]->req_status >= 4) { ?>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">approved</span>
                            </span>

                            <?php } ?>
                        </td>
                        <td>
                            <span class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_form_count . "/4" ?></span>
                        </td>
                        <td>
                            <span class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_edit_count . "/3" ?></span>
                        </td>
                        <td>
                            <?php if ($obj_status[$i]->req_status <= 0) { ?>
                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#exampleModal<?php echo $i; ?>">
                                <i class="fa fa-info-circle"></i> </button>
                            <?php if ($obj_status[$i]->req_edit_count < 3 && $obj_status[$i]->req_form_count != 4 && $obj_status[$i]->req_reject_count != 3) { ?>
                            <a class="btn btn-warning btn-sm"
                                href="<?php echo site_url() . 'licence_form/Licence_input/edit_form/' . $obj_status[$i]->req_form_id ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <?php } ?>
                            <?php } else if ($obj_status[$i]->req_status == 4) { ?>
                            <?php if ($obj_status[$i]->req_form_count < 4) { ?>
                            <a class="btn btn-primary btn-sm"
                                href="<?php echo site_url() . 'Renewal/Renewal/show_reform/' . $obj_status[$i]->req_form_id ?>">
                                <i class="fa fa-refresh"></i>
                            </a><?php } ?>
                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#exampleModal2<?php echo $i; ?>">
                                <i class="fa fa-check-square-o"></i>
                            </button>
                            <?php } ?>

                            <?php if ($obj_status[$i]->req_status == 4 && $obj_status[$i]->req_print_status == 0) { ?>
                            <a
                                href="<?php echo site_url() . 'form_management/Print_form/print_detail/' . $obj_status[$i]->req_form_id; ?>">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-print"></i>
                                </button>
                            </a>
                            <?php } else if ($obj_status[$i]->req_status == 4 && $obj_status[$i]->req_print_status == 1) { ?>
                            <a
                                href="<?php echo site_url() . 'form_management/Print_form/print_detail/' . $obj_status[$i]->req_form_id; ?>">
                                <button class="btn btn-success btn-sm">
                                    <i class="fas fa-print"></i>
                                </button>
                            </a>
                            <?php } else { ?>
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-print"></i>
                            </button>
                            <?php } ?>

                            <!-- Modal reject-->
                            <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">reason for reject</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>
                                                <?php echo $obj_status[$i]->app_reject_reason ?>
                                            </h3>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal fade" id="exampleModal3<?php echo $i; ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Request Complete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>
                                                <?php echo "Running Number : " . ' ' . $obj_status[$i]->req_hr_no ?>
                                                <br>
                                                <?php echo "Item : " . ' ' .  $obj_status[$i]->req_item ?>
                                            </h3>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" 
                                                data-dismiss="modal">Cancel</button>
                                            <form
                                                action="<?php echo site_url() . 'Check_out_form/Check_out_form/check_out/' . $obj_status[$i]->req_form_id; ?> "
                                                method="post" enctype="multipart/form-data">
                                                <button type="submit" class="btn btn-success"
                                                    data-dismiss="modal">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal check out-->
                            <div id="exampleModal2<?php echo $i; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h4 align='center' class="modal-title" id="exampleModalLabel">
                                                Request Complete
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="<?php echo site_url() . 'Check_out_form/Check_out_form/check_out/' . $obj_status[$i]->req_form_id; ?>"
                                                method="post" enctype="multipart/form-data">
                                                <h3>
                                                    <?php echo "Running Number : " . ' ' . $obj_status[$i]->req_hr_no ?>
                                                    <br>
                                                    <?php echo "Item : " . ' ' .  $obj_status[$i]->req_item ?>
                                                </h3>
                                                <br>
                                                <button type="submit"
                                                    class="btn btn-success float-right">Confirm</button>
                                                <button type="button" class="btn btn-danger float-right"
                                                    data-dismiss="modal">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <h3>
            Action Description (คำอธิบายปุ่มสัญลักษณ์)
        </h3>
        <br>
        &emsp;
        <button class="btn btn-primary btn-sm">
            <i class="fa fa-info-circle"></i>
        </button>&emsp;
        กดปุ่มสัญลักษณ์นี้เพื่อดูเหตุผลปฏิเสธของคำร้องขอวางของ
        <br><br>
        &emsp;
        <button class="btn btn-warning btn-sm">
            <i class="fa fa-pencil"></i>
        </button>&emsp;
        กดปุ่มสัญลักษณ์นี้เพื่อทำการแก้ไขแบบฟอร์มการขออนุญาตวางของ
        <br><br>
        &emsp;
        <button class="btn btn-primary btn-sm">
            <i class="fa fa-refresh"></i>
        </button>&emsp;
        กดปุ่มสัญลักษณ์นี้เพื่อต่ออายุคำร้องขออนุญาตวางของ
        <br><br>
        &emsp;
        <button class="btn btn-primary btn-sm">
            <i class="fa fa-check-square-o"></i>
        </button>&emsp;
        กดปุ่มสัญลักษณ์นี้เพื่อทำการแจ้งย้ายของออก
        <br><br>
        &emsp;
        <button class="btn btn-primary btn-sm">
            <i class="fas fa-print"></i>
        </button>&ensp;
        <button class="btn btn-success btn-sm">
            <i class="fas fa-print"></i>
        </button>&ensp;
        <button class="btn btn-danger btn-sm">
            <i class="fas fa-print"></i>
        </button>&emsp;
        กดปุ่มสัญลักษณ์นี้เพื่อพิมพ์แบบฟอร์มการขออนุญาตวางของ
        <br><br>
        &emsp;
        **หมายเหตุ**<br>
        &emsp;
        <button class="btn btn-primary btn-sm">
            <i class="fas fa-print"></i>
        </button>&ensp;
        หมายถึง&ensp;ยังไม่ได้พิมพ์แบบฟอร์มออกจากระบบ<br>
        &emsp;
        <button class="btn btn-success btn-sm">
            <i class="fas fa-print"></i>
        </button>&ensp;
        หมายถึง&ensp;พิมพ์แบบฟอร์มออกจากระบบแล้ว<br>
        &emsp;
        <button class="btn btn-danger btn-sm">
            <i class="fas fa-print"></i>
        </button>&ensp;
        หมายถึง&ensp;ไม่สามารถพิมพ์แบบฟอร์มออกจากระบบได้
        <br><br>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
</script>
<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
<script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../../assets/js/argon.js?v=1.2.0"></script>
<script type="text/javascript">