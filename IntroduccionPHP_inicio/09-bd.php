<?php include 'includes/header.php';

//Conectar a la  BD con Mysqli

$db = new mysqli('localhost', 'root', '', 'propiedades');

$query = "SELECT titulo, imagen from propiedades";
$stmt = $db->prepare($query);

$stmt->execute();

$stmt->bind_result($titulo, $imagen) ;

$stmt->fetch();

var_dump($titulo);
echo"<br>";
echo $titulo;
echo "<br>";
echo $imagen;

include 'includes/footer.php';