<?php
include ('php/verifierCnxAdmin.php');
?>
<div class="row">
    <div class="large-12 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td colspan="10" class="site-header"><strong>Patient</strong></td>
            </tr>
            <?php
            $manager = new PatientManager($db);
            $array = $manager->getListePatient();
            foreach ($array as $obj) {
                if ($obj->statutpatient != 3) {
                    echo'<tr>';
                    echo '<td style="width: 10%;">
                     ' . $obj->nompatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->prenompatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->ruepatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->numeropatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->codepatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->villepatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->telephonepatient . '
                </td>';
                    echo '<td style="width: 10%;">
                     ' . $obj->emailpatient . '
                </td>';
                    if ($obj->statutpatient == 0) {
                        echo'<td style="width: 10%;">
                    <a href="index.php?page=accepte_patient&id=' . $obj->idpatient . '"><button type="reset" class="button tiny success">Accepter</button></a>
                </td>';
                    } else if ($obj->statutpatient == 1) {
                        echo'<td style="width: 10%;">
                    <a href="index.php?page=ban_patient&id=' . $obj->idpatient . '"><button type="reset" class="button tiny alert">Bannir</button></a>
                </td>';
                    } else if ($obj->statutpatient == 2) {
                        echo'<td style="width: 10%;">
                    <a href="index.php?page=accepte_patient&id=' . $obj->idpatient . '"><button type="reset" class="button tiny">Réintégrer</button></a>
                </td>';
                    }
                    echo '<td style="width: 5%;">
                        <span class="topic-important"></span>
                    </td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>
    </div>
    <div class="large-6 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 5%;" colspan="2" class="site-header"><strong>Pathologie</strong></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <?php
            $manager = new PathologieManager($db);
            $array = $manager->getListePathologie();
            foreach ($array as $obj) {
                echo'<tr>';
                echo'<td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>';
                echo '<td style="width: 55%;">
                     ' . $obj->nompathologie . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                <a href="index.php?page=modif_pathologie&id=' . $obj->idpathologie . '"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                <td style="width: 30%;">
                    <a href="index.php?page=supp_pathologie&id=' . $obj->idpathologie . '"><button type="reset" class="button tiny alert">Supprimer</button></a>
                </td>
                </tr>';
            }
            ?>
        </table>
        <a href="index.php?page=ajout_pathologie"><button class="button expand success">Ajouter</button></a>
    </div>
    <div class="large-6 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 5%;" colspan="2" class="site-header"><strong>Psychothérapie</strong></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <?php
            $manager = new PsychotherapieManager($db);
            $array = $manager->getListePsychotherapie();
            foreach ($array as $obj) {
                echo'<tr>';
                echo'<td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>';
                echo '<td style="width: 55%;">
                     ' . $obj->nompsychotherapie . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                <a href="index.php?page=modif_psychotherapie&id=' . $obj->idpsychotherapie . '"><button type="reset" class="button tiny">Modifier</button></a>
                </td>';
                echo'<td style="width: 30%;">
                    <a href="index.php?page=supp_psychotherapie&id=' . $obj->idpsychotherapie . '"><button type="reset" class="button tiny alert">Supprimer</button></a>
                </td>
                </tr>';
            }
            ?>
        </table>
        <a href="index.php?page=ajout_psychotherapie"><button class="button expand success">Ajouter</button></a>
    </div>
</div>
<div class="row">
    <div class="large-6 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 5%;" colspan="2" class="site-header"><strong>Test psychologique</strong></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <?php
            $manager = new TestManager($db);
            $array = $manager->getListeTestPsychologique();
            foreach ($array as $obj) {
                echo'<tr>';
                echo'<td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>';
                echo '<td style="width: 55%;">
                     ' . $obj->nomtest . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                <a href="index.php?page=modif_test&id=' . $obj->idtest . '"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                <td style="width: 30%;">
                    <a href="index.php?page=supp_test&id=' . $obj->idtest . '"><button type="reset" class="button tiny alert">Supprimer</button></a>
                </td>
                </tr>';
            }
            ?>
        </table>
        <a href="index.php?page=ajout_test_psychologique"><button class="button expand success">Ajouter</button></a>
    </div>
    <div class="large-6 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td style="width: 5%;" colspan="2" class="site-header"><strong>Test d'orientation</strong></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 5%;"  class="site-header text-center"></td>
                <td style="width: 30%;"  class="site-header"></td>
            </tr>
            <?php
            $manager = new TestManager($db);
            $array = $manager->getListeTestOrientation();
            foreach ($array as $obj) {
                echo'<tr>';
                echo'<td style="width: 5%;">
                    <span class="topic-important"></span>
                </td>';
                echo '<td style="width: 55%;">
                     ' . $obj->nomtest . '
                </td>
                <td class="text-center" style="width: 5%;">
                </td>
                <td class="text-center" style="width: 5%;">
                <a href="index.php?page=modif_test&id=' . $obj->idtest . '"><button type="reset" class="button tiny">Modifier</button></a>
                </td>
                <td style="width: 30%;">
                    <a href="index.php?page=supp_test&id=' . $obj->idtest . '"><button type="reset" class="button tiny alert">Supprimer</button></a>
                </td>
                </tr>';
            }
            ?>
        </table>
        <a href="index.php?page=ajout_test_orientation"><button class="button expand success">Ajouter</button></a>
    </div>
</div>