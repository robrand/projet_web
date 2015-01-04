<?php

include ('php/verifierCnxClient.php');
require('C:\Users\roberto\Documents\NetBeansProjects\Projet_style\client\fpdf17\fpdf.php');
$manager_patient = new PatientManager($db);
$array_patient = $manager_patient->getPatient($_SESSION['ident']);
foreach ($array_patient as $obj_patient) {
    $nom = $obj_patient->prenompatient . ' ' . $obj_patient->nompatient;
    $rue = $obj_patient->ruepatient . ' ' . $obj_patient->numeropatient;
    $code = $obj_patient->codepatient . ' ' . $obj_patient->villepatient;
}
$manager_facture = new FactureManager($db);
$array_facture = $manager_facture->getFacture($_GET['id']);
foreach ($array_facture as $obj_facture) {
    $id = $obj_facture->idfacture;
    $date = $obj_facture->datefacture;
    $montant = $obj_facture->montantfacture;
}


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(15, 10, $nom, 0, 1);
$pdf->Cell(20, 10, $rue, 0, 1);
$pdf->Cell(13, 10, $code, 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, 'Facture numero : ' . $id, 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->SetFont('Arial', 'U', 12);
$pdf->Cell(13, 10, 'Date facture : ' . $date, 0, 1);
$pdf->Cell(13, 10, 'Montant facture : ' . $montant . ' EUR', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(15, 10, 'Les champs vides sont a completer par vos soins.', 0, 1);
$pdf->Cell(13, 10, '', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(15, 10, 'Date d\'execution : _ _ . _ _ . _ _                                  Montant : '.$montant, 0, 1);
$pdf->Cell(15, 10, 'Compte donneur d\'ordre (IBAN) : _ _ _ _ . _ _ _ _ . _ _ _ _ . _ _ _ _', 0, 1);
$pdf->Cell(15, 10, 'Compte beneficiaire (IBAN) : B E 0 0 . 0 0 0 0 . 0 0 0 0 . 0 0 0 0', 0, 1);
$pdf->Cell(15, 10, 'BIC beneficiaire : A A A A A A A A', 0, 1);
$pdf->Cell(15, 10, 'Nom et adresse beneficiaire : STEPHANIE DIEUDONNE', 0, 1);
$pdf->Cell(15, 10, '                                                CLOS DE LA VERTE COLLINE 33', 0, 1);
$pdf->Cell(15, 10, '                                                7080 FRAMERIES', 0, 1);
$pdf->Cell(15, 10, 'Communication : 0 0 0 0 0', 0, 1);
$buffer = ob_get_clean();
$pdf->Output();
?>