<?php

class Avaliador extends Pessoa {
    private array $avaliacoes = [];

    public function __construct(
        private string $cpf = ""
    ) {
        parent::__construct();
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf(string $cpf) {
        $this->cpf = $cpf;
    }

    public function setAvaliacao($avaliacao) {
        if (is_object($avaliacao)) {
            $this->avaliacoes[] = $avaliacao;
        } elseif (is_array($avaliacao)) {
            foreach ($avaliacao as $a) {
                $this->avaliacoes[] = $a;
            }
        }
    }

    public function getAvaliacoes() {
        return $this->avaliacoes;
    }
}
?>
