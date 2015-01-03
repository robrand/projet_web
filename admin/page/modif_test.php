<?php
include ('php/verifierCnxAdmin.php');
?>
<div class="row">
    <?php
    $manager_test = new TestManager($db);
    $array = $manager_test->getTest($_GET["id"]);
    if (isset($_POST["submit_ajout_test"])) {
        $manager_test->updateTest($_GET["id"], $_POST);
        echo "<div data-alert class=\"alert-box success radius\">
                            La test a été modifié.
                            <a href=\"#\" class=\"close\">&times;</a>
                        </div>";
        print "<META http-equiv=\"refresh\": Content=\"2;URL=../Projet_style/index.php?page=interfaceAdmin\">";
    }
    ?>
    <div class="large-12 column" role="content">
        <form data-abide action="#" method="post">
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td colspan="3" class="site-header">Modifier la test</td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 90%;">
                        <label>Nom <small>obligatoire</small>
                            <input type="text" name="nom_test" id="nom_test" required value="<?php
                            foreach ($array as $obj) {
                                echo $obj->nomtest;
                            }
                            ?>" />
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
                            <input type="number" name="montant_test" id="montant_test" required value="<?php
                            foreach ($array as $obj) {
                                echo $obj->montanttest;
                            }
                            ?>" />
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
                            <textarea type="text" name="description_test" id="description_test" class="small-12 columns" required="" style="height: 450px;"><?php echo $obj->descriptiontest; ?></textarea>
                        </label>
                        <small class="error">Ce champs est obligatoire.</small>
                    </td>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                </tr>
                <div style="display: none;">
                    <input type="text" name="type_test" id="type_test" value="<?php
                            foreach ($array as $obj) {
                                echo $obj->typetest;
                            }
                            ?>" />
                </div>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 90%;">
                        <div class="row">
                            <div class="large-6 column">
                                <button type="submit" class="button expand success" name="submit_ajout_test" id="submit_ajout">Envoyer</button>
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