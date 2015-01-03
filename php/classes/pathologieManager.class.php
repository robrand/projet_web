<?php

class PathologieManager extends Pathologie {

    protected $_db;
    protected $_pathologieArray = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function addPathologie($pathologie) {
        try {
            $query = 'select insert_pathologie(:nom_pathologie,:description_pathologie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':nom_pathologie', $pathologie['nom_pathologie']);
            $sql->bindValue(':description_pathologie', $pathologie['description_pathologie']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function updatePathologie($idPathologie, $pathologie) {
        try {
            $query = 'select update_pathologie(:id_pathologie,:nom_pathologie,:description_pathologie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_pathologie', $idPathologie);
            $sql->bindValue(':nom_pathologie', $pathologie['nom_pathologie']);
            $sql->bindValue(':description_pathologie', $pathologie['description_pathologie']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function deletePathologie($pathologie) {
        try {
            $query = 'select delete_pathologie(:id_pathologie)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_pathologie', $pathologie);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getListePathologie() {
        try {
            $query = "select * from pathologie";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_pathologieArray[] = new Pathologie($data);
        }
        return $_pathologieArray;
    }
    
    public function getPathologie($id_pathologie) {
        try {
            $query = "select * from pathologie where idpathologie = :id_pathologie";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_pathologie', $id_pathologie);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_pathologieArray[] = new Pathologie($data);
        }
        return $_pathologieArray;
    }
}
