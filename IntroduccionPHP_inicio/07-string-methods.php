<?php include 'includes/header.php';


interface TransporteInterfaz{
    public function getInfo() : string;
    public function getRuedas() : int;
}
Class Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $nombre) {
        
    }

    public function getInfo(): string {
        return $this->nombre ." tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas(): int {
        return $this->ruedas;
    }
    
}

class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $nombre, protected string $color) {
        
    }
    public function getInfo(): string {
        return $this->nombre ." tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y es de color ". $this->color;
    }

    public function getColor() : string {
        return "El color es " . $this->color;
    }

}

echo "<pre>";
var_dump($auto = new Automovil(4, 4, "Auto", "Rojo"));

echo $auto->getInfo();
echo "<hr>";
echo $auto->getColor();
echo "</pre>";

include 'includes/footer.php';