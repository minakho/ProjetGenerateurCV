<?php

require("../fpdf/fpdf.php");

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
$de=$_POST['de'];
$tail=$_POST['tail'];
$loisir=$_POST['loisir'];
$photo=$_POST['photo'];



$pdf=new PDF();
$pdf->AddPage();
$pdf->SetTitle("CV Original");


//PHOTO

$pdf->SetFont('Arial', 'B', 12); 
$pdf->SetXY(0,0);
$pdf->SetFillColor(70,130,180); 
$pdf->Cell(275,40, '', '', 0, '', true); 
$pdf->Image($photo, 160,5,25);


//INFO PERSO
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(225, 225, 225);
$pdf->SetXY(10,10);
$pdf->Cell(20,5,utf8_decode($nom));

$pdf->SetXY(35,10);
$pdf->Cell(25,5,utf8_decode($prenom));

$pdf->SetXY(10,10);
$pdf->SetFont('Arial','B',10);
$pdf->Write(15, utf8_decode("{$adresse}"));

$pdf->SetXY(10,20);
$pdf->Write(5, utf8_decode("{$codep}"));

$pdf->SetXY(10,30);
$pdf->Write(-5, utf8_decode("{$mail}"));

$pdf->SetXY(10,40);
$pdf->Write(-15, utf8_decode("{$num}"));


//TITRE
$pdf->SetXY(10, 55);
$pdf->SetFont('Courier','B',18);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0,7, utf8_decode("{$titre}"),1,0,'C');

//EXPRERIENCE
$pdf->SetXY(10, 80);
$pdf->SetFont('Courier','B',15);
$pdf->SetFillColor(70,130,180);
$pdf->SetTextColor(225, 225, 225);
$pdf->Cell(0,7, "    EXPERIENCES PROFESSIONNELLES",0,1,'L',true);
$pdf->Image('img/exp.png', 12, 80,8);

$pdf->SetXY(10,95);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("- {$exp}"));

$pdf->SetXY(10,115);
$pdf->Cell(10,0,utf8_decode("- {$acti}"));

$pdf->SetXY(10,100);
$pdf->Cell(10,0,utf8_decode(" {$pé}"));

$pdf->SetXY(10,120);
$pdf->Cell(10,0,utf8_decode(" {$vité}"));
//FORMATION
$pdf->SetXY(10, 135);
$pdf->SetFont('Courier','B',15);
$pdf->SetFillColor(70,130,180);
$pdf->SetTextColor(225,225, 225);
$pdf->Cell(0,7, "    FORMATIONS",0,1,'L',true);
$pdf->Image('img/form.png', 12, 135,8);

$pdf->SetXY(10,150);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("- {$forma}"));

$pdf->SetXY(10,155);
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,0,utf8_decode("{$de}"));

$pdf->SetXY(10,170);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,0,utf8_decode("- {$tion}"));

$pdf->SetXY(10,175);
$pdf->SetFont('Arial','',11);
$pdf->Cell(10,0,utf8_decode("{$tail}"));

//COMPTETENCES
$pdf->SetXY(10, 190);
$pdf->SetFont('Courier','B',15);
$pdf->SetFillColor(70,130,180);
$pdf->SetTextColor(225,225, 225);
$pdf->Cell(0,7, "    COMPETENCES",0,1,'L',true);
$pdf->Image('img/comp.png', 12, 190,8);


$pdf->SetXY(10,205);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("{$comp}"));

//LOISIRS
$pdf->SetXY(10, 220);
$pdf->SetFont('Courier','B',15);
$pdf->SetFillColor(70,130,180);
$pdf->SetTextColor(225,225, 225);
$pdf->Cell(0,7, "    LOISIRS",0,1,'L',true);
$pdf->Image('img/loisir.png', 12, 220,7);


$pdf->SetXY(10,235);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("{$loisir}"));

$pdf->output();
?>