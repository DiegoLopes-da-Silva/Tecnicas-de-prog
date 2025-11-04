<?php 

    class Pessoa {
        private array $telefones = [];
    
        public function __construct(
            private string $nome = ""
        ) {}
    
        public function getNome() {
            return $this->nome;
        }
    
        public function adicionarTelefone(Telefone $telefone) {
            $this->telefones[] = $telefone;
        }
    
        public function getTelefones() {
            return $this->telefones;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setTelefone($telefone) {
            if (is_object($telefone)) {
                $this->telefones[] = $telefone;
            }
            elseif (is_array($telefone)) {
                foreach ($telefone as $t) {
                    $this->telefones[] = $t;
                }
            }
    }
}

?>