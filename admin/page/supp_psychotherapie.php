<?php
include ('php/verifierCnxAdmin.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
?>
<div class="row">
    <?php
    $manager_psychotherapie = new PsychotherapieManager($db);
    $manager_psychotherapie->deletePsychotherapie($_GET["id"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La psychotherapie a été supprimée.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>