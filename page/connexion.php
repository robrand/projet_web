<?php
if (isset($_POST['submit_connexion'])) {
    if (!empty($_POST['email_patient']) && !empty($_POST['mdp_patient'])) {
        $log = new Login($db);
        $auth = $log->isAdmin($_POST['email_patient'], $_POST['mdp_patient']);
        if ($auth) {
            foreach ($auth as $obj) {
                if ($obj->idpatient) {
                    if ($obj->statutpatient == 1) {
                        $_SESSION['admit'] = $obj->statutpatient;
                        $_SESSION['ident'] = $obj->idpatient;
                        header('Location:index.php?page=interfaceClient');
                        exit;
                    } elseif ($obj->statutpatient == 3) {
                        $_SESSION['admit'] = $obj->statutpatient;
                        header('Location:index.php?page=interfaceAdmin');
                        exit;
                    } else {
                        echo '<div class="large-12 columns">
        <div data-alert class="alert-box alert radius">
             Vous n\'avez pas l\'autorisation d\'accès.
             <a href="#" class="close">&times;</a>
        </div>
    </div>';
                    }
                } else {
                    echo '<div class="large-12 columns">
        <div data-alert class="alert-box alert radius">
             L\'email ou le mot de passe est incorrecte.
             <a href="#" class="close">&times;</a>
        </div>
    </div>';
                }
            }
        } else {
            echo '<div class="large-12 columns">
        <div data-alert class="alert-box alert radius">
             L\'email ou le mot de passe est incorrecte.
             <a href="#" class="close">&times;</a>
        </div>
    </div>';
        }
    } else {
        echo '<div class="large-12 columns">
        <div data-alert class="alert-box alert radius">
             L\'email ou le mot de passe est vide.
             <a href="#" class="close">&times;</a>
        </div>
    </div>';
    }
}
?> 
<div class="row">
    <div class="large-12 text-center columns" style="padding-left: 350px; padding-right: 350px">
        <div class="signup-panel">
            <p class="welcome">Se connecter</p>
            <form data-abide action="#" method="post">
                <div class="row collapse">
                    <div class="small-2  columns">
                        <span class="prefix"><i class="fi-torso-female"></i></span>
                    </div>
                    <div class="small-10  columns">
                        <input type="text" placeholder="username" name="email_patient" id="email_patient">
                    </div>
                </div>
                <div class="row collapse">
                    <div class="small-2 columns ">
                        <span class="prefix"><i class="fi-lock"></i></span>
                    </div>
                    <div class="small-10 columns ">
                        <input type="password" placeholder="password" name="mdp_patient" id="mdp_patient">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 column">
                        <button type="submit" class="button" name="submit_connexion" id="submit_connexion">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>