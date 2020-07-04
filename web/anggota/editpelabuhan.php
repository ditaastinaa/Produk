<?php session_start();
include '../../dbconfig.php';
if(!isset($_SESSION['id_anggota'])) header("location:../../index.php");

	$id = $_SESSION['id_anggota'];
	$data_anggota = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user_anggota WHERE id_anggota='$id'"));
	if(isset($_POST['update'])){	
	$id_pelabuhan = $_POST['id_pelabuhan'];	
	$nama_pel = $_POST['nama_pel'];
	$jenis = $_POST['jenis'];
		
		// update user data
		$result = mysqli_query($connect, "UPDATE data_pelabuhan SET nama_pel='$nama_pel', jenis='$jenis' WHERE id_pelabuhan=$id_pelabuhan");
	
		// Redirect to homepage to display updated user in list
		header("Location: pelabuhan.php");
		}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pelabuhan = $_GET['id_pelabuhan'];
 
// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM data_pelabuhan WHERE id_pelabuhan=$id_pelabuhan");
 
while($user_data = mysqli_fetch_array($result))
{	
	$id_pelabuhan = $user_data['id_pelabuhan'];
	$nama_pel = $user_data['nama_pel'];
	$jenis = $user_data['jenis'];
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <title>SISTEM TRAYEK - Ubah Pelabuhan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img width='100' height='50' src='img/wo1.png'>
        </div>
        <div class="sidebar-brand-text mx-3">ANGGOTA SEKSI LLAL</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        TRAYEK
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Trayek</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Trayek</h6>
            <a class="collapse-item" href="tambah_trayek.php">Tambah Trayek</a>
            <a class="collapse-item" href="data_trayek.php">Data Trayek</a>
          </div>
        </div>
      </li>
   
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MASTER
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
	  <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master</h6>
            <a class="collapse-item" href="perusahaan.php">Perusahaan</a>
            <a class="collapse-item active" href="pelabuhan.php">Pelabuhan</a>
            <a class="collapse-item" href="kapal.php">Kapal</a>
          </div>
        </div>
      </li>
	  
	  <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="kabid.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kepala Bidang</span></a>
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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $data_anggota['nama']; ?></span>
                <img class="img-profile rounded-circle" src="img/wo1.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="edit_pass.php">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Password
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
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">PELABUHAN</h1>
			<div style="float:right"><h2>
				<?php
					$waktu = time();
					date_default_timezone_set('Asia/Jakarta');
					$format_waktu = date('l, d-m-Y H:i', $waktu);
					echo $format_waktu;
				?></h2>
			</div>
			</div>
          
          

		  <!-- ISI -->
		  
			<div class="card shadow mb-4">
				<div class="card-body">					
					 <form id="update_pelabuhan" name="update_pelabuhan" action="editpelabuhan.php" method="POST">
						<h1>UBAH DATA PELABUHAN</h1>

							<!-- One "tab" for each step in the form: -->
								<div class="tab">
									<label>ID PELABUHAN</label>  
									  <input readonly type="text" name="id_pelabuhan" id="id_pelabuhan" class="form-control" value="<?php echo $id_pelabuhan;?>" />  
									  <br />  
									  <label>NAMA PELABUHAN</label>  
									  <input type="text" name="nama_pel" id="nama_pel" class="form-control" value="<?php echo $nama_pel;?>"/>  
									  <br />
									  <label>JENIS PELABUHAN</label>  
									  <select name="jenis" id="jenis" class="form-control" />
										<option>- Pilih Jenis Pelabuhan -</option>
										<option <?php echo ($jenis == "Pelabuhan Internasional" ? "selected" : "")?>>PELABUHAN INTERNASIONAL</option>
										<option <?php echo ($jenis == "Pelabuhan Domestik" ? "selected" : "")?>>PELABUHAN DOMESTIK</option>
									  </select>
									  <br />
								</div>
								<button name="update" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>	
								<a href="pelabuhan.php"><button type="button" class="btn btn-danger tombol"><i class="fa fa-times"></i> Cancel</button></a>								
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
            <span>Copyright &copy; Your Website 2019</span>
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
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 
  <!-- Demo Js -->
  <script src="js/js.js"></script>
	
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>