<?php

class TestManager extends Test {

    protected $_db;
    protected $_testArray = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function addTest($test) {
        try {
            $query = 'select insert_test(:nom_test,:description_test, :type_test, :montant_test)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':nom_test', $test['nom_test']);
            $sql->bindValue(':description_test', $test['description_test']);
            $sql->bindValue(':type_test', $test['type_test']);
            $sql->bindValue(':montant_test', $test['montant_test']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function updateTest($idTest, $test) {
        try {
            $query = 'select update_test(:id_test,:nom_test,:description_test,:type_test,:montant_test)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_test', $idTest);
            $sql->bindValue(':nom_test', $test['nom_test']);
            $sql->bindValue(':description_test', $test['description_test']);
            $sql->bindValue(':type_test', $test['type_test']);
            $sql->bindValue(':montant_test', $test['montant_test']);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }
    
    public function deleteTest($test) {
        try {
            $query = 'select delete_test(:id_test)';
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':id_test', $test);
            $sql->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getListeTest() {
        try {
            $query = "select * from test";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_testArray[] = new Test($data);
        }
        return $_testArray;
    }
    
    public function getTest($id_test) {
        try {
            $query = "select * from test where idtest = :id_test";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_test', $id_test);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_testArray[] = new Test($data);
        }
        return $_testArray;
    }
    
    public function getListeTestPsychologique() {
        try {
            $query = "select * from test where typetest = 'psychologique'";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_testArray[] = new Test($data);
        }
        return $_testArray;
    }
    
    public function getTestPsychologique($id_test) {
        try {
            $query = "select * from test where idtest = :id_test and typetest = 'psychologique'";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_test', $id_test);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_testArray[] = new Test($data);
        }
        return $_testArray;
    }
    
    public function getListeTestOrientation() {
        try {
            $query = "select * from test where typetest = 'orientation'";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_testArray[] = new Test($data);
        }
        return $_testArray;
    }
    
    public function getTestOrientation($id_test) {
        try {
            $query = "select * from test where idtest = :id_test and typetest = 'orientation'";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_test', $id_test);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            $_testArray[] = new Test($data);
        }
        return $_testArray;
    }
    
}
