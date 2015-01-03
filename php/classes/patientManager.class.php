<?php

class PatientManager extends Patient {

    protected $_db;
    protected $_patientArray = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function addPatient($patient) {
        try {
            $query = 'select insert_patient(:nom_patient,:prenom_patient,:rue_patient,:numero_patient,:code_patient,:ville_patient,:telephone_patient,:email_patient, :mdp_patient)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':nom_patient', $patient['nom_patient']);
            $sql->bindValue(':prenom_patient', $patient['prenom_patient']);
            $sql->bindValue(':rue_patient', $patient['rue_patient']);
            $sql->bindValue(':numero_patient', $patient['numero_patient']);
            $sql->bindValue(':code_patient', $patient['code_patient']);
            $sql->bindValue(':ville_patient', $patient['ville_patient']);
            $sql->bindValue(':telephone_patient', $patient['telephone_patient']);
            $sql->bindValue(':email_patient', $patient['email_patient']);
            $sql->bindValue(':mdp_patient', $patient['mdp_patient']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function updatePatient($idPatient, $patient) {
        try {
            $query = 'select update_patient(:id_patient,:rue_patient,:numero_patient,:code_patient,:ville_patient,:telephone_patient,:email_patient,:mdp_patient)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_patient', $idPatient);
            $sql->bindValue(':rue_patient', $patient['rue_patient']);
            $sql->bindValue(':numero_patient', $patient['numero_patient']);
            $sql->bindValue(':code_patient', $patient['code_patient']);
            $sql->bindValue(':ville_patient', $patient['ville_patient']);
            $sql->bindValue(':telephone_patient', $patient['telephone_patient']);
            $sql->bindValue(':email_patient', $patient['email_patient']);
            $sql->bindValue(':mdp_patient', $patient['mdp_patient']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function acceptePatient($idPatient) {
        try {
            $query = 'select accepte_patient(:id_patient)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_patient', $idPatient);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function banPatient($idPatient) {
        try {
            $query = 'select ban_patient(:id_patient)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_patient', $idPatient);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getListePatient() {
        try {
            $query = "select * from patient";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_patientArray[] = new Patient($data);
        }
        return $_patientArray;
    }
    
    public function getPatient($id_patient) {
        try {
            $query = "select * from patient where idpatient = :id_patient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_patient', $id_patient);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_patientArray[] = new Patient($data);
        }
        return $_patientArray;
    }
}
