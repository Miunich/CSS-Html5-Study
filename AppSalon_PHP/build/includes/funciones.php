<?php

function obtener_servicios(){
    try{
        //code...

        // Importar las credenciales
        require 'database.php';
        // Consulta SQL
        $sql = "SELECT * FROM servicios;";
        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);
        
        return $consulta;
        //Cerrar la conexión (opcional)
        $resultado = mysqli_close($db);
        echo $resultado;


    }catch(\Throwable $th){
        //throw $th;
        var_dump($th);
    }
}

obtener_servicios();