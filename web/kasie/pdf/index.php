<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial','B',16);
for($i=1;$i<=40;$i++){
$pdf -> Cell(0,10,'Baris dalam dokumen yang ke '.$i,0,1);
}
$pdf -> output();
?>