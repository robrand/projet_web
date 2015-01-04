<?php

class FactureManager extends Facture {

    protected $_db;
    protected $_factureArray = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function addFacture($date_facture, $montant_facture, $id_patient) {
        try {
            $query = 'select insert_facture(:date_facture,:montant_facture,:id_patient)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':date_facture', $date_facture);
            $sql->bindValue(':montant_facture', $montant_facture);
            $sql->bindValue(':id_patient', $id_patient);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function accepteFacture($idFacture) {
        try {
            $query = 'select accepte_facture(:id_facture)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_facture', $idFacture);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getListeFacture() {
        try {
            $query = "select * from facture";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_factureArray[] = new Facture($data);
        }
        return $_factureArray;
    }

    public function getFacture($id_facture) {
        try {
            $query = "select * from facture where idfacture = :id_facture";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_facture', $id_facture);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_factureArray[] = new Facture($data);
        }
        return $_factureArray;
    }

}
