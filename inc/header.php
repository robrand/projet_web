<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>projet web</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/global.css" />
        <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" />
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
        <div id="container">
            <nav class="top-bar" data-topbar role="navigation" style="margin-bottom: 40px;">
                <ul class="title-area">
                    <li class="name">
                    </li>
                </ul>

                <section class="top-bar-section">

                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li><a href="index.php?page=accueil"><i class="fi-home"></i> <strong>Accueil</strong></a></li>
                        <li class="has-dropdown">
                            <a href="index.php?page=psychotherapie"><i class="fi-list"></i> <strong>Psychothérapies</strong></a>
                            <ul class="dropdown">
                                <?php
                                $manager = new PsychotherapieManager($db);
                                $array = $manager->getListePsychotherapie();
                                foreach ($array as $obj) {
                                    echo'<li><a href = "index.php?page=information_psychotherapie&id=' . $obj->idpsychotherapie . '"> ' . $obj->nompsychotherapie . '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="index.php?page=test_psychologique"><i class="fi-list"></i> <strong>Tests psychologiques</strong></a>
                            <ul class="dropdown">
                                <?php
                                $manager = new TestManager($db);
                                $array = $manager->getListeTestPsychologique();
                                foreach ($array as $obj) {
                                    echo'<li><a href = "index.php?page=information_test&id=' . $obj->idtest . '"> ' . $obj->nomtest . '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="index.php?page=test_orientation"><i class="fi-list"></i> <strong>Tests d'orientations</strong></a>
                            <ul class = "dropdown">
                                <?php
                                $manager = new TestManager($db);
                                $array = $manager->getListeTestOrientation();
                                foreach ($array as $obj) {
                                    echo'<li><a href = "index.php?page=information_test&id=' . $obj->idtest . '"> ' . $obj->nomtest . '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href = "index.php?page=timeline"><i class = "fi-info"></i> <strong>A propos</strong></a></li>
                        <li><a href = "index.php?page=contacts"><i class = "fi-mail"></i> <strong>Contact</strong></a></li>
                    </ul>
                    <?php
                    if (isset($_SESSION['admit'])) {
                        if ($_SESSION['admit'] == 1) {
                            echo '<ul class = "right">
                                    <li class = "has-dropdown">
                                    <a href = "index.php?page=interfaceClient"><i class = "fi-unlock"></i> <strong>Mon compte</strong></a>
                                    <ul class = "dropdown">
                                    <li><a href = "index.php?page=deconnexion">Déconnexion</a></li>
                                    </ul>
                                    </li>
                                    </ul>';
                        }
                        elseif ($_SESSION['admit'] == 3) {
                            echo '<ul class = "right">
                                    <li class = "has-dropdown">
                                    <a href = "index.php?page=interfaceAdmin"><i class = "fi-unlock"></i> <strong>Mon compte</strong></a>
                                    <ul class = "dropdown">
                                    <li><a href = "index.php?page=deconnexion">Déconnexion</a></li>
                                    </ul>
                                    </li>
                                    </ul>';
                        }
                    } else {
                        echo '<ul class = "right">
                                    <li>
                                    <a href = "#" data-reveal-id = "myModal"><i class = "fi-lock"></i> <strong>Connexion</strong></a>
</li>';
                    }
                    ?>

                </section>
            </nav>                                    