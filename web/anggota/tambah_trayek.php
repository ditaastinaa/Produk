<?php session_start();
include '../../dbconfig.php';
$message = ''; 
if(!isset($_SESSION['id_anggota'])) header("location:../../index.php");
	$id = $_SESSION['id_anggota'];
	if(isset($_POST['pelabuhan']))
	{
		

		$armada= $_POST['armada'];
		$pelabuhan= $_POST['pelabuhan'];
		$berangkat= $_POST['berangkat'];
		$tujuan= $_POST['tujuan'];
		$status= $_POST['status'];
		$masaberlaku= $_POST['masaberlaku'];
		$namaperusahaan= $_POST['namaperusahaan'];
		$kedudukan= $_POST['kedudukan'];
		$alamat= $_POST['alamat'];
		$pimpinan= $_POST['pimpinan'];
		$nama= $_POST['nama'];
		$bendera= $_POST['bendera'];
		$kapasitas= $_POST['kapasitas'];
		$jumlah= $_POST['jumlah'];
		$bahan= $_POST['bahan'];
		$tahun= $_POST['tahun'];
		$keterangan= "BELUM DISETUJUI";
		$p_faktor= $jumlah / $kapasitas * 100;
		$tambah_data = "INSERT INTO data_trayek(armada, pelabuhan, berangkat, tujuan, status, masaberlaku, namaperusahaan,
		kedudukan, alamat,pimpinan,nama, bendera, kapasitas, jumlah, bahan, tahun, keterangan, p_faktor) 
					VALUES('$armada','$pelabuhan','$berangkat','$tujuan','$status','$masaberlaku','$namaperusahaan','$kedudukan','$alamat',
					'$pimpinan','$nama','$bendera','$kapasitas','$jumlah','$bahan','$tahun','$keterangan', '$p_faktor')";
					$query = mysqli_query($connect, $tambah_data) or die(mysqli_error());
		
		if($query){
			echo "<script>alert('Data berhasil ditambah')</script>";
			header('Refresh: 0; URL=data_trayek.php');
		}
		else{
			echo "<script>alert('NIM yang dimasukkan telah digunakan')</script>";
			header ('Refresh: 0; URL=tambah_trayek.php');
		}
	}
	$data_anggota = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user_anggota WHERE id_anggota='$id'"));

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

  <title>SISTEM TRAYEK - Tambah Trayek</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <!-- Custom Css -->
  <link href="css/style.css" rel="stylesheet">


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
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Trayek</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Trayek</h6>
            <a class="collapse-item active" href="tambah_trayek.php">Tambah Trayek</a>
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MASTER</h6>
            <a class="collapse-item" href="perusahaan.php">Perusahaan</a>
            <a class="collapse-item" href="pelabuhan.php">Pelabuhan</a>
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
            <h1 class="h3 mb-0 text-gray-800">Trayek</h1>
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
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					 <form id="regForm" action="tambah_trayek.php" method="post">
						<h1>TAMBAH TRAYEK</h1>

							<!-- One "tab" for each step in the form: -->
								<div class="tab">
									<p>JENIS ARMADA KAPAL</p>
									</p><p><select name="armada" id="armada">
                                        <option>- Pilih Armada Kapal -</option>
										<option value="Pelabuhan Internasional">Armada Internasional</option>
										<option value="Pelabuhan Domestik">Armada Domestik</option>
                                    </select></p>
									<p>NAMA PELABUHAN</p>
									<p><div id="kapaloption"></div></p>
									<p>NAMA PERUSAHAAN</p>								
									<p><select name="namaperusahaan" id="namaperusahaan">
                                        <option value="">- Pilih Nama Perusahaan -</option>
                                        <?php
											$sql_perusahaan = mysqli_query($connect, "SELECT * FROM data_perusahaan") or die(mysqli_error($connect));
											while ($user_data = mysqli_fetch_array($sql_perusahaan)) {
												echo '<option value = "'.$user_data['namaperusahaan'].'">'.$user_data['namaperusahaan'].'</option>';
												}
										?>
                                    </select></p>
									<p>TUJUAN TRAYEK</p>
									<p><div id="kapaloption2"></div></p>
									<p>JAM KEBERANGKATAN (*<u>12.00</u> malam - <u>11.59</u> siang gunakan <b><i>AM</b></i>, <u>12.00</u> siang - <u>11.59</u> malam gunakan <b><i>PM</b></i>)</p>
									<p><div class="row"><div class="col-10"><input required placeholder="Jam Keberangkatan" type="time" name="berangkat" id="berangkat"></div><div class="col-2"><button type="button" name="checkjam" class="btn btn-warning btn-block p-3"><i class="fa fa-search"></i></button></div></div></p>
									  <p>
										<div id="jamoption"></div>
									  </p>
									<p>STATUS KAPAL</p>
									</p><p><select name="status" id="status">
                                        <option>- Pilih Status Kapal -</option>
										<option>Dioperasikan</option>
										<option>Keagenan</option>
										<option>Milik</option>
                                    </select></p>
									
									<p>MASA BERLAKU KAPAL</p>
									<p><input placeholder="Masa Berlaku Trayek" type="text" name="masaberlaku" 
									value="<?php $masaberlaku = date('Y-m-d', strtotime('+3 month')); echo $masaberlaku; ?>" readonly/></p>

								</div>
								<div class="tab">									
									<p>KEDUDUKAN KANTOR</p>
									<p><input required placeholder="Kedudukan Kantor" type="text" name="kedudukan"></p>
									<p>ALAMAT KANTOR</p>
									<p><input required placeholder="Alamat Perusahaan" type="text" name="alamat"></p>
									<p>NAMA PENANGGUNG JAWAB / PEMIMPIN</p>
									<p><input placeholder="Nama Penanggung Jawab / Pemimpin" type="text" name="pimpinan"></p>
								</div>

								<div class="tab">
									<p>NAMA KAPAL & GT</p>
									<p><div id="option"></div></p>
									<p>BENDERA KAPAL</p>
									<p><input required placeholder="Bendera" type="text" name="bendera"></p>
									<p>KAPASITAS ANGKUT</p>
									<p><input required placeholder="Kapasitas Angkut" type="text" name="kapasitas">
									<p>JUMLAH PENUMPANG</p>
									<p><input placeholder="Jumlah Penumpang" type="text" name="jumlah">
									<p>BAHAN PEMBUATAN KAPAL</p>
									<p><input required placeholder="Bahan Pembuatan Kapal" type="text" name="bahan"></p>
									<p>TAHUN PEMBUATAN</p>
									<p><input required placeholder="Tahun Pembuatan" type="text" name="tahun"></p>
								</div>

								
																
								<div style="overflow:auto;">
									<div style="float:right;">
										<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
										<button type="button" id="nextBtn" name="nextBtn" onclick="nextPrev(1)">Next</button>
									</div>
									</div>

								<!-- Circles which indicates the steps of the form: -->
								<div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>

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

