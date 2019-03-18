<?php

    // register multiple files and lowercase them all. 
    spl_autoload_register(function ($class) {
        include 'classes/' . strtolower($class) . '.php';
    });

?>
