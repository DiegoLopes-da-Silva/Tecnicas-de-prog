<?php

# O EXTENDS faz o papel de relacionamento numa herança, com prestador sendo filha e pessoa pai.
# A filha recebe os parametros do pai

class Prestador extends Pessoa {
    public function __construct(
        protected string $especialidade = "", private array $itens = array(), string $nome, string $celular
        ) {
            parent:: __construct($nome, $celular);
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function getItens() {
            return $this->itens;
        }

        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }

        public function setItens($itens) {
            $this->itens = $itens();
        }
}

?>