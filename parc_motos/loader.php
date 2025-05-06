<?php

//Fichier qui va charger les require dont on a besoin
//str_ends_with est une fonction de PHP 8

spl_autoload_register(function ($classname) {
    if (str_ends_with($classname, "Controller")) {
        require 'Controller/' . $classname . '.php';


    } elseif (str_ends_with($classname, "Manager")) {
        require 'Model/Manager/' . $classname . '.php';

    } else {
        require 'Model/' . $classname . '.php';
    }
})



    ?>