<?php
session_start();
if(!(isset($_SESSION['username']))||$_SESSION['username']==null){
    header('Location:stadmin/login.php');
}
if(isset($_GET['inc'])){
    if ($_GET['inc'] != 'home.php') {
        ob_start();
        $inc = $_GET['inc'];
        include $inc;
        $addevent = ob_get_clean();
    }elseif ($_GET['inc'] == 'home.php') {
            $home = "home";
        }
} else{
  ob_start();
  $inc='dashboard.php';
  include $inc;
  $addevent = ob_get_clean();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



      <?php
      if(isset($inc)) {
          if ($inc == '../ecard2.php') {
              echo '  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
';
          }
      }
//      if($inc=='../home.php'){
//          echo '
// <!-- Favicon-->
//        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
//        <!-- Font Awesome icons (free version)-->
//        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous">
//        </script>
//        <!-- Google fonts-->
//        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
//        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
//        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
//<!-- Core theme CSS (includes Bootstrap)-->
//                <link href="../css/styles.css" rel="stylesheet" />
//        ';
//
      ?>

      <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
<!--          <div class="sidebar-brand-icon rotate-n-15">-->
<!--            <i class="fas fa-laugh-wink"></i>-->
<!--          </div>-->
          <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php?inc=dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider" />

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
              <a class="nav-link" href="index.php?inc=home.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Preview</span></a
              >
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
          <a
            class="nav-link"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fas fa-fw fa-cog"></i>
            <span>Events</span>
          </a>
          <div
            id="collapseTwo"
            class="collapse show"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="index.php?inc=../ecard2.php">View events</a>
                <?php if($_SESSION['role']=='admin'){ ?>
              <a class="collapse-item" href="index.php?inc=addevent.php">Add event</a>
                <?php } ?>
                <?php if($_SESSION['role']=='admin'){ ?>
              <a class="collapse-item" href="index.php?inc=ecard2.php">Edit event</a>
                <?php }else{?>
                    <a class="collapse-item" href="index.php?inc=editevent.php&event_id=<?php echo $_SESSION['eid'] ?>">Edit event</a>
               <?php } ?>
            </div>
          </div>
        </li>
          <?php if($_SESSION['role']=='admin'){?>
          <li class="nav-item">
              <a class="nav-link" href="index.php?inc=clganddept.php">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Details</span></a
              >
          </li>
          <?php } ?>

        <!-- Nav Item - Utilities Collapse Menu -->
<!--        <li class="nav-item">-->
<!--          <a-->
<!--            class="nav-link collapsed"-->
<!--            href="#"-->
<!--            data-toggle="collapse"-->
<!--            data-target="#collapseUtilities"-->
<!--            aria-expanded="true"-->
<!--            aria-controls="collapseUtilities"-->
<!--          >-->
<!--            <i class="fas fa-fw fa-wrench"></i>-->
<!--            <span>Utilities</span>-->
<!--          </a>-->
<!--          <div-->
<!--            id="collapseUtilities"-->
<!--            class="collapse"-->
<!--            aria-labelledby="headingUtilities"-->
<!--            data-parent="#accordionSidebar"-->
<!--          >-->
<!--            <div class="bg-white py-2 collapse-inner rounded">-->
<!--              <h6 class="collapse-header">Custom Utilities:</h6>-->
<!--              <a class="collapse-item" href="utilities-color.html">Colors</a>-->
<!--              <a class="collapse-item" href="utilities-border.html">Borders</a>-->
<!--              <a class="collapse-item" href="utilities-animation.html"-->
<!--                >Animations</a-->
<!--              >-->
<!--              <a class="collapse-item" href="utilities-other.html">Other</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </li>-->

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Addons</div>

        <!-- Nav Item - Pages Collapse Menu -->
<!--        <li class="nav-item">-->
<!--          <a-->
<!--            class="nav-link collapsed"-->
<!--            href="#"-->
<!--            data-toggle="collapse"-->
<!--            data-target="#collapsePages"-->
<!--            aria-expanded="true"-->
<!--            aria-controls="collapsePages"-->
<!--          >-->
<!--            <i class="fas fa-fw fa-folder"></i>-->
<!--            <span>Pages</span>-->
<!--          </a>-->
<!--          <div-->
<!--            id="collapsePages"-->
<!--            class="collapse"-->
<!--            aria-labelledby="headingPages"-->
<!--            data-parent="#accordionSidebar"-->
<!--          >-->
<!--            <div class="bg-white py-2 collapse-inner rounded">-->
<!--              <h6 class="collapse-header">Login Screens:</h6>-->
<!--              <a class="collapse-item" href="login.html">Login</a>-->
<!--              <a class="collapse-item" href="register.html">Register</a>-->
<!--              <a class="collapse-item" href="forgot-password.html"-->
<!--                >Forgot Password</a-->
<!--              >-->
<!--              <div class="collapse-divider"></div>-->
<!--              <h6 class="collapse-header">Other Pages:</h6>-->
<!--              <a class="collapse-item" href="404.html">404 Page</a>-->
<!--              <a class="collapse-item" href="blank.html">Blank Page</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </li>-->

          <!-- Nav Item - Charts -->
          <li class="nav-item">
              <a class="nav-link" href="index.php?inc=staff.php">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Staffs</span></a
              >
          </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="index.php?inc=queries.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Queries</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="index.php?inc=eventpart.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />


<?php if($_SESSION['role']=='admin'){ ?>
          <li class="nav-item">
              <a class="nav-link" href="index.php?inc=settings.php">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Settings</span></a
              >
          </li>
          <?php } ?>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
<!--            <form-->
<!--              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"-->
<!--            >-->
<!--              <div class="input-group">-->
<!--                <input-->
<!--                  type="text"-->
<!--                  class="form-control bg-light border-0 small"-->
<!--                  placeholder="Search for..."-->
<!--                  aria-label="Search"-->
<!--                  aria-describedby="basic-addon2"-->
<!--                />-->
<!--                <div class="input-group-append">-->
<!--                  <button class="btn btn-primary" type="button">-->
<!--                    <i class="fas fa-search fa-sm"></i>-->
<!--                  </button>-->
<!--                </div>-->
<!--              </div>-->
<!--            </form>-->

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
<!--                <div-->
<!--                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"-->
<!--                  aria-labelledby="searchDropdown"-->
<!--                >-->
<!--                  <form class="form-inline mr-auto w-100 navbar-search">-->
<!--                    <div class="input-group">-->
<!--                      <input-->
<!--                        type="text"-->
<!--                        class="form-control bg-light border-0 small"-->
<!--                        placeholder="Search for..."-->
<!--                        aria-label="Search"-->
<!--                        aria-describedby="basic-addon2"-->
<!--                      />-->
<!--                      <div class="input-group-append">-->
<!--                        <button class="btn btn-primary" type="button">-->
<!--                          <i class="fas fa-search fa-sm"></i>-->
<!--                        </button>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </form>-->
<!--                </div>-->
              </li>

              <!-- Nav Item - Alerts -->
<!--              <li class="nav-item dropdown no-arrow mx-1">-->
<!--                <a-->
<!--                  class="nav-link dropdown-toggle"-->
<!--                  href="#"-->
<!--                  id="alertsDropdown"-->
<!--                  role="button"-->
<!--                  data-toggle="dropdown"-->
<!--                  aria-haspopup="true"-->
<!--                  aria-expanded="false"-->
<!--                >-->
<!--                  <i class="fas fa-bell fa-fw"></i>-->
                  <!-- Counter - Alerts -->
<!--                  <span class="badge badge-danger badge-counter">3+</span>-->
<!--                </a>-->
                <!-- Dropdown - Alerts -->
<!--                <div-->
<!--                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
<!--                  aria-labelledby="alertsDropdown"-->
<!--                >-->
<!--                  <h6 class="dropdown-header">Alerts Center</h6>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="mr-3">-->
<!--                      <div class="icon-circle bg-primary">-->
<!--                        <i class="fas fa-file-alt text-white"></i>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="small text-gray-500">December 12, 2019</div>-->
<!--                      <span class="font-weight-bold"-->
<!--                        >A new monthly report is ready to download!</span-->
<!--                      >-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="mr-3">-->
<!--                      <div class="icon-circle bg-success">-->
<!--                        <i class="fas fa-donate text-white"></i>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="small text-gray-500">December 7, 2019</div>-->
<!--                      $290.29 has been deposited into your account!-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="mr-3">-->
<!--                      <div class="icon-circle bg-warning">-->
<!--                        <i class="fas fa-exclamation-triangle text-white"></i>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="small text-gray-500">December 2, 2019</div>-->
<!--                      Spending Alert: We've noticed unusually high spending for-->
<!--                      your account.-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a-->
<!--                    class="dropdown-item text-center small text-gray-500"-->
<!--                    href="#"-->
<!--                    >Show All Alerts</a-->
<!--                  >-->
<!--                </div>-->
<!--              </li>-->

              <!-- Nav Item - Messages -->
<!--              <li class="nav-item dropdown no-arrow mx-1">-->
<!--                <a-->
<!--                  class="nav-link dropdown-toggle"-->
<!--                  href="#"-->
<!--                  id="messagesDropdown"-->
<!--                  role="button"-->
<!--                  data-toggle="dropdown"-->
<!--                  aria-haspopup="true"-->
<!--                  aria-expanded="false"-->
<!--                >-->
<!--                  <i class="fas fa-envelope fa-fw"></i>-->
                  <!-- Counter - Messages -->
<!--                  <span class="badge badge-danger badge-counter">7</span>-->
<!--                </a>-->
                <!-- Dropdown - Messages -->
<!--                <div-->
<!--                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
<!--                  aria-labelledby="messagesDropdown"-->
<!--                >-->
<!--                  <h6 class="dropdown-header">Message Center</h6>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="dropdown-list-image mr-3">-->
<!--                      <img-->
<!--                        class="rounded-circle"-->
<!--                        src="img/undraw_profile_1.svg"-->
<!--                        alt="..."-->
<!--                      />-->
<!--                      <div class="status-indicator bg-success"></div>-->
<!--                    </div>-->
<!--                    <div class="font-weight-bold">-->
<!--                      <div class="text-truncate">-->
<!--                        Hi there! I am wondering if you can help me with a-->
<!--                        problem I've been having.-->
<!--                      </div>-->
<!--                      <div class="small text-gray-500">Emily Fowler · 58m</div>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="dropdown-list-image mr-3">-->
<!--                      <img-->
<!--                        class="rounded-circle"-->
<!--                        src="img/undraw_profile_2.svg"-->
<!--                        alt="..."-->
<!--                      />-->
<!--                      <div class="status-indicator"></div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="text-truncate">-->
<!--                        I have the photos that you ordered last month, how would-->
<!--                        you like them sent to you?-->
<!--                      </div>-->
<!--                      <div class="small text-gray-500">Jae Chun · 1d</div>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="dropdown-list-image mr-3">-->
<!--                      <img-->
<!--                        class="rounded-circle"-->
<!--                        src="img/undraw_profile_3.svg"-->
<!--                        alt="..."-->
<!--                      />-->
<!--                      <div class="status-indicator bg-warning"></div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="text-truncate">-->
<!--                        Last month's report looks great, I am very happy with-->
<!--                        the progress so far, keep up the good work!-->
<!--                      </div>-->
<!--                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a class="dropdown-item d-flex align-items-center" href="#">-->
<!--                    <div class="dropdown-list-image mr-3">-->
<!--                      <img-->
<!--                        class="rounded-circle"-->
<!--                        src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"-->
<!--                        alt="..."-->
<!--                      />-->
<!--                      <div class="status-indicator bg-success"></div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <div class="text-truncate">-->
<!--                        Am I a good boy? The reason I ask is because someone-->
<!--                        told me that people say this to all dogs, even if they-->
<!--                        aren't good...-->
<!--                      </div>-->
<!--                      <div class="small text-gray-500">-->
<!--                        Chicken the Dog · 2w-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <a-->
<!--                    class="dropdown-item text-center small text-gray-500"-->
<!--                    href="#"-->
<!--                    >Read More Messages</a-->
<!--                  >-->
<!--                </div>-->
<!--              </li>-->

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    ><?php
                      if(isset($_SESSION['username'])){
                          echo $_SESSION['username'];
                      }
                      ?></span>
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="index.php?inc=stadmin/profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href=""
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-1 text-gray-800"></h1>
              <?php
              if(isset($_SESSION['tmsg'])){

                  echo '
    <div class="toast-container position-absolute p-3 top-0 end-0" id="toastPlacement">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header">
                <strong class="me-auto">Alert</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                '.$_SESSION['tmsg'].'
            </div>
        </div>
    </div>

    <script>
        var toastEl = document.querySelector(".toast");
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
        setTimeout(function(){
            toast.hide();
            setTimeout(function(){
                document.querySelector(".toast-container").remove();
            }, 1000);
        }, 5000);
        
        var xhr = new XMLHttpRequest();
xhr.open("GET", "unset.php", true);
xhr.onload = function() {
    if (xhr.status === 200) {
        // handle the response here
    } else {
        // handle errors here
    }
};
xhr.send();

    </script>
    ';

//                  unset($_SESSION['tmsg']);
              }
              ?>







              <!--Toast-->

            <script>
                document.getElementById("toastbtn").onclick = function() {
                    // var toastElList = [].slice.call(document.querySelectorAll('.toast'))
                    // var toastList = toastElList.map(function(toastEl) {
                    //     return new bootstrap.Toast(toastEl)
                    // })
                    // toastList.forEach(toast => toast.show())
                    var toastEl = document.querySelector('.toast');
                    var toast = new bootstrap.Toast(toastEl);
                    toast.show();
                }

            </script>
<!--            End of toast-->

            <!-- add event -->
            <?php

            if(isset($home)){
                echo '<div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Home Page</h1>
              <a
                href="#"
                
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Edit</a
              >
            </div>';
                echo '<iframe src="../home.php" height="700px" width="100%"></iframe>';

            }else {
                echo $addevent;
            }
              ?>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="stadmin/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                   
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script> 

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  </body>
</html>
<?php
//session_destroy();
?>
