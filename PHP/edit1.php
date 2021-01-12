<?php

include 'config.php';

if (isset($_GET['ni'])) {
  $ni  = $_GET['ni'];
  $ni2  = substr_replace($ni, '+', -5, -4);
  $sql = "SELECT * FROM maros_penguapan WHERE data_timestamp = '$ni2' ";
  $query  = mysqli_query($db_link, $sql);

  $data    = mysqli_fetch_array($query);
  $data_timestamp = $data['data_timestamp'];
  $height_diff = $data['height_diff'];
  $rainfall = $data['rainfall'];
  $evaporation = $data['evaporation'];
  $windspeed = $data['windspeed'];
  $temp_water = $data['temp_water'];

  if ($data = null) {
    echo "$ni";
  }
} else {
  $data_timestamp = '';
  $height_diff = '';
  $rainfall = '';
  $evaporation = '';
  $windspeed = '';
  $temp_water = '';
}


if (isset($_POST['tedit'])) {
  $WMO_ID = "97184";
  $data_timestamp = $_POST['data_timestamp'];
  $height_diff = $_POST['height_diff'];
  $rainfall = $_POST['rainfall'];
  $evaporation = $_POST['evaporation'];
  $windspeed = $_POST['windspeed'];
  $temp_water = $_POST['temp_water'];

  $sql    = "UPDATE maros_penguapan SET WMO_ID = '$WMO_ID', height_diff = '$height_diff', rainfall = '$rainfall', evaporation = '$evaporation', windspeed = '$windspeed', temp_water = '$temp_water'  WHERE data_timestamp = '$data_timestamp'";
  mysqli_query($db_link, $sql);

  $num = mysqli_affected_rows($db_link);

  if ($num > 0) {
    echo '<script>window.location.href = "http://localhost/mkgsoft/reportmonitorhujan.php";</script>';
  } else {
    echo "<script>alert('edit data gagal dilakukan, cek kembali koneksi database');</script>";
  }
}
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Report Data</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-globe"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MKG Soft</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Informasi Umum
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-info-circle"></i>
          <span>Data Stasiun</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menurut Wilayah:</h6>
            <a class="collapse-item" href="tablesregion1.html">Region I</a>
            <a class="collapse-item" href="tablesregion2.html">Region II</a>
            <a class="collapse-item" href="tablesregion3.html">Region III</a>
            <a class="collapse-item" href="tablesregion4.html">Region IV</a>
            <a class="collapse-item" href="tablesregion5.html">Region V</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-balance-scale-right"></i>
          <span>Parameter</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menurut Bidang:</h6>
            <a class="collapse-item" href="utilities-color.html">Meteorologi</a>
            <a class="collapse-item" href="utilities-border.html">Klimatologi</a>
            <a class="collapse-item" href="utilities-animation.html">Geofisika</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data MKG
      </div>

      <!-- Nav Item - Ekspor -->
      <li class="nav-item">
        <a class="nav-link" href="../exporttablesdaftardat.html">
          <i class="fas fa-fw fa-file-export"></i>
          <span>Ekspor</span></a>
      </li>

      <!-- Nav Item - Monitor -->
      <li class="nav-item">
        <a class="nav-link" href="../tablesdaftardata.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Monitor</span></a>
      </li>

      <!-- Nav Item - Monitor -->
      <li class="nav-item">
        <a class="nav-link" href="../reporttablesdaftardat.html">
          <i class="fas fa-fw fa-file-import"></i>
          <span>Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!--Heading-->
      <div class="sidebar-heading">
        Lainnya
      </div>

      <!--Nav Item - Pages Collapse Menu-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkun" aria-expanded="true" aria-controls="collapseAkun">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pengaturan Akun</span>
        </a>
        <div id="collapseAkun" class="collapse" aria-labelledby="headingAkun" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-user-secret"></i>
          <span>Developer</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Selamat datang! Cari data apa?" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Pusat Notifikasi
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Pusat Pesan
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                      problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                      would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                      the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                      told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Andreas Kristiawan</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profil.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log Aktivitas
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
          <h1 class="h3 mb-2 text-gray-800">Report Data</h1>
          <p class="mb-4">
          </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <h2>
                <p align="center">ADD DATA</p>
              </h2>
              <form method="post" action="">
                <table width="1000" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">

                  <tr>
                    <td width="189" height="20"> </td>
                    <td width="26"> </td>
                    <td width="331"> </td>
                  </tr>

                  <tr>
                    <td width='42%' height="27" align="right" valign="middle">Data Time Stamp</td>
                    <td width='3%' align="center" valign="middle">:</td>
                    <td width='15%' align="left" valign="middle"><label>
                        <input name="data_timestamp" type="text" size="10" value="<?php echo $ni2; ?>" </label></td>
                    <td width='40%' height="27" align="left" valign="middle">(Contoh: 2015-12-16 00:00:00.0 +0:00)</td>
                  </tr>

                  <tr>
                    <td height="27" align="right" valign="middle">Height Diff. (mm)</td>
                    <td align="center" valign="top">:</td>
                    <td valign="middle"><label>
                        <input name="height_diff" type="text" size="5" value="<?php echo $height_diff; ?>" </label></td>
                    <td width='300' height="27" he align="left" valign="middle">(Contoh: 25.2)</td>
                  </tr>

                  <tr>
                    <td height="27" align="right" valign="middle">Rainfall (mm)</td>
                    <td align="center" valign="top">:</td>
                    <td valign="middle"><label>
                        <input type="text" name="rainfall" size="5" value="<?php echo $rainfall; ?>" </label></td>
                    <td width='300' height=" 27" he align="left" valign="middle">(Contoh: 1.5)</td>
                  </tr>

                  <tr>
                    <td height="27" align="right" valign="middle">Evaporation (mm)</td>
                    <td align="center" valign="top">:</td>
                    <td valign="middle"><label>
                        <input type="text" name="evaporation" size="5" value="<?php echo $evaporation; ?>" </label></td>
                    <td width='300' height=" 27" he align="left" valign="middle">(Contoh: 20.1)</td>
                  </tr>

                  <tr>
                    <td height="27" align="right" valign="middle">Wind Speed (KMH)</td>
                    <td align="center" valign="top">:</td>
                    <td valign="middle"><label>
                        <input type="text" name="windspeed" size="5" value="<?php echo $windspeed; ?>" </label></td>
                    <td width='300' height=" 27" he align="left" valign="middle">(Contoh: 2)</td>
                  </tr>

                  <tr>
                    <td height="27" align="right" valign="middle">Temperature Water (C)</td>
                    <td align="center" valign="top">:</td>
                    <td valign="middle"><label>
                        <input type="text" name="temp_water" size="5" value="<?php echo $temp_water; ?>" </label></td>
                    <td width='300' height=" 27" he align="left" valign="middle">(Contoh: 32)</td>
                  </tr>

                  <tr>
                    <td height="42"> </td>
                    <td> </td>
                    <td><input type="submit" name="tedit" value"EDIT"></td>
                  </tr>

                </table>
              </form>
            </div>
          </div>

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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>