<?php

class Proprietario extends Pessoa {
    public function __construct(
        private string $cpf = ""
    ) {}

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}
?>
