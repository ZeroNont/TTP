  <style>
div.table-responsive {
    text-align: center;
}
  </style>
  <br>
  <div class="card">
      <br>
      <h1>
          &nbsp Home (หน้าแรก)
      </h1><!-- Button trigger modal -->
      <br>
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
                              <?php if ($obj_status[$i]->req_status == 1) {  ?>
                              <span class="status">pending (Supervisor)</span>
                              <?php } else if ($obj_status[$i]->req_status == 2) { ?>
                              <span class="status">pending (HR/5S center)</span>
                              <?php } else if ($obj_status[$i]->req_status == 3) { ?>
                              <span class="status">pending (Approve Plant)</span>
                              <?php } ?>
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
                          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                              <i class="fa fa-info-circle"></i> </button>

                          <?php } else { ?>
                          <button class="btn btn-secondary btn-sm"> <i class="fa fa-info-circle"></i> </button>
                          <?php } ?>


                          <div class="dropdown">
                              <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-gear"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                  <?php if ($obj_status[$i]->req_status <= 0) { ?>
                                  <a class="dropdown-item"
                                      href="<?php echo site_url() . 'licence_form/licence_input/edit_form/' . $obj_status[$i]->req_form_id; ?>">Edit
                                      Request tag</a>
                                  <?php }
                                        if ($obj_status[$i]->req_status == 4) { ?>
                                  <a class="dropdown-item"
                                      href="<?php echo site_url() . 'Renewal/Renewal/show_reform/' . $obj_status[$i]->req_form_id ?>">Renew
                                      tag</a>
                                  <a class="dropdown-item"
                                      href="<?php echo site_url() . 'Check_out_form/Check_out_form/check_out/' . $obj_status[$i]->req_form_id; ?>">Request
                                      complete</a>
                                  <?php } ?>

                              </div>
                          </div>
                          <?php if ($obj_status[$i]->req_status == 4) { ?>
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

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
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

                      </td>
                  </tr>
                  <?php } ?>
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