<?php

class Chef extends Pessoa {
    private array $receitas = [];

    public function __construct(
        private string $especialidade = ""
    ) {
        parent::__construct();
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setReceita($receita) {
        if (is_object($receita)) {
            $this->receitas[] = $receita;
        } elseif (is_array($receita)) {
            foreach ($receita as $r) {
                $this->receitas[] = $r;
            }
        }
    }

    public function getReceitas() {
        return $this->receitas;
    }
}
