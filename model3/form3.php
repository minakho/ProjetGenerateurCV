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
$pdf->SetTitle("CV Design");
$pdf->SetXY(5, 10);
$pdf->Cell(0,265, "",1,0,'C');

//PHOTO
$pdf->SetFont('Arial', 'B', 12); 
$pdf->SetFillColor(32,178,170);
$pdf->SetXY(5 , 30);
$pdf->Cell(45,245, '', '', 0, '', true); 
$pdf->SetTextColor(255, 255, 255);	
$pdf->Image($photo, 10,20,40 );

//INFO PERSO
$pdf->SetFont('Arial','B',18);
$pdf->SetTextColor(255,127,80);
$pdf->SetXY(55,25);
$pdf->Cell(10,5,utf8_decode($nom));


$pdf->SetXY(55,25);
$pdf->Cell(10,20,utf8_decode($prenom));

$pdf->SetXY(10,80);
$pdf->SetFont('Arial','I',9);
$pdf->SetTextColor(255, 255, 255);	
$pdf->Write(10, "Adresse");
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,80);
$pdf->Write(20, utf8_decode("{$adresse}"));

$pdf->SetXY(10,95);
$pdf->SetFont('Arial','I',9);
$pdf->Write(10, "Code postal");
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,102);
$pdf->Write(5, utf8_decode("{$codep}"));

$pdf->SetXY(10,110);
$pdf->SetFont('Arial','I',9);
$pdf->Write(10, "Mail");
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,122);
$pdf->Write(-5, utf8_decode("{$mail}"));

$pdf->SetXY(10,125);
$pdf->SetFont('Arial','I',9);
$pdf->Write(10, "Telephone");
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,142);
$pdf->Write(-15, utf8_decode("{$num}"));



//TITRE
$pdf->SetXY(50, 48);
$pdf->SetFont('Arial','B',15);
$pdf->SetFillColor(255,127,80);
$pdf->Cell(0,25, utf8_decode("       {$titre}"),0,1,'C',true);


//EXPRERIENCE
$pdf->SetXY(50, 73);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(047,79,79);
$pdf->SetTextColor(225,225, 225);
$pdf->Cell(90,10, 'EXPRERIENCES PROFESSIONNELLES', '', 0, '', true);
$pdf->Image('img/expp.png', 132, 74,6);

$pdf->SetXY(60,90);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("- {$exp}"));

$pdf->SetXY(60,110);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,0,utf8_decode("- {$acti}"));

$pdf->SetXY(60,95);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(10,0,utf8_decode(" {$pé}"));

$pdf->SetXY(60,115);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(10,0,utf8_decode(" {$vité}"));

//FORMATION
$pdf->SetXY(50, 130);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(0,128,128);
$pdf->SetTextColor(225, 225, 225);
$pdf->Cell(90,10, 'FORMATIONS', '', 0, '', true); 
$pdf->Image('img/formm.png', 132, 132,6);


$pdf->SetXY(60,150);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("- {$forma}"));

$pdf->SetXY(62,155);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(10,0,utf8_decode("{$de}"));

$pdf->SetXY(60,165);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,0,utf8_decode("- {$tion}"));

$pdf->SetXY(62,170);
$pdf->SetFont('Arial','I',11);
$pdf->Cell(10,0,utf8_decode("{$tail}"));

//COMPTETENCES
$pdf->SetXY(50, 180);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(0,139,139);
$pdf->SetTextColor(225, 225, 225);
$pdf->Cell(90,10, 'COMPETENCES', '', 0, '', true);
$pdf->Image('img/skill.png', 132, 182,6);


$pdf->SetXY(60,200);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("{$comp}"));

//LOISIRS
$pdf->SetXY(50, 220);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(255,127,80);
$pdf->SetTextColor(225, 225, 225);
$pdf->Cell(90,10, 'LOISIRS', '', 0, '', true); 
$pdf->Image('img/loisirr.png', 132, 222,6);


$pdf->SetXY(60,240);
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(10,0,utf8_decode("{$loisir}"));






$pdf->output();





?>