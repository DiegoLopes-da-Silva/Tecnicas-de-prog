<?php

class Avaliacao {
    public function __construct(
        private float $nota = 0.0,
        # O ? permite que o objeto aceite valores nulos! Bem bacana
        private ?Receita $receita = null,
        private ?Avaliador $avaliador = null
    ) {}

    public function getNota() {
        return $this->nota;
    }

    public function setNota(float $nota) {
        $this->nota = $nota;
    }

    public function setReceita(Receita $receita){
        $this->receita = $receita;
    }

    public function getReceita(): ?Receita {
        return $this->receita;
    }

    public function setAvaliador(Avaliador $avaliador) {
        $this->avaliador = $avaliador;
    }

    public function getAvaliador(): ?Avaliador {
        return $this->avaliador;
    }
}
?>
