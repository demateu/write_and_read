<?php

function autocargar($classname){ //el nombre de las clases de cada controlador
    include 'controller/' . $classname . '.php';
}

spl_autoload_register('autocargar');


/**
 * incluirlo en el index asi:
 * require_once 'autoload.php';
 */

?>

