<?php
$fname="Prakash";
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
var_dump(get_class_methods($pdf));

$pdf->SetFont("Arial","B",16);
//Cell()
$pdf->Cell(0,10,"ABC STUDY CENTER {$fname}",0,0);

$pdf->output();

?>