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
    <div class="large-12 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td colspan="10" class="site-header"><strong>Consultation</strong></td>
            </tr>
            <?php
            $manager = new ConsultationManager($db);
            $array = $manager->getListeConsultation();
            foreach ($array as $obj) {
                echo'<tr>';
                echo '<td style="width: 10%;">
                     ' . $obj->dateconsultation . '
                </td>';
                echo '<td style="width: 10%;">';
                $manager_patient = new PatientManager($db);
                $array_patient = $manager_patient->getPatient($obj->idpatient);
                foreach ($array_patient as $patient) {
                    echo $patient->nompatient;
                }
                echo '</td>';
                echo '<td style="width: 10%;">
                     ';
                foreach ($array_patient as $patient) {
                    echo $patient->prenompatient;
                } echo '
                </td>';
                echo '<td style="width: 10%;">';
                $manager_psychotherapie = new PsychotherapieManager($db);
                $array_psychotherapie = $manager_psychotherapie->getPsychotherapie($obj->idpsychotherapie);
                foreach ($array_psychotherapie as $psychotherapie) {
                    echo $psychotherapie->nompsychotherapie;
                }
                echo '</td>';
                echo '<td style="width: 10%;">';
                $manager_test = new TestManager($db);
                $array_test = $manager_test->getTest($obj->idtest);
                foreach ($array_test as $test) {
                    echo $test->nomtest;
                }
                echo '</td>';
                echo '<td style="width: 10%;">
                     ';
                foreach ($array_test as $test) {
                    echo $test->typetest;
                }
                echo'
                </td>';
                if ($obj->statutconsultation == 0) {
                    echo '<td style="width: 10%;">
                     Attente
                </td>';
                    echo '<td style="width: 10%;">
                     <a href="index.php?page=accepte_consultation&id=' . $obj->idconsultation . '"><button type="reset" class="button success tiny">Accepter</button></a>
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                } elseif ($obj->statutconsultation == 1) {
                    echo '<td style="width: 10%;">
                     Acceptée
                </td>';
                    echo '<td style="width: 10%;">
                     <a href="index.php?page=ajout_facture&id=' . $obj->idconsultation . '&date_consultation=' . $obj->dateconsultation . '&montant_psychotherapie=' . $psychotherapie->montantpsychotherapie . '&montant_test=' . $test->montanttest . '&id_patient=' . $obj->idpatient . '"><button type="reset" class="button tiny">Générer la facture</button></a>
                </td>';
                    echo '<td style="width: 10%;">
                     <a href="index.php?page=annuler_consultation&id=' . $obj->idconsultation . '"><button type="reset" class="button alert tiny">Annuler</button></a>
                </td>';
                } elseif ($obj->statutconsultation == 3) {
                    echo '<td style="width: 10%;">
                     Facturée
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                } else {
                    echo '<td style="width: 10%;">
                     Annulée
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                }
            }
            ?>
        </table>
    </div>
    <div class="large-12 column" role="content">
        <table class="table-clear w-max site-index"  cellspacing="0">
            <tr>
                <td colspan="10" class="site-header"><strong>Facture</strong></td>
            </tr>
            <?php
            $manager = new FactureManager($db);
            $array = $manager->getListeFacture();
            foreach ($array as $obj) {
                echo'<tr>';
                echo '<td style="width: 10%;">
                     ' . $obj->datefacture . '
                </td>';
                echo '<td style="width: 10%;">';
                $manager_patient = new PatientManager($db);
                $array_patient = $manager_patient->getPatient($obj->idpatient);
                foreach ($array_patient as $patient) {
                    echo $patient->nompatient;
                }
                echo '</td>';
                echo '<td style="width: 10%;">
                     ';
                foreach ($array_patient as $patient) {
                    echo $patient->prenompatient;
                } echo '
                </td>';
                echo '<td style="width: 10%;">
                     ' . $obj->montantfacture . '
                </td>';
                if ($obj->statutfacture == 0) {
                    echo '<td style="width: 10%;">
                     Attente
                </td>';
                    echo '<td style="width: 10%;">
                     <a href="index.php?page=accepte_facture&id=' . $obj->idfacture . '"><button type="reset" class="button success tiny">Payée</button></a>
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                } else {
                    echo '<td style="width: 10%;">
                     Payée
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
                    echo '<td style="width: 10%;">
                </td>';
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