</body>
<script>
$("select[name=namaperusahaan]").on("change", function(){
	var perusahaan = $(this).val();
	$.ajax({
		type: "POST",
		url: "process.php",
		data: {
			id : perusahaan
		}
	}).done(function(msg){
		var res = JSON.parse(msg);
		$("input[name=kedudukan]").val(res[0]).attr("readonly","readonly");
		$("input[name=alamat]").val(res[1]).attr("readonly","readonly");
		$("input[name=pimpinan]").val(res[2]).attr("readonly","readonly");
	})
	$.ajax({
		type: "GET",
		url: "option.php",
		data: {
			id : perusahaan
		}
	}).done(function(msg){
		$("div#option").html(msg);
	})
});

$("select[name=armada]").on("change", function(){
	var armada = $("select[name=armada]").val();
	$.ajax({
		type: "POST",
		url: "kapal-result.php",
		data: {
			id : armada
		}
	}).done(function(msg){
		$("div#kapaloption").html(msg);
	})
})

$("select[name=armada]").on("change", function(){
	var armada = $("select[name=armada]").val();
	$.ajax({
		type: "POST",
		url: "kapal-result2.php",
		data: {
			id : armada
		}
	}).done(function(msg){
		$("div#kapaloption2").html(msg);
	})
})

$("button[name=checkjam]").click(function(){
  var jam = $("input[name=berangkat]").val();
	$.ajax({
		type: "POST",
		url: "jam-result.php",
		data: {
			id : jam
		}
	}).done(function(msg){
		$("div#jamoption").html(msg);
	})
})
</script>

</html>
