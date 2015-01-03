<?php
include ('php/verifierCnxAdmin.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
?>
<div class="row">
    <?php
    $manager_pathologie = new PathologieManager($db);
    $manager_pathologie->deletePathologie($_GET["id"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La pathologie a été supprimée.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>