<?php
include ('php/verifierCnxClient.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceClient\">";
?>
<div class="row">
    <?php
    $manager_consultation = new ConsultationManager($db);
    $manager_consultation->deleteConsultation($_GET["id"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La consultation a été annulée.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>