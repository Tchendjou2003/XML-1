<?php


// Inclure la bibliothèque TCPDF
require('../Donnees/Manager.php');
include('../Donnees/fpdf185/fpdf.php');

if (isset($_GET)) 
{
    foreach($_GET as $key => $value)
    {
        $id = $value;
        $file = $key;
    }
            
    $tab = Manager::getUnique($id, $file);

    $categorie = $tab[0];
    $date_creation = $tab[2];
    $date_fin = $tab[3];

    $nom_locataire= $tab[4];

    $nom_locataire = substr($nom_locataire, 3, -1);
    $id_appartement = $tab[5];



}

class ContractPDF extends FPDF {
    function __construct() {
        parent::__construct();
        $this->AddPage();

        // Définir la police et la taille par défaut du texte
        $this->SetFont('helvetica', 'B', 16);
        $this->Cell(0, 10, 'Contrat de location', 1, 1, 'C');
    }

   function add_contract_details($start_date, $end_date, $label, $nom) 
    {
        // Ajouter les informations sur le contrat de location
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, "Date de debut: $start_date", 0, 1);
        $this->Cell(0, 10, "Date de fin: $end_date", 0, 1);
        $this->Cell(0, 10, "Intitule: $label", 0, 1);
        $this->Cell(0, 10, "Nom Locataire: M.$nom", 0, 1);
        $this->Ln(10);
    }



    function add_signature_space() {
        // Ajouter un espace pour les signatures
        $this->Cell(0, 10, 'Signatures des partis', 1, 1);
        $this->Ln(10);
    }
}

// Instancier la classe personnalisée
$pdf = new ContractPDF();

// Ajouter les informations sur le contrat de location
$pdf->add_contract_details($date_creation, $date_fin, "Appartment Numero : $id", $nom_locataire);

// Ajouter un espace pour les signatures
$pdf->add_signature_space();

// Enregistrer le PDF
$pdf->Output("Contrat de Location$id.pdf", 'D');

?>