<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: "Times New Roman", serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Laporan.xls");
	$bln_list = array(
		  '01' => 'JANUARI',
		  '02' => 'FEBRUARI',
		  '03' => 'MARET',
		  '04' => 'APRIL',
		  '05' => 'MEI',
		  '06' => 'JUNI',
		  '07' => 'JULI',
		  '08' => 'AGUSTUS',
		  '09' => 'SEPTEMBER',
		  '10' => 'OKTOBER',
		  '11' => 'NOVEMBER',
		  '12' => 'DESEMBER'
		);
	?>
	
	<center>
		<h1><b>DAFTAR PERUSAHAAN KAPAL PENUMPANG DAN ARMADA KAPAL</b></h1>
		<h1><b>KANTOR PELABUHAN BATAM <?php echo $bln_list[date('m')].' '.date('Y')?></b></h1>
		
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>JENIS ARMADA KAPAL</th>
			<th>NAMA PELABUHAN</th>
			<th>NAMA KAPAL & GT</th>
			<th>BENDERA KAPAL</th>
			<th>TUJUAN TRAYEK</th>
			<th>JAM KEBERANGKATAN</th>
			<th>STATUS KAPAL</th>
			<th>BAHAN PEMBUAT KAPAL</th>
			<th>KAPASITAS KAPAL</th>
			<th>JUMLAH PENUMPANG</th>
			<th>TAHUN PEMBUATAN</th>
			<th>MASA BERLAKU TRAYEK</th>
			<th>NAMA PERUSAHAAN</th>
			<th>KEDUDUKAN KANTOR</th>
			<th>ALAMAT KANTOR</th>
			<th>NAMA PIMPINAN</th>
			<th>PESANGGER FAKTOR</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","ta");
		

		// menampilkan data trayek
		if(isset($_POST['cetakexcel'])){
		$tgl1 = $_POST['dari_tgl'];
		$tgl2 = $_POST['sampai_tgl'];
		$data = mysqli_query($koneksi, "SELECT * FROM data_trayek WHERE tgl_sekarang BETWEEN '$tgl1' AND '$tgl2' ");
		}
		else
		{
		  $data = mysqli_query($koneksi, "SELECT * FROM data_trayek");
		}
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['armada']; ?></td>
			<td><?php echo $d['pelabuhan']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['bendera']; ?></td>
			<td><?php echo $d['tujuan']; ?></td>
			<td><?php echo date('H:i', strtotime ($d['berangkat'])); ?></td>
			<td><?php echo $d['status']; ?></td>
			<td><?php echo $d['bahan']; ?></td>
			<td><?php echo $d['kapasitas']; ?></td>
			<td><?php echo $d['jumlah']; ?></td>
			<td><?php echo $d['tahun']; ?></td>
			<td><?php echo date('d-m-Y', strtotime ($d['masaberlaku'])); ?></td>
			<td><?php echo $d['namaperusahaan']; ?></td>
			<td><?php echo $d['kedudukan']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['pimpinan']; ?></td>
			<td><?php echo $d['p_faktor']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	
	<?php 
		
		// menampilkan data pegawai
		$data1 = mysqli_query($koneksi,"select * from data_kabid");
		while($a = mysqli_fetch_array($data1)){
		?>
	<footer>
	<div style="text-align:right"> 
	   <p>BATAM, <?php echo date('d').' '.$bln_list[date('m')].' '.date('Y')?>
	   <br>KABID LALU LINTAS DAN ANGKUTAN LAUT</br>
	   <br>SERTA TATA KELOLA KEPELABUHANAN</br>
	   <br></br>
	   <br></br>
	   <br><u><?php echo $a['nama']; ?></u></br>
	   <br>NIP: <?php echo $a['nip']; ?></br>
	   </p>
		</div></footer><?php } ?>
</body>
</html>