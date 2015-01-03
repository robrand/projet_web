<?php

include ('php/liste_include.php');
$db = Connexion::getInstance($dsn, $user, $pass);

include ('./inc/header.php');
if (!isset($_SESSION['page'])) {
    $_SESSION['page'] = 'accueil';
}
if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
} else {
    $_SESSION['page'] = 'accueil';
}
$dirPage = "page/" . $_SESSION['page'] . ".php";
$dirPageAdmin = "admin/page/" . $_SESSION['page'] . ".php";
$dirPageClient = "client/page/" . $_SESSION['page'] . ".php";
if (file_exists($dirPage)) {
    include ($dirPage);
} else if (file_exists($dirPageClient)) {
    include ($dirPageClient);
} else if (file_exists($dirPageAdmin)) {
    include ($dirPageAdmin);
} else {
    include ('./page/erreur.php');
}


include ('./inc/footer.php');
