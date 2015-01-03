<?php

class Patient {

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
    public function __getNomPatient($nomPatient) {
        if (isset($this->_attributs[$nomPatient])) {
            return $this->_attributs[$nomPatient];
        }
    }

//setters
    public function __setNomPatient($nomPatient, $valeur) {
        $this->_attributs[$nomPatient] = $valeur;
    }
    
    //getters
    public function __getPrenomPatient($prenomPatient) {
        if (isset($this->_attributs[$prenomPatient])) {
            return $this->_attributs[$prenomPatient];
        }
    }

//setters
    public function __setPrenomPatient($prenomPatient, $valeur) {
        $this->_attributs[$prenomPatient] = $valeur;
    }
    
    //getters
    public function __getRuePatient($ruePatient) {
        if (isset($this->_attributs[$ruePatient])) {
            return $this->_attributs[$ruePatient];
        }
    }

//setters
    public function __setRuePatient($ruePatient, $valeur) {
        $this->_attributs[$ruePatient] = $valeur;
    }
    
    //getters
    public function __getNumeroPatient($numeroPatient) {
        if (isset($this->_attributs[$numeroPatient])) {
            return $this->_attributs[$numeroPatient];
        }
    }

//setters
    public function __setNumeroPatient($numeroPatient, $valeur) {
        $this->_attributs[$numeroPatient] = $valeur;
    }
    
    //getters
    public function __getCodePatient($codePatient) {
        if (isset($this->_attributs[$codePatient])) {
            return $this->_attributs[$codePatient];
        }
    }

//setters
    public function __setCodePatient($codePatient, $valeur) {
        $this->_attributs[$codePatient] = $valeur;
    }
    
    //getters
    public function __getVillePatient($villePatient) {
        if (isset($this->_attributs[$villePatient])) {
            return $this->_attributs[$villePatient];
        }
    }

//setters
    public function __setVillePatient($villePatient, $valeur) {
        $this->_attributs[$villePatient] = $valeur;
    }
    
    //getters
    public function __getTelephonePatient($telephonePatient) {
        if (isset($this->_attributs[$telephonePatient])) {
            return $this->_attributs[$telephonePatient];
        }
    }

//setters
    public function __setTelephonePatient($telephonePatient, $valeur) {
        $this->_attributs[$telephonePatient] = $valeur;
    }
    
    //getters
    public function __getEmailPatient($emailPatient) {
        if (isset($this->_attributs[$emailPatient])) {
            return $this->_attributs[$emailPatient];
        }
    }

//setters
    public function __setEmailPatient($emailPatient, $valeur) {
        $this->_attributs[$emailPatient] = $valeur;
    }

}