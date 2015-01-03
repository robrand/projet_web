<?php

if (!isset($_SESSION['admit'])) {
    if ($_SESSION['admit'] != 1) {
        print "ACCES RESERVE";
        print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=accueil\">";
        exit();
    }
}
?> 
