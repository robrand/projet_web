<?php

class Test {

    protected $_attributs = array();

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    //hydrate
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $this->$key = $value;
        }
    }

    //getters
    public function __getNomTest($nomTestTest) {
        if (isset($this->_attributs[$nomTest])) {
            return $this->_attributs[$nomTest];
        }
    }

//setters
    public function __setNomTest($nomTest, $valeur) {
        $this->_attributs[$nomTest] = $valeur;
    }

    //getters
    public function __getDescriptionTest($descriptionTest) {
        if (isset($this->_attributs[$descriptionTest])) {
            return $this->_attributs[$descriptionTest];
        }
    }

//setters
    public function __setDescriptionTest($descriptionTest, $valeur) {
        $this->_attributs[$descriptionTest] = $valeur;
    }
    
    //getters
    public function __getTypeTest($typeTest) {
        if (isset($this->_attributs[$typeTest])) {
            return $this->_attributs[$typeTest];
        }
    }

//setters
    public function __setTypeTest($typeTest, $valeur) {
        $this->_attributs[$typeTest] = $valeur;
    }
    
    public function __getMontantTest($montantTest) {
        if (isset($this->_attributs[$montantTest])) {
            return $this->_attributs[$montantTest];
        }
    }

//setters
    public function __setMontantTest($montantTest, $valeur) {
        $this->_attributs[$montantTest] = $valeur;
    }
}