<?php

class Pathologie {

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
    public function __getNomPathologie($nomPathologie) {
        if (isset($this->_attributs[$nomPathologie])) {
            return $this->_attributs[$nomPathologie];
        }
    }

//setters
    public function __setNomPathologie($nomPathologie, $valeur) {
        $this->_attributs[$nomPathologie] = $valeur;
    }

    //getters
    public function __getDescriptionPathologie($descriptionPathologie) {
        if (isset($this->_attributs[$descriptionPathologie])) {
            return $this->_attributs[$descriptionPathologie];
        }
    }

//setters
    public function __setDescriptionPathologie($descriptionPathologie, $valeur) {
        $this->_attributs[$descriptionPathologie] = $valeur;
    }
}