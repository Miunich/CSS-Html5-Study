<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root','','bienes-raices');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }
    // }else{
    //     echo "Conectado";
    // }

    return $db;
}