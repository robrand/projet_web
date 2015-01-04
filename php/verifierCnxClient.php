<?php

if (!isset($_SESSION['admit'])) {
    echo '<div class="row">
        <div class="large-12 columns">
        <div data-alert class="alert-box alert radius">
             ACCES RESERVE.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
    </div>';
    print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=accueil\">";
    include ('./inc/footer.php');
    exit();
} elseif ($_SESSION['admit'] != 1) {
    echo '<div class="row">
        <div class="large-12 columns">
        <div data-alert class="alert-box alert radius">
             ACCES RESERVE.
             <a href="#" class="close">&times;</a>
        </div>
    </div>
    </div>';
    print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=accueil\">";
    include ('./inc/footer.php');
    exit();
}
?> 
