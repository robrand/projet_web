<?php

class Facture {

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
    public function __getDateFacture($dateFacture) {
        if (isset($this->_attributs[$dateFacture])) {
            return $this->_attributs[$dateFacture];
        }
    }

//setters
    public function __setDateFacture($dateFacture, $valeur) {
        $this->_attributs[$dateFacture] = $valeur;
    }
    
    //getters
    public function __getMontantFacture($montantFacture) {
        if (isset($this->_attributs[$montantFacture])) {
            return $this->_attributs[$montantFacture];
        }
    }

//setters
    public function __setMontantFacture($montantFacture, $valeur) {
        $this->_attributs[$montantFacture] = $valeur;
    }

    //getters
    public function __getStatutFacture($statutFacture) {
        if (isset($this->_attributs[$statutFacture])) {
            return $this->_attributs[$statutFacture];
        }
    }

//setters
    public function __setStatutFacture($statutFacture, $valeur) {
        $this->_attributs[$statutFacture] = $valeur;
    }
}