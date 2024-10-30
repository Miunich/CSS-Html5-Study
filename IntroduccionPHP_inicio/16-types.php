<?php 
declare(strict_types=1); // Para que el tipado sea estricto
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado): ?string {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return null;
    }
    
}
$usuario = usuarioAutenticado(true);

echo $usuario;



include 'includes/footer.php';