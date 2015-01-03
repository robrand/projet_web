<?php
include ('php/verifierCnxAdmin.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
?>
<div class="row">
    <?php
    $manager_patient = new PatientManager($db);
    $manager_patient->banPatient($_GET["id"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La patient a été banni.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>