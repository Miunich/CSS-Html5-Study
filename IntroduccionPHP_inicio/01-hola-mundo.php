<?php 
declare(strict_types= 1);

include 'includes/header.php';


// echo"Hola Mundo";

// echo ("Hola Mundo");

// print "Hola Mundo";

// print_r("Hola Mundo");

// var_dump("Hola Mundo");

class Producto {
    

    public function __construct( public string $nombre, public int $precio, public bool $disponible) {
        
    }

    public function mostrarProducto(){
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;

    }

}
$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();

echo'<pre>';
var_dump($producto);
echo'</pre>';

$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2 ->mostrarProducto();

echo'<pre>';
var_dump($producto2);
echo'</pre>';

include 'includes/footer.php'; ?>