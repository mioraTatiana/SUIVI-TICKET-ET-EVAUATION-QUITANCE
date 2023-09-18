<?php
require('fpdf/fpdf.php');



class PDF extends FPDF
{

    
// Page header
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('times','B',15);
    $this->Cell(50);
    $this->Ln(5);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(0,10,'REPOBLIKAN \'I MADAGASIKARA','C');
    // Line break
    $this->Ln(5);
    $this->Cell(60);
    $this->SetFont('Arial','I',10);
    $this->Cell(50,10,'Tanindrazana-Fahafahana-Fandrosoana','C');
    $this->Ln(5);
    $this->Line(90,  30, 120,  30);
    $this->Ln(15);

}
public $numFiche;
public $Mois; 
public $Annee;
public $DateDePaiement; 
public $Tarif; 
public $CIN; 
public $numPavillon; 
public $Localite; 
public $PlaceDuMarche;
public $TypeDeProduits; 
public $Nom;
public $Prenom;
public $Telephone; 
public $Adresse; 
public $CarteProfessionnelle;  

function body(){

    include 'connexionBase.php';
    $numPavillon=$_GET['numPavillon'];
    $requette="SELECT `numFiche`, `Mois`, `Annee`, `DateDePaiement`, `Tarif`, vendeur.`CIN`, pavillon.numPavillon, `Localite`, `PlaceDuMarche`, `TypeDeProduits`, `Nom`, `Prenom`, `Telephone`, `Adresse`, vendeur.CarteProfessionnelle FROM vendeur, pavillon, registre WHERE pavillon.numPavillon='$numPavillon' AND registre.numPavillon='$numPavillon' AND vendeur.numPavillon='$numPavillon';";
    $rec=mysqli_query($con, $requette);
   


    while($data=mysqli_fetch_assoc($rec)){
        $this->numFiche=$data['numFiche'];
        $this->Mois=$data['Mois']; 
        $this->Annee =$data['Annee'];
        $this->DateDePaiement =$data['DateDePaiement']; 
        $this->Tarif =$data['Tarif']; 
        $this->CIN=$data['CIN']; 
        $this->numPavillon=$data['numPavillon']; 
        $this->Localite =$data['Localite']; 
        $this->PlaceDuMarche =$data['PlaceDuMarche'];
        $this->TypeDeProduits =$data['TypeDeProduits']; 
        $this->Nom=$data['Nom'];
        $this->Prenom=$data['Prenom'];
        $this->Telephone =$data['Telephone']; 
        $this->Adresse=$data['Adresse']; 
        $this->CarteProfessionnelle=$data['CarteProfessionnelle'];  
    }
    

    $this->SetFont('Arial','',13);
    $this->Cell(48,10,'COMMUNE URBAINE',0,0,'L');
    $this->Ln(8);
    $this->Cell(20,8,'',0,0,'L');    
    $this->Cell(20,10,'DE',0,0,'L');     
    $this->Ln(8);
    $this->Cell(5,10,'',0,0,'C');    
    $this->Cell(45,10,'FIANARANTSOA',0,0,'L');
    $this->Image('C:\Users\WINDOWS 10\Pictures\Saved Pictures\MIORA.JPG', 18, 66, 30, 35);
    $this->Cell(30,30,'',0,0,'L'); 
    $this->MultiCell(50,10,'FICHE DE CONTROLE DE LOYER PAVILLON',1,0,'C', true);
    $this->Ln(48); 
    $this->Cell(60,8,'BUREAU ECONOMIQUE',0,0,'L');
    $this->Ln(13);
    $this->SetFont('Arial','B',12);
   
    $this->Cell(50,10,'N°: CU/F/SDU/B.ECO',0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(30,10,''.$this->numFiche,1);
    $this->Cell(70,10,'',0,0,'L');
    $this->SetFont('Arial','B',12); 
    $this->Cell(20,10,'ANNEE: '.$this->Annee,0,0, 'C');
    $this->Ln(15);
    
    $this->SetFont('Arial','B',14);
    $this->Cell(30,10,'OCCUPANT',0,0,'L');
    $this->Line(11,  140, 39,  140);
    $this->Ln(8);
    $this->SetFont('Arial','',12);
    $this->Cell(20,10,'Nom et prénoms:'.$this->Nom.' '.$this->Prenom,0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,'Adresse: '.$this->Adresse,0,0,'L');
    $this->Cell(70,10,'',0,0,'L'); 
    $this->Cell(50,10,'N Téléphone: '.$this->Telephone,0,0,'L'); 
    $this->Ln(8);
    $this->Cell(50,10,'Carte profesionnellle:'.$this->CarteProfessionnelle,0,0,'L');
    $this->Cell(40,10,'',0,0,'L'); 
    $this->Cell(50,10,'Quitance',0,0,'L');
    $this->Cell(15,10,'',0,0,'L'); 
    $this->Cell(40,10,'du',0,0,'L'); 
    $this->Ln(13);
    $this->SetFont('Arial','B',14);
    
    $this->Cell(30,10,'PAVILLON',0,0,'L');
    $this->Line(11,  177, 36,  177);
    $this->Ln(8);
    $this->SetFont('Arial','',12);
    $this->Cell(50,10,'Type de Pavillon:',0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,'N pavillon:'.$this->numPavillon,0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,'Localité:'.$this->Localite,0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,'Type de produits:'.$this->TypeDeProduits,0,0,'L');
    $this->Ln(8);
    $this->Cell(50,10,'Autorisation N:',0,0,'L');
    $this->Cell(70,10,'',0,0,'L'); 
    $this->Cell(30,10,'du',0,0,'L'); 
    $this->Ln(8);
    $this->Cell(50,10,'Deliberation N:',0,0,'L');
    $this->Cell(70,10,'',0,0,'L'); 
    $this->Cell(20,10,'du',0,0,'L');
    $this->Ln(8);
    $this->Cell(20,10,'Loyer mensuel du'.$this->Mois,0,0,'L');
    $this->Ln(8);
    $this->Cell(70,10,'Fianarantsoa, le '.date('Y-m-d'),0,0,'C');
    $this->Ln(8);
    $this->Cell(0,10,' Le Chef de Bureau écomomique',0,0,'C');
    $this->Ln(8);


}

// Page footer
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->body();
$pdf->SetFont('Times','',12);
$pdf->Output('C:\Users\WINDOWS 10\Desktop\FicheDeControle.pdf','F');

?>