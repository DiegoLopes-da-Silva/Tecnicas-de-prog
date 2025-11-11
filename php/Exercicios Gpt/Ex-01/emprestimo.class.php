<?php 

class Emprestimo {
    public function __construct(
        private string $dataEmprestimo = "",
        private string $dataDevolucao = "",
        private $livro = null
    ) {}

    public function getDataEmprestimo() {
        return $this->dataEmprestimo;
    }

    public function getDataDevolucao() {
        return $this->dataDevolucao;
    }

    public function getLivro() {
        return $this->livro;
    }

    public function setDataEmprestimo($dataEmprestimo) {
        $this->dataEmprestimo = $dataEmprestimo;
    }

    public function setDataDevolucao($dataDevolucao) {
        $this->dataDevolucao = $dataDevolucao;
    }

    public function setLivro($livro) {
        $this->livro = $livro;
    }
}

?>