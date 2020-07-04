<?php
session_start();
include '../../../dbconfig.php';
require('../../pdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");
if(isset($_GET['jurusan'])){
	$jurusan = $_GET['jurusan'];
	$tahun = $_GET['tahun'];
	$pra = $_GET['pra'];
	$hsl = mysqli_query($connect, "SELECT * FROM hasil WHERE id_jurusan='$jurusan' AND tahun='$tahun' AND pra='$pra'");
	$kues = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM kuesioner"));
	$nama = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM jurusan WHERE id='$jurusan'"));
	$tanya1 = 0;
	$tanya2 = 0;
	$tanya3 = 0;
	$tanya4 = 0;
	$tanya5 = 0;
	$jml_mhs = 0;
	while($data = mysqli_fetch_array($hsl)){
		$tanya1 = $tanya1 + $data['tanya_1'];
		$tanya2 = $tanya2 + $data['tanya_2'];
		$tanya3 = $tanya3 + $data['tanya_3'];
		$tanya4 = $tanya4 + $data['tanya_4'];
		$tanya5 = $tanya5 + $data['tanya_5'];
		$jml_mhs = $jml_mhs + $data['jml_mhs'];
	}
	$mhs = mysqli_query($connect, "SELECT DISTINCT nim FROM hasil_mhs WHERE tahun=$tahun AND pra='$pra'");
	$tot_mhs = 0;
	while($t_mhs = mysqli_fetch_array($mhs)){
		$nim_mhs = $t_mhs['nim'];
		$cek = mysqli_fetch_array(mysqli_query($connect, "SELECT jurusan FROM data_mhs WHERE nim='$nim_mhs'"));
		if($cek[0]==$jurusan){
			$tot_mhs = $tot_mhs + 1;
		}
	}
}
$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Cell(0,0.7,'HASIL KUESIONER',0,0,'C');
$pdf->SetFont('Times','B',11);
$pdf->ln(1);
$pdf->Cell(4, 0.8, 'Jurusan', 0, 0, 'L');
$pdf->Cell(3, 0.8, ':      '.$nama['nama'], 0, 0, 'L');
$pdf->ln(0.8);
$pdf->Cell(4, 0.8, 'Tahun', 0, 0, 'L');
$pdf->Cell(3, 0.8, ':      '.$tahun, 0, 0, 'L');
$pdf->ln(0.8);
$pdf->Cell(4, 0.8, 'Jenis Kuesioner', 0, 0, 'L');
$pdf->Cell(3, 0.8, ':      Sebelum '.$pra, 0, 0, 'L');
$pdf->ln(0.8);
$pdf->Cell(4, 0.8, 'Jumlah Mahasiswa', 0, 0, 'L');
$pdf->Cell(3, 0.8, ':      '.$tot_mhs.' Mahasiswa', 0, 0, 'L');
$pdf->ln(0.8);
$pdf->Cell(4, 0.8, 'Total Penilaian', 0, 0, 'L');
$pdf->Cell(3, 0.8, ':      '.$jml_mhs.' Penilaian', 0, 0, 'L');
$pdf->ln(2);
include "data_cetak.php";

$pdf->Output("hasil.pdf","I");

?>

