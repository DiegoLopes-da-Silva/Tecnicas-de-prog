<?php
class Receita {
    

    public function __construct(
        
    private string $nome,
    private string $ingredientes
    ) {}

    public function getNome() {
        return $this->nome;
    }

    public function getIngredientes(){
        return $this->ingredientes;
    }
}
?>
