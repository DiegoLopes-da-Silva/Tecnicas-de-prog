<?php

class Shopping extends Pessoa {
    public function __construct(
        private string $cnpj = ""
    ) {}

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
}
?>
