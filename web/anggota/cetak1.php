<?php
# koneksi database
mysql_connect("localhost","root","");
mysql_select_db("laporan");

# include fdpf tergantung direktori file kamu
include "fpdf/fpdf.php";
$tgl = date('d-M-Y');
$pdf = new FPDF('P','mm',array(297,210));
$pdf->Open();
$pdf->addPage();
$pdf->setAutoPageBreak(false);

# header
$pdf->setFont('Arial','',12);
$pdf->text(56,20,'PEMERINTAHAN PROVINSI SUMATERA TENGAH');
$pdf->text(70,26,'DAFTAR NAMA ASN TAHUN '.date('Y'));
$yi = 44;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(10,6,'NO',1,0,'C',1);
$pdf->CELL(40,6,'NIP',1,0,'C',1);
$pdf->CELL(60,6,'NAMA PEGAWAI',1,0,'C',1);
$pdf->CELL(80,6,'ALAMAT',1,0,'C',1);

# menampilkan data dari database
$sql = mysql_query("select * from pegawai order by nip asc");
$no = 1;
$row = 6;
$ya = $yi + $row;
while($data = mysql_fetch_array($sql)){
  $pdf->setXY(10,$ya);
  $pdf->setFont('arial','',9);
  $pdf->setFillColor(255,255,255);
  $pdf->cell(10,6,$no,1,0,'C',1);
  $pdf->cell(40,6,$data['nip'],1,0,'L',1);
  $pdf->cell(60,6,$data['nama'],1,0,'L',1);
  $pdf->CELL(80,6,$data['alamat'],1,0,'L',1);
  $ya = $ya+$row;
  $no++;
}

# untuk menuliskan nama bulan dengan format Indonesia
$bln_list = array(
  '01' => 'Januari',
  '02' => 'Februari',
  '03' => 'Maret',
  '04' => 'April',
  '05' => 'Mei',
  '06' => 'Juni',
  '07' => 'Juli',
  '08' => 'Agustus',
  '09' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember'
);

# footer
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->SetX(120);
$pdf->MultiCell(95,10,'Sumatera, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,0, 'KEPALA DAERAH',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,20, ' ',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, 'CAHYA SUKIDIN, S.KOM',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, '_________________________',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,8, 'NIP : 19680101 199303 1 001',0,'C');
$pdf->Ln();
$pdf->output();
?>