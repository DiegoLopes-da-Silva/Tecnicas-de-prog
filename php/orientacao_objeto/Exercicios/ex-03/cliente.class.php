<?php

class Cliente extends Pessoa {

    public function __construct(
        private string $nome = "", 
        private string $celular = "", 
        private string $cpf = ""
    )
    {
        parent::__construct($nome, $celular);
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}
?>
