<?php 

class Autor extends Pessoa {
    public function __construct(
        private string $nacionalidade = "",
        $nome = ""
    ) {
        parent::__construct($nome);
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
}

?>