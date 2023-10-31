<?php

// Inclus la bibliothèque FPDF
require_once 'fpdf/fpdf.php';

$inserer=$_GET['numPavillon'];

include 'connexionBase.php';
$lister="SELECT registre.numPavillon, Nom, Prenom, Mois, registre.numQuitance,Tarif,DateDePaiement,PlaceDuMarche, Localite FROM `registre`, vendeur, quitance, mois,Pavillon WHERE 
registre.numPavillon='$inserer' AND pavillon.numPavillon='$inserer' AND vendeur.CIN=registre.CIN AND registre.idMois=mois.idMois
AND registre.numQuitance= quitance.numQuitance AND ;";
$req=mysqli_query($con,$lister);

 while($data=mysqli_fetch_assoc($req)){
     $Mois= $data['Mois'];
     $Tarif= $data['Tarif'];
     $Date= $data['DateDePaiement'];
     $numPavillon= $data['numPavillon'];
     $Nom= $data['Nom'];
     $Prenom= $data['Prenom'];
     $numQuitance= $data['numQuitance'];
     $PlaceDuMarche= $data['PlaceDuMarche'];
     $Localite= $data['Localite'];
    };




// Crée un nouvel objet PDF
$pdf = new FPDF();

// Ajoute une page
$pdf->AddPage('A4');

// Imprime du texte
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10,'QUITANCE', 1, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Commune Urbaine de FIANARANTSOA',0,0, '');
$pdf->Ln(15);
$pdf->Cell(50, 10, 'Recu de  ' . $Nom. ' ' .$Prenom);
$pdf->Ln(13);
$pdf->Cell(30, 10, 'La somme de');
$pdf->Cell(0.05, 10, '');
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(40, 10, '(en lettres):.....' );
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, '');
$pdf->Line(160,  30,  160,  163);
$pdf->Line(165,  55,  250,  55);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(20, 10,  '                                                                               (en chiffres)' );
$pdf->Ln(13);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(210, 10,  '' .$Tarif, 0, 0, 'R');

$pdf->Line(165,  95,  250,  95);
$pdf->Line(165,  115,  250,  115);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(13);
$pdf->Cell(30, 10, 'Pavillon: ' .  $numPavillon);
$pdf->Ln(13);
$pdf->Cell(30,10,'Place du Marche: ' .$PlaceDuMarche);
$pdf->Ln(13);
$pdf->Cell(30, 10, 'Localite: ' .$Localite);
$pdf->Ln(13);
$pdf->Cell(50, 10, 'Pour le mois de: ' . $Mois);
$pdf->Ln(13);
$pdf->Cell(50, 10, '                                                                                      Signature');
$pdf->Ln(25);
$pdf->Cell(50, 10, 'Numero: ' .$numQuitance);
$pdf->Ln(13);
$pdf->Cell(50, 10, 'Date de paiement: ' . $Date);

$pdf->Output('C:\Users\WINDOWS 10\Desktop\pdfQuitance.pdf', 'F');
echo 'PDF IMPRIME';
?>