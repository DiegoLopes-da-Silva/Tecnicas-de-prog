<?php 

class Festa {
    private array $decoracoes = [];

    public function __construct(
        private string $data_contrato,
        private string $data_festa,
        private float $valor
    ) {}


    public function getDecoracoes() {
        return $this->decoracoes;
    }

    public function getDataContrato() {
        return $this->data_contrato;
    }

    public function getDataFesta() {
        return $this->data_festa;
    }

    public function getValor() {
        return $this->valor;
    }
    
    public function setDecoracoes($decoracoes) {
        $this->decoracoes = $decoracoes;
    }
}

?>