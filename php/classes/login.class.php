<?php

class Login {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

    function isAdmin($email_patient, $mdp_patient) {
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
