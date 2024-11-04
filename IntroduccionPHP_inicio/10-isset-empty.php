<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');

// empty: Revisa si un arreglo esta vacio
var_dump(empty($clientes));
echo '<br>';
var_dump(empty($clientes2));
echo '<br>';
var_dump(empty($clientes3));

// isset: Revisa si un arreglo esta definido o si una propiedad esta definida
echo '<br>';
var_dump(isset($clientes4));


include 'includes/footer.php';