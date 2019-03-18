<?php

spl_autoload_register(function ($class) {
    include 'classes/' . strtolower($class) . '.php';
});

?>
