<?php 

    class Contratado {
        public function __construct(
            private string $cnpj = ""

        ) {}

        public function getCnpj(){
            return $this->cnpj;
        }
    }

?>