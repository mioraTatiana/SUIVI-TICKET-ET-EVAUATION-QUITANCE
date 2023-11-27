<?php
require('../fpdf/fpdf.php');



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
public $NomDuProduit; 
public $Nom;
public $Prenom;
public $Telephone; 
public $Adresse; 
public $CarteProfessionnelle;
public $TypeDePavillon;
public $numAutorisation;
public $DateDautorisation;
public $numDeDeliberation;
public $DateDeDeliberation;  
public $Quitance;
function body(){

    include 'connexionBase.php';
    $numPavillon=$_GET['numPavillon'];
    $requette="SELECT `numFiche`, `Mois`, `Annee`, `DateDePaiement`, `Tarif`, vendeur.`CIN`, pavillon.numPavillon, `Localite`,`PlaceDuMarche`,TypeDePavillon,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation, pavillon.`idProduit`,NomDuProduit, `Nom`, `Prenom`, `Telephone`, `Adresse`, vendeur.CarteProfessionnelle, registre.idMois, Mois, numQuitance FROM vendeur, pavillon, registre, produit, mois, localite,marche WHERE pavillon.numPavillon='$numPavillon' AND registre.numPavillon='$numPavillon' AND vendeur.numPavillon='$numPavillon' AND pavillon.`idProduit`= produit.`idProduit` AND registre.idMois=mois.idMois AND pavillon.idLocalite=localite.idLocalite AND pavillon.idMarche=marche.idMarche;";
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
        $this->NomDuProduit =$data['NomDuProduit']; 
        $this->Nom=$data['Nom'];
        $this->Prenom=$data['Prenom'];
        $this->Telephone =$data['Telephone']; 
        $this->Adresse=$data['Adresse']; 
        $this->CarteProfessionnelle=$data['CarteProfessionnelle']; 
        $this->TypeDePavillon=$data['TypeDePavillon'];
        $this->numAutorisation=$data['numAutorisation'];
        $this->DateDautorisation=$data['DateDautorisation'];
        $this->numDeDeliberation=$data['numDeliberation'];
        $this->DateDeDeliberation=$data['DateDeDeliberation'];
        $this->Quitance=$data['numQuitance'];

    }
    

    $this->SetFont('Arial','',13);
    $this->Cell(48,10,'COMMUNE URBAINE',0,0,'L');
    $this->Ln(8);
    $this->Cell(20,8,'',0,0,'L');    
    $this->Cell(20,10,'DE',0,0,'L');     
    $this->Ln(8);
    $this->Cell(5,10,'',0,0,'C');    
    $this->Cell(45,10,'FIANARANTSOA',0,0,'L');
    $this->Image('C:\Dossier de sauvegarde\LOGO ARMOIRIE DE FIANARANTSOA.jpg', 18, 66, 30, 35);
    $this->Cell(70,30,'',0,0,'L'); 
    $this->Cell(20,10,'FICHE DE CONTROLE DE LOYER PAVILLON',0,0,'C');
    $this->Ln(48);
    $this->Cell(60,8,'BUREAU ECONOMIQUE',0,0,'L');
    $this->Ln(13);
    $this->SetFont('Arial','B',12);
   
    $this->Cell(10,10,'N:',0,0,'L');
    $this->SetFont('Arial','I',12);
    $this->Cell(15,10,''.$this->numFiche,0);
    $this->SetFont('Arial','B',12); 
    $this->Cell(30,10,'CU/F/SDU/B.ECO',0,0,'L');
    $this->Cell(70,10,'',0,0,'L');
    $this->Cell(20,10,'ANNEE: '.$this->Annee,0,0, 'C');
    $this->Ln(15);
    

    $this->SetFont('Arial','B',14);
    $this->Cell(30,10,'OCCUPANT',0,0,'L');
    $this->Line(11,  140, 39,  140);
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(40,10,'Nom et prenoms:',0,0,'L');
    $this->SetFont('Arial','I',12);
    $this->Cell(30,10,''.$this->Nom.' '.$this->Prenom,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(20,10,'Adresse: ',0,0,'L');
    $this->SetFont('Arial','I',12);
    $this->Cell(80,10,''.$this->Adresse,0,0,'L'); 
    $this->SetFont('Arial','',12);
    $this->Cell(25,10,'Telephone: ',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(50,10,''.$this->Telephone,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(50,10,'Carte profesionnellle:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(40,10,''.$this->CarteProfessionnelle,0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(25,10,'Quitance:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(20,10,''.$this->Quitance,0,0,'L');     
    $this->SetFont('Arial','',12);
    $this->Cell(25,10,'du',0,0,'L');
    $this->SetFont('Arial','I',12);
    $this->Cell(30,10,''.$this->DateDePaiement,0,0,'L');
 
    $this->Ln(13);

    $this->SetFont('Arial','B',14);
    $this->Cell(30,10,'PAVILLON',0,0,'L');
    $this->Line(11,  177, 36,  177);
    $this->Ln(8);
    $this->SetFont('Arial','',12);
    $this->Cell(50,10,'Type de Pavillon:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(50,10,''.$this->TypeDePavillon,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(40,10,'N pavillon:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(35,10,''.$this->numPavillon,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(40,10,'Localite:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(40,10,''.$this->Localite,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(40,10,'Type de produits:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(40,10,''.$this->NomDuProduit,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(50,10,'Autorisation N:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(70,10,''.$this->numAutorisation,0,0,'L');
    $this->SetFont('Arial','',12); 
    $this->Cell(30,10,'du',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(30,10,''.$this->DateDautorisation,0,0,'L'); 
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(50,10,'Deliberation N:',0,0,'L');
    $this->SetFont('Arial','I',12); 
    $this->Cell(70,10,''.$this->numDeDeliberation,0,0,'L'); 
    $this->SetFont('Arial','',12);
    $this->Cell(30,10,'du',0,0,'L');
    $this->SetFont('Arial','I',12);
    $this->Cell(30,10,''.$this->DateDeDeliberation,0,0,'L');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(50,10,'Loyer mensuel du',0,0,'L');
    $this->SetFont('Arial','I',12);
    $this->Cell(20,10,''.$this->Mois,0,0,'L');

    $this->Ln(8);

    $this->SetFont('Arial','I',12,);
    $this->Cell(70,10,'Fianarantsoa, le '.$this->DateDePaiement,0,0,'C');
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(0,10,' Le Chef de Bureau ecomomique',0,0,'C');
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
// if( ($pdf->Output('C:\Users\WINDOWS 10\Desktop\FicheDeControle.pdf','F'))>0){
//     echo 'Bien Imprimer';
// }else{
//     echo 'Non';
// }
echo 'Bien Imprimer';


?>