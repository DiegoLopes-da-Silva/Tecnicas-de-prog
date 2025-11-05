<?php


class Cliente {
    public function __construct(
        protected string $cpf = ""
        ) {}

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }
}

?>