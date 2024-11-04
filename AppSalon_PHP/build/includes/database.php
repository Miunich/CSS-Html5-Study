<?php

$db = mysqli_connect('localhost', 'root', '', 'estudio');

if(!$db){
    echo 'Error en la conexión';
    exit;
}