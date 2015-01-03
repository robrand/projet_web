<?php
include ('php/verifierCnxClient.php');
?>
<div class="row">
    <div class="large-12 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 60%;" colspan="2" class="site-header"><strong>Informations personnelles</strong></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <?php
            $manager = new PatientManager($db);
            $array = $manager->getPatient($_SESSION['ident']);
            foreach ($array as $obj) {
                echo'<tr><td style="width: 5%;">
                    <span class="topic-important"></span>
                </td><td style="width: 55%;">
                    <span class="fi-torso-female"> ' . $obj->nompatient . ' ' . $obj->prenompatient . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                </td>
                </tr>';
                echo'<tr><td style="width: 5%;">
                    <span class="topic-important"></span>
                </td><td style="width: 55%;">
                    <span class="fi-arrows-in"> ' . $obj->ruepatient . ' ' . $obj->numeropatient . ',<br /> ' . $obj->codepatient . ' ' . $obj->villepatient . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                <a href="index.php?page=modif_patient"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                </tr>';
                echo'<tr><td style="width: 5%;">
                    <span class="topic-important"></span>
                </td><td style="width: 55%;">
                    <span class="fi-telephone"> (+32) ' . $obj->telephonepatient . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                <a href="index.php?page=modif_patient"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                </tr>';
                echo'<tr><td style="width: 5%;">
                    <span class="topic-important"></span>
                </td><td style="width: 55%;">
                    <span class="fi-mail"> ' . $obj->emailpatient . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                <a href="index.php?page=modif_patient"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                </tr>';
                echo'<tr><td style="width: 5%;">
                    <span class="topic-important"></span>
                </td><td style="width: 55%;">
                    <span class="fi-lock"> ' . $obj->mdppatient . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                <a href="index.php?page=modif_patient"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                </tr>';
            }
            ?>  
        </table>
    </div>
    <div class="large-6 column" role="content">
        <?php
        if (isset($_POST["submit_ajout_consultation"])) {
            $manager_consultation = new ConsultationManager($db);
            $manager_consultation->addConsultation($_POST);
        }
        ?>
        <form data-abide action="#" method="post">
            <table class="table-clear w-max site-index"  cellspacing="0">
                <tr>
                    <td style="width: 5%;" colspan="2" class="site-header"><strong>Prendre rendez-vous</strong></td>
                    <td style="width: 5%;"  class="site-header text-center"></td>
                    <td style="width: 5%;"  class="site-header text-center"></td>
                    <td style="width: 30%;"  class="site-header"></td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 55%;">
                        <?php
                        $manager = new PsychotherapieManager($db);
                        $array = $manager->getListePsychotherapie();
                        echo'<select name="id_psychotherapie" id="id_psychotherapie">';
                        foreach ($array as $obj) {
                            echo'<option value="' . $obj->idpsychotherapie . '">' . $obj->nompsychotherapie;
                        }
                        echo '</select>';
                        ?>
                    </td>
                    <td class="text-center" style="width: 5%;">
                    </td>
                    <td class="text-center" style="width: 5%;">
                    </td>
                    <td style="width: 30%;">
                    </td>
                </tr>
                <div style="display: none;">
                    <input type="number" name="id_pathologie" id="id_pathologie" value=1028 />
                    <input type="number" name="id_patient" id="id_patient" value=<?php $_SESSION['ident'] ?> />
                </div>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 55%;">
                        <?php
                        $manager = new TestManager($db);
                        $array = $manager->getListeTest();
                        echo'<select name="id_test" id="id_test">';
                        foreach ($array as $obj) {
                            echo'<option value="' . $obj->idtest . '">' . $obj->nomtest;
                        }
                        echo '</select>';
                        ?>
                    </td>
                    <td class="text-center" style="width: 5%;">
                    </td>
                    <td class="text-center" style="width: 5%;">
                    </td>
                    <td style="width: 30%;">
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 55%;">
                        <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
                        <script src="js/jquery.js"></script>
                        <script src="js/jquery.datetimepicker.js"></script>
                        <input id="datetimepicker" type="text" name="date_consultation" />
                        <script>
                            jQuery('#datetimepicker').datetimepicker({
                                lang: 'fr',
                                allowTimes: [
                                    '8:00', '9:00', '10:00', '11:00',
                                    '13:00', '14:00', '15:00', '16:00'
                                ]
                            });
                        </script>
                    </td>
                    <td class="text-center" style="width: 5%;">
                    </td>
                    <td class="text-center" style="width: 5%;">  
                    </td>
                    <td style="width: 30%;">  
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>
                    <td style="width: 55%;">
                        <span data-tooltip aria-haspopup="true" class="has-tip" title="Cliquez sur le champs ci-dessus pour afficher le calendrier, qui vous permettra de selectionner une date."><em style="font-size: 11px;">Comment prendre rendez-vous ?</em></span>
                    </td>
                    <td class="text-center" style="width: 5%;">
                    </td>
                    <td class="text-center" style="width: 5%;">
                        <button type="submit" class="button tiny success" name="submit_ajout_consultation" id="submit_ajout_consultation">Valider</button>
                    </td>
                    <td style="width: 30%;">
                        <button type="reset" class="button tiny alert">Annuler</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="large-6 column" role="content">
        <?php
        $manager_consultation = new ConsultationManager($db);
        $array = $manager_consultation->getListeConsultation();
        ?>
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 60%;" colspan="2" class="site-header"><strong>Mes rendez-vous</strong></td>
                <td style="width: 5%;"  class="site-header text-center">Statut</td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <?php
            foreach ($array as $obj) {
                if ($obj->idpatient == $_SESSION['ident']) {
                    echo '<tr>
                <td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>
                <td style="width: 55%;">
                    ' . $obj->dateconsultation . '
                </td>';
                    if ($obj->statutconsultation == 0) {
                        echo '<td class="text-center" style="width: 5%;">
                    Attente
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                    <a href="index.php?page=supp_consultation&id=' . $obj->idconsultation . '"><button type="reset" class="button tiny alert">Annuler</button></a>
                </td>';
                    } elseif ($obj->statutconsultation == 1) {
                        echo '<td class="text-center" style="width: 5%;">
                    Acceptée
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                    <a href="index.php?page=supp_consultation&id=' . $obj->idconsultation . '"><button type="reset" class="button tiny alert">Annuler</button></a>
                </td>';
                    } else {
                        echo '<td class="text-center" style="width: 5%;">
                    Annulée
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                </td>';
                    }
                    echo '</tr>';
                }
            }
            ?>
        </table>
    </div>
</div>


