<?php

function autoload($nom_classe) {
    if(file_exists('php/classes/'.$nom_classe.'.class.php')) {
        require 'php/classes/'.$nom_classe.'.class.php';
    }    
    else if(file_exists('php/classes/'.$nom_classe.'.class.php')) {
        require 'php/classes/'.$nom_classe.'.class.php';
    }
}
//fct qui appelle méthode d'autochargement des classes
spl_autoload_register('autoload');


