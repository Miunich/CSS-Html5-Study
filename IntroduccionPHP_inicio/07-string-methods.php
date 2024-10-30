<?php include 'includes/header.php';

$nombreCliente = "Juan Hormazabal";

//Conocer extension de un string
echo strlen($nombreCliente); // 15

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto); // saca los espacios en blanco del inicio y final

//Convertir a mayusculas
echo strtoupper($nombreCliente);

//Convertir a minusculas
echo strtolower($nombreCliente);

echo str_replace('Juan', 'J', $nombreCliente);

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Juan'); // 0

$tipoCliente = "Premium";
echo "<br>";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;


include 'includes/footer.php';