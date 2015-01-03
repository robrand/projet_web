<?php
include ('php/verifierCnxAdmin.php');
?>
<div class="row">
    <?php
    $manager_psychotherapie = new PsychotherapieManager($db);
    $array = $manager_psychotherapie->getPsychotherapie($_GET["id"]);
    if (isset($_POST["submit_ajout_psychotherapie"])) {
        $manager_psychotherapie->updatePsychotherapie($_GET["id"], $_POST);
        echo "<div data-alert class=\"alert-box success radius\">
                            La psychotherapie a été modifiée.
                            <a href=\"#\" class=\"close\">&times;</a>
                        </div>";
        print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
    }
    ?>
    <div class="large-12 column" role="content">
        <form data-abide action="#" method="post">
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td colspan="3" class="site-header">Modifier la psychotherapie</td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 90%;">
                        <label>Nom <small>obligatoire</small>
                            <input type="text" name="nom_psychotherapie" id="nom_psychotherapie" required value="<?php foreach ($array as $obj) {
        echo $obj->nompsychotherapie;
    } ?>" />
                        </label>
                        <small class="error">Ce champs est obligatoire.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 90%;">
                        <label>Montant <small>obligatoire</small>
                            <input type="number" name="montant_psychotherapie" id="montant_psychotherapie" required value="<?php foreach ($array as $obj) {
        echo $obj->montantpsychotherapie;
    } ?>" />
                        </label>
                        <small class="error">Ce champs est obligatoire.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 90%;">
                        <label>Description <small>obligatoire</small>
                            <textarea type="text" name="description_psychotherapie" id="description_psychotherapie" class="small-12 columns" required="" style="height: 450px;"><?php echo $obj->descriptionpsychotherapie; ?></textarea>
                        </label>
                        <small class="error">Ce champs est obligatoire.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 90%;">
                        <div class="row">
                            <div class="large-6 column">
                                <button type="submit" class="button expand success" name="submit_ajout_psychotherapie" id="submit_ajout">Envoyer</button>
                            </div>
                            <div class="large-6 column">
                                <button type="reset" class="button expand alert">Réinitialiser</button>
                            </div>
                        </div>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>