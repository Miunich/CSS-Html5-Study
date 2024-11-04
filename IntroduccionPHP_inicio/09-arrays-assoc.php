<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

echo '<pre>';
var_dump($cliente['nombre']);
echo '</pre>';

echo $cliente['nombre'];
echo '<pre>';
echo $cliente['saldo']; 
echo '</pre>';
echo $cliente['informacion']['tipo'];





include 'includes/footer.php';