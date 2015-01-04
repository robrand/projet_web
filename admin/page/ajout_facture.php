<?php
include ('php/verifierCnxAdmin.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
?>
<div class="row">
    <?php
    $manager_consultation = new ConsultationManager($db);
    $manager_consultation->factureConsultation($_GET["id"]);
    $manager_facture = new FactureManager($db);
    $montant_facture = $_GET["montant_psychotherapie"] + $_GET["montant_test"];
    $manager_facture->addFacture($_GET["date_consultation"], $montant_facture, $_GET["id_patient"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La facture a été ajoutée.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>