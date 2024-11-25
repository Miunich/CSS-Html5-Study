<?php 
declare(strict_types= 1);

include 'includes/header.php';
//Métodos estáticos
class Producto {
    
    public $imagen;
    public static $imagenPlaceholder = 'imagen.jpg';
    public function __construct( protected string $nombre, public int $precio, public bool $disponible, string $imagen ) {
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }
    public static function obtenerProducto(){
        echo "Obteniendo datos del producto...";
    }

    public function mostrarProducto(){
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;

    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

}

// echo Producto::obtenerProducto();
// echo Producto::obtenerImagenProducto();

$producto = new Producto('Tablet', 200, true, '');
// $producto->mostrarProducto();
// echo $producto->getNombre();
// $producto->setNombre('Nuevo Nombre');

echo $producto->obtenerImagenProducto();

// echo'<pre>';
// var_dump($producto);
// echo'</pre>';

$producto2 = new Producto('Monitor Curvo', 300, true, 'monitorCurvo.jpg');
// $producto2 ->mostrarProducto();

// echo'<pre>';
// var_dump($producto2);
// echo'</pre>';

echo $producto2->obtenerImagenProducto();
include 'includes/footer.php'; ?>