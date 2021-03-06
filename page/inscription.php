<div class="row">
    <?php
    if (isset($_POST["submit_ajout_patient"])) {
        $query = "select count(*) from patient where (nompatient = '" . $_POST['nom_patient'] . "' AND prenompatient = '" . $_POST['prenom_patient'] . "') OR emailpatient = '" . $_POST['email_patient'] . "'";
        $resultset = $db->query($query);
        $data = $resultset->fetch();
        if ($data[0] == 0) {
            $manager_patient = new PatientManager($db);
            $manager_patient->addPatient($_POST);
            echo "<div data-alert class=\"alert-box success radius\">
                            Votre demande à été enregistrée.
                            <a href=\"#\" class=\"close\">&times;</a>
                        </div>";
            print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=accueil\">";
        } else {
            echo "<div data-alert class=\"alert-box alert radius\">
                            Ce patient existe déjà.
                            <a href=\"#\" class=\"close\">&times;</a>
                        </div>";
        }
    }
    ?>
    <div class="large-12 column">
        <form data-abide action="#" method="post">
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td colspan="3" class="site-header">Données personelles</td>
                </tr>
                <tr>
                    <td style="width: 45%;">
                        <label>Nom <small>obligatoire</small>
                            <input type="text" required pattern="[a-zA-Z]+" name="nom_patient" id="nom_patient">
                        </label>
                        <small class="error">Vous devez entrer votre nom.</small>
                    </td>
                    <td style="width: 45%;">
                        <label>Prénom <small>obligatoire</small>
                            <input type="text" required pattern="[a-zA-Z]+" name="prenom_patient" id="prenom_patient">
                        </label>
                        <small class="error">Vous devez entrer votre prénom.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
            </table>
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td colspan="3" class="site-header">Adresse</td>
                </tr>
                <tr>
                    <td style="width: 45%;">
                        <label>Rue <small>obligatoire</small>
                            <input type="text" required pattern="[a-zA-Z]+" name="rue_patient" id="rue_patient">
                        </label>
                        <small class="error">Vous devez entrer votre rue.</small>
                    </td>
                    <td style="width: 45%;">
                        <label>Numéro <small>obligatoire</small>
                            <input type="number" required name="numero_patient" id="numero_patient">
                        </label>
                        <small class="error">Vous devez entrer un numéro.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 45%;">
                        <label>Code postal <small>obligatoire</small>
                            <input type="number" required name="code_patient" id="code_patient">
                        </label>
                        <small class="error">Vous devez entrer votre code postal.</small>
                    </td>
                    <td style="width: 45%;">
                        <label>Ville <small>obligatoire</small>
                            <input type="text" required pattern="[a-zA-Z]+" name="ville_patient" id="ville_patient">
                        </label>
                        <small class="error">Vous devez entrer une ville.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
            </table>
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td colspan="3" class="site-header">Contacts</td>
                </tr>
                <tr>
                    <td style="width: 45%;">
                        <div class="row collapse prefix-radius">
                            <div class="small-3 columns">
                                <span class="prefix">+32</span>
                            </div>
                            <div class="small-9 columns">
                                <input type="number" required placeholder="Téléphone" name="telephone_patient" id="telephone_patient">
                                <small class="error">Vous devez entrer votre numéro de téléphone.</small>
                            </div>
                        </div>
                    </td>
                    <td style="width: 45%;">
                        <div class="row collapse postfix-radius">
                            <div class="small-9 columns">
                                <input type="email" required placeholder="Email" name="email_patient" id="email_patient">
                                <small class="error">Vous devez entrer votre adresse mail.</small>
                            </div>
                            <div class="small-3 columns">
                                <span class="postfix">@</span>
                            </div>
                        </div>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
            </table>
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td colspan="3" class="site-header">Données d'authentification</td>
                </tr>
                <tr>
                    <td style="width: 45%;">
                        <label>mot de passe <small>obligatoire</small>
                            <input type="password" required name="mdp_patient" id="mdp_patient">
                        </label>
                        <small class="error">Vous devez entrer un mot de passe.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
            </table>
            <div class="row">
                <div class="large-6 column">
                    <button type="submit" class="button expand success" name="submit_ajout_patient" id="submit_ajout">Envoyer</button>
                </div>
                <div class="large-6 column">
                    <button type="reset" class="button expand alert">Réinitialiser</button>
                </div>
            </div>
        </form>
    </div>
</div>