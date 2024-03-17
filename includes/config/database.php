<?php

function conectarBD(): mysqli{
    $db = new mysqli('localhost', 'root', 'pinguino11', 'bienesraices_crud');

    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }
    
    return $db;
}