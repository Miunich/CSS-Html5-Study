<?php include 'includes/header.php';

//while
$i = 0; // Inicializador
while($i < 10) { // Condicion
    echo $i . '<br>';
    $i++; // Incremento
}

echo '<br>';
// Do while
$i = 0;
do {
    echo $i . '<br>';
    $i++;
} while($i < 10);

// 3 imprimir Fizz si el numero es divisible entre 3
// 5 imprimir Buzz si el numero es divisible entre 5
// 3 y 5 imprimir FizzBuzz

// For loop
echo '<br>';
for($i = 0; $i < 10; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . ' FizzBuzz <br>';
    } else if($i % 3 === 0) {
        echo $i . ' Fizz <br>';
    } else if($i % 5 === 0) {
        echo $i . ' Buzz <br>';
    } else {
        echo $i . '<br>';
    }
}
// For each
$clientes = array('Pedro', 'Juan', 'Karen');
echo '<br>';
foreach($clientes as $cliente) {
    echo $cliente . '<br>';
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];
echo '<br>';
foreach($cliente as $key => $valor) {
    echo $key . ' - ' . $valor . '<br>';
}

include 'includes/footer.php';