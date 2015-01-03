<?php

class Psychotherapie {

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
    public function __getNomPsychotherapie($nomPsychotherapie) {
        if (isset($this->_attributs[$nomPsychotherapie])) {
            return $this->_attributs[$nomPsychotherapie];
        }
    }

//setters
    public function __setNomPsychotherapie($nomPsychotherapie, $valeur) {
        $this->_attributs[$nomPsychotherapie] = $valeur;
    }

    //getters
    public function __getDescriptionPsychotherapie($descriptionPsychotherapie) {
        if (isset($this->_attributs[$descriptionPsychotherapie])) {
            return $this->_attributs[$descriptionPsychotherapie];
        }
    }

//setters
    public function __setDescriptionPsychotherapie($descriptionPsychotherapie, $valeur) {
        $this->_attributs[$descriptionPsychotherapie] = $valeur;
    }
    
    public function __getMontantPsychotherapie($montantPsychotherapie) {
        if (isset($this->_attributs[$montantPsychotherapie])) {
            return $this->_attributs[$montantPsychotherapie];
        }
    }

//setters
    public function __setMontantPsychotherapie($montantPsychotherapie, $valeur) {
        $this->_attributs[$montantPsychotherapie] = $valeur;
    }
}