  <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-danger border-bottom">
          <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Navbar links -->
                  <ul class="navbar-nav align-items-center  ml-md-auto ">
                      <li class="nav-item d-xl-none">
                          <!-- Sidenav toggler -->
                          <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                              data-target="#sidenav-main">
                              <div class="sidenav-toggler-inner">
                                  <i class="sidenav-toggler-line"></i>
                                  <i class="sidenav-toggler-line"></i>
                                  <i class="sidenav-toggler-line"></i>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item d-sm-none">
                          <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                              <i class="ni ni-zoom-split-in"></i>
                          </a>
                      </li>


                  </ul>

                  <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">

                      <!-- bell -->
                      
                      <li class="nav-item dropdown">
                          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ni ni-bell-55"></i>
                              
                          </a>
                          <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                              <!-- Dropdown header -->
                              <div class="px-3 py-3">
                                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary"><?php echo $arr_edit ?></strong>
                                      notifications.</h6>
                              </div>
                              <!-- List group -->
                              <div class="list-group list-group-flush">
                                  <a href="#!" class="list-group-item list-group-item-action">
                                      <div class="row align-items-center">
                                          
                                          <div class="col ml--2">
                                              <div class="d-flex justify-content-between align-items-center">
                                                  <div>
                                                      <h4 class="mb-0 text-sm">John Snow</h4>
                                                  </div>
                                                  <div class="text-right text-muted">
                                                      <small>2 hrs ago</small>
                                                  </div>
                                              </div>
                                              <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </li>
                      


                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url() . 'Login/Login/logout' ?>"
                              class="dropdown-item" class="dropdown-item">
                              <i class="ni ni-user-run"></i>
                              <span class="nav-link-text">Logout</span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Header -->
      <br>
      <br>
      <br>
      <br>
      <!-- Page content -->
      <div class="container-fluid mt--6">