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
                    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
                    <script src="js/jquery.js"></script>
                    <script src="js/jquery.datetimepicker.js"></script>
                    <input id="datetimepicker" type="text" />
                    <script>
                        jQuery('#datetimepicker').datetimepicker({
                            lang: 'fr',
                            step: 10
                        });
                    </script>
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                    <button type="submit" class="button tiny success">Valider</button>
                </td>
                <td style="width: 30%;">
                    <button type="reset" class="button tiny alert">Annuler</button>
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
                </td>
                <td style="width: 30%;">
                </td>
            </tr>
        </table>
    </div>
    <div class="large-6 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 60%;" colspan="2" class="site-header"><strong>Mes rendez-vous</strong></td>
                <td style="width: 5%;"  class="site-header text-center">Statut</td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <tr>
                <td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>
                <td style="width: 55%;">
                    14-12-12 10:20
                </td>
                <td class="text-center" style="width: 5%;">
                    Attente
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                    <button type="reset" class="button tiny alert">Annuler</button>
                </td>
            </tr>
            <tr>
                <td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>
                <td style="width: 55%;">
                    14-12-12 10:20
                </td>
                <td class="text-center" style="width: 5%;">
                    Confirmer
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                    <button type="reset" class="button tiny alert">Annuler</button>
                </td>
            </tr>
            <tr>
                <td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>
                <td style="width: 55%;">
                    14-12-12 10:20
                </td>
                <td class="text-center" style="width: 5%;">
                    Annuler
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td style="width: 30%;">
                </td>
            </tr>
        </table>
    </div>
</div>


