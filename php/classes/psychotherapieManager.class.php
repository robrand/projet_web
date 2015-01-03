<?php

class PsychotherapieManager extends Psychotherapie {

    protected $_db;
    protected $_psychotherapieArray = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function addPsychotherapie($psychotherapie) {
        try {
            $query = 'select insert_psychotherapie(:nom_psychotherapie,:description_psychotherapie,:montant_psychotherapie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':nom_psychotherapie', $psychotherapie['nom_psychotherapie']);
            $sql->bindValue(':description_psychotherapie', $psychotherapie['description_psychotherapie']);
            $sql->bindValue(':montant_psychotherapie', $psychotherapie['montant_psychotherapie']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function updatePsychotherapie($idPsychotherapie, $psychotherapie) {
        try {
            $query = 'select update_psychotherapie(:id_psychotherapie,:nom_psychotherapie,:description_psychotherapie,:montant_psychotherapie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_psychotherapie', $idPsychotherapie);
            $sql->bindValue(':nom_psychotherapie', $psychotherapie['nom_psychotherapie']);
            $sql->bindValue(':description_psychotherapie', $psychotherapie['description_psychotherapie']);
            $sql->bindValue(':montant_psychotherapie', $psychotherapie['montant_psychotherapie']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function deletePsychotherapie($psychotherapie) {
        try {
            $query = 'select delete_psychotherapie(:id_psychotherapie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_psychotherapie', $psychotherapie);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getListePsychotherapie() {
        try {
            $query = "select * from psychotherapie";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_psychotherapieArray[] = new Psychotherapie($data);
        }
        return $_psychotherapieArray;
    }
    
    public function getPsychotherapie($id_psychotherapie) {
        try {
            $query = "select * from psychotherapie where idpsychotherapie = :id_psychotherapie";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_psychotherapie', $id_psychotherapie);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_psychotherapieArray[] = new Psychotherapie($data);
        }
        return $_psychotherapieArray;
    }
}
