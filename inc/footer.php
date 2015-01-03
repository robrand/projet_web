<div id="myModal" class="reveal-modal remove-whitespace" data-reveal>
    <div class="row">
        <div class="large-6 columns auth-plain">
            <div class="signup-panel newusers">
                <p class="welcome"><strong>Connectez-vous!</strong></p>
                <p>En vous connectant, vous aurez accès à plus de fonctionnalitées.</p><br>
                <a href="index.php?page=connexion" class="button ">Connection</a></br>
            </div>
        </div>
        <div class="large-6 columns auth-plain">
            <div class="signup-panel newusers">
                <p class="welcome"><strong>Nouveau sur le site?</strong></p>
                <p>En créant un compte, vous pourrez directement prendre rendez-vous en ligne.</p><br>
                <a href="index.php?page=inscription" class="button ">Inscription</a></br>
            </div>
        </div>
    </div>   
    <a class="close-reveal-modal">&#215;</a>
</div>
<div id="footer-menu" class="row" style="margin-top: 40px;">
    <div class="small-2 large-3 columns">
        <a href="index.php?page=psychotherapie"><h5>Psychotérapies</h5></a>
        <ul class="no-bullet">
            <?php
            $manager = new PsychotherapieManager($db);
            $array = $manager->getListePsychotherapie();
            foreach ($array as $obj) {
                echo'<li><span class="fi-page-doc "></span><a href = "index.php?page=information_psychotherapie&id=' . $obj->idpsychotherapie . '"> ' . $obj->nompsychotherapie . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="small-2 large-3 columns">
        <a href="index.php?page=test_psychologique"><h5>Tests psychologiques</h5></a>
        <ul class="no-bullet">
            <?php
            $manager = new TestManager($db);
            $array = $manager->getListeTestPsychologique();
            foreach ($array as $obj) {
                echo'<li><span class="fi-page-doc "></span><a href = "index.php?page=information_test&id=' . $obj->idtest . '"> ' . $obj->nomtest . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="small-2 large-3 columns">
        <a href="index.php?page=test_orientation"><h5>Tests d'orientations</h5></a>
        <ul class="no-bullet">
            <?php
            $manager = new TestManager($db);
            $array = $manager->getListeTestOrientation();
            foreach ($array as $obj) {
                echo'<li><span class="fi-page-doc "></span><a href = "index.php?page=information_test&id=' . $obj->idtest . '"> ' . $obj->nomtest . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="small-6 large-3 columns">
        <a href="index.php?page=contacts"><h5>Contact</h5></a>
        <ul class="no-bullet">
            <li><span class="fi-telephone "></span>+32 (0)470.81.32.72</li>
            <li><span class="fi-arrows-in "></span><a href="https://www.google.be/maps/place/Clos+de+la+Verte+Colline+33,+7080+Frameries/@50.4019767,3.8751799,17z/data=!3m1!4b1!4m2!3m1!1s0x47c25bb670cfc647:0x4b9f33d42e1c8445" target="blank">Clos de la Verte Colline 33<br /><div>7080 Frameries</div></a></li>
            <li><span class="fi-torso-female"></span>DIEUDONNE Stéphanie Roselyne</li>
            <li><span class="fi-mail"></span><a href="mailto:stephanie.dieudonne@skynet.be">stephanie.dieudonne@skynet.be</a></li>
        </ul>
    </div>
</div>
<div id="footer-reference" class="row">
    <div class="small-2 large-8 columns">
        Problèmes personnels, familiaux et scolaires<br />
        Enfants - Adolescents - Adultes<br />
        Coaching - Conseil - Relation Parents - Enfants
    </div>
    <div id="medialink" class="small-8 large-4 columns">
        <a href="https://www.facebook.com/" target="blank"><span class="fi-social-facebook"></span></a>
    </div>
    <div class="large-12 columns" style="text-align: center; font-size: 10px;">
        Copyright 2014 | tous droits réservés.
    </div>
</div>
</div>
<a href="#" class="scrollToTop"><img src="images/fleche_haut.png"/></a>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/module/scroll_to_top.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
