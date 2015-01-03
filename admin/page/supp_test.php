<?php
include ('php/verifierCnxAdmin.php');
print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
?>
<div class="row">
    <?php
    $manager_test = new TestManager($db);
    $manager_test->deleteTest($_GET["id"]);
    ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius">
             La test a été supprimé.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
</div>