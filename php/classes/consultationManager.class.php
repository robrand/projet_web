<?php

class ConsultationManager extends Consultation {

    protected $_db;
    protected $_consultationArray = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function addConsultation($consultation) {
        try {
            $query = 'select insert_consultation(:date_consultation,:id_patient,:id_test,:id_psychotherapie,:id_pathologie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':date_consultation', $consultation['date_consultation']);
            $sql->bindValue(':id_patient', $consultation['id_patient']);
            $sql->bindValue(':id_test', $consultation['id_test']);
            $sql->bindValue(':id_psychotherapie', $consultation['id_psychotherapie']);
            $sql->bindValue(':id_pathologie', $consultation['id_pathologie']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getListeConsultation() {
        try {
            $query = "select * from consultation";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_consultationArray[] = new Consultation($data);
        }
        return $_consultationArray;
    }
    
    public function getConsultation($id_consultation) {
        try {
            $query = "select * from consultation where idconsultation = :id_consultation";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_consultation', $id_consultation);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_consultationArray[] = new Consultation($data);
        }
        return $_consultationArray;
    }
}
