<?php include 'includes/header.php';
//Herencia

abstract Class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $nombre) {
        
    }

    public function getInfo(): string {
        return $this->nombre ." tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas(): int {
        return $this->ruedas;
    }
    
}


class Bicicleta extends Transporte {
    public function getInfo(): string {
        return $this->nombre ." tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y no gasta gasolina.";


    }

}

class Automovil extends Transporte {
    protected string $transmision;

    public function __construct(int $ruedas, int $capacidad, string $nombre, string $transmision) {
        // Llamar al constructor de la clase padre
        parent::__construct($ruedas, $capacidad, $nombre);
        $this->transmision = $transmision;
    }

    public function getTransmision(): string {
        return $this->nombre . " tiene " . $this->ruedas . " ruedas, una capacidad de " . $this->capacidad . " personas y su transmisión es: " . $this->transmision . ".";
    }
}


$camion = new Automovil(4,3, "Camión","Manual");
echo $camion->getInfo();
echo $camion->getTransmision();

echo "<hr>";

$bicicleta = new Bicicleta(2,2, "Bicicleta");
echo $bicicleta->getInfo();
// echo $bicicleta->getRuedas();
echo "<hr>";

echo "<hr>";
$auto = new Automovil(4,5, "Auto","Automática");
echo $auto->getInfo();
echo $auto->getTransmision();



include 'includes/footer.php';