<?php
require('./FPDF/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,2,'Hello World!',0,1,'C');
$pdf->Ln();
$pdf->Cell(60,10,'Powered by FPDF.',0,1,'C');
$pdf->image("aa.png", 10, 10, 30, 0, '', "http://www.google.com");
$pdf->output();


?>