<style>
    div.table-responsive {
        text-align: center;
    }
</style>
<br>
<div class="card">
    <div class="card-header" id="card_radius">
        <h1>
            &nbsp Home (หน้าแรก)
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
                        <th scope="col" class="sort" data-sort="completion">Printing Status</th>
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
                                        <span class="status">pending</span>
                                    </span>
                                <?php } else if ($obj_status[$i]->req_status <= 0) { ?>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">reject</span>
                                    </span>
                                <?php } else if ($obj_status[$i]->req_status >= 4) { ?>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">approved</span>
                                    </span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($obj_status[$i]->req_print_status <= 0) { ?>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">Not printing</span>
                                    </span>
                                <?php } else { ?>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">printed</span>
                                    </span>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if ($obj_status[$i]->req_status <= 0) { ?>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa fa-info-circle"></i> </button>

                                <?php } else { ?>
                                    <button class="btn btn-secondary btn-sm"> <i class="fa fa-info-circle"></i> </button>
                                <?php } ?>


                                <div class="dropdown">
                                    <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-gear"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="<?php echo site_url() . 'Renewal/Renewal/show_reform/' . $obj_status[$i]->req_form_id ?>">Renew
                                            tag</a>
                                        <a class="dropdown-item" href="<?php echo site_url() . 'Check_out_form/Check_out_form/check_out/' . $obj_status[$i]->req_form_id; ?>">Request
                                            complete</a>
                                        <a class="dropdown-item" href="<?php echo site_url() . 'licence_form/licence_input/edit_form/' . $obj_status[$i]->req_form_id; ?>">Edit
                                            Request tag</a>
                                    </div>
                                </div>
                                <?php if ($obj_status[$i]->req_status == 4) { ?>
                                    <a href="<?php echo site_url() . 'form_management/Print_form/print_detail/' . $obj_status[$i]->req_form_id; ?>">
                                        <button class="btn btn-success btn-sm">
                                            <i class="fas fa-print"></i>
                                        </button>
                                    </a>
                                <?php } else { ?>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-print"></i>
                                    </button>
                                <?php } ?>



                            </td>
                        </tr>
                    <?php } ?>
        </div>
    </div>
</div>
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