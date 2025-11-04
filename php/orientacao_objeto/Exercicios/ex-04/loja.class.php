<?php

class Loja {
    public function __construct(
        private int $lotes = 0,
        private string $numero = "",
        private ?Shopping $shopping = null,
        private ?Proprietario $proprietario = null
    ) {}

    public function getLotes() {
        return $this->lotes;
    }

    public function setLotes($lotes) {
        $this->lotes = $lotes;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getShopping() {
        return $this->shopping;
    }

    public function setShopping($shopping) {
        $this->shopping = $shopping;
    }

    public function getProprietario() {
        return $this->proprietario;
    }

    public function setProprietario($proprietario) {
        $this->proprietario = $proprietario;
    }
}
?>
