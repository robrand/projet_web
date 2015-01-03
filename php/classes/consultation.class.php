<?php

class Consultation {

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
    public function __getDateConsultation($dateConsultation) {
        if (isset($this->_attributs[$dateConsultation])) {
            return $this->_attributs[$dateConsultation];
        }
    }

//setters
    public function __setDateConsultation($dateConsultation, $valeur) {
        $this->_attributs[$dateConsultation] = $valeur;
    }

    //getters
    public function __getStatutConsultation($statutConsultation) {
        if (isset($this->_attributs[$statutConsultation])) {
            return $this->_attributs[$statutConsultation];
        }
    }

//setters
    public function __setStatutConsultation($statutConsultation, $valeur) {
        $this->_attributs[$statutConsultation] = $valeur;
    }
}