<?php include 'includes/header.php';
//Interfaces

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



include 'includes/footer.php';