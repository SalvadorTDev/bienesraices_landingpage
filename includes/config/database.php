<?php

function conectarDb() : mysqli{
    $db = mysqli_connect(
        'localhost',
        'root',
        '232405',
        'bienesraices_db'
    );
    if(!$db) {
        echo('Error, no se pudo conectar a la Base de Datos');
        exit;
    } 
    return $db;
}
