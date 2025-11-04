<?php 

class Cliente {
    public function __construct(
        private string $cpf = ""

    ) {}

        public function getCpf() {
            return $this->cpf;
        }



}

?>