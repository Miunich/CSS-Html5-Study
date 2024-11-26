<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost;dbname=propiedades', 'root', '');

$query = "SELECT titulo from propiedades";

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($resultado);

include 'includes/footer.php';