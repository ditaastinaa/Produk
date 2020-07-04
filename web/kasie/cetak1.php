<?php
# koneksi database
include '../../dbconfig.php';
# include fdpf tergantung direktori file kamu
require('pdf/fpdf.php');
$tgl = date('d-M-Y');
$pdf = new FPDF('l','mm',array(356,216));
$pdf->addPage();
$pdf->setAutoPageBreak(false);

# untuk menuliskan nama bulan dengan format Indonesia

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

# header
$pdf->setFont('Arial','',12);
$pdf->Image('wo1.png',0,10,37);
$pdf->text(65,20,'DAFTAR PERUSAHAAN KAPAL PENUMPANG DAN ARMADA KAPAL');
$pdf->text(90,26,'KANTOR PELABUHAN BATAM '.$bln_list[date('m')].' '.date('Y'));
$yi = 44;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(7,6,'NO',1,0,'C',1);
$pdf->CELL(55,6,'NAMA KAPAL',1,0,'C',1);
$pdf->CELL(33,6,'JENIS ARMADA',1,0,'C',1);
$pdf->CELL(71,6,'NAMA PELABUHAN',1,0,'C',1);
$pdf->CELL(37,6,'JAM KEBERANGKATAN',1,0,'C',1);
$pdf->CELL(45,6,'TUJUAN',1,0,'C',1);
$pdf->CELL(49,6,'NAMA PERUSAHAAN',1,0,'C',1);
$pdf->CELL(38,6,'PESANGGER FAKTOR',1,0,'C',1);
# menampilkan data dari database
// from dan edn ini adalah nama dari form star_filter.php yang berfungsi untuk memanggil tanggal yang di atur
// memanggil database

if(isset($_POST['cetakpdf'])){
$tgl1 = $_POST['dari_tgl'];
$tgl2 = $_POST['sampai_tgl'];
$sql = mysqli_query($connect, "SELECT * FROM data_trayek WHERE tgl_sekarang BETWEEN '$tgl1' AND '$tgl2' ");
}
else
{
  $sql = mysqli_query($connect, "SELECT * FROM data_trayek");
}

$sql2 = mysqli_query($connect, "SELECT * FROM data_kabid");
$no = 1;
$row = 6;
$ya = $yi + $row;
// while($data = mysqli_fetch_array($tampil)){
while($data = mysqli_fetch_array($sql)){ 
  $pdf->setXY(10,$ya);
  $pdf->setFont('arial','',9);
  $pdf->setFillColor(255,255,255);
  $pdf->cell(7,6,$no,1,0,'C',1);
  $pdf->cell(55,6,$data['nama'],1,0,'L',1);
  $pdf->cell(33,6,$data['armada'],1,0,'L',1);
  $pdf->cell(71,6,$data['pelabuhan'],1,0,'L',1);
  $pdf->CELL(37,6,date('H:i', strtotime ($data['berangkat'])),1,0,'C',1);
  $pdf->CELL(45,6,$data['tujuan'],1,0,'L',1);
  $pdf->CELL(49,6,$data['namaperusahaan'],1,0,'L',1);
  $pdf->CELL(38,6,$data['p_faktor'],1,0,'C',1);
  $ya = $ya+$row;
  $no++;
}


# footer
while($data = mysqli_fetch_array($sql2)){
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->SetX(250);
$pdf->MultiCell(95,10,'BATAM, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(250);
$pdf->MultiCell(95,0, 'KABID LALU LINTAS DAN ANGKUTAN LAUT',0,'C');
$pdf->SetX(250);
$pdf->MultiCell(95,10, 'SERTA TATA KELOLA KEPELABUHANAN',0,'C');
$pdf->SetX(250);
$pdf->MultiCell(95,20, ' ',0,'C');
$pdf->SetX(250);
$pdf->MultiCell(95,1, $data['nama'],0,'C');
$pdf->SetX(250);
$pdf->MultiCell(95,1, '_________________________',0,'C');
$pdf->SetX(250);
$pdf->MultiCell(95,8, 'NIP : '.$data['nip'].'' ,0,'C');
$pdf->Ln();
$pdf->output();
}
?>