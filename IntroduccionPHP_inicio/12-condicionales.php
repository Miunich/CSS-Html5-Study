<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, inicia sesion';
}

//if anidados
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];
echo '<br>';
if(empty($cliente)) {
    echo 'No hay datos';
    
} else {
    echo 'El cliente tiene datos';
    if($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo';
    } else {
        echo 'No hay saldo';
    }
}
echo '<br>';
// else if
if($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo';
} else if($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es premium';
} else {
    echo 'No hay cliente definido o no tiene saldo';
}

// Switch
echo '<br>';
$tecnologia = 'HTML';
switch($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'JavaScript, un excelente lenguaje';
        break;
    case 'HTML':
        echo 'HTML, un excelente lenguaje';
        break;
    default:
        echo 'Otra cosa';
        break;
}

include 'includes/footer.php';