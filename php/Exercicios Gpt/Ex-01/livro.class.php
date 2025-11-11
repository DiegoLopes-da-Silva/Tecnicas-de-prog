<?php 

class Livro {
    public function __construct(
        private string $titulo = "",
        private int $ano = 0,
        private $autor = null
    ) {}

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }
}

?>