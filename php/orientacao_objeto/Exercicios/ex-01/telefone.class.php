<?php 

class Telefone {
    public function __construct(
        private int $ddd,
        private string $numero
    ){}


    public function getDdd()
    {
        return $this->ddd;
    }

    public function getNumero()
    {
        return $this->numero;
    }
}
?>