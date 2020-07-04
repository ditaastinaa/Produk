<?php
session_start()
if(!isset($_SESSION['id_anggota'])) header("location:../../index.php");
    Include "../../dbconfig.php";
	date_default_timezone_set('Asia/Jakarta');
	if(!isset($_POST['id_trayek']))
	{
		echo "error";
	}
	$id = $_POST['id_trayek'];
	$hasil=mysqli_query($connect,"SELECT * FROM data_trayek WHERE id_trayek = '$id';");
	while($data=mysqli_fetch_array($hasil)){
?>
			<p>Berikut ini adalah detail dari data trayek <b><?php echo $data['pelabuhan']; ?> - <?php echo $data['tujuan']; ?></b></p>
			 <div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<th>KETERANGAN TRAYEK</th>
					<td><?php echo $data['keterangan']; ?></td>
				</tr>
				<tr>
					<th>JENIS ARMADA</th>
					<td><?php echo $data['armada']; ?></td>
				</tr>
				<tr>
					<th>PELABUHAN ASAL</th>
					<td><?php echo $data['pelabuhan']; ?></td>
				</tr>
				<tr>
					<th>NAMA KAPAL</th>
					<td><?php echo $data['nama']; ?></td>
				</tr>
				<tr>
					<th>BENDERA</th>
					<td><?php echo $data['bendera']; ?></td>
				</tr>
				<tr>
					<th>JAM KEBERANGKATAN</th>
					<td><?php echo date('H:i', strtotime ($data['berangkat']));?></td>
				</tr>
				<tr>
					<th>TUJUAN</th>
					<td><?php echo $data['tujuan']; ?></td>
				</tr>
				<tr>
					<th>STATUS KAPAL</th>
					<td><?php echo $data['status']; ?></td>
				</tr>
				<tr>
					<th>MASA BERLAKU</th>
					<td><?php echo date('d-m-Y', strtotime ($data['masaberlaku']));?></td>
				</tr>
				<tr>
					<th>NAMA PERUSAHAAN</th>
					<td><?php echo $data['namaperusahaan']; ?></td>
				</tr>
				<tr>
				<tr>
					<th>KAPASITAS KAPAL</th>
					<td><?php echo $data['kapasitas']; ?></td>
				</tr>
				<tr>
					<th>JUMLAH PENUMPANG</th>
					<td><?php echo $data['jumlah']; ?></td>
				</tr>
				<tr>
					<th>BAHAN KAPAL</th>
					<td><?php echo $data['bahan']; ?></td>
				</tr>
				<tr>
					<th>PESANGER FAKTOR</th>
					<td><?php echo $data['p_faktor']; ?> %</td>
				</tr>
					<th>ALAMAT PERUSAHAAN</th>
					<td><?php echo $data['alamat']; ?></td>
				</tr>
				<tr>
					<th>KEDUDUKAN KANTOR</th>
					<td><?php echo $data['kedudukan']; ?></td>
				</tr>
				<tr>
					<th>NAMA PIMPINAN</th>
					<td><?php echo $data['pimpinan']; ?></td>
				</tr>				
				</table>
				<?php } ?>
      </div>
      <!-- //Modal content-->
			
    </div>
	  