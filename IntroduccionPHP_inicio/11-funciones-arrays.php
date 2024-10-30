<?php include 'includes/header.php';

// in_array: Buscar elementos en un arreglo
$carrito = ['Tablet', 'Television', 'Computadora'];
var_dump(in_array('Tablet', $carrito));
echo '<br>';
var_dump(in_array('Audifonos', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 2, 5);
sort($numeros); // Ordena de menor a mayor
rsort($numeros); // Ordena de mayor a menor
echo '<br>';
echo '<pre>';
var_dump($numeros);

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);
echo '<br>';
asort($cliente); // Ordena por valores de manera alfabetica
echo '<pre>';
var_dump($cliente);
echo '<br>';

echo '<br>';
ksort($cliente); // Ordena por valores por llave de manera alfabetica
echo '<pre>';
var_dump($cliente);
echo '<br>';




include 'includes/footer.php';