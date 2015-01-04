<?php
include ('php/verifierCnxAdmin.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
?>
<div class="row">
    <?php
    $manager_facture = new FactureManager($db);
    $manager_facture->accepteFacture($_GET["id"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La facture a été payée.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>