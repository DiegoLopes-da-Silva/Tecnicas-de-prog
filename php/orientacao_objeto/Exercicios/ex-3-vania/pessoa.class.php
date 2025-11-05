<?php 

// Protected indica que:
# A propriedade só pode ser acessada dentro da própria classe e por classes filhas (que herdam dela).
# Não pode ser acessada diretamente de fora do objeto.

// Abstract indica que:
# Não da pra dar "New" nessa classe, criando um objeto
# Não pode ser instanciada diretamente.
# Serve como modelo/base para outras classes.
# Pode ter métodos abstratos, que são declarados, mas não implementados — e devem ser implementados nas subclasse
// Vai só na classe PAI

abstract class Pessoa {
    public function __construct(
        protected string $nome = "", protected string $celular
        ) {}

        public function getNome() {
            return $this->nome;
        }

        public function getCelular() {
            return $this->celular;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
}

?>