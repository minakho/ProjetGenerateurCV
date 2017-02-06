<?php

require("fpdf/fpdf.php");

class PDF extends FPDF
{
// Pied de page
function Footer()
{
 
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$codep=$_POST['codep'];
$mail=$_POST['mail'];
$num=$_POST['num'];
$titre=$_POST['titre'];
$comp=$_POST['comp'];
$exp=$_POST['exp'];
$acti=$_POST['acti'];
$pé=$_POST['pé'];
$vité=$_POST['vité'];
$forma=$_POST['forma'];
$tion=$_POST['tion'];
$loisir=$_POST['loisir'];
$photo=$_POST['photo'];



$pdf=new PDF();
$pdf->AddPage();
$pdf->SetTitle("CV");

//INFO PERSO
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(20,20);
$pdf->Cell(20,5,utf8_decode($nom));

$pdf->Cell(25,5,utf8_decode($prenom));

$pdf->SetXY(20,20);
$pdf->SetFont('Arial','B',10);
$pdf->Write(15, utf8_decode("{$adresse}"));

$pdf->SetXY(20,30);
$pdf->Write(5, utf8_decode("{$codep}"));

$pdf->SetXY(20,40);
$pdf->Write(-5, utf8_decode("{$mail}"));

$pdf->SetXY(20,50);
$pdf->Write(-15, utf8_decode("{$num}"));

//PHOTO
$pdf->Image($photo, 160,10,30);

//TITRE
$pdf->SetXY(60, 40);
$pdf->SetFont('Arial','B',18);
$pdf->Write(50, utf8_decode("{$titre}"));

//EXPRERIENCE
$pdf->SetXY(10, 60);
	$pdf->SetFont('Arial','U',15);
	$pdf->SetTextColor(15, 69, 107);
	$pdf->Write(60, "EXPERIENCES PROFESSIONNELLES");

$pdf->SetXY(10,100);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("- {$exp}"));

$pdf->SetXY(10,120);
$pdf->Cell(10,0,utf8_decode("- {$acti}"));

$pdf->SetXY(10,110);
$pdf->Cell(10,0,utf8_decode(" {$pé}"));

$pdf->SetXY(10,130);
$pdf->Cell(10,0,utf8_decode(" {$vité}"));
//FORMATION
$pdf->SetXY(10, 120);
	$pdf->SetFont('Arial','U',15);
	$pdf->SetTextColor(15, 69, 107);
	$pdf->Write(60, "FORMATIONS");


$pdf->SetXY(10,160);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("- {$forma}"));

$pdf->SetXY(10,170);
$pdf->Cell(10,0,utf8_decode("- {$tion}"));


//COMPTETENCES
$pdf->SetXY(10, 160);
	$pdf->SetFont('Arial','U',15);
	$pdf->SetTextColor(15, 69, 107);
	$pdf->Write(60, "COMPETENCES");


$pdf->SetXY(10,200);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("{$comp}"));

//LOISIRS
$pdf->SetXY(10, 190);
	$pdf->SetFont('Arial','U',15);
	$pdf->SetTextColor(15, 69, 107);
	$pdf->Write(60, "LOISIRS");


$pdf->SetXY(10,230);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("{$loisir}"));






$pdf->output();





?>