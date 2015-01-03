<?php

class Login {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

    function isAdmin($email_patient, $mdp_patient) {
        /* try {
          $query = "select verifier_connexion(:email_patient,:mdp_patient) as retour";
          $sql = $this->_db->prepare($query);
          $sql->bindValue(':email_patient', $login);
          $sql->bindValue(':mdp_patient', $password);
          $sql->execute();
          //2 manières et 2 récup. différentes de la valeur
          //$retour[] = $sql->fetchAll(PDO::FETCH_ASSOC); // récupérer : print $auth[0][0]['verifier_connexion'];
          $retour = $sql->fetchColumn(0);
          } catch (PDOException $e) {
          print "Echec de la requ&ecirc;te." . $e;
          }
          return $retour; */

        try {
            $query = "select * from patient where emailpatient = :email_patient AND mdppatient = :mdp_patient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':email_patient', $email_patient);
            $resultset->bindValue(':mdp_patient', $mdp_patient);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        while ($data = $resultset->fetch()) {
            $_loginArray[] = new Patient($data);
        }
        return $_loginArray;
    }

}
