  <h1>
      Home (หน้าแรก)
  </h1>
  <br>
  <div class="card">
      <div class="table-responsive">
          <table class="table align-items-center table-flush" id="example">
              <thead class="thead-light">
                  <tr>
                      <th scope="col" class="sort" data-sort="name">#</th>
                      <th scope="col" class="sort" data-sort="budget">Running Number</th>
                      <th scope="col" class="sort" data-sort="status">Item</th>
                      <th scope="col">Date</th>
                      <th scope="col" class="sort" data-sort="completion">Status</th>

                  </tr>
              </thead>
              <tbody class="list">
                  <?php for ($i = 0; count($obj_status); $i++) { ?>
                  <tr>
                      <th scope="row">
                          <div class="media align-items-center">
                              <div class="media-body">
                                  <span class="name mb-0 text-sm"><?php echo $i + 1;  ?></span>
                              </div>
                          </div>
                      </th>
                      <td class="budget">
                          <span class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_hr_no ?></span>
                      </td>
                      <td>
                          <span class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_item ?></span>
                      </td>
                      <td>
                          <span
                              class="name mb-0 text-sm"><?php echo $obj_status[$i]->req_start_date . '-' . $obj_status[$i]->req_end_date ?></span>
                      </td>
                      <td>
                          <?php if ($obj_status[$i]->req_status > 0) { ?>
                          <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                          </span>
                          <?php } else if ($obj_status[$i]->req_status <= 0) { ?>
                          <span class="badge badge-dot mr-4">
                              <i class="bg-danger"></i>
                              <span class="status">disapproved</span>
                          </span>
                          <?php } else if ($obj_status[$i]->req_status == 4) { ?>
                          <span class="badge badge-dot mr-4">
                              <i class="bg-success"></i>
                              <span class="status">approved</span>
                          </span>
                          <?php } ?>
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